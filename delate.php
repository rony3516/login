<?php
$id=$_GET['IdNO'];
$servername="localhost";
$username="root";
$pass="";
$db='school';
$conn=mysqli_connect($servername,$username,$pass,$db);
$dealteSql="DELETE FROM student WHERE student.ID = $id;";
$delateQuery=mysqli_query($conn,$dealteSql);
if($delateQuery){
    header("location:view.php");
}
?>