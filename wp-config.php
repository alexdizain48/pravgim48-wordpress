<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'pravgim48_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MKY=2U{TF:H@- PI%KIg$7E7Gan)Ri,D[an!!QC?0IEyXl6c+V<gf>9$[?1[HM_u' );
define( 'SECURE_AUTH_KEY',  'l3<Q-K3~P@<n:>^:]4xr#/~Xw1ZFM(J_STIEjM!~E*{zFPA9%9%[C$lMKNl?WoGM' );
define( 'LOGGED_IN_KEY',    'h9!r9ho|Cb~~tWE9(v*ViumW;j-ONfwTsJx5T+QYQMynj3Iw-_ip)cP/ 1[Y4xTn' );
define( 'NONCE_KEY',        '5cgKhys)8X)+1W9|Vz^SIIZJ[U_{//8V5Sv~mvY+=2*L$~<vtf{x+Va OybUu*P0' );
define( 'AUTH_SALT',        '|wr)hzH^@.TegxvThQD&2%>C;?+h8}~=mW1g#tLv6Q&h#QoD9] s,h4%Jb88x%xe' );
define( 'SECURE_AUTH_SALT', 'Xy7K]Pn~:G$E.HAyAzW[ckrS3QBL KYOeR`5_Cd|a,zsL!<:Cw0.!C^M7xo{7qbX' );
define( 'LOGGED_IN_SALT',   'VGV(&!mfwXXOehEJG7z{K!Xhf}/*kSE&uN,}0>Wv,jq 2DVp;nQh`qoiCO]^ $u^' );
define( 'NONCE_SALT',       'O-(ys(2WqlY#3ib:%O8~Aq{ Dc Zhf:[v1sF|zGR}9.t:_xLDV*[D9cZIF%vUj>o' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
