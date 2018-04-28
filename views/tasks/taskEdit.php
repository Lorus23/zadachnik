<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-4 padding-right">

                         <div class="signup-form">
                            <h2>Редактировать задачу</h2>
                            <form method="post" enctype="multipart/form-data">
                                <input type="username" name="username" value="<?php echo $task['username']; ?>"/>
                                <input type="email" name="email" value="<?php echo $task['email']; ?>"/>
                                <input type="text" name="text" value="<?php echo $task['text']; ?>"/>
                                <select name="status">
                                    <option value="1">Выполнено</option>
                                    <option value="0">Не выполнено</option>
                                </select>
                                <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                            </form>
                        </div>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>