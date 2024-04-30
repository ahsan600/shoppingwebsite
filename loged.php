<?php
session_start();
if(!isset($_SESSION['useremail'])){
    header("Location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="shoping.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="row">
            <ul>
                <li>
                    <a href="loged.php"><i class="fa fa-home"></i></a>
                </li>
                <li>
                    <a href="#shirt">Shirt</a>
                </li>
                <li>
                    <a href="#pants">Jeans Pants</a>
                </li>
                <li>
                    <a href="#hoddies">Hoddies</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li class="loged">
                    <a href="">Log Out</a>
                </li>
            </ul>
        </div>
        <!-- <div class="w-50">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="slider1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="slider2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="slider3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> -->
        <div class='shirt'>
            <h1 id="hoddies" class="shirt text-center">
                Popular Hoddies
            </h1>
            <div class="text-center shirt-card row col-12">
                <div class=" col-4" style="width: 18rem;">
                    <img src="hodd.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Marvel Spider-Man Gold Foil Logo Hoodie</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="hodd1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Deadpool Face Hoodie  </p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="hodd2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Marvel Captain America Hoodie</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="buffer">
        <hr >
        </div>
        <div class='shirt'>
            <h1 id="shirt" class="shirt text-center">
                Popular Shirts
            </h1>
            <div class="text-center shirt-card row col-12">
                <div class="col-4" style="width: 18rem;">
                    <img src="shirt.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shirt</h5>
                        <p class="card-text">illustration vector wolf roaring on the moon with t shirt design</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="shirt1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shirt</h5>
                        <p class="card-text">Inspirational t-shirt design</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="shirt2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shirt</h5>
                        <p class="card-text">Less Talk More Action T Shirt Design</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="buffer">
        <hr>
        </div>
        <div class='shirt'>
            <h1 id="pants" class="shirt text-center">
                Popular Jeans Pants
            </h1>
            <div class="text-center shirt-card row col-12">
                <div class=" col-4" style="width: 18rem;">
                    <img src="pa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeans Pant</h5>
                        <p class="card-text">MUD PIPER JEANS.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pa1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeans Pant</h5>
                        <p class="card-text">MUD PIPER JEANS.</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pa2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeans Pant</h5>
                        <p class="card-text">MUD PIPER JEANS</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="buffer"> 
        <hr >
        </div>
       
    </div> 
    <footer>
  <!-- Footer -->
<footer id="about" class="bg-dark text-center text-white">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <h3>CONTACT US</h3>
  <h5>strangeAhsan@gmail.com</h5>
<br>
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-facebook" aria-hidden="true"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </section>
    <a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>