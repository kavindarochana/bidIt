<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use Yii;


/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CoreController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    // public function actionIndex($message = 'hello world')
    // {
    //     echo $message . "\n";

    //     return ExitCode::OK;
    // }

    public function actionUpdateProductStatus()
    {
        try {
            $q = 'UPDATE tbl_bid_product 
                SET 

                .

                2
-                    `status` = CASE
                        WHEN `start_date` <=NOW() AND `end_date` > NOW() THEN 1
                        WHEN `start_date` <=NOW() AND `end_date` <= NOW() THEN 2
                    END
                WHERE (`status` = 0 OR `status` = 1)';

            //query_log('cron_update_product_status', $q);

            $res = Yii::$app->db->createCommand($q)->execute();
            print_r($res);
            
        } catch(Exception $e) {
            print_r($e);
        }
    }
}
