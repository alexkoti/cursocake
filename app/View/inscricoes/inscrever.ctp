<?php
/**
 * VIEW DE INSCREVER
 * 
 */

 
?>
<h1>Inscrição</h1>

<p>Resultado de <code>$this->set( 'lorem', 'ipsum' )</code> = <kbd><?php echo $lorem; ?></kbd></p>

<?php
/**
 * Poderia usar a primeira linha comentada, caso não tivesse sido feita a rota para este controller>action
 * 
 */
//echo $this->Form->create('Inscricao', array( 'url' => array('controller' => 'inscricoes', 'action' => 'inscrever') ) );
echo $this->Form->create('Inscricao');

echo $this->Form->input('Inscricao.nome', array('label' => 'Seu nome: ', 'class' => 'ipt_text ipt_size_medium', 'max-length' => '50'));
echo $this->Form->input('Inscricao.email', array('label' => 'Seu email: ', 'class' => 'ipt_text ipt_size_medium', 'max-length' => '100'));
echo $this->Form->input('Inscricao.telefone', array('label' => 'Seu telefone: ', 'class' => 'ipt_text ipt_size_small', 'max-length' => '10'));
echo $this->Form->input('Inscricao.endereco', array('label' => 'Seu endereço: ', 'class' => 'ipt_text ipt_size_large', 'max-length' => '100'));
echo $this->Form->submit('Enviar Dados', array('class' => 'ipt_submit'));
echo $this->Form->end();
?>