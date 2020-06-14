jQuery(function($){
  $(window).scroll(function(){
    if($(this).scrollTop()>80){
      $('.pagetop-btn').fadeIn();
    }else{
      $('.pagetop-btn').fadeOut();
    }
  });


  $('.anytime-q').click(function(){
    if($(this).hasClass('open-class')){
      $(this).toggleClass('open-class');
      $(this).next('.anytime-a').slideUp();
      $(this).find('.fa-chevron-down').show();
      $(this).find('.fa-chevron-up').hide();
    }else{
      $(this).toggleClass('open-class');
      $(this).next('.anytime-a').slideDown();
      $(this).find('.fa-chevron-down').hide();
      $(this).find('.fa-chevron-up').show();
    }
  });

$('.q-text').mouseover(function(){
  $(this).children('span').css('text-decoration','underline');
});

$('.q-text').mouseout(function(){
  $(this).children('span').css('text-decoration','none');
});




})
