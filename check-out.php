<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODY | FOOD DELIVERY AND TAKEAWAY | ORDER ONLINE FROM RESTAURANTS NEAR YOU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>
          a,
        a:hover,
        a:active {
            text-decoration: none;
        }
        * {
            margin: 0%;
            padding: 0%;
        }

        .bx {
            width: 550px;
            height: 750px;
            margin: auto;
            background-color: #e4e1e1;
            border: white;
            border-radius: 10px;
        }

        .box {
            width: 400px;
            margin: auto;
            font-family: 'Bona Nova', serif;
            padding-top: 90px;
        }

        .box .input-box {
            position: relative;
            background-color: black;
            opacity: 0.85;
        }

        .box .input-box input {
            width: 90%;
            padding: 10px 0px;
            font-size: 14px;
            color: rgb(0, 0, 0);
            letter-spacing: 1px;
            margin: 20px 25px;
            border: none;
            outline: none;
            border-bottom: 3px solid #f7faf7;
            border-radius: 5px;
        }
        #bill label{
            font-size: 10px;
        }
        #bill input{
            /* margin-left: 5px; */
            /* padding-left: 10px; */
            padding-top: 20px;
        }

        #paymode {
            font-size: 20px;
            color: red;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* #paymode :hover {
            font-size: 20px;
            color: white;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        } */

        .box .input-box label {
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 1px 5px;
            font-size: 16px;
            color: black;
            font-weight: bold;
            transition: .5s;
            margin: 20px 30px;
        }

        .box .input-box input:focus~label,
        .box .input-box input:valid~label {
            top: -18px;
            left: -5px;
            color: #000000;
            font-size: 13px;
            background-color: #ffffff;
            border-radius: 2px;
        }

        .box input[type="submit"] {
            border: none;
            outline: none;
            background: red;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            border: solid;
            border-radius: 10px;
        }

        .box input[type="button"] {
            border: none;
            outline: none;
            background: red;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            border: solid;
            border-radius: 10px;
        }

        .box input[type="submit"]:hover {
            background-color: #f8f8f8;
            color: #030303;
        }

        .box input[type="button"]:hover {
            background-color: #f8f8f8;
            color: #030303;
        }

        .box input {
            background-color: #f8f8f8;
            color: #030303;
        }

        .icon {
            display: block;
            margin: auto;
            width: 100px;
            margin-bottom: 5px;
        }

        #H1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background-color: red;
            border-style: solid;
            border-width: 3px;
            border-radius: 10px;
            opacity: 0.85;
            width: 60%;
            margin: auto;
            margin-bottom: -75px;
            margin-top: 3px;
        }

        .text-center {
            color: white;
            background-color: black;
            text-align: center;
            font-size: 60%;
            /* position: fixed; */
            bottom: 0px;
            margin: auto;
            left: 0px;
            width: 100%;
        }

        .background {
            background-image: url(https://d2o0s5gkmp1j1.cloudfront.net/1V9A6620-1024x800-386217-edited.jpg);
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
            /* height: 100vh; */
            width: 100%;
        }

        .blur {
            backdrop-filter: blur(3px);
            /* height: 100vh; */
            width: 100%;
        }
        .Social {
            height: 2rem;
            width: 2rem;
        }
        
        .footerOut {
            background-color: black;
            padding-bottom: 10px;
            padding-top: 10px;
        }
        
        #footer {
            display: flex;
            box-sizing: border-box;
            margin: 0 auto;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
            width: 95%;
        }
        
        #footer .footerEl {
            width: 33.33%;
            height: 200px;
            box-sizing: border-box;
            display: block;
            text-align: center;
            padding-top: 20px;
        }
        
        #footer .footerEl div {
            vertical-align: top;
        }
        
        #copyright {
            color: white;
        }
        
        .footerHR {
            box-align: center;
            /* border-color: black; */
            background-color: white;
            size: 20px;
        }
        
        .footatt h6 {
            color: white;
        }
        
        .footatt .SocialMedia {
            width: 100%;
            margin: auto;
        }
        
        .footatt .SocialMedia a {
            display: block;
            /* padding-top: 10px; */
            /* padding: 0.5rem 0.5rem; */
        }
        
        .footatt :hover {
            color: white;
        }
    </style>
</head>



<body>
    <div class="background">
        <div class="blur">
            <!-- <div>

                <form action="login.php" method="post">

                    <span class="header">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Foody-Logo.svg/1024px-Foody-Logo.svg.png"
                            class="icon">
                    </span>


                </form>
            </div> -->

            <div class="bx">
                <br>
                <h1 id="H1">Check-out</h1>
                <div class="box">
                    <form action="/WebTechProject2/check-out.php" method="post"">

                        <div class="input-box" id="name">
                            <input type="text" name="name" autocomplete="off" required>
                            <label for="">Name</label>
                        </div>

                        <div class="input-box" id="phone">
                            <input type="number" name="phoneNum" autocomplete="off" required>
                            <label for="">Phone Number</label>
                        </div>

                        <div class="input-box" id="address">
                            <input type="text" name="address" autocomplete="off" required>
                            <label for="">Address</label>
                        </div>

                        <div class="input-box" id="bill" value="bill" >
                            <input type="" name="bill" autocomplete="off" id="billAmt" required readonly>
                            <label for="">Bill Amount(in Rupees):</label>
                        </div>
                        

                        <div class="input-box" id="Order">
                            <label for="Order"> </label>
                            <a href="orderSummary.php"><input type="submit" value="Place Order"></a>
                        </div>
                        <div class="input-box" >
                        <label for="summary"> </label>
                            <a href="orderSummary.php">
                                <input type="button" value="View Order Summary">
                            </a>
                        </div>
                        
                        <div class="input-box">
                            <label for="menu"> </label>
                            <a href="menu1.php">
                                <input type="button" value="Back To Menu">
                            </a>
                        </div>
                    </form>

                </div>
            </div>
            <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $phoneNum = $_POST['phoneNum'];
        $address = $_POST['address'];
        $bill = $_POST['bill'];
        
      
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
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `orders` (`name`, `phoneNum`, `address`, `billAmt`, `dt`) VALUES ('$name', '$phoneNum', '$address', '$bill', current_timestamp())";
        $result = mysqli_query($conn, $sql);
 
        // if($result){
        //   echo '<div class="my-5 alert alert-success alert-dismissible fade show" role="alert">
        //   <strong>Success!</strong> Your order has been placed!
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">×</span>
        //   </button>
        // </div>';
        // }
        // else{
        //     // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //   <strong>Error!</strong> We are facing some technical issue and your feedback was not submitted. We regret the inconvinience caused!
        //   Please try again later.
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">×</span>
        //   </button>
        // </div>';
        // }

      }

    }

    
?>
           
        </div>
    </div>
    <div class="footerOut">
                <hr class="footerHR">

                <!-- Footer -->

                <div id="footer">



                    <!-- ADD CLASS IF NEEDED TO ALLIGN COPYRIGHT TEXT -->



                    <div class="footerEl">

                        <div class="footatt ">

                            <h6>Company</h6>

                        </div>
                        <div class="footatt ">

                            <a href="">Who are we</a>

                        </div>



                        <div class="footatt ">

                            <a href="">Where you can find us</a>

                        </div>



                        <div class="footatt ">

                            <a href="">Help & Support</a>

                        </div>



                        <div class="footatt ">

                            <a href=""> Contact Us</a>

                        </div>
                    </div>
                    <div class="footerEl">
                        <div class="footatt ">

                            <h6>Connect with us</h6>

                        </div>

                        <div class="SocialMedia ">

                            <a href="https://www.instagram.com/"><img class="Social" src="insta.png" alt="instagram "></a>

                            <a href="https://www.facebook.com "> <img class="Social" src="fb.png" alt="facebook"></a>
                            <a href="https://twitter.com/?lang=en"> <img class="Social" src="twitter.png" alt="twitter"></a>

                        </div>
                    </div>
                    <div class="footerEl">
                        <div class="footatt ">

                            <h6>For You</h6>

                        </div>
                        <div class="footatt ">

                            <a href="">Nutrition Information </a>

                        </div>



                        <div class="footatt ">

                            <a href="">Privacy Policy</a>

                        </div>



                        <div class="footatt ">

                            <a href="">Covid-19 Safety</a>

                        </div>

                        <div class="footatt ">

                            <a href="">Terms and Conditions</a>

                        </div>
                    </div>

                </div>
                <p id="copyright" align="center">Copyright © 2021 Foody </p>
                <hr class="footerHR">
            </div>
    <script src="check-out.js"></script>
    <script>

    </script>
</body>

</html>