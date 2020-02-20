@extends('layouts.front_layout')

<!DOCTYPE html>
<html lang="en">

<head>
    @section('Document')
        Yunlin Pass
    @endsection
    @section('cdn_links')
<link rel="stylesheet" href="./css/Yunlin_pass_style.css">
@endsection


</head>

<body>

    @section('content')
     <!-- swiper -->
     <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./img/Yunlin_Pass_banner1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./img/Yunlin_Pass_banner2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="./img/Yunlin_Pass_banner3.jpg" alt="">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- 2nd navbar(錨點) -->

        <div class="second_nav">
            <ul class="d-flex">
                <li>
                    <a href="#choice">方案選擇</a>
                </li>
                <li>
                    <a href="">行程介紹</a>
                </li>
                <li>
                    <a href="">預定資料</a>
                </li>
                <li>
                    <a href="">如何使用</a>
                </li>
                <li>
                    <a href="">條款細則</a>
                </li>
                <li>
                    <a href="">活動評價</a>
                </li>
                <li>
                    <a href="">常見問題</a>
                </li>
            </ul>
        </div>



        <main>
            <div class="container">
                <div class="row">
                    <div class="main_left  col-sm-12 col-md-8 ">
                        <section class="intro">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">雲林</a></li>
                                    <li class="breadcrumb-item"><a href="/yulin_wander">漫遊雲林</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">雲林通行證</li>
                                </ol>
                            </nav>
                            <h1>雲林通行證 (48/72小時)</h1>
                            <div class=" header d-flex ">
                                <div class=" score d-flex">
                                    <span class="left d-flex mr-2">
                                        <img class="img-fluid" src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                            alt="">
                                        <p>4.5</p>
                                        <span>(170則評價)</span>
                                    </span>
                                    <span class="right">
                                        2K+人參加過
                                    </span>
                                </div>
                                <div class="wish d-flex">
                                    <span>
                                        <img src="https://image.flaticon.com/icons/png/512/57/57602.png" alt="">
                                    </span>
                                    <span>
                                        <p>心願清單</p>
                                    </span>
                                </div>
                            </div>
                            <hr>
                            <div class="rules">
                                <ul class="d-flex">
                                    <li>
                                        <img src="https://image.flaticon.com/icons/png/512/118/118162.png" alt="">
                                        <div>
                                            <p>不可退改</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="https://image.flaticon.com/icons/png/512/61/61764.png" alt="">
                                        <div>
                                            <p>可出示手機電子憑證或列印的紙本憑證
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="https://image.flaticon.com/icons/png/512/42/42446.png" alt="">
                                        <div>
                                            <p>有效期內任何一天使用
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="https://image.flaticon.com/icons/png/512/69/69910.png" alt="">
                                        <div>
                                            <p>必須兌換實體票券</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div>
                                <ul>
                                    <li>
                                        北港虎尾線台灣好行車票一張(兌換當日無限搭乘)
                                    </li>
                                    <li>
                                        斗六古坑線台灣好行車票一張(兌換當日無限搭乘)
                                    </li>
                                    <li>
                                        入住飯店(微旅時尚旅店、華安大飯店、緻麗伯爵酒店)或同等級(附早餐一客)
                                    </li>
                                    <li>
                                        千巧谷牛樂園牧場套裝一份(甜點+飲品+牧草)
                                    </li>
                                    <li>
                                        興隆毛巾觀光工廠滿額折價券+華山咖啡街石墩咖啡9折券
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <hr id="choice_anchor">
                        <section class="choice" id="choice">
                            <h2>方案選擇</h2>
                            <div class="all">
                                <p class="title">請選擇日期、預訂選項</p>
                                <div class="calendar">
                                    <div class="form-group">
                                        <div class="input-group date">
                                            <input type="date" />

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p><small>※請點選方案組合，查看完整詳情</small></p>
                                </div>
                                <p class="title">方案類型</p>
                                <div class="form-group row">
                                    <div class="col-sm-10 d-flex program" for="days">
                                        <div class="option btn mr-3" data-productid="4" data-productprice="500">48小時通行證</div>
                                        <div class="option btn active" data-productid="2"data-productprice="600">72小時通行證</div>
                                        <input name="days" id="days" type="text" value="2" class="option"  hidden>
                                    </div>
                                </div>
                                <p class="title">價格:<input name="pass_prices" id="pass_prices" type="int" value="600" class="pass_prices"  disabled></p>

                                <button type="button" class="btn btn-warning add-cart" id="addCart_days" data-productid="2"  >加入購物車></button>

                                {{-- hidden data-productid="{{$products->id}} --}}
                            </div>
                        </section>
                        <hr>
                        <section class="evaluation">
                            <h2>最新評價</h2>
                            <div class="comment_box d-flex">
                                <div class="user mr-5">
                                    <img src="https://image.freepik.com/free-vector/green-turtle_1308-26789.jpg" alt="">
                                </div>
                                <div class="comment">
                                    <div class="comment_top d-flex">
                                        <span class="name">WU GUEI</span>
                                        <span class="stars">
                                            <ul class="d-flex">
                                                <li>
                                                    <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                        alt="stars">
                                                </li>
                                                <li>
                                                    <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                        alt="stars">
                                                </li>
                                                <li>
                                                    <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                        alt="stars">
                                                </li>
                                                <li>
                                                    <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                        alt="stars">
                                                </li>
                                                <li>
                                                    <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                        alt="stars">
                                                </li>
                                            </ul>
                                        </span>
                                        <span class="date">2020/01/01</span>
                                    </div>
                                    <div class="comment_mid">
                                        <p>評價方案：48小時通行證</p>
                                    </div>
                                    <div class="comment_btm">
                                        <p>原本很擔心國外朋友要來雲林玩，沒有景點可以介紹他們，沒想到雲林通行證這麼方便，好玩又認識農業！</p>
                                    </div>
                                    <div class="more">
                                        <button type="button" class="btn btn-link">有幫助</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <section class="itinerary">
                            <h2>行程介紹</h2>
                            <div>
                                <p>
                                    雲林縣政府正式發布「漫遊雲林」觀光護照，護照中針對台灣好行、台灣觀巴等交通工具、推薦景點、在地節慶等都有完整介紹，同時也促成產業異業合作，推出一日體驗套票，更網羅雲林75家特約商店推出優惠，憑護照享消費優惠，提升遊客休憩意願及消費行為，同時行銷推廣雲林縣豐富的觀光資源及小旅行趴趴走。
                                    本次雲林心動旅行自由配任你選，並結合山、海、平原特色，推出各種體驗旅遊，包含旅行社套裝行程、社區客製化行程及自由行體驗行程。虎尾「糖都偶藝虎尾」、斗六「散步尋味趣」、林內「田園旅遊趣」、西螺「米醬小鎮玩透透」、古坑草嶺「山中歲月舒活行」及水林、口湖及北港「來去吹海風微旅行」等都是觀光護照內特色遊程。另可憑觀光護照集滿3個優惠店家，享加購劍湖山世界門票199元優惠價；憑臺灣好行一日票根可加購399元劍湖山世界門票。
                                    心動雲林觀光護照可至雲林四大旅服中心，斗六、虎尾、北港與草嶺索取及全省旅服中心，亦可於雲林文化旅遊網及慢遊雲林FB粉絲專頁下載。
                                </p>
                            </div>
                            <div class="intro_pic">
                                <img class="img-fluid" src="https://image.freepik.com/free-photo/farmer-standing-rice-field-with-tablet_1150-6062.jpg"
                                    alt="">
                            </div>
                            <div class="description">
                                <span>
                                    <i class="fas fa-sort-up"></i>
                                </span>
                                <span>使用雲林通行證可體驗農作樂趣</span>
                            </div>
                            <div class="intro_pic">
                                <img class="img-fluid" src="https://image.freepik.com/free-photo/taking-care-cucumbers_1098-14144.jpg" alt="">
                            </div>
                            <div class="description">
                                <span>
                                    <i class="fas fa-sort-up"></i>
                                </span>
                                <span>還可深入了解農作特性</span>
                            </div>
                            <div class="intro_pic">
                                <img class="img-fluid" src="https://image.freepik.com/free-photo/roasted-chicken-drumsticks-white-rice-vegetables_114579-26.jpg"
                                    alt="">
                            </div>
                            <div class="description">
                                <span>
                                    <i class="fas fa-sort-up"></i>
                                </span>
                                <span>不特僅能欣賞農村之美，還可以品嘗色菜餚</span>
                            </div>
                        </section>
                        <hr>
                        <section class="reservation">
                            <h2>預定資料</h2>
                            <div class="confirm">
                                <h4>確認詳情：</h4>
                                <ul>
                                    <li>我們會在預訂成功後立即確認，並將使用憑證發送至你的電子郵箱</li>
                                    <li>如在註明的時限內沒有於收件箱或垃圾郵件箱中收到郵件，請及時通過郵件聯繫客服</li>
                                </ul>
                            </div>
                            <div class="note">
                                <h4>注意事項：</h4>
                                <ul>
                                    <li>請注意，大多數博物館週一休館，請提前查看所參觀博物館的開放日期</li>
                                    <li>出行前，請點擊<a href="https://www.yunlinshuttlebus.com.tw/">台灣好行</a>了解更多詳情</li>
                                    <li><b>請注意：</b>
                                        預約方式有3種：線上、透過客服、或親自到各售票處辦理（僅限當日，且無法保證尚可預約的名額）
                                    </li>
                                    <li><b>重要公告：</b> 雲林通行證依兌換日期生效。</li>
                                </ul>
                            </div>
                        </section>
                        <hr>
                        <section class="how_to_use">
                            <h2>如何使用</h2>
                            <div>
                                <ul>
                                    <li>參與活動時，請務必打印出你的使用憑證</li>
                                    <li>自初次使用起算，票券有效期為48小時或72小時（取決於所選套餐）</li>
                                    <li>請將使用憑證兌換票券後入場</li>
                                </ul>
                            </div>
                            <div class="exchange">
                                <div>
                                    <h4>斗六火車站</h4>
                                    <ul>
                                        <li>開放時間：每日8:30 AM - 6:00 PM</li>
                                        <li>地點：售票櫃台</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>雲林高鐵站</h4>
                                    <ul>
                                        <li>開放時間：每日8:30 AM - 6:00 PM</li>
                                        <li>地點：售票櫃台</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>西螺客運總站</h4>
                                    <ul>
                                        <li>開放時間：每日8:30 AM - 6:00 PM</li>
                                        <li>地點：售票櫃台</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3099455230736!2d120.41434371543122!3d23.73632429522976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346eb0c15eea67e7%3A0x7cbeb44d9c00e26a!2z6Zuy5p6X!5e0!3m2!1szh-TW!2stw!4v1579502922526!5m2!1szh-TW!2stw"
                                    width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </section>
                        <hr>
                        <section class="terms">
                            <h2>條款細則</h2>
                            <ul>
                                <li>此活動不受理訂單修改、訂單取消或退款</li>
                            </ul>
                        </section>
                        <hr>
                        <section class="all_comments">
                            <span class="d-flex">
                                <h2>活動評價</h2>
                                <ul class="d-flex">
                                    <li>
                                        <img src="https://image.flaticon.com/icons/png/512/130/130190.png" alt="stars">
                                    </li>
                                    <li>
                                        <img src="https://image.flaticon.com/icons/png/512/130/130190.png" alt="stars">
                                    </li>
                                    <li>
                                        <img src="https://image.flaticon.com/icons/png/512/130/130190.png" alt="stars">
                                    </li>
                                    <li>
                                        <img src="https://image.flaticon.com/icons/png/512/130/130190.png" alt="stars">
                                    </li>
                                    <li>
                                        <img src="https://image.flaticon.com/icons/png/512/130/130190.png" alt="stars">
                                    </li>
                                </ul>
                            </span>
                            <div class="photos">
                                <div class="text">
                                    <p>照片庫</p>
                                    <small>1,000張照片</small>
                                    <br>
                                    <a type="button" class="btn btn-info"
                                        href="https://www.taiwan.net.tw/m1.aspx?sNo=0001115">
                                        <img src="https://image.flaticon.com/icons/png/512/84/84147.png" alt="">
                                        查看更多
                                    </a>
                                </div>
                                <div class="picture row">
                                    <div class="col">
                                        <img class="img-fluid"
                                            src="https://image.freepik.com/free-photo/cute-little-girl-autumn-field-with-horse_1157-28310.jpg"
                                            alt="">
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid"
                                            src="https://image.freepik.com/free-photo/railway-train-tracks-with-platforms_23-2148139936.jpg"
                                            alt="">
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid"
                                            src="https://image.freepik.com/free-photo/scenic-swiss-alps-mountains_1426-1852.jpg"
                                            alt="">
                                    </div>
                                    <div class="col">
                                        <img class="img-fluid"
                                            src="https://image.freepik.com/free-photo/beautiful-sunset-beach-landscape-with-boat_1112-212.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="google_comments">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex">
                                        <div class="user mr-5">
                                            <img src="https://images.pexels.com/photos/25758/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                                alt="">
                                        </div>
                                        <div class="comment">
                                            <div class="comment_top d-flex">
                                                <span class="name">Jacob</span>
                                                <span class="stars">
                                                    <ul class="d-flex">
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                    </ul>
                                                </span>
                                                <span class="date">2020/01/01</span>
                                            </div>
                                            <div class="comment_mid">
                                                <p>評價方案：72小時通行證</p>
                                            </div>
                                            <div class="comment_btm">
                                                <p>兩條路線有不同的風情，有山有海又有農業體驗！</p>
                                            </div>
                                            <div class="more">
                                                <button type="button" class="btn btn-link">有幫助</button>
                                            </div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="user mr-5">
                                            <img src="https://i.pravatar.cc/150?img=3" alt="">
                                        </div>
                                        <div class="comment">
                                            <div class="comment_top d-flex">
                                                <span class="name">Laraus</span>
                                                <span class="stars">
                                                    <ul class="d-flex">
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                    </ul>
                                                </span>
                                                <span class="date">2019/01/28</span>
                                            </div>
                                            <div class="comment_mid">
                                                <p>評價方案：48小時通行證</p>
                                            </div>
                                            <div class="comment_btm">
                                                <p>釣蝦+摸蛤蜊的行程，讓我們全家人都玩得很開心！下次想去古坑跟劍湖山世界！</p>
                                            </div>
                                            <div class="more">
                                                <button type="button" class="btn btn-link">有幫助</button>
                                            </div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="user mr-5">
                                            <img src="https://i.pravatar.cc/150?img=5" alt="">
                                        </div>
                                        <div class="comment">
                                            <div class="comment_top d-flex">
                                                <span class="name">Christina</span>
                                                <span class="stars">
                                                    <ul class="d-flex">
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                    </ul>
                                                </span>
                                                <span class="date">2019/04/01</span>
                                            </div>
                                            <div class="comment_mid">
                                                <p>評價方案：48小時通行證</p>
                                            </div>
                                            <div class="comment_btm">
                                                <p>Wow~通行證真的很方便，連住宿都考慮進去！外地遊客沒有交通工具的困擾都解決了！</p>
                                            </div>
                                            <div class="more">
                                                <button type="button" class="btn btn-link">有幫助</button>
                                            </div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="user mr-5">
                                            <img src="https://i.pravatar.cc/150?img=7" alt="">
                                        </div>
                                        <div class="comment">
                                            <div class="comment_top d-flex">
                                                <span class="name">Jason</span>
                                                <span class="stars">
                                                    <ul class="d-flex">
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                    </ul>
                                                </span>
                                                <span class="date">2019/07/01</span>
                                            </div>
                                            <div class="comment_mid">
                                                <p>評價方案：72小時通行證</p>
                                            </div>
                                            <div class="comment_btm">
                                                <p>第一次下田，體驗採收的辛苦！感謝辛苦的農民~</p>
                                            </div>
                                            <div class="more">
                                                <button type="button" class="btn btn-link">有幫助</button>
                                            </div>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <div class="user mr-5">
                                            <img src="https://i.pravatar.cc/150?img=9" alt="">
                                        </div>
                                        <div class="comment">
                                            <div class="comment_top d-flex">
                                                <span class="name">MEI</span>
                                                <span class="stars">
                                                    <ul class="d-flex">
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>
                                                        <li>
                                                            <img src="https://image.flaticon.com/icons/png/512/130/130190.png"
                                                                alt="stars">
                                                        </li>

                                                    </ul>
                                                </span>
                                                <span class="date">2019/08/20</span>
                                            </div>
                                            <div class="comment_mid">
                                                <p>評價方案：48小時通行證</p>
                                            </div>
                                            <div class="comment_btm">
                                                <p>和朋友環島途經雲林，以前完全沒想到以農業著名的雲林可以有這麼多有趣的景點！不小心就多花兩天在雲林了！</p>
                                            </div>
                                            <div class="more">
                                                <button type="button" class="btn btn-link">有幫助</button>
                                            </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <hr>
                        <section class="common_question">
                            <h2>常見問題</h2>
                            <button type="button" id="help_center"class="btn btn-link">支援中心</button>
                        </section>
                    </div>

                    <div class="main_right col-sm-0 col-md-4">
                        <div class="jumbotron">
                            <p class="lead">保證最低價！</p>
                            <h3 ><strong>NT$&nbsp;500 <small>起</small></strong></h3>
                            <p class="lead">即刻入手，即享最低優惠！</p>
                            <p class="lead">立即確認並獲得憑證</p>
                            <a class="btn btn-primary btn-lg" href="#choice_anchor" role="button">選擇</a>
                            <!-- <hr class="my-4"> -->
                            <!-- <a class="coupon d-flex" href="">
                                <p>按讚+分享，享更多優惠</p>
                                <img src="https://image.flaticon.com/icons/png/512/130/130884.png" alt="">
                            </a> -->



                        </div>

                        <!-- <div class="jumbotron row">
                            <div class="col-3 mobile">
                                <img src="https://image.flaticon.com/icons/png/512/52/52787.png" alt="">
                            </div>
                            <div class="col-9 text">
                                <p class="lead">下載APP後首次購買輸入優惠碼
                                    <span>Yunlin</span>即獲得NT$87優惠
                                </p>

                                <a class="d-flex" href="">
                                    <span>
                                        <img src="https://img.freepik.com/free-icon/arrow-representing-download_318-481.jpg?size=338&ext=jpg"
                                            alt="download">
                                    </span>
                                    <span>
                                        <p>下載APP</p>
                                    </span>
                                </a>
                            </div>
                        </div> -->
                        <div class="back_to_top">
                            <a href="">
                                <img src="https://image.flaticon.com/icons/png/512/59/59043.png" alt="">
                            </a>
                        </div>


                    </div>

                </div>
                <hr class="done">
                <div class="more" id="more">
                    <h2>你可能還會喜歡...</h2>
                    <div class="row">
                        <div class="card col-sm-4 col-12">
                            <img class="img-fluid" src="https://image.freepik.com/free-photo/rolls-hay-field_1161-246.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-sm-4 col-12">
                            <img class="img-fluid"
                                src="https://image.freepik.com/free-photo/famous-spring-green-farmland-hat_1417-205.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-sm-4 col-12">
                            <img class="img-fluid"
                                src="https://image.freepik.com/free-photo/hot-coffee-cup-with-beautiful-tropical-outdoor-view_74190-6865.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    @endsection

    @section('js')
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>


    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            var x = document.querySelector('.main_left');
            var xTop = x.offsetTop;
            var y = document.querySelector('#help_center');
            var yTop = y.offsetTop;

            console.log(xTop, scroll,yTop);
            if (scroll >= xTop) {

                $('.second_nav').addClass('fixed');
                $('.main_right').addClass('fixed');
                $('.back_to_top').addClass('fixed');


            } else if (scroll < xTop) { //待解>fixed後 xTop永遠等於0
                //xTop改抓main_left後問題解決
                //待解>fixed後脫離container 寬度改變


                $('.second_nav').removeClass('fixed');
                $('.main_right').removeClass('fixed');
                $('.back_to_top').removeClass('fixed');
            }
            if (scroll >= yTop) {


                $('.main_right').addClass('absolute');
                $('.main_right').removeClass('fixed');
            } else {
                $('.main_right').removeClass('absolute');

            }


        });
        $('.backToTop').click(function () {

            document.documentElement.scrollTop = 0;
        })
        // 點擊填入欄位值 data-productid


        $('.option').click(function () {
            // console.log(this.textContent);
            $('.option').removeClass('active');
            $(this).addClass('active');

            var option = $(this).data('productid');
            var prices = $(this).data('productprice')

            $('.option').val(option);
            $('.pass_prices').val(prices);


            $('#addCart_days').attr("data-productid",option);
        });

        $(".add-cart").click(function(){

        var product_id = $(this).data('productid');
        console.log(product_id);

            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

            $.ajax({
                method: 'POST',
                url: '/addCart',
                data: {product_id:product_id},
                success: function (res) {
                    console.log(res);

                    $('#cartTotalQuantity').text(res);

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });

})
    </script>
    @endsection

</body>

</html>
