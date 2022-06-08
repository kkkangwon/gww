<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
  <!-- Fotorama -->
  <link href="<?=$board_skin_url?>/fotorama.css" rel="stylesheet">
  <script src="<?=$board_skin_url?>/fotorama.js"></script>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<style>
.portfolio-single-title { color:#000 !important; font-weight:600 !important; margin-bottom:15px !important; }
.category-title { font-size:12px !important; color:#707070 !important;}
.portfolio-meta-container { padding-top:12px !important;}
.portfolio-single-desc {}
.portfolio-single-desc p {font-weight:400 !important; font-size:14px !important;}
.category a:link,
.category a:visited { font-size:12px !important;}
@media screen and (max-width: 600px) {
.page-container {padding-top:30px; border-top:5px #eee solid !important}
.main-container { padding-top:10px !important;}
.portfolio-meta {padding-top:12px !important; padding-left:0; padding-right:0;}
.portfolio-single-desc p {font-size:18px !important; padding-top:5px !important; }

}
</style>

 <div id="main-container" class="main-container ss-ajaxable" data-animation-type="fade-from-bottom" data-animation-speed="0.4" data-animation-out-speed="0.6">
            <div class="inner-wrapper">
                <div class="page-container ss-typography" style="background-color:#fff;">
                    <article class="portfolio-single-container ss-animatable" >
                        <h1 class="portfolio-single-title"><?php echo cut_str(get_text($view['wr_subject']), 70);?></h1>
                        <div class="portfolio-meta-container">
                            <!--<div class="portfolio-meta meta-date">
                                <a href="#">
                                    <span class="icon-calendar4" aria-hidden="true"></span>
                                    <p><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></p>
                                </a>
                            </div>-->
                            <div class="portfolio-meta meta-tag">
                                <a href="#">
                                    <span class="icon-tag6" aria-hidden="true"></span>
                                    <p><?php echo $board['bo_subject']; ?> | <?php echo $view['ca_name']; // 분류 출력 끝?></p>
                                </a>
                            </div>
                            <div class="portfolio-meta meta-comment">
                                <a href="#">
                                    <span class="icon-bubble5" aria-hidden="true"></span>
                                    <p><?php echo number_format($view['wr_hit']) ?></p>
                                </a>
                            </div>
                            
                            <div class="portfolio-meta meta-like">
                                 <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button">
                                    <span class="icon-heart6" aria-hidden="true"></span>
                                    <p><?php echo number_format($view['wr_good']) ?></p><b id="bo_v_act_good"></b>
                                 </a>
                            </div>
                        </div>
 
                        <div class="portfolio-single-desc">
                            <div class="container">
                            <?php $matches = get_editor_image($view['wr_content'], false);?>
                            <div class="fotorama" data-navposition="bottom" data-nav="thumbs" data-arrows="true" data-loop="true"  data-maxheight="800"><?php echo print_r($matches);?></div>      
                            </div>
                            <div class="copy mt30"><strong>인테리어 비디</strong>의 사전 허락 및 계약없이 본 이미지의 무단 사용을 금합니다. <br>
무단 사용시 저작권법 98조에 의거 민형사상 책임을 지게 됩니다.<br>
<span>copyright interior bidi. all right reserved.</span></div>
                        </div>
                        <div class="entry-meta category" style="display:none;">
                            <span class="category-title"><?php echo $board['bo_subject']; ?> | </span>
                            <a href="#" rel="category"><?php echo $view['ca_name']; // 분류 출력 끝?></a>
                        </div>
                       
                        <div>
                           <ul class="bo_v_com">
							  <li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li>
							  <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01">수정</a></li><?php } ?>
                              <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
                              <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin" onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
                              <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
                              <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
                           </ul>
                        </div>
                     
                    </article>
                </div>
                
            </div>
        </div>

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