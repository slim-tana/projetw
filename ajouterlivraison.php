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
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['code']) and isset($_POST['prix']) and isset($_POST['num']) and isset($_POST['id_livreur']))
{
    $code=$_POST['code'];
    $prix=$_POST['prix'];
    $num=$_POST['num'];
    $id_livreur=$_POST['id_livreur'];
    $livraisonvar = new livraison($code,$prix,$num,$id_livreur);
    $livraisonCvar= new livraisonC() ;
    $livraisonCvar->ajouterlivraison($livraisonvar);
    header('Location: afficherlivraison.php');
}
    else{
        echo "verifier les champs";
    }

?>
</div>
</body>