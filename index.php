<?php

    // **************************** //
    // Dynamic plug-in load on PHP. //
    // Example.                     //
    // Author: Andrew S. Apanasenko //
    // Mail: andrewa@nicos.ru       //
    // **************************** //

    // For security
    define('__MAIN_FILE__', true);

    // Modules dir
    define('__INCLUDE_PATH__', 'inc');

    // Search modules in directory by mask
    function getModulesList() {
        $array = array_diff(scandir(__INCLUDE_PATH__), array('.', '..'));
        foreach($array as $elem) {
            $elem_tmp = $elem;
            if(!is_dir($elem_tmp)&&preg_match('/[^\s]*[.]inc[.]php$/mi', $elem))
                $elem = $elem_tmp;
            else
                $array = array_diff($array, array($elem));
        }
        unset($elem);
    return $array;
    }

    // Include all found modules
    foreach(getModulesList() as $module) {
        include(__INCLUDE_PATH__.'/'.$module);
    }
    
    // Calling a function by name
    function func_Call($fn){
        if(is_callable($fn))
            call_user_func($fn);
        else
            echo 'Fuction ['.$fn.'] is corrupted!';
    }

    // Show menu 
    foreach($modparam as $mod) {
        foreach ($mod['func'] as $key => $value) {
            $filters[$key] = $value;
            $menu .= '<a href="index.php?fn='.$key.'">'.$mod['title'].'</a><br>';
        }
    }

    echo $menu;

    // Selection Handler
    foreach($filters as $key => $value) {
        if($key === $_GET["fn"]){
            func_Call($value);
            break;
        }
    }

?>
