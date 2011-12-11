<?php
/**
 * VIEW DE INSCREVER
 * 
 */

 
?>
<h1>Inscrição</h1>

<p>Resultado de <code>$this->set( 'lorem', 'ipsum' )</code> = <kbd><?php echo $lorem; ?></kbd></p>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio enim, molestie non, pretium ut, fringilla vel, libero. Nam adipiscing ultricies nisl. 
Sed ornare. Vivamus sodales congue ligula. Nunc purus nulla, consectetuer non, sollicitudin a, tincidunt non, arcu. Nam purus urna, consequat eu, mattis 
scelerisque, facilisis eu, leo.</p>

<p>Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer libero diam, eleifend et, vestibulum non, 
scelerisque ut, ipsum. Ut dictum mattis libero. Duis quis arcu vel elit ultrices ornare. Donec neque dui, auctor eget, aliquet quis, tempus id, sem.
Fusce sapien.Duis lectus eros, elementum vitae, egestas eu, pharetra quis, nisl. Pellentesque viverra. Pellentesque id mauris gravida metus ultricies tincidunt.</p>

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