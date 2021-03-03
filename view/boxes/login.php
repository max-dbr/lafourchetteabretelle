<div class="container" id="container">
	<div class="form-container sign-up-container">
  <form class="forme" method="POST" action="./execution/traitement.php">
      <input type="text" placeholder="Civilite" name="Civilite" />
			<input type="text" placeholder="Nom" name="Nom" />
      <input type="text" placeholder="Prenom" name="Prenom" />
      <input type="text" placeholder="Adresse" name="Adresse" />
			<input type="email" placeholder="Email" name="Mail"/>
      <input type="text" placeholder="Tel" name="Tel"/>
			<input type="password" placeholder="Mot de passe" name="Passe" />
			<button>Inscription</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form class="forme" method="POST" action="./execution/connexion.php">
			<h1>Connexion</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<input type="email" placeholder="Email" name="Mail" />
			<input type="password" placeholder="Mot de passe" name="Passe" />
			<a href="#">Mot de passe oublié?</a>
			<button name="connexion">Se connecter</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Te revoilà !</h1>
				<p>Pour rester connecté avec nous, veuillez vous connecter avec vos informations personnelles</p>
				<button class="ghost" id="signIn">Se connecter</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Bonjour</h1>
				<p>Entrez vos informations personnelles et recevez vite votre commande.</p>
				<button class="ghost" id="signUp">S'inscrire</button>
			</div>
		</div>
	</div>
</div>
