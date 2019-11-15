<DOCTYPE html>
    <html>

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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="../src/css/index.css" />

        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


        <link rel="icon" type="image/png" href="src/img/cesiLogo32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="src/img/cesiLogo64.png" sizes="64x64" />
        <link rel="apple-touch-icon" href="src/img/cesiLog32.png" sizes="32x32" />
        <link rel="apple-touch-icon" href="src/img/cesiLogo64.png" sizes="64x64" />
        <title>BDE CESI</title>
    </head>

    <body>
        <div class="container-fluid header">
            <div class="row">
                <div class="col-md-4 pos-logo">
                    <img src="../src/img/cesiBlancTransp.png" alt="image du logo de cesi mais en blanc" />
                </div>
                <div class="col-md-4 pos-nav-menu">
                    <span><a href="#">HOMME</a></span>
                    <span><a href="#">FEMME</a></span>
                    <span><a href="#">STORES</a></span>
                    <span><a href="#">LOOKBOOK</a></span>
                    <span><a href="#">BDE</a></span>

                </div>
                <div class="col-md-4 pos-icon">
                    <a href="index/login.php"><button type="button" class="btn btn-outline-dark">Se connecter</button></a>
                    <a href="#"><img src="../src/img/headerImage/searchIcon.png" alt="icon de la barre de recherche" /></a>
                </div>
            </div>
        </div>
        <div class="container-fluid shop-banner">
            <img class="image-size image-banner" src="../src/img/shop/bannerHome.jpg" alt="image de fond du home page du BDE de Cesi" />
            <div class="inner-banner shop-inner-banner">
                <div>
                    <span>
                        BUREAU DES ELEVES BOUTIQUE
                    </span>
                </div>
                <div>
                    <span>
                        CESI INGENIEUR
                    </span>
                </div>
                <div>
                    <a href="index/contactPage.php"><button type="button" class="btn btn-outline-warning">SHOP NOW</button></a>
                </div>
                <div>
                    <a href="index/contactPage.php"><button type="button" class="btn btn-outline-warning">LEARN MORE</button></a>
                </div>
            </div>
        </div>

        <footer class="container-fluid footer">
            <div class="footerMenu">
                <ul>
                    <li><a href="../index/foireAQuestion.php">FAQ</a></li>
                    <li><a href="../index/cgv.php">CGV</a></li>
                    <li><a href="../index/legalNotice.php">Mentions legales</a></li>
                    <li><a href="../index/cpds.php">Politique de confidentialité</a></li>
                    <li><a href="../index/cpds.php">Protections de données</a></li>
                    <li><a href="../index/contactPage.php">Contact</a>
                </ul>
                </ul>
            </div>
            <div class="socialMedia">
                <a href="https://www.facebook.com/bdecesibdx/" target="_blank" rel="noopener noreferrer"><img src="../src/img/logoImage/facebookLogo.png" alt="facebookLogo" class="fbColor"></a>
                <a href="https://bdecesibordeaux.fr/fr/" target="_blank" rel="noopener noreferrer"><img src="../src/img/logoImage/twitterLogo.png" alt="twitterLogo" class="twColor"></a>
                <a href="https://www.instagram.com/bde_cesitoulouse/" target="_blank" rel="noopener noreferrer"><img src="../src/img/logoImage/instagramLogo.png" alt="instagramLogo" class="instaColor"></a>
            </div>
            <div class="subscribeForm">
                <form action="/ma-page-de-traitement" method="post">
                    <label for="email" class="subscribeText">Subscribe !</label>
                    <input type="email" id="mail" placeholder="" name="user_mail" class="subscribeInput">
                    <button type="submit" value="Submit" class="submitButton">Submit</button>
                </form>
            </div>
        </footer>
        <section class="container-fluid">
            <div class="space">
            </div>
        </section>
    </body>

    </html>