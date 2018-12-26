<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_bid_wallet".
 *
 * @property int $id
 * @property int $cust_id
 * @property int $bid_balance
 * @property string $expire
 * @property string $create_ts
 * @property string $update_ts
 *
 * @property Transaction[] $tblBidBidTransactions
 * @property Subscriber $cust
 */
class Wallet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_bid_wallet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cust_id', 'bid_balance', 'update_ts'], 'required'],
            [['cust_id', 'bid_balance'], 'integer'],
            [['expire', 'create_ts', 'update_ts'], 'safe'],
            [['cust_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblBidSubscriber::className(), 'targetAttribute' => ['cust_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cust_id' => 'Cust ID',
            'bid_balance' => 'Bid Balance',
            'expire' => 'Expire',
            'create_ts' => 'Create Ts',
            'update_ts' => 'Update Ts',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBidBidTransactions()
    {
        return $this->hasMany(Transaction::className(), ['wallet_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCust()
    {
        return $this->hasOne(Subscriber::className(), ['id' => 'cust_id']);
    }
}
