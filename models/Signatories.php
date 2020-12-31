<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Accounts;


/**
 * @SWG\Definition(
 *   definition="CreateSignatories",
 *   type="object",
 *   required={"user_id","account_id","type"},
 *   @SWG\Property(property="user_id", type="string"),
 *   @SWG\Property(property="account_id", type="string"),
  @SWG\Property(property="type", type="string")
 * )
 */

/**
 * @SWG\Definition(
 *   definition="UpdateSignatories",
 *   type="object",
 *   required={"user_id","account_id","type"},
 *   allOf={
 *       @SWG\Schema(ref="#/definitions/CreateNews"),
 *   }
 * )
 */

/**
 * @SWG\Definition(
 *   definition="Signatories",
 *   type="object",
 *   required={"user_id","account_id","type"},
 *   allOf={
 *       @SWG\Schema(ref="#/definitions/CreateSignatories"),
 *       @SWG\Schema(
 *           required={"id"},
 *           @SWG\Property(property="id", format="int64", type="integer")
 *       )
 *   }
 * )
 */


class Signatories extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%signatories}}';
    }

      public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className(),
        ]; 
    }
    public function rules()
    {
        return [
            [['user_id', 'account_id','type'], 'required'],
            [['type','status','created_by','created_at','updated_at'],'string', 'max' => 255],
            [['user_id', 'account_id'], 'integer']

        ];
    }

public function getAccount()
{
    return $this->hasOne(Accounts::className(), ['account_id' => 'account_id']);
    
}

}