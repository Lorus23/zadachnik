<?php

/**
 * Контроллер CabinetController
 * Кабинет пользователя
 */
class CabinetController
{

    /**
     * Action для страницы "Кабинет пользователя"
     */
    public function actionIndex($page=1)
    {
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        $tasks = tasks::getTasksList($page, $sort = 'username');
        // Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        $pagination = new Pagination(10,$page, tasks::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }



}
