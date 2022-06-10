<?php
  switch ($gr_id) {
	 case "product":
		$pageNum = "2";
        $depth1 = "제품소개";
		//$depth2 = "$board[bo_subject]";
          $depth2 = "준비중";
		$depth1_text = "최상의 퀄리티로 보답하겠습니다.";
	
	break;
  }


		
 switch ($bo_table) {
         
    case "about_06":
		$pageNum = "1";
		$subNum = "6";
		$depth1 = "경운박물관";
        $depth2 = "임원게시판";
        $pages = "full";
	break;
    case "info_01":
		$pageNum = "2";
		$subNum = "1";
		$depth1 = "박물관 안내";
        $depth2 = "소장품이야기";
        $pages = "full";
	break;
    case "info_02":
		$pageNum = "2";
		$subNum = "2";
		$depth1 = "박물관 안내";
        $depth2 = "소장품";
        $pages = "full";
	break;
    case "info_04":
		$pageNum = "2";
		$subNum = "3";
		$depth1 = "박물관 안내";
        $depth2 = "발간도록";
        $pages = "full";
	break;
   
    case "exhibition_01":
		$pageNum = "3";
		$subNum = "1";
		$depth1 = "전시안내";
        $depth2 = "현재전시";
        $pages = "full";
	break;
    case "exhibition_02":
		$pageNum = "3";
		$subNum = "2";
		$depth1 = "전시안내";
        $depth2 = "지난전시";
        $pages = "full";
	break;
    case "exhibition_03":
		$pageNum = "3";
		$subNum = "3";
		$depth1 = "전시안내";
        $depth2 = "전시일정";
        $pages = "full";
	break;
    case "exhibition_04":
		$pageNum = "3";
		$subNum = "4";
		$depth1 = "전시안내";
        $depth2 = "보도자료";
        $pages = "full";
	break;
    case "edu_01":
		$pageNum = "4";
		$subNum = "1";
		$depth1 = "교육안내";
        $depth2 = "박물관강좌";
        $pages = "full";
	break;
    case "edu_02":
		$pageNum = "4";
		$subNum = "2";
		$depth1 = "교육안내";
        $depth2 = "전시 연계 교육";
        $pages = "full";
	break;
    case "custo_01":
		$pageNum = "1";
		$subNum = "1";
		$depth1 = "고객게시판";
        $depth2 = "공지사항";
        $pages = "full";
	break;
    case "custo_02":
		$pageNum = "6";
		$subNum = "2";
		$depth1 = "고객게시판";
        $depth2 = "FAQ";
        $pages = "full";
	break;


	  
  };
switch ($pageNum) {  
    case "1":
        $depth3 = "저희 경운 박물관은 2003년 4월 15일 개관하였습니다.";
        break;
    case "2":
        if($subNum != "3") {
        $depth3 = "문화가 숨쉬는 경운박물관의 소장품을 보실 수 있습니다.";
        }else{ 
        $depth3 = "옛 것을 따뜻한 눈으로 바라보고 새로운 것을 창조하다";
        }
        break;
    case "3":
        $depth3 = "경운박물관의 전시일정을 안내해 드립니다.";
        break;
    case "4":
        $depth3 = "경운박물관에 대해 알아 봅니다.";
        break;
    case "5":
        $depth3 = "전통과 문화가 숨쉬고 세대간의 대화가 이루어지는 아름다운 공간";
        break;
    case "6":
        if($subNum == "1"){
        $depth3 = "경운박물관의 새로운 소식을 알려드립니다.";
        }else{
        $depth3 = "궁금한 점이 있을시에는 언제든 문의해 주시기 바랍니다.";
        } 
        
        break;
 };
  ?>