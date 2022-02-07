<?php
/*
  Template Name: Контакты
 */
get_header();
?>

<?php get_template_part('tmp/breadcrumbs'); ?>

<section>
    <div class="row">
        <div class="col-md-12">
            <div class="infoGimn">
                <!--------- CONTENT ------------>
                <?php while (have_posts()):
                    the_post();
                    ?>

                    <div class="row">
                        <div class="col-sm-12">
                            <h1><?php echo get_the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="infoMap">
                        <div class="col-md-12">
                            <div class="map">
                                <div class="row mapArea">
                                    <script type="text/javascript" charset="utf-8"
                                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=yLav2EjoAN3ZEqk8TPp7S5UALVLC16_t&width=100%&height=100%&lang=ru_RU&sourceType=constructor"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <p><strong>Тип:</strong></p>
                    <p>негосударственное образовательное учреждение</p>
                    <br>
                    <p><strong>Учредитель:</strong></p>
                    <p>Централизованная Православная религиозная организация Липецкая и Задонская Епархия Русской
                        Православной Церкви (Московский Патриархат) Митрополит Липецкий и Задонский Арсений (Епифанов
                        Юрий Александрович)</p>
                    <br>
                    <p><strong>Организационно-правовая форма:</strong></p>
                    <p>частное учреждение</p>
                    <br>
                    <p><strong>Наименования филиалов:</strong></p>
                    <p>нет</p>
                    <br>
                    <p><strong>Место нахождения:</strong></p>
                    <p>г. Липецк, ул.Прокатная, д.10</p>
                    <br>
                    <p><strong>Адрес(а) осуществления образовательной деятельности:</strong></p>
                    <p>398005, Россия, г.Липецк, ул. Прокатная, д.10</p>
                    <br>
                    <p><strong>Банковские реквизиты:</strong></p>
                    <p>Р/счет 40703810635000100310 Липецкое ОСБ № 8593</p>
                    <br>
                    <p><strong>Телефоны:</strong></p>
                    <p>+7 (4742) 28-71-74 - Приемная;</p>
                    <p>+7 (4742) 28-80-76 - Директор;</p>
                    <p>+7 (4742) 28-72-18 - Бухгалтерия;</p>
                    <p>+7 (4742) 28-71-48 - Зам. директора.</p>
                    <br>
                    <p><strong>Факс:</strong></p>
                    <p>7(4742)287174</p>
                    <br>
                    <p><strong>e-mail:</strong></p>
                    <p><a href="mailto:prawgim@yandex.ru">prawgim@yandex.ru</a></p>
                    <br>
                    <p><strong>ФИО руководителя:</strong></p>
                    <p>Щурко Марина Сергеевна</p>
                    <br>
                    <h2>Обратная связь</h2>

                    <?php the_content(); ?>
                <?php endwhile; ?>


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
get_footer();
?>

