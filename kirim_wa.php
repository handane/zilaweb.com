<?php

function kirimWA($nomor,$pesan,$token,$phone_id)
{

$url = "https://graph.facebook.com/v23.0/".$phone_id."/messages";


$data = [

"messaging_product"=>"whatsapp",

"to"=>$nomor,

"type"=>"text",

"text"=>[
    "body"=>$pesan
]

];


$curl = curl_init();


curl_setopt_array($curl,[

CURLOPT_URL=>$url,

CURLOPT_RETURNTRANSFER=>true,

CURLOPT_POST=>true,

CURLOPT_POSTFIELDS=>json_encode($data),

CURLOPT_HTTPHEADER=>[

"Authorization: Bearer ".$token,

"Content-Type: application/json"

]

]);


$result = curl_exec($curl);


curl_close($curl);


return $result;

}