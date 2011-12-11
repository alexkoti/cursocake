
			<section id="sidebar">
				<nav>
					<ul id="menu">
						<li><?php echo $this->Html->link('Início', '/'); ?></li>
						<li><?php echo $this->Html->link('Programação', '/programacao'); ?></li>
						<li><?php echo $this->Html->link('Inscrição', '/inscricao'); ?></li>
						<li><?php echo $this->Html->link('Sobre', '/sobre'); ?></li>
						<li><?php echo $this->Html->link('Local', array('controller' => 'pages', 'action' => 'display', 'local')); ?></li>
					</ul>
				</nav>
			</section>