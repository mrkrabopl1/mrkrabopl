<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?php if (!empty($arResult)):?>
 <div class="header__top-line">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH"=> SITE_TEMPLATE_PATH."/includes/images.php"
	)
);?>




            <div class="header__links">
                <?php foreach($arResult as $items):?>
				<?php if ($items["TEXT"]!=="Вход"):?>

				<a href="<?=$items["LINK"]?>" class="header__a"><?=$items["TEXT"]?></a>
	<?php else :?>

                 <a href="#" class="header__enter">Вход</a>
				<?php endif ;?>
                <?php endforeach;?>

 </div>


            <div class="header__mobile">
                <div class="header__burger">
                    <span class="header__burger-line" ></span>

                </div>
                <div class="header__burger-links">
                    <a href="#" class="header__a-burg">Главная</a>
                    <a href="#" class="header__a-burg">Агенствам</a>
                    <a href="#" class="header__a-burg">Услуги</a>
                    <a href="#" class="header__a-burg">FAQ</a>
                    <a href="#" class="header__a-burg" >Контакты</a>
                    <a href="#" class="header__a-burg">Вход</a>

                </div>
            </div>
        </div>
<?php endif;?>