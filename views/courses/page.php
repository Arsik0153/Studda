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
  <link rel="stylesheet" href="/template/css/main.css">
  <link rel="stylesheet" href="/template/css/page.css">
  <link rel="stylesheet" href="/template/css/prettify.css">
</head>

<body>

  <div class="app">
    <header class="app__header">
      <a href="/">
        <h2>Studda</h2>
      </a>
      <svg onclick="openAbout()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zm0 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 3.813c-.184 0-.336-.004-.5.03a1.127 1.127 0 0 0-.438.22.98.98 0 0 0-.28.375c-.071.152-.095.332-.095.562 0 .227.024.406.094.563.07.156.16.28.281.375.122.093.274.148.438.187.164.04.316.063.5.063.18 0 .371-.024.531-.063.16-.04.285-.094.406-.188a.951.951 0 0 0 .282-.375c.07-.152.125-.335.125-.562 0-.23-.055-.41-.125-.563a.98.98 0 0 0-.281-.375c-.122-.093-.247-.183-.407-.218-.16-.035-.351-.032-.531-.032zm-1.219 3.343v8.969h2.438V9.156z">
        </path>
      </svg>
    </header>

    <main>

      <?=html_entity_decode($page["text"])?>

      <div class="pagination">
        <div class="pagination-a">
          <?php if($id != "1"):?>
            <a href="/frontend/<?=$id-1?>"><span class="arrow">&lsaquo;</span> Назад</a>
          <?php endif; ?>
        </div>
        <div class="pagination-a">
          <a href="/frontend/<?=$id+1?>">Вперёд <span class="arrow">&rsaquo;</span></a>
        </div>
      </div>

    </main>

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
    <h2>Studda использует технологию Code-To-Go, поэтому он доступен только на смартфонах. Пожалуйста, зайдите на сайт
      со смартфона.</h2>
  </div>

  <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?skin=sunburst"></script>
  <script src="/template/js/main.js"></script>

</body>

</html>