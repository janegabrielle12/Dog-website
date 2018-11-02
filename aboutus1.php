<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<title>About us</title>
    
 <body style="font-family:Verdana;">
<!--header-->     
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
    display: block;
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


    
    <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script><div class="topnav" id="myTopnav">
    
  <a href="index1.php" >Home</a>
  <a href="breedopedia1.php">Breedopedia</a>
  <a href="index.php">Shopping</a>
   <a href="reg1.php" >Signup</a>
    <?php 
    
    if(isset($_SESSION['username'])){
        echo $_SESSION['username'];
    
 echo  "<a href='logout.php'>Logout</a>";
    }else{
        echo  "<a href='login1.php'>Login</a>";
    }
      
      ?>
 <a href="aboutus1.php" class="active">About us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    
</div>
<!--topbar end-->
    
    <!-- main body-->
    
    
<div class="content"> <!--div start-->
    
<style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 600px;  /* The height is 400 pixels */
        width: 50%;  /* The width is the width of the web page */
       }
</style>
  
  <body>
       <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <h3>We are located here</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
        
        
// Initialize and add the map
function initMap() {
  // The location of Fcrit
  var Fcrit = {lat: 19.07553, lng: 72.991722};
  // The map, centered at Fcrit
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4,
                                       center: Fcrit});
  // The marker, positioned at Fcrit
  var marker = new google.maps.Marker({position: Fcrit, map: map});
}
    </script>
      
 <!--google key api-->     
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8D9MSnZ1bWO18p4WMSL01BIsMhcm2D9c&callback=initMap">
    </script>
    </body>
    
    
    
   
    
                      
</div><!--div end-->
     
     <!--footer-->
<div style="background-color:dimgray;
            text-align:center;
            padding:50px;
            margin-top:30px;
            font-size:20px;"><h1>Owned By DogTech.com</h1></div>
    
     </body></body></head></html>
    
