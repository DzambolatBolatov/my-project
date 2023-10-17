<div class="contacts container">
   <?foreach ($arResult["ITEMS"] as $arItem):?>
      <div 
      class="contacts__name"
      >
         <?= $arItem["NAME"] ?>
      </div>
      <div 
      class="contacts__text"
      >
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
   <?endforeach?>
</div>