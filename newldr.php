<?php
require("../panel/_inc/glob.php");
$page = 22;
?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" ></script>
<script type="text/javascript">
$(function(){
	breadcrumb('<? echo $page; ?>');
});
$('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 6000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});
</script>
<?

// THREADS
     $year = date("Y");
    $query1 = $db->query( "SELECT * FROM `timetable`");	
    $num1 = $db->num( $query1 );
// USERS
    $query2 = $db->query( "SELECT * FROM `users` WHERE `email`!='$marketingemail'");
    $query7 = $db->query( "SELECT * FROM `users` WHERE `email`!='$marketingemail'");
    $num2 = $db->num( $query2)+477;
// POSTS
    $query3 = $db->query( "SELECT * FROM `forum_posts` WHERE `visible`='1'" );	
    $num3 = $db->num( $query3 );
// POSTS
    $year = date("Y");
    $query4 = $db->query( "SELECT * FROM `events_timetable` WHERE `approved`='1' AND `year`='$year'" );	
    $num4 = $db->num( $query4 )+213;
// COMMENTS
    $query5 = 0;	
    $num5 = $db->num( $query5 )+450;
// STAFF
    $query6 = $db->query( "SELECT * FROM `users` WHERE `displaygroup`!='1' AND `displaygroup`!='30' AND `displaygroup`!='36' AND `displaygroup`!='38'" );	
    $num6 = $db->num( $query6 );
?>
<script src="../../js/countup.js"></script>
<div style="display: flex; justify-content: space-between;">
<div class="box cf leaderboard" style="margin-left: 2px;" ><img src="https://www.habborator.org/archive/icons/medium/me_dance_active.gif" style="margin-bottom: 5px; margin-left: 2px;"><br/><span class="textsmart-font"><b><span class="counter" data-count="<? echo $num1; ?>">0</span> Radio Slots</b></span></div>
<div class="box cf leaderboard"> <img src="https://www.habbofests.com/V2/uploads/1586636383.gif" style="margin-bottom: 3px;"><br/><span class="textsmart-font"><b><span class="counter" data-count="<? echo $num2; ?>">0</span> Users</b></span></div>
<div class="box cf leaderboard"> <img src="uploads/1519943819.png" style="margin: 3px 0px 3px 0px;"><br/><span class="textsmart-font"><b><span class="counter" data-count="<? echo $num3; ?>">0</span> Forum Posts</b></span></div>
<div class="box cf leaderboard"> <img src="assets/img/stickers/battle1.gif" style="margin: 10px 0px 4px 0px;"><br/><span class="textsmart-font"><b><span class="counter" data-count="<? echo $num4; ?>">0</span> Events Hosted</b></span></div>
<div class="box cf leaderboard"> <img src="assets/img/icon/comments.png" style="margin: 3px 0px 3px 0px;"><br/><span class="textsmart-font"><b><span class="counter" data-count="<? echo $num5; ?>">0</span>+ Discord Users</b></span></div>
<div class="box cf leaderboard" style="margin-right: 2px;" > <img src="assets/img/icon/tinyhumans.png" style="margin: 3px 2px 0px 0px;"><br/><span class="textsmart-font"><b><span class="counter" data-count="<? echo $num6; ?>">0</span> Staff Members</b></span></div>
</div>

<div style="display: flex; justify-content: space-between;">
<div style="margin-left: 2px; width: 32%;">
    
<div class="box cf"style="width: 95%; margin-right: 1%; margin-bottom: -5px; margin-right: 1%; position: relative;">
<div class="title azul" style="font-weight: 500; margin-bottom: 5px;"><div class="linha"><i class="fa fa-trophy" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i> Top Posters</div></div>

<?
    $row = 0.8;
$leaderboard1 = $db->query( "SELECT * FROM `users` WHERE `displaygroup`!='30' && `email`!='$marketingemail' ORDER BY `posts` DESC,`username` ASC LIMIT 13");
while($leaderboard1_array = $db->assoc( $leaderboard1 )){
?>
<div style="clear: both;">
<div style="background: rgba(91, 178, 210, <? echo $row; ?>); border-radius: 50%; width: 40px; height: 40px; float: left; overflow: hidden; text-align: center; margin-bottom: 3px; border: 1px solid grey;">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $leaderboard1_array['habbo']; ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=m" style="margin-left: -10px; margin-top: -15px; height: 100px;">
</div>
<div class="rounded_right" style="width: 250px; height: 25px; float: left; margin-bottom: 3px; padding: 15px 0px 0px 10px;"><? echo username($leaderboard1_array['id']); ?> has <? echo $leaderboard1_array['posts']; ?> <? if( $leaderboard1_array['posts'] == 1){ ?>post<? }else{ ?>posts<? } ?></div>
</div>
<? 
$row = $row - 0.1;
} 
?>
</div>
<div class="box cf"style="width: 95%; margin-bottom: 5px; margin-right: 1%; position: relative;">
<div class="title roxo" style="font-weight: 500; margin-bottom: 5px;"><div class="linha"><i class="fa fa-heart" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i> Forum Likes Leaderboard</div></div>

<?
$row = 0.8;
$leaderboard1 = $db->query( "SELECT * FROM `users` WHERE `displaygroup`!='30' && `email`!='$marketingemail' ORDER BY `likes` DESC LIMIT 9");
while($leaderboard1_array = $db->assoc( $leaderboard1 )){
?>
<div style="clear: both; ">
<div style="background: rgba(235, 191, 15, <? echo $row; ?>); border-radius: 50%; width: 40px; height: 40px; float: left; overflow: hidden; text-align: center; margin-bottom: 7px; border: 1px solid grey;">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $leaderboard1_array['habbo']; ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=m" style="margin-left: -10px; margin-top: -15px; height: 100px;">
</div>
<div class="rounded_right" style="width: 80%; height: 25px; float: left; margin-bottom: 3px; padding: 15px 0px 0px 10px;"><? echo username($leaderboard1_array['id']); ?> has <? echo $leaderboard1_array['likes']; ?> thread likes</div>
</div>
<? $row = $row - 0.12;
} 
?>
</div>


<!--<div class="box cf"style="width: 95%; margin-bottom: -5px; margin-right: 1%; position: relative;">
<div class="title roxo" style="font-weight: 500; margin-bottom: 5px;"><div class="linha"><i class="fa fa-user-tag" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i> Lottery Winners</div></div>

<?
$row = 0.9;


$leaderboard1 = $db->query( "SELECT * FROM `lottery` WHERE `win`='1' ORDER BY `lotoid` DESC LIMIT 6");
$leaderboard1_num = $db->num($leaderboard1);
while($leaderboard1_array = $db->assoc( $leaderboard1 )){
        if($leaderboard1_num>=1){
            
  $leaderboard2 = $db->query( "SELECT * FROM `users` WHERE `id`='$leaderboard1_array[userid]'");
$leaderboard2_assoc = $db->assoc($leaderboard2);          
?>
<div style="clear: both;">
<div style="background: rgba(252, 172, 69, <? echo $row; ?>); border-radius: 50%; width: 40px; height: 40px; float: left; overflow: hidden; text-align: center; margin-bottom: 3px; border: 1px solid grey;">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $leaderboard2_assoc['habbo']; ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=s">
</div>
<div class="rounded_right" style="width: 80%; height: 25px; float: left; margin-bottom: 3px; padding: 15px 0px 0px 10px;"><? echo username($leaderboard2_assoc['id']); ?> won the lottery</div>
</div>
<? $row = $row - 0.13;
} 
}
?>
</div>--!>

</div>
<!-- end of left -->

<div style="pwidth: 32%;">
<div class="box cf"style="width: 110%; margin-bottom: -5px; margin-left: -21px; margin-right: 1%; position: relative;">
<div class="title laranja" style="font-weight: 500; margin-bottom: 5px;"><div class="linha"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i> New Registrations</div></div>

<?
$row = 0.8;
$leaderboard1 = $db->query( "SELECT * FROM `users` WHERE `displaygroup`!='30' && `email`!='$marketingemail' ORDER BY `joindate` DESC LIMIT 5");
while($leaderboard1_array = $db->assoc( $leaderboard1 )){
?>
<div style="clear: both;">
<div style="background: rgba(203, 67, 117, <? echo $row; ?>); border-radius: 50%; width: 40px; height: 40px; float: left; overflow: hidden; text-align: center; margin-bottom: 3px; border: 1px solid grey;">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $leaderboard1_array['habbo']; ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=m" style="margin-left: -10px; margin-top: -15px; height: 100px;">
</div>
<div class="rounded_right" style="width: 82%; height: 25px; float: left; margin-bottom: 3px; padding: 15px 0px 0px 10px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><? echo username($leaderboard1_array['id']); ?> joined <? echo ago($leaderboard1_array['joindate']); ?> ago</div>
</div>
<? 
$row = $row - 0.2;
} 
?>
</div>

<div class="box cf"style="width: 110%; margin-bottom: -5px; margin-left: -21px; margin-right: 1%; position: relative;">
<div class="title roxo" style="font-weight: 500; margin-bottom: 5px;"><div class="linha"><i class="fa fa-user-tag" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i> Lottery Winners</div></div>

<?
$row = 0.9;


$leaderboard1 = $db->query( "SELECT * FROM `lottery` WHERE `win`='1' ORDER BY `lotoid` DESC LIMIT 6");
$leaderboard1_num = $db->num($leaderboard1);
while($leaderboard1_array = $db->assoc( $leaderboard1 )){
        if($leaderboard1_num>=1){
            
  $leaderboard2 = $db->query( "SELECT * FROM `users` WHERE `id`='$leaderboard1_array[userid]'");
$leaderboard2_assoc = $db->assoc($leaderboard2);          
?>
<div style="clear: both;">
<div style="background: rgba(252, 172, 69, <? echo $row; ?>); border-radius: 50%; width: 40px; height: 40px; float: left; overflow: hidden; text-align: center; margin-bottom: 3px; border: 1px solid grey;">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $leaderboard2_assoc['habbo']; ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=m" style="margin-left: -10px; margin-top: -15px; height: 100px;">
</div>
<div class="rounded_right" style="width: 80%; height: 25px; float: left; margin-bottom: 3px; padding: 15px 0px 0px 10px;"><? echo username($leaderboard2_assoc['id']); ?> won the lottery</div>
</div>
<? $row = $row - 0.13;
} 
}
?>
</div>




<div class="box cf"style="width: 110%; margin-bottom: -5px;margin-left: -21px; margin-right: 1%; position: relative;">
<div class="title laranja" style="font-weight: 500; margin-bottom: 5px;"><div class="linha"><i class="fa fa-heart" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i> Most Loved Radio Staff</div></div>

<?
$row = 0.8;
$leaderboard8 = $db->query( "SELECT * FROM `users` WHERE `displaygroup`='4' OR `displaygroup`='2' OR `displaygroup`='5' OR `displaygroup`='6' OR `displaygroup`='10' OR `displaygroup`='18' OR `displaygroup`='19' OR `displaygroup`='42' OR `displaygroup`='46' OR `displaygroup`='64' OR `displaygroup`='83' ORDER BY `loves` DESC,`displaygroup` DESC LIMIT 10");
while($leaderboard8_array = $db->assoc( $leaderboard8 )){
?>
<div style="clear: both;">
<div style="background: rgba(37, 177, 128, <? echo $row; ?>); border-radius: 50%; width: 40px; height: 40px; float: left; overflow: hidden; text-align: center; margin-bottom: 3px; border: 1px solid grey;">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $leaderboard8_array['habbo']; ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=m" style="margin-left: -10px; margin-top: -15px; height: 100px;">
</div>
<div class="rounded_right" style="width: 80%; height: 25px; float: left; margin-bottom: 3px; padding: 15px 0px 0px 10px;"><? echo username($leaderboard8_array['id']); ?> has <? echo $leaderboard8_array['loves']; ?> radio loves</div>
</div>
<? 
$row = $row - 0.1;
} 
?>
</div>

</div>


<!-- end of middle -->

<div style="width: 33%; margin-right: 2px; ">

<div class="box cf"style="width: 95%; margin-bottom: -5px; margin-right: 1%; position: relative;">
<div class="title roxo" style="font-weight: 500; margin-bottom: 5px;"><div class="linha"><i class="fa fa-coins" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i> HF Points Leaderboard</div></div>

<?
$row = 0.8;
$leaderboard1 = $db->query( "SELECT * FROM `users` WHERE `displaygroup`!='30' && `email`!='$marketingemail' ORDER BY `activity` DESC LIMIT 8");
while($leaderboard1_array = $db->assoc( $leaderboard1 )){
?>
<div style="clear: both;">
<div style="background: rgba(235, 191, 15, <? echo $row; ?>); border-radius: 50%; width: 40px; height: 40px; float: left; overflow: hidden; text-align: center; margin-bottom: 3px; border: 1px solid grey;">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $leaderboard1_array['habbo']; ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=m" style="margin-left: -10px; margin-top: -15px; height: 100px;">
</div>
<div class="rounded_right" style="width: 80%; height: 25px; float: left; margin-bottom: 3px; padding: 15px 0px 0px 10px;"><? echo username($leaderboard1_array['id']); ?> has <? echo  $actpoints = str_replace(".", ",", $leaderboard1_array['activity']) ?> points</div>
</div>
<? $row = $row - 0.12;
} 
?>
</div>

<div class="box cf"style="width: 95%; margin-bottom: -5px; margin-right: 1%; position: relative;">
<div class="title roxo" style="font-weight: 500; margin-bottom: 5px;"><div class="linha"><i class="fa fa-user-tag" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i> Top Referrer</div></div>

<?
$row = 0.6;
$leaderboard1 = $db->query( "SELECT id, username, habbo, refer, COUNT(*) as total FROM users WHERE `refer`!='' GROUP BY `refer` ORDER BY COUNT(*) DESC LIMIT 5");
while($leaderboard1_array = $db->assoc( $leaderboard1 )){
    $refer = $leaderboard1_array[refer];
    $la1 = $db->query( "SELECT id, username, habbo FROM users WHERE username='{$refer}' OR habbo='{$refer}'");
    $la1_array = $db->assoc( $la1 );
    $la1_num = $db->num( $la1 );
    if($la1_num>=1){
        $num_rows = $leaderboard1_array['total']; 
?>
<div style="clear: both;">
<div style="background: rgba(245, 45, 225, <? echo $row; ?>); border-radius: 50%; width: 40px; height: 40px; float: left; overflow: hidden; text-align: center; margin-bottom: 3px; border: 1px solid grey;">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $la1_array['habbo']; ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=m" style="margin-left: -10px; margin-top: -15px; height: 100px;">
</div>
<div class="rounded_right" style="width: 80%; height: 25px; float: left; margin-bottom: 3px; padding: 15px 0px 0px 10px;"><? echo username($la1_array['id']); ?> has <? echo $leaderboard1_array['points']; ?> referred <? echo $num_rows; ?> users</div>
</div>
<? $row = $row - 0.1;
} 
}
?>
</div>

<div class="box cf"style="width: 95%; margin-bottom: -5px; margin-right: 1%; position: relative;">
<div class="title laranja" style="font-weight: 500; margin-bottom: 5px;"><div class="linha"><i class="fa fa-heart" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i> Most Loved Profile</div></div>

<?
$row = 0.8;
$leaderboard9 = $db->query( "SELECT * FROM `users` WHERE `email`!='marketing@habbofests.com'  && `displaygroup`!='30' && `locked`='no' ORDER BY `profilepoints` DESC, RAND() LIMIT 8");
while($leaderboard9_array = $db->assoc( $leaderboard9 )){
?>
<div style="clear: both;">
<div style="background: rgba(95, 137, 221, <? echo $row; ?>); border-radius: 50%; width: 40px; height: 40px; float: left; overflow: hidden; text-align: center; margin-bottom: 3px; border: 1px solid grey;">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?&user=<? echo $leaderboard9_array['habbo']; ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=m" style="margin-left: -10px; margin-top: -15px; height: 100px;">
</div>
<div class="rounded_right" style="width: 80%; height: 25px; float: left; margin-bottom: 3px; padding: 15px 0px 0px 10px;"><? echo username($leaderboard9_array['id']); ?>'s Profile loved <? echo $leaderboard9_array['profilepoints']; ?> times</div>
</div>
<? 
$row = $row - 0.1;
} 
?>
</div>

</div>
</div>