<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST["textinput"];
    if (empty($name)){
        echo 'You didn\'t type in anything!';
    }
    else{
        echo "Welcome, $name !";
    }
}

?>