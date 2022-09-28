<?php
session_start();

include('conn.php');

$name=$_POST['name'];
$date=$_POST['date'];
$drid=$_SESSION["did"];
//echo $date.$name.$drid;
//exit;
//$ADate=$_SESSION['date'];
//$date=$_GET['date'];
//$_SESSION['date']=$date;
//$Adate=$_SESSION['date'];

$query = "INSERT INTO `patient_table`(`PName`, `ADate`, `Doctor_id`) VALUES('$name','0000-00-00','$drid')";
$result = mysqli_query($conn, $query);


if($result){
    echo "<script>alert('Data Entered Successfully!!');
    window.location = 'http://localhost/Learn_php/SakshiJayant/index.php'";
}
else{
    echo "<script>alert('Error!!');
    window.location = 'http://localhost/Learn_php/SakshiJayant/index.php'";
}

?>