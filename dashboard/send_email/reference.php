<?php
    $url="http://192.168.18.75:8056/items/customer?limit=2&fields=name,email,status&filter[status]=0";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    $hasil = json_decode($response, true);
    $dataLength = $hasil["data"];