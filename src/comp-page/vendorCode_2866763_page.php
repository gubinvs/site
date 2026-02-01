<?php
    include "../php/class/api_Connector.php";

    $article = "2866763"; // Замените на нужный артикул
    $titlePage = "2866763, QUINT-PS/1AC/24DC/10 - Phoenix Contact";
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

    $canonicalUrl = 'https://encomponent.ru/comp-page/2866763.php';

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="product:price:amount" content="<?php echo $price ?>">
    <meta property="product:price:currency" content="RUB">

    <!-- 🔹 Иконка и стили -->
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../css/encomp-nku-project-style.css" media="all">

    <!-- 🔹 Базовое SEO -->
    <title><?php echo $titlePage ?></title>
    <meta name="description"
        content="Купить <?php echo $titlePage ?>. Цена: <?php echo number_format($price, 0, ',', ' ') ?> ₽. В наличии: <?php echo $quantity ?> шт. Производитель: <?php echo $manufacturer ?>.">
    <meta name="keywords"
        content="<?php echo $article ?>, <?php echo $manufacturer ?>, промышленное оборудование, источник питания, купить, цена, характеристики">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $canonicalUrl ?>">

    <!-- 🔹 Open Graph -->
    <meta property="og:type" content="product">
    <meta property="og:title" content="<?php echo $titlePage ?>">
    <meta property="og:description"
        content="Цена: <?php echo number_format($price, 0, ',', ' ') ?> ₽. В наличии: <?php echo $quantity ?> шт. Производитель: <?php echo $manufacturer ?>.">
    <meta property="og:image"
        content="https://encomponent.ru/img/img-product/<?php echo $article ?>/<?php echo $article ?>_big_1920.jpg">
    <meta property="og:url" content="<?php echo $canonicalUrl ?>">
    <meta property="og:site_name" content="Компоненты энергии">

    <!-- 🔹 Schema.org Product -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "<?php echo $titlePage ?>",
            "image": "https://encomponent.ru/img/img-product/<?php echo $article ?>/<?php echo $article ?>_big_1920.jpg",
            "description": "Купить <?php echo $titlePage ?> по цене <?php echo number_format($price, 0, ',', ' ') ?> ₽. В наличии <?php echo $quantity ?> шт.",
            "sku": "<?php echo $article ?>",
            "brand": {
                "@type": "Brand",
                "name": "<?php echo $manufacturer ?>"
            },
            "offers": {
                "@type": "Offer",
                "url": "<?php echo $canonicalUrl ?>",
                "priceCurrency": "RUB",
                "price": "<?php echo $price ?>",
                "availability": "<?php echo $quantity > 0 ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock' ?>",
                "itemCondition": "https://schema.org/NewCondition"
            },
            "manufacturer": {
                "@type": "Organization",
                "name": "Phoenix Contact"
            },
            "mpn": "2866763",
            "category": "Industrial Power Supply"
        }
    </script>

    <!-- 🔹 Яндекс -->
    <meta name="yandex-verification" content="26c39d63e5887901">

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
</head>

<body>
    <?php
    $color_line_header = $color_line_header ?? null;
    include_once '../php/modules/header.php';
    error_reporting(0); // Отключение информации об ошибках на странице
    ?>
    <main>
        <div class="discription-product-section">
            <div class="container">
                <h1 class="discription-product-section__title NKUPages_h1"><?php echo $titlePage ?></h1>
                <section class="main-section flex">
                    <div class="main-section__img-block">
                        <img
                            class="discription-product__img main-section__img"
                            src="../img/img-product/2866763/2866763_big_1920.jpg"
                            alt="<?php echo 'Фото товара: ' . $titlePage ?>">
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
                                    <div class="characteristics-item__discr">10</div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Мощность, Вт</div>
                                    <div class="characteristics-item__discr">240</div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Вес, кг</div>
                                    <div class="characteristics-item__discr">0.75</div>
                                </li>
                            </ul>
                        </div>
                        <!--Кнопки купить в магазинах-->
                        <div class="characteristics-block__button-block flex">
                            <a href="https://www.ozon.ru/product/2866763-istochnik-pitaniya-quint-ps-1ac-24dc-10-3482911481/" id="button-link">
                                <button class="button-characteristics__all button-characteristics__ozon">Купить в ОЗОНе</button>
                            </a>
                            <a href=<?php echo $shopURL . '/SearchResults?vendorCode=' . $article ?>>
                                <button class="button-characteristics__offer" id="button-buy">В интернет-магазинe</button>
                            </a>
                        </div>
                        <!--/ Кнопки купить в магазинах-->
                    </div>
                </section>
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
                                    <div class="specifications-item__tech  grey">10</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Описание полюсов</div>
                                    <div class="specifications-item__tech">2</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Номинальный ток, А</div>
                                    <div class="specifications-item__tech grey">63</div>
                                </div>

                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Тип монтажа</div>
                                    <div class="specifications-item__tech">Дин рейка</div>
                                </div>

                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Вес нетто, кг</div>
                                    <div class="specifications-item__tech grey">0,165</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Ширина, мм</div>
                                    <div class="specifications-item__tech">60</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Высота, мм</div>
                                    <div class="specifications-item__tech grey">130</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Глубина, мм</div>
                                    <div class="specifications-item__tech">125</div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="product-additional-info" style="margin-bottom: 40px;">
                    <div class="container">
                        <h2>Описание и преимущества 2866763 QUINT-PS/1AC/24DC/10 Phoenix Contact</h2>

                        <p>
                            Источник питания <strong>2866763 QUINT-PS/1AC/24DC/10 Phoenix Contact</strong>
                            относится к промышленной серии <strong>QUINT POWER</strong> и предназначен
                            для надежного электропитания систем автоматизации, шкафов управления,
                            контроллеров, датчиков и исполнительных механизмов.
                            Устройство рассчитано на монтаж на <strong>DIN-рейку</strong> и
                            обеспечивает стабилизированное выходное напряжение <strong>24 В DC</strong>
                            при токе до <strong>10 А</strong>.
                        </p>

                        <p>
                            Источник питания поддерживает широкий диапазон входных напряжений
                            <strong>85–264 В AC</strong>, что позволяет использовать его
                            в различных промышленных сетях без дополнительной настройки.
                            Номинальная выходная мощность составляет <strong>240 Вт</strong>,
                            что делает модель оптимальной для питания оборудования с высокими
                            пусковыми токами.
                        </p>

                        <p>
                            Ключевым преимуществом модели является технология
                            <strong>SFB (Selective Fuse Breaking)</strong>, обеспечивающая
                            быстрое и селективное отключение неисправных цепей.
                            Дополнительно реализована функция <strong>POWER BOOST</strong>,
                            позволяющая кратковременно увеличивать выходную мощность
                            для надежного запуска нагрузок.
                        </p>

                        <p>
                            Источник питания <strong>2866763 Phoenix Contact</strong>
                            отличается высокой эффективностью, устойчивостью к перегрузкам
                            и длительным сроком службы, что делает его отличным выбором
                            для ответственных промышленных применений.
                        </p>
                    </div>
                </section>
    </main>
    <?php include "../php/modules/footer.php" ?>
</body>

</html>