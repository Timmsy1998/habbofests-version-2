<?php
require("../panel/_inc/glob.php");
$directory = "assets/images/furni/furniture/icons/";
?>
<table border="1" cellspacing="0" cellpadding="5" width="40%">
<?
// Open a directory, and read its contents
if (is_dir($directory)){
  if ($opendirectory = opendir($directory)){
      $i = 0;
    while (($file = readdir($opendirectory)) !== false){
        if($file!='.' OR $file!='..'){
$a = array('.png','_icon');
$newfile = str_replace($a, '',$file);
$b = array('polyfon');
$newfile2 = str_replace($b, 'mode',$newfile);
$image = "assets/images/furni/furniture/icons/$file";  
$db->query("INSERT INTO `marketfurni` VALUES(NULL,'$newfile2','$image','$time')");
echo"$i<br/>";
    }
        $i++;
    }
    closedir($opendirectory);
  }
}
?>
    </table>