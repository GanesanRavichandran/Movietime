<!DOCTYPE html>

<html lang="en" class="no-js">


<head>
	<!-- Basic need -->
	<title>Movie Time</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- Start | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="<?php echo $config['SITE_URL']?>" style="color:white;font-size: 20px;">Movie Time</a>
			    </div>
				
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="">
							<a href="<?php echo $config['SITE_URL']?>" class="btn btn-default lv1">
							Home</i>
							</a>
						
						</li>
						<li class="">
							<a href="<?php echo $config['SITE_URL']?>#tab1" class="btn btn-default lv1">
							UpComing Movies</i>
							</a>
						
						</li>
						<li class="">
							<a <a href="<?php echo $config['SITE_URL']?>#tab22" class="btn btn-default lv1">
							Top Rated</i>
							</a>
						
						</li>
						
					
					</ul>
			
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
        <form method="post" action="<?php echo $config['SITE_URL'].'search.php'?>">	
	    <div class="top-search">

            <?php 
            $search='';
            if(isset($input['search_key']) && $input['search_key']){
                $search=$input['search_key'];
            }
            
           ?>
			<input type="text" name="search_key" placeholder="Search for a movie that you are looking for" value="<?php echo $search?>" required>
            <button class="fa fa-search fa-3x sicons" type="submit"></button>
        
	    </div>
        </form>
	</div>
</header>
<!-- END | Header -->