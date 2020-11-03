<?php

$allProducts = [
    'product 1' =>[ 'image' =>'images/22.jph','price'=>2000, 'desc'=>'sba7 elfol1'],
    'product 2' =>[ 'image' =>'images/22.jph','price'=>3000, 'desc'=>'sba7 elfol2'],
    'product 3' =>[ 'image' =>'images/22.jph','price'=>4000, 'desc'=>'sba7 elfol3'],
    'product 4' =>[ 'image' =>'images/22.jph','price'=>5000, 'desc'=>'sba7 elfol4'],
    'product 5' =>[ 'image' =>'images/22.jph','price'=>6000, 'desc'=>'sba7 elfol5'],
    'product 6' =>[ 'image' =>'images/22.jph','price'=>7000, 'desc'=>'sba7 elfol6']
];

// didn't git it 

Foreach($allProducts as $product => $values)
{
   
}

?>


<html>
<head>
    <link rel="stylesheet" type='text/css'  href="css/all.min.css">
    <link rel="stylesheet" type='text/css'  href="css/bootstrap.min.css">
</head>

<body  class="bg-dark">

<!-- nav bar  -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="home.php">BestSeller</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        
        <li class="nav-item ">
            <a class="nav-link" href="home.php">Home </a>
        </li>
        
        <li class="nav-item active">
            <a class="nav-link" href="all_products.php">all products <span class="sr-only">(current)</span></a>
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

<!-- end nav  -->




    <div class="container py-5 mt-4">
    <div class="row">
        <div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
            <img src="images/22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
            <img src="images/22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
       
        <div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
            <img src="images/22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
            <img src="images/22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
            <img src="images/22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
        <div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
            <img src="images/22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>

        
         
    </div>
    </div>




<!-- script links -->
    <script src="js/jquery.js "></script>
    <script src="js/popper.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/main.js "></script>
</body>
</html>