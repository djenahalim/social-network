<?php
session_start();
if (!isset($_SESSION['user'])){header('location:home.php');};
//include "header.php";
include '../includes/connect.php';
$note = $_POST['note'];
$user=$_SESSION['user'];
$conn=dataBase_connect();

newNotes($conn,$note,$user);
header('location:/www/notes/note_created.php');

?>