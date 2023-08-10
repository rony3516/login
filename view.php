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
</head>
<body>
    <?php
    
    $servername="localhost";
    $username="root";
    $pass="";
    $db='school';
    $conn=mysqli_connect($servername,$username,$pass,$db);
    $veiwSql="SELECT * FROM student ";
    $veiwQuery=mysqli_query($conn,$veiwSql);?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Profile</th>
      <th scope="col">First_Name</th>
      <th scope="col">Last_Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>

    </tr>
  </thead><?php

    while($row=mysqli_fetch_assoc($veiwQuery)){
      $id=$row['ID'];
      $name=$row['Frist_Name'];
      $last=$row['Last_Name'];
      $emil=$row["Email"];
      $number=$row["Number"];
      $pas=$row['password'];
       
       ?>


      <tbody>
    <tr>
      <th scope="row"><?php echo  $id ?></th>
      <td><img class="w-25" src="uplod/man.png" alt=""></td>
      <td><?php echo  $name; ?></td>
      <td><?php echo  $last; ?></td>
      <td><?php echo   $emil; ?></td>
      <td><?php echo    $number; ?></td>
      <td><?php echo     $pas; ?></td>
      <td> <span><a class="btn btn-success" href="edit.php?IdNO=<?php echo $id  ?>">Edit</a> </span>
       <span><a class="btn btn-danger"  href="delate.php?IdNO=<?php echo $id  ?>">Delate</a> </span></td>
      
    </tr>
   
    
  </tbody>

<?php
    }
    ?>
    </table>
    
    

    
</body>
</html>