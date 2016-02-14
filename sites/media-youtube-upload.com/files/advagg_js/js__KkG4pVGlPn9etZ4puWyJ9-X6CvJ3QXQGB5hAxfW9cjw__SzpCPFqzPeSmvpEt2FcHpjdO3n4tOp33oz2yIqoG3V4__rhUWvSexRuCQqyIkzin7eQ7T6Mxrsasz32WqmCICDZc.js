/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/ajax.js. */
(function($){Drupal.ajax.prototype.beforeSend=function(xmlhttprequest,options){if(this.form){options.extraData=options.extraData||{};options.extraData.ajax_iframe_upload='1';var v=$.fieldValue(this.element);if(v!==null)options.extraData[this.element.name]=v};var $element=$(this.element);$element.addClass('progress-disabled').attr('disabled',true);if(this.progress.type=='bar'){var progressBar=new Drupal.progressBar('ajax-progress-'+this.element.id,eval(this.progress.update_callback),this.progress.method,eval(this.progress.error_callback));if(this.progress.message)progressBar.setProgress(-1,this.progress.message);if(this.progress.url)progressBar.startMonitoring(this.progress.url,this.progress.interval||500);this.progress.element=$(progressBar.element).addClass('ajax-progress ajax-progress-bar');this.progress.object=progressBar;$element.closest('.file-widget,.form-item').after(this.progress.element)}else if(this.progress.type=='throbber'){this.progress.element=$('<div class="ajax-progress ajax-progress-throbber"><i class="glyphicon glyphicon-refresh glyphicon-spin"></i></div>');if(this.progress.message)$('.throbber',this.progress.element).after('<div class="message">'+this.progress.message+'</div>');if($element.is('input')){$element.after(this.progress.element)}else if($element.is('select')){var $inputGroup=$element.closest('.form-item').find('.input-group-addon, .input-group-btn');if(!$inputGroup.length){$element.wrap('<div class="input-group">');$inputGroup=$('<span class="input-group-addon">');$element.after($inputGroup)};$inputGroup.append(this.progress.element)}else $element.append(this.progress.element)}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/ajax.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/autocomplete.js. */
(function($){Drupal.behaviors.autocomplete={attach:function(context){var $context=$(context),acdb=[];$context.find('input.autocomplete').once('autocomplete',function(){var uri=this.value;if(!acdb[uri])acdb[uri]=new Drupal.ACDB(uri);var $input=$context.find('#'+this.id.substr(0,this.id.length-13)).attr('autocomplete','OFF').attr('aria-autocomplete','list');$context.find($input[0].form).submit(Drupal.autocompleteSubmit);$input.parents('.form-item').attr('role','application').append($('<span class="element-invisible" aria-live="assertive"></span>').attr('id',$input.attr('id')+'-autocomplete-aria-live'));new Drupal.jsAC($input,acdb[uri],$context)})}};Drupal.autocompleteSubmit=function(){return $('.form-autocomplete > .dropdown').each(function(){this.owner.hidePopup()}).length==0};Drupal.jsAC.prototype.highlight=function(node){if(this.selected)$(this.selected).removeClass('active');$(node).addClass('active');this.selected=node;$(this.ariaLive).html($(this.selected).html())};Drupal.jsAC.prototype.unhighlight=function(node){$(node).removeClass('active');this.selected=false;$(this.ariaLive).empty()};Drupal.jsAC.prototype.populatePopup=function(){var $input=$(this.input);if(this.popup)$(this.popup).remove();this.selected=false;this.popup=$('<div class="dropdown"></div>')[0];this.popup.owner=this;$input.parent().after(this.popup);this.db.owner=this;this.db.search(this.input.value)};Drupal.jsAC.prototype.found=function(matches){if(!this.input.value.length)return false;var ul=$('<ul class="dropdown-menu"></ul>'),ac=this;ul.css({display:'block',right:0});for(var key in matches)$('<li></li>').html($('<a href="#"></a>').html(matches[key]).click(function(e){e.preventDefault()})).mousedown(function(){ac.select(this)}).mouseover(function(){ac.highlight(this)}).mouseout(function(){ac.unhighlight(this)}).data('autocompleteValue',key).appendTo(ul);if(this.popup)if(ul.children().length){$(this.popup).empty().append(ul).show();$(this.ariaLive).html(Drupal.t('Autocomplete popup'))}else{$(this.popup).css({visibility:'hidden'});this.hidePopup()}};Drupal.jsAC.prototype.setStatus=function(status){var $throbber=$(this.input).parent().find('.glyphicon-refresh, .autocomplete-throbber').first(),throbbingClass=$throbber.is('.autocomplete-throbber')?'throbbing':'glyphicon-spin';switch(status){case'begin':$throbber.addClass(throbbingClass);$(this.ariaLive).html(Drupal.t('Searching for matches...'));break;case'cancel':case'error':case'found':$throbber.removeClass(throbbingClass);break}};var oldPrototype=Drupal.jsAC.prototype;Drupal.jsAC=function($input,db,$context){var ac=this;this.$context=$context;this.input=$input[0];this.ariaLive=$context.find('#'+this.input.id+'-autocomplete-aria-live');this.db=db;$input.keydown(function(event){return ac.onkeydown(this,event)}).keyup(function(event){ac.onkeyup(this,event)}).blur(function(){ac.hidePopup();ac.db.cancel()})};Drupal.jsAC.prototype=oldPrototype})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/autocomplete.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/ctools/js/modal.js. */
(function($){Drupal.CTools.Modal.show=function(choice){var opts={};if(choice&&typeof choice==='string'&&Drupal.settings[choice]){$.extend(true,opts,Drupal.settings[choice])}else if(choice)$.extend(true,opts,choice);var defaults={modalTheme:'CToolsModalDialog',throbberTheme:'CToolsModalThrobber',animation:'show',animationSpeed:'fast',modalSize:{type:'scale',width:0.8,height:0.8,addWidth:0,addHeight:0,contentRight:25,contentBottom:45},modalOptions:{opacity:0.55,background:'#fff'}},settings={};$.extend(true,settings,defaults,Drupal.settings.CToolsModal,opts);if(Drupal.CTools.Modal.currentSettings&&Drupal.CTools.Modal.currentSettings!==settings){Drupal.CTools.Modal.modal.remove();Drupal.CTools.Modal.modal=null};Drupal.CTools.Modal.currentSettings=settings;var resize=function(e){var context=e?document:Drupal.CTools.Modal.modal,width=0,height=0,topOffset=parseInt($('body').css("padding-top"),10);if(Drupal.CTools.Modal.currentSettings.modalSize.type==='scale'){width=$(window).width()*Drupal.CTools.Modal.currentSettings.modalSize.width;height=($(window).height()-topOffset)*Drupal.CTools.Modal.currentSettings.modalSize.height}else{width=Drupal.CTools.Modal.currentSettings.modalSize.width;height=Drupal.CTools.Modal.currentSettings.modalSize.height};$('#modalContent').css('padding-top',topOffset+'px');$('div.ctools-modal-dialog',context).css({width:width+Drupal.CTools.Modal.currentSettings.modalSize.addWidth+'px',height:height+Drupal.CTools.Modal.currentSettings.modalSize.addHeight+'px'});$('div.ctools-modal-dialog .modal-body',context).css({width:(width-Drupal.CTools.Modal.currentSettings.modalSize.contentRight)+'px','max-height':(height-Drupal.CTools.Modal.currentSettings.modalSize.contentBottom)+'px'})};if(!Drupal.CTools.Modal.modal){Drupal.CTools.Modal.modal=$(Drupal.theme(settings.modalTheme));if(settings.modalSize.type==='scale')$(window).bind('resize',resize)};$('body').addClass('modal-open');resize();$('.modal-title',Drupal.CTools.Modal.modal).html(Drupal.CTools.Modal.currentSettings.loadingText);Drupal.CTools.Modal.modalContent(Drupal.CTools.Modal.modal,settings.modalOptions,settings.animation,settings.animationSpeed);$('#modalContent .modal-body').html(Drupal.theme(settings.throbberTheme))};Drupal.CTools.Modal.dismiss=function(){if(Drupal.CTools.Modal.modal){$('body').removeClass('modal-open');Drupal.CTools.Modal.unmodalContent(Drupal.CTools.Modal.modal)}};Drupal.theme.prototype.CToolsModalDialog=function(){var html='';html+='<div id="ctools-modal">';html+='  <div class="ctools-modal-dialog modal-dialog">';html+='    <div class="modal-content">';html+='      <div class="modal-header">';html+='        <button type="button" class="close ctools-close-modal" aria-hidden="true">&times;</button>';html+='        <h4 id="modal-title" class="modal-title">&nbsp;</h4>';html+='      </div>';html+='      <div id="modal-content" class="modal-body">';html+='      </div>';html+='    </div>';html+='  </div>';html+='</div>';return html};Drupal.theme.prototype.CToolsModalThrobber=function(){var html='';html+='<div class="loading-spinner" style="width: 200px; margin: -20px 0 0 -100px; position: absolute; top: 45%; left: 50%">';html+='  <div class="progress progress-striped active">';html+='    <div class="progress-bar" style="width: 100%;"></div>';html+='  </div>';html+='</div>';return html}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/ctools/js/modal.js. */
