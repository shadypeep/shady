<?php
require("conn.php");

$username = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' LIMIT 1";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);



if(!$row  && empty(!$row)){
        echo "Problem logging in";
        exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin page</title>
</head>
<link rel="stylesheet" href="admin.css">
<body>
     <div class="nav">
         <h2>OLOTUSQUARE</h2>
         <P><a href="">HOME</a>  <a href="">ADMIN</a>  <a href="">CONTACTS</a></P>
     </div>


    <div class="container">
       <form action="formsubmit.php" method="POST">
            <h1>PROFILE</h1>
            <p>NAME: <input type="text" name="name" placeholder="Enter Name"> </p>
            <p>EMAIL: <input type="email" name="email" placeholder="Enter Email"> </p>
            <p>SERVICES: </p>
                    <textarea name="services"></textarea>
            <p>CAREERS:</p> 
                    <textarea name="careers"></textarea>
            <p>WHAT WE'VE DONE:</p>
                    <textarea></textarea>
            <p>WHAT WE'RE DOING:</p>
                    <textarea></textarea>
            <p>WHAT WE WILL DO:</p>
                    <textarea></textarea>
            <p>Our Terms Of Services:</p>
                    <textarea></textarea>
            <p><button type="submit">submit</button></p> 
        </form>  
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




















