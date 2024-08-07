<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js ">
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php" class='btn btn-success mb-3 right'>Add New</a>
    <table border="1" class='table table-bordered table-stripped container my-5'>
        <tr>
            <th>ID</th>
            <th>Names</th>
            <th>Password</th>
            <th colspan="2">Main Operation</th>
        </tr>
        <?php
        include('connection.php');
        $select=mysqli_query($conn,"SELECT * FROM ex");
        while($row=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><a href="update.php?upd=<?php echo $row['id'] ?>" class='btn btn-success'>Update</a></td>
            <td><a href="delete.php?dlt=<?php echo $row['id'] ?>"  class='btn btn-danger'>Delete</a></td>
        </tr>
        <?php  } ?>
    </table>
</body>
</html>