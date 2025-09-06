<?php

    class Categoría{
        private $id;
        private $nombre;


        private $db;

        public function __contruct()
            {
            $ths->db = Database::conect();
            }

            function getId(){
             return $this->id;
            }

            function getId(){
             return $this->nombre;
            }

            function getId($id){
             return $this->$id;
            }

             function getId($nombre){
             return $this->$nombre;
            }



            //Hcaer eters y geters de producto
}