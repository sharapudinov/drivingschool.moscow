<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main\Loader; 
Loader::includeModule("main"); 

use Tlib\Validate\Validator;

global $USER;


if(!$USER->IsAuthorized())
{
	$error = false;
	
	// if(!Validator::IsEmail($_POST["r_email"])){
		// $errors["r_email"] = "Y";
		// $error = true;
	// }
	if(!Validator::IsPhone($_POST["r_tel"])){
		$errors["r_tel"] = "Y";
		$error = true;
	}
	
	if(!isset($_POST["r_password"]) || empty($_POST["r_password"])){
		$errors["r_password"] = "Y";
		$error = true;
	}
	// Проверка уникальности почты
	if(!$error){
		$usFilt = array( 
			"EMAIL" => $_POST["r_email"] 
		);
		$by = "timestamp_x"; $order = "desc";
		$userSearch =  CUser::GetList( $by,$order, $usFilt)->Fetch();
		if(
			!empty($userSearch) &&
			( $userSearch["EMAIL"] == $_POST["r_email"] || $userSearch["LOGIN"] == $_POST["r_email"]) 
		)
		{
			$errors["r_email"] = "R";
			$error = true;
		}
	}
	// Проверка уникальности номера телефона	
	if(!$error){
		$phone = $_POST["r_tel"];
		$search_replace = array("(", ")", "-", " ");
		$phone = str_replace($search_replace, "", $phone);
		$phone = str_replace("+7", "8", $phone);
		
		$usFilt = array( 
			"PERSONAL_PHONE" => $phone
		);
		$by = "timestamp_x"; $order = "desc";
		$userSearch =  CUser::GetList( $by,$order, $usFilt)->Fetch();
		
		$u_phone = str_replace($search_replace, "", $userSearch["PERSONAL_PHONE"]);
		
		if( !empty($userSearch) && $u_phone == $phone )
		{
			$errors["r_tel"] = "R";
			$error = true;	
		}
	}

	if(!$error){
		$user = new CUser;
		$arFields = Array(
			"NAME"              => $_POST["r_name"],
			"LAST_NAME"         => $_POST['r_last_name'],
			"EMAIL"             => $_POST['r_email'],
			"LOGIN"             => $phone,
			"LID"               => "ru",
			"ACTIVE"            => "Y",
			'PERSONAL_PHONE'    => $phone,
			"GROUP_ID"          => array(3,4,6),
			"PASSWORD"          => $_POST['r_password'],
			"CONFIRM_PASSWORD"  => $_POST['r_password'],
		);
		$ID = $user->Add($arFields);
		if (intval($ID) > 0){
		
			if($_POST["csubscription_check"] == "Y"){
				if(CModule::IncludeModule('subscribe')){
					$subscr = new CSubscription;
					$ID2 = $subscr->Add(
						Array(
							"USER_ID" => $ID,
							"FORMAT" => "html",
							"EMAIL" => $_POST['r_email'],
							"ACTIVE" => "Y",
							"SEND_CONFIRM" => "N",
							"RUB_ID" => array(1)
						)
					);
				}
			}
			
			
			CEvent::SendImmediate("NEW_USER", "s1", array(
				'EMAIL' => $_POST['r_email'],
				'LAST_NAME' => $_POST['r_last_name'],
				'NAME' => $_POST['r_name'],
				'LOGIN' => $_POST['r_email'],
				'PERSONAL_PHONE' => $_POST['r_tel'],
			), "N", 1);	
			
			$USER->Authorize($ID,true);
		}
		else{
			$errors["IS_REG"] = "Y";
			$errors["LAST_ERROR"] = str_ireplace("<br>", "", $user->LAST_ERROR);
			$error = true;	
		}
		
	}
	
	if(!$error)
		echo "Y";
	else
		echo json_encode($errors);	
}
else
{
	$errors["IS_AUTH"] = "Y";
	echo json_encode($errors);
	
}
	
