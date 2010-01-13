<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		<?php __('CakePHP: the rapid development php framework. '); ?>
		<?php echo $title_for_layout;?>
	</title>
	<?php
		echo $html->charset();
		echo $html->css('/' . $this->plugin . '/css/reset');
		echo $html->css('/' . $this->plugin . '/css/style');
		echo $javascript->link('/' . $this->plugin . '/js/ie6hover');
		// echo '<!--[if lte IE 7]>' . $html->css('ieold') . '<![endif]-->';
	?>
</head>
<body><?php echo $content_for_layout; ?></body>
</html>