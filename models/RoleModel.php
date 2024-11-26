<?php

    namespace app\models;

    use app\core\BaseModel;

    class RoleModel extends BaseModel {

        public int $role_id;
        public string $role_name;
        public function tableName(){

            return 'role';

        }

        public function readColumns(){

            return ['role_id', 'role_name'];

        }

        public function editColumns(){

            return ['role_name'];

        }

        public function validationRules(): array{

            return[

                "role_name" => [self::RULE_REQUIRED],

            ];

        }

    }


?>