<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-4 padding-right">

                         <div class="signup-form">
                            <h2>Новая задача</h2>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <input type="username" name="username" placeholder="Имя пользователя" value="<?php echo $username; ?>"/>
                                <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                                <input type="text" name="text" placeholder="Текст задачи" value="<?php echo $text; ?>"/>
                                <input type="file" name="image" id="fileToUpload">
                                <input type="submit" name="submit" class="btn btn-default" value="Создать" />
                            </form>
                        </div>


                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>