<?php  
	 $link = new mysqli("localhost","root","","lingolands");

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

	//validation_check($_SESSION['USER_ID'], DOMAIN_SITE, array(0,1,2,3));
	$where = '';
	if(isset($_POST['searchSubmit'])) {
		if($_POST['language']!=''){
			$where.= "and youtube_video.language='".$_POST['language']."'";
		}
		
	}
	else
	{
		$where = '';
		
	}
	
	$sql_qr 		=	mysqli_query($link,"select * from  youtube_video LEFT JOIN  youtubevideo_details on youtube_video.id=youtubevideo_details.videoId where youtube_video.deleted=0 and youtube_video.teacherVideo=0 ".$where." ");
	$numVideo=mysqli_num_rows($sql_qr);
	
	$countrysql	=	mysqli_query($link, "select youtube_video.language from youtube_video  LEFT JOIN  youtubevideo_details on youtube_video.id=youtubevideo_details.videoId where youtube_video.deleted=0 and youtube_video.teacherVideo=0  group by language");
	
?>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Лучшие ТВ каналы для обучения</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
   <link rel="stylesheet" href="./datepicker/css/datepicker.min.css">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
   <link href="./node_modules/star-rating.js/dist/star-rating.css" rel="stylesheet" />
   <link rel="stylesheet" href="./scss/style.css">
</head>

<body>

<?php include('includes/header.php'); ?>

   <main class="main main__tv">


      <section class="tv">
         <div class="tv__inner">
            <div class="tv__top">
               <h2 class="tv__title">ТВ каналы для обучения</h2>
               <div class="filter-2">
                  <form action="#" class="tv__search-form">
                     <div class="tv-form-search">
                        <input class="tv-form-search-input" type="text" placeholder="Поиск">
                     </div>


                     <div class="tv-form-status">
                        <div class="dropdown">
                           <button class="btn btn-secondary dropdown-toggle tv-select" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Сложность
                           </button>
                           <ul class="dropdown-menu dropdown-menu-main tv-select-list">
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
                  </form>
               </div>
            </div>
            <div class="sort">
               <div class="sort-container">
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
                        <button class="btn btn-secondary dropdown-toggle tv-select" type="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           Сортировать
                        </button>
                        <ul class="dropdown-menu dropdown-menu-mobile tv-select-list">
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
               <div class="tv__content-list" id="tv">
                     <?php
										while($row_webnr=mysqli_fetch_array($sql_qr)){
											$sql	=	mysqli_query($link, "select * from countries where id='".$row_webnr['countryId']."' ");
											$fetch	=	mysqli_fetch_array($sql);
											$C_Name	=	$fetch['name'];
											
											
											?>
                  <div class="tv__content-item english mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><iframe class="video js-video" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Youtube video player" id="widget2" data-gtm-yt-inspected-637624_403="true" src="<?php echo $row_webnr['youtube'];?>?fs=1&amp;cc_load_policy=1&amp;autoplay=0&amp;controls=1&amp;modestbranding=1&amp;rel=1&amp;showInfo=1&amp;wmode=opaque&amp;aiv_load_policy=3&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.englishdom.com&amp;widgetid=1" frameborder="0" height="270"></iframe></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title"><?php echo $row_webnr['title'];?></h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer"><?php echo $C_Name;?></p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value"><?php echo $row_webnr['language'];?></p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                   
              
                  </div>

                  <?php $i++; } ?>
                  <div class="tv__content-item spanish mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item french mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item italian mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item english mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item spanish mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item french mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item italian mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item english mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item spanish mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item french mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item italian mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item english mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item spanish mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item french mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                  <div class="tv__content-item italian mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div class="tv-tvi__img"><a href="#"><img src="./image/tv-img.jpg" alt="tvi"></a></div>
                     <div class="tv-tvi__section-one">
                        <h5 class="tv-tvi__title">Euronews English Live</h5>
                        <div class="tv-tvi__star"></div>
                     </div>
                     <div class="tv-tvi__section-two">
                        <p class="tv-tvi__writer">J. M. Barrie</p>
                        <p class="tv-tvi__views2"></p>
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
                     <div class="tv-tvi__section-three">
                        <p class="tv-tvi__level-title">Сложность:</p>
                        <p class="tv-tvi__level-value">Начальный</p>
                     </div>
                     <a class="tv-tvi__link" href="#">Смотреть</a>
                  </div>
                                    <!-- <div class="gap"></div>
                     <div class="gap"></div> -->

               </div>
               <div id="pagination" class="pagination"></div>
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
   <script src="./node_modules/star-rating.js/dist/star-rating.js"></script>
   <script>
      if ($(window).width() < 960) {
         //pagination
         var pagination = $('.pagination');
         function setPagination() {
            var d = $(window).width();
            pagination.jPages({
               containerID: 'tv',
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
         var mixer = mixitup('#tv', {
            selectors: {
               target: '.tv__content-item'
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
               containerID: 'tv',
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
         var mixer = mixitup('#tv', {
            selectors: {
               target: '.tv__content-item'
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
   <script src="./scripts/main.js"></script>
</body>

</html>