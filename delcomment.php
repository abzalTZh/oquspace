<?php
    if(isset($_GET['id']) & !empty($_GET['id'])){
        $id = $_GET['id'];
     
        $delsql="DELETE FROM `feedbacks` WHERE id=$id";
        $connection=mysqli_connect("localhost", "root", "", "oqu_space");
        if(mysqli_query($connection, $delsql)){
            header("Location: aboutus.php");
        }
    }else{
        header('location: aboutus.php');
    }
?>