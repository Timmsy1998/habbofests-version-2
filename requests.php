<?php
require("../panel/_inc/glob.php");
// Grab the Azuracast API for HabboFests
$post = $core->clean( $_POST['post'] );
if($post){
$statsapi = 'https://radio.habbofests.com/api/nowplaying_static/habbofests_main.json';
$statsdata = file_get_contents($statsapi);
$stats = json_decode($statsdata);

$title = $core->clean($stats->live->streamer_name);
$livecheck = $core->clean($stats->live->is_live);
$listeners = $core->clean($stats->listeners->unique);
$currenttrack = $core->clean($stats->now_playing->song->text);

$req = $core->clean( $_POST['req'] );
    if($req=="undefined"){
        $req = "";
    }
$reqcat = $core->clean( $_POST['djslct'] );
    if($reqcat=="undefined"){
        $reqcat = "";
    }
$djhabbo = $core->clean( $_POST['djhabbo'] );
        if($djhabbo=="undefined"){
        $djhabbo = "";
    }
    
// Check if Offline
if($livecheck=="false"){
?>
	<center><div class="aviso" class="alert onclick" style="width: 90%; margin: 5px 5px 5px 5px;">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Oh No! No DJ is currently online :(</div></center>
<?
}else{
		$query = $db->query( "SELECT * FROM `users` WHERE `username`='$title'" );
		$array  = $db->assoc( $query );
        $num = $db->num( $query );
    if($num>=1){
        if($req=="" OR $reqcat=="" OR $djhabbo==""){
?>
<center><div class="aviso" class="alert onclick" style="width: 90%; margin: 5px 5px 5px 5px;">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> A field was left blank! :(</div></center>
<?
        } else {
$db->query( "INSERT INTO `requests` VALUES (NULL,'$reqcat','$array[id]','$djhabbo','$req','$time','$ip') ");

$DJ = $array[id];
$query9 = $db->query( "SELECT * FROM requests WHERE `ip`='{$ip}' ORDER BY `id` DESC LIMIT 1" );
$array9 = $db->assoc( $query9 );    
$requestid = $array9['id'];
            
				$db->query( "INSERT INTO `notifications` VALUES (NULL,'{$DJ}','$logged[id]','$requestid','req1','0','{$time}')" );
        ?>
	<center><div class="aviso" class="alert onclick" style="width: 90%; margin: 5px 5px 5px 5px;">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Your request has been sent to the on air DJ! :)</div></center>
<?
        }
    } else {
        ?>
	<center><div class="aviso" class="alert onclick" style="width: 90%; margin: 5px 5px 5px 5px;">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Oh No! DJ not found :(</div></center>
<?
    }
}
} else {
?>
<link rel="stylesheet" href="assets/css/style.css?v=39424541" type="text/css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
function djreq(){
     $.ajax({
    type: "POST",
    url: "requests.php",
    data: "post=1&req=" +  $("#dj_textarea").val() + "&djslct=" +  $("#dj_slct").val() +"&djhabbo=" + $("#dj_habbo").val(),
     success: function(msg){
          $("#reqsuccess").html(msg);
     }
});
}
</script>
<table border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
<tr>
<td class="blue_box_top_left handle"></td>
<td class="blue_box_top_mid handle"><p>Radio Requests</p></td>
<td class="blue_box_top_right handle onclick" onclick="closeall()"></td>
</tr>
<tr>
<td class="blue_box_mid_left"></td>
<td class="blue_box_mid_mid">
<div id="reqsuccess"> </div>
<br/><center><img src="https://www.habbofests.com/V2/uploads/1517007787.gif"><br/><br/>
    <span style="font-family: verdana; font-size: 0.8em;">
   
<br><br>
<span style="font-weight: 700">Request a song, shoutout or take part in a competition:</span><br><br>
            
            
            
<? if($loggedin)
{
    ?>
<input style="width: 40%;" class="contactus_input" type='text' placeholder='<? echo $logged[username]; ?>' value='<? echo $logged[username]; ?>' name="loggedUser" disabled><br><br>
<input style="width: 40%;" class="contactus_input" type='hidden' placeholder='<? echo $logged[username]; ?>' value='<? echo $logged[username]; ?>' id="dj_habbo">
   <?
}
            else
            {
                ?>
            <input style="width: 40%;" class="contactus_input" type='text' placeholder="Your Habbo" id="dj_habbo"><br><br>
            <?
            }
            ?>
            
            
            
        <select style="width: 42%;" class="contactus_dropdown" id="dj_slct">

        <option value="request">Request a Song</option>
            <option value="competition">Enter Competition</option>
            <option value="shoutout">Request a Shoutout</option>
        </select>
        <br><br>
        <textarea name="dj_textarea" id="dj_textarea" class="contactus_textarea" style="width: 40%;" placeholder="Your request"></textarea><br/>

        <button class="btn btn-info" onclick="djreq()" style="width: 42%;">Request</button>
            




    </center>
    </td>
<td class="blue_box_mid_right"></td>
</tr>
<tr>
<td class="blue_box_bot_left"></td>
<td class="blue_box_bot_mid"></td>
<td class="blue_box_bot_right"></td>
</tr>
</table>
<? } ?>