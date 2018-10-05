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
		<!-- -->
	<?
	if ($_GET['lol'] == 1) {
		echo '
		<style>
			body {
				transform: rotate(45deg) translateX(420px) translateY(200px);
			}
		</style>
		
		<script type="text/javascript">// <![CDATA[  
			var txt=" *** Le pressoir";  
			var espera=100;  
			var refresco=null;  
			function rotulo_title() {  
					document.title=txt;  
					txt=txt.substring(1,txt.length)+txt.charAt(0);  
					refresco=setTimeout("rotulo_title()",espera);}  
			rotulo_title();  
		// ]]></script>';
	} else if ($_GET['lol'] == 2) {
		$var1 = rand(0,180)-90;
		$var2 = rand(0,180)-90;
		$var3 = rand(0,180)-90;
		$var4 = rand(0,180)-90;
		$var5 = rand(0,180)-90;
		$var6 = rand(0,180)-90;
		echo '
		<style>
			.testtest1 {
				transform: rotate('.$var1.'deg);
			}
			.testtest2 {
				transform: rotate('.$var2.'deg);
			}
			.testtest3 {
				transform: rotate('.$var3.'deg);
			}
			.testtest4 {
				transform: rotate('.$var4.'deg);
			}
			.testtest5 {
				transform: rotate('.$var5.'deg);
			}
			.testtest6 {
				transform: rotate('.$var6.'deg);
			}
		</style>
		
		<script type="text/javascript">// <![CDATA[  
			var txt=" *** Snack Bar Chez Doudou";  
			var espera=100;  
			var refresco=null;  
			function rotulo_title() {  
					document.title=txt;  
					txt=txt.substring(1,txt.length)+txt.charAt(0);  
					refresco=setTimeout("rotulo_title()",espera);}  
			rotulo_title();  
		// ]]></script>';
	}
	?>
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
								<img class="w-100" src="assets/img/0074.jpg" alt="1er plat">
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
					<p class="testtest2"><b>News :</b></p>
					<div class="list-group">
						<? //$data_news dispo dans assets/lib/library.php
						foreach ($data_news as list($id, $title, $date, $desc)) { ?>
						<a href="news.php?news=<? echo $id; ?>" class="list-group-item list-group-item-action testtest<? echo $id; ?>"><div class="d-flex justify-content-between"><strong><? echo $title; ?></strong><div><? echo $date; ?></div></div><? echo $desc; ?></a>
						<?  } ?>
					</div>
				</div>
			</div>
		</div>
		<? include("footer.php"); ?>
	</body>
</html>
