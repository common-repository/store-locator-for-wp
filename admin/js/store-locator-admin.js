/*!
  * Bootstrap v4.0.0 (https://getbootstrap.com)
  * Copyright 2011-2019 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?e(exports,require("jquery")):"function"==typeof define&&define.amd?define(["exports","jquery"],e):e(t.bootstrap={},t.jQuery)}(this,function(t,e){"use strict";function i(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}function n(){return(n=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var i=arguments[e];for(var n in i)Object.prototype.hasOwnProperty.call(i,n)&&(t[n]=i[n])}return t}).apply(this,arguments)}var o,s,r,a,d,l,h,c,u,f,_,g,p,m,S,v=function(t){var e=!1;function i(e){var i=this,o=!1;return t(this).one(n.TRANSITION_END,function(){o=!0}),setTimeout(function(){o||n.triggerTransitionEnd(i)},e),this}var n={TRANSITION_END:"bsTransitionEnd",getUID:function(t){do{t+=~~(1e6*Math.random())}while(document.getElementById(t));return t},getSelectorFromElement:function(e){var i,n=e.getAttribute("data-target");n&&"#"!==n||(n=e.getAttribute("href")||""),"#"===n.charAt(0)&&(i=n,n=i="function"==typeof t.escapeSelector?t.escapeSelector(i).substr(1):i.replace(/(:|\.|\[|\]|,|=|@)/g,"\\$1"));try{return t(document).find(n).length>0?n:null}catch(t){return null}},reflow:function(t){return t.offsetHeight},triggerTransitionEnd:function(i){t(i).trigger(e.end)},supportsTransitionEnd:function(){return Boolean(e)},isElement:function(t){return(t[0]||t).nodeType},typeCheckConfig:function(t,e,i){for(var o in i)if(Object.prototype.hasOwnProperty.call(i,o)){var s=i[o],r=e[o],a=r&&n.isElement(r)?"element":(d=r,{}.toString.call(d).match(/\s([a-zA-Z]+)/)[1].toLowerCase());if(!new RegExp(s).test(a))throw new Error(t.toUpperCase()+': Option "'+o+'" provided type "'+a+'" but expected type "'+s+'".')}var d}};return e=("undefined"==typeof window||!window.QUnit)&&{end:"transitionend"},t.fn.emulateTransitionEnd=i,n.supportsTransitionEnd()&&(t.event.special[n.TRANSITION_END]={bindType:e.end,delegateType:e.end,handle:function(e){if(t(e.target).is(this))return e.handleObj.handler.apply(this,arguments)}}),n}(e=e&&e.hasOwnProperty("default")?e.default:e),E=(s="smodal",a="."+(r="bs.smodal"),d=(o=e).fn[s],l={backdrop:!0,keyboard:!0,focus:!0,show:!0},h={backdrop:"(boolean|string)",keyboard:"boolean",focus:"boolean",show:"boolean"},c={HIDE:"hide"+a,HIDDEN:"hidden"+a,SHOW:"show"+a,SHOWN:"shown"+a,FOCUSIN:"focusin"+a,RESIZE:"resize"+a,CLICK_DISMISS:"click.dismiss"+a,KEYDOWN_DISMISS:"keydown.dismiss"+a,MOUSEUP_DISMISS:"mouseup.dismiss"+a,MOUSEDOWN_DISMISS:"mousedown.dismiss"+a,CLICK_DATA_API:"click"+a+".data-api"},u="smodal-scrollbar-measure",f="smodal-backdrop",_="smodal-open",g="fade",p="show",m={DIALOG:".smodal-dialog",DATA_TOGGLE:'[data-toggle="smodal"]',DATA_DISMISS:'[data-dismiss="smodal"]',FIXED_CONTENT:".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",STICKY_CONTENT:".sticky-top",NAVBAR_TOGGLER:".navbar-toggler"},S=function(){function t(t,e){this._config=this._getConfig(e),this._element=t,this._dialog=o(t).find(m.DIALOG)[0],this._backdrop=null,this._isShown=!1,this._isBodyOverflowing=!1,this._ignoreBackdropClick=!1,this._originalBodyPadding=0,this._scrollbarWidth=0}var e,d,S,E=t.prototype;return E.toggle=function(t){return this._isShown?this.hide():this.show(t)},E.show=function(t){var e=this;if(!this._isTransitioning&&!this._isShown){v.supportsTransitionEnd()&&o(this._element).hasClass(g)&&(this._isTransitioning=!0);var i=o.Event(c.SHOW,{relatedTarget:t});o(this._element).trigger(i),this._isShown||i.isDefaultPrevented()||(this._isShown=!0,this._checkScrollbar(),this._setScrollbar(),this._adjustDialog(),o(document.body).addClass(_),this._setEscapeEvent(),this._setResizeEvent(),o(this._element).on(c.CLICK_DISMISS,m.DATA_DISMISS,function(t){return e.hide(t)}),o(this._dialog).on(c.MOUSEDOWN_DISMISS,function(){o(e._element).one(c.MOUSEUP_DISMISS,function(t){o(t.target).is(e._element)&&(e._ignoreBackdropClick=!0)})}),this._showBackdrop(function(){return e._showElement(t)}))}},E.hide=function(t){var e=this;if(t&&t.preventDefault(),!this._isTransitioning&&this._isShown){var i=o.Event(c.HIDE);if(o(this._element).trigger(i),this._isShown&&!i.isDefaultPrevented()){this._isShown=!1;var n=v.supportsTransitionEnd()&&o(this._element).hasClass(g);n&&(this._isTransitioning=!0),this._setEscapeEvent(),this._setResizeEvent(),o(document).off(c.FOCUSIN),o(this._element).removeClass(p),o(this._element).off(c.CLICK_DISMISS),o(this._dialog).off(c.MOUSEDOWN_DISMISS),n?o(this._element).one(v.TRANSITION_END,function(t){return e._hideSModal(t)}).emulateTransitionEnd(300):this._hideSModal()}}},E.dispose=function(){o.removeData(this._element,r),o(window,document,this._element,this._backdrop).off(a),this._config=null,this._element=null,this._dialog=null,this._backdrop=null,this._isShown=null,this._isBodyOverflowing=null,this._ignoreBackdropClick=null,this._scrollbarWidth=null},E.handleUpdate=function(){this._adjustDialog()},E._getConfig=function(t){return t=n({},l,t),v.typeCheckConfig(s,t,h),t},E._showElement=function(t){var e=this,i=v.supportsTransitionEnd()&&o(this._element).hasClass(g);this._element.parentNode&&this._element.parentNode.nodeType===Node.ELEMENT_NODE||document.body.appendChild(this._element),this._element.style.display="block",this._element.removeAttribute("aria-hidden"),this._element.scrollTop=0,i&&v.reflow(this._element),o(this._element).addClass(p),this._config.focus&&this._enforceFocus();var n=o.Event(c.SHOWN,{relatedTarget:t}),s=function(){e._config.focus&&e._element.focus(),e._isTransitioning=!1,o(e._element).trigger(n)};i?o(this._dialog).one(v.TRANSITION_END,s).emulateTransitionEnd(300):s()},E._enforceFocus=function(){var t=this;o(document).off(c.FOCUSIN).on(c.FOCUSIN,function(e){document!==e.target&&t._element!==e.target&&0===o(t._element).has(e.target).length&&t._element.focus()})},E._setEscapeEvent=function(){var t=this;this._isShown&&this._config.keyboard?o(this._element).on(c.KEYDOWN_DISMISS,function(e){27===e.which&&(e.preventDefault(),t.hide())}):this._isShown||o(this._element).off(c.KEYDOWN_DISMISS)},E._setResizeEvent=function(){var t=this;this._isShown?o(window).on(c.RESIZE,function(e){return t.handleUpdate(e)}):o(window).off(c.RESIZE)},E._hideSModal=function(){var t=this;this._element.style.display="none",this._element.setAttribute("aria-hidden",!0),this._isTransitioning=!1,this._showBackdrop(function(){o(document.body).removeClass(_),t._resetAdjustments(),t._resetScrollbar(),o(t._element).trigger(c.HIDDEN)})},E._removeBackdrop=function(){this._backdrop&&(o(this._backdrop).remove(),this._backdrop=null)},E._showBackdrop=function(t){var e=this,i=o(this._element).hasClass(g)?g:"";if(this._isShown&&this._config.backdrop){var n=v.supportsTransitionEnd()&&i;if(this._backdrop=document.createElement("div"),this._backdrop.className=f,i&&o(this._backdrop).addClass(i),o(this._backdrop).appendTo(document.body),o(this._element).on(c.CLICK_DISMISS,function(t){e._ignoreBackdropClick?e._ignoreBackdropClick=!1:t.target===t.currentTarget&&("static"===e._config.backdrop?e._element.focus():e.hide())}),n&&v.reflow(this._backdrop),o(this._backdrop).addClass(p),!t)return;if(true)return void t();o(this._backdrop).one(v.TRANSITION_END,t).emulateTransitionEnd(150)}else if(!this._isShown&&this._backdrop){o(this._backdrop).removeClass(p);var s=function(){e._removeBackdrop(),t&&t()};v.supportsTransitionEnd()&&o(this._element).hasClass(g)?o(this._backdrop).one(v.TRANSITION_END,s).emulateTransitionEnd(150):s()}else t&&t()},E._adjustDialog=function(){var t=this._element.scrollHeight>document.documentElement.clientHeight;!this._isBodyOverflowing&&t&&(this._element.style.paddingLeft=this._scrollbarWidth+"px"),this._isBodyOverflowing&&!t&&(this._element.style.paddingRight=this._scrollbarWidth+"px")},E._resetAdjustments=function(){this._element.style.paddingLeft="",this._element.style.paddingRight=""},E._checkScrollbar=function(){var t=document.body.getBoundingClientRect();this._isBodyOverflowing=t.left+t.right<window.innerWidth,this._scrollbarWidth=this._getScrollbarWidth()},E._setScrollbar=function(){var t=this;if(this._isBodyOverflowing){o(m.FIXED_CONTENT).each(function(e,i){var n=o(i)[0].style.paddingRight,s=o(i).css("padding-right");o(i).data("padding-right",n).css("padding-right",parseFloat(s)+t._scrollbarWidth+"px")}),o(m.STICKY_CONTENT).each(function(e,i){var n=o(i)[0].style.marginRight,s=o(i).css("margin-right");o(i).data("margin-right",n).css("margin-right",parseFloat(s)-t._scrollbarWidth+"px")}),o(m.NAVBAR_TOGGLER).each(function(e,i){var n=o(i)[0].style.marginRight,s=o(i).css("margin-right");o(i).data("margin-right",n).css("margin-right",parseFloat(s)+t._scrollbarWidth+"px")});var e=document.body.style.paddingRight,i=o("body").css("padding-right");o("body").data("padding-right",e).css("padding-right",parseFloat(i)+this._scrollbarWidth+"px")}},E._resetScrollbar=function(){o(m.FIXED_CONTENT).each(function(t,e){var i=o(e).data("padding-right");"undefined"!=typeof i&&o(e).css("padding-right",i).removeData("padding-right")}),o(m.STICKY_CONTENT+", "+m.NAVBAR_TOGGLER).each(function(t,e){var i=o(e).data("margin-right");"undefined"!=typeof i&&o(e).css("margin-right",i).removeData("margin-right")});var t=o("body").data("padding-right");"undefined"!=typeof t&&o("body").css("padding-right",t).removeData("padding-right")},E._getScrollbarWidth=function(){var t=document.createElement("div");t.className=u,document.body.appendChild(t);var e=t.getBoundingClientRect().width-t.clientWidth;return document.body.removeChild(t),e},t._jQueryInterface=function(e,i){return this.each(function(){var s=o(this).data(r),a=n({},t.Default,o(this).data(),"object"==typeof e&&e);if(s||(s=new t(this,a),o(this).data(r,s)),"string"==typeof e){if("undefined"==typeof s[e])throw new TypeError('No method named "'+e+'"');s[e](i)}else a.show&&s.show(i)})},e=t,S=[{key:"VERSION",get:function(){return"4.0.0"}},{key:"Default",get:function(){return l}}],(d=null)&&i(e.prototype,d),S&&i(e,S),t}(),o(document).on(c.CLICK_DATA_API,m.DATA_TOGGLE,function(t){var e,i=this,s=v.getSelectorFromElement(this);s&&(e=o(s)[0]);var a=o(e).data(r)?"toggle":n({},o(e).data(),o(this).data());"A"!==this.tagName&&"AREA"!==this.tagName||t.preventDefault();var d=o(e).one(c.SHOW,function(t){t.isDefaultPrevented()||d.one(c.HIDDEN,function(){o(i).is(":visible")&&i.focus()})});S._jQueryInterface.call(o(e),a,this)}),o.fn[s]=S._jQueryInterface,o.fn[s].Constructor=S,o.fn[s].noConflict=function(){return o.fn[s]=d,S._jQueryInterface},S);!function(t){if("undefined"==typeof t)throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1===e[0]&&9===e[1]&&e[2]<1||e[0]>=4)throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")}(e),t.SModal=E,Object.defineProperty(t,"__esModule",{value:!0})});

/**
 * [bState Change Button State]
 * @param  {[type]} _state [description]
 * @return {[type]}        [description]
 */
jQuery.fn.bootButton = function(_state) {

  //  Empty
  if(!this[0])return;

  if(_state == 'loading')
    this.attr('data-reset-text',this.html());

  if(_state == 'loading') {

    if(!this[0].dataset.resetText) {
      this[0].dataset.resetText = this.html();
    }

    this.addClass('disabled').attr('disabled','disabled').html('<i class="fa  fa-circle-o-notch fa-spin"></i> ' + this[0].dataset.loadingText);
  }
  else if(_state == 'reset')
    this.removeClass('disabled').removeAttr('disabled').html(this[0].dataset.resetText);
  else if(_state == 'update')
    this.removeClass('disabled').removeAttr('disabled').html(this[0].dataset.updateText);
  else
    this.addClass('disabled').attr('disabled','disabled').html(this[0].dataset[_state+'Text']);
};
