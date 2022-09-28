<?php

$abhi = curl_init();
curl_setopt($abhi,CURLOPT_URL,"https://www.google.com");
curl_exec($abhi);
curl_close($abhi);


?>