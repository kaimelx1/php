<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\Signup;

class CrudController extends Controller
{
    /**
     * Show list of users.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/site/login');
        }

        $users = User::getAll();

        return $this->render('index',['users' => $users]);
    }

    /**
     * Show user info.
     *
     * @return string
     */
    public function actionShow($id = null)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/site/login');
        }

        $user = User::getOne($id);

        if($user !== null) {

            return $this->render('show',['user' => $user]);
        }

        return $this->redirect(['error']);
    }

    /**
     * Delete user.
     *
     * @return string
     */
    public function actionDelete($id = null)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/site/login');
        }

        $user = User::getOne($id);

        if($user !== null) {

            $user->delete();

            return $this->redirect('/crud');
        }

        return $this->redirect(['error']);
    }

    /**
     * Create new user.
     *
     * @return string
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/site/login');
        }

        $user = new Signup();

        if ($_POST['Signup']) {

            $user->attributes = Yii::$app->request->post('Signup');

            if ($user->validate() && $user->signup()) {

                return $this->redirect('/crud');
            }
        }

        return $this->render('create',['user' => $user]);
    }

    /**
     * Edit user info.
     *
     * @return string
     */
    public function actionEdit($id = null)
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/site/login');
        }

        $user = User::getOne($id);

        if ($_POST['User']) {

            $user->username = $_POST['User']['username'];

            $user->password = md5($_POST['User']['password']);

            if ($user->validate() && $user->save()) {

                return $this->redirect('/crud');
            }
        }

        return $this->render('edit',['user' => $user]);
    }
}