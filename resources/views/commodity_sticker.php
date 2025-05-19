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
    <link href="css/flying_boat.css?v=202502201046" type="text/css" rel="stylesheet"><!--飛行艇-->
    
    <title>橘貓窩</title>

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
        width:200vw;

        /*覆蓋瀏覽器設定*/
        padding: 0;
        margin: 0;

        overflow: auto;

        /* transition: all 0.4s ease-in;
        -webkit-transition: all 0.4s ease-in; */
      }

      .cloud{
        animation-direction: reverse !important;
      }

      button.scroll{
        width: 5vw;
        height: 5vw;
        
        position: fixed;
        bottom: 5vh;
      }
      button.left{
        left:5vw;
      }
      button.down{
        left:45vw;
      }
      button.right{
        right:5vw;
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
        <button class="page" onclick="window.location.assign('./about_me')">About</button>
        <button class="page" onclick="window.location.assign('./sales')">Sales</button>
        <button class="page" onclick="window.location.assign('./comic')">Comic</button>
      </div>
      <!-- MENU END -->
    </div>
    <!-- 側邊欄 END -->

    <div class="cloud back1" style="--move-time:30s;"></div>
    <div class="cloud back1" style="top:25%; transform: scale(1.2);"></div>

    <button class="scroll left"></button>
    <button class="scroll right"></button>
    <button class="scroll down"></button>

    <div class="advertising_flying_boat">
      <div class="banner"></div>
      <div class="line"></div>
      <div class="flying_boat" id="flying_boat">
        <div class="screen">
          <img src="./picture/gif/too_many.gif">
          <img src="./picture/gif/too_many.gif">
        </div>
      </div>
      <!-- <div class="line"></div>
      <div class="strip"></div> -->
    </div>

    <canvas width="600" height="600" id="main_building">

    <div class="main_building">

    </div>

    <div class="buildings">

    </div>
    
    <script type="text/javascript" src="js/hamburger_menu.js"></script>
    <script type="text/javascript">
      const bodyWidth = document.body.scrollWidth;
      const bodyHeifht = document.body.scrollHeight;

      const leftButton = document.querySelector(".scroll.left");
      const rightButton = document.querySelector(".scroll.right");
      const downButton = document.querySelector(".scroll.down");

      const flyingBoat = document.getElementById("flying_boat");

      leftButton.addEventListener("click", ()=>{
        document.body.scrollTo({
          top: 0,
          left: bodyWidth*0.1,
          behavior: 'smooth'
        });
      });

      rightButton.addEventListener("click", ()=>{
        document.body.scrollTo({
          top: 0,
          left: bodyWidth*0.5,
          behavior: 'smooth'
        });
      });

      window.onload = (event) => {
        setTimeout(function () {
          document.body.scrollLeft = bodyWidth/2;
        }, 10);
      }
      
      var srcList = [
        "https://orange-cats.work/picture/gif/too_many.gif",
        "https://orange-cats.work/picture/gif/positive.gif",
        // "https://orange-cats.work/picture/gif/draw.gif",
        "https://orange-cats.work/picture/gif/big.gif",
        // "https://orange-cats.work/picture/gif/dog.gif",
      ];

      const bannerURL ="https://store.line.me/stickershop/product/29248550/zh-Hant"
      const urlArray= bannerURL.match(new RegExp(`.{3}`, 'g'));

      var timeoutID = setInterval(changeScreen, 11000);
      function changeScreen() {
        let images = flyingBoat.querySelector(".screen").querySelectorAll("img");
        let changeSource = srcList[(srcList.indexOf(images[0].src)+1)%(srcList.length)];
        // console.log("src = ", images[0].src);
        for(const image of images){
          image.src = changeSource ;
        }
      }

      for(let i=0; i<urlArray.length; i++){
        let a = document.createElement('a');

        a.href = bannerURL;
        a.style.animationDelay = `${i * 0.1}s`;
        a.innerHTML = urlArray[i];
        document.querySelector(".banner").appendChild(a);
      }
      
    </script>

    <script src="js/WebGL.js" type="text/javascript"></script>
    <!-- 片段著色器（Fragment Shader） -->
    <script id="shader-fs" type="x-shader/x-fragment">
      // shader program
      // gl_FragColor GLSL 規定用來輸出在畫布上顏色的變數,( red, green, blue, alpha)一樣要介在0～1

      precision mediump float;
      uniform vec4 color; //uniform 一旦給予值之後就不會再變化

      //每次 shader 執行時跑 void main()
      void main(void) {
        gl_FragColor = color;
      }
    </script>
    
    <!-- 頂點著色器（Vertex Shader） -->
    <script id="shader-vs" type="x-shader/x-vertex">
      // 我們在這裡撰寫 GSGL
      // vec4 代表一個向量，接收四個參數(x,y,z,w)
      // GLSL 規定用來輸出在畫布上位置的變數，其型別是 vec4, x, y, z，必須介於 -1 至 +1 才會落在畫布中(clip space)
      // 0,0,0 在 3d 座標中代表中心

      //attribute 這個型別只能夠用在 vertex shader 中，是先取用 buffer 中的資料再傳給 attribute
      //從 buffer 拿出對應的部份作為 attribute 變數 
      attribute vec4 position;
      attribute float size;
      
      void main(void) {
        gl_Position = position;
        gl_PointSize = size;
      }
    </script>

  </body>

</html>
