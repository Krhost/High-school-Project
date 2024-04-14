
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
    <a href="#home" class="w3-bar-item w3-button"><b>Poulailler Automatisé</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Le project</a>
      <a href="#about" class="w3-bar-item w3-button">A propos</a>
      <a href="Contacta.html" class="w3-bar-item w3-button">Contact</a> 
      <a href="Capt.html" class="w3-bar-item w3-button"><i style="font-size:24px;color: green" class="fa">&#xf2be;</i></a>
      <a href="" class="w3-bar-item w3-button">Déconnection</a> 
      <a action="conexion1.php" method="POST" class="w3-bar-item w3-button">Capteurs</a>
      <a href="camera pi.html" class="w3-bar-item w3-button">Camera Pi</a> 

     </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="Images du site/chicken.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Poulailler Automatisé</b></span> </h1>
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
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">A propos</h3>
    <p>
Bonjour, afin d'interesser les enfants à l'elevage des poules chez eux, la ville de Flines-Lez-Râches souhaite équiper 4 écoles primaires et l'école maternelle avec un poulailler éducatif, l'objectif étant de:<ul>
  <li>Recycler les restes de repas et déchets verts</li>
  <li>Contrôler la qualité et l'origine des aliments</li>
  <li>La production d'engrais "Faits - Maison"</li>
</ul>
Cette démarche a pour but principal de responsabiliser les enfants en
les chargeant de s'occuper des poules, de l'entretien du poulailler et donc les sensibiliser
au respect des animaux pendant le temps scolaire.
</p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Images du site/Hugo.png" alt="Hugo" style="width:100%">
      <h3>Hugo Payen</h3>
      <p class="w3-opacity">AC</p>
      <p>Architecte du projet.</p>
      <p><button class="w3-button w3-light-grey w3-block" style="margin: 82px 0px 0px 0px"><a href="Contact1a.html" style="text-decoration: none;">Contact</a></button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Images du site/Alexis.png" alt="Alexis" style="width:100%">
      <h3>Alexis Delporte</h3>
      <p class="w3-opacity">SIN</p>
      <p>S'occupe de gérer la température et l'hygrométrie. En plus de ça, gère le stock de nouriture et d'eau du projet.</p>
      <p><button class="w3-button w3-light-grey w3-block" style="margin: 38px 0px 0px 0px"><a href="Contact2a.html" style="text-decoration: none;">Contact</a></button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Images du site/Christ.png" alt="Christ" style="width:100%">
      <h3>Christ Matsanga</h3>
      <p class="w3-opacity">SIN</p>
      <p>Développeur Web du projet.</p>
      <p><button class="w3-button w3-light-grey w3-block" style="margin: 82px 0px 0px 0px"><a href="Contact3a.html" style="text-decoration: none;">Contact</a></button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="Images du site/Houssam2.png" alt="Hossam" style="width:100%">
      <h3>Houssam Laamimat</h3>
      <p class="w3-opacity">SIN</p>
      <p>S'occupe de gérer l'ouverture et la fermeture des entrées. En plus de ça, gère le stock de nouriture et d'eau du projet.</p>
      <p><button class="w3-button w3-light-grey w3-block"><a href="Contact4a.html" style="text-decoration: none;">Contact</a></button></p>
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
  <p><a href="Mention légalea.html" style="text-decoration: none;" >Mention légale </a>.<a href="Réglementationa.html" style="text-decoration: none;"> Réglementation</a></p>
</footer>

</body>
</html>
