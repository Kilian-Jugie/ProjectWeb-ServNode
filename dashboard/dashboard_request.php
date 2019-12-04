<?php
include 'request.php'; 
     abstract class Action{
        abstract function getPrio();
        abstract function exec();
        public function printOut(){
           return $this->exec();
        }
    }

    class Priority{
        static $ADMIN = 5;
        static $BDE = 4;
        static $PERSONNEL_CESI = 3;
        static $ASSO = 2;
        static $ETUDIANT = 1;
    }

    class ActionGetUserData extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$ETUDIANT;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                $get_user_data = file_get_contents("http://www.bdecesi-api.ml/api/user_data/".$_SESSION['user_id']);
                $get_user_data = json_decode($get_user_data);    
                return $get_user_data;
            }else{
                return false;
            }
        }
    }
    class ActionUpdateUserData extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$ETUDIANT;
        }
        function exec(){
           if($this->getPrio() <= getUserRole()){
               $updateUserData = "";
                if(isset($_POST['user_data'])){
                        $actual_user_data_object = json_decode($_POST['user_data']);
                        $get_campus = file_get_contents("http://bdecesi-api.ml/api/select_campus");
                        $get_campus = json_decode($get_campus, true);
                        $user_data_update = (object)[
                            'firstname' => $actual_user_data_object->firstname,
                            'lastname' => $actual_user_data_object->lastname,
                            'email' => $_POST['email'],
                            'thumbnail' => $actual_user_data_object->thumbnail,
                            'address' => $_POST['address'],
                            'pseudo' => $_POST['pseudo'],
                            'newsletter' => $actual_user_data_object->newsletter,
                            'age' => $actual_user_data_object->age,
                            'campus_id' => $_POST['campus']
                                ];
                        $updateUserData = callAPI('PUT', 'http://bdecesi-api.ml/api/update_own_data/'.$_SESSION['user_id'], json_encode($user_data_update));
                }
            return $updateUserData;
            }else{
                return false;
            }
        }
    }
        class ActionShowOwnCommands extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$ETUDIANT;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                $get_user_data = file_get_contents("http://www.bdecesi-api.ml/api/own_order/".$_SESSION['user_id']);
                $get_user_data = json_decode($get_user_data);    
                return $get_user_data;
            }else{
                return false;
            }
        }
    }
    class ActionShowDetails extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$ETUDIANT;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                $showOwnCommands = new ActionShowOwnCommands();
                if($user_orders = $showOwnCommands->printOut()){
                    for($i = 0; $i < COUNT($user_orders); $i++){
                        $get_user_data[$i] = file_get_contents("http://www.bdecesi-api.ml/api/order_detail/".$user_orders[$i]->id);
                        $get_user_data[$i] = json_decode($get_user_data[$i]);
                    } 
                    // print_r($get_user_data);
                    return $get_user_data;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
    }
    class ActionGetOwnEvent extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$ASSO;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                $ownEvents = file_get_contents("http://www.bdecesi-api.ml/api/own_event/".$_SESSION['user_id']);
                $ownEvents = json_decode($ownEvents);
                return $ownEvents;
             }else{
                 return false;
             }
        }
    }
    class ActionGetAllEvents extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                if(isset($_POST['user_data'])){
                    $allEvents = file_get_contents("http://www.bdecesi-api.ml/api/own_event/".$_POST['campus']);
                    $allEvents = json_decode($allEvents);
                    return $allEvents;
                }
             }else{
                 return false;
             }
        }
    }
    class ActionUpdateOwnEvent extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$ASSO;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                if(isset($_POST['update_the_event'])){
                    $objDate = new DateTime($_POST['date']);
                    $date = date_format($objDate, 'Y-m-d h:i:s');
                    $event_data = (object)[
                         'title' => $_POST['title'],
                         'content' => trim(htmlspecialchars($_POST['content'])),
                         'date' => $date,
                         'cost' => $_POST['cost']
                    ];
                    return callAPI('PUT', 'http://bdecesi-api.ml/api/update_event/'.$_POST['event_id'], json_encode($event_data));
                }    
             }else{
                 return false;
             }
        }
    }
    class ActionUpdateAllEvent extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                // $allEvent = file_get_contents("http://www.bdecesi-api.ml/api/all_event")
             }else{
                 return false;
             }
        }
    }
    class ActionGetAllProducts extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                $allProducts = file_get_contents("http://www.bdecesi-api.ml/api/all_product");
                return $allProducts;
             }else{
                 return false;
             }
        }
    }
    class ActionGetAllProductsType extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                $allProductsType = file_get_contents("http://www.bdecesi-api.ml/api/all_product_type");
                return $allProductsType;
             }else{
                 return false;
             }
        }
    }
    
    class ActionUpdateProduct extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                if(isset($_POST['update_the_product'])){
                     $product_data = (object)[
                         'label' => $_POST['label'],
                         'description' => trim(htmlspecialchars($_POST['description'])),
                         'urlimage' => $_POST['url_image'],
                         'price' => $_POST['price'],
                         "id_product_type" => $_POST['product_type']
                     ];
                    return callAPI('PUT', 'http://bdecesi-api.ml/api/update_product/'.$_POST['product_id'], json_encode($product_data));
                }    
            }else{
                 return false;
             }
        }
    }
    class ActionUpdateStock extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                if(isset($_POST['changeStock'])){
                    $stock = (object)[
                        'quantity' => $_POST['quantity_stock']
                    ];
                    return callAPI('PUT', 'http://bdecesi-api.ml/api/update_stock/'.$_POST['id_stock'], json_encode($stock));
                }
             }else{
                 return false;
             }
        }
    }
    class ActionGetAllStock extends Action {
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                $getAllStock = file_get_contents('http://www.bdecesi-api.ml/api/all_stock');
                $allStock = json_decode($getAllStock);
                return $allStock;
            }else{
                return false;
            }
        }
    }
    class ActionUpdateTypeProduct extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                
             }else{
                 return false;
             }
        }
    }
    class ActionGetSize extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                $getSize = file_get_contents('http://www.bdecesi-api.ml/api/all_size');
                $sizes = json_decode($getSize);
                return $sizes;
            }else{
                return false;
            }
        }
    }
    class ActionUpdateSize extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                if(isset($_POST['changeSize'])){
                    $size = (object)[
                        'label' => $_POST['label']
                    ];
                    return callAPI('PUT', 'http://bdecesi-api.ml/api/update_size/'.$_POST['id_size'], json_encode($size));
                }else{
                    return false;
                 }    
            }else{
                return false;
            }
        }
    }
    class ActionGetAllOrders extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                $getAllOrders = file_get_contents('http://www.bdecesi-api.ml/api/all_order');
                $allOrders = json_decode($getAllOrders);
                // print_r($allOrders);
                for($i = 0; $i < count($allOrders); $i++){
                    $get_all_orders[$i] = file_get_contents("http://www.bdecesi-api.ml/api/order_detail/".$allOrders[$i]->id);
                    $get_all_orders[$i] = json_decode($get_all_orders[$i]);
                }
                return $get_all_orders;
            }else{
                return false;
            }
        }
    }
    class ActionGetAllStatus extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$ADMIN;
        }
        function exec(){
             if($this->getPrio() <= getUserRole()){
                $getAllUser = file_get_contents('http://www.bdecesi-api.ml/api/all_user');
                $allUsers = json_decode($getAllUser);
                for($i = 0; $i < count($allUsers); $i++){
                    $userStatus[$i] = (object)[
                        'pseudo' => $allUsers[$i]->pseudo,
                        'id_role' => $allUsers[$i]->role_id,
                        'user_id' => $allUsers[$i]->id
                    ];
                }
                return $userStatus;
             }else{
                 return false;
             }
        }
    }
    class ActionGetAllRole extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$ADMIN;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                $getAllRole = file_get_contents('http://www.bdecesi-api.ml/api/all_role');
                $allRole = json_decode($getAllRole);
                return $allRole;
            }else{
                return false;
            }
        }
    }   
    class ActionUpdateUserStatus extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                if(isset($_POST['change_role'])){
                    $role = (object)[
                        'id_role' => $_POST['id_role']
                    ];
                    return callAPI('PUT', 'http://www.bdecesi-api.ml/api/update_user_status/'.$_POST['user_id'], json_encode($role));
                }else{
                    return false;
                }
            }      
        }  
    } 
    class ActionAddProduct extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                if(isset($_POST['submitProduct'])){
                    $pathImg = stockPathImg($_FILES['input_urlimg']);
                    $newProduct = (object)[
                        "input_label" => $_POST['input_label'],
                        "input_desc" => $_POST['input_desc'],
                        "input_urlimg" => $pathImg,
                        "price" => $_POST['input_price'],
                        "input_id_product_type" => $_POST['input_id_product_type']
                    ];
                    return callAPI('POST', 'http://www.bdecesi-api.ml/api/add_product/', json_encode($newProduct));
                }else{
                    return "new";
                }
            }else{
                return false;
            }
        }
    }
    class ActionAddEvent extends Action{
        function getPrio(){
            $priority = new Priority();
            return $priority::$BDE;
        }
        function exec(){
            if($this->getPrio() <= getUserRole()){
                return true;
            }else{
                return false;
            }
        }
    }
    function getUserRole(){
        return $_SESSION['priority'];
    }
    function stockPathImg($files){
        $allowtypes = ['jpg', 'PNG', 'png', 'jpeg'];
        $targetDir = '../src/img/shop/';
         if(!empty($files['name'])){
                $filename = basename($files['name']);
                $filepath = $targetDir.$filename;
                $filetype = pathinfo($filepath, PATHINFO_EXTENSION);
                if(in_array($filetype, $allowtypes)){
                    if(move_uploaded_file($files['tmp_name'], $filepath)){
                         return $filepath;
                    }else{
                        $errorUpload .= $files['name'].', ';
                    }
                }else{
                    $errorUploadType .= $files['name'].', ';
                }
                
            }
    }

?>