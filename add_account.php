<?php 
require 'functions.php';

if (isset($_POST['submit'])) {

//  $id = $_POST['id'];
  $name = $_POST['name'];
  $deposit = $_POST['deposit'];
  $credit_card = $_POST['credit_card'];

  add_account();
}else{
    header('Location: add_account_view.php');
}

?>