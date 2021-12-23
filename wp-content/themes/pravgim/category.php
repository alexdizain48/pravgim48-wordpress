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
                                            <p><?php echo get_the_excerpt(); ?></p>
                                            <!--<p class="date text-left">09-10-2015</p>-->
                                            <p class="date text-left"><?php
                                                if (strtotime(get_the_date('Ymd'))<strtotime(get_the_modified_date('Ymd'))) {
                                                    echo "Опубликовано: ";
                                                    the_date('j F Y');
                                                    echo " / Обновлено: ";
                                                    the_modified_date('j F Y');
                                                }
                                                else {
                                                    echo "Опубликовано: ";
                                                    the_date('j F Y');
                                                }
                                                ?></p>
                                            <p>9 октября 2015 года в Православной гимназии имени прп. Амвросия Оптинского
                                                прошел
                                                праздник "Мы - пятиклассники"...</p>-->
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