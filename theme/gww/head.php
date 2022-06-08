<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_THEME_PATH.'/switch.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
?>

<!-- header -->
<div id="header" class="header  <?php if(!$index){ echo "sub"; }?>">
    <div class="top_wrap <?php if($index){ ?> animate<?php } ?>" data-animate="fadeInUp" data-duration="1s" data-delay="0.3s">
        <div class="logo">
            <h1><a href="/"><?php echo $config['cf_title']; ?></a></h1>
        </div>
        <button type="button" class="navbar-toggle collapsed js-offcanvas-btn"> <span class="sr-only">Toggle navigation</span> <span class="hiraku-open-btn-line <?php if($index){ echo "white"; }else{ echo "black"; }?>"></span> </button>
        <div class="nav">
            <div class="inner">
                <div class="gnb_wrap menu_wrap">
                    <ul id="gnb" class="gnb">
                        <li class="menu1 depth1 li1"> <a href="<?php echo G5_THEME_URL?>/company/company_01.php">진흥원 소개</a>
                            <ul class="depth2"> 
                                <li><a href="<?php echo G5_THEME_URL?>/company/company_01.php" >인사말</a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">기관소개</a> </li>
                                <li><a href="<?php echo G5_THEME_URL?>/company/company_03.php">CI소개</a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/company/company_04.php">비전·미션·경영이념</a></li>
								<li><a href="<?php echo G5_THEME_URL?>/company/company_05.php">조직도</a></li>
								<li><a href="<?php echo G5_THEME_URL?>/company/company_06.php">오시는 길</a></li>

                            </ul>
                        </li>
                        <li class="menu2 depth1 li2"> <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_01">제품소개</a>
                            <ul class="depth2">
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_01">뷰슬라이드01</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_02">뷰슬라이드02</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_03">뷰슬라이드03</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_04">일반형 웹진형01</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_05">일반형 갤러리형01</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_06">유튜브 게시판</a></li>
                            </ul>
                        </li>
                        <li class="menu2 depth1 li3"> <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=free">홍보센터</a>
                            <ul class="depth2">
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=free">인재채용</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/content.php?co_id=company">content페이지</a></li>
                            </ul>
                        </li>
                        <li class="menu2 depth1 li4"> <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">고객센터</a>
                            <ul class="depth2">
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">공지사항</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">자주묻는 질문</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=gallery">갤러리</a></li>
                            </ul>
                        </li>
                        <li class="menu2 depth1 li5"> <a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online">문의하기</a>
                            <ul class="depth2">
                                <li><a href="<?php echo G5_URL?>/bbs/write.php?bo_table=online">온라인문의</a></li>
                                <li><a href="http://wiztheme.co.kr/bbs/write.php?bo_table=wiz_online" target="_blank">위즈테마 문의</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="etc">
        </div>
    </div>
</div>
<div class="top_right_etc <?php if(!$index){ echo "sub"; }else{  echo "animate"; }?>" data-animate="fadeInUp" data-duration="1s" data-delay="0.3s">
<span class="lang dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">KOR <i class="fa fa-angle-right"></i></span>
            <ul class="dropdown-menu dropdown-menu-right " role="menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?php echo G5_URL?>">KOR</a></li>
                <li><a href="<?php echo G5_URL?>">ENG</a></li>
</ul>
</div>

<!-- //header -->
<div class="row-offcanvas row-offcanvas-right">
    <!-- mobile container 모바일 메뉴는 tail.php -->
    <?php if($index){ 
    // 비주얼 슬로건 아래 오른쪽 슬라이드 슬로건 
    $slogan01 = "Powered by Innovation"; 
    $slogan02 = "Youtube Style"; 
    $slogan03 = "Brand Activities"; 
    ?>

    <div id="index_swiper" class="swiper-container">
        <div class="bottom-right">
            <div class="box_wrap">
                <div class="box box01">
                    
                    <dl>
                        <dt><a href="<?php echo G5_THEME_URL?>/company/company_01.php">회사소개</a></dt>
                        <dd>위즈테마는 테마 및 디자인, 코딩등 홈페이지의 전반적인 일을 하는 기업입니다.</dd>
                    </dl>
                    
                </div>
                <div class="box box02">
                    <dl>
                        <dt><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=product_01">제품소개</a></dt>
                        <dd>위즈테마에서 제작한 다양한 스킨 및 테마들을 구경해보세요.</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-content">
                    <div class="container">
                        <div class="content text-left">
                            <h1 class="animated" data-swiper-animation="fadeInUp" data-duration=".8s" data-delay="1s" data-swiper-out-animation="fadeIn" data-out-duration="2s">위즈테마 v.07<br>버진이 새롭게<br>출시 했습니다.</h1>
                            <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.8s" data-swiper-out-animation="fadeIn" data-out-duration="2s"></div>
                            <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s" data-swiper-out-animation="fadeIn" data-out-duration="2s">위즈테마템플릿07버전이 출시 했습니다. <br>쉽고 퀄리티가 다른 위즈테마 템플릿. 불법사용을 금지합니다</p>
                            <div class="btn_wrap"><a href="<?php echo G5_THEME_URL?>/company/company_02.php" class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s" data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                        </div>
                    </div>
                </div>
                <div class="overlay data-overlay" data-overlay="0,0,0,0"></div>
                <div class="swiper-img slide-1 data-image" data-background="<?php echo G5_THEME_URL?>/img/main/sdfeffesdf.jpg"></div>
            </div>
            <div class="swiper-slide" id='bgPlayer1'>
                <div id="bgPlayer" class="player" data-property="{useOnMobile:true,mobileFallbackImage:'http://theme03.wiztheme.net/slider2.jpg',videoURL:'https://www.youtube.com/watch?v=QV5EXOFcdrQ',vol:'90',stopMovieOnBlur:false,containment:'#bgPlayer1',showControls:false,startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,quality:'highres',optimizeDisplay:true}"></div>
                <div class="swiper-content">
                    <div class="container">
                        <div class="content text-left">
                            <h1 class="animated" data-swiper-animation="fadeInUp" data-duration=".8s" data-delay="1s" data-swiper-out-animation="fadeIn" data-out-duration="2s">YOUTUBE <br>PLAYERS CODE</h1>
                            <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.8s" data-swiper-out-animation="fadeIn" data-out-duration="2s"></div>
                            <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s" data-swiper-out-animation="fadeIn" data-out-duration="2s">위즈테마템플릿06버전이 출시 했습니다. <br>쉽고 퀄리티가 다른 위즈테마 템플릿. 불법사용을 금지합니다</p>
                            <div class="btn_wrap"><a href="<?php echo G5_THEME_URL?>/company/company_02.php" class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s" data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                        </div>
                    </div>
                </div>
                <div class="overlay data-overlay" data-overlay="0,0,0,0.4"></div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-content">
                    <div class="container">
                    <div class="content text-left">
                            <h1 class="animated" data-swiper-animation="fadeInUp" data-duration=".8s" data-delay="1s" data-swiper-out-animation="fadeIn" data-out-duration="2s">위즈테마 v.07<br>버진이 새롭게<br>출시 했습니다.</h1>
                            <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.8s" data-swiper-out-animation="fadeIn" data-out-duration="2s"></div>
                            <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s" data-swiper-out-animation="fadeIn" data-out-duration="2s">위즈테마템플릿07버전이 출시 했습니다. <br>쉽고 퀄리티가 다른 위즈테마 템플릿. 불법사용을 금지합니다</p>
                            <div class="btn_wrap"><a href="<?php echo G5_THEME_URL?>/company/company_02.php" class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s" data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                        </div>
                    </div>
                </div>
                <div class="overlay data-overlay" data-overlay="0,0,0,0"></div>
                <div class="swiper-img slide-1 data-image" data-background="<?php echo G5_THEME_URL?>/img/main/csdol2.jpg"></div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-content">
                    <div class="container">
                    <div class="content text-left">
                            <h1 class="animated" data-swiper-animation="fadeInUp" data-duration=".8s" data-delay="1s" data-swiper-out-animation="fadeIn" data-out-duration="2s">위즈테마 v.07<br>버진이 새롭게<br>출시 했습니다.</h1>
                            <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.8s" data-swiper-out-animation="fadeIn" data-out-duration="2s"></div>
                            <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s" data-swiper-out-animation="fadeIn" data-out-duration="2s">위즈테마템플릿07버전이 출시 했습니다. <br>쉽고 퀄리티가 다른 위즈테마 템플릿. 불법사용을 금지합니다</p>
                            <div class="btn_wrap"><a href="<?php echo G5_THEME_URL?>/company/company_02.php" class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s" data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                        </div>
                    </div>
                </div>
                <div class="overlay data-overlay" data-overlay="0,0,0,0"></div>
                <div class="swiper-img slide-1 data-image" data-background="<?php echo G5_THEME_URL?>/img/main/asdsd2dsd.jpg"></div>
            </div>
        </div>
        <!-- pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>

    </div>
    
    <?php }else{ ?>
    <div class="s_visual_wrap">
        <div class="slide">
            <?php if($pageNum == 0){  //회사소개 일반페이지 일때 company.php 에서 pageNum 값이 0일때.. ?>
            <div class="content">
                <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">CHALLENGES FOR GROWTH</h1>
                <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100">일상에 필요한 모든 것들을 연결해주는 새로운 연결, 더 나은 세상 </p>
            </div>
            <ul>
                <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/main/asd2odasd.jpg"> </li> 
            </ul>
            <?php }else if($pageNum == 1){ // 게시판형일시 switch.php 에서 pageNum 값이 2일때..  ?>
            <div class="content">
                <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">Vision for the future</h1>
                <div class="line"></div>
                <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100">미래를 향한 비전 </p>
            </div>
            <ul>
                <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/main/asdlkjnmkwd2.jpg"> </li>
            </ul>

            <?php }else if($pageNum == 2){ // 게시판형일시 switch.php 에서 pageNum 값이 3일때..  ?>
            <div class="content">
                <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">Challenges for Growth</h1>
                <div class="line"></div>
                <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100">성장을 위한 도전</p>
            </div>
            <ul>
                <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/main/dd2290sd.jpg"></li>
            </ul>
            <?php }else if($pageNum == 3){ // 게시판형일시 switch.php 에서 pageNum 값이 4일때..  ?>
            <div class="content">
                <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">Global IT Reader</h1>
                <div class="line"></div>
                <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100">글로벌 IT 리더</p>
            </div>
            <ul>
                <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/main/asdo2220s1o.jpg"></li>
            </ul>
            <?php }else if($pageNum == 4){ // 게시판형일시 switch.php 에서 pageNum 값이 5일때..  ?>
            <div class="content">
                <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">Sustainable light value</h1>
                <div class="line"></div>
                <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100">지속가능 경형 가치</p>
            </div>
            <ul>
                <li class="data-image" data-background="<?php echo G5_THEME_URL?>/img/main/asdo2220so.jpg"> </li>
            </ul>
            <?php }else{ ?>
            <div class="content">
                <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100">지속가능 경형 가치</h1>
                <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100">Sustainable light value </p>
            </div>
            <ul>
                <li class="data-image" data-background="http://wiztheme.co.kr/img/main/svisual01.jpg"></li>
            </ul>
            <?php } ?>
        </div>
    </div>
    <!-- 데스크탑용 -->
    <div id="nav_center" class="breadcrumbs hidden-sm hidden-xs">
        <div class="container sub_three_nav">
            <ul>
                <li class="depth2">
                    <a href="javascript:;" class="javas"></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- 모바일용 -->
    <div class="breadcrumbs sub_three_map_wrap hidden-lg hidden-md">
        <div class="container">
            <div class="sub_three_map">
                <div class="sub_three_nav last">
                    <ul>
                        <li class="depth2 clickSlide">
                            <a href="javascript:;"></a><i class="fas fa-angle-down"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if(!$index){ ?>
    <div id="sub_content" class="<?php if($bo_table){ echo "bbs"; }?>">
        <div class="<?php if(!$page_full){ echo "container"; }?>">
            <?php if(!$wr_id){ ?>
            <div class="page-header">
                <h1><?php if($bo_table){ echo $board['bo_subject'], $sca_name;}else if($depth2) { echo $depth2; }else{ echo "회원가입"; }?> </h1>
            </div>
            <?php } ?>
            <?php } ?>