<?php
require './admin/helpers/dbConnection.php';
require './admin/helpers/functions.php';

$id = $_GET['id'];
$sql = "select product.*, subcategory.id from product join subcategory on product.sub_category_id = subcategory.id where sub_category_id = $id";
$op = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/all.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/animate.min.css" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link href="css/products.css" rel="stylesheet" type="text/css">
	<title>Comfy Store</title>
	<!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->

</head>
<body>

	<header>

		<div class="container">

			<nav>
				<div class="drop-list">
					<i class="fas fa-bars" id="iconList"></i>
					<div class="listt">
						<i class="fas fa-times" id="iconcloselist"></i>
						<ul>
							<li> <a href="index.html">Home</a> </li>
							<li> <a href="#">Products</a> </li>
							<li> <a href="about.html">About</a> </li>
						</ul>
					</div>
					<ul class="ulLarge">
						<li> <a href="index.html">Home</a> </li>
						<li> <a href="#">Products</a> </li>
						<li> <a href="about.html">About</a> </li>
					</ul>
				</div>
				<!-- <div class="logo">
					<p>comfy</p>
				</div>
				<div class="nav-card">
					<i class="fas fa-shopping-cart" id="cardicon"><span>0</span></i>
			  </div> -->
			</nav>

		</div>
	</header>


<!------------------------------------------------------------->

  <section class="sec1">
    <div class="container">
      <h1>Home / Cart</h1>
    </div>
  </section>

<!------------------------------------------------------------->

    <section class="sec2">
		<div class="container">

            <figure class="headlist">
                <h6>Product</h6>
                <div class="headlistinfo">
                    <h6>Quantity</h6>
                    <h6>Price</h6>
                    <h6>Total</h6>
                </div>
            </figure>

            <figure class="cartcontent">

                <div class="cartimg">
                    <div> <img src="images/armchair.jpeg" alt=""> </div>
                    <div>
                        <h6>Product One</h6>
                        <p>status : in Stock</p>
                    </div>
                </div>

                <div class="cartinfo">
                    <input type="number" name="quantity" value="" min="1" >
                    <p> <span>$</span> 1500</p>
                    <p><span>$</span> 1500</p>
                    <a href=""> <button type="button"> Remove </button> </a>
                </div>
            </figure>

            <hr color="#DDd" width="100%" >

            <figure class="cartcontent">

                <div class="cartimg">
                    <div> <img src="images/armchair.jpeg" alt=""> </div>
                    <div>
                        <h6>Product One</h6>
                        <p>status : in Stock</p>
                    </div>
                </div>

                <div class="cartinfo">
                    <input type="number" name="quantity" value="" min="1" >
                    <p> <span>$</span> 1500</p>
                    <p><span>$</span> 1500</p>
                    <a href=""> <button type="button"> Remove </button> </a>
                </div>
            </figure>

            <hr color="#DDd" width="100%" >

            <figure class="cartcontent">

                <div class="cartimg">
                    <div> <img src="images/armchair.jpeg" alt=""> </div>
                    <div>
                        <h6>Product One</h6>
                        <p>status : in Stock</p>
                    </div>
                </div>

                <div class="cartinfo">
                    <input type="number" name="quantity" value="" min="1" >
                    <p> <span>$</span> 1500</p>
                    <p><span>$</span> 1500</p>
                    <a href=""> <button type="button"> Remove </button> </a>
                </div>
            </figure>

            <hr color="#DDd" width="100%" >

            <figure class="cartcontent">

                <div class="cartimg">
                    <div> <img src="images/armchair.jpeg" alt=""> </div>
                    <div>
                        <h6>Product One</h6>
                        <p>status : in Stock</p>
                    </div>
                </div>

                <div class="cartinfo">
                    <input type="number" name="quantity" value="" min="1" >
                    <p> <span>$</span> 1500</p>
                    <p><span>$</span> 1500</p>
                    <a href=""> <button type="button"> Remove </button> </a>
                </div>
            </figure>

            <hr color="#DDd" width="100%" >

            <figure class="cartcontent">

                <div class="cartimg">
                    <div> <img src="images/armchair.jpeg" alt=""> </div>
                    <div>
                        <h6>Product One</h6>
                        <p>status : in Stock</p>
                    </div>
                </div>

                <div class="cartinfo">
                    <input type="number" name="quantity" value="" min="1" >
                    <p> <span>$</span> 1500</p>
                    <p><span>$</span> 1500</p>
                    <a href=""> <button type="button"> Remove </button> </a>
                </div>
            </figure>

            <hr color="#DDd" width="100%" >
 
	    </div>
    </section>

    <section class="sec3">
        <div class="container">

            <figure>

                <div class="sec3-head">
                    <h4>Cart Total</h4>
                </div>

                <div>
                    <h5>Subtotal</h5>
                    <h5> <span>$</span>1500.00 </h5>
                </div>

                <div>
                    <h5>Subtotal</h5>
                    <h5> <span>$</span>1500.00 </h5>
                </div>

                <div>
                    <h5>Subtotal</h5>
                    <h5> <span>$</span>1500.00 </h5>
                </div>

                <div>
                    <a href="products.html"> <button type="button"> Continue Shopping </button> </a>
                    <a href="checkout.html"> <button type="button"> Checkout </button> </a>
                </div>

            </figure>


        </div>
    </section>

