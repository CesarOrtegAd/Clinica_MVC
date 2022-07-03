<?php
    class Home extends Controlador{
        public function __construct(){
            parent::__construct();

        }

        public function home($params){
            $data['tag_page'] = "Home";
            $data['page_title'] = "Pagina principal";
            $data['page_name'] = "home";
            $this->views->getView($this,"home",$data);
        }

        public function insertar(){
            $data = $this->model->setUser("Cesar",23);
            $data = $this->model->setUser("Yair",21);
            print_r($data);
        }

        public function verusuario($id){
            $data = $this->model->getUser($id);
            print_r($data);
        }
        
        public function actualizar(){
            $data = $this->model->updateUser(1,"Adriana",23);
            print_r($data);
        }

        public function verusuarios(){
            $data = $this->model->getUsers();
            print_r($data);
        }

        public function eliminarUsuario($id){
            $data = $this->model->delUser($id);
            print_r($data);
        }

    }


?>