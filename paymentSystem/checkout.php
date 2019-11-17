<?php 
    if(!empty($_GET['tid']) && !empty($_GET['product'])){
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $GET['tid'];
        $product = $GET['product'];
    }else{
        header("index.php");
    }
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
    include 'shopNavBarCheckOut.php';
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
        <div class="container-fluid checkout-header">
            <div class="row checkout-header-row">
                <div class="checkout-header-img">
                    <img src="../src/img/shop/shopping-bag.png" alt="image du checkout" />
                </div>
                <div class="checkout-header-span">
                    <span>
                        Le moment fatidique du paiement
                    </span>
                    <span>
                        (Attention, vous devez être connecté pour passer une commande)
                    </span>
                </div>
            </div>
        </div>
    </section>

    <div class="accordion accordeon-checkout" id="accordionExample">
        <div class="card card-checkout">
            <div class="card-header card-header-checkout" id="headingThree">
                <h2 class="mb-0 title-checkout">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Informations de paiement
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                <div class="container">
        <form action="./charge.php" method="post" id="payment-form">
            <div class="form-row">
                <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Prénom">
                <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Nom">
                <input type="email" name="mail" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email">
                <div id="card-element" class="form-control">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert">
                </div>
            </div>
            <button>Effectuer la transaction</button>
        </form>
    </div>
                </div>
            </div>
        </div>
        <div class="card card-checkout">
            <div class="card-header card-header-checkout" id="headingFour">
                <h2 class="mb-0 title-checkout">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Reçu de paiement
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse jargondutiecks" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                <div class="container mt-4">
            <h2>Merci d'avoir réalisé un achat chez nous! et d'avoir acheté un(e) <?php echo $product; ?></h2>
            <hr>
            <p>Ton ID de transaction est : <strong><?php echo $tid; ?></strong></p>
            <p>Veuillez checker vos mails pour plus d'info</p>
            <p>
                <a href="../shop/shopIndex.php" class="btn btn-warning mt-2">Go Back </a>
            </p>
        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/index.js"></script>



    <?php
    include 'footerCheckOut.php';
    ?>
</body>

</html>