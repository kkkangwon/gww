<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<link rel="stylesheet" href="<?php echo $board_skin_url?>/woothemes/css/demo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $board_skin_url?>/woothemes/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<!-- Modernizr -->
<script src="<?php echo $board_skin_url?>/woothemes/js/modernizr.js"></script>
<!-- 시작 -->




<!--
<div id="bg">
    <img src="<?=$file_1?>" alt="">
</div>
-->
<style>
    
    .content_view_wrap { padding-left: 40px; padding-right: 20px; }
    .content_view_wrap h3 {line-height: 32px; 
        font-family: 'Malgun Gothic', '맑은 고딕', 'Nanum Gothic', '돋움', dotum, sans-serif;
        font-weight: 700;
        font-size: 29px;
        letter-spacing: 0 !important;
        text-transform: inherit;
        color: #71C3F9;
    }
    .content_view_wrap table.table {
        border-bottom: 1px #eee solid;
    }
    .content_view_wrap table.table th {line-height: 28px !important; background-color: #f7f7f7;}
    .content_view_wrap .content {line-height: 26px;
    font-size: 14px;
    }
    .content_view_wrap span.glyphicon {font-size: 13px;}
    .view-zoom-img div { margin-bottom: 30px;}
    #skin-view-wrap .content-title { text-align: center; padding-bottom: 60px; padding-top: 100px; }
    #skin-view-wrap .content-title h4 {font-weight: 400 !important; text-decoration: underline; font-size: 30px !important;}
    #carousel {margin-top: 30px;}
    .view_wrap .content {min-height: 265px; text-transform: none !important;}

    @media (max-width:768px){

        .content_view_wrap { padding-left: 15px; padding-right: 15px; }
        .content_view_wrap h3 {
        line-height: 24px;
        font-family: 'Malgun Gothic', '맑은 고딕', 'Nanum Gothic', '돋움', dotum, sans-serif;
        font-weight: 700;
        font-size: 20px;
        letter-spacing: 0 !important;
        text-transform: inherit;
        color: #71C3F9;
            margin-top: 30px;
    }
    }
@media screen and (max-width: 440px) {

    #carousel {
        margin-top: 0;
        padding-top: 0;
    }
    #slider,
    .slider,
    .flexslider {
    padding-bottom: 0;
    margin-bottom: 0;
    }
    .content_view_wrap {padding-left: 0; margin-right: 0;}

    
}
@media screen and (max-width: 1600px) {
    .view_wrap .content {min-height: auto;}
}
    .btn-group {float: right; margin-top: 35px;}
    .btn-group .btn {font-size: 12px; padding: 3px 9px; }
 
</style>

<div id="skin-view-wrap">
<div class="clearfix"></div>
<!--    슬라이드 -->
<body class="loading">
<div class="cf">
<div id="main" role="main">
<section class="slider">
<!--  슬라이드 마감  -->
<div class="row view_wrap">
<div class="col-md-6"> <!--<img src="<?=$file_1?>" alt="">-->
    <div id="slider" class="flexslider">
      <ul class="slides">
        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            for ($i=0; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                     echo "<li>\n";
                    echo get_view_thumbnail($view['file'][$i]['view']);
                    echo "</li>\n";
                }
            }  
        }
         ?>

      </ul>
    </div>
    <?php
        $mobile_agent = array("iPhone","iPod","IPad","Android","Blackberry","SymbianOS|SCH-M\d+","Opera Mini","Windows CE","Nokia","Sony","Samsung","LGTelecom","SKT","Mobile","Phone");
        $check_mobile = false;
        for($i=0; $i<sizeof($mobile_agent); $i++){
            if(stripos( $_SERVER['HTTP_USER_AGENT'], $mobile_agent[$i] )){
                $check_mobile = true;
                break;
                }
    }if($check_mobile) {?>
    <div id="carousel" class="flexslider">
        <ul class="slides">
            <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            for ($i=0; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                     echo "<li>\n";
                    echo get_view_thumbnail($view['file'][$i]['view']);
                    echo "</li>\n";
                }
            }  
        }
         ?>

            
        </ul>
    </div>
    <?php } ?>
    
</div>
<div class="col-md-6">
    <div class="content_view_wrap">
    <h3><?php echo $view['wr_subject']?> <div class="btn-group btn-group-xs" role="group" aria-label="...">
      <button type="button" class="btn btn-default" onclick="location.href='<?php echo $prev_href ?>'"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></button>
      <button type="button" class="btn btn-default" onclick="location.href='<?php echo $list_href ?>'"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button>
      <button type="button" class="btn btn-default" onclick="location.href='<?php echo $next_href ?>'"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
      <?php if($is_admin) { ?>
      <button type="button" class="btn btn-info" onclick="location.href='<?php echo $write_href ?>'">write</button>
      <button type="button" class="btn btn-success" onclick="location.href='<?php echo $update_href ?>'">modified</button>
      <button type="button" class="btn btn-danger" onclick="location.href='<?php echo $delete_href ?>'">delete</button>
      
      <?php } ?>
    </div></h3>
    
    <table class="table">
       <tr>
           <th><?php if($group['gr_id'] == "project03"){ echo "년도"; }else{  echo "설계년도"; } ?></th>
           <td><?php echo $view['wr_1']?></td>
           <th><?php if($group['gr_id'] == "project03"){ echo "위치"; }else{  echo "대지위치"; } ?></th>
           <td><?php echo $view['wr_2']?></td>
        </tr>  
        <tr>
           <th>대지면적</th>
           <td><?php echo $view['wr_3']?></td>
           <th>연면적</th>
           <td><?php echo $view['wr_4']?></td>
        </tr> 
        <tr>
           <th><?php if($group['gr_id'] == "project03"){ echo "공사내용"; }else{  echo "용도"; } ?></th>
           <td><?php echo $view['wr_5']?></td>
           <th>발주처</th>
           <td><?php echo $view['wr_6']?></td>
        </tr> 
    </table>
    <div class="content">
    <?php echo $view['wr_content']?>

    </div>
    <div id="carousel" class="flexslider">
        <ul class="slides">
            <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            for ($i=0; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                     echo "<li>\n";
                    echo get_view_thumbnail($view['file'][$i]['view']);
                    echo "</li>\n";
                }
            }  
        }
         ?>

            
        </ul>
    </div>
</div>
    </div>
</div>
<!-- 슬라이드 -->
</section>    
      </div>
    </div>
</body>
<!-- 슬라이드 마감 -->
<div class="content-title mt30" style="display:none;">
    <div class="line"> &nbsp;</div>
    <h4>Read More</h4>
</div>
<div class="row view-zoom-img" style="display:none;">
<div class="col-md-6"><img src="<?=$file_1?>" alt=""></div>
<div class="col-md-6"><img src="<?=$file_2?>" alt=""></div>
<div class="col-md-6"><img src="<?=$file_3?>" alt=""></div>
<div class="col-md-6"><img src="<?=$file_4?>" alt=""></div>
</div>
</div>
<!--<div class="clearfix p30"></div>-->
<!--
<img src="<?=$file_1?>" />
<img src="<?=$file_2?>" />
-->

<!-- 게시물 읽기 시작 { -->
<div id="bo_v_table"><?php echo $board['bo_subject']; ?></div>

<article id="bo_v" style="width:<?php echo $width; ?>; display:none;"> 


    <section id="bo_v_info">
        <h2>페이지 정보</h2>
        작성자 <strong><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong>
        <span class="sound_only">작성일</span><strong><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>
        조회<strong><?php echo number_format($view['wr_hit']) ?>회</strong>
    </section>

    <?php
    if ($view['file']['count']) {
        $cnt = 0;
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
     ?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong>
                    <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드</span>
                <span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

    <?php
    if (implode('', $view['link'])) {
     ?>
     <!-- 관련링크 시작 { -->
    <section id="bo_v_link">
        <h2>관련링크</h2>
        <ul>
        <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
         ?>
            <li>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    <img src="<?php echo $board_skin_url ?>/img/icon_link.gif" alt="관련링크">
                    <strong><?php echo $link ?></strong>
                </a>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>

    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
         ?>
        <?php if ($prev_href || $next_href) { ?>
        <ul class="bo_v_nb">
            <?php if ($prev_href) { ?><li><a href="<?php echo $prev_href ?>" class="btn btn-default">이전글</a></li><?php } ?>
            <?php if ($next_href) { ?><li><a href="<?php echo $next_href ?>" class="btn btn-default">다음글</a></li><?php } ?>
        </ul>
        <?php } ?>

        <ul class="bo_v_com">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn btn-default">수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn btn-default" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn btn-default" onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn btn-default" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn btn-default">검색</a></li><?php } ?>
            <li><a href="<?php echo $list_href ?>" class="btn btn-default">목록</a></li>
            <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn btn-default">답변</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn btn-primary">글쓰기</a></li><?php } ?>
        </ul>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>

        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            echo "<div id=\"bo_v_img\">\n";

            for ($i=0; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                    echo get_view_thumbnail($view['file'][$i]['view']);
                }
            }

            echo "</div>\n";
        }
         ?>

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php//echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>

        <!-- 스크랩 추천 비추천 시작 { -->
        <?php if ($scrap_href || $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn-default" onclick="win_scrap(this.href); return false;">스크랩</a><?php } ?>
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="btn btn-default">추천 <strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="btn btn-default">비추천  <strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span>추천 <strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span>비추천 <strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <!-- } 스크랩 추천 비추천 끝 -->
    </section>

    <?php
    include_once(G5_SNS_PATH."/view.sns.skin.php");
    ?>

    <?php
    // 코멘트 입출력
   // include_once('./view_comment.php');
     ?>

    <!-- 링크 버튼 시작 { -->
    <div id="bo_v_bot" style="display:none;">
        <?php echo $link_buttons ?>
    </div>
    <!-- } 링크 버튼 끝 -->

</article>
<!-- } 게시판 읽기 끝 -->
<!-- 슬라이드 제이쿼리 -->
<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="<?php echo $board_skin_url?>/woothemes/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 150,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="<?php echo $board_skin_url?>/woothemes/js/shCore.js"></script>
  <script type="text/javascript" src="<?php echo $board_skin_url?>/woothemes/js/shBrushXml.js"></script>
  <script type="text/javascript" src="<?php echo $board_skin_url?>/woothemes/js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="<?php echo $board_skin_url?>/woothemes/js/jquery.easing.js"></script>
  <script src="<?php echo $board_skin_url?>/woothemes/js/jquery.mousewheel.js"></script>
  <script defer src="<?php echo $board_skin_url?>/woothemes/js/demo.js"></script>
</body>
<!-- 슬라이드 제이쿼리 마감 -->
<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->