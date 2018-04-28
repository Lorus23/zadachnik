<?php

return array(
    'page-([0-9]+)'=>'site/index/$1',
    'task/create' => 'task/create',


    'task/Sortbyusername/page-([0-9]+)' => 'task/Sortbyusername/$1',
    'task/Sortbyusername' => 'task/Sortbyusername',
    'task/Sortbyemail' => 'task/Sortbyemail',
    'task/Sortbystatus' => 'task/Sortbystatus',


    'cabinet' => 'cabinet/index',
    // Пользователь:
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    // Главная страница
    'index.php' => 'site/index/$1', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);