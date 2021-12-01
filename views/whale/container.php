<h1> La page qui reçoit des infos </h1>

<?php
    foreach ($_POST as $key => $value) {
        echo $key.$value;
    }
?>