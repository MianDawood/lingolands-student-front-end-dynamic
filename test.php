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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php include('includes/header.php'); ?>

   <div id="full-stars-example">
      <div class="rating-group">
         <input class="rating__input rating__input--none" name="rating" id="rating-none" value="0" type="radio">
         <label aria-label="No rating" class="rating__label" for="rating-none"><i
               class="rating__icon rating__icon--none fa fa-ban"></i></label>
         <label aria-label="1 star" class="rating__label" for="rating-1"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">
         <label aria-label="2 stars" class="rating__label" for="rating-2"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
         <label aria-label="3 stars" class="rating__label" for="rating-3"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" checked>
         <label aria-label="4 stars" class="rating__label" for="rating-4"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
         <label aria-label="5 stars" class="rating__label" for="rating-5"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
      </div>
      <p class="desc" style="margin-bottom: 2rem; font-family: sans-serif; font-size:0.9rem">Full stars<br />'No rating'
         option</p>
   </div>


   <div id="full-stars-example-two">
      <div class="rating-group">
         <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0"
            type="radio">
         <label aria-label="1 star" class="rating__label" for="rating3-1"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
         <label aria-label="2 stars" class="rating__label" for="rating3-2"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
         <label aria-label="3 stars" class="rating__label" for="rating3-3"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
         <label aria-label="4 stars" class="rating__label" for="rating3-4"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
         <label aria-label="5 stars" class="rating__label" for="rating3-5"><i
               class="rating__icon rating__icon--star fa fa-star"></i></label>
         <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
      </div>
      <p class="desc" style="font-family: sans-serif; font-size:0.9rem">Full stars<br />
         Must select a star value
      </p>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./node_modules/@fancyapps/ui/dist/fancybox.umd.js"></script>
   <script src="./datepicker/js/datepicker.js"></script>
   <!-- <script>
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
   </script> -->
   <script src="./scripts/main.js"></script>
</body>

</html>