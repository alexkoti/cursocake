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
	public $validate = array(
		'nome' => array(
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'Este nome já está cadastrado!',
			),
			'required' => array(
				'rule' => 'required',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Preencha o email',
			),
		),
		'email' => array(
			'rule' => 'email',
			'message' => 'Insira um email válido',
			'required' => true,
			'allowEmpty' => false,
		),
		'telefone' => array(
			'rule' => 'telefone',
			'message' => 'Precisamos de um telefone para entrar em contato caso seja preciso.',
			'required' => true,
			'allowEmpty' => false,
		),
	);
}

