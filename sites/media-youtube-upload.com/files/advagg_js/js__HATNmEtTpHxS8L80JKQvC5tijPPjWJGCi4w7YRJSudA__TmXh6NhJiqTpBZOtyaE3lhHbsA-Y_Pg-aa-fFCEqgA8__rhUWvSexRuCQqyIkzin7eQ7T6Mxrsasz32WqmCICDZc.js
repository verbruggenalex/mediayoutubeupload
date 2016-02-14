/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/jquery.hotkeys.js. */
(function(jQuery){this.version='(beta)(0.0.3)';this.all={};this.special_keys={27:'esc',9:'tab',32:'space',13:'return',8:'backspace',145:'scroll',20:'capslock',144:'numlock',19:'pause',45:'insert',36:'home',46:'del',35:'end',33:'pageup',34:'pagedown',37:'left',38:'up',39:'right',40:'down',112:'f1',113:'f2',114:'f3',115:'f4',116:'f5',117:'f6',118:'f7',119:'f8',120:'f9',121:'f10',122:'f11',123:'f12'};this.shift_nums={"`":"~","1":"!","2":"@","3":"#","4":"$","5":"%","6":"^","7":"&","8":"*","9":"(","0":")","-":"_","=":"+",";":":","'":"\"",",":"<",".":">","/":"?","\\":"|"};this.add=function(combi,options,callback){if(jQuery.isFunction(options)){callback=options;options={}};var opt={},defaults={type:'keydown',propagate:false,disableInInput:false,target:'html'},that=this,opt=jQuery.extend(opt,defaults,options||{});combi=combi.toLowerCase();var inspector=function(event){event=jQuery.event.fix(event);var selector=event.data.selector,element=jQuery(event.target);if(opt.disableInInput&&element.is('textarea, input'))return;var code=event.which,type=event.type,character=String.fromCharCode(code).toLowerCase(),special=that.special_keys[code],shift=event.shiftKey,ctrl=event.ctrlKey,alt=event.altKey,propagate=true,mapPoint=null,cbMap=that.all[selector].events[type].callbackMap;if(!shift&&!ctrl&&!alt){mapPoint=cbMap[special]||cbMap[character]}else{var modif='';if(alt)modif+='alt+';if(ctrl)modif+='ctrl+';if(shift)modif+='shift+';mapPoint=cbMap[modif+special]||cbMap[modif+character]||cbMap[modif+that.shift_nums[character]]};if(mapPoint){mapPoint.cb(event);if(!mapPoint.propagate){event.stopPropagation();event.preventDefault();return false}}};if(!this.all[opt.target])this.all[opt.target]={events:{}};if(!this.all[opt.target].events[opt.type]){this.all[opt.target].events[opt.type]={callbackMap:{}};jQuery(opt.target).bind(opt.type,{selector:opt.target},inspector)};this.all[opt.target].events[opt.type].callbackMap[combi]={cb:callback,propagate:opt.propagate};return jQuery};this.remove=function(exp,opt){opt=opt||{};target=opt.target||'html';type=opt.type||'keydown';exp=exp.toLowerCase();jQuery(target).unbind(type);delete this.all[target].events[type].callbackMap[exp];return jQuery};jQuery.hotkeys=this;return jQuery})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/jquery.hotkeys.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/l10n_client.js. */
(function($,Drupal,undefined){Drupal.l10nClient={selected:-1,keys:{toggle:'ctrl+shift+s',clear:'esc'},key:function(pressed){var $l10nClient=Drupal.l10nClient.$l10nClient;switch(pressed){case'toggle':var userSelection=window.getSelection?window.getSelection():document.getSelection?document.getSelection():document.selection.createRange().text;userSelection=String(userSelection);if(userSelection.length>0){this.filter(userSelection);this.toggle(1);$l10nClient.find('.string-search').val(userSelection).focus()}else if($l10nClient.is('.l10n-client-minimized')){this.toggle(1);$l10nClient.find('.string-search').focus()}else this.toggle(0);break;case'clear':this.filter(false);break}},toggle:function(state){var $l10nClient=Drupal.l10nClient.$l10nClient,$clientWrapper=$('#l10n-client-string-select, #l10n-client-string-editor, #l10n-client .labels .label');if(!!state==true){$clientWrapper.show();$l10nClient.removeClass('l10n-client-minimized').addClass('l10n-client-maximized').find('.labels .toggle').text('X');$('body').addClass('toggle-expanded');$.cookie('Drupal_l10n_client','1',{expires:7,path:'/'})}else{$clientWrapper.hide();$l10nClient.removeClass('l10n-client-maximized').addClass('l10n-client-minimized').find('.labels .toggle').text(Drupal.t('Translate Text'));$('body').removeClass('toggle-expanded');$.cookie('Drupal_l10n_client','0',{expires:7,path:'/'})}},getString:function(index,type){return $('#l10n-client-data').find('div:eq('+index+') .'+type).text()},setString:function(index,data){$('#l10n-client-data').find('div:eq('+index+') .target').text(data)},filter:function(search){var $l10nClient=Drupal.l10nClient.$l10nClient,$stringSearch=$l10nClient.find('.string-search'),$stringSelect=$('#l10n-client-string-select').find('li');if(search===false||search===''){$('#l10n-client-search-filter-clear').focus();$stringSelect.show();$stringSearch.val('').focus()}else if(search.length>0)$stringSelect.show().not(':contains('+search+')').hide()}};Drupal.behaviors.l10nClient={attach:function(context){$('#l10n-client').once('l10n-client',function(){$('body').addClass('l10n-client');var $l10nClient=$(this),$l10nClientForm=$('#l10n-client-form'),$stringEditor=$('#l10n-client-string-editor'),$stringEditorSoruceText=$stringEditor.find('.source-text'),$stringSelect=$('#l10n-client-string-select'),cookie=parseInt($.cookie('Drupal_l10n_client'),2);Drupal.l10nClient.$l10nClient=$l10nClient;Drupal.l10nClient.toggle(isNaN(cookie)?0:cookie);$stringSelect.find('li').click(function(){var $this=$(this),$lis=$stringSelect.find('li'),index=$lis.index(this);$lis.removeClass('active');$this.addClass('active');$stringEditorSoruceText.text(Drupal.l10nClient.getString(index,'source'));$l10nClientForm.find('.translation-target').val(Drupal.l10nClient.getString(index,'target'));$l10nClientForm.find('.source-textgroup').val(Drupal.l10nClient.getString(index,'textgroup'));$l10nClientForm.find('.source-context').val(Drupal.l10nClient.getString(index,'context'));$stringEditor.find('.context').text(Drupal.l10nClient.getString(index,'context'));Drupal.l10nClient.selected=index;$l10nClientForm.find('.form-submit').removeAttr("disabled")});$l10nClient.find('.labels .toggle').click(function(){Drupal.l10nClient.toggle($l10nClient.is('.l10n-client-minimized'))});$l10nClientForm.find('.edit-copy').click(function(){$l10nClientForm.find('.translation-target').val($stringEditorSoruceText.text());return false});$l10nClientForm.find('.edit-clear').click(function(){$l10nClientForm.find('.translation-target').val('');return false});if($.hotkeys){$.hotkeys.add(Drupal.l10nClient.keys.toggle,function(){Drupal.l10nClient.key('toggle')});$.hotkeys.add(Drupal.l10nClient.keys.clear,{target:'#l10n-client .string-search',type:'keyup'},function(){Drupal.l10nClient.key('clear')})};$l10nClient.find('.string-search').keyup(function(){Drupal.l10nClient.filter($l10nClient.find('.string-search').val())});$l10nClient.find('#l10n-client-search-filter-clear').click(function(){Drupal.l10nClient.filter(false);return false});$l10nClientForm.submit(function(){var $this=$(this);$this.find('.form-submit').attr("disabled",true);$this.find('.edit-save').after('<div class="ajax-progress ajax-progress-throbber"><div class="throbber">&nbsp;</div><div class="message">'+Drupal.t('Please wait...')+'</div></div>');$.ajax({type:"POST",url:$this.attr('action'),data:{source:$stringEditorSoruceText.text(),target:$this.find('.translation-target').val(),textgroup:$this.find('.source-textgroup').val(),context:$stringEditor.find('.context').text(),form_token:$this.find('input[name=form_token]').val()},success:function(data){var $translationTarget=$l10nClientForm.find('.translation-target'),newTranslation=$translationTarget.val();Drupal.l10nClient.setString(Drupal.l10nClient.selected,newTranslation);var newTranslationStripped=newTranslation.replace(/<\/?[^<>]+>/gi,'').replace(/&quot;/g,'"').replace(/&lt;/g,"<").replace(/&gt;/g,">").replace(/&amp;/g,"&"),newTranslationDisplay=newTranslation;if(newTranslationStripped.length>81)newTranslationDisplay=newTranslationStripped.substr(0,78)+'...';$stringSelect.find('li').eq(Drupal.l10nClient.selected).removeClass('untranslated active').addClass('translated').text(newTranslationDisplay);$stringEditorSoruceText.html(data);$translationTarget.val('');$this.find('div.ajax-progress-throbber').remove()},error:function(xmlhttp){alert(Drupal.t('An HTTP error @status occured.',{'@status':xmlhttp.status}))}});return false})})}}})(jQuery,Drupal);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/l10n_client.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/textarea.js. */
(function($){Drupal.behaviors.textarea={attach:function(context,settings){$('.form-textarea-wrapper.resizable',context).once('textarea',function(){var staticOffset=null,textarea=$(this).addClass('resizable-textarea').find('textarea'),grippie=$('<div class="grippie"></div>').mousedown(startDrag);grippie.insertAfter(textarea)
function startDrag(e){staticOffset=textarea.height()-e.pageY;textarea.css('opacity',0.25);$(document).mousemove(performDrag).mouseup(endDrag);return false}
function performDrag(e){textarea.height(Math.max(32,staticOffset+e.pageY)+'px');return false}
function endDrag(e){$(document).unbind('mousemove',performDrag).unbind('mouseup',endDrag);textarea.css('opacity',1)}})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/textarea.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/devel/devel/devel_krumo_path.js. */
(function($){Drupal.behaviors.devel={attach:function(context,settings){$('.krumo-footnote .krumo-call').once().before('<img style="vertical-align: middle;" title="Click to expand. Double-click to show path." src="'+settings.basePath+'misc/help.png"/>');var krumo_name=[],krumo_type=[]
function krumo_traverse(el){krumo_name.push($(el).html());krumo_type.push($(el).siblings('em').html().match(/\w*/)[0]);if($(el).closest('.krumo-nest').length>0)krumo_traverse($(el).closest('.krumo-nest').prev().find('.krumo-name'))};$('.krumo-child > div:first-child',context).dblclick(function(e){if($(this).find('> .krumo-php-path').length>0){$(this).find('> .krumo-php-path').remove()}else{krumo_traverse($(this).find('> a.krumo-name'));var krumo_path_string='';for(var i=krumo_name.length-1;i>=0;--i){if((krumo_name.length-1)==i)krumo_path_string+='$'+krumo_name[i];if(typeof krumo_name[(i-1)]!=='undefined'){if(krumo_type[i]=='Array'){krumo_path_string+="[";if(!/^\d*$/.test(krumo_name[(i-1)]))krumo_path_string+="'";krumo_path_string+=krumo_name[(i-1)];if(!/^\d*$/.test(krumo_name[(i-1)]))krumo_path_string+="'";krumo_path_string+="]"};if(krumo_type[i]=='Object')krumo_path_string+='->'+krumo_name[(i-1)]}};$(this).append('<div class="krumo-php-path" style="font-family: Courier, monospace; font-weight: bold;">'+krumo_path_string+'</div>');krumo_name=[];krumo_type=[]}})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/devel/devel/devel_krumo_path.js. */

/**
 * Cookie plugin 1.0
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */
jQuery.cookie=function(b,j,m){if(typeof j!="undefined"){m=m||{};if(j===null){j="";m.expires=-1}var e="";if(m.expires&&(typeof m.expires=="number"||m.expires.toUTCString)){var f;if(typeof m.expires=="number"){f=new Date();f.setTime(f.getTime()+(m.expires*24*60*60*1000))}else{f=m.expires}e="; expires="+f.toUTCString()}var l=m.path?"; path="+(m.path):"";var g=m.domain?"; domain="+(m.domain):"";var a=m.secure?"; secure":"";document.cookie=[b,"=",encodeURIComponent(j),e,l,g,a].join("")}else{var d=null;if(document.cookie&&document.cookie!=""){var k=document.cookie.split(";");for(var h=0;h<k.length;h++){var c=jQuery.trim(k[h]);if(c.substring(0,b.length+1)==(b+"=")){d=decodeURIComponent(c.substring(b.length+1));break}}}return d}};
;/**/
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/admin/module_filter/js/module_filter.js. */
(function($){Drupal.ModuleFilter={};Drupal.ModuleFilter.explode=function(string){var queryArray=string.match(/([a-zA-Z]+\:(\w+|"[^"]+")*)|\w+|"[^"]+"/g);if(!queryArray)queryArray=new Array();var i=queryArray.length;while(i--)queryArray[i]=queryArray[i].replace(/"/g,"");return queryArray};Drupal.ModuleFilter.getState=function(key){if(!Drupal.ModuleFilter.state){Drupal.ModuleFilter.state={};var cookie=$.cookie('DrupalModuleFilter'),query=cookie?cookie.split('&'):[];if(query)for(var i in query)if(typeof(query[i])=='string'&&query[i].indexOf('=')!=-1){var values=query[i].split('=');if(values.length===2)Drupal.ModuleFilter.state[values[0]]=values[1]}};return Drupal.ModuleFilter.state[key]?Drupal.ModuleFilter.state[key]:false};Drupal.ModuleFilter.setState=function(key,value){var existing=Drupal.ModuleFilter.getState(key);if(existing!=value){Drupal.ModuleFilter.state[key]=value;var query=[];for(var i in Drupal.ModuleFilter.state)query.push(i+'='+Drupal.ModuleFilter.state[i]);$.cookie('DrupalModuleFilter',query.join('&'),{expires:7,path:'/'})}};Drupal.ModuleFilter.Filter=function(element,selector,options){var self=this;this.element=element;this.text=$(this.element).val();this.settings=Drupal.settings.moduleFilter;this.selector=selector;this.options=$.extend({delay:500,striping:false,childSelector:null,empty:Drupal.t('No results'),rules:new Array()},options);if(this.options.wrapper==undefined)this.options.wrapper=$(self.selector).parent();this.element.after('<div class="module-filter-clear"><a href="#" class="js-hide">'+Drupal.t('clear')+'</a></div>');if(this.text)$('.module-filter-clear a',this.element.parent()).removeClass('js-hide');$('.module-filter-clear a',this.element.parent()).click(function(){self.element.val('');self.text='';delete self.queries;self.applyFilter();self.element.focus();$(this).addClass('js-hide');return false});this.updateQueries=function(){var queryStrings=Drupal.ModuleFilter.explode(self.text);self.queries=new Array();for(var i in queryStrings){var query={operator:'text',string:queryStrings[i]};if(self.operators!=undefined)if(queryStrings[i].indexOf(':')>0){var args=queryStrings[i].split(':',2),operator=args.shift();if(self.operators[operator]!=undefined){query.operator=operator;query.string=args.shift()}};query.string=query.string.toLowerCase();self.queries.push(query)};if(self.queries.length<=0)self.queries.push({operator:'text',string:''})};this.applyFilter=function(){self.results=new Array();self.updateQueries();if(self.index==undefined)self.buildIndex();self.element.trigger('moduleFilter:start');$.each(self.index,function(key,item){var $item=item.element;for(var i in self.queries){var query=self.queries[i];if(query.operator=='text'){if(item.text.indexOf(query.string)<0)continue}else{var func=self.operators[query.operator];if(!(func(query.string,self,item)))continue};var rulesResult=self.processRules(item);if(rulesResult!==false)return true};$item.addClass('js-hide')});self.element.trigger('moduleFilter:finish',{results:self.results});if(self.options.striping)self.stripe();if(self.results.length>0){self.options.wrapper.find('.module-filter-no-results').remove()}else if(!self.options.wrapper.find('.module-filter-no-results').length)self.options.wrapper.append($('<p class="module-filter-no-results"/>').text(self.options.empty))};self.element.keyup(function(e){switch(e.which){case 13:if(self.timeOut)clearTimeout(self.timeOut);self.applyFilter();break;default:if(self.text!=$(this).val()){if(self.timeOut)clearTimeout(self.timeOut);self.text=$(this).val();if(self.text){self.element.parent().find('.module-filter-clear a').removeClass('js-hide')}else self.element.parent().find('.module-filter-clear a').addClass('js-hide');self.element.trigger('moduleFilter:keyup');self.timeOut=setTimeout(self.applyFilter,self.options.delay)};break}});self.element.keypress(function(e){if(e.which==13)e.preventDefault()})};Drupal.ModuleFilter.Filter.prototype.buildIndex=function(){var self=this,index=new Array();$(this.selector).each(function(i){var text=(self.options.childSelector)?$(self.options.childSelector,this).text():$(this).text(),item={key:i,element:$(this),text:text.toLowerCase()};for(var j in self.options.buildIndex){var func=self.options.buildIndex[j];item=$.extend(func(self,item),item)};$(this).data('indexKey',i);index.push(item);delete item});this.index=index};Drupal.ModuleFilter.Filter.prototype.processRules=function(item){var self=this,$item=item.element,rulesResult=true;if(self.options.rules.length>0)for(var i in self.options.rules){var func=self.options.rules[i];rulesResult=func(self,item);if(rulesResult===false)break};if(rulesResult!==false){$item.removeClass('js-hide');self.results.push(item)};return rulesResult};Drupal.ModuleFilter.Filter.prototype.stripe=function(){var self=this,flip={even:'odd',odd:'even'},stripe='odd';$.each(self.index,function(key,item){if(!item.element.hasClass('js-hide')){item.element.removeClass('odd even').addClass(stripe);stripe=flip[stripe]}})};$.fn.moduleFilter=function(selector,options){var filterInput=this;filterInput.parents('.module-filter-inputs-wrapper').show();if(Drupal.settings.moduleFilter.setFocus)filterInput.focus();filterInput.data('moduleFilter',new Drupal.ModuleFilter.Filter(this,selector,options))}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/admin/module_filter/js/module_filter.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/admin/module_filter/js/update_status.js. */
(function($){Drupal.behaviors.moduleFilterUpdateStatus={attach:function(context){$('#module-filter-update-status-form').once('update-status',function(){var filterInput=$('input[name="module_filter[name]"]',context);filterInput.moduleFilter('table.update > tbody > tr',{wrapper:$('table.update:first').parent(),delay:300,childSelector:'div.project a',rules:[function(moduleFilter,item){switch(moduleFilter.options.show){case'all':return true;case'updates':if(item.state=='warning'||item.state=='error')return true;break;case'security':if(item.state=='error')return true;break;case'ignore':if(item.state=='ignored')return true;break;case'unknown':if(item.state=='unknown')return true;break};return false}],buildIndex:[function(moduleFilter,item){if($('.version-status',item.element).text()==Drupal.t('Ignored from settings')){item.state='ignored';return item};if(item.element.is('.ok')){item.state='ok'}else if(item.element.is('.warning')){item.state='warning'}else if(item.element.is('.error')){item.state='error'}else if(item.element.is('.unknown'))item.state='unknown';return item}],show:$('#edit-module-filter-show input[name="module_filter[show]"]',context).val()});var moduleFilter=filterInput.data('moduleFilter');if(Drupal.settings.moduleFilter.rememberUpdateState){var updateShow=Drupal.ModuleFilter.getState('updateShow');if(updateShow){moduleFilter.options.show=updateShow;$('#edit-module-filter-show input[name="module_filter[show]"][value="'+updateShow+'"]',context).click()}};$('#edit-module-filter-show input[name="module_filter[show]"]',context).change(function(){moduleFilter.options.show=$(this).val();Drupal.ModuleFilter.setState('updateShow',moduleFilter.options.show);moduleFilter.applyFilter()});moduleFilter.element.bind('moduleFilter:start',function(){$('table.update').each(function(){$(this).show().prev('h3').show()})});moduleFilter.element.bind('moduleFilter:finish',function(e,data){$('table.update').each(function(){var $table=$(this);if($('tbody tr',$(this)).filter(':visible').length==0)$table.hide().prev('h3').hide()})});moduleFilter.element.bind('moduleFilter:keyup',function(){if(moduleFilter.clearOffset==undefined){moduleFilter.inputWidth=filterInput.width();moduleFilter.clearOffset=moduleFilter.element.parent().find('.module-filter-clear a').width()};if(moduleFilter.text){filterInput.width(moduleFilter.inputWidth-moduleFilter.clearOffset-5).parent().css('margin-right',moduleFilter.clearOffset+5)}else filterInput.width(moduleFilter.inputWidth).parent().css('margin-right',0)});moduleFilter.element.parent().find('.module-filter-clear a').click(function(){filterInput.width(moduleFilter.inputWidth).parent().css('margin-right',0)});moduleFilter.applyFilter()})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/admin/module_filter/js/update_status.js. */
