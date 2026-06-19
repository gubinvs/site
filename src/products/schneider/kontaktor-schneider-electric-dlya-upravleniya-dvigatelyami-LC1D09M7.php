<?php
include "../../php/class/api_Connector.php";

$article = "LC1D09M7";
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
$product = null;

if (is_array($data)) {
    foreach ($data as $item) {
        if (
            trim(strtoupper($item['vendorCode'])) === trim(strtoupper($article))
        ) {
            $product = $item;
            break;
        }
    }
}

$price    = $product['price']    ?? 0;
$quantity = $product['quantity'] ?? 0;


// Загружаем только свои товары
$urlBestsellers = $apiServer . "/api/BestsellersAdmin/";

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
    <title>LC1D09M7 — контактор Schneider Electric 9А | Купить TeSys D</title>
    <meta name='description' content='LC1D09M7 — электромеханический контактор Schneider Electric серии TeSys D на 9 А с катушкой 220 В AC. Применяется для пуска электродвигателей, насосов и вентиляции. Цена: <?php echo $price ?> ₽.'>
    <meta name='keywords' content='LC1D09M7, контактор 9А, контактор Schneider Electric, LC1D09, контактор 220В, контактор для двигателя, силовой контактор TeSys D'>
    <meta name='robots' content='index, follow'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='canonical' href='https://encomponent.ru/products/schneider/kontaktor-schneider-electric-dlya-upravleniya-dvigatelyami-LC1D09M7.php'>

    <!-- Open Graph -->
    <meta property='og:title' content='LC1D09M7 — контактор Schneider Electric 9А | TeSys D'>
    <meta property='og:description' content='Контактор LC1D09M7 9 А, 220 В AC для управления электродвигателями и промышленными нагрузками.'>
    <meta property='og:image' content='https://encomponent.ru/img/img-product/LC1D09M7/LC1D09M7_norm.png'>
    <meta property='og:type' content='product'>
    <meta property='og:url' content='https://encomponent.ru/products/schneider/kontaktor-schneider-electric-dlya-upravleniya-dvigatelyami-LC1D09M7.php'>

    <!-- JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "LC1D09M7 Контактор Schneider Electric",
            "image": "https://encomponent.ru/img/img-product/LC1D09M7/LC1D09M7_norm.png",
            "description": "Силовой контактор LC1D09M7 Schneider Electric серии TeSys D. Номинальный ток 9 А, катушка управления 220 В AC.",
            "sku": "LC1D09M7",
            "brand": {
                "@type": "Brand",
                "name": "Schneider Electric"
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
    <link rel='stylesheet' href='../../css/page-products-style.css'>
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
            <div class='container '>
                <h1 class='discription-product-section__title NKUPages_h1'>LC1D09M7 — Электромеханический контактор Schneider Electric</h1>
                <section class='main-section main-section__desktop flex'>
                    <img src='../../img/img-product/LC1D09M7/contactor-LC1D09M7.jpg' alt='Контактор Schneider Electric LC1D09M7' class='msib-img'>
                    <div class='main-section__discription'>

                        <div class='article-block flex'>
                            <div class='article-title'>Артикул:</div>
                            <div class='article-name'>LC1D09M7</div>
                        </div>
                        <hr>
                        <div class='main-section-price-block'>
                            <div class='main-section-price__price'>
                                <?php echo number_format($price, 0, ',', ' '). '  ₽'; ?>
                            </div>
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
                                    <div class='characteristics-item__discr'>Schneider Electric</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Серия:</div>
                                    <div class='characteristics-item__discr'>TeSys D</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Номинальный ток:</div>
                                    <div class='characteristics-item__discr'>9 А (AC-3)</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Катушка управления:</div>
                                    <div class='characteristics-item__discr'>220 В AC 50/60 Гц</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Количество полюсов:</div>
                                    <div class='characteristics-item__discr'>3 NO</div>
                                </li>
                                <li class='characteristics-block__item flex'>
                                    <div class='characteristics-item__title'>Вспомогательные контакты:</div>
                                    <div class='characteristics-item__discr'>1 NO + 1 NC</div>
                                </li>
                            </ul>
                        </div>
                        <!--Кнопки купить в магазинах-->
                        <div class="characteristics-block__button-block characteristics-block__button-block_offer flex">
                            <a href="https://www.ozon.ru/product/lc1d09m7-kontaktor-schneider-electric-3424066591/?from_sku=3424066591&oos_search=false" id="button-link">
                                <button class="button-characteristics__all button-characteristics__ozon">Купить в ОЗОН</button>
                            </a>
                            <a href=<?php echo $shopURL . '/SearchResults?vendorCode=' . $article ?>>
                                <button class="button-characteristics__offer" id="button-buy">Купить сейчас</button>
                            </a>
                        </div>
                        <a href=<?php echo $shopURL . '/CatalogSection/?chapter=Силовые%20контакторы' ?>>
                            <button class="button-characteristics__offer" style="width:100%;">Выбрать другой контактор</button>
                        </a>
                        <a href="https://shop.encomponent.ru/">
                            <button class="button-characteristics__offer" style="width:100%;">Покупки для бизнеса</button>
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
                        <form class="feedback-section__form" action="../../php/invoice-request.php" method="POST">
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
                            <div class='attention-section-title__title'>ОПИСАНИЕ</div>
                        </div>
                        <hr>
                        <div class='attention-section__discription'>
                            &nbsp;&nbsp;Контактор LC1D09M7 Schneider Electric серии TeSys D — это компактное и надёжное коммутационное устройство, разработанное для эффективного управления трёхфазными электродвигателями, насосным оборудованием, вентиляционными системами, компрессорами и другими промышленными нагрузками. Благодаря высокому качеству исполнения и длительному ресурсу работы контактор широко применяется в системах автоматизации, распределительных шкафах и электротехнических установках различного назначения.

                            Модель рассчитана на номинальный рабочий ток 9 А по категории применения AC-3, что позволяет уверенно коммутировать асинхронные электродвигатели мощностью до 4 кВт при напряжении 380–400 В. Катушка управления на 220 В переменного тока (50/60 Гц) обеспечивает стабильное срабатывание и надёжное дистанционное управление оборудованием.

                            Конструкция контактора включает три силовых нормально разомкнутых контакта (3NO) и встроенные вспомогательные контакты 1NO + 1NC, что позволяет использовать устройство не только для пуска и остановки электродвигателей, но и для реализации схем блокировки, сигнализации, автоматического управления и контроля состояния оборудования.

                            Контактор поддерживает работу в сетях с напряжением до 690 В AC и отличается высокой электрической и механической износостойкостью. Устройство адаптировано для быстрого монтажа как на стандартную DIN-рейку, так и непосредственно на монтажную панель, что упрощает установку и обслуживание в шкафах управления.

                            Серия TeSys D от Schneider Electric известна своей совместимостью с широким ассортиментом тепловых реле, дополнительных контактов и аксессуаров, позволяя создавать гибкие и масштабируемые решения для промышленной автоматизации. Компактные размеры, надёжность работы и соответствие международным стандартам делают LC1D09M7 востребованным решением для современных электроустановок.

                        </div>
                    </div>
                </section>
                <div class='container technical-section' id='technical'>
                    <h3 class='mt-5 technical-section__title'>Технические характеристики</h3>
                    <div class="technical-specifications-section__table">
                        <div class="technical-specifications-list">
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name grey">Заводской артикул</div>
                                <div class="specifications-item__tech grey"><?php echo $article ?></div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name">Изготовитель</div>
                                <div class="specifications-item__tech">Schneider Electric</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name grey">Серия</div>
                                <div class="specifications-item__tech grey">TeSys D</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name">Тип устройства</div>
                                <div class="specifications-item__tech">Силовой контактор</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name grey">Номинальный ток</div>
                                <div class="specifications-item__tech grey">9А (AC-3)</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name">Напряжение катушки управления</div>
                                <div class="specifications-item__tech">220–240В (AC)</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name grey">Номинальное рабочее напряжение силовой цепи</div>
                                <div class="specifications-item__tech grey">до 690В (AC)</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name">Количество силовых полюсов</div>
                                <div class="specifications-item__tech">3 NO</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name grey">Вспомогательные контакты</div>
                                <div class="specifications-item__tech grey">1 NO + 1 NC</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name">Тип подключения</div>
                                <div class="specifications-item__tech">Винтовые зажимы</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name grey">Тип крепления</div>
                                <div class="specifications-item__tech grey">DIN-рейка</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name">Габаритные размеры (Д × Ш × В)</div>
                                <div class="specifications-item__tech">77 × 45 × 86 мм</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name grey">Вес (без упаковки)</div>
                                <div class="specifications-item__tech grey">≈ 330 г</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name">Степень защиты</div>
                                <div class="specifications-item__tech">IP20</div>
                            </div>
                            <div class="technical-specifications-list__item">
                                <div class="specifications-item__name grey">Диапазон рабочих температур</div>
                                <div class="specifications-item__tech grey">-5…+60 °C</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="document-section">
                    <img src="../../img/file-img.png" alt="Документы" class="document-section__img">
                    <h3 class='files-and-documents-section__title'>Файлы и документы</h3>
                    <ul class='files-and-documents-section__list'>
                        <li class='files-and-documents-section__item'>
                            Общий каталог контакторов TeSys D (PDF) —
                            <a href='../../files/LC1D09M7/schneider-Electric_TeSys-Deca-contactors_LC1D09M7.pdf' target='_blank' rel='nofollow'>
                                <b>Открыть</b>
                            </a>
                        </li>
                        <li class='files-and-documents-section__item'>
                            Инструкция для подключения LC1D09M7 —
                            <a href='../../files/LC1D09M7/Catalog_LC1D09M7.pdf' target='_blank' rel='nofollow'>
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
            </div>
        </div>
        <!-- LSI -->
        <p style="font-size:0;line-height:0">
            LC1D09M7 контактор 9А 220В купить Schneider Electric TeSys D
            контактор для электродвигателя цена характеристики
            <a href="https://encomponent.ru/products/schneider/kontaktor-schneider-electric-dlya-upravleniya-dvigatelyami-LC1D09M7_seo1.php">электромагнитный контактор schneider electric</a>

        </p>
    </main>
    <?php include '../../php/modules/footer.php'; ?>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>