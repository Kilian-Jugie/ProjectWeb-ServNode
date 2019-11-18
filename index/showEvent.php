<?php



$event_data = file_get_contents("http://www.bdecesi-api.ml/api/actif_event_data/" . $_SESSION['user_log']->campus_id);
$reactions = file_get_contents("http://www.bdecesi-api.ml/api/all_reaction");
        $reactions = json_decode($reactions);
        $event_data = json_decode($event_data);
        foreach($event_data as $event){
            $event_picture = file_get_contents("http://www.bdecesi-api.ml/api/picture_pub/" . $event->id_pub);
            $event_picture = json_decode($event_picture);
            echo "<div class=\"row content\">
            <div class=\"col-md-7  ImageAndDate\">";
                foreach($event_picture as $picture){
                    echo "<img src=\"../src/img/associationImg/$picture->url\" alt=\"imgContact\" class=\"associationImg\">";
                }
                echo "<p>Date: " . $event->date_pub . "</p>
            </div>

            <div class=\"col-md-5 associationText\">
                <h2>" . $event->title_pub . "</h2>
                <p>" . $event->content_pub . "</p>
                <p> cout : " . $event->cost_pub . " € </p>";
                echo "<form method=\"post\"action=\"addParticipate.php\">
                <input type=\"hidden\" name=\"pub_id\" value=\"" . $event->id_pub . "\">
                <input type=\"hidden\" name=\"user_id\" value=\"" . $_SESSION['user_log']->user_id . "\">
                <input type=\"submit\" value=\"Participer\">
                </form>
                <div><a href=\"#\">Accéder à l'association</a></div>";
            echo "</div>
        </div>" ;
        }
?>      