<?php
function callAPI($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL,$url);
    $req = curl_exec($curl);
    $result = json_decode($req, true);
    return $result ? $result : false;
}
?>