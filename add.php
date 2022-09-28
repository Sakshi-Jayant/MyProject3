<?php
session_start();

include('conn.php');
$date=$_GET['date'];
$dr=$_SESSION["name"];
$did=$_SESSION["did"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <style>
        #id1{
        font-size:20px;
    }
     </style>
</head>
<body>
    <br><center>
    <form method="POST" action="insert.php">
    <h2><?php echo "Add Appointment(s) for Dr. ". $dr ?></h2>
    <br><br>
    <input type="hidden" value="<?php $did?>">
    <label id=id1>Date</label>&emsp;
    <input type="text" value="<?= $date ?>" name=date readonly>
    <br><br>
    <label id=id1>Name </label>&emsp;
    <input type="text" value="" name=name><br><br><br>
    <input type="submit" value="Add Appointment" name=add class="btn btn-success">
</form>
</center>
</body>
</html>