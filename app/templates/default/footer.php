<?php
use Helpers\Assets;
use Helpers\Url;
?>

<!-- JS -->
<?php
Assets::js(array(
	Url::templatePath() . 'js/jquery.js',
	Url::templatePath() . 'js/bootstrap.min.js'
));
?>

<footer class="footer-distributed">
			<div class="footer-left">
				<h3>Last <span>Stand</span> Studio</h3>
				<p class="footer-links">
					<a href="#"><?php echo $data['home']; ?></a>
					·
					<a href="#"><?php echo $data['about']; ?></a>
					·
					<a href="#"><?php echo $data['services']; ?></a>
					·
					<a href="#"><?php echo $data['careers']; ?></a>
					·
					<a href="http://laststandstudio.tumblr.com/"><?php echo $data['blog']; ?></a>
				</p>
				<p class="footer-company-name">Last Stand Studio &copy; 2015</p>
				<div class="footer-icons">
					<a href="https://github.com/LastStandStudio"><i class="fa fa-github"></i></a>
					<a href="https://twitter.com/LSStudioOffical"><i class="fa fa-twitter"></i></a>
					<a href="http://steamcommunity.com/id/LastStandStudio/profile"><i class="fa fa-steam"></i></a>
					<a href="http://www.twitch.tv/laststandstudio/profile"><i class="fa fa-twitch"></i></a>
				</div>
				<span id="cdSiteSeal2" style="text-align:center;"><script type="text/javascript" src="//tracedseals.starfieldtech.com/siteseal/get?scriptId=cdSiteSeal2&amp;cdSealType=Seal2&amp;sealId=55e4ye7y7mb734ba50f13d1561dca61q5ay7mb7355e4ye76e402209b5f95a0b5"></script></span>
			</div>
			<div class="footer-center">
			</div>
			<div class="footer-right">
				<p>Contact Us</p>
				<!-- TODO : Send email to 'officallaststandstudio@gmail.com' -->
				<form action="#" method="post">
					<input type="text" name="email" placeholder="Your Email" />
					<textarea name="message" placeholder="Your Message"></textarea>
					<button>Send</button>
				</form>
			</div>
		</footer>
</body>
</html>
