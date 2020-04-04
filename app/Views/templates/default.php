
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Virus Drive - Accueil</title>
		<link rel="icon" type="image/png" href="images/logo.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/aos.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<header style="background-image: url('images/accueil.jpg');">
			<nav class="navbar navbar-expand-sm fixed-top navbar-dark">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo-header.png" alt="logo" style="width:150px;">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_Navbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapse_Navbar">
					<ul class="navbar-nav bounceInRight animated ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.html"><h4 class="text-white"><u>Accueil</u></h4></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="store.html"><h4>Magasin</h4></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="wait.html"><h4>File d'attente</h4></a>
						</li>
					</ul>
				</div>
			</nav>
			<center>
				<?= $content; ?>
			</center>
		</header>
		<div>
			<div>
				<div class="pt-5 pb-5" id="block-up">
					<h1 class="text-center text-white display-4">A quoi sert ce service ?</h1>
				</div>
				<div class="pt-5 pb-5" id="block-down">
					<h4 class="text-center text-white">Ce service a été créé pour limiter les riques de contamination dans les supermarchés lors de cette période de confinement.</h4>
				</div>
			</div>
			<div>
				<div class="pt-5 pb-5" id="block-up">
					<h1 class="text-center text-white display-4">Par qui a-t-il été créé ?</h1>
				</div>
				<div class="pt-5 pb-5" id="block-down">
					<h4 class="text-center text-white">Par six étudiants de touts âges passionnés par l'informatique.</h4>
				</div>
			</div>
		</div>
		<footer class="bg-dark text-light pt-5 pb-5 text-center">
			<div class="container">
				<div class="row">
					<h6 class="col-sm-4">Copyright © 2020 VirusLent® Tous droits réservés</h6>
					<h6 class="col-sm-4">Réalisé par Vincenzo, Quentin, Andre, Sebastien, Maude et Félix</h6>
					<h6 class="col-sm-4">Propulsé par Bootstrap et Azure</h6>
				</div>
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/aos.js">
		    AOS.init();
		</script>
		<script src="js/main.js"></script>
	</body>
</html>

<?php /*
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?= App::getInstance()->title; ?></title>

		<!-- Bootstrap core CSS -->
		<link href="<?= App::getInstance()->css; ?>" rel="stylesheet">

        <?php //$jsTextarea; // si on a besoin du js et css bbcode ?>
	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
                    <a class="navbar-brand btn btn-light" href="index.php"><?= App::getInstance()->nomProjet; ?></a>
				</div>

                <div class="d-flex justify-content-end">
                    <div class="btn-toolbar">
                        <a href="<?= $this->getUser('link'); ?>"><button type="button" class="btn btn-outline-primary mr-1"><?= $this->getUser('logButton'); ?></button></a>
                        <?php if($this->getUser('isConnected')): ?>
                            <a href="<?= $this->getUser('disconnectLink'); ?>"><button type="button" class="btn btn-outline-danger ml-1 mr-1">Se déconnecter</button></a>
                        <?php endif; ?>

                        <a href="?p=history.list"><button type="button" class="btn btn-outline-primary mr-1">Historique</button></a>

                        <form class="form-inline ml-1" method="post" action="index.php?p=search.result">
                            <input class="form-control mr-md-2" type="text" placeholder="Rechercher..." aria-label="Rechercher..." name="keywords">
                            <input type="submit" class="btn btn-outline-light text-dark" value="Cherche">
                        </form>
                    </div>

                </div>
			</div>
		</nav>

		<div class="container-fluid">

			<div class="starter-template" style="padding-top: 50px;">
				<?= $content; ?>

                <div class="d-flex justify-content-end">
                    <a href="?p=BBCode.list"><button type="button" class="btn btn-outline-primary mt-mt-3 mb-md-4">BBCode</button></a>
                </div>
			</div>

		</div>

	</body>
</html> */ ?>
