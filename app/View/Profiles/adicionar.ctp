<?php

echo $this->Form->create('Profile', array('action' => 'adicionar'));
echo $this->Form->input('nome');
echo $this->Form->input('email');
echo $this->Form->input('description');
echo $this->Form->submit('Enviar Dados');
echo $this->Form->end();
?>