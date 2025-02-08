<?php
include "php/class/api_Connector.php";
?>

<header>
    <div class="container header__container">
        <a href="https://encomponent.ru/index.php">
            <div class="header-logo-block">
                <picture>
                    <source srcset="https://encomponent.ru/img/header_logo_1280.svg" media="(max-width: 1280px)">
                    <source srcset="https://encomponent.ru/img/header_logo_960.svg" media="(max-width: 960px)">
                    <img src="https://encomponent.ru/img/header_logo_1920.svg" alt="Логотип компании в желто-черных красках с изображением кнопки и названия на английском языке энерджи копмонентс">
                </picture>
            </div>
        </a>
        <div class="header-navigation-block">
            <div class="header-navigation-block__top">
                <div class="search-input-block">
                    <input class="search-input" placeholder="Поиск по артикулу">
                    <div class="search-icon" id="search-action">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="-0.5" x2="11.612" y2="-0.5" transform="matrix(0.707961 0.706251 -0.707961 0.706251 5.81306 6.29901)" stroke="#1D252C" />
                            <path d="M11.1261 6.29899C11.1261 9.2244 8.74848 11.598 5.81303 11.598C2.87758 11.598 0.5 9.2244 0.5 6.29899C0.5 3.37358 2.87758 1 5.81303 1C8.74848 1 11.1261 3.37358 11.1261 6.29899Z" fill="white" stroke="#1D252C" />
                        </svg>
                    </div>
                </div>
                <div class="header-validation-block">
                    <a href=<?php echo $shopURL . "/Autorization" ?>>
                        <div class="button-verification">Вход</div>
                    </a>
                    <a href=<?php echo $shopURL . "/Registration" ?>>
                        <div class="button-registrasion">Регистрация</div>
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