
; /* Start:"a:4:{s:4:"full";s:86:"/local/templates/fdrl/components/bitrix/voting.form/survey/script.min.js?1629100920334";s:6:"source";s:68:"/local/templates/fdrl/components/bitrix/voting.form/survey/script.js";s:3:"min";s:72:"/local/templates/fdrl/components/bitrix/voting.form/survey/script.min.js";s:3:"map";s:72:"/local/templates/fdrl/components/bitrix/voting.form/survey/script.map.js";}"*/
function resetForm(e,a){var t=e.elements,c;for(c=0;c<t.length;c++){if(t[c].tagName=="SELECT"){t[c].selectedIndex=0}else if(t[c].tagName=="TEXTAREA"){t[c].value=""}else{switch(t[c].type){case"text":t[c].value="";break;case"radio":case"checkbox":t[c].checked=false;break}}}return BX.PreventDefault(a)}
/* End */
;; /* /local/templates/fdrl/components/bitrix/voting.form/survey/script.min.js?1629100920334*/

//# sourceMappingURL=page_3ac476176cfc35ab98d7b0565de2b5bc.map.js