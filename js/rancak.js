/* scroll script */
var all_scroll = function(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
      $('#btt').hide();
    }
  });  
};
/* end scroll script */

var back_to_top = function(){
  "use strict";
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
};

var open_sticky = function(){
  "use strict";
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('title');
	$(this).toggleClass('show-sticky');
	$('.open-sticky').not(this).removeClass('show-sticky');
    $('#float-' + get_id).slideToggle('fast');
    $('.float-bottom').not('#float-' + get_id).slideUp('fast');
	$('.popup-play-video').slideUp('fast');
	$('.ppv-box > iframe').attr('src','');
    return false;
  });	
};

var sticky_bottom_close = function(){
  "use strict";
  $(".sticky-bottom-close").click(function(){
    $(".sticky-bottom").hide();
    $("#btt").css("bottom", 70);
    return false;
  });
};

var toggle_menu = function(){
  "use strict";
  $(".menu-toggle").click(function(){
    $(this).parent().toggleClass('menu-toggle-open');
    $(this).parent().find('.menu-sub').slideToggle('fast');
    return false;
  });
};

var sticky_maincolumn_right = function(){
  "use strict";
  var $window = $(window);
  function checkWidth(){
    var windowsize = $window.width();
    if (windowsize > 1000){
      $window.scroll(function(){
		var sc = $window.scrollTop();
        var right_container_height = $('.column-small-container').outerHeight();
		if(sc >= 0){
          $('.column-small-container').css({
			'top':'calc(100% - ' + right_container_height + 'px - 21px)' //--space-4
          });
		}
      });
    }
  }
  checkWidth();
  //$(window).resize(checkWidth);
};



function CopyURL(text) {
  var inputc = document.body.appendChild(document.createElement("input"));
  inputc.value = window.location.href;
  inputc.focus();
  inputc.select();
  document.execCommand('copy');
  inputc.parentNode.removeChild(inputc);
  $('.popup-copied').slideDown('fast').delay(2000).slideUp('fast');
};



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
  toggle_menu();
  sticky_bottom_close();
  sticky_maincolumn_right();
});