var open_sticky = function(){
  "use strict";
  $('.open-sticky').click(function(){
    
    return false;
  });	
};



var custom_password = function(){
  "use strict";
  $('.form-password-toggle').click(function(){
    if($(this).is('.form-password-hidden')){
     $(this).removeClass('form-password-hidden').addClass('form-password-show');
     $(this).parent().find("input").attr("type","text");
    }else{
     $(this).removeClass('form-password-show').addClass('form-password-hidden');
     $(this).parent().find("input").attr("type","password");
    }
	$(this).find('.fas').toggle();
  });
};



$(document).ready(function(){
  "use strict";
  open_sticky();
  custom_password();
});