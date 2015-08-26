$(document).ready(function() {
    $('.menu_responsive').click(function() {
        $(this).toggleClass('active');
        $('.menu ul').slideToggle( 400 );
    });

    window.addEventListener('resize', function(event){
    if($(window).width()>985){
    $('.navigation ul').css('display','inline-block')
    }
    else $('.navigation ul').css('display','none')
  });
});