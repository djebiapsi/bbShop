<?php
include('auth.php');


include('../bdconnect.php');

//Pagination

$limit = 5;
// Get total records
$sql = "SELECT count(contact_id) AS id FROM `tblcontact`";
$req = mysqli_query($bdd, $sql);
$allRecrods = mysqli_fetch_assoc($req)["id"];



// Calculate total pages
$totoalPages = ceil($allRecrods / $limit);

$page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
$prev = $page - 1;
$next = $page + 1;
// Offset
$paginationStart = ($page - 1) * $limit;
// Limit query
$sql = "SELECT * FROM `tblcontact` LIMIT $paginationStart, $limit";
$contacts = mysqli_query($bdd, $sql);

if (isset($_POST["delete"])) {

    $id = $_POST["delete"];
    echo $id;
    $delete = "DELETE FROM `tblcontact` WHERE contact_id = $id";
    mysqli_query($bdd, $delete);
    unset($_POST["delete"]);
}

//Recherche

if (isset($_POST["valider"])) {
    $search = $_POST["keywords"];
    $sql = "SELECT * FROM `tblcontact` WHERE user_name LIKE '%$search%' OR user_email LIKE '%$search%'";
    $contacts = mysqli_query($bdd, $sql);
    /* $allRecrods = count(mysqli_fetch_assoc($contacts));
    $totoalPages = ceil($allRecrods / $limit); */
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
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Tableau de bord</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="produits_admin.html"><i class="fa fa-shopping-basket"></i><span>Produits</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="user_admin.html"><i class="fa fa-user"></i><span>Utilisateurs</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="commande_admin.html"><i class="fa fa-cart-arrow-down"></i><span>Commandes</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact_admin.html"><i class="fa fa-envelope"></i><span>Contact</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="nouvel_admin.html"><i class="fa fa-users"></i><span>Nouvel administrateur</span></a></li>
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
                        <h3 class="text-dark mb-0">Contact</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <form name="" method="POST" action="#">
                                            <input type="text" name="keywords" value="" placeholder="Recherche par nom" />
                                            <input type="submit" name="valider" value="Rechercher" />
                                        </form>

                                        <div class="table-responsive table table-hover table-bordered results">
                                            <table class="table table-hover table-bordered">
                                                <thead class="bill-header cs">
                                                    <tr>
                                                        <th id="trs-hd-1">ID contact</th>
                                                        <th id="trs-hd-2">Nom</th>
                                                        <th id="trs-hd-3" class="col-lg-3">Email</th>
                                                        <th id="trs-hd-4">Message</th>
                                                        <th id="trs-hd-9">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <?php
                                                    if (mysqli_num_rows($contacts) == 0) {
                                                        echo '
                                                            <tr colspan="5" align="center">
                                                                <td colspan="12">
                                                                    <i class="fa fa-warning"></i>
                                                                    &nbsp; Aucun resultat !!!
                                                                </td>
                                                            </tr>
                                                        ';
                                                    } else {

                                                        while ($row = mysqli_fetch_assoc($contacts)) {
                                                            $id = $row["contact_id"];
                                                            $name = $row["user_name"];
                                                            $email = $row["user_email"];
                                                            $content = $row["content"];

                                                            echo "<tr>
                                                        <td>$id</td>
                                                        <td>$name</td>
                                                        <td>$email</td>
                                                        <td>$content</td>
                                                        <td><button form = 'delete$id' class='btn btn-danger' style='margin-left: 5px;' type='submit'><i class='fa fa-trash' style='font-size: 15px;'></i></button></td>
                                                        <form id='delete$id' method='post'><input type='hidden' name='delete' value = $id></form>
                                                        </tr>";
                                                        }
                                                    }

                                                    ?>


                                                </tbody>
                                            </table>
                                            <nav aria-label="Page navigation example mt-5">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item <?php if ($page <= 1) {
                                                                                echo 'disabled';
                                                                            } ?>">
                                                        <a class="page-link" href="<?php if ($page <= 1) {
                                                                                        echo '#';
                                                                                    } else {
                                                                                        echo "?page=" . $prev;
                                                                                    } ?>">Previous</a>
                                                    </li>
                                                    <?php for ($i = 1; $i <= $totoalPages; $i++) : ?>
                                                        <li class="page-item <?php if ($page == $i) {
                                                                                    echo 'active';
                                                                                } ?>">
                                                            <a class="page-link" href="contact_admin.php?page=<?= $i; ?>"> <?= $i; ?> </a>
                                                        </li>
                                                    <?php endfor; ?>
                                                    <li class="page-item <?php if ($page >= $totoalPages) {
                                                                                echo 'disabled';
                                                                            } ?>">
                                                        <a class="page-link" href="<?php if ($page >= $totoalPages) {
                                                                                        echo '#';
                                                                                    } else {
                                                                                        echo "?page=" . $next;
                                                                                    } ?>">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
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
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>