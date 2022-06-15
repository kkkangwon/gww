<?php
 switch ($bo_table) {      
    case "notice":
		$pageNum = "2";
        $subNum = "0";
        $depth1 = "알림마당";
        $depth2 = "{$board['bo_subject']}"; 
	break;
    case "portfolio":
		$pageNum = "1";
        $subNum = "3";
        $depth1 = "사업소개";
        $depth2 = "{$board['bo_subject']}"; 
	break;
    case "recruitment":
		$pageNum = "2";
        $subNum = "1";
        $depth1 = "알림마당";
        $depth2 = "{$board['bo_subject']}"; 
	break;  
    case "reference":
		$pageNum = "2";
        $subNum = "2";
        $depth1 = "알림마당";
        $depth2 = "{$board['bo_subject']}"; 
	break;   
    case "management":
		$pageNum = "2";
        $subNum = "3";
        $depth1 = "알림마당";
        $depth2 = "{$board['bo_subject']}"; 
	break;   
    case "contribute":
		$pageNum = "2";
        $subNum = "4";
        $depth1 = "사회공헌활동";
        $depth2 = "{$board['bo_subject']}"; 
	break;     

      case "qa":
		$pageNum = "3";
        $subNum = "0";
        $depth1 = "고객참여";
        $depth2 = "{$board['bo_subject']}"; 
	break;
         
     case "cs":
		$pageNum = "3";
        $subNum = "1";
        $depth1 = "고객참여";
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