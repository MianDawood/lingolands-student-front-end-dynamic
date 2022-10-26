<?php $link = new mysqli("localhost","root","","lingolands");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }


 // include_once ('../init.php'); 
//validation_check($_SESSION['USER_ID'], DOMAIN_SITE, array(0,1,2,3));
$where = " WHERE lesson_assign_students.memberId='398'";
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

     $where	.= "  AND DATE(lesson_assign_students.createdOn) BETWEEN    '".date('Y-m-d',strtotime($startDate))."'  AND '".date('Y-m-d',strtotime($endDate))."'  ";
       
  }

if(isset($_POST['ID']) && $_POST['ID'] != "")
  {
   $where	.= " AND lesson_assign_students.status='".$_POST['ID']."' ";

  }
  $sql_qr	=	mysqli_query($link," select lesson_assign_students.memberId, lesson_assign_students.time,lesson_assign_students.createdOn,lesson_assign_students.modifiedOn,lesson_assign_students.status as sts,lessons_details.name,lessons_details.lessonsId,lessons_details.level from lessons_details LEFT JOIN lesson_assign_students on lessons_details.lessonsId=lesson_assign_students.lessonsId".$where);

}
else
{
  $sql_qr	=	mysqli_query($link, "select lesson_assign_students.createdOn,lesson_assign_students.modifiedOn,lesson_assign_students.time,lesson_assign_students.status as sts,lessons_details.name,lessons_details.lessonsId,lessons_details.level from lessons_details LEFT JOIN lesson_assign_students on lessons_details.lessonsId=lesson_assign_students.lessonsId where lesson_assign_students.memberId='398'");
}

$dataArr	=	array();
while($data=mysqli_fetch_array($sql_qr)){
  $dataArr[]= $data;
}
/*echo"<pre>";
print_r($dataArr);
echo"</pre>";*/



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Мои уроки</title>
  <link
     href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
     rel="stylesheet">
  <link rel="stylesheet" href="./datepicker/css/datepicker.css">
  <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
  <link href="./node_modules/star-rating.js/dist/star-rating.css" rel="stylesheet" />
  <link rel="stylesheet" href="./scss/style.css">
</head>

<body>
<?php include('includes/header.php'); ?>
  <main class="main">
     <section class="my-lessons">
        <div class="my-lessons__inner">
           <div class="my-lessons__top">
              <h2 class="my-lessons__title">Мои уроки</h2>
              <div class="filter">
                 <form action="lessons.php" class="my-lessons__search-form" method="post">
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
              <div class="my-lessons-list">
                 <?php 
                 
                       $i=1;
                       foreach($dataArr as $val)
                       {
                          if($val['sts'] == 0 || $val['sts'] == 4 )
                          {
                              continue;
                          } 
?>
<?php 
                          if($val['sts']=='1')
                          {
                          
                          $class="cancel";	

                       
                          }
                          else if($val['sts']=='2')
                          {
                       $class= "pass";
                          
                          }
                          
                             else if($val['sts']=='3')
                          {
                          
                             $class= "start";
                          
                          
                          }
                          ?>

                    
                 <div class="my-lessons-item <?php echo $class; ?>">
                    <div class="my-lessons-item__inner">
                       <div class="my-lessons-item__status"></div>
                       <div class="my-lessons-item__desc">
                          <p class="my-lessons-item__title">
                          <?php echo $val['name']; ?>
                          </p>
                          <p class="my-lessons-item__number">
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
                       <p class="my-lessons-item__name">
                          Тема 2 (о дизайне)
                       </p>
                       <div class="my-lessons-item__container">
                          <div class="my-lessons-item__long">
                             <p class="long-title">Длительность</p>
                             <p class="long-value">45 минут</p>
                          </div>
                          <div class="my-lessons-item__level">
                             <p class="level-title">Уровень</p>
                             <p class="level-value"><?php echo $val['level']; ?></p>
                          </div>
                          <div class="my-lessons-item__time">
                             <p class="time-title">Время</p>
                             <p class="time-value"><?php echo ($val['time']!='')? $val['time'] : '---';  ?></p>
                          </div>
                          <div class="my-lessons-item__date">
                             <p class="date-title">Дата</p>
                             <p class="date-value"><?php echo ($val['sts']=='0')? date('d/M/Y',strtotime($val['createdOn'])): (($val['sts']=='4')? date('d/M/Y',strtotime($val['modifiedOn'])): date('d/M/Y',strtotime($val['createdOn'])) )?></p>
                          </div>
                          <!-- <a href="#" class="my-lessons-item-link-pass my-lessons-item-link">Посмотреть</a>
                          <a href="#" class="my-lessons-item-link-cancel my-lessons-item-link">Отменено</a>
                          <a href="#" class="my-lessons-item-link-start my-lessons-item-link">Начать</a> -->
                       </div>

                    </div>
                    <div class="visible-block">
                       <div class="comment">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает.
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem qui nam vitae nulla in velit
                          doloribus magni quisquam provident explicabo minus numquam, asperiores totam quam enim ad
                          iure labore neque? </div>
                       <div class="visible-block-controls">
                          <p>Домашнее<br>задание</p>
                          <a href="#" class="my-lessons-item-link-go my-lessons-item-link">Перейти</a>
                       </div>
                    </div>
                 </div>

                 <?php 
                       $i++;
                       } 
                    ?>
       
              
                 <!-- <div class="my-lessons-item cancel">
                    <div class="my-lessons-item__inner">
                       <div class="my-lessons-item__status"></div>
                       <div class="my-lessons-item__desc">
                          <p class="my-lessons-item__title">
                             Урок 1
                          </p>
                          <p class="my-lessons-item__number">
                             Аудирование
                          </p>
                       </div>
                       <p class="my-lessons-item__name">
                          Тема 2 (о дизайне)
                       </p>
                       <div class="my-lessons-item__container">
                          <div class="my-lessons-item__long">
                             <p class="long-title">Длительность</p>
                             <p class="long-value">45 минут</p>
                          </div>
                          <div class="my-lessons-item__level">
                             <p class="level-title">Уровень</p>
                             <p class="level-value">Профи</p>
                          </div>
                          <div class="my-lessons-item__time">
                             <p class="time-title">Время</p>
                             <p class="time-value">15:00</p>
                          </div>
                          <div class="my-lessons-item__date">
                             <p class="date-title">Дата</p>
                             <p class="date-value">12.12.22</p>
                          </div>
                          <a href="#" class="my-lessons-item-link-pass my-lessons-item-link">Посмотреть</a>
                          <a href="#" class="my-lessons-item-link-cancel my-lessons-item-link">Отменено</a>
                          <a href="#" class="my-lessons-item-link-start my-lessons-item-link">Начать</a>
                       </div>
                    </div>
                 </div>
                 <div class="my-lessons-item start">
                    <div class="my-lessons-item__inner">
                       <div class="my-lessons-item__status"></div>
                       <div class="my-lessons-item__desc">
                          <p class="my-lessons-item__title">
                             Урок 1
                          </p>
                          <p class="my-lessons-item__number">
                             Написание
                          </p>
                       </div>
                       <p class="my-lessons-item__name">
                          Тема 2 (о дизайне)
                       </p>
                       <div class="my-lessons-item__container">
                          <div class="my-lessons-item__long">
                             <p class="long-title">Длительность</p>
                             <p class="long-value">45 минут</p>
                          </div>
                          <div class="my-lessons-item__level">
                             <p class="level-title">Уровень</p>
                             <p class="level-value">Профи</p>
                          </div>
                          <div class="my-lessons-item__time">
                             <p class="time-title">Время</p>
                             <p class="time-value">15:00</p>
                          </div>
                          <div class="my-lessons-item__date">
                             <p class="date-title">Дата</p>
                             <p class="date-value">12.12.22</p>
                          </div>
                          <a href="#" class="my-lessons-item-link-pass my-lessons-item-link">Посмотреть</a>
                          <a href="#" class="my-lessons-item-link-cancel my-lessons-item-link">Отменено</a>
                          <a href="#" class="my-lessons-item-link-start my-lessons-item-link">Начать</a>
                       </div>
                    </div>
                 </div> -->
              </div>

           </div>
        </div>
     </section>
  </main>
 
  <?php include('includes/footer.php'); ?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./datepicker/js/datepicker.js"></script>
  <script>
     //
     $('#ppp').datepicker({
        // Передаем функцию, которая добавляет 11 числу каждого месяца класс 'my-class'
        // и делает их невозможными к выбору.
        onShow: function () {
           var r = document.getElementById("pppp");
           r.classList.add('active');
        },
        onHide: function () {
           var r = document.getElementById("pppp");
           r.classList.remove('active');
        }
     })
     $('#ppp').datepicker({
        language: 'en'
     })
        ; (function ($) {
           $.fn.datepicker.language['en'] = {
              days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
              daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
              daysMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
              months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
              monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
              today: 'Today',
              clear: 'Clear',
              dateFormat: 'mm/dd/yyyy',
              timeFormat: 'hh:ii aa',
              firstDay: 1
           };
        })(jQuery);
  </script>
  <script src="./node_modules/star-rating.js/dist/star-rating.js"></script>
  <script src="./scripts/main.js"></script>
</body>

</html>