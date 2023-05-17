<?php
namespace Models\Users;
use Models\ActiveRecordEntity;


class User extends ActiveRecordEntity{
    protected $nickname;
    protected $email;
    protected $isConfirmed;
    protected $role;
    protected $passwordHash;
    protected $authToken;
    protected $createdAt;

    public function getNickname(){
       return $this->nickname; 
    }
    public static function getTableName(): string
    {
        return 'users';
    }   
}