<?php
require("conn.php");

$email = "tonypere@yahoo.com";
$sql = "SELECT * FROM profile WHERE email = '$email'";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Project</title>
</head>
<link rel="stylesheet" href="index.css">
<body>
     <div class="nav">
         <h2>OLOTUSQUARE</h2>
         <P><a href="">HOME</a>  <a href="login.php">ADMIN</a>  <a href="">CONTACTS</a></P>
     </div>
    
    <div class="header">
        <h2>Hi, I'm <?php echo $row["name"];?></h2>
        <h3>&spades;I'm A Front-End Developer &spades; I'm the guy you're looking for. &spades; <br> &spades; I code from scratch to finish &spades; <br> &spades; Lets set up your page &spades;</h3>
        <img src="tony.jpeg">
        
    </div>
    
    
    <div class="intro">
        <p>If you're interested in our services.... <br> Why don't you check out what we're all about <br> click the links below to find out</p>
        
    </div>
    <div class="links">
        <div class"links1">
           <h3><a href="">What <br> we've <br> done...</a> </h3> 
        </div>
        <div class"links1">
           <h3><a href="">What <br> we're <br> doing...</a></h3>
        </div>
        <div class"links1">
            <h3><a href="">What <br> we will <br> do...</a></h3>
        </div>
        
    </div>
    <div class="careers">
        <h3>Wanna know what opportunies we have for young people who are tech lovers??</h3>
        <h2> <a href="">&spades;careers&spades;</a></h2>
    </div>

    <div class="connect">
        <h3>connect with us and get updates about our services</h3>
        <p>subscribe to our newsletter <input type="text"> <button>submit</button></p>
    </div>
    


    <div class="footer">
        <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- Add font awesome icons -->
     <a href="#" class="fa fa-facebook"></a>
     <a href="#" class="fa fa-twitter"></a> 
     <a href="#" class="fa fa-slack"></a>
     <a href="#" class="fa fa-instagram"></a> 
     <p> ©2018 DeNiro's Designs. All rights reserved </p>
     <p><a href="">About</a>  <a href="">Contact</a>  <a href="">Developers</a> <a href="">Careers</a> <a href="">Site Tour</a> <a href="">Help & FAQ</a> <a href="">Advertise</a> <a href="">Core Members</a> <a href="">Etiquette</a> <a href="">Privacy Policy</a> <a href="">Terms of Service</a> <a href="">Copyright Policy</a> </p>
    </div>
     

   

</body>
</html>




















