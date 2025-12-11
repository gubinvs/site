<?php
include "../../php/class/api_Connector.php";
$article = "LC1D18M7";
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
    <title>LC1D18M7, Электромеханический контактор - Schneider Electric | Компоненты энергии</title>
    <meta name='description' content='LC1D18M7 — это электромеханический контактор (устройство для дистанционного коммутации силовых цепей), выпускаемый компанией Schneider Electric в серии TeSys D, который можно купить на сайте Компоненты энергии. Продлагаем его по цене:  <?php echo $price ?> RUB.'>
    <meta name='keywords' content='LC1D18M7 — контактор Schneider Electric для управления двигателями'>
    <meta name='robots' content='index, follow'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' href='https://encomponent.ru/favicon.svg' type='image/svg+xml'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='../../css/encomp-nku-project-style.css'>
    <link rel='canonical' href='https://encomponent.ru/products/schneider/kontaktor-schneider-electric-dlya-upravleniya-dvigatelyami-LC1D18M7.php'>
    <!--Open Graph-->
    <meta property='og:title' content='LC1D18M7, Электромеханический контактор Schneider Electric продается на сайте компоненты энергии, его артикул LC1D18M7 — купить можно по цене <?php echo $price ?> ₽'>
    <meta property='og:description' content='LC1D18M7 это электромеханический контактор (устройство для дистанционного коммутации силовых цепей), выпускаемый компанией Schneider Electric в серии TeSys D можно купить на сайте Компоненты энергии. Продлагаем ее по цене:  <?php echo $price ?> RUB.'>
    <meta property='og:image' content='https://encomponent.ru/img/img-product/LC1D18M7/LC1D18M7_Image_1500_2.jpg'>
    <meta property='og:type' content='product'>
    <meta property='og:url' content='https://encomponent.ru/products/schneider/kontaktor-schneider-electric-dlya-upravleniya-dvigatelyami-LC1D18M7.php'>
    <!-- JSON-LD Product schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "LC1D18M7, Электромеханический контактор - Schneider Electric",
            "image": "https://encomponent.ru/img/img-product/LC1D18M7/LC1D18M7_Image_1500_2.jpg",
            "description": "LC1D18M7 это электромеханический контактор (устройство для дистанционного коммутации силовых цепей), выпускаемый компанией Schneider Electric в серии TeSys D можно купить на сайте Компоненты энергии. Продлагаем ее по цене:  <?php echo $price ?> RUB.",
            "sku": "LC1D18M7",
            "brand": {
                "@type": "Brand",
                "name": "Schneider Electric"
            },
            "offers": {
                "@type": "Offer",
                "price": <?php echo number_format($price, 2, '.', ''); ?>,
                "priceCurrency": "RUB",
                "availability": "<?php echo ($quantityBestseller > 0) ? "https://schema.org/InStock" : "https://schema.org/OutOfStock"; ?>",
                "url": "https://encomponent.ru/products/phoenix/prohodnaya-klemma-ot-phoenix-contact-artikul-3044102.php",
                "inventoryLevel": {
                    "@type": "QuantitativeValue",
                    "value": <?php echo $quantityBestseller; ?>
                }
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": 4.2,
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
            ]
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
    <?php include_once '../../php/modules/header.php'; ?>
    <main>
        <div class='discription-product-section'>
            <div class='container'>
                <h1 class='discription-product-section__title NKUPages_h1'>LC1D18M7, Электромеханический контактор - Schneider Electric</h1>
                <section class='main-section flex'>
                    <div class='main-section__img-block'>
                        <img src='https://encomponent.ru/img/img-product/LC1D18M7/LC1D18M7_Image_1500_2.jpg' alt='Изображен Электромеханический контактор Schneider Electric ' class='discription-product__img main-section__img'>
                    </div>
                    <div class='main-section__discription'>
                        <div class='article-block flex'>
                            <div class='article-title'>Артикул:</div>
                            <h6 class='article-name'>LC1D18M7</h6>
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
                                    <div class='characteristics-item__discr'>Schneider Electric</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Серия:</div>
                                    <div class='characteristics-item__discr'>TeSys D (LC1D)</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Номинальный ток, А:</div>
                                    <div class='characteristics-item__discr'>18</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Катушка управления:</div>
                                    <div class='characteristics-item__discr'>220 В AC 50/60 Гц</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Рабочее напряжение, В:</div>
                                    <div class='characteristics-item__discr'>до 690 В AC</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Количество полюсов:</div>
                                    <div class='characteristics-item__discr'>3 NO (3 нормально разомкнутых)</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Вспомогательные контакты:</div>
                                    <div class='characteristics-item__discr'>1 NO + 1 NC</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Длина, мм</div>
                                    <div class='characteristics-item__discr'>86</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Ширина, мм</div>
                                    <div class='characteristics-item__discr'>45</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Высота, мм</div>
                                    <div class='characteristics-item__discr'>77</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Вес без упаковки, г</div>
                                    <div class='characteristics-item__discr'>330</div>
                                </li>
                            </ul>
                        </div>
                        <div class='characteristics-block__button-block flex'>
                            <a href='#technical' id='button-link'>
                                <div class='button-characteristics__all'>Посмотреть все характеристики</div>
                            </a>
                            <a href='https://shop.encomponent.ru/Basket/?vendorCode=LC1D18M7'>
                                <div class='button-characteristics__offer' id='button-buy'>Купить</div>
                            </a>
                        </div>
                    </div>
                </section>
                <section class='attention-section'>
                    <h2 class='h1-min'>Важная информация</h2>
                    <div class='container attention-container'>
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
                            <b>LC1D18M7</b> — это высококачественный силовой контактор Schneider Electric из серии TeSys D, предназначенный для управления электродвигателями и
                            другими промышленными нагрузками. Контактор рассчитан на номинальный ток 18 А и оснащён катушкой управления 220 В AC 50/60 Гц, что обеспечивает
                            удобное дистанционное включение и выключение силовых цепей.
                            <br><br>
                            Благодаря трёхполюсной конструкции (3 NO) и встроенным вспомогательным контактам (1 NO + 1 NC) LC1D18M7 подходит для реализации сложных схем
                            автоматизации и управления, включая пуск двигателей, защиту от перегрузок и интеграцию в промышленные панели управления.
                            <br><br>
                            Контактор поддерживает рабочее напряжение до 690 В AC и соответствует международным стандартам безопасности, что гарантирует надёжную и долговечную
                            работу даже в условиях интенсивной эксплуатации.
                            <br><br>
                            С компактными размерами (77 × 45 × 86 мм) и весом около 330 г LC1D18M7 легко устанавливается на DIN-рейку или в электрощит, что упрощает монтаж и
                            обслуживание.
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
                        <td>Производитель</td>
                        <td>Schneider Electric</td>
                    </tr>
                    <tr>
                        <td>Серия / Модель</td>
                        <td>TeSys D / LC1D18M7</td>
                    </tr>
                    <tr>
                        <td>Тип устройства</td>
                        <td>Силовой контактор для электродвигателя и промышленных нагрузок</td>
                    </tr>
                    <tr>
                        <td>Номинальный ток</td>
                        <td>18 А (AC-3, управление двигателем)</td>
                    </tr>
                    <tr>
                        <td>Напряжение катушки управления</td>
                        <td>220 В AC 50/60 Гц</td>
                    </tr>
                    <tr>
                        <td>Рабочее напряжение силовой цепи</td>
                        <td>до 690 В AC</td>
                    </tr>
                    <tr>
                        <td>Количество полюсов</td>
                        <td>3 NO (3 нормально разомкнутых контакта)</td>
                    </tr>
                    <tr>
                        <td>Вспомогательные контакты</td>
                        <td>1 NO + 1 NC для схем управления и сигнализации</td>
                    </tr>
                    <tr>
                        <td>Тип подключения</td>
                        <td>Винтовой (Screw Clamp) – надёжное подключение проводов</td>
                    </tr>
                    <tr>
                        <td>Тип крепления</td>
                        <td>DIN-рейка NS 35 или винтовой монтаж в щит</td>
                    </tr>
                    <tr>
                        <td>Габариты (Д × Ш × В)</td>
                        <td>86 × 45 × 77 мм — компактный размер для щита управления</td>
                    </tr>
                    <tr>
                        <td>Вес без упаковки</td>
                        <td>330 г — лёгкий и удобный монтаж</td>
                    </tr>
                    <tr>
                        <td>Степень защиты</td>
                        <td>IP20 — защита от прикосновения и безопасная эксплуатация</td>
                    </tr>
                    <tr>
                        <td>Рабочая температура</td>
                        <td>-5 °C … +60 °C — подходит для промышленных условий</td>
                    </tr>
                    <tr>
                        <td>Применение</td>
                        <td>Пуск и остановка трёхфазных электродвигателей, управление насосами, вентиляторами, промышленными механизмами</td>
                    </tr>
                    <tr>
                        <td>Особенности</td>
                        <td>Компактный, надёжный, сертифицирован по международным стандартам IEC и UL, подходит для автоматизации и промышленных щитов</td>
                    </tr>
                </tbody>
            </table>
            <h3 class='files-and-documents-section__title'>Файлы и документы</h3>
            <ul class='files-and-documents-section__list'>
                <li class='files-and-documents-section__item'>
                    Общий каталог контакторов TeSys D (PDF) —
                    <a href='../../files/LC1D18M7/tesysd_ct.pdf' target='_blank' rel='nofollow'>
                        <b>Открыть</b>
                    </a>
                </li>
                <li class='files-and-documents-section__item'>
                    Электрическая схема подключения LC1D18M7 —
                    <a href='../../files/LC1D18M7/schneider_electric_tesys-deca-contactors_LC1D18M7.pdf' target='_blank' rel='nofollow'>
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
                <a href='https://encomponent.ru/comp-page/schneider-electric-tm3ai8-analog-modul-rasshireniya-tm3-8-analogovykh-vkhoda.php'>
                    Здесь предоставлена информация о модуле расширения tm3ai8.
                </a>
            </div>
        </div>
    </main>
    <?php include '../../php/modules/footer.php' ?>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>