!function(){function e(){T.keyboardSupport&&w("keydown",a)}function t(){if(!z&&document.body){z=!0;var t=document.body,o=document.documentElement,n=window.innerHeight,r=t.scrollHeight;if(L=document.compatMode.indexOf("CSS")>=0?o:t,O=t,e(),top!=self)C=!0;else if(ie&&r>n&&(t.offsetHeight<=n||o.offsetHeight<=n)){var a=document.createElement("div"),i;a.style.cssText="position:absolute; z-index:-10000; top:0; left:0; right:0; height:"+L.scrollHeight+"px",document.body.appendChild(a),Y=function(){i||(i=setTimeout(function(){B||(a.style.height="0",a.style.height=L.scrollHeight+"px",i=null)},500))},setTimeout(Y,10),w("resize",Y);var l={attributes:!0,childList:!0,characterData:!1};if((X=new J(Y)).observe(t,l),L.offsetHeight<=n){var c=document.createElement("div");c.style.clear="both",t.appendChild(c)}}T.fixedBackground||B||(t.style.backgroundAttachment="scroll",o.style.backgroundAttachment="scroll")}}function o(){X&&X.disconnect(),p(se,r),p("mousedown",i),p("keydown",a),p("resize",Y),p("load",t)}function n(e,t,o){if(y(t,o),1!=T.accelerationMax){var n,r=Date.now()-q;if(r<T.accelerationDelta){var a=(1+50/r)/2;a>1&&(a=Math.min(a,T.accelerationMax),t*=a,o*=a)}q=Date.now()}if(j.push({x:t,y:o,lastX:t<0?.99:-.99,lastY:o<0?.99:-.99,start:Date.now()}),!R){var i=Q(),l=e===i||e===document.body;null==e.$scrollBehavior&&h(e)&&(e.$scrollBehavior=e.style.scrollBehavior,e.style.scrollBehavior="auto");var c=function(n){for(var r=Date.now(),a=0,i=0,u=0;u<j.length;u++){var s=j[u],d=r-s.start,f=d>=T.animationTime,m=f?1:d/T.animationTime;T.pulseAlgorithm&&(m=D(m));var h=s.x*m-s.lastX>>0,w=s.y*m-s.lastY>>0;a+=h,i+=w,s.lastX+=h,s.lastY+=w,f&&(j.splice(u,1),u--)}l?window.scrollBy(a,i):(a&&(e.scrollLeft+=a),i&&(e.scrollTop+=i)),t||o||(j=[]),j.length?G(c,e,1e3/T.frameRate+1):(R=!1,null!=e.$scrollBehavior&&(e.style.scrollBehavior=e.$scrollBehavior,e.$scrollBehavior=null))};G(c,e,0),R=!0}}function r(e){z||t();var o=e.target;if(e.defaultPrevented||e.ctrlKey)return!0;if(v(O,"embed")||v(o,"embed")&&/\.pdf/i.test(o.src)||v(O,"object")||o.shadowRoot)return!0;var r=-e.wheelDeltaX||e.deltaX||0,a=-e.wheelDeltaY||e.deltaY||0;K&&(e.wheelDeltaX&&g(e.wheelDeltaX,120)&&(r=e.wheelDeltaX/Math.abs(e.wheelDeltaX)*-120),e.wheelDeltaY&&g(e.wheelDeltaY,120)&&(a=e.wheelDeltaY/Math.abs(e.wheelDeltaY)*-120)),r||a||(a=-e.wheelDelta||0),1===e.deltaMode&&(r*=40,a*=40);var i=s(o);return i?!!b(a)||(Math.abs(r)>1.2&&(r*=T.stepSize/120),Math.abs(a)>1.2&&(a*=T.stepSize/120),n(i,r,a),e.preventDefault(),void l()):!C||!oe||(Object.defineProperty(e,"target",{value:window.frameElement}),parent.wheel(e))}function a(e){var t=e.target,o=e.ctrlKey||e.altKey||e.metaKey||e.shiftKey&&e.keyCode!==P.spacebar;document.body.contains(O)||(O=document.activeElement);var r=/^(textarea|select|embed|object)$/i,a=/^(button|submit|radio|checkbox|file|color|image)$/i;if(e.defaultPrevented||r.test(t.nodeName)||v(t,"input")&&!a.test(t.type)||v(O,"video")||x(e)||t.isContentEditable||o)return!0;if((v(t,"button")||v(t,"input")&&a.test(t.type))&&e.keyCode===P.spacebar)return!0;if(v(t,"input")&&"radio"==t.type&&$[e.keyCode])return!0;var i,c=0,u=0,d=s(O);if(!d)return!C||!oe||parent.keydown(e);var f=d.clientHeight;switch(d==document.body&&(f=window.innerHeight),e.keyCode){case P.up:u=-T.arrowScroll;break;case P.down:u=T.arrowScroll;break;case P.spacebar:u=-(i=e.shiftKey?1:-1)*f*.9;break;case P.pageup:u=.9*-f;break;case P.pagedown:u=.9*f;break;case P.home:d==document.body&&document.scrollingElement&&(d=document.scrollingElement),u=-d.scrollTop;break;case P.end:var m,h=d.scrollHeight-d.scrollTop-f;u=h>0?h+10:0;break;case P.left:c=-T.arrowScroll;break;case P.right:c=T.arrowScroll;break;default:return!0}n(d,c,u),e.preventDefault(),l()}function i(e){O=e.target}function l(){clearTimeout(W),W=setInterval(function(){I=_=U={}},1e3)}function c(e,t,o){for(var n=o?I:_,r=e.length;r--;)n[V(e[r])]=t;return t}function u(e,t){return(t?I:_)[V(e)]}function s(e){var t=[],o=document.body,n=L.scrollHeight;do{var r=u(e,!1);if(r)return c(t,r);if(t.push(e),n===e.scrollHeight){var a,i=f(L)&&f(o)||m(L);if(C&&d(L)||!C&&i)return c(t,Q())}else if(d(e)&&m(e))return c(t,e)}while(e=e.parentElement)}function d(e){return e.clientHeight+10<e.scrollHeight}function f(e){var t;return"hidden"!==getComputedStyle(e,"").getPropertyValue("overflow-y")}function m(e){var t=getComputedStyle(e,"").getPropertyValue("overflow-y");return"scroll"===t||"auto"===t}function h(e){var t=V(e);if(null==U[t]){var o=getComputedStyle(e,"")["scroll-behavior"];U[t]="smooth"==o}return U[t]}function w(e,t,o){window.addEventListener(e,t,o||!1)}function p(e,t,o){window.removeEventListener(e,t,o||!1)}function v(e,t){return e&&(e.nodeName||"").toLowerCase()===t.toLowerCase()}function y(e,t){e=e>0?1:-1,t=t>0?1:-1,H.x===e&&H.y===t||(H.x=e,H.y=t,j=[],q=0)}function b(e){if(e){A.length||(A=[e,e,e]),e=Math.abs(e),A.push(e),A.shift(),clearTimeout(N),N=setTimeout(function(){try{localStorage.SS_deltaBuffer=A.join(",")}catch(e){}},1e3);var t=e>120&&S(e);return!S(120)&&!S(100)&&!t}}function g(e,t){return Math.floor(e/t)==e/t}function S(e){return g(A[0],e)&&g(A[1],e)&&g(A[2],e)}function x(e){var t=e.target,o=!1;if(-1!=document.URL.indexOf("www.youtube.com/watch"))do{if(o=t.classList&&t.classList.contains("html5-video-controls"))break}while(t=t.parentNode);return o}function k(e){var t,o,n;return(e*=T.pulseScale)<1?t=e-(1-Math.exp(-e)):(e-=1,t=(o=Math.exp(-1))+(n=1-Math.exp(-e))*(1-o)),t*T.pulseNormalize}function D(e){return e>=1?1:e<=0?0:(1==T.pulseNormalize&&(T.pulseNormalize/=k(1)),k(e))}function M(e){for(var t in e)E.hasOwnProperty(t)&&(T[t]=e[t])}var E={frameRate:150,animationTime:600,stepSize:100,pulseAlgorithm:!0,pulseScale:4,pulseNormalize:1,accelerationDelta:50,accelerationMax:3,keyboardSupport:!0,arrowScroll:50,fixedBackground:!0,excluded:""},T=E,B=!1,C=!1,H={x:0,y:0},z=!1,L=document.documentElement,O,X,Y,A=[],N,K=/^Mac/.test(navigator.platform),P={left:37,up:38,right:39,down:40,spacebar:32,pageup:33,pagedown:34,end:35,home:36},$={37:1,38:1,39:1,40:1},j=[],R=!1,q=Date.now(),V=(F=0,function(e){return e.uniqueID||(e.uniqueID=F++)}),F,I={},_={},W,U={};if(window.localStorage&&localStorage.SS_deltaBuffer)try{A=localStorage.SS_deltaBuffer.split(",")}catch(e){}var G=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e,t,o){window.setTimeout(e,o||1e3/60)},J=window.MutationObserver||window.WebKitMutationObserver||window.MozMutationObserver,Q=(Z=document.scrollingElement,function(){if(!Z){var e=document.createElement("div");e.style.cssText="height:10000px;width:1px;",document.body.appendChild(e);var t=document.body.scrollTop,o=document.documentElement.scrollTop;window.scrollBy(0,3),Z=document.body.scrollTop!=t?document.body:document.documentElement,window.scrollBy(0,-3),document.body.removeChild(e)}return Z}),Z,ee=window.navigator.userAgent,te=/Edge/.test(ee),oe=/chrome/i.test(ee)&&!te,ne=/safari/i.test(ee)&&!te,re=/mobile/i.test(ee),ae=/Windows NT 6.1/i.test(ee)&&/rv:11/i.test(ee),ie=ne&&(/Version\/8/i.test(ee)||/Version\/9/i.test(ee)),le=(oe||ne||ae)&&!re,ce=!1;try{window.addEventListener("test",null,Object.defineProperty({},"passive",{get:function(){ce=!0}}))}catch(e){}var ue=!!ce&&{passive:!1},se="onwheel"in document.createElement("div")?"wheel":"mousewheel";se&&le&&(w(se,r,ue),w("mousedown",i),w("load",t)),M.destroy=o,window.SmoothScrollOptions&&M(window.SmoothScrollOptions),"function"==typeof define&&define.amd?define(function(){return M}):"object"==typeof exports?module.exports=M:window.SmoothScroll=M}();