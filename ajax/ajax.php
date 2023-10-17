<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$name = $_POST["name"];
$phone = $_POST["phone"];
$errors = []; 

if (empty($name) || strlen($name) <= 2)
{
	$errors['name'] = "неправильное имя пользователя";

}
if (empty($phone) || !preg_match("/^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$/", $phone))
{
	$errors['phone'] = "неправильный номер телефона";
}

if(!empty($errors))
{
	echo json_encode([
		"success" => false,
		"errors" => $errors
	]);
}
else
{
	$el = new CIBlockElement;
	$PROP = [];
	$PROP['NAME'] = $name;
	$PROP['PHONE'] = $phone;
	$arLoadProductArray = [
	 	"IBLOCK_SECTION_ID" => false,
	  	"IBLOCK_ID"      => 6,
	  	"PROPERTY_VALUES"=> $PROP,
	  	"NAME"           => "Заявка от $name",
	  	"ACTIVE"         => "Y",
	  	];
	if($PRODUCT_ID = $el->Add($arLoadProductArray))
		echo json_encode(["success" => true, "element_id" => $PRODUCT_ID]);
	else
		echo "Error: ".$el->LAST_ERROR;
}

