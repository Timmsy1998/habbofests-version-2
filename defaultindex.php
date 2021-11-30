<?php
require_once("../panel/_inc/glob.php");

if($system['sitemaint']==1 && !$logged['id']){
    ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title><? echo $system['sitename']; ?> ~ The Festival of Habbo</title>
	<meta name="description" content="<? echo $system['sitename']; ?> is an Unofficial Habbo fansite owned by <? echo $system['ownerhabbo']; ?>, the site aims to provide you with guides, the latest news and gossip as well as regular events and radio shows.">
	<meta name="keywords" content="<? echo $system['sitename']; ?>, <? echo $siteurl; ?>, Habbo Fansite, Habbo Unofficial Fansite, fansite, Habbo forum, Habbo radio, radio fansite, Habbo Badge, Habbo Badge Answers, Habbo Answers, Habbo Fansite, UnOfficial Fansite, Habbo Hotel, Habbo News, Habbo Rumours, Habbo Guides, Badge Guides, Habbo Badge Guides" />
	<link rel="icon" href="assets/img/fvicon.png" type="image/x-icon">
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
</head><body>

<div id='div1'>
    <center><img src="../HFsmall.png"></center>
    <br/><div id='div2'><div id='text-padding'>Welcome to HabboFests!<br/><br/>Rue and his team are currently carrying out some essential site maintenance, and hope to have this finished soon.<br/><br/>Please keep checking back and we hope to see you again soon.<br/></div></div></div>	
</body></html>
    
 <? 
} elseif(($system['sitemaint']==1 && ($logged['displaygroup']==4 && $logged['displaygroup']==5 && $logged['displaygroup']==19 && $logged['displaygroup']==27 && $logged['displaygroup']==25)) OR $system['sitemaint']==0) {


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
<head>
	
	<title><? echo $system['sitename']; ?> ~ The Festival of Habbo</title>
	<meta name="description" content="<? echo $system['sitename']; ?> is an Unofficial Habbo fansite owned by <? echo $system['ownerhabbo']; ?>, the site aims to provide you with guides, the latest news and gossip as well as regular events and radio shows.">
	<meta name="keywords" content="<? echo $system['sitename']; ?>, <? echo $siteurl; ?>, Habbo Fansite, Habbo Unofficial Fansite, fansite, Habbo forum, Habbo radio, radio fansite, Habbo Badge, Habbo Badge Answers, Habbo Answers, Habbo Fansite, UnOfficial Fansite, Habbo Hotel, Habbo News, Habbo Rumours, Habbo Guides, Badge Guides, Habbo Badge Guides" />
	<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
	
	<link rel="icon" href="assets/img/fvicon.png" type="image/x-icon">
	
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/buttons.css" type="text/css">
	<link rel="stylesheet" href="assets/css/forum.css" type="text/css">
	<link rel="stylesheet" href="assets/css/boxes.css" type="text/css">
	<link rel="stylesheet" href="assets/css/blue.css" type="text/css" id="skin">
	<link rel="stylesheet" href="assets/css/spectrum.css" type="text/css">
	<? if(date("d")>="07" && date("d")<="12"){ ?>
	<link rel="stylesheet" href="assets/css/easter.css" type="text/css">
	<? }else{ ?>
	<link rel="stylesheet" href="assets/css/style.css?v=39424541" type="text/css">
	<? } ?>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/brands.min.css" type="text/css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" ></script>
<div class="fancybox"> </div>
<script type="text/javascript">
$(function() {
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
$(function(){
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
		} elseif($parts[1]=="newthread") { ?>
		composet('<? echo $parts[2]; ?>');
		<? } elseif(!$parts[1]) {
			echo"forum();";
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
<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
</script>



</head>
<body style="background: url(assets/img/1522371179_3.png)">
<? if(!$logged){ ?>
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script>
		$(function(){
		$( ".boxbg_container" ).draggable();
		$( ".boxbg_container" ).draggable({ handle: ".handle" });
		});
		</script>
<div class="boxbg" id="boxbg" onclick="closeall()" title="Click anywhere to close"> </div>
<div class="boxbg_container" style="width: 500px; height: auto; position: fixed; left: 50%; top: 100px; margin-left: -250px;" id="loadbox">

</div>
<? } ?>
<? if($logged['username']=="Rue"){ ?>

<?php
$training = $db->query( "SELECT * FROM `mod_training` WHERE `userid`='{$logged[id]}'");
$train = $db->assoc( $training );
$trainno = $db->num( $training );
if($trainno==0){
?>
<!-- Moderation Training Environment 1.0 -->

<!-- End MTE 1.0 -->
<?
}
?>

<? } ?>
    <div id="useralerts"> </div>
<? if($system['radio']==1 OR $system['radio']==2){ ?>
<?
if($_SESSION["station"]=="" OR !$_SESSION["station"]){
	$station = $system['sitename'];
} else {
	$station = $core->clean($_SESSION["station"]);
}
$stationgrab = $db->query( "SELECT * FROM `radio_stations` WHERE `title`='{$station}'");
$stations = $db->assoc( $stationgrab );
if($stations['system']=="shoutcast1"){ 
?>
<audio src="http://<? echo $stations['ip']; ?>:<? echo $stations['port']; ?>/;&type=mp3" style="display: none;" id="radio_player"></audio>
<?
} else {
?>
	<audio src="https://habbofestsradio.radioca.st/live" style="display: none;" id="radio_player"></audio>
<? }} ?>
<div id="overlay" onclick="popupclose()"> </div>
<div id="popupmod"> </div>
<? if($logged){ $userid = $logged[id]; if(hasGroup('13', $userid)){ ?><div id="moddash"> </div><div id="moddash2"> </div><div id="spacercf"> </div><div id="spacercf2" class="onclick" onclick="modtool('home','')"><img src="uploads/mod_1.gif"></div><? }} ?>

<nav>
	<div class="xcontent">
		<ul>
<li class="home">
				<div class="msg"><? if($logged){ ?><? echo ucfirst($logged['username']); ?> <span class="notifyno"> </span><? } else { ?>MyFests<? } ?></div>
				<ul>
				    <? if($loggedin){ ?>
<li>Points: <? echo $logged['points']; ?></li>
<li onclick="pagecall('32','')">Notifications <span class="notifyno"> </span></li>
<li onclick="profile('<? echo $logged['username']; ?>')">View Your Profile</li>
<li class="settings" data-fancybox-type="iframe" href="assets/pages/user/settings.php">Settings</li>
<?php if ($logged['displaygroup'] > 1) { ?>
    <li><a href="/panel" target="_blank">Staff Panel</a></li> 
<?php
   } 
?>
<? if($logged['username']=="Rue"){ ?>
<li class="pointstore" data-fancybox-type="iframe" href="assets/pages/user/activitystore.php">Awards</li>
<? } ?>
<li onclick="pagecall('37')" class="onclick">Logout</li>	
				    <? }else{ ?>
<li onclick="prelogin()">Login</li> 
<li onclick="register()">Register</li> 
<li onclick="forgot()">Forgotten Password</li>
<? } ?>
				</ul>
			</li>
			<li class="habclub">
				<div class="msg">HabboFests</div>
				<ul>
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='4' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? } ?>
				</ul>
			</li>
			<li class="radio">
				<div class="msg">Radio</div>
				<ul>		
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='2' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				    if($subnav['usergroups']=="" OR hasGroup($subnav['usergroups'],$logged['id'])){
					
					if($subnav['title']=="Request Line"){
				?>
				<? if($station=="HabShine"){ ?>
				<a class="various" data-fancybox-type="iframe" href="requests.php"><li><? echo $subnav['title']; ?></li></a>
				<? } ?>
				<? } else { ?>
<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? }}} ?>
				</ul>
			</li>
			<li class="habbohotel">
				<div class="msg">Habbo</div>
				<ul>
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='3' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				    if($subnav['usergroups']=="" OR hasGroup($subnav['usergroups'],$logged['id'])){
				?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? }} ?>
				</ul>
			</li>
			<li class="comunidade">
				<div class="msg">Community</div>
				<ul>
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='5' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				    if($subnav['usergroups']=="" OR hasGroup($subnav['usergroups'],$logged['id'])){
				?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? }} ?>
				</ul>
			</li>
			<li class="contato">
				<div class="msg">Forum</div>
				<ul>
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='6' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				    if($subnav['usergroups']=="" OR hasGroup($subnav['usergroups'],$logged['id'])){
				?>
<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li> 
				<? }} ?>
				</ul>
			</li>
		</ul>
	</div>
</nav>

<header style="overflow: hidden; position: relative;">
<div onclick="pagecall('6')" class="onclick" style="<? if(date("d")>="07" && date("d")<="12"){ ?>background: url(uploads/1586290853.png); width: 473px; height: 121px;<? }else{ ?>background: url(assets/img/); width: 500px; height: 120px;<? } ?> position: absolute; z-index: 2; top: 95px; left: -250px; margin-left: 50%; opacity: 0.8;"> </div>
	 <div style="<? if(date("d")>="07" && date("d")<="12"){ ?>background: url(uploads/header_easter.png); width: 100%; position: absolute; height: 300px; background-size: cover;<? }else{ ?>background: url(assets/img/headerimg.png); width: 100%; position: absolute; height: 1404px; background-attachment: fixed; background-position: center bottom;<? } ?>"> </div>
	<div class="content">
				<div id="logo" class="onclick" onclick="pagecall('6')"> </div>

	</div></div>
	<div class="top_bar">
	<div class="content" style="overflow: hidden;">

		<div class="online">
			<div class="breadcrumb" id="breadcrumb"> </div>
					<div class-"three"> </div>
		</div>
	<div style="float: right; margin-right: -28px;">
	<? 
$url = "http://admin:eiqjds!8d0@fusion.shoutca.st:8387/admin.cgi?mode=viewxml&page=1&sid=1";

$nice_url = urlencode($url);

$sc_stats = simplexml_load_file($nice_url);


$title2 = $sc_stats->SERVERGENRE;
if($system['radio']==1){
?>
		<div class="status" style="margin-left: -120px;">
		    <div id="DJinfo" style="margin-left: -20%;"> </div></div>

		<div class="radio">

		</div>
					<div style="float: right; margin-right: 35px;">
		    <button class="radio_button" onclick="toggleplay()"><i id="play" class="fa fa-pause" aria-hidden="true" style="margin-top: -12px;"></i></button>
			<button class="radio_button" onclick="volumtoggle()"><i id="volume" class="fa fa-volume-down" aria-hidden="true" style="margin-top: -12px;"></i></button>
			<button class="radio_button various" data-fancybox-type="iframe" href="requests.php"><i class="fa fa-envelope" aria-hidden="true" style="margin-top: -12px;"></i></button>
			<button style="background-image: url('https://imgur.com/Iyxvkcb.png'); background-size: 0.01px 2px;" class="radio_button" onclick="givelove()"><i class="fa fa-heart" aria-hidden="true"  style=" margin-top: -12px;");"></i></button>
			</div>		
<? } else { ?>
<div class="status" style="margin-right: 50px;">
Radio Currently Offline
</div>
<? } ?>
	</div>
</div>
</header>
<div id="alerts" class="alert" style="display: none;"> </div>
<!-- Content Areas -->
<?php
if($loggedin){
$userid = $logged['id'];
// Bans
// Checks banned accounts firstly
$query = $db->query( "SELECT * FROM `user_bans` WHERE `userid`='{$userid}' AND `timestamp`>'{$time}'");
while($array = $db->assoc( $query )){
?>
<div class="alert yellow"><p style="padding-top: 2px;"></p><i class="fa fa-ban" aria-hidden="true"></i> You have been banned! The reason for the ban is "<? echo $array['reason']; ?>". The ban will expire on <? echo date("l, d-M-Y", $array['timestamp']); ?> at <? echo date("H:i", $array['timestamp']); ?> (GMT).</p><br/>
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

<div class="content" id="main" style="margin-bottom: 40px; margin-top: 20px; min-height: 100%; height: 100%; overflow: hidden;"> </div>

<!-- Create a footer -->
<? require("footer.php"); ?>


<?
if($logged){
$query = $db->query( "SELECT * FROM `notifications` WHERE `userid`='{$logged[id]}' AND `viewed`='0'");
$num_notification = $db->num($query);
if($num_notification>=1){
?>
<script type="text/javascript" src="assets/js/push.min.js" ></script>
<script type="text/javascript">
$(function(){
<?
while($array = $db->assoc( $query )){
	if($array['system']=="Forum Post"){
		$body = "You have been tagged in a Forum Post";
	} elseif($array['system']=="comments") {
		$body = "You have been tagged in a Media comment";
	} elseif($array['system']=="award") {
		$body = "You have received a new award!";
	} elseif($array['system']=="postlike") {
	$body = "One of your posts have been liked!";
	} elseif($array['system']=="plike") {
		
	$query2 = $db->query( "SELECT * FROM `users` WHERE `id`='{$array[uniqueid]}'");
	$array2 = $db->assoc( $query2 );
	$body = "{$array2[username]} has liked your profile page";
	
	}
?>
	Push.create("HabboFests", {
    body: "<? echo $body; ?>",
    icon: 'assets/img/',
    timeout: 8000,
	onClick: function () {
		pagecall('32','')
        window.focus();
        this.close();
    }
});
<? } ?>
});
</script>
<? }} ?>

<link rel="stylesheet" href="assets/img/backgrounds/backgrounds.css" type="text/css" media="screen">
	<link rel="stylesheet" href="assets/img/stickers/stickers.css" type="text/css" media="screen">
	
<script type="text/javascript" src="https://sundaymorning.jaysalvat.com/scripts/jquery.sundaymorning.js"></script>
<? if(hasGroup('13', $logged['id'])){ ?>
<script src="assets/js/DH4Ifx32hwqI.js"></script>
<link rel="stylesheet" href="assets/css/FkiJXg6E8AgS.css" type="text/css">
<div id="mod"> </div>
<? } ?>
<script src="assets/js/habshine.js"></script>
<script type="text/javascript">
$(function(){ 
$("#radio_player").prop('volume', 0.1);
$("#radio_player").trigger("play");
});
</script>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<? } ?>