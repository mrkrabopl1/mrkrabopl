<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?php if (!empty($arResult)):?>

	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
);?>
<div class="program__link-cont">
  <?php foreach($arResult as $items):?>

				<?php if ($items["TEXT"]!=="Вход"):?>
        <a href="<?=$items["LINK"]?>" class="program__link"><?=$items["TEXT"]?></a>








	<?php else :?>

             	<?php endif ;?>
                <?php endforeach;?>
</div>

<?php endif;?>