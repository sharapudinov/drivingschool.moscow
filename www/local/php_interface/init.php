<?
// Константы проекта
if(file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/const.php"))
	require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/const.php");

// Функции для разного применения
if(file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/functions.php"))
	require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/functions.php");

// обработчики событий
if(file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/handlers.php"))
	require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/handlers.php");

