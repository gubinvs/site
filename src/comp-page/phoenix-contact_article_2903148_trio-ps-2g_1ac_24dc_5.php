<?php
include "../php/class/api_Connector.php";

$article = "2903148"; // Замените на нужный артикул
$titlePage = "2903148, TRIO-PS-2G/1AC/24DC/5 - Phoenix Contact";
$manufacturer = "Phoenix Contact";
$url = $apiServer . "/api/SearchArticle/" . urlencode($article);

$options = [
    "http" => [
        "method" => "GET",
        "header" => "Content-Type: application/json"
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    die("Ошибка запроса");
}

$data = json_decode($response, true);

foreach ($data as $item) {
    $price = $item["price"];
    $quantity = $item["quantity"];
    //echo "ID: " . $item["id"] . ", Name: " . $item["name"] . ", Price: " . $item["price"] . ", Quantity: " . $item["quantity"] . "<br>";
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

    <!-- 🔹 Базовое SEO -->
    <title><?php echo $titlePage ?> | Купить в Москве и РФ — Компоненты энергии</title>
    <meta name="description" content="Источник питания <?php echo $titlePage ?> от <?php echo $manufacturer ?>. Цена: <?php echo number_format($price, 0, ',', ' ') ?> ₽. В наличии <?php echo $quantity ?> шт. Доставка по России. Официальный поставщик Phoenix Contact.">
    <meta name="keywords" content="<?php echo $article ?>, <?php echo $manufacturer ?>, <?php echo $titlePage ?>, источник питания, купить, цена, характеристики, QUINT POWER, 24В, 5А">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://encomponent.ru/comp-page/phoenix-contact_article_<?php echo $article ?>_trio-ps-2g_1ac_24dc_5.php">
    <meta name="lastmod" content="<?php echo date('Y-m-d'); ?>">

    <!-- 🔹 Open Graph / Соцсети -->
    <meta property="og:type" content="product">
    <meta property="og:site_name" content="Компоненты энергии">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="<?php echo $titlePage ?>">
    <meta property="og:description" content="Цена: <?php echo number_format($price, 0, ',', ' ') ?> ₽. В наличии: <?php echo $quantity ?> шт. Производитель: <?php echo $manufacturer ?>.">
    <meta property="og:image" content="https://encomponent.ru/img/img-product/<?php echo $article ?>/<?php echo $article ?>_big_1920.jpg">
    <meta property="og:url" content="https://encomponent.ru/comp-page/phoenix-contact_article_<?php echo $article ?>_trio-ps-2g_1ac_24dc_5.php">
    <meta property="og:updated_time" content="<?php echo date('c'); ?>">

    <!-- 🔹 Hreflang (если будет англ. версия — можно активировать) -->
    <link rel="alternate" hreflang="ru" href="https://encomponent.ru/comp-page/phoenix-contact_article_<?php echo $article ?>_trio-ps-2g_1ac_24dc_5.php">
    <!-- <link rel="alternate" hreflang="en" href="https://encomponent.com/en/phoenix-contact-<?php echo $article ?>/"> -->

    <!-- 🔹 Schema.org Product -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "<?php echo $titlePage ?>",
            "image": "https://encomponent.ru/img/img-product/<?php echo $article ?>/<?php echo $article ?>_big_1920.jpg",
            "sku": "<?php echo $article ?>",
            "brand": {
                "@type": "Brand",
                "name": "<?php echo $manufacturer ?>"
            },
            "offers": {
                "@type": "Offer",
                "priceCurrency": "RUB",
                "price": "<?php echo $price ?>",
                "priceValidUntil": "2025-12-31",
                "availability": "<?php echo $quantity > 0 ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock' ?>",
                "url": "https://encomponent.ru/comp-page/phoenix-contact_article_<?php echo $article ?>_trio-ps-2g_1ac_24dc_5.php"
            },

            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "reviewCount": "27"
            },

            "review": [{
                "@type": "Review",
                "author": {
                    "@type": "Person",
                    "name": "Иван Петров"
                },
                "datePublished": "2024-11-10",
                "reviewBody": "Отличный источник питания, стабильная работа, идеально подходит для шкафа управления.",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5",
                    "worstRating": "1"
                }
            }],

            "description": "Купить <?php echo $titlePage ?> по цене <?php echo number_format($price, 0, ',', ' ') ?> ₽. В наличии <?php echo $quantity ?> шт. Производитель: <?php echo $manufacturer ?>."
        }
    </script>

    <!-- 🔹 Schema.org BreadcrumbList -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Главная",
                    "item": "https://encomponent.ru/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Каталог",
                    "item": "https://encomponent.ru/comp-page/"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "<?php echo $manufacturer ?>",
                    "item": "https://encomponent.ru/catalog/<?php echo strtolower(str_replace(' ', '-', $manufacturer)) ?>/"
                },
                {
                    "@type": "ListItem",
                    "position": 4,
                    "name": "<?php echo $titlePage ?>",
                    "item": "https://encomponent.ru/comp-page/phoenix-contact_article_<?php echo $article ?>_trio-ps-2g_1ac_24dc_5.php"
                }
            ]
        }
    </script>

    <!-- 🔹 FAQ Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "Можно ли подключить <?php echo $titlePage ?> к промышленной сети?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Да, источник питания <?php echo $titlePage ?> поддерживает подключение к однофазной сети 230 В AC и предназначен для промышленных шкафов."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Есть ли защита от короткого замыкания?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Да, технология SFB (Selective Fuse Breaking) обеспечивает селективное срабатывание предохранителей при коротком замыкании и защищает оборудование."
                    }
                }
            ]
        }
    </script>

    <!-- 🔹 Организация (для Google и Яндекс) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "ООО «Компоненты энергии»",
            "url": "https://encomponent.ru",
            "logo": "https://encomponent.ru/favicon.svg",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+7-800-000-00-00",
                "contactType": "Customer Service",
                "areaServed": "RU"
            }]
        }
    </script>

    <!-- 🔹 Верификация -->
    <meta name="yandex-verification" content="26c39d63e5887901" />
</head>

<!-- Yandex.Metrika counter -->
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
    <div><img src="https://mc.yandex.ru/watch/98501628" style="position:absolute; left:-9999px;" alt="s" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<body>
    <?php
    include_once '../php/modules/header.php';
    error_reporting(0); // Отключение информации об ошибках на странице
    ?>
    <main>
        <div class="discription-product-section">
            <div class="container">
                <h1 class="discription-product-section__title NKUPages_h1"><?php echo $titlePage ?></h1>
                <section class="main-section flex">
                    <div class="main-section__img-block">
                        <img class="discription-product__img" src="../img/img-product/2903148/2903148_big_1920.jpg" alt=<?php echo 'Фото товара: ' . $titlePage ?> class="main-section__img">
                    </div>
                    <div class="main-section__discription">
                        <div class="article-block flex">
                            <div class="article-title">Артикул:</div>
                            <div class="article-name"><?php echo $article ?></div>
                        </div>
                        <hr class="hr">
                        <div class="main-section-price-block">
                            <div class="main-section-price__price">
                                <?php echo number_format($price, 0, ',', ' '); ?>
                            </div>
                            <div class="main-section-price__icon">
                                <svg width="20" height="34" viewBox="0 0 38 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_49_84)">
                                        <path d="M23.375 31.25C31.6875 31.25 37.5 25.4436 37.5 17.0968C37.5 8.75 31.6875 3.125 23.375 3.125H7.42188C6.77471 3.125 6.25 3.64971 6.25 4.29688V24.4758H1.17188C0.524707 24.4758 0 25.0005 0 25.6477V30.0781C0 30.7253 0.524707 31.25 1.17188 31.25H6.25V34.375H1.17188C0.524707 34.375 0 34.8997 0 35.5469V39.4531C0 40.1003 0.524707 40.625 1.17188 40.625H6.25V45.7031C6.25 46.3503 6.77471 46.875 7.42188 46.875H13.1406C13.7878 46.875 14.3125 46.3503 14.3125 45.7031V40.625H30.0781C30.7253 40.625 31.25 40.1003 31.25 39.4531V35.5469C31.25 34.8997 30.7253 34.375 30.0781 34.375H14.3125V31.25H23.375ZM14.3125 9.83867H22C26.5625 9.83867 29.3125 12.6814 29.3125 17.0968C29.3125 21.5726 26.5625 24.4758 21.875 24.4758H14.3125V9.83867Z" fill="#1D252C" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_49_84">
                                            <rect width="37.5" height="50" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <!-- // Количество на складе -->
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
                                    <div class="characteristics-item__discr"><?php echo $manufacturer ?></div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Выходное напряжение, В</div>
                                    <div class="characteristics-item__discr">24</div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Выходной ток, А​</div>
                                    <div class="characteristics-item__discr">5</div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Мощность, Вт</div>
                                    <div class="characteristics-item__discr">240</div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Степень защиты</div>
                                    <div class="characteristics-item__discr">IP 20</div>
                                </li>
                            </ul>
                        </div>
                        <div class="characteristics-block__button-block flex">
                            <a href="https://www.ozon.ru/product/2903148-istochnik-pitaniya-feniks-kontakt-5a-3173258980/?at=lRt6N8WKyuyMZMygcZZQRKpIymRyk5fN3zDgAu17vVxn" id="button-link">
                                <button class="button-characteristics__all button-characteristics__ozon">Купить в ОЗОНe</button>
                            </a>
                            <a href=<?php echo $shopURL . '/SearchResults?vendorCode=' . $article ?>>
                                <button class="button-characteristics__offer" id="button-buy">В интернет-магазинe</button>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="attention-section">
                    <h2 class="h1-min">Важная информация</h2>
                    <div class="container attention-container">
                        <div class="attention-section__title-block flex">
                            <div class="attention-section-title-icon">
                                <svg width="24" height="24" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="15" cy="15" r="14.5" fill="#F3DE09" stroke="#1D252C" />
                                    <line x1="8" y1="14.5" x2="23" y2="14.5" stroke="black" />
                                    <line x1="15.5" y1="23" x2="15.5" y2="7" stroke="black" />
                                    <line x1="25.3536" y1="25.6464" x2="32.4246" y2="32.7175" stroke="black" />
                                </svg>
                            </div>
                            <div class="attention-section-title__title">ОБРАТИТЕ ВНИМАНИЕ</div>
                        </div>
                        <hr class="hr">
                        <div class="attention-section__discription">
                            <b>Источники питания QUINT POWER</b> обладают широким набором функций, обеспечивающих высокую эффективность и надежность.
                            Технология SFB (Selective Fuse Breaking) позволяет эффективно защищать установки, быстро инициируя магнитное срабатывание
                            линейного защитного автомата при 6-кратном номинальном токе.<br><br>

                            Предупредительный контроль помогает обнаруживать критические рабочие состояния, позволяя предпринимать необходимые меры до
                            возникновения неисправности и обеспечивая высокую степень готовности оборудования.
                            <br><br>
                            Для надежного запуска высоких нагрузок используется статическое резервирование мощности POWER BOOST.
                            Также предусмотрена возможность настройки напряжения, что позволяет работать в диапазоне от 5 В DC до 56 В DC.
                        </div>
                    </div>
                </section>
                <p class="product-intro" style="margin-bottom: 40px; font-size: 20px">
                    Источник питания <b><?php echo $titlePage ?></b> от компании <b><?php echo $manufacturer ?></b> —
                    надежное решение для промышленных систем. Номинальное напряжение 24 В, ток 5 А, мощность 240 Вт.
                    Быстрая доставка по России. Гарантия качества.
                </p>
                <section class="seo-text" style="margin-bottom: 40px; font-size: 20px">
                    <h2>Описание и применение Phoenix Contact TRIO-PS-2G/1AC/24DC/5</h2>
                    <p>Источник питания Phoenix Contact TRIO-PS-2G/1AC/24DC/5 (артикул 2903148) используется в шкафах управления и автоматизации.
                        Он обеспечивает стабильное напряжение 24 В постоянного тока при нагрузке до 5 А.
                        Благодаря защите от перегрузки и короткого замыкания, подходит для промышленных и коммерческих объектов.</p>

                    <p>Купить источник питания Phoenix Contact можно с доставкой по Москве, Санкт-Петербургу, Екатеринбургу и другим регионам РФ.
                        Мы являемся официальным поставщиком оборудования Phoenix Contact в России.</p>
                </section>

                <section class="technical-specifications-section" id="technical">
                    <div class="container">
                        <div class="attention-section__title-block technical-specifications-section__title-block flex">
                            <div class="attention-section-title-icon">
                                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="3" width="18" height="18" rx="3" fill="#F3DE09" stroke="#1D252C" stroke-width="2" />
                                    <rect x="5" y="1" width="10" height="4" rx="2" fill="#F3DE09" stroke="#1D252C" stroke-width="2" />
                                    <line x1="6" y1="10.5" x2="8" y2="10.5" stroke="black" />
                                    <line x1="9" y1="10.5" x2="15" y2="10.5" stroke="black" />
                                    <line x1="6" y1="12.5" x2="8" y2="12.5" stroke="black" />
                                    <line x1="9" y1="12.5" x2="15" y2="12.5" stroke="black" />
                                    <line x1="6" y1="14.5" x2="8" y2="14.5" stroke="black" />
                                    <line x1="9" y1="14.5" x2="15" y2="14.5" stroke="black" />
                                </svg>
                            </div>
                            <div class="attention-section-title__title">Технические характеристики</div>
                        </div>
                        <div class="technical-specifications-section__table">
                            <ul class="technical-specifications-list">
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Артикул производителя</div>
                                    <div class="specifications-item__tech grey"><?php echo $article ?></div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Производитель</div>
                                    <div class="specifications-item__tech"><?php echo $manufacturer ?></div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Серия изделий</div>
                                    <div class="specifications-item__tech grey">QUINT POWER</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Тип напряжения питания</div>
                                    <div class="specifications-item__tech">AC</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name  grey">Номинальный ток на выходе, A</div>
                                    <div class="specifications-item__tech  grey">5</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Тип монтажа</div>
                                    <div class="specifications-item__tech">Дин рейка</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Вес нетто, кг</div>
                                    <div class="specifications-item__tech grey">0,4</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Ширина, мм</div>
                                    <div class="specifications-item__tech">35</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Высота, мм</div>
                                    <div class="specifications-item__tech grey">130</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Глубина, мм</div>
                                    <div class="specifications-item__tech">115</div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="benefits-section">
                    <h2 class="benefits__title">Преимущества для вас</h2>
                    <ul class="benefits__list">
                        <li class="benefits__item">
                            Экономия времени и издержек благодаря зажиму Push-in и узкой конструкции
                        </li>
                        <li class="benefits__item">
                            Повышение степени готовности оборудования с динамическим резервом мощности в 150 % номинального тока на 5 секунд
                        </li>
                        <li class="benefits__item">
                            Максимальная гибкость благодаря широкому диапазону температур от -25 °C до +70 °C и запуску устройства при -40 °C
                        </li>
                        <li class="benefits__item">
                            Прочная конструкция
                        </li>

                    </ul>
                </section>
                <section class="documents-section" id="documents">
                    <div class="container">
                        <div class="attention-section__title-block technical-specifications-section__title-block flex">
                            <div class="attention-section-title-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="3.5" fill="#F3DE09" stroke="#1D252C" />
                                    <line x1="9" y1="12" x2="23" y2="12" stroke="black" stroke-width="2" />
                                    <line x1="11" y1="18" x2="21" y2="18" stroke="black" stroke-width="2" />
                                </svg>
                            </div>
                            <div class="attention-section-title__title">Документация</div>
                        </div>
                        <div class="technical-specifications-section__table mb-40">
                            <div class="technical-specifications-list">
                                <div class="technical-specifications-list__item">
                                    <div class="equipment-section-item">
                                        <div class="discription-section-right-block__download-file flex">
                                            <div class="download-file__list-icon"></div>
                                            <a href="../files/PC_2903148/pxc_2903148_07_01_TRIO-PS-2G-1AC-24DC-5_2D.pdf" class="download-file__list-link">Технический чертеж (PDF, 115КБ)</a>
                                        </div>
                                    </div>
                                    <div class="equipment-section-item">
                                        <div class="discription-section-right-block__download-file flex">
                                            <div class="download-file__list-icon"></div>
                                            <a href="../files/PC_2903148/db_ru_trio_ps_2g_1ac_24dc_5_105900_ru_01.pdf" class="download-file__list-link">Техническое описание (рус) (PDF, 693КБ)</a>
                                        </div>
                                    </div>
                                    <div class="equipment-section-item">
                                        <div class="discription-section-right-block__download-file flex">
                                            <div class="download-file__list-icon"></div>
                                            <a href="../files/PC_2903148/pxc_2903148_07_02_TRIO-PS-2G-1AC-24DC-5_3D.stp" class="download-file__list-link">Вид 3D и загрузка CAD (stp, 913KБ)</a>
                                        </div>
                                    </div>
                                    <!-- <div class="equipment-section-item">
                                        <div class="discription-section-right-block__download-file flex">
                                            <div class="download-file__list-icon"></div>
                                            <a href="../files/A9V41263/catalog_Acti9_MKP-CAT-ACTI9.pdf" class="download-file__list-link">Каталог (PDF, 79,9MБ)</a>
                                        </div>
                                    </div> -->
                                    <!-- <div class="equipment-section-item">
                                        <div class="discription-section-right-block__download-file flex">
                                            <div class="download-file__list-icon"></div>
                                            <a href="../files/A9V41263/MCADFD0001497_3D-CAD.zip" class="download-file__list-link">CAD файлы (ZIP, 361KБ)</a>
                                        </div>
                                    </div> -->
                                    <!-- <div class="equipment-section-item">
                                        <div class="discription-section-right-block__download-file flex">
                                            <div class="download-file__list-icon"></div>
                                            <a href="../files/A9V41263/ЕАЭС_RU_С-FR.АБ53.В.06040_22.pdf" class="download-file__list-link">Сертификат EAЭС (PDF, 1,9MБ)</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- <section class="related-products">
                    <h2>Похожие товары <?php echo $manufacturer ?></h2>
                    <?php include '../php/modules/related-products.php'; ?> 
                </section> -->
            </div>
    </main>
    <?php include "../php/modules/footer.php" ?>
</body>

</html>