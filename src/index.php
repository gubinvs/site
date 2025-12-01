<?php
    // Цвет полосы в header
    $color_line_header = "#DFE0E1";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 🔹 Favicon и стили -->
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../css/index-page-encomponent-style.css" media="all">
    <meta name="description" content=" ">
    <title>Компоненты энергии - Производство автоматизированных систем, материальное и информационное обеспечение</title>
    <!-- 🔹 Заголовок страницы (до 60 символов) -->
    <title>Аутсорсинг снабжения — оптимизация закупок и логистики | Компоненты Энергии</title>

    <!-- 🔹 Метатеги -->
    <meta name="description" content="Профессиональный аутсорсинг снабжения: анализ цен, закупка комплектующих, учет и логистика. Оптимизируем процесс обеспечения материалами под ключ.">
    <meta name="keywords" content="аутсорсинг снабжения, закупка комплектующих, снабжение предприятий, оптимизация закупок, логистика, 1С УНФ, управление поставками">

    <!-- 🔹 Канонический адрес -->
    <link rel="canonical" href="https://encomponent.ru/index.php">

    <!-- 🔹 Open Graph для соцсетей -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Компоненты энергии">
    <meta property="og:description" content=" ">
    <meta property="og:url" content="https://encomponent.ru/index.php">
    <meta property="og:image" content="https://encomponent.ru/img/logo_encomponent_main.png">

    <!-- 🔹 Структурированные данные (Schema.org) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Компоненты энергии",
            "description": "    ",
            "provider": {
                "@type": "Organization",
                "name": "Компоненты энергии",
                "url": "https://encomponent.ru/index.php",
                "logo": "https://encomponent.ru/img/logo_encomponent_main.png"
            },
            "areaServed": "Россия",
            "serviceType": "Аутсорсинг снабжения"
        }
    </script>

</head>

<body>
    <!--Подключение header-->
    <?php include "php/modules/header.php" ?>
    <!--Основная секция страницы-->
    <main>
        <?php include "php/modules/home-main-section.php" ?>
    </main>
    <!--Подключение header-->
    <?php include "php/modules/footer.php" ?>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>

</html>