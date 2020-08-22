<?php
  /*
  PHP에서 header() 함수를 사용할 때는 헤더의 이름과 콜론(:) 사이에 공백을 사용하면 안됨
  또한, 콜론(:) 다음에 사용된 첫 번째 공백은 무시되어 공백 문자 사용에 주의 필요
  */
  header("testheader: Hello_Header");
  header("testheader2: Hello_Header2");
  /*
  Content-Type 헤더의 값을 직접 설정하지 않으면 "text/html"로 자동 설정 된다.
  XML 형태의 메세지를 확인하기 위해서는 다음과 같이 Content-Type을 text/xml로 지정해줘야 한다.
  */
  header("Content-Type: text/xml");
   echo "HELLO<br>";

?>
<message>
  XML 형식과 그 내용입니다.
</message>
