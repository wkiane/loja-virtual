<?php

class Controller extends Model {

    public function loadView($viewName, $viewData = array()) {
        /** extract transformar as chaves do array em variaveis para acessar na view
         *  $viewData = array('nome' => 'Paulo', 'idade' => 25);
         *  $nome = paulo;
         *  $idade = 25;
         */
        extract($viewData);
        require './views/' . $viewName . '.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {

        $sql = "SELECT * FROM categorias";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        $menu = [];
        if($sql->rowCount() > 0) {
            $menu = $sql->fetchAll();
        }

        require './views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require './views/' . $viewName . '.php';
    }

}
