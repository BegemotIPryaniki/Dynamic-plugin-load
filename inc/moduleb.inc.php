<?php

    //***************************** //
    // Dynamic plug-in load on PHP. //
    // Example.                     //
    // Author: Andrew S. Apanasenko //
    // Mail: andrewa@nicos.ru       //
    // **************************** //

    if(defined('__MAIN_FILE__')){
        $modname[] = 'moduleb';
        $modparam['moduleb']['title'] = 'Included module B';
        $modparam['moduleb']['func'] = array('modb' => 'main_ModuleB');
    }
    else
        die('Something is missing!');


    function main_ModuleB()
    {
        print 'This is function response from plug-in Module B';
    }

?>