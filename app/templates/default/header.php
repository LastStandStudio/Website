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
		Url::templatePath() . 'css/bootstrap.min.css',
		Url::templatePath() . 'css/language.min.css',
		Url::templatePath() . 'css/font-awesome.min.css',
		Url::templatePath() . 'css/style.css',
	));
	?>

</head>
<body>
	<!-- Nav Bar -->
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
						<a class="navbar-brand" href="/">Last <span>Stand</span> Studio</a>
	    		</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li <?php echo $data['page']=='home' ? 'class="active"' : ''; ?>>
								<a href="/"><?php echo $data['home']; ?></a>
							</li>
							<li <?php echo $data['page']=='about' ? 'class="active"' : ''; ?>>
								<a href="/about"><?php echo $data['about']; ?></a>
							</li>
							<li <?php echo $data['page']=='services' ? 'class="active"' : ''; ?>>
								<a href="/services"><?php echo $data['services']; ?></a>
							</li>
							<li <?php echo $data['page']=='careers' ? 'class="active"' : ''; ?>>
								<a href="/careers"><?php echo $data['careers']; ?></a>
							</li>
							<li>
								<a href="http://laststandstudio.tumblr.com/"><?php echo $data['blog']; ?></a>
							</li>
							<!-- TODO : Add Language Changing Fucntionality -->
							<li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i> <span class="caret"></span></a>
								<ul class="dropdown-menu language">
									<li lang="de"><a href="#"><span class="lang-xs" lang="de"></span>  <span class="lang-lbl" lang="de"></span></a></li>
							  	<li lang="en"><a href="#"><span class="lang-xs" lang="en"></span>  <span class="lang-lbl" lang="en"></a></li>
									<li lang="ru"><a href="#"><span class="lang-xs" lang="ru"></span>  <span class="lang-lbl" lang="ru"></a></li>
									<li lang="fr"><a href="#"><span class="lang-xs" lang="fr"></span>  <span class="lang-lbl" lang="fr"></a></li>
							  	<li lang="it"><a href="#"><span class="lang-xs" lang="it"></span>  <span class="lang-lbl" lang="it"></a></li>
							  	<li lang="nl"><a href="#"><span class="lang-xs" lang="nl"></span>  <span class="lang-lbl" lang="nl"></a></li>
									<li lang="pl"><a href="#"><span class="lang-xs" lang="pl"></span>  <span class="lang-lbl" lang="pl"></a></li>
									<li lang="ro"><a href="#"><span class="lang-xs" lang="ro"></span>  <span class="lang-lbl" lang="ro"></a></li>
								</ul>
							</li>
					  </ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
<div class="">
