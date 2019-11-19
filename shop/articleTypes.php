<?php
$get_article = file_get_contents("http://bdecesi-api.ml/api/all_product");
$get_article = json_decode($get_article);
//$get_article = $get_article[0];
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
                SWEAT
            </span>
        </div>
    </section>

    <section>
        <div class="container-fluid filtre">
            <div class="container filtre-displaying">
                <span>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TRIER PAR
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Prix croissant</a>
                            <a class="dropdown-item" href="#">Prix decroissant</a>
                        </div>
                    </div>
                </span>
                <span>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            FILTRER
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Par taille</a>
                            <a class="dropdown-item" href="#">Par nouveauté</a>
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </section>


    <section>
        <div class="container-fluid article">
            <div class="row">
                <?php
                foreach ($get_article as $value) {
                    echo "<div class='col-md-3'>
                    <img class='image' src='../" . $value->urlImage . "' alt='" . $value->description_product . "' />
                    <div class='hover'>
                        <span>
                            Taille en stock:
                        </span>
                        <!-- <div>
                            <a href='article.php?id=" . $value->id_product . "'><span>
                                    S
                                </span></a>
                        </div>
                        <div>
                            <a href='#'><span>
                                    M
                                </span></a>
                        </div>
                        <div>
                            <a href='#'><span>
                                    L
                                </span></a>
                        </div>
                        <div>
                            <a href='#'><span>
                                    XL
                                </span></a>
                        </div> -->
                        <div>
                            <a href='article.php?id=" . $value->id_product . "'><span>
                                " . $value->size_label . "
                            </span></a>
                        </div>
                    </div>
                    <span>
                        " . $value->label_product . "
                    </span>
                    <span>
                        € " . $value->price_product . "
                    </span>
                </div>";
                }
                ?>
            </div>
        </div>
    </section>




    <?php
    include 'footer.php';
    ?>
</body>

</html>