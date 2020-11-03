<?php


?>

<html>
<head>
    <link rel="stylesheet" type='text/css'  href="css/all.min.css">
    <link rel="stylesheet" type='text/css'  href="css/bootstrap.min.css">
    <link rel="stylesheet" type='text/css'  href="css/style.css">
    <style>
        header{
        height: 100vh;
        width: 100%;
        background: url('images/tail.jpg') center center;
        background-size:cover ;
        position: absolute;
    }
    .navbar{
        background:#1d1d1d79;
    }
    .overlay{
        background:#1d1d1d79;
        position:absolute;
        left:0;
        top:0;
        height:100%;
        width:100%;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .overlay h2{
        color:#fff;
        font-size:4rem;
    }
    </style>

</head>

<body class="bg-dark">
    <!-- start header  -->

<header>
<div class="overlay">
    <h2>Welcome to BestSeller Website</h2>
<!-- nav bar  -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="home.php">BestSeller</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="all_products.php">all products</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="acount.php">acount</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
        </li>

        </ul>
    </div>
    </nav>
    </div>
</header>



<!-- script links -->
    <script src="js/jquery.js "></script>
    <script src="js/popper.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/main.js "></script>
</body>
</html>