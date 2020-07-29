<?php

$ch = curl_init('http://cigondewah.site/test_pdf.html');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, [
//     'Content-Type: application/json',
// ]);

$data = [
  // 'url' => 'http://cigondewah.site/test_pdf.html',
  "html" => curl_exec($ch),
  'apiKey' => '3905acb299a66b8d7b01fc5cd396344de6cf0cc9da8c3c1d2a6d75bc02e0aec0',
  'landscape' => true,
  'format' => 'Legal',
  'marginTop' => 2,
];

$dataString = json_encode($data);

$ch = curl_init('https://api.html2pdf.app/v1/generate');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

$response = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);

if ($err) {
  echo 'Error #:' . $err;
} else {
  header('Content-Type: application/pdf');
  header('Content-Disposition: inline; filename="your-file-name.pdf"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');

  echo $response;
}
