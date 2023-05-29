<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="css2.css">
</head>
<body>
	   
<!-- <div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Historique 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="table.php">affichier eleve</a>
      <a href="history1">affichier les eleves que paie</a>
      <a href="history.php">affichier payment</a>
      
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Payment
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="proge3.php">ajouter</a>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Eleve
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="proge0.php">ajouter</a>
      <a href="proge2.php">modifier</a>
      <a href="proge1.php">supprime</a>
    </div>
  </div>  -->
</div>
	<?php
		$servername="localhost";
		$username="root";
		$password="";
		$DB_NAME="paiements";
		$conn=mysqli_connect($servername,$username,$password,$DB_NAME);
		// Check if connection established successfully
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$resultat=mysqli_query($conn, "SELECT DISTINCT eleve.Massar, eleve.nom, eleve.prenom, eleve.class,eleve.mta FROM eleve");
		echo "<table>";
		echo "<tr>";
		echo "<th>Massar</th>";
		echo "<th>nom</th>";
		echo "<th>prenom</th>";
		echo "<th>class</th>";
		echo "<th>mta</th>";
		echo "</tr>";
		if (mysqli_num_rows($resultat) > 0) {
			while ($ligne=mysqli_fetch_array($resultat)) {
				echo "<tr>";
				echo "<td>".$ligne['Massar']."</td>";
				echo "<td>".$ligne['nom']."</td>";
				echo "<td>".$ligne['prenom']."</td>";
				echo "<td>".$ligne['class']."</td>";
				echo "<td>".$ligne['mta']."</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='6'>Aucun enregistrement trouvé</td></tr>";
		}
		echo "</table>";
		$conn->close();
	?>
</body>
</html>
