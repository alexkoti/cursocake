<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ciclo de palestras sobre literatura fantástica</title>
<?php echo $this->Html->css('site') ?>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,300italic,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="site">
		<?php echo $this->element('header') ?>
		
		<section id="content">
			<?php echo $this->element('sidebar') ?>
			
			<section id="column">
				<?php echo $content_for_layout ?>
			</section>
		</section>
		
		<?php echo $this->element('footer') ?>
	</div>
</body>
</html>