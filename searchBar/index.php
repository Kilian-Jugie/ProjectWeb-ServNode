<html>
<head>
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
    foreach($allProduct as $product){
        $jsonFile[$i] = array();
        $jsonFile[$i]["label"] = $product->label_product;
        $i++;
    }
    $fp = fopen('searchBar.json', 'w');
    fwrite($fp, json_encode($jsonFile));
    fclose($fp);
?>
<div class="topnav">
  <input type="text" id='searchBar' placeholder="Search..">
  <script src='searchBar.json'></script>
  <script src='searchBar.js'></script>
</div>
</body>
</html>