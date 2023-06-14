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
                продам гараж
            </div>
        </div>
    </div>
</main>
<?php get_footer();?> 