<?php //in /app/bootstrap.php

$app = new App(); //TODO: Replace with application object

$app['autoloader']->registerNamespace(
        'SnSDev\\TaskListDemo',
        implode(
          DIRECTORY_SEPARATOR,
          [__DIR__, '..', 'src', 'SnSDev', 'TaskListDemo']
        )
);
