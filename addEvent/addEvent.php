<?php 
    $user_id = 1;
    $getAllOccurence = file_get_contents('http://bdecesi-api.ml/api/all_occurrence');
    $allOccurence = json_decode($getAllOccurence);
?>
<form action="createEvent.php" method='POST' enctype="multipart/form-data">
    Title :
    <input type="text" name='input_title'></input><br>
    Content : 
    <input type="text" name='input_content'></input><br>
    Cost : 
    <input type="text" name='input_cost'></input><br>
    Start Date :
    <input type='date' name='start_date'></input><br>
    End Date :
    <input type='date' name='end_date'></input><br>
    <input type="hidden" name='input_id_user' value="<?php 
        echo $user_id;
    ?>"></input>
    Occurence : 
    <SELECT name='id_occurence'>
        <?php foreach($allOccurence as $occurence){
             echo "<option value=".$occurence->id.">".$occurence->label."</option>";
        }?>
    </SELECT><br>
    Images : 
    <input type="file" name="files[]" id="files" multiple></input><br>
    <input type='submit' name='sumbit_event'></input><br>
</form> 