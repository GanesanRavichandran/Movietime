<?php 

require_once('includes/application_top.php');



$input=$_GET+$_POST;
$moviereadlist='';
if(isset($input['movid']) && $input['movid']!=''){

    $getmoviebyid=getmoviedetails($input['movid']);
 
    if(is_array($getmoviebyid) && count($getmoviebyid)>0 ){

        $moviereadlist='<div class="row ipad-width2">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="movie-img sticky-sb">
                <img src="'.$imagepath.$getmoviebyid['poster_path'].'" alt="">
            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="movie-single-ct main-content">
                <h1 class="bd-hd">'.$getmoviebyid['original_title'].'</h1>
                <div class="social-btn">
                    <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
                    <div class="hover-bnt">
                        <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
                        <div class="hvr-item">
                            <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                            <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                            <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                            <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                        </div>
                    </div>		
                </div>
                <div class="movie-rate">
                    <div class="rate">
                        <i class="ion-android-star"></i>
                        <p><span>'.$getmoviebyid['vote_average'].'</span> /10<br>
                            
                        </p>
                    </div>
                    <div class="rate-star">
                        <p>Rate This Movie:  </p>
                  '.ratingstart($getmoviebyid['vote_average']).'
                    </div>
                </div>
                <div class="movie-tabs">
                    <div class="tabs">
                        <ul class="tab-links tabs-mv">
                            <li class="active"><a href="#overview">Overview</a></li>
                                             
                        </ul>
                        <div class="tab-content">
                            <div id="overview" class="tab active">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <p>
                                        '.htmlspecialchars($getmoviebyid['overview']).'
                                        </p>
                                    
                                          </div>
                                    <div class="col-md-4 col-xs-12 col-sm-12">
                                        
                                        <div class="sb-it">
                                            <h6>Release Date:</h6>
                                            <p>'.date('d-M-Y',strtotime($getmoviebyid['release_date'])).'</p>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                          
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>';


    }



}else{
    $moviereadlist="<p>No Movie Found</p>";

}

require_once('templates/header.php');

?>
	<div class="buster-light">
                <div class="hero mv-single-hero">
                
                    </div>
<div class="page-single movie-single movie_single">
	<div class="container">
		<?php echo $moviereadlist;?>
	</div>
</div>
</div>

<?php
require_once('templates/footer.php');

?>