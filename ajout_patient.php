<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="UTF-8">
	<title>ajout de patient</title>
<!-- http://css-tricks.com -->
<!-- traduit et adapté par outils-web.com -->
<!-- chargement des feuilles de style -->
<link rel='stylesheet' type='text/css' href='css/style.css' />
<link rel='stylesheet' type='text/css' href='css/form.css' />
<!-- chargement des scripts -->	
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
<script type='text/javascript' src='js/dynamicpage.js'></script>

</head>

<body>
	<div id="page-wrap" >
        <header>
		  <h1>CABINET MEDICAL</h1>
		  
		</header>
	</div>	
		<section id="main-content">
		<ul id="menu">
    <li>
        <a href="accueil.html" class="actif">Accueil</a>
    </li>
    <li>
        <a href="ajout_patient.php"><img src="rap.png">Nouveau </a>
    </li>
    <li>
        <a href="salle_attente.php">Salle d'attente</a>
    </li>
	<li>
        <a href="recherche_patient.php">Consultation </a>
		
    </li>
	<li>
        <a href="recherche_patient2.php">Alimenter salle attente </a>
    </li>
	<li>
        <a href="liste_patient.php">Liste patients</a>
    </li>
</ul>
<?php
	if(isset($_POST['ok']))
{
	
$db=mysqli_connect("localhost","root","","cabinetmed") or die ("errcion");
$no=strtoupper($_POST['nom']);
$pr=ucfirst($_POST['prenom']);
$te=$_POST['tel'];
$ag=$_POST['age'];
$un=$_POST['unit'];
$se=$_POST['sexe'];
$vi=$_POST['ville'];
$sf=$_POST['sitfam'];
$fn=$_POST['fonction'];
$ad=$_POST['adresse'];
$rq=$_POST['remarque'];
$dt=date("Y-m-d H:i:s");
@mysqli_query($db,"insert into patient values(NULL,'$no','$pr',$ag,'$un','$se','$sf','$fn','$te','$ad','$vi',0,'$dt','$dt')") or die("erreur ajout");
echo "patient ajouté avec succès";
}
?>
	
		<div class="form-style-2">
<div class="ligne"></div>
<form action="ajout_patient.php" method="post">
<center><table  width=1024  > <tr><td colspan=2 align=center><h2> Saisir les informations du nouveau patient</td></tr><tr>
<td><label for="nom"><span>Nom <span class="required">*</span></span><input type="text" class="input-field" name="nom" value="" /></label></td>
<td><label for="prenom"><span>Prénom <span class="required">*</span></span><input type="text" class="input-field" name="prenom" value="" /></label></td></tr>
<tr>
<td><label for="tel"><span>Tel <span class="required">*</span></span><input type="text" class="input-field" name="tel" value="" /></label></td>
<td><label for="ville"><span>Ville <span class="required">*</span></span><input type="text" class="input-field" name="ville" value="" /></label></td></tr>

<tr><td>
<label for="age"><span>Age </span><input type="number" class="input-field" name="age" value="" />
</span><select name="unit" class="select-field">
<option value="Ans">Ans</option>
<option value="Mois">Mois</option>
</select>
</label></td>
<td><span class="element"> Sexe : </span>
<span>
       <input type="radio" name ='sexe' id="masculin" value="M" class="element" checked>
       <label for="masculin">Masculin</label>

 
 
      <input type="radio"  name ='sexe' id="feminin" value="F" class="element">
      <label for="feminin">Feminin</label>
	   </span>
 </td></tr>
<tr><td>
<label for="sitfam"><span>Situation familiale</span><select name="sitfam" class="select-field">
<option value="Celibataire">CELIBATAIRE</option>
<option value="Marie">MARIE</option>
<option value="Divoce">DIVORCE</option>
<option value="Veuf">VEUF</option>
</select></label>
</td>
<td>
<label for="fonction"><span>Fonction</span><select name="fonction" class="select-field">
<option value="ens">ENSEIGNANT</option>
<option value="fonc">FONCTIONNAIRE</option>
<option value="ouv">OUVRIE</option>
<option value="cad">CADRE</option>
<option value="flib">FONCTION LIBERALE</option>
<option value="ret">RETRAITE</option>
<option value="san">SANS</option>
<option value="aut">AUTRE</option>
</select></label></td></tr>
<tr><td>
<label for="adresse"><span>Adresse </span><textarea name="adresse" class="textarea-field"></textarea></label></td>
<td><label for="remarque"><span>Remarque </span><textarea name="remarque" class="textarea-field"></textarea></label></td></tr>

<tr><td colspan=2 align=center><label><span>&nbsp;</span><input type="submit" value="Enregistrer" name="ok" class="form-style-2" /></label></td></tr></table>

</form>
</div>
		
<div class="ligne"></div>
	<h3><center>Dr Abdelouahad EL HASSNAOUI  Medecine générale des hommes, des femmes et des enfants</h3>
	
	<footer></footer>

</body>

</html>