<?php

    namespace app\controllers;

    use app\core\Application;
    use app\core\BaseController;
    use app\models\ServiceModel;

    class UserServicesController extends BaseController{


        public function listForUsers(){

            $model = new ServiceModel();

            $result = $model->all("");

            $this->view->render('servicesForUser', 'auth', $result);

        }

        public function processReservation(){


            $model = new ServiceModel();

            $result = $model->all("");

            $this->view->render('servicesForUser', 'auth', $result);

        }

        public function accessRole(){

            return [];

        }

    }

?>