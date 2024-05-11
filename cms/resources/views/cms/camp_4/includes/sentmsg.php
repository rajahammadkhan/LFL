<?php

$qty1_amount = $phone[0]->qty * 100;

//variables
$inv = $phone[0]->p_id;
$status = $phone[0]->p_stat;
$name = $phone[0]->name;
$email = $phone[0]->email;
$phone = $phone[0]->phone;

$client = new \GuzzleHttp\Client();

    $response = $client->request('POST', 'https://app.trengo.com/api/v2/wa_sessions', [
    'body' => '{"params":[
    {"value":"'.$inv.'","key":"{{1}}"},
    {"key":"{{2}}","value":"'.$date.'"},
    {"key":"{{3}}","value":"'.$status.'"},
    {"key":"{{4}}","value":"'.$name.'"},
    {"key":"{{5}}","value":"'.$email.'"},
    {"key":"{{6}}","value":"+'.$phone.'"},
    {"key":"{{7}}","value":"'.$qtysent1.'"},
    {"key":"{{8}}","value":"'.$qty1_amount.'"},
    {"key":"{{9}}","value":"'.$price.'"}],"recipient_phone_number":"+'.$phone.'","hsm_id":135191}',
      'headers' => [
        'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZWY5YTA5ZTk2YTBhNTNjNDE2NzQzMzE3NDcyZGZjZDU3MDhiZWE4ZjZlZmMwNDc5MzEyNjBiNzU1Mjc5MTExNDA1OGNkYmRjZTY3ZDhkZWEiLCJpYXQiOjE2ODQ5MTE5OTMuMjgxMjkyLCJuYmYiOjE2ODQ5MTE5OTMuMjgxMjk1LCJleHAiOjQ4MDkwNDk1OTMuMjcxNzA5LCJzdWIiOiI1Njc5OTQiLCJzY29wZXMiOltdfQ.Fq1TnQ_DGWUgh7mnyxaRKZcJ6Li-c8qNacnp_W_WK5WLH9EDPeeUBmRHNiculmagl3XzRDfUC4ySh79O66FOxA',
        'accept' => 'application/json',
        'content-type' => 'application/json',
      ],
    ]);

?>
