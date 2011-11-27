
<ul>
	<li><?php echo $lorem; ?></li>
	<li><?php echo $foo; ?></li>
	<li><?php echo $qwerty; ?></li>
	<li>
		<?php
		foreach( $escritores as $escritor ){
			echo "<p>{$escritor}</p>";
		}
		?>
	</li>
</ul>

