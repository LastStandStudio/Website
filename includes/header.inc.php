<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Last Stand Studio</title>

    <link rel="icon" type="image/ico" href="assets/favicon.ico"/>
    <link rel="stylesheet" href="css/foundation.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/jquery.js"></script>

	<script>
		function capFLetter(string)
		{
			return string.charAt(0).toUpperCase() + string.slice(1);
		}

		function changeActivePage(pageName){
			var elements = [];
		
			$("li[id^='mb_']").each(function(){
				$(this).removeClass("active");
			});
		
			$("#mb_"+pageName).addClass("active");
			document.title = "Last Stand Studio | " + capFLetter(pageName);
		}
	</script>
</head>

<body>
<div class="sticky">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="index.php">Last Stand Studio</a>
                </h1>
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#">
                    <span>Menu</span>
                </a>
            </li>
        </ul>
        <section class="top-bar-section">
            <ul class="right">
                <li class="divider"></li>
                <li id="mb_home" class="active"><a href="index.php">Home</a>
                </li>
                <li class="divider"></li>
                <li class="has-dropdown"><a href="#">Games</a>
                    <ul class="dropdown">
                        <li><a href="#">More to come...</a>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li id="mb_blog"><a href="http://laststandstudio.tumblr.com/" target="_blank">Blog</a>
                </li>
                <li class="divider"></li>
                <li id="mb_about"><a href="about.php">About</a>
                </li>
                <li class="divider"></li>
                <li id="mb_gallery"><a href="gallery.php">Gallery</a>
                </li>
                <li class="divider"></li>
                <li id="mb_jobs"><a href="jobs.php">Jobs</a>
                </li>
                <li class="divider"></li>
            </ul>
        </section>
    </nav>
</div>
<div id="main">