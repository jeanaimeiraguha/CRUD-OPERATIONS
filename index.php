<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="js/bootstrap.js ">



<style>
    .form{
        max-width: 550px;
        
    }
    .card{
       
       
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 class='card card-header  container'>Client Form</h2>
    <form action="insert.php" method="post" class='form form was-validated bg-dark p-5 lg-6 container my-5'>
        Names: <input type="text" name="names" class='form-control' placeholder='Enter Names'><br>
        <label for="" class='invalid-feedback'>Invalid</label>
        <label for="" class='valid-feedback'>Valid</label>
        
        Password: <input type="password" name="password"  class='form-control' placeholder='Enter Password'><br>
        <label for="" class='invalid-feedback'>Invalid</label>
        <label for="" class='valid-feedback'>Valid</label>
       
        <input type="submit" name="submit" value="Add" class='btn btn-primary'>

    </form>
</body>
</html>
