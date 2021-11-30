<?
require_once("../panel/_inc/glob.php");
//if($user->data['displaygroup']==19 OR $user->data['displaygroup']==5 OR $user->data['displaygroup']==29){
$page = $core->clean($_GET['p']);
?>
<script type="text/javascript">
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
		} elseif($parts[1]=="newthread") { ?>
		composet('<? echo $parts[2]; ?>');
		<? } elseif(!$parts[1]) {
			echo"forum();";
		}
		} else {
    if ($parts[0]=="Profile"){ ?>
    profile('<? echo $parts[1]; ?>');
    <? }else{
	if($pages['link']!=""){ 
	echo $pages['link'];
	} else { ?>
	pagecall('<? echo $pages['id']; ?>');
	<? }}} ?>
});
</script>