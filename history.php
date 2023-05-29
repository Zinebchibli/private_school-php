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
      <a href="History1">affichier les eleves que paie</a>
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
  </div> 
</div> -->
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $DB_NAME="paiements";
 $conn=mysqli_connect($servername,$username,$password,$DB_NAME);
 // Check if form submitted
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $resultat=mysqli_query($conn ,"SELECT id, ideleve, mois, mtp, datep FROM  paie ");
echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>ideleve</th>";
echo "<th>mois</th>";
echo "<th>mtp</th>";
echo "<th>datep</th>";
echo "</tr>";

foreach ($resultat as $ligne) {
      echo "<tr>";
  foreach ($ligne as $valeur) {
      echo "<td>$valeur</td>";
  }
  echo "</tr>";
}

echo "</table>";

 $conn->close();
  ?>
</body> 
</html>