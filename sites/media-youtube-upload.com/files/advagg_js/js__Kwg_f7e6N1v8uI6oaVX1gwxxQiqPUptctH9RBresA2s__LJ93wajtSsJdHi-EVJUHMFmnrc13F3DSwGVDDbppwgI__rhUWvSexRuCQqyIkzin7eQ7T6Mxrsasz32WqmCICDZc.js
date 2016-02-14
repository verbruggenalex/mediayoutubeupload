/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/views_bulk_operations/js/views_bulk_operations.js. */
(function($){Drupal.behaviors.vbo={attach:function(context){$('.vbo-views-form',context).each(function(){Drupal.vbo.initTableBehaviors(this);Drupal.vbo.initGenericBehaviors(this)})}};Drupal.vbo=Drupal.vbo||{};Drupal.vbo.initTableBehaviors=function(form){var selectAllMarkup=$('.vbo-table-select-all-markup',form);if(selectAllMarkup.length){$('.views-table > tbody',form).prepend('<tr class="views-table-row-select-all even">></tr>');var colspan=$('table th',form).length;$('.views-table-row-select-all',form).html('<td colspan="'+colspan+'">'+selectAllMarkup.html()+'</td>');$('.vbo-table-select-all-pages',form).click(function(){Drupal.vbo.tableSelectAllPages(form);return false});$('.vbo-table-select-this-page',form).click(function(){Drupal.vbo.tableSelectThisPage(form);return false})};$('.vbo-table-select-all',form).show();$('.vbo-table-select-all',form).click(function(){var table=$(this).closest('table')[0];$('input[id^="edit-views-bulk-operations"]:not(:disabled)',table).attr('checked',this.checked);if(this.checked){$('.views-table-row-select-all',table).show()}else{$('.views-table-row-select-all',table).hide();Drupal.vbo.tableSelectThisPage(form)}});if(Drupal.settings.vbo.row_clickable)$('.views-table tbody tr',form).click(function(event){if(event.target.tagName.toLowerCase()!='input'&&event.target.tagName.toLowerCase()!='a')$('input[id^="edit-views-bulk-operations"]:not(:disabled)',this).each(function(){var checked=this.checked;this.checked=!checked;$(this).trigger('click');this.checked=!checked})})};Drupal.vbo.tableSelectAllPages=function(form){$('.vbo-table-this-page',form).hide();$('.vbo-table-all-pages',form).show();$('.select-all-rows',form).val('1')};Drupal.vbo.tableSelectThisPage=function(form){$('.vbo-table-all-pages',form).hide();$('.vbo-table-this-page',form).show();$('.select-all-rows',form).val('0')};Drupal.vbo.initGenericBehaviors=function(form){$('.vbo-select-all-markup',form).show();$('.vbo-select-this-page',form).click(function(){$('input[id^="edit-views-bulk-operations"]',form).attr('checked',this.checked);$('.vbo-select-all-pages',form).attr('checked',false);$('.vbo-table-select-all',form).attr('checked',this.checked)});$('.vbo-select-all-pages',form).click(function(){$('input[id^="edit-views-bulk-operations"]',form).attr('checked',this.checked);$('.vbo-select-this-page',form).attr('checked',false);$('.vbo-table-select-all',form).attr('checked',this.checked);$('.select-all-rows',form).val(this.checked)});$('.vbo-select',form).click(function(){if(!this.checked){$('.vbo-select-this-page',form).attr('checked',false);$('.vbo-select-all-pages',form).attr('checked',false);$('.select-all-rows',form).val('0');var table=$(this).closest('table')[0];if(table){$('.vbo-table-select-all',table).attr('checked',false);if($('.vbo-table-select-this-page',table).length){$('.views-table-row-select-all',table).hide();Drupal.vbo.tableSelectThisPage(form)}}}})}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/views_bulk_operations/js/views_bulk_operations.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/google_analytics/googleanalytics.js. */
(function($){Drupal.googleanalytics={};$(document).ready(function(){$(document.body).bind("mousedown keyup touchstart",function(event){$(event.target).closest("a,area").each(function(){if(Drupal.googleanalytics.isInternal(this.href)){if($(this).is('.colorbox'));else if(Drupal.settings.googleanalytics.trackDownload&&Drupal.googleanalytics.isDownload(this.href)){ga("send","event","Downloads",Drupal.googleanalytics.getDownloadExtension(this.href).toUpperCase(),Drupal.googleanalytics.getPageUrl(this.href))}else if(Drupal.googleanalytics.isInternalSpecial(this.href))ga("send","pageview",{page:Drupal.googleanalytics.getPageUrl(this.href)})}else if(Drupal.settings.googleanalytics.trackMailto&&$(this).is("a[href^='mailto:'],area[href^='mailto:']")){ga("send","event","Mails","Click",this.href.substring(7))}else if(Drupal.settings.googleanalytics.trackOutbound&&this.href.match(/^\w+:\/\//i))if(Drupal.settings.googleanalytics.trackDomainMode!=2||(Drupal.settings.googleanalytics.trackDomainMode==2&&!Drupal.googleanalytics.isCrossDomain(this.hostname,Drupal.settings.googleanalytics.trackCrossDomains)))ga("send","event","Outbound links","Click",this.href)})});if(Drupal.settings.googleanalytics.trackUrlFragments)window.onhashchange=function(){ga('send','pageview',location.pathname+location.search+location.hash)};$(document).bind("cbox_complete",function(){var href=$.colorbox.element().attr("href");if(href)ga("send","pageview",{page:Drupal.googleanalytics.getPageUrl(href)})})});Drupal.googleanalytics.isCrossDomain=function(hostname,crossDomains){if(!crossDomains){return false}else return $.inArray(hostname,crossDomains)>-1?true:false};Drupal.googleanalytics.isDownload=function(url){var isDownload=new RegExp("\\.("+Drupal.settings.googleanalytics.trackDownloadExtensions+")([\?#].*)?$","i");return isDownload.test(url)};Drupal.googleanalytics.isInternal=function(url){var isInternal=new RegExp("^(https?):\/\/"+window.location.host,"i");return isInternal.test(url)};Drupal.googleanalytics.isInternalSpecial=function(url){var isInternalSpecial=new RegExp("(\/go\/.*)$","i");return isInternalSpecial.test(url)};Drupal.googleanalytics.getPageUrl=function(url){var extractInternalUrl=new RegExp("^(https?):\/\/"+window.location.host,"i");return url.replace(extractInternalUrl,'')};Drupal.googleanalytics.getDownloadExtension=function(url){var extractDownloadextension=new RegExp("\\.("+Drupal.settings.googleanalytics.trackDownloadExtensions+")([\?#].*)?$","i"),extension=extractDownloadextension.exec(url);return(extension===null)?'':extension[1]}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/google_analytics/googleanalytics.js. */