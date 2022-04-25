<?php
  session_start();
  include('bdconnect.php');

  if(isset($_GET['idP'])){
    $idP=$_GET['idP'];
  }

  /**
   * Récupération des variables du produit à afficher dans la bdd
   */
  $req = "select * from `produit` where id=$idP";
  $curseur = mysqli_query($bdd,$req);
  $row = mysqli_fetch_assoc($curseur);
  $refProduit = $row["refProduit"];
  $description = $row["description"];
  $path = $row["path"];
  $path2 = $row["path2"];
  $path3 = $row["path3"];
  $prix = $row["prix"];

  //var_dump($refProduit);

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Details produit</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Details-produit.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "shop",
		"logo": "images/Fichier2.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Details produit">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-black u-clearfix u-header u-header" id="sec-0ce7"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Accueil.php" data-page-id="73788091" class="u-image u-logo u-image-1" data-image-width="1549" data-image-height="882" title="Accueil">
          <img src="images/Fichier2.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 800;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" href="Accueil.php" style="padding: 10px 0px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" href="Produits.php" style="padding: 10px 0px;">Produits</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" style="padding: 10px 0px;">Espace memebre</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><?php
  if (isset($_SESSION["auth"])) {
    echo "<li class='u-nav-item'><a class='u-button-style u-nav-link u-white' href='logout.php'>Déconnexion</a>
    </li>";
  }else {
    echo "<li class='u-nav-item'><a class='u-button-style u-nav-link u-white' href='Inscriptionform.php'>S'inscrire</a>
    </li><li class='u-nav-item'><a class='u-button-style u-nav-link u-white' href='connexion.php'>Se connecter</a>
    </li>";
  }
  
?></ul>
</div>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" style="padding: 10px 0px;">Bonnes affaires</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Evenements</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Nouveautés</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Soldes</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" href="Contact.php" style="padding: 10px 0px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.php" style="padding: 10px 0px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Produits.php" style="padding: 10px 0px;">Produits</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 0px;">Espace memebre</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Inscriptionform.php">S'inscrire</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="connexion.php">Se connecter</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Réservtion.html" style="padding: 10px 0px;">Réservation</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 0px;">Bonnes affaires</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6"><li class="u-nav-item"><a class="u-button-style u-nav-link">Evenements</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Nouveautés</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Soldes</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 0px;">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-gradient u-section-1" id="sec-fce7">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--product--><!--product_options_json--><!--{"source":""}--><!--/product_options_json--><!--product_item-->
        <div class="u-container-style u-expanded-width u-product u-product-1">
          <div class="u-container-layout u-valign-top-xs u-container-layout-1"><!--product_gallery--><!--options_json--><!--{"maxItems":""}--><!--/options_json-->
            <div class="u-carousel u-expanded-width-sm u-expanded-width-xs u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-bottom u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-654c">
              <div class="u-carousel-inner u-gallery-inner" role="listbox"><!--product_gallery_item-->
                <div class="active u-active u-carousel-item u-gallery-item u-shape-rectangle">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="<?php echo $path; ?>">
                  </div>
                  <div class="u-over-slide u-over-slide-1">
                    <h3 class="u-gallery-heading">Sample Title</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div><!--/product_gallery_item--><!--product_gallery_item-->
                <div class="u-carousel-item u-gallery-item u-shape-rectangle">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="<?php echo $path2; ?>">
                  </div>
                  <div class="u-over-slide u-over-slide-2">
                    <h3 class="u-gallery-heading">Sample Title</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div><!--/product_gallery_item-->
              </div>
              <a class="u-black u-carousel-control u-carousel-control-prev u-icon-rectangle u-opacity u-opacity-70 u-spacing-15 u-text-body-alt-color u-text-hover-grey-40 u-carousel-control-1" href="#carousel-654c" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
              </a>
              <a class="u-black u-carousel-control u-carousel-control-next u-icon-rectangle u-opacity u-opacity-70 u-spacing-15 u-text-body-alt-color u-text-hover-grey-40 u-carousel-control-2" href="#carousel-654c" role="button" data-u-slide="next">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
              </a>
              <ol class="u-carousel-thumbnails u-spacing-25 u-carousel-thumbnails-1"><!--product_gallery_thumbnail-->
                <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-654c" data-u-slide-to="0">
                  <img class="u-carousel-thumbnail-image u-image" src="<?php echo $path; ?>">
                </li><!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
                <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-654c" data-u-slide-to="1">
                  <img class="u-carousel-thumbnail-image u-image" src="<?php echo $path2; ?>">
                </li><!--/product_gallery_thumbnail-->
              </ol>
            </div><!--/product_gallery--><!--product_title-->
            <h2 class="u-product-control u-text u-text-default u-text-1">
              <a class="u-product-title-link" href="#"><!--product_title_content--><?php echo $refProduit; ?><!--/product_title_content--></a>
            </h2><!--/product_title--><!--product_price-->
            <div class="u-product-control u-product-price u-product-price-1">
              <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                <div class="u-price" style="font-size: 1.5rem; font-weight: 700;"><!--product_regular_price_content--><?php echo $prix."€"; ?><!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_variations-->
            <div class="u-product-control u-product-variations u-product-variations-1"><!--product_variation-->
              <div class="u-product-variant">
                <label for="product-variant-select-1" class="u-label"><!--product_variation_label_content-->Taille<!--/product_variation_label_content--></label>
                <div class="u-form-select-wrapper">
                  <select id="size" class="u-border-1 u-border-grey-30 u-grey-10 u-input u-input-rectangle"><!--product_variation_option-->
                    <option value="S"><!--product_variation_option_content-->S<!--/product_variation_option_content--></option><!--/product_variation_option--><!--product_variation_option-->
                    <option value="M"><!--product_variation_option_content-->M<!--/product_variation_option_content--></option><!--/product_variation_option--><!--product_variation_option-->
                    <option value="L"><!--product_variation_option_content-->L<!--/product_variation_option_content--></option><!--/product_variation_option-->
                  </select>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                </div>
              </div><!--/product_variation-->
            </div><!--/product_variations--><!--product_content-->
            <div class="u-product-control u-product-desc u-text u-text-2"><!--product_content_content-->
              <p><?php echo $description; ?></p><!--/product_content_content-->
            </div><!--/product_content-->
            <form action="saveReserve.php?idP=<?php echo $idP; ?>" method="POST">
              <input type="hidden" name="size" id="sizeform" value="S"></input>
              <script>
                var comboBox = document.getElementById('size');
                var inputSize = document.getElementById('sizeform');
                function majSize(params) {
                  inputSize.setAttribute('value', comboBox.value)
                }
                
                
              </script>
              <input type="submit" value="Réserver" onClick="majSize()" class="u-black u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-radius-6 u-btn-1">
            </form>
          </div>
        </div><!--/product_item--><!--/product-->
      </div>
    </section>
    
    
    <footer class="u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-c26b"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1549" data-image-height="882">
          <img src="images/Fichier2.png" class="u-logo-image u-logo-image-1">
        </a>
        <a href="https://nicepage.com/k/auction-website-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-1">Services</a>
        <a href="https://nicepage.online" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-2"> politique de confidentialité</a>
        <a href="A-propos-de-nous.html" data-page-id="261122914" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-3">A propos de nous</a>
        <a href="https://nicepage.com/joomla-page-builder" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-4">Termes &amp; conditions</a>
        <p class="u-text u-text-default u-text-1"> © 2021 Basketball-Shop.&nbsp;All rights reserved</p>
        <div class="u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-712a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-712a"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0300"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0300"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c068"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c068"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ed63"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ed63"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
      </div></footer>
  </body>
</html>