<?php
include 'dashboard_request.php';
include "../index/download_event_subs.php";
include "../index/download_img.php";

session_start();
$_SESSION['user_id'] = 1;
if (isset($_POST['priority'])) {
    $_SESSION['priority'] = $_POST['priority'];
}
if (isset($_POST['access_dashboard'])) {
    $getUserData = new ActionGetUserData();
    $user_data_object = $getUserData->printOut()[0];
    if ($user_data_object) {
        echo "<form name='update_user_data' action='dashboard.php' method='POST'> 
                Pseudo  : 
                <input type='text' name='pseudo' value=" . $user_data_object->pseudo . "><br>
                City    : 
                <SELECT name='campus'>";
        $get_campus = file_get_contents("http://bdecesi-api.ml/api/select_campus");
        $get_campus = json_decode($get_campus, true);
        $label_campus = array();
        for ($i = 0; $i < count($get_campus); $i++) {
            $label_campus[$i] = $get_campus[$i]['label'];
            if ($label_campus[$i] == $user_data_object->campus) {
                echo "<option value='" . $get_campus[$i]['id'] . "' selected='selected' >" . $label_campus[$i] . "</option>";
            } else {
                echo "<option value=" . $get_campus[$i]['id'] . ">" . $label_campus[$i] . "</option>";
            }
        }
        echo "</SELECT><br>   
                Email   : 
                <input type='text' name='email' value=" . $user_data_object->email . "><br>
                Address :
                <input type='text' name='address' value=" . $user_data_object->address . "><br>
                <input type='hidden' name='user_data' value=" . json_encode($user_data_object) . ">
                <input type='hidden' name='access_dashboard'>
                <input type='submit' name='update_user_data' value='Update user information'>
                </form>";
        if (isset($_POST['update_user_data'])) {
            $updateUserData = new ActionUpdateUserData();
            $user_data_update = $updateUserData->printOut();
            if ($user_data_update == "SQLSTATE[HY000]: General error") {
                echo "Vos informations ont bien été mis à jour<br>";
            }
        }
    }
    $showCommandDetails = new ActionShowDetails();
    $user_commands = $showCommandDetails->printOut();
    if ($user_commands) {
        for ($i = 0; $i < count($user_commands); $i++) {
            if (count($user_commands[$i]) > 1) {
                for ($b = 0; $b < count($user_commands[$i]); $b++) {
                    echo $user_commands[$i][$b]->label . '-' . $user_commands[$i][$b]->cost . "€<br>";
                }
            } else {
                echo $user_commands[$i][0]->label . '-' . $user_commands[$i][0]->cost . "€<br>";
            }
        }
        echo "<br>";
    }
    $getAllProducts = new ActionGetAllProducts();
    $allProducts = $getAllProducts->printOut();
    $allProducts = json_decode($allProducts);
    if ($allProducts) {
        echo "<form name='access_product' action='dashboard.php' method='POST'>
            PRODUITS : 
            <SELECT name='product'>";
        for ($i = 0; $i < count($allProducts); $i++) {
            echo "<option value=" . $allProducts[$i]->id_product . ">" . $allProducts[$i]->label_product . "</option>";
        }
        echo "</SELECT><br>
            <input type='hidden' name='access_dashboard'>
            <input type='submit' name='access_update_product' value='Update this product'>       
            </form>";
        if (isset($_POST['access_update_product'])) {
            $id = $_POST['product'];
            $product = product_for_id($id, $allProducts);
            echo "<form action='dashboard.php' method='POST'>
                    Label du produit :  
                    <input type='text' name='label' value='" . $product->label_product . "'><br>
                    Description : <br>
                    <textarea id='story' name='description' rows='5' cols='33'>
                    " . description_for_id($id, $allProducts) . "
                    </textarea><br>
                    Url Image : 
                    <input type='text' name='url_image' value='" . $product->urlImage . "'><br>
                    Prix : 
                    <input type='text' name='price' value='" . $product->price_product . "'><br>
                    <input type='hidden' value=" . $id . " name='product_id'>
                    <input type='hidden' name='access_dashboard'>
                     Type produit : 
                    <SELECT name='product_type'>";
            $getAllProductsType = new ActionGetAllProductsType();
            $allProductsType = $getAllProductsType->printOut();
            $allProductsType = json_decode($allProductsType);
            for ($i = 0; $i < count($allProductsType); $i++) {
                echo "<option value=" . $allProductsType[$i]->id . ">" . $allProductsType[$i]->label . "</option>";
            }
            echo "</SELECT><br>
                        <input type='submit' name='update_the_product' value='Update product'>
                        <form>";
        }
        if (isset($_POST['update_the_product'])) {
            $updateProduct = new ActionUpdateProduct();
            $isUpdate = $updateProduct->printOut();
            if ($isUpdate == "SQLSTATE[HY000]: General error") {
                echo "Votre produit à bien étais mis à jour";
            } else {
                echo "Erreur votre produit n'a pus être mis à jour<br>Veuillez réessayer";
            }
        }
    }
    $getAllEvents = new ActionGetAllEvents();
    $allEvents = $getAllEvents->printOut();
    if ($allEvents) {
        $ownEvents = $allEvents;
    } else {
        $getOwnEvents = new ActionGetOwnEvent();
        $ownEvents = $getOwnEvents->printOut();
    }
    if ($ownEvents) {
        echo "<form name='access_event' action='dashboard.php' method='POST'>
            EVENTS : 
            <SELECT name='event'>";
        for ($i = 0; $i < count($ownEvents); $i++) {
            echo "<option value=" . $ownEvents[$i]->id_pub . ">" . $ownEvents[$i]->title_pub . "</option>";
        }
        echo "</SELECT><br>
            <input type='hidden' name='access_dashboard'>
            <input type='submit' name='access_update_event' value='Update this event'>       
            </form>";
        if (isset($_POST['access_update_event'])) {
            $id = $_POST['event'];
            $event = event_for_id($id, $ownEvents);
            echo "<form action='dashboard.php' method='POST'>
                    Label du produit :  
                    <input type='text' name='title' value='" . $event->title_pub . "'><br>
                    Description : <br>
                    <textarea id='story' name='content' rows='5' cols='33'>
                    " . $event->content_pub . "
                    </textarea><br>
                    Date de l'event : 
                    <input type='date' name='date' value='" . $event->date_pub . "'><br>
                    Prix : 
                    <input type='text' name='cost' value='" . $event->cost_pub . "'><br>
                    <input type='hidden' value=" . $id . " name='event_id'>
                    <input type='hidden' name='access_dashboard'>";
            if ($allEvents) {
                echo "<input type=''>";
            }
            echo "
                    <input type='submit' name='update_the_event' value='Update event'>
                    <form>";
        }
        if (isset($_POST['update_the_event'])) {
            $updateEvent = new ActionUpdateOwnEvent();
            $isEventUpdate = $updateEvent->printOut();
            if ($isEventUpdate == "SQLSTATE[HY000]: General error") {
                echo "Votre event à bien étais mis à jour";
            } else {
                echo "Erreur votre event n'a pus être mis à jour<br>Veuillez réessayer";
            }
        }
    }
    $getAllStock = new ActionGetAllStock();
    $allStock = $getAllStock->printOut();
    if ($allStock) {
        echo "<form action='dashboard.php' method='POST'>
            <SELECT name='stock'>";
        foreach ($allStock as $stock) {
            echo "<option value='" . $stock->id_stock . "'>" . $stock->label_product . "</option>";
        }
        echo "</SELECT>
            <input type='hidden' name='access_dashboard'>
            <input type='submit' name='submit_stock' value='Update this stock'>
            </form>";
        if (isset($_POST['submit_stock'])) {
            $id = $_POST['stock'];
            $stock = stock_for_id($id, $allStock);
            echo "<form name='formChangeStock' action='dashboard.php' method='POST'>
                    <input type='text' value=" . $stock->quantity_stock . " name='quantity_stock'>
                    <input type='hidden' name='access_dashboard'>
                    <input type='hidden' name='id_stock' value=" . $id . ">
                    <input type='submit' name='changeStock' value='Change stock'> 
                </form>";
        }
        if (isset($_POST['changeStock'])) {
            $updatesStock = new ActionUpdateStock();
            $isUpdateStock = $updatesStock->printOut();
            if ($isUpdateStock == "SQLSTATE[HY000]: General error") {
                echo "Votre stock à bien étais mis à jour";
            } else {
                echo "Erreur votre stock n'a pus être mis à jour<br>Veuillez réessayer";
            }
        }
    }
    $getAllSize = new ActionGetSize();
    $allSize = $getAllSize->printOut();
    if ($allSize) {
        echo "<form action='dashboard.php' method='POST'>
            <SELECT name='size'>";
        foreach ($allSize as $size) {
            echo "<option value='" . $size->id . "'>" . $size->label . "</option>";
        }
        echo "</SELECT>
            <input type='hidden' name='access_dashboard'>
            <input type='submit' name='submit_size' value='Update this size'>
            </form>";
        if (isset($_POST['submit_size'])) {
            $id = $_POST['size'];
            $size = size_for_id($id, $allSize);
            echo "<form name='formChangesize' action='dashboard.php' method='POST'>
                    Size:
                    <input type='text' value=" . $size->label . " name='label'>
                    <input type='hidden' name='access_dashboard'>
                    <input type='hidden' name='id_size' value=" . $id . ">
                    <input type='submit' name='changeSize' value='Change size'> 
                </form>";
        }
        if (isset($_POST['changeSize'])) {
            $updatesSize = new ActionUpdateSize();
            $isUpdateSize = $updatesSize->printOut();
            if ($isUpdateSize == "SQLSTATE[HY000]: General error") {
                echo "Votre size à bien étais mis à jour<br>";
            } else {
                echo "Erreur votre size n'a pus être mis à jour<br>Veuillez réessayer";
            }
        }
    }
    $getAllOrders = new ActionGetAllOrders();
    $allOrders = $getAllOrders->printOut();
    if ($allOrders) {
        echo "<form action='dashboard.php' method='POST'>
                <SELECT name='order'>";
        for ($b = 0; $b < count($allOrders); $b++) {
            if (count($allOrders[$b]) > 1) {
                for ($i = 0; $i < count($allOrders[$b]); $i++) {
                    echo "<option value='" . $allOrders[$b][$i]->id . "'>" . $allOrders[$b][$i]->label . "</option>";
                }
            } else {
                echo "<option value='" . $allOrders[$b][0]->id . "'>" . $allOrders[$b][0]->label . "</option>";
            }
        }
        echo "
                </SELECT>
                <input type='hidden' name='access_dashboard'>
            <input type='submit' name='submit_order' value='Show details'>
            </form>";
        if (isset($_POST['submit_order'])) {
            $id = $_POST['order'];
            $order = order_for_id($id, $allOrders);
            if (count($order) > 1) {
                echo "<br><br>";
                foreach ($order as $command) {
                    echo "Label : " . $command->label . "<br>";
                    echo "Quantity : " . $command->quantity . "<br>";
                    echo "Cost : " . $command->cost . "<br>";
                }
            }
            echo "Label : " . $order[0]->label . "<br>";
            echo "Quantity : " . $order[0]->quantity . "<br>";
            echo "Cost : " . $order[0]->cost . "<br>";
        }
    }
    $getAllStatus = new ActionGetAllStatus();
    $allStatus = $getAllStatus->printOut();
    if ($allStatus) {
        $getAllRole = new ActionGetAllRole();
        $AllRole = $getAllRole->printOut();
        echo "<form action='dashboard.php' method='POST'>
                <SELECT name='status'>";
        for ($b = 0; $b < count($allStatus); $b++) {
            echo "<option value=" . json_encode(["pseudo" => $allStatus[$b]->pseudo, "id_role" => $allStatus[$b]->id_role, "user_id" => $allStatus[$b]->user_id]) . ">" . $allStatus[$b]->pseudo . " - " . $allStatus[$b]->id_role . "</option>";
        }
        echo "
                </SELECT>
                <input type='hidden' name='access_dashboard'>
            <input type='submit' name='submit_status' value='Update Status'>
            </form>";
        if (isset($_POST['submit_status'])) {
            $POST = json_decode($_POST['status']);
            echo "Pseudo : " . $POST->pseudo . "<br>
                <form action='dashboard.php' method='POST'>
                    <input type='text' name='id_role' value=" . $POST->id_role . ">
                    <input type='hidden' name='access_dashboard'>
                    <input type='hidden' name='user_id' value=" . $POST->user_id . ">
                    <input type='submit' name='change_role' value='Change User Role'>
                </form>
                ";
        }
    }
    if (isset($_POST['change_role'])) {
        $updateUserStatus = new ActionUpdateUserStatus();
        $isUpdateUserStatus = $updateUserStatus->printOut();
        if ($isUpdateUserStatus == "SQLSTATE[HY000]: General error") {
            echo "Le status à été mis à jour";
        } else {
            echo "Erreur le status n'a pas été mis à jour";
        }
    }
    $addProduct = new ActionAddProduct();
    $addProduct = $addProduct->printOut();
    if ($addProduct == "new") {
        echo "<form action='dashboard.php' method='POST' enctype='multipart/form-data'>
                Label : 
                <input type='text' name='input_label'><br>
                Description : 
                <input type='text' name='input_desc'><br>
                Image Product : 
                <input type='file' name='input_urlimg'><br>
                Price : 
                <input type='text' name='input_price'><br>
                <SELECT name='input_id_product_type'>";
        $getAllProductsType = new ActionGetAllProductsType();
        $allProductsType = $getAllProductsType->printOut();
        $allProductsType = json_decode($allProductsType);
        for ($i = 0; $i < count($allProductsType); $i++) {
            echo "<option value=" . $allProductsType[$i]->id . ">" . $allProductsType[$i]->label . "</option>";
        }
        echo "</SELECT><br>
                <input type='hidden' name='access_dashboard'>
                <input type='submit' name='submitProduct' value='Add Product'>
            </form>";
    } else if ($addProduct = ' ') {
        echo "Votre produit à été ajouté avec succés";
    }
    $addEvent = new ActionAddEvent();
    $createEvent = $addEvent->printOut();
    if ($createEvent) {
        echo "<a href='../addEvent/addEvent.php'>Create Event</a></br>";
    }
    $downloadImg = new ActionDownloadImg();
    $downloadImg = $downloadImg->printOut();
    if ($downloadImg) {
        zipImages();
        echo "<a href='file.zip'>Download Img</a></br>";
    }
    $getOwnEvents = new ActionGetOwnEvent();
    $ownEvents = $getOwnEvents->printOut();
    $downloadCSV = new ActionDownloadImg();
    $downloadCSV = $downloadCSV->printOut();
    if ($downloadCSV) {
        echo "<form action='dashboard.php' method='POST'>
        <SELECT name='id_event'>";
        for ($i = 0; $i < count($ownEvents); $i++) {
            echo "<option value=" . $ownEvents[$i]->id_pub . ">" . $ownEvents[$i]->title_pub . "</option>";
        }
        echo " 
        </SELECT>
        <input type='hidden' name='access_dashboard'>
        <input type='submit' name='submitIdEvent' value='Download Event CSV'>
        </form>";
        if (isset($_POST['submitIdEvent'])) {
            downloadEventSubscribers($_POST['id_event']);
            echo "<a href='../index/file.csv'><a/><br>";
        }
    }
}
function product_for_id($id, $allProducts)
{
    for ($i = 0; $i < count($allProducts); $i++) {
        if ($id == $allProducts[$i]->id) {
            return $allProducts[$i];
        }
    }
}
function event_for_id($id, $ownEvents)
{
    for ($i = 0; $i < count($ownEvents); $i++) {
        if ($id == $ownEvents[$i]->id_pub) {
            return $ownEvents[$i];
        }
    }
}
function stock_for_id($id, $allStock)
{
    for ($i = 0; $i < count($allStock); $i++) {
        if ($id == $allStock[$i]->id_stock) {
            return $allStock[$i];
        }
    }
}
function size_for_id($id, $allSize)
{
    for ($i = 0; $i < count($allSize); $i++) {
        if ($id == $allSize[$i]->id) {
            return $allSize[$i];
        }
    }
}
function order_for_id($id, $allOrders)
{
    for ($i = 0; $i < count($allOrders); $i++) {
        if (count($allOrders) > 1 && $id == $allOrders[$i][0]->id) {
            return $allOrders[$i];
        } else {
            if ($id == $allOrders[$i][0]->id) {
                return $allOrders[$i][0];
            }
        }
    }
}
