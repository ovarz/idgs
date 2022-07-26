/* scroll script */
var all_scroll = function(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('header').addClass('header-sticky');	
    }

    else{
      $('header').removeClass('header-sticky');
    }
  });  
};
/* end scroll script */



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
  open_sticky();
});