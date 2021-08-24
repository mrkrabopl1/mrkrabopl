<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<div class="footer">
    <div class="footer__cont container">
        <div class="footer__column footer__column_margin">
            <img class="footer__hellomove" src="<?=SITE_TEMPLATE_PATH?>/ny/lables/hellomove.svg" alt="">
            <a href="#" class="footer__column1-enter">Вход</a>

        </div>
        <div class="footer__column ">
            <a href="#" class="footer__column-a">Главаня</a>
            <a href="#" class="footer__column-a">Агенствам</a>
            <a href="#" class="footer__column-a">Услуги</a>


        </div>
        <div class="footer__column">
            <a href="#" class="footer__column-a">FAQ</a>
            <a href="#" class="footer__column-a">Контакты</a>
        </div>
        <div class="footer__column">
            <p  class="footer__column-p">+7-54564-5489-54</p>
            <p  class="footer__column-p">info@hellomove.com</p>
        </div>
        <div class="footer__column">
            <a href="#" class="footer__column5-a ">Подписаться на новости</a>
            <a href="#" class="footer__column5-a">e-mail</a>
            <div class="footer__column5-line"> </div>
        </div>


    </div>
    <div class="footer__line ">
         <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH"=> SITE_TEMPLATE_PATH."/includes/footer_copyright.php"
	)
);?>
   <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH"=> SITE_TEMPLATE_PATH."/includes/footer_sm.php"
	)
);?>

    </div>
</div>
	</body>
</html>