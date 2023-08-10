<?php
if(isset($_POST['Sinup'])){
$Frist_Name=$_POST['Frist_Name'];
$Last_Name=$_POST['Last_Name'];
$Email=$_POST['Email'];
$Number=$_POST['Number'];
$Password=$_POST['Password'];
$servername="localhost";
$username="root";
$pass="";
$db='school';
$conn=mysqli_connect($servername,$username,$pass,$db);

if(empty($Frist_Name) && empty($Last_Name)
 && empty($Email)&& empty($Number) && empty($Password)){
      header("location:user.php");
 }else{
     
   $insertSql="INSERT INTO student (ID, Frist_Name, Last_Name, Email, Number, password) 
           VALUES (NULL, '$Frist_Name', '$Last_Name', '$Email', '$Number', '$Password');";
    $insertQuery=mysqli_query($conn,$insertSql);
    if($insertQuery){

        header("location:user.php?suc=Done");
    }

 }

}


?>