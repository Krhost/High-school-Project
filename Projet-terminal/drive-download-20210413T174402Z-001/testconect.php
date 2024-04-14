
<?php
include("../functions/pdo.php");
$sql = "INSERT INTO alerts(id_carte,bpm,temp,pos,alert_auto) 
		VALUES(".$_GET["id_carte"].",".$_GET["bpm"].",".$_GET["temp"].",".$_GET["pos"].",".$_GET["alert_auto"].")";
?>