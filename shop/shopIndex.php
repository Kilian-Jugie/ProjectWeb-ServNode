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
        <?php
        include 'shopNavBar.php';
        ?>
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
                <div class="row">
                    <div class="col-md-6">
                        <a href="index/contactPage.php"><button type="button" class="btn btn-warning">SHOP NOW</button></a>
                    </div>
                    <div class="col-md-6">
                        <a href="index/contactPage.php"><button type="button" class="btn btn-warning">LEARN MORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid reduction">
            <span>
                LIVRAISON GRATUITE
            </span>
            <span>
                Livraison gratuit à partir de 69 euros d'achats.
            </span>
        </div>
        <section>
            <div class="container-fluid type-shop">
                <div class="row type-shop-row">
                    <div class="col-md-6 type-shop-col">
                        <img class="type-shop-img" src="../src/img/shop/shopMen.jpg" alt="shop Men " />
                        <button type="button" class="btn btn-dark">Shop Men</button>
                    </div>
                    <div class="col-md-6 type-shop-col">
                        <img class="type-shop-img" src="../src/img/shop/shopWomen.jpg" alt="shop women" />
                        <button type="button" class="btn btn-warning">Shop Women</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="space">
            </div>
        </section>
        <section>
            <div class="container-fluid shop-collab">
                <div>
                    <span>
                        LES COLLABORATEURS DE NOTRE ECOLE
                    </span>
                    <span>
                        Notre école CESI a réalisé plusieurs collaborations entre les campus de CESI France
                    </span>
                </div>
            </div>
            <div class="container-fluid shop-collab-img">
                <div class="row shop-collab-row">
                    <div class="col-md-6 shop-collab-col-un">
                        <img src="../src/img/shop/femmeMoitieNue.jpg" alt="image de femme avec un bandeau" />
                        <div>
                            <span>
                                Bordeaux x Supreme
                            </span>
                            <div>
                                <span class="lighter-font">
                                    NEW
                                </span>
                                <span class="lighter-font">
                                    INTERVIEW
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 shop-collab-col-deux">
                        <img src="../src/img/shop/femmeStreetWear.jpg" alt="image d'une femme en tenue street-wear" />
                        <div>
                            <span>
                                Off Trend Summer X
                            </span>
                            <div>
                                <span class="lighter-font">
                                    NEW
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shop-collab-row">
                    <div class="col-md-6 shop-collab-col-un">
                        <img src="../src/img/shop/femmeLaverie.jpg" alt="image d'une femme dans une laverie" />
                        <div>
                            <span>
                                California Trend x Women
                            </span>
                            <div>
                                <span class="lighter-font">
                                    COLLECTION
                                </span>
                                <span class="lighter-font">
                                    NEW
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <div class="row shop-collab-row">
                    <div class=" col-md-6">
                    </div>
                    <div class="col-md-6 shop-collab-col-deux">
                        <img src="../src/img/shop/amazingPrice.jpg" alt="image de neons" />
                        <div>
                            <span>
                                Pop Art Collection CESI
                            </span>
                            <div>
                                <span class="lighter-font">
                                    COLLECTION
                                </span>
                                <span class="lighter-font">
                                    NEW
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
        <section class="container-fluid">
            <div class="space">
            </div>
        </section>

        <section>
            <div class="container-fluid collection-shop-title">
                <span>
                    Collection Hoodie
                </span>
            </div>
            <div class="container-fluid collection-shop-items">
                <div class="row collection-shop-row">
                    <div class="col-md-3 collection-shop-items-col">
                        <a href="#"><img src="../src/img/shop/sweat.jfif" alt="image de sweat" /></a>
                    </div>
                    <div class="col-md-3 collection-shop-items-col">
                        <a href="#"><img src="../src/img/shop/sweat.jfif" alt="image de sweat" /></a>
                    </div>
                    <div class="col-md-3 collection-shop-items-col">
                        <a href="#"><img src="../src/img/shop/sweat.jfif" alt="image de sweat" /></a>
                    </div>
                    <div class="col-md-3 collection-shop-items-col">
                        <a href="#"><img src="../src/img/shop/sweat.jfif" alt="image de sweat" /></a>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include 'footer.php';
        ?>
    </body>

    </html>