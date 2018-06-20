<?php
	class CategoriaController extends Controller {
		public function ver($id) {
				if(!empty($id)) {
					$dados = [
					'categoria' => '',
					'produtos' => array()
				];

				$produtos = new Produtos();
				$dados['produtos'] = $produtos->listar_categoria($id);

				$cat = new Categorias();
				$dados['categoria'] = $cat->getNome($id);

				$this->loadTemplate('categoria', $dados);
			} else {
				echo "id nao existente";
			}

		}



	}