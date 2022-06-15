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
                                <li><a href="<?php echo G5_THEME_URL?>/company/company_01.php">인사말</a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/company/company_02.php">기관소개</a> </li>
                                <li><a href="<?php echo G5_THEME_URL?>/company/company_03.php">CI소개</a></li>
                                <li><a href="<?php echo G5_THEME_URL?>/company/company_04.php">비전·미션·경영이념</a></li>
								<li><a href="<?php echo G5_THEME_URL?>/company/company_05.php">조직도</a></li>
								<li><a href="<?php echo G5_THEME_URL?>/company/company_06.php">오시는 길</a></li>

                            </ul>
                        </li>
                        <li class="menu2 depth1 li2"> <a href="<?php echo G5_THEME_URL?>/company/business_01.php">사업소개</a>
                            <ul class="depth2">
                                <li><a href="<?php echo G5_THEME_URL?>/company/business_01.php">메타버스 사업</a></li>
								<li><a href="<?php echo G5_THEME_URL?>/company/business_02.php">공공IT 사업</a></li>
								<li><a href="<?php echo G5_THEME_URL?>/company/business_03.php">영상미디어 사업</a></li>
								<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=portfolio">포트폴리오</a></li>
                            </ul>
                        </li>
                        <li class="menu2 depth1 li3"> <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">알림마당</a>
                            <ul class="depth2">
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=notice">공지사항</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=recruitment">채용정보</a></li>
								<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=reference">자료실</a></li>
								<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=management">경영고시</a></li>
								<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=contribute">사회공헌활동</a></li>
								<!--<li><a href="<?php echo G5_THEME_URL?>/company/social_01.php" >인소셜미디어</a></li>-->
                            </ul>
                        </li>
                        <li class="menu2 depth1 li4"> <a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">고객참여</a>
                            <ul class="depth2">
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=qa">자주묻는 질문</a></li>
                                <li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=cs">고객의 소리</a></li>
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
<!--<div class="top_right_etc <?php if(!$index){ echo "sub"; }else{  echo "animate"; }?>" data-animate="fadeInUp" data-duration="1s" data-delay="0.3s">
<span class="lang dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">KOR <i class="fa fa-angle-right"></i></span>
            <ul class="dropdown-menu dropdown-menu-right " role="menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?php echo G5_URL?>">KOR</a></li>
                <li><a href="<?php echo G5_URL?>">ENG</a></li>
</ul>
</div>-->

<!-- //header -->
<?php
		$main_url = basename($_SERVER['PHP_SELF']);

		if($main_url=="company_01.php"){$act[0] = 'active';$me_co ="10";$sub_txt ="진흥원소개";$sub_txt2 ="인사말";$h3_title="새로운 복지의 방향성, 대한복지진흥원이 제시합니다.";}
		else if($main_url=="company_02.php"){$act[1] = 'active';$me_co ="10";$sub_txt ="진흥원소개";$sub_txt2 ="기관소개";$h3_title="새로운 복지의 방향성, 대한복지진흥원이 제시합니다.";}
		else if($main_url=="company_03.php"){$act[2] = 'active';$me_co ="10";$sub_txt ="진흥원소개";$sub_txt2 ="CI소개";$h3_title="새로운 복지의 방향성, 대한복지진흥원이 제시합니다.";}
		else if($main_url=="company_04.php"){$act[3] = 'active';$me_co ="10";$sub_txt ="진흥원소개";$sub_txt2 ="비전ㆍ미션ㆍ경영이념";$h3_title="새로운 복지의 방향성, 대한복지진흥원이 제시합니다.";}
		else if($main_url=="company_05.php"){$act[4] = 'active';$me_co ="10";$sub_txt ="진흥원소개";$sub_txt2 ="조직도";$h3_title="새로운 복지의 방향성, 대한복지진흥원이 제시합니다.";}
		else if($main_url=="company_06.php"){$act[5] = 'active';$me_co ="10";$sub_txt ="진흥원소개";$sub_txt2 ="오시는 길";$h3_title="새로운 복지의 방향성, 대한복지진흥원이 제시합니다.";}

		else if($main_url=="business_01.php"){$act[0] = 'active';$me_co ="20";$sub_txt ="사업소개";$sub_txt2 ="메타버스 사업";$h3_title="대한복지진흥원은 4차산업혁명시대를 주도하는 메타버스, IT, 영상 미디어 등을 이용한 사업을 전개합니다.";}
		else if($main_url=="business_02.php"){$act[1] = 'active';$me_co ="20";$sub_txt ="사업소개";$sub_txt2 ="공공IT 사업";$h3_title="더대한복지진흥원은 4차산업혁명시대를 주도하는 메타버스, IT, 영상 미디어 등을 이용한 사업을 전개합니다.";}
		else if($main_url=="business_03.php"){$act[2] = 'active';$me_co ="20";$sub_txt ="사업소개";$sub_txt2 ="영상미디어 사업";$h3_title="대한복지진흥원은 4차산업혁명시대를 주도하는 메타버스, IT, 영상 미디어 등을 이용한 사업을 전개합니다.";}
		else if($bo_table=="portfolio"){$act[3] = 'active';$me_co ="20";$sub_txt ="사업소개";$sub_txt2 ="포트폴리오";$h3_title="대한복지진흥원은 4차산업혁명시대를 주도하는 메타버스, IT, 영상 미디어 등을 이용한 사업을 전개합니다.";}

		else if($bo_table=="notice"){$act[0] = 'active';$me_co ="30";$sub_txt ="알림마당";$sub_txt2 ="공지사항";$h3_title="장애인과 비장애인의 차별없는 살기좋은 세상 만들기";}
		else if($bo_table=="recruitment"){$act[1] = 'active';$me_co ="30";$sub_txt ="알림마당";$sub_txt2 ="채용정보";$h3_title="장애인과 비장애인의 차별없는 살기좋은 세상 만들기";}
		else if($bo_table=="reference"){$act[2] = 'active';$me_co ="30";$sub_txt ="알림마당";$sub_txt2 ="자료실";$h3_title="장애인과 비장애인의 차별없는 살기좋은 세상 만들기";}
		else if($bo_table=="management"){$act[3] = 'active';$me_co ="30";$sub_txt ="알림마당";$sub_txt2 ="경영고시";$h3_title="장애인과 비장애인의 차별없는 살기좋은 세상 만들기";}
		else if($bo_table=="contribute"){$act[4] = 'active';$me_co ="30";$sub_txt ="알림마당";$sub_txt2 ="사회공헌활동";$h3_title="장애인과 비장애인의 차별없는 살기좋은 세상 만들기";}

		else if($bo_table=="qa"){$act[0] = 'active';$me_co ="40";$sub_txt ="고객참여";$sub_txt2 ="자주묻는 질문";$h3_title="나눔을 더하면 복이 더해지고 받는 분들은 행복함이 더해집니다.";}
		else if($bo_table=="cs"){$act[1] = 'active';$me_co ="40";$sub_txt ="고객참여";$sub_txt2 ="고객의 소리";$h3_title="나눔을 더하면 복이 더해지고 받는 분들은 행복함이 더해집니다.";}


	?>
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
                        <dt><a href="<?php echo G5_THEME_URL?>/company/company_01.php">진흥원소개</a></dt>
                        <dd>Welfare Innovator & Good Business Partner.</dd>
                    </dl>
                    
                </div>
                <div class="box box02">
                    <dl>
                        <dt><a href="/down/introduction.pdf" target="_blank">회사소개서 다운로드</a></dt>
                        <dd>대한복지진흥원 소개서를 다운받아보세요.</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-content">
                    <div class="container">
                        <div class="content text-left">
                            <h1 class="animated" data-swiper-animation="fadeInUp" data-duration=".8s" data-delay="1s" data-swiper-out-animation="fadeIn" data-out-duration="2s">국내유일 <br/>전국규모 컨소시엄형<br>장애인표준 사업장</h1>
                            <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.8s" data-swiper-out-animation="fadeIn" data-out-duration="2s"></div>
                            <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s" data-swiper-out-animation="fadeIn" data-out-duration="2s">국내 유일 전국규모컨소시엄형 장애인표준사업장으로써, <br>새로운 복지의 방향성을 제시합니다.</p>
                            <div class="btn_wrap"><a href="<?php echo G5_THEME_URL?>/company/company_02.php" class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s" data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                        </div>
                    </div>
                </div>
                <div class="overlay data-overlay" data-overlay="0,0,0,0"></div>
                <div class="swiper-img slide-1 data-image2" data-background="<?php echo G5_THEME_URL?>/img/main/sdfeffesdf.jpg"></div>
            </div>
            <div class="swiper-slide" id='bgPlayer1'>
                <div id="bgPlayer" class="player" data-property="{useOnMobile:true,mobileFallbackImage:'http://theme03.wiztheme.net/slider2.jpg',videoURL:'https://www.youtube.com/watch?v=QV5EXOFcdrQ',vol:'90',stopMovieOnBlur:false,containment:'#bgPlayer1',showControls:false,startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,quality:'highres',optimizeDisplay:true}"></div>
                <div class="swiper-content">
                    <div class="container">
                        <div class="content text-left">
                            <h1 class="animated" data-swiper-animation="fadeInUp" data-duration=".8s" data-delay="1s" data-swiper-out-animation="fadeIn" data-out-duration="2s">METAVERSE, <br />IT, MULTIMEDIA<br></h1>
                            <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.8s" data-swiper-out-animation="fadeIn" data-out-duration="2s"></div>
                            <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s" data-swiper-out-animation="fadeIn" data-out-duration="2s">4차산업혁명시대를 주도하는<br>메타버스, IT, 영상 미디어 등을 이용한 사업을 전개합니다.</p>
                            <div class="btn_wrap"><a href="<?php echo G5_THEME_URL?>/company/business_01.php" class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s" data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                        </div>
                    </div>
                </div>
                <div class="overlay data-overlay" data-overlay="0,0,0,0.4"></div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-content">
                    <div class="container">
                    <div class="content text-left">
                            <h1 class="animated" data-swiper-animation="fadeInUp" data-duration=".8s" data-delay="1s" data-swiper-out-animation="fadeIn" data-out-duration="2s">장애인을 '이용한' <br/>기업이 아닌 <br>장애인을 '위한' 기업</h1>
                            <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.8s" data-swiper-out-animation="fadeIn" data-out-duration="2s"></div>
                            <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s" data-swiper-out-animation="fadeIn" data-out-duration="2s">장애인에게는 단순히 고용의 기회를 넘어 <br>자아실현의 기회를, 공공기관에는 전문성을 갖춘 최적의 솔루션을 제공합니다.</p>
                            <div class="btn_wrap"><a href="<?php echo G5_THEME_URL?>/company/company_02.php" class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s" data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                        </div>
                    </div>
                </div>
                <div class="overlay data-overlay" data-overlay="0,0,0,0"></div>
                <div class="swiper-img slide-1 data-image2" data-background="<?php echo G5_THEME_URL?>/img/main/csdol2.jpg"></div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-content">
                    <div class="container">
                    <div class="content text-left">
                            <h1 class="animated" data-swiper-animation="fadeInUp" data-duration=".8s" data-delay="1s" data-swiper-out-animation="fadeIn" data-out-duration="2s">장애인을 '배려한'<br>운영을 통한<br>차세대 복지시스템 실현</h1>
                            <div class="line animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.8s" data-swiper-out-animation="fadeIn" data-out-duration="2s"></div>
                            <p class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.3s" data-swiper-out-animation="fadeIn" data-out-duration="2s">장애인을 '배려한' 운영을 통한<br> 차세대 복지 시스템을 실현 하고자 합니다.</p>
                            <div class="btn_wrap"><a href="<?php echo G5_THEME_URL?>/company/company_02.php" class="btn btn-default animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1.5s" data-swiper-out-animation="fadeIn" data-out-duration="2s">more</a></div>
                        </div>
                    </div>
                </div>
                <div class="overlay data-overlay" data-overlay="0,0,0,0"></div>
                <div class="swiper-img slide-1 data-image2" data-background="<?php echo G5_THEME_URL?>/img/main/asdsd2dsd.jpg"></div>
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
            <div class="content">
                <h1 class="animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.6s" data-offset="100"><?=$sub_txt?></h1>
                <p class="animate" data-animate="fadeInUp" data-duration="1.2s" data-delay="0.9s" data-offset="100"><?=$h3_title?></p>
            </div>
            <ul>
                <li class="data-image sub_jason<?=$me_co?>"> </li> 
            </ul>
        </div>
    </div>
    <!-- 데스크탑용 -->
    <div id="nav_center" class="breadcrumbs hidden-sm hidden-xs">
        <div class="container sub_three_nav">
            <!-- start-->
					<div class="left_menu_cont<?=$me_co?>">
					
						<?php
							$sql = "select * from {$g5['menu_table']} where me_use = '1' and me_code = '$me_co'";
							$result = sql_query($sql);
							$row=sql_fetch_array($result);
							?>				
						<ul>	
						<?php
						if($main_url=="register_form.php" or $main_url=="register.php" or $main_url=="register_result.php"){

							}else{

							$sql2 = "select * from {$g5['menu_table']} where me_use = '1' and me_code like '$me_co%' and me_code != '$me_co'";
							$result2 = sql_query($sql2);

							for ($k=0; $row2=sql_fetch_array($result2); $k++) {
							?>

								<li class="<?=$act[$k]?>"><a href="<?=$row2['me_link']?>"><?=$row2['me_name']?></a></li>
							<?php
							} }
							?>		
						</ul>
						<p class="both"></p>
						
					</div>
					<!-- end-->
        </div>
    </div>
    <!-- 모바일용 -->
    <div class="breadcrumbs sub_three_map_wrap hidden-lg hidden-md">
        <div class="container">
            <div class="sub_three_map">
                <div class="sub_three_nav last">
                    <ul>
                        <li class="depth2 clickSlide">
                            <a href="#">제목제목</a><i class="fas fa-angle-down"></i>
							<ul>
								<?php
									if($main_url=="register_form.php" or $main_url=="register.php" or $main_url=="register_result.php"){

										}else{

									//	$sql3 = "select * from {$g5['menu_table']} where me_use = '1' and me_code like '$me_co%' and me_code != '$me_co'";
									//	$result3 = sql_query($sql3);

										for ($k=0; $row3=sql_fetch_array($result2); $k++) {
										?>

										<li class="<?=$act[$k]?> "><a href="<?=$row3['me_link']?>"><?=$row3['me_name']?></a></li>
										<?php
										} }
										?>	
										 <!--li class="depth2 clickSlide">
											<a href="javascript:;"></a><i class="fas fa-angle-down"></i>
										</li-->
							</ul>
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
                <h1><?=$sub_txt2?></h1>
            </div>
            <?php } ?>
            <?php } ?>