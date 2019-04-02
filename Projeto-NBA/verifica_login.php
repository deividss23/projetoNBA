<?php
session_start();
global $logado;
$logado = $_SESSION['username'];
if(!$_SESSION['username'])
 {
  header('location: login.php');
  exit();
 }
 ?>