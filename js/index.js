$(function(){

    var windowWidth = $(window).width();
    var windowSm = 680;
    if (windowWidth <= windowSm) {

    
        $('a[href^="#"]').click(function(){
            var href = $(this).attr('href');
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $('html,body').animate({scrollTop:position}, 500, "swing");
            return false;
        });
    
    } else {
        $(function(){
            $('a[href^="#"]').click(function(){
                var href = $(this).attr('href');
                var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top;
                $('html,body').animate({scrollTop:position}, 500, "swing");
                return false;
            });
        });
    }
});


$(function(){
    $(".main_text_menu:first-child").click(function(){
        $(".main_text_menu:first-child").css('background-color' , '#bea574');
        $(".main_text_menu:first-child").css('color' , '#ffffff');
        $(".main_text_menu:nth-child(2) , .main_text_menu:last-child").css('background-color' , '#d3d3d3');
        $(".main_text_menu:nth-child(2) , .main_text_menu:last-child").css('color' , '#000000')
    });

    $(".main_text_menu:nth-child(2)").click(function(){
        $(".main_text_menu:nth-child(2)").css('background-color' , '#bea574');
        $(".main_text_menu:nth-child(2)").css('color' , '#ffffff');
        $(".main_text_menu:first-child , .main_text_menu:last-child").css('background-color' , '#d3d3d3');
        $(".main_text_menu:first-child , .main_text_menu:last-child").css('color' , '#000000');
    });

    $(".main_text_menu:last-child").click(function(){
        $(".main_text_menu:last-child").css('background-color' , '#bea574');
        $(".main_text_menu:last-child").css('color' , '#ffffff');
        $(".main_text_menu:first-child , .main_text_menu:nth-child(2)").css('background-color' , '#d3d3d3');
        $(".main_text_menu:first-child , .main_text_menu:nth-child(2)").css('color' , '#000000');

    });
});


$(function(){
    $('.main_text_menu p').click(function(){
        var id = $(this).attr('id');
        $(".main_text_menu p").removeClass("active");
        $(this).addClass("active");
        $(".text_box_area").removeClass("active");
        $("#"+id+ "_content").addClass("active");
    });
});


$(function(){
    $('a[href^="#"]').click(function(){
        $(".menu_btn").removeClass("open");
        $(".header_nav").removeClass("open");
        var href = $(this).attr("href");
        var pos = $(href).offset().top;
        $("body,html").animate({ scrollTop: pos }, 500);
        return false;
    });
    $(".menu_btn").click(function(){
        $(this).toggleClass("open");
        $(".header_nav").toggleClass("open");
    });
});






$(function() {
    $('.btn').prop("disabled", true);
    
    $('form input:required').each(function () {
        $(this).prev("label").addClass("required");
    });
    
    $('form input:required').change(function () {
        let flag = true;
        $('form input:required').each(function(e) {
            if ($('form input:required').eq(e).val() === "") {
                flag = false;
            }
        });
        if (flag) {
            $('.btn').prop("disabled", false);
        }
        else {
            $('.btn').prop("disabled", true);
        }
    });
});



$(function() {
    $(".main_text_menu:first-child").hover(
        function(){
            $(".non_area:first-child").addClass("non_area_hover");
        }, function(){
            $(".non_area:first-child").removeClass("non_area_hover");
        }
    );

    $(".main_text_menu:nth-child(2)").hover(
        function(){
            $(".non_area:nth-child(2)").addClass("non_area_hover");
        }, function(){
            $(".non_area:nth-child(2)").removeClass("non_area_hover");
        }
    );

    $(".main_text_menu:last-child").hover(
        function(){
            $(".non_area:last-child").addClass("non_area_hover");
        }, function(){
            $(".non_area:last-child").removeClass("non_area_hover");
        }
    );
});