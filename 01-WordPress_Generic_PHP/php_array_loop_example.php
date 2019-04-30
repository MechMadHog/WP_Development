<?php
    $names = array('Michael', 'Chris', 'Ardan',  'Nikita');
    $count = 0;
   
    while ($count < count ($names)) {
            echo "<li>Hi, my name is $names[$count] </li>";
        $count++;
    }

?>