<?php
session_start();
if($_SESSION["cap"]==$_GET["power"]){ echo 'Right!'; } 
?>