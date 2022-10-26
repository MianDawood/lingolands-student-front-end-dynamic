<?php 
$link = new mysqli("localhost","root","","lingolands");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }


      $userRole=1;
       $userId = 398;
?>
<header class="header">
      <div class="header__inner">
         <div class="container">
            <div class="header__top header-top">
               <div class="header-top__logo">
                  <a href="./" class="header-top__logo-link">
                     <img class="header-top__logo-img" src="./image/logo.svg" alt="logo">
                  </a>
               </div>
               <div class="header-top__search">
                  <form class="header-top__search-form" action="#">
                     <input class="header-top__search-form-input" type="text" placeholder="Search">
                  </form>
                  <div class="header-top__buy-btn">
                     <a href="./buy-lessons.php">Купить уроки</a>
                  </div>
               </div>
               <div class="header-top__user-nav">
                  <div style="position:relative">
                  <?php
									if($userRole=='2')
									{
									    $new_notification=mysqli_query($link,"select * from tbl_notifications where teacher_id='$userId' and teacher_notify_status ='0'");
									    
									  	$notification=mysqli_query($link,"select * from tbl_notifications where teacher_id='$userId' order by id desc");
									  	
									  		
									}
									elseif($userRole == 1)
								          {
 $new_notification=mysqli_query($link, "select * from tbl_notifications where student_id='$userId' and student_notify_status ='0'");
$notification=mysqli_query($link,"select * from tbl_notifications where student_id='$userId' order by student_notify_status");							           	  }
                            $new_num=mysqli_num_rows($new_notification);
							$num=mysqli_num_rows($notification);
							if($num > 0 ){
								?>

<style> 
  .header-top__notification-btn::after {
   content: '<?php echo $num; ?>';
  background-color: #f2111e;
  border-radius: 50%;
  padding: 1px 5.5px;
  font-weight: 300;
  font-size: 13.8583px;
  line-height: 17px;
  text-align: center;
  color: #ffffff;
  position: absolute;
  top: 70%;
  right: -20%;
}
</style>
                     <a href="#" class="header-top__notification-btn"  data-fancybox="" data-src="#notification">
                       
                     <img src="./image/notification-icon.svg" alt="notification">
                     </a>
                     <div class="popup__notifications popup__notifications-main" id="notification2"
                        style="max-width:500px;">
                        <p class="notifications-title">Уведомления</p>
                      
                       
                        <ol class="notifications-list">
                        <?php $i=0; while($rec=mysqli_fetch_array($notification)) {	?>
                          
                       <?php    if($rec['student_notify_status'] == 0){  ?>
                        <li class="notifications-item">
                              <a href="#"><span style="text-decoration:underline; "><?php echo $rec['student_desc'] ?></span>
</a>
                           </li>

                           <?php	}else { ?>
                              <li class="notifications-item">
                              <a href="#"><span style="font-size: 14px !important;"><?php echo $rec['student_desc'] ?></span>
                           </li>
							<?php	}
								?>
                           <?php $i++; }?>
                           <li class="">
                              <a href="#"><span style="text-align:center; font-size:18px; margin-top:10px ">All notifications</span>
</a>
                           </li>
                        </ol>

                        <?php } ?>
                     </div>
                  </div>
                  <button class="header-top__account-btn header-top-account-btn">
                     <img src="./image/account-icon.svg" alt="account">
                     <div class="header-top-account-btn__content">
                        <a class="header-top-account-btn__content-profile" href="#">
                           Profile
                        </a>
                        <a class="header-top-account-btn__content-log" href="#">
                           Log Out
                        </a>
                     </div>
                  </button>
               </div>
               <div class="header__mob-menu-btn">
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
               <div class="mob-menu">
                  <div class="mob-menu-content">
                     <a href="#" class="mob-menu__notification-btn" data-fancybox="" data-src="#notification">
                        <img src="./image/notification-icon-m.svg" alt="notification">
                     </a>
                     <a href="./account.php" class="mob-menu__account-btn">
                        Мой профиль <img src="./image/account-icon.svg" alt="account">
                     </a>
                  </div>
                  <nav>
                     <ul>
                        <li class="mob-menu-link drop">
                           <div class="mob-menu-link-main accordion" href="#">Уроки</div>
                           <div class="drop-content">
                              <a class="drop-content-link" href="#">Мои уроки</a>
                              <a class="drop-content-link" href="#">Домашнее задание</a>
                           </div>
                        </li>
                        <li class="mob-menu-link"><a class="mob-menu-link-main" href="./buy-lessons.php">Курсы</a></li>
                        <li class="mob-menu-link"><a class="mob-menu-link-main" href="./tv.php">Телеканалы</a></li>
                        <li class="mob-menu-link"><a class="mob-menu-link-main" href="./books.php">Книги</a></li>
                        <li class="mob-menu-link"><a class="mob-menu-link-main" href="./radio.php">Радио</a></li>
                     </ul>
                  </nav>
                  <div class="mob-menu-content-bottom">
                     <a href="#" class="mob-menu__account-btn-l">
                        Выйти из аккаунта <img src="./image/account-icon.svg" alt="account">
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup__notifications" id="notification" style="display:none;max-width:500px;">
            <p class="notifications-title">Уведомления</p>
            <ol class="notifications-list">
               <li class="notifications-item">
                  <a href="./homework.php">Новое домашнее задание уже добавлено!</a>
               </li>
               <li class="notifications-item">
                  <a href="./homework.php">У вас 2 не выполненых домашних задания!</a>
               </li>
               <li class="notifications-item">
                  <a href="./club.php">Сегодня состоиться встреча в разговорном клубе!</a>
               </li>
               </>
         </div>
      </div>
      <div class="header__bottom header-bottom">
         <div class="header-bottom__inner">
            <div class="container">
               <nav class="header__menu">
                  <ul class="header__menu-list">
                     <li class="header__menu-item  header__menu-item-drop">
                        <div href="#" class="header__menu-item-link">
                           Уроки
                        </div>
                        <div class="dropdown-content">
                           <a class="dropdown-content-link" href="./lessons.php">Мои уроки</a>
                           <a class="dropdown-content-link" href="./homework.php">Домашнее задание</a>
                        </div>
                     </li>
                     <li class="header__menu-item">
                        <a href="./buy-lessons.php" class="header__menu-item-link">
                           Курсы
                        </a>
                     </li>
                     <li class="header__menu-item">
                        <a href="./tv.php" class="header__menu-item-link">
                           Телеканалы
                        </a>
                     </li>
                     <li class="header__menu-item">
                        <a href="./books.php" class="header__menu-item-link">
                           Книги
                        </a>
                     </li>
                     <li class="header__menu-item">
                        <a href="./radio.php" class="header__menu-item-link">
                           Радио
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </header>