<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Мой профиль</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="./datepicker/css/datepicker.css">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
   <link rel="stylesheet" href="./scss/style.css">
</head>

<body>
 <?php include('includes/header.php'); ?>
   <main class="main main__account">
      <div class="account">
         <div class="account__inner">
            <div class="container">
               <div class="account__content">
                  <div class="account-photo">
                     <img src="./image/person-account.png" alt="person">
                     <div class="account-photo-links">
                        <a class="account__personal-btn" data-fancybox="" data-src="#info">
                           Личная информация
                        </a>
                        <a class="password-btn flowing-scroll" ahref="#password">Изменить пароль</a>
                        <a class="plogs-btn flowing-scroll" ahref="#plogs">Мои платежи</a>
                     </div>
                  </div>
                  <div class="account__info">
                     <div class="account__info-person">
                        <h4 class="account__info-person-name">Привет, Сергей Петров!</h4>
                        <div class="account__info-person-data">
                           <div class="account__info-person-courses">
                              <p>Курсы:</p>
                              <ul>
                                 <li>Урок с учителем</li>
                              </ul>
                           </div>

                           <div class="account__info-person-type">
                              <p>Тип курсов:</p>
                              <ul>
                                 <li>Урок с учителем</li>
                              </ul>
                           </div>
                           <div class="account__info-person-times">
                              <p>Оставшиеся уроки </p>
                              <ul>
                                 <li>22</li>
                              </ul>
                           </div>
                        </div>
                        <div class="account__info-person-interess">
                           <ul>
                              <p>Интересы</p>
                              <li>Разговоры</li>
                              <li>Игры</li>
                              <li>Работа</li>
                           </ul>
                        </div>
                        <div class="account__langs account-langs">
                           <p class="account-langs__title">Изучаем языки</p>
                           <ul class="account-langs__list">
                              <li class="account-langs__list-item">
                                 <p class="account-langs__list-text">Английский</p>
                              </li>
                              <li class="account-langs__list-item">
                                 <p class="account-langs__list-text">Русский</p>
                              </li>
                              <li class="account-langs__list-item">
                                 <p class="account-langs__list-text">Украинский</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="account__info-teacher">
                        <div class="account__info-teacher-desc">
                           <p class="account__info-teacher-desc-title">Ваш учитель: Данила Дасс</p>
                           <p class="account__info-teacher-desc-times">Уроков пройдено всего: <span>10</span></p>
                           <p class="account__info-teacher-desc-times">Пройдено сегодня: <span>1</span></p>
                           <p class="account__info-teacher-desc-times">Пройдено за неделю: <span>5</span></p>
                           <p class="account__info-teacher-desc-level">Ваш уровень English - А1<span>
                                 (elementary)</span></p>
                        </div>
                        <div class="account__info-teacher-photo">
                           <img class="account__info-teacher-photo-img" src="./image/teacher-account.png" alt="teacher">
                           <div class="account__info-teacher-photo-raiting">
                              <img src="./image/Star.svg" alt="star">
                              <p>4.9</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="account__flag">
                     <p class="account__info-title">Язык изучения</p>
                     <div class="account__info-flags">
                        <a href="#" class="account__info-flag flag active">
                           <img src="./image/lang-gb.png" alt="GB" class="account__info-flag-img active">
                        </a>
                        <a href="#" class="account__info-flag flag">
                           <img src="./image/lang-fr.png" alt="FR" class="account__info-flag-img">
                        </a>
                        <a href="#" class="account__info-flag flag">
                           <img src="./image/lang-sp.png" alt="SP" class="account__info-flag-img">
                        </a>
                        <a href="#" class="account__info-flag flag">
                           <img src="./image/lang-it.png" alt="IT" class="account__info-flag-img">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="info" closeButton="inside">
            <div class="info-photo">
               <img src="./image/person-account.png" alt="photo">
               <a href="#">Редактировать</a>
            </div>
            <div class="info-desc">
               <div>
                  <p class="name">Имя:</p>
                  <p class="name-value value">Сергей</p>
                  <p class="sex">Пол:</p>
                  <p class="sex-value value">Мужской</p>
                  <p class="phone">Телефон:</p>
                  <p class="phone-value value">+380989988231</p>
                  <p class="country">Страна:</p>
                  <p class="country-value value">Украина</p>
                  <p class="leng">Родной язык:</p>
                  <p class="leng-value value">English</p>
               </div>
               <div>
                  <p class="lastname">Фамилия</p>
                  <p class="lastname-value value">Петров</p>
                  <p class="dateb">Дата рождения</p>
                  <p class="dateb-value value">11.02.2022</p>
                  <p class="skype">Skype:</p>
                  <p class="skype-value value">SerPetr</p>
                  <p class="city">Город:</p>
                  <p class="city-value value">Киев</p>
                  <p class="lenglearn">Язык обучения:</p>
                  <p class="lenglearn-value value">English</p>
               </div>
            </div>
         </div>
         <section class="password" id="password">
            <div>
               <div class="password__inner">

                  <div class="container">
                     <h4 class="password__title">Изменить пароль</h4>
                  </div>
                  <form action="#" class="password-form">
                     <div class="row">
                        <div class="container">
                           <div class="password-form-old">
                              <input type="text">
                           </div>
                           <div class="password-form-new">
                              <input type="text">
                           </div>
                           <div class="password-form-newrep">
                              <input type="text">
                           </div>
                        </div>
                     </div>
                     <div class="row-2">
                        <div class="container">
                           <label for="">Попробуйте придумать надежный пароль для защиты вашей личной
                              информации.</label>
                           <button>Сохранить новый пароль</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </section>
         <section class="plogs" id="plogs">
            <div class="plogs-top">
               <h4>Мои платежи</h4>
               <div class="filter-9">
                  <form action="#" class="my-lessons__search-form">
                     <div class="my-lessons-form-search">
                        <input class="my-lessons-form-search-input" type="text" placeholder="Поиск">
                     </div>
                     <div class="my-lessons-form-date" id="pppp">
                        <input type="text" data-range="true" id="ppp" data-multiple-dates-separator="-"
                           class="datepicker-here" autocomplete="off" placeholder="Календарь" />
                     </div>
                  </form>
               </div>
            </div>
            <table>
               <tbody>
                  <tr>
                     <td class="before"">&nbsp;</td>
            <td class=" date">Дата</td>
                     <td class="name">Имя студента</td>
                     <td class="times">Номер урока</td>
                     <td class="less">Оставишиися <br>уроки</td>
                     <td class="long">Длительность</td>
                     <td class="pay">Общая сумма</td>
                     <td class="gateway">Gateway</td>
                     <td class="after">&nbsp;</td>
                  </tr>
                  <tr>
                     <td class="before"">&nbsp;</td>
            <td class=" date">11.01.2020</td>
                     <td class="name">Сергей Петров</td>
                     <td class="times">26</td>
                     <td class="less">15</td>
                     <td class="long">2 hours</td>
                     <td class="pay">3500</td>
                     <td class="gateway">Paypal</td>
                     <td class="after">&nbsp;</td>
                  </tr>
                  <tr>
                     <td class="before"">&nbsp;</td>
            <td class=" date">11.01.2020</td>
                     <td class="name">Сергей Петров</td>
                     <td class="times">26</td>
                     <td class="less">15</td>
                     <td class="long">2 hours</td>
                     <td class="pay">3500</td>
                     <td class="gateway">Paypal</td>
                     <td class="after">&nbsp;</td>
                  </tr>
                  <tr>
                     <td class="before"">&nbsp;</td>
            <td class=" date">11.01.2020</td>
                     <td class="name">Сергей Петров</td>
                     <td class="times">26</td>
                     <td class="less">15</td>
                     <td class="long">2 hours</td>
                     <td class="pay">3500</td>
                     <td class="gateway">Paypal</td>
                     <td class="after">&nbsp;</td>
                  </tr>
                  <tr>
                     <td class="before"">&nbsp;</td>
            <td class=" date">11.01.2020</td>
                     <td class="name">Сергей Петров</td>
                     <td class="times">26</td>
                     <td class="less">15</td>
                     <td class="long">2 hours</td>
                     <td class="pay">3500</td>
                     <td class="gateway">Paypal</td>
                     <td class="after">&nbsp;</td>
                  </tr>
                  <tr>
                     <td style="border: 0px;"></td>
                  </tr>
               </tbody>
            </table>
            <table class="table-mobile">
               <tbody>
               <tr >
               <td >Дата</td>
               <td >11.01.2020</td>
               </tr>
               <tr >
               <td >Имя студента</td>
               <td >Сергей Петров</td>
               </tr>
               <tr >
               <td >Номер урока</td>
               <td >26</td>
               </tr>
               <tr>
               <td>Оставишиися <br />уроки</td>
               <td>15</td>
               </tr>
               <tr >
               <td >Длительность</td>
               <td >2 hours</td>
               </tr>
               <tr >
               <td >Общая сумма</td>
               <td >3500</td>
               </tr>
               <tr >
               <td >Gateway</td>
               <td >Paypal</td>
               </tr>
               </tbody>
               </table>
         </section>

      </div>
   </main>
 
   <?php include('includes/footer.php'); ?>

   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
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
         language: 'en',
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
   <script src="./scripts/main.js"></script>
</body>

</html>