
            <?php
                include "../../php/class/api_Connector.php"; 
        
                $article = "273912";

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
<title>273912, Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ — купить KEAZ Optima 233680OptiMat E РЕГ Аксессуары для автоматических выключателей в литом корпусе по артикулу 273912 </title>
<meta name='description' content='Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ (273912). KEAZ Optima. 233680OptiMat E РЕГ Аксессуары для автоматических выключателей в литом корпусе. Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ дополнительная сборочная единица подходит для применения с выключателями типа  OptiMat E100РЕГ для размещения в силовых шкафах и для крепления аппарата на DIN-рейку. . Продается по цене: <?php echo $price ?> RUB.'>
<meta name='keywords' content='Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ, KEAZ Optima, 273912, 233680OptiMat E РЕГ Аксессуары для автоматических выключателей в литом корпусе, купить, цена, KEAZ, электрооборудование'>
<meta name='robots' content='index, follow'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='icon' href='https://encomponent.ru/favicon.svg' type='image/svg+xml'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
<link rel='stylesheet' href='../../css/encomp-nku-project-style.css'>
<link rel='canonical' href='https://encomponent.ru/products/keaz/adapter-na-din-reyku-optimat-e100-om4-reg-article-273912.php'>
<!--Open Graph-->
<meta property='og:title' content='Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ — купить KEAZ Optima 233680OptiMat E РЕГ Аксессуары для автоматических выключателей в литом корпусе по артикулу 273912 — купить по цене <?php echo $price ?> ₽'>
<meta property='og:description' content='Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ (273912). KEAZ Optima. 233680OptiMat E РЕГ Аксессуары для автоматических выключателей в литом корпусе. Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ дополнительная сборочная единица подходит для применения с выключателями типа  OptiMat E100РЕГ для размещения в силовых шкафах и для крепления аппарата на DIN-рейку. '>
<meta property='og:image' content='System.Collections.Generic.List`1[System.String]'>
<meta property='og:type' content='product'>
<meta property='og:url' content='https://encomponent.ru/products/keaz/adapter-na-din-reyku-optimat-e100-om4-reg-article-273912.php'>
<!-- JSON-LD Product schema -->
<script type='application/ld+json'>

                            {
                                "@context": "https://schema.org",
                                "@type": "Product",
                                "name": "Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ",
                                "image": "https://files.keaz.ru/f/539/photo-OptiMat-E100-akss.png",
                                "description": "Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ (273912). KEAZ Optima. 233680OptiMat E РЕГ Аксессуары для автоматических выключателей в литом корпусе. Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ дополнительная сборочная единица подходит для применения с выключателями типа  OptiMat E100РЕГ для размещения в силовых шкафах и для крепления аппарата на DIN-рейку. ",
                                "sku": "273912",
                                "brand": {
                                    "@type": "Brand",
                                    "name": "KEAZ Optima"
                                },
                                "offers": {
                                    "@type": "Offer",
                                    "price": <?php echo number_format($price, 2, '.', ''); ?>,
                                    "priceCurrency": "RUB",
                                    "availability": "https://schema.org/InStock",
                                    "url": "https://encomponent.ru/products/keaz/adapter-na-din-reyku-optimat-e100-om4-reg-article-273912.php"
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
                                            "ratingValue": 4
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
<h1 class='discription-product-section__title NKUPages_h1'>273912, Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ</h1>
                                    <section class='main-section flex'>
                                        <div class='main-section__img-block'>
<img src='https://files.keaz.ru/f/539/photo-OptiMat-E100-akss.png' alt='Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ' class='discription-product__img main-section__img'>
</div>
      
                            <div class='main-section__discription'>
                                <div class='article-block flex'>
                                    <div class='article-title'>Артикул:</div>
                                        <h6 class='article-name'>273912</h6>
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
                                                        <div class='characteristics-item__discr'>KEAZ Optima</div>
                                                    </li>
                                                    <li class='characteristics-block__item flex'>
                                                        <div class='characteristics-item__title'>Высота, мм</div>
                                                        <div class='characteristics-item__discr'>115</div>
                                                    </li>
                                                    <li class='characteristics-block__item flex'>
                                                        <div class='characteristics-item__title'>Глубина, мм</div>
                                                        <div class='characteristics-item__discr'>20</div>
                                                    </li>
                                                    <li class='characteristics-block__item flex'>
                                                        <div class='characteristics-item__title'>Ширина, мм</div>
                                                        <div class='characteristics-item__discr'>185</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class='characteristics-block__button-block flex'>
                                                <a href='#technical' id='button-link'>
                                                    <div class='button-characteristics__all'>Посмотреть все характеристики</div>
                                                </a>
                                                <a href='https://shop.encomponent.ru/Basket/?vendorCode=273912'>
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
                                            У нас можно купить или заказать: Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ — купить KEAZ Optima 233680OptiMat E РЕГ Аксессуары для автоматических выключателей в литом корпусе по артикулу 273912 <br> Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ (273912). KEAZ Optima. 233680OptiMat E РЕГ Аксессуары для автоматических выключателей в литом корпусе. Адаптер на DIN-рейку OptiMat E100-ОМ4-РЕГ дополнительная сборочная единица подходит для применения с выключателями типа  OptiMat E100РЕГ для размещения в силовых шкафах и для крепления аппарата на DIN-рейку. 
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
<tr><td>Тип крепления</td><td>DIN-рейка (с Ω-профилем) 35 мм</td></tr>
<tr><td>Материал</td><td>Металл</td></tr>
<tr><td>Тип адаптера на DIN-рейку</td><td>Прямолинейный</td></tr>
<tr><td>Страна производитель</td><td>Россия</td></tr>
<tr><td>ТНВЭД код</td><td>8538909908</td></tr>
</tbody></table>
<h3 class='files-and-documents-section__title'>Файлы и документы</h3><ul class='files-and-documents-section__list'>
<li class='files-and-documents-section__item'>Каталог OptiMat E — <a href='https://files.keaz.ru/f/119/catalog-optimat.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Catalog OptiMat E (En) — <a href='https://files.keaz.ru/f/11772/optimat-e-en.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Инструкция по установке аксессуаров автоматических выключателей OptiMat E — <a href='https://files.keaz.ru/f/6901/instrukciya-po-ustanovke-aksessuarov-vikluchateley-avtomaticheskih-tipa-optimat-e-gjik-641353.065iu.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Инструкция по входному контролю покупателя для автоматических выключателей в литом корпусе серий OptiMat E, ВА04, ВА51, ВА57, АЕ, АП с электромагнитными и тепловыми расцепителями — <a href='https://files.keaz.ru/f/16911/instrukciya-po-vhodnomu-kontrolu-pokupatelya-avt.-vikl.-optimat-e-va-ae-ap-el.-magn.-i-teplovoy-rasc..pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Референция ООО "Электрон" — <a href='https://files.keaz.ru/f/8771/ooo-elektron-optimat-e.jpg' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Референция АО Сетевая компания КЭС — <a href='https://files.keaz.ru/f/34507/referenciya-ao-setevaya-kompaniya-kes.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Отзыв от Россети Юг — <a href='https://files.keaz.ru/f/34607/otziv-ot-rosseti-ug.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Референция Управляющая Компания ЭФКО — <a href='https://files.keaz.ru/f/21824/referenciya-upravlyauschaya-kompaniya-efko.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Электрощит-Сервис — <a href='https://files.keaz.ru/f/36445/elektroschit-servis.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Завод электротехнического оборудования и трансформаторных подстанций — <a href='https://files.keaz.ru/f/36446/zavod-elektrotehnicheskogo-oborudovaniya-i-transformatornih-podstanciy.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Референция ООО "ШНЭЛ" — <a href='https://files.keaz.ru/f/4884/shnel.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Референция МРСК — <a href='https://files.keaz.ru/f/9499/mrsk-otziv-optimat.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>СС ТР ТС 004 OptiMat E — <a href='https://files.keaz.ru/f/14038/optimat-e-d-va57-va51-ak50b-ba21.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Сертификат ИНТЕРГАЗСЕРТ OptiMat Е и аксессуары — <a href='https://files.keaz.ru/f/25506/sertifikat-intergazsert-optimat-e-i-aksessuari.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Свидетельство о типовом одобрении РКО OptiMat E — <a href='https://files.keaz.ru/f/5705/svidetelstvo-ob-odobrenii-tipa-optimat-e.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Свидетельство о типовом одобрении РМРС OptiMat E — <a href='https://files.keaz.ru/f/4029/svidetelstvo-o-tipovom-odobrenii-optimat-e.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Патент 80756 - МССВ OptiMat E — <a href='https://files.keaz.ru/f/1739/photo-patent-80756-MCCB-va04-31-optimat-E.jpg' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Патент 80757 - Optimat E — <a href='https://files.keaz.ru/f/2201/photo-patent-80757-optimat-e.jpg' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 перегородки верхние — <a href='https://files.keaz.ru/f/50245/optimat-e250-peregorodki-verhnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>3D-модель Привод двигательный OptiMat D100, D160, D250-У3 — <a href='https://files.keaz.ru/f/13109/3d-model-privod-dvigatelniy-optimat-d100-250.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 — <a href='https://files.keaz.ru/f/50219/optimat-e100.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 устройство блокировки положения (отключено) — <a href='https://files.keaz.ru/f/50222/optimat-e100-ustroystvo-blokirovki-polojeniya-otklucheno.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 с клеммными крышками нижняя — <a href='https://files.keaz.ru/f/50223/optimat-e100-s-klemmnimi-krishkami-nijnyaya.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 с клеммными крышками верхняя — <a href='https://files.keaz.ru/f/50224/optimat-e100-s-klemmnimi-krishkami-verhnyaya.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 рукоятка поворотная выносная — <a href='https://files.keaz.ru/f/50225/optimat-e100-rukoyatka-povorotnaya-vinosnaya.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 расширители полюсов 63...100 нижние.STEP — <a href='https://files.keaz.ru/f/50226/optimat-e100-rasshiriteli-polusov-63-100-nijnie.step.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 расширители полюсов 63...100 верхние.STEP — <a href='https://files.keaz.ru/f/50227/optimat-e100-rasshiriteli-polusov-63-100-verhnie.step.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 расширители полюсов 16...50 нижние.STEP — <a href='https://files.keaz.ru/f/50228/optimat-e100-rasshiriteli-polusov-16-50-nijnie.step.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 расширители полюсов 16...50 верхние.STEP — <a href='https://files.keaz.ru/f/50229/optimat-e100-rasshiriteli-polusov-16-50-verhnie.step.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 перегородки нижние — <a href='https://files.keaz.ru/f/50230/optimat-e100-peregorodki-nijnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 перегородки верхние — <a href='https://files.keaz.ru/f/50231/optimat-e100-peregorodki-verhnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 колодки 63-100 нижние — <a href='https://files.keaz.ru/f/50232/optimat-e100-kolodki-63-100-nijnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 колодки 63-100 верхние — <a href='https://files.keaz.ru/f/50233/optimat-e100-kolodki-63-100-verhnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 колодки 16-50 нижние — <a href='https://files.keaz.ru/f/50234/optimat-e100-kolodki-16-50-nijnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 колодки 16-50 верхние — <a href='https://files.keaz.ru/f/50235/optimat-e100-kolodki-16-50-verhnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E100 адаптер крепления на дин-рейку — <a href='https://files.keaz.ru/f/50236/optimat-e100-adapter-krepleniya-na-din-reyku.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 — <a href='https://files.keaz.ru/f/50237/optimat-e250.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 устройство блокировки положения (отключено) — <a href='https://files.keaz.ru/f/50238/optimat-e250-ustroystvo-blokirovki-polojeniya-otklucheno.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 с рукояткой поворотной выносной — <a href='https://files.keaz.ru/f/50239/optimat-e250-s-rukoyatkoy-povorotnoy-vinosnoy.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 с клеммными крышками нижняя — <a href='https://files.keaz.ru/f/50240/optimat-e250-s-klemmnimi-krishkami-nijnyaya.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 с клеммными крышками верхняя — <a href='https://files.keaz.ru/f/50241/optimat-e250-s-klemmnimi-krishkami-verhnyaya.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 расширители полюсов нижние — <a href='https://files.keaz.ru/f/50242/optimat-e250-rasshiriteli-polusov-nijnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 расширители полюсов верхние — <a href='https://files.keaz.ru/f/50243/optimat-e250-rasshiriteli-polusov-verhnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 перегородки нижние — <a href='https://files.keaz.ru/f/50244/optimat-e250-peregorodki-nijnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 колодки нижние — <a href='https://files.keaz.ru/f/50246/optimat-e250-kolodki-nijnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 колодки верхние — <a href='https://files.keaz.ru/f/50247/optimat-e250-kolodki-verhnie.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>OptiMat E250 адаптер крепления на дин-рейку — <a href='https://files.keaz.ru/f/50248/optimat-e250-adapter-krepleniya-na-din-reyku.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Адаптер на DIN-рейку OptiMat E100-УХЛ3 — <a href='https://files.keaz.ru/f/32791/adapter-na-din-reyku-optimat-e100-uhl3.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Заключение Минпромторга О подтверждении КЭАЗ по 719 — <a href='https://files.keaz.ru/f/16921/zakluchenie-minpromtorga-o-podtverjdenii-keaz-po-719.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Выписка из Акта экспертизы КТПП (2022) — <a href='https://files.keaz.ru/f/16920/vipiska-iz-akta-ekspertizi-ktpp-2019.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Выписки из Реестров отечественной продукции  и производителей отечественной продукции — <a href='https://files.keaz.ru/f/17340/vipiski-iz-reestrov-otechestvennoy-produkcii-i-proizvoditeley-otechestvennoy-produkcii.xlsx' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>База данных для EPLAN Electric P8 OptiMat E — <a href='https://files.keaz.ru/f/8027/optimat-e.zip' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Каталог OptiMat E — <a href='https://files.keaz.ru/f/119/catalog-optimat.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
<li class='files-and-documents-section__item'>Catalog OptiMat E (En) — <a href='https://files.keaz.ru/f/11772/optimat-e-en.pdf' target='_blank' rel='nofollow'><b>Скачать</b></a></li>
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
                        
<div class='container link-next-page'>
<div class='link-next-page__text'>Рекомендуем заглянуть на эту страницу товара:</div>
<div class='prev-page-link'><a href='https://encomponent.ru/products/keaz/vyklyuchatel-avtomaticheskiy-optimat-e100n100-uhl3-reg-article-273911.php'>https://encomponent.ru/products/keaz/vyklyuchatel-avtomaticheskiy-optimat-e100n100-uhl3-reg-article-273911.php</a></div>
</div>
<?php include '../../php/modules/footer.php' ?>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body></html>
