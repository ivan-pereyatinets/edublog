<?php
session_start();
require_once('header.php');
?>
    <div class="container px-4 px-lg-5">
        <h2 class="text-center">Добавление статьи</h2>
        <div class="col-md-6 mx-auto">
            <form action="php/addarticleHahdler.php" method="post">
                <div class="mb-3">
                    <label for="">Заголовок</label>
                    <input style="width: 600px" name="header" type="text" class="form-control" required placeholder="Заголовок">
                </div>
                <div class="mb-3">
                    <label for="">Текст статьи</label><br>
                    <textarea  style="height: 200px; width: 600px" name="content" placeholder="Текст статьи" class="form-element message"></textarea>
                </div>
                <div class="mb-3">
                    <p><strong>Автор: </strong><?= $_SESSION['name']; ?></p>
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary">
                </div>
            </form>
        </div>
    </div>
<?php
require_once('footer.php');
?>