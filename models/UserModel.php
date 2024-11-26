<?php

    namespace app\models;

    use app\core\BaseModel;
    use app\core\DbConnection;

    class UserModel extends BaseModel {

        public int $user_id;
        public string $email = '';
        public string $first_name = '';
        public string $last_name = '';

        public function tableName(): string
        {

            return "user";

        }

        public function readColumns(): array
        {

            return ["user_id", "email", "first_name", "last_name"];

        }

        public function editColumns(): array
        {

            return ["email", "first_name", "last_name"];

        }

        public function validationRules(): array{

            return[

                "email" => [self::RULE_REQUIRED, self::RULE_EMAIL],
                "first_name" => [self::RULE_REQUIRED],
                "last_name" => [self::RULE_REQUIRED],

            ];

        }

    }

?>