<div class="news container">
   <?//"<pre>".print_r($arResult, 1)?>
   <?foreach ($arResult["ITEMS"] as $arItem):?>
   <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
      <div 
      class="news__name news-item"
      >
         <?= $arItem["NAME"] ?>
      </div>
      <div 
      class="news__text news-item"
      >
      <?
      $maxTextLength = 124;
      $text = $arItem["DETAIL_TEXT"];
      if (mb_strlen($text) > $maxTextLength) 
      {
         $text = mb_substr($text, 0, mb_strrpos(mb_substr($text, 0, $maxTextLength), ' ')) . '...';
      }
      echo $text;
      ?>
      </div>
      <div 
      class="news__date news-item"
      >
         <?= $arItem["PROPERTIES"]["date_news"]["VALUE"] ?>
      </div>
   </a>
   <?endforeach?>
</div>

