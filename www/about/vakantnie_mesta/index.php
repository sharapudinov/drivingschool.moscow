<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакантные места для приема(перевода)");
?><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>Количество вакантных мест для приема на обучение за бюджетных ассигнований федерального бюджета, бюджетов субъектов Российской Федерации, местных бюджетов – не предусмотрено.<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>