

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
       autoplay:true,
       autohoverpause:true,
       autoplaytimeout:100,
       items:4,
       nav:true,
       loop:true,
       lazyLoad:true,
       margin:5,
       padding:5,
       stagePadding:5,
       responsive:{
        0:{
            items:1,
            dots:false,
        },
        485:{
            items:2,
            dots:false
        },
        728:{
            items:2,
            dots:false
        },
        960:{
            items:2,
            dots:false
        },
        1000:{
            items:4,
            dots:true
        }

    }
    })

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



//search  bar

var submitIcon = $('.sb-icon-search');
var submitInput = $('.sb-search-input');
var searchBox = $('.sb-search');
var isOpen = false;

$(document).mouseup(function(){
    if(isOpen == true){
    submitInput.val('');
    $('.sb-search-submit').css('z-index','-999');
    submitIcon.click();
    }
});

submitIcon.mouseup(function(){
    return false;
});

searchBox.mouseup(function(){
    return false;
});
        
submitIcon.click(function(){
    if(isOpen == false){
        searchBox.addClass('sb-search-open');
        isOpen = true;
    } else {
        searchBox.removeClass('sb-search-open');
        isOpen = false;
    }
});

})

/*goto top js*/


