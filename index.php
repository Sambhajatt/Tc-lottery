<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<!-- Rest of your HTML -->
<html lang="en" translate="no">
<head>
  <link rel="stylesheet" type="text/css" href="https://in.piccdn123.com/static/_template_/orange/css/turntable.css">
  <link rel="stylesheet" type="text/css" href="https://in.piccdn123.com/static/_template_/orange/css/swiper-bundle.min.css" />
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="screen-orientation" content="portrait">
<meta name="full-screen" content="yes">
<meta name="HandheldFriendly" content="true">
<meta name="browsermode" content="application">
<meta name="x5-fullscreen" content="true">
<meta name="x5-orientation" content="portrait">
<meta name="x5-page-mode" content="app">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,minimal-ui,viewport-fit=cover">
<meta name="apple-mobile-web-app-title" content="Welcome">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta content="email=no" name="format-detection">
<title>tc</title>
<link rel="icon" href="https://res.inbofa999.com/india/upload/1099/bef9ea3c4972f411126f61ee8ba89c1f.png">
<link rel="stylesheet" type="text/css" href="https://in.piccdn123.com/static/_template_/orange/css/main.css?v=20250407002">

<style>
    .mobileSelect .content .btnBar .ensure {
        width: auto;
    }
    .chatroom-overlay {
        position: fixed;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999;
        touch-action: none;
        max-width: 500px;
        left: 50%;
        transform: translate(-50%, 0);
    }
</style>

<script src="/static/js2/lang.js?v=20250407002"></script>
<script> setLanguage('en_us')</script>
<script>
    var imgCdn = "https://in.piccdn123.com";
    var fontTemplate = "_template_/orange";
    var copy_succ = "Copy successful";
    var please_stay_tuned = "Please stay tuned";
    var sever_error_500 = "Internal Server Error: 500, please contact customer service for assistance";
    var request_timed_out = "Request timed out, please check your network";
    var request_failed = "Request failed";
    if (window.location.hash.startsWith('#/register')) {
        const queryString = window.location.hash.split('?')[1];
        if (queryString) {
            const params = new URLSearchParams(queryString);
            const invitationCode = params.get('invitationCode');
            if (invitationCode) {
                window.location.href = `/register?invite_code=${invitationCode}`;
            } else {
                window.location.href = '/register';
            }
        } else {
            window.location.href = '/register';
        }
    }

</script>
  <link rel="stylesheet" href="https://in.piccdn123.com/static/_template_/orange/css/page-home.css?v=20250407002">
</head>

<body>

<div id="app">

  <input type="hidden" id="current_country" value="India">
  <input type="hidden" id="currency_symbol" value="₹">
  <input type="hidden" id="is_login" value="0">
  <div class="content_home">

    <!-- top nav -->
    <div class="van-nav-bar van-hairline--bottom">

      <a href="javascript:history.go(-1)" class="van-nav-bar__left">
                <img src="https://res.inbofa999.com/india/upload/1099/04e072a00f685be156a91cafe81a9209.png" class="logo">
              </a>

      <div class="van-nav-bar__right">
        <div class="van-right_notice">
          <a href="/userMessage">
            <span class="message_icon "></span>
          </a>
                  </div>

        
      </div>
    </div>


    <!-- banner start -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://res.inbofa999.com/india/upload/1099/fc3c4531f03a3ec26b5ee36cc38658ca.png" class="slide_image" data-url="/download/TCVIP?isApp=0"></div>
                <div class="swiper-slide"><img src="https://res.inbofa999.com/india/upload/1099/57fa9fbbb294c5802d4a06bb63fe4eee.png" class="slide_image" data-url="/activity/detail?id=8"></div>
                <div class="swiper-slide"><img src="https://res.inbofa999.com/india/upload/1099/1b040a372e15e5fa1aa0f4558cfaca74.png" class="slide_image" data-url="/payment"></div>
                <div class="swiper-slide"><img src="https://res.inbofa999.com/india/upload/1099/0f6a8777920176f071995a9215fb4bbd.png" class="slide_image" data-url="/activity/detail?id=1"></div>
                <div class="swiper-slide"><img src="https://res.inbofa999.com/india/upload/1099/29420fd3799fc412907edce1befc4b7c.png" class="slide_image" data-url="https://t.me/TCofficialschannel"></div>
                <div class="swiper-slide"><img src="https://res.inbofa999.com/india/upload/1099/2ec6ba3649c052cbcb592f59dc979e66.png" class="slide_image" data-url="/vip"></div>
                <div class="swiper-slide"><img src="https://res.inbofa999.com/india/upload/1099/6a52e131b60d4563b83634185879d80f.png" class="slide_image" data-url="/activity/detail?id=2"></div>
                <div class="swiper-slide"><img src="https://res.inbofa999.com/india/upload/1099/17d46124d0d5e3e4af835256698a4d5a.png" class="slide_image" data-url="/game?game=vngo30s"></div>
                <div class="swiper-slide"><img src="https://res.inbofa999.com/india/upload/1099/14a518476764512fed60eb665b4a5aa1.png" class="slide_image" data-url="/firstPaymentAward.html"></div>
              </div>
      <div class="swiper-pagination"></div>
    </div>
    <!-- banner end -->


    <div class="noticeBar__container">

      <img src="https://in.piccdn123.com/static/_template_/orange/img/notice.png">


      <div class="scrolling-container">
        <div class="scrolling-content">
          <marquee behavior="scroll" direction="left" scrollamount="5">
                        <p>OFFICIAL TC WEBSITE LINK: tcvvip.com please make sure, to always use this links to login , dont use other link to login to avoid any fraud, All recharge methods only available in RECHARGE menu on OFFICIAL TC website and application; 2.Submit 12 UTR number / UPI ref no for INSTANT recharge; 3. TC recharge account change everytime, DONOT SAVE to AVOID LOSS!!!</p>
                      </marquee>
        </div>
      </div>



      <a href="/announcement">
        <img src="https://in.piccdn123.com/static/_template_/orange/img/hot_icon.png">Detail      </a>


    </div>


    <div class="home_menu" id="gamelist">
      <div class="menu_item action" data-category="LOTTERY" data-anchor="#gamelist">
        <div class="img_bg"><img class="lottery" src="https://in.piccdn123.com/static/_template_/orange/img/home/gamecategory_20231215033613klhe.png"></div>
        <span>Lottery</span>
      </div>
      <div class="menu_item" data-category="MINI" data-anchor="#gamelist">
        <div class="img_bg"><img class="flash" src="https://in.piccdn123.com/static/_template_/orange/img/home/gamecategory_2023121503353389nc.png"></div>
        <span>Original</span>
      </div>
      <div class="menu_item" data-category="SLOTS" data-anchor="#gamelist">
        <div class="img_bg"><img class="slot" src="https://in.piccdn123.com/static/_template_/orange/img/home/gamecategory_202312150336204mtb.png"></div>
        <span>Slots</span>
      </div>
            <div class="menu_item" data-category="SPORT" data-anchor="#gamelist">
        <div class="img_bg"><img class="sport" src="https://in.piccdn123.com/static/_template_/orange/img/home/gamecategory_20231215033607yi17.png"></div>
        <span>Sports</span>
      </div>
      
      <div class="menu_item" data-category="LIVE" data-anchor="#gamelist">
        <div class="img_bg"><img class="video" src="https://in.piccdn123.com/static/_template_/orange/img/home/gamecategory_20231215033600k8os.png"></div>
        <span>Casino</span>
      </div>
      <div class="menu_item" data-category="POKER" data-anchor="#gamelist">
        <div class="img_bg"><img class="chess" src="https://in.piccdn123.com/static/_template_/orange/img/home/gamecategory_20231215033554mpgb.png"></div>
        <span>Rummy</span>
      </div>
      <div class="menu_item" data-category="FISH" data-anchor="#gamelist">
        <div class="img_bg"><img class="fish" src="https://in.piccdn123.com/static/_template_/orange/img/home/gamecategory_20231215033528g3gt.png"></div>
        <span>Fishing</span>
      </div>

      <div class="menu_item" data-category="POPULAR" data-anchor="#gamelist">
        <div class="img_bg"><img class="popular" src="https://in.piccdn123.com/static/_template_/orange/img/home/gamecategory_202312150336366phx.png"></div>
        <span>Popular</span>
      </div>
    </div>

    <div>
      <div class="home_container lottery_container" style="display: block">
        <div class="title" style="background-image: url(https://in.piccdn123.com/static/_template_/orange/img/home/lottery.png);">Lottery</div>
        <div class="lottery_container_list">

                    <div class="lotterySlotItem">
            <a href="/game">
              <div class="lottery">
                <img src="https://in.piccdn123.com/static/_template_/orange/img/home/lottery_bg.png" class="lottery_bg">
                <img class="lottery_logo" src="https://in.piccdn123.com/static/_template_/orange/img/home/lotterycategory_wingo.png">
                <span>Win Go</span>
                <h4>
                  <div>Guess Number</div>
                  <div>Green/Red/Purple</div>
                </h4>
              </div>
              <div class="win_info">
                <div style="position: relative;">
                  <div class="win_item">
                    <div class="left">
                      <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/15.png" class="win_user_avatar">
                      <span class="win_username">MemberLRMFGDBK</span>
                    </div>
                    <div class="right">Winning amount ₹<span class="win_money">39.20</span></div>
                  </div>
                </div>
              </div>
            </a>
          </div>
                    <div class="lotterySlotItem">
            <a href="/game?game=trxvngo1">
              <div class="lottery">
                <img src="https://in.piccdn123.com/static/_template_/orange/img/home/lottery_bg.png" class="lottery_bg">
                <img class="lottery_logo" src="https://in.piccdn123.com/static/_template_/orange/img/home/lotterycategory_trx.png">
                <span>Trx Win Go</span>
                <h4>
                  <div>Guess Number</div>
                  <div>Green/Red/Purple</div>
                </h4>
              </div>
              <div class="win_info">
                <div style="position: relative;">
                  <div class="win_item">
                    <div class="left">
                      <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/15.png" class="win_user_avatar">
                      <span class="win_username">MemberLRMFGDBK</span>
                    </div>
                    <div class="right">Winning amount ₹<span class="win_money">39.20</span></div>
                  </div>
                </div>
              </div>
            </a>
          </div>
                    <div class="lotterySlotItem">
            <a href="/game?game=30spk10">
              <div class="lottery">
                <img src="https://in.piccdn123.com/static/_template_/orange/img/home/lottery_bg.png" class="lottery_bg">
                <img class="lottery_logo" src="https://in.piccdn123.com/static/_template_/orange/img/home/saiche.png">
                <span>Racing</span>
                <h4>
                  <div>Guess Number</div>
                  <div>Big/Small/Odd/Even</div>
                </h4>
              </div>
              <div class="win_info">
                <div style="position: relative;">
                  <div class="win_item">
                    <div class="left">
                      <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/15.png" class="win_user_avatar">
                      <span class="win_username">MemberLRMFGDBK</span>
                    </div>
                    <div class="right">Winning amount ₹<span class="win_money">39.20</span></div>
                  </div>
                </div>
              </div>
            </a>
          </div>
                    <div class="lotterySlotItem">
            <a href="/game?game=30sk3">
              <div class="lottery">
                <img src="https://in.piccdn123.com/static/_template_/orange/img/home/lottery_bg.png" class="lottery_bg">
                <img class="lottery_logo" src="https://in.piccdn123.com/static/_template_/orange/img/home/lotterycategory_k3.png">
                <span>K3</span>
                <h4>
                  <div>Guess Number</div>
                  <div>Big/Small/Odd/Even</div>
                </h4>
              </div>
              <div class="win_info">
                <div style="position: relative;">
                  <div class="win_item">
                    <div class="left">
                      <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/15.png" class="win_user_avatar">
                      <span class="win_username">MemberLRMFGDBK</span>
                    </div>
                    <div class="right">Winning amount ₹<span class="win_money">39.20</span></div>
                  </div>
                </div>
              </div>
            </a>
          </div>
                    <div class="lotterySlotItem">
            <a href="/game?game=5d30s">
              <div class="lottery">
                <img src="https://in.piccdn123.com/static/_template_/orange/img/home/lottery_bg.png" class="lottery_bg">
                <img class="lottery_logo" src="https://in.piccdn123.com/static/_template_/orange/img/home/lotterycategory_5d.png">
                <span>5D</span>
                <h4>
                  <div>Guess Number</div>
                  <div>Big/Small/Odd/Even</div>
                </h4>
              </div>
              <div class="win_info">
                <div style="position: relative;">
                  <div class="win_item">
                    <div class="left">
                      <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/15.png" class="win_user_avatar">
                      <span class="win_username">MemberLRMFGDBK</span>
                    </div>
                    <div class="right">Winning amount ₹<span class="win_money">39.20</span></div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          
        </div>
      </div>

      <div class="home_container slots_container" style="display: none;">
        <div class="title" style="background-image: url(https://in.piccdn123.com/static/_template_/orange/img/game/slot.png)">Slots</div>
        <div class="other_game slots_container_list">
        </div>
      </div>

      <div class="home_container sport_container" style="display: none;">
        <div class="title" style="background-image: url(https://in.piccdn123.com/static/_template_/orange/img/game/sport.png)">Sports</div>
        <div class="other_game sport_container_list">
        </div>
      </div>

      <div class="home_container live_container" style="display: none;">
        <div class="title" style="background-image: url(https://in.piccdn123.com/static/_template_/orange/img/game/video.png)">Casino</div>
        <div class="other_game live_container_list">
        </div>
      </div>

      <div class="home_container poker_container" style="display: none;">
        <div class="title" style="background-image: url(https://in.piccdn123.com/static/_template_/orange/img/game/chess.png)">Rummy</div>
        <div class="other_game poker_container_list">
        </div>
      </div>

      <div class="home_container fish_container" style="display: none;">
        <div class="title" style="background-image: url(https://in.piccdn123.com/static/_template_/orange/img/game/fishing.png)">Fishing</div>
        <div class="flash_game fish_container_list">
        </div>
      </div>

      <div class="home_container mini_container" style="display: none;">
        <div class="title" style="background-image: url(https://in.piccdn123.com/static/_template_/orange/img/game/flash.png)">Mini Game</div>
        <div class="flash_game mini_container_list">
        </div>
      </div>

      <div class="home_container popular_container" style="display: none;">
        <div class="title" style="background-image: url(https://in.piccdn123.com/static/_template_/orange/img/game/popular.png)">Popular</div>
        <div class="hot_container">
          <div class="popular">
            <div class="list popular_container_list">

            </div>
          </div>
        </div>
      </div>


    </div>

    <div class="luckyWinners__container">

      <h1>Winning infomation</h1>

      <div class="luckyWinners__container-wrapper" id="box">
        <ul style="position: relative;" id="luckyWinners__ul">
        </ul>
      </div>

      <li class="luckyWinners__container-wrapper__item luckyWinners_template" style="display: none">
        <div class="luckyWinners__container-wrapper__item-img">
          <img class="avatar" src="">
        </div>
        <div class="luckyWinners__container-wrapper__item-info">
          <h1 class="nickname">Mem***LEU</h1>
        </div>
        <img class="gameTypeImg" src="https://in.piccdn123.com/static/_template_/orange/img/home/WinGo.png" >
        <div class="luckyWinners__container-wrapper__item-winAmount">
          <h1 class="win_money">320.00</h1>
          <span>Winning amount</span>
        </div>
      </li>

    </div>


    <div class="dailyProfitRank">
      <h1>Today's earnings rank</h1>
      <div class="dailyProfitRank__content">


        <div class="dailyProfitRank__content-topThree">
          <div class="dailyProfitRank__content-topThree__item" style="order: 2; top: -45px;">
            <div style="background: url(https://in.piccdn123.com/static/_template_/orange/img/home/border1.png) center center / 100% 100% no-repeat;">
              <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/1.png">
            </div>
            <div>
              <img src="https://in.piccdn123.com/static/_template_/orange/img/home/crown1.png">
              <img src="https://in.piccdn123.com/static/_template_/orange/img/home/place1.png">
            </div>
            <span>Mem****203</span>
            <span>₹860,745.00</span>
          </div>
          <div class="dailyProfitRank__content-topThree__item" style="order: 1; top: -30px;">
            <div style="background: url(https://in.piccdn123.com/static/_template_/orange/img/home/border2.png) center center / 100% 100% no-repeat;">
              <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/20.png">
            </div>
            <div>
              <img src="https://in.piccdn123.com/static/_template_/orange/img/home/crown2.png">
              <img src="https://in.piccdn123.com/static/_template_/orange/img/home/place2.png">
            </div>
            <span>Mem****346</span>
            <span>₹597,157.00</span>
          </div>
          <div class="dailyProfitRank__content-topThree__item" style="order: 3; top: -30px;">
            <div style="background: url(https://in.piccdn123.com/static/_template_/orange/img/home/border3.png) center center / 100% 100% no-repeat;">
              <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/10.png">
            </div>
            <div>
              <img src="https://in.piccdn123.com/static/_template_/orange/img/home/crown3.png">
              <img src="https://in.piccdn123.com/static/_template_/orange/img/home/place3.png">
            </div>
            <span>Mem****286</span>
            <span>₹381,197.00</span>
          </div>
        </div>


        <div class="dailyProfitRank__content-list">
          <div class="dailyProfitRank__content-list__item">
            <span class="left-rank">4</span>
            <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/14.png">
            <span class="middle-name">Mem****377</span>
            <span class="right-box">₹331,542.00</span>
          </div>
          <div class="dailyProfitRank__content-list__item">
            <span class="left-rank">5</span>
            <img src="https://in.piccdn123.com/static/_template_/orange/img/avatar/1.png">
            <span class="middle-name">Mem****420</span>
            <span class="right-box">₹176,077.00</span>
          </div>
        </div>


      </div>
    </div>

    <!-- add to desk -->

        <div class="add_btn">

      <svg class="line" width="1" height="60" viewBox="0 0 1 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="0.5" x2="0.5" y2="60" stroke="white"></line>
      </svg>

      <i class="van-badge__wrapper van-icon van-icon-close close">
        <img src="https://in.piccdn123.com/static/_template_/orange/img/close_white.png">
      </i>
      <img class="icon" src='https://res.inbofa999.com/india/upload/1099/c3034099e4e0172c75d00063c14f1afb.png'>
            <div class="text" id="addToDesktop">Add to Desk top</div>
          </div>
    
    <div class="chatroom-overlay" style="z-index: 2001; display: none;"> </div>

    <!-- first recharge award dialog start -->
        <!-- first recharge award dialog end -->

    <!-- roulette dialog start -->
        <!-- roulette dialog end -->

    <!-- activity dialog start -->
        <!-- activity dialog end -->

    <!-- announcement dialog start -->
        <!-- announcement dialog end -->

    <!-- userMessage dialog start -->
        <!-- userMessage dialog end -->

  </div>





<a class="customer" id="draggable" href="/customerService">
  <img src="https://in.piccdn123.com/static/_template_/orange/img/icon_sevice.png?v=2">
</a>



<!-- nav bottom start -->
<div class="nav c-pr">
  <div class="van-hairline--top-bottom van-tabbar van-tabbar--fixed">
    <a href="/index" class="van-tabbar-item van-tabbar-item--active">
      <div class="van-tabbar-item__icon">

      </div>
      <div class="van-tabbar-item__text">
        <div>
          <img src="https://in.piccdn123.com/static/_template_/orange/img/home_cur.png">
        </div>
        <span class="name fs">Home</span>
      </div>
    </a>
    <a href="/activity" class="van-tabbar-item">
      <div class="van-tabbar-item__icon">

      </div>
      <div class="van-tabbar-item__text">
        <div>
          <img src="https://in.piccdn123.com/static/_template_/orange/img/activity_nor.png">
        </div>
        <span class="name fs">Promotion</span>
      </div>
    </a>
    <a href="/promotion1" class="van-tabbar-item">
      <div class="van-tabbar-item__icon">

      </div>
      <div class="van-tabbar-item__text">
        <div class="muan">
          <img src="https://in.piccdn123.com/static/_template_/orange/img/promotionBg.png" class="img">
        </div>
        <span class="name fs">Agent</span>
      </div>
    </a>

    <a href="/wallet" class="van-tabbar-item">
      <div class="van-tabbar-item__icon">

      </div>
      <div class="van-tabbar-item__text">
        <div>
          <img src="https://in.piccdn123.com/static/_template_/orange/img/wallet_nor.png">
        </div>
        <span class="name fs">Wallet</span>
      </div>
    </a>
    <a href="/home" class="van-tabbar-item">
      <div class="van-tabbar-item__icon">

      </div>
      <div class="van-tabbar-item__text">
        <div>
          <img src="https://in.piccdn123.com/static/_template_/orange/img/main_nor.png">
        </div>
        <span class="name fs">Me</span>
      </div>
    </a>
  </div>
</div>
<!-- nav bottom end -->




<div class="bottomfloat_icon">

    
</div>

<div class="template_third_game_vendor" style="display: none">
  <a href="javascript:void(0)"><img class="other_img lazy" src="https://in.piccdn123.com/static/_template_/orange/img/white.gif"></a>
</div>
<div class="template_third_game_vendor_sport" style="display: none">
  <div><img class="other_img lazy" src="https://in.piccdn123.com/static/_template_/orange/img/white.gif"></div>
</div>
<div class="template_third_game" style="display: none">
  <div class="item third_game_item">
    <img class="gameImg lazy" src="https://in.piccdn123.com/static/_template_/orange/img/white.gif">
  </div>
</div>
<div class="template_popular_game" style="display: none">
  <div>
    <div class="item third_game_item">
      <img class="lazy" src="https://in.piccdn123.com/static/_template_/orange/img/white.gif">
    </div>
    <div class="win-odds">
      <span>odds of winning</span>
      <span class="game-odds"></span>
      <div class="win-p" style="width: 89%;"></div>
    </div>
  </div>
</div>

</div>


<input type="hidden" value="0" id="isApp">
<input type="hidden" value="https://res.inbofa999.com/india/upload/1099/172db66d4b7172bf374ae6e994346915.png" id="splashImage">
<div class="empty__container template_empty_content" style="display: none">
    <img alt="" src="https://in.piccdn123.com/static/_template_/orange/img/empty.png">
    <p> No data </p>
</div>

<div class="infiniteScroll__loading template_no_more" style="display: none; justify-content: center; box-shadow: none;min-height:auto">
    <div>No more</div>
</div>

<div class="no-data-text" style="display: none">No data</div>

<div class="swal-overlay" id="confirm_dialog" style="display: none">
    <div class="swal-modal">
        <div class="swal-icon swal-icon--warning">
          <span class="swal-icon--warning__body">
              <span class="swal-icon--warning__dot"></span>
          </span>
        </div>
        <div class="swal-text" style=""></div>
        <div class="swal-footer">
            <div class="swal-button-container">
                <button class="swal-button swal-button--confirm">Confirm</button>
            </div>
        </div>
    </div>
</div>

<div class="van-dialog Warning" style="z-index: 9999; display: none;" id="common_confirm_dialog2">

    <div class="van-dialog__header">Warning</div>

    <div class="van-dialog__content">
        <div class="van-dialog__message van-dialog__message--has-title">Are you sure to delete this message?</div>
    </div>

    <div class="van-hairline--top van-dialog__footer">
        <button type="button" class="van-button van-button--large van-dialog__cancel">
            <div class="van-button__content">

                <span class="van-button__text">Cancel</span>

            </div>
        </button>

        <button type="button" class="van-button van-button--large van-dialog__confirm van-hairline--left">
            <div class="van-button__content">

                <span class="van-button__text">Confirm</span>

            </div>
        </button>
    </div>

</div>

<div class="van-overlay" style="z-index: 2001; display: none;"></div>


<script src="/static/js/jquery-1.11.1.min.js"></script>
<script src="/static/js/clipboard.min.js"></script>
<script src="/static/js2/jquery.cookie-1.4.1.min.js"></script>
<script src="/static/js2/my-common.js?v=20250407002"></script>
<script src="/static/js2/customer_service_drag.js?v=20250407002"></script>
<script src="/static/js2/lazyload.min.js"></script>

<script>
    let _cancelBtnText = "Cancel";
    let _confirmBtnText = "Confirm";
    let _allText = "All";
    let isApp = parseInt($("#isApp").val());
    let splashImage = $("#splashImage").val();
    if (!isApp && !sessionStorage.getItem('isload') && splashImage) {
        sessionStorage.setItem('isload', true);
        let html = `<div class="splash-screen">
                        <img src='${splashImage}'>
                    </div>`;
        $('body').append(html);
        setTimeout(function () {
            $('body').find('.splash-screen').remove();
        }, 3000);
    }
</script>
<script src="static/js/jquery.rotate.js"></script>
<script>
  var manifest_id = "a0160709701140704575d499c997b6ca";
  var manifest_msg = "Creation successful";
  var text_tips = "Tips";
  var text_join_game = "Are you sure join the game?";
  var roulette_prizes = '';
</script>
<script src="/static/js/swiper-bundle.min.js"></script>
<script src="/static/js2/index.js?v=20250407002"></script>
<script src="/static/js2/index_common_popup.js?v=20250407002"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92dfbd4c7a263e60","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.3.0","token":"9dd8b4a891a34d86a0a1a53420b00769"}' crossorigin="anonymous"></script>
</body>
</html>