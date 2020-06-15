<?php
include "../../core/promotionc.php";
include "../../entities/promotion.php";
$promotionc=new promotionc();

//if (!isset($_GET['modifier'])){

    $promotion=new promotion($_POST['id_promo'],$_POST['pourcentage'],$_POST['delai'],$_POST['fk_id_produit']);
    $promotionc=new promotionc();
    $promotionc->modifierpromotion($_POST['id_promo'],$_POST['pourcentage'],$_POST['delai'],$_POST['fk_id_produit']);

    header('Location: affichepromotion.php');


?>
