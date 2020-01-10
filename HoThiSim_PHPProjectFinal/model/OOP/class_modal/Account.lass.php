<?
class Account{
    public $account_id;
    public $account_name;
    public $account_password;

   function __construct($account_id,$account_name,$account_password){
          $this->account_id=$account_id;
          $this->account_name=$account_name;
          $this->account_password=$account_password;
   }
  
   
 
}
?>