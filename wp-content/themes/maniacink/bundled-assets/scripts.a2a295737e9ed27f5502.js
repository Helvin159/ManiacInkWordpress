!function(e){function n(n){for(var o,s,l=n[0],c=n[1],u=n[2],p=0,d=[];p<l.length;p++)s=l[p],Object.prototype.hasOwnProperty.call(r,s)&&r[s]&&d.push(r[s][0]),r[s]=0;for(o in c)Object.prototype.hasOwnProperty.call(c,o)&&(e[o]=c[o]);for(i&&i(n);d.length;)d.shift()();return a.push.apply(a,u||[]),t()}function t(){for(var e,n=0;n<a.length;n++){for(var t=a[n],o=!0,l=1;l<t.length;l++){var c=t[l];0!==r[c]&&(o=!1)}o&&(a.splice(n--,1),e=s(s.s=t[0]))}return e}var o={},r={0:0},a=[];function s(n){if(o[n])return o[n].exports;var t=o[n]={i:n,l:!1,exports:{}};return e[n].call(t.exports,t,t.exports,s),t.l=!0,t.exports}s.m=e,s.c=o,s.d=function(e,n,t){s.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},s.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},s.t=function(e,n){if(1&n&&(e=s(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(s.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var o in e)s.d(t,o,function(n){return e[n]}.bind(null,o));return t},s.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return s.d(n,"a",n),n},s.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},s.p="/wp-content/themes/maniacink/bundled-assets/";var l=window.webpackJsonp=window.webpackJsonp||[],c=l.push.bind(l);l.push=n,l=l.slice();for(var u=0;u<l.length;u++)n(l[u]);var i=c;a.push([1,1]),t()}([,function(e,n,t){"use strict";t.r(n);var o=t(0),r=t.n(o);new class{constructor(){this.events()}events(){r()("#submit").on("click",this.messageDispatcher)}messageDispatcher(){var e={title:r()("#name").val(),phone:r()("#pNumber").val(),email:r()("#address").val(),explanation:r()("#explanation").val(),concept:r()("#concept").val(),covid:r()("#covid").val(),status:"private"};r.a.ajax({beforeSend:e=>{e.setRequestHeader("X-WP-Nonce",maniacData.nonce)},url:maniacData.root_url+"/wp-json/maniac/v1/new-message",type:"POST",data:e,success:n=>{console.log(n),console.log("good"),console.log(e),setTimeout((function(){r()("#contactForm").addClass("d-none"),r()("#thankYou").removeClass("d-none")}),850)},error:n=>{console.log("sorry"),console.log(n),console.log(e),r()("#contactForm").addClass("d-none"),r()("#thankYou").removeClass("d-none")}})}}}]);