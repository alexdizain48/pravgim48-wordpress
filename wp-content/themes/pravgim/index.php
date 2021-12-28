<?php
get_header();
if (is_home()):
    ?>

    <?php get_template_part('tmp/breadcrumbs'); ?>

    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="infoGimn">
                    <!--------- CONTENT ------------>
                    <h1>Лента событий</h1>

                    <?php $categories = get_categories();
                    if ($categories):
                        ?>
                        <div class="row btnHref">
                            <div class="col-md-12">
                                <div class="btn-group">
                                    <?php
                                    foreach ($categories as $cat):
                                        $cat_link = get_category_link($cat->cat_ID)
                                        ?>
                                        <a href="<?php echo $cat_link; ?>" class="btn btn-large btn-success">
                                            <?php echo $cat->name; ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <br>
                    <?php endif; ?>

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
                                <?php endwhile; ?>
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
                        <img src="<?php echo _prav_assets_path('uploads/img/dividerKredo.png') ?>">
                    </div>
                    <!--------- EndCONTENT ------------>
                </div>
            </div>
        </div>
    </section>

    <?php
else:
    ?>

    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="infoGimn">
                    <!--------- CONTENT ------------>
                    <h1>Лента событий</h1>

                    <div class="row btnHref">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="btn-group">
                                <a href="#" class="btn btn-large btn-success">Новсти</a>
                                <a href="#" class="btn btn-large btn-success">Достижения</a>
                                <a href="#" class="btn btn-large btn-success">Объявления</a>
                            </div>
                        </div>
                    </div>
                    <br>

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
                                <?php endwhile; ?>
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
                        <img src="<?php echo _prav_assets_path('uploads/img/dividerKredo.png') ?>">
                    </div>
                    <!--------- EndCONTENT ------------>
                </div>
            </div>
        </div>
    </section>

    <?php
endif;
get_footer()
?>