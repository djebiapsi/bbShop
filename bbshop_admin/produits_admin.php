<?php
  include('auth.php');
  include('../bdconnect.php');

  if (isset($_POST['ref'])) {

    if ($_FILES['path']['size'] > 0) {
        copy($_FILES['path']['tmp_name'], "../images/".$_FILES['path']['name']);
        $path = "images/".$_FILES['path']['name'];
    }else {
        $path = "";
    }
    
    if ($_FILES['path2']['size'] > 0) {
        copy($_FILES['path2']['tmp_name'], "../images/".$_FILES['path2']['name']);
        $path2 = "images/".$_FILES['path2']['name'];
    }else {
        $path2 = "";
    }

    if ($_FILES['path3']['size'] > 0) {
        copy($_FILES['path3']['tmp_name'], "../images/".$_FILES['path3']['name']);
        $path3 = "images/".$_FILES['path3']['name'];
    }else {
        $path3 = "";
    }
    
    $ref = $_POST['ref'];
    $desc = $_POST['desc'];
    $prix = $_POST['prix'];

    $req ="INSERT INTO `produit`( `refProduit`, `description`, `path`, `path2`, `path3`, `prix`) VALUES ('$ref','$desc','$path','$path2','$path3', '$prix')";

    mysqli_query($bdd, $req);

    unset($_POST['ref']);


  }

  if (isset($_POST['deleteid'])) {

    $id = $_POST['deleteid'];

    $req ="DELETE FROM `produit` WHERE id=$id;";

    mysqli_query($bdd, $req);
    
    $req ="UPDATE `reservation` SET `statue` = 'cancel' WHERE idproduit = $id;";

    mysqli_query($bdd, $req);



    unset($_POST['deleteid']);
  }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="color: var(--bs-gray-900);background: var(--bs-body-color);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Tableau de bord</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="produits_admin.html"><i class="fa fa-shopping-basket"></i><span>Produits</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="user_admin.php"><i class="fa fa-user"></i><span>Utilisateurs</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="commande_admin.php"><i class="fa fa-cart-arrow-down"></i><span>Commandes</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="contact_admin.html"><i class="fa fa-envelope"></i><span>Contact</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Produits</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Recherche par référence..."></div><span class="counter pull-right"></span>
                                        <div class="table-responsive table table-hover table-bordered results">
                                            <table class="table table-hover table-bordered">
                                                <thead class="bill-header cs">
                                                    <tr>
                                                        <th id="trs-hd-1">ID produits</th>
                                                        <th id="trs-hd-2">Référence</th>
                                                        <th id="trs-hd-3">Description</th>
                                                        <th id="trs-hd-4">Image 1</th>
                                                        <th id="trs-hd-5">Image 2</th>
                                                        <th id="trs-hd-7">Image 3</th>
                                                        <th id="trs-hd-8">Prix</th>
                                                        <th id="trs-hd-6">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="warning no-result">
                                                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                                                    </tr>
                                                    <?php
                                                        $req = "SELECT * FROM `produit`";

                                                        $curseur = mysqli_query($bdd,$req);
                
                                                        while ($row = mysqli_fetch_assoc($curseur)) {
                                                            $id = $row['id'];
                                                            $ref = $row['refProduit'];
                                                            $desc = $row['description'];
                                                            $path = $row['path'];
                                                            $path2 = $row['path2'];
                                                            $path3 = $row['path3'];
                                                            $path3 = $row['path3'];
                                                            $prix = $row['prix'];
                                                            echo "<tr>
                                                            <td>$id</td>
                                                            <td>$ref</td>
                                                            <td>$desc</td>
                                                            <td><img style='width: 100px; heigth: 50px' src='../$path' alt='PAS D'IMAGE 1'></td>
                                                            <td><img style='width: 100px; heigth: 50px' src='../$path2' alt='PAS D'IMAGE 2'></td>
                                                            <td><img style='width: 100px; heigth: 50px' src='../$path3' alt='PAS D'IMAGE 3'></td>
                                                            <td>$prix €</td>
                                                            <td><button class='btn btn-success' style='margin-left: 5px;' type='submit' data-bs-target='#modal_edit' data-bs-toggle='modal'><i class='fa fa-edit' style='font-size: 15px;'></i></button><button class='btn btn-danger' style='margin-left: 5px;' form=$id type='submit'><i class='fa fa-trash' style='font-size: 15px;'></i></button></td>
                                                        </tr>
                                                        <form id=$id method='POST'>
                                                            <input type='hidden' name='deleteid' value='$id'>
                                                        </form>
                                                        ";
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><button class="btn btn-primary" type="button" data-bs-target="#modal-add" data-bs-toggle="modal">Nouveau produit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                </div>
            </footer>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal_edit">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">MODIFIER PRODUIT</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form><select class="form-select my-2">
                                <optgroup label="Champs">
                                    <option value="ref" selected="">Référence</option>
                                    <option value="des">Déscription</option>
                                </optgroup>
                            </select></form><label class="form-label">Entrer la modification</label><input type="text" class="form-control my-2"><button class="btn btn-primary" type="button">Enregistrer</button>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Fermer</button></div>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-add">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">NOUVEAU PRODUIT</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data" id="form-add"><label class="form-label">Réference du produit</label><input class="form-control" type="text" name="ref" placeholder="Maillot ..."><label class="form-label">Description</label><input class="form-control" type="text" name="desc"><label class="form-label">Prix</label><input required class="form-control" type="text" name="prix" required="" placeholder="€"><label class="form-label">Image 1</label><input class="form-control" type="file" name="path"><label class="form-label">Image 2</label><input class="form-control" type="file" name="path2"><label class="form-label">Image 3</label><input class="form-control" type="file" name="path3"></form>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Fermer</button><button class="btn btn-primary my-2" form="form-add" type="submit">Enregistrer</button></div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>