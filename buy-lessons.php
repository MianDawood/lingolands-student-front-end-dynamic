<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Купить уроки</title>
   <link
   href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
   rel="stylesheet">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include('includes/header.php'); ?>
   <main class="main">
      <section class="lessons buy-lessons">
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
         </div>
      </section>
   </main>
  
   <?php include('includes/footer.php'); ?>
   
   <script src="./node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./scripts/main.js"></script>
</body>
</html>