<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="apple-mobile-web-app-title" content="CodePen">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <link href="css/hamburger_menu.css?v-new" type="text/css" rel="stylesheet"><!-- 漢堡選單 -->
  
  <style>
  /* 
      ================================
          Best Viewed In Full Page
      ================================
  */

  /* Hover over a card to flip, can tab too. */

  @import url('https://fonts.googleapis.com/css?family=Lato');

  /* default */
  *,
  *::after,
  *::before {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  /* body */
  body {
    min-height: 100vh;
    padding: 40px;

    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;

    background: #1c0136;/*hsl(220, 10%, 12%);*/
    font-family: "Lato", "Segoe Ui", -apple-system, BlinkMacSystemFont, sans-serif;
  }

  /* .flip-card-container */
  .flip-card-container {
    --hue: 150;
    --primary: hsl(var(--hue), 80%, 50%);
    --white-1: hsl(0, 0%, 90%);
    --white-2: hsl(0, 0%, 80%);
    --dark: hsl(25.44deg 44.02% 26.35% / 50%);/*hsl(var(--hue), 25%, 10%);*/
    --grey: hsl(0, 0%, 50%);

    width: 310px;
    height: 500px;
    margin: 40px;

    perspective: 1000px;
  }

  /* .flip-card */
  .flip-card {
    width: inherit;
    height: inherit;

    position: relative;
    transform-style: preserve-3d;
    transition: .6s .1s;
  }

  /* hover and focus-within states */
  .flip-card-container:hover .flip-card,
  .flip-card-container:focus-within .flip-card {
    transform: rotateY(180deg);
  }

  /* .card-... */
  .card-front,
  .card-back {
    width: 100%;
    height: 100%;
    border-radius: 24px;

    background: var(--dark);
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;

    -webkit-backface-visibility: hidden;

            backface-visibility: hidden;

    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* .card-front */
  .card-front {
    transform: rotateY(0deg);
    z-index: 2;
  }

  /* .card-back */
  .card-back {
    transform: rotateY(180deg);
    z-index: 1;
  }

  /* figure */
  figure {
    z-index: -1;
  }

  /* figure, .img-bg */
  figure,
  .img-bg {
    position: absolute;
    top: 0;
    left: 0;

    width: 100%;
    height: 100%;
  }

  /* img */
  img {
    height: 100%;
    border-radius: 24px;
  }

  /* figcaption */
  figcaption {
    display: block;

    width: auto;
    margin-top: 12%;
    padding: 8px 22px;

    font-weight: bold;
    line-height: 1.6;
    letter-spacing: 2px;
    word-spacing: 6px;
    text-align: right;

    position: absolute;
    top: 0;
    right: 12px;

    color: var(--white-1);
    background: hsla(var(--hue), 25%, 10%, .5);
  }

  /* .img-bg */
  .img-bg {
    background: hsl(25.44deg 44.02% 26.35% / 50%);/*hsla(var(--hue), 25%, 10%, .5);*/ /*資料夾顏色*/
  }

  .card-front .img-bg {
    -webkit-clip-path: polygon(0 20%, 100% 40%, 100% 100%, 0 100%);
            clip-path: polygon(0 20%, 100% 40%, 100% 100%, 0 100%);
  }

  .card-front .img-bg::before {
    content: "";

    position: absolute;
    top: 34%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(18deg);

    width: 100%;
    height: 6px;
    border: 1px solid var(--primary);
    border-left-color: transparent;
    border-right-color: transparent;

    transition: .1s;
  }

  .card-back .img-bg {
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
            clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
  }

  /* hover state */
  .flip-card-container:hover .card-front .img-bg::before {
    width: 6px;
    border-left-color: var(--primary);
    border-right-color: var(--primary);
  }

  /* ul */
  ul {
    padding-top: 50%;
    margin: 0 auto;
    width: 70%;
    height: 100%;

    list-style: none;
    color: var(--white-1);

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  /* li */
  li {
    width: 100%;
    margin-top: 12px;
    padding-bottom: 12px;

    font-size: 14px;
    text-align: center;

    position: relative;
  }

  li:nth-child(2n) {
    color: var(--white-2);
  }

  li:not(:last-child)::after {
    content: "";

    position: absolute;
    bottom: 0;
    left: 0;

    width: 100%;
    height: 1px;

    background: currentColor;
    opacity: .2;
  }

  /* button */
  button {
    font-family: inherit;
    font-weight: bold;
    color: var(--white-1);

    letter-spacing: 2px;

    padding: 9px 20px;
    border: 1px solid var(--grey);
    border-radius: 1000px;
    background: transparent;
    transition: .3s;

    cursor: pointer;
  }

  button:hover,
  button:focus {
    color: var(--primary);
    background: hsla(var(--hue), 25%, 10%, .5);
    border-color: currentColor;
    border-width: 2px;

    font-weight: 900;
  }

  button:active {
    transform: translate(2px);
  }

  /* .design-container */
  .design-container {
    --tr: 90;
    --op: .5;

    width: 100%;
    height: 100%;

    background: transparent;
    position: absolute;
    top: 0;
    left: 0;

    pointer-events: none;
  }

  /* .design */
  .design {
    display: block;

    background: var(--grey);
    position: absolute;

    opacity: var(--op);
    transition: .3s;
  }

  .design--1,
  .design--2,
  .design--3,
  .design--4 {
    width: 1px;
    height: 100%;
  }

  .design--1,
  .design--2 {
    top: 0;
    transform: translateY(calc((var(--tr) - (var(--tr) * 2)) * 1%))
  }

  .design--1 {
    left: 20%;
  }

  .design--2 {
    left: 80%;
  }

  .design--3,
  .design--4 {
    bottom: 0;
    transform: translateY(calc((var(--tr) + (var(--tr) - var(--tr))) * 1%))
  }

  .design--3 {
    left: 24%;
  }

  .design--4 {
    left: 76%;
  }

  .design--5,
  .design--6,
  .design--7,
  .design--8 {
    width: 100%;
    height: 1px;
  }

  .design--5,
  .design--6 {
    left: 0;
    transform: translateX(calc((var(--tr) - (var(--tr) * 2)) * 1%));
  }

  .design--5 {
    top: 41%;
  }

  .design--6 {
    top: 59%;
  }

  .design--7,
  .design--8 {
    right: 0;
    transform: translateX(calc((var(--tr) + (var(--tr) - var(--tr))) * 1%))
  }

  .design--7 {
    top: 44%;
  }

  .design--8 {
    top: 56%;
  }

  /* states */
  button:hover+.design-container,
  button:active+.design-container,
  button:focus+.design-container {
    --tr: 20;
    --op: .7;
  }

  .abs-site-link {
    position: fixed;
    bottom: 20px;
    left: 20px;
    color: hsla(0, 0%, 100%, .6);
    font-size: 16px;
    font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
  }
  </style>

  </head>

  <body translate="no">
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
    <!-- flip-card-container -->
  <div class="flip-card-container" style="--hue: 79"><!--?-->
    <div class="flip-card">

      <div class="card-front">
        <figure>
          <div class="img-bg"></div>
          <img src="./picture/face.jpg" alt="Brohm Lake">
          <figcaption>電繪作品/習作</figcaption>
        </figure>

        <ul>
          <li>人物</li>
          <li>場景</li>
          <li>動圖</li>
          <li>卡片設計</li>
        </ul>
      </div>

      <div class="card-back">
        <figure>
          <div class="img-bg"></div>
          <img src="./picture/bird_bubble.jpg" alt="Brohm Lake">
        </figure>

        <button onclick="location.href='/Alikoi'">View</button>

        <div class="design-container">
          <span class="design design--1"></span>
          <span class="design design--2"></span>
          <span class="design design--3"></span>
          <span class="design design--4"></span>
          <span class="design design--5"></span>
          <span class="design design--6"></span>
          <span class="design design--7"></span>
          <span class="design design--8"></span>
        </div>
      </div>

    </div>
  </div>
  <!-- /flip-card-container -->

  <!-- flip-card-container -->
  <div class="flip-card-container" style="--hue: 170">
    <div class="flip-card">

      <div class="card-front">
        <figure>
          <div class="img-bg"></div>
          <img src="./picture/manga.jpg" alt="Image 2">
          <figcaption>漫畫</figcaption>
        </figure>

        <ul>
          <li>醫檢師日記</li>
          <li>橘貓窩漫畫</li>
          <li>鯨魚</li>
        </ul>
      </div>

      <div class="card-back">
        <figure>
          <div class="img-bg"></div>
          <img src="./picture/manga.jpg" alt="image-2">
        </figure>

        <button onclick="location.href='/comic'">View</button>

        <div class="design-container">
          <span class="design design--1"></span>
          <span class="design design--2"></span>
          <span class="design design--3"></span>
          <span class="design design--4"></span>
          <span class="design design--5"></span>
          <span class="design design--6"></span>
          <span class="design design--7"></span>
          <span class="design design--8"></span>
        </div>
      </div>

    </div>
  </div>
  <!-- /flip-card-container -->

  <!-- flip-card-container -->
  <div class="flip-card-container" style="--hue: 315"> <!--350-->
    <div class="flip-card">

      <div class="card-front">
        <figure>
          <div class="img-bg"></div>
          <img src="./picture/bird_bubble.jpg" alt="Brohm Lake">
          <figcaption>其他（手繪）</figcaption>
        </figure>

        <ul>
          <li>素描練習</li>
          <li>水彩練習</li>
        </ul>
      </div>

      <div class="card-back">
        <!-- only if the image is necessary -->
        <figure>
          <div class="img-bg"></div>
          <img src="./picture/bird_bubble.jpg" alt="Brohm Lake">
        </figure>

        <button>View</button>

        <!-- can add svg here and remove these eight spans -->
        <div class="design-container">
          <span class="design design--1"></span>
          <span class="design design--2"></span>
          <span class="design design--3"></span>
          <span class="design design--4"></span>
          <span class="design design--5"></span>
          <span class="design design--6"></span>
          <span class="design design--7"></span>
          <span class="design design--8"></span>
        </div>
      </div>

    </div>
  </div>
  <!-- /flip-card-container -->

  <!-- <a href="https://abubakersaeed.netlify.app/designs/d4-flip-card" class="abs-site-link" rel="nofollow noreferrer" target="_blank">abs/designs/d4-flip-card</a> -->

  <script type="text/javascript" src="js/hamburger_menu.js"></script>
  <script>
  </script>

  </body>
</html>