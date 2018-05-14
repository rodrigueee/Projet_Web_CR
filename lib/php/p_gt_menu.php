<?php
if (isset($_SESSION['client'])) {
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="menu-demo2">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php?page=accueil">Accueil</a>             
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php?page=produits">Produits</a>
                    <ul>
                        <li><a href="./index.php?page=produitsfoot">Football</a></li>
                        <li><a href="./index.php?page=produitstennis">Tennis</a></li>
                        <li><a href="./index.php?page=produitscycli">Cycliste</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="./index.php?page=contact">Contact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="#">Profil</a>
                    <ul>
                        <li><a href="#">Mon profil</a></li>
                        <li><a href="./admin/pages/disconnect.php">Deconnexion</a></li>                    
                    </ul>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Recherche">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="./admin/images/loupe.jpg" alt="loupe"></button>
            </form>
        </div>
    </nav>
<?php } else {
    ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="menu-demo2">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php?page=accueil">Accueil</a>             
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./index.php?page=produits">Produits</a>
                <ul>
                    <li><a href="./index.php?page=produitsfoot">Football</a></li>
                    <li><a href="./index.php?page=produitstennis">Tennis</a></li>
                    <li><a href="./index.php?page=produitscycli">Cycliste</a></li>
                    <li><a href="#">...</a></li>
                </ul>
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="./index.php?page=contact">Contact</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="./index.php?page=inscription">Inscription</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="#">Connexion</a>
                <ul>
                    <li><a href="./admin/index.php">Administration</a></li>
                    <li><a href="./index.php?page=membre">Membre</a></li>
                </ul>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Recherche">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="./admin/images/loupe.jpg" alt="loupe"></button>
        </form>
    </div>
</nav>
<?php }
?>