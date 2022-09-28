<?php
session_start();

include('conn.php');
// $delete1=$_POST['delete'];
// $cancel=$_POST['cancel'];
$ADate=$_SESSION['date'];
//echo $ADate;exit;
if(isset($_POST['delete'])){
$delete="DELETE FROM `patient_table` WHERE `ADate`=$ADate ";

$success=mysqli_query($conn,$delete);

if($success!=0){
echo "<script>alert(Data deleted Successfully!!)</script>";    
header('location:http://localhost/Learn_php/SakshiJayant/index.php');
}
else{
    echo "<script>alert(Not Deleted!!)</script>";    
    header('location:http://localhost/Learn_php/SakshiJayant/index.php');
    } 
}

if(isset($_POST['cancel'])){
    header('location:http://localhost/Learn_php/SakshiJayant/index.php');
    }

?>