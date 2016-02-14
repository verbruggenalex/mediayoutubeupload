/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/modules/contextual/contextual.js. */
(function($){Drupal.contextualLinks=Drupal.contextualLinks||{};Drupal.behaviors.contextualLinks={attach:function(context){$('div.contextual-links-wrapper',context).once('contextual-links',function(){var $wrapper=$(this),$region=$wrapper.closest('.contextual-links-region'),$links=$wrapper.find('ul.contextual-links'),$trigger=$('<a class="contextual-links-trigger" href="#" />').text(Drupal.t('Configure')).click(function(){$links.stop(true,true).slideToggle(100);$wrapper.toggleClass('contextual-links-active');return false});$trigger.add($links).hover(function(){$region.addClass('contextual-links-region-active')},function(){$region.removeClass('contextual-links-region-active')});$region.bind('mouseleave click',Drupal.contextualLinks.mouseleave);$region.hover(function(){$trigger.addClass('contextual-links-trigger-active')},function(){$trigger.removeClass('contextual-links-trigger-active')});$wrapper.prepend($trigger)})}};Drupal.contextualLinks.mouseleave=function(){$(this).find('.contextual-links-active').removeClass('contextual-links-active').find('ul.contextual-links').hide()}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/modules/contextual/contextual.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/form.js. */
(function($){$.fn.drupalGetSummary=function(){var callback=this.data('summaryCallback');return(this[0]&&callback)?$.trim(callback(this[0])):''};$.fn.drupalSetSummary=function(callback){var self=this;if(typeof callback!='function'){var val=callback;callback=function(){return val}};return this.data('summaryCallback',callback).unbind('formUpdated.summary').bind('formUpdated.summary',function(){self.trigger('summaryUpdated')}).trigger('summaryUpdated')};Drupal.behaviors.formUpdated={attach:function(context){var events='change.formUpdated click.formUpdated blur.formUpdated keyup.formUpdated';$(context).find(':input').andSelf().filter(':input').unbind(events).bind(events,function(){$(this).trigger('formUpdated')})}};Drupal.behaviors.fillUserInfoFromCookie={attach:function(context,settings){$('form.user-info-from-cookie').once('user-info-from-cookie',function(){var formContext=this;$.each(['name','mail','homepage'],function(){var $element=$('[name='+this+']',formContext),cookie=$.cookie('Drupal.visitor.'+this);if($element.length&&cookie)$element.val(cookie)})})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/form.js. */
