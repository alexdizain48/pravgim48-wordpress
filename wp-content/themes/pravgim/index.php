<?php
get_header();
if (is_home()):
    ?>

    <?php get_template_part('tmp/breadcrumbs');?>

    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="infoGimn">
                    <!--------- CONTENT ------------>
                    <h1>Новости</h1>
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
                                            <!-- <h2 class="panel-title">Праздник "Мы-пятиклассники!</h2>-->
                                            <h2 class="panel-title">
                                                <?php the_title(); ?>
                                            </h2>
                                        </div>
                                        <div class="panel-body">
                                            <p><?php echo get_the_excerpt(); ?></p>
                                            <!--<p class="date text-left">09-10-2015</p>
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
                            <div class="dividerDotted"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <?php the_posts_pagination() ; ?>
                            <!--<div class="pagins">
                                <ul class="pagination pagination-sm">
                                    <li><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="dividerKredo">
                        <img src="img/dividerKredo.png">
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
                    <h1><?php the_title(); ?></h1>
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
                                       <!-- <h2 class="panel-title">Праздник "Мы-пятиклассники!</h2>-->
                                        <h2 class="panel-title">
                                            <?php the_title(); ?>
                                        </h2>
                                    </div>
                                    <div class="panel-body">
                                        <?php the_content(); ?>
                                        <!--<p class="date text-left">09-10-2015</p>
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
                        ?>

                        <div class="row">
                            <div class="col-md-12">
                                <h2>Нет записей</h2>

                            </div>
                        </div>
                        <?php
                    endif;
                    ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="dividerDotted"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="pagins">
                                <ul class="pagination pagination-sm">
                                    <li><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="dividerKredo">
                        <img src="img/dividerKredo.png">
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