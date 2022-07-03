<?php
    class Servicios extends Controlador{
        public function __construct(){
            parent::__construct();

        }

        public function Servicios($params){
            $data['page_id'] = 2;
            $data['page_tage'] = "Servicios";
            $data['page_title'] = "Servicios disponibles";
            $data['page_name'] = "Servicios";
            $this->views->getView($this,"servicios",$data);
        }


    }


?>