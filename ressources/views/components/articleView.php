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
						<button type="submit"><img src="/assets/img/iconmonstr-log-out-8-240.png" alt="logout" id="logout"></button>
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
						<h2 class="name">
							<?= $clothe['name'] ?></h2>
						<br>
						<p class="price"><?= $clothe['price'] ?></p>
						<br>
						<div class="size">
							<span>Size</span>
						</div>
						<br>
						<div class="containerS">
							<select class="selectSize">
								<option value="valeur1">S</option>
								<option value="valeur2">M</option>
								<option value="valeur3">L</option>
								<option value="valeur3">XL</option>
							</select>
						</div>
						<br>
						<div class="colour">
							<span>Colour</span>
						</div>
						<br>
						<div class="containerC">
							<select class="selectColour">
								<option value="valeur1">Black</option>
								<option value="valeur2">White</option>
							</select>
						</div>
						<br>
						<div class="quantity">
							<span>Quantity</span>
						</div>
						<br>
						<div class="containerQ">
							<select class="selectQuantity">
								<option value="valeur1">1</option>
								<option value="valeur2">2</option>
								<option value="valeur2">3</option>
								<option value="valeur2">4</option>
							</select>
						</div>
						<br>
						<br>
						<div class="buttonCart">
							<button type="submit" name="submit">
								<span class="adtText">ADD TO CART<span></button>
								</div>
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

