<?
include_once("./_common.php");

// 분류 사용 여부
$is_category = false;
$category_option = '';
if ($board['bo_use_category']) {
    $is_category = true;
    $category_href = G4_BBS_URL.'/board.php?bo_table='.$bo_table;

    $category_option .= '<li><a href="'.$category_href.'"';
    if ($sca=='')
        $category_option .= ' id="bo_cate_on"';
    $category_option .= '>전체</a></li>';

    $categories = explode('|', $board['bo_category_list']); // 구분자가 , 로 되어 있음
    for ($i=0; $i<count($categories); $i++) {
        $category = trim($categories[$i]);
        if ($category=='') continue;
        $category_option .= '<li><a href="'.($category_href."&amp;sca=".urlencode($category)).'"';
        if ($category==$sca)
            $category_option .= ' id="bo_cate_on"';
        $category_option .= '>'.$category.'</a></li>';
    }
}

$sop = strtolower($sop);
if ($sop != 'and' && $sop != 'or')
    $sop = 'and';

// 분류 선택 또는 검색어가 있다면
$stx = trim($stx);
if ($sca || $stx) {
    $sql_search = get_sql_search($sca, $sfl, $stx, $sop);

    // 가장 작은 번호를 얻어서 변수에 저장 (하단의 페이징에서 사용)
    $sql = " select MIN(wr_num) as min_wr_num from {$write_table} ";
    $row = sql_fetch($sql);
    $min_spt = (int)$row['min_wr_num'];

    if (!$spt) $spt = $min_spt;

    $sql_search .= " and (wr_num between {$spt} and ({$spt} + {$config['cf_search_part']})) ";

    // 원글만 얻는다. (코멘트의 내용도 검색하기 위함)
    $sql = " select distinct wr_parent from {$write_table} where {$sql_search} ";
    $result = sql_query($sql);
    $total_count = mysql_num_rows($result);
} else {
    $sql_search = "";

    $total_count = $board['bo_count_write'];
}

if(G4_IS_MOBILE) {
    $page_rows = $board['bo_mobile_page_rows'];
} else {
    $page_rows = $board['bo_page_rows'];
}

$total_page  = ceil($total_count / $page_rows);  // 전체 페이지 계산
if (!$page) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $page_rows; // 시작 열을 구함

// 관리자라면 CheckBox 보임
$is_checkbox = false;
if ($is_member && ($is_admin == 'super' || $group['gr_admin'] == $member['mb_id'] || $board['bo_admin'] == $member['mb_id']))
    $is_checkbox = true;

// 정렬에 사용하는 QUERY_STRING
$qstr2 = 'bo_table='.$bo_table.'&amp;sop='.$sop;

// 0 으로 나눌시 오류를 방지하기 위하여 값이 없으면 1 로 설정
$bo_gallery_cols = $board['bo_gallery_cols'] ? $board['bo_gallery_cols'] : 1;
$td_width = (int)(100 / $bo_gallery_cols);

// 정렬
// 인덱스 필드가 아니면 정렬에 사용하지 않음
//if (!$sst || ($sst && !(strstr($sst, 'wr_id') || strstr($sst, "wr_datetime")))) {
if (!$sst) {
    if ($board['bo_sort_field']) {
        $sst = $board['bo_sort_field'];
    } else {
        $sst  = "wr_num, wr_reply";
    $sod = "";
    }
} else {
    // 게시물 리스트의 정렬 대상 필드가 아니라면 공백으로 (nasca 님 09.06.16)
    // 리스트에서 다른 필드로 정렬을 하려면 아래의 코드에 해당 필드를 추가하세요.
    // $sst = preg_match("/^(wr_subject|wr_datetime|wr_hit|wr_good|wr_nogood)$/i", $sst) ? $sst : "";
    $sst = preg_match("/^(wr_datetime|wr_hit|wr_good|wr_nogood)$/i", $sst) ? $sst : "";
}

if ($sst) {
    $sql_order = " order by {$sst} {$sod} ";
}



	
if ($sca || $stx) {
    $sql = " select distinct wr_parent from {$write_table} where {$sql_search} {$sql_order} limit {$from_record}, $page_rows ";
} else {
    $sql = " select * from {$write_table} where wr_is_comment = 0 {$sql_order} limit {$from_record}, $page_rows ";
}





$result = sql_query($sql);

// 년도 2자리
$today2 = G4_TIME_YMD;

$list = array();
$i = 0;

if (!$sca && !$stx) {
    $arr_notice = explode(',', trim($board['bo_notice']));
    for ($k=0; $k<count($arr_notice); $k++) {
        if (trim($arr_notice[$k])=='') continue;

        $row = sql_fetch(" select * from {$write_table} where wr_id = '{$arr_notice[$k]}' ");

        if (!$row['wr_id']) continue;

        $list[$i] = get_list($row, $board, $board_skin_url, G4_IS_MOBILE ? $board['bo_mobile_subject_len'] : $board['bo_subject_len']);
        $list[$i]['is_notice'] = true;

        $i++;
    }
}

$k = 0;

while ($row = sql_fetch_array($result))
{
    // 검색일 경우 wr_id만 얻었으므로 다시 한행을 얻는다
    if ($sca || $stx)
        $row = sql_fetch(" select * from {$write_table} where wr_id = '{$row['wr_parent']}' ");

    $list[$i] = get_list($row, $board, $board_skin_url, G4_IS_MOBILE ? $board['bo_mobile_subject_len'] : $board['bo_subject_len']);
    if (strstr($sfl, 'subject')) {
        $list[$i]['subject'] = search_font($stx, $list[$i]['subject']);
    }
    $list[$i]['is_notice'] = false;
    $list[$i]['num'] = $total_count - ($page - 1) * $page_rows - $k;

    if($endpage != ""){
    	$pagev = (int)(($k / $board[bo_page_rows]) + 1);
    	$list[$i][href] = $list[$i][href]."&page=".$pagev;
    }    
    
    $i++;
    $k++;
}

$stx = get_text(stripslashes($stx));

sleep(1);
for ($i=0; $i<count($list); $i++) { 
	if($i == count($list)-1)
		echo $list[$i][wr_id];
	else
		echo $list[$i][wr_id]."||";
}

?>
