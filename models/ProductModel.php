<?php

    namespace app\models;

    use app\core\BaseModel;
    use app\core\DbConnection;

    class ProductModel extends BaseModel {

        public int $product_id;
        public string $name;
        public string $description;
        public int $price;


        public function tableName(){

            return "product";

        }

        public function readColumns(){

            return ["product_id", "name", "description"];

        }

        public function editColumns(){

            return ["name", "description"];

        }

    }

?>