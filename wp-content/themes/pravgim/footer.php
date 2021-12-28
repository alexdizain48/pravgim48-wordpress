<aside>
    <div class="row">
        <div class="col-md-12">
            <div id="owl-demo" class="owl-carousel">
                <div class="item">
                    <a href="index_plan-raboty-progimnazii.html">
                        <img src="<?php echo _prav_path_img_header_footer( 'img/preschool.jpg' ) ?>" alt="Дошкольники">
                    </a>
                </div>
                <div class="item">
                    <a href="index_horeografija.html">
                        <img src="<?php echo _prav_path_img_header_footer( 'img/choreography.jpg' ) ?>" alt="Хореография">
                    </a>
                </div>
                <div class="item">
                    <a href="index_bogoslugebnoje-penije.html">
                        <img src="<?php echo _prav_path_img_header_footer( 'img/liturgicalSinging.jpg' ) ?>" alt="Богослужебное пение">
                    </a>
                </div>
                <div class="item">
                    <a href="index_sport-sekzii.html">
                        <img src="<?php echo _prav_path_img_header_footer( 'img/sportsClubs.jpg' ) ?>" alt="Спортивные секции">
                    </a>
                </div>
                <div class="item">
                    <a href="index_palitra.html">
                        <img src="<?php echo _prav_path_img_header_footer( 'img/palette.jpg' ) ?>" alt="Палитра">
                    </a>
                </div>
                <div class="item">
                    <a href="index_teatralnaja-studija.html">
                        <img src="<?php echo _prav_path_img_header_footer( 'img/theatreStudio.jpg' ) ?>" alt="Театральная студия">
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>

<div class="row">
    <div class="col-md-12">
        <div class="dividerDotted"></div>
    </div>
</div>

<div class="row newsTotal">
    <div class="col-md-6 newsBlock">
        <h3>Новости</h3>
        <ul>
            <?php
            $args = array(
                'numberposts' => 5,
                'category' => 5,
                'post_status' => 'publish',
            );
            $result = wp_get_recent_posts( $args );
            foreach( $result as $p ){
                ?>
                  <li><a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a></li>
                <?php
            }
            ?>
        </ul>
        <?php
           $category_id = get_cat_ID( 'Новости' );
           $category_link_news = get_category_link( $category_id );
        ?>
        <a class="more" href="<?php echo $category_link_news; ?>"><p>Все новости</p></a>
    </div>

    <div class="col-md-6 advert mb15">
        <div class="advertBG">
            <h3>Объявления</h3>
            <ul>
                <?php
                $args = array(
                    'numberposts' => 2,
                    'category' => 6,
                    'post_status' => 'publish',
                );
                $result = wp_get_recent_posts( $args );
                foreach( $result as $p ){
                    ?>
                    <li><a href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a></li>
                    <?php
                }
                ?>
            </ul>
            <?php
               $category_id = get_cat_ID( 'Объявления' );
               $category_link_advert = get_category_link( $category_id );
            ?>
            <a class="more" href="<?php echo $category_link_advert; ?>"><p>Подробнее....</p></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="dividerDotted"></div>
    </div>
</div>

<br>
<div class="row contacts">
    <div class="col-md-10 col-md-offset-1">
        <a href="https://год2020.рф">
            <img class="img-responsive" src="<?php echo _prav_path_img_header_footer( 'img/banner_den_pobedi.jpg' ) ?>" alt="День Победы">
        </a>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="dividerDotted"></div>
    </div>
</div>

<div class="row contacts">
    <div class="col-sm-12 col-md-4 newsBlock mb15">
        <h3>Полезные ссылки</h3>
        <ul>
            <li><a href="http://www.patriarchia.ru/">Официальный сайт Московской Патриархии</a></li>
            <li><a href="http://mitropolia-lip.ru/">Официальный сайт Липецкой Митрополии</a></li>
            <li><a href="http://www.doal.ru/news/news.php">Официальный сайт департамента образования администрации
                    г.Липецка</a></li>
            <li><a href="http://www.optina.ru/">Официальный сайт Введенского Ставропигиального мужского
                    монастыря</a>
            </li>
            <li><a href="http://www.fipi.ru/">Федеральный институт педагогических измерений</a></li>

            <li><a href="https://edu.gov.ru">Министерство просвещения РФ</a></li>
            <li><a href="https://minobrnauki.gov.ru">Министерство науки и высшего образования РФ</a></li>
        </ul>
    </div>

    <div class="col-sm-6 col-md-4 center">
        <h3>СМИ о гимназии</h3>
        <div class="pano">
            <a href="/pages/smi-o-gimnazii">
                <img src="<?php echo _prav_path_img_header_footer( 'img/smiprev.jpg' ) ?>" alt="СМИ о гимназии">
            </a>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 center">
        <h3>Журнал гимназии</h3>
        <div class="pano">
            <a href="/pages/zhurnal-gimnazii">
                <img src="<?php echo _prav_path_img_header_footer( 'img/oyblprev.jpg' ) ?>" alt="Отблески">
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="dividerDotted"></div>
    </div>
</div>

<div class="row contacts">
    <div class="col-sm-12 col-md-4 mb15 text-center">
        <h3>Достижения</h3>
        <div class="pano">
            <?php
               $category_id = get_cat_ID( 'Достижения' );
               $category_link_advert = get_category_link( $category_id );
            ?>
            <a href="<?php echo $category_link_advert; ?>">
                <img src="<?php echo _prav_path_img_header_footer( 'img/dostigprev.jpg' ) ?>" alt="Наши достижения">
            </a>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 mb15 text-center">
        <h3>Путешествие по гимназии</h3>
        <div class="pano">
            <a href="/pages/vtour">
                <img src="<?php echo _prav_path_img_header_footer( 'img/logoTur.jpg' ) ?>" alt="Виртуальный тур">
            </a>
        </div>
    </div>

    <div class="col-sm-6 col-md-4 mb15 text-center">
        <h3>Фотогалерея</h3>
        <div class="pano">
            <a href="/albums">
                <img src="<?php echo _prav_path_img_header_footer( 'img/logoGaller.JPG' ) ?>" alt="Фотогалерея">
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="dividerDotted"></div>
    </div>
</div>

<div class="row contacts">
    <div class="col-sm-12 col-md-4 mb15 text-center">
        <h3>Контакты</h3>
        <div class="addres">
            <p>
                398000,Липецкая область,
                <br>
                ул.Прокатная, дом 10
            </p>
            <p>
                <a href="mailto:prawgim@yandex.ru">prawgim@yandex.ru</a>
            </p>
            <?php
            if(is_active_sidebar('prav-contacts')){
                dynamic_sidebar('prav-contacts');
            }
            ?>
           <!-- <p>
                Телефоны в Липецке
                <br>
                <abbr title="Телефон">Т: </abbr>
                +7(4742) 28-80-76<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+7(4742) 28-71-74
            </p>-->
        </div>
    </div>
    <div class="col-sm-6 col-md-4 center mb15">
        <div class="video-wrapper">
            <div class="video-container">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad544af900a858ab4f870112cc1266562ca4d782da12302eec8ea9182ec581061&amp;source=constructor"
                        width="100%" height="240" frameborder="0"></iframe>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 center mb15">
        <h3>Мы в соцсетях</h3>
        <div class="social_icons">
                <span>
                    <a href="http://vk.com/pravoslavnai.gimnazia">
                        <img src="<?php echo _prav_path_img_header_footer( 'img/logoWk.png' ) ?>" alt="ВК">
                    </a>
                </span>
            <span>
                    <a href="https://www.youtube.com/channel/UCNo5KbrAMWQQRyjUCCONShQ">
                        <img src="<?php echo _prav_path_img_header_footer( 'img/logoYtB.png' ) ?>" alt="YouTube">
                    </a>
		         </span>
        </div>
        <div class="social_icons">
                <span>
                    <a href="https://play.google.com/store/apps/details?id=com.alart48.pravgim48">
                        <img src="<?php echo _prav_path_img_header_footer( 'img/google-play-logo.png' ) ?>" alt="GooglePlay">
                    </a>
                </span>
        </div>
    </div>
</div>


</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="index.html"><img src="<?php echo _prav_assets_path( 'img/footerLogo.png' ) ?>" alt="Православная гимназия им. прп. Амвросия Оптинского Липецкой Епархии"></a>
            </div>
        </div>
    </div>
</footer>

<!-- tuTopButton -->
<a href="#" id="toTop"><img src="<?php echo _prav_assets_path( 'img/toTop.png' ) ?>" border="0" align="absmiddle"/></a>
<?php wp_footer(); ?>
<!--<a href="#" id="toTop"><img src="img/toTop.png" border="0" align="absmiddle"/></a>
<script src="js/toTop.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js"></script>-->


</body>
</html>