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
    <link rel="stylesheet" href="buynow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <ul>
                <li>
                    <a class="home" href="shopping.php"><i class="fa fa-home"></i></a>
                </li>
 
            </ul>
        </div>
        <br>
        <div class="order row">
            <div class="order-left col-6">
                <img id="pic" src="" width="auto" height="450px" alt="">
            </div>
            <div class="order-right col-6 ">
                <h1 id="name">
                </h1>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked">(1000) reviews</span>
                <div><del id="del"></del><h3 id="price"></h3></div>
                <br>
                <section class="mb-4">
                    <a class="abtn btn btn-outline-light btn-floating m-1 " href="#!" role="button">S</a>
                    <a class="abtn btn btn-outline-light btn-floating m-1" href="#!" role="button">M</a>
                    <a class="abtn btn btn-outline-light btn-floating m-1" href="#!" role="button">X</a>
                    <a class="abtn btn btn-outline-light btn-floating m-1" href="#!" role="button">XL</a>
                </section>
                <h5>Quantity</h5>
                <div class="number">
                    <span class="minus">-</span>
                    <input type="text" value="1" />
                    <span class="plus">+</span>
                </div>
                <br>
                <form action="makeorder.php" method="post">
                <button type="submit"class="btn btn-danger">BUY NOW</button>
                <input type="hidden" id="localstorage-data" name="localstorage_data" value="">
                <input type="hidden" id="localstoragedata" name="localstoragedata" value="">
                </form>
                <script>
                var data = localStorage.getItem("buyname");
                var price=localStorage.getItem("buyprice");
                document.getElementById("localstorage-data").value = data;
                document.getElementById("localstoragedata").value = price;
                </script>
                <br>
            </div>
            <br>
        <div id='hoddie' style="" class='shirt'>
            <div class="buffer">
            <hr>
            </div>
            <h1 id="hoddies" class="shirt text-center">
                Popular Hoddies
            </h1>
            <div class="text-center shirt-card row col-12">
                <div class=" col-4" style="width: 18rem;">
                    <img src="pics/hodd3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hoddie</h5>
                        <p class="card-text">Official Marvel Spider-Man Gold Foil Logo Hoodie</p>
                        <a href="buynow.php" class="btn btn-danger" onclick="buy(1,'pics/hodd3.jpg','Official Marvel Iron Man Tony Stark Arc Reactor Glow In Dark Hoodie',4999,299)">Shop Now</a>
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
            </div>
        </div>
    
        <div  id='shirt' class='shirt'>
        <div class="buffer">
            <hr>
        </div>
            <h1 id="shirt" class="shirt text-center">
                Popular Shirts
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
            </div>
        </div>
        
        <div  id='pant' class='shirt'>
        <div class="buffer">
            <hr>
        </div>
            <h1 id="pants" class="shirt text-center">
                Popular Jeans Pants
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
            </div>
        </div>
        </div>

    </div>
    <footer>
        <footer id="about" class="bg-dark text-center text-white">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <h3>CONTACT US</h3>
                <h5>strangeAhsan@gmail.com</h5>
                <br>
                <section class="mb-4">
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram"
                            aria-hidden="true"></i></a>
                </section>
                <a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
            </div>
        </footer>
    </footer>

    <script>
        document.getElementById('name').innerHTML=localStorage.getItem("buyname");
        document.getElementById('del').innerHTML="Rs."+localStorage.getItem("buydiscount");
        document.getElementById('price').innerHTML="Rs."+localStorage.getItem("buyprice");    
        document.getElementById('pic').src=localStorage.getItem("buypic"); 
            function buy(a,b,c,d,e){
            localStorage.setItem("buynum",a);
            localStorage.setItem("buypic",b);
            localStorage.setItem("buyname",c);
            localStorage.setItem("buydiscount",d);
            localStorage.setItem("buyprice",e);
        }
    </script>

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