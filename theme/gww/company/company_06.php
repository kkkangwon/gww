<?php
$pageNum = "0";
$subNum = "5";
$depth1 = "회사소개";
$depth2 = "찾아오시는 길";
include_once('../../../common.php');
include_once('../../../_head.php');
?>
   
<div id="map" style="width:100%;height:350px;"></div>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=35c3dd67e69d223b1f8c29c635e2e8ba"></script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(37.325440, 127.988155), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

// 마커가 표시될 위치입니다 
var markerPosition  = new kakao.maps.LatLng(37.325440, 127.988155); 

// 마커를 생성합니다
var marker = new kakao.maps.Marker({
    position: markerPosition
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);

// 아래 코드는 지도 위의 마커를 제거하는 코드입니다
// marker.setMap(null);    
</script>    
<section class="company company_04">
<div class="table_wrap">
        <div class="title">
        <h2>대한복지진흥원 <span>Korea Welfare Organization</span></h2>
        </div>
        <table class="table table-hover data-font-size" data-font-size="16px">
            
            <thead></thead>
            <tbody>

                <tr>
                    <th>주소</th>
                    <td>강원도 원주시 건강로 21-1 서영에비뉴파크 2차, 506호(반곡동)</td>
                </tr>
				<tr>
					<th>전화</th>
                    <td>080-800-9000</td>
				</tr>
				<tr>
					<th>FAX</th>
                    <td>000-000-0000</td>
				</tr>
                <!--<tr>
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
    <?
<?php echo include_once('../../../_tail.php');?>