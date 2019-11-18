 <?php
    $get_digit = file_get_contents("http://www.bdecesi-api.ml/api/count_bde/1");
    $get_digit = json_decode($get_digit);
    $digits = (object) [
        "asso" => $get_digit["asso"],
        "members" => $get_digit["member"],
        "event" => $get_digit["event"],
        "followers" => $get_digit["follower"]
    ];

    // require_once "index/download_imgs.php";

    //zipImages();

    //require_once "index/download_event_subs.php";
    //downloadEventSubscribers(10);

    ?>

 <!DOCTYPE html>
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

 <body>
     <?php
        $pathEcole = null;
        $pathImg = null;
        $path = 'index/';
        $pathForShop = 'shop/';
        $pathForLog = 'index/login_system/';
        include 'navBar.php';
        ?>
     <div class="container-fluid">
         <img class="image-size" src="src/img/headerImage/bannerImage.jpg" alt="image de fond du home page du BDE de Cesi" />
         <div class="inner-banner" id="banner-index-momo">
             <div>
                 <span>
                     SITE DU BUREAU DES ELEVES
                 </span>
             </div>
             <div>
                 <span>
                     CESI INGENIEUR
                 </span>
             </div>
             <div>
                 <a href="index/contactPage.php"><button type="button" class="btn btn-outline-warning">CONTACTEZ-NOUS</button></a>
             </div>
         </div>
     </div>
     <section class="container-fluid">
         <div class="space">
         </div>
     </section>
     <section>
         <div class="container-fluid" id="ecole">
             <div class="row">
                 <div class="col-md-5">
                     <div class="school-background">
                     </div>
                 </div>
                 <div class="col-md-7">
                     <div class="displaying-school-text">
                         Le CESI est une école d'ingénieur certifié par le CTI. Sa différence majeur vis-à-vis des autres écoles est
                         a modularité du cursus qu'on peut y suivre et la méthode d'apprentissage. En effet, au fur et a mesure de leur scolarité
                         es eleves, en fonction de leur envie futur vont pouvoir choisir des spécialisations. Ce choix d'enseignement permet aux
                         eleves d'etre parfaitement adapté au domaine qu'il visent et de limiter l'apprentissage de domaine inutile proffessionellement
                         parlant. Enfin la methode PBL est une méthode d'apprentissage consistant à mettre les eleves en face de probleme et de stimuler
                         leur envie de rechercher les solutions a ce probleme dans le but de leur apprendre a apprendre par eux meme. En effet cette
                         competence est trés utiles en entreprise dans des domaines aussi dynamique que l'informatique.
                     </div>
                 </div>
                 <div class="container-fluid momo">
                     <div class="displaying-title">
                         <span>
                             NOTRE ECOLE
                         </span>
                     </div>
                     <div class="displaying-image">
                         <img src="src/img/schoolSection/cesiLogo.png" class="resize-logo-image" alt="image du logo de CESI" />
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
         <div class="container-fluid">
             <div class="row">
                 <div class=" col-md-8 pos-whoAreWe">
                     <div class="title-whoAreWe">
                         <span>
                             QUI SOMMES-NOUS?
                         </span>
                     </div>
                     <div class="displaying-whoAreWe">
                         Le CESI est une école d'ingénieur certifié par le CTI. Sa différence majeur vis-à-vis des autres écoles est
                         a modularité du cursus qu'on peut y suivre et la méthode d'apprentissage. En effet, au fur et a mesure de leur scolarité
                         es eleves, en fonction de leur envie futur vont pouvoir choisir des spécialisations. Ce choix d'enseignement permet aux
                         eleves d'etre parfaitement adapté au domaine qu'il visent et de limiter l'apprentissage de domaine inutile proffessionellement
                         parlant. Enfin la methode PBL est une méthode d'apprentissage consistant à mettre les eleves en face de probleme et de stimuler
                         leur envie de rechercher les solutions a ce probleme dans le but de leur apprendre a apprendre par eux meme. En effet cette
                         competence est trés utiles en entreprise dans des domaines aussi dynamique que l'informatique.
                     </div>
                 </div>
                 <div class="col-md-4 displaying-whoAreWeImage">
                     <img class="resize-whoAreWeImage" src="src/img/whoAreWe/fraternity.png" alt="image de notre fraternité française ou BDE" />
                 </div>
             </div>
         </div>
     </section>
     <section class="container-fluid">
         <div class="space">
         </div>
     </section>
     <section class="container-fluid displaying-dashBoard">
         <div class="container dashboard">
             <div class="row first">
                 <div class="col-md-3 orange-box">
                     <div>
                         <span>
                             <?php echo $digits->asso ?>
                         </span>
                     </div>
                     <div>
                         <span>
                             Associations
                         </span>
                     </div>
                 </div>
                 <div class="col-md-3 white-box">
                     <div>
                         <span>
                             <?php echo $digits->members ?>
                         </span>
                     </div>
                     <div>
                         <span>
                             Membres du BDE
                         </span>
                     </div>
                 </div>
                 <div class="col-md-6 title-dashBoard">
                     <div>
                         <span>
                             LE BDE EN QUELQUES CHIFFRES
                         </span>
                     </div>
                 </div>
             </div>
             <div class="row second">
                 <div class="col-md-3 white-box">
                     <div>
                         <span>
                             <?php echo $digits->event ?>
                         </span>
                     </div>
                     <div>
                         <span>
                             Evenements organisés
                         </span>
                     </div>
                 </div>
                 <div class="col-md-3">
                 </div>
                 <div class="col-md-3 orange-box">
                     <div>
                         <span>
                             <?php echo $digits->followers ?>
                         </span>
                     </div>
                     <div>
                         <span>
                             Inscrits
                         </span>
                     </div>
                 </div>
                 <div class="col-md-3 white-box">
                     <div>
                         <span>
                             5
                         </span>
                     </div>
                     <div>
                         <span>
                             Partenaires
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
     <footer class="container-fluid footer">
         <div class="footerMenu">
             <ul>
                 <li><a href="index/foireAQuestion.php">FAQ</a></li>
                 <li><a href="index/cgv.php">CGV</a></li>
                 <li><a href="index/legalNotice.php">Mentions legales</a></li>
                 <li><a href="index/cpds.php">Politique de confidentialité</a></li>
                 <li><a href="index/cpds.php">Protections de données</a></li>
                 <li><a href="index/contactPage.php">Contact</a>
             </ul>
             </ul>
         </div>
         <div class="socialMedia">
             <a href="https://www.facebook.com/bdecesibdx/" target="_blank" rel="noopener noreferrer"><img src="src/img/logoImage/facebookLogo.png" alt="facebookLogo" class="fbColor"></a>
             <a href="https://bdecesibordeaux.fr/fr/" target="_blank" rel="noopener noreferrer"><img src="src/img/logoImage/twitterLogo.png" alt="twitterLogo" class="twColor"></a>
             <a href="https://www.instagram.com/bde_cesi_bdx/?hl=fr" target="_blank" rel="noopener noreferrer"><img src="src/img/logoImage/instagramLogo.png" alt="instagramLogo" class="instaColor"></a>
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
     <div class="alert text-center cookiealert cookie-alert-bis show" role="alert">
         <b>Tu aimes les cookies?</b> &#x1F36A; Nous les utilisons pour que tu aies une meilleure experience du site <a href="https://cookiesandyou.com/" target="_blank">En savoir plus</a>

         <button type="button" class="btn btn-warning btn-sm acceptcookies" aria-label="Close">
             Je mange
         </button>

         <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
     </div>
 </body>

 </html>