<?php 

require_once('includes/application_top.php');


$input=$_GET+$_POST;


$i=0;
if(isset($input['search_key']) && $input['search_key']!=''){
    $Get_Search=getsearchmovies($input['search_key']);
    $get_search_list='';
    $i=1;
    if(count($Get_Search['results'])>0 && is_array($Get_Search['results'])){
     

            foreach($Get_Search['results'] as $row){
                $imagepathlink=$imagepath.$row['backdrop_path'];
                
                if($row['backdrop_path']==""){
                    $imagepathlink=$config['SITE_URL'].'images/noimage.png';

                }
                $get_search_list.='
                <div class="movie-item-style-2">
 <img src="'.$imagepathlink.'" alt="">
    <div class="mv-item-infor">
    <h6><a href="#">'.$row['original_title'].'</a></h6>
    <p class="rate"><i class="ion-android-star"></i><span>'.$row['vote_average'].'</span> /10</p>
    <p class="describe">'.htmlspecialchars($row['overview']).'</p>
    <p class="run-time"><span>Release: '.date('d-M-Y',strtotime($row['release_date'])).'</span></p>
   
   
</div> </div>';

$i++;

            }

    }
    else{
        $i=0;
        $get_search_list='<div class="movie-item-style-2 text-center">
    
        <p>No Seach Items Found</p>
        </div>';
    
    }
   
}
else{
    $i=0;
    $get_search_list='<div class="movie-item-style-2 text-center">

    <p>No Seach Items Found</p>
    </div>';

}


require_once('templates/header.php');

?>


<div class="buster-light">
    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1></h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> Search</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-single movie_list">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<p>Found <span><?php echo $i;?> movies</span> in total</p>
							
				</div>
                <?php echo $get_search_list;?>
			
			</div>
			
			</div>
		</div>
	</div>
</div>
		</div>

    <?php 
require_once('templates/footer.php');
?>