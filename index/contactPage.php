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
    <div class="mini-header">
        <a href="../index.php"><img src="../src/img/contactFormImage/cesiFondBlanc.jpg" alt="logoCesi"></a>
    </div>
    <div class="container-fluid">
        <div class="row content-contact">
            <div class="col-md-7 contactImg">
                <img src="../src/img/contactFormImage/contactUsImage.png" alt="imgContact">
            </div>
            <div class="col-md-5 contactForm">
                <h1>CONTACTEZ-NOUS</h1>
                <form action="/ma-page-de-traitement" method="post">
                    <div class="spaced">
                        <input type="text" id="name" placeholder="Prénom..." name="user_name">

                        <input type="text" id="name" placeholder="Nom..." name="user_name">
                    </div>
                    <div>
                        <input type="email" id="mail" placeholder="Email..." name="user_mail" class="longInput">
                    </div>
                    <div>
                        <input type="topic" id="topic" placeholder="Sujet..." name="user_topic" class="longInput">
                    </div>
                    <div>
                        <textarea id="msg" name="user_message" placeholder="Entrez votre message..."></textarea>
                    </div>
                    <div>
                        <button type="submit" value="Submit" class="submitButton">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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