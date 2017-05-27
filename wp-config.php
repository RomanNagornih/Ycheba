<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'OverPc');

/** Имя пользователя MySQL */
define('DB_USER', 'OverPc');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'bes0987654321');

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
define('AUTH_KEY',         '+:_O){!?SQ%GT1_l(>G1*w#!Ua $<uEYx.91$.0]!Sw[mH~t!b3i(OEZu]4]^;14');
define('SECURE_AUTH_KEY',  '{a$C4^;c<qg$%h^,,Z$(;AG^!YThLAKBY@V9ZgQlL~P5];Dz6vyGkJ4m{/g0-Kx!');
define('LOGGED_IN_KEY',    '89c=y`<aPxr@agSkb/;uC3,,SMf{yOc<&O~{s@jqy2)Za%IR2##H/yP(7)ym^b!O');
define('NONCE_KEY',        'djk>^a+0,P(&3FT}] h,H.rZGvn)7!SX6QES!NOih^zJ!xD.|6(f+GYZ%U(byhMN');
define('AUTH_SALT',        'w6H!uAW~H`8bu>s40{=t%c:9i2-4D*!~sGDdB#UBSj5f;9UsCRSVOr.tl/U,^N{8');
define('SECURE_AUTH_SALT', ')?af)YO4~`?TctS<oGv?RK2z|DnlYh8x?0$;y(B7%VG+ fev>ch;2a*!a7=1{oDx');
define('LOGGED_IN_SALT',   '{k:0?}*VZ<ly+d)j{wWdgNO[.Y^#6/|-+,yy1aKvT$NZ+a1Z;W F^*U]dT(S>UMz');
define('NONCE_SALT',       'pP[HC!AM4q|5bde0N@p2-sL<knnaZ8yt.DR2MpN<Fav[Md@Uqj@,Tmf!i&lfK!DI');

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
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
