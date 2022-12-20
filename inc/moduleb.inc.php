<?php

    //***************************** //
    // Dynamic plug-in load on PHP. //
    // Example.                     //
    // Author: Andrew S. Apanasenko //
    // Mail: andrewa@nicos.ru       //
    // **************************** //

    if(!defined('__MAIN_FILE__')) 
        die('Something is missing!');

    $modparam['moduleb']['title'] = 'Included module B';
    $modparam['moduleb']['func'] = array('modb' => 'main_ModuleB');

    function main_ModuleB()
    {
        print 'This is function response from plug-in Module B';
    }

?>
