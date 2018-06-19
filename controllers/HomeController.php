<?php

class HomeController extends Controller {

    public function index() {
        $array = [];
        $this->loadTemplate('home', $array);
    }

}
