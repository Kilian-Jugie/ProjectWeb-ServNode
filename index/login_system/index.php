<?php 
    session_start();
    // echo $_SESSION['user_log'];
    if(isset($_SESSION['user_log'])){
        echo "Bienvenue ".$_SESSION['user_log']->pseudo."<br>";
        echo "<a href='log_out.php'>Log Out</a>";
    }else{
        echo "<html>
        <body>
            <form method='POST' action='login.php'>
                <input type='text' name='user_email' placeholder='Email'><br>
                <input type='password' name='password' placeholder='Password'><br>
                <input type='submit' name='submit' value='Login '><br>
            </form>
            <a href='sign_up.php'> To Sign Up Click Here</a>";

        if(isset($_GET['error'])){
            if($_GET['error'] == "password"){
                echo "<br><h2>Wrong Password<h2>";
            }
        }
        echo "</body></html>";
        
    }
