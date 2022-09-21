<?php
    session_start();
    $i = $_GET['id'];
    echo "ลบกระทู้ หมายเลข ". $_GET['id']; 
    if($_SESSION['role'] != 'a') header("location:index.php");
    die();
?>