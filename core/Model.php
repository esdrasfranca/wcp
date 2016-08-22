<?php

class Model {

    protected $dao;
    private $tableName;

    public function __construct($tableName) {
        $this->dao = new DAO();
        $this->tableName = $tableName;
    }

    protected function insert($data = array()) {
        if (is_array($data) && count($data) > 0) {
            $sql = $this->dao->prepare_sql->insert($this->tableName, $data);
            return $this->dao->insert($sql);
        }
        return -1;
    }

    
    /**
     * Retorna todos os dados de uma tabela.
     * @return mixed Retorna um array com os dados da consulta ou FALSE caso a tabela esteja vazia.
     */
    protected function selectAll() {
        $sql = $this->dao->prepare_sql->select($this->tableName);
        return $this->dao->query($sql);
    }

    protected function select($columns = array(), $where = array(), $cond = '') {
        $sql = $this->dao->prepare_sql->select($this->tableName, $columns, $where, $cond);
        return $this->dao->query($sql);
    }

    protected function delete($data = array()) {
        $sql = $this->dao->prepare_sql->delete($this->tableName, $data);
        return $this->dao->delete($sql);
    }

    protected function update($data, $where, $cond = 'AND') {
        $sql = $this->dao->prepare_sql->update($this->tableName, $data, $where, $cond);
        return $this->dao->update($sql);
    }

}
