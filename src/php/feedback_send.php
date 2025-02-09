<?php

// Вставьте сюда ваш токен от @botFather
$token = "1670273806:AAED917Gd7nWkgDDq_TKv2GRZFe9ens1W8w";

// Вставьте сюда chat_id
$chat_id = "538615330";

// Если скрытое поле 'robot_field' не пустое, это значит, что форму отправил бот.
if ($_POST['robot_field'] != '') {
    echo "Ошибка: форма отправлена ботом.";
    exit; // Останавливаем выполнение скрипта, если это бот
}

// Если поле формы "robot" не заполнено, продолжаем выполнение
if ($_POST['robot'] == null) {

    // Приняли данные из формы и присвоили значения переменным
    if ($_POST['active-form'] == 'massage') {
        $site = 'Страница контакты';
        $name = ($_POST['name']);                // Имя пользователя
        $phone = ($_POST['phone']);             // Телефон
        $email = ($_POST['email']);             // Email
        $text = ($_POST['text']);               // Текст сообщения
    }

    // Собираем данные в массив
    $arr = array(
        'Сайт:' => $site,
        'Имя: ' => $name,
        'Телефон: ' => $phone,
        'E-mail: ' => $email,
        'Сообщение: ' => $text
    );

    // Настроим внешний вид сообщения для Telegram
    $txt = '';
    foreach ($arr as $key => $value) {
        $txt .= "<b>" . $key . "</b> " . $value . "%0A";
    }

    // Отправляем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
    header('Content-Type: text/html; charset=utf-8');

    // Проверка на успешную отправку
    if ($sendToTelegram) {
        echo "Спасибо! Ваше сообщение принято. Мы свяжемся с Вами в ближайшее время.";
    } else {
        echo "Что-то пошло не так. Сообщение в Telegram не отправлено!";
    }

    // Инициализация соединения с базой данных
    $conn = new mysqli("gubinv.beget.tech", "gubinv_supply", "8x&zo6Wf", "gubinv_supply");
    // Проверка соединения с базой
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Добавление данных в таблицу
    $ins = "INSERT INTO `application` (
        `name`, 
        `phone`, 
        `email`,
        `message`
        )
        VALUES (
        '$name', 
        '$phone', 
        '$email',
        '$text'
        )";

    if ($conn->query($ins)) {
        echo "Данные успешно добавлены в базу данных";
    } else {
        die ("Ошибка: " . $conn->error);
    }

    // Закрытие соединения с базой
    $conn->close();
}

?>
