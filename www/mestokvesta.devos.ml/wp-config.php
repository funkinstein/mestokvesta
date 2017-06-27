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
define('DB_NAME', 'p418866_mkvest');

/** Имя пользователя MySQL */
define('DB_USER', 'p418866_mkvest');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'wolflow3511');

/** Имя сервера MySQL */
define('DB_HOST', 'p418866.mysql.ihc.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&kSQtdPXNCR@`wj%;YXEl]z4fH31oB<3>2b~dEASTNw y%uYLZ {sMSBIvb%|4S_');
define('SECURE_AUTH_KEY',  '}s9[8IwFrL[PkfbMC+wf/(KX^:5=If|GVyvwGT|h[ IOWj+R=@Wv$HQ6ni9pxxXA');
define('LOGGED_IN_KEY',    'dkaFCDW#B6`BXB/p4/5P2,Pw7TF8~k2[(V`_1z?^Q^&TcY3_:[DX&+e)Y&]c5wUq');
define('NONCE_KEY',        'KO?#]_v~~C(~tv-IO#r%B=~dHSs~iU=:xT4q&Q*]7CcD-LqT7jA-tf~ gLzU2f)k');
define('AUTH_SALT',        'F>k]RVU?V+N&ENB,B8@J3a_mQQ}k(ANblHcoH4OEADs.-DZV #RJy=8^xe^EKYPu');
define('SECURE_AUTH_SALT', '%gX!P<@b]$sl^kSBh i{/j5`l_alnMA;O}4p)q,kzQ8 ~I[uDU~OPBo3Ch8Qwfgi');
define('LOGGED_IN_SALT',   '|A-2%oSKZZvhose!kTq?[*TyFCKxf%t#MkTmoLUDM*Yuo0-R7D^M4 vitUz?34(Y');
define('NONCE_SALT',       'eM#.^rKB[C,Aoj2b;Mo[xOmmG8eLhdhUo+IVAjLq%+`s(U3F$B,TG6JITq$]$w>j');

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
