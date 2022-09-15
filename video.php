<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Подброрка видео для обучения</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
   <link rel="stylesheet" href="./datepicker/css/datepicker.css">
   <link rel="stylesheet" href="./datepicker/css/datepicker.min.css">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="./scss/style.css">
</head>

<body>
  
<?php include('includes/header.php'); ?>

   <main class="main main__video">
      <section class="video">
         <div class="video__inner">
            <div class="video__top">
               <h2 class="video__title-t-t">Подборка видеокурсов для обучения</h2>
               <div class="filter-3">
                  <div class="video__search-form">
                     <form action="#" class="video-form-search">
                        <input class="video-form-search-input" type="text" placeholder="Поиск">
                        <button class="video-form-search-button">Поиск</button>
                     </form>


                     <div class="video-form-lang">
                        <div class="dropdown">
                           <button class="btn btn-secondary dropdown-toggle video-select" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Язык
                           </button>
                           <ul class="dropdown-menu dropdown-menu-main video-select-list">
                              <li>
                                 <button type="button" data-filter="all">Show all</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".english">English</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".spanish">Spanish</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".french">French</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".italian">Italian</button>
                              </li>
                           </ul>
                        </div>

                     </div>
                     <div class="video-form-level">
                        <div class="dropdown">
                           <button class="btn btn-secondary dropdown-toggle video-select" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Сложность
                           </button>
                           <ul class="dropdown-menu dropdown-menu-main video-select-list">
                              <li>
                                 <button type="button" data-filter="all">Show all</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".english">English</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".spanish">Spanish</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".french">French</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".italian">Italian</button>
                              </li>
                           </ul>
                        </div>

                     </div>
                     <div class="video-form-topic">
                        <div class="dropdown">
                           <button class="btn btn-secondary dropdown-toggle video-select" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Тема видео
                           </button>
                           <ul class="dropdown-menu dropdown-menu-main video-select-list">
                              <li>
                                 <button type="button" data-filter="all">Show all</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".english">English</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".spanish">Spanish</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".french">French</button>
                              </li>
                              <li>
                                 <button type="button" data-filter=".italian">Italian</button>
                              </li>
                           </ul>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div class="sort">
               <div class="sort-container">
                  <h4>Фильтр</h4>
                  <div class="controls">
                     <!-- <button type="button" data-sort="pop:asc">Sort by pop (low to high)</button> -->
                     <!-- <button type="button" data-sort="views:asc">Sort by v (A-Z)</button> -->
                     <button type="button" data-sort="views:desc">Количество просмотров</button>
                     <button type="button" data-sort="reiting:desc">Рейтинг</button>
                     <button type="button" data-sort="best:desc">Избранное</button>
                  </div>
                  <div class="mobile">
                     <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle video-select" type="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           Сортировать
                        </button>
                        <ul class="dropdown-menu dropdown-menu-mobile video-select-list">
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
            <div class="container">
               <div class="video__content-list" id="video">
                  <div class="video__content-item english mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>       
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item spanish mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                   
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item french mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                    
                 
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                   
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item italian mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                    
                  
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                   
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item english mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                    
                    
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                  
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item spanish mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                   
                    
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                    
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item french mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                   
                  
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                   
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item italian mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                    
                   
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                    
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item english mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                   
                   
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                    
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item spanish mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                   
                  
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                 
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item french mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                   
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                    
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item italian mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                    
                  
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                   
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item english mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                     
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                   
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item spanish mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                    
                 
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                    
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item french mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
                    
                    
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                    
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <div class="video__content-item italian mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="video-videoi__img"><a href="#"><img src="./image/video-img.jpg" alt="videoi"></a></div>
                     <div class="video-videoi__section-one">
                        <h5 class="video-videoi__title">Euronews English Live</h5>
                        <div class="video-videoi__star"></div>
                     </div>
                     <div class="video-videoi__section-two">
                        <p class="video-videoi__writer">J. M. Barrie</p>
                        <p class="video-videoi__views2"></p>
                     </div>
               
                  
                     <div class="star__ratings">
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
                        <p>
                           Рейтинг
                        </p>
                     </div>
                    
                     <div class="video-videoi__section-three">
                        <p class="video-videoi__level-title">Сложность:</p>
                        <p class="video-videoi__level-value">Начальный</p>
                     </div>
                     <a class="video-videoi__link" href="#">Смотреть</a>
                  </div>
                  <!-- <div class="gap"></div>
                     <div class="gap"></div> -->

               </div>
               <div id="pagination" class="pagination"></div>
            </div>
         </div>
      </section>
      <section class="recommendation">
         <div class="recommendation">
            <div class="container">
               <h2>Рекомендуем посмотреть</h2>
               <div class="recommendation__video-1">
                  <div class="img-1-2">
                     <img class="img-1" src="./image/rec-img.jpg" alt="recommendation">
                     <div class="img-2">

                        <img class="img-2" src="./image/rec-1-img.png" alt="recommendation">
                     </div>
                  </div>
                  <div class="desc">
                     <p>
                        Посмотрите последний выпуск новостей. Эта практика позволяет хорошо усваивать иностранные языки
                        на слух.
                     </p>
                     <a href="#">Смотреть</a>
                  </div>
               </div>
               <div class="recommendation__video-2">
                  <div class="img-1-2">
                     <img class="img-1" src="./image/rec-img.jpg" alt="recommendation">
                     <div class="img-2">

                        <img class="img-2" src="./image/rec-1-img.png" alt="recommendation">
                     </div>
                  </div>
                  <div class="desc">
                     <p>
                        Посмотрите последний выпуск новостей. Эта практика позволяет хорошо усваивать иностранные языки
                        на слух.
                     </p>
                     <a href="#">Смотреть</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
   
 <?php include('includes/footer.php'); ?>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./datepicker/js/datepicker.min.js"></script>
   <script src="./node_modules/mixitup/dist/mixitup.js"></script>
   <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
   <script src="./node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
   <script src="./scripts/jPages.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link href="./node_modules/star-rating.js/dist/star-rating.css" rel="stylesheet" />
   <script>
      if ($(window).width() < 960) {
         //pagination
         var pagination = $('.pagination');
         function setPagination() {
            var d = $(window).width();
            pagination.jPages({
               containerID: 'video',
               perPage: 3,
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
         var mixer = mixitup('#video', {
            selectors: {
               target: '.video__content-item'
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
      else {
         //pagination
         var pagination = $('.pagination');
         function setPagination() {
            var d = $(window).width();
            pagination.jPages({
               containerID: 'video',
               perPage: 16,
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
         var mixer = mixitup('#video', {
            selectors: {
               target: '.video__content-item'
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
   <script src="./node_modules/star-rating.js/dist/star-rating.js"></script>
   <script src="./scripts/main.js"></script>
</body>

</html>