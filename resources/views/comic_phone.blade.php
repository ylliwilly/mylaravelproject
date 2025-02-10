<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="apple-mobile-web-app-title" content="OrangeCats">
    
    <!-- icon -->
    <<link rel="apple-touch-icon" type="image/png" href="./picture/Group2.png">
    <link rel="shortcut icon" type="image/x-icon" href="./picture/Group2.png">
    <link rel="mask-icon" type="image/x-icon" href="./picture/Group2.png">
    
    <title>Orange-cats-comic</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    
    <link href="css/hamburger_menu.css?v-new" type="text/css" rel="stylesheet"><!-- 漢堡選單 -->
      
  <style>
    * {
      box-sizing: border-box;
    }

    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
    }

    body{
      background-color:#1F0E3F;
      font-family: "DM Sans", sans-serif;
      transition: background 0.4s ease-in;
      -webkit-transition: background 0.4s ease-in;
    }

    .change-color {
      background-color: #2867C7 !important;
    }
    
    .container {
      width: 100%;
      /* height: 100%; */
      transform-style: preserve-3d;

      display: flex;
      flex-direction: column;
      flex-wrap: nowrap;
      align-items: center;

      padding: 5vh 0;
    }

    .card_list {
      width: 100%;
      height: 100%;
      min-height: fit-content;

      display: flex;
      flex-direction: column;
      flex-wrap: nowrap;
      align-items: center;
      gap: 5vh;

    }

    .operation{
      display:none;
    }

    input[type=radio] {
      display: none;
    }

    label.card{
      position:relative;
      height:380px;
      width: 500px;
      max-width:90vw;
      margin: auto;
      transition: transform 0.4s ease;
      -webkit-transition: transform 0.4s ease;
      cursor: pointer;
    }

    label.card:hover::before{
      content:"";
      width: 100px;
      height: 1000px;

      background-image:url('../picture/eye_icon.png');
      background-size:  contain;
      background-repeat:no-repeat;

      position: absolute;
      left:calc(50% - 50px);
      top: calc(50% - 50px);

      cursor: pointer;
    } 

    label.card > img {
      width: 100%;
      height: 100%;
      border-radius: 10px;
      -o-object-fit: cover;
      object-fit: cover;
      object-position: top center;
    }

  </style>

  <style>
    body.expand{
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px 10px;
    }

    body.expand .container{
      height:100%;
      
      justify-content: center;
      flex-direction: column;
      align-items: center;
      
    }
    body.expand .container .card_list{
      position: relative;

      height: auto;
      min-height:100%;

      overflow: auto;
      margin: 20px 0;
    }
    body.expand .container .card_list label.card{
      width: 60%;
      height: 100%;

      position: absolute;
      opacity: 0;
    }
    body.expand .container .card_list label.card:before{
      display:none;
    } 

    body.expand .container .card_list .card.main > img{
      height: auto;
    }

    body.expand .container .card_list .card.prev{
      transform: translate(-35%, 10%) scale(0.8);
      opacity: 0.4;
      z-index: 0;
    }
    body.expand .container .card_list .card.main{
      /* min-width: fit-content; */
      width: 80%;
      height: fit-content;
      min-height: 100%;

      transform: translatex(0) scale(1);
      opacity: 1;
      z-index: 1;

      box-shadow: 0px 0px 5px 0px rgba(81, 81, 81, 0.47);
    }
    body.expand .container .card_list .card.next{
      transform: translate(35%, 10%) scale(0.8);
      opacity: 0.4;
      z-index: 0;
    }

    body.expand .container .bottom_bar{
      display: flex;
      justify-content: space-around;
      align-items: center;
    }

    body.expand .container .operation{
      display:unset;
      background-color: #fff;
      border-radius: 8px;
      min-width: 320px;
      padding: 16px 10px;
    }

    /* bottom_bar */

    .container .bottom_bar {
      width: 70vw;
      height: 8vh;
      /* height: 120px; */
      min-width: fit-content;

      background-color: #FF853A;
      border-radius: 8px;
      padding: 16px 10px;

      display: none;

      position: relative;
      z-index: 2;
    }
    .container .bottom_bar input {
      display: none;
    }
    .container .bottom_bar label {
      position: relative;
      /* width: 120px;
      height: 120px; */
      height: 8vh;
      aspect-ratio: 1 / 1;

      display: flex;
      align-items: center;
      justify-content: center;

      background-color: #FF853A;
      border-radius: 50%;

      /* transition: transform 0.3s ease;
      -webkit-transition: transform 0.3s ease;
      will-change: transform; */
      transition: all 0.3s ease;
      -webkit-transition: all 0.3s ease;

      cursor: pointer;
      text-align: center;
    }
    .container .bottom_bar label#multiple_button{
      transform: translate(0, -50%);
      background-color: #1F0E3F;
    }
    /* .container .bottom_bar label#comment_button{
      transform: translate(0, 0);
    } */

    .container .bottom_bar label#multiple_button::after {
      content: "";
      /* width: 100px;
      height: 100px; */
      height: 6vh;
      aspect-ratio: 1 / 1;

      display: block;
      
      background-color: #FF853A;
      border-radius: 50%;

      /* margin-top: -20px; */
      position: absolute;
      z-index: -1;
      /* top: 10px;
      left: 10px; */

      transition: all 0.3s ease;
      -webkit-transition: all 0.3s ease;
    }
    /* 
    .container .bottom_bar label#multiple_button::after{
      left: 10px;
    }
    .container .bottom_bar label#comment_button::after{
      left: 5px;
    } */

    .container .bottom_bar label svg{
      height: 60%;
      width: 60%;
      opacity: 1;
    }

    .container .bottom_bar label .round_button{
      height: 7vh;
      /* width: 80px; */
      aspect-ratio: 1 / 1;
      background-color: #FFFCA8;
      border-radius: 99%;

      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container .bottom_bar label .multiple_list{
      display: none;

      position: absolute;
    }


    /* 多選icon點擊 */
    .container .bottom_bar input#multiple:checked + label.round {
      /* height: 300px; */
      height: 30vh;
      width: 12vh;

      background-color: #1F0E3F;

      /* transform: translate(0, -150px); */

      border-radius: 150% / 50%;
      box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.3);
    }
    .container .bottom_bar input#multiple:checked + label.round::after {
      /* height: 280px; */
      height:28vh;
      width: 10vh;
      
      background-color: #FFC46C;
      
      /* opacity: 1; */
      /* left: 10px; */
      /* transform: translate(5px, 0); */

      border-radius: 150% / 50%;
    }
    .container .bottom_bar input#multiple:checked + label.round > svg{
      opacity: 0;
    }
    .container .bottom_bar input#multiple:checked + label.round > .multiple_list{
      /* top:10px; */

      display: flex;
      flex-direction: column;
      flex-wrap: nowrap;
      align-items: center;
      gap: 10px;
    }
    

  /* 留言icon點擊 */
    /* .container .bottom_bar input#comment:checked + label.round {
      background-color: #2867C7;
      transform: translate(0, -60px);
      box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.3);
    }
    .container .bottom_bar input#comment:checked + label.round::after {
      background-color: #FFFCA8;
      opacity: 1;
      transform: translate(5px, 0);
    }
    .container .bottom_bar input#comment:checked + label.round svg{
      stroke: #2867C7;
    } */

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

    <div class="container">

      <input type="radio" name="slider" id="item-1" value="0">
      <input type="radio" name="slider" id="item-2" value="1">
      <input type="radio" name="slider" id="item-3" value="2">
      <input type="radio" name="slider" id="item-4" value="3">
      <input type="radio" name="slider" id="item-5" value="4">

      <div class="card_list" id="card_list">
        <label class="card" for="item-1">
          <img src="../picture/bird_bubble.jpg" alt="song">
        </label>
        <label class="card" for="item-2">
          <img src="../picture/manga.jpg" alt="song">
        </label>
        <label class="card" for="item-3">
          <img src="../picture/background.gif" alt="song">
        </label>
        <label class="card" for="item-4">
          <img src="../picture/manga2.jpg" alt="song">
        </label>
        <label class="card" for="item-5">
          <img src="../picture/water_flower_girl.jpg" alt="song">
        </label>
      </div>

      <div class="bottom_bar">
        <input type="radio" name="tap" id="like">
        <label class="round" for="like" id="like_button">
          <svg fill="#1F0E3F" viewBox="-40 -40 480.00 480.00" id="Heart" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#1F0E3F">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier"> <g id="XMLID_20_"> 
            <polygon id="XMLID_21_" points="133.3,40 133.3,13.3 106.7,13.3 80,13.3 80,40 106.7,40 "></polygon> 
            <polygon id="XMLID_186_" points="320,40 320,13.3 293.3,13.3 266.7,13.3 266.7,40 293.3,40 "></polygon> 
            <rect height="26.7" id="XMLID_187_" width="26.7" x="53.3" y="40"></rect> 
            <rect height="26.7" id="XMLID_188_" width="26.7" x="133.3" y="40"></rect> 
            <rect height="26.7" id="XMLID_189_" width="26.7" x="240" y="40"></rect> 
            <rect height="26.7" id="XMLID_190_" width="26.7" x="320" y="40"></rect> 
            <rect height="26.7" id="XMLID_191_" width="26.7" x="26.7" y="66.7"></rect> 
            <rect height="26.7" id="XMLID_192_" width="26.7" x="160" y="66.7"></rect> 
            <rect height="26.7" id="XMLID_193_" width="26.7" x="213.3" y="66.7"></rect> 
            <rect height="26.7" id="XMLID_194_" width="26.7" x="346.7" y="66.7"></rect> 
            <rect height="26.7" id="XMLID_195_" width="26.7" x="186.7" y="93.3"></rect> 
            <polygon id="XMLID_196_" points="373.3,93.3 373.3,120 373.3,146.7 373.3,173.3 373.3,200 400,200 400,173.3 400,146.7 400,120 400,93.3 "></polygon> 
            <polygon id="XMLID_197_" points="26.7,146.7 26.7,120 26.7,93.3 0,93.3 0,120 0,146.7 0,173.3 0,200 26.7,200 26.7,173.3 "></polygon> 
            <rect height="26.7" id="XMLID_198_" width="26.7" x="26.7" y="200"></rect> 
            <rect height="26.7" id="XMLID_199_" width="26.7" x="346.7" y="200"></rect> 
            <rect height="26.7" id="XMLID_200_" width="26.7" x="53.3" y="226.7"></rect> 
            <rect height="26.7" id="XMLID_201_" width="26.7" x="320" y="226.7"></rect> 
            <rect height="26.7" id="XMLID_202_" width="26.7" x="80" y="253.3"></rect> 
            <rect height="26.7" id="XMLID_203_" width="26.7" x="293.3" y="253.3"></rect> 
            <rect height="26.7" id="XMLID_204_" width="26.7" x="106.7" y="280"></rect> 
            <rect height="26.7" id="XMLID_205_" width="26.7" x="266.7" y="280"></rect> 
            <rect height="26.7" id="XMLID_206_" width="26.7" x="133.3" y="306.7"></rect> 
            <rect height="26.7" id="XMLID_207_" width="26.7" x="240" y="306.7"></rect> 
            <rect height="26.7" id="XMLID_208_" width="26.7" x="160" y="333.3"></rect> 
            <rect height="26.7" id="XMLID_209_" width="26.7" x="213.3" y="333.3"></rect> 
            <rect height="26.7" id="XMLID_210_" width="26.7" x="186.7" y="360"></rect> 
            </g> </g>
          </svg>
        </label>

        <input type="radio" name="tap" id="multiple">
        <label class="round" for="multiple" id="multiple_button">
          <svg viewBox="0 0 24 24" troke-width=3.5 stroke-linecap="round" stroke="#2867C7">
              <line x1="12" y1="3" x2="12" y2="21"></line>
              <line x1="21" y1="12" x2="3" y2="12"></line>
          </svg>
          <div class="multiple_list">
            <div class="round_button" id="close">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#2867C7"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M27 9V21H39" stroke="#2867C7" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 39V27H9" stroke="#2867C7" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M27 21L42 6" stroke="#2867C7" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 27L6 42" stroke="#2867C7" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </div>
            <div class="round_button">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- <g id="SVGRepo_bgCarrier" stroke-width="0"></g> -->
                <!-- <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g> -->
                <!-- <g id="SVGRepo_iconCarrier">  -->
                <path fill-rule="evenodd" clip-rule="evenodd" 
                  d="M19.6495 0.799565C18.4834 -0.72981 16.0093 0.081426 16.0093 1.99313V3.91272C12.2371 3.86807 9.65665 5.16473 7.9378 6.97554C6.10034 8.9113 5.34458 11.3314 5.02788 12.9862C4.86954 13.8135 5.41223 14.4138 5.98257 14.6211C6.52743 14.8191 7.25549 14.7343 7.74136 14.1789C9.12036 12.6027 11.7995 10.4028 16.0093 10.5464V13.0069C16.0093 14.9186 18.4834 15.7298 19.6495 14.2004L23.3933 9.29034C24.2022 8.2294 24.2022 6.7706 23.3933 5.70966L19.6495 0.799565ZM7.48201 11.6095C9.28721 10.0341 11.8785 8.55568 16.0093 8.55568H17.0207C17.5792 8.55568 18.0319 9.00103 18.0319 9.55037L18.0317 13.0069L21.7754 8.09678C22.0451 7.74313 22.0451 7.25687 21.7754 6.90322L18.0317 1.99313V4.90738C18.0317 5.4567 17.579 5.90201 17.0205 5.90201H16.0093C11.4593 5.90201 9.41596 8.33314 9.41596 8.33314C8.47524 9.32418 7.86984 10.502 7.48201 11.6095Z" fill="#2867C7">
                </path> 
                <path 
                  d="M7 1.00391H4C2.34315 1.00391 1 2.34705 1 4.00391V20.0039C1 21.6608 2.34315 23.0039 4 23.0039H20C21.6569 23.0039 23 21.6608 23 20.0039V17.0039C23 16.4516 22.5523 16.0039 22 16.0039C21.4477 16.0039 21 16.4516 21 17.0039V20.0039C21 20.5562 20.5523 21.0039 20 21.0039H4C3.44772 21.0039 3 20.5562 3 20.0039V4.00391C3 3.45162 3.44772 3.00391 4 3.00391H7C7.55228 3.00391 8 2.55619 8 2.00391C8 1.45162 7.55228 1.00391 7 1.00391Z" fill="#2867C7">
                </path> 
              <!-- </g> -->
              </svg>
            </div>
            <div class="round_button">
              <svg width="256px" height="256px" viewBox="0 0 512 512" id="icons" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#808285;stroke-miterlimit:10;stroke-width:21.503999999999998;}</style></defs><path class="cls-1" d="M437.81,182.26c-4.65,13.85-14.67,27.17-24.36,40.05-6.68,8.87-15.21,20.09-19.53,28.84v-41.73c.29-.38,.58-.77,.87-1.15,22.91-30.45,28.6-43.24,14.85-54.37-5.01-4.06-5.79-11.41-1.73-16.42,4.05-5.01,11.4-5.78,16.41-1.73,14.98,12.13,19.64,28.2,13.49,46.51Z"></path><path class="cls-1" d="M393.92,194.23v119.18c0,38.2-30.97,69.17-69.17,69.17H186.11c-38.2,0-69.17-30.97-69.17-69.17v-119.18c0-30.55,19.79-56.46,47.25-65.63,1.72-.58,3.07-1.94,3.65-3.66l11.88-35.16c1.32-3.92,6.37-4.98,9.16-1.92l32.04,35.09,.02,.02c1.16,1.28,2.75,2.09,4.48,2.09h59.52c1.73,0,3.32-.81,4.48-2.09l.02-.02,32.04-35.09c2.79-3.06,7.84-2,9.16,1.92l11.81,34.97c.59,1.74,1.95,3.11,3.7,3.68,27.72,9.01,47.77,35.06,47.77,65.8Z"></path><circle class="cls-1" cx="255.73" cy="257.65" r="52.04"></circle><circle class="cls-1" cx="334.51" cy="188.63" r="10.54"></circle></g></svg>
            </div>
          </div>
        </label>

        <input type="radio" name="tap" id="comment">
        <label class="round" for="comment" id="comment_button">
          <svg fill="#1F0E3F" viewBox="0 0 400 400" id="Chat" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
            <g id="XMLID_22_"> 
            <polygon id="XMLID_101_" points="106.7,53.3 133.3,53.3 160,53.3 186.7,53.3 213.3,53.3 240,53.3 266.7,53.3 293.3,53.3 320,53.3 346.7,53.3 346.7,26.7 320,26.7 293.3,26.7 266.7,26.7 240,26.7 213.3,26.7 186.7,26.7 160,26.7 133.3,26.7 106.7,26.7 80,26.7 53.3,26.7 53.3,53.3 80,53.3 "></polygon> 
            <rect height="26.7" id="XMLID_177_" width="26.7" x="26.7" y="53.3"></rect> 
            <rect height="26.7" id="XMLID_178_" width="26.7" x="346.7" y="53.3"></rect> 
            <polygon id="XMLID_179_" points="373.3,80 373.3,106.7 373.3,133.3 373.3,160 373.3,186.7 373.3,213.3 373.3,240 373.3,266.7 400,266.7 400,240 400,213.3 400,186.7 400,160 400,133.3 400,106.7 400,80 "></polygon> 
            <rect height="26.7" id="XMLID_180_" width="26.7" x="106.7" y="160"></rect> 
            <rect height="26.7" id="XMLID_181_" width="26.7" x="186.7" y="160"></rect> 
            <rect height="26.7" id="XMLID_182_" width="26.7" x="266.7" y="160"></rect> 
            <polygon id="XMLID_183_" points="26.7,213.3 26.7,186.7 26.7,160 26.7,133.3 26.7,106.7 26.7,80 0,80 0,106.7 0,133.3 0,160 0,186.7 0,213.3 0,240 0,266.7 26.7,266.7 26.7,240 "></polygon> 
            <rect height="26.7" id="XMLID_184_" width="26.7" x="26.7" y="266.7"></rect> 
            <rect height="26.7" id="XMLID_185_" width="26.7" x="346.7" y="266.7"></rect> 
            <polygon id="XMLID_211_" points="133.3,293.3 106.7,293.3 80,293.3 53.3,293.3 53.3,320 80,320 106.7,320 133.3,320 160,320 160,293.3 "></polygon> 
            <polygon id="XMLID_212_" points="293.3,293.3 266.7,293.3 240,293.3 240,320 266.7,320 293.3,320 320,320 346.7,320 346.7,293.3 320,293.3 "></polygon> 
            <rect height="26.7" id="XMLID_213_" width="26.7" x="160" y="320"></rect> 
            <rect height="26.7" id="XMLID_214_" width="26.7" x="213.3" y="320"></rect> 
            <rect height="26.7" id="XMLID_215_" width="26.7" x="186.7" y="346.7"></rect> 
            </g> </g>
          </svg>
        </label>

        <!-- <div class="div" id="back"></div> -->
      </div>
    </div>

  <!-- 動臉 -->
    <!-- <script src="https://codepen.io/z-/pen/jvReOb/a8e37caf2a04602ea5815e5acedab458.js"></script>
    <link href="https://codepen.io/z-/pen/a8e37caf2a04602ea5815e5acedab458.css" rel="stylesheet">

    <div style="position:fixed;bottom:-5rem;right:-5rem;" id="user-button">
      <div class="u-icons" style="position:absolute;z-index:950;top:50%;left:50%;width:0;height:0%;opacity:0;">
        <a id="socialbutton-twitter" href="#" target="_top" rel="no-refer">
          <div class="u-card fab fa-twitter"></div>
        </a>
        <a href="#" target="_blank">
          <div class="u-card fab fa-codepen"></div>
        </a>
        <a class="u-random" href="#" target="_blank" style="background:white">
          <div class="u-card fas fa-dice-one"></div>
        </a>
      </div>

      <div class="u-card u-main" style="position:relative;z-index:1000;width:4rem;height:4rem;display:grid;place-items:center;background:var(--user-button-background)">
        <a href="#" target="_blank">
          <img src="https://i.koya.io/S70jhQ.webp" style="border-radius:100%; width:64px; height:64px;">
        </a>
      </div>
    </div> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  <!-- 引用jquery -->
    <script type="text/javascript" src="js/hamburger_menu.js"></script>

    <script>
      var cardList = document.getElementById("card_list");
      var viewBox = document.getElementById("view_box");

      $(document).ready(function ()
      {
        let $labels = $(cardList).children("label");
        let max = $labels.length;

        function wrapValue(n) {
            return (n + max ) % (max);
        }

        // let first_label = $labels.eq(0);
        // let last_label = $labels.eq(max_index);

        $("input[name='slider']").on('change', function (e) {
          /*改顏色 */
          $('body').toggleClass('change-color');
          $('label#multiple_button').toggleClass('change-color');

          let index = parseInt(e.currentTarget.value);
          // let $target = $labels.eq(index);
          console.log(index);

          $('.card_list .main').removeClass("main");
          $('.card_list .prev').removeClass("prev");
          $('.card_list .next').removeClass("next");

          $labels.eq(wrapValue(index-1)).addClass("prev");
          $labels.eq(index).addClass("main");
          $labels.eq(wrapValue(index+1)).addClass("next");
          
          // console.log($target);


          // if(index == 0){
          //   last_label.addClass("prev");
          //   $target.next().addClass("next");
          // } 
          // else if(index == max_index){
          //   $target.prev().addClass("prev");
          //   first_label.addClass("next");
          // }
          // else{
          //   $target.prev().addClass("prev");
          //   $target.next().addClass("next");
          // }
          
        });

        $(".card_list").on('click', (e)=>{
          $("input#multiple").prop('checked', false);
        });

        $(".round_button#close").on('click', (e)=>{
          document.body.classList.remove("expand");
        });

      })

      /*看漫畫 */
      $(cardList).find(".card").on("click",function (e) {
        document.body.classList.add("expand");
      });
      // $(cardList).find(".card").on("touchstart",function (e) {
      //   alert("touchstart");
      // });

      /*按留言 */
      // $(cardList).find(".card .fa-comment").on("click",function (e) {

      // });

    </script> 
  </body>
  </html>