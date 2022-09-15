<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Слушайте радио когда и где угодно</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
   <link rel="stylesheet" href="./datepicker/css/datepicker.min.css">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
   <link rel="stylesheet" href="./css/custom-player.css">
   <link href="./node_modules/star-rating.js/dist/star-rating.css" rel="stylesheet" />
   <link rel="stylesheet" href="./scss/style.css">
</head>

<body>
<?php include('includes/header.php'); ?>
   <main class="main main__radio">


      <section class="radio">
         <div class="radio__inner">

            <div class="testov" style="padding-top: 20px">
               <div class="radio-top">
                  <div class="container">
                     <h2>Интернет-радиостанции всех стран</h2>
                     <div class="radio-top__content">
                        <div class="radio-top__content-img">
                           <img src="./image/radio-main-img.svg" alt="radio">
                        </div>
                        <div class="radio-top__content-desc">
                           <p>
                              Слушайте радио в свободное время, во время вожденния, занятия спортом. Будьте
                              всегда погружены в изучения иностранного языка.

                           </p>
                           <p>
                              Специально для вас мы собрали подборку лучших БЕСПЛАТНЫХ радиостанцый со
                              всего мира.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="filter-8">
                  <form action="#" class="radio__search-form">
                     <div class="radio-form-search">
                        <input class="radio-form-search-input" type="text" placeholder="Поиск">
                     </div>
                     <div class="radio-form-status">
                        <div class="dropdown">
                           <button class="btn btn-secondary dropdown-toggle radio-select" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              World
                           </button>
                           <ul class="dropdown-menu dropdown-menu-main radio-select-list">
                              <li>
                                 <button type="button" data-filter="all">World</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".austria">Austria</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".australia">Australia</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".canada">Canada</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".great-britain">Great Britain</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".new-zealand">New Zealand</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".usa">USA</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".south-africa">South Africa</button>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="sort">

                  <div class="sort-container sort-container-radio">
                     <h4>Фильтр</h4>
                     <div class="controls">
                        <!-- <button type="button" data-sort="views:asc">Sort by v (A-Z)</button> -->
                        <button type="button" data-sort="views:desc">Количество просмотров
                         
                        </button>
                        <button type="button" data-sort="reiting:desc">Рейтинг
                          
                        </button>
                        <button type="button" data-sort="best:desc">Избранное
                          
                        </button>
                     </div>
                     <div class="mobile">
                        <div class="dropdown">
                           <button class="btnm btn-secondary dropdown-toggle radio-select" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Сортировать
                           </button>
                           <ul class="dropdown-menu dropdown-menu-mobilem radio-select-list">
                              <li>
                                 <button type="button" data-sort="views:desc">Количество просмотров</button>
                              </li>
                              <li>
                                 <button type="button" data-sort="reiting:desc">Рейтинг</button>
                              </li>
                              <li>
                                 <button type="button" data-sort="best:desc">Избранное</button>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="radio__content-list" id="radio">
                  <div class="radio__content-item great-britain mix" data-pop="5" data-views="10" data-reiting="5"
                     data-best="4">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 great-britain</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://s3.yesstreaming.net:19000', 'sc', 'stream', 'customname');">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item austria mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 austria</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a href="#" class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://stream.wksu.org:443', 'ic', 'wksu1.128.mp3', 'WKSU 89.87')">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item great-britain mix" data-pop="5" data-views="10" data-reiting="5"
                     data-best="4">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 great-britain</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://s3.yesstreaming.net:19000', 'sc', 'stream', 'customname');">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item austria mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 austria</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a href="#" class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://stream.wksu.org:443', 'ic', 'wksu1.128.mp3', 'WKSU 89.87')">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item great-britain mix" data-pop="5" data-views="10" data-reiting="5"
                     data-best="4">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 great-britain</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://s3.yesstreaming.net:19000', 'sc', 'stream', 'customname');">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item austria mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 austria</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a href="#" class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://stream.wksu.org:443', 'ic', 'wksu1.128.mp3', 'WKSU 89.87')">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item great-britain mix" data-pop="5" data-views="10" data-reiting="5"
                     data-best="4">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 great-britain</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://s3.yesstreaming.net:19000', 'sc', 'stream', 'customname');">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item austria mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 austria</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a href="#" class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://stream.wksu.org:443', 'ic', 'wksu1.128.mp3', 'WKSU 89.87')">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item great-britain mix" data-pop="5" data-views="10" data-reiting="5"
                     data-best="4">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 great-britain</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://s3.yesstreaming.net:19000', 'sc', 'stream', 'customname');">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item austria mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 austria</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a href="#" class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://stream.wksu.org:443', 'ic', 'wksu1.128.mp3', 'WKSU 89.87')">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item great-britain mix" data-pop="5" data-views="10" data-reiting="5"
                     data-best="4">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 great-britain</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://s3.yesstreaming.net:19000', 'sc', 'stream', 'customname');">
                        </a>
                     </div>
                  </div>
                  <div class="radio__content-item austria mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="radio-radioi__img"><a href="#"><img src="./image/radio-img.jpg" alt="radioi"></a></div>
                     <div class="radio-radioi__section-one">
                        <h5 class="radio-radioi__title">WKSU 89.87 austria</h5>
                        <div class="radio-radioi__star"></div>
                     </div>
                     <div class="star-rating-top">
                        <select class="star-rating">
                           <option value="">Виберіть оцінку</option>
                           <option value="5">Відмінно</option>
                           <option value="4">Дуже добре</option>
                           <option value="3">Середнє</option>
                           <option value="2">Погано</option>
                           <option value="1">Жахливо</option>
                        </select>
                     </div>
                     <div class="radio-radioi__section-two">
                        <p class="radio-radioi__writer">English</p>
                        <a href="#" class="radio-radioi__link">
                           <img src="./image/radio-start.svg" alt="play"
                              onclick="goradio('https://stream.wksu.org:443', 'ic', 'wksu1.128.mp3', 'WKSU 89.87')">
                        </a>
                     </div>
                  </div>

                  <!-- <div class="gap"></div>
                     <div class="gap"></div>http://stream.wksu.org/wksu1.128.mp3 -->

               </div>
               <div id="pagination" class="pagination"></div>
            </div>
         </div>
      </section>
      <section class="go-club">
         <div class="go-club__inner">
            <div class="container">
               <h4>
                  Заполняйте форму и присоединяйтесь к нам!
               </h4>
               <p>
                  Практикуйте ваши навыки владения иностранными языки в разговорном клубе вместе с другими стуендами
               </p>
               <ul>
                  <li>Живое общение</li>
                  <li>Практика разговорной речи</li>
                  <li>Новые зкомства</li>
                  <li>Преодоление языкового барьера</li>
               </ul>
               <a href="./club.php">Записаться в разговорный клуб</a>
            </div>
         </div>
      </section>
      <div id="p1"></div>
   </main>
   
   <?php include('includes/footer.php'); ?>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./datepicker/js/datepicker.min.js"></script>
   <script src="./node_modules/mixitup/dist/mixitup.js"></script>
   <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
   <script src="./scripts/jPages.min.js"></script>
   <script src="./node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
   <script src="./node_modules/star-rating.js/dist/star-rating.js"></script>
   <script>
      if ($(window).width() < 960) {
         //pagination
         var pagination = $('.pagination');
         function setPagination() {
            pagination.jPages({
               containerID: 'radio',
               perPage: 4,
               startPage: 1,
               startRange: 1,
               midRange: 3,
               endRange: 1,
               first: false,
               last: false,
               previous: "",
               next: ""
            });
         }
         function destroyPagination() {
            pagination.jPages('destroy');
         };
         setPagination();
         var mixer = mixitup('#radio', {
            selectors: {
               target: '.radio__content-item'
            },
            animation: {
               duration: 300
            },
            callbacks: {
               onMixStart: function (state, futureState) {
                  destroyPagination();

               },
               onMixEnd: function (state, futureState) {
                  console.log('mix End');
                  setPagination();
               },
            }
         });
         setPagination();
      }
      else {
         //pagination
         var pagination = $('.pagination');
         function setPagination() {
            var d = $(window).width();
            pagination.jPages({
               containerID: 'radio',
               perPage: 12,
               startPage: 1,
               startRange: 1,
               midRange: 3,
               endRange: 1,
               first: false,
               last: false,
               previous: "Предыдущая страница",
               next: "Следущая страница"
            });
         }
         function destroyPagination() {
            pagination.jPages('destroy');
         };
         setPagination();
         var mixer = mixitup('#radio', {
            selectors: {
               target: '.radio__content-item'
            },
            animation: {
               duration: 300
            },
            callbacks: {
               onMixStart: function (state, futureState) {
                  destroyPagination();

               },
               onMixEnd: function (state, futureState) {
                  console.log('mix End');
                  setPagination();
               },
            }
         });
      }

   </script>
   <script src="./scripts/custom-player.js"></script>
   <script src="./scripts/main.js"></script>
</body>

</html>