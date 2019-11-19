<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Cinq élèves de CESI Bordeaux on voulu réaspanser un site pour leur BDE dans le cadre d'un projet.">
    <meta http-equiv="pragma" content="no-cache" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="../src/css/index.css" />

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>BDE CESI</title>
</head>

<body>
    <?php
    $pathEcole = '../';
    $pathImg = '../';
    $path = '';
    $pathForShop = '../shop/';
    $pathForLog = '../index/login_system/';
    include '../navBar.php';
    ?>

    <!-- don't delete this cause it solve an issue of relative position on displaying-Faq -->
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>


    <div class="container-fluid">
        <div class="team-header">
            <div>
                <span>
                    FACE A FACE AVEC
                </span>
            </div>
            <div>
                <span>
                    BDECESI
                </span>
            </div>
        </div>
    </div>

    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 team-text">
                    <div class="displaying-school-team-text">
                        Le Cesi est une école nationale, internationale même. En effet il existe plus d’une vingtaine de centre situé partout
                        en France et même hors du territoire national (Moyen-Orient et bientôt d’autres Zones du monde). De plus le cursus est partagé
                        entre les centres ce qui rend tous les centres interconnectés. Ce site est la concrétisation de ce lien viscéral et unique au
                        Cesi et permet donc la mutualisation des BDE et une augmentation drastique des flux entre les BDE intraCampus qui est et sera
                        bénéfique sur le long terme.
                    </div>
                </div>
                <div class="col-md-4 team-block">
                    <div class="team-background">
                    </div>
                </div>
                <div class="container-fluid momo">
                    <div class="team-displaying-title">
                        <span>
                            AUX QUATRE COINS DE LA FRANCE
                        </span>
                    </div>
                    <div class="team-displaying-image">
                        <img src="../src/img/equiImage/bigTown.png" class="team-resize-logo-image" alt="image du logo de CESI" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 team-list-displaying">
                    <span><a href="../shop/stores.php#bordeaux">Bordeaux</a></span>
                    <span><a href="../shop/stores.php#paris">Paris</a></span>
                    <span><a href="../shop/stores.php#lyon">Lyon</a></span>
                    <span><a href="../shop/stores.php#marseille">Marseille</a></span>
                </div>
                <div class="col-md-8">
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="space">
        </div>
    </section>

    <section class="container-fluid displaying-title-whoWeAre">
        <div class="title-whoWeAre">
            <span>
                QUI SOMMES-NOUS?
            </span>
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <section>
        <div class="container-fluid displaying-image-whoWeAre">
            <div class="container center-teamate">
                <div class="row displaying-teamate">
                    <div class="col-md-6 resize-image-teamate ">
                        <img src="../src/img/logoImage/luffy.png" />
                        <div>
                            <span>
                                Léo Delpon
                            </span>
                            <span>
                                Designer UX/UI & Front-end Développeur
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 resize-image-teamate ">
                        <img src="../src/img/logoImage/zoro.png" />
                        <div>
                            <span>
                                Killian Jugie
                            </span>
                            <span>
                                Back-end Développeur
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <section>
        <div class="container-fluid displaying-image-whoWeAre">
            <div class="container center-teamate">
                <div class="row displaying-teamate">
                    <div class="col-md-6 resize-image-teamate">
                        <img src="../src/img/logoImage/franky.png" id="specific-resize" />
                        <div>
                            <span>
                                Rémi Blandin
                            </span>
                            <span>
                                Chef de projet & Front-end Développeur
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 resize-image-teamate ">
                        <img src="../src/img/logoImage/sanji.png" />
                        <div>
                            <span>
                                Eliott Donatien
                            </span>
                            <span>
                                Back-end Développeur
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <section>
        <div class="container-fluid displaying-teamate-bis">
            <div class="container">
                <div class="resize-image-teamate-bis">
                    <img src="../src/img/logoImage/usopp.png" />
                    <div>
                        <span>
                            Timothé Delporte
                        </span>
                        <span>
                            Back-end Développeur & Administrateur BDD
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>

    <section>
        <div class="container-fluid displaying-pourquoi-bde">
            <div class=" row displaying-pourquoi-bde-row">
                <div class="col-md-8">
                    <div class="color-pourquoi-bde-col">
                    </div>
                </div>
                <div class="col-md-4">
                </div>
                <div class="container-fluid momo">
                    <div class="team-displaying-title-pourquoi">
                        <span>
                            POURQUOI LA BOUTIQUE?
                        </span>
                    </div>
                    <div class="team-displaying-image-team">
                        <img src="../src/img/equiImage/coding.png" class="team-resize-logo-image" alt="image du logo de CESI" />
                    </div>
                </div>
            </div>
            <div class="container displaying-block-container">
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4 color-black-pourquoi-bde-col">
                        <span>
                            L'objectif de la réalisation du site E-Commerce ainsi que la vitrine était de développer nos compétences en langag Web
                            (front-end/ back-end). Néanmoins, le but principal de ce dernier est d'aider à l'amélioration de la visibilité du BDE
                            de CESI sur internet. Il permet également la généralisation des achats/events/organisations au sein d'un même campus.
                        </span>
                    </div>
                </div>
            </div>
    </section>

    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row displaying-tools">
                <div class="col-md-6 displaying-tools-col">
                    <div>
                        <span>
                            DES OUTILS AU SERVICE DE NOTRE TALENT
                        </span>
                    </div>
                    <div>
                        <span>
                            Lorsque nous ne sommes pas en “sprint”, il est important pour nous de
                            garder une proximité entre nous et de rester le plus efficace possible. Pour
                            cela nous utilisons différents outils qui nous permettent, entre autres,
                            d’encadrer les projets, de laisser la possibilité au client de commenter les
                            travaux, et d’organiser des conférences call.
                        </span>
                    </div>
                    <div>
                        <span>
                            Nous utilisons :
                        </span>
                        <span>
                            <span>
                                <img src="../src/img/equiImage/postman.png" alt="image de postman" />
                            </span>
                            <span>
                                <img src="../src/img/equiImage/discord.svg" alt="image de discord" />
                            </span>
                            <span>
                                <img src="../src/img/equiImage/github.svg" alt="image de discord" />
                            </span>
                            <span>
                                <img src="../src/img/equiImage/vscode.png" alt="image de vscode" />
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 displaying-tools-col-bis">
                    <div class="displaying-tools-col-ter">
                        <img src="../src/img/equiImage/tools.png" alt="image qui représente l'ensemble des tools qu'on utilise" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>

    <footer class="container-fluid footer">
        <div class="footerMenu">
            <ul>
                <li><a href="foireAQuestion.php">FAQ</a></li>
                <li><a href="cgv.php">CGV</a></li>
                <li><a href="legalNotice.php">Mentions legales</a></li>
                <li><a href="cpds.php">Politique de confidentialité</a></li>
                <li><a href="cpds.php">Protections de données</a></li>
                <li><a href="contactPage.php">Contact</a>
            </ul>
            </ul>
        </div>
        <div class="socialMedia">
            <a href="https://www.facebook.com/bdecesibdx/" target="_blank" rel="noopener noreferrer"><img src="../src/img/logoImage/facebookLogo.png" alt="facebookLogo" class="fbColor"></a>
            <a href="https://bdecesibordeaux.fr/fr/" target="_blank" rel="noopener noreferrer"><img src="../src/img/logoImage/twitterLogo.png" alt="twitterLogo" class="twColor"></a>
            <a href="https://www.instagram.com/bde_cesi_bdx/?hl=fr" target="_blank" rel="noopener noreferrer"><img src="../src/img/logoImage/instagramLogo.png" alt="instagramLogo" class="instaColor"></a>
        </div>
        <div class="subscribeForm">
            <form action="/ma-page-de-traitement" method="post">
                <label for="email" class="subscribeText">Subscribe !</label>
                <input type="email" id="mail" placeholder="ecris ton mail..." name="user_mail" class="subscribeInput">
                <button type="submit" value="Submit" class="submitButton">S'inscrire</button>
            </form>
        </div>
    </footer>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
</body>