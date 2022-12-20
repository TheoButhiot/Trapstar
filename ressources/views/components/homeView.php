<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../assets/styles/reset.css">
		<link rel="stylesheet" href="../assets/styles/home.css">
		<title>Document</title>
	</head>
	<body>
		<section class="firstSection">
			<nav class="navbar">
				<div class="logoTrapstar">
					<img src="../assets/img/trapstar-london-nadine-a-courtemanche.jpg" alt="LogoTrpstr">

					<ul class="link">
						<li>
							<a href="/home">Shop All</a>
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
						<button type="submit"><img src="../assets/img/iconmonstr-log-out-8-240.png" alt="logout" id="logout"></button>
					</form>
				</div>
			</nav>


			<div class="clothesList">
				<?php
              foreach ($clothes as $article){ ?>
			  <a href="/article?id=<?= $article["id"]; ?>">
				<div class="clothesCard">
					<div class="clothesImage">
						<img src="../<?= $article["img"]; ?>"alt="switch">
					</div>
					<h2 class="price"><?= $article["name"]; ?></h2>
					<br>
					<p class="price"><?= $article["price"];?></p>
				</div>
				</a>
				<?php }?>
			  </div>

			  <div class="page">
				<div class="containerPage">
					<ul>
						<li class="numberPage">1</li>
					
						<li class="numberPage">2</li>
					
						<li class="numberPage">3</li>
					</ul>
				</div>
			  </div>
		</section>
		<!-- <section class="clothesPage"></section> -->

		<script type="module" src="http://localhost:5173/@vite/client"></script>
		<script type="module" src="http://localhost:5173/main.js"></script>
	</body>
</html>

