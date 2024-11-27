<?php

    namespace app\models;

    use app\core\BaseModel;

    class ServiceModel extends BaseModel{

        public int $service_id;
        public string $service_name ='';
        public string $location = '';
        public string $store_name = '';
        public $service_img = '';

        public $price = 0;

        public function tableName(){

            return 'service';

        }

        public function readColumns(){

            return ['service_id', 'service_name', 'location', 'store_name', 'service_img', 'price'];

        }

        public function editColumns(){

            return ['service_name', 'location', 'store_name', 'service_img', 'price'];

        }

        public function validationRules(){

            return [
                'service_name' => [self::RULE_REQUIRED],
                'location' => [self::RULE_REQUIRED],
                'store_name' => [self::RULE_REQUIRED],
                'price' => [self::GREATER_THEN_ZERO, self::RULE_REQUIRED],
            ];

        }
    }

?>