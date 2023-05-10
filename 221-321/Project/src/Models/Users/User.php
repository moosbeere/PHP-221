<?php
namespace Models\Users;
use Models\ActiveRecordEntity;


class User extends ActiveRecordEntity{
    private $id;
    private $nickname;
    private $email;
    private $isConfirmed;
    private $role;
    private $passwordHash;
    private $authToken;
    private $createdAt;

    public function getNickname(){
       return $this->nickname; 
    }
    
}