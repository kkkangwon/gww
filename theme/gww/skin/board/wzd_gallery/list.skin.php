<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<style>
    .vertical-align {cursor: pointer;}
    .vertical-align h4 {
        font-size: 18px !important;
        text-transform: inherit;
        letter-spacing: 2px;
        line-height: 23px !important;
        padding-left: 15px;
        padding-right: 15px;
        display: block !important;
        
    }
    .vertical-align h4 a,
    .vertical-align h4 a:link,
    .vertical-align h4 a:visited {color: #fff; margin-bottom: 10px; display: block !important;}
    .vertical-align h4 a:hover {color: #d1f4ff;}
    .vertical-align h5 {
        text-transform: inherit;
        font-size: 13px !important;
        font-weight: 400;
        color: #c1c1c1 !important;

    }
    .wit {
        text-align: center;
        font-weight: 700;
        margin-top: 100px;
      
        font-size: 13px;
    }
    .text_left_subject {
        position: absolute;
/*        background-color: rgba(0, 0, 0, 0.5);*/
        background: rgba(29, 69, 159, 0.5);
        font-size: 12px;
        padding: 3px 12px;
        color: #fff;
        bottom: 0;
        width: 100%;
        text-align: center;
    }
    .num_cetner {margin: 0 auto; text-align: center; margin-top: 20px; }
    .num_cetner span {font-size: 12px; font-weight: 700;}
    
</style>


    <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">
             
                        
                    <?php if($bo_table != "project_05") { ?>
<!--
						 <div id="filters" class="fillter-wrap filters-style-1" style="text-align:center;">
                             <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=project_01" class="list <?php if($bo_table == "project_01") { echo "active";}?>">ALL</a>
                             <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=project_01" class="list <?php if($bo_table == "project_01") { echo "active";}?>">공공/교통시설</a>
                             <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=project_02" class="list <?php if($bo_table == "project_02") { echo "active";}?>">주거·일반건축</a>
                             <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=project_03" class="list <?php if($bo_table == "project_03") { echo "active";}?>">환경시설</a>
							 <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=project_04" class="list <?php if($bo_table == "project_04") { echo "active";}?>">상업/기타시설</a>
						 </div> 
-->
                    <?php } ?>
                       

              <div class="izotope-container gutt-col5 popup-gallery">
						   <div class="grid-sizer"></div>
                             <?php 
                             $board['bo_gallery_height'] = "300";
                             for ($i=0; $i<count($list); $i++) {
                            if($i>0 && ($i % $bo_gallery_cols == 0))
                                $style = 'clear:both;';
                            else
                                $style = '';
                            if ($i == 0) $k = 0;
                            $k += 1;
                            if ($k % $bo_gallery_cols == 0) $style .= "margin:0 !important;";
                         ?>
                           
							  
                             <div class="item branding photo wow fadeInUpBig">
							    <div class="item-desc black">
                                    <?php if ($is_checkbox) { ?>
                                        <td class="td_chk">
                                            <label for="chk_wr_id_<?php echo $i ?>" class="sound_only">
                                                <?php echo $list[$i]['subject'] ?>
                                            </label>
                                            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                                        </td>
                                    <span><?php echo $list[$i]['num'] ?></span>
                                    <?php } ?>
                                    <?php $thumb2 = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);
                                        
                                     ?>
                                  
								  <div class="vertical-align" onclick="location.href='<?php echo $list[$i]['href'] ?>'">
                                      
                                      <h4><a href="<?php echo $list[$i]['href'] ?>"><?php echo $list[$i]['subject'] ?></a></h4>
<!--									  <h5><?php echo cut_str($list[$i]['wr_content'], 120, "..."); ?></h5>-->
                                      <h5><?php echo $list[$i]['wr_6'] ?></h5>
<!--                                      <a href="<?php echo $thumb2['src'];?>" class="view-item link" data-effect="zoomIn"><i class="fa fa-eye"></i></a>-->
<!--								      <a href="<?php echo $list[$i]['href'] ?>" class="detail-item link"><i class="fa fa-undo"></i></a>-->
									  
									 <!-- <a href="<?php echo $list[$i]['href'] ?>" class="detail-item link"><i class="fa fa-undo"></i></a>
									  <a href="<?php echo G5_BBS_URL; ?>/write.php?bo_table=custo_03" class="detail-item link"><i class="fa fa-user"></i></a>-->
                                     
								  </div> 
								</div> 
                                 <div class="text_left_subject"><?php echo $list[$i]['subject'] ?></div>
								<?php $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);

                        if($thumb['src']) {
                            $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$board['bo_gallery_width'].'" height="'.$board['bo_gallery_height'].'">';
                       
                        echo $img_content;
                    }
                     ?>
							 
                             </div>
                             <?php } ?>
                  
                             
							</div>  
                          <?php if (count($list) == 0) { echo '<div class="wit">자료준비중입니다.</div>'; } ?>

                            
                       


<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>
<?php 
        //이전 다음 페이지
$prev_page_href = '';
$next_page_href = '';
if ($page > 1) $prev_page_href = "./board.php?bo_table=$bo_table" . $qstr . "&page=" . ($page - 1);
if ($page < $total_page) $next_page_href = "./board.php?bo_table=$bo_table" . $qstr . "&page=" . ($page + 1);
        ?>
        <div class="num_cetner">
        <?php if ($prev_page_href) { ?>
            <a href="<?php echo $prev_page_href ?>">
                <button type="button" class="btn btn-default" onclick="location.href='<?php echo $prev_page_href ?>'">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"> </span> <span>Prev</span>
                </button>
            </a>
        <?php } ?>
<?php if ($next_page_href) { ?>
<a href="<?php echo $next_page_href ?>">
    <button type="button" class="btn btn-default"  onclick="location.href='<?php echo $next_page_href ?>'">
    
        <span>Next</span> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"> </span>
    </button>
    </a><?php } ?>
</div>

<!-- 페이지 -->
        <div class="clearfix m-mobile-pageing" style="display:none;">
        <div class="clearfix"><?php echo $write_pages;  ?></div>
            </div> 
    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($is_checkbox) { ?>
        <ul class="btn_bo_adm">
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn-default"></li>
            <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn-default"></li>
            <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"class="btn btn-default"></li>
        </ul>
        <?php } ?>

        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn btn-default">목록</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn btn-default">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
</form>



<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
