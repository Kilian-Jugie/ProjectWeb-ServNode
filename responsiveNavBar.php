<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Cinq élèves de CESI Bordeaux ont voulu repenser un site pour leur BDE dans le cadre d'un projet.">
    <meta http-equiv="pragma" content="no-cache" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="src/css/index.css" />

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


    <link rel="icon" type="image/png" href="src/img/cesiLogo32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="src/img/cesiLogo64.png" sizes="64x64" />
    <link rel="apple-touch-icon" href="src/img/cesiLog32.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="src/img/cesiLogo64.png" sizes="64x64" />
    <title>BDE CESI</title>
</head>
<div class="container-fluid responsive-nav">
    <div class="row action">
        <div class="displaying-action" onClick="cross()">
            <span class="menu-cross" id="cross-life">
            </span>
            <span class="menu-cross" id="cross-metal">
            </span>
        </div>
        <input type="checkbox" id="toggle" />
    </div>
    <div class=" row responsive-menu">
        <div class="col-md-2 responsive-menu-item">
            <span><a href="equipe.php">EQUIPE</a></span>
        </div>
        <div class="col-md-2 responsive-menu-item">
            <span><a href="association.php">CLUB&ASSOC</a></span>
        </div>
        <div class="col-md-2 responsive-menu-item">
            <span><a href="shopIndex.php">BOUTIQUE</a></span>
        </div>
        <div class="col-md-2 responsive-menu-item">
            <span><a href="event.php">EVENT</a></span>
        </div>
        <div class="col-md-2 responsive-menu-item">
            <a href="login.php"><button type='button' class='btn btn-warning'>Se connecter</button></a>
        </div>
        <div class="col-md-2 responsive-menu-item">
            <span><a href="#">VIDE CONNEXION USER</a></span>
        </div>
    </div>

    <script src="src/js/cross.js"></script>
</div>