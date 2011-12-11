<?php
/**
 * CONTROLLER DE INSCRIÇÔES
 * 
 * 
 */
 
class ProfilesController extends AppController {
	
	/**
	 * Carrega automaticamente a view "/View/inscricoes/inscrever.ctp"
	 * 
	 */
	public function adicionar(){
		$IsPost = $this->request->is('Post');
		// Se é um POST e recebemos dados do formulário
		if( $IsPost && !empty( $this->request->data ) ){
			// Tenta salvar os dados
			if( $this->Profile->save( $this->request->data ) ){
				echo 'AYEAHHHHHH!!!';
			}
		}
	}
}