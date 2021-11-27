
$('.owl-carousel').owlCarousel({
       autoplay:true,
       autoHoverPause:true,
       autoplaytimeout:100,
       nav:true,
       loop:true,
       items:4,
       stagePadding:5,
       responsive:{
        0:{
            items:1,
            nav:false
        },
        485:{
            items:2,
        
        },
        728:{
            items:2,
           
        },
        960:{
            items:3,
           
        },
        1000:{
            items:4,
        }


    }

})



/*goto top js*/
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
