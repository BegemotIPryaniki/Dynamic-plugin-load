<?php

    // **************************** //
    // Dynamic plug-in load on PHP. //
    // Example.                     //
    // Author: Andrew S. Apanasenko //
    // Mail: andrewa@nicos.ru       //
    // **************************** //

    if(!defined('__MAIN_FILE__')) 
        die('Something is missing!');

    $modparam['modulea']['title'] = 'Included module A';
    $modparam['modulea']['func'] = array('moda' => 'main_ModuleA');
   
    function main_ModuleA()
    {
        print 'This is function response from plug-in Module A';
    }

?>
