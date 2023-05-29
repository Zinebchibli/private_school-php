<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css4">
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
  </div> 
</div> -->
<div class="container">
	<form method="POST" action="paie.php">
		<p>Mois :</p>
		<select name="moiss" id="moiss">
			<option value="01">Janvier</option>
			<option value="02">Février</option>
			<option value="03">Mars</option>
			<option value="04">Avril</option>
			<option value="05">Mai</option>
			<option value="06">Juin</option>
			<option value="07">Juillet</option>
			<option value="08">Août</option>
			<option value="09">Septembre</option>
			<option value="10">Octobre</option>
			<option value="11">Novembre</option>
			<option value="12">Décembre</option>
		</select><br>
		<input type="submit" value="VALIDER">
	</form>
</div>
</body> 
</html>
