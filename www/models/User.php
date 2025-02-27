<?php

namespace app\models;

use Yii;
use app\models\Users;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $profile;

    public static function get_user_id() {
        $p = Yii::$app->getUser()->getIdentity()->profile;
        $a = Users::find()
            ->where( [ "social_name" => $p["service"], "social_id" => $p["id"] ] )
            ->one();
        return $a->id;
    }

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

    /**
     * @inheritdoc
     */
    public static function findIdentity( $id ) {
        if( Yii::$app->getSession()->has( 'user-' . $id ) ) {
            return new self( Yii::$app->getSession()->get( 'user-' . $id ) );
        }
        else {
            return isset( self::$users[$id] ) ? new self( self::$users[$id] ) : null;
        }
    }

    public static function findByEAuth( $service ) {
        if( !$service->getIsAuthenticated() ) {
            throw new ErrorException( 'EAuth user should be authenticated before creating identity.' );
        }

        $id = $service->getServiceName() . '-' . $service->getId();
        $attributes = array(
            'id' => $id,
            'username' => $service->getAttribute( 'name' ),
            'authKey' => md5( $id ),
            'profile' => $service->getAttributes(),
        );
        $attributes['profile']['service'] = $service->getServiceName();
        Yii::$app->getSession()->set( 'user-' . $id, $attributes );
        return new self( $attributes );
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken( $token, $type = null ) {
        foreach( self::$users as $user ) {
            if( $user['accessToken'] === $token ) {
                return new static( $user );
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string $username
     * @return static|null
     */
    public static function findByUsername( $username ) {
        foreach( self::$users as $user ) {
            if( strcasecmp( $user['username'], $username ) === 0 ) {
                return new static( $user );
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey() {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey( $authKey ) {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword( $password ) {
        return $this->password === $password;
    }
}
