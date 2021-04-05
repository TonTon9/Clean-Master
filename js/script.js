$(document).ready(function(){
    $("form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "http://master-clean.sk/wp-content/themes/MasterClean/mail.php", //Change
            data: th.serialize()
        }).done(function() {
            alert("Сообщение отправленно");
            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });
    $('.info_slider').slick({
        arrows:false,
        slidesToShow: 3,
        swipe:false,
        draggable:false,
        centerMode:true,
        autoplay:true,
        speed:1000,
        // infinite:false,
        autoplaySpeed:4000,
        pauseOnHover:false,
        pauseOnFocus:false,
        initialSlide:3,
        responsive:[
            {
                breakpoint: 880,
                settings: {
                    slidesToShow: 2,
                    wariableWidth: true,
                }
            },{
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }
            ,{
                breakpoint: 550,
                settings: {
                    wariableWidth: true,
                    slidesToShow: 1,
                }
            }
        ]
    });
    $('.header_bur').click(function(){
        $(".header__body").toggleClass('active__header');
        $(".header_bur").toggleClass('active__bur');
        $(".header__logo__bur").toggleClass('active__logo');
    });
    $('.map__poster').click(function(){
        $(this).css({"display":"none"});        
    });
    $('.map__kart__body').click(function(){
        $('.img').addClass('cart_car-active');    
        $('body').addClass("hidden");      
    });
    $('.img').click(function(){
        $('.img').removeClass('cart_car-active'); 
        $('body').removeClass("hidden");       
    });
    $('.header__button_1,.footer__cal').click(function(){
        $('.call1').addClass('visible');
    });
    $('.call__pole').click(function(){
        $('.call1').removeClass('visible');
    });
	$(window).load(function(){
        $('.fon2').addClass('onload');
    });
	var heig = document.querySelector('.header');
    let up;
    $(window).scroll(function(){        
        up = (heig.getBoundingClientRect().height);        
        if(pageYOffset>up){
            $('.up').addClass('up_visible');
        }
        if(pageYOffset<up){

            $('.up').removeClass('up_visible');
			$('.up').css({"background":"#3A9A47"});
        }
    });
    $('.up').click(function(){
        $(this).css({"background":"rgb(246, 250, 6)"});
    });
});
