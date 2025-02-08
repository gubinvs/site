<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://encomponent.ru/favicon.svg" type="image/svg+xml">
    <link rel='stylesheet' href='https://encomponent.ru/css/hover.css' media="all">
    <link rel="stylesheet" href="../css/project-style.css" media="all">
    <meta name="description" content="">
    <title>A9F79350, Выключатель автоматический трехполюсный 50А С iC60N 6кА</title>
    <?php include_once  'yandex_metrika_counter.php' ?>
</head>

<body>
    <?php
    include_once 'header-page-component.php';
    include '../php/modules/section/line_section.php';
    ?>
    <main>
        <section class="discription-product-section">
            <div class="container">
                <h1 class="discription-product-section__title">A9F79350, Выключатель автоматический трехполюсный 50А С iC60N 6кА</h1>
                <div class="discription-product-section__discription-product  ">
                    <div class="discription-product-block">

                        <img class="discription-product__img" src="https://shop.encomponent.ru/img/img-product/A9F79350/A9F79350_big.jpg" alt="Выключатель автоматический трехполюсный 50А С iC60N 6кА">
                        <div class="discription-product__characteristic">
                            <h3 class="characteristic__title">Характеристики:</h3>
                            <ul class="characteristic-type-list">

                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Тип</div>
                                    <div class="characteristic-type__siscr">Выключатель автоматический</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Номинальный ток</div>
                                    <div class="characteristic-type__siscr">50 А</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Номинальное напряжение</div>
                                    <div class="characteristic-type__siscr">440V AC</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Тип расцепителя</div>
                                    <div class="characteristic-type__siscr">Кривая C</div>
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
                                    <div class="characteristic-type__siscr">3</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Масса нетто</div>
                                    <div class="characteristic-type__siscr">0,3 кг.</div>
                                </li>
                                <li class="characteristic-type-item">
                                    <div class="characteristic-type__name">Упаковка (В х Ш х Д)</div>
                                    <div class="characteristic-type__siscr">90 х 60 х 100 мм</div>
                                </li>
                            </ul>
                        </div>
                        <div class="discription-product__bascket-block">
                            <img src="https://shop.encomponent.ru/img/scneider_logo.jpg" alt="Логотип Schneider Electric" class="img-brend">
                            <ul class="bascket-block-list">
                                <li class="bascket-block-item">
                                    <div class="bascket-block__name">Артикул:</div>
                                    <div class="bascket-block__siscr" id="vendorСode_0">A9F79350</div>
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
                            $request = "SELECT  `vendorСode`, `nameComponent`, `quantity`, `deliveryТime`, `price`, `bestseller`, `linkPage`, `imgLinkIconCard`FROM `goods_table` WHERE 1";
                            $result = $connectorMSQL->query($request);
                            // Количество записей в базе данных соответствует запросу
                            $rowsa = $result->num_rows;
                            echo '<input type="hidden" id="countItem" value="' . $rowsa . '">';

                            foreach ($result as $row) {
                                $vendorСode = $row["vendorСode"];
                                if ($vendorСode == "A9F79350") {
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
                <div class="characteristic__discr">АВТОМАТИЧЕСКИЙ ВЫКЛЮЧАТЕЛЬ iC60N 3П 50A C. Аппараты iC60N отвечают требованиям как бытового (ГОСТ Р 50345), так и промышленного (ГОСТ 50030.2) стандартов. Сочетают в функции защиты цепей от токов короткого замыкания и перегрузки. Обеспечивают возможность секционирования в промышленных электроустановках. Сигнализируют об аварийном отключении посредством индикатора состояния - функция Visi Trip. Обеспечивают видимый разрыв, благодаря зеленой полосе над тумблером включения - функция Visi Safe.</div>
            </div>
        </section>
    </main>
    <?php include_once '../php/modules/footer.php' ?>
</body>

</html>
<script src="../js/app.js" type="module"></script>
<!--// Скрипт для увеличения счетчика заказываемого количества товара и отправки данных в корзину при нажатии на кнопку-->
<script src="../js/modules/add_item_basket.js" type="module"></script>