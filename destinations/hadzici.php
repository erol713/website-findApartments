<?php  



$location = 'Hadzici';



$link = mysqli_connect('localhost', 'root', '', 'findapartments');


	if (mysqli_connect_error()) {

        echo'Error';
    }

$sql= "SELECT * 
	        FROM data 
	        WHERE 
	        lokacija = '" . $location . "'

	        ";

$result = $link->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>results</title>
	<link rel="stylesheet" type="text/css" href="../rezultati.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

	<div id="slika">
		<a class="logo-a" href="../index.php"><div id="logo">
		<i id="ap1"; class=" far fa-building fa-4x" style="color:#fff;"></i>
		<i id="ap2"; class="fas fa-building fa-4x" style="color:#fff;"></i>
		<i id="ap3"; class="far fa-building fa-4x" style="color:#fff;"></i>
		<div id="cont"  class="animated rotateInUpRight ">
			<span id="krug"></span>
		</div>
		<p id="tekst" class="animated fadeInRight delay-1s">Apartments Sarajevo</p>
		

	</div></a>

	<div id="data" style="margin-left: 25%; margin-top: 3%;" >
	<?php 
		while($row  = $result -> fetch_assoc()){

			$url = $row['url'];

			echo '<p>Opis: ' . $row['naziv'] . '<br>';	
			echo 'Kvadrata: ' . $row['Kvadrata'] . '<br>';
			echo 'Adresa: ' . $row['Adresa'] . '<br>';
			echo 'Lokacija: ' . $row['lokacija'] . '<br>';			
			echo 'Broj soba: ' . $row['Broj soba'] . '<br>';
			echo 'Stanje: ' . $row['Namjesten'] . '<br>';	
			echo 'Cijena: ' . $row['cijena'] . '<br>';			
			echo '<a href= ' .  $url  . '>Link to the apartment</a></p><br>';

			echo '<p style="border-bottom: 1px solid #F76201;"></p>';



	
}
	 ?>
	 </div>
	</div>
</body>
</html>