<?php

class Users extends Model {

    const TABLE_NAME = 'user';

    public function __construct() {
        parent::__construct(Users::TABLE_NAME);
    }

    public function insertUser($data = array()) {
        if (is_array($data) && count($data) > 0) {
            return $this->insert($data);
        }
        return -1;
    }

    public function selectAllUsers() {
        return $this->select(array('user_id', 'user_name', 'user_email'), array());
    }

    public function selectUser($id) {
        return $this->select(array('user_id', 'user_name', 'user_email'), array('user_id' => $id));
    }

    public function deleteUser($id) {
        return $this->delete(array('user_id' => $id));
    }

    public function selectUserEmail($email) {
        return $this->select(array(), array('user_email' => $email));
    }

    public function updateUser($data, $where, $cond) {
        return $this->update($data, $where, $cond);
    }

    public function getUserByEmailAndPassw($email, $senha) {
        return $this->select(array('user_email', 'user_name'), array('user_email'=>$email, 'user_passw'=>$senha), 'AND');
    }

}
