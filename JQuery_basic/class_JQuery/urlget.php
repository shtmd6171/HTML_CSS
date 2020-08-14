<?php // urlget.php
  if (isset($_GET['url']))
  {
    echo file_get_contents("https://".sanitizeString($_GET['url']));
  }

  function sanitizeString($var)
  {
    /* strip_tags ( string $str [, string $allowable_tags ] )
     : 문자열에서 HTML 태그와 PHP 태그 제거하는 함수
     [, string $allowable_tags ]의 조건에서 제거하지 않을 태그를 지정한다.
    */
    $var = strip_tags($var);
    // htmlspecialchars()와 동일
    $var = htmlentities($var);
    // 문자열에서 \,'',"" 를 제거함
    return stripslashes($var);
  }
?>
