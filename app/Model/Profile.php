<?php
/**
 * MODEL DE INSCRIÇÔES
 * 
 * 
 */

class Profile extends AppModel {
	public $order = array(
		'created' => 'DESC',
		'nome' => 'ASC',
	);
	public $cacheQueries = true;
	
}

