<HTML>
<head>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Contactez_nous</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="css/style.css">



</head>
<body>
<div class="site-section1">	
<?PHP
include "../entities/employe.php";
include "../core/employeC.php";
if (isset($_GET['cin'])){
	$employeC=new EmployeC();
    $result=$employeC->recupererEmploye($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$nbH=$row['nbHeures'];
		$tarifH=$row['tarifHoraire'];
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="number" name="nbH" value="<?PHP echo $nbH ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="number" name="tarifH" value="<?PHP echo $tarifH ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$employe=new employe($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tarifH'],$_POST['nbH']);
	$employeC->modifierEmploye($employe,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherEmploye.php');
}
?>
</body>
</HTMl>
</div>
</body>