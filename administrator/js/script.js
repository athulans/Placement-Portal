
$(document).ready(function() {
 /* 
  $(".animsition").animsition({
  
    inClass               :   'fade-in-up-sm',
    outClass              :   'fade-out-down-sm',
    inDuration            :    1500,
    outDuration           :    800,
    linkElement           :   '.animsition-link',
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    true,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
  });
*/
  $(window).bind('scroll', function() {
    var navHeight = 190; // custom nav height
    if($(window).scrollTop() > navHeight){
      $('#mynav').addClass('navbar-fixed-top');
    }else{
      $('#mynav').removeClass('navbar-fixed-top');
    }
  });

});