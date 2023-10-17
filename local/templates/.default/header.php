<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/main.js');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php $APPLICATION->ShowTitle();?></title>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
	<?$APPLICATION->ShowHead();?>
</head>
<body>
	<?php $APPLICATION->ShowPanel();?>
	<header class="header container">
		<a href="/">
			<img
				src="/images/Portfolio.svg"
				alt="не загрузилось"
				class="header__logo"
			>
		</a>
		<nav class="header__nav">
			<a href="/" class="header__nav-link">Главная</a>
			<a href="/contacts/" class="header__nav-link">Контакты</a>
			<a href="/news/" class="header__nav-link">Новости</a>
		</nav>
	</header>
