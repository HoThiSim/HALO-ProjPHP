<?php
class login{

 function __construct()
 {
     login();
 }

    function login($account_name,$account_password){
        require_once '../../../datadase/connection.php';
        $stm='call getAccountByNameAndPassword('.$account_name.','.$account_password.')';
        $account= $connection->query($stm)->fetch_assoc();
        if($account){
          $_SESSION['account_id']=$account['account_id'];
          echo 'ok!';
        }
        else{
         echo 'fail';
        }
    }
}
?>