<?php
$link = new mysqli("localhost","root","","lingolands");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }


 //validation_check($_SESSION['USER_ID'], DOMAIN_SITE, array(0,1,2,3));
if(isset($_GET['id']) && $_GET['id'] !="")
{
 $levelid=$_GET['id'];
 $all_books=mysqli_query($link,"select * from tbl_books where status =1 and deleted='0' and level_id='".$levelid."'");
}
elseif(isset($_POST['search']) && $_POST['search'] != "")
{
   
 $search = $_POST['search']; 
    $all_books=mysqli_query($link,"select * from tbl_books  where status =1 and deleted='0' and book_title like'%$search%'");
}
else
{
   $all_books=mysqli_query($link,"select * from tbl_books  where status =1 and deleted='0'");
}
 $num=mysqli_num_rows($all_books);
 //include INCLUDES.'frontLoginHeader.php'; 

?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Подборка книг для чтения</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/booАtstrap.css">
   <link rel="stylesheet" href="./datepicker/css/datepicker.min.css">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
   <link rel="stylesheet" href="./scss/style.css">
</head>

<body>
  <?php include('includes/header.php');?>
   <main class="main main__books">
      <section class="books">
         <div class="books__inner">
            <div class="books__top">
               <h2 class="books__title">Подборка книг для чтения</h2>
               <div class="filter-2">
                  <form action="books.php" class="books__search-form" method="post">
                     <div class="books-form-search">
                        <input class="books-form-search-input" type="text" placeholder="Поиск" name="search">
                     </div>


                     <div class="books-form-status">
                        <div class="dropdown" style="position: relative;">
                           <button class="btn btn-secondary dropdown-toggle books-select dropdown-books" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Сложность
                           </button>
                           <ul class="dropdown-menu dropdown-menu-main books-select-list dropdown-books-list">
                              <li>
                              <a href="books.php"> <button type="button" data-filter="all">Show all</button></a>
                              </li>
                              <?php $q=mysqli_query($link,"select level_id,level_name from tbl_books where level_id != 0 group by level_id order by level_id");
										while($row=mysqli_fetch_array($q)){?>
                              <li>
                                <a href="books.php?id=<?php echo $row['level_id']; ?>"><button type="button">  <?php  echo $row['level_name'];?></button></a> 
                              </li>

                              <?php	} ?>
                            
                           
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
                     <button type="button" data-sort="views:desc">Количество просмотров</button>
                     <button type="button" data-sort="reiting:desc">Рейтинг</button>
           
                     <button type="button" data-sort="best:desc">Избранное</button>
                  </div>
                  <div class="mobile">
                     <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle books-select dropdown-menu-btn" type="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           Сортировать
                        </button>
                        <ul class="dropdown-menu dropdown-menu-mobile books-select-list dropdown-menu-sorttt">
                      
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
               <div class="books__content-list" id="books">
           <?php   if($num > 0){
					
                    $i=1; while($bookrec=mysqli_fetch_array($all_books)) {?>
               <div class="books__content-item starter mix" data-pop="10" data-views="500" data-reiting="5" data-best="1">
                     <div class="books-book__img"><a href="book.php?id=<?php echo $bookrec['id']; ?>"><img src="https://www.lingolands.com/admin/assets/uploads/BookImages/<?php echo $bookrec['book_image']; ?>" alt="Book"></a></div>
                     <div class="books-book__section-one">
                        <h5 class="books-book__title"><?= $bookrec['book_title'];?></h5>

                        <div class="books-book__star">
                           <img src="./image/star.svg" alt="star">4.9
                        </div>

                     </div>
                     <div class="books-book__section-two">
                        <p class="books-book__writer"><?= $bookrec['book_author'];?></p>
                        <p class="books-book__views">499</p>
                     </div>
                     <div class="books-book__section-three">
                        <p class="books-book__level-title">Сложность:</p>
                        <p class="books-book__level-value"><?= $bookrec['level_name'];?></p>
                     </div>

                     <a class="books-book__link" href="book.php?id=<?php echo $bookrec['id']; ?>">Читать</a> 
                    </div>

                     <?php $i++; }}else{ echo '<div><h2><span class="text-danger">Sorry No Book found...</span></h2></div>';} ?>

                  <!-- <div class="gap"></div>
                     <div class="gap"></div> -->

               </div>
               <div id="pagination" class="pagination"></div>
            </div>
         </div>
      </section>
   </main>

   <?php include('includes/footer.php');?>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./datepicker/js/datepicker.min.js"></script>
   <script src="./node_modules/mixitup/dist/mixitup.js"></script>
   <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
   <script src="./scripts/jPages.min.js"></script>
   <script src="./node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
   <script>
      if ($(window).width() < 960) {
      //pagination
      var pagination = $('.pagination');
      function setPagination() {
         pagination.jPages({
            containerID: 'books',
            perPage: 2,
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
      var mixer = mixitup('#books', {
         selectors: {
            target: '.books__content-item'
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
            containerID: 'books',
            perPage: 9,
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
      var mixer = mixitup('#books', {
         selectors: {
            target: '.books__content-item'
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