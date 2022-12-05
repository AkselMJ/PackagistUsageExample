<?php

require __DIR__ . "/../vendor/autoload.php";

$api = '1de937881cc94a21b9c74710220512';
$httpClient = new GuzzleHttp\Client();
$httpRequestFactory = new RequestFactory();

$n = new WeatherProvider($api, $httpClient, $httpRequestFactory);

print_r(json_decode($n->getWeather('moscow'), true));