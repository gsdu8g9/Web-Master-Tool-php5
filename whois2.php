<?php
ini_set("max_execution_time",60);


function getPageData8($url) {
 if(function_exists('curl_init')) {
 $ch = curl_init($url); // initialize curl with given url
 curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // add useragent
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // write the response to a variable
 if((ini_get('open_basedir') == '') && (ini_get('safe_mode') == 'Off')) {
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow redirects if any
 }
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); // max. seconds to execute
 curl_setopt($ch, CURLOPT_FAILONERROR, 1); // stop when it encounters an error
 return @curl_exec($ch);
 }
 else {
 return @file_get_contents($url);
 }
}

 $request = "http://reverseip.logontube.com/?url=".$domain."&output=json";
 $data=getPageData8($request);
 $data= json_decode($data, true);
 
 
 
 ?>

                                                  
