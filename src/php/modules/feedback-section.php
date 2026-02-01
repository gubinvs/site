<section class="feedback-section" id="feedback">
    <h2 class="visually-hidden h1-visually h1__visually" style="visibility: hidden;">Форма обратной связи c Компоненты энергии </h2>
    <div class="container feedback-section__container">
        <div class="feedback-section__title-block">
            <h2 class="title-block__title">
                Задайте свой вопрос менеджеру<br> по работе с клиентами</span></h2>
            <div class="title-fon-text"></div>
            <div class="title-block__discr">
                Заполните форму, и специалист свяжется с вами в ближайшее время,
                подберет оптимальное решение под ваши требования и ответит на все интересующие вопросы!
            </div>
        </div>
        <form class="feedback-section__form" action="https://encomponent.ru/php/feedback_send.php" method="POST">
            <input class="feedback-section__input feedback-section__input_name" type="text" placeholder="Ваше имя" name="name" required>
            <input class="feedback-section__input feedback-section__tel" type="tel" placeholder="+7 (999) 999 99 99" name="phone" required>
            <input class="feedback-section__input feedback-section__input_email" type="email" placeholder="Ваш E-mail" name="email" required>
            <input type="text" name="robot" style="display: none" class="feedback-section__input_none">
            <textarea class="feedback-section__input feedback-section__input_textarea" placeholder="Ваш вопрос" name="text" required></textarea>
            <button class="feedback-section__button" type="submit">Отправить сообщение</button>
            <div class="check-box">
                <input type="checkbox" name="chekBox" required>
                <a class="check-box__input check-box__pp-page" href="https://encomponent.ru/pp-page.html">
                    Даю согласие на обработку персональных данных
                </a>
                <input type="hidden" name="active-form" value="massage">
            </div>
        </form>
    </div>
</section>