<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!---link cdn css-->
    <link rel="stylesheet" href="css/user.css">
    <!--Bootstrap link setup-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--Bootstrap link setup-->
</head>
<body>
    <div class="container_fluid bg-danger p-5">
        <div class="row my-5">
            <div class="col-2"></div>
            <div class="col-8 ">
                <h1 id="Reg"> Login Form</h1> <hr>
                <form id="form" action="" method="post">

                <label class="form-label" >UserName</label><br>
                <input class="form-control" type="text" name="userName" id="username" required><br>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out Name field.</div>
                <label form-label >Password</label><br>
                <input class="form-control" type="text" name="userpassword" id="userpassword" required><br><br>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out Password field.</div>
                <input class="btn " type="submit" value="Login" name="Login" id="Login" ><br><br>  
                </form> <br>
                <div class="row">
                     <span style="color: aliceblue; font-size: 20px; ">Cerate A Account <span id="sinup" class="btn btn-success ">
                        <a style="color: aliceblue;" href="sinup.php">Sin-up</a> </span>

                        <button><a href="view.php">click_me</a></button>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>

<?php
  if(isset($_GET['suc'])){
    echo $_GET['suc'];
  }
?>
