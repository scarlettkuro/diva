<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'diva');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm[mgKPFiY7F=YoL-Bi|L o}Kf;)t$~HnR`FydD|WM5T0-0l-2Df2<>]2+:gnW&UZ');
define('SECURE_AUTH_KEY',  'F|+f/yhfvP[:IN.rl+Z(--=2+RG9ppDT@dY2/fMK3][9Z*4;Mkxq-d )xi}:nR|?');
define('LOGGED_IN_KEY',    '6-87(`;}8}|#4Cixd$A79S-!bvSq-qZz(v+3z+g]ra_qk-^||Q+?). ogx3FYM8*');
define('NONCE_KEY',        'yT%+38qq2m``vzj.}(gf3-v6>]R-LBxp?c~J|41h]sr?cNZYY>@TWJ+r){Y2#_4u');
define('AUTH_SALT',        'xd).|A(tDz+F[oGo/|CQSRvy-:;[YWza}XtP@51J^?e-Z0@rG1HP=C%+ZYZ-S0Pp');
define('SECURE_AUTH_SALT', 'bys6Q6Q#m0&R!O.(;HV4#y,uXHGQ(#dpr^Bj{scX45(vd8 ayW_[-d@^#rVx}0 3');
define('LOGGED_IN_SALT',   '[|DRHoO5UG3&Cb*DMFHmxpPE]UTHwN]wQt3;PA( Tru25)VWA)^bH9Ol>|< `gBj');
define('NONCE_SALT',       ',4W`ixR!BuD74t^}?og]8o9Q.>+ ss?g?*--/PK#oJ[`-s<e`Fn-f)1;v?hrhD#=');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
