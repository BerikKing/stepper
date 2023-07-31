<?php get_header()?>

<div class="catalog">
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
                'post_type'   => 'catalog',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );

                ?>
                   <div class="title catalog_title"><?php the_title(); ?></div>
                <div class="catalog_wrapper">
                    <div class="catalog_wrapper_item">
                        <img src="<?php bloginfo('template_url' );?>/assets/img/catalog_img1.png" class="catalog_wrapper_img">
                        <div class="catalog_wrapper_item_content">
                            <div class="catalog_wrapper_item_content_title">Дверной стоппер</div>
                            <div class="catalog_wrapper_item_content_descr">
                                <li>- для дверей с твердым сердечником;</li>
                                <li>- 1 вариант цвета.</li>
                            </div>
                            <button class="catalog-btn btn">Узнать больше</button>
                        </div>
                    </div>

                    <div class="catalog_wrapper_item">
                        <img src="<?php bloginfo('template_url' );?>/assets/img/catalog_img2.png" class="catalog_wrapper_img">
                        <div class="catalog_wrapper_item_content">
                            <div class="catalog_wrapper_item_content_title">Дверной стоппер</div>
                            <div class="catalog_wrapper_item_content_descr">
                                <li>- для дверей с твердым сердечником;</li>
                                <li>- 1 вариант цвета.</li>
                            </div>
                            <button class="catalog-btn btn">Узнать больше</button>
                        </div>
                    </div>

                    <div class="catalog_wrapper_item">
                        <img src="<?php bloginfo('template_url' );?>/assets/img/catalog_img3.png" class="catalog_wrapper_img">
                        <div class="catalog_wrapper_item_content">
                            <div class="catalog_wrapper_item_content_title">Дверной стоппер</div>
                            <div class="catalog_wrapper_item_content_descr">
                                <li>- для дверей с твердым сердечником;</li>
                                <li>- 1 вариант цвета.</li>
                            </div>
                            <button class="catalog-btn btn">Узнать больше</button>
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
