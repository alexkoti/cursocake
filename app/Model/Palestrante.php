<?php
/**
 * MODEL DE PALESTRANTE
 * 
 * 
 */

class Palestrante extends AppModel {
	public $useTable = 'palestrantes';
	public $cacheQueries = true;
	public $displayField = 'nome';
	
	public $hasMany = array('Palestra');
}

