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


    <?php
    echo "<br><br><br><br><br><br>";
    //session_start();
    echo "<div class=\"container-fluid cart-displaying\">
        <h1>Voici votre panier !</h1>
        
        <div class=\"row cart-content\">";

    $cart_data = file_get_contents("http://www.bdecesi-api.ml/api/cart_data/" . $_SESSION['user_log']->user_id);
    $cart_detail = file_get_contents("http://www.bdecesi-api.ml/api/cart_detail/" . $_SESSION['user_log']->user_id);

    echo $cart_data;
    echo $cart_detail;

    $cart_data = json_decode($cart_data);
    $cart_data = $cart_data[0];

    $cart_detail = json_decode($cart_detail);
    //$cart_detail = $cart_detail[0];


    for ($i = 0; $i < $cart_data->nb_product; $i++) {
        echo "<div class=\"cart-item\">
                    <img src=\"../src/img/associationImg/ballIsLifeImage.png\" alt=\"imgContact\" class=\"cart-associationImg\">
                    <div class=\"cart-titleAndQuantity\">
                        <h2>" . $cart_detail[$i]->label . "</h2>
                        <div>
                        <script type=\"text/javascript\">
                            function incrementCart() {
                                console.log(\"Incremented\");
                                const http = new XMLHttpRequest();
                                const url = 'http://bdecesi-api/api/update_product_cart/" . $_SESSION['user_log']->user_id . ";
                                http.open(\"PUT\", url);
                                http.send(\"{ \\\"stock_id\\\": " . $cart_detail[$i]->id_stock . ", \\\"quantity\\\": " . ($cart_detail[$i]->quantity + 1) . "}\");
                            }
                        </script>
                            <button onclick=function incrementCart() {
                                console.log(\"Incremented\");
                                const http = new XMLHttpRequest();
                                const url = 'http://bdecesi-api/api/update_product_cart/" . $_SESSION['user_log']->user_id . ";
                                http.open(\"PUT\", url);
                                http.send(\"{ \\\"stock_id\\\": " . $cart_detail[$i]->id_stock . ", \\\"quantity\\\": " . ($cart_detail[$i]->quantity + 1) . "}\");
                            }>+</button>
                            <span>" . $cart_detail[$i]->quantity . "</span>
                            <button>-</button>
                        </div>
                    </div>
                    <p class=\"cart-bordered\">" . $cart_detail[$i]->label_size . "</p>
                    <button>remove item</button>
                    <div class=\"cart-price\">
                        <p>prix/unit = " . $cart_detail[$i]->cost / $cart_detail[$i]->quantity . "€</p>
                        <p>prix = " . $cart_detail[$i]->cost . "€</p>
                    </div>
                </div>";
    }
    echo "<div class=\"cart-proceed\">
        <p>Total = " . $cart_data->total_cost . "€</p>
        <a href=\"../paymentSystem/checkout.php\">Proceder à l'achat</a>
        </div>";

    echo "</div>
        </div>";
    ?>


    <!-- <div class="container-fluid cart-displaying">
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
            <div class="cart-sum">
                <div class="cart-sumPrice">
                    <p>sous-total = 239.92€</p>
                    <p>frais de livraison = 4€</p>
                    <p>TVA = 6€</p>
                </div>
            </div>
            <div class="cart-proceed">
                <p>Total = 249,92€</p>
                <a href="../paymentSystem/checkout.php">Proceder à l'achat</a>
            </div>

        </div>
    </div> -->
    <?php
    include 'footer.php';
    ?>
</body>

</html>