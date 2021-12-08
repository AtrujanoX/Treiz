<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  <link href="css/colores.css" rel="stylesheet">
  <link href="../css/colores.css" rel="stylesheet">
<title>Treiz</title>
  <style>
    .titulo {
      font-family: 'Roboto', sans-serif;
    }

    .centered1 {
      position: fixed;
      top: 50%;
      left: 50%;
      /* bring your own prefixes */
      transform: translate(-50%, -50%);
      width: 120px;
      height: 120px;
      background: rgba(255, 255, 255, 1);
      border-radius: 100px;
      z-index: 100;
    }

    .centered2 {
      position: fixed;
      top: 50%;
      left: 50%;
      /* bring your own prefixes */
      transform: translate(-50%, -50%);
      width: 150px;
      height: 150px;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 100px;
      z-index: 80;
    }

    .centered3 {
      position: fixed;
      top: 50%;
      left: 50%;
      /* bring your own prefixes */
      transform: translate(-50%, -50%);
      width: 170px;
      height: 170px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 100px;
      z-index: 60;
    }

    .centered4 {
      position: fixed;
      top: 50%;
      left: 50%;
      /* bring your own prefixes */
      transform: translate(-50%, -50%);
      width: 200px;
      height: 200px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 100px;
      z-index: 40;
    }

    .qr {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    .base {
      position: absolute;
      bottom: 10%;
      color: white;
      text-align: center;
      width: 100%;
    }
  </style>
</head>

<body class="primario">
  <a href="login">
    <div class="centered1 text-center"><br><span class="material-icons qr logoIntro">qr_code_scanner</span></div>
  </a>
  <div class="centered2"></div>
  <div class="centered3"></div>
  <div class="centered4"></div>
  <div class="base">
    <h1 class="text-center titulo">TREIZ</h1>
    <p class="text-center">Soluciones operativas</p>
    <a href="login" class="btn secundarioNav">Entrar</a>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>