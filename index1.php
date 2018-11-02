<?php session_start(); ?>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

    
 <body style="font-family:Verdana;">
<!--header-->   
     
     
     <div class="header">
	<h2></h2>
</div>
<div class="content">
    
     
     
<div style="background-color:#f1f1f1;padding:15px;">
<h1>DogTech.com</h1>
<h2><p><marquee>Welcome to the world of Dog's</marquee></p></h2>
</div>
     
     
     <!--topbar-->
     <style>
   body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: cornflowerblue;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: b;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<body>

<div class="topnav" id="myTopnav">
  <a href="aboutus1.php" class="active">Home</a>
  <a href="breedopedia1.php">Breedopedia</a>
  <a href="index.php">Shopping</a>

  <a href="reg1.php">Signup</a>
    <?php 
    
    if(isset($_SESSION['username'])){
       
    
 echo  '<a href="logout.php">Logout</a>';
    }else{
        echo '<a href="login1.php">Login</a>';
    }
      
      ?>
 <a href="aboutus1.php">About us</a>
    
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
    
    <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
     <!--topbar end-->
     
   
    <!--automatic slideshow-->   
                    <div class="content"> <!--div start-->
    
<!--automatic slideshow-->   
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/14 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 1.5s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3.5s;
  animation-name: fade;
  animation-duration: 3.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
                        
                        

<body>

<h2>Photo Gallery</h2>


<div class="slideshow-container">

<div class="mySlides fade">
    <div class="numbertext">1/5</div>
  <img src="img\dog1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">2/5</div>
  <img src="img\dog2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">3/5</div>
  <img src="img\dog3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
    
    <div class="mySlides fade">
    <div class="numbertext">4/5</div>
  <img src="img\dog4.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
    
    <div class="mySlides fade">
    <div class="numbertext">5/5</div>
  <img src="img\dog14.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
    
    
  
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
</div>


    
    
    

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    
<!--Dog Names-->
    <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>



<h1>Name your Dog</h1>
<tr>
<h4 style="text-align: left;"><strong>Male Name</strong></h4>
<table style="width:100%">
<tbody>
<tr>
<td width="101">A.J.</td>
<td width="112">Boss</td>
<td width="111">Cobb</td>
<td width="115">Ferris</td>
<td width="107">Keane</td>
<td width="93">Pistol</td>
<td width="95">Tiger</td>
</tr>
<tr>
<td width="101">Abbot</td>
<td width="112">Boyd</td>
<td width="111">Cobra</td>
<td width="115">Fetch</td>
<td width="107">Keaton</td>
<td width="93">Pluto</td>
<td width="95">Tito</td>
</tr>
<tr>
<td width="101">Andy</td>
<td width="112">Bradshaw</td>
<td width="111">Cochise</td>
<td width="115">Finnegan</td>
<td width="107">Keats</td>
<td width="93">Poochie</td>
<td width="95">Toby</td>
</tr>
    <tr>
<td width="101">Adler</td>
<td width="112">Brain</td>
<td width="111">Coco (Cocoa)</td>
<td width="115">Flash</td>
<td width="107">Kendrick</td>
<td width="93">Porkchop</td>
<td width="95">Toto</td>
</tr>
<tr>
<td width="101">Admiral</td>
<td width="112">Brainerd</td>
<td width="111">Cody (Codi)</td>
<td width="115">Fletcher</td>
<td width="107">Khan</td>
<td width="93">Porter</td>
<td width="95">Trapper</td>
</tr>
<tr>
<td width="101">Adonis</td>
<td width="112">Brandon</td>
<td width="111">Colbert</td>
<td width="115">Forrest</td>
<td width="107">Killer</td>
<td width="93">Preston</td>
<td width="95">Travis</td>
</tr>
<tr>
<td width="101">Aero</td>
<td width="112">Brendan</td>
<td width="111">Coleman</td>
<td width="115">Francois</td>
<td width="107">King</td>
<td width="93">Prince</td>
<td width="95">Tripper</td>
</tr>
<tr>
<td width="101">Aesop</td>
<td width="112">Brendt</td>
<td width="111">Collin</td>
<td width="115">Freddie (Fred)</td>
<td width="107">Kingston</td>
<td width="93">Princeton</td>
<td width="95">Trooper</td>
</tr>
<tr>
<td width="101">Afro</td>
<td width="112">Brent</td>
<td width="111">Comet</td>
<td width="115">Frederick</td>
<td width="107">Kipling</td>
<td width="93">Puck</td>
<td width="95">Troy</td>
</tr>
    <tr>
<td width="101">Agatha</td>
<td width="112">Brently</td>
<td width="111">Connor (Conner)</td>
<td width="115">Frisco</td>
<td width="107">Klaus</td>
<td width="93">Pugsley</td>
<td width="95">Tucker</td>
</tr>
<tr>
<td width="101">Alan</td>
<td width="112">Brett</td>
<td width="111">Cookie Monster</td>
<td width="115">Fritz</td>
<td width="107">Kodiak</td>
<td width="93">Pyro</td>
<td width="95">Tugg</td>
</tr>
<tr>
<td width="101">Alcott</td>
<td width="112">Brian</td>
<td width="111">Cooper</td>
<td width="115">Fuzzy</td>
<td width="107">Kong</td>
<td width="93">Quentin</td>
<td width="95">Tyson</td>
</tr>
<tr>
<td width="101">Aldous</td>
<td width="112">Brian Griffin</td>
<td width="111">Copernicus</td>
<td width="115">Gabe</td>
<td width="107">Koopa</td>
<td width="93">Quinsy</td>
<td width="95">Uggie</td>
</tr>
<tr>
<td width="101">Alfonso</td>
<td width="112">Briar</td>
<td width="111">Copper</td>
<td width="115">Gannon (Ganon)</td>
<td width="107">Kramer</td>
<td width="93">Quixote</td>
<td width="95">Ulysses</td>
    </tr></tbody></table></tr></body>
    
<body>    
<h1>Name your Dog</h1>
<tr>
<h4 style="text-align: left;"><strong>Female Name</strong></h4>
<table style="width:100%">
<tbody>
    
<tr>
<td width="99">A.J.</td>
<td width="116">Blizzard</td>
<td width="112">Diamond</td>
<td width="116">Izzybella</td>
<td width="103">Mai Tai</td>
<td width="111">Pippi</td>
<td width="115">Sunshine</td>
</tr>
<tr>
<td width="99">Abby (Abigail)</td>
<td width="116">Blondie</td>
<td width="112">Dido</td>
<td width="116">Jackie</td>
<td width="103">Maisie (Maisy)</td>
<td width="111">Pixie</td>
<td width="115">Sweet Pea</td>
</tr>
<tr>
<td width="99">Addie</td>
<td width="116">Blue (Blu)</td>
<td width="112">Diva</td>
<td width="116">Jada</td>
<td width="103">Malika</td>
<td width="111">Poet</td>
<td width="115">Sweetie</td>
</tr>
<tr>
<td width="99">Addison</td>
<td width="116">Blueberry</td>
<td width="112">Dixie</td>
<td width="116">Jade</td>
<td width="103">Mamba</td>
<td width="111">Polly</td>
<td width="115">Sydney (Cydney)</td>
</tr>
<tr>
<td width="99">Adelaide</td>
<td width="116">Bonnie</td>
<td width="112">Dolly</td>
<td width="116">Jamaica</td>
<td width="103">Mamie</td>
<td width="111">Pookie</td>
<td width="115">Symphony</td>
</tr>
<tr>
<td width="99">Adele</td>
<td width="116">Boo (Boo Boo)</td>
<td width="112">Dora</td>
<td width="116">Janie</td>
<td width="103">Mandy</td>
<td width="111">Poppy</td>
<td width="115">Taffy</td>
</tr>
<tr>
<td width="99">Aggy</td>
<td width="116">Boots</td>
<td width="112">Dorothy</td>
<td width="116">Jasmine</td>
<td width="103">Maple</td>
<td width="111">Porkchop</td>
<td width="115">Tallulah</td>
</tr>
<tr>
<td width="99">Aida</td>
<td width="116">Brandy (Brandi)</td>
<td width="112">Dot</td>
<td width="116">Java</td>
<td width="103">Marcie</td>
<td width="111">Portia</td>
<td width="115">Tara</td>
</tr>
<tr>
<td width="99">Airabell</td>
<td width="116">Bree (Bri)</td>
<td width="112">Dottie</td>
<td width="116">Jazzy</td>
<td width="103">Maria</td>
<td width="111">Precious</td>
<td width="115">Tasha</td>
</tr>
<tr>
<td width="99">Aja</td>
<td width="116">Breezy</td>
<td width="112">Duchess</td>
<td width="116">Jellybean</td>
<td width="103">Marigold</td>
<td width="111">Primrose (Prim)</td>
<td width="115">Taylor</td>
</tr>
<tr>
<td width="99">Akeya</td>
<td width="116">Bridget (Brigitte)</td>
<td width="112">Eartha</td>
<td width="116">Jemima</td>
<td width="103">Marley (Marly)</td>
<td width="111">Princess</td>
<td width="115">Teddy (Ted)</td>
</tr>
<tr>
<td width="99">Akira</td>
<td width="116">Brooke (Brook)</td>
<td width="112">Ebony</td>
<td width="116">Jersey</td>
<td width="103">Marshmallow</td>
<td width="111">Puddin</td>
<td width="115">Teegan</td>
</tr>
<tr>
<td width="99">Alaska</td>
<td width="116">Brooklyn</td>
<td width="112">Echo</td>
<td width="116">Jessie</td>
<td width="103">Martha</td>
<td width="111">Pumpkin</td>
<td width="115">Tessa (Tess)</td>
</tr>
<tr>
<td width="99">Alba</td>
<td width="116">Brownie</td>
<td width="112">Effie</td>
<td width="116">Jewel</td>
<td width="103">Mary</td>
<td width="111">Punky</td>
<td width="115">Thea (Theia)</td>
</tr>
<tr>
<td width="99">Alex (Alyx)</td>
<td width="116">Brunhilda</td>
<td width="112">Eleanor</td>
<td width="116">Jezebel</td>
<td width="103">Mashmallow</td>
<td width="111">Pyro</td>
<td width="115">Theodora</td>
</tr>
<tr>
<td width="99">Alexia</td>
<td width="116">Bubblegum</td>
<td width="112">Elektra</td>
<td width="116">Jill (Jilly)</td>
<td width="103">Matilda</td>
<td width="111">Queen</td>
<td width="115">Tiara</td>
</tr>
<tr>
<td width="99">Alexis</td>
<td width="116">Bubbles</td>
<td width="112">Elf</td>
<td width="116">Jinx</td>
<td width="103">Mavis</td>
<td width="111">Queenie</td>
<td width="115">Tickles</td>
</tr>
<tr>
<td width="99">Ali</td>
<td width="116">Buddy</td>
<td width="112">Ella</td>
<td width="116">Joan of Arc</td>
<td width="103">May (Mae)</td>
<td width="111">Quinn (Quin)</td>
<td width="115">Tiffany</td>
</tr>
<tr>
<td width="99">Alice</td>
<td width="116">Buffy</td>
<td width="112">Ellie</td>
<td width="116">Joanna</td>
<td width="103">Maya</td>
<td width="111">Quinsy</td>
<td width="115">Tiger</td>
</tr>
<tr>
<td width="99">Allie</td>
<td width="116">Bunny</td>
<td width="112">Eloise</td>
<td width="116">Jojo</td>
<td width="103">Meadow</td>
<td width="111">Rachel</td>
<td width="115">Tilly</td>
</tr>
<tr>
<td width="99">Alma</td>
<td width="116">Buttercup</td>
<td width="112">Elsa</td>
<td width="116">Joplin</td>
<td width="103">Medusa</td>
<td width="111">Rainbow</td>
<td width="115">Timber</td>
</tr>
<tr>
<td width="99">Alva</td>
<td width="116">Butternut</td>
<td width="112">Ember</td>
<td width="116">Jordan</td>
<td width="103">Megan</td>
<td width="111">Raven</td>
<td width="115">Tinkerbell</td>
</tr>
<tr>
<td width="99">Amanda</td>
<td width="116">Butterscotch</td>
<td width="112">Emerald</td>
<td width="116">Josie</td>
<td width="103">Melody</td>
<td width="111">Reagan</td>
<td width="115">Tizzy</td>
</tr>
<tr>
<td width="99">Amber</td>
<td width="116">Button (Buttons)</td>
<td width="112">Emma</td>
<td width="116">Joy</td>
<td width="103">Mercedes</td>
<td width="111">Reba</td>
<td width="115">Tootsie</td>
</tr>
<tr>
<td width="99">Amberly</td>
<td width="116">Caitlin</td>
<td width="112">Emmie (Emmy)</td>
<td width="116">Jude</td>
<td width="103">Mercy</td>
<td width="111">Rebel</td>
<td width="115">Tori</td>
</tr>
<tr>
<td width="99">Ambrosia</td>
<td width="116">Calisto</td>
<td width="112">Enid</td>
<td width="116">Jules</td>
<td width="103">Mia</td>
<td width="111">Rhea</td>
<td width="115">Tricky</td>
</tr>
<tr>
<td width="99">Amelia</td>
<td width="116">Callie (Cali, Kali)</td>
<td width="112">Erin</td>
<td width="116">Julianna</td>
<td width="103">Midnight</td>
<td width="111">Rigby</td>
<td width="115">Trixie</td>
</tr>
<tr>
<td width="99">Amelie</td>
<td width="116">Camilla</td>
<td width="112">Esme</td>
<td width="116">Juliette (Juliet)</td>
<td width="103">Mikayla</td>
<td width="111">Riley (Rylee)</td>
<td width="115">Trudy</td>
</tr>
<tr>
<td width="99">Amethyst</td>
<td width="116">Camille</td>
<td width="112">Esther</td>
<td width="116">June</td>
<td width="103">Miley</td>
<td width="111">Ripley</td>
<td width="115">Tulip</td>
</tr>
<tr>
<td width="99">Amy</td>
<td width="116">Candy (Candie)</td>
<td width="112">Eva</td>
<td width="116">June Bug</td>
<td width="103">Millie</td>
<td width="111">River</td>
<td width="115">Ursa</td>
</tr>
<tr>
<td width="99">Anastasia</td>
<td width="116">Cappuccino</td>
<td width="112">Eve</td>
<td width="116">Juno</td>
<td width="103">Mimi</td>
<td width="111">Robin</td>
<td width="115">Ursula</td>
    </tr></tbody>
    </table>
    </tr>
    </body>
         
                       
</div><!--div end-->
     
     
     
     
     

    

   
<!--footer-->
<div style="background-color:dimgray;
            text-align:center;
            padding:50px;
            margin-top:30px;
            font-size:20px;"><h1>Owned By DogTech.com</h1></div>
    
    </body><head><body>
    </body></head></div></body></head></html>
