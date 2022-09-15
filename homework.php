<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Домашнее задания</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="./datepicker/css/datepicker.css">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
   <link rel="stylesheet" href="./css/font-awesome.min.css">
   <link href="./node_modules/star-rating.js/dist/star-rating.css" rel="stylesheet" />
   <link rel="stylesheet" href="./scss/style.css">
</head>

<body>
<?php include('includes/header.php'); ?>
   <main class="main">
      <section class="homework">
         <div class="homework__inner">
            <div class="homework__top">
               <h2 class="homework__title">Домашнее задания</h2>
               <div class="filter">
                  <form action="#" class="homework__search-form">
                     <div class="homework-form-search">
                        <input class="homework-form-search-input" type="text" placeholder="Поиск">
                     </div>
                     <div class="homework-form-date" id="pppp">
                        <input type="text" data-range="true" id="ppp" data-multiple-dates-separator="-"
                           class="datepicker-here" autocomplete="off" placeholder="Календарь" . />
                     </div>
                     <div class="homework-form-status">
                        <div class="custom-select homework-form-status-input">
                           <select>
                              <option value="0">Активные</option>
                              <option value="1">Отменённые</option>
                              <option value="2">Пропущенные</option>
                              <option value="3">Запланированные</option>
                           </select>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="container">
               <div class="homework-list">
                  <div class="homework-item pass">
                     <div class="homework-item__inner aoccordion">
                        <div class="homework-item__status"></div>
                        <div class="homework-item__desc">
                           <p class="homework-item__title">
                              Урок 1
                           </p>
                           <p class="homework-item__number">
                              Чтение
                           </p>
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

                        <p class="homework-item__name">
                           Тема 2 (о дизайне)
                        </p>
                        <div class="homework-item__container">
                           <div class="homework-item__long">
                              <p class="long-title">Длительность</p>
                              <p class="long-value">45 минут</p>
                           </div>
                           <div class="homework-item__level">
                              <p class="level-title">Уровень</p>
                              <p class="level-value">Профи</p>
                           </div>
                           <div class="homework-item__time">
                              <p class="time-title">Время</p>
                              <p class="time-value">15:00</p>
                           </div>
                           <div class="homework-item__date">
                              <p class="date-title">Дата</p>
                              <p class="date-value">12.12.22</p>
                           </div>
                           <!-- <a href="#" class="homework-item-link-pass homework-item-link">Посмотреть</a>
                           <a href="#" class="homework-item-link-cancel homework-item-link">Отменено</a>
                           <a href="#" class="homework-item-link-start homework-item-link">Начать</a> -->
                        </div>
                     </div>
                     <a href="#" class="homework-item-link-pass homework-item-link accordion">Посмотреть</a>
                     <div class="panel">
                        <div class="panel-icon">
                           <img src="./image/homework-ico.svg" alt="icon">
                           <p class="name">Урок 1</p>
                           <div class="star-rating-pannel">
                              <select class="star-rating">
                                 <option value="">Виберіть оцінку</option>
                                 <option value="5">Відмінно</option>
                                 <option value="4">Дуже добре</option>
                                 <option value="3">Середнє</option>
                                 <option value="2">Погано</option>
                                 <option value="1">Жахливо</option>
                              </select>
                           </div>
                        </div>
                        <div class="panel-desc">
                           <div class="name-teacher">
                              <p class="name-teacher-title">Назначенное учителем</p>
                              <p class="name-teacher-value">Диана Смолова</p>
                           </div>
                           <div class="homework-date">
                              <div class="homework-date-title">Дата выполнения</div>
                              <div class="homework-date-value">12.12.22</div>
                           </div>
                           <div class="homework-status">
                              <div class="homework-status-title">Статус</div>
                              <div class="homework-status-value">Выполненное</div>
                           </div>
                           <div class="panel-desc-bottom">
                              <p class="panel-desc-bottom-text">
                                 <span>Домашнее задание: </span> прочитать страницу 1 , книга по чтению. Посмотреть
                                 видео.
                              </p>
                              <a href="#" class="panel-desc-bottom-link">Ссылка на видео, книгу и всё что нужно, файл и
                                 тд.</a>
                           </div>
                        </div>
                     </div>
                     <div class="visible-block">
                        <div class="comment">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает.
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem qui nam vitae nulla in velit
                           doloribus magni quisquam provident explicabo minus numquam, asperiores totam quam enim ad
                           iure labore neque? </div>
                     </div>
                  </div>
                  <div class="homework-item pass">
                     <div class="homework-item__inner aoccordion">
                        <div class="homework-item__status"></div>
                        <div class="homework-item__desc">
                           <p class="homework-item__title">
                              Урок 1
                           </p>
                           <p class="homework-item__number">
                              Чтение
                           </p>
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

                        <p class="homework-item__name">
                           Тема 2 (о дизайне)
                        </p>
                        <div class="homework-item__container">
                           <div class="homework-item__long">
                              <p class="long-title">Длительность</p>
                              <p class="long-value">45 минут</p>
                           </div>
                           <div class="homework-item__level">
                              <p class="level-title">Уровень</p>
                              <p class="level-value">Профи</p>
                           </div>
                           <div class="homework-item__time">
                              <p class="time-title">Время</p>
                              <p class="time-value">15:00</p>
                           </div>
                           <div class="homework-item__date">
                              <p class="date-title">Дата</p>
                              <p class="date-value">12.12.22</p>
                           </div>
                           <!-- <a href="#" class="homework-item-link-pass homework-item-link">Посмотреть</a>
                           <a href="#" class="homework-item-link-cancel homework-item-link">Отменено</a>
                           <a href="#" class="homework-item-link-start homework-item-link">Начать</a> -->
                        </div>
                     </div>
                     <a href="#" class="homework-item-link-pass homework-item-link accordion">Посмотреть</a>
                     <div class="panel">
                        <div class="panel-icon">
                           <img src="./image/homework-ico.svg" alt="icon">
                           <p class="name">Урок 1</p>
                           <div class="star-rating-pannel">
                              <select class="star-rating">
                                 <option value="">Виберіть оцінку</option>
                                 <option value="5">Відмінно</option>
                                 <option value="4">Дуже добре</option>
                                 <option value="3">Середнє</option>
                                 <option value="2">Погано</option>
                                 <option value="1">Жахливо</option>
                              </select>
                           </div>
                        </div>
                        <div class="panel-desc">
                           <div class="name-teacher">
                              <p class="name-teacher-title">Назначенное учителем</p>
                              <p class="name-teacher-value">Диана Смолова</p>
                           </div>
                           <div class="homework-date">
                              <div class="homework-date-title">Дата выполнения</div>
                              <div class="homework-date-value">12.12.22</div>
                           </div>
                           <div class="homework-status">
                              <div class="homework-status-title">Статус</div>
                              <div class="homework-status-value">Выполненное</div>
                           </div>
                           <div class="panel-desc-bottom">
                              <p class="panel-desc-bottom-text">
                                 <span>Домашнее задание: </span> прочитать страницу 1 , книга по чтению. Посмотреть
                                 видео.
                              </p>
                              <a href="#" class="panel-desc-bottom-link">Ссылка на видео, книгу и всё что нужно, файл и
                                 тд.</a>
                           </div>
                        </div>
                     </div>
                     <div class="visible-block">
                        <div class="comment">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает.
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem qui nam vitae nulla in velit
                           doloribus magni quisquam provident explicabo minus numquam, asperiores totam quam enim ad
                           iure labore neque? </div>
                     </div>
                  </div>
                  <div class="homework-item pass">
                     <div class="homework-item__inner aoccordion">
                        <div class="homework-item__status"></div>
                        <div class="homework-item__desc">
                           <p class="homework-item__title">
                              Урок 1
                           </p>
                           <p class="homework-item__number">
                              Чтение
                           </p>
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

                        <p class="homework-item__name">
                           Тема 2 (о дизайне)
                        </p>
                        <div class="homework-item__container">
                           <div class="homework-item__long">
                              <p class="long-title">Длительность</p>
                              <p class="long-value">45 минут</p>
                           </div>
                           <div class="homework-item__level">
                              <p class="level-title">Уровень</p>
                              <p class="level-value">Профи</p>
                           </div>
                           <div class="homework-item__time">
                              <p class="time-title">Время</p>
                              <p class="time-value">15:00</p>
                           </div>
                           <div class="homework-item__date">
                              <p class="date-title">Дата</p>
                              <p class="date-value">12.12.22</p>
                           </div>
                           <!-- <a href="#" class="homework-item-link-pass homework-item-link">Посмотреть</a>
                           <a href="#" class="homework-item-link-cancel homework-item-link">Отменено</a>
                           <a href="#" class="homework-item-link-start homework-item-link">Начать</a> -->
                        </div>
                     </div>
                     <a href="#" class="homework-item-link-pass homework-item-link accordion">Посмотреть</a>
                     <div class="panel">
                        <div class="panel-icon">
                           <img src="./image/homework-ico.svg" alt="icon">
                           <p class="name">Урок 1</p>
                           <div class="star-rating-pannel">
                              <select class="star-rating">
                                 <option value="">Виберіть оцінку</option>
                                 <option value="5">Відмінно</option>
                                 <option value="4">Дуже добре</option>
                                 <option value="3">Середнє</option>
                                 <option value="2">Погано</option>
                                 <option value="1">Жахливо</option>
                              </select>
                           </div>
                        </div>
                        <div class="panel-desc">
                           <div class="name-teacher">
                              <p class="name-teacher-title">Назначенное учителем</p>
                              <p class="name-teacher-value">Диана Смолова</p>
                           </div>
                           <div class="homework-date">
                              <div class="homework-date-title">Дата выполнения</div>
                              <div class="homework-date-value">12.12.22</div>
                           </div>
                           <div class="homework-status">
                              <div class="homework-status-title">Статус</div>
                              <div class="homework-status-value">Выполненное</div>
                           </div>
                           <div class="panel-desc-bottom">
                              <p class="panel-desc-bottom-text">
                                 <span>Домашнее задание: </span> прочитать страницу 1 , книга по чтению. Посмотреть
                                 видео.
                              </p>
                              <a href="#" class="panel-desc-bottom-link">Ссылка на видео, книгу и всё что нужно, файл и
                                 тд.</a>
                           </div>
                        </div>
                     </div>
                     <div class="visible-block">
                        <div class="comment">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает.
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem qui nam vitae nulla in velit
                           doloribus magni quisquam provident explicabo minus numquam, asperiores totam quam enim ad
                           iure labore neque? </div>
                     </div>
                  </div>
                  <div class="homework-item pass">
                     <div class="homework-item__inner aoccordion">
                        <div class="homework-item__status"></div>
                        <div class="homework-item__desc">
                           <p class="homework-item__title">
                              Урок 1
                           </p>
                           <p class="homework-item__number">
                              Чтение
                           </p>
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

                        <p class="homework-item__name">
                           Тема 2 (о дизайне)
                        </p>
                        <div class="homework-item__container">
                           <div class="homework-item__long">
                              <p class="long-title">Длительность</p>
                              <p class="long-value">45 минут</p>
                           </div>
                           <div class="homework-item__level">
                              <p class="level-title">Уровень</p>
                              <p class="level-value">Профи</p>
                           </div>
                           <div class="homework-item__time">
                              <p class="time-title">Время</p>
                              <p class="time-value">15:00</p>
                           </div>
                           <div class="homework-item__date">
                              <p class="date-title">Дата</p>
                              <p class="date-value">12.12.22</p>
                           </div>
                           <!-- <a href="#" class="homework-item-link-pass homework-item-link">Посмотреть</a>
                           <a href="#" class="homework-item-link-cancel homework-item-link">Отменено</a>
                           <a href="#" class="homework-item-link-start homework-item-link">Начать</a> -->
                        </div>
                     </div>
                     <a href="#" class="homework-item-link-pass homework-item-link accordion">Посмотреть</a>
                     <div class="panel">
                        <div class="panel-icon">
                           <img src="./image/homework-ico.svg" alt="icon">
                           <p class="name">Урок 1</p>
                           <div class="star-rating-pannel">
                              <select class="star-rating">
                                 <option value="">Виберіть оцінку</option>
                                 <option value="5">Відмінно</option>
                                 <option value="4">Дуже добре</option>
                                 <option value="3">Середнє</option>
                                 <option value="2">Погано</option>
                                 <option value="1">Жахливо</option>
                              </select>
                           </div>
                        </div>
                        <div class="panel-desc">
                           <div class="name-teacher">
                              <p class="name-teacher-title">Назначенное учителем</p>
                              <p class="name-teacher-value">Диана Смолова</p>
                           </div>
                           <div class="homework-date">
                              <div class="homework-date-title">Дата выполнения</div>
                              <div class="homework-date-value">12.12.22</div>
                           </div>
                           <div class="homework-status">
                              <div class="homework-status-title">Статус</div>
                              <div class="homework-status-value">Выполненное</div>
                           </div>
                           <div class="panel-desc-bottom">
                              <p class="panel-desc-bottom-text">
                                 <span>Домашнее задание: </span> прочитать страницу 1 , книга по чтению. Посмотреть
                                 видео.
                              </p>
                              <a href="#" class="panel-desc-bottom-link">Ссылка на видео, книгу и всё что нужно, файл и
                                 тд.</a>
                           </div>
                        </div>
                     </div>
                     <div class="visible-block">
                        <div class="comment">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает.
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem qui nam vitae nulla in velit
                           doloribus magni quisquam provident explicabo minus numquam, asperiores totam quam enim ad
                           iure labore neque? </div>
                     </div>
                  </div>
                  <div class="homework-item pass">
                     <div class="homework-item__inner aoccordion">
                        <div class="homework-item__status"></div>
                        <div class="homework-item__desc">
                           <p class="homework-item__title">
                              Урок 1
                           </p>
                           <p class="homework-item__number">
                              Чтение
                           </p>
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

                        <p class="homework-item__name">
                           Тема 2 (о дизайне)
                        </p>
                        <div class="homework-item__container">
                           <div class="homework-item__long">
                              <p class="long-title">Длительность</p>
                              <p class="long-value">45 минут</p>
                           </div>
                           <div class="homework-item__level">
                              <p class="level-title">Уровень</p>
                              <p class="level-value">Профи</p>
                           </div>
                           <div class="homework-item__time">
                              <p class="time-title">Время</p>
                              <p class="time-value">15:00</p>
                           </div>
                           <div class="homework-item__date">
                              <p class="date-title">Дата</p>
                              <p class="date-value">12.12.22</p>
                           </div>
                           <!-- <a href="#" class="homework-item-link-pass homework-item-link">Посмотреть</a>
                           <a href="#" class="homework-item-link-cancel homework-item-link">Отменено</a>
                           <a href="#" class="homework-item-link-start homework-item-link">Начать</a> -->
                        </div>
                     </div>
                     <a href="#" class="homework-item-link-pass homework-item-link accordion">Посмотреть</a>
                     <div class="panel">
                        <div class="panel-icon">
                           <img src="./image/homework-ico.svg" alt="icon">
                           <p class="name">Урок 1</p>
                           <div class="star-rating-pannel">
                              <select class="star-rating">
                                 <option value="">Виберіть оцінку</option>
                                 <option value="5">Відмінно</option>
                                 <option value="4">Дуже добре</option>
                                 <option value="3">Середнє</option>
                                 <option value="2">Погано</option>
                                 <option value="1">Жахливо</option>
                              </select>
                           </div>
                        </div>
                        <div class="panel-desc">
                           <div class="name-teacher">
                              <p class="name-teacher-title">Назначенное учителем</p>
                              <p class="name-teacher-value">Диана Смолова</p>
                           </div>
                           <div class="homework-date">
                              <div class="homework-date-title">Дата выполнения</div>
                              <div class="homework-date-value">12.12.22</div>
                           </div>
                           <div class="homework-status">
                              <div class="homework-status-title">Статус</div>
                              <div class="homework-status-value">Выполненное</div>
                           </div>
                           <div class="panel-desc-bottom">
                              <p class="panel-desc-bottom-text">
                                 <span>Домашнее задание: </span> прочитать страницу 1 , книга по чтению. Посмотреть
                                 видео.
                              </p>
                              <a href="#" class="panel-desc-bottom-link">Ссылка на видео, книгу и всё что нужно, файл и
                                 тд.</a>
                           </div>
                        </div>
                     </div>
                     <div class="visible-block">
                        <div class="comment">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает.
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem qui nam vitae nulla in velit
                           doloribus magni quisquam provident explicabo minus numquam, asperiores totam quam enim ad
                           iure labore neque? </div>
                     </div>
                  </div>
                  <div class="homework-item pass">
                     <div class="homework-item__inner aoccordion">
                        <div class="homework-item__status"></div>
                        <div class="homework-item__desc">
                           <p class="homework-item__title">
                              Урок 1
                           </p>
                           <p class="homework-item__number">
                              Чтение
                           </p>
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

                        <p class="homework-item__name">
                           Тема 2 (о дизайне)
                        </p>
                        <div class="homework-item__container">
                           <div class="homework-item__long">
                              <p class="long-title">Длительность</p>
                              <p class="long-value">45 минут</p>
                           </div>
                           <div class="homework-item__level">
                              <p class="level-title">Уровень</p>
                              <p class="level-value">Профи</p>
                           </div>
                           <div class="homework-item__time">
                              <p class="time-title">Время</p>
                              <p class="time-value">15:00</p>
                           </div>
                           <div class="homework-item__date">
                              <p class="date-title">Дата</p>
                              <p class="date-value">12.12.22</p>
                           </div>
                           <!-- <a href="#" class="homework-item-link-pass homework-item-link">Посмотреть</a>
                           <a href="#" class="homework-item-link-cancel homework-item-link">Отменено</a>
                           <a href="#" class="homework-item-link-start homework-item-link">Начать</a> -->
                        </div>
                     </div>
                     <a href="#" class="homework-item-link-pass homework-item-link accordion">Посмотреть</a>
                     <div class="panel">
                        <div class="panel-icon">
                           <img src="./image/homework-ico.svg" alt="icon">
                           <p class="name">Урок 1</p>
                           <div class="star-rating-pannel">
                              <select class="star-rating">
                                 <option value="">Виберіть оцінку</option>
                                 <option value="5">Відмінно</option>
                                 <option value="4">Дуже добре</option>
                                 <option value="3">Середнє</option>
                                 <option value="2">Погано</option>
                                 <option value="1">Жахливо</option>
                              </select>
                           </div>
                        </div>
                        <div class="panel-desc">
                           <div class="name-teacher">
                              <p class="name-teacher-title">Назначенное учителем</p>
                              <p class="name-teacher-value">Диана Смолова</p>
                           </div>
                           <div class="homework-date">
                              <div class="homework-date-title">Дата выполнения</div>
                              <div class="homework-date-value">12.12.22</div>
                           </div>
                           <div class="homework-status">
                              <div class="homework-status-title">Статус</div>
                              <div class="homework-status-value">Выполненное</div>
                           </div>
                           <div class="panel-desc-bottom">
                              <p class="panel-desc-bottom-text">
                                 <span>Домашнее задание: </span> прочитать страницу 1 , книга по чтению. Посмотреть
                                 видео.
                              </p>
                              <a href="#" class="panel-desc-bottom-link">Ссылка на видео, книгу и всё что нужно, файл и
                                 тд.</a>
                           </div>
                        </div>
                     </div>
                     <div class="visible-block">
                        <div class="comment">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает.
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem qui nam vitae nulla in velit
                           doloribus magni quisquam provident explicabo minus numquam, asperiores totam quam enim ad
                           iure labore neque? </div>
                     </div>
                  </div>
                  <div class="homework-item pass">
                     <div class="homework-item__inner aoccordion">
                        <div class="homework-item__status"></div>
                        <div class="homework-item__desc">
                           <p class="homework-item__title">
                              Урок 1
                           </p>
                           <p class="homework-item__number">
                              Чтение
                           </p>
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

                        <p class="homework-item__name">
                           Тема 2 (о дизайне)
                        </p>
                        <div class="homework-item__container">
                           <div class="homework-item__long">
                              <p class="long-title">Длительность</p>
                              <p class="long-value">45 минут</p>
                           </div>
                           <div class="homework-item__level">
                              <p class="level-title">Уровень</p>
                              <p class="level-value">Профи</p>
                           </div>
                           <div class="homework-item__time">
                              <p class="time-title">Время</p>
                              <p class="time-value">15:00</p>
                           </div>
                           <div class="homework-item__date">
                              <p class="date-title">Дата</p>
                              <p class="date-value">12.12.22</p>
                           </div>
                           <!-- <a href="#" class="homework-item-link-pass homework-item-link">Посмотреть</a>
                           <a href="#" class="homework-item-link-cancel homework-item-link">Отменено</a>
                           <a href="#" class="homework-item-link-start homework-item-link">Начать</a> -->
                        </div>
                     </div>
                     <a href="#" class="homework-item-link-pass homework-item-link accordion">Посмотреть</a>
                     <div class="panel">
                        <div class="panel-icon">
                           <img src="./image/homework-ico.svg" alt="icon">
                           <p class="name">Урок 1</p>
                           <div class="star-rating-pannel">
                              <select class="star-rating">
                                 <option value="">Виберіть оцінку</option>
                                 <option value="5">Відмінно</option>
                                 <option value="4">Дуже добре</option>
                                 <option value="3">Середнє</option>
                                 <option value="2">Погано</option>
                                 <option value="1">Жахливо</option>
                              </select>
                           </div>
                        </div>
                        <div class="panel-desc">
                           <div class="name-teacher">
                              <p class="name-teacher-title">Назначенное учителем</p>
                              <p class="name-teacher-value">Диана Смолова</p>
                           </div>
                           <div class="homework-date">
                              <div class="homework-date-title">Дата выполнения</div>
                              <div class="homework-date-value">12.12.22</div>
                           </div>
                           <div class="homework-status">
                              <div class="homework-status-title">Статус</div>
                              <div class="homework-status-value">Выполненное</div>
                           </div>
                           <div class="panel-desc-bottom">
                              <p class="panel-desc-bottom-text">
                                 <span>Домашнее задание: </span> прочитать страницу 1 , книга по чтению. Посмотреть
                                 видео.
                              </p>
                              <a href="#" class="panel-desc-bottom-link">Ссылка на видео, книгу и всё что нужно, файл и
                                 тд.</a>
                           </div>
                        </div>
                     </div>
                     <div class="visible-block">
                        <div class="comment">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает.
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem qui nam vitae nulla in velit
                           doloribus magni quisquam provident explicabo minus numquam, asperiores totam quam enim ad
                           iure labore neque? </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </section>
   </main>
 
   <?php include('includes/footer.php'); ?>

   
   <!-- <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script> -->
   <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/v4-shims.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./datepicker/js/datepicker.js"></script>
   <script src="./node_modules/star-rating.js/dist/star-rating.js"></script>
   <script src="./scripts/main.js"></script>
</body>

</html>