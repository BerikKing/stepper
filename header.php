<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>STANG Hadrware</title>
        <!-- <link rel="stylesheet" href="css/style.min.css" /> -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap"rel="stylesheet"/>
    <?php wp_head(); ?>
    </head>
    <body>
        <!-- меню -->
        <header class="header">
            <div class="container">
                <div class="header_wrapper">
                    <div class="logo">
                        <a href="/"><img src="<?php bloginfo('template_url' );?>/assets/img/logo.svg" alt="logo"></a>
                    </div>
                    <div class="menu">
                        <a href="/catalog">Каталог</a>
                        <a href="/about">О компании</a>
                        <a href="/faq">Частые вопросы</a>
                        <a href="/contacts">Контакты</a>  
                    </div>

                    <div class="contact">
                        <div class="phone_number"><a href="tel:8-800-700-97-10">8-800-700-97-10</a></div>
                        <div class="phone_number_descr">бесплатный звонок по всей России</div>
                    </div>

                    <div class="social-lang">
                        <div class="social">
                            <a href="#"><img class="social_telegram" src="<?php bloginfo('template_url' );?>/assets/icons/telegram.svg" alt="telegram"></img></a>
                            <a href="#"><img class="social_vk" src="<?php bloginfo('template_url' );?>/assets/icons/vk.svg" alt="VK"></img></a>
                        </div>
                         |
                        <div class="lang">
                            <a href="#">
                                RU
                                <img class="lang_flag" src="<?php bloginfo('template_url' );?>/assets/icons/flag.svg" alt="flag">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </header>