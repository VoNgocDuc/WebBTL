jQuery( document ).ready(function( $ ) {
    // load hiệu ứng khi khởi động preload bong mơ 0, 
        //thự hiện trong 0,6s
        //sau khi hoàn thành ẩn preloader đi
    
        $("#preloader").animate({
            'opacity': '0'
        }, 600, function(){
            setTimeout(function(){
                $("#preloader").css("visibility", "hidden").fadeOut();
            }, 300);
        });
    
    });  
