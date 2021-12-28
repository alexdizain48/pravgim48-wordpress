<?php
get_header();
?>

<?php get_template_part('tmp/breadcrumbs'); ?>

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
                                <?php echo get_the_content(); ?>
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
<!---------- endCONTENTwrap ------------>

<?php
get_footer();
?>
