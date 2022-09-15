<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Результаты тестирования</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet">
      <link rel="stylesheet" href="./node_modules/@fancyapps/ui/dist/fancybox.css">
   <link rel="stylesheet" href="./css/style.css">
</head>

<body style="background: linear-gradient(0deg, rgba(255, 255, 255, 0.62), rgba(255, 255, 255, 0.62)),
linear-gradient(259.98deg, rgba(67, 2, 204, 0.82) 2.15%, rgba(255, 94, 94, 0.29) 54.9%, #ffffff 95.91%);">
  <?php include('includes/header.php'); ?>

   <main class="main tests-results">
      <div class="main__inner">
         <h3 class="tests-results-title">Результаты пройденого теста</h3>
         <div class="tests-results-results">
            <p>Правильных ответов 15/20</p>
         </div>
         <div class="container container-results">
            <form action="#" class="tests-results-form">
               <label name="question" class="question">Вопрос</label>
               <label name="progress" class="progress">1/20</label>
               <label class="tests-results-container">
                  <input type="radio" style="display: none;" name="answer" id="1" class="answer-radio">
                  <span class="checkmark">A) answer</span>
               </label>
               <label class="tests-results-container good">
                  <input type="radio" style="display: none;" name="answer" id="2" class="answer-radio">
                  <span class="checkmark">B) answer</span>
               </label>
               <label class="tests-results-container bad" for="3">
                  <input type="radio" style="display: none;" name="answer" id="3" class="answer-radio">
                  <span class="checkmark">C) answer</span>
               </label>
               <label class="tests-results-container" for="4">
                  <input type="radio" style="display: none;" name="answer" id="4" class="answer-radio">
                  <span class="checkmark">D) answer</span>
               </label>
               <button class="tests-results-btn">Следующий</button>
            </form>
         </div>
      </div>
   </main>

 <?php include('includes/footer.php'); ?>

 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="./scripts/main.js"></script>
</body>

</html>