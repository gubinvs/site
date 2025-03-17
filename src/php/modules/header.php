<?php
include "php/class/api_Connector.php";
?>

<header>
    <div class="container header__container">
        <a href="https://encomponent.ru/index.php">
            <div class="header-logo-block">
                <img src="img/header_logo_1920.svg" alt="Логотип компании в желто-черных красках с изображением кнопки и названия на английском языке энерджи копмонентс">
            </div>
        </a>
        <div class="header-navigation-block">
            <div class="header-navigation-block__top">
                <div class="search-input-block">
                    <span class="search-input-block__slogan">Энергия для ваших решений</span>
                </div>
                <!-- <a href="https://www.iek.ru/upload/pictures/katalogi/ru_ru/catalog-all-latest.zip" class="download-icon">Каталог IEK</a> -->
                <div class="header-validation-block">
                    <a href=<?php echo $shopURL . "/Autorization"  ?>>
                        <div class="button-ecpro">ECPRO Вход</div>
                    </a>
                </div>
            </div>
            <div class="header-navigation-block__botttom">
                <ul class="header-navigation__list">
                    <li class="header-navigation__item"><a href="https://www.iek.ru/products/catalog/tipovye_resheniya_nku/">Типовые решения</a></li>
                    <li class="header-navigation__item"><a href="closed.php">Поставка комплектующих</a></li>
                    <li class="header-navigation__item"><a href="https://encomponent.ru/production.php">Производство НКУ</a></li>
                    <li class="header-navigation__item"><a href="https://encomponent.ru/about.php">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>