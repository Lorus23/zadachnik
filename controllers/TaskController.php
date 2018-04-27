<?php
/**
 * Created by PhpStorm.
 * User: Sayat
 * Date: 026 26.04.18
 * Time: 18:10
 */

class TaskController
{
    public function actionCreate()
    {
        $username = false;
        $email = false;
        $text = false;
        $result = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $username = $_POST['username'];
            $email = $_POST['email'];
            $text = $_POST['text'];

            // Флаг ошибок
            $errors = false;
            $uploaddir = "upload/images/".basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir)) {
                echo "Файл корректен и был успешно загружен.\n";
            } else {
                echo "Возможная атака с помощью файловой загрузки!\n";
            }
            tasks::addTask($username, $email, $text,$uploaddir);
        }


        // Подключаем вид
        require_once(ROOT . '/views/tasks/taskAdd.php');
        return true;
    }

}