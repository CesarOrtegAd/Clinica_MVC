<?php
    class Errors extends Controlador{
        public function __construct(){
            parent::__construct();

        }

        public function notFound(){
            $this->views->getView($this,"error");
        }

      
    }
    $notFound = new Errors();
    $notFound->notFound();

?>