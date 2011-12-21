<?php
/**
 * CONTROLLER DE PALESTRANTE
 * 
 * 
 */
 
class PalestrantesController extends AppController {
	public $uses = array('Palestrante');
	
	/**
	 * Carrega automaticamente a view "/View/palestras/cadastrar.ctp"
	 * 
	 */
	public function cadastrar(){
		
		$IsPost = $this->request->is('Post');
		// Se é um POST e recebemos dados do formulário
		if( $IsPost && !empty( $this->request->data ) ){
			// Tenta salvar os dados
			if( $this->Palestrante->save( $this->request->data ) ){
				echo 'palestrante adicionado!';
			}
		}
	}
}



