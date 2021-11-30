<?
require_once("../panel/_inc/glob.php");
include('usercount.php');
?>
<div id="footer1">
    
    <div id="footer1_overlay">
        
        <div class="content"> 
      
        <div style="width: 32%; overflow: hidden; margin: 35px 1% 10px 0px; font-family: verdana; font-size: 0.9em; color: #FFF; float: left;">
     <?
     if(!$logged){
     $session_check = $db->query( "SELECT * FROM `sessions` WHERE `user_id`!='0' GROUP BY `user_id` ORDER BY `stamp` DESC, RAND() LIMIT 14" );
     } else {
    $session_check = $db->query( "SELECT * FROM `sessions` WHERE `user_id`!='0' GROUP BY `user_id` ORDER BY `stamp`, RAND() DESC LIMIT 14" );
     }
     $number = $db->num($session_check);
     ?>
     
     <?
     if(!$logged){
     $session_okay = $db->query( "SELECT * FROM `sessions` WHERE `user_id`!='0' GROUP BY `user_id` ORDER BY `stamp` DESC, RAND()" );
     } else {
    $session_okay = $db->query( "SELECT * FROM `sessions` WHERE `user_id`!='0' GROUP BY `user_id` ORDER BY `stamp`, RAND() DESC" );
     }
     $totaler = $db->num($session_okay);
     ?>
            <?php
  $min=15;
  $max=17;
?>
          <span style="font-weight: bold; text-shadow:5px 5px 5px hgba(255,255,255,0.6);">Currently Online (<? echo $totaler; ?> Users & <? echo rand($min,$max); ?> Guests)</span><br/><br/>
     <?
    while($session_online = $db->assoc( $session_check )){
        $getonline = $db->query( "SELECT * FROM `users` WHERE `id`='{$session_online[user_id]}'" );
        $getonline = $db->assoc( $getonline );
    ?>
<div class="habbobox" id="<? echo $session_online[id]; ?>" style="overflow: hidden" data-toggle="tooltip" data-placement="bottom" rel="tooltip" title="<? echo $getonline['username']; ?>" onclick="profile('<? echo $getonline['username']; ?>')"><img src="       https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $getonline['habbo']; ?>&action=,crr=6&direction=2&head_direction=2&img_format=png&gesture=&headonly=0&size=undefined" style="margin-left: -8px; margin-top: -8px;"></div>
<? } ?>
<? if(!$logged){ ?>
<span onclick="prelogin()" class="onclick""><div class="habbobox" data-toggle="tooltip" data-placement="bottom" rel="tooltip" title="Have You Logged In Yet?"><img src="assets/img/frank.png" width="40" height="43" style="margin-top: 8px;"></div></span>
<? } ?>   
<? if($logged){ ?>
<a class="login" data-fancybox-type="iframe" onclick="activeusers()"><div class="habbobox" data-toggle="tooltip" data-placement="bottom" rel="tooltip" title="More Online Users"><img src="https://www.habbofests.com/V2/uploads/1594585447.gif"  style="margin-top: 10px;"></div></a>
<? } ?>   
        </div>
        <!-- End Online Users -->
        
        <!-- Latest Threads -->
        
                <div style="width: 50%; overflow: hidden; margin: 35px 1% 10px 0px; font-family: verdana; font-size: 0.9em; color: #000; float: left;">
                    <span style="color: #FFF; font-weight: bold; text-shadow:5px 5px 5px hgba(255,255,255,0.6);">Latest Threads</span><br/><br/>
                    
<?php
if($logged){ 


$colorqry = $db->query( "SELECT * FROM usergroups WHERE id = '{$getinfo['displaygroup']}'" );
$clrarray = $db->assoc( $colorqry );

 $color = "{$clrarray[colour]}";

$query1 = $db->query( "SELECT * FROM forum_perms LEFT JOIN forum_threads ON forum_perms.forumid = forum_threads.forumid WHERE forum_perms.viewforum LIKE '%$logged[displaygroup]%' AND forum_perms.viewotherpost LIKE '%$logged[displaygroup]%' AND forum_threads.visible='1' ORDER BY forum_threads.lastposter DESC, forum_threads.sticky DESC LIMIT 6" );
$count = $db->num($query1);
while($child = $db->assoc($query1)){

$query3 = $db->query( "SELECT * FROM `forum_perms` WHERE `forumid`='{$child['forumid']}'" );
$permsa = $db->assoc( $query3 );
$array55 = explode(",", $permsa['viewforum']);
$intersection = count(array_filter(array_intersect($usergroups, $array55)));
if ($intersection >=1) {
$getinfos = $db->query( "SELECT * FROM `users` WHERE `id`='{$child[lastposterid]}'" );
$getinfo = $db->assoc( $getinfos );
$threadtitle = htmlspecialchars_decode(mb_strimwidth($child[title], 0, 15, "..."));

$count =  $db->query( "SELECT * FROM `forum_posts` WHERE `threadid`='{$child[threadid]}' && `visible`='1'" );
$data1 = $db->num($count);
$devide = ceil($data1 / 8);
?>
<div class="threadbox" onclick="viewthread('<? echo $child['threadid']; ?>','<? echo $devide; ?>')"  ><img src="uploads/1519943819.png"><span><b><? if (strlen($child[title]) > 18){ echo substr(trim($child[title]), 0, 18).'...'; } else { echo $child[title]; } ?></b><br/>By <? echo $getinfo['username']; ?></span></div>
<?
}
}
} else {
$query1 = $db->query( "SELECT * FROM forum_perms LEFT JOIN forum_threads ON forum_perms.forumid = forum_threads.forumid WHERE forum_perms.viewforum LIKE '%36%' AND forum_perms.viewotherpost LIKE '%36%' AND forum_threads.visible='1' ORDER BY forum_threads.lastposter DESC, forum_threads.sticky DESC LIMIT 6" );
$count = $db->num($query1);
while($qu1 = $db->assoc($query1)){
    
$threadid = $qu1['threadid'];
$query2 = $db->query( "SELECT * FROM `forum_threads` WHERE `threadid`='{$threadid}'" );

$array55 = explode(",", $qu1['viewforum']);
$intersection = count(array_filter(array_intersect($usergroups, $array55)));
if ($intersection >=1) {
$array2 = $db->assoc($query2);
$threadtitle = htmlspecialchars_decode(mb_strimwidth($array2[title], 0, 15, "..."));

$getinfos = $db->query( "SELECT * FROM `users` WHERE `id`='{$array2[lastposterid]}'" );
$getinfo = $db->assoc( $getinfos );

$count =  $db->query( "SELECT * FROM `forum_posts` WHERE `threadid`='{$array2[threadid]}' && `visible`='1'" );
$data1 = $db->num($count);
$devide = ceil($data1 / 8);
?>
 <div class="threadbox" onclick="viewthread('<? echo $array2['threadid']; ?>','<? echo $devide; ?>')"><img src="uploads/1519943819.png"><span><b><? if (strlen($array2[title]) > 18){ echo substr(trim($array2[title]), 0, 18) . '...'; } else { echo $array2[title]; } ?></b><br/>By <? echo $getinfo['username']; ?></span></div>
<?
}
}
}
?>
                </div>
        
        <!-- End Latest Threads -->
        
                <!-- HabboFests -->
        
                <div style="width: 16%; overflow: hidden; margin: 37px 0px 10px 0px; font-family: verdana; font-size: 0.8em; color: #FFF; float: left; text-align: center;">
                    <br/><br/><br/><div id="footer_fanbox"><a href="https://habbo.com" target="_blank"><img src="uploads/1517632300.png" width="70" height="78"></a><br/><br/>HabboFests &copy <? echo date("Y"); ?><br/><br/><a href="https://twitter.com/HabboFests" target="_blank"><i class="fab fa-twitter" aria-hidden="true" style="margin-right: 10px;"></i></a> <a href="https://www.instagram.com/habbofests/" target="_blank"><i class="fab fa-instagram" aria-hidden="true" style="margin-right: 15px;"></i></a><a href="https://discord.gg/baNrPwu" target="_blank"><i class="fab fa-discord" aria-hidden="true"></i></a></div>
                    
                       </div> </div><br><br><center><p style=" float: left; font-size: 13px; width: 79%; padding: 10px 10px 10px 10px;
    background: rgba(0, 0, 0, 0.2); border-radius: 6px; float: left; color:#FFF; margin-left: 10%;margin-right: 10%; line-height: 1.6;">HabboFests is not affiliated with, endorsed, sponsored, or specifically approved by Sulake Oy or its Affiliates.</br> HabboFests may use the trademarks and other intellectual property of Habbo, which is permitted under Habbo Fan Site Policy.</p></center></div>
                </div>
        
        <!-- End HabboFests -->
        
        </div>
        
    </div>
    
</div>
<!--<div style="background: #5ca0fa; width: 100%; height: 50px; position: relative;">-->
<div id="footer2">
    
        <div id="footer2_overlay">
            
           <div class="content">  <div style="margin: 20px 0px 15px 0px;"><span class="onclick" onclick="pagecall('6')">Home</span> - <span class="onclick" onclick="jobs()">Jobs</span> - <span class="onclick" onclick="contactus()">Contact Us</span> - <span class="onclick" onclick="pagecall('12')">Rules</span> - <span class="onclick" onclick="pagecall('38')">Privacy Policy</span> - <span class="onclick" onclick="pagecall('11')">Disclaimer</span>
           <span style="float: right;" onclick="profile('Rue')" class="onclick">Developed With <i class="fa fa-heart" aria-hidden="true"></i> By Rue</span> 
           </div> </div>
            
        </div>
    
</div>