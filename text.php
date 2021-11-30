<?php
die();
require("../panel/_inc/glob.php");
$habbo = "k1w1kid1";

function getMotto($username){
    $res = file_get_contents("https://www.habbo.com/api/public/users?name={$username}", false, stream_context_create([
        'http' => [
            'user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13',
        ],
    ]));

    $data = json_decode($res, true);

    return $data['motto'];
}

//$motto = $core->clean( getMotto($habbo) );
$motto = getMotto($habbo);

echo "The User " . $habbo . "motto is " . $motto;


?>