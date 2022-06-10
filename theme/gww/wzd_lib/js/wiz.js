$(document).ready(function () {

    $('.animate').scrolla({
        mobile: true,
        once: true // only once animation play on scroll 
    });
    $('.js-parallax').parallax("50%", 0.1);

});
/* 유튜브 */
// Function to reveal lightbox and adding YouTube autoplay
function revealVideo(div, video_id) {
    var video = document.getElementById(video_id).src;
    document.getElementById(video_id).src = video + '&autoplay=1'; // adding autoplay to the URL
    document.getElementById(div).style.display = 'block';
}

// Hiding the lightbox and removing YouTube autoplay
function hideVideo(div, video_id) {
    var video = document.getElementById(video_id).src;
    var cleaned = video.replace('&autoplay=1', ''); // removing autoplay form url
    document.getElementById(video_id).src = cleaned;
    document.getElementById(div).style.display = 'none'; 
}

$(document).ready(function () {
    var depthActive = function () {
        var topCount = $(".menu_wrap > .gnb > li").length,
            subCount = 0;
        topName = [], subName = [], topURL = [], subURL = [], topHTML = "", subHTML = "";
        $(".menu_wrap > .gnb  > li").each(function (i) {
            topName[i] = $(this).children('a').text();
            topURL[i] = $(this).children('a').attr('href');
            // addClasss[i] = $(this).children('a').addClass('active');
            i++;
        });
        topHTML += '<ul>';
        for (i = 0; i < topCount; i++) {
            topHTML += '<li><a href="' + topURL[i] + '">' + topName[i] + '</a></li>';
        }
        topHTML += '</ul>';
        $(".breadcrumbs .depth1").append(topHTML);
        if (topDepth !== -1 && subDepth !== -1) {
            subCount = $(".menu_wrap > .gnb  > li:eq(" + topDepth + ")").find('ul').children().length;
            $(".menu_wrap > .gnb  > li:eq(" + topDepth + ")").find('ul').children().each(function (i) {
                subName[i] = $(this).find('a').text();
                subURL[i] = $(this).find('a').attr('href');
                // addClass[i] = $(this).find('a').addClass('active');
                i++;
            });
            subHTML += '<ul>'; 
            for (i = 0; i < subCount; i++) {
                subHTML += '<li><a href="' + subURL[i] + '">' + subName[i] + '</a></li>';
            }
            subHTML += '</ul>';
            $(".breadcrumbs .depth2").append(subHTML);
            $(".breadcrumbs .depth1 > a").text($(".menu_wrap > .gnb > li:eq(" + topDepth + ")").find('a:first').text());
            $(".breadcrumbs .depth2 > a").text($(".menu_wrap > .gnb  > li:eq(" + topDepth + ")").find('ul').children().eq(subDepth).find('a').text());
            $(".breadcrumbs .depth2 li:eq(" + subDepth + ")").addClass('active'); //pageNum active
            /*  二쇱꽍 吏��몄떆 硫붾돱 �섏씠吏� �몄떇��
            $("#navbar > .navbar-nav > li:eq(" + topDepth + ")").addClass('on open');
              $("#navbar > .navbar-nav > li:eq(" + topDepth + ")").find('ul').children().eq(subDepth).addClass('on');
              */
        }
    };
    depthActive();
});
$(document).ready(function () {
    // NAV TOGGLE ONCLICK WITH SLIDE
    $(".clickSlide ul").hide();
    $(".clickSlide").click(function () {
        $(this).children(".sub_three_nav ul").stop(true, true).slideToggle("fast"), //         $(this).children('.sub_three_nav ul').stop(true, true).delay(100).slideDown("400");
            $(this).toggleClass("dropdown-active");
    });
    $(".clickSlide").mouseleave(function () {
        $(this).children('.sub_three_nav ul').stop(true, true).delay(100).slideUp("400");
        $(this).removeClass("dropdown-active");
    });
    /*
    $(".clickSlide").hover(function(){
           $(this).children('.sub_three_nav ul').stop(true, true).delay(100).slideDown("400");    
       }, 
       function () {
           $(this).children('.sub_three_nav ul').stop(true, true).delay(100).slideUp("400");
       });
       */
    //                     $(".hoverSlide ul").hide();
    //                    $(".hoverSlide").hover(function(){
    //                        $(this).children("ul").stop(true,true).slideToggle("fast"),
    //                        $(this).toggleClass("dropdown-active");
    //                    });
});
var $header_wrap = $("#header_wrap"),
    $gnb = $("#gnb");

$gnb.children("li").each(function (index, s_full) {
    $(s_full).on("mouseover", function () {
        $header_wrap.addClass("full_down");
    });
});
$header_wrap.on("mouseleave", function () {
    $header_wrap.removeClass("full_down");
});
/* 백그라운드 컬러 */
$(".data-background").css('background', function () {
    return $(this).data('bg')
});
/* 폰트 컬러 */
$(".data-font-color").css('color', function () {
    return $(this).data('color')
});
/* 폰트 사이즈 */
$(".data-font-size").css('font-size', function () {
    return $(this).data('font-size')
});
$(".data-opacity").css('opacity', function () {
    return $(this).data('opacity')
});
jQuery(document).ready(function (e) {
    background();
    overlay();
});
/* 백그라운드 이미지 */
function background() {
    //var img=$('.image'); /* 클라스를 줄때 */
    $(".data-image2").css('background-image', function () {
        var bg = ('url(' + $(this).data('background') + ')');
        return bg;
    });
}

/* 백그라운드 오버레이 */
function overlay() {
    //var img=$('.image'); /* 클라스를 줄때 */
    $(".data-overlay").css('background-color', function () {
        var bg = ('rgba(' + $(this).data('overlay') + ')');
        return bg;
    });
}