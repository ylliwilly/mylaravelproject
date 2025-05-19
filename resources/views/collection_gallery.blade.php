<html lang="en"><head>
  <meta charset="UTF-8">
  <link rel="apple-touch-icon" type="image/png" href="picture/Group2.png">
  <link rel="shortcut icon" type="image/x-icon" href="picture/Group2.png">
  <link rel="mask-icon" type="image/x-icon" href="picture/Group2.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,600">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

  <link href="css/hamburger_menu.css?v-new" type="text/css" rel="stylesheet"><!-- 漢堡選單 -->
<style>
body{
  background-color:#160e2f;
}

.button {
  display: inline-block;
  padding: 0.5em 1.0em;
  border-radius: 4px;
  background: #ffffff;
  font-family: sans-serif;
  font-size: 16px;
  cursor: pointer;
  border: 1px solid #ff8205;
  margin: 10px;
  -webkit-transition: background 0.3s;
  -moz-transition: background 0.3s;
  transition: background 0.3s;
}

.button:hover {
  background-color: rgba(165,141,110,1);
}

.button:active,
.button.is-checked {
  background-color: rgb(255 127 0 / 80%);
  color:snow;
  outline: none;
}

.button-group {
  margin: 20px 0;
  text-align: center;
}

.button-group:after {
  content: '';
  display: block;
  clear: both;
}

img {
  vertical-align: middle;
}

.img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}

.grid article {
  background-color: #FFFFFF;
  display: block;
  float: left;
  margin: 1%;
  width: 23%;
}

@media (max-width: 1024px) {
  .grid article {
    width: 31.3%;
  }
}

@media (max-width: 767px) {
  .grid article {
    width: 48%;
  }
}

@media (max-width: 479px) {
  .grid article {
    margin: 2% 0;
    width: 100%;
  }
}
</style>
<style>
  .mfp-with-zoom .mfp-title, .touch .gallery-image figcaption, html:not(.touch) .gallery-image figcaption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 14px;
    color: rgba(255, 255, 255, 0);
    padding: 1em;
    transition: all 0.2s ease;
    font-weight: 600;
    max-width: calc(100% - 9em);
    line-height: 1.25;
    text-align: center;
    box-sizing: border-box;
  }
  .mfp-with-zoom .mfp-title:before, .touch .gallery-image figcaption:before, html:not(.touch) .gallery-image figcaption:before, .mfp-with-zoom .mfp-title:after, .touch .gallery-image figcaption:after, html:not(.touch) .gallery-image figcaption:after {
    content: "";
    position: absolute;
    background: rgba(0, 0, 0, 0.2);
    width: 100%;
    height: 100%;
    padding: 1em;
    transition: all 0.3s ease-in-out;
    opacity: 0;
    z-index: -1;
  }
  .mfp-with-zoom .mfp-title:before, .touch .gallery-image figcaption:before, html:not(.touch) .gallery-image figcaption:before, .mfp-with-zoom .mfp-title:after, .touch .gallery-image figcaption:after, html:not(.touch) .gallery-image figcaption:after {
    right: 100%;
    bottom: 100%;
  }
  .mfp-with-zoom .mfp-title:after, .touch .gallery-image figcaption:after, html:not(.touch) .gallery-image figcaption:after {
    left: 100%;
    top: 100%;
  }
  
  .mfp-with-zoom.mfp-ready .mfp-title, .touch .gallery-image figcaption, html:not(.touch) .gallery-image:hover figcaption {
    color: white;
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.2);
    transition: all 0.2s ease 0.3s;
  }
  .mfp-with-zoom.mfp-ready .mfp-title:before, .touch .gallery-image figcaption:before, html:not(.touch) .gallery-image:hover figcaption:before, .mfp-with-zoom.mfp-ready .mfp-title:after, .touch .gallery-image figcaption:after, html:not(.touch) .gallery-image:hover figcaption:after {
    opacity: 1;
  }
  .mfp-with-zoom.mfp-ready .mfp-title:before, .touch .gallery-image figcaption:before, html:not(.touch) .gallery-image:hover figcaption:before {
    right: -1.5em;
    bottom: -1.5em;
  }
  .mfp-with-zoom.mfp-ready .mfp-title:after, .touch .gallery-image figcaption:after, html:not(.touch) .gallery-image:hover figcaption:after {
    left: -1.5em;
    top: -1.5em;
  }
  
  html {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizelegibility;
  }
  
  body {
    font-family: "Montserrat", sans-serif;
  }
  
  .gallery {
    -moz-column-gap: 0;
         column-gap: 0;
  }
  @media (min-width: 480px) {
    .gallery {
      -moz-column-count: 2;
           column-count: 2;
    }
  }
  @media (min-width: 1260px) {
    .gallery {
      -moz-column-count: 3;
           column-count: 3;
    }
  }
  
  .gallery-image {
    position: relative;
    margin: 0;
    padding: 0;
  }
  .gallery-image:before, .gallery-image:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 16px solid rgba(0, 0, 0, 0.1);
    transition: all 0.2s;
    will-change: border;
  }
  .gallery-image:after {
    border-width: 0;
  }
  .gallery-image img {
    display: block;
    max-width: 100%;
    height: auto;
  }
  html:not(.touch) .gallery-image {
    overflow: hidden;
  }
  html:not(.touch) .gallery-image:hover:before {
    border-width: 16px;
  }
  html:not(.touch) .gallery-image:hover:after {
    border-width: 32px;
  }
  .touch .gallery-image figcaption {
    top: auto;
    bottom: 2em;
  }
  
  .mfp-with-zoom .mfp-container, .mfp-with-zoom.mfp-bg {
    opacity: 0;
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    transition: all 0.3s ease-out;
  }
  .mfp-with-zoom.mfp-bg {
    background-color: rgba(0, 0, 0, 0.9);
  }
  .mfp-with-zoom.mfp-ready .mfp-container {
    opacity: 1;
  }
  .mfp-with-zoom.mfp-ready.mfp-bg {
    opacity: 1;
  }
  .mfp-with-zoom.mfp-removing .mfp-container, .mfp-with-zoom.mfp-removing.mfp-bg {
    opacity: 0;
  }
  .mfp-with-zoom img.mfp-img {
    padding: 0;
  }
  .mfp-with-zoom .mfp-figure:after {
    top: 0;
    bottom: 0;
  }
  .mfp-with-zoom .mfp-container {
    padding: 0;
  }
  .mfp-with-zoom .mfp-content {
    overflow: hidden;
  }
  .mfp-with-zoom .mfp-bottom-bar {
    top: auto;
    bottom: 0;
    margin-top: 0;
  }
  .mfp-with-zoom .mfp-title {
    top: auto;
    bottom: 2em;
  }
  .mfp-arrow {
    opacity: 1;
    margin-top: 0 !important;
    width: 20%;
    height: 30%;
    transform: translateY(-50%);
  }
  .mfp-arrow:before, .mfp-arrow:after {
    margin: 0;
    border: none;
    width: 2rem;
    height: 2rem;
    transform: rotate(-45deg) translate(-50%, -100%);
    opacity: 1;
    top: 50%;
    left: 50%;
    transition: all 0.15s;
  }
  .mfp-arrow:active {
    transform: translateY(-50%) scale(0.95);
  }
  
  .mfp-arrow-left {
    left: 0;
  }
  .mfp-arrow-left:before, .mfp-arrow-left:after {
    border-top: 2px solid white;
    border-left: 2px solid white;
  }
  .mfp-arrow-left:after {
    margin-left: 2rem;
  }
  .mfp-arrow-left:hover:before, .mfp-arrow-left:active:before {
    margin-left: 2rem;
  }
  .mfp-arrow-left:hover:after, .mfp-arrow-left:active:after {
    margin-left: 0;
  }
  
  .mfp-arrow-right {
    right: 0;
  }
  .mfp-arrow-right:before, .mfp-arrow-right:after {
    border-right: 2px solid white;
    border-bottom: 2px solid white;
  }
  .mfp-arrow-right:after {
    margin-left: 2rem;
  }
  .mfp-arrow-right:hover:before {
    margin-left: 2rem;
  }
  .mfp-arrow-right:hover:after {
    margin-left: 0;
  }
  
  button.mfp-close {
    opacity: 1;
    margin-top: 0 !important;
    width: 20%;
    height: 30%;
    font: 0/0 serif;
    text-shadow: none;
    color: transparent;
  }
  button.mfp-close:before, button.mfp-close:after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    margin: 0;
    border: none;
    width: 2rem;
    height: 2rem;
    opacity: 1;
    transition: all 0.15s;
    transform-origin: 0 0;
    border-top: 2px solid white;
    border-left: 2px solid white;
  }
  button.mfp-close:before {
    transform: rotate(-45deg);
  }
  button.mfp-close:after {
    transform: rotate(135deg);
  }
  button.mfp-close:hover:before {
    transform: rotate(135deg);
  }
  button.mfp-close:hover:after {
    transform: rotate(315deg);
  }
  button.mfp-close:active {
    transform: scale(0.95);
  }
  
  a {
    text-decoration: none;
    color: inherit;
  }
  
  [id=footer] {
    margin-top: 10vh;
    padding: 10vh 0;
    text-align: center;
  }
  [id=footer] .container {
    position: relative;
  }
  [id=footer] .container:before, [id=footer] .container:after {
    content: "";
    position: absolute;
    bottom: 100%;
    left: 20px;
    z-index: 10;
    border-top: 2px solid;
    width: 10%;
    margin-bottom: 10vh;
  }
  [id=footer] .container:after {
    left: auto;
    right: 20px;
  }
  [id=footer] * {
    display: block;
  }
  [id=footer] * + * {
    margin-top: 5vh;
  }
  [id=footer] .logo {
    font-weight: 600;
    font-size: 1.5em;
  }
  [id=footer] .copy {
    text-transform: uppercase;
    font-size: 0.75em;
    font-weight: 600;
  }
  </style>
  

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
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
        <button class="page" onclick="window.location.assign('./about_me')">About</button>
        <button class="page" onclick="window.location.assign('./sales')">Sales</button>
        <button class="page" onclick="window.location.assign('./comic')">Comic</button>
      </div>
      <!-- MENU END -->
    </div>
    <!-- 側邊欄 END -->
  <div class="button-group filters-button-group">
    <button class="button is-checked" data-filter="*">all</button>
    <button class="button" data-filter=".tanuki">小橘貓(Tanuki)</button>
    <button class="button" data-filter=".alikoi">大橘貓(Alikoi/一止魚)</button>
    <button class="button" data-filter=".draw">draw</button>
    <button class="button" data-filter=".handicraft">handicraft</button>
    <button class="button" data-filter=".watercolor">watercolor</button> 
  </div>

<section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid" style="position: relative; height: 510.468px;">
    
    <article class="alikoi draw" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/mother_card.jpg" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/mother_card.jpg" width="1600">
            <figcaption>母親節卡片</figcaption>
          </figure>
        </a>
    </article>
    <article class="alikoi draw" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/bird_bubble.jpg" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/bird_bubble.jpg" width="1600">
            <figcaption>手機桌布</figcaption>
          </figure>
        </a>
    </article>
    <article class="alikoi draw" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/big_orange_cat.png" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/big_orange_cat.png" width="1600">
            <figcaption>大橘貓</figcaption>
          </figure>
        </a>
    </article>
    <article class="alikoi draw" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/background.gif" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/background.gif" width="1600">
            <figcaption>窗˙光影˙女孩</figcaption>
          </figure>
        </a>
    </article>
    <article class="alikoi draw" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/water_flower_girl.jpg" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/water_flower_girl.jpg" width="1600">
            <figcaption>水˙花˙少女</figcaption>
          </figure>
        </a>
    </article>
    <article class="alikoi draw" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/face.jpg" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/face.jpg" width="1600">
            <figcaption>玻璃˙城市˙女孩</figcaption>
          </figure>
        </a>
    </article>
    <article class="alikoi draw" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/line.jpg" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/line.jpg" width="1600">
            <figcaption>線稿練習</figcaption>
          </figure>
        </a>
    </article>
    <!-- tanuki -->
    <article class="tanuki draw watercolor" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/works/1f55b75cd57bdcabdc9ff99bb27a1311.jpg" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/works/1f55b75cd57bdcabdc9ff99bb27a1311.jpg" width="1600">
            <figcaption>彼岸花</figcaption>
          </figure>
        </a>
    </article>
    <article class="tanuki draw watercolor" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/works/4495f4b8e5279c5320f62d50b791752c.jpg" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/works/4495f4b8e5279c5320f62d50b791752c.jpg" width="1600">
            <figcaption>星空</figcaption>
          </figure>
        </a>
    </article><article class="tanuki draw watercolor" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/works/45195281935bce69cdcf106a9bb18d0f.jpg" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/works/45195281935bce69cdcf106a9bb18d0f.jpg" width="1600">
            <figcaption>花</figcaption>
          </figure>
        </a>
    </article>
    <article class="tanuki draw watercolor" style="position: absolute; left: 0px; top: 0px;">
        <a class="gallery-link" href="picture/works/c0cfc954c502f9eed8f1283a12e5c55e.jpg" class="img-responsive">
          <figure class="gallery-image">
            <img height="1200" src="picture/works/c0cfc954c502f9eed8f1283a12e5c55e.jpg" width="1600">
            <figcaption>刷</figcaption>
          </figure>
        </a>
      </article>
    <article class="tanuki draw watercolor" style="position: absolute; left: 0px; top: 0px;">
      <a class="gallery-link" href="picture/works/c7b24467bf0243c7d97b40ac2249f5e7.jpg" class="img-responsive">
        <figure class="gallery-image">
          <img height="1200" src="picture/works/c7b24467bf0243c7d97b40ac2249f5e7.jpg" width="1600">
          <figcaption>水晶球</figcaption>
        </figure>
      </a>
    </article>
    <article class="tanuki draw watercolor" style="position: absolute; left: 0px; top: 0px;">
      <a class="gallery-link" href="picture/works/c06927a3f2f5f1ce17e1cbeeee86c738.jpg" class="img-responsive">
        <figure class="gallery-image">
          <img height="1200" src="picture/works/c06927a3f2f5f1ce17e1cbeeee86c738.jpg" width="1600">
          <figcaption>聖誕</figcaption>
        </figure>
      </a>
    </article>
    
    <!-- <article class="people rock sea" style="position: absolute; left: 1042px; top: 0px;">
        <img src="https://cdn2.hubspot.net/hub/322787/hubfs/MYCHEFCOM/hackathon/photos-gallery/rock1.jpg" class="img-responsive">
    </article> -->
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007714979/custom/page/hack-a-thon-3/masonry.min.min.js"></script>
  <script src="https://cdn2.hubspot.net/hub/322787/hub_generated/style_manager/1440007849180/custom/page/hack-a-thon-3/isotope.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <!-- <script src="https://codepen.io/mican/pen/XgRmNr.js"></script> -->

  <script type="text/javascript" src="js/hamburger_menu.js"></script>
  <script id="rendered-js">
    $(function () {
      var $grid = $('.grid').isotope({
        itemSelector: 'article' });


      // filter buttons
      $('.filters-button-group').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
      });
      $('.button-group').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function () {
          $buttonGroup.find('.is-checked').removeClass('is-checked');
          $(this).addClass('is-checked');
        });
      });
    });

    // debounce so filtering doesn't happen every millisecond
    function debounce(fn, threshold) {
      var timeout;
      return function debounced() {
        if (timeout) {
          clearTimeout(timeout);
        }
        function delayed() {
          fn();
          timeout = null;
        }
        timeout = setTimeout(delayed, threshold || 100);
      };
    }

    $(window).bind("load", function () {
      $('#all').click();
    });
    //# sourceURL=pen.js

    (function() {
      $('.gallery-link').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
          verticalFit: true,
          titleSrc: function(item) {
            return item.el.find('figcaption').text() || item.el.attr('title');
          }
        },
        zoom: {
          enabled: true
        },
        // duration: 300
        gallery: {
          enabled: true,
          navigateByImgClick: false,
          tCounter: ''
        },
        disableOn: function() {
          return $(window).width() > 640;
        }
      });

    }).call(this);
  </script>

</body>
</html>