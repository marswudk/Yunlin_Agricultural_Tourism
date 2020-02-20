@extends('layouts.front_layout')

@section('Document')
漫遊雲林
@endsection

@section('cdn_links')
<link rel="stylesheet" href="./css/wander.css">
@endsection

@section('css')

@endsection

@section('content')
<div class="banner" id="banner">
    <h1>雲林</h1>
    <div class="mask"></div>

</div>

<section class="searching_menu">
    <div class="banner_menu">
        <ul class="d-flex">
            <li>

                <a type="button" class="btn btn-light" href="#banner">
                    <i class="fas fa-map-marker-alt"></i>
                    首頁
                </a>

            </li>
            <li>

                <a type="button" class="btn btn-light" href="#heat">
                    <i class="fas fa-ticket-alt"></i>景點&表演</a>
            </li>
            <li>

                <a type="button" class="btn btn-light" href="#booking"><i class="fab fa-fly"></i>特色活動&體驗</a>
            </li>
            <li>

                <a type="button" class="btn btn-light" href="#planning">
                    <i class="fas fa-bus"></i>當地交通&旅遊服務</a>
            </li>

        </ul>
    </div>
</section>
<section class="searching_nav">
    <div class="second_nav">
        <ul class="d-flex">
            <li>
                <a href="#banner">首頁</a>
            </li>
            <li>
                <a href="#heat">景點&表演</a>
            </li>
            <li>
                <a href="#booking">特色活動&體驗</a>
            </li>
            <li>
                <a href="#planning">當地交通&旅遊服務</a>
            </li>
        </ul>
    </div>
</section>

<div class="all">
    <div class="container">
        <div class="map_list">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">雲林農業觀光地圖</a></li>
                    <li class="breadcrumb-item active"><a href="#">漫遊雲林</a></li>
                </ol>
            </nav>
        </div>

        <div class="introduction_title">
            <h1>雲林魅力指南</h1>
        </div>
        <div class="introduction_box row">
            <div class="travel_introduction col-8">
                <p>雲林位在臺灣西方的中南部，在嘉南平原最北端。東邊是南投縣，西臨臺灣海峽，南邊隔著北港溪與嘉義縣為鄰，北邊沿著濁水溪和彰化縣接壤。東西最寬的地方有五十公里，南北最長的地方有三十八公里，全縣面積總計一千二百九十點八三五一平方公里。其中十分之九為平原，十分之一為山地，屬亞熱帶型氣候，年均溫攝氏22.6度，年均雨量1028.9毫米。人口約七十三萬五千人。雲林縣有二十個鄉鎮市，除斗六市、古坑鄉及林內鄉靠近山地，地勢較高外，其餘十七鄉鎮均屬平原地區。<br>以農業立縣、橫跨20個鄉鎮的雲林，自然純樸的農村風光與得天獨厚的農產物品，一直以來都是雲林人最引以為傲的資源。倚山傍海的地理優勢，也因此孕育出各式農特產美食，例如古坑的咖啡、臺西的文蛤、口湖的馬蹄蛤與臺灣鯛、斗六的文旦、西螺的醬油、大埤的酸菜、北港的花生與麻油等，每一個都代表了雲林最在地的味道，也是造訪雲林最不能空手而回的伴手禮品。此外，雲林擁有的廟宇數量更是全臺之最，每年都吸引數以萬計的人潮前來參拜。當然，雲林對文化產業的深耕也不能被忽略，臺灣的布袋戲就是從雲林開始發跡，揚名於世，也讓雲林縣享有布袋戲之鄉的美譽。
                </p>
                <a type="button" class="btn btn-light" data-toggle="modal" data-target="#staticBackdrop"
                    href="">查看更多</a>
            </div>

            <div class="weather_card col-4 dropdown">

                <div class="today ">
                    <div class="detail"></div>

                </div>
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    查看未來一周天氣
                </button>
                <div class="future dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="drop-item">

                    </div>

                </div>
            </div>
        </div>


        <div class="activity_title" id="heat">
            <h1>超人氣雲林活動</h1>
        </div>

        <div class="swiper-container act_cards">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001115&id=R113">
                            <img src="./img/pic_R113_6.jpg" class="card-img-top" alt="草嶺風景區">
                            <div class="card-body">
                                <p class="card-text">草嶺舊名番坪坑，位於雲林縣古坑鄉的東邊山區，溪流綿延其間，呈現具風格的天然景色。</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001115&id=9493">
                            <img src="./img/pic_9493_4.jpg" class="card-img-top" alt="西螺大橋">
                            <div class="card-body">
                                <p class="card-text">西螺大橋位於濁水溪下游，橫跨雲林西螺及彰化溪州，形成汽車及小火車並行特殊景觀。</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001115&id=A12-00191">
                            <img src="./img/pic_A12-00191v2.jpg" class="card-img-top" alt="塭港堆燈塔">
                            <div class="card-body">
                                <p class="card-text">塭港堆燈塔位於雲林縣口湖鄉外傘頂洲，是一座建立在沙洲上的燈塔，塔身為鋼架塔。</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001115&id=A12-00250">
                            <img src="./img/pic_A12-00250_1.jpg" class="card-img-top" alt="綠色隧道景觀公園">
                            <div class="card-body">
                                <p class="card-text">雲林縣古坑鄉省道台3線柴里橋往永光方向，兩旁種植許多50年歷史的芒果樹，將整條道路遮蔽成天然隧道。</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001115&id=A12-00248">
                            <img src="./img/pic_A12-00248.jpg" class="card-img-top" alt="虎尾鐵橋">
                            <div class="card-body">
                                <p class="card-text">虎尾鐵橋興建於虎尾糖廠公園旁的虎尾溪上，是國內少數行駛糖廠小火車的鐵軌橋。</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001115&id=A12-00354">
                            <img src="./img/pic_A12-00354_6.jpg" class="card-img-top" alt="椬梧滯洪池">
                            <div class="card-body">
                                <p class="card-text">有雲林版小日月潭美稱的滯洪池，因颱風來襲造成海水倒灌，意外造就濕地廣大的景觀池，孕育了豐富生態。</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001115&id=A12-00353">
                            <img src="./img/pic_A12-00353_5.jpg" class="card-img-top" alt="口湖遊客中心">
                            <div class="card-body">
                                <p class="card-text">口湖遊客服務中心為口湖地區濕地生態園區的節點之一，以濕地間常見物為意象，屋頂即是大地的延伸。</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <a href="https://www.taiwan.net.tw/m1.aspx?sNo=0001115&id=A12-00249">
                            <img src="./img/pic_A12-00249.jpg" class="card-img-top" alt="太平老街">
                            <div class="card-body">
                                <p class="card-text">太平老街位於雲林縣斗六市的太平路上，從古至今一直是斗六的主要商店街，是通往南北鄉村的聯絡道路。</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>




        <div class="booking_title" id="booking">
            <h1>預訂雲林熱門特色活動</h1>
        </div>

        <div class="booking_travel">
            <div class="photo_group">
                <div class="photo_view" id="photo_v1">
                    <div class="content">
                        <a href="https://play.niceday.tw/product/979">
                            <img class="img-fluid" src="./img/booking_1.jpg" alt="">
                            <div class="view_text">
                                <h2>來雲林找好蝦！</h2>
                                <p>快撩起褲管，來場撈文蛤比賽，為中午的大餐加菜</p>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="photo_view" id="photo_v2">
                    <div class="content">
                        <a href="https://tour.yunlin.gov.tw/tw/index.asp?au_id=64&sub_id=101&id=895">
                            <img class="img-fluid" src="./img/booking_2.jpg" alt="">
                            <div class="view_text">
                                <h2>想吃雞，自己抓!</h2>
                                <p>開放的放牧方式讓雞群自由自在奔跑、追逐或飛到樹上休憩</p>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="photo_view" id="photo_v3">
                    <div class="content">
                        <a href="https://tour.yunlin.gov.tw/tw/index.asp?au_id=64&sub_id=127&id=531">
                            <img class="img-fluid" src="./img/booking_3.jpg" alt="">
                            <div class="view_text">
                                <h2>一日小農體驗趣</h2>
                                <p>帶您親近泥土、接觸大地香氣，學習認識餐桌上的食物</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <!-- 預訂雲林熱門特色活動卡片 -->
        <div class="photocard_group row no-gutters">
            <div class="card col-sm-6 col-md-3 p-2 col-12" id="card_1">
                <a
                    href="https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=71&serch=%E9%BB%83%E9%87%91%E8%9D%99%E8%9D%A0">
                    <img src="./img/20180809060422.jpg" class="card-img-top" alt="黃金蝙蝠生態館">
                    <div class="card-body">
                        <h5 class="card-title">黃金蝙蝠生態館<br>
                            評價☆☆☆☆☆<br>
                            價格：9999元
                        </h5>
                    </div>
                </a>
            </div>

            <div class="card col-sm-6 col-md-3 p-2 col-12" id="card_2">
                <a
                    href="https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=127&id=803&serch=%E9%BB%83%E9%87%91%E8%9D%99%E8%9D%A0">
                    <img src="./img/20180913075314.jpg" class="card-img-top" alt="成龍濕地">
                    <div class="card-body">
                        <h5 class="card-title">成龍濕地<br>
                            評價☆☆☆☆☆<br>
                            價格：9999元</h5>
                    </div>
                </a>
            </div>

            <div class="card col-sm-6 col-md-3 p-2 col-12" id="card_3">
                <a
                    href="https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=59&serch=%E4%BA%94%E5%B9%B4%E5%8D%83%E6%AD%B2">
                    <img src="./img/b4094_1.jpg" class="card-img-top" alt="五年千歲公園">
                    <div class="card-body">
                        <h5 class="card-title">五年千歲公園<br>
                            評價☆☆☆☆☆<br>
                            價格：9999元</h5>
                    </div>
                </a>
            </div>

            <div class="card col-sm-6 col-md-3 p-2 col-12" id="card_4">
                <a
                    href="https://tour.yunlin.gov.tw/tw/index.asp?au_id=69&sub_id=101&id=426&serch=%E4%BB%96%E9%87%8C%E9%9C%A7">
                    <img src="./img/b4019_5.jpg" class="card-img-top" alt="他里霧文化園區">
                    <div class="card-body">
                        <h5 class="card-title">他里霧文化園區<br>
                            評價☆☆☆☆☆<br>
                            價格：9999元</h5>
                    </div>
                </a>
            </div>
        </div>


        <!-- 行前規劃&準備 -->
        <div class="discover_title" id="planning">
            <h1>行前規劃&準備</h1>
        </div>

        <div class="row discover_box">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 discover" >
                <a href="https://www.tripadvisor.com.tw/Restaurants-g616037-Yunlin.html" target="balnk">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">必吃美食<br>發掘道地美食</div>
                            <img src="./img/food.png" height="80px" alt="必吃美食">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 discover" >
                <a href="https://rentcars.easytravel.com.tw/car/1217" target="balnk"><div class="card">
                    <div class="card-body">
                        <div class="card-title">租車自駕遊<br>走自己的步調</div>
                        <img src="./img/car.png"  height="80px"alt="租車自駕">
                    </div>
                </div></a>


            </div>

            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 discover" >
                <a href="https://www.hotelscombined.com.tw/hotels/%E9%9B%B2%E6%9E%97-r4387/2020-01-22/2020-01-23/2adults/1rooms?hcdestination=place%3AYunlin&placeName=place%3AYunlin" target="balnk"><div class="card">
                    <div class="card-body">
                        <div class="card-title">飯店<br>探索旅行中舒適的飯店住宿</div>
                        <img src="./img/hotel.png"  height="80px"alt="飯店">
                    </div>
                </div></a>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">雲林魅力指南</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <img src="" alt="">
                </div>
                <div class="modal-body">
                    雲林位在臺灣西方的中南部，在嘉南平原最北端。東邊是南投縣，西臨臺灣海峽，南邊隔著北港溪與嘉義縣為鄰，北邊沿著濁水溪和彰化縣接壤。東西最寬的地方有五十公里，南北最長的地方有三十八公里，全縣面積總計一千二百九十點八三五一平方公里。其中十分之九為平原，十分之一為山地，屬亞熱帶型氣候，年均溫攝氏22.6度，年均雨量1028.9毫米。人口約七十三萬五千人。雲林縣有二十個鄉鎮市，除斗六市、古坑鄉及林內鄉靠近山地，地勢較高外，其餘十七鄉鎮均屬平原地區。<br>
                    <img src="/img/wetlands.jpg" alt="成龍溼地" class="img-fluid">以農業立縣、橫跨20個鄉鎮的雲林，自然純樸的農村風光與得天獨厚的農產物品，一直以來都是雲林人最引以為傲的資源。倚山傍海的地理優勢，也因此孕育出各式農特產美食，例如古坑的咖啡、臺西的文蛤、口湖的馬蹄蛤與臺灣鯛、斗六的文旦、西螺的醬油、大埤的酸菜、北港的花生與麻油等，每一個都代表了雲林最在地的味道，也是造訪雲林最不能空手而回的伴手禮品。此外，雲林擁有的廟宇數量更是全臺之最，每年都吸引數以萬計的人潮前來參拜。當然，雲林對文化產業的深耕也不能被忽略，臺灣的布袋戲就是從雲林開始發跡，揚名於世，也讓雲林縣享有布袋戲之鄉的美譽。
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary " data-dismiss="modal" >Understood</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    //swiper
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,

        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  }
    });
    //一周天氣
    $.ajax({
        url: "https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-D0047-091?Authorization=CWB-B5282D9D-8FDD-40E9-AD48-B1DF3270465D",
        success: function (res) {

            var location = res.records.locations[0].location[0];
            var today = document.querySelector('.today');
            var future = document.querySelector('.future');
            var Pop_time = location.weatherElement[0].time;
            var Wxs_time = location.weatherElement[6].time;
            var MinTs_time = location.weatherElement[8].time;
            var MaxTs_time = location.weatherElement[12].time;
            console.log(Wxs_time);
            var Pop = location.weatherElement[0].time[0].elementValue[0].value;
            var Wx = location.weatherElement[6].time[0].elementValue[0].value;
            var Wx_value = location.weatherElement[6].time[0].elementValue[1].value;
            var MinT = location.weatherElement[8].time[0].elementValue[0].value;
            var MaxT = location.weatherElement[12].time[0].elementValue[0].value;
            var date = new Date();
            var dd = date.getDate();
            var mm = date.getMonth() + 1;
            var day = date.getDay();
            var weekday = ['日', '一', '二', '三', '四', '五', '六'];
            var img;
            var sunny = "./img/sunny.svg";
            var cloudy = "./img/cloudy.svg";
            var cloudySun = "./img/cloudySun.svg"
            var rainy = "./img/rainy.svg";
            var img_array = [sunny, cloudy, cloudySun, rainy];
            // var Wx_value = '08';
            if (Wx_value == '01') {
                img = img_array[0];
            } else if (Wx_value == '02' || Wx_value == '03') {
                img = img_array[2];
            } else if (Wx_value == '08' || Wx_value == '09' || Wx_value == '10' || Wx_value == '11' ||
                Wx_value == '12' || Wx_value == '13' || Wx_value == '14' || Wx_value == '15' ||
                Wx_value == '16' || Wx_value == '17' || Wx_value == '18') {
                img = img_array[3];
            } else {
                img = img_array[1];
            }
            today.innerHTML += `<div class="detail"">
                <section>
                    <img src="${img}">
                </section>
                <section>
                    <p>${MinT}&deg C~${MaxT}&deg C</p>
                    <p>降雨機率：${Pop}%</p>
                    <p>${mm}月${dd}日  星期${weekday[day]}</p>
                </section>
            </div>`
            for (let index = 2; index < Pop_time.length; index += 2) {
                // day++;
                dd++;
                if (day > 6) {
                    day = 0
                }
                const Pops = Pop_time[index];
                const Wxs = Wxs_time[index];
                const MinTs = MinTs_time[index];
                const MaxTs = MaxTs_time[index];

                var Pop = Pops.elementValue[0].value;
                var Wx = Wxs.elementValue[0].value;
                var MinT = MinTs.elementValue[0].value;
                var MaxT = MaxTs.elementValue[0].value;
                // console.log(Wx);


                future.innerHTML += `<div class="drop-item row">
                            <img class="col-3" class="img" id="img" src="${img}" alt="" title="">
                            <p class="col-3">星期${weekday[day]}</p>
                            <p class="col-3"> ${Wx}</p>
                            <p class="col-3">${MinT}~${MaxT}&deg C</p>
                    </div>`

                day++;
            }


        }
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var x = document.querySelector('.searching_nav');
        var xTop = x.offsetTop;
        var y = document.querySelector('.searching_menu');
        var yTop = y.offsetTop;

        console.log(xTop, scroll, yTop);

        if (scroll >= yTop) {

            $('.second_nav').addClass('fixed');
            $('.searching_menu').addClass('fixed');
        } else if (scroll < yTop) {
            $('.second_nav').removeClass('fixed');
            $('.searching_menu').removeClass('fixed');
        }
    });
</script>
@endsection


















