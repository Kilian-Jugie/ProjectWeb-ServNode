<?php
include 'request.php';
if (isset($_POST['submit'])) {
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    if (isset($POST['password']) && isset($POST['confirm_password'])) {
        if ($POST['password'] == $POST['confirm_password']) {
            if(!preg_match('/[A-Z]/', $POST['password']) || !preg_match('~[0-9]~', $POST['password'])) {
                $errorMessage = "Password needs at least one uppercase and one number !";
            include 'sign_up.php';
            }
            else {

                $password = $POST['password'];
                $allowtypes = array('jpg', 'png', 'jpeg');
                $targetDir =    "profile_img/";

                if (!empty($_FILES["image"]['name'])) {
                    $filename = basename($_FILES["image"]['name']);
                    $img_path = $targetDir . $filename;
                    if (move_uploaded_file($_FILES["image"]['tmp_name'], $img_path)) {
                        if (isset($POST['news_letter'])) {
                            if ($POST['news_letter'] == "on") {
                                $news_letter = 1;
                            }
                        } else {
                            $news_letter = 0;
                        }
                        $json = (object) [
                            "last_name" => $POST['last_name'],
                            "first_name" => $POST['first_name'],
                            "email" => $POST['email'],
                            "password" => $password,
                            "img_path" => $img_path,
                            "address" => $POST['address'],
                            "news_letter" => $news_letter,
                            "user_pseudo" => $POST['user_pseudo'],
                            "age" => $POST['age'],
                            "id_city" => $POST['city']
                        ];
                        $response = httpPost("bdecesi-api.ml/api/add_user", $json);
                        if ($response == '"User been correctfully added"') {
                            include 'login.php';
                        } else {
                            $errorMessage = "User Already Exist";
                            include 'sign_up.php';
                        }
                    }
                }else{
                    $news_letter = 0;
                }
                $json = (object)[
                    "last_name" => $POST['last_name'],
                    "first_name" => $POST['first_name'],
                    "email" => $POST['email'],
                    "password" => $password,
                    "img_path" => $img_path,
                    "address" => $POST['address'],
                    "news_letter" => $news_letter,
                    "user_pseudo" => $POST['user_pseudo'],
                    "age" => $POST['age'],
                    "id_city" => $POST['city']
                ];
                $response = httpPost("bdecesi-api.ml/api/add_user", $json);
                if($response == '"User been correctfully added"'){
                    header("Location: login.php?info=success_sign");
                }else{
                    header("Location: sign_up.php?info=user_exist");
                }
            }
        } else {
            $errorMessage = "Wrong Password match... Learn to write dude";
            include 'sign_up.php';
        }
    }
}
