<?php

function kirimWA($phone,$apikey,$pesan)
{

    $pesan = urlencode($pesan);
    
    $url = "https://api.callmebot.com/whatsapp.php?"
         ."phone=".$phone
         ."&text=".$pesan
         ."&apikey=".$apikey;


    $curl = curl_init();

    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    $hasil = curl_exec($curl);

    curl_close($curl);


    return $hasil;
}