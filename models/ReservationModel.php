<?php

    namespace app\models;

    use app\core\BaseModel;

    class ReservationModel extends BaseModel {

        public int $reservation_id;

        public string $reservation_time = '';
        public int $user_id;

        public int $service_id;

        public function tableName(){

            return 'reservation';

        }

        public function readColumns(){

            return ['reservation_id', 'reservation_time', 'user_id', 'service_id'];

        }

        public function editColumns(){

            return ['reservation_time', 'user_id', 'service_id'];

        }

        public function validationRules(){

            return [
                'reservation_time' => [self::RULE_REQUIRED],
                'user_id' => [self::RULE_REQUIRED],
                'service_id' => [self::RULE_REQUIRED],
            ];

        }

    }
?>