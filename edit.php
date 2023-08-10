<?php
$id=$_GET['IdNO'];
$servername="localhost";
$username="root";
$pass="";
$db='school';
$conn=mysqli_connect($servername,$username,$pass,$db);
if(isset($_POST['edit'])){

$Frist_Name=$_POST['Frist_Name'];
$Last_Name=$_POST['Last_Name'];
$Email=$_POST['Email'];
$Number=$_POST['Number'];
$Password=$_POST['Password'];
$upded="UPDATE student SET Frist_Name = '$Frist_Name', Last_Name = '$Last_Name', 
Email = '$Email', 
Number = '$Number', password = '$Password' WHERE student.ID = $id;";
$updedQuery=mysqli_query($conn,$upded);
if($updedQuery){
    header("location:view.php?");
}


}


$edit="SELECT * FROM student WHERE ID=$id";
$editQuery=mysqli_query($conn,$edit);
while($row=mysqli_fetch_assoc($editQuery)){

     $name=$row['Frist_Name'];
      $last=$row['Last_Name'];
      $emil=$row["Email"];
      $number=$row["Number"];
      $pas=$row['password'];?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--Bootstrap link setup-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
     <!--Bootstrap link setup-->
     <link rel="stylesheet" href="css/sinup.css">
</head>
<body>
    <div class="container_fluid bg-info p-5">
        <div class="row my-5">
            <div class="col-2"></div>
            <div class="col-8 ">
                <h1 id="Reg">Edit Form</h1> <hr>
                <form id="form" action="" method="post">

                <label class="form-label" >Frist_Name</label><br>
                <input class="form-control" type="text" value="<?php echo  $name; ?>" name="Frist_Name" id="username" ><br>
                
                <label form-label >Last_Name</label><br>
                <input class="form-control" type="text" value="<?php echo  $last; ?>" name="Last_Name" id="userpassword" ><br><br>
                
                <label class="form-label" >Email</label><br>
                <input class="form-control" type="text" value="<?php echo   $emil; ?>" name="Email" id="username" ><br>
               
                <label class="form-label" >Number</label><br>
                <input class="form-control" type="text" value="<?php echo    $number; ?>" name="Number" id="username" ><br>
                
                <label class="form-label" >Password</label><br>
                <input class="form-control" type="text" value="<?php echo     $pas; ?>" name="Password" id="username" ><br>
                
                <input class="btn " type="submit" value="Edit" name="edit" id="Login" ><br><br>  
                </form> <br>
                
            </div>
            <div class="col-2"></div>
        </div>
    </div>

</body>
</html>

<?php }

?>








