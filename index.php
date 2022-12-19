<?php

    //***************************** //
    // Dynamic plug-in load on PHP. //
    // Example.                     //
    // Author: Andrew S. Apanasenko //
    // Mail: andrewa@nicos.ru       //
    // **************************** //

    define('__MAIN_FILE__', true);
    define('__INCLUDE_PATH__', 'inc');

    function getModulesList() {
        $array = array_diff(scandir(__INCLUDE_PATH__), array('.', '..'));
        foreach($array as &$elem) {
            $elem_tmp = $elem;
            if(!is_dir($elem_tmp)&&preg_match('/[^\s]*[.]inc[.]php$/mi', $elem))
                $elem = $elem_tmp;
            else
                $array = array_diff($array, array($elem));
        }
        unset($elem);
    return $array;
    }

    foreach(getModulesList() as $module) {
        include(__INCLUDE_PATH__.'/'.$module);
    }

    function func_Call($fn){
        if(is_callable($fn))
            call_user_func($fn);
        else
            echo 'Fuction ['.$fn.'] is corrupted!';
    }

    foreach($modname as $mod) {
        foreach ($modparam[$mod]['func'] as $key => $value) {
            $filters[$key] = $value;
            $menu .= '<a href="index.php?fn='.$key.'">'.$modparam[$mod]['title'].'</a><br>';
        }
    }

    echo $menu;

    foreach($filters as $key => $value) {
        if($key === $_GET["fn"]){
            func_Call($value);
            break;
        }
    }

?>