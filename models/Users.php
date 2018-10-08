<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "is_users".
 *
 * @property string $id
 * @property string $login
 * @property string $password
 * @property string $created
 * @property string $updated
 * @property string $registration_date
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'is_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password', 'created', 'updated'], 'required'],
            [['created', 'updated', 'registration_date'], 'integer'],
            [['login', 'password', 'hash'], 'string', 'max' => 255],
            [['login'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'created' => 'Created',
            'updated' => 'Updated',
            'registration_date' => 'Registration Date',
        ];
    }
}
