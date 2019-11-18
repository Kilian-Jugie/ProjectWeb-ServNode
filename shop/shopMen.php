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
    include 'shopNavBar.php';
    ?>

    <section class="container-fluid">
        <div class="space">
        </div>
    </section>
    <section class="container-fluid">
        <div class="space">
        </div>
    </section>

    <section>
        <div class="container-fluid collection-shop-title men">
            <span>
                SHOP FOR MEN
            </span>
        </div>
        <div class="container-fluid collection-shop-items">
            <div class="row collection-shop-row product-men">
                
                <?php include('displayTopThreeArticle.php');?>
            </div>
        </div>
    </section>
    <div class="container-fluid reduction">
        <span>
            LIVRAISON GRATUITE
        </span>
        <span>
            Livraison gratuit à partir de 69 euros d'achats.
        </span>
    </div>

    <div class="container-fluid shop-banner">
        <img class="image-size image-banner-bis" src="../src/img/shop/menBanner.jpg" alt="image de fond du home page du BDE de Cesi" />
        <div class="row row-men">
            <div class="col-md-6 col-men">
                <a href="sale.php"><button type="button" class="btn btn-warning">Shop now</button></a>
            </div>
            <div class="col-md-6 col-men">
                <a href="../errorPage/construcPage.php"><button type="button" class="btn btn-warning">Learn more!</button></a>
            </div>
        </div>
    </div>
    <div class="container-fluid reduction reduction-men">
        <span>
            CODE PROMOTIONNEL
        </span>
        <span>
            Une réduction de 20% est appliquée pour tout les inscrits du BDE et une réduction de <br />
            50% seront appliquées aux membres du conseil du BDE ainsi qu'aux concepteurs du site.
        </span>
    </div>
    <section>
        <div class="container-fluid type-shop">
            <div class="row type-shop-row">
                <div class="col-md-6 type-shop-col">
                    <img class="type-shop-img resize-spec" src="../src/img/shop/shirt-bis.jpg" alt="image t-shirt " />
                    <div class="containe-fluid type-shop-button-displaying">
                        <div class="row type-shop-button-displaying-row">
                            <a href="shirt.php"><button type="button" class="btn btn-dark">Take a look</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 type-shop-col">
                    <img class="type-shop-img" src="../src/img/shop/sweatCat.jpg" alt="image sweat" />
                    <div class="containe-fluid type-shop-button-displaying">
                        <div class="row type-shop-button-displaying-row">
                            <a href="sweat.php"><button type="button" class="btn btn-warning">Take a look</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include 'footer.php';
    ?>
</body>

</html>