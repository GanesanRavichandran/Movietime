<?php 


$api_key='';
$api_url='https://api.themoviedb.org/3/';


$api_url_path=array("Movie_Top_Rated"=>"movie/top_rated","Movie_Upcoming"=>"movie/upcoming","Playing_Now"=>"movie/now_playing","Movie_Details"=>"movie/","Movie_Search"=>"search/movie");
$api_default="?api_key=".$api_key."&language=en-US";
$jsonheader="Content-Type: application/json";

$imagepath="https://image.tmdb.org/t/p/original";



?>