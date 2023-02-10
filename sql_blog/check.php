<?php
session_start();
if (!$_SESSION['LOGIN']){
    header("location:index.html");
}