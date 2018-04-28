<?php

include_once ROOT.'/components/Pagination.php';

/**
 * Контроллер SiteController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex($page=1)
    {
        $tasks = tasks::getTasksList($page, $sort = 'username');
        $total = tasks::getTotalTasks();

        $pagination = new Pagination(10,$page, tasks::SHOW_BY_DEFAULT, 'page-');

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }


}
