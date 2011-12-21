<?php
/**
 * 
 * 
 */
?>


<table>
    <tr>
        <th>Título</th>
        <th>Descrição</th>
        <th>Início</th>
        <th>Fim</th>
        <th>Palestrante</th>
    </tr>
    <?php foreach($palestras as $palestra){ ?>
    <tr>
        <td><?php echo $palestra['Palestra']['nome']; ?></td>
        <td></td>
        <td><?php echo $this->Time->format('H:i', $palestra['Palestra']['inicio']); ?></td>
        <td><?php echo $this->Time->format('H:i', $palestra['Palestra']['fim']); ?></td>
        <td>
        <?php
            echo $this->Html->link(
                $palestra['Palestrante']['nome']
                , array(
                    'controller'=>'palestrantes'
                    ,'action'   => 'ver'
                    ,'nome'=>strtolower(Inflector::slug($palestra['Palestrante']['nome'], '-'))
                    ,'id'=>$palestra['Palestrante']['id']
                )
            );
        ?>
        </td>
    </tr>
    <?php } ?>
</table>