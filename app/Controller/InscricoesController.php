<?php
/**
 * CONTROLLER DE INSCRIÇÔES
 * 
 * 
 */
 
class InscricoesController extends AppController {
	public $uses = array('Inscricao');
	
	/**
	 * Carrega automaticamente a view "/View/inscricoes/inscrever.ctp"
	 * 
	 */
	public function inscrever(){
		$this->set( 'lorem', 'ipsum' );
		
		$IsPost = $this->request->is('Post');
		// Se é um POST e recebemos dados do formulário
		if( $IsPost && !empty( $this->request->data ) ){
			// Tenta salvar os dados
			if( $this->Inscricao->save( $this->request->data ) ){
				echo 'AYEAHHHHHH!!!';
			}
		}
	}
}