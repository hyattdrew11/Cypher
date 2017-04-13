$('document').ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
          $('.nav_text').hide();
          var nav_text_toggle = 1;
          $('#nav_text_toggle').click(function() {
            if (nav_text_toggle == 1)
              $('.nav_text').show();
            else if (nav_text_toggle == 2) {
               $('.nav_text').hide();
               nav_text_toggle = 0;
            }

            nav_text_toggle++;
        });
    });

$('document').ready(function() {

          var nav_text_toggle = 1;
          $('#nav_text_toggle').click(function() {
            if (nav_text_toggle == 1) {
              $('.nav_bar').css('width' , '170px');
              $('.nav_list').css('width' , '170px');
            }
            else if (nav_text_toggle == 2) {
              $('.nav_bar').css('width' , '39px');
               $('.nav_list').css('width' , '37px');
               nav_text_toggle = 0;
            }

            nav_text_toggle++;
        });
    });
$('document').ready(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() > 100){
            $('#goTop').stop().animate({
                top: '70px'    
                }, 500);
        }
        else{
            $('#goTop').stop().animate({
               top: '-100px'    
            }, 500);
        }
    });
    $('#goTop').click(function() {
        $('html, body').stop().animate({
           scrollTop: 0
        }, 500, function() {
           $('#goTop').stop().animate({
               top: '-100px'    
           }, 500);
        });
    });
});    