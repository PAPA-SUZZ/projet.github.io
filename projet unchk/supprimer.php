<?php 

session_start();
require_once 'config.php';
if(!$_SESSION['password']){
    header('location:connect.php');
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete = $bdd->prepare("DELETE FROM message WHERE id = $id");
    $delete->execute(array($id));

    if($delete){
        header('location:pageadmin.php');
    }
}

?>