<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/news/(.*)#",
		"RULE" => "ELEMENT_CODE=$1",
		"PATH" => "/news/detail.php",
	),
	// array(
	// 	"CONDITION" => "#^/news",
	// 	"RULE" => "ELEMENT_CODE=$2",
	// 	"PATH" => "/news",
	// ),
);
?>
