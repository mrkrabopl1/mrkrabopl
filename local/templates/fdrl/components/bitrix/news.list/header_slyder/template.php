<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?><div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>


<?php foreach ($arResult["ITEMS"] as $arItems): ?>
 <div class="header__main-cont">
            <button class="header__arrowleft-btn"><img src="lables/arrowleft.svg" class="header__arrowleft" alt=""></button>

            <div class="header__text">

                <p class="header__big-text">
					<?= $arItems["NAME"] ?>
                </p>




                <p class="header__describe"><?= $arItems["PREVIEW_TEXT"] ?></p>
                <a href="#" class="header__conditions">Узнать условия</a>
            </div>
	 <img src="<?= $arItems["PREVIEW_PICTURE"]["SRC"] ?>" alt="santa" class="header__santa">
            <button class="header__arrowright-btn"><img src="lables/arrowright.svg" class="header__arrowright" alt=""></button>
        </div>
</div>
<?php endforeach; ?>