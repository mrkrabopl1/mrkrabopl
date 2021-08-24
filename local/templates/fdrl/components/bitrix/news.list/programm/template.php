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
<div class="program container">
    <div class="program__text-cont">
		<p class="program__about"> О ПРОГРАММЕ </p>
<p class="program__main-text">Цель нашего проекта - стереть границы между странами для обмена профессиональным и бизнес опытом. Полтора года назад, когда мы сами решили переехать, мы столкнулись с огромным количеством проблем: нехватка актуальной информации по программа, по пакету документов, по процессу коммуникации с гос структурами и т.д.    <br>  <br>   Учитывая, что все больше людей хотят учиться, работать и делать бизнес, за пределами своей страны, мы поняли, что нужна некий сервис, которая соберет в себе всю актуальную информацию по программам и предложить пошаговый план, по прохождению всех этапов получения ВНЖ. Кроме того, для тех, кто хочет сэкономить свое время, мы решили собрать пул проверенных агентств, которые смогут помочь в этом процессе. Таким образом и появился наш проект HElloMove! <br> <br> Для тех кто, еще сомневается, что получить ВНЖ не сложно, нужно просто жедание и активные действия или для тех, кто просто хочет с нами познакомиться, мы делаем бесплатные вебинары, на которых рассказываем полезную информацию о процессе ВНЖ.</p>
   
        </div>
<?php endforeach; ?>