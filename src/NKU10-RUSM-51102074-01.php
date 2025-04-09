<?php
include "php/class/api_Connector.php";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $apiServer . '/api/PriceNku/NKU10-RUSM-51102074-01');
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
    <link rel="stylesheet" href="css/encomp-nku-project-style.css" media="all">
    <meta name="description" content="Щит управления РУСМ5110-2074 нереверсивный 1 фидер автоматический выключатель на каждый фидер без переключателя на автоматический режим 1А IEK">
    <title>NKU10-RUSM-51102074-01, Щит управления РУСМ5110-2074 нереверсивный 1 фидер автоматический выключатель на каждый фидер без переключателя на автоматический режим 1А IEK</title>
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
        <div><img src="https://mc.yandex.ru/watch/98501628" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter-->
</head>

<body>
    <!--Подключение header-->
    <?php include "php/modules/header-nku-page.php"; ?>
    <!--Основная секция страницы-->
    <main>
        <div class="container">
            <h1>
                <p id="vendor-code">NKU10-RUSM-51102074-01</p>, Щит управления РУСМ5110-2074 нереверсивный 1 фидер автоматический выключатель на каждый фидер без переключателя на автоматический режим 1А IEK
            </h1>
            <section class="main-section flex">
                <h2 class="h1-min">NKU10-RUSM-51102074-01, Щит управления РУСМ5110-2074</h2>
                <div class="main-section__img-block">
                    <img src="img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.avif" alt="NKU10-RUSM-51102074-01, Щит управления РУСМ5110-2074" class="main-section__img">
                </div>
                <div class="main-section__discription">
                    <div class="article-block flex">
                        <div class="article-title">Артикул:</div>
                        <div class="article-name">NKU10-RUSM-51102074-01</div>
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
                                <div class="characteristics-item__title">Материал корпуса</div>
                                <div class="characteristics-item__discr">Сталь</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Номин раб напряжение, В</div>
                                <div class="characteristics-item__discr">380/220</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Количество фаз</div>
                                <div class="characteristics-item__discr">3</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Глубина, мм</div>
                                <div class="characteristics-item__discr">220</div>
                            </li>

                        </ul>
                    </div>
                    <div class="characteristics-block__button-block flex">
                        <a href="#technical" id="button-link"><button class="button-characteristics__all">Посмотреть все характеристики</button></a>
                        <a href=<?php echo $shopURL . '/Basket/?vendorCode=NKU10-RUSM-51102074-01' ?>>
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
                        Данный щит управления РУСМ5110-2074 нереверсивный 1 фидер автоматический выключатель на каждый фидер без переключателя на автоматический режим 1А IEK, артикул NKU10-RUSM-51102074-01 — это схемное решение IEK GROUP,
                        которая собирается по чертежам и комплектности разработчика (подробная комплектация указана ниже на странице).
                        <b>Стоимость устройства</b>, отраженная на данной странице сайта, <b>является актуальной</b> на текущий момент, так как формируется автоматически
                        при загрузке страницы (путем опроса базы данных и прайс-листов IEK GROOP)

                    </div>
                </div>
            </section>
            <section class="button-section flex">
                <h2 class="h1-min">Доступна для заказа ВРУ1-21-10 </h2>
                <div class="button-section__button"><a href="#attention" id="button-link">Описание и особенности</a></div>
                <div class="button-section__button"><a href="#technical" id="button-link">Характеристики</a></div>
                <div class="button-section__button"><a href="#documents" id="button-link">Документация</a></div>
            </section>
            <section class="discription-section flex">
                <h2 class="h1-min">щит управления РУСМ5110-2074 </h2>
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
                        Щит управления типа РУСМ5000 IEK предназначены для местного, дистанционного и автоматического управления асинхронными электродвигателями
                        с короткозамкнутым ротором мощностью до 75 кВт, работающими в продолжительном, кратковременном и повторно-кратковременном режимах.
                        Щиты управления РУСМ5000 применяются в помещениях с высокой влажностью и изготавливаются со степенью защиты IP54. Щиты управления монтируются в
                        металлических шкафах с монтажной панелью. Ящики комплектуются в зависимости от обозначения и типового индекса:
                        автоматическими выключателями, контакторами, тепловыми реле, светосигнальной арматурой и аппаратурой управления (кнопки, переключатели).
                        Номинальное напряжение главной цепи – 400 В. Номинальное напряжение цепи управления – 230 В.
                    </div>
                </div>
                <div class="discription-section__right-block">
                    <div class="discription-section-right-block__title">Основные документы</div>
                    <div class="discription-section-right-block__download-file flex">
                        <a href="https://encomponent.ru/img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.zip">
                            <p class="download-file__download-icon"></p>
                        </a>
                        <div class="download-file__list-icon"></div>
                        <a href="https://encomponent.ru/img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.png" class="download-file__list-link">Смотреть Подключения (PNG, 23,57КБ)</a>
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
                <img class="advantages-section__img" style="width: 400px; height: 338px; top:170px; left:170px;" src="img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.jpg" alt="NKU10-RUSM-51101874-01, Щит управления РУСМ5110-1874">
            </div>
        </section>
        <div class="container advantages-section__container">
            <ul class="advantages-section__list">
                <li class="advantages-section__item">Высокий уровень надёжности и безопасности в эксплуатации групп асинхронных двигателей.</li>
                <li class="advantages-section__item">Широкий выбор модификаций.</li>
                <li class="advantages-section__item">Высокая технологичность и простота сборки.</li>
                <li class="advantages-section__item">Высокий уровень электробезопасности.</li>
                <li class="advantages-section__item">Сертификат соответствия.</li>
                <li class="advantages-section__item">Наличие сертифицированных сборщиков в крупнейших регионах РФ.</li>
                <li class="advantages-section__item">Возможность внесения изменений в любое решение силами технических специалистов IEK GROUP.</li>
                <li class="advantages-section__item">Короткие сроки поставки компонентов решения обеспечиваются наличием широкой складской и партнерской сети.</li>
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
                            <div class="specifications-item__name">Материал корпуса</div>
                            <div class="specifications-item__tech">Сталь</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Номин раб напряжение, В</div>
                            <div class="specifications-item__tech grey">380/220</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Количество фаз</div>
                            <div class="specifications-item__tech grey">3</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Глубина, мм</div>
                            <div class="specifications-item__tech">220</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Вид управляемого двигателя</div>
                            <div class="specifications-item__tech grey">Управление нереверсивными двигателями</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Климатическое исполнение</div>
                            <div class="specifications-item__tech">УХ3</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Защита</div>
                            <div class="specifications-item__tech grey">Модульный автомат. выключатель/УЗО</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Номин частота, Гц</div>
                            <div class="specifications-item__tech">50</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Степень защиты - IP</div>
                            <div class="specifications-item__tech grey">IP54</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Количество фидеров</div>
                            <div class="specifications-item__tech">Однофидерный, без переключателя на автоматический режим</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Конструктивные особенности</div>
                            <div class="specifications-item__tech grey">Без автоматического выключателя</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Ширина, мм</div>
                            <div class="specifications-item__tech">310</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Высота, мм</div>
                            <div class="specifications-item__tech grey">395</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">С прозрачной крышкой</div>
                            <div class="specifications-item__tech">нет</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Номин ток щитка, А</div>
                            <div class="specifications-item__tech grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Номер цвета RAL</div>
                            <div class="specifications-item__tech grey">7035</div>
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
                            <div class="equipment-section-item__article">YKM40-01-54</div>
                            <div class="equipment-section-item__name"> Корпус металлический ЩМП-1-0 (395х310х220мм) У2 IP54 IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">KKM11-009-230-10</div>
                            <div class="equipment-section-item__name grey">Контактор КМИ-10910 9А 230В/АС3 1NO IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">BBT40-SB7-K06</div>
                            <div class="equipment-section-item__name">Кнопка SВ-7 "Пуск" зеленая 1з+1р d22мм/240В IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">MVA20-3-002-D</div>
                            <div class="equipment-section-item__name grey">KARAT Автоматический выключатель ВА47-29 3P D 2А 4,5кА IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">BLS10-ADDS-230-K04</div>
                            <div class="equipment-section-item__name">Лампа AD22DS(LED)матрица d22мм красный 230В IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">YZN10-002-K03</div>
                            <div class="equipment-section-item__name grey">Зажим наборный ЗНИ-2,5мм2 (JXB24А) серый IEK</div>
                            <div class="equipment-section-item__quantity grey">13</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">MVA20-1-001-C</div>
                            <div class="equipment-section-item__name">KARAT Автоматический выключатель ВА47-29 1P C 1А 4,5кА IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">DRT10-C063-0001</div>
                            <div class="equipment-section-item__name grey">Реле РТИ-1305 электротепловое 0,63-1,0А IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">BBT40-SB7-K04</div>
                            <div class="equipment-section-item__name">Кнопка SВ-7 "Стоп" красная 1р d22мм/240В IEK</div>
                            <div class="equipment-section-item__quantity">2</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">SG-22-S</div>
                            <div class="equipment-section-item__name grey">Колпачок защитный IP67 AD22-S для утопленной кнопки IEK</div>
                            <div class="equipment-section-item__quantity grey">2</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">KPK10-20</div>
                            <div class="equipment-section-item__name">Приставка ПКИ-20 дополнительные контакты 2NO IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                    </ul>
                </div>
                <a href="img/NKU10-RUSM-51101874-01/NKU10-RUSM-51101874-01.xlsx">
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
                        <div class="technical-specifications-list__item mb-40">
                            <div class="equipment-section-item">Схемы подключения</div>
                            <div class="equipment-section-item">Дополнительные изображения</div>
                            <div class="equipment-section-item">Модели для проектировщиков</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item">
                                <div class="discription-section-right-block__download-file flex">
                                    <a href="https://encomponent.ru/img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.zip">
                                        <p class="download-file__download-icon"></p>
                                    </a>
                                    <div class="download-file__list-icon"></div>
                                    <a href="https://encomponent.ru/img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.png" class="download-file__list-link">Схема подключения (PNG, 23,57КБ)</a>
                                </div>
                            </div>
                            <div class="equipment-section-item">
                                <div class="discription-section-right-block__download-file flex">
                                    <a href="https://encomponent.ru/img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.zip">
                                        <p class="download-file__download-icon"></p>
                                    </a>
                                    <div class="download-file__list-icon"></div>
                                    <a href="https://encomponent.ru/img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.png" class="download-file__list-link">Смотреть Подключения (PNG, 23,57КБ)</a>
                                </div>
                            </div>
                            <div class="equipment-section-item">
                                <div class="discription-section-right-block__download-file flex">
                                    <a href="https://encomponent.ru/img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.dwg">
                                        <p class="download-file__download-icon"></p>
                                    </a>
                                    <div class="download-file__list-icon"></div>
                                    <a href="https://encomponent.ru/img/NKU10-RUSM-51102074-01/NKU10-RUSM-51102074-01.dwg" class="download-file__list-link">AutoCad, Чертеж и спецификация (DWG, 292,32КБ)</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php include "php/modules/footer.php" ?>
    <!--Подключение скриптов JS-->
    <script src="js/app.js" type="module"></script>
</body>

</html>