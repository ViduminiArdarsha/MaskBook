<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:../index.php');
}

if(!isset($_POST['description'])){
    header('Location:../addimage.php');
    die();
}
if(!isset($_POST['submit'])){
  header('Location:../addimage.php');
  die();
}
 
  $des=$_POST['description'];
  $file=$_POST['image'];
  include('dbdata.php');
  $con=new mysqli($severname,$username,$password,$dbname);
  $sql="INSERT INTO image(description,picture) VALUES ('$des','$file')";
  $result=$con->query($sql);
  if($result==TRUE){
    move_uploaded_file($_POST['image'],"$file");
    header("Location:../addimage.php?success");
  }else{
    header("Location:../addimage.php?failed");
  }
  $con->close();


?>

