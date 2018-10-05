<?
include 'assets/lib/library.php';
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/popper-1.14.1.min.js"></script>	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Le pressoir</title>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navigation.php"); ?>
			<h2 class="text-center">Nos offres</h2>
			<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="entree-tab" data-toggle="tab" href="#entree" role="tab" aria-controls="entree" aria-selected="true">La carte</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="plat-tab" data-toggle="tab" href="#plat" role="tab" aria-controls="plat" aria-selected="false">Les menus</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="entree" role="tabpanel" aria-labelledby="entree-tab">
					<div class="row pt-5">
						<div class="col-4">
							<img class="img-fluid rounded mx-auto d-block" src="assets/img/0072.jpg" alt="plat">
						</div>
						<div class="col-8">
							<h4>Mise en appetit...</h4>
							<ul class="list-group pb-5">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Foie gras... huître - bouillon fumé - légumes - haricots...
								<span class="badge badge-primary badge-pill">27 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Ravioles... homard - bolognaise - estragon - aubergines - soubise...
								<span class="badge badge-primary badge-pill">29 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Langoustine - foie gras ... artichaut - cinq vinaigres - champignons...
								<span class="badge badge-primary badge-pill">34 &euro;</span>
								</li>
							</ul>
							<h4>Pour continuer...</h4>
							<ul class="list-group pb-5">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Bar... légumes confits - jus d'épices douces - agrumes...
								<span class="badge badge-primary badge-pill">38 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Homard... curry - patate douce - lait de coco - coriandre - citron vert...
								<span class="badge badge-primary badge-pill">40 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Turbot... petit pois - algues - wasabi - soja...    
								<span class="badge badge-primary badge-pill">44 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Boeuf Black Angus... sucs de soja - foie gras - huître - jus fumé...
								<span class="badge badge-primary badge-pill">39 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Ris de veau - homard... petit pois - menthe - caramel d'oignon... 
								<span class="badge badge-primary badge-pill">45 &euro;</span>
								</li>
							</ul>
							<h4>Craquage, petit ou gros...</h4>
							<ul class="list-group pb-5">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Brie - basilic... petit pois - menthe - pain aux fruits...
								<span class="badge badge-primary badge-pill">7 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Fromages affinés de Kérouzine... garniture et condiments
								<span class="badge badge-primary badge-pill">12 &euro;</span>
								</li>
							</ul>
							<h4>Pur moment de gourmandise...</h4>
							<ul class="list-group">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Chocolat noir... CBS - passion - cacahuète - nuage de lait...
								<span class="badge badge-primary badge-pill">15 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Tomate... mozzarella - basilic - balsamique - olive noire - parmesan...
								<span class="badge badge-primary badge-pill">12 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Ananas victoria... vanille - épices - pain de Gêne - sorbet fromage blanc...
								<span class="badge badge-primary badge-pill">15 &euro;</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Mascarpone... vanille - framboises - litchi - macaron - glace rose...
								<span class="badge badge-primary badge-pill">14 &euro;</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="plat" role="tabpanel" aria-labelledby="plat-tab">
					<div class="pt-5">
						<h4 class="text-center pb-3">Suggestion &nbsp;&nbsp; 45 &euro;</h4>
						<div class="row pb-5 text-center">
							<div class="col-12 pb-2">
								Oeuf parfait …   asperge - saumon fumé - morille - estragon …
							</div>
							<div class="col-12 pb-2">
								***
							</div>
							<div class="col-12 pb-2">
								Daurade royale …   légumes confits - jus d’épices douces - agrumes …
							</div>
							<div class="col-12 pb-2">
								***
							</div>
							<div class="col-12 pb-4">
								Mascarpone …   vanille - framboises - litchi - glace pétales de rose - macaron …
							</div>
							<div class="col-12">
								Accord mets et vin 27 &euro;
							</div>
						</div>
						<h4 class="text-center pb-3">Saveur de saison &nbsp;&nbsp; 72 &euro;</h4>
						<div class="row pb-5 text-center">
							<div class="col-12 pb-2">
								Foie gras …   betterave - fromage bleu - framboise - citron vert …
							</div>
							<div class="col-12 pb-2">
								***
							</div>
							<div class="col-12 pb-2">
								Saumon d’Ecosse …   petit pois - menthe - wasabi - algues - sucs de soja ...
							</div>
							<div class="col-12 pb-2">
								***
							</div>
							<div class="col-12 pb-2">
								Canard …   maïs - piquillos – piment doux fumé …
							</div>
							<div class="col-12 pb-2">
								***
							</div>
							<div class="col-12 pb-4">
								Saumon d’Ecosse …   petit pois - menthe - wasabi - algues - sucs de soja ...
							</div>
							<div class="col-12 pb-4">
								accord mets et vins 36 &euro;
							</div>
							<div class="col-12 pb-4">
								Tout changement dans les menus engendrera un supplément et de l’attente.
							</div>
						</div>
						<h4 class="text-center pb-3">Carte blanche au Chef...</h4>
						<div class="row pb-5 text-center">
							<div class="col-12 pb">
								Un menu dégustation conçu spécialement pour vous hors des plats de la carte,
							</div>
							<div class="col-12 pb-4">
								composé essentiellement de produits nobles, pour découvrir l’esprit du Chef et de la maison …
							</div>
							<div class="col-12 pb-4">
								En trois ou quatre plats et dessert 89 &euro; ou 105 &euro;
							</div>
							<div class="col-12">
								Accord mets et vins 36 &euro; ou 45 &euro;
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<? include("footer.php"); ?>
	</body>
</html>
