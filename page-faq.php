<?php get_header()?>

        <div class="faq">
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
                'post_type'   => 'faq',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );

                ?>
                   <div class="title faq_title"><?php the_title(); ?></div>
                <div class="faq_wrapper">
                    <!-- num-1 -->
                    <div class="faq_wrapper_item">
                        <div class="faq_wrapper_item-questions">
                            <div class="faq_wrapper_item-questions-question">Каким образом дверь разблокируется?</div>
                            <img class="faq-img" src="<?php bloginfo('template_url' );?>/assets/icons/open.svg" >
                        </div>
                        <div class="faq_wrapper_item-answers">
                            <div class="faq_wrapper_item-answers-answer">Пластина, которая удерживает магнит в дверном полотне, имеет в центре углубление для фиксации металлического стержня. Конструкция углубления (активная ссылка) «открыта» с одной стороны и имеет выступ с другой. Этот выступ препятствует тому, чтобы дверь открывалась более, чем положено стопором. Чтобы металлический стержень вернулся обратно во втулку просто потяните дверь как обычно Вы делаете, чтобы ее закрыть. Легко и просто.</div>
                            <img  src="<?php bloginfo('template_url' );?>/assets/icons/close.svg" >
                        </div>
                    </div> 
                     <!-- num-2 -->
                    <div class="faq_wrapper_item">
                        <div class="faq_wrapper_item-questions">
                            <div class="faq_wrapper_item-questions-question">Какого размера отверстие нужно выполнить в полу?</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/open.svg" >
                        </div>
                        <div class="faq_wrapper_item-answers">
                            <div class="faq_wrapper_item-answers-answer">Пластина, которая удерживает магнит в дверном полотне, имеет в центре углубление для фиксации металлического стержня. Конструкция углубления (активная ссылка) «открыта» с одной стороны и имеет выступ с другой. Этот выступ препятствует тому, чтобы дверь открывалась более, чем положено стопором. Чтобы металлический стержень вернулся обратно во втулку просто потяните дверь как обычно Вы делаете, чтобы ее закрыть. Легко и просто.</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/close.svg" >
                        </div>                    
                    </div> 
                     <!-- num-3 -->
                     <div class="faq_wrapper_item">
                        <div class="faq_wrapper_item-questions">
                            <div class="faq_wrapper_item-questions-question">Какого размера отверстие нужно выполнить в полу?</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/open.svg" >
                        </div>
                        <div class="faq_wrapper_item-answers">
                            <div class="faq_wrapper_item-answers-answer">Пластина, которая удерживает магнит в дверном полотне, имеет в центре углубление для фиксации металлического стержня. Конструкция углубления (активная ссылка) «открыта» с одной стороны и имеет выступ с другой. Этот выступ препятствует тому, чтобы дверь открывалась более, чем положено стопором. Чтобы металлический стержень вернулся обратно во втулку просто потяните дверь как обычно Вы делаете, чтобы ее закрыть. Легко и просто.</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/close.svg" >
                        </div>                    
                    </div>  
                     <!-- num-4 -->
                     <div class="faq_wrapper_item">
                        <div class="faq_wrapper_item-questions">
                            <div class="faq_wrapper_item-questions-question">Какого размера отверстие нужно выполнить в полу?</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/open.svg" >
                        </div>
                        <div class="faq_wrapper_item-answers">
                            <div class="faq_wrapper_item-answers-answer">Пластина, которая удерживает магнит в дверном полотне, имеет в центре углубление для фиксации металлического стержня. Конструкция углубления (активная ссылка) «открыта» с одной стороны и имеет выступ с другой. Этот выступ препятствует тому, чтобы дверь открывалась более, чем положено стопором. Чтобы металлический стержень вернулся обратно во втулку просто потяните дверь как обычно Вы делаете, чтобы ее закрыть. Легко и просто.</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/close.svg" >
                        </div>                    
                    </div> 

                    <!-- num-5 -->
                    <div class="faq_wrapper_item">
                        <div class="faq_wrapper_item-questions">
                            <div class="faq_wrapper_item-questions-question">Какого размера отверстие нужно выполнить в полу?</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/open.svg" >
                        </div>
                        <div class="faq_wrapper_item-answers">
                            <div class="faq_wrapper_item-answers-answer">Пластина, которая удерживает магнит в дверном полотне, имеет в центре углубление для фиксации металлического стержня. Конструкция углубления (активная ссылка) «открыта» с одной стороны и имеет выступ с другой. Этот выступ препятствует тому, чтобы дверь открывалась более, чем положено стопором. Чтобы металлический стержень вернулся обратно во втулку просто потяните дверь как обычно Вы делаете, чтобы ее закрыть. Легко и просто.</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/close.svg" >
                        </div>                    
                    </div>  

                    <!-- num-6 -->
                    <div class="faq_wrapper_item">
                        <div class="faq_wrapper_item-questions">
                            <div class="faq_wrapper_item-questions-question">Какого размера отверстие нужно выполнить в полу?</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/open.svg" >
                        </div>
                        <div class="faq_wrapper_item-answers">
                            <div class="faq_wrapper_item-answers-answer">Пластина, которая удерживает магнит в дверном полотне, имеет в центре углубление для фиксации металлического стержня. Конструкция углубления (активная ссылка) «открыта» с одной стороны и имеет выступ с другой. Этот выступ препятствует тому, чтобы дверь открывалась более, чем положено стопором. Чтобы металлический стержень вернулся обратно во втулку просто потяните дверь как обычно Вы делаете, чтобы ее закрыть. Легко и просто.</div>
                            <img src="<?php bloginfo('template_url' );?>/assets/icons/close.svg" >
                        </div>                    
                    </div> 
                    <!-- itemEnd -->
                </div>


                <?php
                    

                }

            wp_reset_postdata(); // сброс
                ?>
                
            </div>
        </div>



<?php get_footer()?>