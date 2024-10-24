<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GHAR ANGAN SWEETS</title>
	<!-- slider  -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

	<!-- custom css files link -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
	<!-- header section start -->
		<header>
			<a href="#" class="logo"><img src="logo0.png" height="45px" width="60px"></a>
			<h1>Hi!<span id="username"><?php echo isset($_GET['username']) ? htmlspecialchars($_GET['username']) : 'Guest'; ?></span></h1>			
			<nav class="navbar">
				<a href="#home" class="">home</a>
				<a href="#about">about</a>
				<a href="#product">menu</a>
				<a href="#team">team</a>
				<a href="#reservation">reservation</a>
				<a href="#footer">contact</a>
				<a href="login.php">Login</a>
			</nav>

			<div class="icons">
				<ul>
				    <li><i class="fas fa-bars" id="menu"></i></li>
				
				     <li><a href="https://api.whatsapp.com/send?phone=+9779809101759&text=Hi...%20is%20there%20someone?" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
					  <li><a><i id="cart-btn" class="fas fa-shopping-cart"></i></a></li>
				 
				</ul>
			</div>

		</header>

		<div class="cart-items-container">

			<div id="close-form" class="fas fa-times"></div>
			<h3 class="title">checkout</h3>
			<div class="item">
				<h5 id="item"></h5>
			</div>
			<h1> Total items:<div id="cart">0</div></h1>
	        <div id="cart-modal">
				<h2>
				<ul id="cart-details"></ul>
				<hr>
				<p>Total Bill: Rs<span id="total-bill">:0</span></p>

				</h2>
				<button onclick="checkout();"> checkout </button>
			</div>
			

	
		</div>
	<!-- header section end -->

	<!-- slider section start -->

	<div class="home" id="home">
		<div class="swiper home-slider">
			<div class="swiper-wrapper wrapper">
				
				<div class="swiper-slide slide slide1">
					<div class="content">
						<img src="crown-symbol.png">

						<h3>Delicious Ghar Angan Sweets</h3>
						<h1>Gift Voucher</h1>
						<p>
							give away your beloved customers
						</p>
						<a href="https://api.whatsapp.com/send?phone=+9779809101759&text=Hi...%20is%20there%20someone?" class="btn" target="_blank">order now</a>
					</div>
				</div>

				<div class="swiper-slide slide slide2">
					<div class="content">
						<img src="crown-symbol.png">
						<h3>sale of 10% this dish</h3>
						<h1>the fresh</h1>
						<p>
							food restaurant and bakery
						</p>
						<a href="https://api.whatsapp.com/send?phone=+9779809101759&text=Hi...%20is%20there%20someone?" class="btn" target="_blank">order now</a>
					</div>
				</div>
				<div class="swiper-slide slide slide3">
					<div class="content">
						<img src="crown-symbol.png">
						<h3>we are open</h3>
						<h1>fresh Sweets</h1>
						<p>
							you will love it
						</p>
						<a href="https://api.whatsapp.com/send?phone=+9779809101759&text=Hi...%20is%20there%20someone?" class="btn" target="_blank">order now</a>
					</div>
				</div>

				
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<!-- slider section end -->

	<section class="welcome" id="about">
		<h1 class="heading">WELCOME TO GHAR ANGAN SWEETS</h1>
		<center><h3 class="sub-heading"> ~ Luxury & Quality ~ </h3></center>

		<div class="box-container">
			<div class="box">
				<div class="image">
					<img src="home-img-1.png">
				</div>

				<div class="content">
					<h3>THE MENU IS PLENTIFUL</h3>
					<p>we take pride in turning your mealtime into a delightful experience. Come join us, where the menu is as abundant as the smiles on our satisfied customers' faces.we prioritize the health and safety of our customers and team members alik</p>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="samosa.jpg">
				</div>

				<div class="content">
					<h3>AMAZING TASTE</h3>
					<p>We believe in pushing the boundaries of traditional fast food, offering unique and mouthwatering combinations that leave an indelible mark on your taste buds. Spice aficionados will revel in our bold and zesty creations.Join us at Ghar Angan Sweets.</p>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="momo.jpg">
				</div>

				<div class="content">
					<h3>HYGIENE GUARANTEED</h3>
					<p>Our commitment to hygiene extends beyond the kitchen to our dining areas. Immerse yourself in a clean and inviting atmosphere, where every table, chair, and surface is regularly sanitized to create a safe space for you to enjoy your meal.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- wecome section ends -->


	<section class="product" id="product">

        <h1 class="heading">Most <span> Demanded</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="product1.png" alt="">
                </div>
                <div class="content">
                    <h3>Mix mithai</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">Rs.1100/kg</span>
                    <button class="btn" onclick="addToCart('IMix mithai', 1100)">add to cart</button>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="product2.png" alt="">
                </div>
                <div class="content">
                    <h3>Kaju Katli</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">Rs.1600/kg</span>
                    <button class="btn" onclick="addToCart('kaju katli', 1600)">add to cart</button>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="product3.png" alt="">
                </div>
                <div class="content">
                    <h3>Khowa Barfi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="price">Rs.1000/kg</span>
                    <button class="btn" onclick="addToCart('khowa barfi', 1000)">add to cart</button>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="product4.png" alt="">
                </div>
                <div class="content">
                    <h3>Rasvari</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">Rs.700/kg</span>
                    <button class="btn" onclick="addToCart('Rasbari', 700)">add to cart</button>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="product5.png" alt="">
                </div>
                <div class="content">
                    <h3>Peda</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="price">Rs.800/kg</span>
                    <button class="btn" onclick="addToCart('peda', 800)">add to cart</button>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="product6.png" alt="">
                </div>
                <div class="content">
                    <h3>Plain Laddu</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">Rs.400/kg</span>
                    <button class="btn" onclick="addToCart('laddu', 400)">add to cart</button>
                </div>
            </div>

        </div>

    </section>


	<!-- our team section start -->
	<section class="our-team" id="team">
		<h1 class="heading">OUR TALENTED TEAM</h1>
		<center><h3 class="sub-heading">~ Experience & Enthusiasm ~</h3></center>


		<div class="our-chef">
			<div class="item">
				<div class="image">
					<img src="owner.jpg">
				</div>

				<div class="chef-info">
					<div>
						<h3>bIRENDRA SHAH</h3>
						<span>Owner AND CEO</span>
						<ul>
							<li><a href="https://www.instagram.com/birshah54?igsh=MTdxOWtjNmFqNTJoMQ=="><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=+9779809101759&text=Hi...%20is%20there%20someone?"><i class="fa-brands fa-whatsapp"></i></a></li>
							<li><a href="https://www.facebook.com/bir.gupta.3?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="tel:+9779855045054"><i class="fa fa-phone"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="image">
					<img src="salesManager.jpg" >
				</div>

				<div class="chef-info">
					<div>
						<h3>Sandesh basnet</h3>
						<span>Sales Manager</span>
						<ul>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-phone"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="image">
					<img src="fastfoodchef.jpg">
				</div>

				<div class="chef-info">
					<div>
						<h3>samir chhetri</h3>
						<span>fast food chef</span>
						<ul>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-phone"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- our team section ends -->

	<!-- reservation section start -->
	<div class="reservation" id="reservation">
		<div class="image">
			
		</div>
		<div class="form">
			<h1 class="heading">BOOK A TABLE</h1>
			<center><h3 class="sub-heading">~ Check out our place ~</h3></center>

			<form action="reservation.php" method="post">
				<div class="form-holder">
					<div>
						<select name="people" >
							<option>1 people</option>
							<option>2 people</option>
							<option>3 people</option>
							<option>4 people</option>
							<option>5 people</option>
							<option>6 people</option>
							<option>7 people</option>
							<option>8 people</option>
							<option>9 people</option>
							<option>10 people</option>
						</select>

						<input type="text" name="time" placeholder="Time" required>

						<input type="text" name="phone" placeholder="phone" required>
					</div>

					<div>
						<input type="text" name="date" placeholder="Date" required>

						<input type="text" name="name" placeholder="Name" required>

						<input type="email" name="email" placeholder="email" required>
					</div>
				</div>
				<center><button type="submit" class="btn">Book Now</button></center>
			</form>
		</div>
	</div>
	<!-- reservation section ends -->

	<!-- footer section start -->
	<section class="footer" id="footer">
		<img src="logo0.png" height="80px" width="90px" class="logo">

		<div class="container">
			<div>
				<h3>ABOUT US</h3>

				<p>Ghar Angan Sweets is a popular fast food and sweets restaurant located in simara.It is popular for its hygeine,quality and delicious number of collective items.</p>
			</div>

			<div>
				<h3>GET NEWS & OFFERS</h3>
				<span>you can also follow us on Instagram and Facebook. also you can directly get in touch us.</span>
				<input type="email" name="" placeholder="enter your email">
				<button type="submit">Submit</button>
				<ul>
					<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i></a></li>
					
				</ul>
			</div>

			<div>
				<h3>CONTACT US</h3>
				<span>GHAR ANGAN SWEETS</span>
				<span>+9779855045054</span>
				<span>airport road,Simara,Bara</span>
				<span>Always open from 6am-10pm</span>
			</div>
		</div>

		<p>&copy;2022 Reserved by Ghar Angan Sweets.</p>
	</section>
	<!-- footer section ends -->


	<a href="#top"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>

	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<!-- javascript custom code -->
	<script type="text/javascript" src="script.js">
		
	</script>
</body>
</html>