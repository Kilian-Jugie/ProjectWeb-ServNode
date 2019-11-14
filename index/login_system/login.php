    <?php
    session_start();
    // echo $_SESSION['user_log'];
    if (isset($_SESSION['user_log'])) {
        echo "Bienvenue " . $_SESSION['user_log']->pseudo . "<br>";
        echo "<a href='../src/phpScript/log_outScript.php'>Log Out</a>";
    } else {
        echo "<html>

        <head>
            <meta charset='utf-8' />
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
            <meta name='viewport' content='width=device-width, initial-scale=1' />
            <meta name='theme-color' content='#000000' />
            <meta name='description' content='Cinq élèves de CESI Bordeaux ont voulu repenser un site pour leur BDE dans le cadre d' un projet.'>
            <meta http-equiv='pragma' content='no-cache' />
        
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous' />
            <link rel='stylesheet' href='../src/css/index.css' />
        
            <link href='https://fonts.googleapis.com/css?family=Roboto&display=swap' rel='stylesheet'>
            <title>BDE CESI</title>
        </head>
        
        <body class='log'>
            <div class='mini-header'>
                <a href='../index.php'><img src='../src/img/logoTransp.png' alt='logoCesi'></a>
            </div>
            <section>
                <div class='container form-displaying'>
                    <form method='POST' action='../src/phpScript/loginScript.php'>
                        <h3> Ravi de vous revoir !</h3>
                        <div>
                            <p>Email</p>
                        </div>
                        <input class='form-control' type='text' name='user_email' placeholder='Email'><br>
                        <div>
                            <p>Mot de passe</p>
                        </div>
                        <input class='form-control' type='password' name='password' placeholder='Password'><br>
                        <input type='submit' class='btn btn-warning' name='submit' value='Login '><br>
                    </form>
                    <a href='sign_up.php'> Vous n'êtes pas inscrit ? Cliquez ici.</a>
                </div>
            </section>";
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "password") {
                echo "<br><h2>Wrong Password<h2>";
            }
        }
        echo "</body></html>";
    }
