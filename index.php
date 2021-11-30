<?php
require_once("../panel/_inc/glob.php");
if($logged){
    $usergroupcolor = $db->query( "SELECT * FROM `usergroups` WHERE `id`='{$logged[displaygroup]}'"); 
   $usergroup = $db->assoc($usergroupcolor);
} 
$system['sitemaint'] = 1;
if($system['sitemaint']==0 && !$logged['id']){
    ?>
<!DOCTYPE html> 
<html lang="en">
<head>
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "mobile.php";
}
//-->
</script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title><? echo $system['sitename']; ?> ~ The Festival of Habbo</title>
	<meta name="description" content="<? echo $system['sitename']; ?> is an Unofficial Habbo fansite owned by monekymanbubby and Mrb.b, the site aims to provide you with guides, the latest news and gossip as well as regular events and radio shows.">
	<meta name="keywords" content="<? echo $system['sitename']; ?>, <? echo $siteurl; ?>, Habbo Fansite, Habbo Unofficial Fansite, fansite, Habbo forum, Habbo radio, radio fansite, Habbo Badge, Habbo Badge Answers, Habbo Answers, Habbo Fansite, UnOfficial Fansite, Habbo Hotel, Habbo News, Habbo Rumours, Habbo Guides, Badge Guides, Habbo Badge Guides" />
	<link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
<style type='text/css'>
html, body{
	overflow: hidden;
	background: #F1F1F1;

}
#div1{
	position: absolute;
	background: #F9F9F9;
	width: 40%;
	height: auto;
	padding: 20px;
	border-radius: 4px;
	left: 50%;
	margin-left: -20%;
	top: 100px;
}
#div2{
	background: #F1F1F1;
	width: 98%;
	height: auto;
	border-radius: 4px;
	font-family: verdana;
	font-size: 0.8em;
	color: 5E5E5E;
}
#text-padding{
	padding: 20px;
}
a{
	color: #5E5E5E;
	font-weight: bold;
	font-decoration: none;
	text-decoration: none;
}
a:visited{
	color: #5E5E5E;
	font-weight: bold;
	font-decoration: none;
	text-decoration: none;
}
</style>
</head><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><body>

<div id='div1'>
    <center><img src="../HFsmall.png"></center>
    <br/><div id='div2'><div id='text-padding'>Happy HabboFestsoween!!<br/><br/>Are you ready for the launch of your life? Click <a target="_blank" href="https://www.habbo.com/room/76991550">here</a> to join the party, over at our halloween prom!<br/><br/>The V2.6 will be here shortly, tune in for the launch show!<br/> <img style="float: right; margin-top: -100px; margin-right: -100px;"src="https://www.habbofests.com/V2/uploads/1604171050.gif"><center><audio
        controls
        src="https://radio.habbofests.com/radio/8020/autodj?1601464830">
            Your browser does not support the
            <code>audio</code> element.
    </audio></center>
  <center>
      <?
    $myip = $_SERVER['REMOTE_ADDR'];
        $query = $db->query( "SELECT * FROM radio_settings WHERE ipaddress = '{$myip}'" );
    $num = $db->num( $query );
    $array = $db->assoc ($query);
        ?>
      <audio id="radio_player" src="https://radio.habbofests.com/radio/8020/autodj?1601464830"></audio></center></div>
    
    </div></div>	
</body></html>
    
 <? 
} else {


$page = $core->clean($_GET['p']);
if(!$page){
	$page = "home";
}
$pagegrab = $db->query( "SELECT * FROM `site_pages` WHERE `pageid`='{$page}'");
$pages = $db->assoc( $pagegrab );

//require_once '../services/translator/src/gtranslate.php';
//$gt=new gtranslate();
?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" /><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179509259-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179509259-1');
</script>
<script data-ad-client="ca-pub-4956510897105939" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<title><? echo $system['sitename']; ?> ~ New Beginnings</title>
	<meta name="description" content="<? echo $system['sitename']; ?> is an Unofficial Habbo fansite owned by <? echo $system['ownerhabbo']; ?>, the site aims to provide you with guides, the latest news and gossip as well as regular events and radio shows.">
	<meta name="keywords" content="<? echo $system['sitename']; ?>, <? echo $siteurl; ?>, Habbo Fansite, Habbo Unofficial Fansite, fansite, Habbo forum, Habbo radio, radio fansite, Habbo Badge, Habbo Badge Answers, Habbo Answers, Habbo Fansite, UnOfficial Fansite, Habbo Hotel, Habbo News, Habbo Rumours, Habbo Guides, Badge Guides, Habbo Badge Guides" />
	<link rel="icon" style="filter: drop-shadow(1px 1px 0 black) drop-shadow(-1px 1px 0 black) drop-shadow(1px -1px 0 black) drop-shadow(-1px -1px 0 black);" href="assets/img/1604015261 (2) (1).png" type="image/x-icon">
<!-- Styles -->
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/buttons.css" type="text/css">
	<link rel="stylesheet" href="assets/css/forum.css" type="text/css">
	<link rel="stylesheet" href="assets/css/boxes.css" type="text/css">
	<link rel="stylesheet" href="assets/css/blue.css" type="text/css" id="skin">
	<link rel="stylesheet" href="assets/css/spectrum.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css?v=39424541" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/brands.min.css" type="text/css">
    <link rel="stylesheet" href="assets/img/backgrounds/backgrounds.css" type="text/css" media="screen">
	<link rel="stylesheet" href="assets/img/stickers/stickers.css" type="text/css" media="screen">
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "mobile/mobile.php";
}
//-->
</script>
<script type="text/javascript">
$(document).ready(function() {
    $(window).on('popstate', function() {
        var file = window.location.href;
var res2 = file.split("/");
var res = res2[4];
var parts = res.split("-");
if (parts === undefined || parts.length == 0) {
var length = 1;
} else {
var length = parts.length;
}
if (parts[0] == "forum" ){
      
      if(parts[1] == "folder" && length>1) {
          
          if(parts[3] == "") {
              var parts3 = "1";
          } else {
              var parts3 = parts[3];
          }
      threads(parts[2],parts3);
      } else if (parts[1] == "latest" && length>1) {
          
    latest();
     } else if (parts[1] == "post" && length>1) {
         viewpost(parts[2]);
      } else if (parts[1] == "viewthread" && length>1) {
          
          if(parts[3] == "") {
              var parts3 = "1";
          } else {
              var parts3 = parts[3];
          }
        viewthread(parts[2],parts3);
          
      } else if(parts[1] == "editpost" && length>1) {
          
    editpost(parts[2]);
          
      } else if(parts[1] == "newthread" && length>1) {
          
    composet(parts[2]);
          
      } else if(length == 1) {    

    forum();
    
      }
      
    
} else {
    
    if(parts[0] == "questview") {
          
        viewquest(parts[1],parts[2]);
    
      } else if(parts[0] == "media") {
          
        article(parts[1]);
          
      } else if(parts[0] == "quests") {
          
        quests(parts[1]);
          
      } else if(parts[0] == "viewticket") {
          
	if ( length == 1){
	
	contactus();
	
	} else {
	    
    ticketview(parts[1]);
	
	}
	
      } else if(parts[0] == "contactus") {
          
         contactus();
          
      } else if(parts[0] == "Profile") {
          
    profile(parts[1]);
          
      } else if(parts[0] == "Creative") {
          
    profile(parts[1]);
          
      } else if(parts[0] == "home") {
          
    pagecall('6');
    
      } else if(parts[0] == "ourteam") {
          
    pagecall('3');
    
      } else if(parts[0] == "abouthf") {
          
    pagecall('46');
    
      } else if(parts[0] == "timetable") {
    
    radiotime('');
    
      } else if(parts[0] == "permshows") {
    
    pagecall('35');
    
      } else if(parts[0] == "waystolisten") {
    
    pagecall('45');
    
      } else if(parts[0] == "imager") {
    
    pagecall('42');
    
      } else if(parts[0] == "leaderboards") {
    
    leaderboards();
    
      } else if(parts[0] == "thejournal") {
    
    pagecall('2');
    
      } else if(parts[0] == "games") {
    
    pagecall('44');
    
      } else if(parts[0] == "games") {
    
    pagecall('44');
    
      } else if(parts[0] == "rules") {
    
    pagecall('12');
    
      } else if(parts[0] == "rules") {
    
    pagecall('12');
          
}
}
      
});
      
    });
$(document).ready(function() {
    useralerts();
    <?
	// Forum Params
	$parts = explode('-', $page);
	// End Forum Params
	if ($parts[0]=="forum"){
		if($parts[1]=="folder"){
		?>
	threads('<? echo $parts[2]; ?>','<? if($parts[3]){ echo $parts[3]; }else{ echo"1"; } ?>');
		<?
		} elseif($parts[1]=="viewthread") {
			if($parts[3]=="" OR $parts[3]=="1"){
			?>
			viewthread('<? echo $parts[2]; ?>','1');
			<?
			} else{
				?>
			viewthread('<? echo $parts[2]; ?>','<? echo $parts[3]; ?>');
				<?
			}
		} elseif($parts[1]=="editpost") {
			?>
			editpost('<? echo $parts[2]; ?>');
			<?
        } elseif($parts[1]=="post") { ?>
		viewpost('<? echo $parts[2]; ?>');
		<? } elseif($parts[1]=="newthread") { ?>
		composet('<? echo $parts[2]; ?>');
		<? } elseif(!$parts[1]) {
			echo"forum(forum);";
		}
		} else {
	if ($parts[0]=="questview"){
		?>
	viewquest('<? echo $parts[1]; ?>','<? echo $parts[2]; ?>');
	<?
	} else {
		if ($parts[0]=="media"){
		?>
	article('<? echo $parts[1]; ?>');
	<?
	} else {
	if ($parts[0]=="quests"){
		?>
	quests('<? echo $parts[1]; ?>');
	<?
	} else {
    if ($parts[0]=="viewticket"){
		if($parts[1]==""){
	?>
	contactus();
	<?
		} else {
	?>
    ticketview('<? echo $parts[1]; ?>');
    <?
		}
	}else{
	if ($parts[0]=="Profile"){ ?>
    profile('<? echo $parts[1]; ?>');
	<?
	}else{
	if ($parts[0]=="Creative"){ ?>
    profile('<? echo $parts[1]; ?>');
    <? }else{
	if($pages['link']!=""){ 
	echo $pages['link'];
	} else { ?>
	pagecall('<? echo $pages['id']; ?>');
		<? }}}}}}}} ?>
});

var items = document.querySelectorAll('.circle a');

for(var i = 0, l = items.length; i < l; i++) {
  items[i].style.left = (50 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
  
  items[i].style.top = (50 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
}

document.querySelector('.menu-button').onclick = function(e) {
   e.preventDefault(); document.querySelector('.circle').classList.toggle('open');
}
</script>
<script src="https://unpkg.com/interactjs/dist/interact.min.js"></script>
    <style>
    .hidden{
    margin-top: -35px;
        height: 0px;
    -webkit-transition:height, 0.5s linear;
    -moz-transition: height, 0.5s linear;
    -ms-transition: height, 0.5s linear;
    -o-transition: height, 0.5s linear;
    transition: height, 0.5s linear;
        }
    .open {
        height:35px;
     -webkit-transition:height, 0.5s linear;
    -moz-transition: height, 0.5s linear;
    -ms-transition: height, 0.5s linear;
    -o-transition: height, 0.5s linear;
    transition: height, 0.5s linear;
    }
    </style>
<script type="text/javascript">
$(function () {
$('[data-toggle="tooltip"]').tooltip();
$( ".boxbg_container" ).draggable();
$( ".boxbg_container" ).draggable({ handle: ".handle" });
});
</script>

<style> 
#load{
    width:100%;
	min-height: 100%;
    max-height:200%;
    position:fixed;
    z-index:9999;
	opacity: 0.9;
    background:url("https://thumbs.gfycat.com/AssuredZealousAmericanmarten-size_restricted.gif") no-repeat rgba(0,0,0,0.25);
	background-size: 100%;
}
    </style>	

<script>
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('main').style.visibility="hidden";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('main').style.visibility="visible";
      },1000);
  }
}
	</script>

<script>
window.onload = function() {
  var context = new AudioContext();
}
</script>
</head>
<!--<body style="background: #f0f0f0;">!-->
<body >

<div id="load"></div>

<div class="fancybox"> </div>

<div class="boxbg" id="boxbg" onclick="closeall()" title="Click anywhere to close"> </div>
<div class="boxbg_container" style="width: 600px; height: auto; position: fixed; left: 50%; top: 100px; margin-left: -300px;" id="loadbox">
</div>

<div id="useralerts"> </div>
    
<div id="overlay" onclick="popupclose()"> </div>
<div id="popupmod"> </div>
    
<? if($logged){ $userid = $logged[id]; if(hasGroup('13', $userid)){ ?><div id="moddash"> </div><div id="moddash2"> </div><div id="spacercf" style="top: 95%;"> </div><div id="spacercf2" class="onclick" style="top: 95%;" onclick="modtool('home','')"><img src="uploads/mod_1.gif"></div><? }           
if(hasGroup('84', $userid)){ ?>
    <div id="minimodtool" style="display: none; top: 95%; !important; position: fixed; z-index: 99; width: auto; height: auto;"> </div>
    <div style="position: fixed;top: 95%; right: 130px; z-index: 100;" id="minimodb"> </div>
<? }} ?>
    
    
    
<nav  >

	<div class="xcontent" style="	box-shadow: inset 0 3px #FFF, inset 1px 0 rgba(255,255,255,0.0);">
	
	
	
		<ul>	
	
					<?php
if(!$logged['id']){
    ?>
	
				<li class="home onclick" style="width: 130px;	inset 0 3px rgb(185 185 185)	background: linear-gradient(360deg, rgba(62,62,62,0.8) 0%, rgba(102,102,102,0.8) 100%); ">
				<div style="  text-align: center; float: right !important; height: 70px;margin-left: 15px !important; margin-top: 23px; margin-right: 15px !important;"></div>
			
				
			</li>
			
			<?} ?>
			
			
				<?php
if($logged['id']){
    ?>
		<li class="home onclick" style="width: 133px; padding: 0px; margin-left: 0px;	margin-right: 0px; inset 0 3px rgb(185 185 185);">
				<div class="msg"  style="  height: 70px;margin-left: 0px !important; margin-top: 23px;"><i class="text-align: right;	fas fa-user-friends" style="margin-left: 5px;"></i><? echo $logged['username']; ?><i class="fas fa-angle-down" style="margin-left: 5px; "></i></div>
				
	
				
				
				<ul style="margin-left: -10px;">
		
					<?php if($logged['displaygroup']!==1) { ?>
							<li onclick=" window.open('https://habbofests.com/panel');" >Staff Panel</li><? } ?>
							
								<?php if(hasgroup('4',$logged['id'])) { ?>
							<li style="background-color: #edf8ff; border-radius: 3px;" onclick="window.location = 'forum-viewthread-3070-1';" >Mgmt Handbook</li><? } ?>
						
							
							
							
							<?php if(hasgroup('28',$logged['id'])) { ?>
							<li style="border-radius: 3px;background-color: #edf8ff;" onclick="window.location = 'forum-viewthread-41-1';" >Graphics Handbook</li><? } ?>
							
						
							
					<li <? if($logged['id']){ ?>onclick="notifications()"<? }else{ ?>onclick="login()"<? } ?>>Notifications</li>
						<li <? if($logged['id']){ ?>onclick="userset('home')"<? }else{ ?>onclick="login()"<? } ?>>Settings</li>
					
						
					<li <? if($logged['id']){ ?>onclick="profile('<? echo $logged['username']; ?>')"<? }else{ ?>onclick="userset('home')"<? } ?>>My Profile</li>
					
				
							
							
		<li style="border-radius: 3px; background-color: #f0f0f0; "<? if($logged['id']){ ?>onclick="pagecall('37')"<? }else{ ?>onclick="userset('home')"<? } ?>>Log Out</li>
		
				</ul>
			
			
			</li>
		<li class="home " style="padding: 0px; margin-left: -25px;	margin-right: 0px; inset 0 3px rgb(185 185 185);">
				<div class="msg"  style="  font-size: 13px; height: 70px; margin-left: 0px !important; margin-top: 23px;"><img src="http://www.habbofests.com/V2/uploads/1604015261.png" style="filter: drop-shadow(0.5px 0.5px 0 black) drop-shadow(-0.5px 0.5px 0 black) drop-shadow(0.5px -0.5px 0 black) drop-shadow(-0.5px -0.5px 0 black); margin-top: -12px; margin-bottom: -10px; margin-left: 0px; height: 35px;"><? echo str_replace(".", ",", $logged[activity]) ?></div>
				
			
			
			</li><?} ?>	
			
			
			<li class="home onclick" style="background: linear-gradient(360deg, rgba(62,62,62,1) 0%, rgb(78,78,78,1) 100%); 
			
			box-shadow: inset 0 3px #FFF, 0 1px rgba(0,0,0,0.12), 0 2px 10px rgba(0,0,0,0.1); 
	box-shadow: inset 0 3px #FFF, inset 2px 0 rgba(0,0,0,0.2), 2px 0 rgba(0,0,0,0.2);">
				<div onclick=" window.open('https://habbofests.com/discord');" class="msg"  style=" height: 70px;margin-left: 15px !important; margin-top: 15px; margin-right: 5px !important;"><i class="fab fa-discord fa-2x" style="filter: drop-shadow(0.5px 0.5px 0 black) drop-shadow(-0.5px 0.5px 0 black) drop-shadow(0.5px -0.5px 0 black) drop-shadow(-0.5px -0.5px 0 black);"></i></div>
			
				
			</li>
		
			
<li class="home onclick"  style="width: 2px;		box-shadow: inset 0 3px #FFF,inset 0 3px rgba(255,255,255,0.0), inset 2px 0 rgba(0,0,0,0.2), 2px 0 rgba(0,0,0,0);">
				<div style="  text-align: center; float: right !important; height: 70px;margin-left: 15px !important; margin-top: 23px; margin-right: 15px !important;"></div>
			
				
			</li>
	
	
	
	
		<li class="radio" style="	<?php
if($logged['id']){
    ?> 
    
    
   margin-left: calc(50% - 667px); <?} ?><?php
if(!$logged['id']){
    ?> 
    
    
   margin-left: calc(50% - 602px); <?} ?>	">
				<div  class="msg" style="overflow: hidden; text-align: center; z-index: 2; position: relative; "><i class="fas fa-info-circle" ></i>About</div>
				
				
				<img style="position: fixed; z-index: 1;  margin-left: 48px; margin-top: -25px; opacity: 0.1;
	filter: grayscale(100%)  drop-shadow(1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(-1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(1px -1px 0 rgba(255, 255, 255, 1)); overflow: hidden;" src="https://www.habborator.org/archive/icons/medium/v22_4.gif">
	
				<ul style="margin-left: -0px;">
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='4' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? } ?>
				</ul>
			</li>	<li class="habbohotel onclick">
			<div onclick="forum()" class="msg" style=" text-align: center; position: relative; "><i class="fas fa-comments"></i>Forum</div>	<img style="position: fixed;   margin-left: 44px; margin-top: -30px; opacity: 0.2;
	filter: grayscale(100%) drop-shadow(1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(-1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(1px -1px 0 rgba(255, 255, 255, 1)); overflow: hidden;" src="https://www.habborator.org/archive/icons/medium/room_icon_open.gif">
	
				<ul style="margin-left: -0px;">
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='6' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				    if($subnav['usergroups']=="" OR hasGroup($subnav['usergroups'],$logged['id'])){
				?>
<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li> 
				<? }} ?>
				</ul>
			</li>

		

			<li class="habclub onclick" >
				<div onclick="imagery()" class="msg" style=" overflow: hidden; text-align: center;  position: relative; "><i class="fas fa-photo-video" ></i>Imagery</div>	<img style="position: fixed; z-index: 1;  margin-left: 58px; margin-top: -25px; opacity: 0.1;
	filter: grayscale(100%)  drop-shadow(1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(-1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(1px -1px 0 rgba(255, 255, 255, 1)); overflow: hidden;" src="https://www.habborator.org/archive/icons/bb2/pwrup_pins.gif">
	
				<ul style="margin-left: -0px;">
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='5' AND `show`='1' OR `category`='3' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				    if($subnav['usergroups']=="" OR hasGroup($subnav['usergroups'],$logged['id'])){
				?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? }} ?>
				</ul>
			</li>
				<li class="comunidade onclick">
		<div  onclick="pagecall('83','')" class="msg" style="overflow: hidden;z-index: 2; position: relative;  text-align: center; "><i class="fas fa-paper-plane"></i>Media</div>	<img style="position: fixed; z-index: 1;  margin-left: 55px; margin-top: -26px; opacity: 0.1;
	filter: grayscale(100%)  drop-shadow(1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(-1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(1px -1px 0 rgba(255, 255, 255, 1)); overflow: hidden;" src="https://www.habborator.org/archive/icons/medium/text.gif">
	
			
			<ul style="margin-left: -0px;">
					<?php if(hasgroup('21',$logged['id'])) { ?>
							<li style="border-radius: 3px;background-color: #edf8ff;" onclick="window.location = 'forum-viewthread-2999-1';" >Media Handbook</li><? } ?>
	
				
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='7' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				    if($subnav['usergroups']=="" OR hasGroup($subnav['usergroups'],$logged['id'])){
				?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? }} ?>
				</ul>
			</li>
			<li class="contato onclick" onclick="radiotime()" >
				<div class="msg" style="z-index: 2; overflow: hidden;  text-align: center; position: relative; "><i class="fas fa-music" ></i>Radio</div>	<img style="position: fixed; z-index: 1;  margin-left: 45px; margin-top: -22px; opacity: 0.1;
	filter: grayscale(100%)  drop-shadow(1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(-1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(1px -1px 0 rgba(255, 255, 255, 1)); overflow: hidden;" src="https://www.habborator.org/archive/icons/medium/star_2.gif">
		<?php if(hasgroup('2',$logged['id'])) { ?>	<ul style="margin-left: -0px;">
							<li style="border-radius: 3px; background-color: #edf8ff;" onclick="window.location = 'forum-viewthread-4-1';" >Radio Handbook</li></ul><? } ?>
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='11' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				    if($subnav['usergroups']=="" OR hasGroup($subnav['usergroups'],$logged['id'])){
				?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? }} ?>
			</li>
	
      		
      
			<li class="creations onclick" onclick="events('')">
				<div class="msg" style="z-index: 2;  text-align: center; position: relative; "><i class="fas fa-calendar-alt"></i>Events</div>	<img style="position: fixed; z-index: 1;  margin-left: 55px; margin-top: -25px; opacity: 0.1;
	filter: grayscale(100%) drop-shadow(1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(-1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(1px -1px 0 rgba(255, 255, 255, 1)); overflow: hidden;" src="https://www.habborator.org/archive/icons/medium/v24_2.gif">
	<?php if(hasgroup('11',$logged['id'])) { ?>	<ul style="margin-left: 0px; ">	
							<li style="border-radius: 3px;background-color: #edf8ff;" onclick="window.location = 'forum-viewthread-32-1';" >Events Handbook</li>	</ul>
							<? } ?>
		
			
			</li>
	<li class="events" >
				<div class="msg" style="z-index: 2;overflow: hidden;  text-align: center; position: relative; "><i class="	fas fa-balance-scale"></i>Trade</div>	<img style="position: fixed; z-index: 1;  margin-left: 45px; margin-top: -25px; opacity: 0.1;
	filter: grayscale(100%)  drop-shadow(1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(-1px 1px 0 rgba(255, 255, 255, 1)) drop-shadow(1px -1px 0 rgba(255, 255, 255, 1)); overflow: hidden;" src="https://www.habborator.org/archive/icons/bb2/pwrup_cannon.gif">
	
	
	
	
 <ul style="margin-left: 0px; ">
   <li onclick="market('')" >The Marketplace</li>
    <?php if($logged){ ?>
    <li onclick="mymarket()">My Market</li>
    <? } ?>
                
                  			
				
					<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='20' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){	?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>" <? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?> style="border-radius: 3px; background-color: #edf8ff;"><? echo $subnav['title']; ?></li>
				<? }?>
                </ul>
							
			</li>  


		<?php
if(!$logged['id']){
    ?>
	
				<li class="login onclick" style="background: linear-gradient(360deg, rgba(62,62,62,1) 0%, rgb(78 78 78 / 78%) 100%); 		box-shadow: inset 0 3px #FFF, inset 2px 0 rgba(0,0,0,0.2), 2px 0 rgba(0,0,0,0.4); overflow: hidden;		left: calc(61.5% - 806.45px);  ">
				<div onclick="prelogin()" class="msg"  style="  font-size: 13px;text-align: center; float: right !important; height: 70px;margin-left: 15px !important; margin-top: 23px; margin-right: 15px !important;"><i class="fas fa-sign-in-alt" aria-hidden="true"></i>Login</div>
			
				
			</li>
			
			
	<li class="login onclick" style="background: linear-gradient(360deg, rgba(62,62,62,1) 0%, rgb(78 78 78 / 78%) 100%); 	box-shadow: inset 0 3px #FFF,inset 0 3px rgba(255,255,255,0.0), inset 2px 0 rgba(0,0,0,0.2), 2px 0 rgba(0,0,0,0); overflow: hidden; left: calc(61.5% - 806.45px);">
				<div onclick="register()" class="msg"  style="  text-align: center; float: right !important; height: 70px;margin-left: 15px !important; margin-top: 23px; margin-right: 15px !important; font-size: 13px;"><i class="fas fa-user-plus"></i>Register</div>
			
				
			</li>	<li class="home onclick" style="width: 3px;		left:  calc(61.5% - 806.45px);	box-shadow: inset 0 3px #FFF,inset 0 3px rgba(255,255,255,0.0), inset 2px 0 rgba(0,0,0,0.3), 2px 0 rgba(0,0,0,0);">
				<div style="  text-align: center; float: right !important; height: 70px;margin-left: 15px !important; margin-top: 23px; margin-right: 15px !important;"></div>
			
				
			</li><?} ?>





	<?php
if($logged['id']){
    ?>
	

			<? 	$faq = $core->clean( $_POST['indexer'] );
		
		if($faq=="" OR !$faq ){
$query22 = $db->query("SELECT * FROM `FAQs` WHERE `title` LIKE '%$faq%' OR `content` LIKE '%$faq%' OR `keywords` LIKE '%$faq%' Limit 1");
while($array22 = $db->assoc( $query22 )){
?>
		
			<li class="home onclick" style="left: calc(61.5% - 806.45px); float: right;  	box-shadow: inset 0 -3px rgba(0,0,0,0.04), 0 1px rgba(0,0,0,0.12), 0 2px 10px rgba(0,0,0,0.1); 
	box-shadow: inset 0 3px rgba(255,255,255,0.04), inset 1px 0 rgba(255,255,255,0.0);">
  
  
  


				<div  onclick="toggleid('FAQ_answer_<? echo $array22['id']; ?>')" class="msg"  style=" height: 70px; margin-left: -3px !important; margin-top: 15px; margin-right: 0px !important;">  	
	
				
	<input class="msg" type="text" style="background-color: #CCC; width: 130px; height: 20px; border-radius: 3px; border: 1px solid #CCC; color: #000; padding: 3px; margin-top: -1px; margin-right: 14px;" placeholder="Search..." name="search" id="search"> </div>
	
				<? }} ?>
				
				
			</li>
				<li class="home" 	style="margin-left: -50px; left: calc(61.5% - 806.45px); box-shadow: inset 1px 0 rgba(255,255,255,0.0); right: -5%; overflow: hidden; float: right;"><img draggable="false"src="https://www.habbo.com/habbo-imaging/avatarimage?user=<? echo $logged['habbo']; ?>&direction=4&head_direction=4&size=m&gesture=sml&headonly=0" align="left" style="filter: drop-shadow(1px 1px 0 white) drop-shadow(-1px 1px 0 white) drop-shadow(1px -1px 0 white) drop-shadow(-1px -1px 0 white);margin-top: -15px; margin-right: 10px; ">
		
			
				
			</li><?} ?>
				
			</li>
			
			
			
			
				</div>
				
				
				
				
		</ul>
	
	
</nav>

<header style="overflow: hidden; position: relative; box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.25);">
<div id="logo2" onclick="pagecall('6')" class="onclick" style="background: url(http://www.habbofests.com/V2/uploads/1603285341.png); width: 30%; height: 120px; position: absolute; z-index: 2; top: 240px; left: 50%; margin-left: -168px; background-repeat: no-repeat;"> </div><!--<div id="logo2" onclick="pagecall('6')" class="onclick" style="background: url(assets/img/logos/2.3.png); width: 337px; height: 120px; position: absolute; z-index: 2; top: 240px; left: 50%; margin-left: -168px; background-repeat: no-repeat;"> </div>!-->
<div style="background: url(assets/img/backgrounds/aR1p_hnG.jpg) top center; width: 100%; margin-top: 000px; height: 1000px; animation: bgToRoll1 3000s linear infinite; ">
    

         
    <div style="background: url(assets/img/HF_bg-bluehills_1_4.png) bottom center; background-repeat: yes-repeat; width: 100%; margin-bottom: 100px;margin-left: 0px; ">
    <style>


@keyframes bgToRoll1{
  from{ background-position-x: 10%; }
  to{ background-position-x: -100%; } 
}
  @keyframes bgToRoll1{
  from{ background-position-x: -100%; }
  to{ background-position-x: 10%; }
 
 
}</style>
    <style>


@keyframes bgToRoll2{
  from{ background-position-x: 10%; }
  to{ background-position-x: -600%; }
  
 
}</style>
     <div style="background: url(assets/img/clouds_1_1.png)no-repeat top center; width: 100%; margin-top: 000px; margin-left: -1-0px; height: 500px;animation: bgToRoll2 300s linear infinite;">
         
         <img src="http://www.habbofests.com/V2/uploads/1604612139.png" style=" ">
  
  


<!---<div style="background: url(/V2/uploads/1601486554.jpg) top center; width: 100%; margin-top: 000px;  opacity: 0.6; margin-left: 0px; height: 1000px; animation: bgToRoll 300s linear infinite; ">!--->
	 <div style="background: url() top center no-repeat; width: 100%; margin-top: 000px;  margin-left: 0px; height: 1000px;"> </div>	<div class="content">
	 

	     
	      <!--<div style="background: url(/V2/uploads/1601486480.png) top center no-repeat; width: 100%; margin-top: 000px;  margin-left: 0px; height: 1000px;"> </div>	<div class="content">!-->


				<div id="logo" class="onclick" onclick="pagecall('6')"> </div>

	</div></div>

    
<? if($logged){ 
    $minimod = $db->query("SELECT * FROM `minimod_invite` WHERE `userid`='$logged[id]' && `action`='2'");
$minino = $db->num($minimod);
$miniarray = $db->assoc($minimod);
    ?>
    
    
    <div class="convobox2" style="<? if($minino>=1){ ?>width: 400px !important;<? }else{ ?>width: 340px;<? } ?> margin-left: 10px; position: absolute; height: auto; padding: 10px 0px 10px 10px; background: rgba(0,0,0,0.6); border-radius: 3px; top: 320px;">
<?php
$today_date = date( 'N' );
$today_week = date( 'W' );
$past_hour = date( 'G' );
$query  = $db->query( "SELECT * FROM events_timetable WHERE day = '{$today_date}' AND `week`='{$today_week}' AND `time`>='$past_hour' ORDER BY time ASC LIMIT 1" );
$num = $db->num( $query );
if($num==0){
?>
<div class="eventcontainer convobox2" style="margin-top: -10px; margin-bottom: -10px; margin-left: -10px; box-shadow:inset 0px 0px 0px 0px #3dc21b; border: 0px solid #000; position: relative; background: url(uploads/1588981892e9.png) no-repeat center; background-size: cover; color: #FFF; width: 100%;">
<div style="background: rgba(0,0,0,0); position: absolute; width: 100%; height: 99%; top: 0px; left: 0px; padding: 5px; color: #FFF;">



<div style="background: #5DBCD2; margin-right: 5px; background-repeat: no-repeat; text-align: center; overflow: hidden; border-radius: 4px; width: 70px; height: 60px; float: left;  background-attachment: fixed; background-position: bottom;">
<?
echo "<img draggable=\"false\" src=\"https://www.habbo.com/habbo-imaging/avatarimage?user=habbofests&direction=2&head_direction=2&size=m&gesture=sml&headonly=0\" align=\"left\" style=\"margin-top: -10px; margin-right: 10px;\" />";
?>
</div>
<div style="margin-bottom: 5px;"><span style="color: #FFF; text-shadow: 0 1px 3px rgba(0,0,0,.3); font-weight: 700; margin-bottom: 2px;"><a href='forum-folder-40-1'>Check Out Our Forum Games!</a></span></div>
<span style="color: #CCC; font-size: 11px;">There's currently no event booked for next hour!</span><br/>
</div>
</div>
				<?
			} else {
            while( $array = $db->assoc( $query ) ) {
				
				$query2  = $db->query( "SELECT * FROM users WHERE id = '{$array[host]}'" );
				$array2 = $db->assoc( $query2 );
				
				$query3  = $db->query( "SELECT * FROM events_types WHERE name = '{$array[event]}'" );
				$array3 = $db->assoc( $query3 );
?>



<div class="eventcontainer convobox2 onclick" onclick=" window.open('<? echo $array['roomlink']; ?>');" style="margin-top: -10px; margin-bottom: -10px; margin-left: -10px; box-shadow:inset 0px 0px 0px 0px #3dc21b; border: 0px solid #000; position: relative; background: url(uploads/1588981892e9.png) no-repeat center; background-size: cover; color: #FFF; width: 100%;">
<div style="background: rgba(0,0,0,0); position: absolute; width: 99%; height: 100%; top: 0px; left: 0px; padding: 5px; color: #FFF;">



<div style="background: <? echo $array['hex']; ?>; margin-right: 5px; background-repeat: no-repeat; text-align: center; overflow: hidden; border-radius: 4px; width: 70px; height: 60px; float: left;  background-attachment: fixed; background-position: bottom;">
<?
echo "<img src=\"https://www.habbo.com/habbo-imaging/avatarimage?user=".$array2['habbo']."&direction=2&head_direction=2&size=m&gesture=sml&headonly=0\" align=\"left\" style=\"margin-top: -10px; margin-right: 10px;\" />";
?>
</div>

<div style="margin-bottom: 5px;"><span style="text-shadow: 0 1px 3px rgba(0,0,0,.3); font-weight: 700; margin-bottom: 2px; color: #FFF; "><? echo $array3['name']; ?></span></div>
<span style="color: #CCC; font-size: 11px;"><? echo $array2['username']; ?> at
<?
if($array['time']<10){
	echo "";
}
echo $array['time'];
echo":00 GMT";
?></span><br/>
<div style="margin-top: 9px;">
<span class="event_options" style=" color: #CCC; font-size: 11px; background: rgba(255,255,255,0.5) !important; color: #000;  width: auto; max-width: 100px; padding: 3px 10px 3px 6px;"><? if($array['prize']=="creds"){ ?><i class="fas fa-coins" ></i> Credit Prize<? }elseif($array['prize']=="furni"){ ?><i class="fas fa-chair"></i> Furni Prize<? } else { ?><i class="fas fa-coins"></i> Credits & Furni &nbsp;<i class="fas fa-chair"></i><?} ?></span>
</div></div></div><?
}
			}
?>
</div>
</div>
    
<div class="convobox2" style="<? if($minino>=1){ ?>width: 400px !important;<? }else{ ?>width: 340px;<? } ?> margin-left: 10px; position: absolute; height: auto; padding: 10px 0px 10px 10px; background: rgba(0,0,0,0.6); border-radius: 3px; top: 282px;">
<div style="color: #858585 !important;">
    		<div class="online" style="color: #FFF !important;">
			<div class="breadcrumb" id="breadcrumb" style="color: #CCC; font-size: 11px;">&nbsp;</div>
					<div class-"three" style="color: #FFF !important; font-family: verdana; font-size: 0.8em;"> </div>
		</div>
    </div>
</div>
<?
if($minino>=1){
    ?>
    <div class="headerbox convobox2 onclick" style="float: left;  margin-top: -79px !important;" data-toggle="tooltip" data-placement="right" rel="tooltip" title="Mini MOD Invite" onclick="minivite('')">
    <img class="onclick" src="assets/img/shieldactive.gif" style="margin-top: 4px;">
</div>
    <?
}
               ?>
<div onclick="notifications()" class="headerbox convobox2 onclick" style=" margin-top: -79px; float: left; <? if($minino>=1){ ?>margin-left: 70px !important;<? } ?>" data-toggle="tooltip" data-placement="right" rel="tooltip" title="Notifications"><img id="userbulb" draggable="false" src="https://habboemotion.com/resources/images/icons/pwrup_lightbulb.gif">
<div id="notifyno" style="position: absolute; top: -8px; right: 6px; display: none;" class="badge badge-danger"><span class="notifyno"> </span></div>
</div>

<div onclick="pagecall('37')" class="headerbox convobox2 onclick" style="margin-top: -79px;  float: left; <? if($minino>=1){ ?>margin-left: 130px !important;<? }else{ ?>margin-left: 70px !important;<? } ?>" onmouseover="logoutin()" onmouseout="logoutout()" data-toggle="tooltip" data-placement="right" rel="tooltip" title="Logout"><img draggable="false" id="logoutdoor" src="assets/img/icon/logout.png"></div>
<script type="text/javascript">
  function swapImage(id,primary,secondary,tertiary,quaternary,quinary) {
    src=document.getElementById(id).src;
    if (src.match(primary)) {
      document.getElementById(id).src=secondary;
      } else if (src.match(secondary)) {
      document.getElementById(id).src=tertiary;
      } else if (src.match(tertiary)) {
      document.getElementById(id).src=quaternary;
      } else if (src.match(quaternary)) {
      document.getElementById(id).src=quinary;
    } else {
      document.getElementById(id).src=primary;
    }
  }
</script>
<div onclick="myFunction()" class="headerbox convobox2 onclick" style="margin-top: -79px;  float: left; <? if($minino>=1){ ?>margin-left: 190px !important;<? }else{ ?>margin-left: 130px !important;<? } ?>" onmouseover="change themein()" onmouseout="change themeout()"  data-toggle="tooltip" data-placement="right" ><img style="margin-top: -10px;" id="desat" onclick="swapImage('desat','assets/img/greens.png','assets/img/yellow.png','assets/img/red2.png','assets/img/yellow (1).png')" draggable="false" src="assets/img/greens.png"><div style="position: absolute; top: -8px; left: 6px; background: purple; float: left;" class="badge">NEW</div></div>




<div class="headerbox2 convobox2" style="width: 170px; margin-top: -79px;  <? if($minino>=1){ ?>margin-left: 250px !important;<? }else{ ?>margin-left: 190px !important;<? } ?>">

    <div style="float: left; width: 150px; margin-left: 12px; margin-top: 15px; color: #CCC; font-size: 11px;">
        <a class="onclick" style="font-decoration: none; text-decoration: none;" onclick="userset('home')">Settings</a> - <span class="onclick" onclick="profile('<? echo $logged['username']; ?>')">Profile -</span><span class="onclick" onclick="events('')"> Events</span> 






    </div>
    <div style="position: absolute; top: -8px; right: 6px; background: #<? echo $usergroup[colour]; ?>;" class="badge"><? echo $logged['username']; ?></div>
</div>
</div>
<? } else { ?>
<div class="convobox2" style="width: 315px; margin-left: 10px; position: absolute; height: auto; padding: 10px 0px 10px 10px; background: rgba(0,0,0,0.6); border-radius: 3px; top: 285px; ">
    
       <script type="text/javascript">
  function swapImage(id,primary,secondary,tertiary,quaternary,quinary) {
    src=document.getElementById(id).src;
    if (src.match(primary)) {
      document.getElementById(id).src=secondary;
      } else if (src.match(secondary)) {
      document.getElementById(id).src=tertiary;
      } else if (src.match(tertiary)) {
      document.getElementById(id).src=quaternary;
      } else if (src.match(quaternary)) {
      document.getElementById(id).src=quinary;
    } else {
      document.getElementById(id).src=primary;
    }
  }
</script>

     <div onclick="myFunction()" class="headerbox2 convobox3 onclick"  style="width: 50px; margin-left: -10px; position: absolute; height: 35px !important; padding: 10px 0px 10px 10px; background: rgba(0,0,0,0.6); border-radius: 3px; top: -60px; "  onmouseover="change themein()" onmouseout="change themeout()"  data-toggle="tooltip" data-placement="right" ><img style="margin-top: -10px;" id="desat" onclick="swapImage('desat','assets/img/greens.png','assets/img/yellow.png','assets/img/red2.png','assets/img/yellow (1).png')" draggable="false" src="assets/img/greens.png"> <div style="position: absolute; top: -8px; left: 6px; background: purple; float: left;" class="badge">NEW</div></div>
    
    
 

   
    
<div style="color: #858585 !important;">
    
    		<div class="online" style="color: #FFF !important;">
			<div class="breadcrumb" id="breadcrumb" style="color: #CCC; font-size: 11px;"> &nbsp; </div>
					<div class-"three" style="color: #FFF !important; font-family: verdana; font-size: 0.8em;"> </div>
		</div>
    </div>
</div>
 <div class="convobox2" style="<? if($minino>=1){ ?>width: 400px !important;<? }else{ ?>width: 315px;<? } ?> margin-left: 10px; position: absolute; height: auto; padding: 10px 0px 10px 10px; background: rgba(0,0,0,0.6); border-radius: 3px; top: 320px;">
<?php
$today_date = date( 'N' );
$today_week = date( 'W' );
$past_hour = date( 'G' );
$query  = $db->query( "SELECT * FROM events_timetable WHERE day = '{$today_date}' AND `week`='{$today_week}' AND `time`>='$past_hour' ORDER BY time ASC LIMIT 1" );
$num = $db->num( $query );
if($num==0){
?>
<div class="eventcontainer convobox2" style="margin-top: -10px; margin-bottom: -10px; margin-left: -10px; box-shadow:inset 0px 0px 0px 0px #3dc21b; border: 0px solid #000; position: relative; background: url(uploads/1588981892e9.png) no-repeat center; background-size: cover; color: #FFF; width: 100%;">
<div style="background: rgba(0,0,0,0); position: absolute; width: 100%; height: 99%; top: 0px; left: 0px; padding: 5px; color: #FFF;">



<div style="background: #5DBCD2; margin-right: 5px; background-repeat: no-repeat; text-align: center; overflow: hidden; border-radius: 4px; width: 70px; height: 60px; float: left;  background-attachment: fixed; background-position: bottom;">
<?
echo "<img draggable=\"false\" src=\"https://www.habbo.com/habbo-imaging/avatarimage?user=habbofests&direction=2&head_direction=2&size=m&gesture=sml&headonly=0\" align=\"left\" style=\"margin-top: -10px; margin-right: 10px;\" />";
?>
</div>
<div style="margin-bottom: 5px;"><span style="color: #FFF; text-shadow: 0 1px 3px rgba(0,0,0,.3); font-weight: 700; margin-bottom: 2px;"><a href='forum-folder-40-1'>Check Out Our Forum Games!</a></span></div>
<span style="color: #CCC; font-size: 11px;">There's currently no event booked for next hour!</span><br/>
</div>
</div>
				<?
			} else {
            while( $array = $db->assoc( $query ) ) {
				
				$query2  = $db->query( "SELECT * FROM users WHERE id = '{$array[host]}'" );
				$array2 = $db->assoc( $query2 );
				
				$query3  = $db->query( "SELECT * FROM events_types WHERE name = '{$array[event]}'" );
				$array3 = $db->assoc( $query3 );
?>



<div class="eventcontainer convobox2 onclick" onclick=" window.open('<? echo $array['roomlink']; ?>');" style="margin-top: -10px; margin-bottom: -10px; margin-left: -10px; box-shadow:inset 0px 0px 0px 0px #3dc21b; border: 0px solid #000; position: relative; background: url(uploads/1588981892e9.png) no-repeat center; background-size: cover; color: #FFF; width: 100%;">
<div style="background: rgba(0,0,0,0); position: absolute; width: 99%; height: 100%; top: 0px; left: 0px; padding: 5px; color: #FFF;">



<div style="background: <? echo $array['hex']; ?>; margin-right: 5px; background-repeat: no-repeat; text-align: center; overflow: hidden; border-radius: 4px; width: 70px; height: 60px; float: left;  background-attachment: fixed; background-position: bottom;">
<?
echo "<img draggable=\"false\" src=\"https://www.habbo.com/habbo-imaging/avatarimage?user=".$array2['habbo']."&direction=2&head_direction=2&size=m&gesture=sml&headonly=0\" align=\"left\" style=\"margin-top: -10px; margin-right: 10px;\" />";
?>
</div>

<div style="margin-bottom: 5px;"><span style="text-shadow: 0 1px 3px rgba(0,0,0,.3); font-weight: 700; margin-bottom: 2px; color: #FFF; "><? echo $array3['name']; ?></span></div>
<span style="color: #CCC; font-size: 11px;"><? echo $array2['username']; ?> at
<?
if($array['time']<10){
	echo "";
}
echo $array['time'];
echo":00 GMT";
?></span><br/>
<div style="margin-top: 9px;">
<span class="event_options" style=" color: #CCC; font-size: 11px; background: rgba(255,255,255,0.5) !important; color: #000;  width: auto; max-width: 100px; padding: 3px 10px 3px 6px;"><? if($array['prize']=="creds"){ ?><i class="fas fa-coins"></i> Credit Prize<? }elseif($array['prize']=="furni"){ ?><i class="fas fa-chair"></i> Furni Prize<? } else { ?><i class="fas fa-coins"></i> Credits & Furni &nbsp;<i class="fas fa-chair"></i><?} ?></span>
</div></div></div><?
}
			}
?>
</div>
</div>
<!--- OLD LOGIN FEATURE<div class="headerbox2 convobox2" style="width: 324px !Important; margin-top: -73px; margin-left: 10px !important;">
    <div style="height: 52px; position: relative; float: left; margin-right: 10px; width: 64px;">
<img src="assets/img/icon/tinyhumans.png" align="left" style="margin-top: -10px; margin-right: 10px; margin-left: 10px; height: 52px;">
    </div>
    <div style="float: left; width: 70%; margin-left: -10px;  font-family: verdana; font-size: 0.6em; line-height: 1.8; text-align: center;">
      <span onclick="prelogin()" class="onclick">LOGIN</span> - <span onclick="register()" class="onclick">REGISTER</span></br> <span onclick="forgot()" class="onclick">FORGOTTEN PASSWORD</span>
    </div>!--->

    <div style="position: absolute; top: -8px; right: 6px; background: #<? echo $usergroup[colour]; ?>;" class="badge"><? echo $logged['username']; ?></div>
</div>
</div>
<? } ?>
<!-- Radio Features -->

<!-- buttons -->

<div class="onclick convobox2" style="width: 40px; height: 33px !important; right: 125px; position: absolute; height: auto; padding: 4px; background: rgba(0,0,0,0.6); border-radius: 3px; top: 307px; text-align: center;" onmouseover="playin()" onmouseout="playout()" data-toggle="tooltip" data-placement="top" rel="tooltip" title="Play Radio">
    <img id="playbutton" src="assets/img/icon/playradio.png" width="28" height="28" style="margin-top: 2px;" onclick="toggleplay()">
    <img id="pausebutton" src="assets/img/icon/pause.png" width="28" height="28" style="margin-top: 2px; display: none;" onclick="pauser()">
</div>

<div class="onclick convobox2" style="width: 40px; right: 15px; position: absolute; height: auto; padding: 4px; background: rgba(0,0,0,0.6); border-radius: 3px; top: 352px; text-align: center;" onmouseover="radiosetin()" onmouseout="radiosetout()" data-toggle="tooltip" data-placement="left" rel="tooltip" title="Settings" onclick="radiosettings()"><img id="cog" src="assets/img/icon/cog2.png" width="28" height="28" style="margin-top: 2px;"></div>

<div class="onclick convobox2" style="width: 40px; right: 15px; position: absolute; height: auto; padding: 4px; background: rgba(0,0,0,0.6); border-radius: 3px; top: 307px; text-align: center;" onclick="givelove()" onmouseover="heartin()" onmouseout="heartout()" data-toggle="tooltip" data-placement="top" rel="tooltip" title="Heart"><img id="radioheart" src="assets/img/icon/heart-filled.png" width="28" height="28" style="margin-top: 2px;"></div>

<div class="onclick convobox2" style="width: 40px; right: 70px; position: absolute; height: auto; padding: 4px; background: rgba(0,0,0,0.6); border-radius: 3px; top: 307px; text-align: center;" onmouseover="bubblein()" onmouseout="bubbleout()" data-toggle="tooltip" data-placement="top" rel="tooltip" title="Radio Request Line" onclick="radioRequests()"><img id="radiobubble" src="assets/img/icon/speech-bubble1.png" width="28" height="28" style="margin-top: 2px;"></div>
<!-- End Buttons -->


<div style=" width: 210px; height: 32px !important; right: 70px; position: absolute; height: auto; padding: 4px 0px 4px 0px !important; background: rgba(0,0,0,0.6); top: 352px; border-radius: 3px; z-index: 80;" class="convobox2"  id="currentsong">
&nbsp;
</div>

<div style="  width: 120px; height: 144px !important; right: 190px; position: absolute; height: auto; padding: 4px 0px 4px 0px !important; top: 240px; border-radius: 3px; z-index: 79; overflow: hidden;" id="djhabbo">

</div>


<?
    if(date("l")=="Sunday"){
    $weekid = date("W") +1; 
    } else {
    $weekid = date("W");
    }
    if(date("G")==23){
    $nexthour = "0";
    $dayofweek = date("N") +1;
    } else {
    $nexthour = date("G") +1;
    $dayofweek = date("N");
    }
    $query4 = $db->query( "SELECT * FROM timetable WHERE day = '{$dayofweek}' && `week`='{$weekid}' && `time`='{$nexthour}'" );
    $num4 = $db->num( $query4 ); 
    if($num4==1){
    $array4 = $db->assoc( $query4 );
        
    $query5 = $db->query( "SELECT id,username,habbo FROM users WHERE id = '$array4[dj]'" );
    $array5 = $db->assoc( $query5 );   
        
    $nexthabbo = $array5['habbo'];
    $nextusername = $array5['username'];
    $nextid = $array5['id'];
    }else{
    $nexthabbo = "HabboFests";
    $nextusername = "HabboFests";
        $nextid = 126;
    }
    ?>
<div class="headerbox2-right convobox2 onclick" style=" height: 90px !important; width: 105px !important; margin-left: 10px !important; right: 286px; text-align: center;" data-toggle="tooltip" data-placement="top" rel="tooltip" title="<? echo $nextusername; ?>" onclick="aboutme('<? echo $nextid; ?>')" onmouseover="swapHabbo('upnextHabbo','<? echo $nexthabbo; ?>','in')" onmouseout="swapHabbo('upnextHabbo','<? echo $nexthabbo; ?>','out')">
 
<center><div style="background-image: url(assets/img/Untitled_33.png); margin-top: -10px; height: 110px; width: 100px; bottom: -40px; margin-left: -20px; ">
    
    <img id="upnextHabbo" src="https://www.habbo.com/habbo-imaging/avatarimage?user=<? echo $nexthabbo; ?>&action=sit&direction=2&head_direction=2&size=m&gesture=sml&headonly=0" style="margin-top: -8px !important; margin-left: 10px;"></center>  
    <div style="position: absolute; top: -8px; left: 6px; background: #009ACD; float: left;" class="badge">UP NEXT</div>
       <style>.speech-bubble {
  background: #fff;
  color: #333;
  display: inline-block;
	font-size: 11.5px;
  line-height: 2em;
  margin-bottom: 1em;

	position: relative;
	text-align: center;
	vertical-align: top;
		min-width: 3em;

box-shadow: inset 0 0 0 0.5px rgb(0 0 0), inset 0 0 0 1px hsl(0deg 0% 80% / 17%), 0 1px 0 #00000075;
}


.speech-bubble:hover {
    opacity: 0.5;

}
.speech-bubble:after {
	border: 0.7em solid transparent;
	margin-top: -2px;
	border-top-color: #FFF;
	content: '';
	margin-left: -1em;
	position: absolute;
		top: 100%;
		left: 50%;
	width: 0;
	height: 0;

}
.speech-bubble.rounded {
	border-radius: .4em;
}
</style>
    <div onmouseover="swapHabbo('upnextHabbo','<? echo $nexthabbo; ?>','out')" onmouseout="swapHabbo('upnextHabbo','<? echo $nexthabbo; ?>','out')"
    
    onclick="window.open('https://chrome.google.com/webstore/detail/habbofests-radio/aainfnfiinjokcbjnkacakbkoabplooe?hl=en')" class="speech-bubble rounded" style="  margin-left: -15px; right: -20px; width: 290px; bottom: 170px;"><span><img src="https://www.habbo.com/habbo-imaging/avatarimage?user=HabboFests&direction=3&head_direction=3&action=&gesture=nrm&size=s&headonly=1" style="overflow: hidden; margin-bottom: -10px; margin-left: -0px;"></span>
<span style="font-weight: 500; margin-top: -5px;">HabboFests: </span><span style="margin-top: -5px;">Click Here To Play Me Anywhere!</span>
</div>
  




    
    
    
</div>



</div>
</div></div>




<!-- End Radio Features -->

</header>
<div style="width: 110%; margin-left: -5%;  box-shadow: inset 0 -3px rgba(0,0,0,0.04), 0 1px rgba(0,0,0,0.12), 0 2px 10px rgba(0,0,0,0.1); box-shadow: inset 0 0 0 0.5px rgb(0 0 0), inset 0 0 0 1px hsl(0deg 0% 80% / 17%), 0 1px 0 #00000075; height: 33px; background:-webkit-linear-gradient(top,#4a4a50,#232527); text-align: center; padding-top: 12px;"><span style="font-size: 80%;color: white; font-weight: bold; letter-spacing: 0.25px;"><a onclick="theupdate()">V2.6 Announcement: </a></span><span style="color: #CCC; font-size: 80%; letter-spacing: 0.25px;">Our mock MP is here! Click <a onclick="marketfaq('')" style="font-weight: bold;">here</a> to check out what it's all about, don't waste credits on taxes...</span></div>
<!-- Content Areas -->



<?php
if($loggedin){
$userid = $logged['id'];
// Bans
// Checks banned accounts firstly
$query = $db->query( "SELECT * FROM `user_bans` WHERE `userid`='{$userid}' AND `timestamp`>'{$time}'");
while($array = $db->assoc( $query )){
?>
<div class="alert yellow"><p style="padding-top: 2px;"></p><i class="fas fa-code" aria-hidden="true"></i> You have been banned! The reason for the ban is "<? echo $array['reason']; ?>". The ban will expire on <? echo date("l, d-M-Y", $array['timestamp']); ?> at <? echo date("H:i", $array['timestamp']); ?> (GMT).</p><br/>
<p>Please note that all user services will be unavailable during your ban duration, points gained from official <? echo $sitename; ?> events will not be claimable and site only competitions and events will not be available to you.</p><br/>
<p>If you wish to appeal your ban, please head over to our support forums.</p></div>
<? }} ?>


<?php
// Warnings
// Checks warnings
$query = $db->query( "SELECT * FROM `warnings` WHERE `userid`='{$userid}' AND `expires`>'{$time}' AND `user_read`='0'");
while($array = $db->assoc( $query )){
?>
<div class="alert yellow onclick" id="warning_<? echo $array['id']; ?>" onclick="warning('<? echo $array['id']; ?>')"><p style="padding-top: 2px;"></p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> You have received a warning: "<? echo $array['reason']; ?>". This will expire on <? echo date("l, d-M-Y", $array['expires']); ?> at <? echo date("H:i", $array['expires']); ?> (GMT)</p></div>
<? } ?>
<style>
.alert {
  padding: 5px;
  background-color: orange;
  color: white;
  font-family: Arial;
  border-radius: 5px;
  width: 580px;
}
.ready {
  padding: 5px;
  background-color: green;
  color: white;
  font-family: Arial;
  border-radius: 5px;
  width: 740px;
}

.readyButton {
	box-shadow:inset 0px 1px 0px 0px #3dc21b;
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	background-color:#44c767;
	border-radius:6px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.readyButton:hover {
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	background-color:#5cbf2a;
}
.readyButton:active {
	position:relative;
	top:1px;
}

        
</style>

<?
$queryUsr = $db->query("SELECT * FROM username_requests WHERE approved='0'");
$getRequests = $db->assoc($queryUsr);
$reqCount = $db->num($queryUsr);
$oldName = $logged['username'];

$queryReady = $db->query("SELECT * FROM username_requests WHERE approved='1'");
$readyArray = $db->assoc($queryReady);
$newName = $readyArray['requested_name'];

$nnQuery = $db->query("SELECT * FROM username_requests WHERE user_id='{$logged[id]}'");
$nnArray = $db->assoc($nnQuery);
$newName = $nnArray['requested_name'];
$do = $core->clean($_GET['do']);

if($do == "readyChange")
{

	
	$logChange = $db->query("UPDATE username_change_logs SET finalized='1' WHERE user_id='{$logged[id]}'");
	$changeUsername = $db->query("UPDATE users SET username='{$newName}' WHERE id='{$logged[id]}'");
	$deleteRequest = $db->query("UPDATE username_requests SET approved='2' WHERE user_id='{$logged[id]}'");
	echo "<script>window.location.replace(\'https://habbofests.com\');</script>";
}?>

<?

if(hasGroup('13', $logged['id']))
{
if($reqCount > 0)
{
 echo "<center><div class='alert'><i class='fa fa-exclamation-circle'></i> There is a new username request. Please manage this via the Call for Help.</div></center>";
}
}

?>



<div class="content" id="main" style="margin-bottom: 40px; margin-top: 20px; min-height: 100%; height: 100%; overflow: hidden;"> </div>

<!-- Create a footer -->
<? require("footer.php"); ?>
	
<script type="text/javascript" src="https://sundaymorning.jaysalvat.com/scripts/jquery.sundaymorning.js"></script>
<? if(hasGroup('13', $logged['id'])){ ?>
<script src="assets/js/DH4Ifx32hwqI.js"></script>
<link rel="stylesheet" href="assets/css/FkiJXg6E8AgS.css" type="text/css">
<div id="mod"> </div>
<? } 
if(hasGroup('84', $userid)){
    ?>
<div id="mini"> </div>
<link rel="stylesheet" href="assets/css/FkiJXg6E8AgS.css" type="text/css">
<link rel="stylesheet" href="assets/css/mini.css" type="text/css">
        <script src="assets/js/minimod.js"></script>
        <?
}   
?>
        <? 
    if($logged){
    // Check the user has not got a currently pending username request
    $usernamechange = $db->query("SELECT * FROM username_requests WHERE user_id = '{$logged[id]}' && `approved`='1'");
	$usernamenum = $db->num($usernamechange);
    if($usernamenum>=1){
    ?>
        <script type="text/javascript">
$(function(){ 
setTimeout(function(){ nameday(); }, 10000);
});
</script>
        <? }} ?>

<script src="assets/js/habshine.js"></script>
    <?
            $radquery = $db->query( "SELECT * FROM radio_settings WHERE ipaddress = '{$myip}'" );
    $radnum = $db->num( $radquery );
    $radarray = $db->assoc ($radquery);
    ?>
<? if($radnum==0){ ?>
<audio autoplay id="radio_player" src="https://radio.habbofests.com/radio/8020/autodj?1597523162"></audio>
    <? } else { ?>
    <? if($radarray['mute']==0){ ?>
<audio autoplay id="radio_player" src="https://radio.habbofests.com/radio/8020/autodj?1597523162"></audio>
<? }} ?>
<script type="text/javascript">
    
<? if($radnum==0){ ?>
$(function(){ 
$("#radio_player").prop('volume', 0.1);
$("#radio_player").trigger("play");
});
    <? } else { ?>
    <? if($radarray['mute']==0){ ?>
    $(function(){ 
$("#radio_player").prop('volume', <? echo $radarray['volume2']; ?>);
$("#radio_player").trigger("play");
});
    <? }else{ ?>
    
    <? }} ?>
</script>
<? if($system['market']==0 && ($logged['displaygroup']!=19 && $logged['displaygroup']!=5)){ ?>

<? }else{ ?>
<script src="assets/js/bazaar.js"></script>
<? } ?>
<script src="assets/js/countup.js"></script>
<script src="assets/js/forum.js"></script>
<script src="assets/js/autosize.min.js"></script>
<script src="assets/js/lity.js"></script>

<script src="assets/js/spectrum.js"></script>
<!--<script src="assets/js/slider.js"></script>-->
<script src="assets/js/global.js"></script>
<script src="assets/js/notify.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="assets/js/jquery.mousewheel.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="assets/css/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js?v=2.1.7"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="assets/css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="assets/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="assets/js/jquery.fancybox-media.js?v=1.0.6"></script>
<link rel="stylesheet" href="assets/css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="assets/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>

</body>
</html>
<? } ?>