<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Travel DSW</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="">
		<link rel="stylesheet"  href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" 	href="assets/css/font-awesome.min.css">
		<link rel="stylesheet"  href="assets/css/main.css">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/homenews.js"></script>
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

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Travel DSW</h1>
		</div>
	</div>
</div>
<!-- ===== SLIDER ===== -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/first.jpg" alt="First slide">
                        <div class="carousel-caption">
                            <h3>
                                First slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/first.jpg" alt="Second slide">
                        <div class="carousel-caption">
                            <h3>
                                Second slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/first.jpg" alt="Third slide">
                        <div class="carousel-caption">
                            <h3>
                                Third slide</h3>
                            <p>
                                Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
            <div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h1>
                        Static Headline And Content</h1>
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h3>
                    <div class="">
                        <a class="btn btn-clear btn-sm btn-min-block" href="#">Login</a>
                        <a class="btn btn-clear btn-sm btn-min-block" href="#">Registration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="push"></div> <!-- utilité ??? -->

<!-- ===== ACTUALITES ===== -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Nos dernières actualités</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<a href="#" class="btn btn-info" id="btn-news"><span class="glyphicon glyphicon-globe"></span> Toutes nos actualités</a>
		</div>
	</div>
	<div class="row" id="phpnews">

	</div>
</div>

<!-- ===== FOOTER ===== -->
<div class ="container-fluid" id="footer">
	<div class="row">
		<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-4">
			<ul class="pull-left">
				<li><a href"news.php">Actualités</a></li>
				<li><a href"contact.php">Contact</a></li>
				<li><a href"login_and_register.php">Connexion</a></li>
			</ul>
		</div>
		<div class="col-md-4 col-xs-4 text-center">
			<a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-snapchat-square fa-2x" aria-hidden="true"></i></a>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-4">
			<ul class="pull-right">
				<li><a href"#">FAQ</a></li>
				<li><a href"#">Mentions légales</a></li>
				<li><a href"#">Lorem Ipsum</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p class="copy_footer">Tous droits réservés</p>
			<p class="copy_footer">&copy DSW 2017</p>
		</div>
	</div>
</div>
<!-- ===== BUTTON BACK TO TOP ===== -->
<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span></div>

</body>
</html>
