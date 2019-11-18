<?php

$tta = file_get_contents("http://www.bdecesi-api.ml/api/top_three_article");

    $tta = json_decode($tta);
    foreach($tta as $a){
        echo "<div class=\"col-md-3 collection-shop-items-col\">
                    <a href=\"#\"><img src=\"../src/img/shop/". $a->urlimage ."\" alt=\"image de sweat\" /></a>
                    <p>" . $a->label . " à etait vendue en " . $a->total_sale . "</p>
                </div>";
    }

?>