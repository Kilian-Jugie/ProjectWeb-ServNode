<?php
if (isset($_POST['submit'])) {
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    if (isset($POST['user_email']) && isset($POST['password'])) {
        $get_user_data = file_get_contents("http://www.bdecesi-api.ml/api/data_when_connect/" . $POST['user_email']);
        $get_user_data = json_decode($get_user_data);
        if ($get_user_data[0]->password == $POST['password']) {
            session_start();
            $user = (object) [
                "pseudo" => $get_user_data[0]->pseudo,
                "first_name" => $get_user_data[0]->firstname,
                "last_name" => $get_user_data[0]->lastname,
                "user_id" => $get_user_data[0]->id,
                "role_id" => $get_user_data[0]->id_role,
                "campus_id" => $get_user_data[0]->id_campus
            ];
            $_SESSION['user_log'] = $user;
            header("Location: ../../index.php");
        } else {
            header("Location: login.php?info=error_password");
        }
    }
}
