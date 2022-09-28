<?php 
    session_start();
    include('conn.php');
?>
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
     <style>
     td {
  padding: 1.9px;
  font-size:18px;
}

.inputbox{
    width:300px;
}
</style>
</head>
<body>
    
<div class="container" >
    <center><br>
    <h2 style="background-color:#ffcccc">Sign In</h2></td>
    <br>
    <table>
        <tr>
        <td><form method="POST" action="login.php"></td>
        </tr>
        <tr><td><label>Email</label></td></tr>
        <tr><td><input type=email name=email value="" class="inputbox" placeholder="Enter Email"></td></tr>
        <tr><td></td></tr>
        <tr><td><label>Password</label></td></tr>
        <tr><td><input type=password name=password value="" class="inputbox" placeholder="Enter Password"></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td><input type=submit value="Sign In" class="btn btn-success" name="submit"></td>
        </tr>
</form>
</table>
<center>
    </div>
</body>
</html>