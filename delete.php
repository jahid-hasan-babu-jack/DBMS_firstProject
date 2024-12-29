<?php 


$hostname="localhost";
$username="root";
$password="";
$dbname="student";

$connection=mysqli_connect($hostname,$username,$password,$dbname);


$ids=$_GET['ids'];


$sql="delete from studentlist where id='$ids'";
$result=mysqli_query($connection,$sql);
header('location:stuList.php');



?>