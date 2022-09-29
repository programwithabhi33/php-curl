<?php

// Initialising the curl library with the curl_init() method
$abhi = curl_init();

// Set the options using the curl_setopt() method
curl_setopt($abhi,CURLOPT_URL,"https://www.amazon.in/s?k=gaming+laptops");

// This line for the bypass the https dont verify the ssl certificate
curl_setopt($abhi,CURLOPT_SSL_VERIFYPEER,true);

// Executing the curl
curl_exec($abhi);

// Closing the connection 
curl_close($abhi);


?>