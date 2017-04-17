<?
$eventManager = \Bitrix\Main\EventManager::getInstance();

//$eventManager->AddEventHandler("main", "OnPageStart", function(){
//    \Bitrix\Main\Loader::includeModule('tlib');
//});
//
//
//
//
//// Iblock catalog
//// $eventManager->AddEventHandler("iblock", "OnBeforeIBlockElementAdd", Array("\Tlib\EventHandler\CatalogHandler", "BeforeElementAdd"));
//
//$eventManager->AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("\Tlib\EventHandler\CatalogHandler", "changeMeasureRatio")); // Устанавливаем Коэффициент единицы измерения
//
//// Добавлени скидок для товаров
//$eventManager->AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("\Tlib\EventHandler\CatalogHandler", "createDiscount"));
//$eventManager->AddEventHandler("iblock", "OnAfterIBlockElementUpdate", Array("\Tlib\EventHandler\CatalogHandler", "createDiscount"));
//
//// Рассылка подписок на товар при обновление остатков
//$eventManager->AddEventHandler("catalog", "OnBeforeProductUpdate", Array("\Tlib\EventHandler\CatalogHandler", "subscribeCatalogQuantity"));
//
//// Связываем товар с акцией
//$eventManager->AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("\Tlib\EventHandler\CatalogHandler", "addLinkProductsToAction"));
//$eventManager->AddEventHandler("iblock", "OnAfterIBlockElementUpdate", Array("\Tlib\EventHandler\CatalogHandler", "addLinkProductsToAction"));
//
//// Удаляем Акцию у товаро если удаляется акция
//$eventManager->AddEventHandler("iblock", "OnBeforeIBlockElementDelete", Array("\Tlib\EventHandler\CatalogHandler", "DeleteProductsToAction"));
//
//
//// Меню
//$eventManager->AddEventHandler("main", "OnBuildGlobalMenu", array("\Tlib\EventHandler\AdminMenu", "OnBuildGlobalMenuHandler"));
