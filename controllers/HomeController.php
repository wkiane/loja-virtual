<?php

class HomeController extends Controller {

    public function index() {
        $dados = [];

        $produtos = new Produtos();
        $dados['produtos'] = $produtos->listar(8);

        $this->loadTemplate('home', $dados);
    }
}
