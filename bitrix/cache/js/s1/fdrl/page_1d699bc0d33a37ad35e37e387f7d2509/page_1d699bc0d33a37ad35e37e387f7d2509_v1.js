
; /* Start:"a:4:{s:4:"full";s:92:"/bitrix/components/bitrix/voting.form/templates/with_description/script.min.js?1629052596334";s:6:"source";s:74:"/bitrix/components/bitrix/voting.form/templates/with_description/script.js";s:3:"min";s:78:"/bitrix/components/bitrix/voting.form/templates/with_description/script.min.js";s:3:"map";s:78:"/bitrix/components/bitrix/voting.form/templates/with_description/script.map.js";}"*/
function resetForm(e,a){var t=e.elements,c;for(c=0;c<t.length;c++){if(t[c].tagName=="SELECT"){t[c].selectedIndex=0}else if(t[c].tagName=="TEXTAREA"){t[c].value=""}else{switch(t[c].type){case"text":t[c].value="";break;case"radio":case"checkbox":t[c].checked=false;break}}}return BX.PreventDefault(a)}
/* End */
;; /* /bitrix/components/bitrix/voting.form/templates/with_description/script.min.js?1629052596334*/

//# sourceMappingURL=page_1d699bc0d33a37ad35e37e387f7d2509.map.js