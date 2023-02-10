<?php

session_start();
$username = "charmersix";
$password = "charmersix";
$host = "127.0.0.1";
$db = "charmersix";
$port = "3306";

$conn = new mysqli($host,$username,$password,$db,$port);

if($conn->connect_error) {
    die("数据库连接异常" . $conn->connect_error);
}
