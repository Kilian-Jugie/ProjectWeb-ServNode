<?php 
include 'request.php';
    if(isset($_POST['sumbit_event'])){
        // <-- include DB
        $targetDir = "../src/img/pictures_pub/";
        $allowtypes = array('jpg', 'png', 'jpeg');
        $nbImages = 0;
        $jsonArray = [];
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        $startDate = inputDateToSQLDate($POST['start_date']);
        $endDate = inputDateToSQLDate($POST['end_date']);
        $new_event = (object)[
            "input_title" => $POST['input_title'],
            "input_content" => $POST['input_content'],
            "input_date" => $startDate,
            "input_end_date" => $endDate,
            "input_cost" => $POST['input_cost'],
            "input_id_user" => $POST['input_id_user'],
            "input_id_occurence" => $POST['id_occurence'],
            "input_image_json_file" => "" 
        ];
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
        if(!empty(array_filter($_FILES['files']['name']))){
            foreach($_FILES['files']['name'] as $key=>$value){
                $filename = basename($_FILES['files']['name'][$key]);
                $filepath = $targetDir.$filename;
                $arraylength = count($_FILES['files']['name']);
                $filetype = pathinfo($filepath, PATHINFO_EXTENSION);

                if(in_array($filetype, $allowtypes)){
                    if(move_uploaded_file($_FILES['files']['tmp_name'][$key], $filepath)){
                         $jsonArray[$nbImages] = array("path:" => $filepath, "format" => $filetype);
                        $nbImages++;
                    }else{
                        $errorUpload .= $_FILES['files']['name'][$key].', ';
                    }
                }else{
                    $errorUploadType .= $_FILES['files']['name'][$key].', ';
                }
                
            }
            if(!empty($jsonArray)){
                $json_image = json_encode($jsonArray);
                $json_image = '"nb_image": "'.$arraylength.'", "image": '.$json_image;
                // print_r($json_image);
                $new_event->input_image_json_file = $json_image;
                $response = callAPI('POST', 'http://www.bdecesi-api.ml/api/add_event', json_encode($new_event));
                if($response == "SQLSTATE[HY000]: General error"){
                    echo "Votre event à bien été crée";
                }else{
                    echo "Votre event n'a pu être cére";
                }
            }    
        }

}
function inputDateToSQLDate($date){
    $objDate = new DateTime($date);
    $dateSQL = date_format($objDate, 'Y-m-d');
    return $dateSQL;
}

?>