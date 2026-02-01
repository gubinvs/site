<?php

        // Вставьте сюда ваш токен от @botFather
        $token = "1670273806:AAED917Gd7nWkgDDq_TKv2GRZFe9ens1W8w";

        // Вставьте сюда chat_id
        $chat_id = "538615330";

        // Если скрытое поле 'robot_field' не пустое, это значит, что форму отправил бот.
        if ($_POST['robot'] != '') {
            echo "Ошибка: форма отправлена ботом.";
            exit; // Останавливаем выполнение скрипта, если это бот
        }

// Если поле формы "robot" не заполнено, продолжаем выполнение
if ($_POST['robot'] == null) {

    // Приняли данные из формы и присвоили значения переменным
    if ($_POST['active-form'] == 'massage') {
        $site = ($_POST['site'] != null ? $_POST['site'] : 'Страница контакты');
        $vendorCode = ($_POST['vendorCode']);          // Артикул товара
        $name = ($_POST['name']);               // Имя пользователя
        $phone = ($_POST['phone']);             // Телефон
        $email = ($_POST['email']);             // Email
        $inn = ($_POST['inn']);                 // ИНН
        $text = ($_POST['text']);               // Текст сообщения
    }

    // Проверка номера телефона
    $cleanPhone = preg_replace('/\D+/', '', $phone); // удалим все, кроме цифр

    if (preg_match('/^(7|8)(9\d{9})$/', $cleanPhone)) {
        // Телефон корректен: начинается с 7 или 8, далее 9 и еще 9 цифр (всего 11 цифр)
        // Дополнительно можно нормализовать: привести к +7
        if (substr($cleanPhone, 0, 1) === '8') {
            $cleanPhone = '7' . substr($cleanPhone, 1);
        }
        $normalizedPhone = '+' . $cleanPhone;

        // Теперь можно использовать $normalizedPhone как проверенный российский номер
    } else {
        // Неверный номер телефона — не российский или формат не совпадает
        exit('Ошибка: введите корректный номер телефона РФ.');
    }

    // Собираем данные в массив
    $arr = array(
        'Артикул:' => $vendorCode,
        'Имя: ' => $name,
        'Телефон: ' => $phone,
        'E-mail: ' => $email,
        'ИНН: ' => $inn,
        'Сообщение: ' => $text
    );

    // Настроим внешний вид сообщения для Telegram
    $txt = '';
    foreach ($arr as $key => $value) {
        $txt .= "<b>{$key}</b> {$value}\n";
    }

    $txt = urlencode($txt);

    $url = "https://api.telegram.org/bot{$token}/sendMessage"
        . "?chat_id={$chat_id}"
        . "&parse_mode=html"
        . "&text={$txt}";

    $sendToTelegram = fopen($url, "r");

    // Проверка на успешную отправку
    if ($sendToTelegram) {
        echo '<div class="container feedback__container">';
        echo "<h2>Спасибо! Ваше сообщение принято.<br> Мы свяжемся с Вами в ближайшее время.</h2>";
        echo '</div>';
    } else {
        echo "Что-то пошло не так. Сообщение в Telegram не отправлено!";
    }

}
