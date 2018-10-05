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
					<li class="page-item">
						<a class="page-link" href="photo.php">Previous</a>
					</li>
					<li class="page-item">
						<li class="page-item"><a class="page-link" href="photo.php">1</a></li>
					</li>
					<li class="page-item active">
						<span class="page-link">
							2
							<span class="sr-only">(current)</span>
						</span>
					</li>
					<li class="page-item disabled">
						<span class="page-link">Next</span>
					</li>
				</ul>
			</nav>
			<div class="row">
				<div class="col-md-5 offset-md-0">
					<div id="carouseloutside1Indicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouseloutside1Indicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouseloutside1Indicators" data-slide-to="1"></li>
							<li data-target="#carouseloutside1Indicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+1" alt="1ere image">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+2" alt="2eme image">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+3" alt="3eme image">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouseloutside1Indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouseloutside1Indicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-5 offset-md-1">
					<div id="carouseloutside2Indicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouseloutside2Indicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouseloutside2Indicators" data-slide-to="1"></li>
							<li data-target="#carouseloutside2Indicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+4" alt="4ere image">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+5" alt="5eme image">
							</div>
							<div class="carousel-item active">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+6" alt="6eme image">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouseloutside2Indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouseloutside2Indicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-5 offset-md-0">
					<div id="carouseloutside3Indicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouseloutside3Indicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouseloutside3Indicators" data-slide-to="1"></li>
							<li data-target="#carouseloutside3Indicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+7" alt="7ere image">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+8" alt="8eme image">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+9" alt="9eme image">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouseloutside3Indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouseloutside3Indicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-5 offset-md-1">
					<div id="carouseloutside4Indicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouseloutside4Indicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouseloutside4Indicators" data-slide-to="1"></li>
							<li data-target="#carouseloutside4Indicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+10" alt="10eme image">
							</div>
							<div class="carousel-item active">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+11" alt="11eme image">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="https://imgplaceholder.com/400x400?text=Outside+12" alt="12eme image">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouseloutside4Indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouseloutside4Indicators" role="button" data-slide="next">
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
