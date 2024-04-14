<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><?php
if(isset($_POST['uname'])== "10Jmdb@KFCmiam18" AND $_POST['psw']=="01ljdma14Cazs" ){
  ?>
  <p>tes un genie</p>

 <?php 
 header("Location: http://localhost/Prototype%20Site%20Web/Poulailler%20automatise%202.php"); 
}
else{
   echo "Mot de passe incorrect";
}
 ?>
</body>
</html>