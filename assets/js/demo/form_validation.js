"use strict";$(document).ready(function(){$.extend($.validator.defaults,{invalidHandler:function(c,a){var d=a.numberOfInvalids();if(d){var b=d==1?"You missed 1 field. It has been highlighted.":"You missed "+d+" fields. They have been highlighted.";noty({text:b,type:"error",timeout:2000})}},errorPlacement:function(a,b){if(b.attr("type")==="file"&&b.data("style")==="fileinput"){a.appendTo(b.closest("div.fileinput-holder").parent("div"))}else{a.insertAfter(b)}}});$("#validate-1").validate();$("#validate-2").validate();$("#validate-3").validate();$("#validate-4").validate()});