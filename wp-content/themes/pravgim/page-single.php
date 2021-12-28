<?php
/*
  Template Name: Простые страницы
 */
get_header();
?>

<?php get_template_part('tmp/breadcrumbs'); ?>

    <!---------- CONTENTwrap ------------>
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="infoGimn">
                    <h1><?php echo get_the_title(); ?></h1>

                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            ?>

                            <?php echo get_the_content(); ?>

                            <?php
                        endwhile;
                    endif;
                    ?>

                    <div class="clearfix"></div>

                    <div class="dividerKredo">
                        <img src="<?php echo _prav_assets_path('uploads/img/dividerKredo.png') ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------- endCONTENTwrap ------------>


<?php
get_footer();
?>