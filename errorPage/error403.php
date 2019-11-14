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
    <div class="mini-header">
        <a href="../index.php"><img src="../src/img/contactFormImage/cesiFondBlanc.jpg" alt="logoCesi"></a>
    </div>

    <div class="container-fluid">
        <div class="row content-bis">
            <div class="col-md-7">
                <img src="../src/img/errorImage/error403Image.png" alt="imgContact" class="error403Img">
            </div>

            <div class="col-md-5 errorText">
                <h1>YOU SHALL NOT PASS !</h1>
                <p>Nous sommes désolé mais vous n'avez pas acces à cette page.</p>
                <a href="../index.php"><button type="button" class="btn btn-warning">Go back Home</button></a>
            </div>

            <div class="digit">
                <span class="fourDigit">4</span>
                <span class="zeroDigit">0</span>
                <span class="threeDigit">3</span>
            </div>
        </div>
    </div>
    <footer class="container-fluid footer">
        <div class="footerMenu">
            <ul>
                <li><a href="../index/foireAQuestion.php">FAQ</a></li>
                <li><a href="#">CGV</a></li>
                <li><a href="#">Mentions legales</a></li>
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="#">Protections de données</a></li>
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
                <input type="email" id="mail" value="" name="user_mail" class="subscribeInput">
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