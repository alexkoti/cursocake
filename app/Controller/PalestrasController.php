<?php
/**
 * CONTROLLER DE PALESTRAS
 * 
 * 
 */
 
class PalestrasController extends AppController {
	public $uses = array('Palestra');
	
	public $helpers = array("Html", "Form", "Session", "Time", "Text");
	
	function index(){
		$this->set("palestras",$this->paginate());
	}
	
	/**
	 * Carrega automaticamente a view "/View/palestras/cadastrar.ctp"
	 * 
	 */
	public function cadastrar(){
		$this->set("palestrantes", $this->Palestra->Palestrante->find('list'));
		
		$IsPost = $this->request->is('Post');
		// Se é um POST e recebemos dados do formulário
		if( $IsPost && !empty( $this->request->data ) ){
			// Tenta salvar os dados
			if( $this->Palestra->save( $this->request->data ) ){
				echo 'palestra adicionada!';
			}
		}
	}
}





