<html lang="en"; >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="apple-touch-icon" type="image/png" href="picture/Group2.png">
  <link rel="shortcut icon" type="image/x-icon" href="picture/Group2.png">
  <link rel="mask-icon" type="image/x-icon" href="picture/Group2.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">


  <title>橘貓橘貓窩</title>

  <link href="{{ asset('css/sidebar.css') }}" type="text/css" rel="stylesheet">
  <link href="css/lamp.css" type="text/css" rel="stylesheet">
  <link href="css/loader.css" type="text/css" rel="stylesheet">
  <link href="css/card.css" type="text/css" rel="stylesheet">
  <link href="css/page.css" type="text/css" rel="stylesheet">
  <link href="css/layout.css" type="text/css" rel="stylesheet">
  
<style>
* {
  box-sizing: border-box;
}
body {
  background: #2361a3;
  /* height: 100vh;
  width:100vw; */

  /*覆蓋瀏覽器設定*/
  padding: 0;
  margin: 0;

}
.container{
    width: 100%;
    align-items: center;
    gap:25%;
}

.logo{
  position: absolute;
  left: 0;
  top: 50px;
  display: flex;
  justify-content: center;
}

</style>

  <script>
  window.console = window.console || function(t) {};
</script>

</head>

<body translate="no">

  <div style="display: flex;">
    <!--sidebar-->
    <nav class="sidebar">
      <div class="logo">
        <img src="../picture/Group2.png" alt="logo" style="width: 80%;" />
      </div>
      <ul class="sidebar__nav">
          <!--Home-->
          <li class="nav__item">
              <a href="home">
                <svg class="item__icon" height="200px" width="200px"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve" fill="#000000">
                    <path 
                        d="M325.711,512.001H110.539c-28.486,0-51.66-23.174-51.66-51.66V225.285 c0-17.428,8.742-33.474,23.388-42.922l132.997-85.806c24.747-15.967,56.728-15.967,81.473,0l132.997,85.806 c14.645,9.448,23.388,25.493,23.388,42.922v256.394c0,8.158-6.615,14.772-14.772,14.772c-8.157,0-14.772-6.613-14.772-14.772 V225.285c0-7.347-3.686-14.113-9.862-18.097l-132.997-85.806c-15.02-9.689-34.425-9.689-49.441,0L98.283,207.189 c-6.175,3.984-9.86,10.749-9.86,18.097v235.056c0,12.196,9.921,22.116,22.116,22.116h215.173c8.157,0,14.772,6.613,14.772,14.772 S333.87,512.001,325.711,512.001z">
                    </path> 
                    <path  
                        d="M486.918,172.985c-2.844,0-5.715-0.818-8.25-2.529L281.504,37.412 c-15.491-10.455-35.514-10.455-51.01,0L33.332,170.456c-6.764,4.566-15.943,2.78-20.508-3.981 c-4.563-6.762-2.78-15.945,3.982-20.508L213.969,12.922c25.533-17.23,58.53-17.228,84.061,0l197.164,133.044 c6.762,4.563,8.545,13.745,3.981,20.508C496.321,170.703,491.662,172.985,486.918,172.985z">
                    </path>  
                    <path style="fill:#ff7e47;" 
                        d="M355.553,295.572c17.355-22.28,1.873-63.362,1.873-63.362s-42.946-4.867-60.562,16.835 c-12.565-4.652-26.372-7.225-40.863-7.225c-14.492,0-28.3,2.573-40.863,7.225c-17.617-21.703-60.562-16.835-60.562-16.835 s-15.482,41.082,1.873,63.362c0.78,1,1.628,1.928,2.507,2.821c-5.288,11.023-8.215,27.741-8.215,40.452 c0,51.042,47.126,75.532,105.26,75.532s105.26-24.49,105.26-75.532c0-12.713-2.926-29.43-8.215-40.452 C353.925,297.5,354.773,296.574,355.553,295.572z">
                    </path> 
                    <path style="fill:#000000;"
                        d="M256.001,429.151c-72.916,0-120.032-35.446-120.032-90.304c0-10.002,1.671-24.85,6.124-38.043 c-17.726-28.066-3.139-69.027-1.34-73.801c1.954-5.188,6.65-8.844,12.159-9.469c0.507-0.058,5.144-0.56,11.99-0.56 c16.758,0,38.566,2.851,54.112,15.256c11.9-3.44,24.302-5.179,36.987-5.179c12.684,0,25.085,1.74,36.987,5.179 c15.544-12.404,37.353-15.256,54.112-15.256c6.845,0,11.484,0.504,11.99,0.56c5.508,0.625,10.204,4.281,12.159,9.469 c1.801,4.774,16.382,45.733-1.34,73.802c4.454,13.196,6.124,28.043,6.124,38.043C376.032,393.705,328.917,429.151,256.001,429.151z M165.701,246.518c-2.913,12.035-5.129,30.312,2.4,39.977c0.332,0.427,0.784,0.929,1.384,1.539 c4.367,4.437,5.48,11.136,2.789,16.75c-3.917,8.166-6.761,22.491-6.761,34.064c0,19.042,8.13,34.034,24.164,44.559 c15.918,10.448,39.473,16.203,66.323,16.203s50.405-5.755,66.323-16.203c16.033-10.525,24.164-25.515,24.164-44.559 c0-11.571-2.844-25.896-6.761-34.065c-2.69-5.61-1.576-12.306,2.784-16.744c0.61-0.619,1.053-1.112,1.394-1.551 c7.522-9.655,5.309-27.92,2.392-39.968c-18.135,0.123-31.947,4.421-37.966,11.837c-3.988,4.913-10.668,6.739-16.596,4.544 c-11.303-4.185-23.326-6.306-35.734-6.306c-12.408,0-24.432,2.123-35.736,6.306c-5.934,2.199-12.609,0.369-16.597-4.544 C197.648,250.941,183.837,246.642,165.701,246.518z">
                    </path>
                    <path style="fill:#000000;"
                        d="M212.875,333.091h-2.028c-8.158,0-14.772-6.613-14.772-14.772c0-8.158,6.613-14.772,14.772-14.772 h2.028c8.158,0,14.772,6.613,14.772,14.772C227.646,326.477,221.033,333.091,212.875,333.091z"></path> <path style="fill:#000000;" d="M301.155,333.091h-2.03c-8.157,0-14.772-6.613-14.772-14.772c0-8.158,6.615-14.772,14.772-14.772 h2.03c8.157,0,14.772,6.613,14.772,14.772C315.926,326.477,309.313,333.091,301.155,333.091z">
                    </path>
                </svg>
              </a>
              <div class="item__tooltip">
                <span class="tooltip__text">Home</span>
              </div>
          </li>
          <!--About us-->
          <li class="nav__item">
            <a href="about_us">
                <svg class="item__icon" fill="#000000" height="256px" width="256px" viewBox="0 0 300 300" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  xml:space="preserve" stroke="#000000" stroke-width="0.00297" transform="matrix(1, 0, 0, 1, 0, 0)rotate(0)">
                    <path 
                        d="M225.333,0.636c-13.335,0-25.043,2.609-35.123,6.366c0.53,1.689,0.989,3.432,1.249,5.227 c0.554,3.827,0.48,7.75-0.243,11.684c9.453-4.152,20.98-7.277,34.273-7.277c15.436,0,29.481,5.719,39.842,16.103 C275.539,42.97,281,56.784,281,71.636v154c0,10.83-2.431,21.026-7.261,29.668c-0.041-3.464-0.327-7.098-1.046-10.907l-6.327-33.757 l-2.511-13.42c-4.771-25.286-11.176-38.648-14.868-44.69c1.563-5.494,3.569-15.579,1.487-26.617 c-2.667-14.132-8.706-24.616-19.517-33.792l-19.756-34.285c-1.571-2.726-4.607-4.283-7.727-3.966 c-3.132,0.313-5.789,2.434-6.789,5.417l-6.339,18.91c-2.708,0.161-5.574,0.53-8.681,1.115l-5.3,1.001 c-3.085,0.582-5.902,1.287-8.498,2.13l-12.772-15.214c-2.021-2.408-5.262-3.408-8.292-2.558c-3.026,0.851-5.274,3.395-5.745,6.503 l-5.918,39.077c-6.723,12.483-8.53,24.44-5.867,38.556c2.088,11.068,7.7,19.731,11.204,24.27 c-1.194,6.963-2.23,21.708,2.531,46.946l8.9,47.177c2.107,11.169,6.677,18.935,13.971,23.74c7.666,5.051,16.95,5.764,24.183,5.82 c1.016,0.008,2.525,0.012,4.374,0.012c4.61,0,11.407-0.021,17.896-0.049c9.618-0.039,18.562-0.087,18.711-0.088 c0.17-0.001,0.172-0.01,0.341-0.022C268.948,296.141,297,265.797,297,225.636v-154C297,31.823,265.614,0.636,225.333,0.636z">
                    </path> 
                    <path 
                        d="M127.286,222.968c-4.046-21.445-4.202-36.358-3.424-45.724c-3.883-6.075-8.307-14.846-10.312-25.473 c-3.126-16.567-1.11-31.795,6.163-46.509l3.691-24.371c-0.901-0.203-1.819-0.398-2.771-0.578l-5.304-1.001 c-3.104-0.585-5.97-0.954-8.678-1.115l-6.339-18.91c-1-2.983-3.657-5.104-6.789-5.417c-3.136-0.317-6.156,1.239-7.728,3.966 L66.041,92.121c-10.811,9.176-16.853,19.66-19.52,33.793c-2.082,11.037-0.082,21.122,1.481,26.616 c-3.692,6.042-10.108,19.404-14.879,44.69l-8.9,47.177c-0.629,3.333-1.152,6.528-1.261,9.598C18.534,245.631,16,235.912,16,225.636 v-154c0-30.841,24.764-55,56.166-55c12.691,0,23.872,2.894,33.103,6.81c-0.645-3.778-0.677-7.543-0.145-11.218 c0.279-1.928,0.758-3.796,1.347-5.6c-9.842-3.554-21.43-5.992-34.315-5.992C31.782,0.636,0,31.823,0,71.636v154 c0,39.663,27.83,69.748,64.88,70.943c0.104,0.008,0.286,0.021,0.39,0.03c0.2,0.017,0.443,0.025,0.644,0.026 c0.251,0.001,25.186,0.137,36.628,0.137c1.849,0,3.369-0.004,4.384-0.012c11.601-0.091,24.876-2.147,32.686-14.68 c-1.472-3.693-2.622-7.684-3.429-11.963L127.286,222.968z">
                    </path>
                    <path 
                        d="M148.49,49.47c37.505-23.93,27.104-45.249,17.174-48.428c-8.372-2.673-14.299,1.549-17.174,7.911 c-3.453-5.698-8.802-10.584-17.17-7.911C121.386,4.221,110.984,25.541,148.49,49.47z">
                    </path>    
                </svg>
              </a>
              <div class="item__tooltip"><span class="tooltip__text">About_us</span></div>
          </li>
          <!--Collections-->
          <li class="nav__item">
            <a href="collections">
              <svg class="item__icon stroke" style="width:92px;height:92px;" viewBox="0 0 512.00 512.00" id="icons" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                <defs> <style>.cls-1{stroke-miterlimit:10;}.cls-2{fill:none;stroke-width:15px;stroke-linecap:round;stroke-linejoin:round;}.stroke:hover{stroke: #000000 !important;}</style> </defs> 
                  <path class="cls-2" d="M391.92,173.25v172.21c0,12.12-9.83,21.94-21.95,21.94H140.03c-12.12,0-21.94-9.82-21.94-21.94V173.25c0-12.11,9.82-21.94,21.94-21.94h13.91l21.42-37.12c1.91-3.3,6.67-3.3,8.58,0l21.42,37.12h92.17l21.43-37.12c1.91-3.3,6.67-3.3,8.58,0l21.42,37.12h21.01c12.12,0,21.95,9.83,21.95,21.94Z"></path> <path class="cls-1" d="M436.37,183.6c-4.65,13.85-14.67,27.17-24.36,40.05-6.68,8.87-15.21,20.09-19.53,28.84v-41.73c.29-.38,.58-.77,.87-1.15,22.91-30.45,28.6-43.24,14.85-54.37-5.01-4.06-5.79-11.41-1.73-16.42,4.05-5.01,11.4-5.78,16.41-1.73,14.98,12.13,19.64,28.2,13.49,46.51Z"></path> <path class="cls-1" d="M391.91,296.17s-32.09-59.99-68.46-59.99c-38.39,0-74.84,52.08-81.45,60.51"></path> <path class="cls-1" d="M121.47,356.72s36.9-73.58,88.05-74.34c45.53-.67,75.54,85.02,75.54,85.02"></path> <path class="cls-1" d="M208.68,228.75c-2.94-5.07-9.27-8.57-16.61-8.57s-13.67,3.51-16.61,8.57c-5.25,2.45-8.57,6.04-8.57,10.05,0,7.39,11.27,13.38,25.18,13.38s25.18-5.99,25.18-13.38c0-4.01-3.32-7.6-8.57-10.05Z"></path> <ellipse class="cls-1" cx="201.33" cy="201.75" rx="9.91" ry="7.61" transform="translate(-41.43 351.1) rotate(-76.66)"></ellipse> <ellipse class="cls-1" cx="180.13" cy="201.75" rx="7.61" ry="9.91" transform="translate(-41.69 47) rotate(-13.34)"></ellipse> <ellipse class="cls-1" cx="163.75" cy="218.02" rx="6.68" ry="8.71" transform="translate(-87.07 111.08) rotate(-30)"></ellipse> <ellipse class="cls-1" cx="218.55" cy="215.76" rx="8.71" ry="6.68" transform="translate(-77.58 297.15) rotate(-60)"></ellipse> 
              </svg>
            </a>0
            <div class="item__tooltip"><span class="tooltip__text">Collections</span></div>
          </li>
          <!--Sales-->
          <li class="nav__item">
              <a href="sales">
                  <svg class="item__icon" fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 41.695 41.695" xml:space="preserve">
                      <path style="stroke: #0000;"
                          d="M35.659,10.852h-1.468V8.567h4.822c1.234,0,2.235-1.023,2.235-2.283c0-1.263-1.001-2.286-2.235-2.286H9.094V2.285 C9.094,1.023,8.093,0,6.858,0C5.625,0,4.623,1.023,4.623,2.285v1.713h-1.94c-1.235,0-2.236,1.023-2.236,2.286 c0,1.26,1.001,2.283,2.236,2.283h1.94V39.41c0,1.263,1.001,2.285,2.236,2.285c1.234,0,2.235-1.022,2.235-2.285V8.567h9.449v2.285 h-1.469c-3.082,0-5.589,2.562-5.589,5.712v8.567c0,3.146,2.508,5.711,5.589,5.711h18.585c3.082,0,5.589-2.562,5.589-5.711v-8.567 C41.248,13.415,38.741,10.852,35.659,10.852z M23.013,8.567h6.707v2.285h-6.707V8.567z M16.928,24.521 c-0.797,0-1.583-0.213-1.976-0.436l0.321-1.332c0.424,0.223,1.075,0.443,1.749,0.443c0.724,0,1.107-0.307,1.107-0.771 c0-0.443-0.331-0.697-1.169-1.004c-1.159-0.414-1.914-1.067-1.914-2.104c0-1.216,0.994-2.146,2.638-2.146 c0.786,0,1.366,0.17,1.779,0.359l-0.353,1.303c-0.278-0.141-0.775-0.341-1.458-0.341c-0.683,0-1.014,0.317-1.014,0.688 c0,0.453,0.394,0.654,1.293,1.004c1.231,0.464,1.81,1.119,1.81,2.124C19.741,23.506,18.842,24.521,16.928,24.521z M24.968,24.415 l-0.539-1.828h-1.996l-0.496,1.828h-1.634l2.129-7.124h2.069l2.162,7.124H24.968z M27.601,24.415v-7.124h1.582v5.771h2.771v1.353 H27.601z M37.335,24.415H32.89v-7.124h4.303v1.322h-2.721v1.479h2.563v1.311h-2.563v1.691h2.863V24.415z">
                      </path> 
                      <path 
                          d="M23.416,18.496h-0.021c-0.104,0.422-0.207,0.961-0.32,1.374l-0.414,1.512h1.542l-0.435-1.512 C23.644,19.447,23.519,18.919,23.416,18.496z">
                      </path>
                  </svg>
              </a>
              <div class="item__tooltip"><span class="tooltip__text">Sales</span></div>
          </li>
      </ul>

    </nav>

    <!--介紹區塊-->
    <div class="main-container" style="width: 100%;">
      <div class="grid-container">
        <div class="card card--2x">
          <div class="card__content big-script padding-large">
            <p>Orange Cats Work</p>
          </div>
        </div>
        <div class="card">
          <div class="card__image">
            <img src="./picture/big_orange_cat.png" alt="BigOrangeCat">
          </div>
        </div>
        <div class="card">
          <div class="card__image">
            <img src="./picture/little_orange_cat.png" alt="LittlOrangeCat">
          </div>
        </div>
        <div class="card">
          <div class="card__content">
            <p><em>橘貓裡，母貓出現的機率是1/3，胖的機率是2/2</em></p>
            <p>— Alikoi</p>
          </div>
        </div>
        <div class="card card--horizontal">
          <div class="card__image">
            <img src="./picture/Group1.png" alt="logo">
          </div>
        </div>
        <div class="card">
          <div class="card__image">
            <img src="./picture/Group2.png" alt="icon">
          </div>
        </div>

        <div class="card card--featured">
          <div class="card__side-by-side--m">
            <div class="card__image">
              <img src="./picture/draw_blood.png" alt="醫檢師的辛酸日記">
            </div>
            <div class="card__content padding-large--l">
              <h2>醫檢師系列</h2>
              <p>剛大學畢業的醫檢師們提供在工作上發生的大小事。</p>
              <p>想透過略帶幽默的四格漫畫，讓大家對醫檢師這個行業有更加深入的了解。</p>
              <div class="card__button" onclick="window.open('./comic')">看更多...</div>
            </div>
          </div>
        </div>
        
        <div class="card card--vertical">
          <div class="card__image">
            <img src="./picture/manga.jpg" alt="manga">
          </div>
        </div>
        
        <div class="card card--horizontal">
          <div class="card__side-by-side">
            <div class="card__image">
              <img src="./picture/血庫.jpg" alt="Sticker">
            </div>
            <div class="card__content">
              <h3>血庫組</h3>
              <p>有需要輸血時，由輪值的血庫組負責匹配血型，避免出現移植排斥。</p>
            </div>
          </div>
        </div>
        <div class="card card--vertical">
          <div class="card__image">
            <img src="./picture/manga2.jpg" alt="manga">
          </div>
        </div>
        <div class="card">
          <div class="card__image">
            <img src="./picture/管太多.png" alt="Sticker">
          </div>
        </div>
        <div class="card">
          <div class="card__content">
            <p><em>同樣承擔醫療風險，醫檢師的待遇卻較為低廉。</em></p>
            <p>— 某醫檢師</p>
          </div>
        </div>
        <div class="card">
          <div class="card__image">
            <img src="./picture/管太多.png" alt="Sticker">
          </div>
        </div>
        <div class="card">
          <div class="card__image">
            <img src="./picture/管太多.png" alt="Sticker">
          </div>
        </div>

        <div class="card card--2x">
          <div class="card__image">
            <img src="./picture/water_flower_girl.jpg" alt="Draw">
          </div>
        </div>
        <div class="card card--horizontal card--frameless">
          <div class="card__content big-script">
            <p style="color:#FF853A;">一止魚</p>
          </div>
        </div>
        <div class="card card--horizontal">
          <div class="card__image">
            <img src="./picture/動圖練習-炸彈.gif" alt="bomb.gif">
          </div>
        </div>
        <div class="card">
          <div class="card__content">
            <p><em>一隻魚，逆流而上不去，未曾躍起，已然落下，海水太鹹它受不起</em></p>
            <p>— Alikoi</p>
          </div>
        </div>
        <div class="card">
          <div class="card__image">
            <img src="./picture/bird_bubble.jpg" alt="bird_bubble">
          </div>
        </div>
      </div>
    </div>

  </div>
  
  <script id="rendered-js" >
// NOPE
/**
 * Possible by randomly generating CSS variables
 * within our markup code.
 * Those variables define the characteristics of
 * each blob.
*/
//# sourceURL=pen.js
    </script>

  
</body>

</html>
