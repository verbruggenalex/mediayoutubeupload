/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/states.js. */
(function($){$(document).unbind('state:disabled');$(document).bind('state:disabled',function(e){if(e.trigger)$(e.target).attr('disabled',e.value).closest('.form-item, .form-submit, .form-wrapper').toggleClass('form-disabled',e.value).find(':input').attr('disabled',e.value)})})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/states.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/ajax.js. */
(function($){Drupal.ajax.prototype.beforeSend=function(xmlhttprequest,options){if(this.form){options.extraData=options.extraData||{};options.extraData.ajax_iframe_upload='1';var v=$.fieldValue(this.element);if(v!==null)options.extraData[this.element.name]=v};var $element=$(this.element);$element.addClass('progress-disabled').attr('disabled',true);if(this.progress.type=='bar'){var progressBar=new Drupal.progressBar('ajax-progress-'+this.element.id,eval(this.progress.update_callback),this.progress.method,eval(this.progress.error_callback));if(this.progress.message)progressBar.setProgress(-1,this.progress.message);if(this.progress.url)progressBar.startMonitoring(this.progress.url,this.progress.interval||500);this.progress.element=$(progressBar.element).addClass('ajax-progress ajax-progress-bar');this.progress.object=progressBar;$element.closest('.file-widget,.form-item').after(this.progress.element)}else if(this.progress.type=='throbber'){this.progress.element=$('<div class="ajax-progress ajax-progress-throbber"><i class="glyphicon glyphicon-refresh glyphicon-spin"></i></div>');if(this.progress.message)$('.throbber',this.progress.element).after('<div class="message">'+this.progress.message+'</div>');if($element.is('input')){$element.after(this.progress.element)}else if($element.is('select')){var $inputGroup=$element.closest('.form-item').find('.input-group-addon, .input-group-btn');if(!$inputGroup.length){$element.wrap('<div class="input-group">');$inputGroup=$('<span class="input-group-addon">');$element.after($inputGroup)};$inputGroup.append(this.progress.element)}else $element.append(this.progress.element)}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/ajax.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/filter/filter.js. */
(function($){function updateFilterHelpLink(){var $link=$(this).parents('.filter-wrapper').find('.filter-help > a'),originalLink=$link.data('originalLink');if(!originalLink){originalLink=$link.attr('href');$link.data('originalLink',originalLink)};$link.attr('href',originalLink+'/'+$(this).find(':selected').val())};$(document).on('change','.filter-wrapper select.filter-list',updateFilterHelpLink);Drupal.behaviors.filterGuidelines={attach:function(context){$(context).find('.filter-wrapper select.filter-list').once('filter-list',updateFilterHelpLink)}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/filter/filter.js. */
