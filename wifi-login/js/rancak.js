var open_sticky = function(){
  "use strict";
  $('.open-sticky').click(function(){
    
    return false;
  });	
};



function CopyLink() {
  var copyText = document.getElementById("CopyLinkField");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  $('.popup-copied').slideDown('fast').delay(2000).slideUp('fast');
}



$(document).ready(function(){
  "use strict";
  open_sticky();
});