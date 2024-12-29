<?php


$hostname="localhost";
$username="root";
$password="";
$dbname="student";

$connection=mysqli_connect($hostname,$username,$password,$dbname);

$name=$_POST['name'];
$roll=$_POST['roll'];
$reg=$_POST['reg'];
$shift=$_POST['shift'];
$department=$_POST['department'];
$groups=$_POST['groups'];
$semister=$_POST['semister'];

$sql="insert into studentlist(name,roll,reg,shift,department,groups,semister)
values('$name','$roll','$reg','$shift','$department','$groups','$semister')";

$result=mysqli_query($connection,$sql);


header('location:stuList.php');

?>