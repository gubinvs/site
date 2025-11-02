<?php
include "../php/class/api_Connector.php";

$article = "PUGVNG-115YC-200"; // артикул
$titlePage = "PUGVNG-115YC-200, Провод силовой ПуГВ нг(А)-LS 1х1,5 Желто-зеленый в коробке по 200 метров";
$manufacturer = "Цветлит";

$url = $apiServer . "/api/SearchArticle/" . urlencode($article);
$options = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: application/json"
    ]
];
$context = stream_context_create($options);
$response = @file_get_contents($url, false, $context);
if ($response === FALSE) {
    $price = 0;
    $quantity = 0;
} else {
    $data = json_decode($response, true);
    $price = $data[0]["price"] ?? 0;
    $quantity = $data[0]["quantity"] ?? 0;
}

$imageUrl = "https://encomponent.ru/img/img-product/PUGVNG-115YC-200/PUGVNG-115YC-200_img_page.jpg";
$pageUrl = "https://encomponent.ru/pages/{$article}.php";
$description = "Купить {$titlePage}. Производитель {$manufacturer}. В наличии {$quantity} шт. с доставкой по России. Кабель монтажный ПуГВнг(А)-LS — гибкий медный провод с низким дымо- и газовыделением.";
$keywords = "ПуГВнг(А)-LS, {$manufacturer}, {$article}, провод, монтажный, гибкий, кабель, 1х1,5, желто-зеленый, купить, цена";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../css/encomp-nku-project-style.css" media="all">

    <title><?php echo $titlePage ?></title>
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">

    <link rel="canonical" href="<?php echo $pageUrl ?>">
    <link rel="alternate" hreflang="ru" href="<?php echo $pageUrl ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="product">
    <meta property="og:title" content="<?php echo $titlePage ?>">
    <meta property="og:description" content="<?php echo $description ?>">
    <meta property="og:image" content="<?php echo $imageUrl ?>">
    <meta property="og:url" content="<?php echo $pageUrl ?>">
    <meta property="og:site_name" content="ENCOMPONENT.RU">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $titlePage ?>">
    <meta name="twitter:description" content="<?php echo $description ?>">
    <meta name="twitter:image" content="<?php echo $imageUrl ?>">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "<?php echo $titlePage ?>",
            "image": "<?php echo $imageUrl ?>",
            "description": "<?php echo $description ?>",
            "sku": "<?php echo $article ?>",
            "brand": {
                "@type": "Brand",
                "name": "<?php echo $manufacturer ?>"
            },
            "offers": {
                "@type": "Offer",
                "priceCurrency": "RUB",
                "price": "<?php echo number_format($price, 0, '.', '') ?>",
                "availability": "<?php echo $quantity > 0 ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock' ?>",
                "url": "<?php echo $pageUrl ?>"
            }
        }
    </script>
</head>

<!-- Yandex.Metrika -->
<script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
            if (document.scripts[j].src === r) return;
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
    <div><img src="https://mc.yandex.ru/watch/98501628" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika -->

<body>
    <?php include_once '../php/modules/header.php'; ?>
    <main>
        <div class="discription-product-section container" itemscope itemtype="https://schema.org/Product">
            <h1 itemprop="name" class="NKUPages_h1"><?php echo $titlePage ?></h1>
            <section class="main-section flex">
                <div class="main-section__img-block">
                    <img itemprop="image" class="discription-product__img" src="<?php echo $imageUrl ?>" alt="<?php echo $titlePage ?>">
                </div>
                <div class="main-section__discription">
                    <div class="article-block flex">
                        <div class="article-title">Артикул:</div>
                        <div class="article-name" itemprop="sku"><?php echo $article ?></div>
                    </div>
                    <hr class="hr">

                    <div class="main-section-price-block" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <div class="main-section-price__price" itemprop="price">
                            <?php echo number_format($price, 0, ',', ' '); ?>
                        </div>
                        <meta itemprop="priceCurrency" content="RUB">
                        <link itemprop="availability" href="<?php echo $quantity > 0 ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock' ?>">
                        <div class="main-section-price__icon">
                            <svg width="20" height="34" viewBox="0 0 38 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.375 31.25C31.6875 31.25 37.5 25.4436 37.5 17.0968C37.5 8.75 31.6875 3.125 23.375 3.125H7.42188C6.77471 3.125 6.25 3.64971 6.25 4.29688V24.4758H1.17188C0.524707 24.4758 0 25.0005 0 25.6477V30.0781C0 30.7253 0.524707 31.25 1.17188 31.25H6.25V34.375H1.17188C0.524707 34.375 0 34.8997 0 35.5469V39.4531C0 40.1003 0.524707 40.625 1.17188 40.625H6.25V45.7031C6.25 46.3503 6.77471 46.875 7.42188 46.875H13.1406C13.7878 46.875 14.3125 46.3503 14.3125 45.7031V40.625H30.0781C30.7253 40.625 31.25 40.1003 31.25 39.4531V35.5469C31.25 34.8997 30.7253 34.375 30.0781 34.375H14.3125V31.25H23.375ZM14.3125 9.83867H22C26.5625 9.83867 29.3125 12.6814 29.3125 17.0968C29.3125 21.5726 26.5625 24.4758 21.875 24.4758H14.3125V9.83867Z" fill="#1D252C" />
                            </svg>
                        </div>
                    </div>

                    <div class="<?php echo $quantity > 0 ? 'warehouse-item-quantity' : 'warehouse-item-quantity warehouse-item-quantity__null' ?>">
                        <div class="warehouse-item-quantity__name">В наличии:</div>
                        <div class="warehouse-item-quantity__quantity"><?php echo $quantity ?></div>
                        <div class="warehouse-item-quantity__discr">шт.</div>
                    </div>

                    <div class="characteristics-block">
                        <div class="characteristics-block__title">Основные характеристики:</div>
                        <ul class="characteristics-block__list">
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Производитель:</div>
                                <div class="characteristics-item__discr" itemprop="brand"><?php echo $manufacturer ?></div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Тип провода:</div>
                                <div class="characteristics-item__discr">ПуГВнг(A)-LS</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Сечение провода:</div>
                                <div class="characteristics-item__discr">1х1,5</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Цвет провода:</div>
                                <div class="characteristics-item__discr">Желто-зеленый</div>
                            </li>
                        </ul>
                    </div>

                    <div class="characteristics-block__button-block flex">
                        <a href="#technical"><button class="button-characteristics__all">Все характеристики</button></a>
                        <a href="<?php echo $shopURL . '/Basket/?vendorCode=' . $article ?>"><button class="button-characteristics__offer">Купить</button></a>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include "../php/modules/footer.php" ?>
</body>

</html>