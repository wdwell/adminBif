<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php wp_head();?>
    <title>Регистрация в ЛК</title>
  </head>
  <body>
    <div class="row">
      <header>
        <div class="header">
          <a href="#"><img src="<?php bloginfo ('template_url'); ?>/assets/images/logo/logo.svg" alt="logo" /></a>
          <butoon class="buttonSecondary button jsEnableModal">Войти в личный кабинет</button>
        </div>
      </header>