<?php 

require_once('includes/application_top.php');

$Top_Rating_Movies=getrating();
$top_rating_movies_list='';

$Now_Playing=getplayingnow();

if(count($Top_Rating_Movies)>0 && is_array($Top_Rating_Movies)){

    foreach($Top_Rating_Movies['results'] as $row){
        $top_rating_movies_list.='
        <div class="slide-it">
                                                <div class="movie-item">
                                                    <div class="mv-img">
                                                        <img src="'.$imagepath.$row['backdrop_path'].'" alt="" width="185" height="284">
                                                    </div> 
                                                    <div class="hvr-inner">
                                                        <a  href="'.$config['SITE_URL'].'readmore.php?movid='.$row['id'].'"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                    </div>
                                                    <div class="title-in">
                                                        <h6><a href="'.$config['SITE_URL'].'readmore.php?movid='.$row['id'].'">'.$row['title'].'</a></h6>
                                                        <p><i class="ion-android-star"></i><span>'.$row['vote_average'].'</span> /10</p>
                                                    </div>
                                                </div>
                                            </div>';


    }
  


}



$Upcoming_Movies=getupcomingmovies();
$upcoming_movies_list='';

if(count($Upcoming_Movies)>0 && is_array($Upcoming_Movies)){
 
    foreach($Upcoming_Movies['results'] as $row){
            $upcoming_movies_list.='

            <div class="slide-it">
            <div class="movie-item">
                <div class="mv-img">
                    <img src="'.$imagepath.$row['poster_path'].'" alt="" width="185" height="284">
                </div>
                <div class="hvr-inner">
                    <a  href="'.$config['SITE_URL'].'readmore.php?movid='.$row['id'].'"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                </div>
                <div class="title-in">
                    <h6><a href="'.$config['SITE_URL'].'readmore.php?movid='.$row['id'].'">'.$row['original_title'].'</a></h6>
                    <p><i class="ion-android-star"></i><span>'.$row['vote_average'].'</span> /10</p>
                </div>
            </div>
            </div>';

    }



}


$now_playing_list='';
if(count($Now_Playing)>0 && is_array($Now_Playing)){
        $i=0;
    foreach($Now_Playing['results'] as $row){
        $now_playing_list.='
        <div class="movie-item">
        <div class="mv-img">
            <a href="'.$config['SITE_URL'].'readmore.php?movid='.$row['id'].'"><img src="'.$imagepath.$row['backdrop_path'].'" alt="" width="285" height="437"></a>
        </div>
        <div class="title-in">
            <div class="cate">
                <span class="yell"><a href="'.$config['SITE_URL'].'readmore.php?movid='.$row['id'].'">action</a></span>
            </div>
            <h6><a href="'.$config['SITE_URL'].'readmore.php?movid='.$row['id'].'">'.$row['original_title'].'</a></h6>
            <p><i class="ion-android-star"></i><span>'.$row['vote_average'].'</span> /10</p>
        </div>
    </div>';

        if($i==5){

            break;
        }

    $i++;
    }


}



require_once('templates/header.php');


?>

<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us: </p>
				<a href="#"><i class="ion-social-facebook"></i></a>
				<a href="#"><i class="ion-social-twitter"></i></a>
				<a href="#"><i class="ion-social-googleplus"></i></a>
				<a href="#"><i class="ion-social-youtube"></i></a>
			</div>
	    	<div  class="slick-multiItemSlider">
            <?php echo $now_playing_list;?>
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-12">
				<div class="title-hd">
					<h2>Top Rated</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links">
						<li class="active"><a href="#tab1">#Top Rated</a></li>
					                       
					</ul>
				    <div class="tab-content">
				        <div id="tab1" class="tab active">
				            <div class="row">
				            	<div class="slick-multiItem">
				            		<?php echo $top_rating_movies_list;?>
									
				            	</div>
				            </div>
				        </div>		       
			       	 
				    </div>
				</div>
				<div class="title-hd">
					<h2>Upcoming Movies</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links-2">
						
						<li class="active"><a href="#tab22"> #Coming soon</a></li>
						
					</ul>
				    <div class="tab-content">
				        
				        <div id="tab22" class="tab active">
				           <div class="row">
				            	<div class="slick-multiItem">
				            	<?php echo $upcoming_movies_list;?>
									
				            	</div>
				            </div>
				        </div>
				         
				            </div>
			       	 	</div>
				    </div>
				</div>
			</div>
		
		</div>
	</div>
</div>


<?php 
require_once('templates/footer.php');
?>
