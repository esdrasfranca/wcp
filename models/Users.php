<?php

class Users extends Model {

    const TABLE_NAME = 'user';

    public function __construct() {
        parent::__construct();
    }

    public function insertUser($data = array()) {
        if (is_array($data) && count($data) > 0) {
            $sql = $this->dao->prepare_sql->insert(Users::TABLE_NAME, $data);
            return $this->dao->insert($sql);
        }
        return -1;
    }

    public function selectAllUsers() {
        $sql = $this->dao->prepare_sql->select(Users::TABLE_NAME);
        return $this->dao->query($sql);
    }

    public function deleteUser($id) {
        $sql = $this->dao->prepare_sql->delete(Users::TABLE_NAME, array(
            'user_id' => $id
        ));
        return $this->dao->delete($sql);
    }

    public function selectUserEmail($email) {
        $sql = $this->dao->prepare_sql->select(Users::TABLE_NAME, array(), array(
            'user_email' => $email
        ));
        return $this->dao->query($sql);
    }

}
