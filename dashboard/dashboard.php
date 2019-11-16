<?php 
    if(isset($_POST['access_dashboard'])){
        $user_role = $_POST['user_role'];
        echo "user_role : ".$user_role;
        if($user_role > 2){
            dashboard_eleve();
        }
    }
    /* 
        abstract class Action{
            abstract function getPrio();
            abstract function exec();
        }
        class Action+*nom action* extends Action{
            function getPrio($prio){
                return Priority->*Priorité de l'action*
            }
            function exec(){
                if(prio < actual_prio){

                }
            }
        }
        class Priority{
            static $*nom de prio* = *value de prio*;
            static ....
        }
    */
?>