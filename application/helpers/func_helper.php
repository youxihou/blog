<?php
function getCity($ip){
    $url = "http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10);
	$ip = json_decode(curl_exec($ch)); 
	
	//print_r($ip);
    /* 
    $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
    $ip=cc(file_get_contents($url));
    */
    if($ip->code=='1'){
      return false;
      }
      $data = (array)$ip->data;
    return $data;
} 

?>