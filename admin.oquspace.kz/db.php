<?php
$conn = mysqli_connect("localhost","root","","oqu_space") ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>