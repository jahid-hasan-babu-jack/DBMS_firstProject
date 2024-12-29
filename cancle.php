<?php 


$hostname="localhost";
$username="root";
$password="";
$dbname="student";

$connection=mysqli_connect($hostname,$username,$password,$dbname);

$id=$_POST['id'];


header('location:stuList.php');



?>