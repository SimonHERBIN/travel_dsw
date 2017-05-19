<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Inscription/Connexion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="">
		<link rel="stylesheet"  href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" 	href="assets/css/font-awesome.min.css">
		<link rel="stylesheet"  href="assets/css/main.css">

		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/login_and_register.js"></script>
		<script src="assets/js/espacemembre.js"></script>
	</head>
	<body>

	<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<!-- ===== <a class="navbar-brand" href="#">Logo</a> ===== -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="index.php">Accueil</a></li>
						<li><a href="news.php">Actualités</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right ">
						<li><a href="contact.php">Contact</a></li>
						<li><a href=""><button class="btn btn-info" id="membrebtn">Espace membres</button></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

<!-- TITLE -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Travel DSW</h1>
		</div>
	</div>
</div>

<!-- LOGIN REGISTER -->
	 <div class="container">
    	<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Se connecter</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">S'inscrire</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="usernamelogin" tabindex="1" class="form-control" placeholder="Pseudo" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="passwordlogin" tabindex="2" class="form-control" placeholder="Mot de passe">
									</div>
									<!-- <div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Se souvenir de moi</label>
									</div> -->
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Se connecter">
											</div>
										</div>
									</div>
									<!-- <div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password"> Mot de passe oublié ?</a>
												</div>
											</div>
										</div>
									</div> -->
								</form>

								<form id="register-form" action="" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Pseudo" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="Adresse E-mail" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="3" class="form-control" placeholder="Mot de passe">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="4" class="form-control" placeholder="Confirmer mot de passe">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="register-submit" tabindex="5" class="form-control btn btn-register" value="S'inscrire">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</body>
	</html>
