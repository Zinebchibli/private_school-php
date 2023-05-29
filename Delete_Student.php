
<?php
 $servername="localhost";
 $username="root";
 $password="";
 $DB_NAME="paiements";
 $conn=mysqli_connect($servername,$username,$password,$DB_NAME);
 
     $Massar = $_POST['Massar'] ;
     if (!$conn) {
      die("fghjj".mysqli_connect_error());
     }else{
     // Insert data into elev table
     $sql = "DELETE from eleve  WHERE Massar='$Massar'";
     if (mysqli_query($conn, $sql)) {
      echo "";
    } else {
       echo mysqli_error($conn);
    }
  }
  ?>