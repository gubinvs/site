<?php
    include "../../php/class/api_Connector.php";

    $article = "NKU10-SHAP-12000000-01";
    $title = "Щит аварийного переключения ЩАП-12 однофазный номинальный ток 10А IEK";
    $description = "";
    $keywords = "";
    $brand = "IEK";
    $quantity = 1;
    //$url = $apiServer . "/api/SearchArticle/" . urlencode($article);

    //$options = [
    //    "http" => [
    //        "method" => "GET",
    //        "header" => "Content-Type: application/json"
    //    ]
    //];

    //$context = stream_context_create($options);
    //$response = file_get_contents($url, false, $context);
    //if ($response === FALSE) {
    //    die("Ошибка запроса");
    //}

    //$data = json_decode($response, true);
    //$product = null;

    //if (is_array($data)) {
    //    foreach ($data as $item) {
    //        if (
    //            trim(strtoupper($item['vendorCode'])) === trim(strtoupper($article))
    //        ) {
    //            $product = $item;
    //            break;
    //        }
    //    }
    //}

    //$price    = $product['price']    ?? 0;
    //$quantity = $product['quantity'] ?? 0;
    $price = 12000;

?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='UTF-8'>
    <title><?php echo $article . "-" . $title ?></title>
    <meta name='description' content=' <?php echo $price ?> ₽.'>
    <meta name='keywords' content=''>
    <meta name='robots' content='index, follow'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='canonical' href='https://encomponent.ru/nku-page/nku10-shap/shit-avarijnogo-pereklyucheniya-shap-12-odnofaznyj-nominalnyj-tok-10A_IEK_artikul_NKU10-SHAP-12000000-01.php'>

    <!-- Open Graph -->
    <meta property='og:title' content='<?php echo $article . "-" . $title ?>'>
    <meta property='og:description' content=''>
    <meta property='og:image' content='https://encomponent.ru/img/img-product/LC1D09M7/LC1D09M7_norm.png'>
    <meta property='og:type' content='product'>
    <meta property='og:url' content='https://encomponent.ru/nku-page/nku10-shap/shit-avarijnogo-pereklyucheniya-shap-12-odnofaznyj-nominalnyj-tok-10A_IEK_artikul_NKU10-SHAP-12000000-01.php'>

    <!-- JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "<?php echo $title ?>",
            "image": " ",
            "description": "<?php echo $description ?>",
            "sku": "<?php echo $article?>",
            "brand": {
                "@type": "Brand",
                "name": "<?php echo $brand ?>"
            },
            "offers": {
                "@type": "Offer",
                "price": "<?php echo number_format($price, 2, '.', ''); ?>",
                "priceCurrency": "RUB",
                "availability": "<?php echo ($quantity > 0) ? "https://schema.org/InStock" : "https://schema.org/OutOfStock"; ?>"
            }
        }
    </script>
    <link rel='icon' href='https://encomponent.ru/favicon.svg' type='image/svg+xml'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='../../css/encomp-nku-project-style.css'>
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
    <!--Yandex.Metrika counter-->
    <noscript>
        <div>
            <img src='https://mc.yandex.ru/watch/98501628' style='position:absolute; left:-9999px;' alt='Яндекс метрика'>
        </div>
    </noscript>
    <!--/Yandex.Metrika counter-->
</head>

<body>
    <?php
        $color_line_header = $color_line_header ?? null;
        include_once '../../php/modules/header.php';
    ?>

    <main>
        <div class='discription-product-section'>
            <div class='container discription-product-section__container'>
                <h1 class='discription-product-section__title NKUPages_h1'>
                    <?php echo $article . ", " . $title ?>
                </h1>

                <section class='main-section flex'>
                    <div class='main-section__img-block'>
                        <img src='../../img/img-product/NKU10-SHAP-12000000-01/NKU10-SHAP-12000000-01.avif' alt='<?php echo $description ?>'
                            class='discription-product__img main-section__img'>
                    </div>
                    <div class='main-section__discription'>

                        <div class='article-block flex'>
                            <div class='article-title'>Артикул:</div>
                            <h5 class='article-name'><?php echo $article ?></h5>
                        </div>
                        <hr>
                        <div class='main-section-price-block'>
                            <div class='main-section-price__price'>
                                <?php echo number_format($price, 0, ',', ' '); ?>
                            </div>
                            <div class="main-section-price__price-discr">в т.ч. НДС</div>
                        </div>
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
                                    <div class='characteristics-item__discr'>Компоненты энергии</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Тип изделия:</div>
                                    <div class='characteristics-item__discr'>Щит аварийного переключения ЩАП-12</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Номинальный ток:</div>
                                    <div class='characteristics-item__discr'>10 А</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Номинальное напряжение:</div>
                                    <div class='characteristics-item__discr'>220 В</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Количество фаз:</div>
                                    <div class='characteristics-item__discr'>1</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Степень защиты:</div>
                                    <div class='characteristics-item__discr'>IP31</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Материал корпуса:</div>
                                    <div class='characteristics-item__discr'>Сталь</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Исполнение:</div>
                                    <div class='characteristics-item__discr'>Навесной</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Габариты (В×Ш×Г):</div>
                                    <div class='characteristics-item__discr'>300 × 210 × 150 мм</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Частота сети:</div>
                                    <div class='characteristics-item__discr'>50 Гц</div>
                                </li>
                            </ul>
                        </div>
                        <!--Кнопки купить в магазинах-->
                        <div class="characteristics-block__button-block characteristics-block__button-block_offer flex">
                            <a href="" id="button-link">
                                <button class="button-characteristics__all button-characteristics__ozon">Купить в ОЗОНе</button>
                            </a>
                            <a href=<?php echo $shopURL . '/SearchResults?vendorCode=' . $article ?>>
                                <button class="button-characteristics__offer" id="button-buy">В интернет-магазинe</button>
                            </a>
                        </div>
                        <a href=<?php echo $shopURL . '/CatalogSection/?chapter=Силовые%20контакторы' ?>>
                            <button class="button-characteristics__offer" style="width:100%;">Выбрать другой ЩАП</button>
                        </a>
                        <!--/ Кнопки купить в магазинах-->
                    </div>
                </section>
                <!--Форма заказа счета со страницы товара-->
                <section class="feedback-section" id="feedback">
                    <h2 class="visually-hidden h1-visually h1__visually" style="visibility: hidden;">Форма обратной связи c Компоненты энергии </h2>
                    <div class="container feedback-section__container invoice-request-section__container">
                        <div class="feedback-section__title-block">
                            <h2 class="title-block__title">
                                Запросите счет у менеджера<br> по работе с клиентами</h2>
                            <div class="title-fon-text invoice-request-section__title-fon-text"></div>
                            <div class="title-block__discr">
                                Для этого необходимо заполнить форму, а специалист свяжется с вами,
                                оформит счет и согласует удобный способ доставки!
                            </div>
                        </div>
                        <form class="feedback-section__form" action="../php/invoice-request.php" method="POST">
                            <input
                                class="feedback-section__input feedback-section__input_name"
                                type="hidden"
                                name="vendorCode"
                                value="<?php echo htmlspecialchars($article); ?>"
                                required>
                            <input class="feedback-section__input feedback-section__input_name" type="text" placeholder="Ваше имя" name="name" required>
                            <input type="hidden" name="site" value="Карточка товара">
                            <input class="feedback-section__input feedback-section__tel" type="tel" placeholder="+7 (999) 999 99 99" name="phone" required>
                            <input class="feedback-section__input feedback-section__input_email" type="email" placeholder="Ваш E-mail" name="email" required>
                            <input class="feedback-section__input feedback-section__input_email" type="text" placeholder="ИНН(ОГРН) или ОГРНИП" name="inn" required>
                            <input type="text" name="robot" style="display: none" class="feedback-section__input_none">
                            <textarea class="feedback-section__input feedback-section__input_textarea" placeholder="Дополнительная информация" name="text" required></textarea>
                            <button class="feedback-section__button" type="submit">Запросить счет</button>
                            <div class="check-box">
                                <input type="checkbox" name="chekBox" required>
                                <a class="check-box__input check-box__pp-page" href="https://encomponent.ru/pp-page.html">
                                    Даю согласие на обработку персональных данных
                                </a>
                                <input type="hidden" name="active-form" value="massage">
                            </div>
                        </form>
                    </div>
                </section>
                <!--/Форма заказа счета со страницы товара-->
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
                        <hr>
                        <div class='attention-section__discription'>
                            В разделе «Типовые решения НКУ» представлены схемные решения, разработанные компанией IEK Group. 
                            Наша компания является партнёром производителя и занимается производством и реализацией данных проектов.
                            <br><br>На странице размещён пример реализованного нами решения. Вы можете приобрести его удобным для вас способом. 
                            Если доступного количества недостаточно для ваших задач, мы можем изготовить необходимое количество под заказ. 
                            Для этого свяжитесь с нами, и мы поможем реализовать данный проект. 
                        </div>
                    </div>
                </section>
                <div class='container' id='technical'>
                    <h3 class='mt-5'>Технические характеристики</h3>
                    <table class='table table-bordered table-striped mt-3'>
                        <thead class='table-secondary'>
                            <tr>
                                <th>Параметр</th>
                                <th style="width: 60%;">Значение</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Производитель</td>
                                <td>Компоненты энергии</td>
                            </tr>
                            <tr>
                                <td>Тип изделия</td>
                                <td>Щит аварийного переключения</td>
                            </tr>
                            <tr>
                                <td>Модель / Типовое решение</td>
                                <td>NKU10-SHAP-12000000-01 (ЩАП-12)</td>
                            </tr>
                            <tr>
                                <td>Назначение</td>
                                <td>
                                    Автоматическое переключение питания нагрузки
                                    на резервный ввод при пропадании основного
                                    источника электроснабжения
                                </td>
                            </tr>
                            <tr>
                                <td>Номинальный ток</td>
                                <td>10 А</td>
                            </tr>
                            <tr>
                                <td>Номинальное напряжение</td>
                                <td>220 В AC</td>
                            </tr>
                            <tr>
                                <td>Частота сети</td>
                                <td>50 Гц</td>
                            </tr>
                            <tr>
                                <td>Количество фаз</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Тип переключения</td>
                                <td>Автоматическое переключение основного и резервного ввода</td>
                            </tr>
                            <tr>
                                <td>Тип установки</td>
                                <td>Навесной монтаж</td>
                            </tr>
                            <tr>
                                <td>Материал корпуса</td>
                                <td>Сталь с порошковым покрытием</td>
                            </tr>
                            <tr>
                                <td>Степень защиты</td>
                                <td>IP31</td>
                            </tr>
                            <tr>
                                <td>Габаритные размеры (В × Ш × Г)</td>
                                <td>300 × 210 × 150 мм</td>
                            </tr>
                            <tr>
                                <td>Диапазон рабочих температур</td>
                                <td>-5…+40 °C</td>
                            </tr>
                            <tr>
                                <td>Область применения</td>
                                <td>
                                    Обеспечение резервного питания для небольших
                                    объектов: систем освещения, автоматики,
                                    инженерного оборудования, малых коммерческих
                                    и административных помещений
                                </td>
                            </tr>
                            <tr>
                                <td>Особенности</td>
                                <td>
                                    Готовое типовое решение НКУ, разработанное IEK Group;
                                    компактная конструкция; возможность интеграции
                                    в системы электроснабжения зданий
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3 class='files-and-documents-section__title'>Файлы и документы</h3>
                <ul class='files-and-documents-section__list'>
                    <li class='files-and-documents-section__item'>
                        Схема подключения (PNG) —
                        <a href='../../files/NKU10-SHAP-12000000-01/4679e867d6fb7ccdfb07b90805daefa67204fdd81393cdf2b954aad1e276d4c1.png' target='_blank' rel='nofollow'>
                            <b>Открыть</b>
                        </a>
                    </li>
                    <li class='files-and-documents-section__item'>
                        AutoCad, Чертеж и спецификация решения (DWG, 243.70 KB)
                        <a href='../../files/NKU10-SHAP-12000000-01/252ed1b5fd53619675d6a2dc6530e6179cd51318c8d0dcc3f2da10ae6d4ac90e.dwg' target='_blank' rel='nofollow'>
                            <b>Скачать</b>
                        </a>
                    </li>
                </ul>
            </div>
            <section class="equipment-section">
                <div class="container">
                    <div class="attention-section__title-block technical-specifications-section__title-block flex">
                        <div class="attention-section-title-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="31" height="31" rx="3.5" fill="#F3DE09" stroke="#1D252C" />
                                <line x1="9" y1="12" x2="23" y2="12" stroke="black" stroke-width="2" />
                                <line x1="11" y1="18" x2="21" y2="18" stroke="black" stroke-width="2" />
                            </svg>
                        </div>
                        <div class="attention-section-title__title">Комплектация</div>
                    </div>
                    <div class="technical-specifications-section__table mb-40">
                        <ul class="technical-specifications-list">
                            <div class="technical-specifications-list__item">
                                <div class="equipment-section-item__article grey title">Артикул</div>
                                <div class="equipment-section-item__name grey title">Наименование</div>
                                <div class="equipment-section-item__quantity grey title">Кол-во</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="equipment-section-item__article">BLS10-ADDS-230-K04</div>
                                <div class="equipment-section-item__name">Лампа AD22DS(LED)матрица d22мм красный 230В AC/DC IEK</div>
                                <div class="equipment-section-item__quantity">1</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="equipment-section-item__article grey">RRP10-4-10-220A</div>
                                <div class="equipment-section-item__name grey">Реле РЭК77/4(LY4) 10А 220В AC IEK</div>
                                <div class="equipment-section-item__quantity grey">1</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="equipment-section-item__article">YKM40-321-31</div>
                                <div class="equipment-section-item__name">Корпус металлический ЩМП-3.2.1-0 (300х210х150мм) УХЛ3 IP31 IEK</div>
                                <div class="equipment-section-item__quantity">1</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="equipment-section-item__article grey">MVA20-1-010-C</div>
                                <div class="equipment-section-item__name grey">KARAT Автоматический выключатель ВА47-29 1P C 10А 4,5кА IEK</div>
                                <div class="equipment-section-item__quantity grey">2</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="equipment-section-item__article">BLS10-ADDS-230-K06</div>
                                <div class="equipment-section-item__name">Лампа AD22DS(LED)матрица d22мм зеленый 230В AC/DC IEK</div>
                                <div class="equipment-section-item__quantity">1</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="equipment-section-item__article grey">RRP10D-RRM-4</div>
                                <div class="equipment-section-item__name grey">Разъем РРМ77/4(PTF14A) для РЭК77/4(LY4) модульный IEK</div>
                                <div class="equipment-section-item__quantity grey">1</div>
                            </div>
                        </ul>
                    </div>
                    <a href="../../files/NKU10-SHAP-12000000-01/NKU10-SHAP-12000000-01.csv">
                        <div class="button-equipment">Скачать</div>
                    </a>
                </div>
            </section>
        </div>
        <!-- LSI -->
        <p style="font-size:0;line-height:0">
            Щиты автоматического ввода резерва (АВР) типа ЩАП предназначены для автоматического переключения силового электрооборудования и систем освещения на резервный источник питания при пропадании основного напряжения. После восстановления нормальных параметров сети устройство автоматически возвращает электроснабжение на основной ввод, обеспечивая стабильную и бесперебойную работу оборудования.
            Конструктивно щиты ЩАП изготавливаются в металлических корпусах навесного исполнения. Корпус обеспечивает степень защиты IP31, что позволяет использовать оборудование в распределительных и технических помещениях для организации надежной системы резервного электропитания.
        </p>
    </main>
    <?php include '../../php/modules/footer.php'; ?>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>