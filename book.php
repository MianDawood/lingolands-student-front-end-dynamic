<?php
$link = new mysqli("localhost","root","","lingolands");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

  //validation_check($_SESSION['USER_ID'], DOMAIN_SITE, array(0,1,2,3));
//	  $all_books=mysqli_query($link,"select * from tbl_books inner join tbl_bookformats on tbl_books.id=tbl_bookformats.book_id where tbl_books.id='2' and tbl_books.status =1 and tbl_books.deleted='0");
if(isset($_GET['id']) && $_GET['id'] != '')
{
  $id=$_GET['id'];
$all_books=mysqli_query($link,"SELECT * FROM `tbl_books` WHERE status=1 and deleted=0 and id='".$id."'");
$single_book=mysqli_fetch_array($all_books);
  
}

 



?>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Книга</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
   <link rel="stylesheet" href="./css/font-awesome.min.css">
   <link href="./node_modules/star-rating.js/dist/star-rating.css" rel="stylesheet" />
   <link rel="stylesheet" href="./scss/style.css">
</head>

<body>
<?php include('includes/header.php'); ?>
   <main class="main main__book">
      <section class="book">
         <div class="book__inner">
            <div class="book__container container">
               <h2 class="book__title"><?php echo $single_book['book_title']; ?> </h2>
               <p class="book__writer">Author : <?php echo $single_book['book_author']; ?></p>
               <div class="book__content">
                  <div class="book__img"><img src="https://www.lingolands.com/admin/assets/uploads/BookImages/<?php echo $single_book['book_image']; ?>" alt="Book"></div>
                  <div class="book__desc">
                     <div class="book__star">Рейтинг:&nbsp;
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
                     </div>
                     <div class="book__text">
                        <span><?php echo $single_book['book_title']; ?></span> <?php echo $single_book['book_desc']; ?>
                     </div>
                     <div class="book__buttons">
                        <a href="#" class="book__play">Запустить</a>
                        <a href="#" class="book__download-text">Скачать файл</a>
                        <a href="#" class="book__download-audio">Скачать аудио</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<!-- mp3 modal -->
         <div class="modal fade" id="modal-mp3">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span></button>

              </div>
              <div class="modal-body">
        <div class="row">
        	<?php $mp3=mysqli_query($link,"select * from tbl_bookformats where book_id='".$single_book['id']."' and file_format='mp3'");
				 $numm=mysqli_num_rows($mp3);
						if($numm > 0){	
						$i=1;	while($mp3rec=mysqli_fetch_array($mp3)){
				?>
         
           <div class="col-md-6">
  <strong>Audio <?= $i; ?>:</strong> <audio controls>
  <source src="https://www.lingolands.com/admin/assets/uploads/bookmp3/<?php echo $mp3rec['file']; ?>" type="audio/ogg">
  <source src="https://www.lingolands.com/admin/assets/uploads/bookmp3/<?php echo $mp3rec['file']; ?>" type="audio/mpeg">
</audio> 
           	
           </div>
           <?php $i++; } }else { echo '<h4 class="text-center text-danger">Audio is Not Uploaded yet</h4>';} ?>
        	
        </div>
        		</div>
           	  </form>
           </div>
           
          </div>
         </div>
<!-- mp3 modal -->
      </section>
      <section class="recommend">
         <div class="recommend__inner">
            <div class="container">
               <h2 class="recommend__title">Рекомендуем к прочтению</h2>
               <div class="recommend__content-list">
                  <?php 
                  $all_books=mysqli_query($link,"select * from tbl_books where status =1 and deleted='0' and level_id='".$single_book['level_id']."' ORDER BY RAND() LIMIT 3");
                  $i=1; while($bookrec=mysqli_fetch_array($all_books)) 
                  { ?>
                  <div class="recommend__content-item">
                     <div class="recommend-book__img"><a href="book.php?id=<?php echo $bookrec['id']; ?>">
                           <img src="https://www.lingolands.com/admin/assets/uploads/BookImages/<?php echo $bookrec['book_image']; ?>" alt="Book"></div>
                     </a>
                     <div class="recommend-book__section-one">
                        <h5 class="recommend-book__title"><?= $bookrec['book_title'];?></h5>

                        <div class="recommend-book__star"><img src="./image/star.svg" alt="star">4.9</div>
                     </div>
                     <div class="recommend-book__section-two">
                        <p class="recommend-book__writer"><?= $bookrec['book_author'];?></p>
                        <p class="recommend-book__views">499</p>
                     </div>
                     <div class="recommend-book__section-three">
                        <p class="recommend-book__level-title">Сложность:</p>
                        <p class="recommend-book__level-value"><?= $bookrec['level_name'];?></p>
                     </div>
                     <a class="recommend-book__link" href="book.php?id=<?php echo $bookrec['id']; ?>">Читать</a> 

                    
                  </div>
<?php $i++; } ?>
               
                

               </div>
            </div>
         </div>
      </section>
   </main>
 
   <?php include('includes/footer.php'); ?>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./node_modules/star-rating.js/dist/star-rating.js"></script>
   <script src="./scripts/main.js"></script>
</body>

</html>