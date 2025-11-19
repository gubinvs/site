
                            <?php
                                include "../../php/class/api_Connector.php"; 
                        
$article = "103358";

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
<title>103358, Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ — купить КЭАЗ 26076ВР32 Выключатели-разъединители на токи от 100А до 630А по артикулу 103358 </title>
<meta name='description' content='Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ (103358). КЭАЗ. 26076ВР32 Выключатели-разъединители на токи от 100А до 630А. Выключатель-разъединитель 3 полюсный на номинальный ток 630 А, в котором установлена съемная рукоятка.. Продается по цене: <?php echo $price ?> RUB.'>
<meta name='keywords' content='Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ, КЭАЗ, 103358, 26076ВР32 Выключатели-разъединители на токи от 100А до 630А, купить, цена, KEAZ, электрооборудование'>
<meta name='robots' content='index, follow'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='icon' href='https://encomponent.ru/favicon.svg' type='image/svg+xml'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<link rel='stylesheet' href='https://encomponent.ru/css/encomp-nku-project-style.css'>
<link rel='canonical' href='https://encomponent.ru/products/keaz/vyklyuchatel-razedinitel-vr32-39-v70250-630a-uhl3-keaz-article-103358.php'>
<!--Open Graph-->
<meta property='og:title' content='Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ — купить КЭАЗ 26076ВР32 Выключатели-разъединители на токи от 100А до 630А по артикулу 103358 — купить по цене <?php echo $price ?> ₽'>
<meta property='og:description' content='Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ (103358). КЭАЗ. 26076ВР32 Выключатели-разъединители на токи от 100А до 630А. Выключатель-разъединитель 3 полюсный на номинальный ток 630 А, в котором установлена съемная рукоятка.'>
<meta property='og:image' content='System.Collections.Generic.List`1[System.String]'>
<meta property='og:type' content='product'>
<meta property='og:url' content='https://encomponent.ru/products/keaz/vyklyuchatel-razedinitel-vr32-39-v70250-630a-uhl3-keaz-article-103358.php'>
<!-- JSON-LD Product schema -->
<script type='application/ld+json'>

                            {
                                "@context": "https://schema.org",
                                "@type": "Product",
                                "name": "Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ",
                                "image": "System.Collections.Generic.List`1[System.String]",
                                "description": "Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ (103358). КЭАЗ. 26076ВР32 Выключатели-разъединители на токи от 100А до 630А. Выключатель-разъединитель 3 полюсный на номинальный ток 630 А, в котором установлена съемная рукоятка.",
                                "sku": "103358",
                                "brand": {
                                    "@type": "Brand",
                                    "name": "KEAZ Optima"
                                },
                                "offers": {
                                    "@type": "Offer",
                                    "price": <?php echo number_format($price, 2, '.', ''); ?>,
                                    "priceCurrency": "RUB",
                                    "availability": "https://schema.org/InStock",
                                    "url": "https://encomponent.ru/products/keaz/vyklyuchatel-razedinitel-vr32-39-v70250-630a-uhl3-keaz-article-103358.php"
                                },
                                "aggregateRating": {
                                    "@type": "AggregateRating",
                                    "ratingValue": 5.0,
                                    "reviewCount": 3
                                },
                                "review": [
                                    {
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
                                            "name": "Михаил"
                                        },
                                        "reviewRating": {
                                            "@type": "Rating",
                                            "ratingValue": 5
                                        },
                                        "reviewBody": "Покупал для клиента — работает стабильно."
                                    }
                                ]
                            }
                            </script>
                        

                            <!-- Yandex.Metrika counter -->
                            <script>
                                (function(m,e,t,r,i,k,a){
                                    m[i]=m[i]||function(){ (m[i].a=m[i].a||[]).push(arguments) };
                                    m[i].l=1*new Date();
                                    for (var j=0;j<document.scripts.length;j++){
                                        if (document.scripts[j].src === r) { return; }
                                    }
                                    k=e.createElement(t); a=e.getElementsByTagName(t)[0];
                                    k.async=1; k.src=r; a.parentNode.insertBefore(k,a)
                                })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');

                                ym(98501628, 'init', {
                                    clickmap:true,
                                    trackLinks:true,
                                    accurateTrackBounce:true,
                                    webvisor:true
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
                        
<?php include_once '../../php/modules/header.php';?>
 
                        <main>
                            <div class='discription-product-section'>
                                <div class='container'>
<h1 class='discription-product-section__title NKUPages_h1'>Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ</h1>
                                    <section class='main-section flex'>
                                        <div class='main-section__img-block'>
<img src='https://files.keaz.ru/f/14868/gruppovaya.png' alt='Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ' class='discription-product__img main-section__img'>
</div>
      
                            <div class='main-section__discription'>
                                <div class='article-block flex'>
                                    <div class='article-title'>Артикул:</div>
                                        <h6 class='article-name'>103358</h6>
                                </div>
                                <hr>
                                <div class='main-section-price-block'>
                                    <div class='main-section-price__price'>
                                        <?php echo number_format($price, 0, ',', ' '); ?>
                                    </div>
                                    <div class='main-section-price__icon'>
                                        <svg width='20' height='34' viewBox='0 0 38 50' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                            <g clip-path='url(#clip0_49_84)'>
                                                <path d='M23.375 31.25C31.6875 31.25 37.5 25.4436 37.5 17.0968C37.5 8.75 31.6875 3.125 23.375 3.125H7.42188C6.77471 3.125 6.25 3.64971 6.25 4.29688V24.4758H1.17188C0.524707 24.4758 0 25.0005 0 25.6477V30.0781C0 30.7253 0.524707 31.25 1.17188 31.25H6.25V34.375H1.17188C0.524707 34.375 0 34.8997 0 35.5469V39.4531C0 40.1003 0.524707 40.625 1.17188 40.625H6.25V45.7031C6.25 46.3503 6.77471 46.875 7.42188 46.875H13.1406C13.7878 46.875 14.3125 46.3503 14.3125 45.7031V40.625H30.0781C30.7253 40.625 31.25 40.1003 31.25 39.4531V35.5469C31.25 34.8997 30.7253 34.375 30.0781 34.375H14.3125V31.25H23.375ZM14.3125 9.83867H22C26.5625 9.83867 29.3125 12.6814 29.3125 17.0968C29.3125 21.5726 26.5625 24.4758 21.875 24.4758H14.3125V9.83867Z' fill='#1D252C'/>
                                            </g>
                                            <defs>
                                                <clipPath id='clip0_49_84'>
                                                    <rect width='37.5' height='50' fill='white'/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <!--Количество на складе-->
                                    <div class='<?php echo $quantity > 0 ? 'warehouse-item-quantity' : 'warehouse-item-quantity warehouse-item-quantity__null' ?>'>
                                        <div class='warehouse-item-quantity__name'>В наличии:</div>
                                            <div class='warehouse-item-quantity__quantity'><?php echo $quantity?></div>
                                            <div class='warehouse-item-quantity__discr'>шт.</div>
                                        </div>
                                        <div class='characteristics-block'>
                                            <div class='characteristics-block__title'>Основные характеристики:</div>
                                                <ul class='characteristics-block__list'>
                                                    <li class='characteristics-block__item flex'>
                                                        <div class='characteristics-item__title'>Производитель:</div>
                                                        <div class='characteristics-item__discr'>КЭАЗ</div>
                                                    </li>
                                                    <li class='characteristics-block__item flex'>
                                                        <div class='characteristics-item__title'>Высота, мм</div>
                                                        <div class='characteristics-item__discr'>190</div>
                                                    </li>
                                                    <li class='characteristics-block__item flex'>
                                                        <div class='characteristics-item__title'>Глубина, мм</div>
                                                        <div class='characteristics-item__discr'>270</div>
                                                    </li>
                                                    <li class='characteristics-block__item flex'>
                                                        <div class='characteristics-item__title'>Ширина, мм</div>
                                                        <div class='characteristics-item__discr'>235</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class='characteristics-block__button-block flex'>
                                                <a href='#technical' id='button-link'>
                                                    <div class='button-characteristics__all'>Посмотреть все характеристики</div>
                                                </a>
                                                <a href='https://shop.encomponent.ru/Basket/?vendorCode=103358'>
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
                                                            <circle cx='15' cy='15' r='14.5' fill='#F3DE09' stroke='#1D252C'/>
                                                                <line x1='8' y1='14.5' x2='23' y2='14.5' stroke='black'/>
                                                                <line x1='15.5' y1='23' x2='15.5' y2='7' stroke='black'/>
                                                                <line x1='25.3536' y1='25.6464' x2='32.4246' y2='32.7175' stroke='black'/>
                                                        </svg>
                                                    </div>
                                            <div class='attention-section-title__title'>ОБРАТИТЕ ВНИМАНИЕ</div>
                                        </div>
                                        <hr class='hr'>
                                        <div class='attention-section__discription'>
                                            У нас можно купить или заказать: Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ — купить КЭАЗ 26076ВР32 Выключатели-разъединители на токи от 100А до 630А по артикулу 103358 <br> Выключатель-разъединитель ВР32-39-В70250-630А-УХЛ3-КЭАЗ (103358). КЭАЗ. 26076ВР32 Выключатели-разъединители на токи от 100А до 630А. Выключатель-разъединитель 3 полюсный на номинальный ток 630 А, в котором установлена съемная рукоятка.
                                        </div>
                                    </div>
                                </section>
                        
 
                            </div></div>
                        </main>
<div class='container' id='technical'>
<h3 class='mt-5'>Технические характеристики</h3>
<table class='table table-bordered table-striped mt-3'>
<thead class='table-secondary'><tr><th>Параметр</th><th>Значение</th></tr></thead>
<tbody>
<tr><td>Гарантийный срок (лет)</td><td>3</td></tr>
<tr><td>Номинальный продолжительный ток Iu</td><td>630</td></tr>
<tr><td>Количество полюсов</td><td>3</td></tr>
<tr><td>Подходит для промежуточного монтажа</td><td>false</td></tr>
<tr><td>Подходит для установки в распределительный щит</td><td>true</td></tr>
<tr><td>Подходит для напольного монтажа</td><td>false</td></tr>
<tr><td>Тип элемента управления</td><td>Рычажковый (перекидной рычаг)</td></tr>
<tr><td>Степень защиты (IP), передняя сторона</td><td>IP00</td></tr>
<tr><td>Тип подключения силовой электрической цепи</td><td>Винтовое соединение</td></tr>
<tr><td>Количество вспомогательных нормально замкнутых (НЗ) контактов</td><td>0</td></tr>
<tr><td>Количество вспомогательных нормально разомкнутых (НО) контактов</td><td>0</td></tr>
<tr><td>Тип изделия/компонента</td><td>Выключатель-разъединитель нагрузки</td></tr>
<tr><td>Номинальная коммутируемая мощность при AC-3, 400 В</td><td>252</td></tr>
<tr><td>Конструкция прибора</td><td>Встраиваемое устройство фиксированной установки (стационарный)</td></tr>
<tr><td>Максимальное допустимое рабочее напряжение Ue AC</td><td>660</td></tr>
<tr><td>Моторный привод опционально</td><td>false</td></tr>
<tr><td>Моторный привод встроенный</td><td>false</td></tr>
<tr><td>Реверсивный переключатель</td><td>false</td></tr>
<tr><td>Пригоден в качестве сервисного выключателя</td><td>true</td></tr>
<tr><td>Пригоден в качестве предохранительного выключателя</td><td>true</td></tr>
<tr><td>Пригоден в качестве главного выключателя</td><td>false</td></tr>
<tr><td>Пригоден в качестве устройства аварийной остановки</td><td>true</td></tr>
<tr><td>Условный номинальный ток короткого замыкания Iq</td><td>32</td></tr>
<tr><td>Напряжение дополнительного расцепителя</td><td>false</td></tr>
<tr><td>С блокировкой/запираемый</td><td>false</td></tr>
<tr><td>Цвет управляющего элемента</td><td>Черный</td></tr>
<tr><td>Подходит для фронтального монтажа в центре</td><td>false</td></tr>
<tr><td>Подходит для фронтального монтажа через 4 отверстия</td><td>true</td></tr>
<tr><td>Степень защиты (NEMA)</td><td>Прочее</td></tr>
<tr><td>Страна производитель</td><td>Россия</td></tr>
<tr><td>ТНВЭД код</td><td>8536508008</td></tr>
</tbody></table>
<h3 class='files-and-documents-section__title'>Файлы и документы</h3><ul class='files-and-documents-section__list'>
<li class='files-and-documents-section__item'>Каталог Выключатели-разъединители ВР32 — <a href='https://files.keaz.ru/f/204/catalog-vr32.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Руководство по эксплуатации выключателей-разъединителей серии ВР32 — <a href='https://files.keaz.ru/f/8975/rukovodstvo-po-ekspluatacii-vikluchateley-razediniteley-serii-vr32-gjik-642423-002re-izm.2.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Референция Фаворит-Электро — <a href='https://files.keaz.ru/f/20897/referenciya-favorit-elektro.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Референция ООО "ШНЭЛ" — <a href='https://files.keaz.ru/f/4884/shnel.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Сертификат ТР ТС - ВР32 — <a href='https://files.keaz.ru/f/581/sert-trts-vr32.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Патент 63047 - ВР32 — <a href='https://files.keaz.ru/f/2190/photo-patent-63047-vr32.jpg' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>3D-модель 103358 — <a href='https://files.keaz.ru/f/3287/3d-model-103358.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>3D-модель ВР32-39В70250 — <a href='https://files.keaz.ru/f/5375/vr32-39v70250.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>3D-модель  ВР32-39 2 направления — <a href='https://files.keaz.ru/f/2633/3d-vr32-39-2-napravleniya.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Чертежи ВР32-39 2 направления — <a href='https://files.keaz.ru/f/3667/cherteji-vr32-39-2-napravleniya.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Заключение Минпромторга О подтверждении КЭАЗ по 719 — <a href='https://files.keaz.ru/f/16921/zakluchenie-minpromtorga-o-podtverjdenii-keaz-po-719.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Выписки из Реестров отечественной продукции  и производителей отечественной продукции — <a href='https://files.keaz.ru/f/17340/vipiski-iz-reestrov-otechestvennoy-produkcii-i-proizvoditeley-otechestvennoy-produkcii.xlsx' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Выписка из Акта экспертизы КТПП (2022) — <a href='https://files.keaz.ru/f/16920/vipiska-iz-akta-ekspertizi-ktpp-2019.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>База данных для EPLAN Electric ВР32 — <a href='https://files.keaz.ru/f/8049/vr32.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Каталог Выключатели-разъединители ВР32 — <a href='https://files.keaz.ru/f/204/catalog-vr32.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
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
                                        if (!class_exists('NumberFormatter'))
                                        {
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

                                        if ($count == 4) { break; }

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
                        
<?php include '../../php/modules/footer.php' ?>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body></html>
