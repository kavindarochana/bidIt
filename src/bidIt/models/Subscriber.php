<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_bid_subscriber".
 *
 * @property int $id
 * @property string $msisdn
 * @property string $name
 * @property int $status
 * @property string $create_ts
 * @property string $update_ts
 *
 * @property TblBidBidTransaction[] $tblBidBidTransactions
 * @property TblBidWallet[] $tblBidWallets
 */
class Subscriber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_bid_subscriber';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['msisdn', 'status'], 'required'],
            [['status'], 'integer'],
            [['create_ts', 'update_ts'], 'safe'],
            [['msisdn'], 'string', 'max' => 15],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'msisdn' => 'Msisdn',
            'name' => 'Name',
            'status' => 'Status',
            'create_ts' => 'Create Ts',
            'update_ts' => 'Update Ts',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBidBidTransactions()
    {
        return $this->hasMany(TblBidBidTransaction::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBidWallets()
    {
        return $this->hasMany(TblBidWallet::className(), ['cust_id' => 'id']);
    }
}
