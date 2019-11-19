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

    <div class="container-fluid legal-notice">
        <div class="content-legal-notice bordered">

            <h1>Mentions Légales</h1>
            <p>Le site <a href="http://bdecesi.ml">http://bdecesi.ml</a> est la propriété du BDE Cesi Bordeaux, Association loi 1901, dont le siège social est situé au 264 Boulevard Godard – 33300 Bordeaux.</p>

            <p>Tél. : +33 (0)6 51 80 45 52</p>
            <p>Courriel : contact@bdecesi.ml</p>

            <p>Directeur de publication :</p>
            <p>Léo Chazeau , Président du BDE</p>

            <p>Communication :</p>
            <p>Blandin Rémi, Delpon Eliott, Jugie Kilian, Donatien Eliott, Dallaporta Timoté.</p>

            <p>Les prestataires qui ont conçu le site <a href="http://bdecesi.ml">http://bdecesi.ml</a> sont :</p>

            <p>Eleve du cesi</p>
            <p>264 Boulevard Godard – 33300 Bordeaux – <a href="http://bdecesi.ml">http://bdecesi.ml</a></p>

            <p>Crédits Photos :</p>
            <p>Mathieu Berger (photos noires et blanches)</p>
            <p>Léa Ragot (photos couleurs)</p>
            <p>DR</p>

            <p>Dans la mesure où, en votre qualité de consommateur, vous avez conclu un contrat en ligne avec la société Bureaux des étudiants Cesi
                Bordeaux, vous avez accès à la plateforme de résolution des litiges en ligne (« plateforme ODR ») mise en place par la Commission
                européenne pour la résolution extrajudiciaire des litiges juridiques pouvant survenir avec la société Bureaux des étudiants Cesi Bordeaux.
                Vous pouvez accéder à la plateforme ODR à l'adresse Internet <a href="http://ec.europa.eu/odr">http://ec.europa.eu/odr</a>.</p>
        </div>
    </div>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <footer class="container-fluid footer">
        <div class="footerMenu">
            <ul>
                <li><a href="../index/foireAQuestion.php">FAQ</a></li>
                <li><a href="../index/cgv.php">CGV</a></li>
                <li><a href="legalNotice.php">Mentions legales</a></li>
                <li><a href="cpds.php">Politique de confidentialité</a></li>
                <li><a href="cpds.php">Protections de données</a></li>
                <li><a href="../index/contactPage.php">Contact</a>
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