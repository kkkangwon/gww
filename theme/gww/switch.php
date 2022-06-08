<?php
 switch ($bo_table) {      
    case "product_01":
		$pageNum = "1";
        $subNum = "0";
        $depth1 = "제품소개";
        $depth2 = "{$board['bo_subject']}"; 
	break;
    case "product_02":
		$pageNum = "1";
        $subNum = "1";
        $depth1 = "제품소개";
        $depth2 = "{$board['bo_subject']}"; 
	break;
    case "product_03":
		$pageNum = "1";
        $subNum = "2";
        $depth1 = "제품소개";
        $depth2 = "{$board['bo_subject']}"; 
	break;  
    case "product_04":
		$pageNum = "1";
        $subNum = "3";
        $depth1 = "제품소개";
        $depth2 = "{$board['bo_subject']}"; 
	break;   
    case "product_05":
		$pageNum = "1";
        $subNum = "4";
        $depth1 = "제품소개";
        $depth2 = "{$board['bo_subject']}"; 
	break;   
    case "product_06":
		$pageNum = "1";
        $subNum = "5";
        $depth1 = "제품소개";
        $depth2 = "{$board['bo_subject']}"; 
	break;     

      case "free":
		$pageNum = "2";
        $subNum = "0";
        $depth1 = "인재채용";
        $depth2 = "{$board['bo_subject']}"; 
	break;
         
     case "notice":
		$pageNum = "3";
        $subNum = "0";
        $depth1 = "고객센터";
        $depth2 = "{$board['bo_subject']}"; 
	break;
     case "qa":
		$pageNum = "3";
        $subNum = "1";
        $depth1 = "고객센터";
        $depth2 = "{$board['bo_subject']}"; 
	break;
     case "gallery":
		$pageNum = "3";
        $subNum = "2";
        $depth1 = "고객센터";
        $depth2 = "{$board['bo_subject']}"; 
	break;
   
     case "online":
		$pageNum = "4";
        $subNum = "0";
        $depth1 = "온라인 문의";
        $depth2 = "{$board['bo_subject']}"; 
	break;  	  
  };
  switch ($co_id) {      
    case "company":
		$pageNum = "2";
        $subNum = "1";
        $depth1 = "content페이지";
        $depth2 = "컨텐츠 페이지"; 
	break;
  };

?>