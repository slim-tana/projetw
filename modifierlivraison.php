<HTML>
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
include"../entities/livraison.php" ;
include"../core/livraisonC.php";
if(isset($_GET['code']))
{
   
$livraisonCvar= new livraisonC();
$result=$livraisonCvar->recupererlivraison($_GET['code']);
foreach($result as $row)
{
$code=$row['code'];
$prix=$row['prix'];
$num=$row['num'];
$id_livreur=$row['id_livreur'];
?>
<form method="POST">
<table>
<caption>Modifier livraison</caption>
<tr>
<td>code</td>
<td><input type="number" name="code" required></td>
</tr>
<tr>
<td>prix</td>
<td><input type="number" name="prix" required></td>
</tr>
<tr>
<td>num</td>
<td><input type="number" name="num" required></td>
</tr>
<tr>
<td>id_livraison</td>
<td><input type="number" name="id_livreur" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="code_ini" value="<?PHP echo $_GET['code'];?>"></td>
</tr>
</table>
</form>
<?PHP 
}
}
else {
	echo "verifier vos champs";
}
if(isset($_POST['modifier']))
{
$livraisonvar=new livraison($_POST['code'],$_POST['prix'],$_POST['num'],$_POST['id_livreur']);
$livraisonCvar->modifierlivraison($livraisonvar,$_POST['code_ini']);
echo $_POST['code_ini'];
header('Location: afficherlivraison.php');
}
?>
</div>
</body>
</HTML>

