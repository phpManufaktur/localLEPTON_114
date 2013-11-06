<?php

/**
 * This file is part of LEPTON Core, released under the GNU GPL
 * Please see LICENSE and COPYING files in your package for details, specially for terms and warranties.
 * 
 * NOTICE:LEPTON CMS Package has several different licenses.
 * Please see the individual license in the header of each single file or info.php of modules and templates.
 *
 * @author          Website Baker Project, LEPTON Project
 * @copyright       2004-2010, Website Baker Project
 * @copyright       2010-2011, LEPTON Project
 * @link            http://www.LEPTON-cms.org
 * @license         http://www.gnu.org/licenses/gpl.html
 * @license_terms   please see LICENSE and COPYING files in your package
 * @version         $Id: RU.php 1586 2012-01-03 09:49:34Z erpe $
 *
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {	
	include(WB_PATH.'/framework/class.secure.php'); 
} elseif (file_exists($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php')) {
	include($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php'); 
} else {
	$subs = explode('/', dirname($_SERVER['SCRIPT_NAME']));	$dir = $_SERVER['DOCUMENT_ROOT'];
	$inc = false;
	foreach ($subs as $sub) {
		if (empty($sub)) continue; $dir .= '/'.$sub;
		if (file_exists($dir.'/framework/class.secure.php')) { 
			include($dir.'/framework/class.secure.php'); $inc = true;	break; 
		} 
	}
	if (!$inc) trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
}
// end include class.secure.php

// Define that this file is loaded
if(!defined('LANGUAGE_LOADED')) {
	define('LANGUAGE_LOADED', true);
}

// Set the language information
$language_code = 'RU';
$language_name = 'Russian';
$language_version = '1.0';
$language_platform = '1.0.x';
$language_author = 'konstantinmsk';
$language_license = 'GNU General Public License';
$language_guid = '38748A1C-C86D-4B8A-8793-2796ED4CB282';

$MENU = array(

	'ACCESS' 				=> 'Доступ',
	'ADDON' 				=> 'Добавление',
	'ADDONS' 				=> 'Добавления',
	'ADMINTOOLS' 			=> 'Инструменты администрирования',
	'BREADCRUMB' 			=> 'Вы находитесь здесь: ',
	'FORGOT' 				=> 'Восстановление данных для входа',
	'GROUP' 				=> 'Группа',
	'GROUPS' 				=> 'Группы',
	'HELP' 					=> 'Помощь',
	'LANGUAGES' 			=> 'Языки',
	'LOGIN' 				=> 'Вход',
	'LOGOUT' 				=> 'Выход',
	'MEDIA' 				=> 'Медиа',
	'MODULES' 				=> 'Модули',
	'PAGES' 				=> 'Страницы',
	'PREFERENCES' 			=> 'Предпочтения',
	'SETTINGS' 				=> 'Настройки',
	'START' 				=> 'Старт',
	'TEMPLATES' 			=> 'Шаблоны',
	'USERS' 				=> 'Пользователи',
	'VIEW' 					=> 'Вид',
	'SERVICE'				=> 'Сервис'
); // $MENU

$TEXT = array(
	'ACCOUNT_SIGNUP' 		=> 'Регистрация',
	'ACTION_NOT_SUPPORTED'	=> 'Действие невозможно',
	'ACTIONS' 				=> 'Действия',
	'ACTIVE' 				=> 'Актив',
	'ADD' 					=> 'Добавить',
	'ADDON' 				=> 'Добавление',
	'ADD_SECTION' 			=> 'Добавить раздел',
	'ADMIN' 				=> 'Админ',
	'ADMINISTRATION' 		=> 'Администрирование',
	'ADMINISTRATION_TOOL' 	=> 'Инструмент администрирования',
	'ADMINISTRATOR' 		=> 'Администратор',
	'ADMINISTRATORS' 		=> 'Администраторы',
	'ADVANCED' 				=> 'Расширенный',
	'ALLOWED_FILETYPES_ON_UPLOAD' => 'Разрешенные типы файлов для загрузки',
	'ALLOWED_VIEWERS' 		=> 'Разрешить просмотр для:',
	'ALLOW_MULTIPLE_SELECTIONS' => 'Разрешить множественный выбор',
	'ALL_WORDS' 			=> 'Все слова',
	'ANCHOR' 				=> 'Якорь',
	'ANONYMOUS' 			=> 'Аноним',
	'ANY_WORDS' 			=> 'Любые слова',
	'APP_NAME' 				=> 'Название приложения',
	'ARE_YOU_SURE' 			=> 'Вы уверены?',
	'AUTHOR' 				=> 'Автор',
	'BACK' 					=> 'Назад',
	'BACKUP' 				=> 'Бэкап',
	'BACKUP_ALL_TABLES' 	=> 'Бэкап всех таблиц в БД',
	'BACKUP_DATABASE' 		=> 'Бэкап БД',
	'BACKUP_MEDIA' 			=> 'Бэкап медиаконтента',
	'BACKUP_WB_SPECIFIC' 	=> 'Бэкап только программных таблиц БД',
	'BASIC' 				=> 'Базовый',
	'BLOCK' 				=> 'Блок',
	'CALENDAR' 				=> 'Календарь',
	'CANCEL' 				=> 'Отмена',
	'CAN_DELETE_HIMSELF' 	=> 'Может удалить себя',
	'CAPTCHA_VERIFICATION' 	=> 'Проверка Captcha',
	'CAP_EDIT_CSS' 			=> 'Редактировать CSS',
	'CHANGE' 				=> 'Изменение',
	'CHANGES' 				=> 'Изменения',
	'CHANGE_SETTINGS' 		=> 'Изменение настроек',
	'CHARSET' 				=> 'Кодировка',
	'CHECKBOX_GROUP' 		=> 'Checkbox Group',
	'CLOSE' 				=> 'Закрыть',
	'CODE' 					=> 'Код',
	'CODE_SNIPPET' 			=> 'Сниппет кода',
	'COLLAPSE' 				=> 'Collapse',
	'COMMENT' 				=> 'Комментарий',
	'COMMENTING' 			=> 'Комментирование',
	'COMMENTS' 				=> 'Комментарии',
	'CREATE_FOLDER' 		=> 'Создать папку',
	'CURRENT' 				=> 'Текущий',
	'CURRENT_FOLDER' 		=> 'Текущая папка',
	'CURRENT_PAGE' 			=> 'Текущая страница',
	'CURRENT_PASSWORD' 		=> 'Текущий пароль',
	'CUSTOM' 				=> 'Настраиваемый',
	'DATABASE' 				=> 'База данных (БД)',
	'DATE' 					=> 'Дата',
	'DATE_FORMAT' 			=> 'Формат даты',
	'DEFAULT' 				=> 'По умолчанию',
	'DEFAULT_CHARSET' 		=> 'Кодировка по умолчанию',
	'DEFAULT_TEXT' 			=> 'Текст по умолчанию',
	'DELETE' 				=> 'Удалить',
	'DELETED' 				=> 'Удалено',
	'DELETE_DATE' 			=> 'Удалить дату',
	'DELETE_ZIP' 			=> 'Удалить zip-архив после распаковки',
	'DESCRIPTION' 			=> 'Описание',
	'DESIGNED_FOR' 			=> 'Designed For',
	'DIRECTORIES' 			=> 'Директории',
	'DIRECTORY_MODE' 		=> 'Режим директории',
	'DISABLED' 				=> 'Отключено',
	'DISPLAY_NAME' 			=> 'Показать имя',
	'EMAIL' 				=> 'Email',
	'EMAIL_ADDRESS' 		=> 'Email адрес',
	'EMPTY_TRASH' 			=> 'Очистить корзину',
	'ENABLE_JAVASCRIPT'		=> "Включите JavaScript для использования",
	'ENABLED' 				=> 'Включено',
	'END' 					=> 'Конец',
	'ERROR' 				=> 'Ошибка',
	'EXACT_MATCH' 			=> 'Точное соответствие',
	'EXECUTE' 				=> 'Выполнить',
	'EXPAND' 				=> 'Расширить',
	'EXTENSION' 			=> 'Расширение',
	'FIELD' 				=> 'Поле',
	'FILE' 					=> 'Файл',
	'FILES' 				=> 'Файлы',
	'FILESYSTEM_PERMISSIONS' => 'Разрешения файловой системы',
	'FILE_MODE' 			=> 'Режим файла',
	'FINISH_PUBLISHING' 	=> 'Закончить публикацию',
	'FOLDER' 				=> 'Папка',
	'FOLDERS' 				=> 'Папки',
	'FOOTER' 				=> 'Footer/Подвал',
	'FORGOTTEN_DETAILS' 	=> 'Забыли свои данные?',
	'FORGOT_DETAILS' 		=> 'Забыли данные?',
	'FROM' 					=> 'От',
	'FRONTEND' 				=> 'Front-end/Открытая часть сайта',
	'FULL_NAME' 			=> 'Полное имя',
	'FUNCTION' 				=> 'Функция',
	'GROUP' 				=> 'Группа',
	'HEADER' 				=> 'Header/Шапка',
	'HEADING' 				=> 'Заголовок/Heading',
	'HEADING_CSS_FILE' 		=> 'Файл текущего модуля: ',
	'HEIGHT' 				=> 'Высота',
	'HELP_LEPTOKEN_LIFETIME'		=> 'секунд, 0 означает отсутствие CSRF защиты!',
	'HELP_MAX_ATTEMPTS'		=> 'По достижении этого количества попыток, вход в данной сессиии невозможен.',
	'HIDDEN' 				=> 'Скрытый',
	'HIDE' 					=> 'Скрыть',
	'HIDE_ADVANCED' 		=> 'Скрыть дополнительный возможности',
	'HOME' 					=> 'Домой',
	'HOMEPAGE_REDIRECTION' 	=> 'Перенаправление домашней страницы',
	'HOME_FOLDER' 			=> 'Личная папка',
	'HOME_FOLDERS' 			=> 'Личные папки',
	'HOST' 					=> 'Хост',
	'ICON' 					=> 'Иконка',
	'IMAGE' 				=> 'Изображение',
	'INLINE' 				=> 'In-line',
	'INSTALL' 				=> 'Установить',
	'INSTALLATION' 			=> 'Установка',
	'INSTALLATION_PATH' 	=> 'Место установки',
	'INSTALLATION_URL' 		=> 'URL установки',
	'INSTALLED' 			=> 'Установлено',
	'INTRO' 				=> 'Заставка',
	'INTRO_PAGE' 			=> 'Заставка сайта',
	'INVALID_SIGNS' 		=> 'начинается не с буквы, либо использованы недопустимые символы',
	'KEYWORDS' 				=> 'Keywords/Ключевые слова',
	'LANGUAGE' 				=> 'Язык',
	'LAST_UPDATED_BY' 		=> 'Последнее обновление',
	'LENGTH' 				=> 'Длина',
	'LEPTOKEN_LIFETIME'		=> 'Срок действия авторизации пользователя',
	'LEVEL' 				=> 'Уровень',
	'LIBRARY'				=> 'Библиотека',
	'LICENSE'				=> 'Лицензия',
	'LINK' 					=> 'Ссылка',
	'LINUX_UNIX_BASED' 		=> 'Linux/Unix',
	'LIST_OPTIONS' 			=> 'Список опций',
	'LOGGED_IN' 			=> 'Вход выполнен',
	'LOGIN' 				=> 'Вход',
	'LONG' 					=> 'Длинный',
	'LONG_TEXT' 			=> 'Длинный текст',
	'LOOP' 					=> 'Loop/Петля',
	'MAIN' 					=> 'Главная',
	'MANAGE' 				=> 'Управление',
	'MANAGE_GROUPS' 		=> 'Управление группами',
	'MANAGE_USERS' 			=> 'Управление пользователями',
	'MATCH' 				=> 'Соответствует',
	'MATCHING' 				=> 'Соответствиing',
	'MAX_ATTEMPTS'		=> 'Допустимо неудачных попыток входа',
	'MAX_EXCERPT' 			=> 'Максимум строк выборки',
	'MAX_SUBMISSIONS_PER_HOUR' => 'Max. Submissions Per Hour',
	'MEDIA_DIRECTORY' 		=> 'Директоия медиаконтента',
	'MENU' 					=> 'Меню',
	'MENU_ICON_0' 			=> 'Обычные иконки меню',
	'MENU_ICON_1' 			=> 'Иконки меню hover',
	'MENU_TITLE' 			=> 'Заголовок меню',
	'MESSAGE' 				=> 'Сообщение',
	'MODIFY' 				=> 'Изменение',
	'MODIFY_CONTENT' 		=> 'Изменение содержания',
	'MODIFY_SETTINGS' 		=> 'Изменение настроек',
	'MODULE_ORDER' 			=> 'Заказ модуля поиска',
	'MODULE_PERMISSIONS' 	=> 'Разрешения для модуля',
	'MORE' 					=> 'Больше/Далее',
	'MOVE_DOWN' 			=> 'Двигать вниз',
	'MOVE_UP' 				=> 'Двигать вверх',
	'MULTIPLE_MENUS' 		=> 'Множественные меню',
	'MULTISELECT' 			=> 'Мультивыбор',
	'NAME' 					=> 'Имя',
	'NEED_CURRENT_PASSWORD' => 'подтвердить действующим пародем',
	'NEED_PASSWORD_TO_CONFIRM' => 'Подтвердите изменения действующим паролем',
	'NEED_TO_LOGIN' 		=> 'Нужно войти?',
	'NEW_PASSWORD' 			=> 'Новый пароль',
	'NEW_USER_HINT'			=> 'Минимальная длина ника: %d знаков, Минимальная длина пароля: %d знаков!',
	'NEW_WINDOW' 			=> 'Новое окно',
	'NEXT' 					=> 'Следующее',
	'NEXT_PAGE' 			=> 'Следующая страница',
	'NO' 					=> 'Нет',
	'NO_LEPTON_ADDON'  => 'Это добавление нвозможно использовать в LEPTON',    
	'NONE' 					=> 'Ничего',
	'NONE_FOUND' 			=> 'Ничего не найдено',
	'NOT_FOUND' 			=> 'Не найдено',
	'NOT_INSTALLED' 		=> 'Не установлено',
	'NO_RESULTS' 			=> 'Нет результатов',
	'OF' 					=> 'Of/из',
	'ON' 					=> 'On/на',
	'OPEN' 					=> 'Открыть',
	'OPTION' 				=> 'Опция',
	'OTHERS' 				=> 'Прочее',
	'OUT_OF' 				=> 'Out Of/из',
	'OVERWRITE_EXISTING' 	=> 'Перезаписать',
	'PAGE' 					=> 'Страница',
	'PAGES_DIRECTORY' 		=> 'Директория страниц',
	'PAGES_PERMISSION' 		=> 'Разрешение для страниц',
	'PAGES_PERMISSIONS' 	=> 'Разрешения для страниц',
	'PAGE_EXTENSION' 		=> 'Расширение страницы',
	'PAGE_ICON' 			=> 'Иконка страницы',
	'PAGE_ID'      => 'ID страницы',
	'PAGE_LANGUAGES' 		=> 'Язык страницы',
	'PAGE_LEVEL_LIMIT' 		=> 'Ограничение уровня страницы',
	'PAGE_SPACER' 			=> 'Разделитель страницы',
	'PAGE_TITLE' 			=> 'Заголовок страницы',
	'PAGE_TRASH' 			=> 'Корзина страницы',
	'PARENT' 				=> 'Родительская',
	'PASSWORD' 				=> 'Пароль',
	'PATH' 					=> 'Path/размещение',
	'PHP_ERROR_LEVEL' 		=> 'Уровень сообщений об ошибках PHP',
	'PLEASE_LOGIN' 			=> 'Войдите, пожалуйста',
	'PLEASE_SELECT' 		=> 'Выберите, пожалуйста',
	'POST' 					=> 'Пост',
	'POSTS_PER_PAGE' 		=> 'Постов на страницу',
	'POST_FOOTER' 			=> 'Подвал поста/Footer',
	'POST_HEADER' 			=> 'Шапка поста/Header',
	'PREVIOUS' 				=> 'Предыдущая',
	'PREVIOUS_PAGE' 		=> 'Предыдущая страница',
	'PRIVATE' 				=> 'Личная',
	'PRIVATE_VIEWERS' 		=> 'Просмотр личного раздела для:',
	'PROFILES_EDIT' 		=> 'Изменить профиль',
	'PUBLIC' 				=> 'Публичный',
	'PUBL_END_DATE' 		=> 'Дата окончания',
	'PUBL_START_DATE' 		=> 'Дата начала',
	'RADIO_BUTTON_GROUP' 	=> 'Radio Button Group',
	'READ' 					=> 'Читать',
	'READ_MORE' 			=> 'Читать далее',
	'REDIRECT_AFTER' 		=> 'Перенаправление после',
	'REGISTERED' 			=> 'Зарегистрировано',
	'REGISTERED_VIEWERS' 	=> 'Зарегистрировано посетителей',
	'REGISTERED_CONTENT'	=> 'Доступ только для зарегистрированных посетителей.',
	'RELOAD' 				=> 'Перезагрузка',
	'REMEMBER_ME' 			=> 'Запомнить меня',
	'RENAME' 				=> 'Переименовать',
	'RENAME_FILES_ON_UPLOAD' => 'Переименовать файлы при загрузке',
	'REQUIRED' 				=> 'Необходимо',
	'REQUIREMENT' 			=> 'Требование',
	'RESET' 				=> 'Пекрезагрузить',
	'RESIZE' 				=> 'RИзменить размер',
	'RESIZE_IMAGE_TO' 		=> 'Изменить размер картинки на',
	'RESTORE' 				=> 'Восстановить',
	'RESTORE_DATABASE' 		=> 'Восстановить БД',
	'RESTORE_MEDIA' 		=> 'Восстановить медиаконтент',
	'RESULTS' 				=> 'Результаты',
	'RESULTS_FOOTER' 		=> 'Результаты Footer',
	'RESULTS_FOR' 			=> 'Результаты для',
	'RESULTS_HEADER' 		=> 'Результаты Header',
	'RESULTS_LOOP' 			=> 'Результаты Loop',
	'RETYPE_NEW_PASSWORD' 	=> 'Повторите новый пароль',
	'RETYPE_PASSWORD' 		=> 'Повторите пароль',
	'SAME_WINDOW' 			=> 'То же окно',
	'SAVE' 					=> 'Сохранить',
	'SEARCH' 				=> 'Поиск',
	'SEARCH_FOR'  => 'Искать',
	'SEARCHING' 			=> 'Идет поиск',
	'SECTION' 				=> 'Раздел',
	'SECTION_BLOCKS' 		=> 'Блоки раздела',
	'SECTION_ID' => 'ID раздела',
	'SEC_ANCHOR' 			=> 'Текст якорной секции',
	'SELECT_BOX' 			=> 'Select Box',
	'SEND_DETAILS' 			=> 'Отправить подробности',
	'SEPARATE' 				=> 'Разделить',
	'SEPERATOR' 			=> 'Разделитель',
	'SERVER_EMAIL' 			=> 'Email сервера',
	'SERVER_OPERATING_SYSTEM' => 'ОС сервера',
	'SESSION_IDENTIFIER' 	=> 'Идентификатор сессии',
	'SETTINGS' 				=> 'Настройки',
	'SHORT' 				=> 'Кратко',
	'SHORT_TEXT' 			=> 'Краткий текст',
	'SHOW' 					=> 'Показать',
	'SHOW_ADVANCED' 		=> 'Показать расширенные возможности',
	'SIGNUP' 				=> 'Подписка',
	'SIZE' 					=> 'Размер',
	'SMART_LOGIN' 			=> 'Умный вход',
	'START' 				=> 'Старт',
	'START_PUBLISHING' 		=> 'Начать публикацию',
	'SUBJECT' 				=> 'Тема',
	'SUBMISSIONS' 			=> 'Submissions',
	'SUBMISSIONS_STORED_IN_DATABASE' => 'Submissions Stored In Database',
	'SUBMISSION_ID' 		=> 'Submission ID',
	'SUBMITTED' 			=> 'Подтвеждено',
	'SUCCESS' 				=> 'Успешно',
	'SYSTEM_DEFAULT' 		=> 'Начальные настройки',
	'SYSTEM_PERMISSIONS' 	=> 'Системные разрешения',
	'TABLE_PREFIX' 			=> 'Префикс таблиц',
	'TARGET' 				=> 'Цель',
	'TARGET_FOLDER' 		=> 'Целевая папка',
	'TEMPLATE' 				=> 'Шаблон',
	'TEMPLATE_PERMISSIONS' 	=> 'Разрешения шаблона',
	'TEXT' 					=> 'Текст',
	'TEXTAREA' 				=> 'Текстовая область',
	'TEXTFIELD' 			=> 'Тесктовое поле',
	'THEME' 				=> 'Тема для администрирования',
	'TIME' 					=> 'Время',
	'TIMEZONE' 				=> 'Часовой пояс',
	'TIME_FORMAT' 			=> 'Формат времени',
	'TIME_LIMIT' 			=> 'Максимальное время подбора данных для модуля',
	'TITLE' 				=> 'Заголовок',
	'TO' 					=> 'В/На',
	'TOP_FRAME' 			=> 'Верхний фрейм',
	'TRASH_EMPTIED' 		=> 'Корзина очищена',
	'TXT_EDIT_CSS_FILE' 	=> 'Редактируйте CSS в тестовой области ниже.',
	'TYPE' 					=> 'Тип',
	'UNDER_CONSTRUCTION' 	=> 'В разработке',
	'UNINSTALL' 			=> 'Удалить',
	'UNKNOWN' 				=> 'Неизвестно',
	'UNLIMITED' 			=> 'Неограничено',
	'UNZIP_FILE' 			=> 'Загрузить и распаковать zip-архив',
	'UP' 					=> 'Выше',
	'UPGRADE' 				=> 'Обновление',
	'UPLOAD_FILES' 			=> 'Загрузка файла(ов)',
	'URL' 					=> 'URL',
	'USER' 					=> 'Пользователь',
	'USERNAME' 				=> 'Имя пользователя',
	'USERS_ACTIVE' 			=> 'Пользователь отмечен как активный',
	'USERS_CAN_SELFDELETE' 	=> 'Пользователь может удалить себя',
	'USERS_CHANGE_SETTINGS' => 'Пользователь может менять свои настройки',
	'USERS_DELETED' 		=> 'Пользователь отмечен как удаленный',
	'USERS_FLAGS' 			=> 'Флаги пользователя',
	'USERS_PROFILE_ALLOWED' => 'Пользователь мошет создать расширенный профиль',
	'VERIFICATION' 			=> 'Верификация',
	'VERSION' 				=> 'Версия',
	'VIEW' 					=> 'Просмотр',
	'VIEW_DELETED_PAGES' 	=> 'Просмотр удаленных страниц',
	'VIEW_DETAILS' 			=> 'Просмотр деталей',
	'VISIBILITY' 			=> 'Видимость',
	'WBMAILER_DEFAULT_SENDER_MAIL' => 'Адрес почты по умолчанию',
	'WBMAILER_DEFAULT_SENDER_NAME' => 'Имя отправителя',
	'WBMAILER_DEFAULT_SETTINGS_NOTICE' => 'Рекомендуем указать адрес почты по умолчанию в формате pupkin@vashdomen.com, т.к. некоторые провайдеры почтовых услуг в целях борьбы со спамом не принимают почтовые сообщения сторонних почтовых сервисов (mail.ru, ya.ru и т.д.), отправленных через чужой сервер. Адрес и имя по умолчанию используются только если CMS не предусмотрено дополнительное заполнение данных полей.',
	'WBMAILER_FUNCTION' 	=> 'Стандартная почта (routine)',
	'WBMAILER_NOTICE' 		=> '<strong>Настройки SMTP:</strong><br />Необходимо заполять только если Вы используете<acronym title="Simple mail transfer protocol">SMTP</acronym>. Если Вы не знакомы с настройками или не уверены необходимости их изменения используйте стнадартную настройку: PHP MAIL.',
	'WBMAILER_PHP' 			=> 'PHP MAIL',
	'WBMAILER_SEND_TESTMAIL' => 'Отправить тестовый email',
	'WBMAILER_SMTP' 		=> 'SMTP',
	'WBMAILER_SMTP_AUTH' 	=> 'SMTP Аутентификация',
	'WBMAILER_SMTP_AUTH_NOTICE' => 'активируйте только если Ваш SMTP хост требует аутентификации',
	'WBMAILER_SMTP_HOST' 	=> 'SMTP хост',
	'WBMAILER_SMTP_PASSWORD' => 'SMTP пароль',
	'WBMAILER_SMTP_USERNAME' => 'SMTP имя пользователя',
	'WBMAILER_TESTMAIL_FAILED' => 'Тестовый   email не может быть отправлен! Проверьте настройки!',
	'WBMAILER_TESTMAIL_SUCCESS' => 'Тестовый email успешно отправлен. Проверьте почтовый ящик.',
	'WBMAILER_TESTMAIL_TEXT' => 'Это тестовый email: php mailer работает',
	'WEBSITE' 				=> 'Сайт',
	'WEBSITE_DESCRIPTION' 	=> 'Описание сайта',
	'WEBSITE_FOOTER' 		=> 'Подвал сайта (Footer)',
	'WEBSITE_HEADER' 		=> 'Шапка сайта (Header)',
	'WEBSITE_KEYWORDS' 		=> 'Ключевые слова сайта',
	'WEBSITE_TITLE' 		=> 'Заголовок сайта',
	'WELCOME_BACK' 			=> 'С возвращением!',
	'WIDTH' 				=> 'Ширина',
	'WINDOW' 				=> 'Окно',
	'WINDOWS' 				=> 'Windows',
	'WORLD_WRITEABLE_FILE_PERMISSIONS' => 'Разрешения файла для общей записи',
	'WRITE' 				=> 'Запись',
	'WYSIWYG_EDITOR' 		=> 'WYSIWYG редактор',
	'WYSIWYG_STYLE'	 		=> 'WYSIWYG стиль',
	'YES' 					=> 'Да',
	'BASICS'	=> array(
		'day'		=> "день",		# day, singular
		'day_pl'	=> "дня(дней)",		# day, plural
		'hour'		=> "ч.", 		# hour, singular
		'hour_pl'	=> "ч.",		# hour, plural
		'minute'	=> "мин.",	# minute, singular
		'minute_pl'	=> "мин.",	# minute, plural
	)
); // $TEXT

$HEADING = array(
	'ADDON_PRECHECK_FAILED' => 'Добавление не соответствует требованиям',
	'ADD_CHILD_PAGE' 		=> 'Добавить дочернюю страницу',
	'ADD_GROUP' 			=> 'Добавить группу',
	'ADD_GROUPS' 			=> 'Добавить группы',
	'ADD_HEADING' 			=> 'Добавить шапку (heading)',
	'ADD_PAGE' 				=> 'Добавить страницу',
	'ADD_USER' 				=> 'Добавить пользователя',
	'ADMINISTRATION_TOOLS' 	=> 'Инструменты администрирования',
	'BROWSE_MEDIA' 			=> 'Просмотр медиаконтента',
	'CREATE_FOLDER' 		=> 'Создать папку',
	'DEFAULT_SETTINGS' 		=> 'Настройки по умолчанию',
	'DELETED_PAGES' 		=> 'Удаленные страницы',
	'FILESYSTEM_SETTINGS' 	=> 'Настройки файловой системы',
	'GENERAL_SETTINGS' 		=> 'Основные настройки',
	'INSTALL_LANGUAGE' 		=> 'Установка языка',
	'INSTALL_MODULE' 		=> 'Установка модуля',
	'INSTALL_TEMPLATE' 		=> 'Установка шаблона',
	'INVOKE_MODULE_FILES' 	=> 'Исполнение файлов модуля в ручном режиме',
	'LANGUAGE_DETAILS' 		=> 'Детали языка',
	'MANAGE_SECTIONS' 		=> 'Управление секторами',
	'MODIFY_ADVANCED_PAGE_SETTINGS' => 'Изменение расширенных настроек страницы',
	'MODIFY_DELETE_GROUP' 	=> 'Изменение/удаление группы',
	'MODIFY_DELETE_PAGE' 	=> 'Изменение/удаление страницы',
	'MODIFY_DELETE_USER' 	=> 'Изменение/удаление пользователя',
	'MODIFY_GROUP' 			=> 'Изменение группы',
	'MODIFY_GROUPS' 		=> 'Изменение группы',
	'MODIFY_INTRO_PAGE' 	=> 'Изменение заставки сайта',
	'MODIFY_PAGE' 			=> 'Изменение страницы',
	'MODIFY_PAGE_SETTINGS' 	=> 'Изменение настроек страницы',
	'MODIFY_USER' 			=> 'Изменение пользователя',
	'MODULE_DETAILS' 		=> 'Подробности о модуле',
	'MY_EMAIL' 				=> 'Мой email',
	'MY_PASSWORD' 			=> 'Мой пароль',
	'MY_SETTINGS' 			=> 'Мои настройки',
	'SEARCH_SETTINGS' 		=> 'Настройки поиска',
	'SECURITY_SETTINGS'		=> 'Настройки безопасности',
	'SERVER_SETTINGS' 		=> 'Настройки сервера',
	'TEMPLATE_DETAILS' 		=> 'Подробности о шаблоне',
	'UNINSTALL_LANGUAGE' 	=> 'Удалить язык',
	'UNINSTALL_MODULE' 		=> 'Удалить модуль',
	'UNINSTALL_TEMPLATE' 	=> 'Удалить шаблон',
	'UPGRADE_LANGUAGE' 		=> 'Регистрация/обновление языка',
	'UPLOAD_FILES' 			=> 'Закачать файл(ы)',
	'VISIBILITY' 			=> 'Видимость',
	'WBMAILER_SETTINGS' 	=> 'Настройки почтовой программы'
); // $HEADING

$MESSAGE = array(
	'ADDON_ERROR_RELOAD' 	=> 'Ошибка при обновлении информации о дополнении.',
	'ADDON_GROUPS_MARKALL' => 'Отметить все/снять отметки',
	'ADDON_LANGUAGES_RELOADED' => 'Языки успешно перезагружены',
	'ADDON_MANUAL_FTP_LANGUAGE' => '<strong>Внимание!</strong> Закачка файлов в папку folder/languages/ только по FTP. Для регистрации или обновления используйте функцию Обновление.',
	'ADDON_MANUAL_FTP_WARNING' => 'Внимание! Все записи в БД будут утеряны.',
	'ADDON_MANUAL_INSTALLATION' => 'При загрузке модулей по FTP (не рекомендуется), установочные функции модуля: <tt>установка</tt>, <tt>обновление</tt> или <tt>удаление</tt> не будут осуществляться в автоматическом режиме. Такие модули могут работать некорректно и оставлять следы после уничтожения.<br /><br />Вы можете запустить указанные функции вручную ниже.',
	'ADDON_MANUAL_INSTALLATION_WARNING' => 'Внимание! Существующие записи модуля в ДБ будут утеряны. Используйте эту опцию только при возникновении проблем с модулями, закаченными по FTP.',
	'ADDON_MANUAL_RELOAD_WARNING' => 'Внимание! Существующие записи модуля в ДБ будут утеряны. ',
	'ADDON_MODULES_RELOADED' => 'Модули перезагружены успешно.',
	'ADDON_PRECHECK_FAILED' => 'Установка добавления не состоялась. Ваша система не полностью удовлетворяет требованиям этого добавления. Для корректной работы модуля устраните следующие замечания:',
	'ADDON_RELOAD' 			=> 'Обновление ДБ после изменения добавлений (например после закачки по FTP).',
	'ADDON_TEMPLATES_RELOADED' => 'Шаблоны перезагружены успешно',
	'ADMIN_INSUFFICIENT_PRIVELLIGES' => 'Недостаточно прав',
	'FORGOT_PASS_ALREADY_RESET' => 'Сброс пароля возможен не чаще одного раза в час!',
	'FORGOT_PASS_CANNOT_EMAIL' => 'Невозможно отправить пароль, свяжитесь с администратором',
	'FORGOT_PASS_EMAIL_NOT_FOUND' => 'Введенный Вами email не найден в БД',
	'FORGOT_PASS_NO_DATA' 	=> 'Введите Ваш email адрес',
	'FORGOT_PASS_PASSWORD_RESET' => 'Данные длоя входа отправлены на указанный адрес',
	'FRONTEND_SORRY_NO_ACTIVE_SECTIONS' => 'Нет активного содержимого для отображения',
	'FRONTEND_SORRY_NO_VIEWING_PERMISSIONS' => 'Недостаточно прав для просмотра',
	'GENERIC_ALREADY_INSTALLED' => 'Установлено ранее',
	'GENERIC_BAD_PERMISSIONS' => 'Запись в директорпию невозможна',
	'GENERIC_CANNOT_UNINSTALL' => 'Удаление невозможно',
	'GENERIC_CANNOT_UNINSTALL_IN_USE' => 'Удаление невозможно: указанный файл используется.',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL' => '<br /><br />{{type}} <b>{{type_name}}</b> удаление не может быть выполнено, т.к. шаблон используется на следующей странице: {{pages}}.<br /><br />',
	'GENERIC_CANNOT_UNINSTALL_IN_USE_TMPL_PAGES' => 'эта страница; эти страницы',
	'GENERIC_CANNOT_UNINSTALL_IS_DEFAULT_TEMPLATE' => 'Удаление шаблона<b>{{name}}</b> невозможно, это основной шаблон!',
	'GENERIC_CANNOT_UNZIP' 	=> 'Распаковка невозможна',
	'GENERIC_CANNOT_UPLOAD' => 'Закачка невозможна',
	'GENERIC_COMPARE' 		=> 'Успешно',
	'GENERIC_ERROR_OPENING_FILE' => 'Ошибка при открытии файла',
	'GENERIC_FAILED_COMPARE' => 'Невозможно',
	'GENERIC_FILE_TYPE' 	=> 'Требуемый формат файла:',
	'GENERIC_FILE_TYPES' 	=> 'Возможные форматы файла:',
	'GENERIC_FILL_IN_ALL' 	=> 'Вернитесь и заполните все поля.',
	'GENERIC_INSTALLED' 	=> 'Установка прошла успешно',
	'GENERIC_INVALID' 		=> 'Закачанный файл недействителен',
	'GENERIC_INVALID_ADDON_FILE' => 'Неверный файл инсталляции. Проверьте формат .zip.',
	'GENERIC_INVALID_LANGUAGE_FILE' => 'Неверный файл языка. Проверьте текстовый файл.',
	'GENERIC_IN_USE' 		=> ' но используется в ',
	'GENERIC_MODULE_VERSION_ERROR' => 'Модуль установлен неправильно!',
	'GENERIC_NOT_COMPARE' 	=> ' не представляется возможным',
	'GENERIC_NOT_INSTALLED' => 'не найдена установка',
	'GENERIC_NOT_UPGRADED' 	=> 'Актуализация невозможна',
	'GENERIC_PLEASE_BE_PATIENT' => 'Потерпите, это может занять некоторое время.',
	'GENERIC_PLEASE_CHECK_BACK_SOON' => 'Зайдите попозже!',
	'GENERIC_SECURITY_ACCESS'	=> 'Доступ запрещен!!!',
	'GENERIC_SECURITY_OFFENSE'	=> 'Отказ в сохранении данных!!!',
	'GENERIC_UNINSTALLED' 	=> 'Удаление прошло успешно',
	'GENERIC_UPGRADED' 		=> 'Обновление прошло успешно',
	'GENERIC_VERSION_COMPARE' => 'Сравнение версий',
	'GENERIC_VERSION_GT' 	=> 'Необходимо обновление!',
	'GENERIC_VERSION_LT' 	=> 'Ранняя версия',
	'GENERIC_WEBSITE_UNDER_CONSTRUCTION' => 'Сайт в разработке',
	'GROUPS_ADDED' 			=> 'Группа успешно добавлена',
	'GROUPS_CONFIRM_DELETE' => 'Вы уверены, что хотите удалить группу и всех принадлежащих к ней пользователей?',
	'GROUPS_DELETED' => 'Группа успешно удалена',
	'GROUPS_GROUP_NAME_BLANK' => 'Не введено имя группы',
	'GROUPS_GROUP_NAME_EXISTS' => 'Такое имя группы уже есть',
	'GROUPS_NO_GROUPS_FOUND' => 'Группы не найдены',
	'GROUPS_SAVED' 			=> 'Успешное сохранение группы',
	'LANG_MISSING_PARTS_NOTICE' => 'Установка языка не состоялась, одна (или более) из переменных отсутствует:<br />language_code<br />language_name<br />language_version<br />language_license',
	'LOGIN_AUTHENTICATION_FAILED' => 'Неверное имя пользователя и/или пароль',
	'LOGIN_BOTH_BLANK' 		=> 'Введимте имя пользователя и пароль',
	'LOGIN_PASSWORD_BLANK' 	=> 'Введите пароль',
	'LOGIN_PASSWORD_TOO_LONG' => 'Слишком длинный пароль',
	'LOGIN_PASSWORD_TOO_SHORT' => 'Слишком короткий пароль',
	'LOGIN_USERNAME_BLANK' 	=> 'Введите имя пользователя',
	'LOGIN_USERNAME_TOO_LONG' => 'Слишком длинное имя пользователя',
	'LOGIN_USERNAME_TOO_SHORT' => 'Слишком короткое имя пользователя',
	'MEDIA_BLANK_EXTENSION' => 'Вы не ввели расширение файла',
	'MEDIA_BLANK_NAME' 		=> 'Вы не ввели новое название',
	'MEDIA_CANNOT_DELETE_DIR' => 'Невозможно удалить выбранную директорию',
	'MEDIA_CANNOT_DELETE_FILE' => 'Невозможно удалить выбранный файл',
	'MEDIA_CANNOT_RENAME' 	=> 'Переименование не состоялось',
	'MEDIA_CONFIRM_DELETE' 	=> 'Вы уверены, что хотите удалить указанный файл/папку?',
	'MEDIA_CONFIRM_DELETE_FILE'	=> 'Вы уверены, что хотите удалить файл {name}?',
	'MEDIA_CONFIRM_DELETE_DIR'	=> 'Вы уверены, что хотите удалить директорию {name}?',
	'MEDIA_DELETED_DIR' 	=> 'Папка успешно удалена',
	'MEDIA_DELETED_FILE' 	=> 'Файл успешно удален',
	'MEDIA_DIR_ACCESS_DENIED' => 'Указанная директория не существует или доступ к ней запрещен.',
	'MEDIA_DIR_DOES_NOT_EXIST' => 'Директория не существует',
	'MEDIA_DIR_DOT_DOT_SLASH' => 'Недопустимо вносить ../ в имя папки',
	'MEDIA_DIR_EXISTS' 		=> 'Папка с таким именем уже существует',
	'MEDIA_DIR_MADE' 		=> 'Папка успешно создана',
	'MEDIA_DIR_NOT_MADE' 	=> 'Создание папки невозможно',
	'MEDIA_FILE_EXISTS' 	=> 'Файл с таким именем уже существует',
	'MEDIA_FILE_NOT_FOUND' 	=> 'Файл не найден',
	'MEDIA_NAME_DOT_DOT_SLASH' => 'Недопустимо вносить ../ в имя',
	'MEDIA_NAME_INDEX_PHP' 	=> 'Нельзя использовать имя index.php',
	'MEDIA_NONE_FOUND' 		=> 'Медиаконтент в данной папке не обнаружен',
	'MEDIA_RENAMED' 		=> 'Переименование прошло успешно',
	'MEDIA_SINGLE_UPLOADED' => ' файл успешно закачан',
	'MEDIA_TARGET_DOT_DOT_SLASH' => 'Невозможно использование ../ в имени конечной папки',
	'MEDIA_UPLOADED' 		=> ' файлы успешно закачаны',
	'MOD_MISSING_PARTS_NOTICE' => 'Установка модуля "%s" не состоялась, одна (или более) из переменных отсутствует:<br />module_directory<br />module_name<br />module_version<br />module_author<br />module_license<br />module_guid<br />module_function',
	'MOD_FORM_EXCESS_SUBMISSIONS' => 'Извините, но эта форма слишком часто использовалась. Заходите через час.',
	'MOD_FORM_INCORRECT_CAPTCHA' => 'Контрольный код (captcha) введен неверно. Если Вы ее не в состоянии узреть, пишите на email: <a href="mailto:'.SERVER_EMAIL.'">'.SERVER_EMAIL.'</a>',
	'MOD_FORM_REQUIRED_FIELDS' => 'Вы должны заполнить указанные поля.',
	'PAGES_ADDED' 			=> 'Страница успешно добавлена',
	'PAGES_ADDED_HEADING' 	=> 'Шапка (heading) страницы успешно добавлена',
	'PAGES_BLANK_MENU_TITLE' => 'Введите заголовок меню',
	'PAGES_BLANK_PAGE_TITLE' => 'Введите заголовок страницы',
	'PAGES_CANNOT_CREATE_ACCESS_FILE' => 'Недостаточно прав для создания файла доступа',
	'PAGES_CANNOT_DELETE_ACCESS_FILE' => 'Недостаточно прав для удаления файла доступа',
	'PAGES_CANNOT_REORDER' 	=> 'Ошибка при упорядочивании страниц',
	'PAGES_DELETED' 		=> 'Страница успешно удалена',
	'PAGES_DELETE_CONFIRM' 	=> 'Вы уверены, что хотите удалить выбранную страницу &laquo;%s&raquo; (и всё ее содержимое)',
	'PAGES_INSUFFICIENT_PERMISSIONS' => 'У Вас нет прав для изменения этой страницы',
	'PAGES_INTRO_EMPTY' 		=> 'Intro-страница не может быть пустой.',    
	'PAGES_INTRO_LINK' 		=> 'Нажмите здесь для изменения заставки сайта',
	'PAGES_INTRO_NOT_WRITABLE' => 'Недостаточно прав для изменения page-directory/intro.php',
	'PAGES_INTRO_SAVED' 	=> 'Заставка сайта успешно сохранена',
	'PAGES_LAST_MODIFIED' 	=> 'Последние изменения от:',
	'PAGES_NOT_FOUND' 		=> 'Страница не найдена',
	'PAGES_NOT_SAVED' 		=> 'Ошибка при сохранении страницы',
	'PAGES_PAGE_EXISTS' 	=> 'Страница с таким же или подобным названием уже существует',
	'PAGES_REORDERED' 		=> 'Перераспределение страниц прошло успешно',
	'PAGES_RESTORED' 		=> 'Страницы успешно восстановлены',
	'PAGES_RETURN_TO_PAGES' => 'Возврат к страницам',
	'PAGES_SAVED' 			=> 'Страница успешно сохранена',
	'PAGES_SAVED_SETTINGS' 	=> 'Настройки страницы успешно сохранены',
	'PAGES_SECTIONS_PROPERTIES_SAVED' => 'Настройки страницы успешно сохранены',
	'PREFERENCES_CURRENT_PASSWORD_INCORRECT' => 'Введенный текущий пароль неверен',
	'PREFERENCES_DETAILS_SAVED' => 'Данные успешно сохранены',
	'PREFERENCES_EMAIL_UPDATED' => 'Email обновлен успешно',
	'PREFERENCES_INVALID_CHARS' => 'Использованы недопустимые символы, допустимые символы: a-z\A-Z\0-9\_\-\!\#\*\+',
	'PREFERENCES_PASSWORD_CHANGED' => 'Пароль успешно изсенен',
	'RECORD_MODIFIED_FAILED' => 'Изменения в записи отсутствуют.',
	'RECORD_MODIFIED_SAVED' => 'Измененные записи успешно обновлены.',
	'RECORD_NEW_FAILED' 	=> 'Новая запись не внесена.',
	'RECORD_NEW_SAVED' 		=> 'Новая запись успешно внесена.',
	'SETTINGS_MODE_SWITCH_WARNING' => 'Нажатие этой кнопки уничтожит все несохраненные изменения.',
	'SETTINGS_SAVED' 		=> 'Настройки успешно сохранены',
	'SETTINGS_UNABLE_OPEN_CONFIG' => 'Невозможно открыть файл конфигурации',
	'SETTINGS_UNABLE_WRITE_CONFIG' => 'Запись в файл конфигурации невозможна',
	'SETTINGS_WORLD_WRITEABLE_WARNING' => 'Рекомендуется только при тестировании работы сайта!',
	'SIGNUP2_ADMIN_INFO' 	=> '
Произошла регистрация нового пользователя.

Имя пользователя: {LOGIN_NAME}
ID: {LOGIN_ID}
E-Mail: {LOGIN_EMAIL}
IP-адрес: {LOGIN_IP}
Дата регистрации: {SIGNUP_DATE}
----------------------------------------
Это автоматически сгенерированное сообщение!

',
	'SIGNUP2_BODY_LOGIN_FORGOT' => '
Здравствуйте,{LOGIN_DISPLAY_NAME},

Это письмо напрвлено Вам, так как кто-то (возможно Вы) сообщил о потере пароля.

Для входа на \'{LOGIN_WEBSITE_TITLE}\' используйте следующие данные:

Имя пользователя: {LOGIN_NAME}
Пароль: {LOGIN_PASSWORD}

Старый пароль более не дейтсвителен, при возникновении дополнительных вопросов обращайтесь к администрации \'{LOGIN_WEBSITE_TITLE}\'.
Мы рекомендуем удалить кэш браузера перед входом с новым паролем.

С уважением, администрация сайта
------------------------------------
Это автоматически созданное сообщение

',
	'SIGNUP2_BODY_LOGIN_INFO' => '
Здравствуйте, {LOGIN_DISPLAY_NAME},

Добро пожаловать на \'{LOGIN_WEBSITE_TITLE}\'.

Для входа на \'{LOGIN_WEBSITE_TITLE}\' используйте следующие данные:
Имя пользователя: {LOGIN_NAME}
Пароль: {LOGIN_PASSWORD}

С уважением, администрация сайта
------------------------------------
Это автоматически созданное сообщение
',
	'SIGNUP2_SUBJECT_LOGIN_INFO' => 'Ваши данные для входа на сайт...',
	'SIGNUP_NO_EMAIL' 		=> 'Необходимо ввести email',
	'START_CURRENT_USER' 	=> 'Вы вошли на сайт под именем:',
	'START_INSTALL_DIR_EXISTS' => 'Внимание, установочная директория еще существует!',
	'START_WELCOME_MESSAGE' => 'Добро пожаловать в панель управления!',
	'SYSTEM_FUNCTION_DEPRECATED'=> 'Функция <b>%s</b> более не используется, используйте вместо неё функцию <b>%s</b>!',
	'SYSTEM_FUNCTION_NO_LONGER_SUPPORTED' => 'Функция <b>%s</b> устарела и более не поддерживается!',
	'SYSTEM_SETTING_NO_LONGER_SUPPORTED' => 'Настройка <b>%s</b> более не поддерживается и будет проигнорирована!',
	'TEMPLATES_CHANGE_TEMPLATE_NOTICE' => 'Для изменения шаблона перейдите в меню настроек',
	'TEMPLATES_MISSING_PARTS_NOTICE' => 'Установка шаблона не удалась, отсутствует одна или более из переменных:<br />template_directory<br />template_name<br />template_version<br />template_author<br />template_license<br />template_function ("theme" oder "template")',
	'USERS_ADDED' 			=> 'Пользователь успешно добавлен',
	'USERS_CANT_SELFDELETE' => 'Отменено! Вы не можете удалить себя.',
	'USERS_CHANGING_PASSWORD' => 'Для изменения пароля пользователя используйте поля выше',
	'USERS_CONFIRM_DELETE' 	=> 'Вы уверены, что хотите удалить выбранного пользователя?',
	'USERS_DELETED' 		=> 'Пользователь успешно удален',
	'USERS_EMAIL_TAKEN' 	=> 'введенный email уже используется',
	'USERS_INVALID_EMAIL' 	=> 'Введен неверный email',
	'USERS_NAME_INVALID_CHARS' => 'В имени пользователя использованы недопустимые символы',
	'USERS_NO_GROUP' 		=> 'Не выбрана группа',
	'USERS_PASSWORD_MISMATCH' => 'Введенные пароли не совпадают',
	'USERS_PASSWORD_TOO_SHORT' => 'Введен слишком короткий пароль',
	'USERS_SAVED' 			=> 'Пользователь успешно сохранен',
	'USERS_USERNAME_TAKEN' 	=> 'имя пользователя уже занято.',
	'USERS_USERNAME_TOO_SHORT' => 'Слишком короткое имя пользователя.'
); // $MESSAGE

$OVERVIEW = array(
	'ADMINTOOLS' 			=> 'Доступ к панели админитсрирования Lepton...',
	'GROUPS' 				=> 'Управление группами пользователей и их правами...',
	'HELP' 					=> 'Вопросы? Ответы на...',
	'LANGUAGES' 			=> 'Управление языками Lepton...',
	'MEDIA' 				=> 'Управление файлами в директориях для медиаконтента...',
	'MODULES' 				=> 'Управление модулями Lepton...',
	'PAGES' 				=> 'Управление страницами сайта...',
	'PREFERENCES' 			=> 'Изменение данных, например email`а, пароля и т.д.... ',
	'SETTINGS' 				=> 'Изменение настроек Lepton...',
	'START' 				=> 'Обзо администрирования',
	'TEMPLATES' 			=> 'Изменение внешнего вида сайтов при помощи шаблонов...',
	'USERS' 				=> 'Управление пользователями...',
	'VIEW' 					=> 'Просмотр Вашего сайта в новом окне браузера...'
	);

/* 
 * Create the old languages definitions only if specified in settings 
 */ 
if (ENABLE_OLD_LANGUAGE_DEFINITIONS) {
	foreach ($MESSAGE as $key => $value) {
		$x = strpos($key, '_');
		$MESSAGE[substr($key, 0, $x)][substr($key, $x+1)] = $value;
	}
}
?>