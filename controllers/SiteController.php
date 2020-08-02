<?php
namespace app\controllers;
use app\models\SignupForm;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\Pagination;
use yii\web\Request;
use app\models\Indexx;
class SiteController extends Controller
{






    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
            ],
        ];
    } 
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }


  


	


	

    public function actionIndexx(){
        if( Yii::$app->request->isAjax){
            debug(Yii::$app->request->post());
            return 'indexx';
        }

        $model = new Indexx();
        if( $model->load(Yii::$app->request->post()) ){
           	$date=date('G:i:s Y:m:d');
			$model->date=$date;
            if( $model->save() ){
                 Yii::$app->session->setFlash('success', 'Данные приняты');
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }
        $orders = Indexx::find();
        $pagination = new Pagination(['totalCount' => $orders->count(),
            'defaultPageSize'=>2]);

            $orders = $orders->offset( $pagination->offset )->limit( $pagination->limit )->all();

        $this->view->title = 'Добавить Комментарий';
        return $this->render('indexx', ['model'=>$model,'orders' => $orders,'pagination' => $pagination]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

 
    


}
