<?php
include "../php/class/api_Connector.php";

$article = "NKU10-YAUO-96023774-01"; // Замените на нужный артикул
$titlePage = "NKU10-YAUO-96023774-01, Ящик управления освещением ЯУО9602-3774 автоматические выключатели 3P 1х63А 1P 1х1А контактор 1х50А фотореле IEK";
$title = "Ящик управления освещением ЯУО9602-3774 IEK";

$url = $apiServer . "/api/SearchArticle/" . urlencode($article);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $apiServer . '/api/PriceNku/' . $article);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$out = curl_exec($curl);
curl_close($curl);
$price = $out;

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../css/encomp-nku-project-style.css" media="all">
    <meta name="description" content="<?php echo $titlePage ?>">
    <title><?php echo $titlePage ?></title>
</head>

<body>
    <!--Подключение header-->
    <?php include "../php/modules/header-nku-page.php"; ?>
    <!--Основная секция страницы-->
    <main>
        <div class="container">
            <h1><?php echo $titlePage ?></h1>
            <section class="main-section flex">
                <h2 class="h1-min"><?php echo $titlePage ?></h2>
                <div class="main-section__img-block">
                    <img src="../img/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.avif" alt="<?php echo $title ?>" class="main-section__img">
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
                        <div class="main-section-price__icon"><svg width="20" height="34" viewBox="0 0 38 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_49_84)">
                                    <path d="M23.375 31.25C31.6875 31.25 37.5 25.4436 37.5 17.0968C37.5 8.75 31.6875 3.125 23.375 3.125H7.42188C6.77471 3.125 6.25 3.64971 6.25 4.29688V24.4758H1.17188C0.524707 24.4758 0 25.0005 0 25.6477V30.0781C0 30.7253 0.524707 31.25 1.17188 31.25H6.25V34.375H1.17188C0.524707 34.375 0 34.8997 0 35.5469V39.4531C0 40.1003 0.524707 40.625 1.17188 40.625H6.25V45.7031C6.25 46.3503 6.77471 46.875 7.42188 46.875H13.1406C13.7878 46.875 14.3125 46.3503 14.3125 45.7031V40.625H30.0781C30.7253 40.625 31.25 40.1003 31.25 39.4531V35.5469C31.25 34.8997 30.7253 34.375 30.0781 34.375H14.3125V31.25H23.375ZM14.3125 9.83867H22C26.5625 9.83867 29.3125 12.6814 29.3125 17.0968C29.3125 21.5726 26.5625 24.4758 21.875 24.4758H14.3125V9.83867Z" fill="#1D252C" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_49_84">
                                        <rect width="37.5" height="50" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></div>
                    </div>
                    <div class="characteristics-block">
                        <div class="characteristics-block__title">Основные характеристики:</div>
                        <ul class="characteristics-block__list">
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Модель или исполнение</div>
                                <div class="characteristics-item__discr">Навесной</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Автоматический выключатель, А</div>
                                <div class="characteristics-item__discr">63</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Контактор, А</div>
                                <div class="characteristics-item__discr">50</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Количество полюсов</div>
                                <div class="characteristics-item__discr">3</div>
                            </li>
                        </ul>
                    </div>
                    <div class="characteristics-block__button-block flex">
                        <a href="#technical" id="button-link"><button class="button-characteristics__all">Посмотреть все характеристики</button></a>
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
                            <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <b>Фотореле</b> — это устройство, которое управляет включением или выключением освещения в зависимости от уровня естественного освещенности.
                        Оно срабатывает, когда уровень света в помещении или на улице падает ниже заданного порога, автоматически включив освещение, и наоборот, выключает
                        его при достаточном уровне освещенности.
                        <br><br>
                        Таким образом, ЯУО9602-3774 IEK представляет собой достаточно универсальное и надежное решение для управления освещением, которое сочетает в себе функции защиты,
                        автоматизации и энергосбережения.
                    </div>
                </div>
            </section>
            <section class="button-section flex">
                <h2 class="h1-min">Доступна для заказа <?php echo $title ?> </h2>
                <div class="button-section__button"><a href="#attention" id="button-link">Описание и особенности</a></div>
                <div class="button-section__button"><a href="#technical" id="button-link">Характеристики</a></div>
                <div class="button-section__button"><a href="#documents" id="button-link">Документация</a></div>
            </section>
            <section class="discription-section flex">
                <h2 class="h1-min">Описание <?php echo $titlePage ?> </h2>
                <div class="discription-section__left-block">
                    <div class="attention-section__title-block flex">
                        <div class="attention-section-title-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="31" height="31" rx="3.5" fill="#F3DE09" stroke="#1D252C" />
                                <line x1="9" y1="12" x2="23" y2="12" stroke="black" stroke-width="2" />
                                <line x1="11" y1="18" x2="21" y2="18" stroke="black" stroke-width="2" />
                            </svg>
                        </div>
                        <div class="attention-section-title__title" id="attention">Описание</div>
                    </div>
                    <hr class="hr">
                    <div class="discription-section__discr">
                        <b>Ящик управления освещением ЯУО9602-3774 IEK </b> представляет собой электрическое оборудование, предназначенное для автоматического управления освещением
                        в различных объектах, таких как административные здания, производственные помещения, торговые центры и т. д.
                        Он может использоваться для контроля и защиты освещающих систем, а также для их автоматической активации в зависимости от внешних условий
                        (например, освещенности).
                        <br><br>
                    </div>
                </div>
                <div class="discription-section__right-block">
                    <div class="discription-section-right-block__title">Основные документы</div>
                    <div class="discription-section-right-block__download-file flex">
                        <a href="../files/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.zip">
                            <p class="download-file__download-icon"></p>
                        </a>
                        <div class="download-file__list-icon"></div>
                        <a href="../img/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.png" class="download-file__list-link">Смотреть Подключения (PNG, 23,57КБ)</a>
                    </div>
                    <div class="discription-section-right-block__button"><a href="#documents">Посмотреть все документы</a></div>
                </div>
            </section>
        </div>
        <section class="advantages-section flex">
            <div class="advantages-section__left-block">
                <div class="advantages-section__left-block_triangle">
                    <svg width="200" height="180" viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 181H1V1H198L25 181Z" fill="#F3DE09" stroke="#F3DE09" />
                    </svg>
                </div>
                <h2 class="advantages-section__title">Преимущества</h2>
            </div>
            <div class="advantages-section__right-block">
                <img class="advantages-section__img" src="../img/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.avif" alt="изображение изделия по артикулу <?php echo $article ?>">
            </div>
        </section>
        <div class="container advantages-section__container">
            <ul class="advantages-section__list">

                <li class="advantages-section__item">Включение и отключение осветительной установки от сигнала фотодатчика;</li>
                <li class="advantages-section__item">Отключение и включение осветительной установки в заданные периоды времени по задаваемым программатором режимам;</li>
                <li class="advantages-section__item">Возможность внесения изменений в любое решение силами технических специалистов ГК IEK</li>
                <li class="advantages-section__item">Ручное включение и отключение осветительной установки кнопками, установленными на дверях ящика;</li>
            </ul>
        </div>
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
                            <div class="specifications-item__name grey">Модель или исполнение</div>
                            <div class="specifications-item__tech grey">Навесной</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Номин ток вводного - главного выключателя, А</div>
                            <div class="specifications-item__tech">160</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Корпус ящика</div>
                            <div class="specifications-item__tech grey">Металл</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Степень защиты</div>
                            <div class="specifications-item__tech">IP54</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Номин ток, А</div>
                            <div class="specifications-item__tech grey">160</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Контактные группы</div>
                            <div class="specifications-item__tech">3 полюса</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Высота, мм</div>
                            <div class="specifications-item__tech grey">800</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Ширина, мм</div>
                            <div class="specifications-item__tech">650</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Глубина, мм</div>
                            <div class="specifications-item__tech grey">250</div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
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
                            <div class="equipment-section-item__article">MVA40-3-063-C</div>
                            <div class="equipment-section-item__name">KARAT Авт. выкл. ВА47-100 3P C 63А 10кА IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">MVA20-1-001-C</div>
                            <div class="equipment-section-item__name grey">MVA20-1-001-C, KARAT Авт. выкл. ВА47-29 1P C 1А 4,5кА IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">YZN10-002-K03</div>
                            <div class="equipment-section-item__name">Зажим наборный ЗНИ-2,5мм2 (JXB24А) серый IEK</div>
                            <div class="equipment-section-item__quantity">12</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">BBT40-SB7-K06</div>
                            <div class="equipment-section-item__name grey">Кнопка SВ-7 "Пуск" зеленая 1з+1р d22мм/240В IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">BBT40-SB7-K04</div>
                            <div class="equipment-section-item__name">Кнопка SВ-7 "Стоп" красная 1з+1р d22мм/240В IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">KKM31-050-230-11</div>
                            <div class="equipment-section-item__name grey">Контактор КМИ-35012 50А 230В/АС3 1NO;1NC IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">YKM40-03-54</div>
                            <div class="equipment-section-item__name">Корпус метал. ЩМП-3-0 (650х500х220) У2 IP54 IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">BLS10-ADDS-230-K04</div>
                            <div class="equipment-section-item__name grey">Лампа AD22DS(LED)матрица d22мм красный 230В IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">BSW70-BJ-3-K02</div>
                            <div class="equipment-section-item__name">Переключатель LAY5-BJ33 3 полож. "I-0-II" длин. ручка IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">DRT30-0037-0050</div>
                            <div class="equipment-section-item__name grey">Реле РТИ-3357 электротепловое 37-50А IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                    </ul>
                </div>
                <a href="../files/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.xlsx">
                    <div class="button-equipment">Скачать</div>
                </a>
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
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item">
                                <div class="discription-section-right-block__download-file flex">
                                    <a href="../img/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.zip">
                                        <p class="download-file__download-icon"></p>
                                    </a>
                                    <div class="download-file__list-icon"></div>
                                    <a href="../img/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.png" class="download-file__list-link">Схема подключения (PNG, 18,4КБ)</a>
                                </div>
                            </div>
                            <div class="equipment-section-item">
                                <div class="discription-section-right-block__download-file flex">
                                    <a href="../files/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.xlsx">
                                        <p class="download-file__download-icon"></p>
                                    </a>
                                    <div class="download-file__list-icon"></div>
                                    <a href="../files/NKU10-YAUO-96023774-01/NKU10-YAUO-96023774-01.xlsx" class="download-file__list-link">Спецификация (xlsx, 10КБ)</a>
                                </div>
                            </div>
                            <div class="equipment-section-item">
                                <div class="discription-section-right-block__download-file flex">
                                    <a href="../files/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.dwg">
                                        <p class="download-file__download-icon"></p>
                                    </a>
                                    <div class="download-file__list-icon"></div>
                                    <a href="../files/NKU10-YAUO-96024174-01/NKU10-YAUO-96024174-01.dwg" class="download-file__list-link">AutoCad, Чертеж и спецификация (DWG, 452КБ)</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php include "../php/modules/footer.php" ?>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>

</html>