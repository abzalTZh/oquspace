<?php
require_once "db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$url = $_POST['url'];

$sqlUpdate = "UPDATE events SET title='" . $title . "',start='" . $start . "',url='" . $url . "' WHERE id=" . $id;
mysqli_query($conn, $sqlUpdate);
mysqli_close($conn);

?>