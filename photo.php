<?php
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
			<h2>Photos</h2>
			<nav>
				<ul class="pagination">
					<li class="page-item disabled">
						<span class="page-link">Previous</span>
					</li>
					<li class="page-item active">
						<span class="page-link">
							1
							<span class="sr-only">(current)</span>
						</span>
					</li>
					<li class="page-item"><a class="page-link" href="photo2.php">2</a></li>
					<li class="page-item">
						<a class="page-link" href="photo2.php">Next</a>
					</li>
				</ul>
			</nav>
			<div class="row">
				<div class="col-md-5 offset-md-0">
					<div id="carouselInside1Indicators" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner d-flex align-items-center">
							<div class="carousel-item active">
								<img class="d-block w-100" src="assets/img/0003.jpg" alt="photo patron">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/img/0001.jpg" alt="photo patronne">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselInside1Indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselInside1Indicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-5 offset-md-1">
					<div id="carouselInside2Indicators" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="img-fluid" src="assets/img/0022.jpg" alt="4ere image">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="assets/img/0078.jpg" alt="5eme image">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselInside2Indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselInside2Indicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-5 offset-md-0">
					<div id="carouselInside3Indicators" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="assets/img/0014.jpg" alt="7ere image">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/img/0074.jpg" alt="8eme image">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselInside3Indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselInside3Indicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-5 offset-md-1">
					<div id="carouselInside4Indicators" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item">
								<img class="d-block w-100" src="assets/img/0070.jpg" alt="10eme image">
							</div>
							<div class="carousel-item active">
								<img class="d-block w-100" src="assets/img/0064.jpg" alt="11eme image">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselInside4Indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselInside4Indicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<? include("footer.php"); ?>
	</body>
</html>
