
function is_mobile(){
    var e=navigator.userAgent||navigator.vendor||window.opera;return!!/windows phone/i.test(e)||(!!/android/i.test(e)||!(!/iPad|iPhone|iPod/.test(e)||window.MSStream))}function is_touch_device(){return!!("ontouchstart"in window)}
    function is_ie(){
    var e=window.navigator.userAgent,t=e.indexOf("MSIE ");if(t>0)return parseInt(e.substring(t+5,e.indexOf(".",t)),10);
    if(e.indexOf("Trident/")>0){var n=e.indexOf("rv:");return parseInt(e.substring(n+3,e.indexOf(".",n)),10)}
    var i=e.indexOf("Edge/");return i>0&&parseInt(e.substring(i+5,e.indexOf(".",i)),10)}
    function is_ie11(){return!window.ActiveXObject&&"ActiveXObject"in window}
    function version_ie(){return parseFloat(navigator.appVersion.split("MSIE")[1])}
    function is_ios(){return-1!=navigator.platform.indexOf("iPhone")||-1!=navigator.platform.indexOf("iPod")||-1!=navigator.platform.indexOf("iPad")}
    function is_android(){return-1!=navigator.platform.indexOf("Android")}
    function is_touch_device(){return!!("ontouchstart"in window)}function is_ie(){return-1!=navigator.appVersion.indexOf("MSIE")}
    function is_firefox(){return-1!=navigator.userAgent.indexOf("Firefox")}
    function is_opera(){return-1!=navigator.userAgent.indexOf("Opera")}
    function is_chrome(){return/Chrome/.test(navigator.userAgent)&&/Google Inc/.test(navigator.vendor)}
    function is_safari(){return/Safari/.test(navigator.userAgent)&&/Apple Computer/.test(navigator.vendor)}
    function version_ie(){return parseFloat(navigator.appVersion.split("MSIE")[1])}
    function version_firefox(){ if(/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent))return new Number(RegExp.$1)}function version_opera(){if(/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent))return new Number(RegExp.$1)}function is_ie8(){return!!(is_ie()&&version_ie()<9)}function is_ie9(){return!(!is_ie()||9!=version_ie())}function getInternetExplorerVersion(){var e=-1;if("Microsoft Internet Explorer"==navigator.appName){var t=navigator.userAgent;null!=new RegExp("MSIE ([0-9]{1,}[.0-9]{0,})").exec(t)&&(e=parseFloat(RegExp.$1))}else if("Netscape"==navigator.appName){t=navigator.userAgent;null!=new RegExp("Trident/.*rv:([0-9]{1,}[.0-9]{0,})").exec(t)&&(e=parseFloat(RegExp.$1))}return e}function is_ios(){return-1!=navigator.platform.indexOf("iPhone")||-1!=navigator.platform.indexOf("iPod")||-1!=navigator.platform.indexOf("iPad")}function is_android(){return-1!=navigator.platform.indexOf("Android")}function is_ie(){return-1!=navigator.appVersion.indexOf("MSIE")}function is_firefox(){return-1!=navigator.userAgent.indexOf("Firefox")}function is_opera(){return-1!=navigator.userAgent.indexOf("Opera")}function is_chrome(){return navigator.userAgent.toLowerCase().indexOf("chrome")>-1}function is_safari(){return navigator.userAgent.toLowerCase().indexOf("safari")>-1}function version_ie(){return parseFloat(navigator.appVersion.split("MSIE")[1])}function version_firefox(){if(/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent))return new Number(RegExp.$1)}function version_opera(){if(/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent))return new Number(RegExp.$1)}if(function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(e,t){"use strict";var n=[],i=e.document,r=Object.getPrototypeOf,o=n.slice,a=n.concat,s=n.push,l=n.indexOf,c={},d=c.toString,u=c.hasOwnProperty,p=u.toString,h=p.call(Object),f={},g=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType},m=function(e){return null!=e&&e===e.window},v={type:!0,src:!0,nonce:!0,noModule:!0};function y(e,t,n){var r,o,a=(n=n||i).createElement("script");if(a.text=e,t)for(r in v)(o=t[r]||t.getAttribute&&t.getAttribute(r))&&a.setAttribute(r,o);n.head.appendChild(a).parentNode.removeChild(a)}function _(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?c[d.call(e)]||"object":typeof e}var w="3.4.1",b=function(e,t){return new b.fn.init(e,t)},x=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;function C(e){var t=!!e&&"length"in e&&e.length,n=_(e);return!g(e)&&!m(e)&&("array"===n||0===t||"number"==typeof t&&0<t&&t-1 in e)}b.fn=b.prototype={jquery:w,constructor:b,length:0,toArray:function(){return o.call(this)},get:function(e){return null==e?o.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=b.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return b.each(this,e)},map:function(e){return this.pushStack(b.map(this,function(t,n){return e.call(t,n,t)}))},slice:function(){return this.pushStack(o.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(0<=n&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:s,sort:n.sort,splice:n.splice},b.extend=b.fn.extend=function(){var e,t,n,i,r,o,a=arguments[0]||{},s=1,l=arguments.length,c=!1;for("boolean"==typeof a&&(c=a,a=arguments[s]||{},s++),"object"==typeof a||g(a)||(a={}),s===l&&(a=this,s--);s<l;s++)if(null!=(e=arguments[s]))for(t in e)i=e[t],"__proto__"!==t&&a!==i&&(c&&i&&(b.isPlainObject(i)||(r=Array.isArray(i)))?(n=a[t],o=r&&!Array.isArray(n)?[]:r||b.isPlainObject(n)?n:{},r=!1,a[t]=b.extend(c,o,i)):void 0!==i&&(a[t]=i));return a},b.extend({expando:"jQuery"+(w+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==d.call(e)||(t=r(e))&&("function"!=typeof(n=u.call(t,"constructor")&&t.constructor)||p.call(n)!==h))},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t){y(e,{nonce:t&&t.nonce})},each:function(e,t){var n,i=0;if(C(e))for(n=e.length;i<n&&!1!==t.call(e[i],i,e[i]);i++);else for(i in e)if(!1===t.call(e[i],i,e[i]))break;return e},trim:function(e){return null==e?"":(e+"").replace(x,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(C(Object(e))?b.merge(n,"string"==typeof e?[e]:e):s.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:l.call(t,e,n)},merge:function(e,t){for(var n=+t.length,i=0,r=e.length;i<n;i++)e[r++]=t[i];return e.length=r,e},grep:function(e,t,n){for(var i=[],r=0,o=e.length,a=!n;r<o;r++)!t(e[r],r)!==a&&i.push(e[r]);return i},map:function(e,t,n){var i,r,o=0,s=[];if(C(e))for(i=e.length;o<i;o++)null!=(r=t(e[o],o,n))&&s.push(r);else for(o in e)null!=(r=t(e[o],o,n))&&s.push(r);return a.apply([],s)},guid:1,support:f}),"function"==typeof Symbol&&(b.fn[Symbol.iterator]=n[Symbol.iterator]),b.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){c["[object "+t+"]"]=t.toLowerCase()});var T=function(e){var t,n,i,r,o,a,s,l,c,d,u,p,h,f,g,m,v,y,_,w="sizzle"+1*new Date,b=e.document,x=0,C=0,T=le(),k=le(),S=le(),A=le(),E=function(e,t){return e===t&&(u=!0),0},O={}.hasOwnProperty,D=[],j=D.pop,L=D.push,I=D.push,P=D.slice,M=function(e,t){for(var n=0,i=e.length;n<i;n++)if(e[n]===t)return n;return-1},N="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",R="[\\x20\\t\\r\\n\\f]",$="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",H="\\["+R+"*("+$+")(?:"+R+"*([*^$|!~]?=)"+R+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+$+"))|)"+R+"*\\]",z=":("+$+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+H+")*)|.*)\\)|)",F=new RegExp(R+"+","g"),B=new RegExp("^"+R+"+|((?:^|[^\\\\])(?:\\\\.)*)"+R+"+$","g"),q=new RegExp("^"+R+"*,"+R+"*"),W=new RegExp("^"+R+"*([>+~]|"+R+")"+R+"*"),Q=new RegExp(R+"|>"),V=new RegExp(z),U=new RegExp("^"+$+"$"),Y={ID:new RegExp("^#("+$+")"),CLASS:new RegExp("^\\.("+$+")"),TAG:new RegExp("^("+$+"|[*])"),ATTR:new RegExp("^"+H),PSEUDO:new RegExp("^"+z),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+R+"*(even|odd|(([+-]|)(\\d*)n|)"+R+"*(?:([+-]|)"+R+"*(\\d+)|))"+R+"*\\)|)","i"),bool:new RegExp("^(?:"+N+")$","i"),needsContext:new RegExp("^"+R+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+R+"*((?:-\\d)?\\d*)"+R+"*\\)|)(?=[^-]|$)","i")},X=/HTML$/i,G=/^(?:input|select|textarea|button)$/i,K=/^h\d$/i,Z=/^[^{]+\{\s*\[native \w/,J=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\([\\da-f]{1,6}"+R+"?|("+R+")|.)","ig"),ne=function(e,t,n){var i="0x"+t-65536;return i!=i||n?t:i<0?String.fromCharCode(i+65536):String.fromCharCode(i>>10|55296,1023&i|56320)},ie=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,re=function(e,t){return t?"\0"===e?"ï¿½":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){p()},ae=we(function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()},{dir:"parentNode",next:"legend"});try{I.apply(D=P.call(b.childNodes),b.childNodes),D[b.childNodes.length].nodeType}catch(t){I={apply:D.length?function(e,t){L.apply(e,P.call(t))}:function(e,t){for(var n=e.length,i=0;e[n++]=t[i++];);e.length=n-1}}}function se(e,t,i,r){var o,s,c,d,u,f,v,y=t&&t.ownerDocument,x=t?t.nodeType:9;if(i=i||[],"string"!=typeof e||!e||1!==x&&9!==x&&11!==x)return i;if(!r&&((t?t.ownerDocument||t:b)!==h&&p(t),t=t||h,g)){if(11!==x&&(u=J.exec(e)))if(o=u[1]){if(9===x){if(!(c=t.getElementById(o)))return i;if(c.id===o)return i.push(c),i}else if(y&&(c=y.getElementById(o))&&_(t,c)&&c.id===o)return i.push(c),i}else{if(u[2])return I.apply(i,t.getElementsByTagName(e)),i;if((o=u[3])&&n.getElementsByClassName&&t.getElementsByClassName)return I.apply(i,t.getElementsByClassName(o)),i}if(n.qsa&&!A[e+" "]&&(!m||!m.test(e))&&(1!==x||"object"!==t.nodeName.toLowerCase())){if(v=e,y=t,1===x&&Q.test(e)){for((d=t.getAttribute("id"))?d=d.replace(ie,re):t.setAttribute("id",d=w),s=(f=a(e)).length;s--;)f[s]="#"+d+" "+_e(f[s]);v=f.join(","),y=ee.test(e)&&ve(t.parentNode)||t}try{return I.apply(i,y.querySelectorAll(v)),i}catch(t){A(e,!0)}finally{d===w&&t.removeAttribute("id")}}}return l(e.replace(B,"$1"),t,i,r)}function le(){var e=[];return function t(n,r){return e.push(n+" ")>i.cacheLength&&delete t[e.shift()],t[n+" "]=r}}
    function ce(e){ return e[w]=!0,e}function de(e){var t=h.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function ue(e,t){for(var n=e.split("|"),r=n.length;r--;)i.attrHandle[n[r]]=t}function pe(e,t){var n=t&&e,i=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(i)return i;if(n)for(;n=n.nextSibling;)if(n===t)return-1;return e?1:-1}function he(e){return function(t){return"input"===t.nodeName.toLowerCase()&&t.type===e}}
   
    