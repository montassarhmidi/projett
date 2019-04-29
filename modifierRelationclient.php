<?PHP
include "../entities/relationclient.php";
include "../core/employeC.php";
if (isset($_GET['id'])){
	$RelationclientC=new RelationclientC();
    $result=$RelationclientC->recupererRelationclient($_GET['id']);
	foreach($result as $row){
		$Nom=$row['Nom'];
		$Prenom=$row['Prenom'];
		$Type=$row['Type'];
		$Email=$row['Email'];
		$Adresse=$row['Adresse'];
		$Gouvernorat=$row['Gouvernorat'];
		$Ville=$row['Ville'];
        $CodePostal=$row['CodePostal'];
        $Telephone=$row['Telephone'];
        $Password=$row['Password'];
    }
}


if (isset($_POST['modifier'])){
	$Relationclient=new Relationclient($_POST['Nom'],$_POST['Prenom'],$_POST['Type'],$_POST['Email'],$_POST['Adresse'],$_POST['Gouvernorat'],$_POST['Ville'],$_POST['CodePostal'],$_POST['Telephone'],$_POST['Password']);
	$RelationclientC->modifierRelationclient($Relationclient,$_GET['id']);
	echo $_GET['id'];
		header('Location: ../back/relationclient.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashboard JTS</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<style type="text/css">
  body {
  font-family: 'Open Sans', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 300;
}

p {
  color: #999;
}

strong {
  color: #333;
}

#wrapper {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
  padding: 30px 0;
}

.page-head-image {
  
}

.page-head-image img {
  border-radius: 50%;
}

#form-trabalhe {
  margin-top: 30px;
  text-align: left;
}

label {
  font-weight: normal;
  margin-top: 15px;
}

input {
  border: 2px solid #CCC !important;
  height: 35px;
  border-radius: 3px;
  max-width: 100%;
}

.input-group-addon {
  border: 2px solid #CCC !important;
  border-right: 0px !important;
}

.btn {
  border: 0;
  border-radius: 3px;
  margin-top: 20px;
}

.form-group {
  margin-bottom: 0;
  text-align: left;
}
</style>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        
      </div>
      
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Commmandes</span>
              </a>
            <ul class="sub">
              <li><a href="commandes.html">Commandes</a></li>
              <li><a href="factures.html">Factures</a></li>
              <li><a href="panier.html">Panier</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Produits</span>
              </a>
            <ul class="sub">
              <li><a href="stock.html">Stock</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="catalogue.html">Catalogue</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>SAV</span>
              </a>
            <ul class="sub">
              <li><a href="sav.html">SAV</a></li>
              <li><a href="reclamation.html">Reclamations</a></li>
              <li><a href="rendezvous.html">Rendez-vous</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Clients</span>
              </a>
            <ul class="sub">
              <li><a href="clients.html">Clients</a></li>
              <li><a href="clientsf.html">Clients fidèles</a></li>
              <li><a href="historique.html">Historique</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Livraisons</span>
              </a>
            <ul class="sub">
              <li><a href="livdispo.html">Livraisons disponibles</a></li>
              <li><a href="livreurs.html">Livreurs</a></li>
              <li><a href="suivi.html">Suivi</a></li>
            </ul>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Paiement</span>
              </a>
            <ul class="sub">
              <li><a href="commandes.html">Paiement par carte bancaire</a></li>
              <li><a href="factures.html">Paiement par chèque</a></li>
              <li><a href="panier.html">Paiement à la livraison</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Modifier Relation Client</span>
              </a>
            <ul class="sub">
              <li><a href="../back/pub.php">Publicité</a></li>
              <li><a href="../back/relationclient.php">Relationclient</a></li>
               <li><a href="../back/recherche.php">Recherche</a></li>
              <li><a href="../back/tri.php">Tri</a></li>
            </ul>
          </li>
        </ul>
        <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span><li><a href="../Publicité.php">Déconnexion</a></li></span>
              </a>
              </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Relation Client</h3>
            </div>
            
              
            <!--custom chart end-->
            
                  
                <!-- /grey-panel -->
              
              <!-- /col-md-4-->
              
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
              
              <!-- /col-md-4 -->
              
            <!-- /row -->
            
              </div>
              <!-- /col-md-4 -->
              <!--  PROFILE 02 PANEL -->
              
                  
                <!-- /panel -->
              </div>
              <!--/ col-md-4 -->
             
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
              
            <!--NEW EARNING STATS -->
            
            <!--new earning end-->
            <!-- RECENT ACTIVITIES SECTION -->
            
            <!-- USERS ONLINE SECTION -->
           
 
      

           <form method="POST" >
 
            

           <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="surname">Nom</label>
              <input name="Nom" class="form-control" placeholder="Nom" type="text"value="<?PHP echo $Nom ?>" required/>
            </div>
          </div>

            <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="surname">Prenom</label>
              <input name="Prenom" class="form-control" placeholder="Prenom" type="text"value="<?PHP echo $Prenom ?>" required/>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6">
          <label class="control-label" for="district">Type</label>
              
              <select name="Type" class="form-control">
 <option value="normal">normal</option>
  <option value="super">super</option> 
 <option value="ultra">ultra</option> 
 
</select>  
</div>
</div>
          <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">Email</label>
              <input name="Email" class="form-control" placeholder="Email" type="text"value="<?PHP echo $Email ?>" required/>
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">Adresse</label>
              <input name="Adresse" class="form-control" placeholder="Adresse" type="text"value="<?PHP echo $Adresse ?>" required/>
            </div>
          </div>
            <div class="form-group">
            <div class="col-md-6">
          <label class="control-label" for="district">Gouvernorat</label>
              
              <select name="Gouvernorat" class="form-control">

 <option value="Ariana">Ariana</option>
  <option value="Beja">Beja</option> 
 <option value="Ben Arous">Ben Arous</option> 
  <option value="Bizerte">Bizerte</option>
  <option value="Gabes">Gabes</option> 
 <option value="Gafsa">Gafsa</option> 
  <option value="Jendouba">Jendouba</option>
  <option value="Kairouan">Kairouan</option> 
 <option value="Kasserine">Kasserine</option> 
  <option value="Kebili">Kebili</option>
  <option value="Le Kef">Le Kef</option> 
 <option value="Mahdia">Mahdia</option> 
  <option value="La Manouba">La Manouba</option>
  <option value="Medenine">Medenine</option> 
 <option value="Monastir">Monastir</option> 
  <option value="Nabeul">Nabeul</option>
  <option value="Sfax">Sfax</option> 
 <option value="Sidi Bouzid">Sidi Bouzid</option> 
  <option value="Siliana">Siliana</option>
  <option value="Sousse">Sousse</option> 
 <option value="Tataouine">Tataouine</option> 
  <option value="Tozeur">Tozeur</option>
  <option value="Tunis">Tunis</option> 
 <option value="Zaghouan">Zaghouan</option> 
 
</select> 
          
          </div>
        
        </div>
           <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">Ville</label>
              <input name="Ville" class="form-control" placeholder="Ville" type="text"value="<?PHP echo $Ville ?>" required/>
            </div>
          </div>
           <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">CodePostal</label>
              <input name="CodePostal" class="form-control" size="4" maxlength="4" placeholder="CodePostal" type="number"value="<?PHP echo $CodePostal ?>" required/>
            </div>
          </div>
            <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">Telephone</label>
              <input name="Telephone"  class="form-control" size="8" maxlength="8" placeholder="Telephone" type="number"value="<?PHP echo $Telephone ?>" required/>
            </div>
          </div>
            <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">Password</label>
              <input name="Password" class="form-control" placeholder="Password" type="number" pattern="[0-9a-zA-Z]{4,20}" title="Veuillez saisir un mot de passe avec 4 à 20 chiffres hexadécimaux."value="<?PHP echo $Password ?>" required/>
            </div>
          </div>

          
          <div class="form-group">
            <div class="col-md-12">
              <button type="submit" name="modifier" class="btn btn-primary btn-lg btn-block info">modifier</button>
            </div>
          </div>     
      
    </form>
</div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>



</body>
</HTMl>

