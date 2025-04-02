<?php
/// Страница с описанием товара : A9F74101, Выключатель автоматический однополюсный 1А С iC60N 6кА
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
    <meta name="description" content="Выключатель автоматический однополюсный 1А С iC60N 6кА, производитель: Schneider Electric, артикул товара производителя: A9F74101">
    <title>A9F74101, Выключатель автоматический однополюсный 1А С iC60N 6кА</title>
    <?php include_once  'yandex_metrika_counter.php' ?>
</head>

<body>
    <?php
    include_once 'header-page-component.php';
    include '../php/modules/section/line_section.php';
    error_reporting(0); // Отключение информации об ошибках на странице
    ?>
    <main>
        <section class="discription-product-section">
            <div class="container">
                <h1 class="discription-product-section__title">A9F74101, Выключатель автоматический однополюсный 1А С iC60N 6кА</h1>
                <div class="discription-product-section__discription-product  ">
                    <div class="discription-product-block">

                        <img class="discription-product__img" src="https://shop.encomponent.ru/img/img-product/A9F74101/A9F74101_big_1920.jpg" alt="Выключатель автоматический однополюсный 1А С iC60N 6кА">
                        <div class="discription-product__characteristic">
                            <h3 class="characteristic__title">Характеристики:</h3>
                            <ul class="characteristic-type-list">

                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Тип</div>
                                    <div class="characteristic-type__siscr">Выключатель автоматический однополюсный</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Номинальный ток</div>
                                    <div class="characteristic-type__siscr">1 А</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Номинальное напряжение</div>
                                    <div class="characteristic-type__siscr">220 (230) В</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Отключающая способность</div>
                                    <div class="characteristic-type__siscr">6 кА</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Тип расцепления</div>
                                    <div class="characteristic-type__siscr">С</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Степень защиты</div>
                                    <div class="characteristic-type__siscr">IP20</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Количество полюсов</div>
                                    <div class="characteristic-type__siscr">1</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Масса нетто</div>
                                    <div class="characteristic-type__siscr">0.12 кг.</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Упаковка (В х Ш х Д)</div>
                                    <div class="characteristic-type__siscr">70 х 20 х 95 мм</div>
                                </li>
                            </ul>
                        </div>
                        <div class="discription-product__bascket-block">
                            <img src="https://shop.encomponent.ru/img/scneider_logo.jpg" alt="Логотип Schneider Electric" class="img-brend">
                            <ul class="bascket-block-list">
                                <li class="bascket-block-item">
                                    <div class="bascket-block__name">Артикул:</div>
                                    <div class="bascket-block__siscr" id="vendorСode_0">A9F74101</div>
                                </li>
                                <li class="bascket-block-item">
                                    <div class="bascket-block__name">Серия:</div>
                                    <div class="bascket-block__siscr"> Acti 9</div>
                                </li>
                            </ul>
                            <?php
                            // Подключение к базе данных
                            $connectorMSQL = new mysqli("gubinv.beget.tech", "gubinv_component", "2MC&bZgO", "gubinv_component");

                            // Создание запроса на чтение из базы данных параметров для компонента который совпадет с vendorCode
                            $request = "SELECT `vendorСode`, `nameComponent`, `quantity`, `deliveryТime`, `price`, `bestseller`, `linkPage`, `imgLinkIconCard` FROM `goods_table` WHERE 1";
                            $result = $connectorMSQL->query($request);
                            // Количество записей в базе данных соответствует запросу
                            $rowsa = $result->num_rows;
                            echo '<input type="hidden" id="countItem" value="' . $rowsa . '">';

                            foreach ($result as $row) {
                                $vendorСode = $row["vendorСode"];
                                if ($vendorСode == "A9F74101") {
                                    $imgLink = $row["imgLinkIconCard"];
                                    $nameComponent = $row["nameComponent"];
                                    $quantity = $row["quantity"];
                                    $deliveryТime = $row["deliveryТime"];
                                    $price = $row["price"];
                                    $bestseller = $row["bestseller"];
                                    $linkPage = $row["linkPage"];
                                    break;
                                }
                            };

                            echo '<div class="card-product__discr">';
                            echo   ' <div class="card-product__discr_availability">';
                            echo   '     <div class="availability__number">' . $quantity . 'шт.</div>';
                            echo   '     <div class="availability__time">' . $deliveryТime . '  дней</div>';
                            echo   ' </div>';
                            echo   ' <div class="card-product__discr_price">';
                            echo   '     <div class="price">' . $price . '</div>';
                            echo '       <img class="ruble_sign_icon" src="https://shop.encomponent.ru/img/ruble_sign_icon.svg" alt="Обозначение валюты рубль">';
                            echo   ' </div>';
                            ?>
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
                    Серия профессионального электрооборудования (Schneider Acti 9) — для любого потребительского сектора, но в первую очередь на использование
                    в промышленности там, где к электроустановке предъявляются повышенные требования.
                    Автомат Acti 9 с ариткулом A9F74101 в однополюсном исполнении. Оснащен механизмом быстрого включения, индикацией аварийного срабатывания,
                    адаптировен к самым сложным электросетям и тяжелым условиям окружающей среды, отличаются повышенной безопасностью и бесперебойностью работы,
                    классом электробезопасности 2.
                </div>
            </div>
        </section>
    </main>
    <?php include_once '../php/modules/footer.php' ?>
</body>

</html>
<script src="../js/app.js" type="module"></script>
<!--// Скрипт для увеличения счетчика заказываемого количества товара и отправки данных в корзину при нажатии на кнопку-->
<script src="../js/modules/add_item_basket.js" type="module"></script>