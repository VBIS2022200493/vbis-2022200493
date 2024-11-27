<?php

    namespace app\models;

    use app\core\Application;
    use app\core\BaseModel;

    class ReportModel extends BaseModel {

        public function getNumberOfReservationsPerMonth(){

            $user_id = 0;
            $sessions = Application::$app->session->get('user');

            foreach ($sessions as $session) {
                $user_id = $session['user_id'];
            }

            $dbResult = $this->con->query("SELECT MONTHNAME(reservation_time) as 'month', count(reservation_id) as 'number_of_reservations' FROM reservation where user_id = $user_id group by MONTHNAME(reservation_time);");

            $resultArray = [];

            while ($result = $dbResult->fetch_assoc()) {
                $resultArray[] = $result;
            }

            echo json_encode($resultArray);

        }

        public function getPricePerMonth(){

            $user_id = 0;
            $sessions = Application::$app->session->get('user');

            foreach ($sessions as $session) {
                $user_id = $session['user_id'];
            }

            $dbResult = $this->con->query("SELECT MONTHNAME(reservation_time) as 'month', sum(price) as 'price' FROM reservation where user_id = $user_id group by MONTHNAME(reservation_time);");

            $resultArray = [];

            while ($result = $dbResult->fetch_assoc()) {
                $resultArray[] = $result;
            }

            echo json_encode($resultArray);

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