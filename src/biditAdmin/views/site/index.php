<?php

/* @var $this yii\web\View */
use yii\grid\GridView;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    

    <div class="body-content">

        <div class="row">
            <div class="body-content">
                <div class="row">
                    <div class="col-lg-4">
                        <h4 style = "color:green">Subscriber Status</h4>
                        <?=GridView::widget([
                            'dataProvider' => $dataProviderStatus,
                            'columns' => [
                                'productcode',
                                'status'
                            ],
                        ]);?>
                    </div>
            </div>
           
        <div class="row">
            <div class="col-lg-6">
            <h4 style="color:green">Charging History</h4>
            <form action="#" method="get">
           <input placeholder="Msisdn" name="q"> <input type="date" name="fromdate"/> - <input type="date" name="todate"/>
           <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
           </form>
            <?=GridView::widget([
                'dataProvider' => $dataProviderHistory,
                'columns' => [
                    'productcode',
                    'date',
                    'amount'
                ],
            ]);?>
            </div>
        </div>

    </div>
        </div>

    </div>
</div>
