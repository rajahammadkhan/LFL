<?php

$numbers = unserialize($blog->writenumber);
$numbers1 = unserialize($blog->numbers);
$code = $blog->img_url;

$client = new \GuzzleHttp\Client();

if (!empty($numbers)) {
    foreach ($numbers as $number) {
        $response = $client->request('POST', 'https://app.trengo.com/api/v2/wa_sessions', [
            'body' => '{"hsm_id":'.$code.',"recipient_phone_number":"+'.$number.'"}',
          'headers' => [
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZWY5YTA5ZTk2YTBhNTNjNDE2NzQzMzE3NDcyZGZjZDU3MDhiZWE4ZjZlZmMwNDc5MzEyNjBiNzU1Mjc5MTExNDA1OGNkYmRjZTY3ZDhkZWEiLCJpYXQiOjE2ODQ5MTE5OTMuMjgxMjkyLCJuYmYiOjE2ODQ5MTE5OTMuMjgxMjk1LCJleHAiOjQ4MDkwNDk1OTMuMjcxNzA5LCJzdWIiOiI1Njc5OTQiLCJzY29wZXMiOltdfQ.Fq1TnQ_DGWUgh7mnyxaRKZcJ6Li-c8qNacnp_W_WK5WLH9EDPeeUBmRHNiculmagl3XzRDfUC4ySh79O66FOxA',
            'accept' => 'application/json',
            'content-type' => 'application/json',
          ],
        ]);
    }
}

if (!empty($numbers1)) {
    foreach ($numbers1 as $number) {
        $response = $client->request('POST', 'https://app.trengo.com/api/v2/wa_sessions', [
          'body' => '{"hsm_id":'.$code.',"recipient_phone_number":"+'.$number.'"}',
          'headers' => [
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZWY5YTA5ZTk2YTBhNTNjNDE2NzQzMzE3NDcyZGZjZDU3MDhiZWE4ZjZlZmMwNDc5MzEyNjBiNzU1Mjc5MTExNDA1OGNkYmRjZTY3ZDhkZWEiLCJpYXQiOjE2ODQ5MTE5OTMuMjgxMjkyLCJuYmYiOjE2ODQ5MTE5OTMuMjgxMjk1LCJleHAiOjQ4MDkwNDk1OTMuMjcxNzA5LCJzdWIiOiI1Njc5OTQiLCJzY29wZXMiOltdfQ.Fq1TnQ_DGWUgh7mnyxaRKZcJ6Li-c8qNacnp_W_WK5WLH9EDPeeUBmRHNiculmagl3XzRDfUC4ySh79O66FOxA',
            'accept' => 'application/json',
            'content-type' => 'application/json',
          ],
        ]);
    }
}
header('Location: /campwhatsapps');
exit;
?>
