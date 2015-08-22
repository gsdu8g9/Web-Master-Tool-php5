<?php
	$dash=$_POST['dash'];
	switch($dash){
	case 1: $str=$_POST['str1'];
			$data = md5($str);
			echo $data;
			break;
	case 2:$domain = $_POST['name'];
			
			if(isset($domain)) {
			
			$domain = trim($domain);
					if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
					if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
					
						$dnsr = dns_get_record($domain);
					
					 $row = "";
					
					foreach($dnsr as $key => $val ){
					$type = $dnsr["$key"]["type"];
					$row=$row."<h4>Record type $type </h4><table class='table table-striped'><thead><tr><th>Name</th><th>Value</th></tr></thead>
<tbody>";
						
						foreach($dnsr["$key"] as $word => $val1){
						
						
							 $row.="<tr><td>$word</td><td>$val1</td></tr>";
					
						}
						 $row.="</tbody></table><br>";
						
					}
					echo $row;
					
			}
			break;
		case 3: $str=$_POST['str1'];
			$data = sha1($str);
			echo $data;
			break;
		case 4: $domain=$_POST['name'];
				
				if(isset($domain)) {
					
					$domain = trim($domain);
					if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
					if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
					
					include('whois2.php');
					
					if($data['response']['domain_count']>0)
 {                        

					$row = "";
					$row=$row."<h4>Other Websites at same Ip as of ".$data['response']['domain_count']."</h4><table class='table table-striped'><thead><tr><th>No.</th><th>Domain</th></tr></thead><tbody>";
						
						 for($i=0; $i<$data['response']['domain_count'];$i++)
                         {
								
							$j=$i+1;
							
							 $row.="<tr><td> $j </td><td>".$data["response"]["domains"]["$i"]."</td></tr>";
					
						}
						 $row.="</tbody></table><br>";
						
					}
					echo $row;
			}
					
		
			break;
		case 5: $domain=$_POST['name'];
				$suffix=$_POST['suf'];
				 $row = "";
				if($domain){
						if($suffix=="all"){
							$y = Array(".com",".in",".co.in",".org",".biz",".net",".info",".mobi",".ws",".co.id",".or.id",".go.id",".sch.id",".ac.id",".ml.id",".web.id",".tc",".cn",".cc");
							$x=count($y);
							
							
								$row.="<h4>$domain</h4><table class='table table-striped'><thead><tr><th>S.No</th><th>Domain</th><th>Status</th></tr></thead><tbody>";
								
							for($i=0;$i<$x;$i++){
						
								$name_domain = trim($domain).$y["$i"];
									$response = @dns_get_record($name_domain, DNS_ALL);
									$j=$i+1;
								 if(empty($response)){
								
												 $row.="<tr><td>$j</td><td>$name_domain</td><td>Availabel</td></tr>";
																 
																 }else{
																 $row.="<tr><td>1</td><td>$name_domain</td><td>Taken</td></tr>";
																 }
												
								}
								$row.="</tbody></table><br>";
												echo $row;
						
						}else{
							$row.="$domain</h4><table class='table table-striped'><thead><tr><th>S.No</th><th>Domain</th><th>Status</th></tr></thead><tbody>";
								
								 $name_domain = trim($domain).$suffix;
									$response = @dns_get_record($name_domain, DNS_ALL);
								 if(empty($response)){
								
				echo $row.="<tr><td>1</td><td>$name_domain</td><td>Availabel<td></tr></tbody></table><br>";
								 
								 }else{
								echo $row.="<tr><td>1</td><td>$name_domain</td><td>Taken<td></tr></tbody></table><br>";
								 }
								

						
						
						}//suffix compare sufix
				
				
				
				
				}//domain compare  if
				break;
			case 6: $text = $_POST['str'];
					$separator=$_POST['x'];
					$text = explode($separator,$text);
					$data = array_unique($text);
					echo $text = implode($separator,$data);
					break;
			case 7: $domain=$_POST['domain'];
					$domain = trim($domain);
					if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
					if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);
					$url="http://data.alexa.com/data?cli=10&dat=snbamz&url=";
					$url.=$domain;
					$source = file_get_contents($url);

				//Alexa Rank
				preg_match('/\<popularity url\="(.*?)" text\="([0-9]+)" source\="panel"\/\>/si', $source, $matches);
				$aresult = ($matches[2]) ? $matches[2] : 0;

			//Alexa Sites Linking in
			preg_match('/\<linksin num\="([0-9]+)"\/\>/si', $source, $cocok);
			$alinksin = ($cocok[1]) ? $cocok[1] : 0;
			echo "<h4>$domain Alexa statistics</h4>
<table class='table table-striped'><thead><tr><th>Name</th><th>Value</th></tr></thead><tbody>
<tr><td>Rank</td><td>$aresult</td></tr>
<tr><td>Links in</td><td>$alinksin</td></tr>
<tr><td>Review count</td><td>0</td></tr>
<tr><td>Review count</td><td>0</td></tr>
</tbody>
</table><h5>Audience</h5>
<div class='row-fluid'>
<img class='thumbnail' src='http://traffic.alexa.com/graph?&amp;w=320&amp;h=230&amp;o=f&amp;c=1&amp;y=t&amp;b=ffffff&amp;r=1m&amp;u=".$domain."' alt='AlexaRank'>
</div></div></div>";
break;

	case 8: $domain=$_POST['domain'];
			echo $user =	$_POST['user'];
			echo $req = $_POST['req'];
			echo $http = $_POST['http'];
			
			$headers = get_headers('http://yuvrajyadav.in');
		$keyword = array("Http Code","Date","Server","Last-Modified","ETag","Accept-Ranges","Content-Length","Connection","Content-Type");

		
		$str="";
		$str.="<h4>$domain</h4><table class='table table-striped'><thead><tr><th>Name</th><th>Value</th></tr></thead><tbody>";
		foreach($headers as $key => $val){
		if($key==0)
		$str.="<tr><td>".$keyword["$key"]."</td><td>$val</td></tr>";
		else{
		$x=explode(':',$val);
		$str.="<tr><td>".$keyword["$key"]."</td><td>".$x[1]."</td></tr>";
		}
		
		}
		$str.="</tbody></table>///";
		function get_web_page( $url )
{
    
	if($http=="POST" & $http=="1.1"){
	
	$options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
		CURLOPT_POST			=> true,
		CURLOPT_HTTP_VERSION_1_1=>true,
		CURLOPT_USERAGENT		=>"$user",
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
    );
	}
	if($http=="GET" & $http=="1.0"){
	$options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
		CURLOPT_GET			=> true,
		CURLOPT_HTTP_VERSION_1_0=>true,
		CURLOPT_USERAGENT		=>"$user",
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
    );
	}

    $ch      = curl_init( $url );
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch );
    curl_close( $ch );

    $header['errno']   = $err;
    $header['errmsg']  = $errmsg;
    $header['content'] = $content;
    return $header;
}
$url=$domain;

$result = get_web_page( $url );


echo $str.= $result['content'];
		
		break;
	case 9: $url = $_POST['domain'];
					$url = trim($url);
				
					if(substr(strtolower($url), 0, 7) != "http://") $url ="http://".$url;
						//if(substr(strtolower($url), 0, 4) == "www.") $url = substr($url, 4);
					

	ini_set("max_execution_time",30);


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

 $request = "http://socialanalytics.php5developer.com/api.php?url=".urlencode($url);
 $data=getPageData8($request);

$json = json_decode($data, true);

echo "<h4>$url social statistics</h4><br>
<table class='table table-striped'>
<thead>
<tr>
<th><p class='table-stat'><span class='facebook'></span>Facebook</p></th>
<th></th>
<th><p class='table-stat'><span class='other-social'></span>Other</p></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>Share count:</td>
<td>".$json["facebook"]["share_count"]."</td>
<td><p class='table-stat'><span class='gplus'></span>Google Plus:</p></td>
<td>".$json["gplus"]."</td>
</tr>

<tr>
<td>Like count:</td>
<td>".$json["facebook"]["like_count"]."</td>
<td><p class='table-stat'><span class='twitter'></span>Tweets:</p></td>
<td>".$json["twitter"]." </td>
</tr>


<tr>
<td>Click count:</td>
<td>".$json["facebook"]["click_count"]."</td>
<td><p class='table-stat'><span class='pinterest'></span>Pints:</p></td>
<td>".$json["pinterest"]."</td>
</tr>


<tr>
<td>Comment count:</td>
<td>".$json["facebook"]["comment_count"]."</td>
<td><p class='table-stat'><span class='linkedin'></span>Linked In:</p></td>
<td>".$json["linkedin"]."</td>
</tr>


<tr>
<td>Total count:</td>
<td>".$json["facebook"]["total_count"]."</td>
<td><p class='table-stat'><span class='stumbleupon'></span>Stumbleupon:</p></td>
<td>".$json["stumbleupon"]."</td>
</tr>

<tr>
<td></td>
<td></td>
<td><p class='table-stat'><span class='delicious'></span>Delicious:</p></td>
<td>0</td>
</tr>

</tbody>
</table></div>";

   }
?>
