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
		<script src="assets/js/main.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Le pressoir</title>
	</head>
	<body>
		<div class="container-fluid">
			<? include("navigation.php"); ?>
			<div class="jumbotron text-center">
				<img class="img-fluid testtest6" src="assets/img/logo_full.png" alt="Banniere">
			</div>
			<div class="row">
				<div class="col-md-6">
					<div id="carouselPromoIndicators" class="carousel slide testtest4" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselPromoIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselPromoIndicators" data-slide-to="1"></li>
							<li data-target="#carouselPromoIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="assets/img/0074.jpg" alt="1er plat">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/img/0114.jpg" alt="2eme plat">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/img/0014.jpg" alt="3eme plat">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselPromoIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselPromoIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="list-group">
						<div class="list-group-item list-group-item-action"><div class="d-flex justify-content-between"><strong>News : <? echo $data_news[$_GET['news']-1][1]; ?></strong><div><? echo $data_news[$_GET['news']-1][2]; ?></div></div><? echo $data_news[$_GET['news']-1][4]; ?></div>
					</div>
				</div>
			</div>
        </div>
        <? include("footer.php"); ?>
	</body>
</html>
