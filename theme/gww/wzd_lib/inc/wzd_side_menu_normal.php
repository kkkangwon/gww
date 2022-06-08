<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/wzd_lib/inc/wzd_side_menu_normal.css">

<script src="<?php echo G5_THEME_URL; ?>/wzd_lib/inc/wzd_side_menu_normal.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <div class="title_wrap">
       <h2><?php echo $depth1?></h2>
       <span><?php echo $depth2?></span>
   </div>
      <div id="wzd_side_menu_normal">
  <ul class="nav nav-pills nav-stacked">
      <?php if($pageNum == "1") { ?>
      <li<?php if($subNum == "1") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/company/company_01.php"> CEO인사말</a> <?php if($subNum == "1") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?>
      </li>
      <li<?php if($subNum == "2") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/company/company_02.php">연혁</a> <?php if($subNum == "2") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?>
      </li>
      <li<?php if($subNum == "3") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/company/company_03.php">설립목적</a> <?php if($subNum == "3") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?>
      </li>

      <li<?php if($subNum == "4") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/company/company_04.php">입회방법</a> <?php if($subNum == "4") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?> 
      </li>

      <li<?php if($subNum == "5") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/company/company_05.php">오시는 길</a><?php if($subNum == "5") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?>
      </li>
      
      <?php }else if($pageNum == "2") { ?>
          <li<?php if($subNum == "1") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/curri/curri_01.php"> 한국 다도교육지도자</a> <?php if($subNum == "1") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?>
          </li>
          <li<?php if($subNum == "2") { ?> class="active"<?php }  ?>><a href="<?php echo G5_THEME_URL; ?>/curri/curri_02.php">한국 예절 교육지도자</a> <?php if($subNum == "2") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?>
          </li>
          <li<?php if($subNum == "3") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/curri/curri_03.php">티플래너</a> <?php if($subNum == "3") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?> 
          </li>

          <li<?php if($subNum == "4") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/curri/curri_04.php">가정의례지도자</a> <?php if($subNum == "4") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?> 
          </li>

          <li<?php if($subNum == "5") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/curri/curri_05.php">차와 명상</a><?php if($subNum == "5") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?>
          <li<?php if($subNum == "6") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/curri/curri_06.php">전통음식 지도자</a><?php if($subNum == "6") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?>
          <li<?php if($subNum == "7") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/curri/curri_07.php">규방공예</a><?php if($subNum == "7") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?>
          </li>  
      
      
      <?php }else if($pageNum == "3") { ?>
          <li<?php if($subNum == "1") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/program/program_01.php"> 열린문예원 프로그램</a> <?php if($subNum == "1") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?> 
          </li>
      <?php }else if($pageNum == "4") { ?>
          <li<?php if($subNum == "1") { ?> class="active"<?php } ?>><a href="<?php echo G5_THEME_URL; ?>/event/event_01.php"> 의례행사</a> <?php if($subNum == "1") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?> 
          </li>
      

      
   

      
      
      <?php }else{ ?>
      <?php } ?>
  </ul>
</div>
<!--
기본 
<nav id="wzd_side_menu_normal">
  <ul class="nav nav-pills nav-stacked">
      <li class="has-sub<?php if($pageNum == "1" && $subNum != "1" && $subNum != "2") { ?> active<?php } ?>"><a class="menu_head">회사소개</a>
           <ul<?php if($pageNum == "1") { ?> style="display:block"<?php } ?>>
             <li<?php if($subNum == "1") { ?> class="active"<?php } ?>><a href='<?php echo G5_THEME_URL; ?>/company/company_01.php'>회사소개</a></li>
             <li class='last <?php if($subNum == "2") { ?>active<?php } ?>'><a href='<?php echo G5_THEME_URL; ?>/company/company_02.php'>오시는 길</a></li>
           </ul>
      </li>
      <li class="has-sub <?php if($pageNum == "2") { ?>active<?php } ?>"><a class="menu_head" href='#'>제품소개</a>
          <ul>
             <li class='has-sub'><a href='#'>Product 1</a></li>
             <li class='last'><a href='#'>Product 1</a></li>
           </ul>
      </li>
      <li<?php if($pageNum == "3") { ?> class="active"<?php } ?>><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=notice">공지사항</a> <?php if($pageNum == "3") { ?><i class="glyphicon glyphicon-chevron-right"></i><?php } ?></li>
      <li<?php if($pageNum == "4") { ?> class="active"<?php } ?>><a href="<?php echo G5_BBS_URL; ?>/write.php?bo_table=inquiry">기술/제품문의</a></li>
      <li<?php if($pageNum == "5") { ?> class="active"<?php } ?>><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=catalog">카달로그</a></li>
  </ul>
</nav>
-->


<!--
three deth 일시 
 <ul class="nav nav-pills nav-stacked">
 <li class='has-sub'><a href='#'>제품소개</a>
    <ul>
       <li class='has-sub'><a href='#'>Product 1</a></li>
         <ul>
             <li><a href='#'>Sub Product</a></li>
             <li class='last'><a href='#'>Sub Product</a></li>
          </ul>
       </li>
       <li class='has-sub'><a href='#'>Product 2</a>
          <ul>
             <li><a href='#'>Sub Product</a></li>
             <li class='last'><a href='#'>Sub Product</a></li>
          </ul>
       </li>
    </ul>
-->

