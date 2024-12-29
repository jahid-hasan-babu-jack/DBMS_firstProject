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

    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
</head>
<body>
    <div class="container">
        <div class="listHeading">
            <h1>Student List</h1>
            <a href="index.php"><button class="btnBackstu">Back</button></a>

            <div class="stuTable">
                <table class="studentTable" id="myTable">
                    <thead>
                        <tr>
                            <th>FullName</th>
                            <th>Roll</th>
                            <th>Registration Number</th>
                            <th>Shift</th>
                            <th>Group</th>
                            <th>Department</th>
                            <th>Semester</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        $sql="select*from studentlist";
                        $result=mysqli_query($connection,$sql);
                        while($row=mysqli_fetch_array($result)){
                            ?>

                            <tr>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['roll'];?></td>
                                <td><?php echo $row['reg'];?></td>
                                <td><?php echo $row['shift'];?></td>
                                <td><?php echo $row['groups'];?></td>
                                <td><?php echo $row['department'];?></td>
                                <td><?php echo $row['semister'];?></td>
                                <td>
                                    <a href="edit.php?ids=<?php echo $row['id'];?>">Edit</a>  <a href="delete.php?ids=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?');">Delete</a>
                                </td>
                            </tr>
                        <?php }  ?>

                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function confirmLinkClick() {
            return confirm("Are you sure you want to navigate away?");
        }
    </script>

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
  <script>
    let table = new DataTable('#myTable');
  </script>




</body>
</html>