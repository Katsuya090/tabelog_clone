
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>

		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');


		echo $this->Html->css('cake.app.css');
		echo $this->Html->css('style.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<!-- navigation -->
	<?= $this->element('navbar'); ?>
		<div id="content">

			<?php echo $this->Flash->render(); ?>
<br>----------<br>
			<?php echo $this->fetch('content'); ?>
<br>----------<br>
		</div>
		<div id="footer">

			<p>

			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
