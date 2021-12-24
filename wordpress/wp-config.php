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
define( 'DB_NAME', 'paterochka' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         'mT-MWKY=AS@Eyd15Or2)||&h3MnbuS!Yngm2E6.-<=Nm8,SM#Dcy_QPAO>dbatyo' );
define( 'SECURE_AUTH_KEY',  '8v<,NK`ql3^j>?} x<Z> 2aw:US^Q~U(0 J-Ox;h@$%}A}`T]<t%j;+r[oq.j(xN' );
define( 'LOGGED_IN_KEY',    'k4(<P1t>>KQuyWC-LE|kBr-@V(/Jr+XIK)}w+c5^,Xfb#3Xw^;1a*ssY`(LY@T4h' );
define( 'NONCE_KEY',        '1L3JaHKH)IlU,-F7@z-{qZc{=Y(c.K,6SNuZ8#$ao~A+9+]-Y$1ZJ:)34.aRE@(c' );
define( 'AUTH_SALT',        '7hPv?~ qTUbqXvuwhZ4@^{?Ul Y$4@`IIvGD!vu=II7I_/#B%Fk~w|yty>]*}n%x' );
define( 'SECURE_AUTH_SALT', 'D:niFp]CBGXsZ;j`T-ancJhEG..-vI +H]pb>9X6`DXHQU+A@l|Yxy) 3^;t6FNt' );
define( 'LOGGED_IN_SALT',   'ZP^&,:Dnoc3HUkQ#q&Rj)6+F+,pW9%qol)*{1::={~WKep^[(wtS;l5cE#EsW|Ui' );
define( 'NONCE_SALT',       '855={L0_VIW$no @-9nz9)9[d*@U7Lml_HC]P$LlsfY7h/p4$S>aSqg_cFZ3kK~2' );

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
