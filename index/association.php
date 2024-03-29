<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Cinq élèves de CESI Bordeaux ont voulu repenser un site pour leur BDE dans le cadre d'un projet.">
    <meta http-equiv="pragma" content="no-cache" />

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


    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <div class="container-fluid displaying-association">
        <h1>LES ASSOCIATIONS</h1>
        <div class="row content">
            <div class="col-md-7">
                <img src="../src/img/associationImg/ballIsLifeImage.png" alt="imgContact" class="associationImg">
            </div>

            <div class="col-md-5 associationText">
                <h2>BALL IS LIFE</h2>
                <p>Hey ! C'est Aurélien, le responsable de l'association de basketball ! On fait principalement du basket mais on s'amuse aussi à jouer du pied de temps en temps. On y va en début d'après-midi le jeudi pendant la vie asso. On va au complexe sportif près du stade MATMUT-ATLANTIQUE. Donc si tu aime te détendre en courant après un ballon n'hésite pas a nous rejoindre. Pas de compétition pas de jugement juste du fun !</p>
                <div><a href="#">Accéder à l'association</a></div>
            </div>
        </div>

        <div class="row reverseContent">
            <div class="col-md-7">
                <img src="../src/img/associationImg/programmingImage.png" alt="imgContact" class="associationImg">
            </div>

            <div class="col-md-5 associationText">
                <h2>PROGRAMMING</h2>
                <p>Bonjour ! C'est Julie, la responsable de l'association de programmation ! On y fait des tonnes de mini-projet dans pleins de langages différents. Ca se déroule de 13h30 à 17h tout les jeudis. Tout ceci se déroule en salle 104 au premier étage du batiment. Enfin bref ! Si tu kiffe faire du développement que ce soit sous Java, Angular ou même cobol ramène-toi ! on pourra même faire des GameJam !</p>
                <div><a href="#">Accéder à l'association</a></div>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-7">
                <img src="../src/img/associationImg/root_meImage.png" alt="imgContact" class="associationImg">
            </div>

            <div class="col-md-5 associationText">
                <h2>R00T-M3</h2>
                <p>H3110 ! C'est Eliott, le responsable de l'association R00T-M3 ! Ici on hack toutes sorte de trucs, du serveur au raspberry Py en passant par le graal des sites de hackers "R00T-M3". On s'y met dés 13h30 et on brute-force à tour de bras jusqu'a 17h ! Rendez-vous en salle 105 le jeudi si tu as envie de te la jouer F_Society. Si tu as lu jusqu'ici c'est que tu dois être féru de cybersécurité alors viens donc DDos quelque serveurs avec nous. A l'occasion on se fera même un ctf ou deux!</p>
                <div><a href="#">Accéder à l'association</a></div>
            </div>
        </div>

        <div class="row reverseContent">
            <div class="col-md-7">
                <img src="../src/img/associationImg/eloquenceImage.png" alt="imgContact" class="associationImg">
            </div>

            <div class="col-md-5 associationText">
                <h2>ELOQUENCE</h2>
                <p>Salut ! C'est Benjamin, le responsable de l'association eloquence ! Dans notre association on apprend à discuter, débattre, prendre confiance en soi, tout ca dans le calme et la bonne humeur ! On Commence habituellement vers 14h salle 108 tout les jeudis ou presque, alors soit au rendez-vous pour apprendre à parler en usant de ton charisme, ta confiance et ton vocabulaire. Donc si tu préfere le calme et l'enrichissement de l'esprit c'est chez nous que ca se passe. On organise aussi des débats d'éloquences</p>
                <div><a href="#">Accéder à l'association</a></div>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-7">
                <img src="../src/img/associationImg/gamingImage.png" alt="imgContact" class="associationImg">
            </div>

            <div class="col-md-5 associationText">
                <h2>GAMING</h2>
                <p>Hej ! C'est Aart, le responsable de l'association de gaming ! Avec nous c'est de la détente et des délires. On se met tous devant un écran et on fait plein de jeux de combats ou coop ensemble tout en se marrant (et en rageant aussi). On se réuni en salle 109 chaque jeudis à partir de 13h30 pour geeker un coup et décompresser. On fait aussi des jeux de rôles, libre à toi d'en apporter pour qu'on y joue ensemble, c'est sur qu'on va s'éclater. Du coup, si tu cherches un mates pour faire des games un jeudi aprem viens chez nous !</p>
                <div><a href="#">Accéder à l'association</a></div>
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

</html>