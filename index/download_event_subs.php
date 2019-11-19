<?php

function downloadEventSubscribers($idEvent)
{
    $users = file_get_contents("http://www.bdecesi-api.ml/api/user_per_event/" . $idEvent);
    $users = json_decode($users);
    $usersCount = count($users);
    $parsedUsers = array(array());
    for ($i = 0; $i < $usersCount; $i++) {
        $parsedUsers[$i][0] = $users[$i]->firstname;
        $parsedUsers[$i][1] = $users[$i]->lastname;
    }

    $fp = fopen('file.csv', 'w');
    foreach ($parsedUsers as $fields) {
        fputcsv($fp, $fields);
    }

    fclose($fp);
}
