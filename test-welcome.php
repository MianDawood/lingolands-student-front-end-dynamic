<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Начать тест</title>
   <link
   href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
   rel="stylesheet">
   <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
<link rel="stylesheet" href="./scss/style.css">
</head>
<body style="background: linear-gradient(0deg, rgba(255, 255, 255, 0.62), rgba(255, 255, 255, 0.62)),
linear-gradient(259.98deg, rgba(67, 2, 204, 0.82) 2.15%, rgba(255, 94, 94, 0.29) 54.9%, #ffffff 95.91%);">
 <?php include('includes/header.php'); ?>


   <main class="main test-welcome">
      <div class="main__inner">
         <div class="container">
            <h3 class="test-welcome-title">Пройдите тест и узнайте уровень владения иностранным языком</h3>
            <div class="banner__flags test-welcome">
               <a href="#" class="banner__flag flag active">
                  <img src="./image/lang-gb.png" alt="GB" class="banner__flag-img active">
               </a>
               <a href="#" class="banner__flag flag">
                  <img src="./image/lang-fr.png" alt="FR" class="banner__flag-img">
               </a>
               <a href="#" class="banner__flag flag">
                  <img src="./image/lang-sp.png" alt="SP" class="banner__flag-img">
               </a>
               <a href="#" class="banner__flag flag">
                  <img src="./image/lang-it.png" alt="IT" class="banner__flag-img">
               </a>
            </div>
            <p class="test-welcome-text">Пробное тестирование</p>
            <p class="test-welcome-desc">Примерное время прохождения теста 30 минут</p>
            <a class="test-welcome-btn"href="#">Начать тест</a>
         </div>
      </div>
   </main>
 
   <?php include('includes/footer.php'); ?>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./scripts/main.js"></script>
</body>
</html>