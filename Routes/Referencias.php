<?php
    $routes = new Routes();    
    $routes->add("/", "HomeRota");
    $routes->add("/admin", "AdminRota");
    $routes->add("/sobre", "SobreRota");

    $routes->submit();