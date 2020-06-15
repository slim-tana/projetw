<HTML>
<head>
</head>
<body>
<?PHP

include "../../entities/client.php";
include '../../core/clientC.php';
if (isset($_GET['cin'])){
	$clientC=new ClientC();
    $result=$clientC->recupererClient($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$adresse=$row['adresse'];
		$mail=$row['mail'];
		$mot_de_passe=$row['mot_de_passe'];
		$numero=$row['numero'];
?>

<form method="POST">
<table>
<caption>Modifier Client</caption>
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
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>Mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail?>"></td>
</tr>
<tr>
<td>Mot_de_passe</td>
<td><input type="text" name="mot_de_passe" value="<?PHP echo $mot_de_passe ?>"></td>
</tr>
<tr>
<td>Numero</td>
<td><input type="number" name="numero" value="<?PHP echo $numero?>"></td>
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
	$client=new client($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['mail'],$_POST['mot_de_passe'],$_POST['numero']);
	$clientC->modifierClient($client,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherClient.php');
}
?>
</body>
</HTMl>