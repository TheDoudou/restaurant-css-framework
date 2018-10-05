<?php
require_once "assets/scssphp/scss.inc.php";
use Leafo\ScssPhp\Compiler;

$md5_scss = md5_file("assets/sass/main.scss");
$md5_data = file_get_contents("assets/data/data_md5", FILE_USE_INCLUDE_PATH);

if ($md5_scss != $md5_data) {
	$scss = new Compiler();
	$scss->setImportPaths('assets/sass/');
	$css = $scss->compile('@import "main.scss";');

	$file_css = fopen("assets/css/main.css", "w");
	$file_data = fopen("assets/data/data_md5", "w");
	fwrite($file_css, $css);
	fwrite($file_data, $md5_scss);
	
	print_r('css compile');
}


$data_news = [
	[1, 'Menu Halloween', '04/10/2018', 'Menu d\'halloween pour toute la famille.', 'Venez pour halloween vous trouverez un menu spécial pour cette occasion spécial. Si vous avez des questions vous pouvez nous joindre directement.'],
	[2, 'Spécial rentrée', '01/09/2018', 'Menu de la rentrée pour toute la famille.', 'Donec convallis libero quis purus facilisis tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus est ac elit molestie ullamcorper. Aliquam metus sapien, rhoncus ut ante eu, ultrices fermentum nisi. In ornare mi id tortor sollicitudin, eu euismod magna semper. Nam condimentum eros rhoncus mattis placerat. Vestibulum efficitur, urna quis finibus viverra, augue nisl viverra metus, et elementum mi nisi quis velit. Aenean mattis pharetra tortor, vel elementum augue pellentesque eu. Proin cursus rhoncus nulla, et lacinia elit venenatis ullamcorper.'],
	[3, 'Fermeture annuel', '10/08/2018', 'Fermeture annuel d\'une semaine.', 'Curabitur ultricies massa nisi, quis dapibus mi scelerisque nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras nibh felis, tristique nec egestas vestibulum, tempus nec quam. Nullam non suscipit nibh, at pulvinar nunc. Curabitur ullamcorper leo in mi ultricies, at suscipit dui dignissim. Sed at pharetra ante, eu consequat dui. Fusce dapibus nisi a diam condimentum, in vulputate quam venenatis. Sed feugiat nunc eu lorem mattis, quis molestie massa finibus. Pellentesque pellentesque nulla convallis interdum sodales. Praesent rutrum, mi at interdum rhoncus, dui odio convallis ipsum, at egestas tortor elit gravida elit. Vivamus laoreet malesuada pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla non viverra erat. Mauris velit eros, scelerisque eu enim sit amet, elementum convallis libero. Nam mattis purus tellus, vitae elementum lectus sollicitudin vitae.'],
	[4, 'Nouvel an', '31/12/2017', 'Venez faire le nouvel an avec nous.', 'Praesent at porttitor augue. Vestibulum feugiat massa in ligula mollis, eu dapibus nisi porttitor. Donec euismod sit amet lorem eget porttitor. Vivamus lorem dolor, venenatis a auctor nec, maximus ut arcu. Ut molestie nunc vel dui gravida efficitur. Sed gravida augue et felis feugiat eleifend. Phasellus rutrum libero urna, euismod euismod erat cursus at. Etiam quis nunc id sapien sagittis condimentum. Nam tincidunt rhoncus vulputate.'],
	[5, 'Ouverture', '01/12/2017', 'Menu d\'halloween pour toute la famille', 'Mauris non magna lorem. Nullam tempus, metus non dignissim condimentum, eros dolor ultricies neque, in fringilla ex purus et dui. Morbi elit tellus, mattis eget tincidunt sit amet, sagittis id lacus. Phasellus a facilisis lorem, eu eleifend nisl. Vestibulum posuere pharetra lacus, ultricies eleifend erat accumsan accumsan. Quisque placerat, libero sit amet ullamcorper interdum, risus dolor finibus metus, at ornare metus metus sit amet diam. Pellentesque id dui non massa interdum cursus. Curabitur ut eros dui. Etiam eu lorem velit. Cras a congue est. Sed molestie nulla a felis facilisis, nec cursus felis iaculis. Donec tincidunt metus nec tellus auctor, ut lacinia nunc pulvinar. Pellentesque finibus leo nec suscipit mollis. Donec commodo in sapien vitae tempus.'],
];
?>