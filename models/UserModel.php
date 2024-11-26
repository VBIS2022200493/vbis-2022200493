<?php

    namespace app\models;

    use app\core\BaseModel;
    use app\core\DbConnection;

    class UserModel extends BaseModel {

        public int $user_id;
        public string $email;
        public string $first_name;
        public string $last_name;

        public function __construct(){

        }

        public function tableName(){

            return "user";

        }

        public function readColumns(){

            return ["user_id", "email", "first_name", "last_name"];

        }

        public function editColumns(){

            return ["email", "first_name", "last_name"];

        }

    }

?>