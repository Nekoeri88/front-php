<?php
    echo "<tbody>";
        foreach($members as $value) {
            echo "<tr><td>".$value['value']."</td></tr><br>";
        }
    echo "</tbody>";
