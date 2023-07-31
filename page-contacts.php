<?php get_header(); ?>

<?php
    /* Template Name: contacts */
?>

<div class="contacts">
            <div class="container">

            <?php
            // параметры по умолчанию
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'contacts',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );

                ?>
                <div class="contacts_wrapper">

                    <div class="contacts_wrapper_addresses">
                        <!-- <div class="contacts_wrapper_addresses-title"></div> -->
                        <div class="contacts_wrapper_addresses-address">
                            <div class="contacts_wrapper_addresses-address_1">
                                <img src="<?php bloginfo('template_url' );?>/assets/icons/map-pin.svg">
                                <div class="contacts_wrapper_addresses-address-name">Адрес:</div>
                            </div>
                             <address>141006, Московская область,г. Мытищи, <br>
                            1-й Рупасовский пер., д. 6В</address>
                        </div>
                        <div class="working_hours">
                            <div class="working_hours_open">
                                <img src="<?php bloginfo('template_url');?>/assets/icons/clock.svg">
                                <div class="working_hours_open-name">Время работы:</div>
                            </div>
                            
                            <div class="working_hours-name-1">
                                пн-чт 9:00 - 18:00 мск <br> (заезд на склад с 9:00 - 16:00 мск)
                            </div>
                            <div class="working_hours-name-2">
                                пт 9:00 - 16:00 мск <br>(заезд на склад с 9:00 - 15:00 мск)
                            </div>
                        </div>

                    </div>

                    <div class="map">
                        <div style="position:relative;overflow:hidden;">
                            <a href="https://yandex.kz/maps/10740/mytischi/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Мытищи</a>
                            <a href="https://yandex.kz/maps/10740/mytischi/house/1_y_rupasovskiy_pereulok_6v/Z04YcQNmQUMAQFtvfXVzeXtkbQ==/?ll=37.748207%2C55.928569&utm_medium=mapframe&utm_source=maps&z=15.96" style="color:#eee;font-size:12px;position:absolute;top:14px;">1-й Рупасовский переулок, 6В — Яндекс Карты</a>
                            <iframe src="https://yandex.kz/map-widget/v1/?ll=37.748207%2C55.928569&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgozOTkzNTIyMzAwEnLQoNC-0YHRgdC40Y8sINCc0L7RgdC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCDQnNGL0YLQuNGJ0LgsIDEt0Lkg0KDRg9C_0LDRgdC-0LLRgdC60LjQuSDQv9C10YDQtdGD0LvQvtC6LCA20JIiCg3L_BZCFRK3X0I%2C&z=15.96" width="100%" height="429"  frameborder="1" allowfullscreen="true" style="position:relative;">
                            </iframe>
                        </div>
                    </div>
                </div>
                <?php
            }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>

<?php get_footer()?>