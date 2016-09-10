<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$app = require_once implode(
        DIRECTORY_SEPARATOR,
        [__DIR__, '..', 'app', 'app.php']
);

$app->run();