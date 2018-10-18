$(document).ready(function(){


  
    //wrap all iframe videos in class to make responsive
    var $iframes = $("iframe");

    $iframes.each(function () {
        $(this).removeAttr("width");
        $(this).removeAttr("height");
        $(this).wrap("<div class='video-responsive'></div>");
    });


   $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });



    $(".button-mobile a").click(function(){
        $(".overlay").fadeToggle(200);
       $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});

$('.overlay').on('click', function(){
    $(".overlay").fadeToggle(200);   
    $(".button a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;

});
