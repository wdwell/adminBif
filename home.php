<?php
/*
Template Name: Main Page
*/
?>
<!-- html код шаблона -->
<?php get_header();?>    
<main>
    <div class='container'>
        <section class='mainContent'>
            <h1>Создайте ссылку на ваш файл или загрузите файлы до 5 ГБ. При регистрации в личном кабинете, вы сможете хранить до 25 ГБ информации в вашем <a href='#' class='lcLink jsEnableModal'>личном кабинете</a>.</h1>
            <p>Объем файла не должен превышать 5 ГБ.<br>Возможные форматы файлов: doc., docx., rtf., xls., xlsx., pdf., jpg., jpeg., png.</p>
            <div class='autentificationButton'>
                <button class="buttonPrimary button jsEnableModal">Загрузить файл</button>    
                <button class="buttonSecondary button jsEnableModal">Создать ссылку</button>
            </div>
        </section>
        <div class='modalAutentificationBlur'></div>
        <div class='modalAutentification'>
            <div class='modalAutentificationExit'>
                <img src="<?php bloginfo ('template_url'); ?>/assets/images/exit.svg" alt="exit" />
            </div>
            <div class='modalContent'>
                <form class="autentificationForm">
                  <h1>Войти в личный кабинет</h1>
                  <input type="email" id="emailInput" class="custom-input" placeholder="Введите Ваш Email">
                    <p id="emailError" class="error-message">Вы ввели неверный e-mail</p>
                    <input type="text" id="passwordInput" class="custom-input" placeholder="Введите Ваш пароль">
                    <p id="passwordError" class="error-message">Пароль должен содержать строчные и заглавные буквы,<br> не менее 1 цифры, и не должен содержать символы.</p>
                  <div class="autentificationButton">
                    <button id="submitButton" class="buttonPrimary button" type="button">
                      Войти
                    </button>
                    <button class="buttonSecondary button" type="button">
                      Зарегистрироваться
                    </button>
                    <button class="buttonLink button" type="button">Восстановить пароль</button>
                  </div>
                  
                  <p class="">или зайдите с помощью</p>
                    <div class="">
                        <a href="#"><img src="<?php bloginfo ('template_url'); ?>/assets/images/ok.svg" alt="ok.ru"/></a>
                        <a href="#"><img src="<?php bloginfo ('template_url'); ?>/assets/images/vk.svg" alt="vk.com" /></a>
                    </div>
                    <p class="">
                    Нажимая на кнопку, вы соглашаетесь с нашими
                    <a href="#">Условиями</a> и
                    <a href="#">Политикой конфиденциальности</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?> 