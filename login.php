<?php
$servername="localhost";
$username="postgres";
$password='5112';
$dbname = "train";

$user=$_GET["uname"];
$pass=$_GET["pass"];

$conn= pg_connect("host=$servername dbname=$dbname user=$username password=$password");

if(!$conn){
    die("connection error".pg_connect_error($conn));
}

$sql=" SELECT * FROM login WHERE username='$user';";
$result = pg_query($conn,$sql);
if (pg_num_rows($result)>0) {
    session_start();
    $_SESSION['name']=$user;
    $_SESSION['mode']="user";
    while($row = pg_fetch_assoc($result)) {
        if($row['pass']=="$pass"){
            echo "<script> window.location.href='home.php'; </script>";     
        }
        else{
            echo "<script> window.location.href='index.html'; window.alert('Check your password') ;</script>";
        }
    }    
}else {
    echo "<script> window.location.href='index.html'; window.alert('Check your username') ;</script>" ; 
}

pg_close($conn);
?>
