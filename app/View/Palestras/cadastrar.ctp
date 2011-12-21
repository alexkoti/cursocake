<?php
/**
 * 
 * 
 */
?>

<h1>Cadastrar palestra</h1>

<?php
print_r($palestrantes);

echo $this->Form->create('Palestra');
echo $this->Form->input('nome', array('label' => 'Nome da Palestra', 'max-length' => 100));
echo $this->Form->input('descricao', array('label' => 'Descrição', 'max-length' => 500));
echo $this->Form->input('inicio', array('label' => 'Início'));
echo $this->Form->input('fim', array('label' => 'Fim'));
echo $this->Form->input('palestrante_id', array('label' => 'Palestrante'));
echo $this->Form->submit('Enviar Dados', array('class' => 'ipt_submit'));
echo $this->Form->end();
?>