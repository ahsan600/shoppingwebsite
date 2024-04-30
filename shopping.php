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
    <style>
        body {
    background: url(pics/pic.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin: 0;
    cursor: pointer;
}
    </style>
<body>
    <div class="container">
        <div class="row">
            <ul>
                <li>
                    <a href="shopping.php"><i class="fa fa-home"></i></a>
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
                    <a href="order.php">My Order</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li class="loged">
                    <a href="" onclick='logedout()'>Log Out</a>
                </li>
            </ul>
        </div>
        <div class="slider">
            <div id="carouselExampleDark" class="carousel carousel-white slide w-100" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class=sliderr>
                    <div class="carousel-inner  w-50 ">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="pics/s2.jpg" class="w-100" alt="...">

                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="pics/s1.jpg" class="w-100" alt="...">

                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="pics/s3.jpg" class="w-100" alt="...">

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
        </div>
        <br>
        <div class="buffer">
            <hr>
        </div>
        <div class='shirt'>
            <h1 id="hoddies" class="shirt text-center">
                Hoddies
            </h1>
            <div class="text-center shirt-card row col-12">
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/hodd3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Marvel Iron Man Tony Stark Arc Reactor Glow In Dark Hoodie</p>
                        <a href="buynow.php" class="btn btn-danger" onclick="buy(1,'pics/hodd3.jpg','Official Marvel Iron Man Tony Stark Arc Reactor Glow In Dark Hoodie',4999,2999)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/hodd1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Deadpool Face Hoodie </p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(1,'pics/hodd1.jpg','Official Deadpool Face Hoodie ',2999,1999)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/hodd2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Marvel Captain America Hoodie</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(1,'pics/hodd2.jpg','Official Marvel Captain America Hoodie ',2499,1499)">Shop Now</a>
                    </div> 
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/hodd.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Marvel Spider-Man Gold Foil Logo Hoodie</p>
                        <a href="buynow.php" class="btn btn-danger" onclick="buy(1,'pics/hodd.jpg','Official Marvel Spider-Man Gold Foil Logo Hoodie',1999,1499)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/hodd4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Marvel Avengers Logo Hoodie </p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(1,'pics/hodd4.jpg','Official Marvel Avengers Logo Hoodie ',3999,1499)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/hodd5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Marvel Logo White Hoodie</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(1,'pics/hodd5.jpg','Official Marvel Logo White Hoodie ',3499,1499)">Shop Now</a>
                    </div> 
                </div>
            </div>
        </div>
        <div class="buffer">
            <hr>
        </div>
        <div class='shirt'>
            <h1 id="shirt" class="shirt text-center">
                Shirts
            </h1>
            <div class="text-center shirt-card row col-12">
                <div class="col-4" style="width: 18rem;">
                    <img src="pics/shirt.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shirt</h5>
                        <p class="card-text">wolf roaring on the moon with t shirt design</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(2,'pics/shirt.jpg','wolf roaring on the moon with t shirt design ',1499,999)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/shirt1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shirt</h5>
                        <p class="card-text">Inspirational t-shirt design</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(2,'pics/shirt1.jpg','Inspirational t-shirt design ',2499,1499)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/shirt2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shirt</h5>
                        <p class="card-text">Less Talk More Action T Shirt Design</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(2,'pics/shirt2.jpg','Less Talk More Action T Shirt Design ',1499,999)">Shop Now</a>
                    </div>
                </div>
                <div class="col-4" style="width: 18rem;">
                    <img src="pics/shirt3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shirt</h5>
                        <p class="card-text">California Ocean side stylish t-shirt</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(2,'pics/shirt3.jpg','California Ocean side stylish t-shirt ',2499,1499)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/shirt4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shirt</h5>
                        <p class="card-text">California Ocean side stylish t-shirt</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(2,'pics/shirt4.jpg','California Ocean side stylish t-shirt ',1499,999)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/shirt5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shirt</h5>
                        <p class="card-text">Summer Vibes T-shirt</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(2,'pics/shirt5.jpg','Summer Vibes T-shirt ',1499,899)">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="buffer">
            <hr>
        </div>
        <div class='shirt'>
            <h1 id="pants" class="shirt text-center">
                Jeans Pants
            </h1>
            <div class="text-center shirt-card row col-12">
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/pa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeans Pant</h5>
                        <p class="card-text">MUD PIPER JEANS.</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(3,'pics/pa.jpg','MUD PIPER JEANS ',1499,899)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/pa1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeans Pant</h5>
                        <p class="card-text">MUD PIPER JEANS.</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(3,'pics/pa1.jpg','MUD PIPER JEANS',1499,899)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/pa2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeans Pant</h5>
                        <p class="card-text">MUD PIPER JEANS</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(3,'pics/pa2.jpg','MUD PIPER JEANS ',1499,899)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/pa3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeans Pant</h5>
                        <p class="card-text">MUD PIPER JEANS.</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(3,'pics/pa3.jpg','MUD PIPER JEANS ',1499,899)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/pa4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeans Pant</h5>
                        <p class="card-text">MUD PIPER JEANS.</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(3,'pics/pa4.jpg','MUD PIPER JEANS',1499,899)">Shop Now</a>
                    </div>
                </div>
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/pa5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jeans Pant</h5>
                        <p class="card-text">MUD PIPER JEANS</p>
                        <a href="buynow.php" class="btn btn-danger"onclick="buy(3,'pics/pa5.jpg','MUD PIPER JEANS ',1499,899)">Shop Now</a>
                    </div>
                </div>
            </div>
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
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram"
                            aria-hidden="true"></i></a>
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
    <script>
        function buy(a,b,c,d,e){
            localStorage.setItem("buynum",a);
            localStorage.setItem("buypic",b);
            localStorage.setItem("buyname",c);
            localStorage.setItem("buydiscount",d);
            localStorage.setItem("buyprice",e);
        }
        function logedout() {
            localStorage.clear();
            var xml = new XMLHttpRequest();
            xml.open('GET', 'logedout.php', true);
            xml.send();
        }
    </script>
</body>

</html>