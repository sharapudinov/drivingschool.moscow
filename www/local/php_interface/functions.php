<?php

function IsMainPage()
{
	$m_url = trim($_SERVER['REQUEST_URI'],"/");
	$m_url1 = str_split($m_url);
	return ($m_url == "" || $m_url1[0] == "?");
} 

function PR($o, $bool = false)
{
	$bt =  debug_backtrace();
	$bt = $bt[0];
	$dRoot = $_SERVER["DOCUMENT_ROOT"];
	$dRoot = str_replace("/","\\",$dRoot);
	$bt["file"] = str_replace($dRoot,"",$bt["file"]);
	$dRoot = str_replace("\\","/",$dRoot);
	$bt["file"] = str_replace($dRoot,"",$bt["file"]);
	global $USER;
	if ($USER->isAdmin() || $bool)
	{
		?>
		<div style='font-size:9pt; color:#000; background:#fff; border:1px dashed #000;'>
		<div style='padding:3px 5px; background:#99CCFF; font-weight:bold;'>File: <?=$bt["file"]?> [<?=$bt["line"]?>]</div>
		<pre style='padding:10px;'><?print_r($o)?></pre>
		</div>
		<?
	}
}

function GetDateToFrom($day = 0, $datefrom = 0)
{
	if($datefrom == 0) $datefrom = date("d.m.Y H:i:s");
//    $datefrom = "16.12.2016 00.00.00";
	$stmp = MakeTimeStamp($datefrom, "DD.MM.YYYY HH:MI:SS");
	$stmp = AddToTimeStamp(array("DD" => $day, "MM" => 0), $stmp);
	$dateto = date("d.m.Y", $stmp);
	
	return array(
		"DATE_FROM" => $datefrom,
		"DATE_TO" => $dateto
	);
}

function ost_days($d)
{
    $y = $d % 10;
    $x = $d / 10 % 10;
    if ($x && $x == 1) return "дней";
    if ($y == 1) return "день";
    if (in_array($y,"2,3,4")) return "дня";
    return "дней";
}

function file_get_contents_curl($url)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$data = curl_exec($ch);
	curl_close($ch);

	return $data;
}

function file_post_contents_curl($url, $params = array())
{
    if( $curl = curl_init() ) {
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));
        $out = curl_exec($curl);
        curl_close($curl);
        return $out;
    }
}

function objectToArray($object)
{
    if(!is_object($object) && !is_array($object)){
        return $object;
    }
    if(is_object($object))
    {
        $object = get_object_vars( $object );
    }
    return array_map( 'objectToArray', $object);
}

function str_search($subs, $str, $bool = false)
{
    if(!$bool){
        $str = strtolower($str);
        $subs = strtolower($subs);
    }

    $pos = strpos($str, $subs);
    return !($pos === false);
}