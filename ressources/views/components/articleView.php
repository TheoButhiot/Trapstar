<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/styles/reset.css">
	<link rel="stylesheet" href="../assets/styles/article.css">
	<title>Document</title>
</head>

<body>
	<section class="firstSection">
		<nav class="navbar">
			<div class="logoTrapstar">
				<img src="../assets/img/trapstar-london-nadine-a-courtemanche.jpg" alt="LogoTrpstr">

				<ul class="link">
					<li>
						<a href="">Shop All</a>
					</li>
					<li>
						<a href="">Men</a>
					</li>
					<li>
						<a href="">Womens</a>
					</li>
				</ul>
			</div>

			<div class="icons">
				<img src="../assets/img/iconmonstr-shopping-bag-4-240.png" alt="shop" id="shop">
				<img src="../assets/img/iconmonstr-user-6-240.png" alt="user" id="user">
				<form action="/logout">
					<button type="submit"><img src="/assets/img/iconmonstr-log-out-8-240.png" alt="logout"
							id="logout"></button>
				</form>
			</div>
		</nav>
		<div class="navbarBackToHome">
			<a href="/home">
				<div class="textBTH">Back to home</div>
			</a>
		</div>

		<div class="articleCard">
			<div class="article">
				<div class="articleLittleImg">

					<img src="../<?= $clothe["img"]; ?>" alt="">
					<img src="../assets/img/camo-black-back-tee_720x.webp" alt="">
				</div>
				<div class="articleImg">
					<img src="../<?= $clothe["img"]; ?>" alt="tshirt" id="tshirt">
				</div>

				<div class="references">
					<form class="formArticle" action="/articleBag" method="POST">
						<h2 class="name">
							<?= $clothe['name'] ?>
						</h2>
						<br>
						<p class="price">
							<?= $clothe['price'] ?>
						</p>
						<br>
						<div class="size">
							<span>Size</span>
						</div>
						<br>
						<div class="containerS">
							<select class="selectSize" name="size">
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
							</select>
						</div>
						<br>
						<div class="colour">
							<span>Colour</span>
						</div>
						<br>
						<div class="containerC">
							<select class="selectColour" name="color">
								<option value="Black">Black</option>
								<option value="White">White</option>
							</select>
						</div>
						<br>
						<div class="quantity">
							<span>Quantity</span>
						</div>
						<br>
						<div class="containerQ">
							<select class="selectQuantity" name="quantity">
								<?php for($i = 1; $i <= $clothe['quantity']; $i++){ ?>	
								<option value="<?= $i; ?>"><?= $i; ?></option>
								<?php } ?>
							</select>
						</div>
						<br>
						<br>
						<div class="buttonCart">
							<button type="submit" >
								<span class="adtText">ADD TO CART<span>
							</button>
							<input type="hidden" value="<?= $clothe['id']; ?>" name="article_id">
						</div>
					</form>
				</div>
			</div>
		</div>



		<!-- <div class="footer">
									<div class="containerFooter">
										<img src="\img\iconmonstr-facebook-6-240.png" alt="fcbk">
										<img src="\img\iconmonstr-instagram-11-240.png" alt="insta">
										<img src="\img\iconmonstr-twitter-1-240.png" alt="twitter">
									</div>
								</div> !-->
	</section>
	<script type="module" src="http://localhost:5173/@vite/client"></script>
	<script type="module" src="http://localhost:5173/main.js"></script>

</body>

</html>
</body>

</html>