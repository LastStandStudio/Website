<?php
use Core\Language;
?>

<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
  	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
  	<div class="item active">
    	<img class="first-slide" src="app/templates/default/img/Welcome/comming-soon.png" alt="First slide" height="75">
    </div>
    <div class="item">
    	<img class="second-slide" src="app/templates/default/img/Welcome/welcome.png" alt="Second slide">
    </div>
    <div class="item">
    	<img class="third-slide" src="app/templates/default/img/Welcome/somnia.png" alt="Third slide">
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



<div class="page-header">
	<h1><?php echo $data['title'] ?></h1>
</div>

<p><?php echo $data['welcome_message']; echo $_SERVER['HTTP_HOST']; ?></p>

<a class="btn btn-md btn-success" href="<?php echo wURL;?>subpage">
	<?php echo Language::show('open_subpage', 'Welcome'); ?>
</a>
