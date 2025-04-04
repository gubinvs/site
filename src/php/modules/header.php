<header>
    <div class="container contact-header-block">
        <div class="contact-header-block__phone">8 (812) 921-59-71</div>
        <div class="contact-header-block__adress">Санкт-Петербург</div>
        <div class="contact-header-block__email">office@encomponent.ru</div>
        <div class="header-validation-block header-validation-block__guest_mobile">
            <button class="button-verification">Вход</button>
            <button class="button-registrasion">Регистрация</button>
        </div>
    </div>

    <div class="container header__container">
        <div class="header-logo-block header-logo-block_guest">
            <a href="https://encomponent.ru">
                <img src="../img/header_logo_1920.svg" alt="Логотип компании">
            </a>
        </div>
        <div class="header-navigation-block">
            <div class="header-navigation-block__top header-navigation-block__top_guest">
                <div class="search-input-block search-input-block_guest">
                    <button class="button-catalog button-catalog_guest">Каталог</button>
                    <input class="search-input search-input_guest" placeholder="Поиск по артикулу">
                    <script>
                        //При нажатии кнопки или ввод в поле input, перенаправит на сайт магазина
                        document.addEventListener("DOMContentLoaded", function() {
                            const searchInput = document.querySelector(".search-input.search-input_guest");
                            const catalogButton = document.querySelector(".button-catalog.button-catalog_guest");

                            if (searchInput) {
                                searchInput.addEventListener("focus", function() {
                                    window.location.href = "https://shop.encomponent.ru";
                                });
                            }

                            if (catalogButton) {
                                catalogButton.addEventListener("click", function() {
                                    window.location.href = "https://shop.encomponent.ru";
                                });
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="header-navigation-block__botttom">
                <ul class="header-navigation__list">
                    <li class="header-navigation__item header-navigation__item_guest">
                        <a href="https://www.iek.ru/products/catalog/tipovye_resheniya_nku">Типовые решения</a>
                    </li>
                    <li class="header-navigation__item header-navigation__item_guest">
                        <a href="https://encomponent.ru/production.php">Производство</a>
                    </li>
                    <li class="header-navigation__item header-navigation__item_guest">
                        <a href="https://shop.encomponent.ru">Интернет-магазин</a>
                    </li>
                    <li class="header-navigation__item header-navigation__item_guest">
                        <a href="https://encomponent.ru/about.php">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-navigation-block__top">
            <div class="header-validation-block header-validation-block__guest">
                <a href="https://shop.encomponent.ru/Verification">
                    <button class="button-verification">Вход</button>
                </a>
                <a href="https://shop.encomponent.ru/Registration">
                    <button class="button-registrasion">Регистрация</button>
                </a>
            </div>
        </div>
    </div>
</header>