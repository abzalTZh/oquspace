<?php
    if(isset($_GET['comment_id']) & !empty($_GET['comment_id'])){
        $id = $_GET['comment_id'];
     
        $delsql="DELETE FROM `feedbacks` WHERE comment_id=$id";
        $connection=mysqli_connect("localhost", "root", "", "oqu_space");
        if(mysqli_query($connection, $delsql)){
            header("Location: aboutus.php");
        }
    }else{
        header('location: aboutus.php');
    }
?>