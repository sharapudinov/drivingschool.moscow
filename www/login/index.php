<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);
$APPLICATION->SetPageProperty("keywords_inner", "автошкола аспект авторизация");
$APPLICATION->SetPageProperty("title", "Автошкола Аспект - авторизация");
$APPLICATION->SetPageProperty("description", "Автошкола Аспект - авторизация");
$APPLICATION->SetTitle("Вход на сайт");
?>
<p>Вы зарегистрированы и успешно авторизовались.</p>

<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>