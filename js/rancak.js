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
	$('.open-sticky[title=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[title=' + get_id +']').removeClass('show-sticky');
    $('#float-' + get_id).slideToggle('fast');
    $('.rancak-popup').not('#float-' + get_id).slideUp('fast');
    return false;
  });	
};



var close_share = function(){
  "use strict";
  $('.popup-share-overlay, .popup-share-close').click(function(){
	$('.popup-share').slideUp('fast');
	$('.open-sticky').removeClass('show-sticky');
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



function CopyLink() {
  var copyText = document.getElementById("CopyLinkField");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  open_sticky();
  close_share();
});