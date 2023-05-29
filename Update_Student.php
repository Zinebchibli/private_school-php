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
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // // Get form data
     $Massar = $_POST['Massar'];
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $class = $_POST['class'];
     $mta = $_POST['mta'];
     
     // Insert data into elev table
     $sql = "UPDATE eleve  SET nom='$nom', prenom='$prenom', class='$class',mta='$mta' WHERE Massar='$Massar'";
 
    if ($conn->query($sql)) {
      echo "";
    } else {
       echo $sql ."<br>" . $conn->error;
    }
 
}
$conn->close();
  ?>