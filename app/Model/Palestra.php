<?php
/**
 * MODEL DE PALESTRA
 * 
 * 
 */

class Palestra extends AppModel {
	public $useTable = 'palestras';
	public $cacheQueries = true;
	public $displayField = 'nome';
	
	public $belongsTo = array('Palestrante');
}

