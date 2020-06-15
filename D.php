<?php

include "../../core/promotionc.php";

$promotion = new promotionc();
$listpromotion = $promotion->affiche4();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header trans_300">

        <!-- Top Navigation -->

        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="top_nav_right">
                            <ul class="top_nav_menu">

                                <!-- Currency / Language / My Account -->

                                <li class="currency">
                                    <a href="#">
                                        usd
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="currency_selection">
                                        <li><a href="#">cad</a></li>
                                        <li><a href="#">aud</a></li>
                                        <li><a href="#">eur</a></li>
                                        <li><a href="#">dinars</a></li>
                                    </ul>
                                </li>
                                <li class="language">
                                    <a href="#">
                                        English
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="language_selection">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Italian</a></li>
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </li>
                                <li class="account">
                                    <a href="#">
                                        Mon Compte
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="account_selection">
                                        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Se Connecter</a></li>
                                        <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>CrÃ©er un compte</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <div class="main_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <div class="logo_container">
                            <a href="#">JI-LINE</a>
                        </div>
                        <nav class="navbar">
                            <ul class="navbar_menu">
                                <li><a href="index.html">home</a></li>
                                <li><a href="#">collections</a></li>
                                <li><a href="#">produits</a></li>
                                <li><a href="#">point de vente</a></li>
                                <li><a href="#">notre histoire</a></li>
                                <li><a href="#">actualitÃ©s</a></li>
                                <li><a href="contact.php">contact</a></li>
                            </ul>
                            <ul class="navbar_user">
                                <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                <li class="checkout">
                                    <a href="#">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span id="checkout_items" class="checkout_items">2</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="hamburger_container">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="fs_menu_overlay"></div>

    <!-- Hamburger Menu -->

    <div class="hamburger_menu">
        <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="hamburger_menu_content text-right">
            <ul class="menu_top_nav">
                <li class="menu_item has-children">
                    <a href="#">
                        usd
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#">cad</a></li>
                        <li><a href="#">aud</a></li>
                        <li><a href="#">eur</a></li>
                        <li><a href="#">dinar</a></li>
                    </ul>
                </li>
                <li class="menu_item has-children">
                    <a href="#">
                        English
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#">FR</a></li>
                        <li><a href="#">IT</a></li>
                        <li><a href="#">GR</a></li>
                        <li><a href="#">SP</a></li>
                    </ul>
                </li>
                <li class="menu_item has-children">
                    <a href="#">
                        Mon Compte
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Se connecter</a></li>

                        <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>CrÃ©er un compte</a></li>
                        <li><a href="compteClient.php">CrÃ©er compte</a></li>
                    </ul>
                </li>
                <li class="menu_item"><a href="#">home</a></li>
                <li class="menu_item"><a href="#">collections</a></li>
                <li class="menu_item"><a href="#">produits</a></li>
                <li class="menu_item"><a href="#">point de vente</a></li>
                <li class="menu_item"><a href="#">notre histoire</a></li>
                <li class="menu_item"><a href="#">actualitÃ©s</a></li>
                <li class="menu_item"><a href="#">contact</a></li>
            </ul>
        </div>
    </div>

    <div class="container contact_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Inscrivez-vous</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Map Container -->
 <div class="main-content">

            
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
   
    <div class="dropdown-divider"></div>
    
  </div>
</div>
       </head>
   <tr>
                                              <th class="text-right">id_promo</th>
                                                <th class="text-right">pourcentage</th>
                                                <th class="text-right">delai</th>
                                                  <th class="text-right">fk_id_produit</th>
                                                 
                                                

                                            </tr>
                                        </thead>
                                        <?PHP
                                        foreach($listpromotion as $row){
                                            ?>
                                            <tr>
                                                <td><?PHP echo $row['id_promo']; ?></td>
                                                <td><?PHP echo $row['pourcentage']; ?></td>
                                                <td><?PHP echo $row['delai']; ?></td>
                                                <td><?PHP echo $row['fk_id_produit']; ?></td>
                            </table>
</form>

        <!-- Contact Us -->

       

</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/contact_custom.js"></script>
</body>
    <?PHP
}

?>
</html>

</HTMl>


