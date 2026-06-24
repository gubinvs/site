<header>
    <div class="container header__container">
        <div class="header-logo-block">
            <a href="https://shop.encomponent.ru/">
                <img src="https://encomponent.ru/img/header_logo_1920.svg" class="header-logo-block__img" alt="Логотип компании">
            </a>
        </div>
        <div class="header-navigation-block">
            <ul class="header-navigation__list">
                <li class="header-navigation__item">
                    <a href="https://shop.encomponent.ru/CompanyDashboard">
                        <div class="header-navigation-block__button">Личный кабинет</div>
                    </a>
                </li>
            </ul>    
        </div>
    </div>
    <div class="haader__line"<?= $color_line_header ? "style='background-color: {$color_line_header} !important;'" : "" ?>></div>
    <div class="haader__square" <?= $color_line_header ? "style='background-color: {$color_line_header} !important;'" : "" ?>></div>
    <div class="mobile-header">
        <div class="mobile-container mobile-container__header-block">
            <div class="mobile-haeder-block">   
                <a href="https://shop.encomponent.ru/">
                    <img src="../../img/header_logo-wite_800.svg" class="mobile-haeder-block__img" alt="Логотип компании">
                </a>
                <div class="mobile-haeder-block__nivigaton">
                    <ul class="mhb-nivigiton__contact-list">
                        <div class="mhbn-contact-list__item phone-item">+7 (812) 921-59-71</div>
                        <div class="mhbn-contact-list__item adress-item">Санкт-Петербург</div>
                        <div class="mhbn-contact-list__item email-item">office@encomponent.ru</div>
                    </ul>
                    <div class="header-searche-block">
                        <div class="header-searche-block__button-catalog">Каталог</div>
                        <div class="header-searche-block__input-searhe"></div>
                        <div class="header-searche-block__button-room">Личный кабинет</div>
                    </div> 
                    <ul class="navigation-list">
                        <li class="navigation-list__item">Типовые решения</li>
                        <li class="navigation-list__item">Комплектующие</li>
                        <li class="navigation-list__item">Доставка и оплата</li>
                        <li class="navigation-list__item">Контакты</li>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</header>