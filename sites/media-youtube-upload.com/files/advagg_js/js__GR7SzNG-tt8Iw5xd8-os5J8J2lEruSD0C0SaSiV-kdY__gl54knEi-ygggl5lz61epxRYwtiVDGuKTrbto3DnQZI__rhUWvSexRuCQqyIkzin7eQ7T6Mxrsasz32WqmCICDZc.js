/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/tabledrag.js. */
(function($){Drupal.behaviors.tableDrag={attach:function(context,settings){for(var base in settings.tableDrag)$('#'+base,context).once('tabledrag',function(){Drupal.tableDrag[base]=new Drupal.tableDrag(this,settings.tableDrag[base])})}};Drupal.tableDrag=function(table,tableSettings){var self=this;this.table=table;this.tableSettings=tableSettings;this.dragObject=null;this.rowObject=null;this.oldRowElement=null;this.oldY=0;this.changed=false;this.maxDepth=0;this.rtl=$(this.table).css('direction')=='rtl'?-1:1;this.scrollSettings={amount:4,interval:50,trigger:70};this.scrollInterval=null;this.scrollY=0;this.windowHeight=0;this.indentEnabled=false;for(var group in tableSettings)for(var n in tableSettings[group]){if(tableSettings[group][n].relationship=='parent')this.indentEnabled=true;if(tableSettings[group][n].limit>0)this.maxDepth=tableSettings[group][n].limit};if(this.indentEnabled){this.indentCount=1;var indent=Drupal.theme('tableDragIndentation'),testRow=$('<tr/>').addClass('draggable').appendTo(table),testCell=$('<td/>').appendTo(testRow).prepend(indent).prepend(indent);this.indentAmount=$('.indentation',testCell).get(1).offsetLeft-$('.indentation',testCell).get(0).offsetLeft;testRow.remove()};$('> tr.draggable, > tbody > tr.draggable',table).each(function(){self.makeDraggable(this)});$(table).before($('<a href="#" class="tabledrag-toggle-weight"></a>').attr('title',Drupal.t('Re-order rows by numerical weight instead of dragging.')).click(function(){if($.cookie('Drupal.tableDrag.showWeight')==1){self.hideColumns()}else self.showColumns();return false}).wrap('<div class="tabledrag-toggle-weight-wrapper"></div>').parent());self.initColumns();$(document).bind('mousemove',function(event){return self.dragRow(event,self)});$(document).bind('mouseup',function(event){return self.dropRow(event,self)})};Drupal.tableDrag.prototype.initColumns=function(){for(var group in this.tableSettings){for(var d in this.tableSettings[group]){var field=$('.'+this.tableSettings[group][d].target+':first',this.table);if(field.length&&this.tableSettings[group][d].hidden){var hidden=this.tableSettings[group][d].hidden,cell=field.closest('td');break}};if(hidden&&cell[0]){var columnIndex=$('> td',cell.parent()).index(cell.get(0))+1;$('> thead > tr, > tbody > tr, > tr',this.table).each(function(){var index=columnIndex,cells=$(this).children();cells.each(function(n){if(n<index&&this.colSpan&&this.colSpan>1)index-=this.colSpan-1});if(index>0){cell=cells.filter(':nth-child('+index+')');if(cell[0].colSpan&&cell[0].colSpan>1){cell.addClass('tabledrag-has-colspan')}else cell.addClass('tabledrag-hide')}})}};if($.cookie('Drupal.tableDrag.showWeight')===null){$.cookie('Drupal.tableDrag.showWeight',0,{path:Drupal.settings.basePath,expires:365});this.hideColumns()}else if($.cookie('Drupal.tableDrag.showWeight')==1){this.showColumns()}else this.hideColumns()};Drupal.tableDrag.prototype.hideColumns=function(){$('.tabledrag-hide','table.tabledrag-processed').css('display','none');$('.tabledrag-handle','table.tabledrag-processed').css('display','');$('.tabledrag-has-colspan','table.tabledrag-processed').each(function(){this.colSpan=this.colSpan-1});$('.tabledrag-toggle-weight').text(Drupal.t('Show row weights'));$.cookie('Drupal.tableDrag.showWeight',0,{path:Drupal.settings.basePath,expires:365});$('table.tabledrag-processed').trigger('columnschange','hide')};Drupal.tableDrag.prototype.showColumns=function(){$('.tabledrag-hide','table.tabledrag-processed').css('display','');$('.tabledrag-handle','table.tabledrag-processed').css('display','none');$('.tabledrag-has-colspan','table.tabledrag-processed').each(function(){this.colSpan=this.colSpan+1});$('.tabledrag-toggle-weight').text(Drupal.t('Hide row weights'));$.cookie('Drupal.tableDrag.showWeight',1,{path:Drupal.settings.basePath,expires:365});$('table.tabledrag-processed').trigger('columnschange','show')};Drupal.tableDrag.prototype.rowSettings=function(group,row){var field=$('.'+group,row);for(var delta in this.tableSettings[group]){var targetClass=this.tableSettings[group][delta].target;if(field.is('.'+targetClass)){var rowSettings={};for(var n in this.tableSettings[group][delta])rowSettings[n]=this.tableSettings[group][delta][n];return rowSettings}}};Drupal.tableDrag.prototype.makeDraggable=function(item){var self=this,handle=$('<a href="#" class="tabledrag-handle"><div class="handle">&nbsp;</div></a>').attr('title',Drupal.t('Drag to re-order'));if($('td:first .indentation:last',item).length){$('td:first .indentation:last',item).after(handle);self.indentCount=Math.max($('.indentation',item).length,self.indentCount)}else $('td:first',item).prepend(handle);handle.hover(function(){self.dragObject==null?$(this).addClass('tabledrag-handle-hover'):null},function(){self.dragObject==null?$(this).removeClass('tabledrag-handle-hover'):null});handle.mousedown(function(event){self.dragObject={};self.dragObject.initMouseOffset=self.getMouseOffset(item,event);self.dragObject.initMouseCoords=self.mouseCoords(event);if(self.indentEnabled)self.dragObject.indentMousePos=self.dragObject.initMouseCoords;if(self.rowObject)$('a.tabledrag-handle',self.rowObject.element).blur();self.rowObject=new self.row(item,'mouse',self.indentEnabled,self.maxDepth,true);self.table.topY=$(self.table).offset().top;self.table.bottomY=self.table.topY+self.table.offsetHeight;$(this).addClass('tabledrag-handle-hover');$(item).addClass('drag');$('body').addClass('drag');if(self.oldRowElement)$(self.oldRowElement).removeClass('drag-previous');if(navigator.userAgent.indexOf('MSIE 6.')!=-1)$('select',this.table).css('display','none');self.safeBlur=false;self.onDrag();return false});handle.click(function(){return false});handle.focus(function(){$(this).addClass('tabledrag-handle-hover');self.safeBlur=true});handle.blur(function(event){$(this).removeClass('tabledrag-handle-hover');if(self.rowObject&&self.safeBlur)self.dropRow(event,self)});handle.keydown(function(event){if(event.keyCode!=9&&!self.rowObject)self.rowObject=new self.row(item,'keyboard',self.indentEnabled,self.maxDepth,true);var keyChange=false;switch(event.keyCode){case 37:case 63234:keyChange=true;self.rowObject.indent(-1*self.rtl);break;case 38:case 63232:var previousRow=$(self.rowObject.element).prev('tr').get(0);while(previousRow&&$(previousRow).is(':hidden'))previousRow=$(previousRow).prev('tr').get(0);if(previousRow){self.safeBlur=false;self.rowObject.direction='up';keyChange=true;if($(item).is('.tabledrag-root')){var groupHeight=0;while(previousRow&&$('.indentation',previousRow).length){previousRow=$(previousRow).prev('tr').get(0);groupHeight+=$(previousRow).is(':hidden')?0:previousRow.offsetHeight};if(previousRow){self.rowObject.swap('before',previousRow);window.scrollBy(0,-groupHeight)}}else if(self.table.tBodies[0].rows[0]!=previousRow||$(previousRow).is('.draggable')){self.rowObject.swap('before',previousRow);self.rowObject.interval=null;self.rowObject.indent(0);window.scrollBy(0,-parseInt(item.offsetHeight,10))};handle.get(0).focus()};break;case 39:case 63235:keyChange=true;self.rowObject.indent(1*self.rtl);break;case 40:case 63233:var nextRow=$(self.rowObject.group).filter(':last').next('tr').get(0);while(nextRow&&$(nextRow).is(':hidden'))nextRow=$(nextRow).next('tr').get(0);if(nextRow){self.safeBlur=false;self.rowObject.direction='down';keyChange=true;if($(item).is('.tabledrag-root')){var groupHeight=0,nextGroup=new self.row(nextRow,'keyboard',self.indentEnabled,self.maxDepth,false);if(nextGroup){$(nextGroup.group).each(function(){groupHeight+=$(this).is(':hidden')?0:this.offsetHeight});var nextGroupRow=$(nextGroup.group).filter(':last').get(0);self.rowObject.swap('after',nextGroupRow);window.scrollBy(0,parseInt(groupHeight,10))}}else{self.rowObject.swap('after',nextRow);self.rowObject.interval=null;self.rowObject.indent(0);window.scrollBy(0,parseInt(item.offsetHeight,10))};handle.get(0).focus()};break};if(self.rowObject&&self.rowObject.changed==true){$(item).addClass('drag');if(self.oldRowElement)$(self.oldRowElement).removeClass('drag-previous');self.oldRowElement=item;self.restripeTable();self.onDrag()};if(keyChange)return false});handle.keypress(function(event){switch(event.keyCode){case 37:case 38:case 39:case 40:return false}})};Drupal.tableDrag.prototype.dragRow=function(event,self){if(self.dragObject){self.currentMouseCoords=self.mouseCoords(event);var y=self.currentMouseCoords.y-self.dragObject.initMouseOffset.y,x=self.currentMouseCoords.x-self.dragObject.initMouseOffset.x;if(y!=self.oldY){self.rowObject.direction=y>self.oldY?'down':'up';self.oldY=y;var scrollAmount=self.checkScroll(self.currentMouseCoords.y);clearInterval(self.scrollInterval);if(scrollAmount>0&&self.rowObject.direction=='down'||scrollAmount<0&&self.rowObject.direction=='up')self.setScroll(scrollAmount);var currentRow=self.findDropTargetRow(x,y);if(currentRow){if(self.rowObject.direction=='down'){self.rowObject.swap('after',currentRow,self)}else self.rowObject.swap('before',currentRow,self);self.restripeTable()}};if(self.indentEnabled){var xDiff=self.currentMouseCoords.x-self.dragObject.indentMousePos.x,indentDiff=Math.round(xDiff/self.indentAmount),indentChange=self.rowObject.indent(indentDiff);self.dragObject.indentMousePos.x+=self.indentAmount*indentChange*self.rtl;self.indentCount=Math.max(self.indentCount,self.rowObject.indents)};return false}};Drupal.tableDrag.prototype.dropRow=function(event,self){if(self.rowObject!=null){var droppedRow=self.rowObject.element;if(self.rowObject.changed==true){self.updateFields(droppedRow);for(var group in self.tableSettings){var rowSettings=self.rowSettings(group,droppedRow);if(rowSettings.relationship=='group')for(var n in self.rowObject.children)self.updateField(self.rowObject.children[n],group)};self.rowObject.markChanged();if(self.changed==false){$(Drupal.theme('tableDragChangedWarning')).insertBefore(self.table).hide().fadeIn('slow');self.changed=true}};if(self.indentEnabled)self.rowObject.removeIndentClasses();if(self.oldRowElement)$(self.oldRowElement).removeClass('drag-previous');$(droppedRow).removeClass('drag').addClass('drag-previous');self.oldRowElement=droppedRow;self.onDrop();self.rowObject=null};if(self.dragObject!=null){$('.tabledrag-handle',droppedRow).removeClass('tabledrag-handle-hover');self.dragObject=null;$('body').removeClass('drag');clearInterval(self.scrollInterval);if(navigator.userAgent.indexOf('MSIE 6.')!=-1)$('select',this.table).css('display','block')}};Drupal.tableDrag.prototype.mouseCoords=function(event){if(event.pageX||event.pageY)return{x:event.pageX,y:event.pageY};return{x:event.clientX+document.body.scrollLeft-document.body.clientLeft,y:event.clientY+document.body.scrollTop-document.body.clientTop}};Drupal.tableDrag.prototype.getMouseOffset=function(target,event){var docPos=$(target).offset(),mousePos=this.mouseCoords(event);return{x:mousePos.x-docPos.left,y:mousePos.y-docPos.top}};Drupal.tableDrag.prototype.findDropTargetRow=function(x,y){var rows=$(this.table.tBodies[0].rows).not(':hidden');for(var n=0;n<rows.length;n++){var row=rows[n],indentDiff=0,rowY=$(row).offset().top;if(row.offsetHeight==0){var rowHeight=parseInt(row.firstChild.offsetHeight,10)/2}else var rowHeight=parseInt(row.offsetHeight,10)/2;if((y>(rowY-rowHeight))&&(y<(rowY+rowHeight))){if(this.indentEnabled){for(var n in this.rowObject.group)if(this.rowObject.group[n]==row)return null}else if(row==this.rowObject.element)return null;if(!this.rowObject.isValidSwap(row))return null;while($(row).is(':hidden')&&$(row).prev('tr').is(':hidden'))row=$(row).prev('tr').get(0);return row}};return null};Drupal.tableDrag.prototype.updateFields=function(changedRow){for(var group in this.tableSettings)this.updateField(changedRow,group)};Drupal.tableDrag.prototype.updateField=function(changedRow,group){var rowSettings=this.rowSettings(group,changedRow);if(rowSettings.relationship=='self'||rowSettings.relationship=='group'){var sourceRow=changedRow}else if(rowSettings.relationship=='sibling'){var previousRow=$(changedRow).prev('tr').get(0),nextRow=$(changedRow).next('tr').get(0),sourceRow=changedRow;if($(previousRow).is('.draggable')&&$('.'+group,previousRow).length){if(this.indentEnabled){if($('.indentations',previousRow).length==$('.indentations',changedRow))sourceRow=previousRow}else sourceRow=previousRow}else if($(nextRow).is('.draggable')&&$('.'+group,nextRow).length)if(this.indentEnabled){if($('.indentations',nextRow).length==$('.indentations',changedRow))sourceRow=nextRow}else sourceRow=nextRow}else if(rowSettings.relationship=='parent'){var previousRow=$(changedRow).prev('tr');while(previousRow.length&&$('.indentation',previousRow).length>=this.rowObject.indents)previousRow=previousRow.prev('tr');if(previousRow.length){sourceRow=previousRow[0]}else{sourceRow=$(this.table).find('tr.draggable:first').get(0);if(sourceRow==this.rowObject.element)sourceRow=$(this.rowObject.group[this.rowObject.group.length-1]).next('tr.draggable').get(0);var useSibling=true}};this.copyDragClasses(sourceRow,changedRow,group);rowSettings=this.rowSettings(group,changedRow);if(useSibling){rowSettings.relationship='sibling';rowSettings.source=rowSettings.target};var targetClass='.'+rowSettings.target,targetElement=$(targetClass,changedRow).get(0);if(targetElement){var sourceClass='.'+rowSettings.source,sourceElement=$(sourceClass,sourceRow).get(0);switch(rowSettings.action){case'depth':targetElement.value=$('.indentation',$(sourceElement).closest('tr')).length;break;case'match':targetElement.value=sourceElement.value;break;case'order':var siblings=this.rowObject.findSiblings(rowSettings);if($(targetElement).is('select')){var values=[];$('option',targetElement).each(function(){values.push(this.value)});var maxVal=values[values.length-1];$(targetClass,siblings).each(function(){if(values.length>0){this.value=values.shift()}else this.value=maxVal})}else{var weight=parseInt($(targetClass,siblings[0]).val(),10)||0;$(targetClass,siblings).each(function(){this.value=weight;weight++})};break}}};Drupal.tableDrag.prototype.copyDragClasses=function(sourceRow,targetRow,group){var sourceElement=$('.'+group,sourceRow),targetElement=$('.'+group,targetRow);if(sourceElement.length&&targetElement.length)targetElement[0].className=sourceElement[0].className};Drupal.tableDrag.prototype.checkScroll=function(cursorY){var de=document.documentElement,b=document.body,windowHeight=this.windowHeight=window.innerHeight||(de.clientHeight&&de.clientWidth!=0?de.clientHeight:b.offsetHeight),scrollY=this.scrollY=(document.all?(!de.scrollTop?b.scrollTop:de.scrollTop):(window.pageYOffset?window.pageYOffset:window.scrollY)),trigger=this.scrollSettings.trigger,delta=0;if(cursorY-scrollY>windowHeight-trigger){delta=trigger/(windowHeight+scrollY-cursorY);delta=(delta>0&&delta<trigger)?delta:trigger;return delta*this.scrollSettings.amount}else if(cursorY-scrollY<trigger){delta=trigger/(cursorY-scrollY);delta=(delta>0&&delta<trigger)?delta:trigger;return-delta*this.scrollSettings.amount}};Drupal.tableDrag.prototype.setScroll=function(scrollAmount){var self=this;this.scrollInterval=setInterval(function(){self.checkScroll(self.currentMouseCoords.y);var aboveTable=self.scrollY>self.table.topY,belowTable=self.scrollY+self.windowHeight<self.table.bottomY;if(scrollAmount>0&&belowTable||scrollAmount<0&&aboveTable)window.scrollBy(0,scrollAmount)},this.scrollSettings.interval)};Drupal.tableDrag.prototype.restripeTable=function(){$('> tbody > tr.draggable:visible, > tr.draggable:visible',this.table).removeClass('odd even').filter(':odd').addClass('even').end().filter(':even').addClass('odd')};Drupal.tableDrag.prototype.onDrag=function(){return null};Drupal.tableDrag.prototype.onDrop=function(){return null};Drupal.tableDrag.prototype.row=function(tableRow,method,indentEnabled,maxDepth,addClasses){this.element=tableRow;this.method=method;this.group=[tableRow];this.groupDepth=$('.indentation',tableRow).length;this.changed=false;this.table=$(tableRow).closest('table').get(0);this.indentEnabled=indentEnabled;this.maxDepth=maxDepth;this.direction='';if(this.indentEnabled){this.indents=$('.indentation',tableRow).length;this.children=this.findChildren(addClasses);this.group=$.merge(this.group,this.children);for(var n=0;n<this.group.length;n++)this.groupDepth=Math.max($('.indentation',this.group[n]).length,this.groupDepth)}};Drupal.tableDrag.prototype.row.prototype.findChildren=function(addClasses){var parentIndentation=this.indents,currentRow=$(this.element,this.table).next('tr.draggable'),rows=[],child=0;while(currentRow.length){var rowIndentation=$('.indentation',currentRow).length;if(rowIndentation>parentIndentation){child++;rows.push(currentRow[0]);if(addClasses)$('.indentation',currentRow).each(function(indentNum){if(child==1&&(indentNum==parentIndentation))$(this).addClass('tree-child-first');if(indentNum==parentIndentation){$(this).addClass('tree-child')}else if(indentNum>parentIndentation)$(this).addClass('tree-child-horizontal')})}else break;currentRow=currentRow.next('tr.draggable')};if(addClasses&&rows.length)$('.indentation:nth-child('+(parentIndentation+1)+')',rows[rows.length-1]).addClass('tree-child-last');return rows};Drupal.tableDrag.prototype.row.prototype.isValidSwap=function(row){if(this.indentEnabled){var prevRow,nextRow;if(this.direction=='down'){prevRow=row;nextRow=$(row).next('tr').get(0)}else{prevRow=$(row).prev('tr').get(0);nextRow=row};this.interval=this.validIndentInterval(prevRow,nextRow);if(this.interval.min>this.interval.max)return false};if(this.table.tBodies[0].rows[0]==row&&$(row).is(':not(.draggable)'))return false;return true};Drupal.tableDrag.prototype.row.prototype.swap=function(position,row){Drupal.detachBehaviors(this.group,Drupal.settings,'move');$(row)[position](this.group);Drupal.attachBehaviors(this.group,Drupal.settings);this.changed=true;this.onSwap(row)};Drupal.tableDrag.prototype.row.prototype.validIndentInterval=function(prevRow,nextRow){var minIndent,maxIndent;minIndent=nextRow?$('.indentation',nextRow).length:0;if(!prevRow||$(prevRow).is(':not(.draggable)')||$(this.element).is('.tabledrag-root')){maxIndent=0}else{maxIndent=$('.indentation',prevRow).length+($(prevRow).is('.tabledrag-leaf')?0:1);if(this.maxDepth)maxIndent=Math.min(maxIndent,this.maxDepth-(this.groupDepth-this.indents))};return{min:minIndent,max:maxIndent}};Drupal.tableDrag.prototype.row.prototype.indent=function(indentDiff){if(!this.interval){var prevRow=$(this.element).prev('tr').get(0),nextRow=$(this.group).filter(':last').next('tr').get(0);this.interval=this.validIndentInterval(prevRow,nextRow)};var indent=this.indents+indentDiff;indent=Math.max(indent,this.interval.min);indent=Math.min(indent,this.interval.max);indentDiff=indent-this.indents;for(var n=1;n<=Math.abs(indentDiff);n++)if(indentDiff<0){$('.indentation:first',this.group).remove();this.indents--}else{$('td:first',this.group).prepend(Drupal.theme('tableDragIndentation'));this.indents++};if(indentDiff){this.changed=true;this.groupDepth+=indentDiff;this.onIndent()};return indentDiff};Drupal.tableDrag.prototype.row.prototype.findSiblings=function(rowSettings){var siblings=[],directions=['prev','next'],rowIndentation=this.indents;for(var d=0;d<directions.length;d++){var checkRow=$(this.element)[directions[d]]();while(checkRow.length){if($('.'+rowSettings.target,checkRow)){if(this.indentEnabled)var checkRowIndentation=$('.indentation',checkRow).length;if(!(this.indentEnabled)||(checkRowIndentation==rowIndentation)){siblings.push(checkRow[0])}else if(checkRowIndentation<rowIndentation)break}else break;checkRow=$(checkRow)[directions[d]]()};if(directions[d]=='prev'){siblings.reverse();siblings.push(this.element)}};return siblings};Drupal.tableDrag.prototype.row.prototype.removeIndentClasses=function(){for(var n in this.children)$('.indentation',this.children[n]).removeClass('tree-child').removeClass('tree-child-first').removeClass('tree-child-last').removeClass('tree-child-horizontal')};Drupal.tableDrag.prototype.row.prototype.markChanged=function(){var marker=Drupal.theme('tableDragChangedMarker'),cell=$('td:first',this.element);if($('span.tabledrag-changed',cell).length==0)cell.append(marker)};Drupal.tableDrag.prototype.row.prototype.onIndent=function(){return null};Drupal.tableDrag.prototype.row.prototype.onSwap=function(swappedRow){return null};Drupal.theme.prototype.tableDragChangedMarker=function(){return'<span class="warning tabledrag-changed">*</span>'};Drupal.theme.prototype.tableDragIndentation=function(){return'<div class="indentation">&nbsp;</div>'};Drupal.theme.prototype.tableDragChangedWarning=function(){return'<div class="tabledrag-changed-warning messages warning">'+Drupal.theme('tableDragChangedMarker')+' '+Drupal.t('Changes made in this table will not be saved until the form is submitted.')+'</div>'}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/tabledrag.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/jquery.hotkeys.js. */
(function(jQuery){this.version='(beta)(0.0.3)';this.all={};this.special_keys={27:'esc',9:'tab',32:'space',13:'return',8:'backspace',145:'scroll',20:'capslock',144:'numlock',19:'pause',45:'insert',36:'home',46:'del',35:'end',33:'pageup',34:'pagedown',37:'left',38:'up',39:'right',40:'down',112:'f1',113:'f2',114:'f3',115:'f4',116:'f5',117:'f6',118:'f7',119:'f8',120:'f9',121:'f10',122:'f11',123:'f12'};this.shift_nums={"`":"~","1":"!","2":"@","3":"#","4":"$","5":"%","6":"^","7":"&","8":"*","9":"(","0":")","-":"_","=":"+",";":":","'":"\"",",":"<",".":">","/":"?","\\":"|"};this.add=function(combi,options,callback){if(jQuery.isFunction(options)){callback=options;options={}};var opt={},defaults={type:'keydown',propagate:false,disableInInput:false,target:'html'},that=this,opt=jQuery.extend(opt,defaults,options||{});combi=combi.toLowerCase();var inspector=function(event){event=jQuery.event.fix(event);var selector=event.data.selector,element=jQuery(event.target);if(opt.disableInInput&&element.is('textarea, input'))return;var code=event.which,type=event.type,character=String.fromCharCode(code).toLowerCase(),special=that.special_keys[code],shift=event.shiftKey,ctrl=event.ctrlKey,alt=event.altKey,propagate=true,mapPoint=null,cbMap=that.all[selector].events[type].callbackMap;if(!shift&&!ctrl&&!alt){mapPoint=cbMap[special]||cbMap[character]}else{var modif='';if(alt)modif+='alt+';if(ctrl)modif+='ctrl+';if(shift)modif+='shift+';mapPoint=cbMap[modif+special]||cbMap[modif+character]||cbMap[modif+that.shift_nums[character]]};if(mapPoint){mapPoint.cb(event);if(!mapPoint.propagate){event.stopPropagation();event.preventDefault();return false}}};if(!this.all[opt.target])this.all[opt.target]={events:{}};if(!this.all[opt.target].events[opt.type]){this.all[opt.target].events[opt.type]={callbackMap:{}};jQuery(opt.target).bind(opt.type,{selector:opt.target},inspector)};this.all[opt.target].events[opt.type].callbackMap[combi]={cb:callback,propagate:opt.propagate};return jQuery};this.remove=function(exp,opt){opt=opt||{};target=opt.target||'html';type=opt.type||'keydown';exp=exp.toLowerCase();jQuery(target).unbind(type);delete this.all[target].events[type].callbackMap[exp];return jQuery};jQuery.hotkeys=this;return jQuery})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/jquery.hotkeys.js. */

/**
 * Cookie plugin 1.0
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */
jQuery.cookie=function(b,j,m){if(typeof j!="undefined"){m=m||{};if(j===null){j="";m.expires=-1}var e="";if(m.expires&&(typeof m.expires=="number"||m.expires.toUTCString)){var f;if(typeof m.expires=="number"){f=new Date();f.setTime(f.getTime()+(m.expires*24*60*60*1000))}else{f=m.expires}e="; expires="+f.toUTCString()}var l=m.path?"; path="+(m.path):"";var g=m.domain?"; domain="+(m.domain):"";var a=m.secure?"; secure":"";document.cookie=[b,"=",encodeURIComponent(j),e,l,g,a].join("")}else{var d=null;if(document.cookie&&document.cookie!=""){var k=document.cookie.split(";");for(var h=0;h<k.length;h++){var c=jQuery.trim(k[h]);if(c.substring(0,b.length+1)==(b+"=")){d=decodeURIComponent(c.substring(b.length+1));break}}}return d}};
;/**/
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/l10n_client.js. */
(function($,Drupal,undefined){Drupal.l10nClient={selected:-1,keys:{toggle:'ctrl+shift+s',clear:'esc'},key:function(pressed){var $l10nClient=Drupal.l10nClient.$l10nClient;switch(pressed){case'toggle':var userSelection=window.getSelection?window.getSelection():document.getSelection?document.getSelection():document.selection.createRange().text;userSelection=String(userSelection);if(userSelection.length>0){this.filter(userSelection);this.toggle(1);$l10nClient.find('.string-search').val(userSelection).focus()}else if($l10nClient.is('.l10n-client-minimized')){this.toggle(1);$l10nClient.find('.string-search').focus()}else this.toggle(0);break;case'clear':this.filter(false);break}},toggle:function(state){var $l10nClient=Drupal.l10nClient.$l10nClient,$clientWrapper=$('#l10n-client-string-select, #l10n-client-string-editor, #l10n-client .labels .label');if(!!state==true){$clientWrapper.show();$l10nClient.removeClass('l10n-client-minimized').addClass('l10n-client-maximized').find('.labels .toggle').text('X');$('body').addClass('toggle-expanded');$.cookie('Drupal_l10n_client','1',{expires:7,path:'/'})}else{$clientWrapper.hide();$l10nClient.removeClass('l10n-client-maximized').addClass('l10n-client-minimized').find('.labels .toggle').text(Drupal.t('Translate Text'));$('body').removeClass('toggle-expanded');$.cookie('Drupal_l10n_client','0',{expires:7,path:'/'})}},getString:function(index,type){return $('#l10n-client-data').find('div:eq('+index+') .'+type).text()},setString:function(index,data){$('#l10n-client-data').find('div:eq('+index+') .target').text(data)},filter:function(search){var $l10nClient=Drupal.l10nClient.$l10nClient,$stringSearch=$l10nClient.find('.string-search'),$stringSelect=$('#l10n-client-string-select').find('li');if(search===false||search===''){$('#l10n-client-search-filter-clear').focus();$stringSelect.show();$stringSearch.val('').focus()}else if(search.length>0)$stringSelect.show().not(':contains('+search+')').hide()}};Drupal.behaviors.l10nClient={attach:function(context){$('#l10n-client').once('l10n-client',function(){$('body').addClass('l10n-client');var $l10nClient=$(this),$l10nClientForm=$('#l10n-client-form'),$stringEditor=$('#l10n-client-string-editor'),$stringEditorSoruceText=$stringEditor.find('.source-text'),$stringSelect=$('#l10n-client-string-select'),cookie=parseInt($.cookie('Drupal_l10n_client'),2);Drupal.l10nClient.$l10nClient=$l10nClient;Drupal.l10nClient.toggle(isNaN(cookie)?0:cookie);$stringSelect.find('li').click(function(){var $this=$(this),$lis=$stringSelect.find('li'),index=$lis.index(this);$lis.removeClass('active');$this.addClass('active');$stringEditorSoruceText.text(Drupal.l10nClient.getString(index,'source'));$l10nClientForm.find('.translation-target').val(Drupal.l10nClient.getString(index,'target'));$l10nClientForm.find('.source-textgroup').val(Drupal.l10nClient.getString(index,'textgroup'));$l10nClientForm.find('.source-context').val(Drupal.l10nClient.getString(index,'context'));$stringEditor.find('.context').text(Drupal.l10nClient.getString(index,'context'));Drupal.l10nClient.selected=index;$l10nClientForm.find('.form-submit').removeAttr("disabled")});$l10nClient.find('.labels .toggle').click(function(){Drupal.l10nClient.toggle($l10nClient.is('.l10n-client-minimized'))});$l10nClientForm.find('.edit-copy').click(function(){$l10nClientForm.find('.translation-target').val($stringEditorSoruceText.text());return false});$l10nClientForm.find('.edit-clear').click(function(){$l10nClientForm.find('.translation-target').val('');return false});if($.hotkeys){$.hotkeys.add(Drupal.l10nClient.keys.toggle,function(){Drupal.l10nClient.key('toggle')});$.hotkeys.add(Drupal.l10nClient.keys.clear,{target:'#l10n-client .string-search',type:'keyup'},function(){Drupal.l10nClient.key('clear')})};$l10nClient.find('.string-search').keyup(function(){Drupal.l10nClient.filter($l10nClient.find('.string-search').val())});$l10nClient.find('#l10n-client-search-filter-clear').click(function(){Drupal.l10nClient.filter(false);return false});$l10nClientForm.submit(function(){var $this=$(this);$this.find('.form-submit').attr("disabled",true);$this.find('.edit-save').after('<div class="ajax-progress ajax-progress-throbber"><div class="throbber">&nbsp;</div><div class="message">'+Drupal.t('Please wait...')+'</div></div>');$.ajax({type:"POST",url:$this.attr('action'),data:{source:$stringEditorSoruceText.text(),target:$this.find('.translation-target').val(),textgroup:$this.find('.source-textgroup').val(),context:$stringEditor.find('.context').text(),form_token:$this.find('input[name=form_token]').val()},success:function(data){var $translationTarget=$l10nClientForm.find('.translation-target'),newTranslation=$translationTarget.val();Drupal.l10nClient.setString(Drupal.l10nClient.selected,newTranslation);var newTranslationStripped=newTranslation.replace(/<\/?[^<>]+>/gi,'').replace(/&quot;/g,'"').replace(/&lt;/g,"<").replace(/&gt;/g,">").replace(/&amp;/g,"&"),newTranslationDisplay=newTranslation;if(newTranslationStripped.length>81)newTranslationDisplay=newTranslationStripped.substr(0,78)+'...';$stringSelect.find('li').eq(Drupal.l10nClient.selected).removeClass('untranslated active').addClass('translated').text(newTranslationDisplay);$stringEditorSoruceText.html(data);$translationTarget.val('');$this.find('div.ajax-progress-throbber').remove()},error:function(xmlhttp){alert(Drupal.t('An HTTP error @status occured.',{'@status':xmlhttp.status}))}});return false})})}}})(jQuery,Drupal);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/l10n_client/l10n_client.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/misc/textarea.js. */
(function($){Drupal.behaviors.textarea={attach:function(context,settings){$('.form-textarea-wrapper.resizable',context).once('textarea',function(){var staticOffset=null,textarea=$(this).addClass('resizable-textarea').find('textarea'),grippie=$('<div class="grippie"></div>').mousedown(startDrag);grippie.insertAfter(textarea)
function startDrag(e){staticOffset=textarea.height()-e.pageY;textarea.css('opacity',0.25);$(document).mousemove(performDrag).mouseup(endDrag);return false}
function performDrag(e){textarea.height(Math.max(32,staticOffset+e.pageY)+'px');return false}
function endDrag(e){$(document).unbind('mousemove',performDrag).unbind('mouseup',endDrag);textarea.css('opacity',1)}})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/misc/textarea.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/devel/devel/devel_krumo_path.js. */
(function($){Drupal.behaviors.devel={attach:function(context,settings){$('.krumo-footnote .krumo-call').once().before('<img style="vertical-align: middle;" title="Click to expand. Double-click to show path." src="'+settings.basePath+'misc/help.png"/>');var krumo_name=[],krumo_type=[]
function krumo_traverse(el){krumo_name.push($(el).html());krumo_type.push($(el).siblings('em').html().match(/\w*/)[0]);if($(el).closest('.krumo-nest').length>0)krumo_traverse($(el).closest('.krumo-nest').prev().find('.krumo-name'))};$('.krumo-child > div:first-child',context).dblclick(function(e){if($(this).find('> .krumo-php-path').length>0){$(this).find('> .krumo-php-path').remove()}else{krumo_traverse($(this).find('> a.krumo-name'));var krumo_path_string='';for(var i=krumo_name.length-1;i>=0;--i){if((krumo_name.length-1)==i)krumo_path_string+='$'+krumo_name[i];if(typeof krumo_name[(i-1)]!=='undefined'){if(krumo_type[i]=='Array'){krumo_path_string+="[";if(!/^\d*$/.test(krumo_name[(i-1)]))krumo_path_string+="'";krumo_path_string+=krumo_name[(i-1)];if(!/^\d*$/.test(krumo_name[(i-1)]))krumo_path_string+="'";krumo_path_string+="]"};if(krumo_type[i]=='Object')krumo_path_string+='->'+krumo_name[(i-1)]}};$(this).append('<div class="krumo-php-path" style="font-family: Courier, monospace; font-weight: bold;">'+krumo_path_string+'</div>');krumo_name=[];krumo_type=[]}})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/devel/devel/devel_krumo_path.js. */
/* Source and licensing information for the line(s) below can be found at http://media-youtube-upload.com/sites/all/modules/contrib/file_entity/file_entity.admin.js. */
(function($){Drupal.behaviors.fileDisplayStatus={attach:function(context,settings){$('#file-displays-status-wrapper input.form-checkbox',context).once('display-status',function(){var $checkbox=$(this),$row=$('#'+$checkbox.attr('id').replace(/-status$/,'-weight'),context).closest('tr'),tab=$('#'+$checkbox.attr('id').replace(/-status$/,'-settings'),context).data('verticalTab');$checkbox.bind('click.displayStatusUpdate',function(){if($checkbox.is(':checked')){$row.show();if(tab)tab.tabShow().updateSummary()}else{$row.hide();if(tab)tab.tabHide().updateSummary()};Drupal.tableDrag['file-displays-order'].restripeTable()});if(tab)tab.fieldset.drupalSetSummary(function(tabContext){return $checkbox.is(':checked')?Drupal.t('Enabled'):Drupal.t('Disabled')});$checkbox.triggerHandler('click.displayStatusUpdate')})}}})(jQuery);;
/* Source and licensing information for the above line(s) can be found at http://media-youtube-upload.com/sites/all/modules/contrib/file_entity/file_entity.admin.js. */