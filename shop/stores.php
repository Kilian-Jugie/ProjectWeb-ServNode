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
    <div class="container-fluid stores-displaying">
        <h1>LES BOUTIQUES</h1>
        <div class="row stores-content" id="paris">
            <div class="store paris">
                <div class="opacity"></div>
                <h2><a href="">Paris</a></h2>
            </div>
            <div class="store bordeaux" id="bordeaux">
                <div class="opacity"></div>
                <h2><a href="../index.php">Bordeaux</a></h2>
            </div>
            <div class="store lyon" id="lyon">
                <div class="opacity"></div>
                <h2><a href="">Lyon</a></h2>
            </div>
            <div class="store marseille" id="marseille">
                <div class="opacity"></div>
                <h2><a href="">Marseille</a></h2>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>


</body>

</html>