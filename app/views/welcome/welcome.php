<?php
use Core\Language;
?>

<div class="page-header">
	<h1><?php echo $data['title'] ?></h1>
</div>

<p><?php echo $data['welcome_message']; echo $_SERVER['HTTP_HOST']; ?></p>

<a class="btn btn-md btn-success" href="<?php echo wURL;?>subpage">
	<?php echo Language::show('open_subpage', 'Welcome'); ?>
</a>
