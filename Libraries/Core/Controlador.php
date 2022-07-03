<?php
    class Controlador{
        public function __construct(){
            $this->views = new Vista();
            $this->loadModel();
        }

        public function loadModel(){
            $model = get_class($this)."Model";
            $routClass = "Modelo/".$model.".php";
            if(file_exists($routClass)){
                require($routClass);
                $this->model = new $model();
            }
        }
    }


?>