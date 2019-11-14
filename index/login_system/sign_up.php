<html>
    <body>
        <form action="add_user.php" method="POST"  enctype="multipart/form-data">
             <input type="text" name="first_name" placeholder="First Name"><br>
             <input type="text" name="last_name" placeholder="Last Name"><br>
             <input type="text" name="email" placeholder="Email Address"><br>
             <input type="password" name="password" placeholder="Password"><br>
             <input type="password" name="confirm_password" placeholder="Confirm Password"><br>
             <input type="text" name="address" placeholder="Address"><br>
             <input type="text" name="user_pseudo" placeholder="Pseudo"><br>
             <input type="text" name="age" placeholder="Age"><br>
             Choose your city:            
            <?php 
                echo "<SELECT name='city'>";
                $get_campus = file_get_contents("http://bdecesi-api.ml/api/select_campus");
                $get_campus = json_decode($get_campus, true);
                $label_campus = array();
                for($i = 0; $i < count($get_campus); $i++){
                    $label_campus[$i] = $get_campus[$i]['label'];
                    echo "<option value=".$get_campus[$i]['id'].">".$label_campus[$i]."</option>";
                }
                echo "</SELECT><br>"
            ?>
            Choose your profile pictures:
            <input type="file" name="image" placeholder="Select Your Profile Photo"><br>
            <input type="checkbox" name="news_letter">
                <label for="news_letter">News Letter</label>
            <br>
            <input type="submit" name="submit" value="Submit Form"><br>
            <a href="index.php">To Login</a>
        </form>
    </body>
</html>
<!-- add_user('lastname','firstname','email@address','password','thumbnail.extention','address','user_pseudo',/*BOOLEAN*/ 'newsletter','age','role_id','campus_id'); -->
