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
    <div class="container_fluid bg-primary p-5">
        <div class="row my-5">
            <div class="col-2"></div>
            <div class="col-8 ">
                <h1 id="Reg">Register Form</h1> <hr>
                <form id="form" action="condb.php" method="post">

                <label class="form-label" >Frist_Name</label><br>
                <input class="form-control" type="text" name="Frist_Name" id="username" required><br>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out Name field.</div>
                <label form-label >Last_Name</label><br>
                <input class="form-control" type="text" name="Last_Name" id="userpassword" required><br><br>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out Password field.</div>
                <label class="form-label" >Email</label><br>
                <input class="form-control" type="text" name="Email" id="username" required><br>
                <div class="valid-feedback">Valid.</div>
                <label class="form-label" >Number</label><br>
                <input class="form-control" type="text" name="Number" id="username" required><br>
                <div class="valid-feedback">Valid.</div>
                <label class="form-label" >Password</label><br>
                <input class="form-control" type="text" name="Password" id="username" required><br>
                <div class="valid-feedback">Valid.</div>
                <input class="btn " type="submit" value="Sin_Up" name="Sinup" id="Login" ><br><br>  
                </form> <br>
                
            </div>
            <div class="col-2"></div>
        </div>
    </div>

</body>
</html>
