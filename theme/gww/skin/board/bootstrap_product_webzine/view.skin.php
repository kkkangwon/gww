<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/view.css">', 0);
?>
<link href="<?=$board_skin_url?>/fotorama.css" rel="stylesheet">
<link href="<?=$board_skin_url?>/fotorama-wiz.css" rel="stylesheet">
<script src="<?=$board_skin_url?>/fotorama.js"></script>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->

<article id="bo_v" style="width:<?php echo $width; ?>">

    <div class="fotorama_wrap">
        <div class="title_wrap">
            <h1><?php echo cut_str(get_text($view['wr_subject']), 70);?></h1>
        </div>
        <section id="fotorama-wiz">
            <div class="fotorama" data-navposition="top" data-nav="thumbs" data-arrows="true" data-loop="true" data-maxheight="1430">
                <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            foreach($view['file'] as $view_file) {
                echo get_file_thumbnail($view_file);
            }
        }
         ?>
            </div>
        </section>


    </div>
    <section id="bo_v_atc" class="p0 m0">
        <h2 id="bo_v_atc_title">본문</h2>


        <?php
            // 파일 출력
            $v_img_count = count($view['file']);
            if($v_img_count) {
                echo "<div id=\"bo_v_img\" hidden>\n";

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
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>
        <?php if($view['wr_1']){ ?>
        <section class="spac-table">
            <div class="table_wrap">
                <table class="table table-hover ">
                    <caption> <i class="fas fa-chevron-circle-down"></i> Specification</caption>
                    <thead></thead>
                    <tbody>
                        <tr>
                            <th>· 재질</th>
                            <td><?php echo $view['wr_1'];?></td>
                        </tr>
                        <tr>
                            <th>· 규격</th>
                            <td><?php echo $view['wr_2'];?> </td>
                        </tr>
                        <tr>
                            <th>· 제품설명</th>
                            <td><?php echo $view['wr_3'];?></td>
                        </tr>
                        <tr>
                            <th>· 제품특징</th>
                            <td><?php echo $view['wr_4'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <?php } ?>
        <div id="bo_v_share">
            <?php include_once(G5_SNS_PATH."/view.sns.skin.php"); ?>
        </div>



        <!--  추천 비추천 시작 { -->
        <?php if ( $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
                if($board['bo_use_good'] || $board['bo_use_nogood']) {
            ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span class="bo_v_good"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
                }
            }
            ?>
        <!-- }  추천 비추천 끝 -->
    </section>

    <?php
    $cnt = 0;
    if ($view['file']['count']) {
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
                <i class="fa fa-folder-open" aria-hidden="true"></i>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong> <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <br>
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드 | DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
            <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>

    <?php if(isset($view['link'][1]) && $view['link'][1]) { ?>
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
                <i class="fa fa-link" aria-hidden="true"></i>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    <strong><?php echo $link ?></strong>
                </a>
                <br>
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

    <?php if ($prev_href || $next_href) { ?>
    <ul class="bo_v_nb">
        <?php if ($prev_href) { ?><li class="btn_prv"><span class="nb_tit"><i class="fa fa-chevron-up" aria-hidden="true"></i> 이전글</span><a href="<?php echo $prev_href ?>"><?php echo $prev_wr_subject;?></a> <span class="nb_date"><?php echo str_replace('-', '.', substr($prev_wr_date, '2', '8')); ?></span></li><?php } ?>
        <?php if ($next_href) { ?><li class="btn_next"><span class="nb_tit"><i class="fa fa-chevron-down" aria-hidden="true"></i> 다음글</span><a href="<?php echo $next_href ?>"><?php echo $next_wr_subject;?></a> <span class="nb_date"><?php echo str_replace('-', '.', substr($next_wr_date, '2', '8')); ?></span></li><?php } ?>
    </ul>
    <?php } ?>
    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_admin btn" title="수정"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">수정</span></a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_admin btn" title="삭제" onclick="del(this.href); return false;"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">삭제</span></a></li><?php } ?>
            <li><a href="<?php echo $list_href ?>" class="btn_admin btn" title="목록"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">목록</span></a></li>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
    <ul class="bo_v_com" hidden>
        <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_admin btn">수정</a></li><?php } ?>
        <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn-pack white" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
        <!--
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn btn-warning" onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>"  class="btn btn-warning" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>"  class="btn btn-default">검색</a></li><?php } ?>
-->
        <li><a href="<?php echo $list_href ?>" class="btn-pack white">목록</a></li>
        <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn-pack white">답변</a></li><?php } ?>
        <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn-pack blue">글쓰기</a></li><?php } ?>
    </ul>

    <?php
    // 코멘트 입출력
    include_once(G5_BBS_PATH.'/view_comment.php');
	?>
</article>
<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if (!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if (confirm(msg)) {
            var href = $(this).attr("href") + "&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href) {
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
        if (this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
  //  $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx) {
    $.post(
        href, {
            js: "on"
        },
        function(data) {
            if (data.error) {
                alert(data.error);
                return false;
            }

            if (data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if ($tx.attr("id").search("nogood") > -1) {
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