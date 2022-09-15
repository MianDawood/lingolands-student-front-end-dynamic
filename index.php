<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Главная</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
   <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php include('includes/header.php'); ?>
   <main class="main">
      <section class="banner">
         <div class="banner__inner">

            <div class="banner__top">
               <h1 class="banner__title">Выберите язык обучения</h1>
               <div class="banner__flags">
                  <a href="#" class="banner__flag flag active">
                     <img src="./image/lang-gb.png" alt="GB" class="banner__flag-img active">
                  </a>
                  <a href="#" class="banner__flag flag">
                     <img src="./image/lang-fr.png" alt="FR" class="banner__flag-img">
                  </a>
                  <a href="#" class="banner__flag flag">
                     <img src="./image/lang-sp.png" alt="SP" class="banner__flag-img">
                  </a>
                  <a href="#" class="banner__flag flag">
                     <img src="./image/lang-it.png" alt="IT" class="banner__flag-img">
                  </a>
               </div>
               <div class="banner__search">
                  <form class="banner__search-form" action="#">
                     <input class="banner__search-form-input" type="text" placeholder="Search">
                  </form>
               </div>
            </div>
            <div class="container">
               <div class="banner__content">
                  <h3 class="banner__desc-title">
                     Пройдите тест бесплатно
                  </h3>
                  <div class="banner__desc">
                     <p class="banner__desc-text">
                        Интерактивный тест, который позвонит вам определить уровень владения иностранным языком.
                     </p>
                     <div class="banner__btn">
                        <a class="banner__link" href="./test-welcome.php">Пройти тест</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="video">
         <div class="video__inner">
            <div class="container">
               <h2 class="video__title">Узнайте как заговорить на иностранном языке</h2>
               <a data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=z2X2HaTvkl8">
                  <img class="video__img" src="./image/video.svg" alt="Video">
               </a>
            </div>
         </div>
      </section>
      <section class="lessons">
         <div class="lessons__inner">
            <div class="container">
               <h2 class="lessons__title">Изучайте языки легко!</h2>
               <div class="lessons__choose">
                  <button class="lessons__choose-link-o cl" type="button" value="Click"
                     onclick="viewpersonal(); cl('lessons__choose-link-o', 'cl')">Уроки с
                     преподавателем онлайн</button>
                  <button class="lessons__choose-link-t cl" type="button" value="Click"
                     onclick="viewgroup(); cl('lessons__choose-link-t', 'cl')">Групповые
                     занятия онлайн</button>
               </div>
            </div>

            <div class="lessons__personal">
               <div class="container">
                  <h2 class="lessons__products-title">Выберите продолжительность урока:</h2>
               </div>
               <div class="lessons__products-duration">
                  <button class="lessons__products-duration-link cl1 cls" type="button" value="Click"
                     onmousedown="view30(); cl('cl1', 'cls')">30 минут</button>
                  <button class="lessons__products-duration-link cl2 cls" type="button" value="Click"
                     onmousedown="view60(); cl('cl2', 'cls')">60 минут</button>
                  <button class="lessons__products-duration-link cl3 cls" type="button" value="Click"
                     onmousedown="view90(); cl('cl3', 'cls')">90 минут</button>
               </div>
               <div class="container">
                  <div class="lessons__products-items-30">
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">1</p>
                        <p class="lessons__products-item-title">Урок</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="orb-1 rb" onclick="rb1('o')">
                              <p>Русскоязычный учитель</p>
                              <p>7 USD курс</p>
                              <p>7 USD/урок</p>
                           </div>
                           <div class="orb-2 rb" onclick="rb2('o')">
                              <p>Англоязычный учитель</p>
                              <p>12 USD курс</p>
                              <p>12 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="orb-b-1 rbb">Оплатить</a>
                        <a href="#" class="orb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">5</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="trb-1 rb" onclick="rb1('t')">
                              <p>Русскоязычный учитель</p>
                              <p>32.5 USD курс</p>
                              <p>6.5 USD/урок</p>
                           </div>
                           <div class="trb-2 rb" onclick="rb2('t')">
                              <p>Англоязычный учитель</p>
                              <p>55 USD курс</p>
                              <p>11 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="trb-b-1 rbb">Оплатить</a>
                        <a href="#" class="trb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">10</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="thrb-1 rb" onclick="rb1('th')">
                              <p>Русскоязычный учитель</p>
                              <p>60 USD курс</p>
                              <p>6 USD/урок</p>
                           </div>
                           <div class="thrb-2 rb" onclick="rb2('th')">
                              <p>Англоязычный учитель</p>
                              <p>100 USD курс</p>
                              <p>10 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="thrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="thrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">15</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="frb-1 rb" onclick="rb1('f')">
                              <p>Русскоязычный учитель</p>
                              <p>82.5 USD курс</p>
                              <p>5.5 USD/урок</p>
                           </div>
                           <div class="frb-2 rb" onclick="rb2('f')">
                              <p>Англоязычный учитель</p>
                              <p>142.5 USD курс</p>
                              <p>9.5 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="frb-b-1 rbb">Оплатить</a>
                        <a href="#" class="frb-b-2 rbb">Оплатить</a>
                     </div>
                  </div>
                  <div class="lessons__products-items-60">
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">1</p>
                        <p class="lessons__products-item-title">Урок</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="oorb-1 rb" onclick="rb1('oo')">
                              <p>Русскоязычный учитель</p>
                              <p>14 USD курс</p>
                              <p>14 USD/урок</p>
                           </div>
                           <div class="oorb-2 rb" onclick="rb2('oo')">
                              <p>Англоязычный учитель</p>
                              <p>24 USD курс</p>
                              <p>24 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="oorb-b-1 rbb">Оплатить</a>
                        <a href="#" class="oorb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">5</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="ttrb-1 rb" onclick="rb1('tt')">
                              <p>Русскоязычный учитель</p>
                              <p>65 USD курс</p>
                              <p>13 USD/урок</p>
                           </div>
                           <div class="ttrb-2 rb" onclick="rb2('tt')">
                              <p>Англоязычный учитель</p>
                              <p>111.5 USD курс</p>
                              <p>22.5 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="ttrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="ttrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">10</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="ththrb-1 rb" onclick="rb1('thth')">
                              <p>Русскоязычный учитель</p>
                              <p>120 USD курс</p>
                              <p>12 USD/урок</p>
                           </div>
                           <div class="ththrb-2 rb" onclick="rb2('thth')">
                              <p>Англоязычный учитель</p>
                              <p>205 USD курс</p>
                              <p>20.5 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="ththrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="ththrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">15</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="ffrb-1 rb" onclick="rb1('ff')">
                              <p>Русскоязычный учитель</p>
                              <p>165 USD курс</p>
                              <p>11 USD/урок</p>
                           </div>
                           <div class="ffrb-2 rb" onclick="rb2('ff')">
                              <p>Англоязычный учитель</p>
                              <p>285 USD курс</p>
                              <p>19 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="ffrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="ffrb-b-2 rbb">Оплатить</a>
                     </div>
                  </div>
                  <div class="lessons__products-items-90">
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">1</p>
                        <p class="lessons__products-item-title">Урок</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="ooorb-1 rb" onclick="rb1('ooo')">
                              <p>Русскоязычный учитель</p>
                              <p>21 USD курс</p>
                              <p>21 USD/урок</p>
                           </div>
                           <div class="ooorb-2 rb" onclick="rb2('ooo')">
                              <p>Англоязычный учитель</p>
                              <p>36 USD курс</p>
                              <p>36 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="ooorb-b-1 rbb">Оплатить</a>
                        <a href="#" class="ooorb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">5</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="tttrb-1 rb" onclick="rb1('ttt')">
                              <p>Русскоязычный учитель</p>
                              <p>97.5 USD курс</p>
                              <p>19.5 USD/урок</p>
                           </div>
                           <div class="tttrb-2 rb" onclick="rb2('ttt')">
                              <p>Англоязычный учитель</p>
                              <p>172.5 USD курс</p>
                              <p>34.5 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="tttrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="tttrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">10</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="thththrb-1 rb" onclick="rb1('ththth')">
                              <p>Русскоязычный учитель</p>
                              <p>180 USD курс</p>
                              <p>18 USD/урок</p>
                           </div>
                           <div class="thththrb-2 rb" onclick="rb2('ththth')">
                              <p>Англоязычный учитель</p>
                              <p>300 USD курс</p>
                              <p>30 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="thththrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="thththrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">15</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="fffrb-1 rb" onclick="rb1('fff')">
                              <p>Русскоязычный учитель</p>
                              <p>247.5 USD курс</p>
                              <p>16.5 USD/урок</p>
                           </div>
                           <div class="fffrb-2 rb" onclick="rb2('fff')">
                              <p>Англоязычный учитель</p>
                              <p>450 USD курс</p>
                              <p>30 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="fffrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="fffrb-b-2 rbb">Оплатить</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="lessons__group">
               <div class="container">
                  <h2 class="lessons__products-title">Выберите продолжительность урока:</h2>
               </div>
               <div class="lessons__products-duration">
                  <button class="lessons__products-duration-link cl1 cls" type="button" value="Click"
                     onmousedown="view30(); cl('cl1', 'cls')">30 минут</button>
                  <button class="lessons__products-duration-link cl2 cls" type="button" value="Click"
                     onmousedown="view60(); cl('cl2', 'cls')">60 минут</button>
                  <button class="lessons__products-duration-link cl3 cls" type="button" value="Click"
                     onmousedown="view90(); cl('cl3', 'cls')">90 минут</button>
               </div>
               <div class="container">
                  <div class="lessons__products-items-30">
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">1</p>
                        <p class="lessons__products-item-title">Урок</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="orb-1 rb" onclick="rb1('o')">
                              <p>Русскоязычный учитель</p>
                              <p>5 USD курс</p>
                              <p>5 USD/урок</p>
                           </div>
                           <div class="orb-2 rb" onclick="rb2('o')">
                              <p>Англоязычный учитель</p>
                              <p>10 USD курс</p>
                              <p>10 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="orb-b-1 rbb">Оплатить</a>
                        <a href="#" class="orb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">5</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="trb-1 rb" onclick="rb1('t')">
                              <p>Русскоязычный учитель</p>
                              <p>20 USD курс</p>
                              <p>4 USD/урок</p>
                           </div>
                           <div class="trb-2 rb" onclick="rb2('t')">
                              <p>Англоязычный учитель</p>
                              <p>45 USD курс</p>
                              <p>9 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="trb-b-1 rbb">Оплатить</a>
                        <a href="#" class="trb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">10</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="thrb-1 rb" onclick="rb1('th')">
                              <p>Русскоязычный учитель</p>
                              <p>30 USD курс</p>
                              <p>3 USD/урок</p>
                           </div>
                           <div class="thrb-2 rb" onclick="rb2('th')">
                              <p>Англоязычный учитель</p>
                              <p>80 USD курс</p>
                              <p>8 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="thrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="thrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">15</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="frb-1 rb" onclick="rb1('f')">
                              <p>Русскоязычный учитель</p>
                              <p>30 USD курс</p>
                              <p>2 USD/урок</p>
                           </div>
                           <div class="frb-2 rb" onclick="rb2('f')">
                              <p>Англоязычный учитель</p>
                              <p>105 USD курс</p>
                              <p>7 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="frb-b-1 rbb">Оплатить</a>
                        <a href="#" class="frb-b-2 rbb">Оплатить</a>
                     </div>
                  </div>
                  <div class="lessons__products-items-60">
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">1</p>
                        <p class="lessons__products-item-title">Урок</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="oorb-1 rb" onclick="rb1('oo')">
                              <p>Русскоязычный учитель</p>
                              <p>10 USD курс</p>
                              <p>10 USD/урок</p>
                           </div>
                           <div class="oorb-2 rb" onclick="rb2('oo')">
                              <p>Англоязычный учитель</p>
                              <p>20 USD курс</p>
                              <p>20 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="oorb-b-1 rbb">Оплатить</a>
                        <a href="#" class="oorb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">5</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="ttrb-1 rb" onclick="rb1('tt')">
                              <p>Русскоязычный учитель</p>
                              <p>45 USD курс</p>
                              <p>9 USD/урок</p>
                           </div>
                           <div class="ttrb-2 rb" onclick="rb2('tt')">
                              <p>Англоязычный учитель</p>
                              <p>135 USD курс</p>
                              <p>19 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="ttrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="ttrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">10</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="ththrb-1 rb" onclick="rb1('thth')">
                              <p>Русскоязычный учитель</p>
                              <p>80 USD курс</p>
                              <p>8 USD/урок</p>
                           </div>
                           <div class="ththrb-2 rb" onclick="rb2('thth')">
                              <p>Англоязычный учитель</p>
                              <p>180 USD курс</p>
                              <p>18 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="ththrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="ththrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">15</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="ffrb-1 rb" onclick="rb1('ff')">
                              <p>Русскоязычный учитель</p>
                              <p>105 USD курс</p>
                              <p>7 USD/урок</p>
                           </div>
                           <div class="ffrb-2 rb" onclick="rb2('ff')">
                              <p>Англоязычный учитель</p>
                              <p>205 USD курс</p>
                              <p>17 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="ffrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="ffrb-b-2 rbb">Оплатить</a>
                     </div>
                  </div>
                  <div class="lessons__products-items-90">
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">1</p>
                        <p class="lessons__products-item-title">Урок</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="ooorb-1 rb" onclick="rb1('ooo')">
                              <p>Русскоязычный учитель</p>
                              <p>15 USD курс</p>
                              <p>15 USD/урок</p>
                           </div>
                           <div class="ooorb-2 rb" onclick="rb2('ooo')">
                              <p>Англоязычный учитель</p>
                              <p>30 USD курс</p>
                              <p>30 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="ooorb-b-1 rbb">Оплатить</a>
                        <a href="#" class="ooorb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">5</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="tttrb-1 rb" onclick="rb1('ttt')">
                              <p>Русскоязычный учитель</p>
                              <p>70 USD курс</p>
                              <p>14 USD/урок</p>
                           </div>
                           <div class="tttrb-2 rb" onclick="rb2('ttt')">
                              <p>Англоязычный учитель</p>
                              <p>140 USD курс</p>
                              <p>28 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="tttrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="tttrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">10</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="thththrb-1 rb" onclick="rb1('ththth')">
                              <p>Русскоязычный учитель</p>
                              <p>130 USD курс</p>
                              <p>13 USD/урок</p>
                           </div>
                           <div class="thththrb-2 rb" onclick="rb2('ththth')">
                              <p>Англоязычный учитель</p>
                              <p>260 USD курс</p>
                              <p>26 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="thththrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="thththrb-b-2 rbb">Оплатить</a>
                     </div>
                     <div class="lessons__products-item">
                        <p class="lessons__products-item-count">15</p>
                        <p class="lessons__products-item-title">Уроков</p>
                        <p class="lessons__products-item-desc">Выберите тип урока</p>
                        <div class="lessons__products-item-content">
                           <div class="fffrb-1 rb" onclick="rb1('fff')">
                              <p>Русскоязычный учитель</p>
                              <p>180 USD курс</p>
                              <p>12 USD/урок</p>
                           </div>
                           <div class="fffrb-2 rb" onclick="rb2('fff')">
                              <p>Англоязычный учитель</p>
                              <p>375 USD курс</p>
                              <p>25 USD/урок</p>
                           </div>
                        </div>
                        <a href="#" class="fffrb-b-1 rbb">Оплатить</a>
                        <a href="#" class="fffrb-b-2 rbb">Оплатить</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="advantage">
         <div class="advantage__inner">
            <div class="container">
               <h4 class="advantage__title">Каковы преимущества попадания в онлайн-школу «Lingolands»?</h4>
               <div class="advantage__content-one">
                  <div class="advantage__content-item">
                     <p class="advantage__content-item-text">
                        Lingolands предоставляет студентам возможность смотреть видео от опытных студентов.
                     </p>
                     <a href="./video.php" class="advantage__content-item-link">Смотреть видео</a>
                  </div>
                  <div class="advantage__content-item">
                     <p class="advantage__content-item-text">
                        Подборка лучших телеканалов на трех языках мира. Хорошо позволяет быстро и эффективно освоить
                        разговорные навыки.
                     </p>
                     <a href="./tv.php" class="advantage__content-item-link">Смотреть TV</a>
                  </div>
                  <div class="advantage__content-item">
                     <p class="advantage__content-item-text">
                        Бесплатная коллекция книг любой сложности для наших учеников.
                     </p>
                     <a href="./books.php" class="advantage__content-item-link">Читать</a>
                  </div>
               </div>
               <div class="advantage__content-two">
                  <div class="advantage__content-item advantage-order-1">
                     <p class="advantage__content-item-text">
                        В Lingolands есть клуб, в котором любой учащийся может присоединиться и взаимодействовать с
                        другими учащимися, улучшая свои разговорные навыки. Научитесь понимать речь на слух.
                        Присоединяйтесь к нам!
                     </p>
                     <a href="./club.php" class="advantage__content-item-link">Вступить в клуб</a>
                  </div>
                  <div class="advantage__content-item advantage-order-2">
                     <p class="advantage__content-item-text">
                        Для студентов, у которых мало времени и которые часто ездят за рулем или любят слушать радио, мы
                        создали лучшую подборку с зарубежными радиостанциями. Это обусловливает большой прогресс в
                        изучении иностранного языка.
                     </p>
                     <a href="#" class="advantage__content-item-link">Слушать радио</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="review">
         <div class="review__inner">
            <div class="container">
               <h4 class="review__title">Отзывы наших студентов</h4>
               <div class="review__content">
                  <div class="review__item">
                     <div class="review__item-top">
                        <img class="review__item-img" src="./image/review-1.png" alt="person-1">
                        <p class="review__item-name">Alice Brown <span>English</span></p>
                     </div>
                     <div class="review__item-text">
                        Хорошая цена за обучение, отличные преподаватели, интересные методики обучения. Искала школу с
                        такими параметрами и наконец нашла!
                     </div>
                  </div>
                  <div class="review__item">
                     <div class="review__item-top">
                        <img class="review__item-img" src="./image/review-2.png" alt="person-1">
                        <p class="review__item-name">Nastya Lorik <span>French</span></p>
                     </div>
                     <div class="review__item-text">
                        Прошло всего 5 уроков и я стало многое понимать в грамматике English! Педагог у меня строгий,
                        профи и очень меня организует!
                     </div>
                  </div>
                  <div class="review__item">
                     <div class="review__item-top">
                        <img class="review__item-img" src="./image/review-3.png" alt="person-1">
                        <p class="review__item-name">Sergey Nikov <span>English</span></p>
                     </div>
                     <div class="review__item-text">
                        Спасибо за курсы английского языка. Мне нужно было срочно выучить англ для работы, купил урок и
                        через пару уроков уже стал многое понимать !
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </section>
   </main>
  
   <?php include('includes/footer.php'); ?>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
   <script src="./scripts/main.js"></script>
</body>

</html>