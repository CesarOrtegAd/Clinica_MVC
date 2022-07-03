<?php

    class Mysql extends Conexion{
        private $conexion,$strquery, $arrValues;

        function __construct(){
            $this->conexion=new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        //INSERTAR REGISTRO
        public function insert(string $query, array $arrValues){
            $this->strquery = $query;
            $this->arrValues = $arrValues;
            $insert = $this->conexion->prepare($this->strquery);
            $reInsert = $insert->execute($this->arrValues);
            if($reInsert){
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        //BUSCAR REGISTRO
        public function select(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        //DEVOLVER MÁS DE UN REGISTRO
        public function select_all(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        //ACTUALIZAR REGISTROS
        public function update(string $query, array $arrValues){
            $this->strquery = $query;
            $this->arrValues = $arrValues;
            $update = $this->conexion->prepare($this->strquery);
            $resExecute =$update->execute($this->arrValues);
            return $resExecute;
        }

        //ELIMINAR REGISTROS
        public function delete(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $del = $result->execute();
            return $del;
        }



    }

?>