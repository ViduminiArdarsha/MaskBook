<?php

  session_start();
   if(!isset($_POST['email'])){
       header('Location:../signup.php');
   }
$e=$_POST['email'];
$p=$_POST['password'];


include('dbdata.php');
$con=new mysqli($severname,$username,$password,$dbname);


$sql="INSERT INTO users(email,password)VALUES('$e','$p')";
$result=$con->query($sql);
if($result==TRUE){
    header("Location:../index.php?success");
}else{
    header("Location:../signup.php?failed");
}
$con->close();
?>