/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/jquery.once.js. */
(function($){var cache={},uuid=0;$.fn.once=function(id,fn){if(typeof id!='string'){if(!(id in cache))cache[id]=++uuid;if(!fn)fn=id;id='jquery-once-'+cache[id]};var name=id+'-processed',elements=this.not('.'+name).addClass(name);return $.isFunction(fn)?elements.each(fn):elements};$.fn.removeOnce=function(id,fn){var name=id+'-processed',elements=this.filter('.'+name).removeClass(name);return $.isFunction(fn)?elements.each(fn):elements}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/jquery.once.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/drupal.js. */
var Drupal=Drupal||{settings:{},behaviors:{},locale:{}};jQuery.noConflict();(function($){var jquery_init=$.fn.init;$.fn.init=function(selector,context,rootjQuery){if(selector&&typeof selector==='string'){var hash_position=selector.indexOf('#');if(hash_position>=0){var bracket_position=selector.indexOf('<');if(bracket_position>hash_position)throw'Syntax error, unrecognized expression: '+selector}};return jquery_init.call(this,selector,context,rootjQuery)};$.fn.init.prototype=jquery_init.prototype;Drupal.attachBehaviors=function(context,settings){context=context||document;settings=settings||Drupal.settings;$.each(Drupal.behaviors,function(){if($.isFunction(this.attach))this.attach(context,settings)})};Drupal.detachBehaviors=function(context,settings,trigger){context=context||document;settings=settings||Drupal.settings;trigger=trigger||'unload';$.each(Drupal.behaviors,function(){if($.isFunction(this.detach))this.detach(context,settings,trigger)})};Drupal.checkPlain=function(str){var character,regex,replace={'&':'&amp;','"':'&quot;','<':'&lt;','>':'&gt;'};str=String(str);for(character in replace)if(replace.hasOwnProperty(character)){regex=new RegExp(character,'g');str=str.replace(regex,replace[character])};return str};Drupal.formatString=function(str,args){for(var key in args){switch(key.charAt(0)){case'@':args[key]=Drupal.checkPlain(args[key]);break;case'!':break;case'%':default:args[key]=Drupal.theme('placeholder',args[key]);break};str=str.replace(key,args[key])};return str};Drupal.t=function(str,args,options){options=options||{};options.context=options.context||'';if(Drupal.locale.strings&&Drupal.locale.strings[options.context]&&Drupal.locale.strings[options.context][str])str=Drupal.locale.strings[options.context][str];if(args)str=Drupal.formatString(str,args);return str};Drupal.formatPlural=function(count,singular,plural,args,options){var args=args||{};args['@count']=count;var index=Drupal.locale.pluralFormula?Drupal.locale.pluralFormula(args['@count']):((args['@count']==1)?0:1);if(index==0){return Drupal.t(singular,args,options)}else if(index==1){return Drupal.t(plural,args,options)}else{args['@count['+index+']']=args['@count'];delete args['@count'];return Drupal.t(plural.replace('@count','@count['+index+']'),args,options)}};Drupal.absoluteUrl=function(url){var urlParsingNode=document.createElement('a');try{url=decodeURIComponent(url)}catch(e){};urlParsingNode.setAttribute('href',url);return urlParsingNode.cloneNode(false).href};Drupal.urlIsLocal=function(url){var absoluteUrl=Drupal.absoluteUrl(url),protocol=location.protocol;if(protocol==='http:'&&absoluteUrl.indexOf('https:')===0)protocol='https:';var baseUrl=protocol+'//'+location.host+Drupal.settings.basePath.slice(0,-1);try{absoluteUrl=decodeURIComponent(absoluteUrl)}catch(e){};try{baseUrl=decodeURIComponent(baseUrl)}catch(e){};return absoluteUrl===baseUrl||absoluteUrl.indexOf(baseUrl+'/')===0};Drupal.theme=function(func){var args=Array.prototype.slice.apply(arguments,[1]);return(Drupal.theme[func]||Drupal.theme.prototype[func]).apply(this,args)};Drupal.freezeHeight=function(){Drupal.unfreezeHeight();$('<div id="freeze-height"></div>').css({position:'absolute',top:'0px',left:'0px',width:'1px',height:$('body').css('height')}).appendTo('body')};Drupal.unfreezeHeight=function(){$('#freeze-height').remove()};Drupal.encodePath=function(item,uri){uri=uri||location.href;return encodeURIComponent(item).replace(/%2F/g,'/')};Drupal.getSelection=function(element){if(typeof element.selectionStart!='number'&&document.selection){var range1=document.selection.createRange(),range2=range1.duplicate();range2.moveToElementText(element);range2.setEndPoint('EndToEnd',range1);var start=range2.text.length-range1.text.length,end=start+range1.text.length;return{start:start,end:end}};return{start:element.selectionStart,end:element.selectionEnd}};Drupal.ajaxError=function(xmlhttp,uri,customMessage){var statusCode,statusText,pathText,responseText,readyStateText,message;if(xmlhttp.status){statusCode="\n"+Drupal.t("An AJAX HTTP error occurred.")+"\n"+Drupal.t("HTTP Result Code: !status",{'!status':xmlhttp.status})}else statusCode="\n"+Drupal.t("An AJAX HTTP request terminated abnormally.");statusCode+="\n"+Drupal.t("Debugging information follows.");pathText="\n"+Drupal.t("Path: !uri",{'!uri':uri});statusText='';try{statusText="\n"+Drupal.t("StatusText: !statusText",{'!statusText':$.trim(xmlhttp.statusText)})}catch(e){};responseText='';try{responseText="\n"+Drupal.t("ResponseText: !responseText",{'!responseText':$.trim(xmlhttp.responseText)})}catch(e){};responseText=responseText.replace(/<("[^"]*"|'[^']*'|[^'">])*>/gi,"");responseText=responseText.replace(/[\n]+\s+/g,"\n");readyStateText=xmlhttp.status==0?("\n"+Drupal.t("ReadyState: !readyState",{'!readyState':xmlhttp.readyState})):"";customMessage=customMessage?("\n"+Drupal.t("CustomMessage: !customMessage",{'!customMessage':customMessage})):"";message=statusCode+pathText+statusText+customMessage+responseText+readyStateText;return message};$('html').addClass('js');document.cookie='has_js=1; path=/';$(function(){if(jQuery.support.positionFixed===undefined){var el=$('<div style="position:fixed; top:10px" />').appendTo(document.body);jQuery.support.positionFixed=el[0].offsetTop===10;el.remove()}});$(function(){Drupal.attachBehaviors(document,Drupal.settings)});Drupal.theme.prototype={placeholder:function(str){return'<em class="placeholder">'+Drupal.checkPlain(str)+'</em>'}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/drupal.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/libraries/fitvids/jquery.fitvids.js. */
(function($){'use strict';$.fn.fitVids=function(options){var settings={customSelector:null,ignore:null};if(!document.getElementById('fit-vids-style')){var head=document.head||document.getElementsByTagName('head')[0],css='.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}',div=document.createElement("div");div.innerHTML='<p>x</p><style id="fit-vids-style">'+css+'</style>';head.appendChild(div.childNodes[1])};if(options)$.extend(settings,options);return this.each(function(){var selectors=['iframe[src*="player.vimeo.com"]','iframe[src*="youtube.com"]','iframe[src*="youtube-nocookie.com"]','iframe[src*="kickstarter.com"][src*="video.html"]','object','embed'];if(settings.customSelector)selectors.push(settings.customSelector);var ignoreList='.fitvidsignore';if(settings.ignore)ignoreList=ignoreList+', '+settings.ignore;var $allVideos=$(this).find(selectors.join(','));$allVideos=$allVideos.not('object object');$allVideos=$allVideos.not(ignoreList);$allVideos.each(function(count){var $this=$(this);if($this.parents(ignoreList).length>0)return;if(this.tagName.toLowerCase()==='embed'&&$this.parent('object').length||$this.parent('.fluid-width-video-wrapper').length)return;if((!$this.css('height')&&!$this.css('width'))&&(isNaN($this.attr('height'))||isNaN($this.attr('width')))){$this.attr('height',9);$this.attr('width',16)};var height=(this.tagName.toLowerCase()==='object'||($this.attr('height')&&!isNaN(parseInt($this.attr('height'),10))))?parseInt($this.attr('height'),10):$this.height(),width=!isNaN(parseInt($this.attr('width'),10))?parseInt($this.attr('width'),10):$this.width(),aspectRatio=height/width;if(!$this.attr('id')){var videoID='fitvid'+count;$this.attr('id',videoID)};$this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top',(aspectRatio*100)+'%');$this.removeAttr('height').removeAttr('width')})})}})(window.jQuery||window.Zepto);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/libraries/fitvids/jquery.fitvids.js. */
