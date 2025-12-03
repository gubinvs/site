<?php
include "php/class/api_Connector.php";
// Цвет полосы в header
$color_line_header = "#FFFFFF";

// Запрос в базу данных для получения рандомных 8-ми товаров
$urlBestsellers = $apiServer . "/api/Bestsellers/";

$options = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: application/json"
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($urlBestsellers, false, $context);

if ($response === FALSE) {
    die("Ошибка запроса");
}

$data = json_decode($response, true);

foreach ($data as $item) {
    $id = $item["id"];
    $imgLinkIconCard = $item["imgLinkIconCard"];
    $vendorCodeBestseller = $item["vendorCode"];
    $nameComponent = $item["nameComponent"];
    $quantityBestseller = $item["quantity"];
    $linkPage = $item["linkPage"];
    $priceBestseller = $item["price"];
    $basketImgPath = $item["basketImgPath"];
    $guidId = $item["guid"];
    $manufacturer = $item["manufacturer"];
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 🔹 Favicon и стили -->
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../css/encomp-nku-project-style.css" media="all">
    <link rel="stylesheet" href="../css/encomponent_style.css" media="all">

    <!-- 🔹 Заголовок страницы (до 60 символов) -->
    <title>Интернет магазин - официальный сайт каталог для комплексной автоматизации с недорогой доставкой по России | Компоненты Энергии</title>

    <!-- 🔹 Метатеги -->
    <meta name="description" content="Купить в интернет магазине или заказать из каталога с доставкой по России шнайдер, кэаз, феникс контакт можно по телефону +7 (812) 921-59-71 или через интернет магазин.">
    <meta name="keywords" content="сайт интернет магазин цены каталог">

    <!-- 🔹 Канонический адрес -->
    <link rel="canonical" href="https://encomponent.ru/index.php">

    <!-- 🔹 Open Graph для соцсетей -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Компоненты энергии">
    <meta property="og:description" content="Купить в интернет магазине или заказать из каталога с доставкой по России шнайдер, кэаз, феникс контакт можно по телефону +7 (812) 921-59-71 или через интернет магазин.">
    <meta property="og:url" content="https://encomponent.ru/index.php">
    <meta property="og:image" content="https://encomponent.ru/img/logo_encomponent_main.png">

    <!-- 🔹 Структурированные данные (Schema.org) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Компоненты энергии",
            "description": "Купить в интернет магазине или заказать из каталога с доставкой по России шнайдер, кэаз, феникс контакт можно по телефону +7 (812) 921-59-71 или через интернет магазин.",
            "provider": {
                "@type": "Organization",
                "name": "Компоненты энергии",
                "url": "https://encomponent.ru/index.php",
                "logo": "https://encomponent.ru/img/logo_encomponent_main.png"
            },
            "areaServed": "Россия",
            "serviceType": "Электротехническое оборудование"
        }
    </script>
    <!-- 🔹 Yandex.Metrika -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(98501628, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/98501628" style="position:absolute; left:-9999px;" alt="#" /></div>
    </noscript>

</head>

<body>
    <!--Подключение header-->
    <?php include "php/modules/header.php" ?>
    <!--Основная секция страницы-->
    <main>
        <?php include "php/modules/home-main-section.php" ?>
        <?php include "php/modules/please-note-section.php" ?>
        <?php include "php/modules/index-page-seo-block.php" ?>
        <div class="container">
            <h2 class="feedback-section__title"><span class="yellow-diamond"></span> Обсудить условия заказа или получить консультацию</h2>
        </div>
        <?php include "php/modules/feedback-section.php" ?>
    </main>
    <!--Подключение header-->
    <?php include "php/modules/footer.php" ?>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>

</html>