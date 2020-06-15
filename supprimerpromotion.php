<?PHP
include "../../core/promotionc.php";
$promotionc=new promotionc();
if (isset($_GET["id_promo"])){
	$promotionc->supprimerpromotion($_GET["id_promo"]);
	header("location:affichepromotion.php");
}

?>


