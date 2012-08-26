/*
 * (c)2011 John Pezzetti
 *
 * addDomLoadEvent is (c)2006 Jesse Skinner/Dean Edwards/Matthias Miller/John Resig
 *
 * For more info, see:
 * http://www.johnpezzetti.com/?p=141
 * http://www.thefutureoftheweb.com/blog/adddomloadevent
 * http://www.alexandre-gomes.com/?p=115
 * http://stackoverflow.com/questions/681087/how-can-i-detect-a-scrollbar-presence-using-javascript-in-html-iframe
 *
 */
 
addDOMLoadEvent = (function(){
    // create event function stack
    var load_events = [],
        load_timer,
        script,
        done,
        exec,
        old_onload,
        init = function () {
            done = true;

            // kill the timer
            clearInterval(load_timer);
 
            // execute each function in the stack in the order they were added
            while (exec = load_events.shift())
                exec();
 
            if (script) script.onreadystatechange = '';
        };
 
    return function (func) {
        // if the init function was already ran, just run this function now and stop
        if (done) return func();
 
        if (!load_events[0]) {
            // for Mozilla/Opera9
            if (document.addEventListener)
                document.addEventListener("DOMContentLoaded", init, false);
 
            // for Internet Explorer
            /*@cc_on @*/
            /*@if (@_win32)
                document.write("<script id=__ie_onload defer src=//0><\/scr"+"ipt>");
                script = document.getElementById("__ie_onload");
                script.onreadystatechange = function() {
                    if (this.readyState == "complete")
                        init(); // call the onload handler
                };
            /*@end @*/
 
            // for Safari
            if (/WebKit/i.test(navigator.userAgent)) { // sniff
                load_timer = setInterval(function() {
                    if (/loaded|complete/.test(document.readyState))
                        init(); // call the onload handler
                }, 10);
            }
 
            // for other browsers set the window.onload, but also execute the old window.onload
            old_onload = window.onload;
            window.onload = function() {
                init();
                if (old_onload) old_onload();
            };
        }
 
        load_events.push(func);
    }
})();
 
function getScrollerWidth() {
    var scr = null;
    var inn = null;
    var wNoScroll = 0;
    var wScroll = 0;
 
    // Outer scrolling div
    scr = document.createElement('div');
    scr.style.position = 'absolute';
    scr.style.top = '-1000px';
    scr.style.left = '-1000px';
    scr.style.width = '100px';
    scr.style.height = '50px';
    // Start with no scrollbar
    scr.style.overflow = 'hidden';
 
    // Inner content div
    inn = document.createElement('div');
    inn.style.width = '100%';
    inn.style.height = '200px';
 
    // Put the inner div in the scrolling div
    scr.appendChild(inn);
    // Append the scrolling div to the doc
    document.body.appendChild(scr);
 
    // Width of the inner div sans scrollbar
    wNoScroll = inn.offsetWidth;
    // Add the scrollbar
    scr.style.overflow = 'auto';
    // Width of the inner div width scrollbar
    wScroll = inn.offsetWidth;
 
    // Remove the scrolling div from the doc
    document.body.removeChild(
        document.body.lastChild);
 
    // Pixel width of the scroller
    return (wNoScroll - wScroll);
}
 
function preventPageShift() {
 
  var root= document.compatMode=='BackCompat'? document.body : document.documentElement;
  var isVerticalScrollbar= root.scrollHeight>root.clientHeight;
  if (isVerticalScrollbar){
    var scrollWidth = getScrollerWidth(); //Returns '0' in IE7, which we want
    document.body.style.marginLeft = scrollWidth+"px"; //Have to use margin for webkit browsers

	document.getElementById( "page-border-menu" ).style.marginLeft = "-" + scrollWidth + "px";
	document.getElementById( "page-border-menu" ).style.width = "99.7%";
  }
  else document.body.style.marginLeft = 0; //In case window is resized
}
 
addDOMLoadEvent(preventPageShift);
window.onresize = function(){preventPageShift();} //Makes adjustments on the fly