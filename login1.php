<?php
session_start();
if(isset($_POST["Submit"])){

$connect=new mysqli('localhost', 'root', '', 'form');

if($connect->connect_error){
   die('connection failed');
}else
echo 'connection established';

$username = mysqli_real_escape_string($connect,$_POST['username']);
 

$password = mysqli_real_escape_string($connect,$_POST['password']);

$sql="SELECT username FROM reg WHERE Username='$username' AND Password='$password' ";

$result= $connect->query($sql);

if($result-> num_rows> 0 ){

    while($row=$result->fetch_assoc()){
        
        
echo "<br>You are logged in: " . $row['username']; 
       header("Location: index1.php");
         $_SESSION['username'] = $row['username'];

}
}else
echo "<br>Username and password don't match bro";  


}
?> 




<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<title>Registration</title>
    
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

<div class="topnav" id="myTopnav">
    <li><a href="aboutus1.php" >Home</a>
  <a href="breedopedia1.php">Breedopedia</a>
  <a href="index.php">Shopping</a>
  
  <a href="reg1.php">Signup</a>
<a href="login1.php" class="active">Login</a>
 <a href="aboutus1.php">About us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a></li>
  
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
    
    <!-- main body-->
<div class="content"> <!--div start-->
    
  
     <right>
         <form action="login1.php" method="post"><table>
            <tr>
                <th></th>
                <h1><th>LOGIN</th></h1>
                </tr>
                
                
                <tr>
                    <td>Username</td>
                    <td><input type="text"   class="username" maxlength="30" name="username" placeholder="Username" required=""></td>
                                       
                </tr>
                
                
                 <tr>
                    <td>Passwords</td>
                    <td><input type="password" class="password"maxlength="10" name="password" placeholder="Password" required=""></td>
                                        
                </tr> 
                
                
              <tr><center>
                    <td></td>
                    <td><input type ="submit" class="submit" value="Submit" name="Submit" onclick="option.php'"></center>
                       
                     
<style>
.username{
width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: white;
color: lightskyblue;
border: 5px solid lightblue;
border-radius: 10px;
        }
    
.password{
width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: white;
color: lightskyblue;
border: 5px solid lightblue;
border-radius: 010px;
        }
    
.submit{
margin-left: 65px;

width: 150px;
padding: 10px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background-color: white;
color: midnightblue;
border: 5px solid lightblue;
border-radius: 10px;
        }
    </style>
                    
    
    
             </tr></table></form></right>                    
            
    </div>   <!--div end-->
     
     <!--footer-->
<div style="background-color:dimgray;
            text-align:center;
            padding:50px;
            margin-top:30px;
            font-size:20px;"><h1>Owned By DogTech.com</h1></div>
    
                </body></body></head></html>
    
