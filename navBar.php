<div class="container-fluid header">
    <div class="row">
        <div class="col-md-4 pos-logo">
            <a href="<?php echo $pathEcole ?>index.php"><img src="<?php echo $pathImg ?>src/img/headerImage/cesiLogo.svg" alt="image du logo de cesi" /></a>
        </div>
        <div class="col-md-4 pos-nav-menu">
            <span><a href="<?php echo $pathEcole ?>#ecole">ECOLE</a></span>
            <span><a href="<?php echo $path ?>equipe.php">EQUIPE</a></span>
            <span><a href="<?php echo $path ?>association.php">CLUB&ASSOC</a></span>
            <span><a href="<?php echo $pathForShop ?>shopIndex.php">BOUTIQUE</a></span>
            <span><a href="<?php echo $path ?>event.php">EVENT</a></span>

        </div>
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['user_log'])) {
            echo "
                        <div class='col-md-4 pos-icon'>
                            <a href=''><span class='pseudo'>Bonjour " . $_SESSION['user_log']->pseudo . "<span></a>
                            <a href='{$pathForLog}Log_outScript.php'><button type='button' class='btn btn-outline-dark'> Se deconnecter</button></a>
                            <a href='{$pathEcole}searchBar/searchBar/index.php'><img src={$pathImg}src/img/headerImage/searchIcon.png alt='icon de la barre de recherche' /></a>
                        </div>
                    ";
        } else {
            echo "<div class='col-md-4 pos-icon'>
                <a href=''><span></span></a>
                <a href=' {$pathForLog}login.php'><button type='button' class='btn btn-outline-dark'>Se connecter</button></a>
                <a href='{$pathEcole}searchBar/searchBar/index.php'><img src='{$pathImg}src/img/headerImage/searchIcon.png' alt='icon de la barre de recherche' /></a>
            </div>";
        }
        ?>
    </div>
</div>


<nav class="container-fluid nav-barResponsive" id="nav-barResponsive">
    <div class="row nav-bar-displaying">
        <div class="col-md-2 nav-bar-item">
            <a href="<?php echo $pathEcole ?>#ecole"><span>ECOLE</span></a>
        </div>
        <div class="col-md-2 nav-bar-item">
            <a href="<?php echo $path ?>equipe.php"><span>EQUIPE</span></a>
        </div>

        <div class="col-md-2 nav-bar-item">
            <a href="<?php echo $path ?>association.php"><span>CLUB&ASSOC</span></a>
        </div>

        <div class="col-md-2 nav-bar-item">
            <a href="<?php echo $pathForShop ?>shopIndex.php"><span>BOUTIQUE</span></a>
        </div>
        <div class="col-md-2 nav-bar-item">
            <a href="<?php echo $path ?>event.php"><span>EVENT</span></a>
        </div>
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['user_log'])) {
            echo "        <div class='col-md-1 nav-bar-item'>
            <a href='{$pathForLog}Log_outScript.php'><button type='button' class='btn btn-warning'>Se déconnecter</button></a>
        </div>
        <div class='col-md-1 nav-bar-item'>
            <span class='pseudo'>Bonjour " .  $_SESSION['user_log']->pseudo . "</span>
        </div>
        <div></div>";
        } else {
            echo "<div class='col-md-1 nav-bar-item'>
            <a href='{$pathForLog}login.php'><button type='button' class='btn btn-warning'>Se connecter</button></a>
        </div>";
        }
        ?>
    </div>
</nav>

<div class="container-fluid header-responsive" id="header-numero-dos">
    <div class="row header-responsive-row">
        <a href="<?php echo $pathEcole ?>index.php"><img src="<?php echo $pathImg ?>src/img/contactFormImage/cesiBlancFondTransparant.png" /></a>
    </div>
</div>

<header class="container-fluid">
    <div class=" row displaying-responsiveMenu">
        <div class="col-md-6">
            <div class="action" id="cross-count">
                <span class="menu-cross" id="cross-life"></span>
                <span class="menu-cross" id="cross-metal"></span>
            </div>
        </div>
        <div class="col-md-6 responsive-menu-title">
            <span>MENU</span>
        </div>
    </div>

    <script src="<?php echo $pathEcole ?>src/js/cross.js"></script>
</header>