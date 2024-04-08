<?php

require_once "db.php";

$stmt = $pdo->query("SELECT * FROM works");
$works = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Мой сайт</title>
  <link rel="stylesheet" href="/static/assets/css/main.css">
  <link rel="stylesheet" href="/static/assets/css/lightgallery.css">
  <link rel="stylesheet" href="/static/assets/css/lg-transitions.css">
</head>
<body>
    <section class="first-screen section-bg">
        <div class="container">
          <div>
            <h1>Веб-разработчик <br> к вашим услугам</h1>
          </div>
          <div>
            <a class="btn btn-bg" href="#">Узнать больше</a>
            <a class="btn btn-outline" href="#">Нанять меня</a>
          </div>
        </div>
        <a class="chevron" href="#">
            <img src="/static/assets/img/chevron.svg" alt="scroll">
         </a>
      </section>
      <section>
        <div class="container">
          <h2>Обо мне</h2>
        <p>
          Вставить краткую автобиографию
        </p>
        <p>
          Перечислить профессиональные знания, умения, навыки
        </p>
      </div>
      </section>
      <section>
        <div class="container">
          <h2>Портфолио</h2>

          <div id="lightgallery" class="gallery">
            <?php foreach ($works as $work): ?>
            <a class="img-wrapper" data-sub-html="<?= $work[
                "name"
            ] ?>" href="<?= $work["file_path"] ?>">
                <img src="<?= $work["file_path"] ?>" />
            </a>
            <?php endforeach; ?>
        </div>

      </section>
      <section class="section-bg">
      <div class="container">
        <div class="d-flex">
          <div class="w-60 pr-4">
              <h2>Давайте работать вместе</h2>
              <p>
                Приглашаю к сотрудничеству! Пишите.
              </p>
          </div>
          <div class="w-40">
            <form action="feedback.php" method="POST">
              <input name="name" required type="text" placeholder="Как к вам обращаться">
              <input name="email" required type="email" placeholder="Ваш email">
              <textarea name="text" required rows="4" placeholder="Сообщение"></textarea>
              <input class="btn btn-bg" type="submit" value="Отправить">
            </form>
          </div>
        </div>
      </div>
   </section>
   <footer>
    <div class="container">
        Copyright &copy; 2024. Все права защищены.
    </div>
  </footer>
  <script src="/static/assets/js/lightgallery.min.js"></script>
  <script>
    lightGallery(document.getElementById('lightgallery'));
  </script>
</body>
</html>
