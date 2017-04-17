<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопросы");
?><?$APPLICATION->IncludeComponent(
	"bitrix:support.faq",
	"",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"EXPAND_LIST" => "Y",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "faq",
		"PATH_TO_USER" => "",
		"RATING_TYPE" => "",
		"SECTION" => "5",
		"SEF_MODE" => "N",
		"SHOW_RATING" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>