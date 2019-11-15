<html>

<head>
    <meta charset='utf-8' />
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <meta name='theme-color' content='#000000' />
    <meta name='description' content='Cinq élèves de CESI Bordeaux ont voulu repenser un site pour leur BDE dans le cadre d' un projet.'>
    <meta http-equiv='pragma' content='no-cache' />

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous' />
    <link rel='stylesheet' href='../../src/css/index.css' />

    <link href='https://fonts.googleapis.com/css?family=Roboto&display=swap' rel='stylesheet'>
    <title>BDE CESI</title>
</head>

<body class="log">
    <div class='mini-header'>
        <a href='../../index.php'><img src='../../src/img/logoTransp.png' alt='logoCesi'></a>
    </div>

    <section>
        <div class='container form-displaying-bis'>
            <form action="add_user.php" method="POST" enctype="multipart/form-data">
                <h3> Créer un compte</h3>
                <div>
                    <p>Prénom</p>
                </div>
                <input class='form-control' type="text" name="first_name" placeholder="First Name"><br>
                <div>
                    <p>Nom</p>
                </div>
                <input class='form-control' type="text" name="last_name" placeholder="Last Name"><br>
                <div>
                    <p>Email</p>
                </div>
                <input class='form-control' type="text" name="email" placeholder="Email Address"><br>
                <div>
                    <p>Mot de passe</p>
                </div>
                <input class='form-control' type="password" name="password" placeholder="Password"><br>
                <div>
                    <p>Confirme le mot de passe</p>
                </div>
                <input class='form-control' type="password" name="confirm_password" placeholder="Confirm Password"><br>
                <div>
                    <p>Adresse</p>
                </div>
                <input class='form-control' type="text" name="address" placeholder="Address"><br>
                <div>
                    <p>Pseudo</p>
                </div>
                <input class='form-control' type="text" name="user_pseudo" placeholder="Pseudo"><br>
                <div>
                    <p>Age</p>
                </div>
                <input class='form-control' type="text" name="age" placeholder="Age"><br>
                <div>
                    <p>Sélectionne ton campus</p>
                </div>
                <?php
                echo "<SELECT name='city'>";
                $get_campus = file_get_contents("http://bdecesi-api.ml/api/select_campus");
                $get_campus = json_decode($get_campus, true);
                $label_campus = array();
                for ($i = 0; $i < count($get_campus); $i++) {
                    $label_campus[$i] = $get_campus[$i]['label'];
                    echo "<option value=" . $get_campus[$i]['id'] . ">" . $label_campus[$i] . "</option>";
                }
                echo "</SELECT><br>"
                ?>
                <div>
                    <p>Choisi une belle photo de profil!</p>
                </div>
                <input type="file" name="image"><br>
                <input class='form-control label' type="checkbox" name="news_letter">
                <label for="news_letter"></label>
                <br>
                <div>
                    <p>J'ai lu et accpepté les conditions générales du site du bureau des élèves de CESI</p>
                </div>
                <input class='form-control-bis btn btn-warning' type="submit" name="submit" value="Submit Form"><br>
                <a href="login.php">To Login</a>
            </form>
        </div>
    </section>
</body>

</html>
<!-- add_user('lastname','firstname','email@address','password','thumbnail.extention','address','user_pseudo',/*BOOLEAN*/ 'newsletter','age','role_id','campus_id'); -->