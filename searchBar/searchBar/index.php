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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../src/css/index.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="src/img/cesiLogo32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="src/img/cesiLogo64.png" sizes="64x64" />
  <link rel="apple-touch-icon" href="src/img/cesiLog32.png" sizes="32x32" />
  <link rel="apple-touch-icon" href="src/img/cesiLogo64.png" sizes="64x64" />
  <title>BDE CESI</title>
  <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
  <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
</head>

<body>
  <?php
  $getAllProduct = file_get_contents('http://www.bdecesi-api.ml/api/all_product');
  $allProduct = json_decode($getAllProduct);
  $jsonFile = array();
  $i = 0;
  foreach ($allProduct as $product) {
    $jsonFile[$i] = array();
    $jsonFile[$i]["label"] = $product->label_product;
    $i++;
  }
  $fp = fopen('searchBar.json', 'w');
  fwrite($fp, json_encode($jsonFile));
  fclose($fp);
  ?>
  <div class="container-fluid search-bar-displaying">
    <div class="container-fluid search-bar-displaying-for-image">
      <div class="image-displaying-search-bar">
      </div>
      <a href="../../index.php"><img class="imgage-size-search-bar" src="../../src/img/contactFormImage/cesiBlancFondTransparant.png" alt="image logo" /></a>
    </div>
    <div class="md-form mt-0 search-bar">
      <input class="form-control search-bar-input" type="text" placeholder="Search..." aria-label="Search" id='searchBar'>
      <input class='btn btn-warning redesign-event-button-bis' type="submit" value="Participer">
      <script src='searchBar.json'></script>
      <script src='searchBar.js'></script>
    </div>
  </div>
</body>

</html>