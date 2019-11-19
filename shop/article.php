<?php
$get_article = file_get_contents("http://bdecesi-api.ml/api/get_product/" . $_GET['id']);
$get_article = json_decode($get_article);
?>

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
        <section class="container-fluid">
            <div class="space">
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
        <section class="container-fluid">
            <div class="space">
            </div>
        </section>
        <div class="container-fluid article-specific">
            <div class="row article-specific-row">
                <div class="col-md-6 article-specific-col">
                    <img class="article-specific-image" src="../src/img/shop/sweat.jfif" alt="image d'un produit" />
                </div>
                <div class="col-md-6 article-specific-col">
                    <div>
                        <span>
                            <?php echo $get_article[0]->label_product ?>
                        </span>
                        <span>
                            € <?php echo $get_article[0]->pricce_product ?>
                        </span>
                    </div>
                    <div>
                        <span>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Taille
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">S</a>
                                    <a class="dropdown-item" href="#">M</a>
                                    <a class="dropdown-item" href="#">L</a>
                                    <a class="dropdown-item" href="#">XL</a>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div>
                        <span>
                            <button type="button" class="btn btn-warning">Ajouter au panier</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>


    </html>