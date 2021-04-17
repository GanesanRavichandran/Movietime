<?php 

function CurlPostURL($url, $password, $post_fields, $method,$httpheader){
    $curl = curl_init($url);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $post_fields);
    if($method=="GET"){
    curl_setopt($curl, CURLOPT_HTTPGET, 1);
    }
	curl_setopt($curl, CURLOPT_HTTPHEADER, array($httpheader));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
	$response = curl_exec($curl); 
	curl_close($curl); 
	

	return $response;
}


function getrating(){
    global $api_url,$api_url_path,$api_default,$jsonheader;
    
    $url=$api_url.$api_url_path['Movie_Top_Rated'].$api_default;

    $response=CurlPostURL($url,"","","GET",$jsonheader);

    $data=json_decode($response,true);

    return $data;

}


function getupcomingmovies(){

    global $api_url,$api_url_path,$api_default,$jsonheader;
    
    $url=$api_url.$api_url_path['Movie_Upcoming'].$api_default;
    $response=CurlPostURL($url,"","","GET",$jsonheader);
    $data=json_decode($response,true);

    return $data;

}

function getplayingnow(){

    
    
    global $api_url,$api_url_path,$api_default,$jsonheader;
    
    $url=$api_url.$api_url_path['Playing_Now'].$api_default;
    $response=CurlPostURL($url,"","","GET",$jsonheader);
    $data=json_decode($response,true);

    return $data;

}


function getsearchmovies($keywords){

    global $api_url,$api_url_path,$api_default,$jsonheader;

    $extraparams="&query=".$keywords."&include_adult=false";
    $url=$api_url.$api_url_path['Movie_Search'].$api_default.$extraparams;
    $response=CurlPostURL($url,"","","GET",$jsonheader);
    $data=json_decode($response,true);


    return $data;



}


function getmoviedetails($movieid){

    global $api_url,$api_url_path,$api_default,$jsonheader;

    $extraparams="/".$movieid;
    $url=$api_url.$api_url_path['Movie_Details'].$extraparams.$api_default;
    $response=CurlPostURL($url,"","","GET",$jsonheader);
    $data=json_decode($response,true);


    return $data;
}

function ratingstart($rating){

    $ratingcount=round($rating);
    $total_count=10;
    $html='';
   
        for($i=1 ;$i<=$total_count;$i++){

            if($ratingcount>=$i){
                $html.='<i class="ion-ios-star"></i>';

                }
                else{
                    $html.='	<i class="ion-ios-star-outline"></i>';
                }               

     }
    
    
     return $html;


}

?>