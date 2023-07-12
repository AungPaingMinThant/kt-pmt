
;(function ($) {
"use strict";
    $.jResize = function (options) {

    	$.jResize.defaults = {
            viewPortSizes   : ["320px", "480px", "540px", "600px", "768px", "960px", "1024px", "1280px"],
            backgroundColor : '000',
            fontColor       : 'FFF'
        }

        options = $.extend({}, $.jResize.defaults, options);

        // Variables
        var resizer        = '<div class="viewports" style="position:fixed;top:0;left:0;right:0;overflow:auto;z-index:9999;background:#'
        	 	   + options.backgroundColor + ';color:#' + options.fontColor + ';box-shadow:0 0 3px #222;"><ul class="viewlist">'
                  	   + '</ul><div style="clear:both;"></div></div>';

        var viewPortWidths = options.viewPortSizes;

        var viewPortList   = 'display:inline-block;cursor:pointer;font-size:10px;line-height:17px;text-align:center;width:6%;'
        		   + 'border-right:1px solid #555;padding:13px 5px;';

        var credit         = '<div style="float:right;padding:13px 10px;font-size:12px;line-height:17px;"><span style="padding-right:10px;">'+$("#language").html()+'</span></div>';

        // Wrap all HTML inside the <body>
        $('#Demo').wrapInner('<div id="resizer" />');

        // Insert our resizing plugin
        $('#resizer').before(resizer);

        // Loop through the array, using the each to dynamically generate our ViewPort lists
        $.each(viewPortWidths, function (go, className) {
            $('.viewlist').append($('<li class="' + className + '"' + ' style="' + viewPortList + '">' + className + '</li>'));
            $('.' + className + '').click(function () {
                $('#resizer').animate({
                    width: '' + className + ''
                }, 300);
            });
        });

        // Prepend our Reset button
        $('.viewlist').prepend( '<li class="Label" style="color:black;line-height:17px;">  .</li>' ,'<li class="reset" style="' + viewPortList + '">Full Width</li>', credit);
        
        // Slidedown the viewport navigation and animate the resizer
        var height = $('.viewlist').outerHeight();
        $('.viewports').hide().slideDown('300');
        $('#resizer').css({margin: '0 auto'}).animate({marginTop : height});

        // Allow for Reset
        $('.reset').click(function () {
            $('#resizer').css({
                width: 'auto'
            });
        });
                
    };
	

	
	

})(jQuery);

function changeLang(v){
	document.location.href="?langset="+v;
}