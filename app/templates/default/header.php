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
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container-fluid">
	    		<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        		</button>
						<!-- TODO : Add "LS.Studio" in stylisted text here -->
						<a class="navbar-brand" href="#">LS.Studio</a>
						<!-- TODO : Add icon here too? -->
	    		</div>
					<!-- TODO : Fix colapsing feature, doesnt seem to work.
		 							Possibly related to JQuery & custom css not loading -->
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<!-- TODO : Add legit items to the navbar -->
							<!-- TODO : Change active link with php -->

							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
