<?php
$servername="localhost";
 $username="root";
 $password="";
 $DBNAME="paiements";
 $conn=mysqli_connect($servername,$username,$password,$DBNAME);
 // Check if form submitted
  
     // // Get form data
     $Massar = $_POST['Massar'] ;
     $nom = $_POST['nom'] ;
     $prenom = $_POST['prenom'] ;
     $class = $_POST['class'] ;
     $mta = $_POST['mta'];
    
 if (!$conn) {
  die("fghjj".mysqli_connect_error());
 }else{
     // Insert data into elev table
     $sql = "INSERT INTO eleve(Massar,nom,prenom,class,mta)
     VALUES('$Massar','$nom','$prenom','$class','$mta')";
    //  if(!filter_var($email,FILTER_VALIDATE_EMAILE)){
    //   //emaile valider
    //  }
    if (mysqli_query($conn, $sql)) {
      echo "";
    } else {
       echo mysqli_error($conn);
    }
  }
  ?>
