
jQuery(document).ready(function($){
    $(document).foundation();

    // mobile_menu();
    
    // $(window).on('resize', function(){
    //     mobile_menu();
    // });
    
    $('body').on('click','.hamburger',function(){
        toggle_menu();
    });

    $('body.mobile').on('click','.wrapper-menu.open',function(){
        toggle_menu();
    });

    // function mobile_menu(){
    //     var win = $(window); 
    //     if (win.width() <= 1200) {
    //         $('body').addClass('mobile');
    //     }else{
    //         $('body').removeClass('mobile');
    //     }
    // }
    
    function toggle_menu(){
        $('.menu').toggleClass('open');
        $('.hamburger').toggleClass('is-active');
        $('.wrapper-menu').toggleClass('open');
    }

    $(window).scroll(function() {
        if ($(this).scrollTop() >= 200) { // this refers to window
            $('.topbar').addClass('back');
            $('.topbar .logo').fadeIn('fast');
        }else{
            $('.topbar .logo').fadeOut('fast');
            $('.topbar').removeClass('back');
        }
    });
});
