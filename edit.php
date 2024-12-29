<?php 


$hostname="localhost";
$username="root";
$password="";
$dbname="student";

$connection=mysqli_connect($hostname,$username,$password,$dbname);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="editHeading">
            <h1>Edit Student Information</h1>
            <a href="stuList.php"><button class="btnedit">Back</button></a>
        </div>

        <?php 

        $id=$_GET['ids'];

        $sql="select*from studentlist where id='$id'";
        $result=mysqli_query($connection,$sql);
        $row=mysqli_fetch_array($result);
        ?>

        <div class="form">
            <form action="update.php" method="POST">
                <input type="hidden"  value="<?php echo $row['id'];?>" name="id">
                <label for="fullname">FullName:</label>
                <input id="fullname" type="text" name="name" value="<?php echo $row['name'];?>">

                <label for="roll">Roll:</label>
                <input id="roll" type="number" name="roll" value="<?php echo $row['roll'];?>">

                <label for="regi">Registration Number:</label>
                <input id="regi" type="number" name="reg" value="<?php echo $row['reg'];?>">

                <label for="shift">Shift:</label>
                <input id="shift" type="text" name="shift" placeholder="1st/2nd" value="<?php echo $row['shift'];?>">

                <label for="group">Group:</label>
                <input id="group" type="text" name="groups" value="<?php echo $row['groups'];?>" placeholder="A1,B1/A2,B2">

                <label for="department">Department:</label>
                <input id="department" type="text" name="department" value="<?php echo $row['department'];?>">

                <label for="semester">Semester:</label>
                <input id="semester" type="text" name="semister" value="<?php echo $row['semister'];?>">

                <a href="update.php"><button onclick="myfunction()" type="submit">Update Student</button></a>
            </form>
            <a href="cancle.php"><button class="btn3" type="submit">Cancel</button></a>

        </div>
    </div>

    <a href="index.php">back</a>
</body>
</html>