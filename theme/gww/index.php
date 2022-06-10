<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}
$index = "index";
include_once(G5_THEME_PATH.'/head.php');

?>

<div id="index_wrap">
    <section class="section01">
        <div class="text_wrap animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.1s">
            <span>BUSINESS AREA</span>
            <div class="text">
               더나은 미래를 <br>
               만들어가고 있어요</div>
        </div>
        <div class="box_wrap">
            <div class="box box01 animate" data-animate="fadeInUp" data-duration="1.3s" data-delay="0.2s">
                <div class="scale">
                    <a href="<?php echo G5_THEME_URL?>/company/company_01.php">
                        <img src="<?php echo G5_THEME_URL?>/img/main/about_benner01.jpg">
                    </a>
                </div>
                <div class="text">
                    <span>메타버스</span>
                </div>
            </div>
            <div class="box box02 animate" data-animate="fadeInUp" data-duration="1.3s" data-delay="0.3s">
                <div class="scale">
                    <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_01">
                        <img src="<?php echo G5_THEME_URL?>/img/main/about_benner02.jpg">
                    </a>
                </div>
                <div class="text">
                    <span>공공IT</span>
                </div>
            </div>
            <div class="box box03 animate" data-animate="fadeInUp" data-duration="1.3s" data-delay="0.4s">
                <div class="scale">
                <a href="<?php echo G5_THEME_URL?>/company/company_04.php">
                        <img src="<?php echo G5_THEME_URL?>/img/main/about_benner03.jpg">
                    </a>
                </div>
                <div class="text">
                    <span> 영상미디어</span>
                </div>
            </div>
        </div>
    </section>
    <section class="section02 parallax_wrap js-parallax data-image2 animate" data-background="<?php echo G5_THEME_URL?>/img/main/video_bg.jpg" data-animate="fadeIn" data-duration="1.2s" data-delay="0.1s">
        <div class="container">
            <div class="box_wrap">
                <div class="box text_wrap">
                    <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.1s">함께 만나는 미래</h1>
                    <p class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.3s">iMac은 한층 향상된 성능과 Apple 사상 최고의 Retina
                    디스플레이를 결합하여 궁극의 데스크탑 경험을 두 가지 크기로 선보입니다.<br>
                    apple.com에서 더 알아보세요</p>
                    <div class="btn_wrap animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.5s">
                        <a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online" class="bt_lnk  bt_basic_lnk"><span>문의하기<span></a>
                    </div>
                </div>
                <div class="box video_wrap animate" data-animate="fadeIn" data-duration="1s" data-delay="0.7s">
                    <img src="<?php echo G5_THEME_URL?>/img/main/video_thumb.jpg">

                    <div class="over"></div>
                    <div class="play">
                        <a onclick="revealVideo('video','youtube')"><img src="<?php echo G5_THEME_URL?>/img/main/play.png"></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="section03">
        <div class="title animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.3s">
            <h1>PRODUCT</h1>
            1970년 설립된 대한민국 최초의 종합 전자부품기업
        </div>
        <?php echo latest("theme/slider-gallery", "product_01", 4, 32);?>
        
        
    </section>
    
    <section class="section04">
        <div class="container">
            <div class="box_wrap">
                <div class="box box01  animate" data-animate="fadeIn" data-duration="1s" data-delay="0.3s">
                    <h1><span>위즈테마</span>에 <br>문의 하세요</h1>
                    위즈테마는 홈페이지제작 및 그누보드테마를
제작하고 있습니다. 홈페이지 디자인, 코딩도 별도로 가능합니다.
                </div>
                <div class="box box02 animate" data-animate="fadeIn" data-duration="1.3s" data-delay="0.5s">
                    <!-- <h2>공지사항</h2> -->
                    <?php echo latest('theme/notice', 'notice', 3, 152);?>
                     <!-- <ul>
                         <li class="notice"><a href="<?php echo G5_THEME_URL?>">한화정밀기계, 최대 정밀기계 전시회 'NEPCON 
CHINA 상하이 2021' 참가</a></li>
                         <li><a href="">21.3월호 인터뷰] 한화의 명확한 비전, ‘Pick &P... </a></li>
                         <li><a href="">21.3월호 인터뷰] 한화의 명확한 비전, ‘Pick &P... </a></li>
                     </ul> -->
                </div>
                <div class="box box03  animate" data-animate="fadeIn" data-duration="1.3s" data-delay="0.8s">
                <h2>고객센터</h2>
                <div class="tel">
                    <ul> 
                        <li><span>TEL</span><a href="tel:02-2698-5355">02.2698.5355</a></li>
                        <li><span>FAX</span><a href="tel:02-2698-5355">02.2698.5368</a></li>
                    </ul>
                    · 평일 09:00~18:00 ,  토요일 09:00~13:00 
                </div>
                <div class="btn_wrap">
                    <ul>
                        <li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online" class="btn btn-pack bt_lnk black bt_more"><i class="fas fa-pencil-alt"></i> 온라인 문의 </a></li>
                        <li><a href="<?php echo G5_THEME_URL?>/company/company_04.php" class="btn btn-pack gray bt_lnk  bt_more"><i class="fas fa-map-marker-alt"></i> 오시는 길</a></li>
                    </ul>
                    
                    
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section05">
        <div class="container">
            <div class="slider-gallery02 animate" data-animate="fadeIn" data-duration="1s" data-delay="0.3s" data-offset="100">
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner01.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner02.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner03.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner04.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner05.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner06.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner01.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner02.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner03.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner04.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner05.jpg" class="img-responsive"></a></div>
                <div class="slider"><a href="#"><img src="<?php echo G5_THEME_URL?>/img/main/foot_benner06.jpg" class="img-responsive"></a></div>
            </div>
            <script>
            $(document).ready(function() {
                $('.slider-gallery02').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    cssEase: 'linear',
                    pauseOnHover: true,

                    responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            dots: false
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3,
                            dots: false
                        }
                    }]
                });
            });
            </script>
        </div>
    </section>
</div>





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>