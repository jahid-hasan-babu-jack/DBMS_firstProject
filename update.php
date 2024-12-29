<?php 


$hostname="localhost";
$username="root";
$password="";
$dbname="student";

$connection=mysqli_connect($hostname,$username,$password,$dbname);

$id=$_POST['id'];

$name=$_POST['name'];
$roll=$_POST['roll'];
$reg=$_POST['reg'];
$shift=$_POST['shift'];
$department=$_POST['department'];
$groups=$_POST['groups'];
$semister=$_POST['semister'];


$sql="update studentlist set name='$name',
roll='$roll', reg='$reg', shift='$shift', department='$department',groups='$groups', semister='$semister' where id ='$id'";

$result=mysqli_query($connection,$sql);

header('location:stuList.php');



?>