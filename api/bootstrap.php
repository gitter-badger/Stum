<?php

/*
** Estupendo/Stum
** version: 0.0.2
** description: Content manager complementation for Cockpit
** Site: https://github.com/Estupendo/Stum
** license: Apache 2.0
** Autor: Jonas Orrico
*/

// Define API main routes
  $app->get('/', function() use ($app) {

    // Render theme
    $app->render('index.php');

  });

  // Define static template page for 'Error 404' (Not Found)
  $app->notFound(function() use ($app) {

    $app->render('404.html');

  });


// Core API modules
  require 'admin/bootstrap.php';
  #require 'ads/bootstrap.php';
  #require 'agenda/bootstrap.php';
  #require 'galerias/bootstrap.php';
  #require 'pages/bootstrap.php';
  #require 'posts/bootstrap.php';
  #require 'upload/bootstrap.php';
  #require 'users/bootstrap.php';
  #require 'videos/bootstrap.php';


// Custom API modules
  #require 'classificados/bootstrap.php';
  #require 'publicacoes/bootstrap.php';

// Run application
  $app->run();
