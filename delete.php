<?php
session_start();

include('conn.php');

$date=$_GET['date'];
$_SESSION['date']=$date;
$Adate=$_SESSION['date'];
//echo $date; exit;
if($date){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment_Dr</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
</body><br>
<div class="container">
    <form method="POST" action="modal.php">
        <h3>Delete</h3><br>
        <h4>Are you sure?</h4>
        <br>
        <input type="hidden" name=date value="<?= $Adate ?>">
        <input type="submit" class="btn btn-primary" name=cancel value=Cancel>&emsp;
        <input type="submit" class="btn btn-danger" name=delete value=Delete>

</form>
</div>
</body>
</html>
<?php } ?>
