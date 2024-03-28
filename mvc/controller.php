<?php
require "view.php";
require "model.php";
class Controller{
    public function index(){
        $model = new Model();
        $view = new View();
        $nome = $model -> get_nome();
        $view = render($nome);
        
        $tipo = $model -> get_tipo();
        $view = exibirtipo($tipo);
        
        $raca = $model -> get_raca();
        $view = exibirraca($raca);
        
        $cor = $model -> get_cor();
        $view = exibircor($cor);
        
        
    }
}
