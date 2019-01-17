<?php
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .
              "User-agent: BROWSER-DESCRIPTION-HERE\r\n"
  ),
  'ssl' => array('verify_peer'=>false, 'verify_peer_name'=>false)
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('https://212.122.5.164/', false, $context);
//echo exec('curl -Ivk https://212.122.5.164');
?>
