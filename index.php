<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="files">
    <form action="check.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type ="submit" value="submit">
    </form>
    </div>
    <div class="pos">
    <form action="print.php" method="POST">
        First Name
        <input type="text" name="fname">
        Last Name
        <input type="text" name="lname">
        <input type="submit" value="submit">
    </form>
    </div>
    </body>

</html>