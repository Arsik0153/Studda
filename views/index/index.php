<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="theme-color" content="#297af9">
  <title>Studda | Бесплатные уроки программирования</title>
  <link rel="stylesheet" href="template/css/main.css">
  <link rel="stylesheet" href="template/css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
</head>

<body>

  <div class="app">
    <header class="app__header">
      <a href=""><h2>Studda</h2></a>
      <svg onclick="openAbout()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zm0 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 3.813c-.184 0-.336-.004-.5.03a1.127 1.127 0 0 0-.438.22.98.98 0 0 0-.28.375c-.071.152-.095.332-.095.562 0 .227.024.406.094.563.07.156.16.28.281.375.122.093.274.148.438.187.164.04.316.063.5.063.18 0 .371-.024.531-.063.16-.04.285-.094.406-.188a.951.951 0 0 0 .282-.375c.07-.152.125-.335.125-.562 0-.23-.055-.41-.125-.563a.98.98 0 0 0-.281-.375c-.122-.093-.247-.183-.407-.218-.16-.035-.351-.032-.531-.032zm-1.219 3.343v8.969h2.438V9.156z">
        </path>
      </svg>
    </header>

    <main>

      <p><span style="font-weight: 700">Studda</span> - это новый бесплатный курс по программированию, который доступен для всех без регистрации. В любое время. Серьезно.</p>

      <div class="swiper-container">
          <h3>Выберите курс</h3>
        <div class="main-heading">
          <p>Листайте вправо <img class="scroll-arrow" src="template/images/arrow-pointing-to-right.svg" alt=""></p>
        </div>
        <div class="swiper-wrapper">

          <div class="swiper-slide codebox">
            <div class="pad">
                <img src="template/images/web.svg" alt="">
                <a href="/frontend"><h3>Frontend разработка</h3></a>
                <p>Научимся делать сайты, используя HTML5, CSS3, JS, и освоим фреймворк React.js</p>
            </div>
          </div>

          <div class="swiper-slide codebox">
              <div class="pad">
                  <img style="width: 70%" src="template/images/foundations.svg" alt="">
                  <a href="#"><h3>Основы программирования</h3></a>
                  <div class="main-heading">
                    <p>Скоро</p>
                  </div>
                  <p>Будем учить самые азы программирования. Совсем с нуля.</p>
              </div>
          </div>

          <div class="swiper-slide codebox">
              <div class="pad">
                  <img src="template/images/data science.svg" alt="">
                  <a href="#"><h3>Data science</h3></a>
                  <div class="main-heading">
                    <p>Скоро</p>
                  </div>
                  <p>Изучим SQL и будем визуализировать данные с помощью Python.</p>
              </div>
          </div>

        </div>
      </div>

      <!--
      <h3>Продолжить обучение:</h3>
        <div class="progress-block">
          <h3>Frontend разработка</h3>
          <div class="progress">
            <progress max="100" value="0"></progress>
            <div class="progress-value">50%</div>
            <div class="progress-bg"><div class="progress-bar"></div></div>
        </div>
        <a href="">Продолжить</a>
      </div>
    </main>
-->
  </div>

  <div class="about" id="about">
    <header>
      <svg onclick="openAbout()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" stroke="#000"
        stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <path d="M18 6L6 18M6 6l12 12"></path>
      </svg>
      <h3>Автор: Сайранбеков Жанарыс</h3>
      <h3>Идея: Бакытжан Байжикенов</h3>
    </header>
  </div>

  <div class="desktop">
    <h2>Studda использует технологию Code-To-Go, поэтому он доступен только на смартфонах. Пожалуйста, зайдите на сайт со смартфона.</h2>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
  <script src="template/js/main.js"></script>
  <script src="template/js/index.js"></script>
</body>

</html>