<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\LoginForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

use yii\data\ArrayDataProvider;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'about', 'contact'],
                'rules' => [
                    [
                        'actions' => ['logout', 'about', 'contact'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    // public function beforeAction($action)
    // {
    //     $this->enableCsrfValidation = false;
    //     return parent::beforeAction($action);
    // }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        if (!Yii::$app->user->isGuest) {
            

            $outHistory = [];
            $outStatus = [];
            
            if ($msisdn = @$_GET['q']){
                $payloadStatus = [
                    'userid' => 'mybids',
                    'password' => 'SammyBird66',
                    'transid' => date('ymdhis').rand(000,999),
                    'operation' => 'get_product_status',
                    'msisdn' => $msisdn,
                ];
                $b = json_decode($this->getData($payloadStatus), true);
                
                $fromdate = @$_GET['fromdate'] ? $_GET['fromdate'] : date('Y-m-d', strtotime('-7 days'));
                $todate = @$_GET['todate'] ? $_GET['todate'] : date('Y-m-d');
                
                $payloadHistory = [
                    'userid' => 'mybids',
                    'password' => 'SammyBird66',
                    'transid' => date('ymdhis').rand(000,999),
                    'operation' => 'get_charging_log',
                    'msisdn' => $msisdn,
                    'productcode' => '1885',
                    'fromdate' => $fromdate,
                    'todate' => $todate,
                ];
                $a = json_decode($this->getData($payloadHistory), true);
            }

             
            if(@$a['response']['result']) {
                foreach(@$a['response']['result'] as $key=>$val){
                    foreach($val as $k=>$v){
                    $outHistory []= [
                        'productcode' => $v['productcode'],
                        'date' => $v['date_time'],
                        'amount' => $v['amount']
                    ];
                    }
                }
            }
            
            if (@$b['response']['result']) {
                foreach(@$b['response']['result'] as $r) {
                    $outStatus []= [
                        'productcode' => $r['productcode'],
                        'status' => $r['status']
                    ];
                }
            }
           
            $dataProviderHistory = new ArrayDataProvider([
                'allModels' => $outHistory,
                'pagination' => [
                    'pageSize' => 10,
                 ],
                 'sort' => [
                    'attributes' => ['productcode', 'date', 'amount'],
                 ],
            ]);



            $dataProviderStatus = new ArrayDataProvider([
                'allModels' => $outStatus,
                'pagination' => [
                    'pageSize' => 10,
                 ],
                 'sort' => [
                    'attributes' => ['productcode', 'status'],
                 ],
            ]);

            
            return $this->render('index', [
                'dataProviderHistory' => $dataProviderHistory,
                'dataProviderStatus' => $dataProviderStatus
            ]);
        } else {
            $this->redirect(['site/login']);
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'login';
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

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    private function getData($payload) {
        $url = 'http://localhost:8082/api/v1/smp';
        $ch = curl_init( $url );
        # Setup request to send json via POST.
        
        $payload = json_encode($payload);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        # Return response instead of printing.
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    // private function getData($msisdn, $api = 'get_product_status') {
    //     $url = 'http://localhost:8082/api/v1/smp';
    //     $ch = curl_init( $url );
    //     # Setup request to send json via POST.
    //     $payload = [
    //         'userid' => 'mybids',
    //         'password' => 'SammyBird66',
    //         'transid' => date('ymdhis').rand(000,999),
    //         'operation' => $api,
    //         'msisdn' => $msisdn,
    //     ];
    //     $payload = json_encode($payload);
    //     curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
    //     curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    //     # Return response instead of printing.
    //     curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    //     # Send request.
    //     $result = curl_exec($ch);
    //     curl_close($ch);
    //     return $result;
    // }
}
