/*!
 *  GMAP3 Plugin for jQuery
 *  Version  : 7.2
 *  Date     : 2016/12/03
 *  Author   : DEMONTE Jean-Baptiste
 *  Contact  : jbdemonte@gmail.com
 *  Web site : http://gmap3.net
 *  Licence  : GPL-3.0+
 */
!function(n,t,e){"use strict";function o(n){return D(!0,{},n||{})}function i(n){var t=Array.prototype.slice,e=t.call(arguments,1);return t.apply(n,e)}function r(n){return void 0===n}function a(t){return j.apply(n,t)}function u(n){return j().then((function(){return n}))}function s(n,t){var e=Math,o=e.PI,i=o*n.lat()/180,r=o*n.lng()/180,a=o*t.lat()/180,u=o*t.lng()/180,s=e.cos,c=e.sin;return 6371e3*e.acos(e.min(s(i)*s(a)*s(r)*s(u)+s(i)*c(r)*s(a)*c(u)+c(i)*c(a),1))}function c(n){"loading"!=e.readyState?n():e.addEventListener("DOMContentLoaded",n)}function p(n){return v(n).map((function(t){return encodeURIComponent(t)+"="+encodeURIComponent(n[t])})).join("&")}function d(n){return R[n]||(R[n]=f(n)),R[n]}function f(n){function t(n){return e.apply(this,n)}var e=A[n];return t.prototype=e.prototype,new t(i(arguments,1))}function l(n){var t=S();return"string"==typeof n&&(n={address:n}),d("Geocoder").geocode(n,(function(n,e){e===A.GeocoderStatus.OK?t.resolve(n[0].geometry.location):t.reject(e)})),t}function g(n,t){h(n.split(" "),t)}function h(n,t){(k(n)?n:[n]).forEach(t)}function v(n){return Object.keys(n)}function m(n){return v(n).map((function(t){return n[t]}))}function y(n,t){return(n=o(n)).bounds&&(n.bounds=x(n.bounds)),u(t(n))}function w(n,t,e){var i=S();return n=o(n),j().then((function(){var e=n.address;return e?(delete n.address,l(e).then((function(e){n[t]=e}))):void(n[t]=P(n[t]))})).then((function(){i.resolve(e(n))})).fail((function(n){i.reject(n)})),i}function L(n,t,e){return(n=o(n))[t]=(n[t]||[]).map(P),u(e(n))}function P(n,t){return k(n)?new A.LatLng(n[0],n[1]):!t||!n||n instanceof A.LatLng?n:new A.LatLng(n.lat,n.lng)}function x(n,t){return k(n)?new A.LatLngBounds({lat:n[2],lng:n[3]},{lat:n[0],lng:n[1]}):t&&!n.getCenter?new A.LatLngBounds({lat:n.south,lng:n.west},{lat:n.north,lng:n.east}):n}function C(t,o){function i(){function n(n){return e.getProjection().fromLatLngToDivPixel(n)}var e=this,i=[];r.call(e),e.setMap(t),e.onAdd=function(){var n;e.getPanes().overlayMouseTarget.appendChild(a[0])},o.position?(e.getPosition=function(){return o.position},e.setPosition=function(n){o.position=n,e.draw()},e.draw=function(){var t=n(o.position);a.css({left:t.x+o.x+"px",top:t.y+o.y+"px"})}):(e.getBounds=function(){return o.bounds},e.setBounds=function(n){o.bounds=n,e.draw()},e.draw=function(){var t=n(o.bounds.getSouthWest()),e=n(o.bounds.getNorthEast());a.css({left:t.x+o.x+"px",top:e.y+o.y+"px",width:e.x-t.x+o.x+"px",height:t.y-e.y+o.y+"px"})}),e.onRemove=function(){i.map((function(n){A.event.removeListener(n)})),a.remove(),e.$=a=null},e.$=a}var r=A.OverlayView,a=n(e.createElement("div")).css({border:"none",borderWidth:0,position:"absolute"}).append(o.content);return(o=D({x:0,y:0},o)).position?o.position=P(o.position,!0):o.bounds&&(o.bounds=x(o.bounds,!0)),i.prototype=new r,new i}function M(n){function t(){var n=this;return n.onAdd=n.onRemove=n.draw=function(){},A.OverlayView.call(n)}t.prototype=new A.OverlayView;var e=new t;return e.setMap(n),e.getProjection()}function T(n,t,e,o){var i=this;i.cluster=n,i.markers=t,i.$=e.$,i.overlay=e,e.getBounds=function(){return f("LatLngBounds",o.getSouthWest(),o.getNorthEast())}}function b(n,t){function e(){var t;return f("Circle",{center:n.getCenter(),radius:1.15*s(n.getCenter(),n.getBounds().getNorthEast())}).getBounds()}function r(n){var t=g.fromLatLngToDivPixel(n);return f("LatLngBounds",g.fromDivPixelToLatLng(f("Point",t.x-x,t.y+x)),g.fromDivPixelToLatLng(f("Point",t.x+x,t.y-x)))}function a(){var a,u,s,c,p,d,g=n.getZoom(),m={},P=[],x={};d=""+g,g>3&&(u=e(),h(L,(function(n,t){u.contains(n.getPosition())||(d+="-"+t,x[t]=!0,n.getMap()&&n.setMap(null))}))),y&&h(L,(function(n,t){x[t]||y(n)||(d+="-"+t,x[t]=!0,n.getMap()&&n.setMap(null))})),d!==l&&(l=d,h(L,(function(e,d){x[d]||(a=[d],u=r(e.getPosition()),b&&h(i(L,d+1),(function(n,t){!x[t+=d+1]&&u.contains(n.getPosition())&&(a.push(t),x[t]=!0)})),c=a.join("-"),m[c]=!0,B[c]||(p=a.map((function(n){return L[n]})),(s=t.cb(i(p)))?(u=f("LatLngBounds"),h(p,(function(n){u.extend(n.getPosition()),n.getMap()&&n.setMap(null)})),(s=o(s)).position=u.getCenter(),B[c]=new T(w,i(p),C(n,s),u),P.push(B[c])):h(p,(function(t){t.getMap()||t.setMap(n)}))))})),h(v(B),(function(n){m[n]||(B[n].overlay.setMap(null),delete B[n])})),P.length&&h(I,(function(n){n(P)})))}function u(){clearTimeout(p),p=setTimeout(a,100)}function c(){A.event.addListener(n,"zoom_changed",u),A.event.addListener(n,"bounds_changed",u),a()}var p,d,l,g,y,w=this,L=[],x=(t.size||200)>>1,b=!0,B={},I=[];(t=t||{}).markers=t.markers||[],w._b=function(n){n(m(B)),I.push(n)},w.markers=function(){return i(L)},w.groups=function(){return m(B)},w.enable=function(){b||(b=!0,l="",u())},w.disable=function(){b&&(b=!1,l="",u())},w.add=function(n){L.push(n),l="",u()},w.remove=function(n){L=L.filter((function(t){return t!==n})),l="",u()},w.filter=function(n){y!==n&&(y=n,l="",u())},t.markers.map((function(n){n.position=P(n.position),L.push(f("Marker",n))})),d=setInterval((function(){(g=M(n))&&(clearInterval(d),c())}),10)}function B(n,t){var e=this;v(t[0]).forEach((function(n){e[n]=function(){var o=[],r=i(arguments);return t.forEach((function(t){o.push(t[n].apply(t,r))})),"get"===n?o.length>1?o:o[0]:e}})),e.$=n}function I(t,e){function s(){return{$:t,get:M.get}}function c(t,e,o,r){var a=arguments.length>3;a||(r=o),n.each(t,(function(n,t){h(e,(function(e){var u=e instanceof T,c=u||e instanceof A.OverlayView,p=c?e.$.get(0):e;A.event["add"+(c?"Dom":"")+"Listener"+(r?"Once":"")](p,n,(function(n){h(t,(function(t){if(O(t))if(u)t.call(s(),void 0,e,e.cluster,n);else if(a){var r=i(o);r.unshift(e),r.push(n),t.apply(s(),r)}else t.call(s(),e,n)}))}))}))}))}function p(n){return function(t){if(k(t)){var e=[],o=t.map((function(t){return n.call(M,t).then((function(n){e.push(n)}))}));return a(o).then((function(){return m.push(e),e}))}return n.apply(M,arguments).then((function(n){return m.push(n),n}))}}function l(n){return function(){var t=i(arguments);return x=x.then((function(e){return O(t[0])?j(t[0].call(s(),e)).then((function(e){return t[0]=e,n.apply(M,t)})):j(n.apply(M,t))}))}}var v,m=[],x=j(),M=this;M.map=l((function(n){return v||w(n,"center",(function(n){return v=f("Map",t.get(0),n),m.push(v),v}))})),g("Marker:position Circle:center InfoWindow:position:0 Polyline:path Polygon:paths",(function(n){var t=(n=n.split(":"))[1]||"";M[n[0].toLowerCase()]=l(p((function(e){return(t.match(/^path/)?L:w)(e,t,(function(t){return"0"!==n[2]&&(t.map=v),f(n[0],t)}))})))})),g("TrafficLayer TransitLayer BicyclingLayer",(function(n){M[n.toLowerCase()]=l((function(){var t=f(n);return m.push(t),t.setMap(v),t}))})),M.kmllayer=l(p((function(n){return(n=o(n)).map=v,j(f("KmlLayer",n))}))),M.rectangle=l(p((function(n){return y(n,(function(n){return n.map=v,f("Rectangle",n)}))}))),M.overlay=l(p((function(n){function t(n){return C(v,n)}return(n=o(n)).bounds?y(n,t):w(n,"position",t)}))),M.groundoverlay=l((function(n,t,e){return y({bounds:t},(function(t){(e=o(e)).map=v;var i=f("GroundOverlay",n,t.bounds,e);return m.push(i),i}))})),M.styledmaptype=l((function(n,t,e){var o=f("StyledMapType",t,e);return m.push(o),v.mapTypes.set(n,o),o})),M.streetviewpanorama=l((function(t,e){return w(e,"position",(function(e){var o=f("StreetViewPanorama",n(t).get(0),e);return v.setStreetView(o),m.push(o),o}))})),M.route=l((function(n){var t=S();return(n=o(n)).origin=P(n.origin),n.destination=P(n.destination),d("DirectionsService").route(n,(function(n,e){m.push(n),t.resolve(e===A.DirectionsStatus.OK&&n)})),t})),M.cluster=l((function(n){var t=new b(v,o(n));return m.push(t),u(t)})),M.directionsrenderer=l((function(t){var e;return t&&((t=o(t)).map=v,t.panel&&(t.panel=n(t.panel).get(0)),e=f("DirectionsRenderer",t)),m.push(e),e})),M.latlng=l(p((function(n){return w(n,"latlng",(function(n){return m.push(n.latlng),n.latlng}))}))),M.fit=l((function(){var n=f("LatLngBounds");return h(m,(function(t){t!==v&&h(t,(function(t){t&&(t.getPosition&&t.getPosition()?n.extend(t.getPosition()):t.getBounds&&t.getBounds()?(n.extend(t.getBounds().getNorthEast()),n.extend(t.getBounds().getSouthWest())):t.getPaths&&t.getPaths()?h(t.getPaths().getArray(),(function(t){h(t.getArray(),(function(t){n.extend(t)}))})):t.getPath&&t.getPath()?h(t.getPath().getArray(),(function(t){n.extend(t)})):t.getCenter&&t.getCenter()&&n.extend(t.getCenter()))}))})),n.isEmpty()||v.fitBounds(n),!0})),M.wait=function(n){x=x.then((function(t){var e=S();return setTimeout((function(){e.resolve(t)}),n),e}))},M.then=function(n){O(n)&&(x=x.then((function(t){return j(n.call(s(),t)).then((function(n){return r(n)?t:n}))})))},M.catch=function(n){O(n)&&(x=x.then(null,(function(t){return j(n.call(s(),t))})))},g("on once",(function(n,t){M[n]=function(n){var e=n;e&&("string"==typeof e&&((e={})[n]=i(arguments,1)),x.then((function(n){if(n){if(n instanceof b)return n._b((function(n){n&&n.length&&c(e,n,t)})),c(e,n.markers(),[void 0,n],t);c(e,n,t)}})))}})),M.get=function(n){return r(n)?m.map((function(n){return k(n)?n.slice():n})):(0>n&&(n=m.length+n),k(m[n])?m[n].slice():m[n])},e&&M.map(e)}var A,E,R={},j=n.when,D=n.extend,k=n.isArray,O=n.isFunction,S=n.Deferred;j(function(){var o,i=S(),r="__gmap3";return n.holdReady(!0),c((function(){t.google&&t.google.maps||!1===E?i.resolve():(t[r]=function(){delete t[r],i.resolve()},(o=e.createElement("script")).type="text/javascript",o.src="https://maps.googleapis.com/maps/api/js?callback="+r+(E?"&"+("string"==typeof E?E:p(E)):""),n("head").append(o))})),i}()).then((function(){n.holdReady(!1)})),n.gmap3=function(n){E=n},n.fn.gmap3=function(e){var o=[];return A=t.google.maps,this.each((function(){var t=n(this),i=t.data("gmap3");i||(i=new I(t,e),t.data("gmap3",i)),o.push(i)})),new B(this,o)}}(jQuery,window,document),jQuery(window).load((function(){function n(n){var t=jQuery(document).width()>480,e=n.data("map-scrollwheel"),o=n.data("maptype"),i=n.data("mapzoom"),r=n.data("address1"),a=n.data("address2"),u=n.data("address3"),s=n.data("address4"),c=n.data("position1"),p=n.data("position2"),d=n.data("position3"),f=n.data("position4"),l=n.data("title1"),g=n.data("title2"),h=n.data("title3"),v=n.data("title4"),m=n.data("mapcenter"),y=n.data("geocode"),w,L;if("ROADMAP"==o)var P=google.maps.MapTypeId.ROADMAP;else if("HYBRID"==o)var P=google.maps.MapTypeId.HYBRID;else if("TERRAIN"==o)var P=google.maps.MapTypeId.TERRAIN;else if("SATELLITE"==o)var P=google.maps.MapTypeId.SATELLITE;else var P=google.maps.MapTypeId.ROADMAP;if(e)var x=e;else var x=!1;w=c?[{position:c.split(","),data:l?'<div class="mapinfo"><h5>'+l+"</h5>"+r+"</div>":'<div class="mapinfo">'+r+"</div>"}]:[{address:r,data:l?'<div class="mapinfo"><h5>'+l+"</h5>"+r+"</div>":'<div class="mapinfo">'+r+"</div>"}],(a||p)&&(p?w.push({position:p.split(","),data:g?'<div class="mapinfo"><h5>'+g+"</h5>"+a+"</div>":'<div class="mapinfo">'+a+"</div>"}):w.push({address:a,data:g?'<div class="mapinfo"><h5>'+g+"</h5>"+a+"</div>":'<div class="mapinfo">'+a+"</div>"})),(u||d)&&(d?w.push({position:d.split(","),data:h?'<div class="mapinfo"><h5>'+h+"</h5>"+u+"</div>":'<div class="mapinfo">'+u+"</div>"}):w.push({address:u,data:h?'<div class="mapinfo"><h5>'+h+"</h5>"+u+"</div>":'<div class="mapinfo">'+u+"</div>"})),(s||f)&&(f?w.push({position:f.split(","),data:v?'<div class="mapinfo"><h5>'+v+"</h5>"+s+"</div>":'<div class="mapinfo">'+s+"</div>"}):w.push({address:s,data:v?'<div class="mapinfo"><h5>'+v+"</h5>"+s+"</div>":'<div class="mapinfo">'+s+"</div>"})),L=c?{center:m.split(","),zoom:i,draggable:t,mapTypeControl:!0,mapTypeId:P,scrollwheel:x,panControl:!0,rotateControl:!1,scaleControl:!0,streetViewControl:!0,zoomControl:!0}:{address:m,zoom:i,draggable:t,mapTypeControl:!0,mapTypeId:P,scrollwheel:x,panControl:!0,rotateControl:!1,scaleControl:!0,streetViewControl:!0,zoomControl:!0},n.gmap3(L).marker(w).infowindow({content:""}).then((function(n){var t=this.get(0),e=this.get(1);jQuery(e).each((function(){this.addListener("click",(function(){n.setContent(this.data),n.open(t,this)}))}))}))}jQuery(".kt-gmap-js-init").each((function(){n(jQuery(this))}))}));