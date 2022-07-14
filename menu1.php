
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="menu.css">

    <title>Foody - Menu</title>
</head>

<body>
    <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
        <a href="" class="navbar-brand">FOODY</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="homeFinal.html" class="nav-link">Exit To HomePage</a>
                </li>
                <li class="nav-item">
                    <a href="check-out.php" class="nav-link" onclick="save()">Checkout</a>
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
                </li>
                <li class="nav-item">
                    <a href="Feedback.php" class="nav-link">Feedback</a>
                </li>

                <!-- <li class="nav-item">
                    <a href="" class="nav-link">TICKETS</a>
                </li> -->
            </ul>
        </div>



    </nav>

    <section id="NorthIndian">

        <section class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5">
                        <!-- <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1> -->
                        <h1 class="">North<span>/</span>Indian</h1>
                        <h1 class="">North<span>/</span>Indian</h1>
                        <h1 class="">North<span>/</span>Indian</h1>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid"
                        src="https://media.istockphoto.com/vectors/indian-food-vector-india-cuisine-and-asian-dishes-masala-with-sp-vector-id1180882417"
                        alt="">
                </div>
            </div>
        </section>
        <section class="container-fluid px-0">
            <!-- img on left -->
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://images.unsplash.com/photo-1516714435131-44d6b64dc6a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Rajma Rice</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Samosas</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1566222499048-9538f86d4675?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=535&q=80"
                        alt="" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://media.gettyimages.com/photos/high-angle-view-of-food-in-plate-picture-id763289873?s=2048x2048"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Thali</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Khichdi</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://st.depositphotos.com/1215600/3503/i/950/depositphotos_35039431-stock-photo-kichuri-from-above-with-fork.jpg"
                        alt="" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://st2.depositphotos.com/4513173/6704/i/950/depositphotos_67042703-stock-photo-paneer-makhani-curry-with-rumali.jpg"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Paneer Makhani with Rumali Roti</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>
    <section id="SouthIndian">
        <section class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5">
                        <!-- <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1> -->
                        <h1 class="">South<span>/</span>Indian</h1>
                        <h1 class="">South<span>/</span>Indian</h1>
                        <h1 class="">South<span>/</span>Indian</h1>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="https://image.freepik.com/free-vector/paper-masala-dosa_1302-11169.jpg"
                        alt="">
                </div>
            </div>
        </section>
        <section class="container-fluid px-0">
            <!-- img on left -->
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://media.gettyimages.com/photos/high-angle-view-of-food-served-in-plate-on-table-picture-id936524734?s=2048x2048"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Idlis</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Plain Dosa</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://static8.depositphotos.com/1093689/978/i/950/depositphotos_9780533-stock-photo-south-indian-breakfast-dosa-in.jpg"
                        alt="" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://st2.depositphotos.com/4513173/6704/i/950/depositphotos_67041459-stock-photo-south-indian-snack.jpg"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Vada</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Masala Dosa</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://static8.depositphotos.com/1093689/820/i/950/depositphotos_8200452-stock-photo-masala-dosa-with-different-types.jpg"
                        alt="" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://st4.depositphotos.com/5653638/39870/i/1600/depositphotos_398702754-stock-photo-red-pumpkin-kaddu-raita-known.jpg"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Uttapam</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->


        </section>
    </section>
    <section id="Chinese">
        <section class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5">
                        <!-- <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1> -->
                        <h1 class="">Chinese<span>/</span></h1>
                        <h1 class="">Chinese<span>/</span></h1>
                        <h1 class="">Chinese<span>/</span></h1>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid"
                        src="https://images.pexels.com/photos/6163757/pexels-photo-6163757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
            </div>
        </section>
        <section class="container-fluid px-0">
            <!-- img on left -->
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://image.freepik.com/free-photo/top-view-chinese-steamed-buns_23-2148297955.jpg"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Dimsums</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Hakka Noodles</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://image.freepik.com/free-photo/noodles-bowl-composition_23-2148803799.jpg" alt=""
                        class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://images.pexels.com/photos/343871/pexels-photo-343871.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Fried Rice</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Wok Box</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://image.freepik.com/free-photo/asian-food-box-with-yellow-background_23-2148242495.jpg"
                        alt="" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Ramen Noodles</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->

        </section>
    </section>
    <section id="Italian">
        <section class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5">
                        <!-- <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1> -->
                        <h1 class="">Italian<span>/</span></h1>
                        <h1 class="">Italian<span>/</span></h1>
                        <h1 class="">Italian<span>/</span></h1>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid"
                        src="https://image.freepik.com/free-vector/italian-cuisine-illustration_1284-37909.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="container-fluid px-0">
            <!-- img on left -->
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://images.unsplash.com/photo-1582035619445-9c26d5de240d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Arrabiata Sauce Pasta</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">

                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Spaghetti</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1570549986390-6bd150ac3515?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=628&q=80"
                        alt="" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://images.unsplash.com/photo-1618414466217-34f57f16c354?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Margherita Pizza</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Mushroom Pizza</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.pexels.com/photos/6147834/pexels-photo-6147834.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://images.pexels.com/photos/9951852/pexels-photo-9951852.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Cheesy Garlic Bread</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Vegetable Salad</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1604909052743-94e838986d24?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                        alt="" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://images.pexels.com/photos/9444651/pexels-photo-9444651.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Alfredo Penne Pasta</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>



        </section>
    </section>
    <section id="Shakes">
        <section class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5">
                        <!-- <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1>
                    <h1 class="">MUSEUM<span>/</span>OF<span>/</span>CANDY</h1> -->
                        <h1 class="">Shakes<span>/</span>Dessert</h1>
                        <h1 class="">Shakes<span>/</span>Dessert</h1>
                        <h1 class="">Shakes<span>/</span>Dessert</h1>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid"
                        src="https://image.freepik.com/free-vector/hand-drawn-monster-shakes-pack_23-2148611276.jpg"
                        alt="">
                </div>
            </div>
        </section>
        <section class="container-fluid px-0">
            <!-- img on left -->
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://images.pexels.com/photos/4945142/pexels-photo-4945142.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Assorted Donuts</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Strawberry Banana Smoothie</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1638176311291-36b0eacc6b08?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                        alt="" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://images.unsplash.com/photo-1638176066666-ffb2f013c7dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                        alt="" class="img-fluid">
                </div>
                <!-- price and quant -->
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Oreo Shake</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- img on right -->
            <div class="row align-items-center content">

                <div class="col-md-6 text-center ">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>Chocolate Sundae</h2>
                            <!-- <img class="d-none d-lg-inline" src="imgs/lolli_icon.png" alt=""> -->
                            <p class="lead">Price: Rs<span>199</span></p>
                            <div class="quantity">
                                <div class="input-group w-auto justify-content-center align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="0" name="quantity"
                                        class="quantity-field border-0 text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border rounded-circle icon-shape icon-sm "
                                        data-field="quantity">
                                    <button type="button" class="add btn btn-danger">Add</button>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label>Quantity: </label>
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                            class="glyphicon glyphicon-minus"></span></button>
                                </div>
                                <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                <div class="input-group-btn">
                                    <button id="up" class="btn btn-default" onclick="up('10')"><span
                                            class="glyphicon glyphicon-plus"></span></button>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1514849302-984523450cf4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                        alt="" class="img-fluid">
                </div>
            </div>


        </section>
    </section>


    <section id="Footer">
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
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="menu.js"></script>
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>
    <script>
        function save() { localStorage.setItem("BillAmount", total); }
    </script>

</body>

</html>