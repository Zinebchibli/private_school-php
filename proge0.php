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
	   
<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Historique 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="table.php">afficher eleve</a>
      <a href="history.php">afficher paiement</a>
      <a href="history1">afficher paiement par mois selectionne</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Paiement
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
      <a href="proge1.php">supprimer</a>
    </div>
  </div> 
</div>
<div class="container">
    <form action="Add_Student.php" method="POST">
        <p>Ajouter Eleve</p>
        <input type="text"id ="Massar" name="Massar" placeholder="massar"><br>
        <input type="texte"  id ="nom" name="nom" placeholder="nom"><br>
        <input type="texte" id ="prenom" name="prenom"  placeholder="prenom"><br>
        <input type="text"  id ="class" name="class" placeholder="Class"><br>
        <input type="text"  id ="mta" name="mta" placeholder="montant total annuel"><br>
        <input type="submit" value="VALIDER"><br>

    </form>
    
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
</div>  
</body>
</html>