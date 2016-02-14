/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/user/user.js. */
(function($,Drupal){Drupal.BootstrapPassword=function(element){var self=this,$element=$(element);this.settings=Drupal.settings.password;this.$wrapper=$element.parent().parent();this.$row=$('<div class="row">').prependTo(this.$wrapper);this.password={$input:$element,$label:$element.parent().find('label'),$wrapper:$element.parent().addClass('col-sm-6 col-md-4 has-feedback').appendTo(self.$row)};this.password.$icon=$('<span class="glyphicon form-control-feedback"></span>').appendTo(this.password.$wrapper);this.strength={$label:$('<div class="label" aria-live="assertive"></div>').appendTo(this.password.$label),$progress:$('<div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>').appendTo(this.password.$wrapper)};this.strength.$bar=this.strength.$progress.find('.progress-bar');this.confirm={$input:this.$wrapper.find('input.password-confirm')};this.confirm.$wrapper=this.confirm.$input.parent().addClass('col-sm-6 col-md-4 has-feedback').appendTo(self.$row);this.confirm.$icon=$('<span class="glyphicon form-control-feedback"></span>');this.password.$input.on('keyup focus blur',function(){self.validateStrength()});this.confirm.$input.on('keyup blur',function(){self.validateMatch()});this.$helpBlock=$('<div class="help-block password-help"></div>').appendTo(this.$row);return this};Drupal.BootstrapPassword.prototype.switchClass=function($element,type,prefix){prefix=prefix+'-'||'';var types=prefix==='has-'?['error','warning','success']:['danger','info','success','warning'];if(type){type=types.splice($.inArray(type,types),1).shift();$element.addClass(prefix+type)};$element.removeClass(prefix+types.join(' '+prefix))};Drupal.BootstrapPassword.prototype.validateStrength=function(){var result=Drupal.evaluatePasswordStrength(this.password.$input.val(),Drupal.settings.password);this.$helpBlock.show();this.strength.$label.show();this.strength.$bar.show();this.$helpBlock.html(result.message);this.$helpBlock[result.strength===100?'hide':'show']();this.strength.$label.html(result.indicatorText);this.strength.$bar.attr('aria-valuenow',result.strength);this.strength.$bar.css('width',result.strength+'%');switch(result.indicatorText){case this.settings.weak:this.switchClass(this.password.$wrapper,'error','has');this.switchClass(this.strength.$label,'danger','label');this.switchClass(this.strength.$bar,'danger','progress-bar');this.password.$icon.addClass('glyphicon-remove').removeClass('glyphicon-warning-sign glyphicon-ok');break;case this.settings.fair:case this.settings.good:this.switchClass(this.password.$wrapper,'warning','has');this.switchClass(this.strength.$label,'warning','label');this.switchClass(this.strength.$bar,'warning','progress-bar');this.password.$icon.addClass('glyphicon-warning-sign').removeClass('glyphicon-remove glyphicon-ok');break;case this.settings.strong:this.switchClass(this.password.$wrapper,'success','has');this.switchClass(this.strength.$label,'success','label');this.switchClass(this.strength.$bar,'success','progress-bar');this.password.$icon.addClass('glyphicon-ok').removeClass('glyphicon-warning-sign glyphicon-remove');break};this.validateMatch()};Drupal.BootstrapPassword.prototype.validateMatch=function(){var password=this.password.$input.val();if(password&&password===this.confirm.$input.val()){this.switchClass(this.password.$wrapper,'success','has');this.switchClass(this.confirm.$wrapper,'success','has');this.$helpBlock.hide();this.strength.$label.hide();this.strength.$bar.hide();this.password.$icon.addClass('glyphicon-ok').removeClass('glyphicon-warning-sign glyphicon-remove');this.confirm.$icon.addClass('glyphicon-ok').removeClass('glyphicon-remove')}else if(password){this.switchClass(this.confirm.$wrapper,'error','has');this.confirm.$icon.addClass('glyphicon-remove').removeClass('glyphicon-ok')}else{this.confirm.$icon.removeClass('glyphicon-ok glyphicon-remove');this.confirm.$input.val('');this.switchClass(this.confirm.$wrapper,'','has')}};Drupal.behaviors.password={attach:function(context){$('input.password-field',context).once('password',function(){new Drupal.BootstrapPassword(this)})}}})(jQuery,window.Drupal);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/modules/user/user.js. */
