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
    <link href="css/cloud.css" type="text/css" rel="stylesheet"><!--雲-->
    <link href="css/flying_boat.css?v=202502190146" type="text/css" rel="stylesheet"><!--飛行艇-->
    
    <title>橘貓橘貓窩</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>
      * {
        box-sizing: border-box;
      }
      body {
        background: linear-gradient(to bottom, #FF5C1C -40%, #FF1C1C, #EBDF63);
        background-image: -webkit-linear-gradient(#FF5C1C -40%, #FF1C1C, #EBDF63 );
        
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        
        height: 100vh;
        width:100vw;

        /*覆蓋瀏覽器設定*/
        padding: 0;
        margin: 0;

        overflow: hidden;

        transition: all 0.4s ease-in;
        -webkit-transition: all 0.4s ease-in;
      }

      .cloud{
        animation-direction: reverse !important;
      }

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
        <button class="page" onclick="window.location.assign('./about_us')">About</button>
        <button class="page" onclick="window.location.assign('./sales')">Sales</button>
        <button class="page" onclick="window.location.assign('./comic')">Comic</button>
      </div>
      <!-- MENU END -->
    </div>
    <!-- 側邊欄 END -->

    <div class="cloud back1" style="--move-time:30s;"></div>
    <div class="cloud back1" style="top:25%; transform: scale(1.2);"></div>

    <div class="flying_boat" id="flying_boat">
      <div class="screen">
        <img src="./picture/gif/too_many.gif">
        <img src="./picture/gif/too_many.gif">
      </div>
      <div class="banner">
        <div class="line"></div>
      </div>
    </div>
    
    <script type="text/javascript" src="js/hamburger_menu.js"></script>
    <script type="text/javascript">

      var flyingBoat = document.getElementById("flying_boat");

      var srcList = [
        "https://orange-cats.work/picture/gif/too_many.gif",
        "https://orange-cats.work/picture/gif/positive.gif",
        // "https://orange-cats.work/picture/gif/draw.gif",
        "https://orange-cats.work/picture/gif/big.gif",
        // "https://orange-cats.work/picture/gif/dog.gif",
      ];

      const bannerURL= "https://store.line.me/stickershop/product/29248550/zh-Hant".match(new RegExp(`.{3}`, 'g'));

      var timeoutID = setInterval(changeScreen, 11000);
      function changeScreen() {
        let images = flyingBoat.querySelector(".screen").querySelectorAll("img");
        let changeSource = srcList[(srcList.indexOf(images[0].src)+1)%(srcList.length)];
        console.log("src = ", images[0].src);
        for(const image of images){
          image.src = changeSource ;
        }
      }

      for(let i=0; i<bannerURL.length; i++){
        let span = document.createElement('span');
        span.innerHTML = bannerURL[i];
        document.querySelector(".banner").appendChild(span);
      }
      
      
    </script>

  </body>

</html>
