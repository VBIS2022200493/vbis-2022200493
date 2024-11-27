<?php

    namespace app\models;

    use app\core\Application;
    use app\core\BaseModel;

    class UserReservedModel extends BaseModel{

        public string $service_name ='';
        public string $location = '';
        public string $store_name = '';
        public string $reservation_time = '';
        public $service_img = '';

        public function tableName(){

            return '';

        }

        public function readColumns(){

            return ['service_id', 'reservation_time', 'service_name', 'location', 'store_name', 'service_img'];

        }

        public function editColumns(){

            return [];

        }

        public function validationRules(){

            return [];

        }

        public function getReservedData(){

            $user_id = 0;
            $sessions = Application::$app->session->get('user');

            foreach ($sessions as $session) {
                $user_id = $session['user_id'];

            }



            $query = "select r.reservation_time, s.* from reservation r
                      left join service s on r.service_id = s.service_id
                      where r.user_id = $user_id";

            $dbResult = $this->con->query($query);

            $resultArray = [];

            while ($result = $dbResult->fetch_assoc()){
                $resultArray[] = $result;

            }

            return $resultArray;

        }

    }

?>