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
        <div class="formHeading">
            <h1>Student Management System</h1>
            <p>Add Student</p>

        </div>

        <div class="form">
            <form action="add.php" method="POST">
                <label for="fullname">FullName:</label>
                <input id="fullname" type="text" name="name" required title="Enter your Full Name">

                <label for="roll">Roll:</label>
                <input id="roll" type="number" name="roll" required title="Enter your Roll">

                <label for="regi">Registration Number:</label>
                <input id="regi" type="number" name="reg" required title="Enter your Registration Number">

                <label for="shift">Shift:</label>
                <input id="shift" type="text" name="shift" placeholder="1st/2nd" required title="ekano tumar shift dilaw ba">

                <label for="group">Group:</label>
                <input id="group" type="text" name="groups" placeholder="A1,B1/A2,B2" required title="okhtath tumar group or nam dilaw">

                <label for="department">Department:</label>
                <input id="department" type="text" name="department" required title="ektar modde tumar department or nam dilaw">

                <label for="semester">Semester:</label>
                <input id="semester" type="text" name="semister" required title="ektar modde tumar semester or nam dilaw">

                <a href="#"><button type="submit">Add Student</button></a>
            </form>

            <a href="stuList.php"><button class="btn2">Vew Student List</button></a>
        </div>
    </div>
</body>

</html>