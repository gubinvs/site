<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel='stylesheet' href='https://encomponent.ru/css/hover.css' media="all">
    <link rel="stylesheet" href="../css/project-style.css" media="all">
    <meta name="description" content="Данный блок не является самостоятельным устройством и не может быть использован с автоматическими выключателями других серий.">
    <title>A9D56616, Дифавтомат Schneider Electric Acti9 2P 16А (B) 6кА 30мА (AC)</title>
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
                <h1 class="discription-product-section__title">A9D56616, Дифавтомат Schneider Electric Acti9 2P 16А (B) 6кА 30мА (AC)</h1>
                <div class="discription-product-section__discription-product  ">
                    <div class="discription-product-block">

                        <img class="discription-product__img" src="https://encomponent.ru/img/img-product/A9D56616/A9D56616_big_1920.jpg" alt="Дифференциальный блок Schneider Electric Acti9 4P 63А 30мА (AC)">
                        <div class="discription-product__characteristic">
                            <h3 class="characteristic__title">Характеристики:</h3>
                            <ul class="characteristic-type-list">

                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Тип</div>
                                    <div class="characteristic-type__siscr">Автоматический выключатель дифференциального тока</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Номинальный ток</div>
                                    <div class="characteristic-type__siscr">16 А</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Номинальное напряжение</div>
                                    <div class="characteristic-type__siscr">220 (230) В</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Тип утечки</div>
                                    <div class="characteristic-type__siscr">А</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Степень защиты</div>
                                    <div class="characteristic-type__siscr">IP20</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Ток утечки</div>
                                    <div class="characteristic-type__siscr">30 мА</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Количество полюсов</div>
                                    <div class="characteristic-type__siscr">2</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Масса нетто</div>
                                    <div class="characteristic-type__siscr">0,2 кг.</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Упаковка (В х Ш х Д)</div>
                                    <div class="characteristic-type__siscr">40 х 80 х 100 мм</div>
                                </li>
                            </ul>
                        </div>
                        <div class="discription-product__bascket-block">
                            <img src="https://shop.encomponent.ru/img/scneider_logo.jpg" alt="Логотип Schneider Electric" class="img-brend">
                            <ul class="bascket-block-list">
                                <li class="bascket-block-item">
                                    <div class="bascket-block__name">Артикул:</div>
                                    <div class="bascket-block__siscr" id="vendorСode_0">A9D56616</div>
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
                                if ($vendorСode == "A9D56616") {
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
                    Дифференциальный автоматический выключатель iDPN Vigi обеспечивает комплексную защиту оконечных цепей от коротких замыканий, пеpегpузок и повpеждения изоляции: защиту людей от поражения электрическим током при прямом прикосновении (до 30 мА). Снабжен функциями опознавания срабатывания по утечке, по КЗ или перегрузки - Visi Trip. А также функцией индикации положения контактов - Visi Safe.
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