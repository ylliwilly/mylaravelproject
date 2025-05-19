<html lang="en"; >

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon" type="image/png" href="picture/Group2.png">
    <link rel="shortcut icon" type="image/x-icon" href="picture/Group2.png">
    <link rel="mask-icon" type="image/x-icon" href="picture/Group2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="css/hamburger_menu.css?v-new" type="text/css" rel="stylesheet"><!-- 漢堡選單 -->
    <link href="css/scroll_word.css" type="text/css" rel="stylesheet"><!--字-->
    <link href="css/cloud.css" type="text/css" rel="stylesheet"><!--雲-->
    <link href="css/box.css" type="text/css" rel="stylesheet"><!--box-->

    <title>橘貓窩</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>
      * {
        box-sizing: border-box;
      }
      body {
        background: linear-gradient(to bottom, #ff0058 -40%, #8556DE, #2561A5);
        background-image: -webkit-linear-gradient(#ff0058 -40%, #8556DE, #2561A5 );
        
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        
        height: 100vh;
        width:100vw;

        /*覆蓋瀏覽器設定*/
        padding: 0;
        margin: 0;

        overflow-y: auto;

        transition: all 0.4s ease-in;
        -webkit-transition: all 0.4s ease-in;

        opacity: 0;
        transform: translateY(50%);
      }

      /* star START */
      i.fa-star {
        position: absolute;

        color: #faec1b;

        font-weight: 900;
        
        /* text-shadow: 0 0 2px #ffffff, 0 0 10px #ffee58; */

        -webkit-animation: flashing var(--flash-time) infinite linear alternate both;
        animation: flashing var(--flash-time) infinite linear alternate both;
      }
      @-webkit-keyframes flashing {
        0% {
          text-shadow: 0 0 0px #ffffff, 0 0 0px #ffee58;
        }
      
        100% {
          text-shadow: 0 0 7px #ffffff, 0 0 10px #ffee58;
        }
      }
      @keyframes flashing {
        0% {
          text-shadow: 0 0 0px #ffffff, 0 0 0px #ffee58;
        }
      
        100% {
          text-shadow: 0 0 7px #ffffff, 0 0 10px #ffee58;
        }
      }
      /* star END */

      /* plain START */

      i.fa-plane {
        position: absolute;

        color: #093262;

        font-size: 2em;
        top: -2em;
        font-weight: 900;

        --fly-time: 10s;

        -webkit-animation: flying var(--fly-time) infinite ease-in ;
        animation: flying var(--fly-time) infinite ease-in ;
      }

      
      @keyframes flying{
        0% {
          transform: rotate(var(--start-rotate));
          top: var(--start-y);
          left: var(--start-x);
        }
      
        100% {
          transform: rotate(var(--end-rotate));
          top: var(--end-y);
          left: var(--end-x);
        }
      }
      @-webkit-keyframes flying{
        0% {
          transform: rotate(var(--start-rotate));
          top: var(--start-y);
          left: var(--start-x);
        }
      
        100% {
          transform: rotate(var(--end-rotate));
          top: var(--end-y);
          left: var(--end-x);
        }
      }

      /* plane END */
      div.container {
        height: auto;

        position: relative;
        z-index: 2;

        background: linear-gradient(to bottom, #2561A5, #1CA8FF);
        background-image: -webkit-linear-gradient(#2561A5, #1CA8FF);
      }

      /* 
      .svg-container svg path {
        fill: #e3e3e3;
      } */

    </style>

    <script>
      window.console = window.console || function(t) {};
    </script>

  </head>

  <body onload="fadeIn()">
    <!-- 側邊欄 START -->
    <div class="sidebar" id="hamburger_sidebar">
      <!-- 漢堡選單 STRAT -->
      <div class="hamburger_menu">
          <input type="checkbox">
          <svg  viewBox="8 -8 120 75" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 21 L9 29 L22 29 L22 6 L19 1 L20 -8 L23 -3 Q26 -4 29 -3 L32 -8 L34 1 L31 6 L40 19 L39 29 L17 29 C 10 27 9 24 9 21 Q13 11 17 21 L9 21"></path>
          </svg>
          <svg  viewBox="8 -8 120 75" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 21 L9 29 L22 29 L22 6 L19 1 L20 -8 L23 -3 Q26 -4 29 -3 L32 -8 L34 1 L31 6 L40 19 L39 29 L17 29 C 10 27 9 24 9 21 Q13 11 17 21 L9 21"></path>
          </svg>  
          <svg viewBox="8 -8 120 75" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <path class="st0" d="M9 21 L17 29 L22 29 L22 21 L22 29 L27 29 L27 21 L27 26 L29 23 L32 23 L29 23 L27 26 L27 29 L39 29 L39 26 Q45 24 45 18 Q44 8 50 5 Q59 5 56 13 Q53 17 51 14 Q51 12 53 11 Q55 8 51 8 Q47 10 48 18 Q48 27 39 29 L9 29 "></path>
          </svg>
      </div>
      <!-- 漢堡選單 END -->
      <!-- MENU STRAT -->
      <div class="menu">
        <button class="page" onclick="window.location.assign('./home')">Home</button>
        <button class="page" onclick="window.location.assign('./about_me')">About</button>
        <button class="page" onclick="window.location.assign('./sales')">Sales</button>
        <button class="page" onclick="window.location.assign('./comic')">Comic</button>
      </div>
      <!-- MENU END -->
    </div>
    <!-- 側邊欄 END -->

    <i class="fa-solid fa-star" style="font-size: 1.2em;top:10%;left:10%;--flash-time:1s"></i>
    <i class="fa-solid fa-star" style="font-size: 1em;top:6%;left:30%;--flash-time:0.6s"></i>
    <i class="fa-solid fa-star" style="font-size: 0.5em;top:8%;left:70%;--flash-time:0.25s"></i>
    <i class="fa-solid fa-star" style="font-size: 1.2em;top:10%;left:1%;--flash-time:2s"></i>
    <i class="fa-solid fa-star" style="font-size: 1.5em;top:30%;left:5%;--flash-time:5s"></i>
    <i class="fa-solid fa-star" style="font-size: 0.6em;top:20%;left:80%;--flash-time:36s"></i>
    <i class="fa-solid fa-star" style="font-size: 1em;top:11%;left:60%;--flash-time:0.8s"></i>
    <i class="fa-solid fa-star" style="font-size: 0.8em;top:15%;left:40%;--flash-time:0.41s"></i>
    <i class="fa-solid fa-star" style="font-size: 1em;top:15%;left:90%;--flash-time:1.2s"></i>
    <i class="fa-solid fa-star" style="font-size: 0.6em;top:5%;left:95%;--flash-time:1.07s"></i>


    <div class="word_container">
      <div class="wrapper">
        <div class="box" data-scroll-speed="2" style="transform: translateY(0px);">O</div>
        <div class="box" data-scroll-speed="3" style="transform: translateY(0px);">r</div>
        <div class="box" data-scroll-speed="6" style="transform: translateY(0px);">a</div>
        <div class="box" data-scroll-speed="5" style="transform: translateY(0px);">n</div>
        <div class="box" data-scroll-speed="9" style="transform: translateY(0px);">g</div>
        <div class="box" data-scroll-speed="4" style="transform: translateY(0px);">e</div>

        <div class="box" data-scroll-speed="2" style="transform: translateY(0px);">C</div>
        <div class="box" data-scroll-speed="6" style="transform: translateY(0px);">a</div>
        <div class="box" data-scroll-speed="9" style="transform: translateY(0px);">t</div>
        <div class="box" data-scroll-speed="4" style="transform: translateY(0px);">s</div>

        <div class="box" data-scroll-speed="10" style="transform: translateY(0px);">H</div>
        <div class="box" data-scroll-speed="6" style="transform: translateY(0px);">o</div>
        <div class="box" data-scroll-speed="5" style="transform: translateY(0px);">u</div>
        <div class="box" data-scroll-speed="9" style="transform: translateY(0px);">s</div>
        <div class="box" data-scroll-speed="4" style="transform: translateY(0px);">e</div>
      </div>
    </div>

    <div class="cloud back1" style=""></div>
    <div class="cloud fornt1" style=""></div>
    <div class="cloud fornt2" style=""></div>

    <div class="container">
      
      <div class="title_box">
        <div class="title_wrapper">
            <h1>四格漫畫/插畫</h1>
            <!-- <h1>畫</h1>
            <h1>插</h1>
            <h1>畫</h1> -->
        </div>
        <div class="cloud back1" style="top:90%; --move-time:38s;"></div>
        <i class="fa-solid fa-plane" style="--fly-time: 10s;
                                            --start-rotate: 150deg;
                                            --start-x: 100%;
                                            --start-y: -50%;
                                            --end-rotate: 130deg;
                                            --end-x: 5%;
                                            --end-y: 100%;
                                            "></i>
      </div>
      <div class="svg-container">
        <svg version="1.1"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="8 0 2048 25" enable-background="new 8 0 2048 25" xml:space="preserve" preserveAspectRatio="none" style="left: -1100px;">
          <path fill="#e3e3e3" d="M1833.1,1.6c-146.3,0-360.7,22.4-527,22.4s-274-10.6-274-10.6S955.4,1.6,809.1,1.6S448.4,24,282,24
            S8,13.4,8,13.4V25h1024h1024V13.4C2056,13.4,1979.4,1.6,1833.1,1.6z">
          </path>
        </svg>
      </div>
      <div class="content_box">
        <article>
          <h1>圖文小故事</h1>
          <p>有著有趣的故事，卻無法吸引讀者嗎？</p>
          <p>宣傳推廣的文案 只有 一成不變的排版？</p>

          <p>提供您的故事、文案，我們將畫成 精美的插圖 / 有趣4格的小漫畫，提供讀者更加豐富的閱讀體驗。</p>

          <h1>接案說明</h1>
          <ul>
            <li>提供相關文等資料，並交付訂金（20%）。</li>
            <li>選擇您喜歡的草稿，此部份請盡量修改。</li>
            <li>
              完稿後　可以免費５次修改（不動到您選定的草稿架構）。
              <p>＊若要更換整體架構，需要額外收費</p>
            </li>
            <li>轉成您需要的格式，歡迎再次光臨。</li>
          </ul>
        </article>
        <h3 style="color:red">1000$</h3>

      </div>
      <div class="svg-container">
        <svg version="1.1" style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="8 0 2048 25" enable-background="new 8 0 2048 25" xml:space="preserve" preserveAspectRatio="none" style="left: -1100px;">
            <path fill="#e3e3e3" d="M1833.1,1.6c-146.3,0-360.7,22.4-527,22.4s-274-10.6-274-10.6S955.4,1.6,809.1,1.6S448.4,24,282,24
              S8,13.4,8,13.4V25h1024h1024V13.4C2056,13.4,1979.4,1.6,1833.1,1.6z">
            </path>
        </svg>
      </div>

      <div class="title_box font_color">
        <div class="title_wrapper">
            <h1>網頁設計</h1>
            <!-- <h1>頁</h1>
            <h1>設</h1>
            <h1>計</h1> -->
        </div>
        <div class="cloud back1" style="top:25%; --move-time:35s;"></div>
        <i class="fa-solid fa-plane" style="--fly-time: 8s;
                                            --start-rotate: 45deg;
                                            --start-x: 0%;
                                            --start-y: -50%;
                                            --end-rotate: 65deg;
                                            --end-x: 110%;
                                            --end-y: 100%;
                                            "></i>
      </div>

      <div class="svg-container">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="8 0 2048 25" enable-background="new 8 0 2048 25" xml:space="preserve" preserveAspectRatio="none" style="left: -1100px;">
          <path fill="#e3e3e3" d="M1833.1,1.6c-146.3,0-360.7,22.4-527,22.4s-274-10.6-274-10.6S955.4,1.6,809.1,1.6S448.4,24,282,24
            S8,13.4,8,13.4V25h1024h1024V13.4C2056,13.4,1979.4,1.6,1833.1,1.6z">
          </path>
        </svg>
      </div>
      <div class="content_box">
        <article>
          <h1>多種風格設計</h1>
          <p>喜歡本網站的設計風格嗎?</p>
          <p>功能便利性及整體美觀的客製化網站設計，您值得擁有!</p>

          <p>我們提供符合您偏好的風格、具有設計性的網頁，讓您和客戶都有良好的網頁體驗!</p>

          <h1>接案說明</h1>
          <ul>
            <li>提供相關文等資料，並交付訂金（30%）。</li>
            <li>選擇您喜歡的　風格圖形顏色，此部份請盡量修改。</li>
            <li>
              完稿後　可以免費５次修改（不動到您選定的草稿架構）。
              <p>＊若要更換整體架構，需要額外收費</p>
            </li>
            <li>若您滿意，歡迎再次光臨。</li>
          </ul>
        </article>
        <h3 style="color:red">5000$</h3>

      </div>
      <div class="svg-container">
        <svg version="1.1" style="transform:rotate(180deg)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="8 0 2048 25" enable-background="new 8 0 2048 25" xml:space="preserve" preserveAspectRatio="none" style="left: -1100px;">
            <path fill="#e3e3e3" d="M1833.1,1.6c-146.3,0-360.7,22.4-527,22.4s-274-10.6-274-10.6S955.4,1.6,809.1,1.6S448.4,24,282,24
              S8,13.4,8,13.4V25h1024h1024V13.4C2056,13.4,1979.4,1.6,1833.1,1.6z">
            </path>
        </svg>
      </div>
      

      <div class="cloud top1" style=""></div>
      <div class="cloud top2" style=""></div>
      <div class="cloud top3" style=""></div>

      <!-- filter -->
      <svg width="0" height="0">
          <filter id="f" x="-50%" y="-200%" width="200%" height="500%" primitiveUnits="objectBoundingBox">
            <feGaussianBlur stdDeviation=".025 .2"></feGaussianBlur>
            <feColorMatrix type="saturate" values="1.3"></feColorMatrix>
            <feBlend in="SourceGraphic"></feBlend>
          </filter>
      </svg>
    </div>
    
    <script type="text/javascript" src="js/hamburger_menu.js"></script>
    <script type="text/javascript">
      function fadeIn(){
        document.body.style.opacity = "1";
        document.body.style.transform = "unset";
      }
      

      $.fn.moveIt = function () {
        var $window = $(window);
        var instances = [];

        $(this).each(function () {
          instances.push(new moveItItem($(this)));
        });

        window.addEventListener('scroll', function () {
          var scrollTop = $window.scrollTop();
          instances.forEach(function (inst) {
            inst.update(scrollTop);
          });
        }, { passive: true });
      };

      var moveItItem = function(el){
        this.el = $(el);
        this.speed = parseInt(this.el.attr('data-scroll-speed'));
      };

      moveItItem.prototype.update = function (scrollTop) {
        this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
        this.el.css('opacity',  1 - (scrollTop / 5000 * (this.speed )) );
      };

      // Initialization
      $(function () {
        $('[data-scroll-speed]').moveIt();
      });
      //# sourceURL=pen.js

      /* */
      (function () {

        var viewWidth, xPos;

        viewWidth = -1 * $(window).width();
        xPos = 0;

        $(document).on('scroll', function () {

          if (xPos > viewWidth) {
            xPos -= 20;
          } else {
            xPos = 0;
          }

          $('.svg-container svg').css('left', xPos);
        });

      })();
    </script>

  </body>

</html>
