    <div class="container-fluid header">
        <div class="row">
            <div class="col-md-4 pos-logo">
                <img src="src/img/headerImage/cesiLogo.svg" alt="image du logo de cesi" />
            </div>
            <div class="col-md-4 pos-nav-menu">
                <span><a href="#ecole">ECOLE</a></span>
                <span><a href="index/equipe.php">EQUIPE</a></span>
                <span><a href="index/association.php">CLUB&ASSOC</a></span>
                <span><a href="shop/shopIndex.php">BOUTIQUE</a></span>
                <span><a href="index/event.php">EVENT</a></span>

            </div>
            <?php 
            session_start();
            if(isset($_SESSION['user_log'])){
                echo "
                    <div class='col-md-4 pos-icon'>
                        <p>Bonjour ".$_SESSION['user_log']->pseudo."  <p>
                        <a href='index/login_system/log_outScript.php'><button type='button' class='btn btn-outline-dark'> Se deconnecter</button></a>
                    </div>
                ";
            }else{
            echo "<div class='col-md-4 pos-icon'>
                <a href='index/login_system/login.php'><button type='button' class='btn btn-outline-dark'>Se connecter</button></a>
                <a href='#'><img src='src/img/headerImage/searchIcon.png' alt='icon de la barre de recherche' /></a>
            </div>"; }?>
        </div>
    </div>