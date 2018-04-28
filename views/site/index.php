<?php include ROOT . '/views/layouts/header.php'; ?>

<?php


?>

<section>
    <p>Список задач:</p>
        <table class="table-bordered table-striped table">
            <tr>
                <th><a href="/task/Sortbyusername">Имя пользователя</a></th>
                <th><a href="/task/Sortbyemail">е-mail</a></th>
                <th>Текст задачи</th>
                <th><a href="/task/Sortbystatus">Статус</a></th>
                <th>Изображение</th>
            </tr>



            <?php foreach ($tasks as $tasksList): ?>
                <tr>
                    <td ><?php echo $tasksList['username'];?></td>
                    <td ><?php echo $tasksList['email'];?></td>
                    <td ><?php echo $tasksList['text'];?></td>
                    <td ><?php if ($tasksList['status']='1'){echo 'не выполнено';} else {echo 'выполнено';}?></td>
                    <td ><img src="<?php echo $tasksList['image'];?>" alt=""></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php echo $pagination -> get();?>


</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>