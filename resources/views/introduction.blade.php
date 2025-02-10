<html lang="zh-TW"; >

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link rel="apple-touch-icon" type="image/png" href="picture/Group2.png">
    <link rel="shortcut icon" type="image/x-icon" href="picture/Group2.png">
    <link rel="mask-icon" type="image/x-icon" href="picture/Group2.png">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <title>橘貓橘貓窩</title>

    <link href="css/header.css" type="text/css" rel="stylesheet"><!--topbar-->
    <link href="css/loader.css" type="text/css" rel="stylesheet"><!--字-->
    <link href="css/footer_introduction.css" type="text/css" rel="stylesheet"><!--footer-->
    <link href="css/special_button.css" type="text/css" rel="stylesheet"><!--button-->
    <link href="css/exquisite_button.css" type="text/css" rel="stylesheet"><!--exquisite_button-->
    <link href="css/multi_button.css" type="text/css" rel="stylesheet"><!--multi_button.css-->
    <link href="css/magazine.css" type="text/css" rel="stylesheet"><!--排版-->
    <link href="css/language.css" type="text/css" rel="stylesheet"><!--語言選擇-->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" /><!-- bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" /><!-- bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" type="text/css" /><!--國旗-->

    <style>
    * {
      box-sizing: border-box;
      scroll-behavior: smooth;
    }
    *::selection {
      background: #ff8b00;
      color: #fff;
      text-shadow: none;
    }

    body {
      background: #1c0136;
      /* height: 100vh;
      width:100vw; */

      /*覆蓋瀏覽器設定*/
      padding: 0;
      margin: 0;  
      color: #000;
    }

    h5, h4, h3, h2, h1, p, span{
      font-family: Microsoft JhengHei;
    }

    </style>

  </head>

  <body>

    <header class="header">
      <svg viewBox="45 60 400 320" xmlns="http://www.w3.org/2000/svg">
        <a href="#About_us">
          <path fill="#fff" d="M 90 210 C 90 180 90 150 90 150 C 150 150 180 150 180 150 C 180 150 300 150 300 150 C 300 150 330 150 390 150 C 390 150 390 180 390 210 C 390 240 390 270 390 270 C 330 270 300 270 300 270 C 300 270 180 270 180 270 C 180 270 150 270 90 270 C 90 270 90 240 90 210" mask="url(#knockout-text)" >
          </path>
          <mask id="knockout-text">
            <rect width="100%" height="100%" fill="#fff" x="0" y="0" />
            <text x="147" y="227" fill="#000">ENTER</text>
          </mask>
        </a>
      </svg>
    </header>

    <nav class="sticky navbar">
        <div class="brand  display__logo nav__link">
            <div class="loader logo">
                <h1>橘貓橘貓窩</h1>
            </div>
        </div>


          <!-- user -->
          <a style="width: 60px;
                      height: 60px;
                      background-image:url('picture/default_user_icon.png');
                      background-size: contain;
                      background-repeat: no-repeat;
                      cursor:pointer;"
                href="javascript:location.href='./register';"
                title="測試中">
          </div>
          <!-- home -->
          <a href="home" title="首頁">
            <svg class="item__icon" height="60px" width="60px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve" fill="#20a99d">
                <path d="M325.711,512.001H110.539c-28.486,0-51.66-23.174-51.66-51.66V225.285 c0-17.428,8.742-33.474,23.388-42.922l132.997-85.806c24.747-15.967,56.728-15.967,81.473,0l132.997,85.806 c14.645,9.448,23.388,25.493,23.388,42.922v256.394c0,8.158-6.615,14.772-14.772,14.772c-8.157,0-14.772-6.613-14.772-14.772 V225.285c0-7.347-3.686-14.113-9.862-18.097l-132.997-85.806c-15.02-9.689-34.425-9.689-49.441,0L98.283,207.189 c-6.175,3.984-9.86,10.749-9.86,18.097v235.056c0,12.196,9.921,22.116,22.116,22.116h215.173c8.157,0,14.772,6.613,14.772,14.772 S333.87,512.001,325.711,512.001z">
                </path> 
                <path d="M486.918,172.985c-2.844,0-5.715-0.818-8.25-2.529L281.504,37.412 c-15.491-10.455-35.514-10.455-51.01,0L33.332,170.456c-6.764,4.566-15.943,2.78-20.508-3.981 c-4.563-6.762-2.78-15.945,3.982-20.508L213.969,12.922c25.533-17.23,58.53-17.228,84.061,0l197.164,133.044 c6.762,4.563,8.545,13.745,3.981,20.508C496.321,170.703,491.662,172.985,486.918,172.985z">
                </path> 
                <path style="fill:#ff7e47;" d="M355.553,295.572c17.355-22.28,1.873-63.362,1.873-63.362s-42.946-4.867-60.562,16.835 c-12.565-4.652-26.372-7.225-40.863-7.225c-14.492,0-28.3,2.573-40.863,7.225c-17.617-21.703-60.562-16.835-60.562-16.835 s-15.482,41.082,1.873,63.362c0.78,1,1.628,1.928,2.507,2.821c-5.288,11.023-8.215,27.741-8.215,40.452 c0,51.042,47.126,75.532,105.26,75.532s105.26-24.49,105.26-75.532c0-12.713-2.926-29.43-8.215-40.452 C353.925,297.5,354.773,296.574,355.553,295.572z">
                </path> 
                <path style="fill:#000000;" d="M256.001,429.151c-72.916,0-120.032-35.446-120.032-90.304c0-10.002,1.671-24.85,6.124-38.043 c-17.726-28.066-3.139-69.027-1.34-73.801c1.954-5.188,6.65-8.844,12.159-9.469c0.507-0.058,5.144-0.56,11.99-0.56 c16.758,0,38.566,2.851,54.112,15.256c11.9-3.44,24.302-5.179,36.987-5.179c12.684,0,25.085,1.74,36.987,5.179 c15.544-12.404,37.353-15.256,54.112-15.256c6.845,0,11.484,0.504,11.99,0.56c5.508,0.625,10.204,4.281,12.159,9.469 c1.801,4.774,16.382,45.733-1.34,73.802c4.454,13.196,6.124,28.043,6.124,38.043C376.032,393.705,328.917,429.151,256.001,429.151z M165.701,246.518c-2.913,12.035-5.129,30.312,2.4,39.977c0.332,0.427,0.784,0.929,1.384,1.539 c4.367,4.437,5.48,11.136,2.789,16.75c-3.917,8.166-6.761,22.491-6.761,34.064c0,19.042,8.13,34.034,24.164,44.559 c15.918,10.448,39.473,16.203,66.323,16.203s50.405-5.755,66.323-16.203c16.033-10.525,24.164-25.515,24.164-44.559 c0-11.571-2.844-25.896-6.761-34.065c-2.69-5.61-1.576-12.306,2.784-16.744c0.61-0.619,1.053-1.112,1.394-1.551 c7.522-9.655,5.309-27.92,2.392-39.968c-18.135,0.123-31.947,4.421-37.966,11.837c-3.988,4.913-10.668,6.739-16.596,4.544 c-11.303-4.185-23.326-6.306-35.734-6.306c-12.408,0-24.432,2.123-35.736,6.306c-5.934,2.199-12.609,0.369-16.597-4.544 C197.648,250.941,183.837,246.642,165.701,246.518z">
                </path>
                <path style="fill:#000000;" d="M212.875,333.091h-2.028c-8.158,0-14.772-6.613-14.772-14.772c0-8.158,6.613-14.772,14.772-14.772 h2.028c8.158,0,14.772,6.613,14.772,14.772C227.646,326.477,221.033,333.091,212.875,333.091z"></path> <path style="fill:#000000;" d="M301.155,333.091h-2.03c-8.157,0-14.772-6.613-14.772-14.772c0-8.158,6.615-14.772,14.772-14.772 h2.03c8.157,0,14.772,6.613,14.772,14.772C315.926,326.477,309.313,333.091,301.155,333.091z">
                </path>
            </svg>
          </a>
          <!-- lang -->
          <div class="language_filed" style="display: flex;align-items: center;">
              <div id="google_translate_element" style="display: none;"></div>
              <select class="selectpicker" data-width="fit" onchange="goTranslate(this.value)" translate="no">
                  <option value="zh-TW" data-content='<span class="flag-icon flag-icon-tw" translate="no"></span> 繁體中文'>繁體中文</option>
                  <option value="zh-CN" data-content='<span class="flag-icon flag-icon-cn" translate="no"></span> 简体中文'>简体中文</option>
                  <option value="en" data-content='<span class="flag-icon flag-icon-us" translate="no"></span> English'>English</option>
                  <option value="ja" data-content='<span class="flag-icon flag-icon-jp" translate="no"></span> 日本語'>日本語</option>
                  <option value="ko" data-content='<span class="flag-icon flag-icon-kr" translate="no"></span> 한국어'>한국어</option>
              </select>
          </div>
        </div>
        
        <div class="nav">
            <ul class="nav__items">
                <li class="nav__item"><a href="#About_us" class="nav__link">關於我們</a></li>
                <li class="nav__item"><a href="#Recommend" class="nav__link">推薦商品</a></li>
                <li class="nav__item"><a href="#Gallery" class="nav__link">習作畫廊</a></li>
                <li class="nav__item"><a href="#Comic" class="nav__link">漫畫作品</a></li>
                
            </ul>
        </div>
    </nav>
      
    <main>
      <section class="about">
        <div id="About_us">

            <div class="artic layout-box">
                <div class="container version-b">
                    <div class="images">
                        <div class="grid image-grid-4">
                              <img class="image-0 " src="picture/little_orange_cat.png"> 
                              <img class="image-1 " src="picture/big_orange_cat.png">
                              <!-- <img class="image-2 " src="https://images.unsplash.com/photo-1531504060587-e6811129c0f2?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80">
                              <img class="image-3 " src="https://images.unsplash.com/photo-1443926818681-717d074a57af?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1780&amp;q=80"> -->
                          </div>
                    </div>
                    <div class="numbering">
                        <div class="numbering-box ">
                            <div class="numbering-no-wrapper"><span class="numbering-no-text">NO.</span></div>
                            <div class="numbering-text-text">1</div>
                        </div>
                    </div>
                    <div class="text">
                        <h2>橘貓橘貓窩</h2>
                        <p>由 大橘貓 x 小(中)橘貓 組成 的 「藝術工作坊」</p>
                        <p>我們販售大小橘貓為主題的週邊為主，也提供訂製手工藝（貼紙、3D列印、鉤針），若有需要歡迎聯繫我們呦～～～～！</p>
                        <p>大橘貓(Alikoi/一止魚)、小橘貓(Tanuki)</p>

                        <div class="special_button" style="margin-top:20px;">
                          <button class="exquisite_button" onclick="window.location.href='/about_us'">
                            關於我們
                            <div class="button__horizontal"></div>
                            <div class="button__vertical"></div>
                          </button>
                      </div>
                    </div>
                    <div class="single-image"></div>
                </div>
            </div>

        </div>
      </section>
      <section class="works">
          <div id="Recommend">
            <div class="sea layout-box">
              <div class="container version-a">
                  <div class="images">
                      <div class="grid image-grid-3-m4">
                          <img class="image-0 " src="picture\IMG_Front.png">
                          <img class="image-1" src="picture\IMG_Scale.png">
                          <img class="image-2 " src="picture\IMG_Inside.png">
                          <!-- <img class="image-3 " src="picture\IMG1_Front.png"> -->
                      </div>
                  </div>
                  <div class="numbering">
                      <div class="numbering-box ">
                          <div class="numbering-no-wrapper"><span class="numbering-no-text"  translate="no">NO.</span></div>
                          <div class="numbering-text-text">2</div>
                      </div>
                  </div>
                  <div class="text">
                      <h2>おすすめ</h2>
                      <p>哇！</p>
                      <p>這裡有一個精緻小巧的零錢袋呢</p>
                      <p>快來將它帶回家吧～</p>
                      <p>NT$ 300</p>
                      <p>小橘貓(Tanuki)</p>

                      <div class="special_button" style="margin-top:20px;">
                        <a href="https://www.instagram.com/alikoi_fish?igsh=MWo1cGM2cHdtb3NnMg%3D%3D&utm_source=qr" class="cta">
                          <span>IG</span>
                          <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                          </svg>
                        </a>
                      </div>

                  </div>
          
                  <div class="single-image">
                      <img class="image-5" src="picture\IMG_Front.png">
                  </div>
              </div>
            </div>
          </div>
      </section>

      <section class="gallery">
          <div id="Gallery">
            <div class="savanna layout-box">
              <div class="container version-b">
                  <div class="images">
                      <div class="grid image-grid-4">
                            <img class="image-0 " src="picture\water_flower_girl.jpg"> 
                            <img class="image-1 " src="picture\bird_bubble.jpg">
                            <img class="image-2 " src="picture\works\1f55b75cd57bdcabdc9ff99bb27a1311.jpg">
                            <img class="image-3 " src="picture\works\c0cfc954c502f9eed8f1283a12e5c55e.jpg">
                        </div>
                  </div>
                  <div class="numbering">
                      <div class="numbering-box ">
                          <div class="numbering-no-wrapper"><span class="numbering-no-text"  translate="no">NO.</span></div>
                          <div class="numbering-text-text">3</div>
                      </div>
                  </div>
                  <div class="text">
                      <h2>作品/習作</h2>
                      <p>畫畫課及平時隨手畫的圖，需要繪圖嗎？ 請聯繫ig哦~</p>
                      <p>大橘貓(Alikoi/一止魚)</p>
                      <p>鉤針、印章、刺繡、熱縮片等客製化製作。</p>
                      <p>小橘貓(Tanuki)</p>
                      
                      <button class="multi_button type3" onclick="window.location.href='./collections_gallery'">
                        看更多
                      </button>
                  </div>
                  <div class="single-image"></div>
              </div>
            </div>
          </div>
      </section>

      <section class="comic">
          <div id="Comic">
            <div class="rainforest layout-box">
              <div class="container version-a">
                  <div class="images">
                      <div class="grid image-grid-3-m4">
                          <img class="image-0 " src="picture\4格-尿液鏡檢.jpg">
                          <img class="image-1" src="picture\血庫.jpg">
                          <img class="image-2 " src="picture\管太多.png">
                          <img class="image-3 " src="picture\draw_blood.png">
                      </div>
                  </div>
                  <div class="numbering">
                      <div class="numbering-box ">
                          <div class="numbering-no-wrapper"><span class="numbering-no-text"  translate="no">NO.</span></div>
                          <div class="numbering-text-text">4</div>
                      </div>
                  </div>
                  <div class="text">
                      <h2>Comic</h2>
                      <p>取材自醫檢師同學上班的經驗、趣事等，繪製出醫檢師系列漫畫，也有貼圖即將在Line上販售，近請期待哦~! </p>
                      <p>大橘貓(Alikoi/一止魚)</p>
                      <button class="multi_button type2" onclick="window.location.href='./comic'">
                        看漫畫
                      </button>
                  </div>
                  
                  <div class="single-image">
                      <img class="image-5 " src="picture\draw_blood.png">
                  </div>
              </div>
            </div>
          </div>
      </section>

    </main>
    
    <footer class="footer">

      <div class="container">
        <div class="footer__columns">
          <div class="footer__col">
            <h3 class="footer__col-title">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg> 
              <span>商品</span>
            </h3>
            <nav class="footer__nav">
              <ul class="footer__nav-list">
                <li class="footer__nav-item">
                  <a href="" class="footer__nav-link">
                    手工鉤針
                  </a>
                </li>
                <li class="footer__nav-item">
                  <a href="" class="footer__nav-link">
                    繪圖接案
                  </a>
                </li>
                <li class="footer__nav-item">
                  <a href="" class="footer__nav-link">
                    漫畫貼圖
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="footer__col">
            <h3 class="footer__col-title">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> 
              <span>相關連結</span>
            </h3>
            <nav class="footer__nav">
              <ul class="footer__nav-list">
                <!-- <li class="footer__nav-item">
                  <a href="" class="footer__nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube">
                      <path 
                          d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z">
                      </path>
                      <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                  `</svg>
                  <span>Youtube</span>`
                  </a>
                </li>
                <li class="footer__nav-item">
                  <a href="" class="footer__nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                      <path 
                          d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                      </path>
                    </svg>
                    <span>Facebook</span>
                  </a>
                </li> -->
                <li class="footer__nav-item">
                  <a href="https://www.instagram.com/alikoi_fish?igsh=MWo1cGM2cHdtb3NnMg%3D%3D&utm_source=qr" class="footer__nav-link" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                    <span translate="no">一止魚</span>
                  </a>
                </li>
                <li class="footer__nav-item">
                  <a href="https://www.instagram.com/tanuki_aww?igsh=MW0zMnQ0ZnFlNmgxMw==" class="footer__nav-link" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                    <span translate="no">Tanuki</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="footer__col">
            <h3 class="footer__col-title">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg> 
              <span>聯絡資訊</span>
            </h3>
            <nav class="footer__nav">
              <ul class="footer__nav-list">
                <li class="footer__nav-item">
                  <a href="mailto:orangecats0813@gmail.com" class="footer__nav-link">
                    orangecats0813@gmail.com
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
          <div class="footer__copyrights">
            <p>「釣れない時は、魚が考える時間を与えてくれたと思えばいい。」-アーネスト・ヘミングウェイ</p>
            <!-- <p>Réalisé par <a href="https://twitter.com/silvereledev" target="_blank">@SilvereLeDev</a></p> -->
          </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js" type="text/javascript"></script><!-- bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script><!-- bootstrap -->

    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/language.js" type="text/javascript"></script>
    <!-- <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'zh-TW',
                autoDisplay: false,
                includedLanguages: 'zh-TW,zh-CN,en,ja,ko',
                layout: google.translate.TranslateElement.InlineLayout.VERTICAL
            }, 'google_translate_element');
        }

        $(window).load(function() {
            $('.goog-te-gadget').html($('.goog-te-gadget div'));
        });

        function goTranslate(lang) {
            $('.goog-te-combo').val(lang);

            const triggerEvent = (element, eventName) => {
                const event = new Event(eventName);
                element.dispatchEvent(event);
            };
            triggerEvent(document.querySelector('.goog-te-combo'), 'change');
        }
    </script> -->

  </body>

</html>
