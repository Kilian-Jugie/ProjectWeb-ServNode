<?php 
    $getAllProduct = file_get_contents('http://www.bdecesi-api.ml/api/all_product');
    $allProduct = json_decode($getAllProduct);
    $jsonFile = array();
    $i = 0;
    foreach($allProduct as $product){
        $jsonFile[$i] = $product->label_product;
        $i++;
    }
    $fp = fopen('searchBar.json', 'w');
    fwrite($fp, "data = '".json_encode($jsonFile)."'");
    fclose($fp);
?>
<div class="topnav">
  <input type="text" id='searchBar' placeholder="Search..">
  <script src='searchBar.json'>
  <script src='searchBar.js'>
</div>