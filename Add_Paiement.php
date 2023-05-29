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
    //Insert data into users table
    
    $ideleve = $_POST["ideleve"];
    $mois = $_POST["mois"];
    $mtp = $_POST["mtp"];
    $datep = $_POST["datep"];
    
    $sql = "INSERT INTO paie (ideleve, mois, mtp, datep)
    VALUES ('$ideleve', '$mois', '$mtp', '$datep')";
    
    if ($conn->query($sql) === TRUE) {
    echo "";
    } else {
    echo $sql ."<br>" . $conn->error;
    }
} 
$conn->close();
  ?>
