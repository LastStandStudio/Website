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

<script type="text/javascript">
	function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
  	document.cookie = cname + "=" + cvalue + "; " + expires;
	}

	$('ul.language li').click(function(){
		console.log($(this).attr('lang'));
		setCookie('language', $(this).attr('lang'), 365);
		location.reload();
	});
</script>

</div>

<footer class="footer-distributed">
			<div class="footer-left">
				<h3>Last <span>Stand</span> Studio</h3>
				<p class="footer-links">
					<a href="/"><?php echo $data['home']; ?></a>
					·
					<a href="/about"><?php echo $data['about']; ?></a>
					·
					<a href="/services"><?php echo $data['services']; ?></a>
					·
					<a href="/careers"><?php echo $data['careers']; ?></a>
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
				<p><?php echo $data['contact']?></p>
				<!-- TODO : Send email to 'officallaststandstudio@gmail.com' -->
				<form action="#" method="post">
					<input type="text" name="email" placeholder="<?php echo $data['email'] ?>" />
					<textarea name="message" placeholder="<?php echo $data['msg'] ?>"></textarea>
					<button><?php echo $data['send']?></button>
				</form>
			</div>
		</footer>
</body>
</html>
