<?php

class User{
   public $user_id ;
   public $user_name ;
   public $user_dob ;
   public $user_gender ;
   public $user_phone ;
   public $user_address ;
   public $user_image;
   public $user_account;

  function loadUserbyAccount($user_account){
     require_once '../../../datadase/connection.php';
     $stm='SELECT * from user where account_id='.$user_account->account_id;
     return $connection->query($stm)->fetch_all();
  }
}
?>