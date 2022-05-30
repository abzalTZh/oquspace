<?php
require_once "db.php";

$title = isset($_POST['title']) ? $_POST['title'] : "";
$start = isset($_POST['start']) ? $_POST['start'] : "";
$url = isset($_POST['url']) ? $_POST['url'] : "";

$sqlInsert = "INSERT INTO events (title,start,url) VALUES ('".$title."','".$start."','".$url ."')";

$result = mysqli_query($conn, $sqlInsert);

if (! $result) {
    $result = mysqli_error($conn);
}
?>