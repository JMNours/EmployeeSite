$(document).ready(function()
{
  $(".btn").hover(
    function(){
      $(this).addClass('shine');
  },
    function(){
      $(this).removeClass('shine');
    });
    

  $(".form input").focus(function(){
    $(this).addClass('shine');
  });
  $(".form input").blur(function(){
    $(this).removeClass('shine');
  });


})