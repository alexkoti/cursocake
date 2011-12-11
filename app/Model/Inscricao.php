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
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Preencha o seu nome',
			),
		),
		'email' => array(
			'email' => array(
				'rule' => 'email',
				'message' => 'Insira um email válido',
				'required' => true,
				'allowEmpty' => false,
			),
		),
		'telefone' => array(
			'required' => array(
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Precisamos de um telefone para entrar em contato caso seja preciso.',
			),
		),
	);
}

