<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-title" content="OrangeCats">
    
    <!-- icon -->
    <link rel="apple-touch-icon" type="image/png" href="./picture/Group2.png">
    <link rel="shortcut icon" type="image/x-icon" href="./picture/Group2.png">
    <link rel="mask-icon" type="image/x-icon" href="./picture/Group2.png">
    
    <title>Orange-cats-comic</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <link href="css/hamburger_menu.css?v-new" type="text/css" rel="stylesheet"><!-- 漢堡選單 -->
      
  <style>
    body{
      background: #F5F7FA;
    }

    .card_list {
      width: 100vw;
      display: grid; 
      justify-items: center; 
      grid-template-columns: repeat(auto-fill, minmax(800px ,1fr)); 
      grid-gap: 5vw;

      padding: 5vh 1vw;
      transition: all 0.5s ease;
    }

    .card_list.expand{
      min-width: max-content;

      display: flex;
      justify-content: center;
      /* align-items: center; *//*水平置中 */ 
      flex-wrap: nowrap;

      /*display: gird;
      grid-auto-flow: column;
      grid-template-columns: repeat(auto-fit,minmax(800px,1fr)); */

      padding: 5vh 0;

      /*transform: translate3d(150px, 0px, 0px); /*每次-1000px */
    }

    .card_list .card {
      --background:#FFFFFF;
      --text:black;

      position: relative;
      z-index: 1;

      height: fit-content; 
      min-width: fit-content;
      /* min-width: fit-content; */

      box-shadow: 0 0 2rem -1rem rgba(0, 0, 0, 0.05);
    } 
    .card_list.expand .card{
      position: absolute;
      visibility: hidden;
      opacity: 0;
      transform: translateX(200%) scale(0.7);

      transition-duration: 1s; /*動畫持續時間為2秒*/
      transition-timing-function: cubic-bezier(0.37, 0, 0.63, 1);
    }
    
    .card_list .card .multi-button {
      z-index: 0;
      position: absolute;
      top: 1.25rem;
      left: 1.25rem;
      border-radius: 100%;
      width: 0rem;
      height: 0rem;
      transform: translate(-50%, -50%);
      transition: 0.25s cubic-bezier(0.25, 0, 0, 1);
    }
    .card_list .card .multi-button button {
      display: grid;
      place-items: center;
      position: absolute;
      width: 2rem;
      height: 2rem;
      border: none;
      border-radius: 100%;
      background: var(--background);
      color: var(--text);
      transform: translate(-50%, -50%);
      cursor: pointer;
      transition: 0.25s cubic-bezier(0.25, 0, 0, 1);
      box-shadow: 0 0 0rem -0.25rem var(--background);
    }
    /*hover*/
    .card_list .card:hover .container .eye_button{
      visibility: visible;
      stroke: black;
    }

    .card_list .card:hover .multi-button, .card_list .card .multi-button:focus-within {
      width: 10rem;
      height: 10rem;
    }

    .card_list .card .multi-button button:hover {
      background: var(--text);
      color: var(--background);
      box-shadow: 0 0 1rem -0.25rem var(--background);
    }
    /*hover end*/
    .card .multi-button .fa-times {
      visibility: hidden;
      left: 25% !important;
      top: 25% !important;
    }
    .card_list .card .container .eye_button{

      width: 200px;

      position: absolute;
      visibility: hidden;

      top: calc(50% - 100px);
      left: calc(50% - 100px);
    }
    .card_list .card .container .eye_button:hover{
      stroke: #FF853A;
      cursor: pointer;
    }

    .card_list .card .multi-button button:first-child:nth-last-child(1) {
      left: 25%;
      top: 25%;
    }
    /*總共 2個buttton */
    /*第一個button && 倒數第二個 && 順數第一個*/
    /*2-1 */
    .card_list .card .multi-button button:first-child:nth-last-child(2):nth-child(1), 
    .card_list .card .multi-button button:first-child:nth-last-child(2) ~ *:nth-child(1) {
      left: 37.5%;
      top: 18.75%;
    }
    /*2-2 */
    .card_list .card .multi-button button:first-child:nth-last-child(2):nth-child(2), 
    .card_list .card .multi-button button:first-child:nth-last-child(2) ~ *:nth-child(2) {
      left: 18.75%;
      top: 37.5%;
    }
    /*總共 3個buttton */
    /*3-1 */
    .card_list .card .multi-button button:first-child:nth-last-child(3):nth-child(1), 
    .card_list .card .multi-button button:first-child:nth-last-child(3) ~ *:nth-child(1) {
      left: 50%;
      top: 15.625%;
    }
    /*3-2 */
    .card_list .card .multi-button button:first-child:nth-last-child(3):nth-child(2), 
    .card_list .card .multi-button button:first-child:nth-last-child(3) ~ *:nth-child(2) {
      left: 25%;
      top: 25%;
    }
    /*3-3 */
    .card_list .card .multi-button button:first-child:nth-last-child(3):nth-child(3), 
    .card_list .card .multi-button button:first-child:nth-last-child(3) ~ *:nth-child(3) {
      left: 15.625%;
      top: 50%;
    }
    /*總共 4個buttton */
    /* 4-1 */
    .card_list .card .multi-button button:first-child:nth-last-child(4):nth-child(1),
    .card_list .card .multi-button button:first-child:nth-last-child(4) ~ *:nth-child(1) {
      left: 62.5%;
      top: 18.75%;
    }
    /* 4-2 */
    .card_list .card .multi-button button:first-child:nth-last-child(4):nth-child(2), 
    .card_list .card .multi-button button:first-child:nth-last-child(4) ~ *:nth-child(2) {
      left: 37.5%;
      top: 18.75%;
    }
    /* 4-3 */
    .card_list .card .multi-button button:first-child:nth-last-child(4):nth-child(3), 
    .card_list .card .multi-button button:first-child:nth-last-child(4) ~ *:nth-child(3) {
      left: 18.75%;
      top: 37.5%;
    }
    /* 4-4 */
    .card_list .card .multi-button button:first-child:nth-last-child(4):nth-child(4), 
    .card_list .card .multi-button button:first-child:nth-last-child(4) ~ *:nth-child(4) {
      left: 18.75%;
      top: 62.5%;
    }

    .card_list .card .container {
      min-width: 100%;
      min-height: 100%;
      /* width: 100%;
      height: 100%; */
      position: relative;

      padding: 1rem;
      border-radius: 1rem;
      background: var(--background);
      color: var(--text);
    }
  </style>
  <style>
    *, *:before, *:after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    html, .card_list {
      font-size: 62.5%;
      height: 100%;
    }
    
    button, input {
      border: 0;
      outline: none;
    }
    
    body{
      background: linear-gradient(45deg, #636f85, #6960a0);
    }
    
    .demo {
      display: none;

      position: absolute;
      z-index: -1;

      top:0; /*50%;*/
      left: 100%;
      /* margin-top: -25rem; */
      /*margin-left: -15rem; */
      width: 30rem;
      height:100%; /*50rem; */
      box-shadow: 0 1rem 5rem rgba(0, 0, 0, 0.3);
    }
    
    .static {
      height: 100%;
      font-size: 1.8rem;
      font-family: "Open Sans", Helvetica, Arial, sans-serif;
      background: transparent;
    }
    .static:before, .static:after {
      content: "";
      position: absolute;
      left: 7rem;
      width: 2rem;
      height: 2rem;
      margin-left: -1rem;
      margin-top: -1rem;
      border: 2px solid #fff;
      border-left: none;
      border-bottom: none;
      transform: rotate(45deg);
      -webkit-animation: arrows 1.5s infinite;
              animation: arrows 1.5s infinite;
    }
    .static:before {
      top: 15rem;
    }
    .static:after {
      top: 35rem;
    }
    .static__text {
      width: 9rem;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-left: -5rem;
      transform: translate3d(0, -50%, 0);
      color: #fff;
      perspective: 1px;
      -webkit-backface-visibility: hidden;
              backface-visibility: hidden;
    }
    
    .sidebar-content {
      z-index: -1;
      position: absolute;
      top: 0;
      left: 0;
      width: 20rem;
      height: 100%;
      padding-top: 1rem;
      opacity: 0;
      transition: opacity 200ms, z-index 0s 0s;
      background-color: #E9EAF3;
      overflow: hidden;
    }
    .sidebar-content.active {
      z-index: 2;
      opacity: 1;
    }
    
    .contact {
      position: relative;
      width: 100%;
      height: 5rem;
      padding-left: 1.7rem;
      display: flex;
      align-items: center;
      cursor: pointer;
      overflow: hidden;
    }
    .contact__photo {
      border-radius: 50%;
      margin-right: 1.5rem;
    }
    .contact__name {
      font-size: 1.2rem;
      font-family: "Open Sans", Helvetica, Arial, sans-serif;
    }
    .contact__status {
      position: absolute;
      top: 2.1rem;
      right: 1.5rem;
      width: 8px;
      height: 8px;
      border: 2px solid #00B570;
      border-radius: 50%;
      opacity: 0;
      transition: opacity 0.3s;
    }
    .contact__status.online {
      opacity: 1;
    }
    
    .search {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 5.5rem;
      padding-left: 1.5rem;
      background: #fff;
      display: flex;
      align-items: center;
    }
    
    svg {
      overflow: visible;
    }
    
    .sidebar {
      z-index: 1;
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      height: 100%;
    }
    
    .s-path {
      cursor: -webkit-grab;
      cursor: grab;
    }
    
    /* .cloned {
      position: absolute;
      z-index: 10;
      transition: top 0.3s, left 0.3s;
      transition-delay: 0.2s;
      transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }
    .cloned.removed {
      transition: opacity 0.2s 0;
      opacity: 0;
    } */
    
    .chat {
      display: none;
      z-index: 5;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      padding: 2.5rem 0 5.5rem 2.5rem;
      transition: opacity 200ms;
      opacity: 0;
    }
    .chat.active {
      opacity: 1;
    }
    .chat.active:before {
      width: 100%;
    }
    .chat:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 0.5rem;
      background: #1CC6AE;
      width: 0;
      transition: width 0.2s;
    }
    .chat__back {
      position: relative;
      display: inline-block;
      width: 2rem;
      height: 2rem;
      margin-top: 0.5rem;
      margin-left: -0.6rem;
      cursor: pointer;
    }
    .chat__back:hover:before {
      transform: translateX(-0.3rem) rotate(-45deg);
    }
    .chat__back:before {
      content: "";
      position: absolute;
      display: block;
      top: 0.4rem;
      left: 0.6rem;
      width: 1.2rem;
      height: 1.2rem;
      border: 2px solid #545675;
      border-right: none;
      border-bottom: none;
      transform: rotate(-45deg);
      transition: transform 0.3s;
    }
    .chat__status {
      position: absolute;
      top: 2rem;
      right: 6.5rem;
      font-size: 1.2rem;
      font-family: "Open Sans", Helvetica, Arial, sans-serif;
      text-transform: uppercase;
      color: #B1A9A9;
    }
    .chat__person {
      display: inline-block;
      position: absolute;
      top: 3rem;
      right: 6.5rem;
      font-size: 2rem;
      font-family: "Open Sans", Helvetica, Arial, sans-serif;
      color: #36343D;
    }
    .chat__online {
      position: absolute;
      top: 50%;
      left: -1.5rem;
      margin-top: -3px;
      width: 8px;
      height: 8px;
      border: 2px solid #00B570;
      border-radius: 50%;
      opacity: 0;
      transition: opacity 0.3s;
    }
    .chat__online.active {
      opacity: 1;
    }
    .chat__messages {
      position: absolute;
      top: 7.5rem;
      left: 2.5rem;
      width: 27.5rem;
      height: 37rem;
      padding-right: 2.5rem;
      overflow-y: auto;
    }
    .chat__msgRow {
      margin-bottom: 0.5rem;
    }
    .chat__msgRow:after {
      content: "";
      display: table;
      clear: both;
    }
    .chat__message {
      display: inline-block;
      max-width: 60%;
      padding: 1rem;
      font-size: 1.4rem;
      font-family: "Open Sans", Helvetica, Arial, sans-serif;
    }
    .chat__message.mine {
      color: #2B2342;
      border: 1px solid #DFDFDF;
    }
    .chat__message.notMine {
      float: right;
      color: #23244E;
      background: #E9EAF3;
    }
    .chat__input {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 5.5rem;
      padding: 1rem 1rem 1rem 4rem;
      background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-search.png");
      background-repeat: no-repeat;
      background-position: 1rem 1.5rem;
      background-color: #E9EAF3;
      color: #2B2342;
      font-size: 1.4rem;
      font-family: "Open Sans", Helvetica, Arial, sans-serif;
    }
    
    .ripple {
      position: absolute;
      width: 10rem;
      height: 10rem;
      margin-left: -5rem;
      margin-top: -5rem;
      background: rgba(0, 0, 0, 0.4);
      transform: scale(0);
      -webkit-animation: animRipple 0.3s;
              animation: animRipple 0.3s;
      border-radius: 50%;
    }
    
    @-webkit-keyframes animRipple {
      to {
        transform: scale(2.5);
        opacity: 0;
      }
    }
    
    @keyframes animRipple {
      to {
        transform: scale(2.5);
        opacity: 0;
      }
    }
    @-webkit-keyframes arrows {
      to {
        transform: translateX(100%) rotate(45deg);
        opacity: 0;
      }
    }
    @keyframes arrows {
      to {
        transform: translateX(100%) rotate(45deg);
        opacity: 0;
      }
    }
    </style>
    <style>
      /* #view_box.active{
        padding-right:calc(50% - 500px);
        padding-left:calc(50% - 500px);
        overflow-x: hidden;
      } */
      #view_box > button{
        font-size: 111px;
        background: none;
        border:none;
        z-index: 10;

        /* visibility: hidden; */
        display: none;
      }
      #view_box.active > button{
        /* visibility: visible; */
        display: unset;
        cursor: pointer;
      }
      
      #view_box.active button.fa-arrow-circle-left{
        position: fixed;
        top:50vh;
        left:15vw;

      }
      #view_box.active button.fa-arrow-circle-right{
        position: fixed;
        top:50vh;
        left:85vw;
      }

      .card .img_block {
        width: 510px;
        height: 330px;

        /* background-image: url("./picture/manga.jpg"); */
        background-size: cover;
        background-origin: content-box;
        background-repeat: no-repeat;

        /* background-size: 800px 2000px; */

        transition-duration: 0.8s; /*動畫持續時間為2秒*/
        transition-timing-function: cubic-bezier(0.37, 0, 0.63, 1);
      }
      .card_list .card:nth-child(odd) .img_block{
        background-image: url("./picture/manga.jpg");
      }
      .card_list .card:nth-child(even) .img_block{
        background-image: url("./picture/manga2.jpg");
      }

      .container:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 50%;
        bottom: 0;
        left: 0;
        transition: 0.3s ease;
        background-image: linear-gradient(0deg, var(--background) 15%, transparent);
      }
      
      /* 動畫相關設定 */
      .card_list.expand .card.prev{
        visibility: visible;
        opacity: 0.8;
        transform: translateX(100%) scale(0.9);
      }
      .card_list.expand .card.main{
        visibility: visible;
        opacity: 1;
        transform: translateX(0) scale(1);
      }
      .card_list.expand .card.next{
        visibility: visible;
        opacity: 0.8;
        transform: translateX(-100%) scale(0.9);
      }
      .card_list.expand .card.nextnext{
        visibility: visible;
        opacity: 0;
        transform: translateX(-200%) scale(0.7);
      }

      /* 隱藏眼睛icon */
      .card_list.expand .card .container .eye_button {
        z-index: -1;
      }

      /* 卡片圖片長度展開 */
      .card_list.expand  .card.main .container .img_block {
        height: 1350px;
      }

      /* 功能隱藏 */
      .card_list.expand  .card.main .multi-button .fa-comment {
        display:none;
      }
      .card_list.expand  .card.main .multi-button .fa-times {
        visibility: visible;
      }

      .card_list.expand  .card.main .container:before {
        opacity: 0;
        z-index: -200;
      }

      .card_list.expand  .card.main .demo{
        /* display: unset; */
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

    <div id="view_box">
      <button class="fas fa-arrow-circle-left fa-lg" style="--fa-primary-color: #ff7e47; --fa-secondary-color: #ffffff;"></button>
      <button class="fas fa-arrow-circle-right fa-lg" style="--fa-primary-color: #ff7e47; --fa-secondary-color: #ffffff;"></button>

      <div class="card_list" id="card_list">

        <div class="card" style="--background:#D9D9D9;--text:white;">

          <div class="multi-button">
            <button class="fas fa-heart"></button>
            <button class="fas fa-comment"></button>
            <button class="fas fa-times"></button>
          </div>
          <div class="container">

            <div class="img_block"></div>

            <div class="demo">
              <svg class="sidebar" viewBox="0 0 300 500">
                <path class="s-path" fill="#fff" d="M0,0  a50,250 0 1,1 0,500 L0,500"></path>
              </svg>
              <span style="position: absolute;
                            top: 50%;
                            color: black;
                            z-index: 1;
                            -webkit-writing-mode: vertical-lr;
                            writing-mode: vertical-lr;
                            font-size: 30px;">
                留言
              </span>
              <div class="static">
                <div class="static__text">Pull white sidebar to the right</div>
              </div>
              <div class="sidebar-content">
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Ethan Hawke</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Natalie Portman</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Kevin Spacey</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Rosamund Pike</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Robert Redford</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Scarlett Johansson</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Tom Cruise</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Eva Green</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Paul Newman</span>
                  <span class="contact__status"></span>
                </div>
                <div class="search">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-srch.png" alt="" class="search__img">
                  <input type="text" class="search__input" placeholder="Search">
                </div>
              </div>
            </div>

            <svg class="eye_button" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path 
                d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
              <path 
                d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"  stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
            </svg>

          </div>


        </div>

        <div class="card" style="--background:#D9D9D9;--text:white;">

          <div class="multi-button">
            <button class="fas fa-heart"></button>
            <button class="fas fa-comment"></button>
            <button class="fas fa-times"></button>
          </div>
          <div class="container">

            <div class="img_block"></div>

            <div class="demo">
              <svg class="sidebar" viewBox="0 0 300 500">
                <path class="s-path" fill="#fff" d="M0,0  a50,250 0 1,1 0,500 L0,500"></path>
              </svg>
              <span style="position: absolute;
                            top: 50%;
                            color: black;
                            z-index: 1;
                            -webkit-writing-mode: vertical-lr;
                            writing-mode: vertical-lr;
                            font-size: 30px;">
                留言
              </span>
              <div class="static">
                <div class="static__text">Pull white sidebar to the right</div>
              </div>
              <div class="sidebar-content">
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Ethan Hawke</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Natalie Portman</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Kevin Spacey</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Rosamund Pike</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Robert Redford</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Scarlett Johansson</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Tom Cruise</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Eva Green</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Paul Newman</span>
                  <span class="contact__status"></span>
                </div>
                <div class="search">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-srch.png" alt="" class="search__img">
                  <input type="text" class="search__input" placeholder="Search">
                </div>
              </div>
            </div>

            <svg class="eye_button" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path 
                d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
              <path 
                d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"  stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
            </svg>

          </div>


        </div>

        <div class="card prev" style="--background:#D9D9D9;--text:white;">
          <div class="multi-button">
            <button class="fas fa-heart"></button>
            <button class="fas fa-comment"></button>
            <button class="fas fa-times"></button>
          </div>
          <div class="container">

            <div class="img_block"></div>

            <div class="demo">
              <svg class="sidebar" viewBox="0 0 300 500">
                <path class="s-path" fill="#fff" d="M0,0  a50,250 0 1,1 0,500 L0,500"></path>
              </svg>
              <span style="position: absolute;
                            top: 50%;
                            color: black;
                            z-index: 1;
                            -webkit-writing-mode: vertical-lr;
                            writing-mode: vertical-lr;
                            font-size: 30px;">
                留言
              </span>
              <div class="static">
                <div class="static__text">Pull white sidebar to the right</div>
              </div>
              <div class="sidebar-content">
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Ethan Hawke</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Natalie Portman</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Kevin Spacey</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Rosamund Pike</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Robert Redford</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Scarlett Johansson</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Tom Cruise</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Eva Green</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Paul Newman</span>
                  <span class="contact__status"></span>
                </div>
                <div class="search">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-srch.png" alt="" class="search__img">
                  <input type="text" class="search__input" placeholder="Search">
                </div>
              </div>
            </div>

            <svg class="eye_button" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" >
                <path 
                  d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path> 
                <path 
                  d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path> 
            </svg>

          </div>
        </div>

        <div class="card main" style="--background:#D9D9D9;--text:white;">

          <div class="multi-button">
            <button class="fas fa-heart"></button>
            <button class="fas fa-comment"></button>
            <button class="fas fa-times"></button>
          </div>
          <div class="container">

            <div class="img_block"></div>

            <div class="demo">
              <svg class="sidebar" viewBox="0 0 300 500">
                <path class="s-path" fill="#fff" d="M0,0  a50,250 0 1,1 0,500 L0,500"></path>
              </svg>
              <span style="position: absolute;
                            top: 50%;
                            color: black;
                            z-index: 1;
                            -webkit-writing-mode: vertical-lr;
                            writing-mode: vertical-lr;
                            font-size: 30px;">
                留言
              </span>
              <div class="static">
                <div class="static__text">Pull white sidebar to the right</div>
              </div>
              <div class="sidebar-content">
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Ethan Hawke</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Natalie Portman</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Kevin Spacey</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Rosamund Pike</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Robert Redford</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Scarlett Johansson</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Tom Cruise</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Eva Green</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Paul Newman</span>
                  <span class="contact__status"></span>
                </div>
                <div class="search">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-srch.png" alt="" class="search__img">
                  <input type="text" class="search__input" placeholder="Search">
                </div>
              </div>
            </div>

            <svg class="eye_button" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path 
                d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
              <path 
                d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"  stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
            </svg>

          </div>


        </div>

        <div class="card next" style="--background:#D9D9D9;--text:white;">

          <div class="multi-button">
            <button class="fas fa-heart"></button>
            <button class="fas fa-comment"></button>
            <button class="fas fa-times"></button>
          </div>
          <div class="container">

            <div class="img_block"></div>

            <div class="demo">
              <svg class="sidebar" viewBox="0 0 300 500">
                <path class="s-path" fill="#fff" d="M0,0  a50,250 0 1,1 0,500 L0,500"></path>
              </svg>
              <span style="position: absolute;
                            top: 50%;
                            color: black;
                            z-index: 1;
                            -webkit-writing-mode: vertical-lr;
                            writing-mode: vertical-lr;
                            font-size: 30px;">
                留言
              </span>
              <div class="static">
                <div class="static__text">Pull white sidebar to the right</div>
              </div>
              <div class="sidebar-content">
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Ethan Hawke</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Natalie Portman</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Kevin Spacey</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Rosamund Pike</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Robert Redford</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Scarlett Johansson</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Tom Cruise</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Eva Green</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Paul Newman</span>
                  <span class="contact__status"></span>
                </div>
                <div class="search">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-srch.png" alt="" class="search__img">
                  <input type="text" class="search__input" placeholder="Search">
                </div>
              </div>
            </div>

            <svg class="eye_button" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path 
                d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
              <path 
                d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"  stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
            </svg>

          </div>


        </div>

        <div class="card nextnext" style="--background:#D9D9D9;--text:white;">

          <div class="multi-button">
            <button class="fas fa-heart"></button>
            <button class="fas fa-comment"></button>
            <button class="fas fa-times"></button>
          </div>
          <div class="container">

            <div class="img_block"></div>

            <div class="demo">
              <svg class="sidebar" viewBox="0 0 300 500">
                <path class="s-path" fill="#fff" d="M0,0  a50,250 0 1,1 0,500 L0,500"></path>
              </svg>
              <span style="position: absolute;
                            top: 50%;
                            color: black;
                            z-index: 1;
                            -webkit-writing-mode: vertical-lr;
                            writing-mode: vertical-lr;
                            font-size: 30px;">
                留言
              </span>
              <div class="static">
                <div class="static__text">Pull white sidebar to the right</div>
              </div>
              <div class="sidebar-content">
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Ethan Hawke</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Natalie Portman</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Kevin Spacey</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Rosamund Pike</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Robert Redford</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Scarlett Johansson</span>
                  <span class="contact__status online"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Tom Cruise</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-girl.png" alt="" class="contact__photo">
                  <span class="contact__name">Eva Green</span>
                  <span class="contact__status"></span>
                </div>
                <div class="contact">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-man.png" alt="" class="contact__photo">
                  <span class="contact__name">Paul Newman</span>
                  <span class="contact__status"></span>
                </div>
                <div class="search">
                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/elastic-srch.png" alt="" class="search__img">
                  <input type="text" class="search__input" placeholder="Search">
                </div>
              </div>
            </div>

            <svg class="eye_button" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path 
                d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
              <path 
                d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"  stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
              </path> 
            </svg>

          </div>


        </div>

      </div>
    </div>

  <!-- 動臉 -->
    <script src="https://codepen.io/z-/pen/jvReOb/a8e37caf2a04602ea5815e5acedab458.js"></script>
    <link href="https://codepen.io/z-/pen/a8e37caf2a04602ea5815e5acedab458.css" rel="stylesheet">

    <div style="position:fixed;bottom:-5rem;right:-5rem;" id="user-button">
      <div class="u-icons" style="position:absolute;z-index:950;top:50%;left:50%;width:0;height:0%;opacity:0;">
        <a id="socialbutton-twitter" href="https://twitter.com/zed_dash" target="_top" rel="no-refer">
          <div class="u-card fab fa-twitter"></div>
        </a>
        <a href="https://codepen.io/z-" target="_blank">
          <div class="u-card fab fa-codepen"></div>
        </a>
        <a class="u-random" href="https://codepen.io/z-/details/XPQyMo" target="_blank" style="background:white">
          <div class="u-card fas fa-dice-one"></div>
        </a>
      </div>

      <div class="u-card u-main" style="position:relative;z-index:1000;width:4rem;height:4rem;display:grid;place-items:center;background:var(--user-button-background)">
        <a href="https://codepen.io/z-" target="_blank">
          <img src="https://i.koya.io/S70jhQ.webp" style="border-radius:100%; width:64px; height:64px;">
        </a>
      </div>
    </div>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  <!-- 引用js -->
    <script type="text/javascript" src="js/hamburger_menu.js"></script>
    
    <script type="text/javascript">
      var cardList = document.getElementById("card_list");
      var cards = cardList.querySelectorAll(".card");
      var max = cards.length;
      var max_index = max - 1;

      var viewBox = document.getElementById("view_box");
      var translate = 150;
      const getindex = () => {
        return Array.prototype.indexOf.call(cardList.getElementsByClassName("card"), document.querySelector(".card.main"));
      };

      $(document).ready(function ()
      {

        /*左右 */
        $(viewBox).find("button.fa-arrow-circle-right").on("click",function (e) {

          let now_index = getindex();
          
          now_index && now_index--;
          console.log("index:"+now_index);

          changeController(now_index);
        });
        $(viewBox).find("button.fa-arrow-circle-left").on("click",function (e) {
          
          let now_index = getindex();
          (now_index < max_index) && now_index++;
          console.log("index:"+now_index);

          changeController(now_index);
        });

      });

      function wrapValue(n) {
          return (n + max) % (max);
      }

      function changeController(index){
        let target = cards[index];

        cardList.querySelector('.main').classList.remove("main");
        cardList.querySelector('.prev').classList.remove("prev");
        cardList.querySelector('.next').classList.remove("next");
        cardList.querySelector('.nextnext').classList.remove("nextnext");

        cards[wrapValue(index-1)].classList.add("prev");
        cards[index].classList.add("main");
        cards[wrapValue(index+1)].classList.add("next");
        cards[wrapValue(index+2)].classList.add("nextnext");

        initResize();  
      }
      

      /*看漫畫 */
      $(cardList).find(".card .eye_button").on("click",function (e) {
        let $this_card = $(e.currentTarget).parents(".card");
        statusChange($this_card,"open");
        changeController(getindex());

        initResize();
      });
      /*按留言 */
      $(cardList).find(".card .fa-comment").on("click",function (e) {
        let $this_card = $(e.currentTarget).parents(".card");
        statusChange($this_card, "open");
        changeController(getindex());
        
        $this_card.find(`.sidebar-content`).addClass("active");

        initResize();
      });
      /*按叉叉 */
      $(cardList).find(".card .fa-times").on("click",function (e) {
        console.log($(e.currentTarget));
        console.log($(e.currentTarget).parents(".card"));
        let $this_card = $(e.currentTarget).parents(".card");
        statusChange($this_card,"close");

        removeResize();
      });

      function statusChange($this,mode){
        switch(mode){
          case "open":
            viewBox.classList.add('active');
            cardList.classList.add('expand');

            $this.addClass("main");
            $this.siblings().removeClass("main");
            break;
          case "close":
            viewBox.classList.remove('active');
            cardList.classList.remove('expand');

            $this.removeClass("main");
            cardList.style.transform = "";

            break;
        }
       
      }

      function removeResize(){
        $(window).off("resize");
        $(document).off("mousedown")
        $(document).off("mousedown touchstart");
        $(document).off("mouseup touchend");
        $(document).off("click");
        $path.off("mousedown touchstart");

        // $demo = null,
        // demoTop = null,
        // demoLeft = null,
        // $path = null,
        // $svg = null,
        // $sCont = null,
        // $chat = null,
        // diffX = null,
        // curX = null,
        // finalX = null,
        // frame = null,
        // animTime = null,
        // sContTrans = null,
        // animating = null,
        // startD = null,
        // finalD = null,
        // midD = null,
        // currentPath = null;
      }

      function initResize(){
        if(typeof $sCont != "undefined"){
          $sCont.removeClass("active");
          removeResize();
        }
        
        let $card = $(cardList).find(".card.main");
        console.log($card);
        
        $demo = $card.find(".demo");/*整個*/
        demoTop = $demo.offset().top;
        demoLeft = $demo.offset().left;
        $path = $card.find(".s-path");
        $svg = $card.find(".sidebar");
        $sCont = $card.find(".sidebar-content");
        $chat = $card.find(".chat");
        diffX = 0;
        curX = 0;
        finalX = 0;
        frame = 1000 / 60;
        animTime = 600;
        sContTrans = 200;/*計時器用*/
        animating = false;

        startD = createD(0, 50, 1);
        finalD = createD(200, 0, 1);/*展開後*/
        midD = createD(125, 75, 0);
        currentPath = createD(0, 0, 1);//startD;

        handlers1();

        $(window).on("resize", function () {
          demoTop = $demo.offset().top;
          demoLeft = $demo.offset().left;
        });

        if($sCont.hasClass("active")){
          setTimeout(function () {
            $(document).on("click", closeSidebar);
          }, sContTrans);
        }
      }
  
      /*留言funtion*/
        var easings = {
          /* easingX(curStep, curX, finalX - curX, steps)*/
          smallElastic: function (t, b, c, d) {
            var ts = (t /= d) * t;
            var tc = ts * t;
            return b + c * (33 * tc * ts + -106 * ts * ts + 126 * tc + -67 * ts + 15 * t);
          },
          inCubic: function (t, b, c, d) {
            var tc = (t /= d) * t * t;
            return b + c * tc;
          } 
        };

        function createD(top, ax, dir) {
          return "M0,0 " + top + ",0 a" + ax + ",250 0 1," + dir + " 0,500 L0,500";
        }

        function handlers1() {

          $path.on("mousedown touchstart", function (e) {
            var startX = e.pageX || e.originalEvent.touches[0].pageX;

            $(document).on("mousemove touchmove", function (e) {
              var x = e.pageX || e.originalEvent.touches[0].pageX;
              diffX = x - startX;
              console.log(diffX );
              if (diffX < 0) diffX = 0;
              if (diffX > 300) diffX = 300;
              curX = 50+Math.floor(diffX / 2);/*最小50*/
              $path.attr("d", newD(curX));
            });
          });

          $(document).on("mouseup touchend", function () {
            $(document).off("mousemove touchmove");
            if (animating) return;
            if (!diffX) return;
            if (diffX < 50) {/*拉多少*/
              animatePathD($path, newD(50), animTime, true);/*開始50*/
            } else {
              animatePathD($path, finalD, animTime, false, function () {
                $sCont.addClass("active");
                setTimeout(function () {
                  $(document).on("click", closeSidebar);
                }, sContTrans);
              });
            }
          });
        }

        function newD(num1, num2) {
          var d = $path.attr("d"),
          num2 = num2 || 250,
          nd = d.replace(/\ba(\d+),(\d+)\b/gi, "a" + num1 + "," + num2);
          return nd;
        }

        function animatePathD(path, d, time, handlers, callback, easingTop, easingX) {
          var steps = Math.floor(time / frame),
          curStep = 0,
          oldArr = currentPath.split(" "),
          newArr = d.split(" "),
          oldLen = oldArr.length,
          newLen = newArr.length,
          oldTop = +oldArr[1].split(",")[0],
          topDiff = +newArr[1].split(",")[0] - oldTop,
          nextTop,
          nextX,
          easingTop = easings[easingTop] || easings.smallElastic,
          easingX = easings[easingX] || easingTop;

          $(document).off("mousedown mouseup");

          function animate() {
            curStep++;
            nextTop = easingTop(curStep, oldTop, topDiff, steps);
            nextX = easingX(curStep, curX, finalX - curX, steps);/*抖動？*/
            oldArr[1] = nextTop + ",0";
            oldArr[2] = "a" + Math.abs(nextX) + ",250";
            oldArr[4] = nextX >= 0 ? "1,1" : "1,0";
            $path.attr("d", oldArr.join(" "));
            if (curStep > steps) {
              curX = 0;
              diffX = 0;
              $path.attr("d", d);
              currentPath = d;
              if (handlers) handlers1();
              if (callback) callback();
              return;
            }
            requestAnimationFrame(animate);
          }
          animate();
        }

        function closeSidebar(e) {
          console.log($(animating));
          // if ($(e.target).closest(".sidebar-content").length ||
          // $(e.target).closest(".chat").length) return; /*Element.closest() : 最近祖先/自身*/
          if (animating) return;
          animating = true;
          $sCont.removeClass("active");
          finalX = -75;
          setTimeout(function () {
            animatePathD($path, midD, animTime / 3, false, function () {
              $chat.hide();

              finalX = 50;/*改了這個彈回去才會是50,但中途也是50?*/
              curX = -75;
              animatePathD($path, startD, animTime / 3 * 2, true);
              animating = false;
            }, "inCubic");
          }, sContTrans);
          $(document).off("click", closeSidebar);
        }
      /*留言funtion end*/

    </script> 
  </body>
  </html>