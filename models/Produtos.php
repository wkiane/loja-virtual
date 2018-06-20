<?php
	class Produtos extends Model {
		public function listar($qt = 0) {
			$sql = "SELECT * FROM produtos ORDER BY RAND()";
			if($qt > 0) {
				$sql = "SELECT * FROM produtos ORDER BY RAND() LIMIT $qt";
				$sql = $this->db->prepare($sql);
			} else {
				$sql = $this->db->prepare($sql);
			}
			$sql->execute();

			$produtos = [];
			if($sql->rowCount() > 0) {
				$produtos = $sql->fetchAll();
			}
			return $produtos;
		}

		public function listar_categoria($categoria) {
			$sql = "SELECT * FROM produtos WHERE id_categoria = :id_categoria";
			$sql = $this->db->prepare($sql);
			$sql->bindParam(':id_categoria', $categoria);
			$sql->execute();

			$produtos = [];
			if($sql->rowCount() > 0) {
				$produtos = $sql->fetchAll();
			}
			return $produtos;
		}

		public function mostrar_produto($id) {
			$sql = "SELECT * FROM produtos WHERE id = :id";
			$sql = $this->db->prepare($sql);
			$sql->bindParam(':id', $id);
			$sql->execute();

			$produto = [];
			if($sql->rowCount() > 0) {
				$produto = $sql->fetch();
			}
			return $produto;
		}



	}