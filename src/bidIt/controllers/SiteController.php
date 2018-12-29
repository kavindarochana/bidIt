<?php

namespace app\controllers;

use app\models\BidPackages;
use app\models\BidProduct;
use app\models\ContactForm;
use app\models\LoginForm;
use app\models\Subscriber;
use app\models\User;
use app\models\Wallet;
use app\models\BidTransaction;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\Response;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public $userObj = 0;
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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

    // public function beforeAction($action) {
    //     $this->enableCsrfValidation = false;
    //     return parent::beforeAction($action);
    // }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->authRequest();
        $user = $this->view->params['user'];
        $product = $this->view->params['products'];
        return $this->render('index', ['products' => $product, 'balance' => $user->bid_balance]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
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

    public function actionAbc()
    {

        $code = @$_POST['code'] = 1;
        $color = @$_POST['color'] = 2;

        // $lottery = TblLottery::find()
        // ->where(['code'=>$code])
        // ->one();

        $days = [
            "1" => "Monday",
            "2" => "Tuesday",
            "3" => "Wednesday",
            "4" => "Thursday",
            "5" => "Friday",
            "6" => "Saturday",
            "7" => "Sunday",
        ];

        // $dates = (array)json_decode($lottery->date_values);

        // $strDays = "";
        // for ($x = 0; $x < count($dates); $x++) {
        //     if($x == (count($dates)-1) ){
        //         $strDays .= $days[$dates[$x]];
        //     }else{
        //         $strDays .= $days[$dates[$x]].',';
        //     }
        // }

        echo '<div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                 <h4 style="font-size:25px" class="modal-title" id="myModalLabel">Buy $lottery->name</h4>
            </div>
            <div class="modal-body">
                <h5 class="modal-title" id="myModalLabel">How many tickets do you want to buy for a draw?</h5>

                <div class="c-content-panel">

                    <div class="buy-table-wrapper">
                        <label onclick="onAmountSelected(1)" class="radioLabelContainer">
                            <input type="radio" checked="checked" name="radioGroup1" style="opacity: 0">
                            <div class="checkmark buy-table">
                                <a href="javascript:void(0);">
                                    <h2 style="background:#12313" class="buy-table__header">Rs.20</h2>
                                    <h3 style="color:#123123" class="buy-table__price">1</h3>
                                </a>
                            </div>
                        </label>
                        <label onclick="onAmountSelected(2)" class="radioLabelContainer">
                            <input type="radio" name="radioGroup1" style="opacity: 0">
                            <div class="checkmark buy-table">
                                <a  href="javascript:void(0);">
                                    <h2 style="background:#123123"  class="buy-table__header">Rs.40</h2>
                                    <h3 style="color:#123123" class="buy-table__price">2</h3>
                                </a>
                            </div>
                        </label>
                        <label onclick="onAmountSelected(3)" class="radioLabelContainer">
                            <input type="radio" name="radioGroup1" style="opacity: 0">
                            <div class="checkmark buy-table">
                                <a  href="javascript:void(0);">
                                    <h2 style="background:#123123" class="buy-table__header">Rs.60</h2>
                                    <h3 style="color:#123123" class="buy-table__price">3</h3>
                                </a>
                            </div>
                        </label>
                        <label onclick="onAmountSelected(-1)" class="radioLabelContainer">
                            <input type="radio" name="radioGroup1" style="opacity: 0">
                            <div class="checkmark buy-table" style="height: 148px;vertical-align:top;width:98px;">
                                <a href="javascript:void(0);">
                                    <h2 style="background::#123123" class="buy-table__header" id="num_price">More</h2>
                                    <input onkeyup="onInptNumberPress()" class="input-number" id="num_input" type="number" value="4" min="0" max="100" style="margin-top: 8px;
                                    border: 3px solid:#123123;
                                    padding: 5px;
                                    border-radius: 6px;
                                    font-size: 21px;
                                    text-align: center;
                                    color: #12313;
                                    width: 90px;
                                    ">

                                </a>
                            </div>
                        </label>
                    </div>

                    <div class="input-group input-number-group" style="display:none;">
                        <div class="input-group-button" id="num_dec" >
                            <span class="input-number-decrement" >-</span>
                        </div>
                        <input onclick="onInptNumberPress()" class="input-number" id="num_input1" type="number" value="0" min="0" max="100" maxlength="2">
                        <div class="input-group-button" id="num_inc" >
                            <span class="input-number-increment" >+</span>
                        </div>
                    </div>

                </div>
                <p style="color:#5c6873; text-align:center; font-size:16px;">Draws available on 1wq</p>
                <p style="color:#6d46ca; text-align:center; font-size:11px;">* Rs.4 telecom fee + tax will apply for each ticket</p>
            </div>
            <div class="modal-footer">
                <button style="border-color:sas; color:sa"   onclick="submitBuyticket()" type="button" class="btn c-buy-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase">Buy</button>
            </div>
        </div>
        <input type="hidden" id="amount_selection" name="amount_selection" value="1" />
        <input type="hidden" id="ticket_code" name="ticket_code" value="xz" />
        <input type="hidden" id="ticket_name" name="ticket_code" value="as" />
        <!-- /.modal-content -->
    </div>';
        die;
    }

    public function actionCreate()
    {

        print_r(Yii::$app->request->post());
        echo 'aaaa';
        // $model = new BidProduct();

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {

        //     return $this->redirect(['index']);
        // } else {
        //     return $this->renderAjax('create', [
        //         'model' => $model,
        //     ]);
        // }
    }

    public function actionUnsubscribe()
    {
        $this->authRequest();
        $subscriber = Subscriber::findOne(['id' => $_GET['uid'], 'msisdn' => $_GET['msisdn']]);
        $subscriber->status = 0;

        if ($subscriber->save()) {
            $this->authRequest();
            $msg = 'You have successfully unsubscribed from BidIt.';
        }
        return $this->render('index', ['products' => $this->view->params['products'], 'message' => ['success', $msg], 'balance' => $this->view->params['user']->bid_balance]);
    }

    public function actionSubscribe()
    {
        $this->authRequest();
        $subscriber = Subscriber::findOne(['id' => $_GET['uid'], 'msisdn' => $_GET['msisdn']]);
        $subscriber->status = 1;

        if ($subscriber->save()) {
            $this->authRequest();
            $msg = 'You have been successfully subscribed for BidIt.';
        }
        $user = $this->view->params['user'];
        return $this->render('index', ['products' => $this->view->params['products'], 'message' => ['success', $msg], 'balance' => $this->view->params['user']->bid_balance]);
    }

    private function authRequest($msidn = null)
    {
        $msisdn = @$_REQUEST['msisdn'] == null ? @$this->view->params['user']->cust->msisdn : $_REQUEST['msisdn'];

        if ($subscriber = Subscriber::findOne(['msisdn' => @$msisdn])) {
            $user = Wallet::findOne(['cust_id' => $subscriber->id]);
            $product = BidProduct::findOne(1);
            $packages = BidPackages::find(['status = 1'])->all();
            $this->view->params['user'] = $user;
            $this->view->params['products'] = $product;
            $this->view->params['packs'] = $packages;
            return $user;
        }

        throw new ForbiddenHttpException(Yii::t('yii', 'You are not allowed to perform this action.'));

    }

    public function actionPurchase()
    {
        $user = $this->authRequest();
        $msg = ['error', 'Your request can not be process right now.'];
        $pack = BidPackages::findOne(['id' => @$_REQUEST['pack'], 'status' => 1]);
        $wallet = $this->view->params['user'];

        $pay = $this->payAuth(@$_REQUEST['msisdn'], $pack->price);

        if (@$pay[0] == 'alert') {
            $msg = $pay;
            audit_log($_REQUEST['msisdn'], 'pack_purchase', 'ok', " Pack purchased in the que -$pack->name,price-$pack->price,bid-$pack->bids");

        }

        if (@$pay[0] == 'error') {
            $msg = $pay;
            audit_log($_REQUEST['msisdn'], 'pack_purchase', 'ok', " Pack purchased in the que -$pack->name,price-$pack->price,bid-$pack->bids");

        }

        if (@$pay[0] == 'success') {

            $q = "UPDATE tbl_bid_wallet set bid_balance = bid_balance + $pack->bids WHERE id = $wallet->id";


            try {
                $a = Yii::$app->db->createCommand($q)->execute();
                $t = new BidTransaction();
                $t->wallet_id = (string)$wallet->id;
                $t->customer_id = (string)$wallet->cust->id;
                $t->msisdn = $wallet->cust->msisdn;
                $t->bid_value = $pack->bids;
                $t->product_id = (string)$pack->id;
                $t->type = 1;
                $t->balance = $wallet->bid_balance + $pack->bids;

                if(!$t->save()){
                   // print_r($t->getErrors());
                }

                audit_log($_REQUEST['msisdn'], 'pack_purchase', 'ok', " Pack purchased-$pack->name,price-$pack->price,bid-$pack->bids");
                $msg = ['success', 'You have successfully purchased ' . $pack->name . ' package.'];
            } catch (Exception $e) {
                audit_log($_REQUEST['msisdn'], 'pack_purchase', 'not_ok', "db error Pack - $pack->name");
            }
            query_log($q);
        }

        Yii::$app->cache->set($wallet->cust->id . 'notice_message', json_encode($msg), 2);

        return $this->render('index', ['products' => $this->view->params['products'], 'message' => ['success', $msg], 'balance' => $this->view->params['user']->bid_balance]);

    }

    private function payAuth($msisdn, $price)
    {
        $val = Yii::$app->cache->get($msisdn . 'pay');

        if ($val === false) {
            Yii::$app->cache->set($msisdn . 'pay', true, 10);
            //ToDO payment api
            $api = true;
            if ($api) {
                return ['success'];
            } else {
                return ['error', 'Your request can not be process right now.'];
            }
        }

        return ['alert', 'Your another purchase request already in the queue.'];
    }

}
