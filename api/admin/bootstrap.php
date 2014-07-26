<?php

/*
** Estupendo/Stum
** version: 0.0.2
** description: Content manager complementation for Cockpit
** Site: https://github.com/Estupendo/Stum
** license: Apache 2.0
** Autor: Jonas Orrico
*/

/* Admin API module
** - core API
** version: 0.0.1
*/

// Define API main routes
  $app->get('/admin', function() use ($app){

    // Render data for theme
    $app->render('admin/index.php');

  });
