<html lang="en"; >

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon" type="image/png" href="picture/Group2.png">
    <link rel="shortcut icon" type="image/x-icon" href="picture/Group2.png">
    <link rel="mask-icon" type="image/x-icon" href="picture/Group2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->

    <!-- <link href="css/scroll_word.css" type="text/css" rel="stylesheet">字 -->
    <link href="css/flex.css?v-new" type="text/css" rel="stylesheet"><!-- flex -->
    <link href="css/hamburger_menu.css?v-new" type="text/css" rel="stylesheet"><!-- 漢堡選單 -->
    <link href="css/carousel.css?v-new" type="text/css" rel="stylesheet"><!-- 旋轉木馬 -->
    <link href="css/lotus_leaf.css?v-new" type="text/css" rel="stylesheet"><!-- 蓮花 -->
    <link href="css/fish.css?v-new" type="text/css" rel="stylesheet"><!-- 魚 -->
    <link href="css/rock.css?v-new" type="text/css" rel="stylesheet"><!-- 石頭 -->
    <link href="css/commodity_card.css?v-new" type="text/css" rel="stylesheet"><!-- 商品卡 -->

    <title>橘貓窩</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>

      body {
        position: relative;
        min-width: 100vw;
        min-height: 100vh;

      }


      /* 頭部區塊 START */
      .head_field{
        position: relative;
        top: 0;

        height:40vh;
        width: 100%;

        background: linear-gradient(to right bottom, #6DB5E1, #9EEB63);  
      }

      .head_field:before,
      .head_field:after{
          content:"";

          position: absolute;

          background-color: #8C8C8C;
      }
      .head_field:before{
        width: 50vw;
        height: 40vh;

        top: 0;
        right: 0;
      
        clip-path: polygon(0 0, 100% 0, 100% 57%);
      }
      .head_field:after{
        width: 15vw;
        height: 25vh;

        bottom: 0;
        left: 0;
        clip-path: polygon(0 40%, 0 100%, 100% 100%);
      }
      .head_field span.new{
        position: absolute;
        right: 5vw;
        top: 5vh;

        color: #009EFF;
        font-size: 3vw;
        font-weight: bolder;
        -webkit-text-stroke: 1px #000000;
        
      }
      /* 頭部區塊 END */

      /* 流水canvas START */

      canvas#waterfallCanvas {
        position: absolute;
        top: 38vh;

        display: block;
        margin: 0 auto;

        width: 100%;
        height: 5vh;

        z-index: 2;
      }
      /* 流水canvas END */
      
       /* middle bar START */
      .middle_bar{
        position: absolute;
        top:40vh;
        left:0;
        z-index: 1;

        width: 100vw;
        height:20px;

        background-color: #748D8E;
      }
      /* middle bar END */

      /* 主要區塊 START */
      .body_field{
        position: relative;

        width: 100%;
        height: max-content;

        overflow: hidden;

        background-color: #38C1AB;

        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;

        /*background-image: url(../picture/stone.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;*/
      }

      .body_field .menu{
        height: auto;
        max-height:100vh;
        width: 15vw;

        position: sticky;
        left: 0;
        top: 20px;
        z-index: 2;
      }
      .body_field .menu .options{
        justify-content: flex-start;

        height:100%;
        width: 15vw;

        position: absolute;
        left: 0;

        gap:10%;

        font-size:40px;
        font-weight:bold;

        padding: 5vh 2vw;
      }
      .body_field .menu .options .classification{
        cursor: pointer;
      }
      .body_field .menu::after{
        content: "";

        position: absolute;
        left:0;
        z-index: -1;

        height: 100%;
        width: 100vw;

        background-image: url('../picture/stone.png');
        background-repeat: no-repeat;
        background-size: contain;
        /* background-position: center; */
      }

      .body_field .card_list_section{
        margin-top: 250px;

        min-height: 60vh;
        /* width: 80vw; */
        flex-grow: 1;

        position: relative;
        /* left:20vw; */
        top:0;

        display:flex;
        flex-direction: column;
        align-items: center;
        gap: 350px;

      }
      .body_field .card_list_section .card_container{
        width: 450px;
        height: 300px;

        /* position: absolute;
        top: 20vh;
        left: 45vw; */
        z-index:2;

        display: flex;
        align-items: center;
        justify-content: center;
      }
      .body_field .card_list_section .card_container .card{
        position: relative;
        z-index: 2;
      }
      /* 主要區塊 END */
    </style>

    <script>
      window.console = window.console || function(t) {};
    </script>

  </head>

  <body>
    
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

    <!-- 蓮花 STRAT -->
    <div class="lotus_leaf_field">
      <!-- lotus_leaf START -->
      <div class="lotus_leaf" style="--size-width:4%;--flow-left:23vw;--delay-time:-12s;--flow-time:33s;--rotate-deg:30deg;"></div>
      <div class="lotus_leaf" style="--size-width:6%;--flow-left:77vw;--delay-time:-7s;--flow-time:38s;--rotate-deg:228deg;"></div>
      <div class="lotus_leaf" style="--size-width:7%;--flow-left:76vw;--delay-time:10s;--flow-time:43s;--rotate-deg:58deg;"></div>
      <div class="lotus_leaf" style="--size-width:9%;--flow-left:86vw;--delay-time:0s;--flow-time:45s;--rotate-deg:300deg;"></div>
      <div class="lotus_leaf" style="--size-width:10%;--flow-left:30vw;--delay-time:-3s;--flow-time:47s;--rotate-deg:275deg;"></div>
      <div class="lotus_leaf" style="--size-width:11%;--flow-left:97vw;--delay-time:15s;--flow-time:48s;--rotate-deg:168deg;"></div>
      <div class="lotus_leaf" style="--size-width:12%;--flow-left:87vw;--delay-time:20s;--flow-time:50s;--rotate-deg:32deg;"></div>
      <div class="lotus_leaf" style="--size-width:13%;--flow-left:20vw;--delay-time:30s;--flow-time:53s;--rotate-deg:14deg;"></div>
      <!-- lotus_leaf END -->
    </div>
    <!-- 蓮花 END -->

    <!-- Head START-->
    <div class="head_field">

      <!-- new START-->
      <span class="new">新品上市</span>
      <!-- new END-->

      <!-- Commodity START-->
        <section class="carousel" aria-label="Gallery">
          <ol class="carousel__viewport">
            <li id="carousel__slide1" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"></div>
              <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
              <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
            </li>
            <li id="carousel__slide2" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"></div>
              <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
              <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
            </li>
            <li id="carousel__slide3" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"></div>
              <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
              <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
            </li>
            <li id="carousel__slide4" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"></div>
              <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
              <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
            </li>
          </ol>
          <!-- 下方點點 START -->
          <aside class="carousel__navigation">
            <ol class="carousel__navigation-list">
              <li class="carousel__navigation-item">
                <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
              </li>
              <li class="carousel__navigation-item">
                <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
              </li>
              <li class="carousel__navigation-item">
                <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
              </li>
              <li class="carousel__navigation-item">
                <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
              </li>
            </ol>
          </aside>
          <!-- 下方點點 END -->
        </section>
      <!-- Commodity END-->
      </div>
    <!-- Head END-->

    <!-- waterfallCanvas START -->
    <canvas id="waterfallCanvas" width="600" height="400"></canvas>
    <!-- waterfallCanvas END -->

    <!-- middle bar START -->
    <div class="middle_bar"></div>
    <!-- middle bar END -->
    <!-- Body START-->
    <div class="body_field">
        
        <!-- Menu START-->
        <div class="menu nowrap_column horizontal" style="gap:20px;">
          <div class="options nowrap_column horizontal">
            <input type="text" placeholder="搜尋..." style="width:100%;"/>
            <div class="classification">全部</div>
            <div class="classification">鉤針</div>
            <div class="classification">刺繡</div>
            <div class="classification">吊飾</div>
          </div>
        </div>
        <!-- Menu End-->

        <!-- little rocks START -->
        <canvas class="rock" width="150" height="100" style="top:57vh; left:87vw; z-index:1;"></canvas>
        <!-- little rocks END -->
        <div class="card_list_section">
          <!-- rock & card START -->
          <div class="card_container">
            
            <div class="card">
              <div class="image" style="background-image:url('./picture/IMG_Front.png')"></div>
              <div class="list">
                <div class="thumbnail chosen" style="background-image:url('./picture/IMG_Front.png')" data-src="./picture/IMG_Front.png"></div>
                <div class="thumbnail" style="background-image:url('./picture/IMG_Scale.png')" data-src="./picture/IMG_Scale.png"></div>
                <div class="thumbnail" style="background-image:url('./picture/IMG_Inside.png')" data-src="./picture/IMG_Inside.png"></div>
              </div>
              <div class="head">
                <div class="title">
                  <span>暖冬</span>
                  <span>（鉤針零錢袋）</span>
                </div>
                <div class="mode">
                  <svg height="200px" width="200px" version="1.1" id="图层_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="10 10 20 20" enable-background="new 0 0 40 40" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path fill="#4eda84" d="M16.6,28.1c-0.4,0-0.8-0.2-1.1-0.4l-3.2-3.2c-0.3-0.3-0.4-0.7-0.4-1.1s0.2-0.8,0.4-1.1l10-10 c0.6-0.6,1.6-0.6,2.1,0l3.2,3.2c0.3,0.3,0.4,0.7,0.4,1.1s-0.2,0.8-0.4,1.1l-10,10C17.3,27.9,17,28.1,16.6,28.1z M23.4,12.9 c-0.1,0-0.3,0.1-0.4,0.1l-10,10c-0.1,0.1-0.1,0.2-0.1,0.4s0.1,0.3,0.1,0.4l3.2,3.2c0.2,0.2,0.5,0.2,0.7,0l10-10 c0.1-0.1,0.1-0.2,0.1-0.4s-0.1-0.3-0.1-0.4l-3.2-3.2C23.7,13,23.6,12.9,23.4,12.9z"></path> </g> <g> <path fill="#4eda84" d="M20.4,18.6c-0.1,0-0.3,0-0.4-0.1l-1.5-1.5c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0l1.5,1.5 c0.2,0.2,0.2,0.5,0,0.7C20.6,18.5,20.5,18.6,20.4,18.6z"></path> </g> <g> <path fill="#4eda84" d="M18.1,20.9c-0.1,0-0.3,0-0.4-0.1l-1.5-1.5c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0l1.5,1.5 c0.2,0.2,0.2,0.5,0,0.7C18.4,20.8,18.2,20.9,18.1,20.9z"></path> </g> <g> <path fill="#4eda84" d="M15.8,23.2c-0.1,0-0.3,0-0.4-0.1l-1.5-1.5c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0l1.5,1.5 c0.2,0.2,0.2,0.5,0,0.7C16.1,23.1,15.9,23.2,15.8,23.2z"></path> </g> <g> <path fill="#4eda84" d="M22.7,16.3c-0.1,0-0.3,0-0.4-0.1l-1.5-1.5c-0.2-0.2-0.2-0.5,0-0.7s0.5-0.2,0.7,0l1.5,1.5 c0.2,0.2,0.2,0.5,0,0.7C22.9,16.3,22.8,16.3,22.7,16.3z"></path> </g> </g> </g> </g></svg>
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.53846C7.32682 3.53846 3.53846 7.32682 3.53846 12C3.53846 16.6732 7.32682 20.4615 12 20.4615C16.6732 20.4615 20.4615 16.6732 20.4615 12C20.4615 7.32682 16.6732 3.53846 12 3.53846ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z" fill="#03d898"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16.359C12.4248 16.359 12.7692 16.0146 12.7692 15.5897V11.4872C12.7692 11.0623 12.4248 10.7179 12 10.7179C11.5752 10.7179 11.2308 11.0623 11.2308 11.4872V15.5897C11.2308 16.0146 11.5752 16.359 12 16.359Z" fill="#03d898"></path> <path d="M13.0256 8.41026C13.0256 7.84381 12.5664 7.38462 12 7.38462C11.4336 7.38462 10.9744 7.84381 10.9744 8.41026C10.9744 8.9767 11.4336 9.4359 12 9.4359C12.5664 9.4359 13.0256 8.9767 13.0256 8.41026Z" fill="#03d898"></path> </g></svg>
                </div>
              </div>
              <div class="text">
                <span>純手工鉤針小袋，拉兩側小辮即可收合！</span>
                <span>想找個東西放零錢，又覺得零錢包總是醜醜的嗎？</span>
                <span>一手掌握、可壓縮收納 的 零錢包 來啦~</span>
                <span>毛絨絨的鉤針材質，精緻小巧的外觀;</span>
                <span>冷冷的冬天，溫暖的心;</span>
              </div>
              <div class="specification">
                <div class="number">
                  <span>數量：</span>
                  <input type="number" max="99" min="1" value="1" oninput="value=value.slice(0,2)"/>
                </div>
                <div class="color">
                  <span>choose your color:</span>
                  <div class="circle" style="background: #6D96EF"></div>
                </div>
              </div>
              <div class="shop">
                <div class="price">
                  <span>
                    ＄300<span class="currency">(TWD)</span>
                  </span>
                  <span class="supplement">不含郵資</span>
                </div>
                
                <div class="buy">
                  加入購物車
                </div>
              </div>
            </div>

            <canvas class="rock" width="750" height="560"></canvas>

          </div>
          <!-- rock & card END -->
        </div>

        <!-- fish START -->
        <div class="fish" data-number="0" style="--swim-x: 2000px;--swim-y: 500px;rotate: 0deg;">
            <div class="tail"></div>
        </div>
        <div class="fish big" data-number="1" style="--swim-x: 300px;--swim-y: 300px;rotate: 0deg;">
            <div class="tail"></div>
        </div>
        <div class="fish small" data-number="2" style="--swim-x: 1000px;--swim-y: 800px;rotate: 0deg;">
            <div class="tail"></div>
        </div>
        <!-- fish END -->
    </div>
    <!-- Body END-->

    <!-- <script type="text/javascript" src="js/carousel.js"></script> -->
    <script type="text/javascript" src="js/hamburger_menu.js"></script>
    <script type="text/javascript" src="js/fish.js"></script>
    <script type="text/javascript" src="js/rock.js"></script>
    <script type="text/javascript" src="js/waterfallCanvas.js"></script>
    <script type="text/javascript">
      document.querySelectorAll(".card").forEach( (card) => {
        let image = card.querySelector(".image");

        card.querySelectorAll(".thumbnail").forEach( (thumbnail) => {
          thumbnail.addEventListener("click", (e) => {

            let target = e.currentTarget;
            target.classList.add("chosen");
            $(target).siblings().removeClass("chosen");
            
            image.style.backgroundImage = "url(" + target.dataset.src + ")";

          });
        });

      });
     
    </script>

  </body>

</html>
