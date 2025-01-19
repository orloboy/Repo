<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">                    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
	</style>

</head>
<body>
  
	<h4><a href="index.html">Przejdź do strony głównej</a></h4>
  
	<h1>Strona z listą użytkowników:</h1>
	 
	<h2>Tabela z użytkownikami</h2>
	
	<table>
		<tr>
			<th>Imię</th>
			<th>Nazwisko</th>
			<th>Numer</th>
		</tr>
		
		<?php
		error_reporting(0);
		$myfile = fopen("file.txt", "r") or die("Błąd!");   //odczyt z pliku
		
		$licznik=0;   //liczba linijek w pliku
		
		while(!feof($myfile)) //przepisywanie danych z pliku do tablicy
		{	
			$file_data = fgets($myfile);
			$zmienna = explode(" ",$file_data);
			$tablica[$licznik][0] = $zmienna[0];
			$tablica[$licznik][1] = $zmienna[1];
			$tablica[$licznik][2] = $zmienna[2];
				
			$licznik++;
		}
		fclose($myfile);
		
		$iterator=0;
		
		while($iterator<$licznik) //wyświetlanie tabeli danych na postawie danych z tablicy
		{
			echo "<tr>";
				
			echo "<td>";
			echo $tablica[$iterator][0];
			echo "</td>";
			echo "<td>";
			echo $tablica[$iterator][1];
			echo "</td>";
			echo "<td>";
			echo $tablica[$iterator][2];
			echo "</td>";
		
			echo "</tr>";
			
			$iterator++;
		}?>
	</table>
	
	
</body>
</html>