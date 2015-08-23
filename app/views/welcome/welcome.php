<?php
use Core\Language;
?>

<!-- TODO : Clean up Page especially language -->

<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
  	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
  	<div class="item active">
    	<img class="first-slide" src="app/templates/default/img/Welcome/comming-soon.png" alt="First slide" height="75">
    </div>
    <div class="item">
    	<img class="second-slide" src="app/templates/default/img/Welcome/welcome.png" alt="Second slide">
    </div>
    <div class="item">
    	<img class="third-slide" src="app/templates/default/img/Welcome/somnia-graphic.png" alt="Third slide">
    </div>
		<div class="item">
    	<img class="fourth-slide" src="app/templates/default/img/Welcome/last-stand-graphic.png" alt="Fourth slide">
    </div>
		<div class="item">
    	<img class="fifth-slide" src="app/templates/default/img/Welcome/blog-graphic.png" alt="Fifth slide">
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  	<span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End Carousel -->

<div class="main">

	<!-- Header -->
	<!--div class="page-header">
		<h1><?php echo $data['title'] ?></h1>
	</div>

	<p><?php echo $data['welcome_message']; echo $_SERVER['HTTP_HOST']; ?></p>

	<a class="btn btn-md btn-success" href="<?php echo wURL;?>subpage">
		<?php echo Language::show('open_subpage', 'Welcome'); ?>
	</a-->
	<!-- End Header -->

	<!-- Team -->
	<!--h1><?php echo $data['the-team']?></h1-->
	<br/><br/>
	<div class="row">
		<!-- Thomas Steinholz -->
    <div class="col-lg-4">
      <img class="img-circle" src="app/templates/default/img/users/tsteinholz.png" alt="Thomas Steinholz" width="140" height="140">
      <h2>Thomas Steinholz</h2>
			<h4>CEO / CTO</h4>
			<p><?php echo $data['tsteinholz']?></p>
			<div class="icons">
				<a href="http://www.steinholz.laststandstudio.com"><i class="fa fa-external-link"></i></a>
				<a href="https://github.com/tsteinholz"><i class="fa fa-github"></i></a>
				<a href="http://steamcommunity.com/id/tsteinholz"><i class="fa fa-steam"></i></a>
				<a href="https://twitter.com/ThomasSteinholz"><i class="fa fa-twitter"></i></a>
			</div>
	  </div>
		<!-- Harrison Ernst -->
	  <div class="col-lg-4">
	    <img class="img-circle" src="app/templates/default/img/users/hernst.png" alt="Harrison Ernst" width="140" height="140">
	    <h2>Harrison Ernst</h2>
			<h4><?php echo $data['lead-art']?></h4>
		  <p><?php echo $data['hernst']?></p>
			<div class="icons">
				<a href="https://github.com/LastStandStudio"><i class="fa fa-tumblr"></i></a>
				<a href="https://twitter.com/LSStudioOffical"><i class="fa fa-twitter"></i></a>
				<a href="http://steamcommunity.com/id/LastStandStudio/profile"><i class="fa fa-steam"></i></a>
				<a href="http://www.twitch.tv/laststandstudio/profile"><i class="fa fa-twitch"></i></a>
			</div>
		</div>
		<!-- Joshua Freedman -->
	  <div class="col-lg-4">
		  <img class="img-circle" src="app/templates/default/img/users/jfreedman.jpg" alt="Joshua Freedman" width="140" height="140">
	  	<h2>Joshua Freedman</h2>
			<h4><?php echo $data['lead-dev']?></h4>
			<p><?php echo $data['jfreedman']?></p>
			<div class="icons">
				<a href="http://jfreedman.us"><i class="fa fa-external-link"></i></a>
				<a href="https://github.com/d4rkfly3r"><i class="fa fa-github"></i></a>
				<a href="http://steamcommunity.com/id/tsteinholz"><i class="fa fa-steam"></i></a>
				<a href="https://twitter.com/ThomasSteinholz"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
	<br/>
	<div class="row">
    <!-- Ross Owens -->
		<div class="col-lg-4">
      <img class="img-circle" src="app/templates/default/img/users/rowens.jpg" alt="Ross Owens" width="140" height="140">
      <h2>Ross Owens</h2>
			<h4><?php echo $data['lead-des']?></h4>
			<p><?php echo $data['rowens']?></p>
			<div class="icons">
				<a href="http://kaosstudios.weebly.com"><i class="fa fa-external-link"></i></a>
				<a href="https://www.youtube.com/channel/UCLuVr6QYMEeef7P3LuxzBJA"><i class="fa fa-youtube-play"></i></a>
				<a href="https://twitter.com/Kaosstudiosx"><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-behance"></i></a>
			</div>
		</div>
		<!-- Jack Mawer -->
	  <div class="col-lg-4">
	    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
	    <h2>Jack Mawer</h2>
			<h4><?php echo $data['code']?></h4>
			<p><?php echo $data['jmawer']?></p>
			<div class="icons">
				<a href="https://github.com/LastStandStudio"><i class="fa fa-github"></i></a>
				<a href="https://twitter.com/LSStudioOffical"><i class="fa fa-twitter"></i></a>
				<a href="http://steamcommunity.com/id/LastStandStudio/profile"><i class="fa fa-steam"></i></a>
				<a href="http://www.twitch.tv/laststandstudio/profile"><i class="fa fa-twitch"></i></a>
			</div>
		</div>
		<!-- Jack Richards -->
	  <div class="col-lg-4">
		  <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
	  	<h2>Jack Richards</h2>
			<h4><?php echo $data['code']?> / <?php echo $data['art'] ?></h4>
			<p><?php echo $data['jrichards']?></p>
			<div class="icons">
				<a href="https://github.com/LastStandStudio"><i class="fa fa-github"></i></a>
				<a href="https://twitter.com/LSStudioOffical"><i class="fa fa-twitter"></i></a>
				<a href="http://steamcommunity.com/id/LastStandStudio/profile"><i class="fa fa-steam"></i></a>
				<a href="http://www.twitch.tv/laststandstudio/profile"><i class="fa fa-twitch"></i></a>
			</div>	  </div>
	</div>
	<!-- End Team-->

	</div>
	<!-- End Twitter ->

</div>
