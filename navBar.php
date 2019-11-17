<div class="container-fluid header" style="display:block">
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
        session_start();
        if (isset($_SESSION['user_log'])) {
            echo "
                    <div class='col-md-4 pos-icon'>
                        <a href=''><span class='pseudo'>Bonjour " . $_SESSION['user_log']->pseudo . "<span></a>
                        <a href='{$pathForLog}Log_outScript.php'><button type='button' class='btn btn-outline-dark'> Se deconnecter</button></a>
                        <a href='#'><img src={$pathImg}src/img/headerImage/searchIcon.png alt='icon de la barre de recherche' /></a>
                    </div>
                ";
        } else {
            echo "<div class='col-md-4 pos-icon'>
            <a href=''><span></span></a>
            <a href=' {$pathForLog}login.php'><button type='button' class='btn btn-outline-dark'>Se connecter</button></a>
            <a href='#'><img src='{$pathImg}src/img/headerImage/searchIcon.png' alt='icon de la barre de recherche' /></a>
        </div>";
        } ?>
    </div>
</div>