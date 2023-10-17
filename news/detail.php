<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"", 
	array(
		"ELEMENT_CODE" => $_GET["ELEMENT_CODE"],
		"IBLOCK_ID" => "4",
	),
	false
);
