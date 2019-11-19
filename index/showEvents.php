<div class="container-fluid displaying-event">
    <h1>LES EVENTS</h1>
    <?php
    if (isset($_GET['log'])) {
        if ($_GET['log'] == "inscrit") {
            echo "
            <div class='error-message-event'>Vous êtes déjà inscrit</div>";
        } elseif ($_GET['log'] == "sucess") {
            echo "<div class='success-message-event'> Félicitation vous êtes inscrit</div>";
        }
    }
    ?>
    <?php

    $i = 0;
    $event_data = file_get_contents("http://www.bdecesi-api.ml/api/actif_event_data/" . $_SESSION['user_log']->campus_id);
    $reactions = file_get_contents("http://www.bdecesi-api.ml/api/all_reaction");
    $reactions = json_decode($reactions);
    $event_data = json_decode($event_data);

    foreach ($event_data as $event) {
        $i++;
        $event_picture = file_get_contents("http://www.bdecesi-api.ml/api/picture_pub/" . $event->id_pub);
        $event_picture = json_decode($event_picture);
        if ($i % 2 != 0) {
            echo "<div class=\"row content\">
        <div class=\"col-md-7  ImageAndDate\">";
        } else if ($i % 2 == 0) {
            echo "<div class=\"row reverseContent\">
        <div class=\" col-md-7 ImageAndDate\">";
        }
        foreach ($event_picture as $picture) {
            echo "<img src=\"../src/img/associationImg/$picture->url\" alt=\"imgContact\" class=\"associationImg\">";
        }
        echo "<p>Date: " . $event->date_pub . "</p>
            </div>

            <div class=\"col-md-5 associationText\">
                <div><h2>" . $event->title_pub . "</h2></div>
                <div><p class='event-description'>" . $event->content_pub . "</p></div>
                <div><p class='event-description'> cout : " . $event->cost_pub . " € </p></div>";
        echo "<div class='form-event-method'><form class='form-event' method=\"post\"action=\"addParticipate.php\">
                <input type=\"hidden\" name=\"pub_id\" value=\"" . $event->id_pub . "\">
                <input type=\"hidden\" name=\"user_id\" value=\"" . $_SESSION['user_log']->user_id . "\">
                <input class='btn btn-warning redesign-event-button' type=\"submit\" value=\"Participer\">
                </form></div>";
        echo "<div class='form-event-method'><form  class='form-event' method=\"post\"action=\"addCommentaire.php\">
                <input type=\"hidden\" name=\"pub_id\" value=\"" . $event->id_pub . "\">
                <input type=\"hidden\" name=\"user_id\" value=\"" . $_SESSION['user_log']->user_id . "\">
                <input  class='redesign-event-button-bis' type=\"text\" name=\"content\">
                <input class='btn btn-warning redesign-event-button' type=\"submit\" name=\"Envoyer\" value=\"Envoyer\">
                </form></div>";
        echo "<div><a href=\"#\">Accéder à l'association</a></div>";
        echo "<div>{$data}</div>";
        echo "</div>
        </div>";
    }
    ?>
</div>