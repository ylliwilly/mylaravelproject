<!DOCTYPE html>
    <html lang="en" >
    
    <head>
      <meta charset="UTF-8">
      
    
        <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
    
        <meta name="apple-mobile-web-app-title" content="CodePen">
    
        <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
    
        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
    
    
    
      
      
    
      <title>CodePen - CSS Masonry Effect</title>
    
        <link rel="canonical" href="https://codepen.io/93lucasp/pen/LYYMYoB">
      
      
      
      
    <style>
    .masonry {
      columns: 4;
      column-gap: 16px;
    }
    @media (max-width: 1200px) {
      .masonry {
        columns: 3;
      }
    }
    @media (max-width: 992px) {
      .masonry {
        columns: 2;
      }
    }
    .masonry .grid {
      display: inline-block;
      margin-bottom: 16px;
      position: relative;
    }
    .masonry .grid:before {
      border-radius: 5px;
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.2);
    }
    .masonry .grid img {
      width: 100%;
      border-radius: 5px;
    }
    .masonry .grid__title {
      font-size: 28px;
      font-weight: bold;
      margin: 0px 0px 10px 0px;
    }
    .masonry .grid__author {
      font-size: 14px;
      font-weight: 300;
    }
    .masonry .grid__link {
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
    }
    .masonry .grid__body {
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      padding: 30px 30px;
      color: #fff;
      display: flex;
      flex-direction: column;
    }
    .masonry .grid__tag {
      background-color: rgba(255, 255, 255, 0.8);
      color: #333;
      border-radius: 5px;
      padding: 5px 15px;
      margin-bottom: 5px;
    }
    
    .mt-auto {
      margin-top: auto;
    }
    </style>
    
      <script>
      window.console = window.console || function(t) {};
    </script>
    
      
      
    </head>
    
    <body translate="no">
      <div class="masonry">
        <div class="grid">
            <img src="picture/works/1f55b75cd57bdcabdc9ff99bb27a1311.jpg">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Tanuki</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#水彩</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/4495f4b8e5279c5320f62d50b791752c.jpg">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 2</h1>
                <p class="grid__author">Tanuki</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#水彩</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/45195281935bce69cdcf106a9bb18d0f.jpg">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 3</h1>
                <p class="grid__author">Tanuki</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#水彩</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/c0cfc954c502f9eed8f1283a12e5c55e.jpg">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 4</h1>
                <p class="grid__author">Tanuki</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#水彩</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/c7b24467bf0243c7d97b40ac2249f5e7.jpg">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 5</h1>
                <p class="grid__author">Tanuki</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag5</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/c06927a3f2f5f1ce17e1cbeeee86c738.jpg">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 6</h1>
                <p class="grid__author">Tanuki</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag6</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div> <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
        <div class="grid">
            <img src="picture/works/">
            <div class="grid__body">
            <div class="relative">
                <a class="grid__link" target="_blank" href="/" ></a>
                <h1 class="grid__title">Title 1</h1>
                <p class="grid__author">Mario Rossi</p>
            </div>
            <div class="mt-auto" >
                <span class="grid__tag">#tag1</span>
            </div>
            </div>
        </div>
    </div>
      
      
      
    </body>
    
    </html>
    