<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
if($w = 'u') { // 수정일 시
 // 새글 INSERT
   // sql_query(" insert into {$g5['board_new_table']} ( bo_table, wr_id, wr_num, wr_parent, bn_datetime, mb_id ) values ( '{$bo_table}', '{$wr_id}', '{$wr_num}', '{$wr_id}', '".G5_TIME_YMDHIS."', '{$member['mb_id']}' ) ");
  //  sql_query(" update {$g5['board_new_table']} set wr_num  = 9999 where bn_id = $bn_id ");
};
// 자신만의 코드를 넣어주세요.
if($insert_num && $insert_num >0) {
$insert_num--;
     $sql2 = " select wr_num from $write_table where wr_is_comment = 0 order by wr_num DESC limit $insert_num, 1 ";
	 $result2 = sql_query($sql2);
	 $row2 = sql_fetch_array($result2);
   $move_wr_num= $row2[wr_num];

   if($w =='') $pre_wr_num= $wr_num;
   else {
     $sql3 = " select wr_num from $write_table where wr_id= '$wr_id' ";
	 $result3 = sql_query($sql3);
	 $row3 = sql_fetch_array($result3);
     $pre_wr_num= $row3[wr_num];
   }
//    echo "<br>////////////////1.m_wr_num= $move_wr_num ///pre_wr_num= $pre_wr_num";
//	exit;

   if( $move_wr_num ) 
	   sql_query("update $write_table set wr_num = (wr_num - 1) where wr_num<= $move_wr_num " );
   else $move_wr_num = get_next_num($write_table);

   if($move_wr_num> $pre_wr_num) $pre_wr_num--;

   sql_query("update $write_table set wr_num = $move_wr_num where wr_num= '$pre_wr_num' " );  
   

}; 

 //sql_query2("update {$g5['board_new_table']} SET $bn_id='133' WHERE wr_num='1232' LIMIT 10; " );  
?>