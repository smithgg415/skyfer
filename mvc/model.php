<?php
class model{
    public $nome;
    public $tipo;
    public $raca;
    public $cor;
    public function __construct(){
        $this -> nome = "totó";
        $this -> nome = "cachorro";
        $this -> nome = "PitBull";
        $this -> nome = "creme";
    }
    public function get_nome(){
        return $this -> nome;
    }
    
    public function get_tipo(){
        return $this -> tipo;
    }
    
    public function get_raca(){
        return $this -> raca;
    }
    
    public function get_cor(){
        return $this -> cor;
    }
}