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
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/media/js/plugins/media.views.js. */
(function($){namespace('Drupal.media.browser.views');Drupal.behaviors.mediaViews={attach:function(context,settings){$('.ctools-auto-submit-full-form .views-exposed-form input:text, input:text.ctools-auto-submit',context).filter(':not(.ctools-auto-submit-exclude)').bind('keydown keyup',function(e){if(e.keyCode===13){e.stopImmediatePropagation();e.preventDefault()}});$('.view-content ul.media-list-thumbnails a').click(function(){return false});var views_ids=[];for(var key in Drupal.settings.media.browser.views)views_ids.push(key);for(var i=0;i<views_ids.length;i++){var views_id=views_ids[i];for(var j=0;j<Drupal.settings.media.browser.views[views_id].length;j++){var views_display_id=Drupal.settings.media.browser.views[views_id][j],view=$('.view-id-'+views_id+'.view-display-id-'+views_display_id);if(view.length)Drupal.media.browser.views.setup(view)}};$('#media-browser-tabset').bind('tabsselect',function(event,ui){var view=$('.view',ui.panel);if(view.length)Drupal.media.browser.views.select(view)})}};Drupal.media.browser.views.select=function(view){Drupal.media.browser.selectMedia([]);$('.view-content .media-item',view).removeClass('selected')};Drupal.media.browser.views.setup=function(view){if($(view).hasClass('media-browser-views-processed'))return;Drupal.media.browser.selectMedia([]);$('.view-content .media-item',view).bind('dblclick',function(){var fid=$(this).closest('.media-item[data-fid]').data('fid'),selectedFiles=new Array();$('.view-content .media-item',view).removeClass('selected');$(this).addClass('selected');for(index in Drupal.settings.media.files)if(Drupal.settings.media.files[index].fid==fid){selectedFiles.push(Drupal.settings.media.files[index]);break};Drupal.media.browser.selectMediaAndSubmit(selectedFiles)});$('.view-content .media-item',view).bind('click',function(){var fid=$(this).closest('.media-item[data-fid]').data('fid'),selectedFiles=new Array();$('.view-content .media-item',view).removeClass('selected');$(this).addClass('selected');if(Drupal.settings.media.browser.params.multiselect)for(index in Drupal.media.browser.selectedMedia){var currentFid=Drupal.media.browser.selectedMedia[index].fid;if(currentFid==fid){$(this).removeClass('selected');fid=NaN}else{selectedFiles.push(Drupal.media.browser.selectedMedia[index]);$('.view-content *[data-fid='+currentFid+'].media-item',view).addClass('selected')}};for(index in Drupal.settings.media.files)if(Drupal.settings.media.files[index].fid==fid){selectedFiles.push(Drupal.settings.media.files[index]);break};Drupal.media.browser.selectMedia(selectedFiles)});$(view).addClass('media-browser-views-processed')}}(jQuery));;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/media/js/plugins/media.views.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/views/js/base.js. */
(function($){Drupal.Views={};Drupal.behaviors.viewsTabs={attach:function(context){if($.viewsUi&&$.viewsUi.tabs)$('#views-tabset').once('views-processed').viewsTabs({selectedClass:'active'});$('a.views-remove-link').once('views-processed').click(function(event){var id=$(this).attr('id').replace('views-remove-link-','');$('#views-row-'+id).hide();$('#views-removed-'+id).attr('checked',true);event.preventDefault()});$('a.display-remove-link').addClass('display-processed').click(function(){var id=$(this).attr('id').replace('display-remove-link-','');$('#display-row-'+id).hide();$('#display-removed-'+id).attr('checked',true);return false})}};Drupal.Views.parseQueryString=function(query){var args={},pos=query.indexOf('?');if(pos!=-1)query=query.substring(pos+1);var pairs=query.split('&');for(var i in pairs)if(typeof(pairs[i])=='string'){var pair=pairs[i].split('=');if(pair[0]!='q'&&pair[1])args[decodeURIComponent(pair[0].replace(/\+/g,' '))]=decodeURIComponent(pair[1].replace(/\+/g,' '))};return args};Drupal.Views.parseViewArgs=function(href,viewPath){var returnObj={},path=Drupal.Views.getPath(href);if(viewPath&&path.substring(0,viewPath.length+1)==viewPath+'/'){var args=decodeURIComponent(path.substring(viewPath.length+1,path.length));returnObj.view_args=args;returnObj.view_path=path};return returnObj};Drupal.Views.pathPortion=function(href){var protocol=window.location.protocol;if(href.substring(0,protocol.length)==protocol)href=href.substring(href.indexOf('/',protocol.length+2));return href};Drupal.Views.getPath=function(href){href=Drupal.Views.pathPortion(href);href=href.substring(Drupal.settings.basePath.length,href.length);if(href.substring(0,3)=='?q=')href=href.substring(3,href.length);var chars=['#','?','&'];for(i in chars)if(href.indexOf(chars[i])>-1)href=href.substr(0,href.indexOf(chars[i]));return href}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/views/js/base.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_progress.js. */
(function($){Drupal.progressBar=function(id,updateCallback,method,errorCallback){var pb=this;this.id=id;this.method=method||'GET';this.updateCallback=updateCallback;this.errorCallback=errorCallback;this.element=$('<div class="progress-wrapper" aria-live="polite"></div>');this.element.html('<div id ="'+id+'" class="progress progress-striped active"><div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="percentage sr-only"></div></div></div></div><div class="percentage pull-right"></div><div class="message">&nbsp;</div>')};Drupal.progressBar.prototype.setProgress=function(percentage,message){if(percentage>=0&&percentage<=100){$('div.progress-bar',this.element).css('width',percentage+'%');$('div.progress-bar',this.element).attr('aria-valuenow',percentage);$('div.percentage',this.element).html(percentage+'%')};$('div.message',this.element).html(message);if(this.updateCallback)this.updateCallback(percentage,message,this)};Drupal.progressBar.prototype.startMonitoring=function(uri,delay){this.delay=delay;this.uri=uri;this.sendPing()};Drupal.progressBar.prototype.stopMonitoring=function(){clearTimeout(this.timer);this.uri=null};Drupal.progressBar.prototype.sendPing=function(){if(this.timer)clearTimeout(this.timer);if(this.uri){var pb=this;$.ajax({type:this.method,url:this.uri,data:'',dataType:'json',success:function(progress){if(progress.status==0){pb.displayError(progress.data);return};pb.setProgress(progress.percentage,progress.message);pb.timer=setTimeout(function(){pb.sendPing()},pb.delay)},error:function(xmlhttp){pb.displayError(Drupal.ajaxError(xmlhttp,pb.uri))}})}};Drupal.progressBar.prototype.displayError=function(string){var error=$('<div class="alert alert-block alert-error"><a class="close" data-dismiss="alert" href="#">&times;</a><h4>Error message</h4></div>').append(string);$(this.element).before(error).hide();if(this.errorCallback)this.errorCallback(this)}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_progress.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/views/js/ajax_view.js. */
(function($){Drupal.behaviors.ViewsAjaxView={};Drupal.behaviors.ViewsAjaxView.attach=function(){if(Drupal.settings&&Drupal.settings.views&&Drupal.settings.views.ajaxViews)$.each(Drupal.settings.views.ajaxViews,function(i,settings){Drupal.views.instances[i]=new Drupal.views.ajaxView(settings)})};Drupal.views={};Drupal.views.instances={};Drupal.views.ajaxView=function(settings){var selector='.view-dom-id-'+settings.view_dom_id;this.$view=$(selector);var ajax_path=Drupal.settings.views.ajax_path;if(ajax_path.constructor.toString().indexOf("Array")!=-1)ajax_path=ajax_path[0];var queryString=window.location.search||'';if(queryString!==''){var queryString=queryString.slice(1).replace(/q=[^&]+&?|&?render=[^&]+/,'');if(queryString!=='')queryString=((/\?/.test(ajax_path))?'&':'?')+queryString};this.element_settings={url:ajax_path+queryString,submit:settings,setClick:true,event:'click',selector:selector,progress:{type:'throbber'}};this.settings=settings;this.$exposed_form=$('#views-exposed-form-'+settings.view_name.replace(/_/g,'-')+'-'+settings.view_display_id.replace(/_/g,'-'));this.$exposed_form.once(jQuery.proxy(this.attachExposedFormAjax,this));this.$view.filter(jQuery.proxy(this.filterNestedViews,this)).once(jQuery.proxy(this.attachPagerAjax,this));var self_settings=this.element_settings;self_settings.event='RefreshView';this.refreshViewAjax=new Drupal.ajax(this.selector,this.$view,self_settings)};Drupal.views.ajaxView.prototype.attachExposedFormAjax=function(){var button=$('input[type=submit], button[type=submit], input[type=image]',this.$exposed_form);button=button[0];this.exposedFormAjax=new Drupal.ajax($(button).attr('id'),button,this.element_settings)};Drupal.views.ajaxView.prototype.filterNestedViews=function(){return!this.$view.parents('.view').size()};Drupal.views.ajaxView.prototype.attachPagerAjax=function(){this.$view.find('ul.pager > li > a, th.views-field a, .attachment .views-summary a').each(jQuery.proxy(this.attachPagerLinkAjax,this))};Drupal.views.ajaxView.prototype.attachPagerLinkAjax=function(id,link){var $link=$(link),viewData={},href=$link.attr('href');$.extend(viewData,this.settings,Drupal.Views.parseQueryString(href),Drupal.Views.parseViewArgs(href,this.settings.view_base_path));$.extend(viewData,Drupal.Views.parseViewArgs(href,this.settings.view_base_path));this.element_settings.submit=viewData;this.pagerAjax=new Drupal.ajax(false,$link,this.element_settings)};Drupal.ajax.prototype.commands.viewsScrollTop=function(ajax,response,status){var offset=$(response.selector).offset(),scrollTarget=response.selector;while($(scrollTarget).scrollTop()==0&&$(scrollTarget).parent())scrollTarget=$(scrollTarget).parent();if(offset.top-10<$(scrollTarget).scrollTop())$(scrollTarget).animate({scrollTop:(offset.top-10)},500)}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/views/js/ajax_view.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/google_analytics/googleanalytics.js. */
(function($){Drupal.googleanalytics={};$(document).ready(function(){$(document.body).bind("mousedown keyup touchstart",function(event){$(event.target).closest("a,area").each(function(){if(Drupal.googleanalytics.isInternal(this.href)){if($(this).is('.colorbox'));else if(Drupal.settings.googleanalytics.trackDownload&&Drupal.googleanalytics.isDownload(this.href)){ga("send","event","Downloads",Drupal.googleanalytics.getDownloadExtension(this.href).toUpperCase(),Drupal.googleanalytics.getPageUrl(this.href))}else if(Drupal.googleanalytics.isInternalSpecial(this.href))ga("send","pageview",{page:Drupal.googleanalytics.getPageUrl(this.href)})}else if(Drupal.settings.googleanalytics.trackMailto&&$(this).is("a[href^='mailto:'],area[href^='mailto:']")){ga("send","event","Mails","Click",this.href.substring(7))}else if(Drupal.settings.googleanalytics.trackOutbound&&this.href.match(/^\w+:\/\//i))if(Drupal.settings.googleanalytics.trackDomainMode!=2||(Drupal.settings.googleanalytics.trackDomainMode==2&&!Drupal.googleanalytics.isCrossDomain(this.hostname,Drupal.settings.googleanalytics.trackCrossDomains)))ga("send","event","Outbound links","Click",this.href)})});if(Drupal.settings.googleanalytics.trackUrlFragments)window.onhashchange=function(){ga('send','pageview',location.pathname+location.search+location.hash)};$(document).bind("cbox_complete",function(){var href=$.colorbox.element().attr("href");if(href)ga("send","pageview",{page:Drupal.googleanalytics.getPageUrl(href)})})});Drupal.googleanalytics.isCrossDomain=function(hostname,crossDomains){if(!crossDomains){return false}else return $.inArray(hostname,crossDomains)>-1?true:false};Drupal.googleanalytics.isDownload=function(url){var isDownload=new RegExp("\\.("+Drupal.settings.googleanalytics.trackDownloadExtensions+")([\?#].*)?$","i");return isDownload.test(url)};Drupal.googleanalytics.isInternal=function(url){var isInternal=new RegExp("^(https?):\/\/"+window.location.host,"i");return isInternal.test(url)};Drupal.googleanalytics.isInternalSpecial=function(url){var isInternalSpecial=new RegExp("(\/go\/.*)$","i");return isInternalSpecial.test(url)};Drupal.googleanalytics.getPageUrl=function(url){var extractInternalUrl=new RegExp("^(https?):\/\/"+window.location.host,"i");return url.replace(extractInternalUrl,'')};Drupal.googleanalytics.getDownloadExtension=function(url){var extractDownloadextension=new RegExp("\\.("+Drupal.settings.googleanalytics.trackDownloadExtensions+")([\?#].*)?$","i"),extension=extractDownloadextension.exec(url);return(extension===null)?'':extension[1]}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/google_analytics/googleanalytics.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/media/js/media.browser.js. */
(function($){namespace('Drupal.media.browser');Drupal.media.browser.selectedMedia=[];Drupal.media.browser.mediaAdded=function(){};Drupal.media.browser.selectionFinalized=function(selectedMedia){};Drupal.behaviors.MediaBrowser={attach:function(context){if(Drupal.settings.media&&Drupal.settings.media.selectedMedia){Drupal.media.browser.selectMedia(Drupal.settings.media.selectedMedia);Drupal.media.browser.finalizeSelection()};var showFunc=function(event,ui){if(parent_iframe=Drupal.media.browser.getParentIframe(window))$(parent_iframe).attr('current_tab',$('#media-tabs-wrapper > ul > li.ui-state-active').index())},activeTab=Drupal.media.browser.tabFromHash();$('#media-browser-tabset').once('MediaBrowser').tabs({selected:activeTab,active:activeTab,show:showFunc,activate:showFunc});$('.media-browser-tab').each(Drupal.media.browser.validateButtons)}};Drupal.media.browser.getParentIframe=function(window){var arrFrames=parent.document.getElementsByTagName("IFRAME");for(var i=0;i<arrFrames.length;i++)if(arrFrames[i].contentWindow===window)return arrFrames[i]};Drupal.media.browser.tabFromHash=function(){if(parent_iframe=Drupal.media.browser.getParentIframe(window))return $(parent_iframe).attr('current_tab');return 0};Drupal.media.browser.launch=function(){};Drupal.media.browser.validateButtons=function(){$('a.button.fake-submit',this).once().bind('click',Drupal.media.browser.submit)};Drupal.media.browser.submit=function(){var buttons=$(parent.window.document.body).find('#mediaBrowser').parent('.ui-dialog').find('.ui-dialog-buttonpane button');buttons[0].click();return false};Drupal.media.browser.selectMedia=function(selectedMedia){Drupal.media.browser.selectedMedia=selectedMedia};Drupal.media.browser.selectMediaAndSubmit=function(selectedMedia){Drupal.media.browser.selectedMedia=selectedMedia;Drupal.media.browser.submit()};Drupal.media.browser.finalizeSelection=function(){if(!Drupal.media.browser.selectedMedia){throw new exception(Drupal.t('Cannot continue, nothing selected'))}else Drupal.media.browser.selectionFinalized(Drupal.media.browser.selectedMedia)}}(jQuery));;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/media/js/media.browser.js. */