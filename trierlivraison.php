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
include "../core/livraisonC.php";
$livraisonCvar=new livraisonC();
$listelivraison=$livraisonCvar->trierlivraison();

//var_dump($listelivraison->fetchAll());
?>
<table border="1">
<tr>
<td>code</td>
<td>prix</td>
<td>num</td>
<td>id_livreur</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listelivraison as $row){
	?>
	<tr>
	<td><?PHP echo $row['code']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['num']; ?></td>
	<td><?PHP echo $row['id_livreur']; ?></td>
	<td><form method="POST" action="supprimerlivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['code']; ?>" name="code">
	</form>
	</td>
	<td><a href="modifierlivraison.php?cin=<?PHP echo $row['code']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
</div>
</body>


