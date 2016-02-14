/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_progress.js. */
(function($){Drupal.progressBar=function(id,updateCallback,method,errorCallback){var pb=this;this.id=id;this.method=method||'GET';this.updateCallback=updateCallback;this.errorCallback=errorCallback;this.element=$('<div class="progress-wrapper" aria-live="polite"></div>');this.element.html('<div id ="'+id+'" class="progress progress-striped active"><div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="percentage sr-only"></div></div></div></div><div class="percentage pull-right"></div><div class="message">&nbsp;</div>')};Drupal.progressBar.prototype.setProgress=function(percentage,message){if(percentage>=0&&percentage<=100){$('div.progress-bar',this.element).css('width',percentage+'%');$('div.progress-bar',this.element).attr('aria-valuenow',percentage);$('div.percentage',this.element).html(percentage+'%')};$('div.message',this.element).html(message);if(this.updateCallback)this.updateCallback(percentage,message,this)};Drupal.progressBar.prototype.startMonitoring=function(uri,delay){this.delay=delay;this.uri=uri;this.sendPing()};Drupal.progressBar.prototype.stopMonitoring=function(){clearTimeout(this.timer);this.uri=null};Drupal.progressBar.prototype.sendPing=function(){if(this.timer)clearTimeout(this.timer);if(this.uri){var pb=this;$.ajax({type:this.method,url:this.uri,data:'',dataType:'json',success:function(progress){if(progress.status==0){pb.displayError(progress.data);return};pb.setProgress(progress.percentage,progress.message);pb.timer=setTimeout(function(){pb.sendPing()},pb.delay)},error:function(xmlhttp){pb.displayError(Drupal.ajaxError(xmlhttp,pb.uri))}})}};Drupal.progressBar.prototype.displayError=function(string){var error=$('<div class="alert alert-block alert-error"><a class="close" data-dismiss="alert" href="#">&times;</a><h4>Error message</h4></div>').append(string);$(this.element).before(error).hide();if(this.errorCallback)this.errorCallback(this)}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_progress.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/textarea.js. */
(function($){Drupal.behaviors.textarea={attach:function(context,settings){$('.form-textarea-wrapper.resizable',context).once('textarea',function(){var staticOffset=null,textarea=$(this).addClass('resizable-textarea').find('textarea'),grippie=$('<div class="grippie"></div>').mousedown(startDrag);grippie.insertAfter(textarea)
function startDrag(e){staticOffset=textarea.height()-e.pageY;textarea.css('opacity',0.25);$(document).mousemove(performDrag).mouseup(endDrag);return false}
function performDrag(e){textarea.height(Math.max(32,staticOffset+e.pageY)+'px');return false}
function endDrag(e){$(document).unbind('mousemove',performDrag).unbind('mouseup',endDrag);textarea.css('opacity',1)}})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/textarea.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/autocomplete.js. */
(function($){Drupal.behaviors.autocomplete={attach:function(context,settings){var acdb=[];$('input.autocomplete',context).once('autocomplete',function(){var uri=this.value;if(!acdb[uri])acdb[uri]=new Drupal.ACDB(uri);var $input=$('#'+this.id.substr(0,this.id.length-13)).attr('autocomplete','OFF').attr('aria-autocomplete','list');$($input[0].form).submit(Drupal.autocompleteSubmit);$input.parent().attr('role','application').append($('<span class="element-invisible" aria-live="assertive"></span>').attr('id',$input.attr('id')+'-autocomplete-aria-live'));new Drupal.jsAC($input,acdb[uri])})}};Drupal.autocompleteSubmit=function(){return $('#autocomplete').each(function(){this.owner.hidePopup()}).length==0};Drupal.jsAC=function($input,db){var ac=this;this.input=$input[0];this.ariaLive=$('#'+this.input.id+'-autocomplete-aria-live');this.db=db;$input.keydown(function(event){return ac.onkeydown(this,event)}).keyup(function(event){ac.onkeyup(this,event)}).blur(function(){ac.hidePopup();ac.db.cancel()})};Drupal.jsAC.prototype.onkeydown=function(input,e){if(!e)e=window.event;switch(e.keyCode){case 40:this.selectDown();return false;case 38:this.selectUp();return false;default:return true}};Drupal.jsAC.prototype.onkeyup=function(input,e){if(!e)e=window.event;switch(e.keyCode){case 16:case 17:case 18:case 20:case 33:case 34:case 35:case 36:case 37:case 38:case 39:case 40:return true;case 9:case 13:case 27:this.hidePopup(e.keyCode);return true;default:if(input.value.length>0&&!input.readOnly){this.populatePopup()}else this.hidePopup(e.keyCode);return true}};Drupal.jsAC.prototype.select=function(node){this.input.value=$(node).data('autocompleteValue');$(this.input).trigger('autocompleteSelect',[node])};Drupal.jsAC.prototype.selectDown=function(){if(this.selected&&this.selected.nextSibling){this.highlight(this.selected.nextSibling)}else if(this.popup){var lis=$('li',this.popup);if(lis.length>0)this.highlight(lis.get(0))}};Drupal.jsAC.prototype.selectUp=function(){if(this.selected&&this.selected.previousSibling)this.highlight(this.selected.previousSibling)};Drupal.jsAC.prototype.highlight=function(node){if(this.selected)$(this.selected).removeClass('selected');$(node).addClass('selected');this.selected=node;$(this.ariaLive).html($(this.selected).html())};Drupal.jsAC.prototype.unhighlight=function(node){$(node).removeClass('selected');this.selected=false;$(this.ariaLive).empty()};Drupal.jsAC.prototype.hidePopup=function(keycode){if(this.selected&&((keycode&&keycode!=46&&keycode!=8&&keycode!=27)||!keycode))this.select(this.selected);var popup=this.popup;if(popup){this.popup=null;$(popup).fadeOut('fast',function(){$(popup).remove()})};this.selected=false;$(this.ariaLive).empty()};Drupal.jsAC.prototype.populatePopup=function(){var $input=$(this.input),position=$input.position();if(this.popup)$(this.popup).remove();this.selected=false;this.popup=$('<div id="autocomplete"></div>')[0];this.popup.owner=this;$(this.popup).css({top:parseInt(position.top+this.input.offsetHeight,10)+'px',left:parseInt(position.left,10)+'px',width:$input.innerWidth()+'px',display:'none'});$input.before(this.popup);this.db.owner=this;this.db.search(this.input.value)};Drupal.jsAC.prototype.found=function(matches){if(!this.input.value.length)return false;var ul=$('<ul></ul>'),ac=this;for(key in matches)$('<li></li>').html($('<div></div>').html(matches[key])).mousedown(function(){ac.hidePopup(this)}).mouseover(function(){ac.highlight(this)}).mouseout(function(){ac.unhighlight(this)}).data('autocompleteValue',key).appendTo(ul);if(this.popup)if(ul.children().length){$(this.popup).empty().append(ul).show();$(this.ariaLive).html(Drupal.t('Autocomplete popup'))}else{$(this.popup).css({visibility:'hidden'});this.hidePopup()}};Drupal.jsAC.prototype.setStatus=function(status){switch(status){case'begin':$(this.input).addClass('throbbing');$(this.ariaLive).html(Drupal.t('Searching for matches...'));break;case'cancel':case'error':case'found':$(this.input).removeClass('throbbing');break}};Drupal.ACDB=function(uri){this.uri=uri;this.delay=300;this.cache={}};Drupal.ACDB.prototype.search=function(searchString){var db=this;this.searchString=searchString;searchString=searchString.replace(/^\s+|\.{2,}\/|\s+$/g,'');if(searchString.length<=0||searchString.charAt(searchString.length-1)==',')return;if(this.cache[searchString])return this.owner.found(this.cache[searchString]);if(this.timer)clearTimeout(this.timer);this.timer=setTimeout(function(){db.owner.setStatus('begin');$.ajax({type:'GET',url:db.uri+'/'+Drupal.encodePath(searchString),dataType:'json',success:function(matches){if(typeof matches.status=='undefined'||matches.status!=0){db.cache[searchString]=matches;if(db.searchString==searchString)db.owner.found(matches);db.owner.setStatus('found')}},error:function(xmlhttp){alert(Drupal.ajaxError(xmlhttp,db.uri))}})},this.delay)};Drupal.ACDB.prototype.cancel=function(){if(this.owner)this.owner.setStatus('cancel');if(this.timer)clearTimeout(this.timer);this.searchString=''}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/autocomplete.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/media_youtube_upload/js/media_youtube_upload.js. */
(function($){$.fn.startUpload=function(data){MediaYoutubeUpload.startUpload($.parseJSON(data))};var UploadVideo=function(){this.videoId='';this.uploadStartTime=0};UploadVideo.prototype.ready=function(accessToken,object){this.accessToken=accessToken};UploadVideo.prototype.uploadFile=function($file,token,fieldNameHelper){var file=$file[0].files[0],metadata={snippet:{title:this.title,description:this.description,tags:this.tags,categoryId:this.categoryId},status:{privacyStatus:this.privacy}},uploader=new MediaUploader({baseUrl:'https://www.googleapis.com/upload/youtube/v3/videos',file:file,token:token,metadata:metadata,params:{part:Object.keys(metadata).join(',')},onError:function(data){var message=data;try{var errorResponse=JSON.parse(data);message=errorResponse.error.message}finally{alert(message)}}.bind(this),onProgress:function(data){var currentTime=Date.now(),bytesUploaded=data.loaded,totalBytes=data.total,bytesPerSecond=bytesUploaded/((currentTime-this.uploadStartTime)/1e3),estimatedSecondsRemaining=Math.round((totalBytes-bytesUploaded)/bytesPerSecond),percentageComplete=Math.ceil((bytesUploaded*100)/totalBytes);$('#youtube-cors-progress').html($('#youtube-cors-progress').children());$('#youtube-cors-progress').progressbar({value:percentageComplete})}.bind(this),onComplete:function(data){var uploadResponse=JSON.parse(data),youtubeID='input[name="'+fieldNameHelper.name+'[youtube_id]"]';$(youtubeID).val(uploadResponse.id);var file_id=$file.attr('id');$('#'+file_id).remove();var buttonName='[name="'+fieldNameHelper.name+'[save_button]"]';$(buttonName).mousedown()}.bind(this)});this.uploadStartTime=Date.now();uploader.upload()};Drupal.behaviors.mediaYoutubeUpload={};Drupal.behaviors.mediaYoutubeUploadValidateAutoAttach={attach:function(context,settings){if(settings.media_youtube_upload)$.each(settings.media_youtube_upload,function(selector){var upload_validators=settings.media_youtube_upload[selector].upload_validators,youtube_field_helper=settings.media_youtube_upload[selector].youtube_field_helper;$(selector,context).once('media-youtube-uploader',function(){var fieldsPresent='#edit-'+youtube_field_helper.id+"-youtube-fields";youtube_field_helper.fieldsPresent=fieldsPresent;var uploadButton='[name="'+youtube_field_helper.name+'[upload_button]"]';youtube_field_helper.uploadButton=uploadButton;$(fieldsPresent).hide();$(uploadButton).prop('disabled',true);$(uploadButton).addClass("form-button-disabled");$(this).change({upload_validators:upload_validators,field_helper:youtube_field_helper},MediaYoutubeUpload.getFields)})})},detach:function(context,settings){if(settings.media_youtube_upload)$.each(settings.media_youtube_upload,function(selector){$(selector,context).once('media-youtube-uploader',function(){$(this).unbind('change',Drupal.mediaYoutubeUpload.getFields)})})}};MediaYoutubeUpload={};MediaYoutubeUpload.getFields=function(event){$('.file-upload-js-error').remove();var files=event.originalEvent.target.files;for(var i=0,len=files.length;i<len;i++)console.log(files[i].name,files[i].type,files[i].size);var allowedExtensions=event.data.upload_validators.allowed_extensions,allowedSize=event.data.upload_validators.max_uploadsize,extensionPattern=allowedExtensions.replace(/,\s*/g,'|'),fileSize=event.originalEvent.target.files[0].size,fileNameInput='input[name="'+event.data.field_helper.name+'[filename]"]',fileSizeInput='input[name="'+event.data.field_helper.name+'[filesize]"]';$uploadButton=$(event.data.field_helper.uploadButton);$fieldsPresent=$(event.data.field_helper.fieldsPresent);var errors=new Array();if(extensionPattern.length>1&&$(this).val().length>0){var acceptableMatch=new RegExp('\\.('+extensionPattern+')$','gi');if(!acceptableMatch.test($(this).val()))errors.push(Drupal.t("The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.",{'%filename':$(this).val().replace('C:\\fakepath\\',''),'%extensions':extensionPattern.replace(/\|/g,', ')}))};if(fileSize>allowedSize)errors.push(Drupal.t("The selected file %filename is too large. Please select a file that is smaller than %allowedsize.",{'%filename':$(this).val().replace('C:\\fakepath\\',''),'%allowedsize':Drupal.mediaYoutubeUpload.makeSizeReadable(allowedSize)}));if(typeof errors!=="undefined"&&errors.length!==0){var errorString='<div class="messages error file-upload-js-error" aria-live="polite">';$.each(errors,function(i,val){errorString+=(errors.length>1&&i===0)?'<ul>':'';errorString+=(errors.length>1)?'<li>'+val+'</li>':val;errorString+=(errors.length>1&&i===errors.length-1)?'</ul>':''});errorString+='</div>';$(this).closest('div.form-type-media-youtube-upload-upload').prepend(errorString);$(this).val('');$(fileNameInput).val('');$(fileSizeInput).val('');$fieldsPresent.hide();$uploadButton.prop('disabled',true);$uploadButton.addClass("form-button-disabled")}else{$(fileNameInput).val($(this).val());$(fileSizeInput).val(fileSize);$fieldsPresent.show();$uploadButton.prop('disabled',false);$uploadButton.removeClass("form-button-disabled")}};MediaYoutubeUpload.resetFormElement=function(e){e.wrap('<form>').closest('form').get(0).reset();e.unwrap()};MediaYoutubeUpload.makeSizeReadable=function(bytes){var sizes=['Bytes','KB','MB','GB','TB'];if(bytes==0)return'0 Byte';var i=parseInt(Math.floor(Math.log(bytes)/Math.log(1024)));return Math.round(bytes/Math.pow(1024,i),2)+' '+sizes[i]},MediaYoutubeUpload.displayProgress=function(el,event){if(event.lengthComputable){percent=Math.floor((event.loaded/event.total)*100);$('#youtube-cors-progress').progressbar({value:percent});return true}},MediaYoutubeUpload.startUpload=function(data){var id=data.id,fieldNameHelper=Drupal.settings.media_youtube_upload[data.id].youtube_field_helper;$file=$(id);$file.hide().after('<div id="youtube-cors-progress" style="width: 270px; float: left;">'+Drupal.t('Preparing upload ...')+'</div>');var uploadVideo=new UploadVideo();uploadVideo.description=data.fields.field_file_youtube_description;uploadVideo.tags=data.fields.field_file_youtube_tags;uploadVideo.categoryId=data.fields.field_file_youtube_category;uploadVideo.title=data.fields.field_file_youtube_title;uploadVideo.privacy=data.fields.field_file_youtube_privacy;uploadVideo.uploadFile($file,data.token,fieldNameHelper)}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/media_youtube_upload/js/media_youtube_upload.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/modules/file/file.js. */
(function($){Drupal.behaviors.fileValidateAutoAttach={attach:function(context,settings){if(settings.file&&settings.file.elements)$.each(settings.file.elements,function(selector){var extensions=settings.file.elements[selector];$(selector,context).bind('change',{extensions:extensions},Drupal.file.validateExtension)})},detach:function(context,settings){if(settings.file&&settings.file.elements)$.each(settings.file.elements,function(selector){$(selector,context).unbind('change',Drupal.file.validateExtension)})}};Drupal.behaviors.fileButtons={attach:function(context){$('input.form-submit',context).bind('mousedown',Drupal.file.disableFields);$('div.form-managed-file input.form-submit',context).bind('mousedown',Drupal.file.progressBar)},detach:function(context){$('input.form-submit',context).unbind('mousedown',Drupal.file.disableFields);$('div.form-managed-file input.form-submit',context).unbind('mousedown',Drupal.file.progressBar)}};Drupal.behaviors.filePreviewLinks={attach:function(context){$('div.form-managed-file .file a, .file-widget .file a',context).bind('click',Drupal.file.openInNewWindow)},detach:function(context){$('div.form-managed-file .file a, .file-widget .file a',context).unbind('click',Drupal.file.openInNewWindow)}};Drupal.file=Drupal.file||{validateExtension:function(event){$('.file-upload-js-error').remove();var extensionPattern=event.data.extensions.replace(/,\s*/g,'|');if(extensionPattern.length>1&&this.value.length>0){var acceptableMatch=new RegExp('\\.('+extensionPattern+')$','gi');if(!acceptableMatch.test(this.value)){var error=Drupal.t("The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.",{'%filename':this.value.replace('C:\\fakepath\\',''),'%extensions':extensionPattern.replace(/\|/g,', ')});$(this).closest('div.form-managed-file').prepend('<div class="messages error file-upload-js-error" aria-live="polite">'+error+'</div>');this.value='';return false}}},disableFields:function(event){var clickedButton=this;if(!$(clickedButton).hasClass('ajax-processed'))return;var $enabledFields=[];if($(this).closest('div.form-managed-file').length>0)$enabledFields=$(this).closest('div.form-managed-file').find('input.form-file');var $fieldsToTemporarilyDisable=$('div.form-managed-file input.form-file').not($enabledFields).not(':disabled');$fieldsToTemporarilyDisable.attr('disabled','disabled');setTimeout(function(){$fieldsToTemporarilyDisable.attr('disabled',false)},1e3)},progressBar:function(event){var clickedButton=this,$progressId=$(clickedButton).closest('div.form-managed-file').find('input.file-progress');if($progressId.length){var originalName=$progressId.attr('name');$progressId.attr('name',originalName.match(/APC_UPLOAD_PROGRESS|UPLOAD_IDENTIFIER/)[0]);setTimeout(function(){$progressId.attr('name',originalName)},1e3)};setTimeout(function(){$(clickedButton).closest('div.form-managed-file').find('div.ajax-progress-bar').slideDown()},500)},openInNewWindow:function(event){$(this).attr('target','_blank');window.open(this.href,'filePreview','toolbar=0,scrollbars=1,location=1,statusbar=1,menubar=0,resizable=1,width=500,height=550');return false}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/modules/file/file.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/libraries/google-api-cors-upload/cors_upload.js. */
var DRIVE_UPLOAD_URL='https://www.googleapis.com/upload/drive/v2/files/',RetryHandler=function(){this.interval=1e3;this.maxInterval=60*1e3};RetryHandler.prototype.retry=function(fn){setTimeout(fn,this.interval);this.interval=this.nextInterval_()};RetryHandler.prototype.reset=function(){this.interval=1e3};RetryHandler.prototype.nextInterval_=function(){var interval=this.interval*2+this.getRandomInt_(0,1e3);return Math.min(interval,this.maxInterval)};RetryHandler.prototype.getRandomInt_=function(min,max){return Math.floor(Math.random()*(max-min+1)+min)};var MediaUploader=function(options){var noop=function(){};this.file=options.file;this.contentType=options.contentType||this.file.type||'application/octet-stream';this.metadata=options.metadata||{title:this.file.name,mimeType:this.contentType};this.token=options.token;this.onComplete=options.onComplete||noop;this.onProgress=options.onProgress||noop;this.onError=options.onError||noop;this.offset=options.offset||0;this.chunkSize=options.chunkSize||0;this.retryHandler=new RetryHandler();this.url=options.url;if(!this.url){var params=options.params||{};params.uploadType='resumable';this.url=this.buildUrl_(options.fileId,params,options.baseUrl)};this.httpMethod=options.fileId?'PUT':'POST'};MediaUploader.prototype.upload=function(){var self=this,xhr=new XMLHttpRequest();xhr.open(this.httpMethod,this.url,true);xhr.setRequestHeader('Authorization','Bearer '+this.token);xhr.setRequestHeader('Content-Type','application/json');xhr.setRequestHeader('X-Upload-Content-Length',this.file.size);xhr.setRequestHeader('X-Upload-Content-Type',this.contentType);xhr.onload=function(e){if(e.target.status<400){var location=e.target.getResponseHeader('Location');this.url=location;this.sendFile_()}else this.onUploadError_(e)}.bind(this);xhr.onerror=this.onUploadError_.bind(this);xhr.send(JSON.stringify(this.metadata))};MediaUploader.prototype.sendFile_=function(){var content=this.file,end=this.file.size;if(this.offset||this.chunkSize){if(this.chunkSize)end=Math.min(this.offset+this.chunkSize,this.file.size);content=content.slice(this.offset,end)};var xhr=new XMLHttpRequest();xhr.open('PUT',this.url,true);xhr.setRequestHeader('Content-Type',this.contentType);xhr.setRequestHeader('Content-Range','bytes '+this.offset+'-'+(end-1)+'/'+this.file.size);xhr.setRequestHeader('X-Upload-Content-Type',this.file.type);if(xhr.upload)xhr.upload.addEventListener('progress',this.onProgress);xhr.onload=this.onContentUploadSuccess_.bind(this);xhr.onerror=this.onContentUploadError_.bind(this);xhr.send(content)};MediaUploader.prototype.resume_=function(){var xhr=new XMLHttpRequest();xhr.open('PUT',this.url,true);xhr.setRequestHeader('Content-Range','bytes */'+this.file.size);xhr.setRequestHeader('X-Upload-Content-Type',this.file.type);if(xhr.upload)xhr.upload.addEventListener('progress',this.onProgress);xhr.onload=this.onContentUploadSuccess_.bind(this);xhr.onerror=this.onContentUploadError_.bind(this);xhr.send()};MediaUploader.prototype.extractRange_=function(xhr){var range=xhr.getResponseHeader('Range');if(range)this.offset=parseInt(range.match(/\d+/g).pop(),10)+1};MediaUploader.prototype.onContentUploadSuccess_=function(e){if(e.target.status==200||e.target.status==201){this.onComplete(e.target.response)}else if(e.target.status==308){this.extractRange_(e.target);this.retryHandler.reset();this.sendFile_()}};MediaUploader.prototype.onContentUploadError_=function(e){if(e.target.status&&e.target.status<500){this.onError(e.target.response)}else this.retryHandler.retry(this.resume_.bind(this))};MediaUploader.prototype.onUploadError_=function(e){this.onError(e.target.response)};MediaUploader.prototype.buildQuery_=function(params){params=params||{};return Object.keys(params).map(function(key){return encodeURIComponent(key)+'='+encodeURIComponent(params[key])}).join('&')};MediaUploader.prototype.buildUrl_=function(id,params,baseUrl){var url=baseUrl||DRIVE_UPLOAD_URL;if(id)url+=id;var query=this.buildQuery_(params);if(query)url+='?'+query;return url};
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/libraries/google-api-cors-upload/cors_upload.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/google_analytics/googleanalytics.js. */
(function($){Drupal.googleanalytics={};$(document).ready(function(){$(document.body).bind("mousedown keyup touchstart",function(event){$(event.target).closest("a,area").each(function(){if(Drupal.googleanalytics.isInternal(this.href)){if($(this).is('.colorbox'));else if(Drupal.settings.googleanalytics.trackDownload&&Drupal.googleanalytics.isDownload(this.href)){ga("send","event","Downloads",Drupal.googleanalytics.getDownloadExtension(this.href).toUpperCase(),Drupal.googleanalytics.getPageUrl(this.href))}else if(Drupal.googleanalytics.isInternalSpecial(this.href))ga("send","pageview",{page:Drupal.googleanalytics.getPageUrl(this.href)})}else if(Drupal.settings.googleanalytics.trackMailto&&$(this).is("a[href^='mailto:'],area[href^='mailto:']")){ga("send","event","Mails","Click",this.href.substring(7))}else if(Drupal.settings.googleanalytics.trackOutbound&&this.href.match(/^\w+:\/\//i))if(Drupal.settings.googleanalytics.trackDomainMode!=2||(Drupal.settings.googleanalytics.trackDomainMode==2&&!Drupal.googleanalytics.isCrossDomain(this.hostname,Drupal.settings.googleanalytics.trackCrossDomains)))ga("send","event","Outbound links","Click",this.href)})});if(Drupal.settings.googleanalytics.trackUrlFragments)window.onhashchange=function(){ga('send','pageview',location.pathname+location.search+location.hash)};$(document).bind("cbox_complete",function(){var href=$.colorbox.element().attr("href");if(href)ga("send","pageview",{page:Drupal.googleanalytics.getPageUrl(href)})})});Drupal.googleanalytics.isCrossDomain=function(hostname,crossDomains){if(!crossDomains){return false}else return $.inArray(hostname,crossDomains)>-1?true:false};Drupal.googleanalytics.isDownload=function(url){var isDownload=new RegExp("\\.("+Drupal.settings.googleanalytics.trackDownloadExtensions+")([\?#].*)?$","i");return isDownload.test(url)};Drupal.googleanalytics.isInternal=function(url){var isInternal=new RegExp("^(https?):\/\/"+window.location.host,"i");return isInternal.test(url)};Drupal.googleanalytics.isInternalSpecial=function(url){var isInternalSpecial=new RegExp("(\/go\/.*)$","i");return isInternalSpecial.test(url)};Drupal.googleanalytics.getPageUrl=function(url){var extractInternalUrl=new RegExp("^(https?):\/\/"+window.location.host,"i");return url.replace(extractInternalUrl,'')};Drupal.googleanalytics.getDownloadExtension=function(url){var extractDownloadextension=new RegExp("\\.("+Drupal.settings.googleanalytics.trackDownloadExtensions+")([\?#].*)?$","i"),extension=extractDownloadextension.exec(url);return(extension===null)?'':extension[1]}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/google_analytics/googleanalytics.js. */