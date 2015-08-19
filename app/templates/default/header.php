<?php
use Helpers\Assets;
use Helpers\Url;
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Official Website for LS. Studio">
  <meta name="author" content="Last Stand Studio">
	<title><?php echo SITETITLE ?></title>

	<!-- CSS -->
	<?php
	Assets::css(array(
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
		Url::templatePath() . 'css/style.css',
	));
	?>

</head>
<body>
	<!-- Nav Bar -->
	<!-- TODO : Make the Navbar header look nicer -->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">
	        <!-- TODO : Fix alignment of this picture -->
					<img alt="LS.Studio" src="app/templates/default/img/favicon.png">
	      </a>
				<!-- Add "LS.Studio" in stylisted text here -->
	    </div>
			<!-- TODO : Fix colapsing feature, doesnt seem to work.
		 							Possibly related to JQuery & custom css not loading -->
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li role="separator" class="divider"></li>
					<!-- TODO : Add legit items to the navbar -->
					<!-- TODO : Change active link with php -->

					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li role="separator" class="divider"></li>
				</ul>
				<!--<form class="navbar-form navbar-right" role="search">
  				<div class="form-group">
    				<input type="text" class="form-control" placeholder="Search">
  				</div>
  				<button type="submit" class="btn btn-default">Search</button>
				</form>-->
			</div>
		</div>
	</nav>
