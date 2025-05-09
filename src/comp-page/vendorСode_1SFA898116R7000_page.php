<?php
include "../php/class/api_Connector.php";

$article = "1SFA898116R7000"; // Замените на нужный артикул
$titlePage = "1SFA898116R7000, Софтстартер PSTX470-600-70 250кВт 400В 470A (450кВт 400В 814A внутри треугольника) с функцией защиты двигателя";
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
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../css/encomp-nku-project-style.css" media="all">
    <meta name="description" content="<?php echo 'Страница с описанием товара: ' . $titlePage ?>">
    <title><?php echo $titlePage ?></title>
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
    include_once 'header-comp-page.php';
    error_reporting(0); // Отключение информации об ошибках на странице
    ?>
    <main>
        <div class="discription-product-section">
            <div class="container">
                <h1 class="discription-product-section__title"><?php echo $titlePage ?></h1>
                <section class="main-section flex">
                    <div class="main-section__img-block">
                        <img class="discription-product__img" src="../img/img-product/1SFA898116R7000/1SFA898116R7000_big_1920.jpg" alt=<?php echo 'Фото товара: ' . $titlePage ?> class="main-section__img">
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
                                    <div class="characteristics-item__discr">ABB</div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Серия:</div>
                                    <div class="characteristics-item__discr">PSTX</div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Мощьность (кВт):</div>
                                    <div class="characteristics-item__discr">250</div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Напряжение, В:</div>
                                    <div class="characteristics-item__discr">380</div>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <div class="characteristics-item__title">Ток, Iном.:</div>
                                    <div class="characteristics-item__discr">470</div>
                                </li>
                            </ul>
                        </div>
                        <div class="characteristics-block__button-block flex">
                            <a href="#technical" id="button-link">
                                <button class="button-characteristics__all">Посмотреть все характеристики</button>
                            </a>
                            <a href=<?php echo $shopURL . '/Basket/?vendorCode=' . $article ?>>
                                <button class="button-characteristics__offer" id="button-buy">Купить</button>
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
                            <b>Плавный пускатель PSTX470-600-70</b> рассчитан на максимальный рабочий ток 470 А при напряжении от 208 до 600 В переменного тока. Управляющее напряжение составляет от 100 до 250
                            В переменног о тока с частотой 50/60 Гц. Устройство обеспечивает трехфазный плавный пуск и остановку двигателя посредством регулирования напряжения или крутящего момента.
                            <br><br>
                            Встроенный байпас упрощает монтаж и снижает энергопотребление. Сигналы ЗАПУСКА, TOR и события передаются через релейные выходы в нормально разомкнутом (NO) состоянии.
                            <br><br>
                            Среди функциональных возможностей устройства — ограничение тока, различные режимы пуска, аналоговый выход, контроль конца срока службы (EOL), подогрев двигателя, функция очистки насоса и другие. Для управления и настройки используется съемный полноэкранный графический дисплей с уровнем защиты IP66 и высокой степенью прочности.
                            <br><br>
                            Связь с устройством возможна четырьмя способами: через проводные сигналы Start / Stop / Reset неисправностей, а также через три программируемых цифровых входа.
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
                                    <div class="specifications-item__tech">ABB</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Серия</div>
                                    <div class="specifications-item__tech grey">PSTX</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Тип напряжения управления</div>
                                    <div class="specifications-item__tech">AC</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name  grey">Номин. напряжение питания цепи управления Us AC 50 Гц</div>
                                    <div class="specifications-item__tech  grey">100.0...250.0 В</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Номин. напряжение питания цепи управления Us постоян. тока DC</div>
                                    <div class="specifications-item__tech">24 B</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Номин. раб. напряжение Ue</div>
                                    <div class="specifications-item__tech grey">208.0...600.0 В</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Комплексная защита двигателя от перегрузки</div>
                                    <div class="specifications-item__tech">Да</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Способ задания параметров</div>
                                    <div class="specifications-item__tech grey">ручной</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Наличие интерфейса связи</div>
                                    <div class="specifications-item__tech">MODBUS RTU</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Наличие рекуперации</div>
                                    <div class="specifications-item__tech grey">Нет</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Номинальное напряжение, В</div>
                                    <div class="specifications-item__tech">400</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Количество фаз</div>
                                    <div class="specifications-item__tech grey">3</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Номинальная мощность электродвигателя, КВт</div>
                                    <div class="specifications-item__tech">250</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Степень защиты</div>
                                    <div class="specifications-item__tech grey">IP20</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Вес нетто, кг</div>
                                    <div class="specifications-item__tech">25</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Ширина, мм</div>
                                    <div class="specifications-item__tech grey">480</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name">Высота, мм</div>
                                    <div class="specifications-item__tech">650</div>
                                </div>
                                <div class="technical-specifications-list__item">
                                    <div class="specifications-item__name grey">Глубина, мм</div>
                                    <div class="specifications-item__tech grey">380</div>
                                </div>
                            </ul>
                        </div>
                    </div>
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
                            <ul class="technical-specifications-list">
                                <li class="technical-specifications-list__item">
                                    <div class="equipment-section-item">
                                        <div class="discription-section-right-block__download-file flex">
                                            <div class="download-file__list-icon"></div>
                                            <a href="../files/1SFA898116R7000/1SFA898116R7000-pstx470-600-70.pdf" class="download-file__list-link">Технические данные (PDF, 253КБ)</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
    </main>
    <?php include_once 'footer-comp-page.php' ?>
</body>

</html>