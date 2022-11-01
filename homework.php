<?php  

$link = new mysqli("localhost","root","","lingolands");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

//include_once ('init.php'); 
//validation_check($_SESSION['USER_ID'], DOMAIN_SITE, array(0,1,2,3));

//$userId			=	$_SESSION['USER_ID'];
$USERID = 399;
$current_date	=	date('Y-m-d h:i:s');
 $where = " WHERE lesson_assign_students.memberId='$USERID'"; 
if(isset($_POST['searchSubmit'])) {
	//$where = " WHERE sl.memberId='".$_SESSION['USER_ID']."'";
 
  if(isset($_POST['name']) && $_POST['name'] != "")
  {
     $where	.= " AND lessons_details.name LIKE '%".$_POST['name']."%' ";
  }
  
  if(isset($_POST['startDate']) && $_POST['startDate'] != "")
  {
    $date =  explode('-',$_POST['startDate']);
    $startDate = $date[0];
    $endDate = $date[1];
    if(empty($endDate))
    {
      $endDate = $date[0];
    }

     $where	.= "AND DATE(lesson_assign_students.createdOn) BETWEEN    '".date('Y-m-d',strtotime($startDate))."'  AND '".date('Y-m-d',strtotime($endDate))."'  ";
       
  }

if(isset($_POST['ID']) && $_POST['ID'] != "")
  {
   $where	.= " AND lesson_assign_students.status='".$_POST['ID']."' ";

  }
			$sql_qr = mysqli_query($link," select lesson_assign_students.memberId, lesson_assign_students.time,lesson_assign_students.createdOn,lesson_assign_students.modifiedOn,lesson_assign_students.status as sts,lessons_details.name,lessons_details.lessonsId,lessons_details.level from lessons_details LEFT JOIN lesson_assign_students on lessons_details.lessonsId=lesson_assign_students.lessonsId".$where);
 
}
else
{
	$sql_qr	=	mysqli_query($link, "select lesson_assign_students.createdOn,lesson_assign_students.modifiedOn,lesson_assign_students.time,lesson_assign_students.status as sts,lessons_details.name,lessons_details.lessonsId,lessons_details.level from lessons_details LEFT JOIN lesson_assign_students on lessons_details.lessonsId=lesson_assign_students.lessonsId where lesson_assign_students.memberId='".$USERID."'");
}
	$dataArr	=	array();
	while($data=mysqli_fetch_array($sql_qr)){
		$dataArr[]= $data;
	}
	// echo"<pre>";
	// print_r($dataArr);
	// echo"</pre>";

?>


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
               <form action="homework.php" class="my-lessons__search-form" method="post">
                    <div class="my-lessons-form-search">
                       <input class="my-lessons-form-search-input" type="text" placeholder="Поиск" name="name">
                    </div>
                    <div class="my-lessons-form-date" id="pppp">
                       <input type="text" data-range="true" id="ppp" data-multiple-dates-separator="-"
                          class="datepicker-here" autocomplete="off" placeholder="Календарь" name="startDate" />
                    </div>
                    <div class="my-lessons-form-status">
                       <div class="custom-select my-lessons-form-status-input">
                          <select name="ID">
                             <option value="">Активные</option>
                             <option value="1">Отменённые</option>
                             <option value="2">Пропущенные</option>
                             <option value="3">Запланированные</option>
                          </select>
                       </div>
                    </div>
                 <input type="submit" value="Filter" name="searchSubmit" class="tv-tvi__link">
                 </form>
               </div>
            </div>
            <div class="container">
               <div class="homework-list">
         

               <?php
              
							  $c1=1;
							  foreach($dataArr as $k=>$val)
							  {
									if($_POST['startDate']!='' && $_POST['endDate']!='')
									{
										$sql_hom	= mysqli_query($link," select shw.homeworkstatus,shw.createdOn,shw.teacherId,hd.content from homework_assign_students shw LEFT JOIN homework_details hd on shw.homeworksId=hd.homeworksId where shw.lessonsId='".$val['lessonsId']."' and shw.memberId='".$USERID."' and  hd.languageId='1' AND DATE(shw.createdOn) between '".date('Y-m-d',strtotime($_POST['startDate']))."' AND '".date('Y-m-d',strtotime($_POST['endDate']))."' ");
										
									}
									else{
									$sql_hom	= mysqli_query($link," select shw.homeworkstatus,shw.createdOn,shw.teacherId,hd.content from homework_assign_students shw LEFT JOIN homework_details hd on shw.homeworksId=hd.homeworksId where shw.lessonsId='".$val['lessonsId']."' and shw.memberId='".$USERID."' and  hd.languageId='1'"); 
									}
                                                                        
					?>
                  <div class="homework-item pass">
                     <div class="homework-item__inner aoccordion">
                        <div class="homework-item__status"></div>
                        <div class="homework-item__desc">
                           <p class="homework-item__title">
                             <?php echo  $val['name']; ?>
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

                        <!-- <p class="homework-item__name">
                           Тема 2 (о дизайне)
                        </p> -->
                        <div class="homework-item__container">
                           <div class="homework-item__long">
                              <p class="long-title">Длительность</p>
                              <p class="long-value"><?php echo ($val['time']!='')? $val['time'] : '---';  ?></p>
                           </div>
                           <div class="homework-item__level">
                              <p class="level-title">Уровень</p>
                              <p class="level-value"><?php echo $val['level']; ?></p>
                           </div>
                           <div class="homework-item__time">
                              <p class="time-title">Время</p>
                              <p class="time-value"><?php echo ($val['time']!='')? $val['time'] : '---';  ?></p>
                           </div>
                           <div class="homework-item__date">
                              <p class="date-title">Дата</p>
                              <p class="date-value"><?php echo ($val['sts']=='0')? date('d/M/Y',strtotime($val['createdOn'])): (($val['sts']=='4')? date('d/M/Y',strtotime($val['modifiedOn'])): date('d/M/Y',strtotime($val['createdOn'])) )?></p>
                           </div>
                           <!-- <a href="#" class="homework-item-link-pass homework-item-link">Посмотреть</a>
                           <a href="#" class="homework-item-link-cancel homework-item-link">Отменено</a>
                           <a href="#" class="homework-item-link-start homework-item-link">Начать</a> -->
                        </div>
                     </div>
                     <a href="#" class="homework-item-link-pass homework-item-link accordion"><?php echo $val['name'] ;?></a>
                     <?php 
								while($row_hom=mysqli_fetch_array($sql_hom))
								{
									$teacher_qr	=	mysqli_query($link ," select firstName,lastName from members where id='".$row_hom['teacherId']."'");
									
									$teachername	=	mysqli_fetch_array($teacher_qr);
								?>
                        
                     <div class="panel">
                        <div class="panel-icon">
                           <img src="./image/homework-ico.svg" alt="icon">
                           <p class="name"><?php echo $row_hom['content'] ;?></p>
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
                              <p class="name-teacher-value"><?php echo $teachername['firstName'].' '.$teachername['lastName'];?></p>
                           </div>
                           <div class="homework-date">
                              <div class="homework-date-title">Дата выполнения</div>
                              <div class="homework-date-value"><?php echo date('d/M/Y',strtotime($row_hom['createdOn']));?></div>
                           </div>
                           <div class="homework-status">
                              <div class="homework-status-title">Статус</div>
                              <div class="homework-status-value">	<?php echo ($row_hom['homeworkstatus']==1) ?'Completed':(($row_hom['homeworkstatus']==2)? 'Uncompleted' : '--')   ?></div>
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
                    
                     <?php  $i++; } ?>
                     
                     <div class="visible-block">
                        <div class="comment">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает.
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem qui nam vitae nulla in velit
                           doloribus magni quisquam provident explicabo minus numquam, asperiores totam quam enim ad
                           iure labore neque? 
                        </div>
                     </div>
                  </div>
                 <?php } ?>


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