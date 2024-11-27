<?php

    namespace app\models;

    use app\core\BaseModel;

    class SessionUserModel extends BaseModel {

        public int $user_id;
        public $first_name;
        public $last_name;
        public string $email;
        public string $role;

        public function getSessionData(){

            $query = "select u.user_id as user_id, u.first_name, u.last_name, u.email, r.role_name as role from user_role ur
                      left join user u on ur.user_id = u.user_id
                      left join role r on ur.role_id = r.role_id
                      where u.email = '$this->email'";

            $dbResult = $this->con->query($query);

            $resultArray = [];

            while ($result = $dbResult->fetch_assoc()){
                $resultArray[] = $result;

            }

            return $resultArray;

        }

        public function tableName(){

            return '';

        }

        public function readColumns(){

            return [];

        }

        public function editColumns(){

            return [];

        }

        public function validationRules(){

            return [];

        }
    }

?>