<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>XMLHttpRequest</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <?php
      if(isset($_GET['city'])&&isset($_GET['zipcode'])){
      $city = $_GET['city'];
      $zipcode = $_GET['zipcode'];
      // 동기화 비동기화 구분을 위해 대기시간을 걸었다.
      sleep(2);
      echo "GET방식의 $city 와 $zipcode";
      }

      if(isset($_POST['city'])&&isset($_POST['zipcode'])){
      $city = $_POST['city'];
      $zipcode = $_POST['zipcode'];
      // 동기화 비동기화 구분을 위해 대기시간을 걸었다.
      sleep(2);
      echo "POST방식의 $city 와 $zipcode";
      }
     ?>




  </body>
</html>
