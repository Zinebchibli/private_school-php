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
</body>
 	<h1></h1> 
<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Historique 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="table.php">afficher eleve</a>
      <a href="history.php">afficher paiement</a>
      <a href="history1">affichier paiement par mois selectionne</a>
      
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
        <form  method="post" action="Delete_Student.php">
        <p>Supprimer Eleve:</p>
          <input type="text"  id ="Massar" name="Massar"  placeholder="Massar" required autofocus/><br>
          <input type="submit" value="DELETE">
        </form>
        <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
      </div>
       
    
</body>
</html>