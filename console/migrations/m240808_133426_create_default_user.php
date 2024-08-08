<?php

use yii\db\Migration;
use common\models\User;

/**
 * Class m240808_133426_create_default_user
 */
class m240808_133426_create_default_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $transaction = $this->getDb()->beginTransaction();
        $user = \Yii::createObject([
            'class'    => User::className(),
            'scenario' => 'create',
            'email'    => 'admin',
            'username' => 'admin@example.com',
            'password' => 'Qwerty123',
            'auth_key' => 'qwerty123',
        ]);
        if (!$user->insert(false)) {
            $transaction->rollBack();
            return false;
        }
        $transaction->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        User::deleteAll(['username' => 'admin']);
    }
}
