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
                    <th>Имя пользователя</th>
                    <th>е-mail</th>
                    <th>Текст задачи</th>
                    <th>Изображение</th>
                    <th>Изменить задание</th>
                </tr>
                <?php foreach ($tasks as $tasksList): ?>
                    <tr>

                        <td><?php echo $tasksList['username'];?></td>
                        <td><?php echo $tasksList['email'];?></td>
                        <td><?php echo $tasksList['text'];?></td>
                        <td><img src="<?php echo $tasksList['image'];?>" alt=""></td>
                        <td>
                            <a href="/task/<?php echo $tasksList['id'];?>">
                                <img src="\template\images\home\edit.png" alt="">
                            </a>
                           </td>


                    </tr>
                <?php endforeach; ?>


            </table>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>