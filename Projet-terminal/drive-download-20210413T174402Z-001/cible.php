<!DOCTYPE html>
<html>
<head>

   <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    <title></title>
</head>
<style>
body {
  font-family: Segoe UI,Arial,sans-serif;font-weight:600
}

* {
    box-sizing: border-box;
}

.column {
	background-color:black;
	color:white;
    float: center;
    margin-top: 230px;
    width: 70%;
    padding: 20px;
}

 
}
.fa{
	margin-left: 30px;
	margin-top: 30px;
}

</style>
<body>  
 <div class="fa" style=""><i class="fa fa-envelope" style="font-size: 90px; margin-left: 30px;
  margin-top: 30px;"></i></div> 
	<center>
      <div class="column"action="tee.php" method="POST" name="opo">
	    <label for="fname" style="letter-spacing:4px;font-family:Segoe UI,Arial,sans-serif;font-weight:900">Je suis un/une : <?php echo htmlspecialchars($_POST['genre']);?></label><br><br>
        <label for="fname" style="letter-spacing:4px;font-family:Segoe UI,Arial,sans-serif;font-weight:900">je m'appelle : <?php $_POST['firstname'].''.$_POST['lastname'];?></label><br><br>
        <label for="fname" style="letter-spacing:4px;font-family:Segoe UI,Arial,sans-serif;font-weight:900">Voici mon E-mail : <?php    echo htmlspecialchars($_POST['e-mail']);?></label><br><br>
        <label for="fname" style="letter-spacing:4px;font-family:Segoe UI,Arial,sans-serif;font-weight:900">Je viens de : <?php    echo htmlspecialchars($_POST['Pays']); ?></label><br><br>
        <label for="fname" style="letter-spacing:4px;font-family:Segoe UI,Arial,sans-serif;font-weight:900">Je vous ecris à propos de : <?php echo htmlspecialchars($_POST['Sujet']); ?></label><br><br>
      </div>
    </center>
 
    
</body>
</html>
