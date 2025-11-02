<?php
include "../php/class/api_Connector.php";

$article = "PUGVNG-115BLUEC-200";
$titlePage = "PUGVNG-115BLUEC-200, Провод силовой ПуГВнг(А)-LS 1х1,5 Синий в коробке по 200 метров";
$manufacturer = "Цветлит";
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

// Инициализация значений по умолчанию
$price = 0;
$quantity = 0;

if (!empty($data)) {
    $item = $data[0];
    $price = $item["price"];
    $quantity = $item["quantity"];
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

    <!-- SEO: описание и ключевые слова -->
    <meta name="description" content="<?php echo 'Купить ' . $titlePage . '. Производитель: ' . $manufacturer . '. В наличии: ' . $quantity . ' шт.'; ?>">
    <meta name="keywords" content="провод, ПуГВнг(А)-LS, <?php echo $article ?>, <?php echo $manufacturer ?>, купить провод, электротехнический кабель">

    <title><?php echo $titlePage ?></title>

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $titlePage ?>">
    <meta property="og:description" content="<?php echo 'Купить ' . $titlePage . ' по выгодной цене. Производитель: ' . $manufacturer; ?>">
    <meta property="og:image" content="https://encomponent.ru/img/img-product/PUGVNG-115BLUEC-200/PUGVNG-115BLUEC-200_img_page.jpg">
    <meta property="og:type" content="product">
</head>

<body>
    <?php
    include_once '../php/modules/header.php';
    error_reporting(0);
    ?>
    <main>
        <div class="discription-product-section">
            <div class="container">
                <h1 class="discription-product-section__title NKUPages_h1"><?php echo $titlePage ?></h1>

                <section class="main-section flex">
                    <div class="main-section__img-block">
                        <img class="discription-product__img" src="../img/img-product/PUGVNG-115BLUEC-200/PUGVNG-115BLUEC-200_img_page.jpg"
                            alt="Фото провода <?php echo $titlePage ?>" loading="lazy">
                    </div>

                    <div class="main-section__discription">
                        <div class="article-block flex">
                            <div class="article-title">Артикул:</div>
                            <div class="article-name"><?php echo $article ?></div>
                        </div>
                        <hr class="hr">

                        <div class="main-section-price-block">
                            <div class="main-section-price__price"><?php echo number_format($price, 0, ',', ' '); ?> ₽</div>
                        </div>

                        <div class="<?php echo $quantity > 0 ? 'warehouse-item-quantity' : 'warehouse-item-quantity warehouse-item-quantity__null' ?>">
                            <div class="warehouse-item-quantity__name">В наличии:</div>
                            <div class="warehouse-item-quantity__quantity"><?php echo $quantity ?></div>
                            <div class="warehouse-item-quantity__discr">шт.</div>
                        </div>

                        <div class="characteristics-block">
                            <div class="characteristics-block__title">Основные характеристики:</div>
                            <ul class="characteristics-block__list">
                                <li><strong>Производитель:</strong> <?php echo $manufacturer ?></li>
                                <li><strong>Тип провода:</strong> ПуГВнг(А)-LS</li>
                                <li><strong>Сечение провода, мм²:</strong> 1х1,5</li>
                                <li><strong>Цвет провода:</strong> Синий</li>
                                <li><strong>Высота, мм:</strong> 60</li>
                                <li><strong>Длина, мм:</strong> 250</li>
                                <li><strong>Ширина, мм:</strong> 250</li>
                            </ul>
                        </div>

                        <div class="characteristics-block__button-block flex">
                            <a href="#technical"><button class="button-characteristics__all">Посмотреть все характеристики</button></a>
                            <a href="<?php echo $shopURL . '/Basket/?vendorCode=' . $article ?>"><button class="button-characteristics__offer">Купить</button></a>
                        </div>
                    </div>
                </section>

                <!-- Важная информация -->
                <section class="attention-section">
                    <h2 class="h1-min">Важная информация</h2>
                    <div class="container attention-container">
                        <div class="attention-section__discription">
                            <b>Кабель ПуГВнг(А)-LS</b> — монтажный провод для электроустановок: распределительные щиты, розетки, освещение. Применяется в жилых, общественных и промышленных зданиях. <br>
                            Расшифровка маркировки: <br>
                            <b>П</b> — Провод <br>
                            <b>у</b> — Установочный <br>
                            <b>Г</b> — Гибкий <br>
                            <b>В</b> — Виниловая изоляция <br>
                            <b>нг(А)</b> — Не поддерживает горение, класс А <br>
                            <b>LS</b> — Low Smoke
                        </div>
                    </div>
                </section>

                <!-- Технические характеристики -->
                <section class="technical-specifications-section" id="technical">
                    <div class="container">
                        <div class="technical-specifications-section__table">
                            <ul class="technical-specifications-list">
                                <li><strong>Артикул магазина:</strong> <?php echo $article ?></li>
                                <li><strong>Производитель:</strong> <?php echo $manufacturer ?></li>
                                <li><strong>Количество жил:</strong> 1</li>
                                <li><strong>Тип жилы:</strong> Гибкая</li>
                                <li><strong>Сечение жилы, мм²:</strong> 1,5</li>
                                <li><strong>Материал жилы:</strong> Медь</li>
                                <li><strong>Тип изоляции:</strong> ПВХ</li>
                                <li><strong>Огнестойкость:</strong> Негорючий</li>
                                <li><strong>Цвет изоляции:</strong> Синий</li>
                                <li><strong>Номинальное напряжение, В:</strong> 450/750</li>
                                <li><strong>Температурный диапазон, °C:</strong> -50…+70</li>
                                <li><strong>Тип упаковки:</strong> Коробка</li>
                                <li><strong>Длина провода, м:</strong> 200</li>
                                <li><strong>Вес, кг:</strong> 4</li>
                                <li><strong>Размеры коробки, мм (Д×Ш×В):</strong> 250×250×60</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Документация -->
                <section class="documents-section" id="documents">
                    <div class="container">
                        <ul class="technical-specifications-list">
                            <li><a href="../files/PUGVNG-115BС-200/Zvetlit_2022.pdf" class="download-file__list-link" download>Каталог (PDF, 2,6 МБ)</a></li>
                            <li><a href="../files/PUGVNG-115BС-200/pugv-ls-031.pdf" class="download-file__list-link" download>Сертификат EAЭС (PDF, 817 КБ)</a></li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php include "../php/modules/footer.php" ?>
</body>

</html>