<?php session_start(); ?>
<!DOCTYPE html>
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

  <a href="reg1.php" class="active">Signup</a>
     <?php 
    
    if(isset($_SESSION['username'])){
       
    
 echo  '<a href="logout.php">Logout</a>';
    }else{
        echo '<a href="login1.php">Login</a>';
    }
      
      ?>
        <a href="aboutus1.php">About Us</a>
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
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Register with us to get connected";
        if(isset($_POST['submit'])){
            
            $username=$_POST['Username'];  
            
            $email=$_POST['Email'];
            
            $state=$_POST['State'];
           
            
            $password=$_POST['Password'];
            
            
            
            $query="Insert into reg(Username, Email, State, Password)values('$username', '$email', '$state', '$password')";
            
            $run=mysqli_query($conn,$query);
            
            if($run){
                echo "data insert successfully";
            }
            
            else{
                echo "error:".mysqli_error($conn);
            }
        }
        ?>


            
 <right><h3>REGISTRATION FORM </h3></right>
        <div class="form">
            <form action="reg1.php"  method="POST">
            
           
        
        <right>
            <table>
            <tr>
                <th>Fill in your details</th>
                
              
                </tr>
                
                
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="Username" class="username" maxlength="30" placeholder="username" required></td>
                   
                </tr>
                
                
                <tr>
                    <td>Email</td>
                    <td><input id="email" input type="text" class="state"name="Email" placeholder="user@example.gov" list="defaultEmails" maxlength="25" required>

                 <datalist id="defaultEmails">
                 <option value="user@gmail.com">
                 <option value="user@yahoo.com">
                 <option value="user@hotmail.com">
                 <option value="user@outlook.com">
                 <option value="user@mail.com">
                 </datalist></td>  
                                        
                </tr>
                    
                    
                            
                        <tr> <td>State:</td> 
                            <td><input id="state" input type="text" class="state" name="State" placeholder="Enter your location" id="txt1" onkeyup="showHint(this.value)" required>
                                </td>
                                    </tr>
                           
                               
               
                <script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "statehint.php?q="+str, true);
  xhttp.send();   
}
</script>



                 <p>Suggestions: <span id="txtHint"></span></p>            
                
                
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="password" maxlength="10" name="Password" placeholder="password" required="">
                                        </td>
                </tr> 
                
                
              
                <tr>
                    <td></td>
                    <td><input type="submit" class="submit" value="submit" name="submit"></td>  
                        </tr>
                
            </table>
        
            </right> 
                 </form>
        </div>
<style>
    .username{
width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: white;
color: black;
border: 5px solid lightblue;
border-radius: 10px;
        }
    
    .email{
width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: white;
color: black;
border: 5px solid lightblue;
border-radius: 10px;
        }
    
    .state{
width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: white;
color: black;
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
color: black;
border: 5px solid lightblue;
border-radius: 10px;
        }
    
    .submit{
margin-left: 65px;

width: 150px;
padding: 10px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background-color: white;
color: black;
border: 5px solid lightblue;
border-radius: 10px;
        }
    </style>    
    
    
                      
</div><!--div end-->
     
     <!--footer-->
<div style="background-color:dimgray;
            text-align:center;
            padding:30px;
            margin-top:80px;
            font-size:20px;"><h1>Owned By DogTech.com</h1></div>
    
     </body></body></head></html>
    
