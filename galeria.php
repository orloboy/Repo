<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Galeria.php</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/lightbox.min.css" rel="stylesheet">
	<script src="js/lightbox-plus-jquery.min.js"></script>

</head>
<body>

	<h4><a href="index.html">Przejdź do strony głównej</a></h4>

	<div class="image-set container">
	<h2>Galeria zdjęć:</h2>
	
	<h5>Kliknij w pierwsze zdjęcie, aby przejść do przeglądania grafik!!!</h5>
	
	<?php

	$dirname = "images/";   //otwieranie folderu z obrazami
	 
	$images = glob("$dirname*.{png,jpeg,jpg,gif}", GLOB_BRACE); //pobieranie nazw plików
	

	foreach($images as $image) {  //pętla wyświetlająca obrazy
		?>
		
        <a class="example-image-link col-xs-12 col-sm-6 col-md-4" href="<?php echo $image; ?>" data-lightbox="example-set" data-title=""> 
		<img class="example-image img-responsive" src="<?php echo $image; ?>" />  
		</a>
		<?php
	}
	?>  
	</div>
</body>

</html>