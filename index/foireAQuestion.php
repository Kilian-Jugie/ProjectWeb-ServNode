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
    <div class="container-fluid header">
        <div class="row">
            <div class="col-md-4 pos-logo">
                <a href="../index.php"><img src="../src/img/headerImage/cesiLogo.svg" alt="image du logo de cesi" /></a>
            </div>
            <div class="col-md-4 pos-nav-menu">
                <span><a href="../index.php#ecole">ECOLE</a></span>
                <span><a href="equipe.php">EQUIPE</a></span>
                <span><a href="#">CLUB&ASSOC</a></span>
                <span><a href="#">BOUTIQUE</a></span>
                <span><a href="#">EVENT</a></span>

            </div>
            <div class="col-md-4 pos-icon">
                <a href="#"><button type="button" class="btn btn-outline-dark">Se connecter</button></a>
                <a href="#"><img src="../src/img/headerImage/searchIcon.png" alt="icon de la barre de recherche" /></a>
            </div>
        </div>
    </div>

    <!-- don't delete this cause it solve an issue of relative position on displaying-Faq -->
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>

    <div class="container-fluid displaying-Faq">
        <div>
            <img src="../src/img/faqImage/faqImage.png" />
        </div>
    </div>

    <div class="container-fluid displaying-questions">
        <section class="container">
            <h4>
                Achat
            </h4>
            <div id="accordion">
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link color-faq" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Quel est le montant minimum d'une commande ?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Le montant minimum d'une commande est le montant minimum qu'il faut atteindre pour déclencher une commande.
                            Il n'y a pas de montant minimum! La seule chose à prendre en compte c'est que les frais de ports en-dessous
                            de 69 euros ne sont pas gratuit.

                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Puis-je commander par téléphone ou par mail?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Nous sommes désolé, mais les commandes par téléphone ou par email ne sont pas possible. Nous avons créé un site web pour
                            faciliter les transactions et les rendre plus sécurisé. Si vous rencontrez des difficultés lors de votre commande en ligne,
                            n'hésitez pas à vous adresser à notre service client qui vous expliquera les étapes à suivre.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Puis-je réserver des articles en ligne ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            La réservation d'articles en ligne n'est malheureusement pas possible.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Suis-je obligé d'acheter tous les articles que j'ai sélectionnés dans mon panier ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Si vous avez placé des articles dans votre panier, vous n'êtes en aucun cas contraint de les acheter. L'achat en ligne
                            fonctionne de la même manière qu'un achat réel. C’est-à-dire qu'il est possible de placer des articles dans votre panier
                            et de les supprimer ensuite. C'est seulement à la caisse que vous décidez des articles que vous souhaitez garder.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Où acheter des coupons cadeaux BDECesi ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Pour obtenir des coupons cadeaux, vous pouvez participer aux nombreux jeux concours internes organisés par le bureau des
                            élèves. Il est également possible de les gagner en "hackant" ce site. Petit clin d'oeil aux plus perspicaces !
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Comment puis-je savoir que ma commande a bien été pris en compte ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            Suite à votre commande, vous recevrez dans un intervalle de temps d'une heure maximum un email de confirmation qui assure
                            que votre commande a bien été prise en compte. Si vous ne recevez pas cet email, contactez directement notre service client .
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Suis-je obligé d'acheter tous les articles que j'ai sélectionnés dans mon panier ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            Si vous avez placé des articles dans votre panier, vous n'êtes en aucun cas contraint de les acheter. L'achat en ligne
                            fonctionne de la même manière qu'un achat réel. C’est-à-dire qu'il est possible de placer des articles dans votre panier
                            et de les supprimer ensuite. C'est seulement à la caisse que vous décidez des articles que vous souhaitez garder.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>






    <div class="container-fluid displaying-questions">
        <section class="container">
            <h4>
                Modification ou annulation d'une commande
            </h4>
            <div id="accordion">
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingEight">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                Comment puis-je annuler ma commande ?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordion">
                        <div class="card-body">
                            Vous pouvez annuler votre commande tant que votre paquet n'a pas quitté nos entrepôts. Pour ce faire,
                            il vous suffit d'écrire un email à l'attention de notre service client dans lequel vous indiquez le numéro de votre
                            commande et le fait que vous souhaitez annuler cette commande. Vous serez remboursé dans un délai de 7 jours ouvrés via le
                            même moyen de paiement que celui que vous avez utilisé pour réaliser votre commande.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingNine">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Puis-je changer mon adresse de livraison ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                        <div class="card-body">
                            Il est possible de changer votre adresse de livraison tant que votre paquet n'a pas quitté nos entrepôts. Pour ce faire,
                            il vous suffit d'envoyer un email à notre service client dans lequel vous précisez le numéro de votre commande et votre
                            nouvelle adresse de livraison.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingTen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Puis-je modifier ma commande ou ajouter des articles ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                        <div class="card-body">
                            Pour des raisons techniques, il n'est pas possible de réaliser de modifications sur votre commande. Par contre,
                            tant que votre paquet n'a pas quitté nos entrepôts, l'annulation de votre commande est possible. Dans ce cas, vous
                            pouvez commander à nouveau les bons articles sur notre boutique en ligne. Pour annuler votre commande, veuillez écrire à
                            notre service client un email dans lequel vous précisez le numéro de votre commande et ajoutez que vous souhaitez annuler
                            cette dernière. Vous serez remboursé dans un délai de 7 jours ouvrés par le même moyen de paiement que vous avez utilisé
                            pour effectuer votre commande.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <div class="container-fluid displaying-questions">
        <section class="container">
            <h4>
                Paiement
            </h4>
            <div id="accordion">
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingEleven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                Comment puis-je payer ?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseEleven" class="collapse show" aria-labelledby="headingEleven" data-parent="#accordion">
                        <div class="card-body">
                            Plusieurs choix s'offrent à vous. Vous pouvez payer par carte cadeau, carte de crédit, paypal depuis notre site,
                            ou vous pouvez payer en liquide, chèque si vous êtes étudiant à l'école du CESI.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingTwelve">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                Puis-je payer avec une carte de crédit étrangère ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                        <div class="card-body">
                            La direction du bureau des élèves vous indique que nous ne faisons aucune distinction concernant l'origine de vos
                            cartes. Vive le Melting Pot.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingThirteen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                Puis-je payer avec une carte de débit ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion">
                        <div class="card-body">
                            Nous n'acceptons malheureusement pas la carte de débit comme moyen de paiement.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingFourteen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                Sous quelle forme vais-je recevoir la facture ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion">
                        <div class="card-body">
                            Vous recevrez la confirmation de commande par email puis la facture dans le paquet lors de la livraison de votre
                            commande ainsi qu'un bon de retour si vous faites parti de l'association BDE.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container-fluid displaying-questions">
        <section class="container">
            <h4>
                Envoi
            </h4>
            <div id="accordion">
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingFifteen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                                A combien s'élève les frais d'envoi ?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFifteen" class="collapse show" aria-labelledby="headingFifteen" data-parent="#accordion">
                        <div class="card-body">
                            Les frais d'envoi sont à 8.90 EUR et gratuit à partir de 69.00 EU d'achat.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingSixteen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                Quels sont les délais de livraison ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion">
                        <div class="card-body">
                            Environs 15 jours.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingSeventeen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                Que se passe-t-il si je ne suis pas chez moi lors de la livraison ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordion">
                        <div class="card-body">
                            Vous ne serez pas chez vous lors de la livraison de votre paquet ? Aucun problème ! Le transporteur
                            fait une seconde tentative de livraison ou bien dépose votre paquet dans le bureau d'une filiale
                            proche de chez vous. Une fois que le paquet a été déposé auprès d'une filiale, vous disposez de 7
                            jours ouvrés pour le récupérer. N'oubliez pas de vous munir de votre carte d'identité ainsi que du
                            numéro d'envoi pour récupérer votre commande.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="container-fluid displaying-questions">
        <section class="container">
            <h4>
                Bureau des élèves
            </h4>
            <div id="accordion">
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingEighteen">
                        <h5 class="mb-0">
                            <button class="btn btn-link  collapsed color-faq" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                                Comment rejoindre le bureau des élèves ?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseEighteen" class="collapse show" aria-labelledby="headingEighteen" data-parent="#accordion">
                        <div class="card-body">
                            Il faut faire parti de l'école CESI pour rentrer dans le BDE.

                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingNineteen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                Comment sont élu les membres du BDE de l'école ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordion">
                        <div class="card-body">
                            Par l'intermédiaire des listes électorales renouvelelée chaque année.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingTwenty">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                Comment ajouter une association sur le site ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion">
                        <div class="card-body">
                            Pour ajouter une association sur le site, il suffit d'aller sur votre profil du site. Puis appuyez sur créer une association.
                            La demande sera alors en examination par les membres du BDE qui par la suite accepterons votre demande ou non.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingTwentyOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                                Comment rejoindre un évènement ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwentyOne" class="collapse" aria-labelledby="headingTwentyOne" data-parent="#accordion">
                        <div class="card-body">
                            Il faut être inscrit en tant qu'étudiant dans l'école CESI. Sur votre compte, vous pourrez accéder au button Rejoindre un évènement. Si vous
                            vous inscrivez, vous serez noté sur la liste des inscrits et devrez alors participer. Si l'event est payant et que vous ne
                            pouvez pas y aller. Il faut obligatoirement donner un certificat ou justificatif pour être remboursé.
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingTwentyTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                                Qui sont les créateurs de ce magnifique site ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwentyTwo" class="collapse" aria-labelledby="headingTwentyTwo" data-parent="#accordion">
                        <div class="card-body">
                            La légende dit que Dieu lui-même leur a demandé de refaire son blog. Ils se nomment T.J.R.K.L
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingTwentyThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                                Pendant un évènement, est-il possible d'emmener des amis en dehors de l'école ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwentyThree" class="collapse" aria-labelledby="headingTwentyThree" data-parent="#accordion">
                        <div class="card-body">
                            Bien sûr ! Plus nous sommes, plus nous rirons !
                        </div>
                    </div>
                </div>
                <div class="card displaying-card">
                    <div class="card-header effect-faq" id="headingTwentyFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed color-faq" data-toggle="collapse" data-target="#collapseTwentyFour" aria-expanded="false" aria-controls="collapseTwentyFour">
                                Les pulls de promotions seront-il un jour de bonne qualité ?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwentyFour" class="collapse" aria-labelledby="headingTwentyFour" data-parent="#accordion">
                        <div class="card-body">
                            On en reparlera quand ils seront produit !
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="#">Protections de données</a></li>
                <li><a href="contactPage.php">Contact</a>
            </ul>
            </ul>
        </div>
        <div class="socialMedia">
            <a href="https://www.facebook.com/bdecesibdx/"><img src="../src/img/logoImage/facebookLogo.png" alt="facebookLogo" class="fbColor"></a>
            <a href="https://bdecesibordeaux.fr/fr/"><img src="../src/img/logoImage/twitterLogo.png" alt="twitterLogo" class="twColor"></a>
            <a href="https://www.instagram.com/bde_cesitoulouse/"><img src="../src/img/logoImage/instagramLogo.png" alt="instagramLogo" class="instaColor"></a>
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