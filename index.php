<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Example, Один, Страница");
$APPLICATION->SetPageProperty("description", "Это точно страница Example 1");
$APPLICATION->SetTitle("Моя страница");
?><div class="include__area container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH . "/include/1_inc.php"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH . "/include/2_inc.php"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH . "/include/3_inc.php"
	)
);?>
</div>
<div>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"index", 
	array(
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"PROPERTY_CODE" => ["*"]
	),
	false
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/local/include/form.php");?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>