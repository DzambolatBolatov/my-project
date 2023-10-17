<div class="container button"><a href="<?=$_SERVER["HTTP_REFERER"]?>">Назад</a></div>	
<div class="news__detail container">
   <div class="detail__name news-item">
    	<?= $arResult["NAME"] ?>
   </div>
   <div class="news__date news-item">
		<?= $arResult["DISPLAY_ACTIVE_FROM"] ?>
   </div>
   <div class="news__text news-item">
   	  	<?=$arResult["DETAIL_TEXT"]?>
   </div>
</div>