<?php
include "php/class/api_Connector.php";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $apiServer . '/api/PriceNku/NKU10-VRUS-12110000-01');
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
    <meta name="description" content="Панель вводно-распределительная ВРУ1-21-10 УХЛ4 рубильник 1х250А выключатели автоматические 1Р 2х6А плавкие вставки 6х63А 9х100А 3х250А и учет IEK">
    <title>NKU10-VRUS-12110000-01, Панель вводно-распределительная ВРУ1-21-10</title>
</head>

<body>
    <!--Подключение header-->
    <?php include "php/modules/header-nku-page.php"; ?>
    <!--Основная секция страницы-->
    <main>
        <div class="container">
            <h1>
                <p id="vendor-code">NKU10-VRUS-12110000-01</p>, Панель вводно-распределительная ВРУ1-21-10 УХЛ4 рубильник 1х250А выключатели автоматические 1Р 2х6А плавкие вставки 6х63А 9х100А 3х250А и учет IEK
            </h1>
            <section class="main-section flex">
                <h2 class="h1-min">NKU10-VRUS-12110000-01, Панель вводно-распределительная ВРУ1-21-10 УХЛ4 рубильник 1х250А</h2>
                <div class="main-section__img-block">
                    <img src="img/NKU10-VRUS-12110000-01/NKU10-VRUS-12110000-01.avif" alt="Панель вводно-распределительная ВРУ1-21-10 УХЛ4 рубильник 1х250А" class="main-section__img">
                </div>
                <div class="main-section__discription">
                    <div class="article-block flex">
                        <div class="article-title">Артикул:</div>
                        <div class="article-name">NKU10-VRUS-12110000-01</div>
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
                                <div class="characteristics-item__discr">Напольный</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Номин ток вводного - главного выключателя, А</div>
                                <div class="characteristics-item__discr">250</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Количество отводящих групп</div>
                                <div class="characteristics-item__discr">5</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Номин отключ способность вводного авт выкл, кА</div>
                                <div class="characteristics-item__discr">50.0</div>
                            </li>
                            <li class="characteristics-block__item flex">
                                <div class="characteristics-item__title">Номин ток щитка, А</div>
                                <div class="characteristics-item__discr">250</div>
                            </li>
                        </ul>
                    </div>
                    <div class="characteristics-block__button-block flex">
                        <div class="button-characteristics__all"><a href="#technical" id="button-link">Посмотреть все характеристики</a></div>
                        <a href=<?php echo $shopURL . '/Basket/?vendorCode=NKU10-VRUS-12110000-01' ?>>
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
                        Данная вводно-распределительная панель ВРУ1-21-10, артикул NKU10-VRUS-12110000-01 — это схемное решение IEK GROUP,
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
                <h2 class="h1-min">Описание вводно-распределительного шкафа </h2>
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
                        Вводно-распределительные панели ВРУ предназначены для приема, распределения и учета электроэнергии напряжением 380/220 В трехфазного переменного тока
                        частотой 50 Гц в сетях с глухозаземленной нейтралью, а также для защиты линий при перегрузках и коротких замыканиях. Вводно-распределительные панели серии
                        ВРУ1 комплектуются аппаратами учета электроэнергии.
                    </div>
                </div>
                <div class="discription-section__right-block">
                    <div class="discription-section-right-block__title">Основные документы</div>
                    <div class="discription-section-right-block__download-file flex">
                        <a href="https://encomponent.ru/files/NKU10-VRUS-12110000-01/4139d3d7ed68a09058c7f990f2d2a51bcf72c94f7fcebf76194feab36943f450.zip">
                            <p class="download-file__download-icon"></p>
                        </a>
                        <div class="download-file__list-icon"></div>
                        <a href="https://encomponent.ru/files/NKU10-VRUS-12110000-01/4139d3d7ed68a09058c7f990f2d2a51bcf72c94f7fcebf76194feab36943f450.png" class="download-file__list-link">Смотреть Подключения (PNG, 23,57КБ)</a>
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
                <img style="width: 240px; height: 500px;" class="advantages-section__img" src="img/NKU10-VRUS-12110000-01/NKU10-VRUS-12110000-01.avif" alt="изображение Вводно-распределительной панели ВРУ">
            </div>
        </section>
        <div class="container advantages-section__container">
            <ul class="advantages-section__list">
                <li class="advantages-section__item">Высококачественное наружное покрытие</li>
                <li class="advantages-section__item">Удобная фурнитура</li>
                <li class="advantages-section__item">Наличие аккредитованных сборщиков в крупнейших регионах РФ</li>
                <li class="advantages-section__item">Возможность внесения изменений в любое решение силами технических специалистов ГК IEK</li>
                <li class="advantages-section__item">Решения обеспечиваются наличием широкой складской и партнерской сети</li>
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
                            <div class="specifications-item__tech grey">Напольный</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Номин ток вводного - главного выключателя, А</div>
                            <div class="specifications-item__tech">250</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Количество отводящих групп</div>
                            <div class="specifications-item__tech grey">5</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Номин отключ способность вводного авт выкл, кА</div>
                            <div class="specifications-item__tech">50.0</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Номин ток щитка, А</div>
                            <div class="specifications-item__tech grey">250</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Номин напряжение изоляции Ui, В</div>
                            <div class="specifications-item__tech">660</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Ширина, мм</div>
                            <div class="specifications-item__tech grey">800</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Номин частота, Гц</div>
                            <div class="specifications-item__tech">50</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Высота, мм</div>
                            <div class="specifications-item__tech grey">2000</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Степень защиты - IP</div>
                            <div class="specifications-item__tech">IP31</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Вид системы заземления</div>
                            <div class="specifications-item__tech grey">TN-C, TN-S</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Номер цвета RAL</div>
                            <div class="specifications-item__tech">7035</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Номин ток аппаратов групповых цепей, А</div>
                            <div class="specifications-item__tech grey">63; 100</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Количество фаз</div>
                            <div class="specifications-item__tech">3</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Защита</div>
                            <div class="specifications-item__tech grey">Предохранитель Diazed</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Материал корпуса</div>
                            <div class="specifications-item__tech">Сталь</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Климатическое исполнение</div>
                            <div class="specifications-item__tech grey">УХЛ4</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name">Номин раб напряжение, В</div>
                            <div class="specifications-item__tech">380/220</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="specifications-item__name grey">Глубина, мм</div>
                            <div class="specifications-item__tech grey">450</div>
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
                            <div class="equipment-section-item__article">DPP30-250</div>
                            <div class="equipment-section-item__name">Плавкая вставка предохранителя ППНИ-35, габарит 1, 250А IEK</div>
                            <div class="equipment-section-item__quantity">3</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">ITT10-2-05-0250</div>
                            <div class="equipment-section-item__name grey">Трансформатор тока ТТИ-А 250/5А 5ВА 0,5 IEK</div>
                            <div class="equipment-section-item__quantity grey">3</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">YKV10-PM-500-730</div>
                            <div class="equipment-section-item__name">TITAN Панель монтажная 500х730мм (2шт/компл) IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">DPP20-100</div>
                            <div class="equipment-section-item__name grey">Плавкая вставка предохранителя ППНИ-33, габарит 0, 100А IEK</div>
                            <div class="equipment-section-item__quantity grey">9</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">DPP20-063</div>
                            <div class="equipment-section-item__name">Плавкая вставка предохранителя ППНИ-33, габарит 0, 63А IEK</div>
                            <div class="equipment-section-item__quantity">6</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">MVA20-1-006-C</div>
                            <div class="equipment-section-item__name grey">KARAT Автоматический выключатель ВА47-29 1P C 6А 4,5кА IEK</div>
                            <div class="equipment-section-item__quantity grey">2</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">DPP20D-DP-160</div>
                            <div class="equipment-section-item__name">Держатель предохранителя ДП-33, габарит 0, 160А IEK</div>
                            <div class="equipment-section-item__quantity">15</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">YKM40-PN-730</div>
                            <div class="equipment-section-item__name grey">TITAN Панель ПН-730мм (3шт/компл) IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">SRK21-211-250</div>
                            <div class="equipment-section-item__name">Выключатель-разъединитель ВР32И-35В71250 250А IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">YKV10-UV-1750</div>
                            <div class="equipment-section-item__name grey">TITAN Уголок вертикальный 1750мм (2шт/компл) IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">DPP00D-RS1</div>
                            <div class="equipment-section-item__name">Рукоятка съема РС-1 IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">101004007012981</div>
                            <div class="equipment-section-item__name grey">Счетчик электроэнергии трехфазный CE307 R34.543.OAA.SYUVLFZ</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">LDBO0-3002-7-4000-K01</div>
                            <div class="equipment-section-item__name">Светильник светодиодный линейный ДБО 3002 7Вт 4000К IP20 572мм пластик IEK</div>
                            <div class="equipment-section-item__quantity">2</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">DPP30D-DP-250</div>
                            <div class="equipment-section-item__name grey">Держатель предохранителя ДП-35, габарит 1, 250А IEK</div>
                            <div class="equipment-section-item__quantity grey">3</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article">YKM1-C3-2084-31</div>
                            <div class="equipment-section-item__name">TITAN Шкаф напольный цельносварной ВРУ-1 20.80.45 IP31 IEK</div>
                            <div class="equipment-section-item__quantity">1</div>
                        </div>
                        <div class="technical-specifications-list__item">
                            <div class="equipment-section-item__article grey">YKV10-PB-2045-31</div>
                            <div class="equipment-section-item__name grey">TITAN Панель боковая для ВРУ 20.ХХ.45 IP31 (2шт/компл) IEK</div>
                            <div class="equipment-section-item__quantity grey">1</div>
                        </div>
                    </ul>
                </div>
                <a href="files/NKU10-VRUS-12110000-01/NKU10-VRUS-12110000-01.xlsx">
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
                                    <a href="https://encomponent.ru/files/NKU10-VRUS-12110000-01/4139d3d7ed68a09058c7f990f2d2a51bcf72c94f7fcebf76194feab36943f450.zip">
                                        <p class="download-file__download-icon"></p>
                                    </a>
                                    <div class="download-file__list-icon"></div>
                                    <a href="https://encomponent.ru/files/NKU10-VRUS-12110000-01/4139d3d7ed68a09058c7f990f2d2a51bcf72c94f7fcebf76194feab36943f450.png" class="download-file__list-link">Схема подключения (PNG, 23,57КБ)</a>
                                </div>
                            </div>
                            <div class="equipment-section-item">
                                <div class="discription-section-right-block__download-file flex">
                                    <a href="https://encomponent.ru/files/NKU10-VRUS-12110000-01/4139d3d7ed68a09058c7f990f2d2a51bcf72c94f7fcebf76194feab36943f450.zip">
                                        <p class="download-file__download-icon"></p>
                                    </a>
                                    <div class="download-file__list-icon"></div>
                                    <a href="https://encomponent.ru/files/NKU10-VRUS-12110000-01/4139d3d7ed68a09058c7f990f2d2a51bcf72c94f7fcebf76194feab36943f450.png" class="download-file__list-link">Смотреть Подключения (PNG, 23,57КБ)</a>
                                </div>
                            </div>
                            <div class="equipment-section-item">
                                <div class="discription-section-right-block__download-file flex">
                                    <a href="https://encomponent.ru/files/NKU10-VRUS-12110000-01/0a29f24ab85f3f48d1bba529b0032df03e0d213de47777ef01ba54a2783e6d34.dwg">
                                        <p class="download-file__download-icon"></p>
                                    </a>
                                    <div class="download-file__list-icon"></div>
                                    <a href="https://encomponent.ru/files/NKU10-VRUS-12110000-01/0a29f24ab85f3f48d1bba529b0032df03e0d213de47777ef01ba54a2783e6d34.dwg" class="download-file__list-link">AutoCad, Чертеж и спецификация (DWG, 292,32КБ)</a>
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