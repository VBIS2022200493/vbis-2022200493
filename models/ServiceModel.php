<?php

    namespace app\models;

    use app\core\BaseModel;

    class ServiceModel extends BaseModel{

        public int $service_id;
        public string $service_name ='';
        public string $location = '';
        public string $store_name = '';
        public $service_img = '';

        public function tableName(){

            return 'service';

        }

        public function readColumns(){

            return ['service_id', 'service_name', 'location', 'store_name', 'service_img'];

        }

        public function editColumns(){

            return ['service_name', 'location', 'store_name', 'service_img'];

        }

        public function validationRules(){

            return [
                'service_name' => [self::RULE_REQUIRED],
                'location' => [self::RULE_REQUIRED],
                'store_name' => [self::RULE_REQUIRED],
            ];

        }
    }

?>