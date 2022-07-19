<?php

// For example: http://localhost:8181
define('TAUTULLI_URL', 'https://tautulli.securedserveraccess.com');

// tautulli/settings#tab_tabs-web_interface
define('13dbc8d1f049426cbbd3f76e176e7ce4', '');

$post = $_POST['postData'];

$defaults = array(
  CURLOPT_URL             => TAUTULLI_URL . '/api/v2?apikey='. TAUTULLI_TOKEN .'&' . http_build_query($post),
  CURLOPT_HEADER          => 0,
  CURLOPT_RETURNTRANSFER  => true,
  CURLOPT_CONNECTTIMEOUT  => 30,
  CURLOPT_TIMEOUT         => 30,
  CURLOPT_FAILONERROR     => true,
);

$ch = curl_init();
curl_setopt_array($ch, $defaults);
$resultstr = curl_exec($ch);
curl_close($ch);

echo $resultstr;

// EOF
