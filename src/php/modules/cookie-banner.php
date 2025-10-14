<?php
// cookie-banner.php — универсальный баннер для сайта
// Лог сохраняется в cookie_consent.log в той же директории

if (isset($_GET['log_cookie'])) {
    header('Content-Type: application/json');
    $data = json_decode(file_get_contents('php://input'), true);
    if (!$data) {
        http_response_code(400);
        echo json_encode(['error' => 'bad request']);
        exit;
    }
    $line = sprintf(
        "[%s] accepted=%s ip=%s agent=%s path=%s\n",
        date('Y-m-d H:i:s'),
        $data['accepted'] ? 'true' : 'false',
        $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200),
        $data['path'] ?? ''
    );
    file_put_contents(__DIR__ . '/cookie_consent.log', $line, FILE_APPEND);
    echo json_encode(['ok' => true]);
    exit;
}
?>

<!-- Cookie banner -->
<style>
    #cookie-banner {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        background: #222;
        color: #fff;
        padding: 16px;
        box-shadow: 0 -2px 8px rgba(0, 0, 0, .2);
        z-index: 10000;
        font-family: sans-serif
    }

    #cookie-banner.hidden {
        display: none
    }

    .cookie-inner {
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px
    }

    .cookie-inner p {
        margin: 0;
        font-size: 14px;
        line-height: 1.4
    }

    .cookie-actions {
        display: flex;
        gap: 8px
    }

    .btn {
        padding: 8px 12px;
        border-radius: 6px;
        border: 0;
        cursor: pointer;
        font-size: 14px
    }

    .btn-accept {
        background: #2b8a3e;
        color: white
    }

    .btn-decline {
        background: transparent;
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.3)
    }
</style>

<div id="cookie-banner" class="hidden">
    <div class="cookie-inner">
        <p>Мы используем cookies для улучшения работы сайта. Подробнее — <a href="https://encomponent.ru/pp-page.html" target="_blank" style="color:#8fcafc;">Политика обработки персональных данных</a>.</p>
        <div class="cookie-actions">
            <button id="cookie-accept" class="btn btn-accept">Принять</button>
            <button id="cookie-decline" class="btn btn-decline">Отклонить</button>
        </div>
    </div>
</div>

<script>
    (function() {
        const KEY = 'cookieConsent';
        const banner = document.getElementById('cookie-banner');
        const btnAccept = document.getElementById('cookie-accept');
        const btnDecline = document.getElementById('cookie-decline');

        // логирование на сервер
        function sendChoiceToServer(accepted) {
            fetch('?log_cookie=1', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    accepted: accepted,
                    timestamp: new Date().toISOString(),
                    path: location.pathname,
                    userAgent: navigator.userAgent
                })
            }).catch(e => console.warn('Ошибка логирования', e));
        }

        function setConsent(accepted) {
            localStorage.setItem(KEY, JSON.stringify({
                accepted,
                timestamp: new Date().toISOString()
            }));
            sendChoiceToServer(accepted);
            banner.classList.add('hidden');
            if (accepted) loadAnalytics();
        }

        function loadAnalytics() {
            console.log('✅ Cookies приняты — можно подключать аналитику');
            // Пример: Google Analytics
            const s = document.createElement('script');
            s.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX';
            s.async = true;
            document.head.appendChild(s);
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-XXXXXXX');
        }

        const stored = localStorage.getItem(KEY);
        if (!stored) {
            banner.classList.remove('hidden');
        } else {
            const consent = JSON.parse(stored);
            if (consent.accepted) loadAnalytics();
        }

        btnAccept.addEventListener('click', () => setConsent(true));
        btnDecline.addEventListener('click', () => setConsent(false));
    })();
</script>