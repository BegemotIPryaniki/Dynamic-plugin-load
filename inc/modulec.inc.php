<?php

    //***************************** //
    // Dynamic plug-in load on PHP. //
    // Example.                     //
    // Author: Andrew S. Apanasenko //
    // Mail: andrewa@nicos.ru       //
    // **************************** //

    if(defined('__MAIN_FILE__')){
        $modname[] = 'modulec';
        $modparam['modulec']['title'] = 'Included module C';
        $modparam['modulec']['func'] = array('modc' => 'main_ModuleC');
    }
    else
        die('Something is missing!');


    function main_ModuleC()
    {
        print 'This is function response from plug-in Module C';
    }

?>