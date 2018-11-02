<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<title>Breedopedia</title>
    
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
  <a href="aboutus1.php" >Home</a>
  <a href="breedopedia1.php" class="active">Breedopedia</a>
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
    
    <!-- main body-->
<div class="content"> <!--div start-->
    <div class="header">
  <h1 color=red>DOG ENCYCLOPEDIA</h1>
</div>

<div class="row">
    
  <div class="row" style="background-color:#FFFFF;">
    <h2>Bulldog</h2>
    <img class="mySlides" src="img\bulldog.jpg" style="width:50%" height="20%">
 
    <p>The Bulldog, also known as the English Bulldog or British Bulldog, is a medium-sized breed of dog. It is a muscular, hefty dog with a wrinkled face and a distinctive pushed-in nose.The American Kennel Club (AKC), The Kennel Club (UK), and the United Kennel Club (UKC) oversee breeding records. Bulldogs were the fourth most popular purebred in the US in 2016 according to the American Kennel Club.Bulldogs have a longstanding association with British culture, as the BBC wrote: "to many the Bulldog is a national icon, symbolising pluck and determination."During World War II, Bulldogs were often likened to Prime Minister Winston Churchill and his defiance of Nazi Germany. When the English settled in the Americas, their Bulldogs came with them. A few dedicated bulldog fanciers formed the Bulldog Club of America in 1890 and it was incorporated under the laws of the State of New York on November 29, 1904.
</p>
  </div>
    
    
  <div class="row" style="background-color:#FFFFF;">
    <h2>Doberman</h2>
   <img class="mySlides" src="img\doberman.jpg" style="width:50%" height="20%">
 
    <p>Dobermanns are known to be intelligent, alert, and tenaciously loyal companions and guard dogs. Personality varies a great deal between each individual, but if taken care of and trained properly, they are generally considered to be loving and devoted companions. The Dobermann is driven, strong, and sometimes stubborn. Owning one requires commitment and care. With a consistent approach, they can be easy to train and will learn very quickly.Although the breed standards vary among kennel and breed clubs, most follow the standard set by the FCI, which describes the size of male dogs as 68 to 72 centimetres (27 to 28 in) at the withers.Two different color genes exist in the Dobermann: one for black (B) and one for color dilution (D). There are nine possible combinations of these alleles, which can result in four different color phenotypes: black, blue, red, and fawn</p>
  </div>
  <div class="row" style="background-color:#FFFFF;">
      
      
    <h2>Dalmatian</h2>
     <img class="mySlides" src="img\dalmatian.jpg" style="width:50%">
 
    <p>The Dalmatianâ€™s delightful, eye-catching spots of black or liver adorn one of the most distinctive coats in the animal kingdom. Beneath the spots is a graceful, elegantly proportioned trotting dog standing between 19 and 23 inches at the shoulder. Dals are muscular, built to go the distance; the powerful hindquarters provide the drive behind the smooth, effortless gait. The Dal was originally bred to guard horses and coaches, and some of the old protective instinct remains. Reserved and dignified, Dals can be aloof with strangers and are dependable watchdogs. With their preferred humans, Dals are bright, loyal, and loving house dogs. They are strong, active athletes with great staminaâ€”a wonderful partner for runners and hikers.</p>
  </div>
  <div class="row" style="background-color:#FFFFF;">
      
      
    <h2>Golden Retriever</h2>
      <img class="mySlides" src="img\Goldenretriever.jpg" style="width:50%">
 
      <p>The Golden Retriever is a sturdy, muscular dog of medium size, famous for the dense, lustrous coat of gold that gives the breed its name. The broad head, with its friendly and intelligent eyes, short ears, and straight muzzle, is a breed hallmark. In motion, Goldens move with a smooth, powerful gait, and the feathery tail is carried, as breed fanciers say, with a â€œmerry action.â€ The most complete records of the development of the Golden Retriever are included in the record books that were kept from 1835 until about 1890 by the gamekeepers at the Guisachan (pronounced Gooeesicun) estate of Lord Tweedmouth at Inverness-Shire, Scotland. These records were released to public notice in Country Life in 1952, when Lord Tweedmouthâ€™s great-nephew, the sixth Earl of Ilchester, historian and sportsman, published material that had been left by his ancestor. They provided factual confirmation to the stories that had been handed down through generations. Goldens are outgoing, trustworthy, and eager-to-please family dogs, and relatively easy to train. They take a joyous and playful approach to life and maintain this puppyish behavior into adulthood. These energetic, powerful gundogs enjoy outdoor play. </p>
  </div>
</div>
    
                      
</div><!--div end-->
     
     <!--footer-->
<div style="background-color:dimgray;
            text-align:center;
            padding:50px;
            margin-top:30px;
            font-size:20px;"><h1>Owned By DogTech.com</h1></div>
    
     </body></body></head></html>
    
