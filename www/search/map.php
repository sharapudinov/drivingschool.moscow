<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "автошкола аспект Карта сайта");
$APPLICATION->SetPageProperty("title", "Автошкола Аспект - Карта сайта");
$APPLICATION->SetPageProperty("description", "Автошкола Аспект - Карта сайта");
$APPLICATION->SetTitle("Карта сайта");

$APPLICATION->IncludeComponent("bitrix:main.map", ".default", array(
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"SET_TITLE" => "Y",
	"LEVEL" => "7",
	"COL_NUM" => "2",
	"SHOW_DESCRIPTION" => "Y"
	),
	false
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>