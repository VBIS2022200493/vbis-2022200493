<?php

    namespace app\controllers;

    use app\core\Application;
    use app\core\BaseController;
    use app\models\ReservationModel;
    use app\models\ServiceModel;

    class ReservationController extends BaseController {

        public function processReservation(){


            $model = new ReservationModel();

            $model->mapData($_POST);



            $model->one("where reservation_time = '$model->reservation_time' and service_id = $model->service_id ");

            if(isset($model->reservation_id)){
                Application::$app->session->set('errorNotification', 'Vec postoji zakazani termin za izabrani datum!');
                header("location:" . "/servicesForUser");
                exit;
            }

            if($model->reservation_time == ""){
                Application::$app->session->set('errorNotification', 'Morate izabrati datum i vreme termina!');
                header("location:" . "/servicesForUser");
                exit;
            }



            $sessions = Application::$app->session->get('user');

            foreach ($sessions as $session) {

                $model->user_id = $session['user_id'];

            }

            $serviceModel = new ServiceModel();
            $serviceModel->one("where service_id = '$model->service_id'");
            $model->price = $serviceModel->price;

            $model->insert();
            Application::$app->session->set('successNotification', 'Uspesno rezervisan termin');

            header("location:" . "/");

        }

        public function accessRole(){

            return ['Korisnik', 'Administrator'];

        }
    }

?>