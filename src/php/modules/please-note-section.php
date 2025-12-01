<section class="please-note-section">
    <div class="container please-note-section__container">
        <h3 class="please-note-section__title">Пользователи выбирают:</h3>
        <div class="please-note-section__card-product">
            <?php
            // форматирование цены (intl extension required)
            function formatRub($price)
            {
                if (!class_exists('NumberFormatter'))
                {
                    return number_format((float)$price, 0, ',', ' ') . ' ₽';
                }
                $fmt = new NumberFormatter('ru_RU', NumberFormatter::CURRENCY);
                $fmt->setAttribute(NumberFormatter::MIN_FRACTION_DIGITS, 0);
                return $fmt->formatCurrency($price, 'RUB');
            }

        $noImage = '../../img/free-icon-no-photo-4054617.png';
        $count = 0;

        if (is_array($data) && count($data) > 0) {
            foreach ($data as $item) {

                if ($count == 4) { break; }

                $img = !empty($item['imgLinkIconCard']) ? $item['imgLinkIconCard'] : $noImage;
                $vendor = htmlspecialchars($item['vendorCode'] ?? '', ENT_QUOTES, 'UTF-8');
                $name = htmlspecialchars($item['nameComponent'] ?? 'Без названия', ENT_QUOTES, 'UTF-8');
                $link = htmlspecialchars($item['linkPage'] ?? '#', ENT_QUOTES, 'UTF-8');
                $quantity = isset($item['quantity']) ? (int)$item['quantity'] : 0;
                $price = isset($item['price']) ? $item['price'] : 0;

                $fmtPrice = htmlspecialchars(formatRub($price), ENT_QUOTES, 'UTF-8');

                $qtyClass = $quantity === 0
                    ? 'delivry-block__quantity delivry-block__quantity_0'
                    : 'delivry-block__quantity';

                $qtyText = $quantity === 0
                    ? 'Под заказ'
                    : 'Наличие: ' . $quantity . ' шт.';

                echo <<<HTML
                    <div class="card-component">
                        <div class="card-component__top">
                            <img src="{$img}" class="card-component__img" alt="Фото {$name}">
                            <div class="card-component__vendor">Артикул: {$vendor}</div>
                            <div class="card-component__name">
                                <a href="https://shop.encomponent.ru/SearchResults?vendorCode={$vendor}" target="_blank">{$name}</a>
                            </div>
                        </div>

                        <div class="card-component__bottom">
                            <div class="cc-basket-block__delivry-block">
                                <div class="{$qtyClass}">{$qtyText}</div>
                            </div>

                            <div class="card-component__price-block">
                                <div class="card-component__price">{$fmtPrice}</div>
                                <div class="card-component__price-nalog">в т.ч. НДС</div>
                            </div>
                        </div>
                    </div>
                HTML;

                $count++;
            }
        } else {
            echo '<p>Пока нет рекомендаций.</p>';
        }
        ?>
    </div>
</section>