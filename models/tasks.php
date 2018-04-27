<?php
/**
 * Class tasks  модель для работы с задачами
 */

class tasks
{
    const SHOW_BY_DEFAULT = 3;

    public static function getTasksList($page = 1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;



        if (isset($_GET['order'])){
            $order = $_GET['order'];
        } else {
            $order = 'asset_num';
        }

        if (isset($_GET['sort'])){
            $sort = $_GET['sort'];
        } else {
            $sort = 'ASC';
        }

        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql = 'SELECT * FROM zadachi LIMIT '.self::SHOW_BY_DEFAULT.' OFFSET '.$offset

        ;

       // echo $sql; die;
        $result = $db->prepare($sql);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        $taskList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $taskList[$i]['id'] = $row['id'];
            $taskList[$i]['username'] = $row['username'];
            $taskList[$i]['email'] = $row['email'];
            $taskList[$i]['text'] = $row['text'];
            $taskList[$i]['image'] = $row['image'];
            $i++;
        }
        return $taskList;
    }

    public static function addTask($username, $email, $text, $uploaddir)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $sql = 'INSERT INTO zadachi (username, email, text, image) VALUES (:username, :email, :text, :image)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':username', $username,  PDO::PARAM_STR);
        $result->bindParam(':email', $email,  PDO::PARAM_STR);
        $result->bindParam(':text', $text,  PDO::PARAM_STR);
        $result->bindParam(':image', $uploaddir,  PDO::PARAM_STR);
        return $result->execute();

    }

    public static function getTotalTasks()
    {
        // Соединение с БД
        $db = Db::getConnection();
        $sql = 'SELECT COUNT(id) AS count FROM zadachi';
        $result = $db->prepare($sql);
        $result -> setFetchMode(PDO::FETCH_ASSOC);
        $row = $result -> fetch();
        return $row['count'];
    }

}