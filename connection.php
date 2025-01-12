<?php
session_start();


$conn = mysqli_connect("localhost", "root", "Sumit@9090", "school_db");


if (!$conn) {
    header("Location: connectionErrorpage.php"); 
    exit; 
}

