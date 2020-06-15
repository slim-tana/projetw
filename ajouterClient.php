<?PHP
include "../../entities/client.php";
include "../../core/clientC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse'])  and isset($_POST['mail'])  and isset($_POST['mot_de_passe'])  and isset($_POST['numero']))
{
    
  
     $cin=$_POST['cin'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $mail=$_POST['mail'];
    $mot_de_passe=$_POST['mot_de_passe'];
   
    $numero=$_POST['numero'];
 $clientvar = new client($cin,$nom,$prenom,$adresse,$mail,$mot_de_passe,$numero);
$clientCvar =new clientC();
$clientCvar->ajouterClient($clientvar);
header('Location: afficherClient.php');
	
}else{
	echo "	Verifier les champs";
}
//*/

?>

