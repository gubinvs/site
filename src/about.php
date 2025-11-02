<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="css/encomp-nku-project-style.css" media="all">
    <meta name="description" content="Информация о компании `Компоненты энергии">
    <title>О компании - Компоненты энергии</title>
</head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(98501628, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/98501628" style="position:absolute; left:-9999px;" alt="#" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<body>
    <!--Подключение header-->
    <?php include "php/modules/header.php" ?>
    <!--Основная секция страницы-->
    <main>
        <?php include "php/modules/about-main-section.php" ?>
        <?php include "php/modules/egrul-table-section.php" ?>
        <?php include "php/modules/feedback-section.php" ?>
    </main>
    <!--Подключение header-->
    <?php include "php/modules/footer.php" ?>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>

</html>