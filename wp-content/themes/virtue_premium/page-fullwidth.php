<?php
/**
 * Template Name: Fullwidth
 *
 * @package Virtue Theme
 */

/**
 * Virtue Page title area.
 *
 * @hooked virtue_page_title - 20
 */
do_action('kadence_page_title_container');
do_action('virtue_page_title_container');
?>
<div id="content" class="container <?php echo esc_attr(virtue_container_class()); ?>">
    <div class="upAndZapisat">
        <div class="upAndZapisat__btn">
            <a href="#zapis" class="zapisats">онлайн запись</a>
        </div>
        <button class="upAndZapisat__btn__second" id="button-up" type="submit"><span class="upAndZapisat__btn__second_text">Наверх</span></button>
    </div>
    <div class="row">
        <div class="main <?php echo esc_attr(virtue_main_class()); ?>" id="ktmain" role="main">
            <?php
            do_action('kadence_page_before_content');
            ?>
            <div class="entry-content" itemprop="mainContentOfPage">
                <?php get_template_part('templates/content', 'page'); ?>


                <?php if (is_page(1093)) {

                    $razdely = get_field('razdely');
                    ?>
                        <style>
                            .our-specialist{
                                padding: 0;
                                padding-top: 120px;
                            }
                        </style>
                    <div class="razdel_name">
                        <?php foreach ($razdely as $name_razdel):
                            $name = $name_razdel['razdely_t']; ?>
                            <p> <?= $name ?></p>
                        <?php endforeach; ?>

                    </div>
                    <div class="razdely">
                        <?php if (have_rows('razdely')):
                            while (have_rows('razdely')): the_row();
                                $razdely_t = get_sub_field('razdely_t');
                                $razdely_table = get_sub_field('razdely_table'); ?>
                                <div class="razdely_item">
                                    <div class="razdely_t">
                                        <?php echo $razdely_t; ?>
                                    </div>
                                    <div class="razdely_table">
                                        <?php echo $razdely_table; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <script>
                        jQuery(".razdely_t").click(function () {
                            jQuery(this).parent().toggleClass('active');
                            jQuery(this).parent().find('.razdely_table').slideToggle();
                            if (jQuery('.razdely_item').hasClass('active')) {
                                jQuery(this).css({'background': '#403865', 'color': '#FFFFFF'});
                            } else {
                                jQuery(this).css({'background': ' #FFFFFF', 'color': '#403865'});
                            }

                        });
                    </script>

                <?php } else { ?>

                <?php } ?>

                <?php get_template_part('templates/specialist'); ?>

            </div>
            <?php
            /**
             * Kadence Page Footer
             *
             * @hooked virtue_page_comments - 20
             */
            do_action('kadence_page_footer');
            do_action('virtue_page_footer');
            ?>
        </div><!-- /.main -->
