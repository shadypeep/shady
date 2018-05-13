<?php
require("conn.php");

if(!empty($_POST["email"])){
$name = $_POST["name"];
$email = $_POST["email"];
$profile = $_POST["profile"];
$services = $_POST["services"];
$careers = $_POST["careers"];


$sql = "UPDATE profile SET services = '$services', name = '$name',  careers = '$careers', profile = '$profile' WHERE email = '$email'";

$query = mysqli_query($conn, $sql);

if($query === true){
    echo "Successfully Updated";
} else{
    echo "Failed";
}
}

?>