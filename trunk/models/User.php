<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property integer $role
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $passwordreset
 * @property integer $gender
 * @property integer $position
 * @property string $first_name
 * @property string $last_name
 * @property string $birthday
 * @property string $phone
 * @property string $mobile
 * @property string $fax
 * @property string $created
 * @property string $updated
 * @property string $picture
 * @property integer $status
 * @property string $verify_code
 * @property string $zip
 * @property string $city
 * @property string $address
 * @property string $website
 * @property string $mail_userid
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'first_name', 'last_name'], 'required'],
            [['email'], 'unique'],
            [['id', 'role', 'gender', 'position', 'status'], 'integer'],
            [['birthday', 'created', 'updated'], 'safe'],
            [['address'], 'string'],
            [['username', 'password', 'email'], 'string', 'max' => 128],
            [['passwordreset'], 'string', 'max' => 150],
            [['first_name', 'last_name', 'picture', 'city'], 'string', 'max' => 255],
            [['phone', 'mobile', 'fax'], 'string', 'max' => 20],
            [['verify_code'], 'string', 'max' => 64],
            [['mail_userid'], 'string', 'max' => 127],
            [['zip', 'website'], 'string', 'max' => 100],
            ['passwordrepeat', 'required', 'on' => 'register, changePassword'],
            [['password', 'passwordrepeat'], 'string', 'length' => [6, 70], 'tooShort' => Yii::t('app', 'Password Too Short'), 'tooLong' => Yii::t('app', 'Password Too Long')],
            [['passwordrepeat'], 'compare', 'compareAttribute'=>'password', 'operator'=>'==', 'on' => 'register, changePassword'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'role' => Yii::t('app', 'Role'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'email' => Yii::t('app', 'Email'),
            'passwordreset' => Yii::t('app', 'Passwordreset'),
            'gender' => Yii::t('app', 'Gender'),
            'position' => Yii::t('app', 'Position'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'birthday' => Yii::t('app', 'Birthday'),
            'phone' => Yii::t('app', 'Phone'),
            'mobile' => Yii::t('app', 'Mobile'),
            'fax' => Yii::t('app', 'Fax'),
            'created' => Yii::t('app', 'Created'),
            'updated' => Yii::t('app', 'Updated'),
            'picture' => Yii::t('app', 'Picture'),
            'status' => Yii::t('app', 'Status'),
            'verify_code' => Yii::t('app', 'Verify Code'),
            'zip' => Yii::t('app', 'Zip'),
            'city' => Yii::t('app', 'City'),
            'address' => Yii::t('app', 'Address'),
            'website' => Yii::t('app', 'Website'),
            'mail_userid' => Yii::t('app', 'Mail Userid'),
        ];
    }
    
    const ROLE_ADMIN = 1;
    const ROLE_USER = 2;
    public $fullName;
    public $passwordrepeat;
    public $authKey;
    public $accessToken;

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    /**
     * Generates the password hash.
     * @param string password
     * @return string hash
     */
    public function hashPassword($password)
    {
        return Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generate a random readable password
     */
    public function generatePassword($password)
    {
        return Yii::$app->security->generatePasswordHash($password);
    }
    
    public function isAdmin()
    {
        return $this->role == self::ROLE_ADMIN;
    }
    
    public function getFullName()
    {
        return $this->fullName = trim($this->first_name . ' ' . $this->last_name);
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function beforeValidate()
    {
        if (!$this->username)
            $this->username = $this->email;
        if($this->birthday!=NULL)
            $this->birthday = date('Y-m-d', strtotime($this->birthday));
        return parent::beforeValidate();
    }

    public function afterValidate()
    {
        if ($this->isNewRecord)
            $this->password = $this->hashPassword($this->password);

        return parent::afterValidate();
    }
    
    public function getEmailAlias(){
        return $this->mail_userid.'@mail.pca.com';
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return isset(self::$id) ? new static(self::$id) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $model = User::find()->where(['accessToken' => $token])->one();
        if($model != NULL)
            return $model;
        return NULL;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $model = User::find()->where(['username' => $username])->one();
        if($model != NULL)
            return $model;
        return NULL;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
}
