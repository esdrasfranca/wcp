<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAO
 *
 * @author Esdras
 */
class DAO {

    private $connection;
    public $prepare_sql;

    public function __construct() {
        $this->connection = Connection::getInstance();
        $this->prepare_sql = new PrepareSQL();
    }

    /**
     * Executa uma instrução sql.
     * @param string $sql Instrução sql a ser executada.
     * @return mixed Retorna um array caso a instrução sql retorno dados do banco ou FALSE caso nennhum dado reja retornado.
     */
    public function query($sql) {
        echo 'DAO::query: sql = '.$sql;
        if (!empty($sql)) {
            try {
                $result = $this->connection->query($sql);
                if ($result && $result->rowCount() > 0) {
                    return $result->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return FALSE;
                }
            } catch (PDOException $exc) {
                echo $exc->getTraceAsString();
            }
        }
    }

    /**
     * Executa um select * en uma dada tabela no banco de dados.
     * @param string $table Nome da tabela a ser consultada.
     * @return mixed Retorna um array caso a consulta retorne dados ou FALSE caso a tabela esteja vazia.
     */
    public function selectAll($table) {
        echo 'DAO::selectAll: sql = '.$sql;
        if (!empty($table)) {
            try {
                $sql = 'SELECT * FROM ' . $table;
                $result = $this->connection->query($sql);

                if ($result && $result->rowCount() > 0) {
                    return $result->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    return FALSE;
                }
            } catch (PDOException $exc) {
                echo $exc->getTraceAsString();
            }
        }
    }

    /**
     * Executa uma instrução INSERT no banco de dados.
     * @param string $sql Estrutura SQL a ser realizada no banco.
     * @return bool TRUE caso a execução seja bem sucedida. FALSE caso contrário. 
     * NULL se a string passada por parâmetro estiver vazia.
     */
    public function insert($sql) {
        echo 'DAO::insert: sql = '.$sql;
        if (!empty($sql)) {
            try {
                $result = $this->connection->exec($sql);
                if ($result > 0) {
                    return $this->connection->lastInsertId();
                } else {
                    return FALSE;
                }
            } catch (PDOException $ex) {
                echo $ex->getTraceAsString();
            }
        }
        return NULL;
    }

    public function update($sql) {
        echo 'DAO::update: sql = '.$sql;
        if (!empty($sql)) {
            try {
                $result = $this->connection->exec($sql);
                if ($result > 0) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            } catch (PDOException $exc) {
                echo $exc->getTraceAsString();
            }
        }
    }

    public function delete($sql) {
        echo 'DAO::delete: sql = '.$sql;
        if (!empty($sql)) {
            try {
                if ($this->connection->exec($sql)) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            } catch (PDOException $exc) {
                echo $exc->getTraceAsString();
            }
        }
    }

}
