<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

    <title>Foody</title>
    <style>
        body {
    background-color: #eee
}

.card {
    background-color: #fff;
    width: 300px;
    border: none;
    border-radius: 16px
}

.info {
    line-height: 19px
}

.name {
    color: #4c40e0;
    font-size: 18px;
    font-weight: 600
}

.order {
    font-size: 14px;
    font-weight: 400;
    color: #b7b5b5
}

.detail {
    line-height: 19px
}

.summery {
    color: #d2cfcf;
    font-weight: 400;
    font-size: 13px
}
}

.text {
    line-height: 15px
}

.new {
    color: #000;
    font-size: 14px;
    font-weight: 600
}

.money {
    font-size: 14px;
    font-weight: 500
}

.address {
    color: #d2cfcf;
    font-weight: 500;
    font-size: 14px
}

.last {
    font-size: 10px;
    font-weight: 500
}

.address-line {
    color: #4C40E0;
    font-size: 11px;
    font-weight: 700
}
    </style>
  </head>
  <body>
  <?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "ordersDB";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else{
//     echo "Connection was successful<br>";
// }

$sql = "SELECT * FROM orders ORDER BY sno DESC LIMIT 1;";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
// $num = mysqli_num_rows($result);
// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
// if($num> 0){

//     // We can fetch in a better way using the while loop
//     while($row = mysqli_fetch_assoc($result)){
//         // echo var_dump($row);
//         echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
//         echo "<br>";
//     }
$row = mysqli_fetch_assoc($result);
$orderID = $row['sno'];
$name = $row['name'];
$billAmt = $row['billAmt'];
$address = $row['address']



?>
  <div class="container mt-5 d-flex justify-content-center">
      <?php
      echo '<div class="card p-4 mt-3">
      <div class="first d-flex justify-content-between align-items-center mb-3">
          <div class="info"> <span class="d-block name">Thank you, '.$name.' </span> <span class="order">Order ID- '.$orderID.' <br> Bill Amount- Rs. '.$billAmt. '</span> </div> <img src="https://i.imgur.com/NiAVkEw.png" width="40" />
      </div>
      <div class="detail"> <span class="d-block summery">Your order has been placed. It will be delivered soon.</span> </div>
      <hr>
      <div class="text"> <span class="d-block new mb-1">'. $name. '</span> </div> <span class="d-block address mb-3">' .$address.'</span>
      <div class=" money d-flex flex-row mt-2 align-items-center"> <img src="https://i.imgur.com/ppwgjMU.png" width="20" /> <span class="ml-2">Cash on Delivery</span> </div>
      <div class="last d-flex align-items-center mt-3"> </div>
  </div>'
      ?>
   

</div>
<center><a href="homeFinal.html">Back to Home</a></center>
  </body>