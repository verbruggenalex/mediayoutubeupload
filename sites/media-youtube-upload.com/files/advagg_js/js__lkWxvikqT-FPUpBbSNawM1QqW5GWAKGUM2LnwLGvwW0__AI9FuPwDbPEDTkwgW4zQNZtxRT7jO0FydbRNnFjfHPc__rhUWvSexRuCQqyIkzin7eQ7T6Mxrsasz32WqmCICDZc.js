/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/modules/contextual/contextual.js. */
(function($){Drupal.contextualLinks=Drupal.contextualLinks||{};Drupal.behaviors.contextualLinks={attach:function(context){$('div.contextual-links-wrapper',context).once('contextual-links',function(){var $wrapper=$(this),$region=$wrapper.closest('.contextual-links-region'),$links=$wrapper.find('ul.contextual-links'),$trigger=$('<a class="contextual-links-trigger" href="#" />').text(Drupal.t('Configure')).click(function(){$links.stop(true,true).slideToggle(100);$wrapper.toggleClass('contextual-links-active');return false});$trigger.add($links).hover(function(){$region.addClass('contextual-links-region-active')},function(){$region.removeClass('contextual-links-region-active')});$region.bind('mouseleave click',Drupal.contextualLinks.mouseleave);$region.hover(function(){$trigger.addClass('contextual-links-trigger-active')},function(){$trigger.removeClass('contextual-links-trigger-active')});$wrapper.prepend($trigger)})}};Drupal.contextualLinks.mouseleave=function(){$(this).find('.contextual-links-active').removeClass('contextual-links-active').find('ul.contextual-links').hide()}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/modules/contextual/contextual.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/jquery_update/replace/ui/external/jquery.cookie.js. */
jQuery.cookie=function(key,value,options){if(arguments.length>1&&(value===null||typeof value!=="object")){options=jQuery.extend({},options);if(value===null)options.expires=-1;if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setDate(t.getDate()+days)};return(document.cookie=[encodeURIComponent(key),'=',options.raw?String(value):encodeURIComponent(String(value)),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''))};options=value||{};var result,decode=options.raw?function(s){return s}:decodeURIComponent;return(result=new RegExp('(?:^|; )'+encodeURIComponent(key)+'=([^;]*)').exec(document.cookie))?decode(result[1]):null};
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/jquery_update/replace/ui/external/jquery.cookie.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_vertical-tabs.js. */
(function($){Drupal.behaviors.verticalTabs={attach:function(context){$('.vertical-tabs-panes',context).once('vertical-tabs',function(){$(this).addClass('tab-content');var focusID=$(':hidden.vertical-tabs-active-tab',this).val();if(typeof focusID==='undefined'||!focusID.length)focusID=false;var tab_focus,$fieldsets=$('> fieldset',this);if($fieldsets.length==0)return;var tab_list=$('<ul class="nav nav-tabs vertical-tabs-list"></ul>');$(this).wrap('<div class="tabbable tabs-left vertical-tabs clearfix"></div>').before(tab_list);$fieldsets.each(function(){var vertical_tab=new Drupal.verticalTab({title:$('> legend',this).text(),fieldset:$(this)});tab_list.append(vertical_tab.item);$(this).removeClass('collapsible collapsed panel panel-default').addClass('tab-pane vertical-tabs-pane').data('verticalTab',vertical_tab).find('> legend').remove();$(this).find('> div').removeClass('panel-collapse collapse').addClass('fade');if(this.id===focusID)tab_focus=$(this)});$('> li:first',tab_list).addClass('first');$('> li:last',tab_list).addClass('last');if(!tab_focus)if(window.location.hash&&$(this).find(window.location.hash).length){tab_focus=$(this).find(window.location.hash).closest('.vertical-tabs-pane')}else tab_focus=$('> .vertical-tabs-pane:first',this);if(tab_focus.length)tab_focus.data('verticalTab').focus()})}};Drupal.verticalTab=function(settings){var self=this;$.extend(this,settings,Drupal.theme('verticalTab',settings));this.link.click(function(){self.focus()});this.link.keydown(function(event){if(event.keyCode==13){self.focus();$("fieldset.vertical-tabs-pane :input:visible:enabled:first").focus();return false}});this.fieldset.bind('summaryUpdated',function(){self.updateSummary()}).trigger('summaryUpdated')};Drupal.verticalTab.prototype={focus:function(){this.fieldset.siblings('fieldset.vertical-tabs-pane').each(function(){$(this).removeClass('active').find('> div').removeClass('in');var tab=$(this).data('verticalTab');tab.item.removeClass('selected')}).end().addClass('active').siblings(':hidden.vertical-tabs-active-tab').val(this.fieldset.attr('id'));this.fieldset.find('> div').addClass('in');this.fieldset.data('verticalTab').item.find('a').tab('show');this.item.addClass('selected');$('#active-vertical-tab').remove();this.link.append('<span id="active-vertical-tab" class="element-invisible">'+Drupal.t('(active tab)')+'</span>')},updateSummary:function(){this.summary.html(this.fieldset.drupalGetSummary())},tabShow:function(){this.item.show();this.item.parent().children('.vertical-tab-button').removeClass('first').filter(':visible:first').addClass('first');this.fieldset.removeClass('vertical-tab-hidden');this.focus();return this},tabHide:function(){this.item.hide();this.item.parent().children('.vertical-tab-button').removeClass('first').filter(':visible:first').addClass('first');this.fieldset.addClass('vertical-tab-hidden');var $firstTab=this.fieldset.siblings('.vertical-tabs-pane:not(.vertical-tab-hidden):first');if($firstTab.length)$firstTab.data('verticalTab').focus();return this}};Drupal.theme.prototype.verticalTab=function(settings){var tab={};tab.item=$('<li class="vertical-tab-button" tabindex="-1"></li>').append(tab.link=$('<a href="#'+settings.fieldset[0].id+'" data-toggle="tab"></a>').append(tab.title=$('<span></span>').text(settings.title)).append(tab.summary=$('<div class="summary"></div>')));return tab}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/themes/bootstrap/js/misc/_vertical-tabs.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/form.js. */
(function($){$.fn.drupalGetSummary=function(){var callback=this.data('summaryCallback');return(this[0]&&callback)?$.trim(callback(this[0])):''};$.fn.drupalSetSummary=function(callback){var self=this;if(typeof callback!='function'){var val=callback;callback=function(){return val}};return this.data('summaryCallback',callback).unbind('formUpdated.summary').bind('formUpdated.summary',function(){self.trigger('summaryUpdated')}).trigger('summaryUpdated')};Drupal.behaviors.formUpdated={attach:function(context){var events='change.formUpdated click.formUpdated blur.formUpdated keyup.formUpdated';$(context).find(':input').andSelf().filter(':input').unbind(events).bind(events,function(){$(this).trigger('formUpdated')})}};Drupal.behaviors.fillUserInfoFromCookie={attach:function(context,settings){$('form.user-info-from-cookie').once('user-info-from-cookie',function(){var formContext=this;$.each(['name','mail','homepage'],function(){var $element=$('[name='+this+']',formContext),cookie=$.cookie('Drupal.visitor.'+this);if($element.length&&cookie)$element.val(cookie)})})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/form.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/states.js. */
(function($){var states=Drupal.states={postponed:[]};Drupal.behaviors.states={attach:function(context,settings){var $context=$(context);for(var selector in settings.states)for(var state in settings.states[selector])new states.Dependent({element:$context.find(selector),state:states.State.sanitize(state),constraints:settings.states[selector][state]});while(states.postponed.length)(states.postponed.shift())()}};states.Dependent=function(args){$.extend(this,{values:{},oldValue:null},args);this.dependees=this.getDependees();for(var selector in this.dependees)this.initializeDependee(selector,this.dependees[selector])};states.Dependent.comparisons={RegExp:function(reference,value){return reference.test(value)},Function:function(reference,value){return reference(value)},Number:function(reference,value){return(typeof value==='string')?compare(reference.toString(),value):compare(reference,value)}};states.Dependent.prototype={initializeDependee:function(selector,dependeeStates){var state;this.values[selector]={};for(var i in dependeeStates)if(dependeeStates.hasOwnProperty(i)){state=dependeeStates[i];if($.inArray(state,dependeeStates)===-1)continue;state=states.State.sanitize(state);this.values[selector][state.name]=null;$(selector).bind('state:'+state,$.proxy(function(e){this.update(selector,state,e.value)},this));new states.Trigger({selector:selector,state:state})}},compare:function(reference,selector,state){var value=this.values[selector][state.name];if(reference.constructor.name in states.Dependent.comparisons){return states.Dependent.comparisons[reference.constructor.name](reference,value)}else return compare(reference,value)},update:function(selector,state,value){if(value!==this.values[selector][state.name]){this.values[selector][state.name]=value;this.reevaluate()}},reevaluate:function(){var value=this.verifyConstraints(this.constraints);if(value!==this.oldValue){this.oldValue=value;value=invert(value,this.state.invert);this.element.trigger({type:'state:'+this.state,value:value,trigger:true})}},verifyConstraints:function(constraints,selector){var result;if($.isArray(constraints)){var hasXor=$.inArray('xor',constraints)===-1;for(var i=0,len=constraints.length;i<len;i++)if(constraints[i]!='xor'){var constraint=this.checkConstraints(constraints[i],selector,i);if(constraint&&(hasXor||result))return hasXor;result=result||constraint}}else if($.isPlainObject(constraints))for(var n in constraints)if(constraints.hasOwnProperty(n)){result=ternary(result,this.checkConstraints(constraints[n],selector,n));if(result===false)return false};return result},checkConstraints:function(value,selector,state){if(typeof state!=='string'||/[0-9]/.test(state[0])){state=null}else if(typeof selector==='undefined'){selector=state;state=null};if(state!==null){state=states.State.sanitize(state);return invert(this.compare(value,selector,state),state.invert)}else return this.verifyConstraints(value,selector)},getDependees:function(){var cache={},_compare=this.compare;this.compare=function(reference,selector,state){(cache[selector]||(cache[selector]=[])).push(state.name)};this.verifyConstraints(this.constraints);this.compare=_compare;return cache}};states.Trigger=function(args){$.extend(this,args);if(this.state in states.Trigger.states){this.element=$(this.selector);if(!this.element.data('trigger:'+this.state))this.initialize()}};states.Trigger.prototype={initialize:function(){var trigger=states.Trigger.states[this.state];if(typeof trigger=='function'){trigger.call(window,this.element)}else for(var event in trigger)if(trigger.hasOwnProperty(event))this.defaultTrigger(event,trigger[event]);this.element.data('trigger:'+this.state,true)},defaultTrigger:function(event,valueFn){var oldValue=valueFn.call(this.element);this.element.bind(event,$.proxy(function(e){var value=valueFn.call(this.element,e);if(oldValue!==value){this.element.trigger({type:'state:'+this.state,value:value,oldValue:oldValue});oldValue=value}},this));states.postponed.push($.proxy(function(){this.element.trigger({type:'state:'+this.state,value:oldValue,oldValue:null})},this))}};states.Trigger.states={empty:{keyup:function(){return this.val()==''}},checked:{change:function(){return this.is(':checked')}},value:{keyup:function(){if(this.length>1)return this.filter(':checked').val()||false;return this.val()},change:function(){if(this.length>1)return this.filter(':checked').val()||false;return this.val()}},collapsed:{collapsed:function(e){return(typeof e!=='undefined'&&'value'in e)?e.value:this.is('.collapsed')}}};states.State=function(state){this.pristine=this.name=state;while(true){while(this.name.charAt(0)=='!'){this.name=this.name.substring(1);this.invert=!this.invert};if(this.name in states.State.aliases){this.name=states.State.aliases[this.name]}else break}};states.State.sanitize=function(state){if(state instanceof states.State){return state}else return new states.State(state)};states.State.aliases={enabled:'!disabled',invisible:'!visible',invalid:'!valid',untouched:'!touched',optional:'!required',filled:'!empty',unchecked:'!checked',irrelevant:'!relevant',expanded:'!collapsed',readwrite:'!readonly'};states.State.prototype={invert:false,toString:function(){return this.name}};$(document).bind('state:disabled',function(e){if(e.trigger)$(e.target).attr('disabled',e.value).closest('.form-item, .form-submit, .form-wrapper').toggleClass('form-disabled',e.value).find('select, input, textarea').attr('disabled',e.value)});$(document).bind('state:required',function(e){if(e.trigger)if(e.value){var $label=$(e.target).closest('.form-item, .form-wrapper').find('label');if(!$label.find('.form-required').length)$label.append('<span class="form-required">*</span>')}else $(e.target).closest('.form-item, .form-wrapper').find('label .form-required').remove()});$(document).bind('state:visible',function(e){if(e.trigger)$(e.target).closest('.form-item, .form-submit, .form-wrapper').toggle(e.value)});$(document).bind('state:checked',function(e){if(e.trigger)$(e.target).attr('checked',e.value)});$(document).bind('state:collapsed',function(e){if(e.trigger)if($(e.target).is('.collapsed')!==e.value)$('> legend a',e.target).click()})
function ternary(a,b){return typeof a==='undefined'?b:(typeof b==='undefined'?a:a&&b)}
function invert(a,invert){return(invert&&typeof a!=='undefined')?!a:a}
function compare(a,b){return(a===b)?(typeof a==='undefined'?a:true):(typeof a==='undefined'||typeof b==='undefined')}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/states.js. */