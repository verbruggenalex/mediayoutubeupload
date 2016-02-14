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
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_progress.js. */
(function($){Drupal.progressBar=function(id,updateCallback,method,errorCallback){var pb=this;this.id=id;this.method=method||'GET';this.updateCallback=updateCallback;this.errorCallback=errorCallback;this.element=$('<div class="progress-wrapper" aria-live="polite"></div>');this.element.html('<div id ="'+id+'" class="progress progress-striped active"><div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="percentage sr-only"></div></div></div></div><div class="percentage pull-right"></div><div class="message">&nbsp;</div>')};Drupal.progressBar.prototype.setProgress=function(percentage,message){if(percentage>=0&&percentage<=100){$('div.progress-bar',this.element).css('width',percentage+'%');$('div.progress-bar',this.element).attr('aria-valuenow',percentage);$('div.percentage',this.element).html(percentage+'%')};$('div.message',this.element).html(message);if(this.updateCallback)this.updateCallback(percentage,message,this)};Drupal.progressBar.prototype.startMonitoring=function(uri,delay){this.delay=delay;this.uri=uri;this.sendPing()};Drupal.progressBar.prototype.stopMonitoring=function(){clearTimeout(this.timer);this.uri=null};Drupal.progressBar.prototype.sendPing=function(){if(this.timer)clearTimeout(this.timer);if(this.uri){var pb=this;$.ajax({type:this.method,url:this.uri,data:'',dataType:'json',success:function(progress){if(progress.status==0){pb.displayError(progress.data);return};pb.setProgress(progress.percentage,progress.message);pb.timer=setTimeout(function(){pb.sendPing()},pb.delay)},error:function(xmlhttp){pb.displayError(Drupal.ajaxError(xmlhttp,pb.uri))}})}};Drupal.progressBar.prototype.displayError=function(string){var error=$('<div class="alert alert-block alert-error"><a class="close" data-dismiss="alert" href="#">&times;</a><h4>Error message</h4></div>').append(string);$(this.element).before(error).hide();if(this.errorCallback)this.errorCallback(this)}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_progress.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/ctools/js/modal.js. */
(function($){Drupal.CTools=Drupal.CTools||{};Drupal.CTools.Modal=Drupal.CTools.Modal||{};Drupal.CTools.Modal.show=function(choice){var opts={};if(choice&&typeof choice=='string'&&Drupal.settings[choice]){$.extend(true,opts,Drupal.settings[choice])}else if(choice)$.extend(true,opts,choice);var defaults={modalTheme:'CToolsModalDialog',throbberTheme:'CToolsModalThrobber',animation:'show',animationSpeed:'fast',modalSize:{type:'scale',width:.8,height:.8,addWidth:0,addHeight:0,contentRight:25,contentBottom:45},modalOptions:{opacity:.55,background:'#fff'},modalClass:'default'},settings={};$.extend(true,settings,defaults,Drupal.settings.CToolsModal,opts);if(Drupal.CTools.Modal.currentSettings&&Drupal.CTools.Modal.currentSettings!=settings){Drupal.CTools.Modal.modal.remove();Drupal.CTools.Modal.modal=null};Drupal.CTools.Modal.currentSettings=settings;var resize=function(e){var context=e?document:Drupal.CTools.Modal.modal;if(Drupal.CTools.Modal.currentSettings.modalSize.type=='scale'){var width=$(window).width()*Drupal.CTools.Modal.currentSettings.modalSize.width,height=$(window).height()*Drupal.CTools.Modal.currentSettings.modalSize.height}else{var width=Drupal.CTools.Modal.currentSettings.modalSize.width,height=Drupal.CTools.Modal.currentSettings.modalSize.height};$('div.ctools-modal-content',context).css({width:width+Drupal.CTools.Modal.currentSettings.modalSize.addWidth+'px',height:height+Drupal.CTools.Modal.currentSettings.modalSize.addHeight+'px'});$('div.ctools-modal-content .modal-content',context).css({width:(width-Drupal.CTools.Modal.currentSettings.modalSize.contentRight)+'px',height:(height-Drupal.CTools.Modal.currentSettings.modalSize.contentBottom)+'px'})};if(!Drupal.CTools.Modal.modal){Drupal.CTools.Modal.modal=$(Drupal.theme(settings.modalTheme));if(settings.modalSize.type=='scale')$(window).bind('resize',resize)};resize();$('span.modal-title',Drupal.CTools.Modal.modal).html(Drupal.CTools.Modal.currentSettings.loadingText);Drupal.CTools.Modal.modalContent(Drupal.CTools.Modal.modal,settings.modalOptions,settings.animation,settings.animationSpeed,settings.modalClass);$('#modalContent .modal-content').html(Drupal.theme(settings.throbberTheme)).addClass('ctools-modal-loading');$('#modalContent .modal-content').delegate('input.form-autocomplete','keyup',function(){$('#autocomplete').css('top',$(this).position().top+$(this).outerHeight()+$(this).offsetParent().filter('#modal-content').scrollTop())})};Drupal.CTools.Modal.dismiss=function(){if(Drupal.CTools.Modal.modal)Drupal.CTools.Modal.unmodalContent(Drupal.CTools.Modal.modal)};Drupal.theme.prototype.CToolsModalDialog=function(){var html='';html+='  <div id="ctools-modal">';html+='    <div class="ctools-modal-content">';html+='      <div class="modal-header">';html+='        <a class="close" href="#">';html+=Drupal.CTools.Modal.currentSettings.closeText+Drupal.CTools.Modal.currentSettings.closeImage;html+='        </a>';html+='        <span id="modal-title" class="modal-title">&nbsp;</span>';html+='      </div>';html+='      <div id="modal-content" class="modal-content">';html+='      </div>';html+='    </div>';html+='  </div>';return html};Drupal.theme.prototype.CToolsModalThrobber=function(){var html='';html+='  <div id="modal-throbber">';html+='    <div class="modal-throbber-wrapper">';html+=Drupal.CTools.Modal.currentSettings.throbber;html+='    </div>';html+='  </div>';return html};Drupal.CTools.Modal.getSettings=function(object){var match=$(object).attr('class').match(/ctools-modal-(\S+)/);if(match)return match[1]};Drupal.CTools.Modal.clickAjaxCacheLink=function(){Drupal.CTools.Modal.show(Drupal.CTools.Modal.getSettings(this));return Drupal.CTools.AJAX.clickAJAXCacheLink.apply(this)};Drupal.CTools.Modal.clickAjaxLink=function(){Drupal.CTools.Modal.show(Drupal.CTools.Modal.getSettings(this));return false};Drupal.CTools.Modal.submitAjaxForm=function(e){var $form=$(this),url=$form.attr('action');setTimeout(function(){Drupal.CTools.AJAX.ajaxSubmit($form,url)},1);return false};Drupal.behaviors.ZZCToolsModal={attach:function(context){$('area.ctools-use-modal, a.ctools-use-modal',context).once('ctools-use-modal',function(){var $this=$(this);$this.click(Drupal.CTools.Modal.clickAjaxLink);var element_settings={};if($this.attr('href')){element_settings.url=$this.attr('href');element_settings.event='click';element_settings.progress={type:'throbber'}};var base=$this.attr('href');Drupal.ajax[base]=new Drupal.ajax(base,this,element_settings)});$('input.ctools-use-modal, button.ctools-use-modal',context).once('ctools-use-modal',function(){var $this=$(this);$this.click(Drupal.CTools.Modal.clickAjaxLink);var button=this,element_settings={};element_settings.url=Drupal.CTools.Modal.findURL(this);if(element_settings.url=='')element_settings.url=$(this).closest('form').attr('action');element_settings.event='click';element_settings.setClick=true;var base=$this.attr('id');Drupal.ajax[base]=new Drupal.ajax(base,this,element_settings);$('.'+$(button).attr('id')+'-url').change(function(){Drupal.ajax[base].options.url=Drupal.CTools.Modal.findURL(button)})});$('#modal-content form',context).once('ctools-use-modal',function(){var $this=$(this),element_settings={};element_settings.url=$this.attr('action');element_settings.event='submit';element_settings.progress={type:'throbber'};var base=$this.attr('id');Drupal.ajax[base]=new Drupal.ajax(base,this,element_settings);Drupal.ajax[base].form=$this;$('input[type=submit], button',this).click(function(event){Drupal.ajax[base].element=this;this.form.clk=this;if(Drupal.autocompleteSubmit&&!Drupal.autocompleteSubmit())return false;if(event.bubbles==undefined){$(this.form).trigger('submit');return false}})});$('.ctools-close-modal',context).once('ctools-close-modal').click(function(){Drupal.CTools.Modal.dismiss();return false})}};Drupal.CTools.Modal.modal_display=function(ajax,response,status){if($('#modalContent').length==0)Drupal.CTools.Modal.show(Drupal.CTools.Modal.getSettings(ajax.element));$('#modal-title').html(response.title);$('#modal-content').html(response.output).scrollTop(0);var settings=response.settings||ajax.settings||Drupal.settings;Drupal.attachBehaviors('#modalContent',settings);if($('#modal-content').hasClass('ctools-modal-loading')){$('#modal-content').removeClass('ctools-modal-loading')}else $('#modal-content :focusable:first').focus()};Drupal.CTools.Modal.modal_dismiss=function(command){Drupal.CTools.Modal.dismiss();$('link.ctools-temporary-css').remove()};Drupal.CTools.Modal.modal_loading=function(command){Drupal.CTools.Modal.modal_display({output:Drupal.theme(Drupal.CTools.Modal.currentSettings.throbberTheme),title:Drupal.CTools.Modal.currentSettings.loadingText})};Drupal.CTools.Modal.findURL=function(item){var url='',url_class='.'+$(item).attr('id')+'-url';$(url_class).each(function(){var $this=$(this);if(url&&$this.val())url+='/';url+=$this.val()});return url};Drupal.CTools.Modal.modalContent=function(content,css,animation,speed,modalClass){if(!animation){animation='show'}else if(animation!='fadeIn'&&animation!='slideDown')animation='show';if(!speed)speed='fast';css=jQuery.extend({position:'absolute',left:'0px',margin:'0px',background:'#000',opacity:'.55'},css);css.filter='alpha(opacity='+(100*css.opacity)+')';content.hide();if($('#modalBackdrop').length)$('#modalBackdrop').remove();if($('#modalContent').length)$('#modalContent').remove();if(self.pageYOffset){var wt=self.pageYOffset}else if(document.documentElement&&document.documentElement.scrollTop){var wt=document.documentElement.scrollTop}else if(document.body)var wt=document.body.scrollTop;var docHeight=$(document).height()+50,docWidth=$(document).width(),winHeight=$(window).height(),winWidth=$(window).width();if(docHeight<winHeight)docHeight=winHeight;$('body').append('<div id="modalBackdrop" class="backdrop-'+modalClass+'" style="z-index: 1000; display: none;"></div><div id="modalContent" class="modal-'+modalClass+'" style="z-index: 1001; position: absolute;">'+$(content).html()+'</div>');var getTabbableElements=function(){var tabbableElements=$('#modalContent :tabbable'),radioButtons=tabbableElements.filter('input[type="radio"]');if(radioButtons.length>0){var anySelected={};radioButtons.each(function(){var name=this.name;if(typeof anySelected[name]==='undefined')anySelected[name]=radioButtons.filter('input[name="'+name+'"]:checked').length!==0});var found={};tabbableElements=tabbableElements.filter(function(){var keep=true;if(this.type=='radio')if(anySelected[this.name]){keep=this.checked}else{if(found[this.name])keep=false;found[this.name]=true};return keep})};return tabbableElements.get()};modalEventHandler=function(event){target=null;if(event){target=event.target}else{event=window.event;target=event.srcElement};var parents=$(target).parents().get();for(var i=0;i<parents.length;++i){var position=$(parents[i]).css('position');if(position=='absolute'||position=='fixed')return true};if($(target).is('#modalContent, body')||$(target).filter('*:visible').parents('#modalContent').length){return true}else getTabbableElements()[0].focus();event.preventDefault()};$('body').bind('focus',modalEventHandler);$('body').bind('keypress',modalEventHandler);modalTabTrapHandler=function(evt){if(evt.which!=9)return true;var tabbableElements=getTabbableElements(),firstTabbableElement=tabbableElements[0],lastTabbableElement=tabbableElements[tabbableElements.length-1],singleTabbableElement=firstTabbableElement==lastTabbableElement,node=evt.target;if(node==firstTabbableElement&&evt.shiftKey){if(!singleTabbableElement)lastTabbableElement.focus();return false}else if(node==lastTabbableElement&&!evt.shiftKey){if(!singleTabbableElement)firstTabbableElement.focus();return false}else if($.inArray(node,tabbableElements)==-1){var parents=$(node).parents().get();for(var i=0;i<parents.length;++i){var position=$(parents[i]).css('position');if(position=='absolute'||position=='fixed')return true};if(evt.shiftKey){lastTabbableElement.focus()}else firstTabbableElement.focus()}};$('body').bind('keydown',modalTabTrapHandler);var modalContent=$('#modalContent').css('top','-1000px'),mdcTop=wt+(winHeight/2)-(modalContent.outerHeight()/2),mdcLeft=(winWidth/2)-(modalContent.outerWidth()/2);$('#modalBackdrop').css(css).css('top',0).css('height',docHeight+'px').css('width',docWidth+'px').show();modalContent.css({top:mdcTop+'px',left:mdcLeft+'px'}).hide()[animation](speed);modalContentClose=function(){close();return false};$('.close').bind('click',modalContentClose);modalEventEscapeCloseHandler=function(event){if(event.keyCode==27){close();return false}};$(document).bind('keydown',modalEventEscapeCloseHandler);var oldFocus=document.activeElement;$('.close').focus()
function close(){$(window).unbind('resize',modalContentResize);$('body').unbind('focus',modalEventHandler);$('body').unbind('keypress',modalEventHandler);$('body').unbind('keydown',modalTabTrapHandler);$('.close').unbind('click',modalContentClose);$('body').unbind('keypress',modalEventEscapeCloseHandler);$(document).trigger('CToolsDetachBehaviors',$('#modalContent'));if(animation=='fadeIn')animation='fadeOut';if(animation=='slideDown')animation='slideUp';if(animation=='show')animation='hide';modalContent.hide()[animation](speed);$('#modalContent').remove();$('#modalBackdrop').remove();$(oldFocus).focus()};modalContentResize=function(){$('#modalBackdrop').css('height','').css('width','');if(self.pageYOffset){var wt=self.pageYOffset}else if(document.documentElement&&document.documentElement.scrollTop){var wt=document.documentElement.scrollTop}else if(document.body)var wt=document.body.scrollTop;var docHeight=$(document).height(),docWidth=$(document).width(),winHeight=$(window).height(),winWidth=$(window).width();if(docHeight<winHeight)docHeight=winHeight;var modalContent=$('#modalContent'),mdcTop=wt+(winHeight/2)-(modalContent.outerHeight()/2),mdcLeft=(winWidth/2)-(modalContent.outerWidth()/2);$('#modalBackdrop').css('height',docHeight+'px').css('width',docWidth+'px').show();modalContent.css('top',mdcTop+'px').css('left',mdcLeft+'px').show()};$(window).bind('resize',modalContentResize)};Drupal.CTools.Modal.unmodalContent=function(content,animation,speed){if(!animation){var animation='show'}else if((animation!='fadeOut')&&(animation!='slideUp'))animation='show';if(!speed)var speed='fast';$(window).unbind('resize',modalContentResize);$('body').unbind('focus',modalEventHandler);$('body').unbind('keypress',modalEventHandler);$('body').unbind('keydown',modalTabTrapHandler);$('.close').unbind('click',modalContentClose);$('body').unbind('keypress',modalEventEscapeCloseHandler);$(document).trigger('CToolsDetachBehaviors',$('#modalContent'));content.each(function(){if(animation=='fade'){$('#modalContent').fadeOut(speed,function(){$('#modalBackdrop').fadeOut(speed,function(){$(this).remove()});$(this).remove()})}else if(animation=='slide'){$('#modalContent').slideUp(speed,function(){$('#modalBackdrop').slideUp(speed,function(){$(this).remove()});$(this).remove()})}else{$('#modalContent').remove();$('#modalBackdrop').remove()}})};$(function(){Drupal.ajax.prototype.commands.modal_display=Drupal.CTools.Modal.modal_display;Drupal.ajax.prototype.commands.modal_dismiss=Drupal.CTools.Modal.modal_dismiss})})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/ctools/js/modal.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/ctools/js/dependent.js. */
(function($){Drupal.CTools=Drupal.CTools||{};Drupal.CTools.dependent={};Drupal.CTools.dependent.bindings={};Drupal.CTools.dependent.activeBindings={};Drupal.CTools.dependent.activeTriggers=[];Drupal.CTools.dependent.inArray=function(array,search_term){var i=array.length;while(i--)if(array[i]==search_term)return true;return false};Drupal.CTools.dependent.autoAttach=function(){for(i in Drupal.CTools.dependent.activeTriggers)$(Drupal.CTools.dependent.activeTriggers[i]).unbind('change.ctools-dependent');Drupal.CTools.dependent.activeTriggers=[];Drupal.CTools.dependent.activeBindings={};Drupal.CTools.dependent.bindings={};if(!Drupal.settings.CTools)return;for(id in Drupal.settings.CTools.dependent){Drupal.CTools.dependent.activeBindings[id]=0;for(bind_id in Drupal.settings.CTools.dependent[id].values){if(!Drupal.CTools.dependent.bindings[bind_id])Drupal.CTools.dependent.bindings[bind_id]=[];Drupal.CTools.dependent.bindings[bind_id].push(id);if(bind_id.substring(0,6)=='radio:'){var trigger_id="input[name='"+bind_id.substring(6)+"']"}else var trigger_id='#'+bind_id;Drupal.CTools.dependent.activeTriggers.push(trigger_id);if($(trigger_id).attr('type')=='checkbox')$(trigger_id).siblings('label').addClass('hidden-options');var getValue=function(item,trigger){if($(trigger).size()==0)return null;if(item.substring(0,6)=='radio:'){var val=$(trigger+':checked').val()}else switch($(trigger).attr('type')){case'checkbox':var val=$(trigger).attr('checked')?true:false;if(val){$(trigger).siblings('label').removeClass('hidden-options').addClass('expanded-options')}else $(trigger).siblings('label').removeClass('expanded-options').addClass('hidden-options');break;default:var val=$(trigger).val()};return val},setChangeTrigger=function(trigger_id,bind_id){var changeTrigger=function(){var val=getValue(bind_id,trigger_id);if(val==null)return;for(i in Drupal.CTools.dependent.bindings[bind_id]){var id=Drupal.CTools.dependent.bindings[bind_id][i];if(typeof id!='string')continue;if(!Drupal.CTools.dependent.activeBindings[id])Drupal.CTools.dependent.activeBindings[id]={};if(val!=null&&Drupal.CTools.dependent.inArray(Drupal.settings.CTools.dependent[id].values[bind_id],val)){Drupal.CTools.dependent.activeBindings[id][bind_id]='bind'}else delete Drupal.CTools.dependent.activeBindings[id][bind_id];var len=0;for(i in Drupal.CTools.dependent.activeBindings[id])len++;var object=$('#'+id+'-wrapper');if(!object.size()){var $original=$('#'+id);if($original.is('fieldset')||$original.is('textarea'))continue;object=$('#'+id).parent()};if(Drupal.settings.CTools.dependent[id].type=='disable'){if(Drupal.settings.CTools.dependent[id].num<=len){object.attr('disabled',false);object.addClass('dependent-options');object.children().attr('disabled',false)}else{object.attr('disabled',true);object.children().attr('disabled',true)}}else if(Drupal.settings.CTools.dependent[id].num<=len){object.show(0);object.addClass('dependent-options')}else object.css('display','none')}};$(trigger_id).bind('change.ctools-dependent',function(){changeTrigger(trigger_id,bind_id)});changeTrigger(trigger_id,bind_id)};setChangeTrigger(trigger_id,bind_id)}}};Drupal.behaviors.CToolsDependent={attach:function(context){Drupal.CTools.dependent.autoAttach();$("select.ctools-master-dependent").once('ctools-dependent').bind('change.ctools-dependent',function(){var val=$(this).val();if(val=='all'){$('.ctools-dependent-all').show(0)}else{$('.ctools-dependent-all').hide(0);$('.ctools-dependent-'+val).show(0)}}).trigger('change.ctools-dependent')}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/ctools/js/dependent.js. */
