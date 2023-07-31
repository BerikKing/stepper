<?php get_header(); ?>

<?php /* Template Name: about */ 
?>

<div class="about">
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
                'post_type'   => 'about',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );

                ?>
                    <div class="about_wrapper">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>">
                        <div class="about_wrapper-inner">
                            <div class="about_wrapper-inner-title"><?php the_title() ?> </div>
                            <div class="about_wrapper-inner-descr"><?php the_content() ?></div>
                            <!-- <button class="btn about_btn">Узнать больше</button> -->
                        </div>
                    </div>
                <?php
                    

            }

            wp_reset_postdata(); // сброс
        ?>
    </div>
</div>

<?php get_footer(  ); ?>