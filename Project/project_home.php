<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Shoes_Store Templates">
    <meta name="Keywords" content="Shoes_Store, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="footer.css">

    <link rel="stylesheet" href="project_home.css">

    <!-- for footer social icons -->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">   

    <title>Online shoes shopping</title>

    <style>
      marquee{
      font-size: 30px;
      font-weight: 800;
      color: #d6861e;
      font-family: sans-serif;
      }
      .box1{
       display: flex;
      
        
      }
      .box1 img{
       margin-left:55rem;
       border-radius: 50px;
     
      }

      .center{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }
      .carousel-item img{
        height: 80vh;
        width: 90vw;
        text-align: center;
      }
      #img{
        height:302px;
      }
      #img1{
        height: 302px;
      }
      #img2{
        height: 302px;
      }
      #img3{
        height: 302px;
      }
      #img4{
        height: 302px;
      }
      #img5{
        height: 302px;
      }
      #cart{
        margin-left:-300px;
      }
      #wel{
        margin-left:520px;
        margin-top:10px;
        border-style: solid;
        border-width: 1px;
        border-color: black;
        background-color: #6b8d43;
        width:250px;
        height:80px;
        margin-right:10px;
        justify-content:center;
        
      }
      #wel button{
     margin-left:55px;
       
      }

      #wel h4{
     margin-left:15px;
       
      }
    </style>

</head>

<div>
    <div class="box1">
      <div><marquee behavior="scroll" direction="left" width="500px" height >Welcome! to Online Shoes Shopping..</marquee></div>
     
      <div id='wel'><h4 > <?php if(!isset($_SESSION['hlo']))
{
  //  include 'C:\xampp\htdocs\Project\Login.php';
} echo ' Welcome '.$_SESSION['hlo']?></h4>
        <form method='POST'>
          <button name='logout' >LOG OUT</button>

        </form>
      
        
  
        <?php 
          if(isset($_POST['logout']))
          {
            session_destroy();
            header("location:Login.php");
          }
        
        ?>
    
    
    </div>
        <a href="#"><img src="https://png.pngtree.com/png-clipart/20190617/original/pngtree-cart-glyph-round-circle-multi-color-background-png-image_3876193.jpg" id="cart" alt=""></div></a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="session.php" style="color: #ff7200;">My Account</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contactus.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="aboutus.php">About us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="homepage.php">Home Page</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                             My Orders
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li> -->
                                <!-- <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->
                    <!-- </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> -->
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <div class="mx-2">
                    <a href="http://localhost/project/Login.php"><button type="button"
                            class="btn btn-danger">Login</button></a>
                </div>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" data-bus-interval="2000" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" data-bus-interval="2000" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" data-bus-interval="2000" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="c9.jpg" class="d-block center" alt="...">
        </div>
        <div class="carousel-item">
          <img src="c11.jpg" class="d-block center" alt="...">
        </div>
        <div class="carousel-item">
          <img src="c4.jpg" class="d-block center" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <a href="buy.php"><img src="c11.jpg" class="card-img-top" alt="..." id="img"></a>
                <div class="card-body">
                  <h5 class="card-title">NIKE</h5>
                  <p class="card-text">Running Shoes for Men. Flex Experience Run 9 (black)<br><del> 999 </del> &nbsp <strong> &#8377 </strong>199 <h7 style="color: green;">80% off</h7></p>
                  <a href="buy.php" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <a href="buy.php"><img src="wp6607597.jpg" class="card-img-top" alt="..." id="img1"></a>
                <div class="card-body">
                  <h5 class="card-title">SKECHERS</h5>
                  <p class="card-text">Go Walk Evolution Ultra-Inter Walking Shoes For Men(Blue) <br><del> 2999 </del> &nbsp <strong> &#8377 </strong>2399 <h7 style="color: green;">20% off</h7></p>
                  <a href="buy.php" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <a href="buy.php"><img src="reebok.jpg" class="card-img-top" alt="..." id="img2"></a>
                <div class="card-body">
                  <h5 class="card-title">REEBOK</h5>
                  <p class="card-text">Energy Runner 2.0 Running Shoes for Men (Grey)<br><del> 2299 </del> &nbsp <strong> &#8377 </strong>1264 <h7 style="color: green;">45% off</h7></p>
                  <a href="buy.php" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <a href="buy.php"><img src="adidas.webp" class="card-img-top" alt="..." id="img3"></a>
                <div class="card-body">
                  <h5 class="card-title">ADIDAS</h5>
                  <p class="card-text">Running Shoes for Men. Flex Experience Run 9 (black)<br><del> 3999 </del> &nbsp <strong> &#8377 </strong>2999 <h7 style="color: green;">40% off</h7></p>
                  <a href="buy.php" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <a href="buy.php"><img src="asian.jfif" class="card-img-top" alt="..." id="img4"></a>
                <div class="card-body">
                  <h5 class="card-title">ASIAN</h5>
                  <p class="card-text">Sports Shoes For Boys with Beads Technology (Brown)<br><del> 1999 </del> &nbsp <strong> &#8377 </strong>1198 <h7 style="color: green;">40% off</h7></p>
                  <a href="buy.php"class="btn btn-primary">Buy Now</a>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <a href="buy.php"><img src="sparx.jpeg" class="card-img-top" alt="..." id="img5"></a>
                <div class="card-body">
                  <h5 class="card-title">SPARX</h5>
                  <p class="card-text">White Sneakers For Men up your cool quotient with these light weight(White)<br><del> 899 </del> &nbsp <strong> &#8377 </strong>764 <h7 style="color: green;">15% off</h7></p>
                  <a href="buy.php" class="btn btn-primary">Buy Now</a>
                </div>
              </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   


    <footer>
      <div class="container" style="margin-top: 50px;">
        <div class="row">
          <div class="col-2">
            <h5>HELP</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Payment</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Shipping</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cancellation and returns</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li> -->
            </ul>
          </div>
    
          <div class="col-2">
            <h5>POLICY</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Return Policy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms Of Use</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sitemap</a></li>
              <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li> -->
            </ul>
          </div>
    
          <div class="col-2">
            <h5>SOCIAL</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="https://www.linkedin.com/" class="nav-link p-0 text-muted">Linkedin</a></li>
              <li class="nav-item mb-2"><a href="https://www.facebook.com/" class="nav-link p-0 text-muted">Facebook</a></li>
              <li class="nav-item mb-2"><a href="https://www.instagram.com/" class="nav-link p-0 text-muted">instagram</a></li>
              <li class="nav-item mb-2"><a href="https://twitter.com/" class="nav-link p-0 text-muted">Twitter</a></li>
              <li class="nav-item mb-2"><a href="https://www.youtube.com/" class="nav-link p-0 text-muted">Youtube</a></li>
            </ul>
          </div>
    
          <div class="col-4 offset-1">
           
            <a class="nav-link active" href="Admin.php"><h1>ADMIN LOGIN</h1></a>
              <h5>Subscribe to our Shoes Shopping Website</h5>
              <address>Marwadi university <br> Morbi road Rajkot, 360003</address>
              <!-- <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div> -->
          
            <form action="http://localhost/project/project_home.php" method='post'>
               <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address" name="kundan">
                <!-- <button class="btn btn-primary" type="button">Subscribe</button> -->
                <button class="btn btn-primary" type="submit" value="Submit" name='button3'>Subscribe</button>

              </div>
            </form>
            <div class="footer-icons" style="float: right ;">
              <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
              <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
              <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
          </div>
          </div>
        </div>
      </div>
        
    </footer>
    <div class="d-grid gap-2">
        <button class="btn btn-light" type="button">© 2022 Company, onlineshoes.com. All rights reserved.</button>
    </div>

    <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "test";

 $conn = mysqli_connect($servername, $username, $password, $dbname);
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 else
 {
  //  echo '<script type="text/JavaScript"> 
  //  alert("Connection Successful!");
  //  </script>';
  }

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     $email  =$_POST['kundan'];
     
     
    $sql = "INSERT INTO `subscribe` (`eid`, `Email_add`) VALUES(NULL, '$email');";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script type="text/JavaScript"> 
        alert("Data entered successful!");
        </script>';
    }
    
    
 }
 
?>
</html>