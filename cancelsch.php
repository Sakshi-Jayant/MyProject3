<?php
session_start();

include('conn.php');

//$adQ="Select `id`, CONCAT(UPPER(SUBSTRING(`UserName`,1,1)),LOWER(SUBSTRING(`UserName`,2))) AS Name,`password`,`UserType`,`Email` from doctor_table ";
    //$result1 = mysqli_query($conn, $adQ);

    //$j=1;
    //while($row1=mysqli_fetch_assoc($result1)){
    //$num_row = mysqli_num_rows($result1);
    //$row1=mysqli_fetch_assoc($result1);
    //$usertype=$row1['UserType'];
    //$username=$row1['Name'];
    //$dr_id=$row1['id'];
$dr_id=$_GET['dr_id'];
$username=$_SESSION['name'];


    $adtable="SELECT COUNT(`PName`) as NA ,`id`, `ADate`, `Doctor_id` FROM `patient_table` WHERE `Doctor_id`= '$dr_id' GROUP by `ADate`";
    $result2 = mysqli_query($conn, $adtable);
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
    <table class="table">
        <h4>Cancel Scheduled Appointment(s) for Dr. <?php echo "$username"?></h4>
        <tr></tr>
        <form method="POST" action="cancel.php">
        <tr>
            <th>Date</th>
            <th>No. of Appointment</th>
            <th>Action</th>
        </tr>


       <?php $i=1;
            while($row2=mysqli_fetch_assoc($result2)){
                echo "<tr>
                <td>";echo $row2['ADate'];echo "</td>
                <td>";echo $row2['NA'];echo "</td>
                <td><input type='checkbox' name=check value=''></td>
                </tr>
    ";

    //echo "<h4>Dr. "."$username</h4>";
        
     $i++;  

    } ?>
    <tr>
        <td></td>
        <td><input type="submit" value="Cancel Appointment" class="btn btn-danger"></td>
        <tr>
</form>
</table>
</center>
</body>
</html>