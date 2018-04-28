<?php include ROOT . '/views/layouts/header.php'; ?>
    <link href="/template/css/modal.css" rel="stylesheet">

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-4 padding-right">

                    <div class="signup-form">
                        <h2>Новая задача</h2>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <input type="text" name="username" id="username" placeholder="Имя пользователя" id="username"
                                   value="<?php echo $username; ?>"/>
                            <input type="email" name="email" placeholder="E-mail" id="email" value="<?php echo $email; ?>"/>
                            <input type="text" name="text" placeholder="Текст задачи" id="text" value="<?php echo $text; ?>"/>
                            <input type="file" name="image" id="fileToUpload">
                            <input type="submit" name="submit" class="btn btn-default" value="Создать"/>
                            <a href="#openModal" onclick="getData()">Предпросмотр</a>
                        </form>
                    </div>

                    <div id="openModal" class="modalDialog">
                        <div>
                            <a href="#close" title="Закрыть" class="close">X</a>
                            <div>Имя пользователя: <span id="usernameX"></span> </div>
                            <div>E-mail: <span id="emailX"></span></div>
                            <div>Текс: <span id="textX"></span></div>
                        </div>
                    </div>

                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>


<?php include ROOT . '/views/layouts/footer.php'; ?>

