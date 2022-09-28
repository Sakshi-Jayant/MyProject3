<?php
session_start();

include('conn.php');

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

$q = "SELECT `id`, `UserName`, `password`, `UserType`, `Email` FROM `doctor_table` WHERE `password`='$password' && `Email`='$email'";

$result = mysqli_query($conn, $q);
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$usertype=$row['UserType'];
//$username=$row['UserName'];

if($result){
    if($usertype=="Admin"){

        echo '
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
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            <style>
            .flex-container {
                display: flex;
              }
            </style>
        </head>

        <body><br><br>
        <div class="flex-container">
        <div style="margin-left:8px"><h2 style="color:#e62e00">Welcome Admin</h2></div>
        <div style="margin-left:900px"><a href="signout.php" class="btn btn-warning">SignOut</a></div>
  
      </div><br>
      ';

    $adQ="Select `id`, CONCAT(UPPER(SUBSTRING(`UserName`,1,1)),LOWER(SUBSTRING(`UserName`,2))) AS Name,`password`,`UserType`,`Email` from doctor_table ";
    $result1 = mysqli_query($conn, $adQ);

    $j=1;
    while($row1=mysqli_fetch_assoc($result1)){
    //$num_row = mysqli_num_rows($result1);
    //$row1=mysqli_fetch_assoc($result1);
    //$usertype=$row1['UserType'];
    $username=$row1['Name'];
    $dr_id=$row1['id'];

    echo "<div class='flex-container'>
        <div style='margin-left:8px'><h4><u>Dr. "."$username</u></h4></div>
        <div style='margin-left:1050px'><a href='cancelsch.php?dr_id=$dr_id' class='btn btn-danger'>Delete</a></div>
  
      </div><br>";

    $adtable="SELECT COUNT(`PName`) as NA ,`id`, `ADate`, `Doctor_id` FROM `patient_table` WHERE `Doctor_id`= '$dr_id' GROUP by `ADate`";
    $result2 = mysqli_query($conn, $adtable);
    //$row2=mysqli_fetch_assoc($result2);
    //$num_row1 = mysqli_num_rows($result2);

    echo "
        <div>
        <table class='table'>
              <tr  style='background-color:#ffffe6
              '>
                <th>#</th>
                <th>Date</th>
                <th>No. of Appointment</th>
                <th>Action</th>
              </tr>";
            $i=1;
            while($row2=mysqli_fetch_assoc($result2)){
                echo "<tr>
                <td>";echo $i;echo "</td>
                <td>";echo $row2['ADate'];echo "</td>
                <td>";echo $row2['NA'];echo "</td>
                <td><a href =delete.php?date='$row2[ADate]' style='font-size:19px;color:black'><i class='bi bi-trash'></i></a></td>
                </tr>
    ";

    //echo "<h4>Dr. "."$username</h4>";
        
     $i++;  

    }
   echo "</table>
    </div>
    ";
}
}

elseif($usertype =="Doctor"){

    echo '
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <style>
        .flex-container {
            display: flex;
          }
        
        a:link, a:visited {
        background-color:#ffff66;
        color: white;
        padding: 8px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius:5px;
        }

        a:hover, a:active {
        background-color: #4bdb9d;
        }

        #bgbutton{
            background-color:red;
        }
        </style>
    </head><br><br>';
 
$adQ1="Select `id`, CONCAT(UPPER(SUBSTRING(`UserName`,1,1)),LOWER(SUBSTRING(`UserName`,2))) AS Name,`password`,`UserType`,`Email` from doctor_table where `Email` = '$email' && `password`= '$password' ";
$result3 = mysqli_query($conn, $adQ1);
$row3=mysqli_fetch_assoc($result3);

$username=$row3['Name'];
$_SESSION["name"] = $username;

//echo $_SESSION["name"];
$dr_id=$row3['id'];
$_SESSION["did"] = $dr_id;

echo "<div class='flex-container'>
    <div style='margin-left:8px'><h4>Welcome Dr. "."$username</h4></div>
    <div style='margin-left:900px'><a href='signout.php' class='btn btn-danger' id='#bgbutton' style='color:black'>SignOut</a></div>

  </div><br>";

$adtable2="SELECT COUNT(`PName`) as NA ,`id`, `ADate`, `Doctor_id` FROM `patient_table` WHERE `Doctor_id`= '$dr_id' GROUP by `ADate`";
$result4 = mysqli_query($conn, $adtable2);
//$row2=mysqli_fetch_assoc($result2);
//$num_row1 = mysqli_num_rows($result2);

echo "
    <div>
    <table class='table'>
          <tr>
            <th>#</th>
            <th>Date</th>
            <th>No. of Appointment</th>
            <th>Action</th>
          </tr>";
        $i=1;
        while($row4=mysqli_fetch_assoc($result4)){
            echo "<tr>
            <td>";echo $i;echo "</td>
            <td>";echo $row4['ADate'];echo "</td>
            <td>";echo $row4['NA'];echo "</td>
            <td><a href =add.php?date='$row4[ADate]' style='font-size:19px;color:black'>Add</a></td>
            </tr>
        
";
$i++;
//echo "<h4>Dr. "."$username</h4>";
    
        }
echo "</table>
</div>
</body>
</html>";

}


else{
        echo "<script>alert('Invalid Credentials')
        window.location = 'http://localhost/Learn_php/SakshiJayant/index.php';
        </script>";
    }
}

}

?>