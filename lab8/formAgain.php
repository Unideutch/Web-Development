<?php
    $email = trim(strip_tags($_POST["email"]));
    if ( file_exists($email . ".txt") ) {        
        $file = fopen($email . ".txt", "r");
        if (!feof){
            echo "<ul>";
            while (!feof($file)){
                $line = fgets($file);
                echo "<li>" . $line . "</li>" . "\n";
            }
        echo "</ul>";
        } else {
            echo "Error: wrong data format";
        }
    } else {
        echo "Undefined email";
    }
?>