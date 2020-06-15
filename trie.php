<?PHP 
include "../../core/reclamationC.php";
$reclamationCvar =new reclamationC();
$listeReclamations=$reclamationCvar->trie();
?>

<!DOCTYPE html>
<html lang="en">

<head>
 	
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
	<title>JI-LINE - Reclamation</title>
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">


    <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block" >
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.jpg" alt="JI-Line" />
                </a>
            </div>
						</br>
			</br>
			</br>
            <div class="menu-sidebar__content js-scrollbar1" >
                <nav class="navbar-sidebar" >
                    <ul class="list-unstyled navbar__list" >

					   <li><a href="index.html"> <i class="far fa-check-square"></i>  Home </a></li>
						
						<li>
						<li><a href="admin_v.php"><i class="fas fa-desktop" class="icon-interface-windows"></i> Admin </a></li>
						</li>

                        <li>
                          <a class="js-arrow" href="#">
                              <i class="fas fa-tachometer-alt"></i>Produit</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="afficherCategorie.php"> Liste des categories</a>
                                    </li>
                                    <li>
                                        <a href="afficherproduit.php">Liste des Produits</a>
                                    </li>
                                    <li>
                                            <a href="statistique.php">Statistique des Produits</a>
                                        </li>
                                  </ul>
                        </li>
                        <li>
                            <a href="ajoutpromotion.php">
                                <i class="far fa-check-square"></i>gestion promotion</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>gestion commande</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="ajoutCommande.php">commande</a>
                                </li>
                                <li>
                                    <a href="favoris.php">favoris</a>
                                </li>
                                <li>
                                    <a href="panier.php">panier</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub" >
                            <a class="js-arrow" href="#" >
							<i class="fas fa-desktop" ></i>Gestion apres vente</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="active">
                                    <a href="afficherReclamation.php">Listes des Reclamations</a>
                                </li>
                                <li>
                                    <a href="afficherRdv.php">Listes des Rendez vous</a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/jihen.jpg" alt="Jihen Gabsi" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Jihen Gabsi</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/jihen.jpg" alt="Jihen Gabsi" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Jihen Gabsi</a>
                                                    </h5>
                                                    <span class="email">jihengabsi@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->
<!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Reclamation</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            
            </ul>
			<form class="form-inline" method="POST" action="recherchertype.php">
			
    <input class="form-control mr-sm-2" type="text" placeholder="Search Type" aria-label="Search" name="id">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
	
	</form>
				
	<p></p>
	<div class="btn-group" style="width: 11%;">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Trie
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="trie.php">Date</a>
	<a class="dropdown-item" href="trie1.php">ref</a>

	
    <div class="dropdown-divider"></div>
    
  </div>
</div>
  
			
            <div class="card bg-light mb-3" style="width: 100%;">
		<!-- Example single danger button -->

     <a href="ajouterReclamation.php">Reclamation</a>
  <div class="card-body">
 
   <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col" class="bg-primary">Id</th>
      <th scope="col" class="bg-primary">NOM</th>
      <th scope="col" class="bg-primary">PRENOM</th>
      <th scope="col" class="bg-primary">TYPE</th>
	  
	  <th scope="col" class="bg-primary">REF</th>
	  <th scope="col" class="bg-primary">MESSAGE</th>
	  <th scope="col" class="bg-primary">DATE</th>
	  <th scope="col" class="bg-primary">SUPPRIMER</th>
	  <th scope="col" class="bg-primary">MODIFIER</th>
    </tr>
  </thead>
  <tbody>



										<?PHP
										foreach($listeReclamations as $row){
										?>
										<tr>
										<td><?PHP echo $row['id']; ?></td>
										<td><?PHP echo $row['nom']; ?></td>
										<td><?PHP echo $row['prenom']; ?></td>
										<td><?PHP echo $row['type_rec']; ?></td>	
										<td><?PHP echo $row['ref']; ?></td>
										<td><?PHP echo $row['message']; ?></td>
										<td><?PHP echo $row['date_rec']; ?></td>
										<td><form method="POST" action="supprimerReclamation.php">
										<input  type="submit" name="supprimer" value="supprimer">
										<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
										</form>
										</td>
										<td><form method="post" action="modifierReclamation.php">
										<input  type="submit" name="modifier" value="modifier">
										<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
										</form>
										</td>				

										<?PHP
										}
										?>

                                    </table>
                                </div>

                              </div>
                              </div>
                              </div>
                            </div>
                          </div>
                              </div>
                            </div>

   <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Today's RendezVous"
  },
  data: [{
    type: "column", 
    legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",   
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>

                               
                              </div>
                              </div>
                              </div>
                            </div>
                          </div>
                              </div>
                            </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->





