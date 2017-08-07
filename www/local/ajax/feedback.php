<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("main");
CModule::IncludeModule("iblock");

$return = array(
    "RESULT" => "N",
    "TEXT" => ""
);
if(isset($_REQUEST['NAME']) && isset($_REQUEST['EMAIL']))
{
    $PROP["EMAIL"] = $_REQUEST['EMAIL'];
    $PROP["PHONE"] = $_REQUEST['PHONE'];
    $el = new CIBlockElement;
    $arFields = array(
        "IBLOCK_ID" => 7,
        "IBLOCK_SECTION_ID" => false,
        "NAME" => $_REQUEST['NAME'],
        "PREVIEW_TEXT" => $_REQUEST['TEXT'],
        "ACTIVE" => "N",
        "DATE_ACTIVE_FROM" => date('d.m.Y H:i:s'),
        "PROPERTY_VALUES" => $PROP,
    );

    if( $pr_id = $el->Add($arFields,false,false,false) ){
        $return = array(
            "RESULT" => "Y",
            "TEXT" => "Заявка принята!"
        );
        CEvent::SendImmediate('FEEDBACK_FORM',SITE_ID, array(
            "AUTHOR_EMAIL" => $_REQUEST['EMAIL'],
            "AUTHOR_PHONE" => $_REQUEST['PHONE'],
            "AUTHOR" => $_REQUEST['NAME'],
            "TEXT" => $_REQUEST['TEXT']
        ), 7);
    }
    else{
        $return["TEXT"] = $el->LAST_ERROR;
    }
}
echo json_encode($return);

?>