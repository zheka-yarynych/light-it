<?php 
/* 
	Author - Yarynych Evgeniy
	Class usingApi
	Created for connect to apixu.com API and working with API
*/
class usingApi
{
	private $apixu_key = "7cff5113fd3e43afafb214822180309"; //apixu key for using API, paste ur apixu key
	public $weather = [];

	function getWeather($date='', $city='') //this method return array with data about weather in same date and same city
	{
		$city = urlencode($city);
		if (!empty($city) && !empty($date)) { //searh information only if we have date and city 
			if(strtotime($date) <= date('y-m-d'))
				$url = "http://api.apixu.com/v1/history.json?key=".$this->apixu_key."&q=".$city."&dt=".$date."&lang=ru";
			else 
				$url = "http://api.apixu.com/v1/forecast.json?key=".$this->apixu_key."&q=".$city."&dt=".$date."&lang=ru";

			$city = urldecode($city);
			$ch = curl_init();  
	        curl_setopt($ch,CURLOPT_URL,$url);
	        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	        $json_output=curl_exec($ch);
	        $weather = json_decode($json_output);
	        $days = $weather->forecast->forecastday[0];

	        if (!empty($days)) {
	        	$this->weather = [ 	'city' => $city,
		        					'date' => $date,
		        					'sunrise' => $days->astro->sunrise,
		    					    'sunset' => $days->astro->sunset,
		    						'cond' => $days->day->condition->text,
		    						'max_t_c' => $days->day->maxtemp_c,
		    						'min_t_c' => $days->day->mintemp_c,
		    						'avg_t_c' => $days->day->avgtemp_c,
		    						'wind' => $days->day->maxwind_mph];
	        }
	       	else
	       		$this->weather = null;
		}
	}
}
?>