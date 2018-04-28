<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <h4>Привет, <?php echo $user['username'];?>!</h4>
            <ul>

                <li>Список задач пользователей</li>
            </ul>

            <table class="table-bordered table-striped table">
                <tr>
                    <th><a href="/task/Sortbyusername">Имя пользователя</a></th>
                    <th><a href="/task/Sortbyemail">е-mail</a></th>
                    <th>Текст задачи</th>
                    <th><a href="/task/Sortbystatus">Статус</a></th>
                    <th>Изображение</th>
                    <th>Изменить задание</th>
                </tr>
                <?php foreach ($tasks as $tasksList): ?>
                    <tr>

                        <td ><?php echo $tasksList['username'];?></td>
                        <td ><?php echo $tasksList['email'];?></td>
                        <td ><?php echo $tasksList['text'];?></td>
                        <td ><?php if ($tasksList['status']='1'){echo 'не выполнено';} else {echo 'выполнено';}?></td>
                        <td ><img src="<?php echo $tasksList['image'];?>" alt=""></td>
                        <td>
                            <a href="/task/<?php echo $tasksList['id'];?>">
                                <img src="\template\images\home\edit.png" alt="">
                            </a>
                           </td>


                    </tr>
                <?php endforeach; ?>


            </table>
            <?php echo $pagination -> get();?>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>