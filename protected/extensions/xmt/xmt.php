<?php 

final class xmt{
	
	function tmla($url){
		
		$tr = array('ş','Ş','ı','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','%');
		$eng = array('s','s','i','i','g','g','u','u','o','o','c','c','');
		$ALink = str_replace($tr,$eng,$ALink);
		$ALink = strtolower($ALink);
		$ALink = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $ALink);
		$ALink = preg_replace('/[^%a-z0-9 _-]/', '', $ALink);
		$ALink = preg_replace('/\s+/', '-', $ALink);
		$ALink = preg_replace('|-+|', '-', $ALink);
		$ALink = trim($ALink, '-');
		return $ALink;
		
		return $ALink;
	}
	
	function UrlTitle($url){
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; tr; rv:1.9.1.5) AklimdakiSite.com Url Ekleme");
		@curl_setopt($ch, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
		@curl_setopt($ch, CURLOPT_FOLLOWLOCATION,2);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$icerik = curl_exec($ch);
		curl_close($ch); 
		preg_match("%<title>(.*?)</title>%si", $icerik, $title); 
		//return @mb_convert_encoding($title[1], "UTF-8");
		return @$title[1];
	}
	
}


