/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/jquery.hotkeys.js. */
(function(jQuery){this.version='(beta)(0.0.3)';this.all={};this.special_keys={27:'esc',9:'tab',32:'space',13:'return',8:'backspace',145:'scroll',20:'capslock',144:'numlock',19:'pause',45:'insert',36:'home',46:'del',35:'end',33:'pageup',34:'pagedown',37:'left',38:'up',39:'right',40:'down',112:'f1',113:'f2',114:'f3',115:'f4',116:'f5',117:'f6',118:'f7',119:'f8',120:'f9',121:'f10',122:'f11',123:'f12'};this.shift_nums={"`":"~","1":"!","2":"@","3":"#","4":"$","5":"%","6":"^","7":"&","8":"*","9":"(","0":")","-":"_","=":"+",";":":","'":"\"",",":"<",".":">","/":"?","\\":"|"};this.add=function(combi,options,callback){if(jQuery.isFunction(options)){callback=options;options={}};var opt={},defaults={type:'keydown',propagate:false,disableInInput:false,target:'html'},that=this,opt=jQuery.extend(opt,defaults,options||{});combi=combi.toLowerCase();var inspector=function(event){event=jQuery.event.fix(event);var selector=event.data.selector,element=jQuery(event.target);if(opt.disableInInput&&element.is('textarea, input'))return;var code=event.which,type=event.type,character=String.fromCharCode(code).toLowerCase(),special=that.special_keys[code],shift=event.shiftKey,ctrl=event.ctrlKey,alt=event.altKey,propagate=true,mapPoint=null,cbMap=that.all[selector].events[type].callbackMap;if(!shift&&!ctrl&&!alt){mapPoint=cbMap[special]||cbMap[character]}else{var modif='';if(alt)modif+='alt+';if(ctrl)modif+='ctrl+';if(shift)modif+='shift+';mapPoint=cbMap[modif+special]||cbMap[modif+character]||cbMap[modif+that.shift_nums[character]]};if(mapPoint){mapPoint.cb(event);if(!mapPoint.propagate){event.stopPropagation();event.preventDefault();return false}}};if(!this.all[opt.target])this.all[opt.target]={events:{}};if(!this.all[opt.target].events[opt.type]){this.all[opt.target].events[opt.type]={callbackMap:{}};jQuery(opt.target).bind(opt.type,{selector:opt.target},inspector)};this.all[opt.target].events[opt.type].callbackMap[combi]={cb:callback,propagate:opt.propagate};return jQuery};this.remove=function(exp,opt){opt=opt||{};target=opt.target||'html';type=opt.type||'keydown';exp=exp.toLowerCase();jQuery(target).unbind(type);delete this.all[target].events[type].callbackMap[exp];return jQuery};jQuery.hotkeys=this;return jQuery})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/jquery.hotkeys.js. */

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
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/l10n_client.js. */
(function($,Drupal,undefined){Drupal.l10nClient={selected:-1,keys:{toggle:'ctrl+shift+s',clear:'esc'},key:function(pressed){var $l10nClient=Drupal.l10nClient.$l10nClient;switch(pressed){case'toggle':var userSelection=window.getSelection?window.getSelection():document.getSelection?document.getSelection():document.selection.createRange().text;userSelection=String(userSelection);if(userSelection.length>0){this.filter(userSelection);this.toggle(1);$l10nClient.find('.string-search').val(userSelection).focus()}else if($l10nClient.is('.l10n-client-minimized')){this.toggle(1);$l10nClient.find('.string-search').focus()}else this.toggle(0);break;case'clear':this.filter(false);break}},toggle:function(state){var $l10nClient=Drupal.l10nClient.$l10nClient,$clientWrapper=$('#l10n-client-string-select, #l10n-client-string-editor, #l10n-client .labels .label');if(!!state==true){$clientWrapper.show();$l10nClient.removeClass('l10n-client-minimized').addClass('l10n-client-maximized').find('.labels .toggle').text('X');$('body').addClass('toggle-expanded');$.cookie('Drupal_l10n_client','1',{expires:7,path:'/'})}else{$clientWrapper.hide();$l10nClient.removeClass('l10n-client-maximized').addClass('l10n-client-minimized').find('.labels .toggle').text(Drupal.t('Translate Text'));$('body').removeClass('toggle-expanded');$.cookie('Drupal_l10n_client','0',{expires:7,path:'/'})}},getString:function(index,type){return $('#l10n-client-data').find('div:eq('+index+') .'+type).text()},setString:function(index,data){$('#l10n-client-data').find('div:eq('+index+') .target').text(data)},filter:function(search){var $l10nClient=Drupal.l10nClient.$l10nClient,$stringSearch=$l10nClient.find('.string-search'),$stringSelect=$('#l10n-client-string-select').find('li');if(search===false||search===''){$('#l10n-client-search-filter-clear').focus();$stringSelect.show();$stringSearch.val('').focus()}else if(search.length>0)$stringSelect.show().not(':contains('+search+')').hide()}};Drupal.behaviors.l10nClient={attach:function(context){$('#l10n-client').once('l10n-client',function(){$('body').addClass('l10n-client');var $l10nClient=$(this),$l10nClientForm=$('#l10n-client-form'),$stringEditor=$('#l10n-client-string-editor'),$stringEditorSoruceText=$stringEditor.find('.source-text'),$stringSelect=$('#l10n-client-string-select'),cookie=parseInt($.cookie('Drupal_l10n_client'),2);Drupal.l10nClient.$l10nClient=$l10nClient;Drupal.l10nClient.toggle(isNaN(cookie)?0:cookie);$stringSelect.find('li').click(function(){var $this=$(this),$lis=$stringSelect.find('li'),index=$lis.index(this);$lis.removeClass('active');$this.addClass('active');$stringEditorSoruceText.text(Drupal.l10nClient.getString(index,'source'));$l10nClientForm.find('.translation-target').val(Drupal.l10nClient.getString(index,'target'));$l10nClientForm.find('.source-textgroup').val(Drupal.l10nClient.getString(index,'textgroup'));$l10nClientForm.find('.source-context').val(Drupal.l10nClient.getString(index,'context'));$stringEditor.find('.context').text(Drupal.l10nClient.getString(index,'context'));Drupal.l10nClient.selected=index;$l10nClientForm.find('.form-submit').removeAttr("disabled")});$l10nClient.find('.labels .toggle').click(function(){Drupal.l10nClient.toggle($l10nClient.is('.l10n-client-minimized'))});$l10nClientForm.find('.edit-copy').click(function(){$l10nClientForm.find('.translation-target').val($stringEditorSoruceText.text());return false});$l10nClientForm.find('.edit-clear').click(function(){$l10nClientForm.find('.translation-target').val('');return false});if($.hotkeys){$.hotkeys.add(Drupal.l10nClient.keys.toggle,function(){Drupal.l10nClient.key('toggle')});$.hotkeys.add(Drupal.l10nClient.keys.clear,{target:'#l10n-client .string-search',type:'keyup'},function(){Drupal.l10nClient.key('clear')})};$l10nClient.find('.string-search').keyup(function(){Drupal.l10nClient.filter($l10nClient.find('.string-search').val())});$l10nClient.find('#l10n-client-search-filter-clear').click(function(){Drupal.l10nClient.filter(false);return false});$l10nClientForm.submit(function(){var $this=$(this);$this.find('.form-submit').attr("disabled",true);$this.find('.edit-save').after('<div class="ajax-progress ajax-progress-throbber"><div class="throbber">&nbsp;</div><div class="message">'+Drupal.t('Please wait...')+'</div></div>');$.ajax({type:"POST",url:$this.attr('action'),data:{source:$stringEditorSoruceText.text(),target:$this.find('.translation-target').val(),textgroup:$this.find('.source-textgroup').val(),context:$stringEditor.find('.context').text(),form_token:$this.find('input[name=form_token]').val()},success:function(data){var $translationTarget=$l10nClientForm.find('.translation-target'),newTranslation=$translationTarget.val();Drupal.l10nClient.setString(Drupal.l10nClient.selected,newTranslation);var newTranslationStripped=newTranslation.replace(/<\/?[^<>]+>/gi,'').replace(/&quot;/g,'"').replace(/&lt;/g,"<").replace(/&gt;/g,">").replace(/&amp;/g,"&"),newTranslationDisplay=newTranslation;if(newTranslationStripped.length>81)newTranslationDisplay=newTranslationStripped.substr(0,78)+'...';$stringSelect.find('li').eq(Drupal.l10nClient.selected).removeClass('untranslated active').addClass('translated').text(newTranslationDisplay);$stringEditorSoruceText.html(data);$translationTarget.val('');$this.find('div.ajax-progress-throbber').remove()},error:function(xmlhttp){alert(Drupal.t('An HTTP error @status occured.',{'@status':xmlhttp.status}))}});return false})})}}})(jQuery,Drupal);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/l10n_client.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/devel/devel/devel_krumo_path.js. */
(function($){Drupal.behaviors.devel={attach:function(context,settings){$('.krumo-footnote .krumo-call').once().before('<img style="vertical-align: middle;" title="Click to expand. Double-click to show path." src="'+settings.basePath+'misc/help.png"/>');var krumo_name=[],krumo_type=[]
function krumo_traverse(el){krumo_name.push($(el).html());krumo_type.push($(el).siblings('em').html().match(/\w*/)[0]);if($(el).closest('.krumo-nest').length>0)krumo_traverse($(el).closest('.krumo-nest').prev().find('.krumo-name'))};$('.krumo-child > div:first-child',context).dblclick(function(e){if($(this).find('> .krumo-php-path').length>0){$(this).find('> .krumo-php-path').remove()}else{krumo_traverse($(this).find('> a.krumo-name'));var krumo_path_string='';for(var i=krumo_name.length-1;i>=0;--i){if((krumo_name.length-1)==i)krumo_path_string+='$'+krumo_name[i];if(typeof krumo_name[(i-1)]!=='undefined'){if(krumo_type[i]=='Array'){krumo_path_string+="[";if(!/^\d*$/.test(krumo_name[(i-1)]))krumo_path_string+="'";krumo_path_string+=krumo_name[(i-1)];if(!/^\d*$/.test(krumo_name[(i-1)]))krumo_path_string+="'";krumo_path_string+="]"};if(krumo_type[i]=='Object')krumo_path_string+='->'+krumo_name[(i-1)]}};$(this).append('<div class="krumo-php-path" style="font-family: Courier, monospace; font-weight: bold;">'+krumo_path_string+'</div>');krumo_name=[];krumo_type=[]}})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/devel/devel/devel_krumo_path.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/textarea.js. */
(function($){Drupal.behaviors.textarea={attach:function(context,settings){$('.form-textarea-wrapper.resizable',context).once('textarea',function(){var staticOffset=null,textarea=$(this).addClass('resizable-textarea').find('textarea'),grippie=$('<div class="grippie"></div>').mousedown(startDrag);grippie.insertAfter(textarea)
function startDrag(e){staticOffset=textarea.height()-e.pageY;textarea.css('opacity',0.25);$(document).mousemove(performDrag).mouseup(endDrag);return false}
function performDrag(e){textarea.height(Math.max(32,staticOffset+e.pageY)+'px');return false}
function endDrag(e){$(document).unbind('mousemove',performDrag).unbind('mouseup',endDrag);textarea.css('opacity',1)}})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/textarea.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/modules/file/file.js. */
(function($){Drupal.behaviors.fileValidateAutoAttach={attach:function(context,settings){if(settings.file&&settings.file.elements)$.each(settings.file.elements,function(selector){var extensions=settings.file.elements[selector];$(selector,context).bind('change',{extensions:extensions},Drupal.file.validateExtension)})},detach:function(context,settings){if(settings.file&&settings.file.elements)$.each(settings.file.elements,function(selector){$(selector,context).unbind('change',Drupal.file.validateExtension)})}};Drupal.behaviors.fileButtons={attach:function(context){$('input.form-submit',context).bind('mousedown',Drupal.file.disableFields);$('div.form-managed-file input.form-submit',context).bind('mousedown',Drupal.file.progressBar)},detach:function(context){$('input.form-submit',context).unbind('mousedown',Drupal.file.disableFields);$('div.form-managed-file input.form-submit',context).unbind('mousedown',Drupal.file.progressBar)}};Drupal.behaviors.filePreviewLinks={attach:function(context){$('div.form-managed-file .file a, .file-widget .file a',context).bind('click',Drupal.file.openInNewWindow)},detach:function(context){$('div.form-managed-file .file a, .file-widget .file a',context).unbind('click',Drupal.file.openInNewWindow)}};Drupal.file=Drupal.file||{validateExtension:function(event){$('.file-upload-js-error').remove();var extensionPattern=event.data.extensions.replace(/,\s*/g,'|');if(extensionPattern.length>1&&this.value.length>0){var acceptableMatch=new RegExp('\\.('+extensionPattern+')$','gi');if(!acceptableMatch.test(this.value)){var error=Drupal.t("The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.",{'%filename':this.value.replace('C:\\fakepath\\',''),'%extensions':extensionPattern.replace(/\|/g,', ')});$(this).closest('div.form-managed-file').prepend('<div class="messages error file-upload-js-error" aria-live="polite">'+error+'</div>');this.value='';return false}}},disableFields:function(event){var clickedButton=this;if(!$(clickedButton).hasClass('ajax-processed'))return;var $enabledFields=[];if($(this).closest('div.form-managed-file').length>0)$enabledFields=$(this).closest('div.form-managed-file').find('input.form-file');var $fieldsToTemporarilyDisable=$('div.form-managed-file input.form-file').not($enabledFields).not(':disabled');$fieldsToTemporarilyDisable.attr('disabled','disabled');setTimeout(function(){$fieldsToTemporarilyDisable.attr('disabled',false)},1e3)},progressBar:function(event){var clickedButton=this,$progressId=$(clickedButton).closest('div.form-managed-file').find('input.file-progress');if($progressId.length){var originalName=$progressId.attr('name');$progressId.attr('name',originalName.match(/APC_UPLOAD_PROGRESS|UPLOAD_IDENTIFIER/)[0]);setTimeout(function(){$progressId.attr('name',originalName)},1e3)};setTimeout(function(){$(clickedButton).closest('div.form-managed-file').find('div.ajax-progress-bar').slideDown()},500)},openInNewWindow:function(event){$(this).attr('target','_blank');window.open(this.href,'filePreview','toolbar=0,scrollbars=1,location=1,statusbar=1,menubar=0,resizable=1,width=500,height=550');return false}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/modules/file/file.js. */
