<?
include 'assets/lib/library.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_POST['prenom'] && $_POST['nom'] && $_POST['email'] && $_POST['sujet'] && $_POST['message']) {
		$alerte = 1;
	} else
		$alerte = 2;
}
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
			<h2 class="text-center">Contact</h2><br><br>
			<?php if ($alerte == 2) {
				echo '<div class="alert alert-danger" role="alert">
					Veuillez remplir tous les champs.
				</div>';
			} else if ($alerte == 1) {
				echo '<div class="alert alert-success" role="alert">
					Votre message à bien été envoyé.
				</div>';
			}
			?>
			<form action="" method="POST" name="formulaire">
				<div class="row">
					<div class="col-6"><label for="prenom">Prénom :</label></div>
					<div class="col-6"><label for="nom">Nom :</label></div>
					<div class="col-6 pb-2"><input class="form-control" type="value" name="prenom" placeholder="Prénom" value="<?php echo $_POST['prenom']; ?>"></div>
					<div class="col-6 pb-2"><input class="form-control" type="value" name="nom" placeholder="Nom" value="<?php echo $_POST['nom']; ?>"></div>
					<div class="col-6"><label for="email">E-Mail :</label></div>
					<div class="col-6"><label for="sujet">Sujet :</label></div>
					<div class="col-6 pb-2"><input class="form-control" type="email" name="email" placeholder="E-Mail" value="<?php echo $_POST['email']; ?>"></div>
					<div class="col-6 pb-2"><input class="form-control" type="value" name="sujet" placeholder="Sujet" value="<?php echo $_POST['sujet']; ?>"></div>
					<div class="col-12"><label for="mesage">Message :</label></div>
					<div class="col-12 pb-3"><textarea class="form-control" name="message" rows="3" placeholder="Message"><?php echo $_POST['message']; ?></textarea></div>
					<div class="col-12"><button class="btn btn-primary" type="button">Envois du formulaire &<img class="img-send" src="assets/img/sent-mail.svg" alt="envois formulaire"></button></div>
				</div>
			</form>
			<?
			if ($alerte == 1) {
				echo '<br><br>';
				echo $_POST['prenom'].' - '.$_POST['nom'].'<br>';
				echo $_POST['email'].'<br>';
				echo $_POST['sujet'].'<br>';
				echo $_POST['message'].'<br>';
			}
			?>
		</div>
		<? include("footer.php"); ?>
	</body>
</html>
