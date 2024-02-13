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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'new-shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'goe^z?`U#K^jS+ j`}3W%QjnENiN}6nyU0r9AnUPj?#e,;IYY8:9y`3FT@&$l02$' );
define( 'SECURE_AUTH_KEY',  'X^=XYz4Urf_]2FpZ6y[%4-=0KzpAZ0ye(}l],3|*I[,!1JDGS;Si!LPOn;{XrKz4' );
define( 'LOGGED_IN_KEY',    'hB3:~/yZWG:`JXiju^,$=3J`e&Gj/k8V@1,jX%0&d[nO>4O2$b/i^D0-~YFRQH8p' );
define( 'NONCE_KEY',        ')6(zzyi(hOjn!P=^+e<(C=!Rs%_O-_|wBEwwn5arVY?/q2{cSuc/xX7$sXY8YXl!' );
define( 'AUTH_SALT',        ')#+I#=M{l5[ihXJoOyq$r4VwAqnyqIY&&87h8Oi}Ph6@ii!E?Rx.()~{Q8ytN]$O' );
define( 'SECURE_AUTH_SALT', 'Gtb5~hW1RS0zgRA?NT4rHa8DfhWo4C7/7B)6Sr^PQp@ejhnr2?D)RxXP_XLyyoj@' );
define( 'LOGGED_IN_SALT',   ';j1< :_.v8dL>uY#p?NAQC3~M: FtK+O4d}qwUBDqD]#8mgT.RrOX#A-c?Z >R@-' );
define( 'NONCE_SALT',       '8E]9QC&plk)Xo*jSu[]IP`EZ.T(#eCglesXG]H|8Dn{<_Ec~Sb(X9]U>Wu-{$+,6' );

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
