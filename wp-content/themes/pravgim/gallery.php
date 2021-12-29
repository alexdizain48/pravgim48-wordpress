<?php
/*
  Template Name: Фотогалерея
 */
get_header();
?>

<!---------- CONTENTwrap ------------>
<section>
    <div class="row">
        <div class="col-md-12">
            <div class="infoGimn">

                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        ?>

                        <div class="post">

                            <div class="row">
                                <div class="col-sm-12">
                                    <h1><?php echo get_the_title(); ?></h1>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                        </div><!-- post -->

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

<?php
get_footer();
?>
