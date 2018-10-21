<?php
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, TRUE);
  curl_setopt($curl, CURLOPT_URL,"http://139.59.78.26:8089/" );
  curl_setopt($curl, CURLOPT_REFERER, "http://www.cia.gov/");
  curl_setopt($curl, CURLOPT_POSTFIELDS,"dr4g0n=secreto");
  $html = curl_exec($curl);
  echo $html."\n";
