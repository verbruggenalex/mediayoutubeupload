/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/ctools/js/ajax-responder.js. */
(function($){Drupal.CTools=Drupal.CTools||{};Drupal.CTools.AJAX=Drupal.CTools.AJAX||{};Drupal.CTools.AJAX.warmCache=function(){$this=$(this);var old_url=$this.attr('href');if($this.hasClass('ctools-fetching')||Drupal.CTools.AJAX.commandCache[old_url])return false;var $objects=$('a[href="'+old_url+'"]');$objects.addClass('ctools-fetching');try{url=old_url.replace(/\/nojs(\/|$)/g,'/ajax$1');$.ajax({type:"POST",url:url,data:{js:1,ctools_ajax:1},global:true,success:function(data){Drupal.CTools.AJAX.commandCache[old_url]=data;$objects.addClass('ctools-cache-warmed').trigger('ctools-cache-warm',[data])},complete:function(){$objects.removeClass('ctools-fetching')},dataType:'json'})}catch(err){$objects.removeClass('ctools-fetching');return false};return false};Drupal.CTools.AJAX.clickAJAXCacheLink=function(){$this=$(this);if($this.hasClass('ctools-fetching')){$this.bind('ctools-cache-warm',function(event,data){Drupal.CTools.AJAX.respond(data)});return false}else if($this.hasClass('ctools-cache-warmed')&&Drupal.CTools.AJAX.commandCache[$this.attr('href')]){Drupal.CTools.AJAX.respond(Drupal.CTools.AJAX.commandCache[$this.attr('href')]);return false}else return Drupal.CTools.AJAX.clickAJAXLink.apply(this)};Drupal.CTools.AJAX.findURL=function(item){var url='',url_class='.'+$(item).attr('id')+'-url';$(url_class).each(function(){var $this=$(this);if(url&&$this.val())url+='/';url+=$this.val()});return url};$(function(){Drupal.ajax.prototype.commands.attr=function(ajax,data,status){$(data.selector).attr(data.name,data.value)};Drupal.ajax.prototype.commands.redirect=function(ajax,data,status){if(data.delay>0){setTimeout(function(){location.href=data.url},data.delay)}else location.href=data.url};Drupal.ajax.prototype.commands.reload=function(ajax,data,status){location.reload()};Drupal.ajax.prototype.commands.submit=function(ajax,data,status){$(data.selector).submit()}})})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/ctools/js/ajax-responder.js. */