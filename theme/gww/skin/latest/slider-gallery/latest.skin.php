<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 682;
$thumb_height = 429;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<div class="slider_wrap  animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.5s">
<div class="container" >
            <div class="arrows_wrap2"><span class="s-Arrows2 animate" data-animate="fadeInDown" data-duration="1.4s" data-delay="0.3s"></span></div>
            <div class="slider-gallery box_wrap">
            <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
                <div class="box">
                    <?php echo $img_content?>
                    <div class="overlay">
                        <div class="text">
                            <a href="<?php echo $list[$i]['href'] ?>">
                                <h2><?php echo $list[$i]['wr_subject']; ?></h2>
                                <span>
                                <?php echo cut_str(strip_tags($list[$i]['wr_content']), 200)?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
            </div>
        </div>
</div>
<script>
    $(document).ready(function() {
        $('.slider-gallery').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: true,
            cssEase: 'linear',
            pauseOnHover: true,

            responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    dots: true
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 2
                }
            }]
        });
    });
    </script>

