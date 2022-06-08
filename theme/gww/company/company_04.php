<?php
$pageNum = "0";
$subNum = "3";
$depth1 = "comapny";
$depth2 = "찾아오시는 길";
include_once('../../../common.php');
include_once('../../../_head.php');
?>


<section class="company company_04">
    <h3 class="company_h3">위즈테마 홈페이지를 찾아주신 여러분들을 진심으로 환영합니다.</h3>
    <div id="map" class='embed-container'>
        <p class="sky">위즈테마 </p>
        <div id="daumRoughmapContainer1616633312639" class="root_daum_roughmap root_daum_roughmap_landing"></div>
        <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
        <script charset="UTF-8">
        new daum.roughmap.Lander({
            "timestamp": "1616633312639",
            "key": "25zst",
            // "mapWidth": "1140",
            "mapHeight": "520"
        }).render();
        </script>
    </div>
    <!-- 탭 -->
    <div class="table_wrap">
        <div class="title">
        <h2> 위즈테마 <span>WIZTHEME</span>
                <p class="pull-right"><a href="https://www.google.co.kr/maps/place/%EA%B2%BD%EC%83%81%EB%B6%81%EB%8F%84+%ED%8F%AC%ED%95%AD%EC%8B%9C+%EB%82%A8%EA%B5%AC+%EB%8C%80%EC%9D%B4%EB%8F%99+%ED%9D%AC%EB%A7%9D%EB%8C%80%EB%A1%9C659%EB%B2%88%EA%B8%B8+51/@36.0149198,129.3461422,17z/data=!3m1!4b1!4m5!3m4!1s0x356701bc4f76e8b3:0x16ad43001fd8b4e1!8m2!3d36.0149155!4d129.3483309?hl=ko" class="btn btn-pack data-border-radius data-border" target="_blank"><i class="fa fa-plus-circle"></i> 크게보기 </a></p>
            </h2>
        </div>
        <table class="table table-hover data-font-size" data-font-size="16px">
            
            <thead></thead>
            <tbody>

                <tr>
                    <th>주소</th>
                    <td>본 사 : 서울시 금천구 가마산로 96 대륭테크노8차 000호 </td>
                    <th>전화</th>
                    <td>02-2698-5355</td>
                </tr>
                <tr>
                    <th>버스</th>
                    <td><span class="badge blue">간선</span>204(범물동 - 금호지구)<br>
                        814(대구대 - 범물동)<br>
                        수성1-1 (범물동 - 범물동)<br>
                        수성3-1 (동호동 - 동호동)<br>
                        <span class="badge blue">간선</span>급행3(범물동 - 동명교통) </td>
                    <th>지하철</th>
                    <td>가산디지털단지역 7번출구 앞</td>
                </tr>
                <!-- <tr>
                    <th>sd</th>
                    <td colspan="3">2</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</section>
<?php include_once('../../../_tail.php');?>