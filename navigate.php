<?php
require_once("../panel/_inc/glob.php");
//if($user->data['displaygroup']==19 OR $user->data['displaygroup']==5 OR $user->data['displaygroup']==29){
$page = $core->clean($_GET['p']);
if(!$page){
	$page = "home";
}
$pagegrab = $db->query( "SELECT * FROM `site_pages` WHERE `pageid`='{$page}'");
$pages = $db->assoc( $pagegrab );

if($_GET['login']==1){
echo $core->redirect( "index.php?p=home" );
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>HabboFests ~ The Festival of Habbo</title>
	<meta name="description" content="...">
	<meta name="keywords" content="Habbofests, habbo, hotel">
	<link rel="icon" href="uploads/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/buttons.css" type="text/css">
	<link rel="stylesheet" href="assets/css/forum.css" type="text/css">
	<link rel="stylesheet" href="assets/css/blue.css" type="text/css" id="skin">
	<link rel="stylesheet" href="assets/css/spectrum.css" type="text/css">
	
	<link rel="stylesheet" href="assets/css/style.css?v=39424541" type="text/css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" ></script>
</head>
<body>
    <div id="useralerts"> </div>
    <? if($user->hasGroup('13')){ ?><div id="moddash"> </div><div id="moddash2"> </div></div><div id="spacercf"> </div><div id="spacercf2" class="onclick" onclick="modtool('home','')"><img src="uploads/mod_1.gif"></div><? } ?>
<audio src="https://proxima.shoutca.st:8314/live" style="display: none;" id="radio_player" autoplay></audio>
<div id="overlay" onclick="popupclose()"> </div>
<div id="popupmod"> </div>
<!--<div class="fansite"></div>-->

<div class="top_nav">
	<div class="content">
		<ul>
			<li><span><i class="fa fa-tint" aria-hidden="true"> </span></i>
				<div class="cores">
					<div style="background-color: #D75E5E" data-path="assets/css/red.css"></div>
					<div style="background-color: #F78549" data-path="assets/css/orange.css"></div>
					<div style="background-color: #B7DC63" data-path="assets/css/green.css"></div>
					<div class="active" style="background-color: #88CDF0" data-path="assets/css/blue.css"></div>
					<div style="background-color: #7878BA" data-path="assets/css/purple.css"></div>
				</div>
			</li>
		</ul>

		<ul class="right">
		<? if( $user->loggedIn ) { ?>
		<li><span id="usertext">Welcome back <? $ids = $user->data[id]; echo username($ids); ?></span></li>
		<li class="onclick" onclick="profile('<? echo $user->data['username']; ?>')"><span><i class="fa fa-user" aria-hidden="true"></i></span></li>
		<li><span><i class="fa fa-cog" aria-hidden="true"></i></span></li>
		<li onclick="logout()" class="onclick"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span></li>
		<? }else{ ?>
			<li onclick="accountLogin()" class="onclick"><span><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in to an existing account</span></li>
			<li onclick="register()" class="onclick"><span><i class="fa fa-user-plus" aria-hidden="true"></i> Register Today</span></li>
		<? } ?>
		</ul>
	</div>
</div>

<nav>
	<div class="content">
		<ul>
			<li class="home onclick" onclick="pagecall('6')"> 
				<div class="msg"><i class="fa fa-home" aria-hidden="true"></i> Home</div>
				<div class="icon"></div>
			</li>
			<li class="habclub">
				<div class="msg"><i class="fa fa-magic" aria-hidden="true"></i> HabboFests</div>
				<div class="icon"></div>
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
				<div class="msg"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> Radio</div>
				<div class="icon"></div>
				<ul>		
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='2' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				?>
<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? } ?>
				</ul>
			</li>
			<li class="habbohotel">
				<div class="msg"><i class="fa fa-life-ring" aria-hidden="true"></i> Habbo</div>
				<div class="icon"></div>
				<ul>
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='3' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? } ?>
				</ul>
			</li>
			<li class="comunidade">
				<div class="msg"><i class="fa fa-headphones" aria-hidden="true"></i> Community</div>
				<div class="icon"></div>
				<ul>
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='5' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				?>
					<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? } ?>
				</ul>
			</li>
			<li class="contato">
				<div class="msg"><i class="fa fa-male" aria-hidden="true"></i> Forum</div>
				<div class="icon"></div>
				<ul>
				<?php
				$snav = $db->query( "SELECT * FROM `site_pages` WHERE `category`='6' AND `show`='1' ORDER BY weight ASC");
				while($subnav = $db->assoc( $snav )){
				?>
<li <? if($subnav['link']){ ?>onclick="<? echo $subnav['link']; ?>"<? }else{ ?>onclick="pagecall('<? echo $subnav['id']; ?>','')"<? } ?>><? echo $subnav['title']; ?></li>
				<? } ?>
				</ul>
			</li>
		</ul>
	</div>
</nav>

<header>
	<div class="content">
				<div id="logo" class="onclick" onclick="pagecall('6')"> </div>
				<div class="clouds cloud"> </div>
		<div class="pesquisa">
			<div class="habbo" style="background-image: url(https://www.habbo.com/habbo-imaging/avatarimage?&user=<? if( $user->loggedIn ) { echo $user->data['habbo']; }else{ ?>Mrb.b<? } ?>&action=wlk&direction=2&head_direction=2&img_format=png&gesture=std&headonly=0&size=s);"></div>
			<input type="text" name="search" id="search" placeholder="Search HabShine...">
			<div class="lupa"><i class="fa fa-search" aria-hidden="true"></i></div>
		</div>
		
		<div class="btn_info">
			<button onclick="window.open('https://twitter.com/HabshineNet','_blank')"><i class="fa fa-twitter" aria-hidden="true"></i></button>
			<button onclick="window.open('https://www.facebook.com/habshineNet/','_blank')"><i class="fa fa-facebook" aria-hidden="true"></i></button>
		</div>

	</div>
</header>

<div class="top_bar">
	<div class="content">
<audio id="myAudio" controls="" autoplay="">
<source src="https://habbofestsradio.radioca.st/live" type="audio/mpeg" autoplay="true">
Your browser does not support the audio element.
</audio>
		<div class="online">
			<div class="home onclick" onclick="pagecall('6')"><i class="fa fa-home" aria-hidden="true"></i></div>
			<div class="breadcrumb" id="breadcrumb"> </div>
		</div>

		<div class="status" id="DJinfo">

		</div>

		<div class="radio">
			<button class="azul" onclick="popupmod('radio/requests')"><i class="fa fa-envelope" aria-hidden="true"></i></button>
			<div class="vermelho" id="thumbs"> </div>
			<button class="laranja" onclick="toggleplay()"><i id="play" class="fa fa-pause" aria-hidden="true"></i></button>
			<button class="verde" onclick="volumtoggle()"><i id="volume" class="fa fa-volume-down" aria-hidden="true"></i></button>
			<div class="users amarelo" id="listeners"><i class="fa fa-headphones" aria-hidden="true"></i> <span>...</span></div>
		</div>

	</div>
</div>

<div class="bottom_bar"></div>
<div id="devmod" onclick="closemod('devmod')" style="background: rgba(255,255,255,0.7); border-radius: 4px; position: absolute; z-index: 11; left: 50px; top: 150px; height: auto; width: 390px; padding: 6px;">
Key Features to Complete:<br/>
# Home / Profile System (Duration: 1.5 Days)<br/>
#Request Line (Duration: 2 Hours max)<br/>
#Forum Threads (Duration: 1 Day)<br/>
Pages to Complete: Profile of the Month / Habbo Imager / Poll / Survey<br/>
#WIP: Events Module - Homepage<br/>
#Users Currently Online Module<br/>
#Exit button on User Alerts (Duration: 5 mins)<br/>
#Give love button
<br/>

BUGS: {SESSION LOSS}, 
</div>

<div id="alerts" class="alert" style="display: none;"> </div>
<!-- Content Areas -->
<?php
if($user->loggedIn){
$userid = $user->data['id'];
// Bans
// Checks banned accounts firstly
$query = $db->query( "SELECT * FROM `user_bans` WHERE `userid`='{$userid}' AND `timestamp`>'{$time}'");
while($array = $db->assoc( $query )){
?>
<div class="alert yellow"><p style="padding-top: 2px;"></p><i class="fa fa-ban" aria-hidden="true"></i> You have been banned! The reason for the ban is "<? echo $array['reason']; ?>". The ban will expire on <? echo date("l, d-M-Y", $array['timestamp']); ?> at <? echo date("H:i", $array['timestamp']); ?> (GMT).</p><br/>
<p>Please note that all user services will be unavailable during your ban duration, points gained from official Habshine events will not be claimable and site only competitions and events will not be available to you.</p><br/>
<p>If you wish to appeal your ban, please head over to our support forums.</p></div>
<? }} ?>

<?php
// Warnings
// Checks warnings
$query = $db->query( "SELECT * FROM `warnings` WHERE `userid`='{$userid}' AND `full`>'{$time}' AND `user_read`='0'");
while($array = $db->assoc( $query )){
?>
<div class="alert yellow onclick" id="warning_<? echo $array['id']; ?>" onclick="warning('<? echo $array['id']; ?>')"><p style="padding-top: 2px;"></p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> You have received a warning: "<? echo $array['reason']; ?>". This will expire on <? echo date("l, d-M-Y", $array['full']); ?> at <? echo date("H:i", $array['full']); ?> (GMT)</p></div>
<? } ?>

<div class="content" id="main">
		
	
</div>
<!-- End Content Areas -->
<script type="text/javascript" src="https://sundaymorning.jaysalvat.com/scripts/jquery.sundaymorning.js"></script>
<? if($user->hasGroup( '13' )){ ?>
<script src="assets/js/DH4Ifx32hwqI.js"></script>
<link rel="stylesheet" href="assets/css/FkiJXg6E8AgS.css" type="text/css">
<div id="mod"> </div>
<? } ?>
<script src="assets/js/habshine.js"></script>
<script src="assets/js/forum.js"></script>
<script src="assets/js/autosize.min.js"></script>
<script src="assets/js/lity.js"></script>

<script src="assets/js/spectrum.js"></script>
<script src="assets/js/slider.js"></script>
<script src="assets/js/global.js"></script>
<script src="assets/js/notify.min.js"></script>

</body>
</html>
<? //} ?>