<?php

    namespace app\controllers;

    use app\core\Application;
    use app\core\BaseController;
    use app\models\ServiceModel;


    class ServiceController extends BaseController{

        public function list(){

            $model = new ServiceModel();

            $result = $model->all("");

            $this->view->render('services', 'main', $result);

        }

        public function listForUsers(){

            $model = new ServiceModel();

            $result = $model->all("");

            $this->view->render('servicesForUser', 'auth', $result);

        }

        public function create(){

            $model = new ServiceModel();
            $this->view->render('createService', 'main', $model);

        }

        public function update(){

            $model = new ServiceModel();
            $model->mapData($_GET);

            $model->one("where service_id = $model->service_id");
            $this->view->render('updateService', 'main', $model);

        }

        public function processCreate(){

            $model = new ServiceModel();
            $model->mapData($_POST);
            $model->validate();
            if ($model->errors) {
                Application::$app->session->set('errorNotification', 'Neuspesan kreiranje!');
                $this->view->render('createService', 'main', $model);
                exit;
            }
            $model->insert();

            Application::$app->session->set('successNotification', 'Uspeno kreiranje!');

            header("location:" . "/services");

        }

        public function processUpdate(){

            $model = new ServiceModel();
            $model->mapData($_POST);
            $model->validate();
            if ($model->errors) {
                Application::$app->session->set('errorNotification', 'Neuspesna promena!');
                $this->view->render('updateService', 'main', $model);
                exit;
            }
            $model->update("where service_id = $model->service_id");

            Application::$app->session->set('successNotification', 'Uspena promena!');

            header("location:" . "/services");

        }

        public function accessRole(){

            return ['Administrator'];

        }
    }

?>