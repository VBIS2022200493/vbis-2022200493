<?php
    namespace app\controllers;
    use app\core\BaseController;
    use app\models\UserModel;

    class UserController extends BaseController{

        public function readUser(){

            $model = new UserModel();
            $model->email = 'mihajlo.markovic.22@singimail.rs';
            $model->firstName = 'Mihajlo';
            $model->lastName = 'Markovic';



            $this->view->render('getUser', 'main', $model);

        }

    }