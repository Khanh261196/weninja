<?php
$_link_download_game = "https://drive.google.com/file/d/1Hce4VcdXUZUJYqmOB-s_7hM5EJ-J1QFO/view?usp=drivesdk";
$_domain = '';
$_tientogioithieu = $_domain;
//mysql
$db_host="localhost";
$db_user="root";
$db_pass="1234567890";
$db_name="ao_data";
//api
$w_api_momo='';
$w_api_momo_id='';
$w_cuphap_momo=''; // cú pháp
$_qrmomo=''; // link ảnh qr code
$_phonemomo=''; //sđt momo


$w_api_card24h='';

$w_api_recaptcha = "6LdbaZ0dAAAAAGUcx40VixopxKTpGXQhovspxtdG";
$w_api_recaptcha_private = "6LdbaZ0dAAAAAH58NFTtFMWrZlwyPByMtONc8VPq";


///
//
function curl_get_contents($url)
{
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($curl);
  curl_close($curl);
  return $data;
}
//



