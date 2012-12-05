<?php

class UserIdentity extends CUserIdentity {

    private $_id;

    public function authenticate() {
        $username = strtolower($this->username);
        $user = Usuarios::model()->find('LOWER(usuario)=?', array($username));
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if (!$user->validatePassword($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $user->idUsuario;
            $this->username = $user->usuario;
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    public function getId() {
        return $this->_id;
    }

}