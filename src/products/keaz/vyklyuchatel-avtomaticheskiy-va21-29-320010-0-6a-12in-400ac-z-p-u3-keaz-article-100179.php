
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
                            ?>
                        
<!DOCTYPE html>
<html lang='ru'>
<head>
<meta charset='UTF-8'>
<title>Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ — купить КЭАЗ 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А по артикулу 100179</title>
<meta name='description' content='Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ (100179). КЭАЗ. 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А. Силовой 3 полюсный автоматический выключатель переменного тока в литом корпусе на номинальный ток 0.6 А.. Продается по цене: <?php echo $price ?> RUB.'/>
<meta name='keywords' content='Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ, КЭАЗ, 100179, 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А, купить, цена, KEAZ, электрооборудование'/>
<meta name='robots' content='index, follow'/>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
<link rel='icon' href='https://encomponent.ru/favicon.svg' type='image/svg+xml'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<link rel='canonical' href='https://encomponent.ru/products/keaz/vyklyuchatel-avtomaticheskiy-va21-29-320010-0-6a-12in-400ac-z-p-u3-keaz-article-100179.php'/>
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
                        
</head>
<body class='bg-light'>

                        <header>
                            <div class='container d-flex justify-content-between align-items-center py-3'>
                                <div class='d-flex align-items-center'>
                                    <a href='https://encomponent.ru'>
                                        <img src='https://encomponent.ru/img/header_logo_1920.svg' alt='Логотип компании' style='height:60px;'>
                                    </a>
                                </div>
                                <nav>
                                    <ul class='nav'>
                                        <li class='nav-item'>
                                            <a class='nav-link text-dark fw-bold' href='https://encomponent.ru/snab.php'>Аутсорсинг снабжения</a>
                                        </li>
                                        <li class='nav-item'>
                                            <a class='nav-link text-dark fw-bold' href='https://supply.encomponent.ru/'>Сервис для снабжения</a>
                                        </li>
                                        <li class='nav-item'>
                                            <a class='btn btn-dark text-warning fw-bold ms-3' href='https://shop.encomponent.ru/' target='_blank'>
                                                Интернет-магазин
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </header>
                        
<div class='container card shadow-sm p-4 mb-4'>
<h1 class='mb-3'>Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ</h1>
<p><strong>Артикул:</strong> 100179</p>
<p><strong>Бренд:</strong> КЭАЗ</p>
<p><strong>Категория:</strong> 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А</p>
<p><strong>Описание:</strong> Силовой 3 полюсный автоматический выключатель переменного тока в литом корпусе на номинальный ток 0.6 А.</p>
<p class="h2"><strong>Цена:</strong> <?php echo $price ?> RUB </p>

                        <a class='btn btn-primary' href='https://shop.encomponent.ru/SearchResults?vendorCode=100179' target='_blank'>
                            Перейти в магазин
                        </a>
                    
<div class='mt-4 d-flex flex-wrap gap-3'>
<img src='https://files.keaz.ru/f/7654/102262-va21-29-340010-16a-12in-400ac-u3.png' alt='Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ' class='img-thumbnail' style='max-height:200px;'>
</div>
<br><br>
<h3>Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ — купить КЭАЗ 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А по артикулу 100179</h3><br><br>
Выключатель автоматический ВА21-29-320010-0,6А-12Iн-400AC-З/П-У3-КЭАЗ (100179). КЭАЗ. 2950ВА21 Автоматические выключатели в литом корпусе на токи от 0,6А до 100А. Силовой 3 полюсный автоматический выключатель переменного тока в литом корпусе на номинальный ток 0.6 А. <br> 
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
<h3 class='mt-4'>Файлы и документы</h3><ul>
<li>Каталог ВА21 — <a href='https://files.keaz.ru/f/192/catalog-va21.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Руководство по эксплуатации ВА21-29 — <a href='https://files.keaz.ru/f/577/rucovod-info-va21.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Референция МРСК Сибири - АлтайЭнерго — <a href='https://files.keaz.ru/f/3951/refer-altayenergo.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Сертификат ТР ТС ВА21 — <a href='https://files.keaz.ru/f/2234/sert-trts-va21.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Сертификат пожарной безопасности  — <a href='https://files.keaz.ru/f/987/sert-a63-ae20-ak50b-va13-va21-va53-va55-va57-va51-35-va04-36-ak50kb.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Декларация ТР ТС 001-2011 ВА21-29, OptiDin ВМ63 — <a href='https://files.keaz.ru/f/12443/ds-tr-ts-001-2011-va21-29-optidin-vm63.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>ДС ТР ТС 001 ВА21 — <a href='https://files.keaz.ru/f/47869/ds-tr-ts-001-va21.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>ДС ТР ЕАЭС 037 ВА21 — <a href='https://files.keaz.ru/f/16766/ds-tr-eaes-037-va21.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>3D-модель ВА21-29-3 — <a href='https://files.keaz.ru/f/2453/va21-29-3pol.zip' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Чертеж ВА21-29 3-х полюсный — <a href='https://files.keaz.ru/f/14971/chertej-va21-29-3-h-polusniy.dwg.zip' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Заключение Минпромторга О подтверждении КЭАЗ по 719 — <a href='https://files.keaz.ru/f/16921/zakluchenie-minpromtorga-o-podtverjdenii-keaz-po-719.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Выписки из Реестров отечественной продукции  и производителей отечественной продукции — <a href='https://files.keaz.ru/f/17340/vipiski-iz-reestrov-otechestvennoy-produkcii-i-proizvoditeley-otechestvennoy-produkcii.xlsx' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Выписка из Акта экспертизы КТПП (2022) — <a href='https://files.keaz.ru/f/16920/vipiska-iz-akta-ekspertizi-ktpp-2019.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>База данных для EPLAN Electric P8 ВА21 — <a href='https://files.keaz.ru/f/8042/va21.zip' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Лицензия на изготовление оборудования для ядерных установок — <a href='https://files.keaz.ru/f/13287/licenziya-na-izgotovlenie-oborudovaniya-dlya-yadernih-ustanovok.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
<li>Каталог ВА21 — <a href='https://files.keaz.ru/f/192/catalog-va21.pdf' target='_blank' rel='nofollow'>Скачать</a></li>
</ul>
<hr>
<footer class='text-muted'>© КОМПОНЕНТЫ ЭНЕРГИИ — официальный партнёр KEAZ.</footer>
</div></div>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body></html>
