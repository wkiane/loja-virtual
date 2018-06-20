<?php
	class Categorias extends Model {

		public function getNome($id) {
			$sql = "SELECT titulo FROM categorias WHERE id = :id";
			$sql = $this->db->prepare($sql);
			$sql->bindParam(':id', $id);
			$sql->execute();


			$nome = '';
			if($sql->rowCount() > 0) {
				$sql = $sql->fetch();

				$nome = $sql->titulo;
			}
			return $nome;
		}
	}