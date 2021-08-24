<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"programm",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "slyder",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>

<?$APPLICATION->IncludeComponent("bitrix:menu", "middle.menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "middle",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
</div>
<div class="cube-goal container">
    <p class="cube-goal__text">как это работает</p>
    <div class="cube-goal__cont">
        <a href="#" class="cube-goal__cubes-target cube-goal__cubes_demensions">
            <svg class="cube-goal__arrow_position"  width="38" height="24" viewBox="0 0 38 24"  xmlns="http://www.w3.org/2000/svg">
                <path class="cube-goal__arrow" d="M37.0607 13.0607C37.6464 12.4749 37.6464 11.5251 37.0607 10.9393L27.5147 1.3934C26.9289 0.807614 25.9792 0.807614 25.3934 1.3934C24.8076 1.97919 24.8076 2.92893 25.3934 3.51472L33.8787 12L25.3934 20.4853C24.8076 21.0711 24.8076 22.0208 25.3934 22.6066C25.9792 23.1924 26.9289 23.1924 27.5147 22.6066L37.0607 13.0607ZM-1.31134e-07 13.5L36 13.5L36 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z" fill="white"/>
            </svg>
            <p class="cube-goal__text-goal-target cube-goal__text-goal_position">Выберите вашу цель</p>
            <p class="cube-goal__number">01</p>
        </a>
        <a href="#" class="cube-goal__cubes-borderlist cube-goal__cubes_demensions">
            <svg class="cube-goal__arrow_position"  width="38" height="24" viewBox="0 0 38 24"  xmlns="http://www.w3.org/2000/svg">
                <path class="cube-goal__arrow" d="M37.0607 13.0607C37.6464 12.4749 37.6464 11.5251 37.0607 10.9393L27.5147 1.3934C26.9289 0.807614 25.9792 0.807614 25.3934 1.3934C24.8076 1.97919 24.8076 2.92893 25.3934 3.51472L33.8787 12L25.3934 20.4853C24.8076 21.0711 24.8076 22.0208 25.3934 22.6066C25.9792 23.1924 26.9289 23.1924 27.5147 22.6066L37.0607 13.0607ZM-1.31134e-07 13.5L36 13.5L36 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z" fill="white"/>
            </svg>
            <p class="cube-goal__text-goal-borderlist cube-goal__text-goal_position">Заполните анкету</p>
            <p class="cube-goal__number">02</p>
        </a>
        <a href="#" class="cube-goal__cubes-list cube-goal__cubes_demensions">
            <svg class="cube-goal__arrow_position"  width="38" height="24" viewBox="0 0 38 24"  xmlns="http://www.w3.org/2000/svg">
                <path class="cube-goal__arrow" d="M37.0607 13.0607C37.6464 12.4749 37.6464 11.5251 37.0607 10.9393L27.5147 1.3934C26.9289 0.807614 25.9792 0.807614 25.3934 1.3934C24.8076 1.97919 24.8076 2.92893 25.3934 3.51472L33.8787 12L25.3934 20.4853C24.8076 21.0711 24.8076 22.0208 25.3934 22.6066C25.9792 23.1924 26.9289 23.1924 27.5147 22.6066L37.0607 13.0607ZM-1.31134e-07 13.5L36 13.5L36 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z" fill="white"/>
            </svg>
            <p class="cube-goal__text-goal-list cube-goal__text-goal_position">Система подбирает подходящие программы</p>
            <p class="cube-goal__number">03</p>
        </a>
        <a href="#" class="cube-goal__cubes-man cube-goal__cubes_demensions">
            <svg class="cube-goal__arrow_position"  width="38" height="24" viewBox="0 0 38 24"  xmlns="http://www.w3.org/2000/svg">
                <path class="cube-goal__arrow" d="M37.0607 13.0607C37.6464 12.4749 37.6464 11.5251 37.0607 10.9393L27.5147 1.3934C26.9289 0.807614 25.9792 0.807614 25.3934 1.3934C24.8076 1.97919 24.8076 2.92893 25.3934 3.51472L33.8787 12L25.3934 20.4853C24.8076 21.0711 24.8076 22.0208 25.3934 22.6066C25.9792 23.1924 26.9289 23.1924 27.5147 22.6066L37.0607 13.0607ZM-1.31134e-07 13.5L36 13.5L36 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z" fill="white"/>
            </svg>
            <p class="cube-goal__text-goal-man cube-goal__text-goal_position ">Выбираете программу и путь, как хотите идти по ней</p>
            <p class="cube-goal__number">04</p>
        </a>



    </div>

    <div class="cube-goal__link-cont">
        <a href="#" class="cube-goal__link">Оставить заявку</a>
        <a href="#" class="cube-goal__link">Партнерам</a>
    </div>

</div>

<div class="checklist ">


    <div class="checklist__info-cont container">
        <p class="checklist__prefer-big-text">Что для вас подходит?</p>
        <p class="checklist__go-test-text">Пройдите тест, и узнайте что вам подходит, услуга под ключ или персональая инструкция?</p>
        <p class="checklist__questions">1. Вам важнее сэкономить время или деньги?</p>
        <label class="checklist__checkbox-other">
            <input type="radio" name="pip" >
            <span class="checklist__answer">Время</span>
        </label>
        <label class="checklist__checkbox-other">
            <input type="radio" name="pip" >
            <span class="checklist__answer">Деньги</span>
        </label>
        <p class="checklist__questions">2. Сопровождение менеджера на всех этапах или самостоятельные решения?</p>
        <label class="checklist__checkbox-other">
            <input type="radio" name="pip1" >
            <span class="checklist__answer">Менеджер</span>
        </label>
        <label class="checklist__checkbox-other">
            <input type="radio" name="pip1" >
            <span class="checklist__answer">Сам(а)</span>
        </label>

        <p class="checklist__questions">3.Какой у вас бюджет?</p>
        <label class="checklist__checkbox-other">
            <input type="radio" name="pip2" >
            <span class="checklist__answer">До 2500 евро</span>
        </label>
        <label class="checklist__checkbox-other">
            <input type="radio" name="pip2" >
            <span  class="checklist__answer">2500-5000</span>
        </label>
        <label class="checklist__checkbox-other">
            <input type="radio" name="pip2" >
            <span class="checklist__answer">более 5000</span>
        </label>
        <p class="checklist__questions">4.Что для вас важно в сопровождении процесса?</p>
        <label class="checklist__checkbox-other">
            <input type="radio" name="pip3" >
            <span class="checklist__answer checklist__answer_padding-top">Контроль моих действий</span>
        </label>
        <label class="checklist__checkbox-other">
            <input type="radio" name="pip3" >
            <span class="checklist__answer checklist__answer_padding-top">Чтобы все сделали за меня</span>
        </label>
        <label class="checklist__checkbox-other checklist__checkbox-other_width">
            <input type="radio" name="pip3" >
            <span class="checklist__answer checklist__answer_margin checklist__answer_padding-top">Подробное информирование о процессе</span>
        </label>
        <br>
        <label class="checklist__checkbox-other  ">
            <input type="radio" name="pip3" >
            <span class="checklist__answer checklist__answer_padding-top " >Постоянная связь с экпертами</span>
        </label>
        <label class="checklist__checkbox-other checklist__checkbox-other_width">
            <input type="radio" name="pip3" >
            <span class="checklist__answer checklist__answer_margin checklist__answer_padding-top">Шаблоны примеры и образцы документов</span>
        </label>

    </div>
</div>

<div class="advantage">
    <div class="advantage__cont container">

        <p class="advantage__text">преимущества работы с нами</p>

        <div class="advantage__blocks-cont" >

            <div class="advantage__blocks advantage__blocks_img1">
                <div class="advantage__line"></div>
                <p class="advantage__blocks-text">Гарантия-возврат денег</p>
            </div>
            <div class="advantage__blocks advantage__blocks_img2">
                <div class="advantage__line"></div>
                <p class="advantage__blocks-text-2 ">Сервис 24/7</p>
            </div>
            <div class="advantage__blocks advantage__blocks_img3">
                <div class="advantage__line"></div>
                <p class="advantage__blocks-text">Инливидуальный
                    подход к кейсам</p>
            </div>
            <div class="advantage__blocks advantage__blocks_img4">
                <div class="advantage__line"></div>
                <p class="advantage__blocks-text">Не работаем
                    по серым схемам</p>
            </div>
        </div>
        <div class="advantage__program-cont">
            <a href="#" class="advantage__program" >Подобрать программу</a>
        </div>

    </div>
</div>
<div class="vidjet container">
    <p class="vidjet__text">ВИДЖЕТ</p>
    <div class="vidjet__canvas-cont">

    </div>

</div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>