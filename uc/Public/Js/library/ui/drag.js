BQ.add("ui.Drag",function(g){function c(b,a){if(!(this instanceof c))return new c(b,g.merge(h,a));this.Drag=$(b);this._x=this._y=0;this._fM=this.Binds(this,this.Move);this._fS=this.Binds(this,this.Stop);this.Limit=!!a.Limit;this.mxLeft=parseInt(a.mxLeft);this.mxRight=parseInt(a.mxRight);this.mxTop=parseInt(a.mxTop);this.mxBottom=parseInt(a.mxBottom);this.LockX=!!a.LockX;this.LockY=!!a.LockY;this.Lock=!!a.Lock;this.onStart=a.onStart;this.onMove=a.onMove;this.onStop=a.onStop;this._Handle=a.Handle?$(a.Handle):
this.Drag;this._mxContainer=$(a.mxContainer)||null;this.Drag.css("position","absolute");this.Repair();this._Handle.bind("mousedown",this.Binds(this,this.Start))}var h={Handle:null,Limit:!1,mxLeft:0,mxRight:9999,mxTop:0,mxBottom:9999,mxContainer:"",LockX:!1,LockY:!1,Lock:!1,onStart:function(){},onMove:function(){},onStop:function(){}};g.augment(c,{Binds:function(b,a){var c=Array.prototype.slice.call(arguments,2);return function(){return a.apply(b,c.concat(Array.prototype.slice.call(arguments)))}},
Repair:function(){this.mxRight=Math.max(this.mxRight,this.mxLeft+this.Drag[0].offsetWidth);this.mxBottom=Math.max(this.mxBottom,this.mxTop+this.Drag[0].offsetHeight);this._mxContainer&&this._mxContainer.css("position","relative")},Start:function(b){if(!this.Lock)this.Repair(),this._x=b.pageX-this.Drag[0].offsetLeft,this._y=b.pageY-this.Drag[0].offsetTop,$(document).bind("mousemove",this._fM),$(document).bind("mouseup",this._fS),$.browser.msie?(this._Handle.bind("losecapture",this._fS),this._Handle[0].setCapture()):
$(window).bind("blur",this._fS),this.onStart()},Move:function(b){this.Lock?this.Stop():(window.getSelection?window.getSelection().removeAllRanges():document.selection.empty(),this.setPosition(b.pageX-this._x,b.pageY-this._y))},setPosition:function(b,a){if(this.Limit){var c=this.mxLeft,d=this.mxRight,e=this.mxTop,f=this.mxBottom;this._mxContainer&&(maxleft=Math.max(c,0),e=Math.max(e,0),d=Math.min(d,this._mxContainer[0].clientWidth),f=Math.min(f,this._mxContainer[0].clientHeight));b=Math.max(Math.min(b,
d-this.Drag[0].offsetWidth),c);a=Math.max(Math.min(a,f-this.Drag[0].offsetHeight),e)}this.LockX||this.Drag.css("left",b);this.LockY||this.Drag.css("top",a);this.onMove()},Stop:function(b){$(document).unbind("mousemove",this._fM);$(document).unbind("mouseup",this._fS);$.browser.msie?(this._Handle.unbind("losecapture",this._fS),this._Handle[0].releaseCapture()):($(window).unbind("blur",this._fS),b.preventDefault());this.onStop()}});return c});