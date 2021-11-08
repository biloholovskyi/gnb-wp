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
define( 'DB_NAME', 'gnb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'HDgxdB&c..yi bjQ^keD(Pj2IzzTm+nMQyV+}oMx~88n,RWFR|@e|s+f@Lk-Q$^C' );
define( 'SECURE_AUTH_KEY',  'r,]Mm(*(u-c1h?ver^wiBvOl/eSp!$@U+gO9& dq{>]{Z+F[9c&=n?~bVfDfgzk;' );
define( 'LOGGED_IN_KEY',    'Mk4Bs_hd~+aQ><Sw:bqF1B/P kJ2D=e^!yeBOWqv0~WW@p!E6@+!<~`.Mv :5gMr' );
define( 'NONCE_KEY',        '({7]T]5?}avr1I 2[uCn{g|T!bXv`hj^_gz~L+k8I@Xq>oZ;z@9`/m6fbj@.V4{R' );
define( 'AUTH_SALT',        '>ay-d_.BCWmM4MFsx^-z{QOUjr~Rfp~ 9(LuLJ-`t1 Bk8_(Sd%A6QFO1n|S)AAj' );
define( 'SECURE_AUTH_SALT', 'P%0H*:qCcq*koYI>z;wr@DA3K(>xloN3MT!ErI/Uri2Sf18PlQX[<q1R.,n1/ud7' );
define( 'LOGGED_IN_SALT',   '!MZi_CUyqWu1!N&1~_L9lgzWaliKPf?[g<?|1u</w%b)d@$8t7`URAC=&gh?K@+2' );
define( 'NONCE_SALT',       'Kx&gWcS+/(6^U L L,5EToz?-i21 {X%/i:qdhT%~hSWXgM=d=$e;A+pA~=Nu4vt' );

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
