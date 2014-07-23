<?php

/*
** Estupendo/Stum
** version: 0.0.1
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

    $query = collection(site)->find()->toArray();
    $siteInfo = array('siteInfo' => $query[0]);

    // Render data for theme
    $app->render('admin/index.php', $siteInfo, 200);

  });
