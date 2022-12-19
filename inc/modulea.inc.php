<?php

    //***************************** //
    // Dynamic plug-in load on PHP. //
    // Example.                     //
    // Author: Andrew S. Apanasenko //
    // Mail: andrewa@nicos.ru       //
    // **************************** //

    if(defined('__MAIN_FILE__')){
        $modname[] = 'modulea';
        $modparam['modulea']['title'] = 'Included module A';
        $modparam['modulea']['func'] = array('moda' => 'main_ModuleA');
    }
    else
        die('Something is missing!');


    function main_ModuleA()
    {
        print 'This is function response from plug-in Module A';
    }

?>