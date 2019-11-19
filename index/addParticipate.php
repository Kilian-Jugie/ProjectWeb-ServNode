<?php

function callAPI($method, $url, $data)
{
    $curl = curl_init();
    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'APIKEY: 111111111111111111111',
        'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $result = curl_exec($curl);
    if (!$result) {
        die("Connection Failure");
    }
    curl_close($curl);
    echo $result;
    if (preg_match("#23000#", $result)) {
        // $messageAlreadyLogIn = "Vous êtes déjà inscrit à l'évènement";
        header("Location: event.php?log=inscrit");
    } elseif (preg_match("#HY000#", $result)) {
        header("Location: event.php?log=sucess");
    }
}

$object = (object) [
    "id_user" => $_POST['user_id'],
    "id_publication" => $_POST['pub_id']
];
$object = json_encode($object);
callAPI("POST", "http://www.bdecesi-api.ml/api/add_participation", $object);
