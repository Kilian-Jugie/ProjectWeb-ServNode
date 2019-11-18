<?php 
    echo '<form action="dashboard.php" method="POST">
            <SELECT name="priority">
                <option value=5>Admin</option>
                <option value=4>BDE</option>
                <option value=3>Personnel CESI</option>
                <option value=2>Asso</option>
                <option value=1>Etudiant</option>
            </SELECT>
        <input type="submit" name="access_dashboard" value="Access Dashboard">
    </form>';
?>