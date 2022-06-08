<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
<?php if(!$index){ ?>
</div> <!-- container end -->
</div> <!-- sub_content end -->
<?php } ?>
<footer class="<?php if(!$index){ echo "sub"; }?>">
    <div class="footer-menu">
        <div class="container">
            <ul class="list-inline breadcrumb">
                <li class="hidden-sm hidden-xs"><a href="<?php echo G5_URL?>">처음으로</a></li>
                <li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">회사소개</a></li>
                <li><a href="#popup1" class="blue">개인정보호정책</a></li>
                <li><a href="#popup2">이용약관</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <p class="logo"><img src="<?php echo G5_THEME_URL?>/img/main/logo-sub.png"></p>
        <address>
            <strong>위즈테마</strong>
            주소 : 서울시 금천구 가마산로 96 대륭테크노8차 000호 <strong>대표 : </strong> 나대표
            <strong>전화번호</strong> : 02-2698-5355 <strong>팩스</strong> : 02-2698-5355
            <p>Copyright &copy; 2021 <strong><?php echo $config['cf_title']; ?></strong> www.<?php echo $_SERVER['HTTP_HOST']?> All Rights Reserved.</p>
        </address>
    </div>
</footer>
<div class="sidebar-offcanvas" id="sidebar">
    <div class="js-offcanvas">
        <div class="title_wrap">
        <h3>WIZTHEME<?php //echo $config['cf_title']; ?></h3><p class="close-btn js-close-btn"><i class="fas fa-times "></i></p>
        </div>
        <div off-canvas="slidebar-1 left reveal">
            <ul class="sidebar-menu">
                <li>
                    <a href="#">  <span>회사소개</span> <i class="fa fa-angle-right pull-right"></i> </a>
                    <ul class="sidebar-submenu"> 
                        <li><a href="<?php echo G5_THEME_URL?>/company/company_01.php">CEO인사말</a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">회사소개</a> </li>
                        <li><a href="<?php echo G5_THEME_URL?>/company/company_03.php">회사연혁</a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/company/company_04.php">찾아오시는 길</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> <span>제품소개</span> <i class="fa fa-angle-right pull-right"></i> </a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_01">뷰슬라이드01</a></li>
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_02">뷰슬라이드02</a></li>
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_03">뷰슬라이드03</a></li>
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_04">일반형 웹진형01</a></li>
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_05">일반형 갤러리형01</a></li>
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_06">일반형 갤러리형 새창01</a></li>
                    </ul>
                </li> 
                <li>
                    <a href="#"><span>인재채용</span> <i class="fa fa-angle-right pull-right"></i> </a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=free">인재채용</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online"> <span>고객센터</span> <i class="fa fa-angle-right pull-right"></i></a>
                   <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">공지사항</a></li>
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">자주묻는 질문</a></li>
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery">갤러리</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online"> <span>온라인 문의</span> <i class="fa fa-angle-right pull-right"></i></a>
                   <ul class="sidebar-submenu">
                       <li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online">온라인문의</a></li>
                    </ul>
                </li>
            </ul> 

            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <?php if($is_member){ ?>
                <a href="<?php echo G5_URL?>/bbs/logout.php" class="btn btn btn-pack">LOGOUT</a>
                <?php }else{ ?>
                <a href="<?php echo G5_URL?>/bbs/login.php" class="btn btn btn-pack">LOGIN</a>
                <?php } ?>
                
              <a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online" class="btn btn btn-pack">FAQ</a>
            </div> 
            <div class="etc_wrap">
                <div class="cont">
                    <a href="<?php echo G5_THEME_URL?>" class="active">KOR</a> | <a href="<?php echo G5_THEME_URL?>">ENG</a>
                </div>
                <div class="copy">copyright&copy; <?php echo date("Y"); ?> <?php echo $_SERVER['HTTP_HOST']?></div>
            </div>
            
        </div>
        
    </div>
</div>



<!-- 하단 시작 { -->
<div id="ft">
    <?php if(!$index){ ?>
    <button type="button" id="top_btn">
        <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <?php } ?>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({
                scrollTop: 0
            }, '500');
            return false;
        });
    });
    </script>
</div>
<div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
    <div class="lightbox-container">
        <div class="lightbox-content">

            <button onclick="hideVideo('video','youtube')" class="lightbox-close">
                Close | ✕
            </button>
            <div class="video-container">
                <iframe id="youtube" width="960" height="540" src="https://www.youtube.com/embed/WsptdUFthWI?showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- 레이어 팝업 -->
<div id="popup1" class="overlay-popup">
	<div class="popup-content">
		<h2>개인정보보호정책</h2> 
		<a class="close" href="#0">&times;</a>
		<div class="content">
			내용이 나옵니다.
		</div>
	</div>
</div>
<div id="popup2" class="overlay-popup">
	<div class="popup-content">
		<h2>이용안내</h2> 
		<a class="close" href="#0">&times;</a>
		<div class="content">
			내용이 나옵니다.
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
  $(window).resize(function(){
    var windowHeight = $(window).height();
    var ninetypercent = .6 * windowHeight;
    $(document).scroll(function(){
      var y = $(this).scrollTop();
      if( y > ninetypercent) {
        $('.header').addClass('sticky');
        $('.top_right_etc').addClass('sticky');
      } else {
        $('.header').removeClass('sticky');
        $('.top_right_etc').removeClass('sticky');
      }
    });
  }).resize();
}); 
</script>
<?php if($index){ ?>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/swiper/dist/js/swiper.ani.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/swiper/dist/js/swiper.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/swiper/dist/js/swiper.sc.js"></script>

<script>
var swiperAnimation = new SwiperAnimation();
var menu = ['<?php echo $slogan01 ;?>', '<?php echo $slogan02 ;?>', '<?php echo $slogan03 ;?>']
var swiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function(index, className) {
            return '<span class="' + className + '">' + (menu[index]) + '</span>';
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: false,
    speed: 1500,
    autoplay: {
        delay: 5000,
    },
    on: {

        init: function() {
            swiperAnimation.init(this).animate();
        },
        slideChange: function() {
            swiperAnimation.init(this).animate();
        }

    }

});

</script>
<?php } ?>
<script>
var topDepth = '<?php echo $pageNum ;?>';
var subDepth = '<?php echo $subNum ;?>';
</script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/scrolla/scrolla.jquery.min.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/bootstrap/js/bootstrap.min.js"></script>
<script src='<?php echo G5_THEME_URL?>/wzd_lib/plugin/mobile-menu/hiraku.js'></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/mobile-menu/index.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/mobile-menu/sidebar-menu.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/plugin/mouse/gambit-smoothscroll-min.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/js/wiz.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/js/jnav-cont.js"></script>
<script src="<?php echo G5_THEME_URL?>/wzd_lib/js/flex.js"></script>
<script>
$.sidebarMenu($('.sidebar-menu'))
</script>
<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");