<?php 
include 'main.php';

$country    = 'IN';
$city       = 'dahanu';
$api        = '8187218c2aca04ca'; // Your API here

$json    =   file_get_contents('http://api.wunderground.com/api/'.$api.'/geolookup/conditions/q/'.$country.'/'.$city.'.json');
$data = json_decode($json,true);
//echo '<pre>'; print_r($data['response']);exit();
//echo $data->location;

//echo '<pre>';print_r($data['forecast']['txt_forecast']['forecastday'][0]['fcttext_metric']);exit();

//  $json_string = file_get_contents('http://api.wunderground.com/api/8187218c2aca04ca/geolookup/conditions/q/IN/dahanu.json');
//  $parsed_json = json_decode($json_string,true);
//  $location = $parsed_json->{'location'}->{'city'};
//  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
//  echo "Current temperature in ${location} is: ${temp_f}\n";