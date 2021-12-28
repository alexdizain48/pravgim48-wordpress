<?php
get_header();
$title = single_cat_title('', false);
?>

<?php get_template_part('tmp/breadcrumbs');?>

    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="infoGimn">
                    <!--------- CONTENT ------------>
                    <h1><?php echo $title;?></h1>
                    <?php
                    if (have_posts()):
                        ?>
                        <div class="row">
                            <div class="col-md-12">

                                <?php
                                while (have_posts()):
                                    the_post();
                                    ?>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h2 class="panel-title">
                                                <?php the_title(); ?>
                                            </h2>
                                        </div>
                                        <div class="panel-body">
                                            <p class="date text-left"><?php echo get_the_date('j F Y'); ?></p>
                                            <p><?php echo get_the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="pull-right">Подробнее...</a>
                                        </div>
                                    </div>
                                <?php endwhile;?>

                            </div>
                        </div>
                        <?php
                    else:
                        get_template_part('tmp/no-posts');
                    endif;
                    ?>

                    <div class="row">
                        <div class="col-md-12">
                            <?php the_posts_pagination(); ?>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="dividerKredo">
                        <img src="<?php echo _prav_assets_path( 'uploads/img/dividerKredo.png' ) ?>">
                    </div>
                    <!--------- EndCONTENT ------------>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>