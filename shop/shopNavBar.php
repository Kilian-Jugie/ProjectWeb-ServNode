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
        //session_start();
        if (isset($_SESSION['user_log'])) {
            echo "  
                    <div class='col-md-4 pos-icon-shop'>
                        <a href=''><span>Bonjour " . $_SESSION['user_log']->pseudo . "<span></a>
                        <a href='cart.php'><img src='../src/img/shop/shopping-cart.svg' /></a>
                        <a href='../index/login_system/Log_outScript.php'><button type='button' class='btn btn-outline-dark'> Se deconnecter</button></a>
                        <a href='#'><img src=../src/img/headerImage/searchIcon.png' alt='icon de la barre de recherche' /></a>
                    </div>
                ";
        } else {
            echo "<div class='col-md-4 pos-icon-shop'>
            <a href=''><span>Bonjour suceurDeQueue</span></a>
            <a href='cart.php'><img src='../src/img/shop/shopping-cart.svg' /></a>
            <a href='../index/login_system/login.php'><button type='button' class='btn btn-outline-warning'>Se connecter</button></a>
            <a href='#'><img src='../src/img/headerImage/searchIonWhite.png' alt='icon de la barre de recherche' /></a>
        </div>";
        } ?>
    </div>
    <nav class="container-fluid second-shop-nav">
        <div class="row second-shop-nav-row">
            <div class="col-md-8  second-shop-nav-col">
                <span><a href="#">
                        SALE
                    </a>
                </span>
                <span>
                    <a href="#">
                        SWEATS
                    </a>
                </span>
                <span>
                    <a href="#">
                        T-SHIRT
                    </a>
                </span>
                <span>
                    <a href="#">
                        CHEMISE
                    </a>
                </span>
                <span>
                    <a href="#">
                        ACCESSOIRES
                    </a>
                </span>
                <span>
                    <a href="#">
                        GOODIES
                    </a>
                </span>
                <span>
                    <a href="#">
                        PULL
                    </a>
                </span>
                <span>
                    <a href="#">
                        COLLABORATION
                    </a>
                </span>
            </div>
            <div class="col-md-4 second-shop-nav-col-bis">
                <span>
                    <a href="#">
                        NOUVEAUTE
                    </a>
                </span>
            </div>
    </nav>
</div>