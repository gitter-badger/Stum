<?php

/*
** Estupendo/Stum
** version: 0.0.2
** description: Content manager complementation for Cockpit
** Site: https://github.com/Estupendo/Stum
** license: Apache 2.0
** Autor: Jonas Orrico
*/


define('THEME_PATH', 'themes');

// Load Slim object and configuration
$app = new \Slim\Slim(

  array(

    // App settings
    'templates.path' => THEME_PATH,

    // Cookies settings
    'cookies.domain' => 'localhost',
    'cookies.secret_key' => 'CHANGE_ME',

    // Development settings
    'mode' => 'dev',
    'debug' => true

  )

);

$app->setName('Stum');
