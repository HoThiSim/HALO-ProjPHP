<?php

if(isset($_POST['login'])){
  session_start();
  
    require_once '../database/connection.php';
    $acName =$_POST['username'];
    $acPass =$_POST['pass'];
    $stm = 'SELECT * FROM account where account_name="'.$acName.'" and account_password ="'.$acPass.'"';
    $check = $connection->query($stm)->fetch_all();

  if($check){
      $_SESSION['ID']=$check[0][0];
      print_r($_SESSION);
  
      header('location: ../view/home.php');
     
  }
  else{
     header('location: ../view/introduct.php');
  }
    

}
?>
