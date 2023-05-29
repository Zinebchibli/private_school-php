<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css2.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB_NAME = "paiements";
$conn = mysqli_connect($servername, $username, $password, $DB_NAME);

// Vérifie si le formulaire a été soumis
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['mois'])) {
    $mois = $_POST['mois'];
    // Le reste du code
} else {
    // Afficher un message d'erreur ou rediriger l'utilisateur
}
$stmt = $conn->prepare("SELECT * FROM eleve JOIN paie ON eleve.Massar=paie.ideleve WHERE mois=?");
$stmt->bind_param("s", $mois);
$stmt->execute();
$resultat = $stmt->get_result();

// $resultat=mysqli_query($conn ,$sql);
echo "<table>";
echo "<tr>";
echo "<th>Massar</th>";
echo "<th>Nom</th>";
echo "<th>Prénom</th>";
echo "<th>Classe</th>";
echo "<th>MTA</th>";
echo "</tr>";

foreach ($resultat as $ligne) {
    echo "<tr>";
    foreach ($ligne as $valeur) {
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

 $conn->close();

?>
