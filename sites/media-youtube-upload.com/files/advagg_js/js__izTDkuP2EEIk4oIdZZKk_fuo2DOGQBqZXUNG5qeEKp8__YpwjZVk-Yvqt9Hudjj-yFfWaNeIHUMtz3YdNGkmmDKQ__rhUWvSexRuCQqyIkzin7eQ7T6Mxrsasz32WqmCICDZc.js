/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/timezone.js. */
(function($){Drupal.behaviors.setTimezone={attach:function(context,settings){$('select.timezone-detect',context).once('timezone',function(){var dateString=Date(),matches=dateString.match(/\(([A-Z]{3,5})\)/),abbreviation=matches?matches[1]:0,dateNow=new Date(),offsetNow=dateNow.getTimezoneOffset()*-60,dateJan=new Date(dateNow.getFullYear(),0,1,12,0,0,0),dateJul=new Date(dateNow.getFullYear(),6,1,12,0,0,0),offsetJan=dateJan.getTimezoneOffset()*-60,offsetJul=dateJul.getTimezoneOffset()*-60,isDaylightSavingTime;if(offsetJan==offsetJul){isDaylightSavingTime=''}else if(Math.max(offsetJan,offsetJul)==offsetNow){isDaylightSavingTime=1}else isDaylightSavingTime=0;var path='system/timezone/'+abbreviation+'/'+offsetNow+'/'+isDaylightSavingTime,element=this;$.ajax({async:false,url:settings.basePath,data:{q:path,date:dateString},dataType:'json',success:function(data){if(data)$(element).val(data)}})})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/timezone.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/modules/user/user.js. */
(function($){Drupal.behaviors.password={attach:function(context,settings){var translate=settings.password;$('input.password-field',context).once('password',function(){var passwordInput=$(this),innerWrapper=$(this).parent(),outerWrapper=$(this).parent().parent();innerWrapper.addClass('password-parent');$('input.password-confirm',outerWrapper).parent().prepend('<div class="password-confirm">'+translate.confirmTitle+' <span></span></div>').addClass('confirm-parent');var confirmInput=$('input.password-confirm',outerWrapper),confirmResult=$('div.password-confirm',outerWrapper),confirmChild=$('span',confirmResult),passwordMeter='<div class="password-strength"><div class="password-strength-text" aria-live="assertive"></div><div class="password-strength-title">'+translate.strengthTitle+'</div><div class="password-indicator"><div class="indicator"></div></div></div>';$(confirmInput).parent().after('<div class="password-suggestions description"></div>');$(innerWrapper).prepend(passwordMeter);var passwordDescription=$('div.password-suggestions',outerWrapper).hide(),passwordCheck=function(){var result=Drupal.evaluatePasswordStrength(passwordInput.val(),settings.password);if(passwordDescription.html()!=result.message)passwordDescription.html(result.message);if(result.strength==100){passwordDescription.hide()}else passwordDescription.show();$(innerWrapper).find('.indicator').css('width',result.strength+'%');$(innerWrapper).find('.password-strength-text').html(result.indicatorText);passwordCheckMatch()},passwordCheckMatch=function(){if(confirmInput.val()){var success=passwordInput.val()===confirmInput.val();confirmResult.css({visibility:'visible'});if(this.confirmClass)confirmChild.removeClass(this.confirmClass);var confirmClass=success?'ok':'error';confirmChild.html(translate['confirm'+(success?'Success':'Failure')]).addClass(confirmClass);this.confirmClass=confirmClass}else confirmResult.css({visibility:'hidden'})};passwordInput.keyup(passwordCheck).focus(passwordCheck).blur(passwordCheck);confirmInput.keyup(passwordCheckMatch).blur(passwordCheckMatch)})}};Drupal.evaluatePasswordStrength=function(password,translate){password=$.trim(password);var weaknesses=0,strength=100,msg=[],hasLowercase=/[a-z]+/.test(password),hasUppercase=/[A-Z]+/.test(password),hasNumbers=/[0-9]+/.test(password),hasPunctuation=/[^a-zA-Z0-9]+/.test(password),usernameBox=$('input.username'),username=(usernameBox.length>0)?usernameBox.val():translate.username;if(password.length<6){msg.push(translate.tooShort);strength-=((6-password.length)*5)+30};if(!hasLowercase){msg.push(translate.addLowerCase);weaknesses++};if(!hasUppercase){msg.push(translate.addUpperCase);weaknesses++};if(!hasNumbers){msg.push(translate.addNumbers);weaknesses++};if(!hasPunctuation){msg.push(translate.addPunctuation);weaknesses++};switch(weaknesses){case 1:strength-=12.5;break;case 2:strength-=25;break;case 3:strength-=40;break;case 4:strength-=40;break};if(password!==''&&password.toLowerCase()===username.toLowerCase()){msg.push(translate.sameAsUsername);strength=5};if(strength<60){indicatorText=translate.weak}else if(strength<70){indicatorText=translate.fair}else if(strength<80){indicatorText=translate.good}else if(strength<=100)indicatorText=translate.strong;msg=translate.hasWeaknesses+'<ul><li>'+msg.join('</li><li>')+'</li></ul>';return{strength:strength,message:msg,indicatorText:indicatorText}};Drupal.behaviors.fieldUserRegistration={attach:function(context,settings){var $checkbox=$('form#field-ui-field-edit-form input#edit-instance-settings-user-register-form');if($checkbox.length)$('input#edit-instance-required',context).once('user-register-form-checkbox',function(){$(this).bind('change',function(e){if($(this).attr('checked'))$checkbox.attr('checked',true)})})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/modules/user/user.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_collapse.js. */
(function($){Drupal.toggleFieldset=function(fieldset){var $toggle=$($(fieldset).find('[data-toggle=collapse]').data('target'));if($toggle.length)$toggle.collapse('toggle')};Drupal.collapseScrollIntoView=function(node){var h=document.documentElement.clientHeight||document.body.clientHeight||0,offset=document.documentElement.scrollTop||document.body.scrollTop||0,posY=$(node).offset().top,fudge=55;if(posY+node.offsetHeight+fudge>h+offset)if(node.offsetHeight>h){window.scrollTo(0,posY)}else window.scrollTo(0,posY+node.offsetHeight-h+fudge)};Drupal.behaviors.collapse={attach:function(context,settings){$('fieldset.collapsible',context).once('collapse',function(){var $fieldset=$(this),anchor=location.hash&&location.hash!='#'?', '+location.hash:'';if($fieldset.find('.error'+anchor).length)$fieldset.removeClass('collapsed');var summary=$('<span class="summary"></span>');$fieldset.bind('summaryUpdated',function(){var text=$.trim($fieldset.drupalGetSummary());summary.html(text?' ('+text+')':'')}).trigger('summaryUpdated');var $legend=$('> legend .fieldset-legend',this);$('<span class="fieldset-legend-prefix element-invisible"></span>').append($fieldset.hasClass('collapsed')?Drupal.t('Show'):Drupal.t('Hide')).prependTo($legend);$fieldset.find('[data-toggle=collapse]').on('click',function(e){e.preventDefault()});$fieldset.append(summary).on('show.bs.collapse',function(){$fieldset.removeClass('collapsed').find('> legend span.fieldset-legend-prefix').html(Drupal.t('Hide'))}).on('shown.bs.collapse',function(){$fieldset.trigger({type:'collapsed',value:false});Drupal.collapseScrollIntoView($fieldset.get(0))}).on('hide.bs.collapse',function(){$fieldset.addClass('collapsed').find('> legend span.fieldset-legend-prefix').html(Drupal.t('Show'))}).on('hidden.bs.collapse',function(){$fieldset.trigger({type:'collapsed',value:true})})})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_collapse.js. */
