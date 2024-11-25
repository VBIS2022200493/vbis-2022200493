<?php
    namespace app\controllers;
    use app\core\BaseController;
    use app\core\DbConnection;
    use app\models\UserModel;

    class UserController extends BaseController{

        public function readUser(){

            $model = new UserModel();
            $result = $model->get();
            $model->mapData($result);
            echo "<pre>";
            var_dump($result);
            exit;

            $this->view->render('getUser', 'main', $model);

        }

    }