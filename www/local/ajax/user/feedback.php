<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Loader;
Loader::includeModule("main");

if(isset($_POST["fb_message"]))
{
    CEvent::SendImmediate("FEEDBACK", "s1", array(
        'SUBJECT' => $_POST['fb_subject'],
        'ORDER_ID' => $_POST['fb_order_id'],
        'MESSAGE' => $_POST['fb_message'],
        'NAME' => $_POST['fb_name'],
        'PHONE' => $_POST['fb_phone'],
        'EMAIL' => $_POST['fb_email'],
    ), "N", 101);
}
