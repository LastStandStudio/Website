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
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
	    		<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        		</button>
						<!-- TODO : Add "LS.Studio" in stylisted text here -->
						<!-- TODO : Add icon here too? -->
						<!--<a class="navbar-brand" href="#"><img alt="Brand" src="app/templates/default/img/favicon.png"></a>-->
						<a class="navbar-brand" href="#">LS. Studio</a>
	    		</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- TODO : Add legit items to the navbar -->
							<li <?php echo $data['page']=='home' ? 'class="active"' : ''; ?>>
								<a href="#">Home</a>
							</li>
							<li <?php echo $data['page']=='a' ? 'class="active"' : ''; ?>>
								<a href="#">Link</a>
							</li>
							<li <?php echo $data['page']=='s' ? 'class="active"' : ''; ?>>
								<a href="#">Link</a>
							</li>
							<li <?php echo $data['page']=='o' ? 'class="active"' : ''; ?>>
								<a href="#">Link</a>
							</li>
							<li <?php echo $data['page']=='u' ? 'class="active"' : ''; ?>>
								<a href="#">Link</a>
							</li>
							<li <?php echo $data['page']=='b' ? 'class="active"' : ''; ?>>
								<a href="#">Link</a>
							</li>
							<li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">English</a></li>
							  	<li><a href="#">Deutsch</a></li>
									<li><a href="">Pусский</a></li>
							  	<li><a href="#">Español</a></li>
							  	<li><a href="#">Français</a></li>
									<li><a href="">Nederlands</a></li>
									<li><a href="">Italiano</a></li>
									<li><a href="">Român</a></li>
								</ul>
							</li>
					  </ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
