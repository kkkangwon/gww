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
	
	<!-- 하단 중 상단 시작-->
	<div class="footer">
		<div class="inner">
			<div class="left-group">
				<h2 class="logo"><a href="/"><span class="blind">대한복지진흥원</span></a></h2>
				<span class="channel">대한복지진흥원 채널</span>
				<ul class="list-sns">
					<li><a href="https://www.instagram.com/" target="_blank" title="새창 열림"><span class="blind">Instagram</span></a></li>
					<li class="facebook"><a href="https://www.facebook.com/" target="_blank" title="새창 열림"><span class="blind">Facebook</span></a></li>
					<li class="youtube"><a href="https://www.youtube.com/" target="_blank" title="새창 열림"><span class="blind">Youtube</span></a></li>
				</ul>
			</div>
			<ul class="list-sitemap">
				<li>
					<em>진흥원소개</em>
					<a href="#" class="link">진흥원소개</a>
					<ul>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_01.php">인사말</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">기관소개</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_03.php">CI소개</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_04.php">비전ㆍ미션ㆍ경영이념</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_05.php">조직도</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_06.php">오시는 길</a></li>
					</ul>
				</li>
				<li>

					<em>사업소개</em>
					<a href="<?php echo G5_THEME_URL?>/company/business_01.php" class="link">사업소개</a>
					<ul>
						<li><a href="<?php echo G5_THEME_URL?>/company/business_01.php">메타버스 사업</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/business_02.php">공공IT 사업</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/business_03.php">영상미디어 사업</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=portfolio">포트폴리오</a></li>
					</ul>
				</li>
				<li>
					<em>알림마당</em>
					<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice" class="link">알림마당</a>
					<ul>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">공지사항</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=recruitment">채용정보</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=reference">자료실</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=management">경영고시</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=contribute">사회공헌활동</a></li>
					</ul>
				</li>
				<li>
					<em>고객참여</em>
					<a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa" class="link">고객참여</a>
					<ul>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">자주묻는 질문</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=cs">고객의 소리</a></li>
					</ul>
				</li>
			</ul>
			<div class="footer-group">
				<!--ul class="list">
					<li><a href="https://villiv.co.kr/main" target="_blank" title="새창 열림">복지TV강원방송</a></li>
					<li><a href="https://www.jayucc.co.kr" target="_blank" title="새창 열림">원주시</a></li>
					<li><a href="https://www.trinityclub.co.kr:446/main.asp" target="_blank" title="새창 열림">강원도</a></li>
					<li><a href="https://www.aquafield-ssg.co.kr" target="_blank" title="새창 열림">추가</a></li>
				</ul-->
				<ul class="list">
					<li><a href="#">개인정보처리방침</a></li>
					<li><a href="#">이용약관</a></li>
					<li><a href="#">이메일무단수집거부</a></li>
				</ul>
				<!--div class="family-site active">
					<button type="button">Family Site</button>
					<ul>
						<li><a href="http://www.gww.co.kr/" target="_blank" title="새창 열림">WBC복지TV강원방송</a></li>
						<li><a href="https://www.wonju.go.kr/" target="_blank" title="새창 열림">원주시청</a></li>
					</ul-->
				</div>
				<address>
					<strong>대한복지진흥원</strong><br />
					강원도 원주시 건강로 21-1 서영에비뉴파크 2차, 506호(반곡동) 
					<strong>전화번호</strong> : 080-800-9000 <strong>팩스</strong> : 02-2698-5355
				</address>
				<p class="copyright">© 2022 Korea Welfare Organization All Rights Reserved</p>
			</div>
		</div>
		<!-- 하단 중 상단 끝-->
		<div class="mobile_jason">
			<div class="footer-menu">
				<div class="container">
					<ul class="list-inline breadcrumb">
						<li class="hidden-sm hidden-xs"><a href="<?php echo G5_URL?>">처음으로</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">진흥원소개</a></li>
						<li><a href="#popup1" class="blue">개인정보호정책</a></li>
						<li><a href="#popup2">이용약관</a></li>
					</ul>
				</div>
			</div>
			<div class="container">
				<p class="logo"><img src="<?php echo G5_THEME_URL?>/img/main/logo-sub.png"></p>
				<address>
					<strong>대한복지진흥원</strong>
					주소 : 강원도 원주시 건강로 21-1 서영에비뉴파크 2차, 506호(반곡동) <strong>대표 : </strong> 나대표
					<strong>전화번호</strong> : 080-800-9000 <strong>팩스</strong> : 02-2698-5355
					<p>Copyright &copy; 2022 <strong>Korea Welfare Organization</strong>  All Rights Reserved.</p>
				</address>
			</div>
		</div>
	</div>
</footer>
<div class="sidebar-offcanvas" id="sidebar">
    <div class="js-offcanvas">
        <div class="title_wrap">
        <h3><img src=""></h3><p class="close-btn js-close-btn"><i class="fas fa-times "></i></p>
        </div>
        <div off-canvas="slidebar-1 left reveal">
            <ul class="sidebar-menu">
                <li>
                    <a href="#">  <span>진흥원 소개</span> <i class="fa fa-angle-right pull-right"></i> </a>
                    <ul class="sidebar-submenu"> 
                        <li><a href="<?php echo G5_THEME_URL?>/company/company_01.php">인사말</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">기관소개</a> </li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_03.php">CI소개</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_04.php">비전·미션·경영이념</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_05.php">조직도</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/company_06.php">오시는 길</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> <span>사업소개</span> <i class="fa fa-angle-right pull-right"></i> </a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_THEME_URL?>/company/business_01.php">메타버스 사업</a></li>
						<li><a href="<?php echo G5_THEME_URL?>/company/business_02.php">공공IT 사업</a> </li>
						<li><a href="<?php echo G5_THEME_URL?>/company/business_03.php">영상미디어 사업</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=portfolio">포트폴리오</a></li>
                    </ul>
                </li> 
                <li>
                    <a href="#"><span>알림마당</span> <i class="fa fa-angle-right pull-right"></i> </a>
                    <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">공지사항</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">채용정보</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">자료실</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">경영고시</a></li>
						<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">사회공헌활동</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online"> <span>고객 참여</span> <i class="fa fa-angle-right pull-right"></i></a>
                   <ul class="sidebar-submenu">
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">자주묻는 질문</a></li>
                        <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=cs">고객의 소리</a></li>
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
            <!--<div class="etc_wrap">
                <div class="cont">
                    <a href="<?php echo G5_THEME_URL?>" class="active">KOR</a> | <a href="<?php echo G5_THEME_URL?>">ENG</a>
                </div>
                <div class="copy">copyright&copy; <?php echo date("Y"); ?> <?php echo $_SERVER['HTTP_HOST']?></div>
            </div>-->
            
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