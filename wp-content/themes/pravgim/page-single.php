<?php
/*
  Template Name: Простые страницы
 */
get_header();
?>

    <!---------- CONTENTwrap ------------>
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="infoGimn">
                    <h1><?php echo get_the_title(); ?></h1>

                    <?php echo get_the_content(); ?>

                    <div class="clearfix"></div>

                    <div class="dividerKredo">
                        <img src="<?php echo _prav_assets_path( 'uploads/img/dividerKredo.png' ) ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------- endCONTENTwrap ------------>


<?php
get_footer();
?>