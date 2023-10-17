<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\UI\PageNavigation;

class ElementsComponent extends \CBitrixComponent
{
	public function onPrepareComponentParams($arParams)
	{	
		if(!array_key_exists('filter', $arParams) || !is_array($arParams['filter']))
   	$arParams['filter'] = [];

  		if(!array_key_exists('sort', $arParams) || !is_array($arParams['sort']))
   	$arParams['sort'] = ['SORT' => 'ASC'];

  		if(!array_key_exists('page', $arParams) || !is_numeric($arParams['page']))
   	$arParams['page'] = 1;
  	else
   	$arParams['page'] = intval($arParams['page']);

  		if(!array_key_exists('limit', $arParams) || !is_numeric($arParams['limit']))
   	$arParams['limit'] = 3;
  	else
   	$arParams['limit'] = intval($arParams['limit']);

  		if(!array_key_exists('select', $arParams) || !is_array($arParams['select']))
   	$arParams['select'] = [];

  return $arParams;

	}

	public function executeComponent()
	{
		\Bitrix\Main\Loader::includeModule('iblock');

		$nav = new PageNavigation("more-news");
  		$nav->allowAllRecords(true)
   		->setPageSize($this->arParams['limit'])
   		->initFromUri();

   		$rsItems = \CIBlockElement::GetList(
   			$this->arParams['sort'],
   			$this->arParams['filter'],
   			false,
   			[
		    'iNumPage' => $nav->getCurrentPage(),
		    'nPageSize' => $nav->getPageSize(),
			],
		   $this->arParams['select']
   		);

   		$nav->setRecordCount($rsItems->SelectedRowsCount());
		$this->arResult['NAVIGATION'] = $nav;
		$this->arResult['ITEMS'] = [];
		while ($items = $rsItems->GetNext())
		$this->arResult['ITEMS'][] = $items;

   		$this->includeComponentTemplate();
	}
}
	