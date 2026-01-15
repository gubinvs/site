<?php
include "../../php/class/api_Connector.php";
$article = "3044115";
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
}

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
<html lang='ru'>

<head>
    <meta charset='UTF-8'>
    <title>3044115, Проходная DIN-клемма UT 4-BU синяя - Phoenix Contact | Компоненты энергии</title>
    <meta name='description' content='Клемму 3044115 UT 4-BU синюю от производителя Phoenix Contact можно купить на сайте Компоненты энергии. Продлагаем ее по цене:  <?php echo $price ?> RUB.'>
    <meta name='keywords' content='Клемма проходная UT 4-BU синяя - артикул 3044115'>
    <meta name='robots' content='index, follow'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' href='https://encomponent.ru/favicon.svg' type='image/svg+xml'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='../../css/encomp-nku-project-style.css'>
    <link rel='canonical' href='https://encomponent.ru/products/phoenix/klemma-phoenix-contact-ut-4-bu-3044115.php'>
    <!--Open Graph-->
    <meta property='og:title' content='3044115, Проходная DIN-клемма UT 4-BU синяя - Phoenix Contact | Компоненты энергии, ее артикул 3044115 — купить можно по цене <?php echo $price ?> ₽'>
    <meta property='og:description' content='Клемму 3044115 UT 4-BU синюю от производителя Phoenix Contact можно купить на сайте Компоненты энергии. Продлагаем ее по цене:  <?php echo $price ?> RUB.'>
    <meta property='og:image' content='https://encomponent.ru/img/img-product/3044115/phoenix_contact-3044115-image.png'>
    <meta property='og:type' content='product'>
    <meta property='og:url' content='https://encomponent.ru/products/phoenix/klemma-phoenix-contact-ut-4-bu-3044115.php'>
    <!-- JSON-LD Product schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "3044115, Проходная DIN-клемма UT 4-BU синяя - Phoenix Contact",
            "image": "https://encomponent.ru/img/img-product/3044115/phoenix_contact-3044115-image.png",
            "description": "Проходная клемма артикул 3044115 UT 4-BU синяя от производителя Phoenix Contact предлагается по цене: <?php echo $price; ?> RUB. В наличии: <?php echo $quantityBestseller; ?> шт.",
            "sku": "3044115",
            "brand": {
                "@type": "Brand",
                "name": "Phoenix Contact"
            },
            "offers": {
                "@type": "Offer",
                "price": <?php echo number_format($price, 2, '.', ''); ?>,
                "priceCurrency": "RUB",
                "availability": "<?php echo ($quantityBestseller > 0) ? "https://schema.org/InStock" : "https://schema.org/OutOfStock"; ?>",
                "url": "https://encomponent.ru/products/phoenix/klemma-phoenix-contact-ut-4-bu-3044115.php",
                "inventoryLevel": {
                    "@type": "QuantitativeValue",
                    "value": <?php echo $quantityBestseller; ?>
                }
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": 4.9,
                "reviewCount": 3
            },
            "review": [{
                    "@type": "Review",
                    "author": {
                        "@type": "Person",
                        "name": "Алексей"
                    },
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": 5
                    },
                    "reviewBody": "Отличный продукт, полностью удовлетворяет ожидания."
                },
                {
                    "@type": "Review",
                    "author": {
                        "@type": "Person",
                        "name": "Игорь"
                    },
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": 5
                    },
                    "reviewBody": "Качество на высоте, рекомендую."
                },
                {
                    "@type": "Review",
                    "author": {
                        "@type": "Person",
                        "name": "Петр Петрович"
                    },
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": 4
                    },
                    "reviewBody": "Покупал для клиента — работает стабильно."
                }
            }
    </script>
    <!-- Yandex.Metrika counter -->
    <script>
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
            k = e.createElement(t);
            a = e.getElementsByTagName(t)[0];
            k.async = 1;
            k.src = r;
            a.parentNode.insertBefore(k, a)
        })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');

        ym(98501628, 'init', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
</head>

<body>
    <!--Yandex.Metrika counter-->
    <noscript>
        <div>
            <img src='https://mc.yandex.ru/watch/98501628' style='position:absolute; left:-9999px;' alt='Яндекс метрика'>
        </div>
    </noscript>
    <!--/Yandex.Metrika counter-->
    <?php
        $color_line_header = $color_line_header ?? null;
        include_once '../../php/modules/header.php';
    ?>
    <main>
        <div class='discription-product-section'>
            <div class='container'>
                <h1 class='discription-product-section__title NKUPages_h1'>3044115, Проходная DIN-клемма UT 4-BU синяя - Phoenix Contact</h1>
                <section class='main-section flex'>
                    <div class='main-section__img-block'>
                        <img src='https://encomponent.ru/img/img-product/3044115/phoenix_contact-3044115-image.png' alt='Изображена клемма на дин рейке, синяя UT 4 BU от Компонентов энергии' class='discription-product__img main-section__img'>
                    </div>
                    <div class='main-section__discription'>
                        <div class='article-block flex'>
                            <div class='article-title'>Артикул:</div>
                            <h6 class='article-name'>3044115</h6>
                        </div>
                        <hr>
                        <div class='main-section-price-block'>
                            <div class='main-section-price__price'>
                                <?php echo number_format($price, 0, ',', ' '); ?>
                            </div>
                            <div class='main-section-price__icon'>
                                <svg width='20' height='34' viewBox='0 0 38 50' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                    <g clip-path='url(#clip0_49_84)'>
                                        <path d='M23.375 31.25C31.6875 31.25 37.5 25.4436 37.5 17.0968C37.5 8.75 31.6875 3.125 23.375 3.125H7.42188C6.77471 3.125 6.25 3.64971 6.25 4.29688V24.4758H1.17188C0.524707 24.4758 0 25.0005 0 25.6477V30.0781C0 30.7253 0.524707 31.25 1.17188 31.25H6.25V34.375H1.17188C0.524707 34.375 0 34.8997 0 35.5469V39.4531C0 40.1003 0.524707 40.625 1.17188 40.625H6.25V45.7031C6.25 46.3503 6.77471 46.875 7.42188 46.875H13.1406C13.7878 46.875 14.3125 46.3503 14.3125 45.7031V40.625H30.0781C30.7253 40.625 31.25 40.1003 31.25 39.4531V35.5469C31.25 34.8997 30.7253 34.375 30.0781 34.375H14.3125V31.25H23.375ZM14.3125 9.83867H22C26.5625 9.83867 29.3125 12.6814 29.3125 17.0968C29.3125 21.5726 26.5625 24.4758 21.875 24.4758H14.3125V9.83867Z' fill='#1D252C' />
                                    </g>
                                    <defs>
                                        <clipPath id='clip0_49_84'>
                                            <rect width='37.5' height='50' fill='white' />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <!--Количество на складе-->
                        <div class='<?php echo $quantity > 0 ? 'warehouse-item-quantity' : 'warehouse-item-quantity warehouse-item-quantity__null' ?>'>
                            <div class='warehouse-item-quantity__name'>В наличии:</div>
                            <div class='warehouse-item-quantity__quantity'><?php echo $quantity ?></div>
                            <div class='warehouse-item-quantity__discr'>шт.</div>
                        </div>
                        <div class='characteristics-block'>
                            <div class='characteristics-block__title'>Основные характеристики:</div>
                            <ul class='characteristics-block__list'>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Производитель:</div>
                                    <div class='characteristics-item__discr'>Phoenix Contact</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Номинальный ток, А:</div>
                                    <div class='characteristics-item__discr'>32</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Расчетное напряжение, В:</div>
                                    <div class='characteristics-item__discr'>до 1000</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Длина, мм:</div>
                                    <div class='characteristics-item__discr'>47,7</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Ширина, мм:</div>
                                    <div class='characteristics-item__discr'>6,2</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Высота, мм:</div>
                                    <div class='characteristics-item__discr'>46,9</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Вес без упаковки, г:</div>
                                    <div class='characteristics-item__discr'>8,9</div>
                                </li>
                            </ul>
                        </div>
                        <!--Кнопки купить в магазинах-->
                            <div class="characteristics-block__button-block flex">
                                <a href="https://www.ozon.ru/product/3044115-ut4-bu-klemma-prohodnaya-sinyaya-feniks-kontakt-1-sht-3384934119/?_bctx=CAQQi6TdAQ&hs=1" id="button-link">
                                    <button class="button-characteristics__all button-characteristics__ozon">Купить в ОЗОНе</button>
                                </a>
                                <a href=<?php echo $shopURL . '/SearchResults?vendorCode=' . $article ?>>
                                    <button class="button-characteristics__offer" id="button-buy">В интернет-магазинe</button>
                                </a>
                            </div>
                        <!--/ Кнопки купить в магазинах-->
                    </div>
                </section>
                <section class='attention-section'>
                    <h2 class='h1-min'>Важная информация</h2>
                    <div class='attention-container'>
                        <div class='attention-section__title-block flex'>
                            <div class='attention-section-title-icon'>
                                <svg width='24' height='24' viewBox='0 0 33 34' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                    <circle cx='15' cy='15' r='14.5' fill='#F3DE09' stroke='#1D252C' />
                                    <line x1='8' y1='14.5' x2='23' y2='14.5' stroke='black' />
                                    <line x1='15.5' y1='23' x2='15.5' y2='7' stroke='black' />
                                    <line x1='25.3536' y1='25.6464' x2='32.4246' y2='32.7175' stroke='black' />
                                </svg>
                            </div>
                            <div class='attention-section-title__title'>ОБРАТИТЕ ВНИМАНИЕ</div>
                        </div>
                        <hr class='hr'>
                        <div class='attention-section__discription'>
                            <b>Проходная клемма UT 4 BU (3044115) </b> — высококачественный элемент для надежного соединения проводников в электрических
                            цепях. Модель предназначена для монтажа на стандартные DIN-рейки и обеспечивает стабильный контакт даже при длительных
                            агрузках. Благодаря прочному негорючему корпусу, удобной конструкции и цветовой маркировке синего цвета, клемма идеально
                            подходит для промышленной автоматики, распределительных щитов и систем управления.
                            <br><br>
                            Клеммы UT 4 BU быстро устанавливаются, выдерживают вибрационные нагрузки, имеют компактные размеры и обеспечивают безопасное
                            подключение проводов в условиях интенсивной эксплуатации. Это оптимальное решение для электрощитового оборудования, где важны
                            качество соединения, надежность и минимальное время монтажа.
                            <br><br>
                            Проходная клемма UT 4 BU (3044115) для надежного соединения проводов на DIN-рейке. Прочный негорючий корпус, стабильный контакт,
                            удобный монтаж. Подходит для электрощитов, систем управления и промышленной автоматики.
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class='container' id='technical'>
            <h3 class='mt-5'>Технические характеристики</h3>
            <table class='table table-bordered table-striped mt-3'>
                <thead class='table-secondary'>
                    <tr>
                        <th>Параметр</th>
                        <th>Значение</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Номинальное напряжение, U<sub>n</sub></td>
                        <td>1000 В</td>
                    </tr>
                    <tr>
                        <td>Номинальный ток</td>
                        <td>32 А (при 4 мм²)</td>
                    </tr>
                    <tr>
                        <td>Диапазон сечения проводов</td>
                        <td>0.14 – 6 мм²</td>
                    </tr>
                    <tr>
                        <td>Количество контактов</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Тип подключения</td>
                        <td>Винтовой (screw connection)</td>
                    </tr>
                    <tr>
                        <td>Тип крепления</td>
                        <td>DIN-рейка NS 35/7,5 или NS 35/15</td>
                    </tr>
                    <tr>
                        <td>Габариты (Д × Ш × В)</td>
                        <td>47.7 мм × 6.2 мм × 46.9 мм</td>
                    </tr>
                    <tr>
                        <td>Материал корпуса</td>
                        <td>Полиамид (PA)</td>
                    </tr>
                    <tr>
                        <td>Максимальный рабочий ток (для 6 мм²)</td>
                        <td>41 А</td>
                    </tr>
                    <tr>
                        <td>Цвет</td>
                        <td>Синий (Blue)</td>
                    </tr>
                    <tr>
                        <td>Степень защиты / пожаро-воспламеняемость</td>
                        <td>UL 94 V-0</td>
                    </tr>
                    <tr>
                        <td>Рабочая температура</td>
                        <td>—60 °C … +105 °C</td>
                    </tr>
                </tbody>
            </table>
            <h3 class='files-and-documents-section__title'>Файлы и документы</h3>
            <ul class='files-and-documents-section__list'>
                <li class='files-and-documents-section__item'>
                    Технический чертеж —
                    <a href='https://encomponent.ru/files/3044102/pxc_3044102_23_03_UT-4_2D.pdf' target='_blank' rel='nofollow'>
                        <b>Открыть</b>
                    </a>
                </li>
                <li class='files-and-documents-section__item'>
                    Общий PDF-каталог клемм UT (на русском) —
                    <a href='https://encomponent.ru/files/3044102/klemma_ut.pdf' target='_blank' rel='nofollow'>
                        <b>Открыть</b>
                    </a>
                </li>
            </ul>
        </div>
        <section class="please-note-section">
            <div class="container please-note-section__container">
                <h3 class="please-note-section__title">Пользователи выбирают:</h3>
                <div class="please-note-section__card-product">
                    <?php
                    // форматирование цены (intl extension required)
                    function formatRub($price)
                    {
                        if (!class_exists('NumberFormatter')) {
                            return number_format((float)$price, 0, ',', ' ') . ' ₽';
                        }
                        $fmt = new NumberFormatter('ru_RU', NumberFormatter::CURRENCY);
                        $fmt->setAttribute(NumberFormatter::MIN_FRACTION_DIGITS, 0);
                        return $fmt->formatCurrency($price, 'RUB');
                    }

                    $noImage = '../../img/free-icon-no-photo-4054617.png';
                    $count = 0;

                    if (is_array($data) && count($data) > 0) {
                        foreach ($data as $item) {

                            if ($count == 4) {
                                break;
                            }

                            $img = !empty($item['imgLinkIconCard']) ? $item['imgLinkIconCard'] : $noImage;
                            $vendor = htmlspecialchars($item['vendorCode'] ?? '', ENT_QUOTES, 'UTF-8');
                            $name = htmlspecialchars($item['nameComponent'] ?? 'Без названия', ENT_QUOTES, 'UTF-8');
                            $link = htmlspecialchars($item['linkPage'] ?? '#', ENT_QUOTES, 'UTF-8');
                            $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 0;
                            $price = isset($item['price']) ? $item['price'] : 0;

                            $fmtPrice = htmlspecialchars(formatRub($price), ENT_QUOTES, 'UTF-8');

                            $qtyClass = $quantity === 0
                                ? 'delivry-block__quantity delivry-block__quantity_0'
                                : 'delivry-block__quantity';

                            $qtyText = $quantity === 0
                                ? 'Под заказ'
                                : 'Наличие: ' . $quantity . ' шт.';

                            echo <<<HTML
                            <div class="card-component">
                                <div class="card-component__top">
                                    <img src="{$img}" class="card-component__img" alt="Фото {$name}">
                                    <div class="card-component__vendor">Артикул: {$vendor}</div>
                                    <div class="card-component__name">
                                        <a href="https://shop.encomponent.ru/SearchResults?vendorCode={$vendor}" target="_blank">{$name}</a>
                                    </div>
                                </div>

                                <div class="card-component__bottom">
                                    <div class="cc-basket-block__delivry-block">
                                        <div class="{$qtyClass}">{$qtyText}</div>
                                    </div>

                                    <div class="card-component__price-block">
                                        <div class="card-component__price">{$fmtPrice}</div>
                                        <div class="card-component__price-nalog">в т.ч. НДС</div>
                                    </div>
                                </div>
                            </div>
                        HTML;

                            $count++;
                        }
                    } else {
                        echo '<p>Пока нет рекомендаций.</p>';
                    }
                    ?>
                </div>
            </div>
        </section>
        <div class='container link-next-page'>
            <div class='link-next-page__text'>
                <span class="yellow-diamond"></span>
                Рекомендуем заглянуть на следующую страницу товара:
            </div>
            <div class='prev-page-link'>
                <a href='https://encomponent.ru/comp-page/istocniki-pitania-quint4-ps-1ac-24dc-5-article-2904600.php'>
                    Здесь предоставлена информация о источнике питания QUINT4-PS-1AC-24DC-5 с артикулом 2904600.
                </a>
            </div>
        </div>
    </main>
    <?php include '../../php/modules/footer.php' ?>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>