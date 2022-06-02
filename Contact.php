<?php
session_start();
include('bdconnect.php');
$req = "select * from `infocontact`";
$curseur = mysqli_query($bdd, $req);

while ($row = mysqli_fetch_assoc($curseur)) {
  $id = $row["id"];
  $tel = $row["tel"];
  $email = $row["email"];
  $adresse = $row["adresse"];
  $link = $row["link"];
}






?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Contact</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Contact.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "shop",
      "logo": "images/Fichier2.png",
      "sameAs": []
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Contact">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
</head>

<body class="u-body">
  <header class="u-black u-clearfix u-header u-header" id="sec-0ce7">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="Accueil.html" data-page-id="73788091" class="u-image u-logo u-image-1" data-image-width="1549" data-image-height="882" title="Accueil">
        <img src="images/Fichier2.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 800;">
          <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" href="Accueil.php" style="padding: 10px 0px;">Accueil</a>
            </li>
            <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" href="Produits.php" style="padding: 10px 0px;">Produits</a>
            </li>
            <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" style="padding: 10px 0px;">Espace memebre</a>
              <div class="u-nav-popup">
                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                  <?php
                  if (isset($_SESSION["auth"])) {
                    echo "<li class='u-nav-item'><a class='u-button-style u-nav-link u-white' href='logout.php'>Déconnexion</a>
    </li>";
                  } else {
                    echo "<li class='u-nav-item'><a class='u-button-style u-nav-link u-white' href='Inscriptionform.php'>S'inscrire</a>
    </li><li class='u-nav-item'><a class='u-button-style u-nav-link u-white' href='connexion.php'>Se connecter</a>
    </li>";
                  }

                  ?>
                </ul>
              </div>
            </li>
            <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" style="padding: 10px 0px;">Bonnes affaires</a>
              <div class="u-nav-popup">
                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Evenements</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Nouveautés</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white">Soldes</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-grey-90" href="Contact.php" style="padding: 10px 0px;">Contact</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.php" style="padding: 10px 0px;">Accueil</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Produits.php" style="padding: 10px 0px;">Produits</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 0px;">Espace memebre</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5">
                      <?php
                      if (isset($_SESSION["auth"])) {
                        echo "<li class='u-nav-item'><a class='u-button-style u-nav-link' href='logout.php'>Déconnexion</a>
    </li>";
                      } else {
                        echo "<li class='u-nav-item'><a class='u-button-style u-nav-link' href='Inscriptionform.php'>S'inscrire</a>
    </li><li class='u-nav-item'><a class='u-button-style u-nav-link' href='connexion.php'>Se connecter</a>
    </li>";
                      }

                      ?>
                    </ul>
                  </div>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 0px;">Bonnes affaires</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6">
                      <li class="u-nav-item"><a class="u-button-style u-nav-link">Evenements</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link">Nouveautés</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link">Soldes</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 0px;">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>
  <section class="u-clearfix u-gradient u-section-1" id="sec-a7ae">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-form u-form-1">
        <form action="envoi_contact.php" method="POST" source="custom" name="form" style="padding: 10px;">
          <div class="u-form-group u-form-name">
            <label for="name-7c1c" class="u-label">Nom</label>
            <input type="text" placeholder="Entrez votre nom" id="name-7c1c" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-email u-form-group">
            <label for="email-7c1c" class="u-label">email</label>
            <input type="email" placeholder="Entrez une adresse mail valide" id="email-7c1c" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-message">
            <label for="message-7c1c" class="u-label">Message</label>
            <textarea placeholder="Entrez votre message" rows="4" cols="50" id="message-7c1c" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
          </div>
          <div class="u-align-left u-form-group u-form-submit">
            <a href="#" class="u-btn u-btn-submit u-button-style">Soumettre</a>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Je vous remercie! Votre message a été envoyé. </div>
          <div class="u-form-send-error u-form-send-message"> Impossible d'envoyer votre message. Veuillez corriger les erreurs puis réessayer. </div>
          <input type="hidden" value="" name="recaptchaResponse">
        </form>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-gradient u-section-2" id="sec-f27f">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-repeater-item u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-custom-item u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.076 512.076" style="">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0888"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 512.076 512.076" x="0px" y="0px" id="svg-0888" style="enable-background:new 0 0 512.076 512.076;">
                  <g transform="translate(-1 -1)">
                    <g>
                      <g>
                        <path d="M499.639,396.039l-103.646-69.12c-13.153-8.701-30.784-5.838-40.508,6.579l-30.191,38.818     c-3.88,5.116-10.933,6.6-16.546,3.482l-5.743-3.166c-19.038-10.377-42.726-23.296-90.453-71.04s-60.672-71.45-71.049-90.453     l-3.149-5.743c-3.161-5.612-1.705-12.695,3.413-16.606l38.792-30.182c12.412-9.725,15.279-27.351,6.588-40.508l-69.12-103.646     C109.12,1.056,91.25-2.966,77.461,5.323L34.12,31.358C20.502,39.364,10.511,52.33,6.242,67.539     c-15.607,56.866-3.866,155.008,140.706,299.597c115.004,114.995,200.619,145.92,259.465,145.92     c13.543,0.058,27.033-1.704,40.107-5.239c15.212-4.264,28.18-14.256,36.181-27.878l26.061-43.315     C517.063,422.832,513.043,404.951,499.639,396.039z M494.058,427.868l-26.001,43.341c-5.745,9.832-15.072,17.061-26.027,20.173     c-52.497,14.413-144.213,2.475-283.008-136.32S8.29,124.559,22.703,72.054c3.116-10.968,10.354-20.307,20.198-26.061     l43.341-26.001c5.983-3.6,13.739-1.855,17.604,3.959l37.547,56.371l31.514,47.266c3.774,5.707,2.534,13.356-2.85,17.579     l-38.801,30.182c-11.808,9.029-15.18,25.366-7.91,38.332l3.081,5.598c10.906,20.002,24.465,44.885,73.967,94.379     c49.502,49.493,74.377,63.053,94.37,73.958l5.606,3.089c12.965,7.269,29.303,3.898,38.332-7.91l30.182-38.801     c4.224-5.381,11.87-6.62,17.579-2.85l103.637,69.12C495.918,414.126,497.663,421.886,494.058,427.868z"></path>
                        <path d="M291.161,86.39c80.081,0.089,144.977,64.986,145.067,145.067c0,4.713,3.82,8.533,8.533,8.533s8.533-3.82,8.533-8.533     c-0.099-89.503-72.63-162.035-162.133-162.133c-4.713,0-8.533,3.82-8.533,8.533S286.448,86.39,291.161,86.39z"></path>
                        <path d="M291.161,137.59c51.816,0.061,93.806,42.051,93.867,93.867c0,4.713,3.821,8.533,8.533,8.533     c4.713,0,8.533-3.82,8.533-8.533c-0.071-61.238-49.696-110.863-110.933-110.933c-4.713,0-8.533,3.82-8.533,8.533     S286.448,137.59,291.161,137.59z"></path>
                        <path d="M291.161,188.79c23.552,0.028,42.638,19.114,42.667,42.667c0,4.713,3.821,8.533,8.533,8.533s8.533-3.82,8.533-8.533     c-0.038-32.974-26.759-59.696-59.733-59.733c-4.713,0-8.533,3.82-8.533,8.533S286.448,188.79,291.161,188.79z"></path>
                      </g>
                    </g>
                  </g>
                </svg></span>
              <h3 class="u-text u-text-1"><?php echo $tel; ?></h3>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-custom-item u-icon u-icon-circle u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style="">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2b9a"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 60 60" id="svg-2b9a">
                  <g id="Page-1" fill="none" fill-rule="evenodd">
                    <g id="015---Email" fill="currentColor" fill-rule="nonzero" transform="translate(0 -1)">
                      <path id="Shape" d="m31.2383 34.99c-2.2415644-.0103981-4.4685165-.3615784-6.6045-1.0415-3.4128423-1.1417755-5.9477395-4.0310188-6.6358-7.5634-.7529-3.6265.6192-7.461 3.7637-10.52.3374-.3286.688-.6433667 1.0518-.9443 3.2196288-2.6954608 7.5602996-3.6321929 11.605-2.5044 3.9157536 1.2498134 6.6214551 4.8283567 6.7568 8.9365.1466146 2.3647451-.6241352 4.6949748-2.1519 6.5059-1.1783023 1.4842706-3.0874488 2.185355-4.9463 1.8164-.7602176-.1577458-1.4234762-.6181385-1.8371-1.2752-.3711287-.6382278-.4663065-1.4000836-.2636-2.11.8745-3.3056 1.7636-8.3291 1.7724-8.38.0621106-.3519066.3072431-.6439461.6430585-.76611s.7112953-.0558927.985.17385c.2737048.2297427.4040521.5880534.3419415.93996-.0371.209-.9126 5.1572-1.8086 8.5435-.063952.1876506-.0478957.3933459.0444.5688.1382799.191343.3469169.3199065.58.3574 1.1379287.1899234 2.2873612-.2665919 2.9849-1.1855 1.1864016-1.4193487 1.780845-3.2409596 1.66-5.0869-.0977844-3.2700176-2.242135-6.124934-5.3554-7.13-3.3983056-.9347035-7.0389503-.1361935-9.7341 2.135-.3213.2667-.6338.5459-.9336.8379-1.5546 1.5122-4.0371 4.65-3.2006 8.68.5620337 2.8154834 2.5728764 5.1228675 5.2851 6.0645 4.69 1.4961 11.4292 1.6762 14.98-2.7388.3488575-.4201425.9702584-.4827231 1.3958849-.1405779s.4980618.9624746.1627151 1.3934779c-2.6257 3.2653-6.6213 4.4335-10.5412 4.4335z"></path>
                      <path id="Shape" d="m27.8149 29.8052c-1.0570282.0181646-2.0880311-.3284577-2.9194-.9815-1.9194-1.5361-1.9722-4.2046-1.4341-6.0219.1812165-.6052113.4245444-1.1900564.7261-1.7452.7503224-1.5138869 1.9500705-2.7589691 3.4351-3.5649 1.8493462-.9596056 4.1088442-.5957076 5.5634.896.7216241.7908253 1.2651883 1.727263 1.594 2.7461.1741403.5170195-.0982507 1.0782018-.6121886 1.2612366-.513938.1830348-1.0797365-.0796331-1.2716114-.5903366-.2370831-.7527039-.6311586-1.4465454-1.1562-2.0357-.8480317-.8672392-2.1694059-1.0645586-3.2338-.4829-1.1136951.6280705-2.0087091 1.5816703-2.565 2.7329-.2337738.431336-.4225991.8855555-.5635 1.3555-.3886 1.3145-.3032 3.03.7691 3.8887 1.1723.9414 3.15.5434 4.2627-.4165.829232-.746533 1.5417334-1.6132856 2.1137-2.5713.1852213-.3103564.5234962-.4966162.8847981-.4871844.3613019.0094317.6893982.213087.8581746.5326844.1687764.3195975.1519648.7053954-.0439727 1.0091-.6774817 1.1288507-1.5209182 2.1493684-2.502 3.0273-1.0934765.9226171-2.4746572 1.4346934-3.9053 1.4479z"></path>
                      <path id="Shape" d="m57 61h-54c-1.65610033-.0018187-2.99818129-1.3438997-3-3v-37c.00001572-.3877788.22421679-.7405895.57528314-.9052857s.76569921-.1115825 1.06391686.1362857l24.5371 20.3925c2.2201734 1.8335597 5.4293979 1.8329723 7.6489-.0014l24.5348-20.3911c.2981965-.248376.7131706-.3017925 1.0645472-.1370311.3513766.1647613.5756955.5179438.5754528.9060311v37c-.0018187 1.6561003-1.3438997 2.9981813-3 3zm-55-37.8687v34.8687c.00071619.5519878.44801218.9992838 1 1h54c.5520791-.0004962.9995038-.4479209 1-1v-34.8687l-22.8979 19.03c-2.9606327 2.446724-7.241348 2.4473534-10.2027.0015z"></path>
                      <path id="Shape" d="m1.001 22c-.4355701.0003953-.82129491-.2811908-.95363398-.6961701-.13233908-.4149794.01915201-.8678864.37453398-1.1197299l9-6.38c.45059523-.3122969 1.0686272-.2035665 1.3855809.2437653s.2146394 1.0664583-.2293809 1.3880347l-9 6.38c-.16852428.1199208-.37026338.1842773-.5771.1841z"></path>
                      <path id="Shape" d="m58.999 22c-.2068366.0001773-.4085757-.0641792-.5771-.1841l-9-6.38c-.4440203-.3215764-.5463346-.9407029-.2293809-1.3880347s.9349857-.5560622 1.3855809-.2437653l9 6.38c.355382.2518435.5068731.7047505.374534 1.1197299-.1323391.4149793-.5180639.6965654-.953634.6961701z"></path>
                      <path id="Shape" d="m39.2393 8c-.2070115.00010935-.4089216-.06423486-.5777-.1841l-4.78-3.39c-2.2188862-1.87501472-5.4612857-1.89454674-7.7026-.0464l-4.84 3.4365c-.291493.20671388-.6711242.24221572-.9958901.09313231-.324766-.1490834-.5453271-.46010273-.5786-.81590001-.033273-.35579728.1257971-.70231843.4172901-.9090323l4.78-3.39c2.9536144-2.41503467 7.2051289-2.39582552 10.1368.0458l4.72 3.3438c.3556854.25178052.5073677.70490665.3749428 1.12008029s-.5184618.69678741-.9542428.69611971z"></path>
                      <path id="Shape" d="m1.65 60.46c-.42143186.0003675-.79786247-.263514-.94122905-.6598105-.14336657-.3962966-.02289448-.8399405.30122905-1.1092895l22.82-18.96c.2742111-.2331685.6525759-.3009793.9906961-.1775532.3381203.1234261.5838207.4190432.643333.7740327.0595122.3549896-.0763472.7145733-.3557291.9415205l-22.82 18.96c-.17916597.149357-.40504487.2311377-.6383.2311z"></path>
                      <path id="Shape" d="m58.3486 60.46c-.2330738.0001375-.4587858-.0816243-.6377-.231l-22.82-18.96c-.2793819-.2269472-.4152413-.5865309-.3557291-.9415205.0595123-.3549895.3052127-.6506066.643333-.7740327.3381202-.1234261.716485-.0556153.9906961.1775532l22.8194 18.96c.3241235.269349.4445956.7129929.301229 1.1092895-.1433665.3962965-.5197971.660178-.941229.6598105z"></path>
                      <path id="Shape" d="m50 29.48c-.5522847 0-1-.4477153-1-1v-20.4722c-.0029.021-.043-.0073-.11-.0078h-37.78c-.0442022-.00271479-.0875817.01282953-.12.043l.01 20.437c0 .5522847-.4477153 1-1 1-.55228475 0-1-.4477153-1-1v-20.48c.03226085-1.13410356.97579439-2.02844815 2.11-2h37.78c1.134163-.02833724 2.0776307.86594492 2.11 2v20.48c0 .5522847-.4477153 1-1 1z"></path>
                    </g>
                  </g>
                </svg></span>
              <h3 class="u-text u-text-2"><span class="u-icon u-icon-circle u-icon-3"></span>&nbsp;​<?php echo $email; ?><span style="font-size: 1.5rem;">
                  <span style="font-size: 1.25rem;"></span>
                </span>
              </h3>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item u-list-item-3">
            <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-custom-item u-icon u-icon-circle u-icon-4" data-href="<?php echo $link; ?>">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 480 480" style="">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3329"></use>
                </svg><svg class="u-svg-content" viewBox="0 0 480 480" x="0px" y="0px" id="svg-3329" style="enable-background:new 0 0 480 480;">
                  <g>
                    <g>
                      <g>
                        <path d="M240,0C142.798,0,64,78.798,64,176c0,94.576,162.896,292.712,169.832,301.096c1.52,1.839,3.782,2.904,6.168,2.904     c2.386,0,4.648-1.065,6.168-2.904C253.104,468.712,416,270.576,416,176C416,78.798,337.202,0,240,0z M240,459.288     C209.896,421.712,80,254.976,80,176c0.101-88.324,71.677-159.899,160-160c88.324,0.101,159.899,71.676,160,160     C400,254.96,270.104,421.704,240,459.288z"></path>
                        <path d="M348.88,145.664l-104-80c-2.877-2.214-6.883-2.214-9.76,0l-104,80c-3.499,2.697-4.149,7.721-1.452,11.22     c1.514,1.964,3.852,3.115,6.332,3.116h24v88c0,4.418,3.582,8,8,8h144c4.418,0,8-3.582,8-8v-88h24     c4.418-0.002,7.998-3.586,7.996-8.004C351.995,149.516,350.844,147.178,348.88,145.664z M256,240h-32v-48h32V240z M312,144     c-4.418,0-8,3.582-8,8v88h-32v-56c0-4.418-3.582-8-8-8h-48c-4.418,0-8,3.582-8,8v56h-32v-88c0-4.418-3.582-8-8-8h-8.48     L240,82.096L320.48,144H312z"></path>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <h3 class="u-text u-text-3"><?php echo $adresse; ?><span style="font-size: 1.25rem;"></span>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-c26b">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1549" data-image-height="882">
        <img src="images/Fichier2.png" class="u-logo-image u-logo-image-1">
      </a>
      <a href="https://nicepage.com/k/auction-website-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-1">Services</a>
      <a href="https://nicepage.online" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-2"> politique de confidentialité</a>
      <a href="A-propos-de-nous.html" data-page-id="261122914" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-3">A propos de nous</a>
      <a href="https://nicepage.com/joomla-page-builder" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-4">Termes &amp; conditions</a>
      <p class="u-text u-text-default u-text-1"> © 2021 Basketball-Shop.&nbsp;All rights reserved</p>
      <div class="u-social-icons u-spacing-20 u-social-icons-1">
        <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-712a"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-712a">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0300"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0300">
              <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c068"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c068">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
              <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
              <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ed63"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ed63">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
            </svg></span>
        </a>
      </div>
    </div>
  </footer>
</body>

</html>