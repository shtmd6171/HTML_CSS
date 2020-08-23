<?php
  /* Pragma: no-cache와 Cache-Control는
     웹 브라우저에게 응답 내용을 캐시로 남기지 않는 다는 헤더이다.

     두 헤더의 차이는 ?
       Pragma: no-cache는 Cache-Control가 생기기 전 사용된 HTTP/1.0버전의 헤더이다.
       HTTP/1.1 부터는 Cache-Control이 사용되고 동일한 효과를 준다.

     왜 두개나 씀 ?
       HTTP/1.0 를 사용하는 클라이언트들을 위해 두개를 적은 것

     캐시가 뭔데 ?
       우리는 $current라는 데이터를 0.5초마다 가져온다.
       일반적으로, 매번 서버의 새로운 정보를 가져오게 되면
       우리는 $current 값을 얻기 위해 매번 header가 뭔지 확인해야하고,
       date함수를 매번 할당해야 하는 번거로운 과정을 거쳐야 한다.
       그리고 이 과정은 속도를 저하시키게 된다.

       만약 우리가 서버의 데이터를 가져오기 위해 수행한 과정들을 저장해둔다면
       그 다음부터는 번거로운 과정 없이 즉시 $current 값을 얻어올 수 있게된다.
       이런 과정을 저장해둔 내용(사본)을 캐시라고 한다.

     그럼 왜 캐시를 안쓴다는 건데 ?
       ※ no-cache는 사실 캐시를 안쓴다는 의미가 아니다 ! ※
       캐시된 사본을 사용하기는 하지만, 유효성 검사를 수행하겠다는 의미다.
       여기서 유효성검사란, 캐시가 갖고 있는 데이터가 최신인지 확인하는 과정이다.
       만약 캐시가 최신정보인지 확인되면 서버정보를 가져올 필요가 없으니,
       네트워크 대역폭 사용을 절약시켜준다.

       만약 유효성 검사 없이 매번 새 캐시를 저장하게 되면
       서버 정보를 매번 가져오게 되니, 캐시를 사용하지 않은 경우나 다를게 없다.

       결국 no-cache란, 서버정보를 적게 가져오면서 최신 정보상태를 유지하는 방법이다.

       한편 정말 아무것도 캐싱하지 않으려면
       Cache-Control: no-store를 사용해야 한다.

       캐싱을 적게 해 서버 정보를 적게 쓰면서, 최신 정보를 유지하는 방법은
       Cache-Control: no-cache, must-revalidate를 사용한다.

       must-revalidate는 만료된 캐시만을 서버에 확인을 받도록 한다.
       만료된 캐시를 사용하지 않게 하기 위함이다.
  */
  header("Pragma: no-cache");
  header("Cache-Control: no-cache,must-revalidate");
  header("Content-Type: text/plain");
  $current = date("Y-m-d H:i:s");
  echo  $current;
 ?>
