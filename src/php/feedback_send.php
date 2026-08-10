<?php

    file_put_contents(
        __DIR__ . '/spam-log.txt',
        date('Y-m-d H:i:s') . "\n" .
        "IP: " . ($_SERVER['REMOTE_ADDR'] ?? '') . "\n" .
        "UA: " . ($_SERVER['HTTP_USER_AGENT'] ?? '') . "\n" .
        "REFERER: " . ($_SERVER['HTTP_REFERER'] ?? '') . "\n" .
        "POST: " . print_r($_POST, true) .
        "\n-------------------------\n",
        FILE_APPEND
    );

    // Email получателя
    $to = "gubinvs@gmail.com";
    $subject = "Новая заявка с сайта";

    // Если скрытое поле 'robot_field' не пустое, значит форму отправил бот
    if (!empty($_POST['robot_field'])) {
        exit("Ошибка: форма отправлена ботом.");
    }

    // Если поле формы "robot" не заполнено, продолжаем выполнение
    if (empty($_POST['robot_field'])) {

        // Получаем данные формы
        if ($_POST['active-form'] == 'massage') {
            $site  = !empty($_POST['site']) ? $_POST['site'] : 'Страница контакты';
            $name  = trim($_POST['name']);
            $phone = trim($_POST['phone']);
            $email = trim($_POST['email']);
            $text  = trim($_POST['text']);
        }

        // Проверка номера телефона
        $cleanPhone = preg_replace('/\D+/', '', $phone);

        if (preg_match('/^(7|8)(9\d{9})$/', $cleanPhone)) {

            if (substr($cleanPhone, 0, 1) === '8') {
                $cleanPhone = '7' . substr($cleanPhone, 1);
            }

            $normalizedPhone = '+' . $cleanPhone;

        } else {
            exit('Ошибка: введите корректный номер телефона РФ.');
        }

        // Проверка: если начало email совпадает с номером телефона — вероятнее всего бот
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Логин email (до @)
            $emailLogin = strtolower(substr($email, 0, strpos($email, '@')));

            // Номер телефона без первой цифры страны (7)
            $phoneForCompare = substr($cleanPhone, 1); // 9270034101

            // Также сравним с полным номером (79270034101) на всякий случай
            if (
                $emailLogin === $phoneForCompare ||
                $emailLogin === $cleanPhone
            ) {
                exit('Ошибка: Ваше сообщение похоже на спам!');
            }
        }

        // Формируем письмо
        $message = "
        Новая заявка с сайта

        Сайт: {$site}
        Имя: {$name}
        Телефон: {$normalizedPhone}
        E-mail: {$email}

        Сообщение:
        {$text}
        ";

        // Заголовки письма
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $headers .= "Reply-To: {$email}\r\n";
            $headers .= "From: Site <no-reply@yourdomain.ru>\r\n";
        } else {
            $headers .= "From: Site <no-reply@yourdomain.ru>\r\n";
        }

        header('Content-Type: text/html; charset=utf-8');
        echo '<link rel="stylesheet" href="../css/encomp-nku-project-style.css">';

        // Отправка письма
        if (mail($to, "=?UTF-8?B?" . base64_encode($subject) . "?=", $message, $headers)) {

            echo '<div class="container feedback__container">';
            echo '<h2>Спасибо! Ваше сообщение принято.<br>Мы свяжемся с Вами в ближайшее время.</h2>';
            echo '</div>';

        } else {
            exit("Ошибка: письмо не отправлено.");
        }
    }

?>