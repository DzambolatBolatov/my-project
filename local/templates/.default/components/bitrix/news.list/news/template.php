<div class="news__main container">
	<?//echo "<pre>".htmlentities(print_r($arResult, true));exit();?>
	<?foreach ($arResult["ITEMS"] as $arItem):?>
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<div class="news__name news-item">
		<?= $arItem["NAME"] ?>
		</div>
		<div class="news__text news-item">
		<?
		$maxTextLength = 10000;
		$text = $arItem["DETAIL_TEXT"];
		if (mb_strlen($text) > $maxTextLength) 
		{
			$text = mb_substr($text, 0, mb_strrpos(mb_substr($text, 0, $maxTextLength), ' ')) . '...';
		}
		echo $text;
		?>
		</div>      
		<div class="news__date news-item">
			<?= $arItem['ACTIVE_FROM'] ?>
		</div>
	</a>
	<?endforeach?>
	asdasdas
</div>


