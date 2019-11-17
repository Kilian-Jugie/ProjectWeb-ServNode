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

    <div class="container-fluid cart-displaying">
        <h1>Voici votre panier !</h1>
        <div class="row cart-content">
            <div class="cart-item">
                <img src="../src/img/associationImg/ballIsLifeImage.png" alt="imgContact" class="cart-associationImg">
                <div class="cart-titleAndQuantity">
                    <h2>Hoodie Cesi gris-chiné</h2>
                    <div>
                        <button>+</button>
                        <span>4</span>
                        <button>-</button>
                    </div>
                </div>
                <p class="cart-bordered">M</p>
                <button>remove item</button>
                <div class="cart-price">
                    <p>prix/unit = 29.99€</p>
                    <p>prix = 119.96€</p>
                </div>
            </div>
            <div class="cart-item">
                <img src="../src/img/associationImg/ballIsLifeImage.png" alt="imgContact" class="cart-associationImg">
                <div class="cart-titleAndQuantity">
                    <h2>Hoodie Cesi gris-chiné</h2>
                    <div>
                        <button>+</button>
                        <span>1</span>
                        <button>-</button>
                    </div>
                </div>
                <p class="cart-bordered">M</p>
                <button>remove item</button>
                <div class="cart-price">
                    <p>prix/unit = 29.99€</p>
                    <p>prix = 29.99€</p>
                </div>
            </div>
            <div class="cart-item">
                <img src="../src/img/associationImg/ballIsLifeImage.png" alt="imgContact" class="cart-associationImg">
                <div class="cart-titleAndQuantity">
                    <h2>Hoodie Cesi gris-chiné</h2>
                    <div>
                        <button>+</button>
                        <span>3</span>
                        <button>-</button>
                    </div>
                </div>
                <p class="cart-bordered">M</p>
                <button>remove item</button>
                <div class="cart-price">
                    <p>prix/unit = 29.99€</p>
                    <p>prix = 89.97€</p>
                </div>
            </div>
            <div class="cart-sum">
                <div class="cart-sumPrice">
                    <p>sous-total = 239.92€</p>
                    <p>frais de livraison = 4€</p>
                    <p>TVA = 6€</p>
                </div>
            </div>
            <div class="cart-proceed">
                <p>Total = 249,92€</p>
                <a href="checkout.php">Proceder</a>
            </div>

        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>