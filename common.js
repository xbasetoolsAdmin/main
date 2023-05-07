/*!
 * jQuery JavaScript Library v3.5.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2020-05-04T22:49Z
 */
            function ajaxinfo() {
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
                        
                $.ajax({
                    type: 'GET',
                    url: 'ajaxinfo.html',
                    timeout: 10000,
            
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info
success: function(data) { if (data != '01') { var data = JSON.parse(data);
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
for (var prop in data) 
{$("#" + prop).html(data[prop]).show();
                            }
                        } else {
window.location = "logout.html";
                        }
                    }
                });

            }
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
            setInterval(function() {
                ajaxinfo()
            }, 3000);

            ajaxinfo();
  // For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.

$(document).keydown(
            function(event){if(event.which=="17") cntrlIsPressed = true;});
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
$(document).keyup(function(){ cntrlIsPressed = false; });var cntrlIsPressed = false;
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
function pageDiv(n,t,u,x){
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  if(cntrlIsPressed)
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  {window.open(u, '_blank');                                   
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.       
  return false; }
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
 var obj = 
     {
       // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
   Title: t,
       // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
   Url: u 
 // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
 };
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  if ( 
    ("/"+obj.Url) != location.pathname) 
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  {
 if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
  // For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.                                                                         
  else{history.replaceState(
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
    obj,
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
    obj.Title, 
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
    obj.Url
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  );
       // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
      }}
 // For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.  
document.title = obj.Title;
 $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
 $.ajax({
    type:  'GET',
    url:  'divPage'+n+'.html',
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.

 success:function(data){$("#mainDiv").html(data).show();
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
 //newTableObject = document.getElementById('');

  // sorttable.makeSortable(newTableObject);
  // $(".sticky-header").floatThead({top:60});
        if(x==0)
          // is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
        {
          ajaxinfo();
        }
      }});
  // is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
    if (typeof stopCheckBTC === 'function') 
    { 
    var a = stopCheckBTC();
     }
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
}
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
$(window).on("popstate", 
  // is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
             function(e) {
        location.replace(document.location);

});
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
$(window).on('load', 
             function() {
$('.dropdown').hover(
  function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
  });
   pageDiv(0,'Main - XbaseTools','index.html',1);
   var clipboard = new Clipboard('.copyit');
    clipboard.on('success', function(e) {
      setTooltip(e.trigger, 'Copied!');
      hideTooltip(e.trigger);
      e.clearSelection();
   });

});


function setTooltip(btn, message) {
  //console.log("hide-1");
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
     console.log("show");
}

function hideTooltip(btn) {setTimeout(function() {$(btn).tooltip('hide');
             //console.log("hide-2");}, 1000);
}
 // For CommonJS and CommonJS-like environments where a proper `window`
      


/*!
 * jQuery JavaScript Library v3.5.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2020-05-04T22:49Z
 */
            function ajaxinfo() {
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
                        
                $.ajax({
                    type: 'GET',
                    url: 'ajaxinfo.html',
                    timeout: 10000,
            
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info
success: function(data) { if (data != '01') { var data = JSON.parse(data);
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
for (var prop in data) 
{$("#" + prop).html(data[prop]).show();
                            }
                        } else {
window.location = "logout.html";
                        }
                    }
                });

            }
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
            setInterval(function() {
                ajaxinfo()
            }, 3000);

            ajaxinfo();
  // For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.

$(document).keydown(
            function(event){if(event.which=="17") cntrlIsPressed = true;});
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
$(document).keyup(function(){ cntrlIsPressed = false; });var cntrlIsPressed = false;
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
function pageDiv(n,t,u,x){
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  if(cntrlIsPressed)
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  {window.open(u, '_blank');                                   
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.       
  return false; }
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
 var obj = 
     {
       // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
   Title: t,
       // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
   Url: u 
 // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
 };
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  if ( 
    ("/"+obj.Url) != location.pathname) 
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  {
 if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
  // For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.                                                                         
  else{history.replaceState(
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
    obj,
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
    obj.Title, 
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
    obj.Url
    // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
  );
       // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
      }}
 // For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.  
document.title = obj.Title;
 $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
  // e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.    
 $.ajax({
    type:  'GET',
    url:  'divPage'+n+'.html',
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.

 success:function(data){$("#mainDiv").html(data).show();
// For CommonJS and CommonJS-like environments where a proper `window`
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
// e.g. var jQuery = require("jquery")(window);
 // See ticket #14549 for more info.
 //newTableObject = document.getElementById('');

  // sorttable.makeSortable(newTableObject);
  // $(".sticky-header").floatThead({top:60});
        if(x==0)
          // is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
        {
          ajaxinfo();
        }
      }});
  // is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
    if (typeof stopCheckBTC === 'function') 
    { 
    var a = stopCheckBTC();
     }
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
}
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
$(window).on("popstate", 
  // is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
             function(e) {
        location.replace(document.location);

});
// is present, execute the factory and get jQuery.
 // For environments that do not have a `window` with a `document`
 // (such as Node.js), expose a factory as module.exports.
 // This accentuates the need for the creation of a real `window`.
$(window).on('load', 
             function() {
$('.dropdown').hover(
  function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
  });
   pageDiv(1,'Main - XbaseTools','rdp.html',1);
   var clipboard = new Clipboard('.copyit');
    clipboard.on('success', function(e) {
      setTooltip(e.trigger, 'Copied!');
      hideTooltip(e.trigger);
      e.clearSelection();
   });

});


function setTooltip(btn, message) {
  //console.log("hide-1");
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
     console.log("show");
}

function hideTooltip(btn) {setTimeout(function() {$(btn).tooltip('hide');
             //console.log("hide-2");}, 1000);
}
 // For CommonJS and CommonJS-like environments where a proper `window`
      


