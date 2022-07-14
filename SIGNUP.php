<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $phoneno = $_POST["phoneno"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    // Check whether this phone number exists
    $existSql = "SELECT * FROM `users` WHERE phoneno = '$phoneno'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "An account with this phone number already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `phoneno`, `password`, `dt`) VALUES ('$phoneno', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOODY | FOOD DELIVERY AND TAKEAWAY | ORDER ONLINE FROM RESTAURANTS NEAR YOU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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
        .blurb h2{
    color: #ea1c2c;
    font-weight: 100;
    font-size: 2.5rem;
}
.blurb p{
    /* color: #f498b8; */
    color: black;
    font-weight: 200;
    font-size: 2rem;
    line-height: 2;
}
.content{
    margin-bottom: 100px;
    margin-top: 100px;
}
#mainNavbar .navbar-brand{
    color: #ea1c2c;
    font-size: 2rem;
    
}
#mainNavbar .nav-link{
    color: white;
    font-size: 1rem;
}
#mainNavbar {
    font-size: 1.5rem;
    font-weight: 100;
    background-color: black;
}
#mainNavbar .nav-link:hover{
    color: #ea1c2c;
}
#headingGroup span{
    color: #ea1c2c;
}
#headingGroup h1{
    font-weight: 100;
    font-size: 4rem;
}

@media(max-width: 1200px){
    #headingGroup h1{
        font-weight: 100;
        font-size: 3rem;
    }
}
        .bx {
            width: 550px;
            height: 550px;
            margin: auto;
            background-color: #e4e1e1;
            border: white;
            border-radius: 10px;
            margin-top:58px;
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

        .box.box input {
            font-size: 12px;
            font-weight: bold;
        }

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

        .box input[type="submit"]:hover {
            background-color: #f8f8f8;
            color: #030303;
        }

        .icon {
            display: block;
            margin: auto;
            width: 100px;
            margin-bottom: 20px;
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
            margin-bottom: -30px;
            margin-top: 10px;
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
            /* margin-left: 10px;
    display: flex; */
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
        icon-shape {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    vertical-align: middle;
}

.icon-sm {
    width: 2rem;
    height: 2rem;
    
}
    </style>
</head>

<body>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> 
    <script>alert("Your account is now created. You can now login.")</script>';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
    
     <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
            <a href="" class="navbar-brand">FOODY</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks"
                aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navLinks">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a href="homeFinal.html" class="nav-link">Back To Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="LOGIN.php" class="nav-link">Login</a>
                    </li>
                  
                    <li class="nav-item">
                        <a href="menu1.php" class="nav-link">Order without Login!</a>
                    </li>
                    <li class="nav-item">
                        <a href="Feedback.php" class="nav-link">Give Feedback</a>
                    </li>



                </ul>
            </div>



        </nav>
    <div class="background">
        <div class="blur">
            <div>

                

            </div>
            <div class="bx">
                <br><br>
                <h1 id="H1">Sign-Up</h1>
                <div class="box">
                    <form action="/WebTechProject2/SIGNUP.php" method="post">
                        <!-- 
                        <div class="input-box">
                            <input type="email" name="Email-Id" autocomplete="off" required>
                            <label for="">Email-Id</label>
                        </div> -->

                        <div class="input-box">
                            <input type="number" name="phoneno" autocomplete="off" required>
                            <label for="phoneno">Phone Number</label>
                        </div>

                        <div class="input-box">
                            <input type="password" name="password" autocomplete="off" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-box">
                            <input type="password" name="cpassword" autocomplete="off" required>
                            <label for="cpassword">Confirm Password</label>
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Sign Up">
                        </div>

                        <script>
                            function myFunction() {
                                alert("The form was submitted");
                            }
                        </script>
                         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                    </form>

                </div>
            </div>

            <!-- <div>
                <footer>
                    <p class="text-center "> Copyright © My Website 2021 </p>
                </footer>
            </div> -->
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

    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>

</html>