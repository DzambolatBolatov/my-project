<div class="container">
		<div class="news">
		<?php
		// echo '<pre>' .htmlentities(print_r($arResult, 1)) . '</pre>';exit();
		foreach ($arResult['ITEMS'] as $items)
		{
		?>
		<a class="news__item" href="<?= $items['DETAIL_PAGE_URL'] ?>">
			<div class="news__name news-item"><?= $items['NAME'] ?></div>
			<div class="news__text news-item">
				<?
				$maxTextLength = 124;
				$text = $items["DETAIL_TEXT"];
				if (mb_strlen($text) > $maxTextLength) 
				{
					$text = mb_substr($text, 0, mb_strrpos(mb_substr($text, 0, $maxTextLength), ' ')) . '...';
				}
				echo $text;
				?>
			</div>
			<div class="news__date news-item"><?= $items['ACTIVE_FROM'] ?></div>
		</a>
		<?php
		}
		?>
		</div>
		<?php
	$APPLICATION->IncludeComponent(
	"bitrix:main.pagenavigation",
	"",
	[
	"NAV_OBJECT"  => $arResult['NAVIGATION'],
	],
	 false
	);
	?>
</div>

