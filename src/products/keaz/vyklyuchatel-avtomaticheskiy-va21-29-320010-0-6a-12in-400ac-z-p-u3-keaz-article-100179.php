
                            <?php
                                include "../../php/class/api_Connector.php"; 
                        
$article = "100179";

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
<title>100179, Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ — купить КЭАЗ 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А по артикулу 100179 </title>
<meta name='description' content='Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ (100179). КЭАЗ. 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А. Силовой 3 полюсный автоматический выключатель переменного тока в литом корпусе на номинальный ток 0.6 А.. Продается по цене: <?php echo $price ?> RUB.'>
<meta name='keywords' content='Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ, КЭАЗ, 100179, 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А, купить, цена, KEAZ, электрооборудование'>
<meta name='robots' content='index, follow'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='icon' href='https://encomponent.ru/favicon.svg' type='image/svg+xml'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<link rel='stylesheet' href='../../css/encomp-nku-project-style.css'>
<link rel='canonical' href='https://encomponent.ru/products/keaz/vyklyuchatel-avtomaticheskiy-va21-29-320010-0-6a-12in-400ac-z-p-u3-keaz-article-100179.php'>
<!--Open Graph-->
<meta property='og:title' content='Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ — купить КЭАЗ 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А по артикулу 100179 — купить по цене <?php echo $price ?> ₽'>
<meta property='og:description' content='Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ (100179). КЭАЗ. 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А. Силовой 3 полюсный автоматический выключатель переменного тока в литом корпусе на номинальный ток 0.6 А.'>
<meta property='og:image' content='System.Collections.Generic.List`1[System.String]'>
<meta property='og:type' content='product'>
<meta property='og:url' content='https://encomponent.ru/products/keaz/vyklyuchatel-avtomaticheskiy-va21-29-320010-0-6a-12in-400ac-z-p-u3-keaz-article-100179.php'>
<!-- JSON-LD Product schema -->
<script type='application/ld+json'>

                            {
                                "@context": "https://schema.org",
                                "@type": "Product",
                                "name": "Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ",
                                "image": "System.Collections.Generic.List`1[System.String]",
                                "description": "Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ (100179). КЭАЗ. 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А. Силовой 3 полюсный автоматический выключатель переменного тока в литом корпусе на номинальный ток 0.6 А.",
                                "sku": "100179",
                                "brand": {
                                    "@type": "Brand",
                                    "name": "KEAZ Optima"
                                },
                                "offers": {
                                    "@type": "Offer",
                                    "price": <?php echo number_format($price, 2, '.', ''); ?>,
                                    "priceCurrency": "RUB",
                                    "availability": "https://schema.org/InStock",
                                    "url": "https://encomponent.ru/products/keaz/vyklyuchatel-avtomaticheskiy-va21-29-320010-0-6a-12in-400ac-z-p-u3-keaz-article-100179.php"
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
<h1 class='discription-product-section__title NKUPages_h1'>Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ</h1>
                                    <section class='main-section flex'>
                                        <div class='main-section__img-block'>
<img src='https://files.keaz.ru/f/7654/102262-va21-29-340010-16a-12in-400ac-u3.png' alt='Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ' class='discription-product__img main-section__img'>
</div>
      
                            <div class='main-section__discription'>
                                <div class='article-block flex'>
                                    <div class='article-title'>Артикул:</div>
                                        <h6 class='article-name'>100179</h6>
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
                                                        <div class='characteristics-item__discr'>100</div>
                                                    </li>
                                                    <li class='characteristics-block__item flex'>
                                                        <div class='characteristics-item__title'>Глубина, мм</div>
                                                        <div class='characteristics-item__discr'>150</div>
                                                    </li>
                                                    <li class='characteristics-block__item flex'>
                                                        <div class='characteristics-item__title'>Ширина, мм</div>
                                                        <div class='characteristics-item__discr'>150</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class='characteristics-block__button-block flex'>
                                                <a href='#technical' id='button-link'>
                                                    <div class='button-characteristics__all'>Посмотреть все характеристики</div>
                                                </a>
                                                <a href='https://shop.encomponent.ru/Basket/?vendorCode=100179'>
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
                                            У нас можно купить или заказать: Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ — купить КЭАЗ 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А по артикулу 100179 <br> Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ (100179). КЭАЗ. 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А. Силовой 3 полюсный автоматический выключатель переменного тока в литом корпусе на номинальный ток 0.6 А.
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
<tr><td>Гарантийный срок (лет)</td><td>5</td></tr>
<tr><td>Раздел</td><td>0,6А</td></tr>
<tr><td>Серия</td><td>ВА21</td></tr>
<tr><td>Номинальное напряжение сети</td><td>380/220;660/380</td></tr>
<tr><td>Наличие теплового расцепителя</td><td>false</td></tr>
<tr><td>Наличие электромагнитного расцепителя</td><td>true</td></tr>
<tr><td>Наличие электронного расцепителя</td><td>false</td></tr>
<tr><td>Наличие дифференциального расцепителя</td><td>false</td></tr>
<tr><td>Электродинамическая стойкость при 380/220В Icm</td><td>17</td></tr>
<tr><td>Предельная коммутационная способность при 660/380В Ics</td><td>7.5</td></tr>
<tr><td>Электродинамическая стойкость при 660/380В Icm</td><td>0</td></tr>
<tr><td>Токи уставки расцепителя в зоне перегрузки Ir, А</td><td>0,6</td></tr>
<tr><td>Кратность тока для времени tr, о.е.</td><td>6</td></tr>
<tr><td>Кратность нижней границы, о.е.</td><td>0</td></tr>
<tr><td>Кратность верхней границы, о.е.</td><td>0</td></tr>
<tr><td>Коэффициент гарантированного несрабатывания, о.е.</td><td>1</td></tr>
<tr><td>Коэффициент гарантированного срабатывания, о.е.</td><td>1</td></tr>
<tr><td>Время срабатывания расцепителя в зоне КЗ tm</td><td>0.1</td></tr>
<tr><td>Кратности уставки мгновенного расцепителя Ki, о.е.</td><td>0</td></tr>
<tr><td>Время срабатывания мгновенного расцепителя ti</td><td>0.05</td></tr>
<tr><td>Токи уставок I∆, мА</td><td>0</td></tr>
<tr><td>Активное сопротивление полюса R, мОм</td><td>0</td></tr>
<tr><td>Реактивное сопротивление полюса X, мОм</td><td>0</td></tr>
<tr><td>Высота</td><td>220</td></tr>
<tr><td>Ширина</td><td>88</td></tr>
<tr><td>Глубина</td><td>122</td></tr>
<tr><td>Масса</td><td>1.6</td></tr>
<tr><td>Тип монтажной рейки</td><td>35х7.5; 35х15</td></tr>
<tr><td>Крепление</td><td>Монтажная рейка</td></tr>
<tr><td>Климатическое исполнение</td><td>У3</td></tr>
<tr><td>Время срабатывания в зоне перегрузки tr, c</td><td>12</td></tr>
<tr><td>Способ задания уставки расцепителя</td><td>По кратности (Km)</td></tr>
<tr><td>Кратности уставки расцепителя Кm, о.е</td><td>12</td></tr>
<tr><td>Способ задания уставки мгновенного расцепителя</td><td>По току (Ii)</td></tr>
<tr><td>Тип характеристики срабатывания расцепителя Tm</td><td>B</td></tr>
<tr><td>Нормативный документ</td><td>ГОСТ Р 50030.2, ТУ16-90 ИКЖШ.641211.002ТУ</td></tr>
<tr><td>Количество модулей</td><td>0</td></tr>
<tr><td>Токи уставки мгновенного расцепителя Ii, о.е.</td><td>Нет (без)</td></tr>
<tr><td>Максимальное сечение проводника, мм^2</td><td>25</td></tr>
<tr><td>Токи уставки расцепителя Im, А</td><td>Нет (без)</td></tr>
<tr><td>Номинальный продолжительный ток Iu</td><td>0.6</td></tr>
<tr><td>Количество полюсов</td><td>3</td></tr>
<tr><td>Тип элемента управления</td><td>Рычажковый (перекидной рычаг)</td></tr>
<tr><td>Степень защиты (IP)</td><td>IP20</td></tr>
<tr><td>Тип подключения силовой электрической цепи</td><td>Винтовое соединение</td></tr>
<tr><td>Количество вспомогательных нормально замкнутых (НЗ) контактов</td><td>0</td></tr>
<tr><td>Количество вспомогательных нормально разомкнутых (НО) контактов</td><td>0</td></tr>
<tr><td>Тип изделия/компонента</td><td>Выключатель автоматический в литом корпусе</td></tr>
<tr><td>Конструкция прибора</td><td>Встраиваемое устройство фиксированной установки (стационарный)</td></tr>
<tr><td>Диапазон регулировки теплового расцепителя</td><td>0.6...0.6</td></tr>
<tr><td>Номинальное напряжение</td><td>400...400</td></tr>
<tr><td>С расцепителем минимального напряжения</td><td>false</td></tr>
<tr><td>Моторный привод опционально</td><td>false</td></tr>
<tr><td>Встроенная защита от замыканий на землю</td><td>false</td></tr>
<tr><td>Подходит для монтажа на DIN-рейку (Ω-типа)</td><td>false</td></tr>
<tr><td>Номинальная отключающая способность Icu при 400 В, 50 Гц</td><td>10</td></tr>
<tr><td>Возможность установки индикатора отключения</td><td>false</td></tr>
<tr><td>Моторный привод встроенный</td><td>false</td></tr>
<tr><td>Вид подключения главной электрической цепи</td><td>Подключение спереди</td></tr>
<tr><td>Количество вспомогательных переключающих контактов</td><td>0</td></tr>
<tr><td>Страна производитель</td><td>Россия</td></tr>
<tr><td>ТНВЭД код</td><td>8536201007</td></tr>
</tbody></table>
<h3 class='files-and-documents-section__title'>Файлы и документы</h3>
    <ul class="files-and-documents-section__list">
        <li class="files-and-documents-section__item">Каталог ВА21 — <a href='https://files.keaz.ru/f/192/catalog-va21.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Руководство по эксплуатации ВА21-29 — <a href='https://files.keaz.ru/f/577/rucovod-info-va21.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Референция МРСК Сибири - АлтайЭнерго — <a href='https://files.keaz.ru/f/3951/refer-altayenergo.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Сертификат ТР ТС ВА21 — <a href='https://files.keaz.ru/f/2234/sert-trts-va21.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Сертификат пожарной безопасности  — <a href='https://files.keaz.ru/f/987/sert-a63-ae20-ak50b-va13-va21-va53-va55-va57-va51-35-va04-36-ak50kb.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Декларация ТР ТС 001-2011 ВА21-29, OptiDin ВМ63 — <a href='https://files.keaz.ru/f/12443/ds-tr-ts-001-2011-va21-29-optidin-vm63.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">ДС ТР ТС 001 ВА21 — <a href='https://files.keaz.ru/f/47869/ds-tr-ts-001-va21.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">ДС ТР ЕАЭС 037 ВА21 — <a href='https://files.keaz.ru/f/16766/ds-tr-eaes-037-va21.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">3D-модель ВА21-29-3 — <a href='https://files.keaz.ru/f/2453/va21-29-3pol.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Чертеж ВА21-29 3-х полюсный — <a href='https://files.keaz.ru/f/14971/chertej-va21-29-3-h-polusniy.dwg.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Заключение Минпромторга О подтверждении КЭАЗ по 719 — <a href='https://files.keaz.ru/f/16921/zakluchenie-minpromtorga-o-podtverjdenii-keaz-po-719.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Выписки из Реестров отечественной продукции  и производителей отечественной продукции — <a href='https://files.keaz.ru/f/17340/vipiski-iz-reestrov-otechestvennoy-produkcii-i-proizvoditeley-otechestvennoy-produkcii.xlsx' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Выписка из Акта экспертизы КТПП (2022) — <a href='https://files.keaz.ru/f/16920/vipiska-iz-akta-ekspertizi-ktpp-2019.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">База данных для EPLAN Electric P8 ВА21 — <a href='https://files.keaz.ru/f/8042/va21.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Лицензия на изготовление оборудования для ядерных установок — <a href='https://files.keaz.ru/f/13287/licenziya-na-izgotovlenie-oborudovaniya-dlya-yadernih-ustanovok.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
        <li class="files-and-documents-section__item">Каталог ВА21 — <a href='https://files.keaz.ru/f/192/catalog-va21.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
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
