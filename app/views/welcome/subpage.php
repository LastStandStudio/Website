<?php

use Core\Language;

?>

<div class="page-header">
	<h1><?php echo $data['title'] ?></h1>
</div>

<p><?php echo $data['welcome_message'] ?></p>

<a class="btn btn-md btn-success" href="<?php echo wURL;?>">
	<?php echo Language::show('back_home', 'Welcome'); ?>
</a>
