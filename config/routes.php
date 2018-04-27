<?php

return array(
    'page-([0-9]+)'=>'site/index/$1',
    'task/create' => 'task/create',
    'cabinet' => 'cabinet/index',
    // Пользователь:
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    // Главная страница
    'index.php' => 'site/index/$1', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);