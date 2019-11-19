<div class="container-fluid header-shop">
    <div class="row">
        <div class="col-md-4 pos-logo-shop">
            <a href="shopIndex.php"><img src="../src/img/cesiBlancTransp.png" alt="image du logo de cesi mais en blanc" /></a>
        </div>
        <div class="col-md-4 pos-nav-menu-shop">
            <span><a href="shopMen.php">HOMME</a></span>
            <span><a href="shopFemme.php">FEMME</a></span>
            <span><a href="stores.php">STORES</a></span>
            <span><a href="../errorPage/construcPage.php">LOOKBOOK</a></span>
            <span><a href="../index.php">BDE</a></span>

        </div>
        <?php
        session_start();
        if (isset($_SESSION['user_log'])) {
            echo "  
                    <div class='col-md-4 pos-icon-shop'>
                        <a href=''><span>Bonjour " . $_SESSION['user_log']->pseudo . "<span></a>
                        <a href='cart.php'><img src='../src/img/shop/shopping-cart.svg' /></a>
                        <a href='../index/login_system/Log_outScript.php'><button type='button' class='btn btn-warning'> Se deconnecter</button></a>
                        <a href='../searchBar/searchBar/index.php'><img src='../src/img/headerImage/searchIonWhite.png' alt='icon de la barre de recherche' /></a>
                    </div>
                ";
        } else {
            echo "<div class='col-md-4 pos-icon-shop'>
            <a href=''><span></span></a>
            <a href='cart.php'><img src='../src/img/shop/shopping-cart.svg' /></a>
            <a href='../index/login_system/login.php'><button type='button' class='btn btn-outline-warning'>Se connecter</button></a>
            <a href='../searchBar/searchBar/index.php'><img src='../src/img/headerImage/searchIonWhite.png' alt='icon de la barre de recherche' /></a>
        </div>";
        } ?>
    </div>
    <nav class="container-fluid second-shop-nav">
        <div class="row second-shop-nav-row">
            <div class="col-md-8  second-shop-nav-col">
                <span><a href="articleTypes.php">
                        SALE
                    </a>
                </span>
                <span>
                    <a href="articleTypes.php">
                        SWEATS
                    </a>
                </span>
                <span>
                    <a href="articleTypes.php">
                        T-SHIRT
                    </a>
                </span>
                <span>
                    <a href="articleTypes.php">
                        CHEMISE
                    </a>
                </span>
                <span>
                    <a href="articleTypes.php">
                        ACCESSOIRES
                    </a>
                </span>
                <span>
                    <a href="articleTypes.php">
                        GOODIES
                    </a>
                </span>
                <span>
                    <a href="articleTypes.php">
                        PULL
                    </a>
                </span>
                <span>
                    <a href="../errorPage/construcPage.php">
                        COLLABORATION
                    </a>
                </span>
            </div>
            <div class="col-md-4 second-shop-nav-col-bis">
                <span>
                    <a href="articleTypes.php">
                        NOUVEAUTE
                    </a>
                </span>
            </div>
    </nav>
</div>

<nav class="container-fluid nav-barResponsive" id="nav-barResponsive">
    <div class="row nav-bar-displaying">
        <div class="col-md-2 nav-bar-item">
            <a href="shopMen.php"><span>HOMME</span></a>
        </div>
        <div class="col-md-2 nav-bar-item">
            <a href="shopFemme.php"><span>FEMME</span></a>
        </div>

        <div class="col-md-2 nav-bar-item">
            <a href="stores.php"><span>STORES</span></a>
        </div>

        <div class="col-md-2 nav-bar-item">
            <a href="../errorPage/construcPage.php"><span>LOOKBOOK</span></a>
        </div>
        <div class="col-md-2 nav-bar-item">
            <a href="../index.php"><span>BDE</span></a>
        </div>
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['user_log'])) {
            echo "        <div class='col-md-1 nav-bar-item'>
            <a href='../index/login_system/Log_outScript.php'><button type='button' class='btn btn-warning'>Se deconnecter</button></a>
        </div>
        <div class='col-md-1 nav-bar-item'>
            <span class='pseudo'>Bonjour " .  $_SESSION['user_log']->pseudo . "</span>
        </div>
        <div></div>";
        } else {
            echo "<div class='col-md-1 nav-bar-item'>
            <a href='../index/login_system/login.php'><button type='button' class='btn btn-warning'>Se connecter</button></a>
        </div>";
        }
        ?>
    </div>
</nav>

<div class="container-fluid header-responsive" id="header-numero-dos">
    <div class="row header-responsive-row">
        <a href="shopIndex.php"><img src="../src/img/contactFormImage/cesiBlancFondTransparant.png" /></a>
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

    <script src="../src/js/cross.js"></script>
</header>