<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"contacts", 
	array(
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"PROPERTY_CODE" => ["*"]
	),
	false
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>