<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Tuupola\\Middleware\\' => array($vendorDir . '/tuupola/callable-handler/src', $vendorDir . '/tuupola/slim-basic-auth/src', $vendorDir . '/tuupola/slim-jwt-auth/src'),
    'Tuupola\\Http\\Factory\\' => array($vendorDir . '/tuupola/http-factory/src'),
    'Slim\\' => array($vendorDir . '/slim/slim/Slim'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log/Psr/Log'),
    'Psr\\Http\\Server\\' => array($vendorDir . '/psr/http-server-handler/src', $vendorDir . '/psr/http-server-middleware/src'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'Firebase\\JWT\\' => array($vendorDir . '/firebase/php-jwt/src'),
    'FastRoute\\' => array($vendorDir . '/nikic/fast-route/src'),
    'App\\' => array($baseDir . '/App'),
);
