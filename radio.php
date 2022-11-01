<?php  
	 $link = new mysqli("localhost","root","","lingolands");

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      if(isset($_POST['searchSubmit'])) {
         if($_POST['countryId']!=''){
            $where = "and w.countryId='".$_POST['countryId']."'";
            $sql	=	mysqli_query($link, "select * from countries where id='".$_POST['countryId']."' ");
            $fetch	=	mysqli_fetch_array($sql);
            $C_Name	=	'Internet radio stations from '.$fetch['name'];
         }
         else
         {
            $where = '';
            $C_Name	='Internet radio stations from all countries';
         }
      }
      else
      {
         $where = '';
         $C_Name	='Internet radio stations from all countries';
      }
      $sql_qr 		=	mysqli_query($link,	" select w.id wid,w.image,w.countryId,w.status,w.deleted,wd.* from radio_station w LEFT JOIN  radio_station_details wd on w.id=wd.radio_stationId where w.deleted=0 and wd.languageId='1' ".$where." ");
      $numRadio=mysqli_num_rows($sql_qr);
      ?>

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
               <?php
												$i=1;
												while($row_webnr=mysqli_fetch_array($sql_qr)){
											   if(!empty($row_webnr)){
                                          
                                          
                                          ?>
              


                  <div class="radio__content-item austria mix" data-pop="10" data-views="500" data-reiting="5"
                     data-best="1">
                     <div>
                        <div class="radio-radioi__img"><a href="#"><img src="<?php  echo 'http://lingolands.com/admin/assets/uploads/radio_station/'.$row_webnr['image']  ;?>" alt="radioi"></a></div>
                        <div class="radio-radioi__section-one">
                           <h5 class="radio-radioi__title"><?php echo $row_webnr['title'];?></h5>
                           <div class="radio-radioi__star"></div>
                        </div>
                     </div>
                     <div>
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
                           <!-- <a href="#" class="radio-radioi__link"> -->
                              <img src="./image/radio-start.svg" alt="play" onclick="goradio('http://schema.org/BroadcastFrequencySpecification', 'ic', 'wksu1.128.mp3', 'WKSU 89.87')">
                           <!-- </a> -->
                        </div>
                     </div>

                  </div>
                  <?php
								$i++;}}?>
                 
                 
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


<script type='text/javascript'>

            $(document).ready(function(){

                $('.radioinfo').click(function(){
                    $(document.body).css('padding-right','0px');
                    var radioid = $(this).data('id');

                    // AJAX request
                    $.ajax({
                        url: 'playradio.php',
                        type: 'post',
						data: {radioid: radioid},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.modal-body').html(response); 

                            // Display Modal
                            $('#modal-radio').modal('show'); 
                        }
                    });
					
					
                });
				$('#modal-radio').on('hide.bs.modal', function () { //Change #myModal with your modal id
					$(document.body).css('padding-right','0px');
				  $('audio').each(function(){
					this.pause(); // Stop playing
					this.currentTime = 0; // Reset time
				  }); 
				})
				
				    
				
            });
            </script>
   <script src="./scripts/custom-player.js"></script>
   <script src="./scripts/main.js"></script>
</body>

</html>