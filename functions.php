<?php
require 'config.php';

function db(){
    $con = mysqli_connect(HOST, USER, PASSWORD, DB_NAME) or die ('Error');
    return $con;
}

function add_account(){
    $name = $_POST['name'];
    $deposit = $_POST['deposit'];
    $credit_card = $_POST['credit_card'];
    $sql = "INSERT INTO accounts  VALUES (NULL,'$name','$deposit','$credit_card')";
    $query = mysqli_query(db(), $sql);
    if ($query) {
        header('Location: index.php');
    }
}

function accounts_view(){
    $sql = "SELECT id,name,deposit,credit_card FROM accounts ORDER BY id ASC ";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function delete_account($id){
    $sql = "DELETE FROM accounts WHERE id = $id";
    $query = mysqli_query(db(), $sql);
    header('Location: index.php');
}

function edit_account_view(){
    if (isset($_GET['edit_acc'])) {
        $id = $_GET['edit_acc'];

        $sql = "SELECT * FROM accounts WHERE id = $id ";
        $query = mysqli_query(db(), $sql);
        $result = mysqli_fetch_assoc($query);
    }
    return $result;

}

function update_account(){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $deposit = $_POST['deposit'];
    $credit_card = $_POST['credit_card'];
    $sql = "UPDATE accounts SET  name ='$name',deposit ='$deposit',credit_card ='$credit_card' WHERE id = $id";
    $query = mysqli_query(db(), $sql);
    header('Location: index.php');
}


