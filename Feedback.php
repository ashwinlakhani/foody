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

    <title>Feedback - Foody</title>
    
  </head>
  <body>
  <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
        <a href="homeFinal.html" class="navbar-brand">FOODY</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="homeFinal.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="menu1.php" class="nav-link">Menu</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="" class="nav-link">Checkout</a>
                </li>
                <li class="nav-item">
                    <a href="#NorthIndian" class="nav-link">North Indian</a>
                </li>
                <li class="nav-item">
                    <a href="#SouthIndian" class="nav-link">South Indian</a>
                </li>
                <li class="nav-item">
                    <a href="#Chinese" class="nav-link">Chinese</a>
                </li>
                <li class="nav-item">
                    <a href="#Italian" class="nav-link">Italian</a>
                </li>
                <li class="nav-item">
                    <a href="#Shakes" class="nav-link">Dessert</a>
                </li>
                <li class="nav-item">
                    <a href="#Footer" class="nav-link">Go to Bottom </a>
                </li> -->

                <!-- <li class="nav-item">
                    <a href="" class="nav-link">TICKETS</a>
                </li> -->
            </ul>
        </div>



    </nav>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contactus` (`name`, `email`, `feedback`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="my-5 alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your feedback has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your feedback was not submitted. We regret the inconvinience caused!
          Please try again later.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>

<div class="container mt-3 my-5">
<center><h1>Feedback</h1></center>
    <form action="/WebTechProject2/Feedback.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea> 
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>
  </body>
</html>

