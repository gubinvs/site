<?php
include "../php/class/api_Connector.php";

$article = "PUGVNG-115RC-200";
$titlePage = "PUGVNG-115RC-200, Провод силовой ПуГВнг(А)-LS 1х1,5 Красный в коробке по 200 метров";
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
    <meta name="description" content="<?php echo 'Купить ' . $titlePage . ' по выгодной цене. Производитель: ' . $manufacturer . '. Доступно на складе: ' . $quantity . ' шт.'; ?>">
    <meta name="keywords" content="провод, ПуГВнг(А)-LS, <?php echo $article ?>, <?php echo $manufacturer ?>, купить провод, электротехнический кабель">

    <title><?php echo $titlePage ?></title>

    <!-- Open Graph для соцсетей -->
    <meta property="og:title" content="<?php echo $titlePage ?>">
    <meta property="og:description" content="<?php echo 'Купить ' . $titlePage . ' по выгодной цене. Производитель: ' . $manufacturer; ?>">
    <meta property="og:image" content="https://encomponent.ru/img/img-product/PUGVNG-115RC-200/PUGVNG-115RC-200_img_page.jpg">
    <meta property="og:type" content="product">
</head>

<body>
    <?php include_once '../php/modules/header.php';
    error_reporting(0); ?>
    <main>
        <div class="discription-product-section">
            <div class="container">
                <h1 class="discription-product-section__title NKUPages_h1"><?php echo $titlePage ?></h1>

                <section class="main-section flex">
                    <!-- Изображение продукта с SEO alt -->
                    <div class="main-section__img-block">
                        <img class="discription-product__img" src="../img/img-product/PUGVNG-115RC-200/PUGVNG-115RC-200_img_page.jpg"
                            alt="Фото провода <?php echo $titlePage ?>" loading="lazy">
                    </div>

                    <div class="main-section__discription">
                        <div class="article-block flex">
                            <div class="article-title">Артикул:</div>
                            <div class="article-name"><?php echo $article ?></div>
                        </div>
                        <hr class="hr">

                        <!-- Цена и наличие -->
                        <div class="main-section-price-block">
                            <div class="main-section-price__price"><?php echo number_format($price, 0, ',', ' '); ?> ₽</div>
                        </div>
                        <div class="<?php echo $quantity > 0 ? 'warehouse-item-quantity' : 'warehouse-item-quantity warehouse-item-quantity__null' ?>">
                            <div class="warehouse-item-quantity__name">В наличии:</div>
                            <div class="warehouse-item-quantity__quantity"><?php echo $quantity ?></div>
                            <div class="warehouse-item-quantity__discr">шт.</div>
                        </div>

                        <!-- Характеристики продукта с семантическим списком -->
                        <div class="characteristics-block">
                            <div class="characteristics-block__title">Основные характеристики:</div>
                            <ul class="characteristics-block__list">
                                <li class="characteristics-block__item flex">
                                    <strong>Производитель:</strong> <?php echo $manufacturer ?>
                                </li>
                                <li class="characteristics-block__item flex">
                                    <strong>Тип провода:</strong> ПуГВнг(А)-LS
                                </li>
                                <li class="characteristics-block__item flex">
                                    <strong>Сечение провода, мм²:</strong> 1х1,5
                                </li>
                                <li class="characteristics-block__item flex">
                                    <strong>Цвет провода:</strong> Красный
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Документы -->
                <section class="documents-section" id="documents">
                    <div class="container">
                        <div class="technical-specifications-section__table mb-40">
                            <ul class="technical-specifications-list">
                                <li class="technical-specifications-list__item">
                                    <a href="../files/PUGVNG-115RC-200/Zvetlit_2022.pdf" class="download-file__list-link" download>Каталог (PDF, 2,6 МБ)</a>
                                </li>
                                <li class="technical-specifications-list__item">
                                    <a href="../files/PUGVNG-115RC-200/pugv-ls-031.pdf" class="download-file__list-link" download>Сертификат EAЭС (PDF, 817 КБ)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <?php include "../php/modules/footer.php" ?>
</body>

</html>