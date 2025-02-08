<?php

/// Размеры картинок _big_1920.jpg - h=340px; _icon-card.jpg = h=150px; _basket_icon.jpg - h = 88px;   
/// Страница с описанием товара : 2866705, Источник питания QUINT-PS/3AC/24DC/10
// Переменные для заполнения страницы данными
$vendorСode = '2866705';

// Соединение с базой данных mSQL в которой хранятся данные о товарах
$connectorMSQL = new mysqli("gubinv.beget.tech", "gubinv_component", "2MC&bZgO", "gubinv_component");

// Создание запроса на чтение из базы данных для получение данных о товаре по определенному артикулу
//$request = "SELECT `imgLink`, `vendorСode`, `nameComponent`, `quantity`, `deliveryТime`, `price`, `bestseller`, `linkPage` FROM `goods_table` WHERE 1";
//$request = "SELECT `vendorСode`, `nameComponent`, `deliveryТime`, `price` FROM `goods_table` WHERE `vendorСode` = 'A9F79125'";
$requestVendor = "SELECT * FROM `goods_table` WHERE `vendorСode` = "; // Основной запрос
// конкатенация дополнотельной информации к запросу, в частности данные о артикуле товара
$newRequestVendor = $requestVendor . "'" . $vendorСode . "'";

// Запрос к базе данных mSQL для получения дополнительных данных о товаре по его артикулу
$result = $connectorMSQL->query($newRequestVendor);

// -- завершение соединения с базой
$connectorMSQL->close();

// Количество записей в базе данных соответствует запросу
$rowsa = $result->num_rows;
echo '<input type="hidden" id="countItem" value="' . $rowsa . '">';

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel='stylesheet' href='https://encomponent.ru/css/hover.css' media="all">
    <link rel="stylesheet" href="../css/project-style.css" media="all">
    <meta name="description" content="Страница с описанием товара : 2866705, Источник питания QUINT-PS/3AC/24DC/10">
    <title>
        <?php
        foreach ($result as $row) {
            echo $vendorСode . ', ' . $row['nameComponent'];
        }
        ?>
    </title>
    <?php include_once  'yandex_metrika_counter.php' ?>
</head>

<body>
    <?php
    include_once 'header-page-component.php';
    include '../php/modules/section/line_section.php';
    //error_reporting(0); // Отключение информации об ошибках на странице
    ?>
    <main>
        <section class="discription-product-section">
            <div class="container">
                <h1 class="discription-product-section__title">
                    <?php
                    foreach ($result as $row) {
                        echo $vendorСode . ', ' . $row['nameComponent'];
                    }
                    ?>
                </h1>
                <div class="discription-product-section__discription-product">
                    <div class="discription-product-block">
                        <img class="discription-product__img" src="
                                                                    <?php
                                                                    foreach ($result as $row) {
                                                                        echo $row['imgLinkPage'];
                                                                    }
                                                                    ?>
                                                                " alt="
                                                                        <?php
                                                                        foreach ($result as $row) {
                                                                            echo $row['imgLinkPage'];
                                                                        }
                                                                        ?>
                                                                    ">
                        <div class="discription-product__characteristic">
                            <h3 class="characteristic__title">Характеристики:</h3>
                            <ul class="characteristic-type-list">
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Тип</div>
                                    <div class="characteristic-type__siscr">Источник питания</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Номинальный выходной ток</div>
                                    <div class="characteristic-type__siscr">10 А</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Номинальное выходное напряжение</div>
                                    <div class="characteristic-type__siscr">24 В</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Номинальная выходная мощность</div>
                                    <div class="characteristic-type__siscr">240 Вт</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Степень защиты</div>
                                    <div class="characteristic-type__siscr">IP20</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Масса нетто</div>
                                    <div class="characteristic-type__siscr">1.1 кг.</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Упаковка (В х Ш х Д)</div>
                                    <div class="characteristic-type__siscr">130 х 60 х 125 мм</div>
                                </li>
                            </ul>
                        </div>
                        <div class="discription-product__bascket-block">
                            <img src="https://shop.encomponent.ru/img/phenix_contact_logo.svg" alt="Логотип Феникс контакт" class="img-brend">
                            <ul class="bascket-block-list">
                                <li class="bascket-block-item">
                                    <div class="bascket-block__name">Артикул:</div>
                                    <div class="bascket-block__siscr" id="vendorСode_0"><?php echo $vendorСode ?></div>
                                </li>
                            </ul>
                            <div class="card-product__discr">
                                <div class="card-product__discr_availability">
                                    <div class="availability__number"><?php foreach ($result as $row) {
                                                                            echo $row['quantity'];
                                                                        } ?> шт.</div>
                                    <div class="availability__time"><?php foreach ($result as $row) {
                                                                        echo $row['deliveryТime'];
                                                                    } ?> дней</div>
                                </div>
                                <div class="card-product__discr_price">
                                    <div class="price"><?php foreach ($result as $row) {
                                                            echo $row['price'];
                                                        } ?></div>
                                    <img class="ruble_sign_icon" src="https://shop.encomponent.ru/img/ruble_sign_icon.svg" alt="Обозначение валюты рубль">
                                </div>
                                <form class="card-product__discr_basket">
                                    <div class="basket__decrement" id="basket__decrement_0">-</div>
                                    <div class="basket__position" id="basket__position_0"></div>
                                    <div class="basket__increment" id="basket__increment_0">+</div>
                                    <div class="basket__button" id="addBascketItem_0">В корзину</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <h3 class=" characteristic__title">Описание:</h3>
                    <div class="characteristic__discr">
                        <?php foreach ($result as $row) {
                            echo $row['productDescription'];
                        } ?>
                    </div>
                </div>
        </section>
    </main>
    <?php include_once '../php/modules/footer.php'
    ?>
</body>

</html>
<script src="../js/app.js" type="module"></script>
<!--// Скрипт для увеличения счетчика заказываемого количества товара и отправки данных в корзину при нажатии на кнопку-->
<script src="../js/modules/add_item_basket.js" type="module"></script>