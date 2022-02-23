<?php
require 'functions.php';

if (isset($_GET['del_acc'])){
    $id = $_GET['del_acc'];
    delete_account($id);
}

?>