<?php
include 'dbconnect.php';
session_start();
$useremail=$_SESSION['useremail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">   
            <ul>
                <li>
                    <a href="shopping.php"><i class="fa fa-home"></i></a>
                </li>
 
            </ul>
        </div>
    <div>
        <?php
        $getdata="SELECT * FROM `order` WHERE `user_email`='$useremail'";
        $getdataresult=mysqli_query($con,$getdata);
        $orderdata=mysqli_num_rows($getdataresult);
        if($orderdata>0){
                echo "<table class='table table-striped-white table-hover'>
                <thead>
                <tr>
                <th scope='col'>#</th>
                <th scope='col'>Email</th>
                <th scope='col'>Name</th>
                <th scope='col'>Order_Name</th>
                <th scope='col'>Order_Quantity</th>
                <th scope='col'>Order_Price</th>
                </tr>
                </thead>";
                $count=1;
                while($row = mysqli_fetch_assoc($getdataresult)) {
                    echo"<tbody>";
                      echo "<tr>";
                      echo "<td>" . $count . "</td>";
                      $count=$count+1;
                      echo "<td>" . $row['user_email'] . "</td>";
                      echo "<td>" . $row['user_name'] . "</td>";
                      echo "<td>" . $row['order_name'] . "</td>";
                      echo "<td>" . 1 . "</td>";
                      echo "<td>" . $row['order_price'] . "</td>";
                      echo "<td><a href='deleteorder.php?data=$row[order_id]' class='btn btn-danger'>CANCEL</a></td>";
                      echo "</tr>";
                      echo"</tbody>";
                    }
                    echo "</table>";
            }
            else{
                echo "<div class='contain'>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<i class='fa fa-shopping-cart' style='font-size:200px;color:white'></i>";
                echo "<h1>Dear Customer</h1>";
                echo "<h2>You Don't have</h2>";
                echo "<h3>Any Order</h3>";
            }
            
        
        ?>
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
        function Delete(){
            var xml=new XMLHttpRequest();
            xml.open('GET','deleteorder.php',true);
            xml.send();
        }
    </script>
</body>
</html>