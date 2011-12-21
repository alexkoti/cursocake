<?php
/**
 * 
 * 
 */
?>

<h1>Cadastrar palestrante</h1>

<?php
echo $this->Form->create('Palestrante');
echo $this->Form->input('nome', array('label' => 'Nome do Palestrante', 'class'=> 'ipt_text ipt_size_medium', 'max-length' => 100));
echo $this->Form->input('descricao', array('type' => 'textarea', 'label' => 'Descrição', 'class'=> 'ipt_textarea ipt_size_large', 'max-length' => 500));
echo $this->Form->input('site', array('label' => 'Site', 'class'=> 'ipt_text ipt_size_medium'));
echo $this->Form->submit('Enviar Dados', array('class' => 'ipt_submit'));
echo $this->Form->end();
?>