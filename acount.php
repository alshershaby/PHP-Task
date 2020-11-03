<?php
session_start();
if(!isset($_SESSION['password'])){
header('location:login.php');
}

?>

<html>
<head>
    <link rel="stylesheet" type='text/css'  href="css/all.min.css">
    <link rel="stylesheet" type='text/css'  href="css/bootstrap.min.css">
</head>

<body  class="bg-dark d-flex justify-content-center align-items-center">
<div class="container w-75 ">
    
    <form action="handle_acount.php " method="post">
       
        <div class="form-group">
            <input class="form-control" type="text" placeholder="username" name="username">
        </div>

        <div class="form-group">
        <input class="form-control" type="password" placeholder="password : 8 small chars only" name="password">
        </div>
       
        <div class="form-group">
            <input class="form-control" type="text" placeholder="email" name="email">
        </div>
          
        <div class="form-group">
            <input class="form-control" type="number" placeholder="phone-number" name="phone">
        </div>
       
        <div class="form-group">
            <input class="form-control" type="text" placeholder="facebook" name="facebook">
        </div>
       
        <div class="form-group">
            <input class="form-control" type="text" placeholder="twitter" name="twitter">
        </div>
       
        <div class="form-group">
            <input class="form-control" type="text" placeholder="instagram" name="instagram">
        </div>
       
        <button class="btn btn-info" type="submit">submit</button>
    </form>
</div>

<!-- script links -->
    <script src="js/jquery.js "></script>
    <script src="js/popper.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/main.js "></script>
</body>
</html>
