
<!DOCTYPE html>
<html>
<title>Flines-lez-Râches</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<style>

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: white;
  color: black;

  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Automated Carrol</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">The project</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
      <button class="w3-bar-item w3-button" onclick="document.getElementById('id01').style.display='block'"><i style="font-size:24px" class="fa">&#xf2be;</i></button>
    </div>
  </div>
</div>
<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="conexion1.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Images du site/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname" style="letter-spacing:4px"><b>Login</b></label>
      <input type="text" placeholder="Entrer pseudo" name="uname" required>

      <label for="psw" style="letter-spacing:4px"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer mot de passe" name="psw"  required>
        
      <button type="submit" style="letter-spacing:4px">Conexion</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color:#333;color: white;letter-spacing:4px" >Cancel</button>
      <span class="psw">Password<a href="#" style="text-decoration: none;">forget?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="Images du site/chicken.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Automated Carrol</b></span> </h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"></h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
       <img src="Images du site/group.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
       <img src="Images du site/cris.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
       <img src="Images du site/hug.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <img src="Images du site/group.png" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
       <img src="Images du site/group2.png" alt="House" style="width:97%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <img src="Images du site/houss.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
            <img src="Images du site/all.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <img src="Images du site/group2.png" alt="House" style="width:97%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Hello, in order to interest the children in raising chickens at home, the city of Flines-Lez-Raches wants to equip 4 primary schools and kindergarten with an educational hen house, the objective being:<ul>
  <li>Recycle leftover food and green waste</li>
  <li>Control the quality and origin of food</li>
  <li>Factories production "Facts - House"</li>
</ul> he main purpose of this approach is to empower children in
charging them to take care of the chickens, the maintenance of the henhouse and thus raise them
respect for animals during school time.
</p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Images du site/Hugo.png" alt="Hugo" style="width:100%">
      <h3>Hugo Payen</h3>
      <p class="w3-opacity">AC</p>
      <p>Architect of the project.</p>
      <p><button class="w3-button w3-light-grey w3-block" style="margin: 82px 0px 0px 0px"><a href="Contact1.html" style="text-decoration: none;">Contact</a></button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Images du site/Alexis.png" alt="Alexis" style="width:100%">
      <h3>Alexis Delporte</h3>
      <p class="w3-opacity">SIN</p>
      <p>Take care of the temperature and hygrometry. In addition to that, manages the food and water supply of the project.</p>
      <p><button class="w3-button w3-light-grey w3-block" style="margin: 38px 0px 0px 0px"><a href="Contact2.html" style="text-decoration: none;">Contact</a></button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Images du site/Christ.png" alt="Christ" style="width:100%">
      <h3>Christ Matsanga</h3>
      <p class="w3-opacity">SIN</p>
      <p>Web developer of the project.</p>
      <p><button class="w3-button w3-light-grey w3-block" style="margin: 82px 0px 0px 0px"><a href="Contact3.html" style="text-decoration: none;">Contact</a></button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Images du site/Houssam2.png" alt="Hossam" style="width:100%">
      <h3>Houssam Laamimat</h3>
      <p class="w3-opacity">SIN</p>
      <p>Manages to manage the opening and closing of the entrances. In addition to that, manages the food and water supply of the project.</p>
      <p><button class="w3-button w3-light-grey w3-block"><a href="Contact4.html" style="text-decoration: none;">Contact</a></button></p>
    </div>
  </div>

  
  
<!-- Image of location/map -->
<div class="w3-container">
  <img src="Images du site/ecole.jpg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p><a href="Mention légale.html" style="text-decoration: none;" >Legal notice </a>.<a href="Réglementation.html" style="text-decoration: none;"> 
Regulation</a></p>
</footer>

</body>
</html>
