<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://encomponent.ru/css/encomp-nku-project-style.css" media="all">
    <meta http-equiv="refresh" content="0;url=https://encomponent.ru/snab.php">
</head>

<style>
    .closed__container {
        position: relative;
    }

    .closed__title {
        position: absolute;
        top: 150px;
        right: 60px;
        width: 400px;
        font-size: 64px;
        font-weight: 900;
    }
</style>

<body>
    <!--Подключение header-->
    <?php include "php/modules/header.php" ?>
    <!--Основная секция страницы-->
    <main>
        <section>
            <div class="container closed__container">
                <img src="img/closed.jpg">
                <div class="closed__title">Технические работы :(</div>
            </div>
            <br><br>
        </section>
    </main>
    <!--Подключение header-->
    <?php include "php/modules/footer.php" ?>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>

</html>