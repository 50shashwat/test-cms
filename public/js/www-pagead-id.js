(function(){var aa="function"==typeof Object.create?Object.create:function(a){function b(){}
b.prototype=a;return new b},m;
if("function"==typeof Object.setPrototypeOf)m=Object.setPrototypeOf;else{var n;a:{var ba={u:!0},ca={};try{ca.__proto__=ba;n=ca.u;break a}catch(a){}n=!1}m=n?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var da=m;
function q(a,b){a.prototype=aa(b.prototype);a.prototype.constructor=a;if(da)da(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c]}
var ea="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)},fa="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this;
function r(a,b){if(b){for(var c=fa,d=a.split("."),e=0;e<d.length-1;e++){var f=d[e];f in c||(c[f]={});c=c[f]}d=d[d.length-1];e=c[d];f=b(e);f!=e&&null!=f&&ea(c,d,{configurable:!0,writable:!0,value:f})}}
function ha(a,b,c){if(null==a)throw new TypeError("The 'this' value for String.prototype."+c+" must not be null or undefined");if(b instanceof RegExp)throw new TypeError("First argument to String.prototype."+c+" must not be a regular expression");return a+""}
r("String.prototype.endsWith",function(a){return a?a:function(b,c){var d=ha(this,b,"endsWith");b+="";void 0===c&&(c=d.length);for(var e=Math.max(0,Math.min(c|0,d.length)),f=b.length;0<f&&0<e;)if(d[--e]!=b[--f])return!1;return 0>=f}});
r("String.prototype.startsWith",function(a){return a?a:function(b,c){var d=ha(this,b,"startsWith");b+="";for(var e=d.length,f=b.length,g=Math.max(0,Math.min(c|0,d.length)),k=0;k<f&&g<e;)if(d[g++]!=b[k++])return!1;return k>=f}});
var ia="function"==typeof Object.assign?Object.assign:function(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(d)for(var e in d)Object.prototype.hasOwnProperty.call(d,e)&&(a[e]=d[e])}return a};
r("Object.assign",function(a){return a||ia});
var t=this||self;function u(a){return"string"==typeof a}
function v(a){a=a.split(".");for(var b=t,c=0;c<a.length;c++)if(b=b[a[c]],null==b)return null;return b}
function w(){}
function x(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==b&&"undefined"==typeof a.call)return"object";return b}
function ja(a){var b=x(a);return"array"==b||"object"==b&&"number"==typeof a.length}
function y(a){return"function"==x(a)}
function ka(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
function la(a,b,c){return a.call.apply(a.bind,arguments)}
function ma(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}
function z(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?z=la:z=ma;return z.apply(null,arguments)}
var na=Date.now||function(){return+new Date};
function A(a,b){var c=a.split("."),d=t;c[0]in d||"undefined"==typeof d.execScript||d.execScript("var "+c[0]);for(var e;c.length&&(e=c.shift());)c.length||void 0===b?d[e]&&d[e]!==Object.prototype[e]?d=d[e]:d=d[e]={}:d[e]=b}
function oa(a,b){function c(){}
c.prototype=b.prototype;a.prototype=new c;a.prototype.constructor=a}
;var B=window;function C(a){if(Error.captureStackTrace)Error.captureStackTrace(this,C);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))}
oa(C,Error);C.prototype.name="CustomError";function D(a,b){this.b=a===pa&&b||"";this.a=qa}
var qa={},pa={},E=new D(pa,"");var ra=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if(u(a))return u(b)&&1==b.length?a.indexOf(b,0):-1;
for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},G=Array.prototype.forEach?function(a,b){Array.prototype.forEach.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=u(a)?a.split(""):a,e=0;e<c;e++)e in d&&b.call(void 0,d[e],e,a)},sa=Array.prototype.reduce?function(a,b,c){return Array.prototype.reduce.call(a,b,c)}:function(a,b,c){var d=c;
G(a,function(e,f){d=b.call(void 0,d,e,f,a)});
return d};
function ta(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(ja(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
;function ua(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function va(a,b){var c=ja(b),d=c?b:arguments;for(c=c?0:1;c<d.length;c++){if(null==a)return;a=a[d[c]]}return a}
function wa(){var a=xa,b={},c;for(c in a)b[c]=a[c];return b}
var ya="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function za(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<ya.length;f++)c=ya[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;function Aa(a,b,c){this.f=a===Ba&&b||"";this.a=a===Ba&&c||null;this.b=Ca}
var Ca={},Ba={};var H;a:{var Da=t.navigator;if(Da){var Ea=Da.userAgent;if(Ea){H=Ea;break a}}H=""};function Fa(){this.a="";this.b=Ga}
var Ga={};function I(a){var b=new Fa;b.a=a;return b}
I("<!DOCTYPE html>");var J=I("");I("<br>");function Ha(a){var b=new Aa(Ba,E instanceof D&&E.constructor===D&&E.a===qa?E.b:"type_error:Const",null);a.src=b.a?b.a:(b instanceof Aa&&b.constructor===Aa&&b.b===Ca?b.f:"type_error:TrustedResourceUrl").toString()}
;function K(a,b){this.width=a;this.height=b}
K.prototype.aspectRatio=function(){return this.width/this.height};
K.prototype.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
K.prototype.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
K.prototype.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};var Ia=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;function L(a){return a.match(Ia)}
function M(a){return a?decodeURI(a):a}
function Ja(a,b,c){if("array"==x(b))for(var d=0;d<b.length;d++)Ja(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))}
function Ka(a){var b=[],c;for(c in a)Ja(c,a[c],b);return b.join("&")}
;function La(a){var b=Ma;if(b)for(var c in b)Object.prototype.hasOwnProperty.call(b,c)&&a.call(void 0,b[c],c,b)}
function Na(){var a=[];La(function(b){a.push(b)});
return a}
var Ma={D:"allow-forms",F:"allow-modals",G:"allow-orientation-lock",H:"allow-pointer-lock",I:"allow-popups",J:"allow-popups-to-escape-sandbox",K:"allow-presentation",L:"allow-same-origin",M:"allow-scripts",N:"allow-top-navigation",O:"allow-top-navigation-by-user-activation"},Oa=function(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}(function(){return Na()});
function Pa(){var a=document.createElement("IFRAME").sandbox,b=a&&a.supports;if(!b)return{};var c={};G(Oa(),function(d){b.call(a,d)&&(c[d]=!0)});
return c}
;var Qa=(new Date).getTime();function Ra(a,b){this.f=a;this.g=b;this.b=0;this.a=null}
Ra.prototype.get=function(){if(0<this.b){this.b--;var a=this.a;this.a=a.next;a.next=null}else a=this.f();return a};
function Sa(a,b){a.g(b);100>a.b&&(a.b++,b.next=a.a,a.a=b)}
;function Ta(a){t.setTimeout(function(){throw a;},0)}
var Ua;
function Va(){var a=t.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&-1==H.indexOf("Presto")&&(a=function(){var e=document.createElement("IFRAME");e.style.display="none";Ha(e);document.documentElement.appendChild(e);var f=e.contentWindow;e=f.document;e.open();e.write(J instanceof Fa&&J.constructor===Fa&&J.b===Ga?J.a:"type_error:SafeHtml");e.close();var g="callImmediate"+Math.random(),k="file:"==f.location.protocol?"*":f.location.protocol+"//"+
f.location.host;e=z(function(h){if(("*"==k||h.origin==k)&&h.data==g)this.port1.onmessage()},this);
f.addEventListener("message",e,!1);this.port1={};this.port2={postMessage:function(){f.postMessage(g,k)}}});
if("undefined"!==typeof a&&-1==H.indexOf("Trident")&&-1==H.indexOf("MSIE")){var b=new a,c={},d=c;b.port1.onmessage=function(){if(void 0!==c.next){c=c.next;var e=c.j;c.j=null;e()}};
return function(e){d.next={j:e};d=d.next;b.port2.postMessage(0)}}return"undefined"!==typeof document&&"onreadystatechange"in document.createElement("SCRIPT")?function(e){var f=document.createElement("SCRIPT");
f.onreadystatechange=function(){f.onreadystatechange=null;f.parentNode.removeChild(f);f=null;e();e=null};
document.documentElement.appendChild(f)}:function(e){t.setTimeout(e,0)}}
;function Wa(){this.b=this.a=null}
var Ya=new Ra(function(){return new Xa},function(a){a.reset()});
Wa.prototype.add=function(a,b){var c=Ya.get();c.set(a,b);this.b?this.b.next=c:this.a=c;this.b=c};
Wa.prototype.remove=function(){var a=null;this.a&&(a=this.a,this.a=this.a.next,this.a||(this.b=null),a.next=null);return a};
function Xa(){this.next=this.b=this.a=null}
Xa.prototype.set=function(a,b){this.a=a;this.b=b;this.next=null};
Xa.prototype.reset=function(){this.next=this.b=this.a=null};function Za(a,b){N||$a();ab||(N(),ab=!0);bb.add(a,b)}
var N;function $a(){if(t.Promise&&t.Promise.resolve){var a=t.Promise.resolve(void 0);N=function(){a.then(cb)}}else N=function(){var b=cb,c;
!(c=!y(t.setImmediate))&&(c=t.Window&&t.Window.prototype)&&(c=-1==H.indexOf("Edge")&&t.Window.prototype.setImmediate==t.setImmediate);c?(Ua||(Ua=Va()),Ua(b)):t.setImmediate(b)}}
var ab=!1,bb=new Wa;function cb(){for(var a;a=bb.remove();){try{a.a.call(a.b)}catch(b){Ta(b)}Sa(Ya,a)}ab=!1}
;function db(a){if(!a)return!1;try{return!!a.$goog_Thenable}catch(b){return!1}}
;function O(a){this.a=0;this.l=void 0;this.g=this.b=this.f=null;this.h=this.i=!1;if(a!=w)try{var b=this;a.call(void 0,function(c){P(b,2,c)},function(c){P(b,3,c)})}catch(c){P(this,3,c)}}
function eb(){this.next=this.context=this.b=this.f=this.a=null;this.g=!1}
eb.prototype.reset=function(){this.context=this.b=this.f=this.a=null;this.g=!1};
var fb=new Ra(function(){return new eb},function(a){a.reset()});
function gb(a,b,c){var d=fb.get();d.f=a;d.b=b;d.context=c;return d}
function hb(a){return new O(function(b,c){c(a)})}
O.prototype.then=function(a,b,c){return ib(this,y(a)?a:null,y(b)?b:null,c)};
O.prototype.$goog_Thenable=!0;function Q(a,b){return ib(a,null,b,void 0)}
O.prototype.cancel=function(a){0==this.a&&Za(function(){var b=new R(a);jb(this,b)},this)};
function jb(a,b){if(0==a.a)if(a.f){var c=a.f;if(c.b){for(var d=0,e=null,f=null,g=c.b;g&&(g.g||(d++,g.a==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.a&&1==d?jb(c,b):(f?(d=f,d.next==c.g&&(c.g=d),d.next=d.next.next):kb(c),lb(c,e,3,b)))}a.f=null}else P(a,3,b)}
function mb(a,b){a.b||2!=a.a&&3!=a.a||nb(a);a.g?a.g.next=b:a.b=b;a.g=b}
function ib(a,b,c,d){var e=gb(null,null,null);e.a=new O(function(f,g){e.f=b?function(k){try{var h=b.call(d,k);f(h)}catch(l){g(l)}}:f;
e.b=c?function(k){try{var h=c.call(d,k);void 0===h&&k instanceof R?g(k):f(h)}catch(l){g(l)}}:g});
e.a.f=a;mb(a,e);return e.a}
O.prototype.w=function(a){this.a=0;P(this,2,a)};
O.prototype.C=function(a){this.a=0;P(this,3,a)};
function P(a,b,c){if(0==a.a){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.a=1;a:{var d=c,e=a.w,f=a.C;if(d instanceof O){mb(d,gb(e||w,f||null,a));var g=!0}else if(db(d))d.then(e,f,a),g=!0;else{if(ka(d))try{var k=d.then;if(y(k)){ob(d,k,e,f,a);g=!0;break a}}catch(h){f.call(a,h);g=!0;break a}g=!1}}g||(a.l=c,a.a=b,a.f=null,nb(a),3!=b||c instanceof R||pb(a,c))}}
function ob(a,b,c,d,e){function f(h){k||(k=!0,d.call(e,h))}
function g(h){k||(k=!0,c.call(e,h))}
var k=!1;try{b.call(a,g,f)}catch(h){f(h)}}
function nb(a){a.i||(a.i=!0,Za(a.v,a))}
function kb(a){var b=null;a.b&&(b=a.b,a.b=b.next,b.next=null);a.b||(a.g=null);return b}
O.prototype.v=function(){for(var a;a=kb(this);)lb(this,a,this.a,this.l);this.i=!1};
function lb(a,b,c,d){if(3==c&&b.b&&!b.g)for(;a&&a.h;a=a.f)a.h=!1;if(b.a)b.a.f=null,qb(b,c,d);else try{b.g?b.f.call(b.context):qb(b,c,d)}catch(e){rb.call(null,e)}Sa(fb,b)}
function qb(a,b,c){2==b?a.f.call(a.context,c):a.b&&a.b.call(a.context,c)}
function pb(a,b){a.h=!0;Za(function(){a.h&&rb.call(null,b)})}
var rb=Ta;function R(a){C.call(this,a)}
oa(R,C);R.prototype.name="cancel";function sb(){this.b=[];this.a=-1}
sb.prototype.set=function(a,b){b=void 0===b?!0:b;0<=a&&52>a&&0===a%1&&this.b[a]!=b&&(this.b[a]=b,this.a=-1)};
sb.prototype.get=function(a){return!!this.b[a]};
function tb(a){-1==a.a&&(a.a=sa(a.b,function(b,c,d){return c?b+Math.pow(2,d):b},0));
return a.a}
;function ub(a){A("yt.ads.biscotti.lastId_",a)}
;var S=window.yt&&window.yt.config_||window.ytcfg&&window.ytcfg.data_||{};A("yt.config_",S);function vb(a){var b=arguments;1<b.length?S[b[0]]=b[1]:1===b.length&&Object.assign(S,b[0])}
function T(a,b){return a in S?S[a]:b}
;function wb(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){U(b)}}:a}
function U(a,b,c,d,e){var f=v("yt.logging.errors.log");f?f(a,b,c,d,e):(f=T("ERRORS",[]),f.push([a,b,c,d,e]),vb("ERRORS",f))}
;function xb(a){var b=[];ua(a,function(c,d){var e=encodeURIComponent(String(d)),f;"array"==x(c)?f=c:f=[c];G(f,function(g){""==g?b.push(e):b.push(e+"="+encodeURIComponent(String(g)))})});
return b.join("&")}
function yb(a){"?"==a.charAt(0)&&(a=a.substr(1));a=a.split("&");for(var b={},c=0,d=a.length;c<d;c++){var e=a[c].split("=");if(1==e.length&&e[0]||2==e.length)try{var f=decodeURIComponent((e[0]||"").replace(/\+/g," ")),g=decodeURIComponent((e[1]||"").replace(/\+/g," "));f in b?"array"==x(b[f])?ta(b[f],g):b[f]=[b[f],g]:b[f]=g}catch(h){var k=Error("Error decoding URL component");k.params="key: "+e[0]+", value: "+e[1];"q"==e[0]?U(k,"WARNING",void 0,void 0,void 0):U(k)}}return b}
function zb(a,b,c){var d=a.split("#",2);a=d[0];d=1<d.length?"#"+d[1]:"";var e=a.split("?",2);a=e[0];e=yb(e[1]||"");for(var f in b)!c&&null!==e&&f in e||(e[f]=b[f]);b=a;a=Ka(e);a?(c=b.indexOf("#"),0>c&&(c=b.length),f=b.indexOf("?"),0>f||f>c?(f=c,e=""):e=b.substring(f+1,c),b=[b.substr(0,f),e,b.substr(c)],c=b[1],b[1]=a?c?c+"&"+a:a:c,a=b[0]+(b[1]?"?"+b[1]:"")+b[2]):a=b;return a+d}
;function Ab(a){var b=Bb;a=void 0===a?v("yt.ads.biscotti.lastId_")||"":a;b=Object.assign(Cb(b),Db(b));b.ca_type="image";a&&(b.bid=a);return b}
function Cb(a){var b={};b.dt=Qa;b.flash="0";a:{try{var c=a.a.top.location.href}catch(f){a=2;break a}a=c?c===a.b.location.href?0:1:2}b=(b.frm=a,b);b.u_tz=-(new Date).getTimezoneOffset();var d=void 0===d?B:d;try{var e=d.history.length}catch(f){e=0}b.u_his=e;b.u_java=!!B.navigator&&"unknown"!==typeof B.navigator.javaEnabled&&!!B.navigator.javaEnabled&&B.navigator.javaEnabled();B.screen&&(b.u_h=B.screen.height,b.u_w=B.screen.width,b.u_ah=B.screen.availHeight,b.u_aw=B.screen.availWidth,b.u_cd=B.screen.colorDepth);
B.navigator&&B.navigator.plugins&&(b.u_nplug=B.navigator.plugins.length);B.navigator&&B.navigator.mimeTypes&&(b.u_nmime=B.navigator.mimeTypes.length);return b}
function Db(a){var b=a.a;try{var c=b.screenX;var d=b.screenY}catch(F){}try{var e=b.outerWidth;var f=b.outerHeight}catch(F){}try{var g=b.innerWidth;var k=b.innerHeight}catch(F){}b=[b.screenLeft,b.screenTop,c,d,b.screen?b.screen.availWidth:void 0,b.screen?b.screen.availTop:void 0,e,f,g,k];c=a.a.top;try{var h=(c||window).document,l="CSS1Compat"==h.compatMode?h.documentElement:h.body;var p=(new K(l.clientWidth,l.clientHeight)).round()}catch(F){p=new K(-12245933,-12245933)}h=p;p={};l=new sb;t.SVGElement&&
t.document.createElementNS&&l.set(0);c=Pa();c["allow-top-navigation-by-user-activation"]&&l.set(1);c["allow-popups-to-escape-sandbox"]&&l.set(2);t.crypto&&t.crypto.subtle&&l.set(3);t.TextDecoder&&t.TextEncoder&&l.set(4);l=tb(l);p.bc=l;p.bih=h.height;p.biw=h.width;p.brdim=b.join();a=a.b;return p.vis={visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[a.visibilityState||a.webkitVisibilityState||a.mozVisibilityState||""]||0,p.wgl=!!B.WebGLRenderingContext,p}
var Bb=new function(){var a=window.document;this.a=window;this.b=a};
A("yt.ads_.signals_.getAdSignalsString",function(a){return xb(Ab(a))});na();function V(a){var b=T("EXPERIMENTS_FORCED_FLAGS",{});a=void 0!==b[a]?b[a]:T("EXPERIMENT_FLAGS",{})[a];return u(a)&&"false"===a?!1:!!a}
;var Eb=void 0!==XMLHttpRequest?function(){return new XMLHttpRequest}:void 0!==ActiveXObject?function(){return new ActiveXObject("Microsoft.XMLHTTP")}:null;
function Fb(){if(!Eb)return null;var a=Eb();return"open"in a?a:null}
function Gb(a){switch(a&&"status"in a?a.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:return!0;default:return!1}}
;function Hb(a,b){y(a)&&(a=wb(a));return window.setTimeout(a,b)}
;var Ib={Authorization:"AUTHORIZATION","X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL","X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM"},Jb="app debugcss debugjs expflag force_ad_params force_viral_ad_response_params forced_experiments internalcountrycode internalipoverride absolute_experiments conditional_experiments sbb sr_bns_address".split(" "),
Kb=!1;
function Lb(a,b){b=void 0===b?{}:b;if(!c)var c=window.location.href;var d=L(a)[1]||null,e=M(L(a)[3]||null);d&&e?(d=c,c=L(a),d=L(d),c=c[3]==d[3]&&c[1]==d[1]&&c[4]==d[4]):c=e?M(L(c)[3]||null)==e&&(Number(L(c)[4]||null)||null)==(Number(L(a)[4]||null)||null):!0;d=V("web_ajax_ignore_global_headers_if_set");for(var f in Ib)e=T(Ib[f]),!e||!c&&!Mb(a,f)||d&&void 0!==b[f]||(b[f]=e);if(c||Mb(a,"X-YouTube-Utc-Offset"))b["X-YouTube-Utc-Offset"]=String(-(new Date).getTimezoneOffset());(V("pass_biscotti_id_in_header_ajax")||V("pass_biscotti_id_in_header_ajax_tv"))&&
(c||Mb(a,"X-YouTube-Ad-Signals"))&&(b["X-YouTube-Ad-Signals"]=xb(Ab(void 0)));return b}
function Nb(a){var b=window.location.search,c=M(L(a)[3]||null),d=M(L(a)[5]||null);d=(c=c&&(c.endsWith("youtube.com")||c.endsWith("youtube-nocookie.com")))&&d&&d.startsWith("/api/");if(!c||d)return a;var e=yb(b),f={};G(Jb,function(g){e[g]&&(f[g]=e[g])});
return zb(a,f||{},!1)}
function Mb(a,b){var c=T("CORS_HEADER_WHITELIST")||{},d=M(L(a)[3]||null);return d?(c=c[d])?0<=ra(c,b):!1:!0}
function Ob(a){var b=a.format||"JSON";var c=Pb("//googleads.g.doubleclick.net/pagead/id",a);var d=Qb(c,a),e=!1,f,g=Rb(c,function(k){if(!e){e=!0;f&&window.clearTimeout(f);var h=Gb(k),l=null,p=400<=k.status&&500>k.status,F=500<=k.status&&600>k.status;if(h||p||F)l=Sb(b,k,a.P);if(h)a:if(k&&204==k.status)h=!0;else{switch(b){case "XML":h=0==parseInt(l&&l.return_code,10);break a;case "RAW":h=!0;break a}h=!!l}l=l||{};p=a.context||t;h?a.m&&a.m.call(p,k,l):a.onError&&a.onError.call(p,k,l);a.A&&a.A.call(p,k,
l)}},a.method,d,a.headers,a.responseType,a.withCredentials);
a.o&&0<a.timeout&&(f=Hb(function(){e||(e=!0,g.abort(),window.clearTimeout(f),a.o.call(a.context||t,g))},a.timeout));
return g}
function Pb(a,b){b.S&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var c=T("XSRF_FIELD_NAME",void 0),d=b.U;d&&(d[c]&&delete d[c],a=zb(a,d||{},!0));return a}
function Qb(a,b){var c=T("XSRF_FIELD_NAME",void 0),d=T("XSRF_TOKEN",void 0),e=b.T||"",f=b.s,g=T("XSRF_FIELD_NAME",void 0),k;b.headers&&(k=b.headers["Content-Type"]);b.R||M(L(a)[3]||null)&&!b.withCredentials&&M(L(a)[3]||null)!=document.location.hostname||"POST"!=b.method||k&&"application/x-www-form-urlencoded"!=k||b.s&&b.s[g]||(f||(f={}),f[c]=d);f&&u(e)&&(e=yb(e),za(e,f),e=b.B&&"JSON"==b.B?JSON.stringify(e):Ka(e));if(!(c=e)&&(c=f)){a:{for(var h in f){f=!1;break a}f=!0}c=!f}!Kb&&c&&"POST"!=b.method&&
(Kb=!0,U(Error("AJAX request with postData should use POST")));return e}
function Sb(a,b,c){var d=null;switch(a){case "JSON":a=b.responseText;b=b.getResponseHeader("Content-Type")||"";a&&0<=b.indexOf("json")&&(d=JSON.parse(a));break;case "XML":if(b=(b=b.responseXML)?Tb(b):null)d={},G(b.getElementsByTagName("*"),function(e){d[e.tagName]=Ub(e)})}c&&Vb(d);
return d}
function Vb(a){if(ka(a))for(var b in a){var c;(c="html_content"==b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;var d=I(a[b]);a[c]=d}else Vb(a[b])}}
function Tb(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function Ub(a){var b="";G(a.childNodes,function(c){b+=c.nodeValue});
return b}
function Rb(a,b,c,d,e,f,g){function k(){4==(h&&"readyState"in h?h.readyState:0)&&b&&wb(b)(h)}
c=void 0===c?"GET":c;d=void 0===d?"":d;var h=Fb();if(!h)return null;"onloadend"in h?h.addEventListener("loadend",k,!1):h.onreadystatechange=k;V("debug_forward_web_query_parameters")&&(a=Nb(a));h.open(c,a,!0);f&&(h.responseType=f);g&&(h.withCredentials=!0);c="POST"==c&&(void 0===window.FormData||!(d instanceof FormData));if(e=Lb(a,e))for(var l in e)h.setRequestHeader(l,e[l]),"content-type"==l.toLowerCase()&&(c=!1);c&&h.setRequestHeader("Content-Type","application/x-www-form-urlencoded");h.send(d);
return h}
;function Wb(){var a=wa(),b;return Q(new O(function(c,d){a.m=function(e){Gb(e)?c(e):d(new W("Request failed, status="+e.status,"net.badstatus",e))};
a.onError=function(e){d(new W("Unknown request error","net.unknown",e))};
a.o=function(e){d(new W("Request timed out","net.timeout",e))};
b=Ob(a)}),function(c){c instanceof R&&b.abort();
return hb(c)})}
function W(a,b){C.call(this,a+", errorCode="+b);this.errorCode=b;this.name="PromiseAjaxError"}
q(W,C);function X(){this.a=0;this.b=null}
X.prototype.then=function(a,b,c){return 1===this.a&&a?(a=a.call(c,this.b),db(a)?a:Xb(a)):2===this.a&&b?(a=b.call(c,this.b),db(a)?a:Yb(a)):this};
X.prototype.$goog_Thenable=!0;function Yb(a){var b=new X;a=void 0===a?null:a;b.a=2;b.b=void 0===a?null:a;return b}
function Xb(a){var b=new X;a=void 0===a?null:a;b.a=1;b.b=void 0===a?null:a;return b}
;function Zb(a){C.call(this,a.message||a.description||a.name);this.isMissing=a instanceof Y;this.isTimeout=a instanceof W&&"net.timeout"==a.errorCode;this.isCanceled=a instanceof R}
q(Zb,C);Zb.prototype.name="BiscottiError";function Y(){C.call(this,"Biscotti ID is missing from server")}
q(Y,C);Y.prototype.name="BiscottiMissingError";var xa={format:"RAW",method:"GET",timeout:5E3,withCredentials:!0},Z=null;function $b(){if("1"===va(T("PLAYER_CONFIG",{}),"args","privembed"))return hb(Error("Biscotti ID is not available in private embed mode"));Z||(Z=Q(Wb().then(ac),function(a){return bc(2,a)}));
return Z}
function ac(a){a=a.responseText;if(0!=a.lastIndexOf(")]}'",0))throw new Y;a=JSON.parse(a.substr(4));if(1<(a.type||1))throw new Y;a=a.id;ub(a);Z=Xb(a);cc(18E5,2);return a}
function bc(a,b){var c=new Zb(b);ub("");Z=Yb(c);0<a&&cc(12E4,a-1);throw c;}
function cc(a,b){Hb(function(){Q(Wb().then(ac,function(c){return bc(b,c)}),w)},a)}
;v("yt.ads.biscotti.getId_")||A("yt.ads.biscotti.getId_",$b);var dc;try{var ec=v("yt.ads.biscotti.getId_");dc=ec?ec():$b()}catch(a){dc=hb(a)}Q(dc,w);}).call(this);
