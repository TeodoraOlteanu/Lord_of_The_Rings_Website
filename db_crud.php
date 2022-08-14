<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "comments";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if($conn->connect_error)
{
    die('Database error:' . $conn->connect_error);
}