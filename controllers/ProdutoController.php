<?php
	class ProdutoController extends Controller {
		public function ver($id) {
			if(!empty($id)) {
				$dados = [];
				$produto = new Produtos();
				$dados['produto'] = $produto->mostrar_produto($id);

				$this->loadTemplate('produto', $dados);
			} else {
				echo 'id não existente';
			}

		}


	}