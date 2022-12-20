<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="/assets/styles/reset.css">
		<link rel="stylesheet" href="/assets/styles/signup.css">
		<title>Inscription</title>
	</head>
	<body class="grid">

		<div class="sign-up">

			<form class="signup-form" action="/form_signup" method="POST">
				<h1>Créer un compte</h1>

				<label class="label-input">
					<input type="text" class="input-text" name="name" placeholder="Name">
				</label>

				<label class="label-input">
					<input type="email" class="input-text" name="email" placeholder="Email">
				</label>

				<label class="label-input">
					<input type="password" name="password" class="input-text" placeholder="Password">

				</label>

				<button type="submit">
					<span>S'inscrire<span></button>
						<p>Vous avez déjà un compte ?<span>
								<a href="/">Connectez-vous!</a>
								<span></p>
							</form>
						</p>
					</div>

					<div class="welcome-container-signup"></div>
					<script type="module" src="http://localhost:5173/@vite/client"></script>
					<script type="module" src="http://localhost:5173/main.js"></script>
				</body>
			</html>
