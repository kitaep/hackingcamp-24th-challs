<?php
    $functions = get_defined_functions();
    
    $df = "";
    foreach ($functions["internal"] as $key => $value) {
        $df = $df . $value . ", ";
    }
    echo $df;