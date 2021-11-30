<?php
require("../panel/_inc/glob.php");
$furnid = $core->clean($_POST['furnid']);
$name = $core->clean($_POST['name']);
if($furnid && $name){
    $db->query("UPDATE `marketfurni` SET `timestamp`='$time', `title`='$name' WHERE `id`='$furnid'");
    ?>
<div style="padding: 5px; background: #F8F8F8; border-radius: 6px; margin: 5px 0px 5px 0px;">Thanks, that furni name has been updated to: <? echo $name; ?></div>
<?
} else {
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
    $(function(){
        var furni = $( ".furni" ).length;
        if ( furni == 0 ){
            location.reload();
        }
    });
    function change(id){
     $.ajax({
    type: "POST",
    url: "topsecret.php",
    data: "furnid=" + id +"&name=" + $("#"+id).val(),
     success: function(msg){
          $("#complete").html(msg);
         $("#"+id+"_block").hide();
     }
});
}
    function change2(id,name){
     $.ajax({
    type: "POST",
    url: "topsecret.php",
    data: "furnid=" + id +"&name=" + name,
     success: function(msg){
          $("#complete").html(msg);
          $("#"+id+"_block").hide();
     }
});
}
</script>
<style>
Body{
    background: url(assets/images/grid.png) repeat;
    }
</style>
    </head><body>
    
<div style="width: 36%; left: 50%; position: absolute; margin-left: -18%; padding: 15px; border-radius: 6px; background: #31cc91; border: 1px solid #54635d;">
    
    <div id="complete"></div>
<table border="1" cellspacing="0" cellpadding="6" style="width: 98%;">
<tr>
    <td style="width: 30%;">IMAGE</td>
    <td style="width: 35%;">OLD NAME</td>
    <td style="width: 35%;">NEW NAME</td>
</tr>
<?
$search2 = $db->query("SELECT * FROM `marketfurni` WHERE `timestamp`='1604544398' ORDER BY RAND()LIMIT 30");
        while($furni = $db->assoc($search2)){
                    ?> 
<tr class="furni" id="<? echo $furni[id]; ?>_block">
    <td><img src="<? echo $furni['image']; ?>" style="width: 100px; height: 100px;"></td>
    <td><? echo $furni[title]; ?></td>
    <td><input type="text" id="<? echo $furni[id]; ?>" placeholder="Enter Name of Furni" onchange="change('<? echo $furni[id]; ?>')"><br?>
        </br><br/>
    <span onclick="change2('<? echo $furni[id]; ?>','<? echo $furni[title]; ?>')" style="cursor: pointer;">SAME AS OLD NAME</span>
    </td>
</tr>
<?    
        }
?>
</table></div>
    </body>
</html>
<? } ?>
    