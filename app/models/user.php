<?php

namespace app\models;

use \sys\core\Model as Model;

class User extends Model {
    public function register($login, $passw, $email, $regdate, $role_id, $status_id, $confirm){
        $sql = 'insert into users (login, passw, email, regdate, role_id, status_id, confirm) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?, ?)';
        $params = [$login, $passw, $email, $regdate, $role_id, $status_id, $confirm];
        $this->execute_dml_query($sql, $params);
    }

    // public function login($login, $passw){
    //     $sql = 'insert into users (login, passw) ';
    //     $sql .= 'values (?, ?, ?, ?, ?, ?, ?)';
    //     $params = [$login, $passw, $email, $regdate, $role_id, $status_id, $confirm];
    //     $this->execute_dml_query($sql, $params);
    // }

    public function check_login($login){
        $sql = 'select login from users where login=?';
        $params = [$login];
        $result = $this->execute_select_query($sql, $params);

        if(count($result) === 0){
            return true;
        }
        else{
            return false;
        }
    }
}