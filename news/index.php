<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<!-- <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news", 
	array(
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "2",
		"PROPERTY_CODE" => ["*"],
		"PAGER_TEMPLATE" => "news"
	),
	false
);
?>
 -->
<?
	$APPLICATION->IncludeComponent(
 	'odva:elements',
 	'page_list',
 	[
  	'filter' => [
   	'IBLOCK_ID' => 4,
   	'IBLOCK_TYPE' => 'news'
  	],

  	'limit' => 1,
  	'sort' => 'ASC',
  	'select' => ['ID', 'NAME', 'PREVIEW_TEXT', 'DETAIL_TEXT', 'CODE', 'DETAIL_PAGE_URL', 'ACTIVE_FROM']
 	]
);

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>