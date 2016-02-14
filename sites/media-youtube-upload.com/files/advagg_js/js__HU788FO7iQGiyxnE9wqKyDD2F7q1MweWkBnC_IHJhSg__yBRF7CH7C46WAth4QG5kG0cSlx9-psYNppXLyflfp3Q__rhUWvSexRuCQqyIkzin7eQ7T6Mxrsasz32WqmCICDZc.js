/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/states.js. */
(function($){$(document).unbind('state:disabled');$(document).bind('state:disabled',function(e){if(e.trigger)$(e.target).attr('disabled',e.value).closest('.form-item, .form-submit, .form-wrapper').toggleClass('form-disabled',e.value).find(':input').attr('disabled',e.value)})})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/states.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/ajax.js. */
(function($){Drupal.ajax.prototype.beforeSend=function(xmlhttprequest,options){if(this.form){options.extraData=options.extraData||{};options.extraData.ajax_iframe_upload='1';var v=$.fieldValue(this.element);if(v!==null)options.extraData[this.element.name]=v};var $element=$(this.element);$element.addClass('progress-disabled').attr('disabled',true);if(this.progress.type=='bar'){var progressBar=new Drupal.progressBar('ajax-progress-'+this.element.id,eval(this.progress.update_callback),this.progress.method,eval(this.progress.error_callback));if(this.progress.message)progressBar.setProgress(-1,this.progress.message);if(this.progress.url)progressBar.startMonitoring(this.progress.url,this.progress.interval||500);this.progress.element=$(progressBar.element).addClass('ajax-progress ajax-progress-bar');this.progress.object=progressBar;$element.closest('.file-widget,.form-item').after(this.progress.element)}else if(this.progress.type=='throbber'){this.progress.element=$('<div class="ajax-progress ajax-progress-throbber"><i class="glyphicon glyphicon-refresh glyphicon-spin"></i></div>');if(this.progress.message)$('.throbber',this.progress.element).after('<div class="message">'+this.progress.message+'</div>');if($element.is('input')){$element.after(this.progress.element)}else if($element.is('select')){var $inputGroup=$element.closest('.form-item').find('.input-group-addon, .input-group-btn');if(!$inputGroup.length){$element.wrap('<div class="input-group">');$inputGroup=$('<span class="input-group-addon">');$element.after($inputGroup)};$inputGroup.append(this.progress.element)}else $element.append(this.progress.element)}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/ajax.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/autocomplete.js. */
(function($){Drupal.behaviors.autocomplete={attach:function(context){var $context=$(context),acdb=[];$context.find('input.autocomplete').once('autocomplete',function(){var uri=this.value;if(!acdb[uri])acdb[uri]=new Drupal.ACDB(uri);var $input=$context.find('#'+this.id.substr(0,this.id.length-13)).attr('autocomplete','OFF').attr('aria-autocomplete','list');$context.find($input[0].form).submit(Drupal.autocompleteSubmit);$input.parents('.form-item').attr('role','application').append($('<span class="element-invisible" aria-live="assertive"></span>').attr('id',$input.attr('id')+'-autocomplete-aria-live'));new Drupal.jsAC($input,acdb[uri],$context)})}};Drupal.autocompleteSubmit=function(){return $('.form-autocomplete > .dropdown').each(function(){this.owner.hidePopup()}).length==0};Drupal.jsAC.prototype.highlight=function(node){if(this.selected)$(this.selected).removeClass('active');$(node).addClass('active');this.selected=node;$(this.ariaLive).html($(this.selected).html())};Drupal.jsAC.prototype.unhighlight=function(node){$(node).removeClass('active');this.selected=false;$(this.ariaLive).empty()};Drupal.jsAC.prototype.populatePopup=function(){var $input=$(this.input);if(this.popup)$(this.popup).remove();this.selected=false;this.popup=$('<div class="dropdown"></div>')[0];this.popup.owner=this;$input.parent().after(this.popup);this.db.owner=this;this.db.search(this.input.value)};Drupal.jsAC.prototype.found=function(matches){if(!this.input.value.length)return false;var ul=$('<ul class="dropdown-menu"></ul>'),ac=this;ul.css({display:'block',right:0});for(var key in matches)$('<li></li>').html($('<a href="#"></a>').html(matches[key]).click(function(e){e.preventDefault()})).mousedown(function(){ac.select(this)}).mouseover(function(){ac.highlight(this)}).mouseout(function(){ac.unhighlight(this)}).data('autocompleteValue',key).appendTo(ul);if(this.popup)if(ul.children().length){$(this.popup).empty().append(ul).show();$(this.ariaLive).html(Drupal.t('Autocomplete popup'))}else{$(this.popup).css({visibility:'hidden'});this.hidePopup()}};Drupal.jsAC.prototype.setStatus=function(status){var $throbber=$(this.input).parent().find('.glyphicon-refresh, .autocomplete-throbber').first(),throbbingClass=$throbber.is('.autocomplete-throbber')?'throbbing':'glyphicon-spin';switch(status){case'begin':$throbber.addClass(throbbingClass);$(this.ariaLive).html(Drupal.t('Searching for matches...'));break;case'cancel':case'error':case'found':$throbber.removeClass(throbbingClass);break}};var oldPrototype=Drupal.jsAC.prototype;Drupal.jsAC=function($input,db,$context){var ac=this;this.$context=$context;this.input=$input[0];this.ariaLive=$context.find('#'+this.input.id+'-autocomplete-aria-live');this.db=db;$input.keydown(function(event){return ac.onkeydown(this,event)}).keyup(function(event){ac.onkeyup(this,event)}).blur(function(){ac.hidePopup();ac.db.cancel()})};Drupal.jsAC.prototype=oldPrototype})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/autocomplete.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/file/file.js. */
(function($){Drupal.behaviors.fileButtons={attach:function(context){$(':input.form-submit',context).bind('mousedown',Drupal.file.disableFields);$('div.form-managed-file :input.form-submit',context).bind('mousedown',Drupal.file.progressBar)},detach:function(context){$(':input.form-submit',context).unbind('mousedown',Drupal.file.disableFields);$('div.form-managed-file :input.form-submit',context).unbind('mousedown',Drupal.file.progressBar)}};if(Drupal.file){Drupal.file.disableFields=function(event){var clickedButton=this;if(!$(clickedButton).hasClass('ajax-processed'))return;var $enabledFields=[];if($(this).closest('div.form-managed-file').length>0)$enabledFields=$(this).closest('div.form-managed-file').find(':input.form-file');var $fieldsToTemporarilyDisable=$('div.form-managed-file :input.form-file').not($enabledFields).not(':disabled');$fieldsToTemporarilyDisable.attr('disabled','disabled');setTimeout(function(){$fieldsToTemporarilyDisable.attr('disabled',false)},1e3)};Drupal.file.progressBar=function(event){var clickedButton=this,$progressId=$(clickedButton).closest('div.form-managed-file').find(':input.file-progress');if($progressId.length){var originalName=$progressId.attr('name');$progressId.attr('name',originalName.match(/APC_UPLOAD_PROGRESS|UPLOAD_IDENTIFIER/)[0]);setTimeout(function(){$progressId.attr('name',originalName)},1e3)};setTimeout(function(){$(clickedButton).closest('div.form-managed-file').find('div.ajax-progress-bar').slideDown()},500)};Drupal.file.validateExtension=function(event){$('.file-upload-js-error').remove();var extensionPattern=event.data.extensions.replace(/,\s*/g,'|');if(extensionPattern.length>1&&this.value.length>0){var acceptableMatch=new RegExp('\\.('+extensionPattern+')$','gi');if(!acceptableMatch.test(this.value)){var error=Drupal.t("The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.",{'%filename':this.value.replace('C:\\fakepath\\',''),'%extensions':extensionPattern.replace(/\|/g,', ')});$(this).closest('div.form-managed-file').parents('.form-item').first().prepend('<div class="alert alert-danger alert-dismissible messages error file-upload-js-error" aria-live="polite" role="alert">\
            <button type="button" class="close" data-dismiss="alert">\
              <span aria-hidden="true">&times;</span>\
              <span class="sr-only">Close</span>\
            </button>'+error+'</div>');this.value='';return false}}}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/file/file.js. */
