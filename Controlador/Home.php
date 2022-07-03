<?php
    class Home extends Controlador{
        public function __construct(){
            parent::__construct();

        }

        public function home($params){
            $data['page_id'] = 1;
            $data['page_tage'] = "Home";
            $data['page_title'] = "Pagina principal";
            $data['page_name'] = "home";
            $this->views->getView($this,"home",$data);
        }


    }


?>