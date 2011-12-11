<?php
/**
 * MODEL DE INSCRIÇÔES
 * 
 * 
 */

class Inscricao extends AppModel {
	public $useTable = 'inscricoes';
	public $order = array(
		'created' => 'DESC',
		'nome' => 'ASC',
	);
	public $cacheQueries = true;
	
}

