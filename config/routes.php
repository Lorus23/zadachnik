<?php

return array(
    //Создание задачи
    'task/create' => 'task/create',

    //Сортировка данных в таблице с пагинацией
    'task/Sortbyusername/page-([0-9]+)' => 'task/Sortbyusername/$1',
    'task/Sortbyemail/page-([0-9]+)' => 'task/Sortbyemail/$1',
    'task/Sortbystatus/page-([0-9]+)' => 'task/Sortbystatus/$1',

    //Сортировка данных в таблице
    'task/Sortbyusername' => 'task/Sortbyusername',
    'task/Sortbyemail' => 'task/Sortbyemail',
    'task/Sortbystatus' => 'task/Sortbystatus',

    //Кабинет администратора
    'cabinet/page-([0-9]+)' => 'cabinet/index/$1',
    'cabinet' => 'cabinet/index',

    // Пользователь:
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    // Главная страница
    'page-([0-9]+)'=>'site/index/$1',
    'index.php' => 'site/index/$1', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);