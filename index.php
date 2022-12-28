<?php

$mi_array = array(
  "nombre" => "Gonzalo",
  "apellido" => "Ramirez",
  "edad" => 27,
);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reto PHP Platzi</title>

  <link rel="stylesheet" href="src/css/normalize.css">
  <link rel="stylesheet" href="src/css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;900&display=swap" rel="stylesheet">

  <script defer src="src/js/index.js"></script>
</head>

<body class="body">

  <main class="main">

    <form class="form" id="form">

      <h1 class="form__title">Form Contact</h1>
      <p class="form__p">¡Send me a message!</p>

      <input class="form__input form__input--name" type="text" name="name" id="" placeholder="Your name">

      <input class="form__input form__input--email" type="text" name="email" id="" placeholder="Your e-mail">

      <textarea class="form__input form__input--message" name="message" rows="6" cols="50" placeholder="Write your message here"></textarea>

      <div class="form__btn btn">
        <div class="btn__box">

          <span class="btn__label">Submit</span>

          <div class="btn__loader">
            <div class="btn__dot btn__dot--1"></div>
            <div class="btn__dot btn__dot--2"></div>
            <div class="btn__dot btn__dot--3"></div>
          </div>

        </div>
      </div>

    </form>

  </main>

</body>

</html>